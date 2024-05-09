<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class ContactController extends Controller
{
    public function index(){
        $data= DB::table('contacts')->get();
        return view('admin.contact.index',['contacts'=>$data]);
    }

    public function delete($id){
        DB::table('contacts')->where('id',$id)->delete();
        return redirect()->route('admin.contact.index')->with('success','Delete contact successfully ');
    }
}
