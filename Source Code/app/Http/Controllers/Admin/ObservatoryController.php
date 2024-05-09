<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Http\Requests\Observatory\StoreRequest;
use App\Http\Requests\Observatory\UpdateRequest;

class ObservatoryController extends Controller
{
    public function index(){
        $data = DB::table('observatories')->orderBy('id')->get();
        return view('admin.observatory.index',['AEs'=>$data]);
    }

    public function create(){
        $data = DB::table('astronomicalentities')->get();
        return view('admin.observatory.create',['AEs'=>$data]);
    }

    public function store(StoreRequest $request){
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $data['image'] = $imageName;
        DB::table('observatories')->insert($data);
        return redirect()->route('admin.observatory.index')->with('success','Create observatory successfully');
    }

    public function edit($id){
        $data=DB::table('observatories')->where('id',$id)->first();
        $data2 = DB::table('astronomicalentities')->get();
        return view('admin.observatory.edit',['observatory'=>$data,'AEs'=>$data2]);
    }

    public function update(UpdateRequest $request, $id){
        $data = $request->except('_token');
        $data['updated_at']  = new \DateTime();
        if (!empty($request->image)) {
            $data_old = DB::table('observatories')->where('id', $id)->first();
            $url_image_old_path = public_path('images/'. $data_old->image);
            if (file_exists($url_image_old_path)) {
                unlink($url_image_old_path);
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }
        DB::table('observatories')->where('id',$id)->update($data);
        return redirect()->route('admin.observatory.index')->with('success','Edit observatory successfully');
    }

    public function delete($id){
        $data_delete = DB::table('observatories')->where('id',$id)->first();
        if (!empty($data_delete)){
            $url_image_delete = public_path('images/'. $data_delete->image);
            if(file_exists($url_image_delete)) unlink($url_image_delete);
        }
        DB::table('observatories')->where('id', '=', $id)->delete();
        return redirect()->route('admin.observatory.index')->with('success', 'Delete observatory successfully');
    }
}
