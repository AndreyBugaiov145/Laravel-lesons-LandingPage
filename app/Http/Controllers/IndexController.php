<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\People;
use App\Partfolio;
use App\Service;
use DB;
use Mail;


class IndexController extends Controller
{
    public function execute(Request $request)
    {
        if($request->isMethod('GET')){
            $pages = Page::all();
            $peoples = People::take(3)->get();
            $serveces=Service::where('id','<',20)->get();
            $partfolios= Partfolio::get(['name','filter','images']);
            $tags = DB::table('partfolios')->distinct()->pluck('filter');

            $menu=[];
            foreach ($pages as $page){
                $item=['title'=>$page->name,'alias'=>$page->alias];
                array_push($menu,$item);
            }
            $item=['title'=>'Service','alias'=>'service'];
            array_push($menu,$item);
            $item=['title'=>'Portfolio','alias'=>'Portfolio'];
            array_push($menu,$item);
            $item=['title'=>'Team','alias'=>'team'];
            array_push($menu,$item);
            $item=['title'=>'Contact','alias'=>'contact'];
            array_push($menu,$item);

            return view('site.index',['menu'=>$menu,'pages'=>$pages,' '=>$peoples,'serveces'=>$serveces,'partfolios'=>$partfolios,'tags'=>$tags]);
        }else{
            $massages=[
                'required'=>'Поле :attribute обязательно к заполнению',
                'email'=>'email не коректный'
            ];
            $this->validate($request,[
                'name'=>'required|max:255',
                'email'=>'required|email',
                'text'=>'required'
            ],$massages);
            $data = $request->all();
            $result =Mail::send('site.email',['data'=>$data],function ($message) use($data){
                $mail_admin=env('MAIL_ADMIN');
                $message->from($data['email'],$data['name']);
                $message->to($mail_admin)->subject('test');;
            });
            if($result){
                return redirect()->route('home')->with('status','Email is send');
            }else {
                return redirect()->route('home')->with('status','Email not send');
            }


        }

    }
}
