<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Validator;

class PagesAddController extends Controller
{
    public function execute(Request $request){
        if($request->isMethod('GET')){
            if(view()->exists('admin.pages_add')){
                return view('admin.pages_add',['title'=>"Новая страница"]);
            }
            abort(404);
        }else if($request->isMethod('POST')){
            $input = $request->except('_token');
            $masseges = [
                'required'=>'Поле :attribute обазаельно к заполнению',
                'unique'=>'Поле :attribute должно быть уникальным'
            ];
            $validator = Validator::make($input,[
                'name'=>'required|max:255',
                'alias'=>'required|unique:pages,alias|max:255',
                'text'=>'required'
            ],$masseges);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
            if($request->hasFile('images')) {
                $file = $request->file('images');
                $input['images'] = $file->getClientOriginalName();
                $file->move(public_path().'/img',$input['images']);
            }
            $page= new Page();
           // $page->unguard();-- снимает ограниченичя на заполнение всех полей в БД то же что и protected $fillable = ['name','text','alias','images'];
            $page->fill($input);
            if ($page->save()){
                return redirect('admin')->with('status','Страница добавлена');
            }
        }
    }
}
