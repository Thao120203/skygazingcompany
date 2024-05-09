<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Http\Requests\News\StoreRequest;
use App\Http\Requests\News\UpdateRequest;

class NewsController extends Controller
{
    public function index(){
        $result=DB::table('news')->orderBy('id')->get();
        return view('admin.news.index',['AEs'=>$result]);
    }

    public function create(){
        $result=DB::table('astronomicalentities')->get();
        return view('admin.news.create',['AEs'=>$result]);

    }

    public function store(StoreRequest $request){
        $data= $request->except('_token');
        $data['created_at']=new \DateTime();

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imageName);
        $data['image']=$imageName;

        DB::table('news')->insert($data);
        return redirect()->route('admin.news.index')->with('success','Create news successfully');
    }

    public function edit($id){
        $news=DB::table('news')->where('id',$id)->first();
        $data2 = DB::table('astronomicalentities')->get();
        return view('admin.news.edit',['id'=> $id , 'news'=> $news, 'AEs'=>$data2]);
    }

    public function update(UpdateRequest $request,$id){
        $data=$request->except('_token','image');
        $data['created_at']=new \DateTime(); 
        if (!empty($request->image)) {
            $data_old = DB::table('news')->where('id', $id)->first();
            $url_image_old_path = public_path('images/'. $data_old->image);
            if (file_exists($url_image_old_path)) {
                unlink($url_image_old_path);
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }
        DB::table('news')->where('id',$id)->update($data);
        return redirect()->route('admin.news.index')->with('success', 'Edit news successfully');
    }

    public function delete($id){
        $data_delete = DB::table('news')->where('id',$id)->first();
        if (!empty($data_delete)){
            $url_image_delete = public_path('images/'. $data_delete->image);
            if(file_exists($url_image_delete)) unlink($url_image_delete);
        }
        DB::table('news')->where('id', '=', $id)->delete();
        return redirect()->route('admin.news.index')->with('success', 'Delete news successfully');
    }
}
