<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Validator;

class PagesEditController extends Controller
{
    public function execute(Request $request,Page $page){
        if($request->isMethod('GET')) {
            $old = $page->toArray();

            if (view()->exists('admin.pages_edit')) {

                $data = [
                    'title' => 'Редактирование страницы' . $old['name'],
                    'old' => $old
                ];
                //dd($old);
                return view('admin.pages_edit', $data);
            }
        }else if($request->isMethod('POST')){
            $input = $request->except('_token');
            $masseges = [
                'required'=>'Поле :attribute обазаельно к заполнению',
                'unique'=>'Поле :attribute должно быть уникальным'
            ];
            $validator = Validator::make($input,[
                'name'=>'required|max:255',
                'alias'=>'required|unique:pages,alias,'.$input['id'].'|max:255',
                'text'=>'required'
            ],$masseges);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
            if ($request->hasFile('images')){
                $file = $request->file('images');
                $input['images'] = $file->getClientOriginalName();
                $file->move(public_path().'/img',$input['images']);
            }else{
                $input['images'] = $input['old_images'];
            }
            unset($input['old_images']);
            $page->fill($input);
            if($page->save()){
                return redirect()->route('pages')->with('status','Страница обновлена');
            }
        } else if($request->isMethod('DELETE')) {
            $page->delete();
            return redirect()->route('pages')->with('status','Страница удалена');
        }
    }
}
