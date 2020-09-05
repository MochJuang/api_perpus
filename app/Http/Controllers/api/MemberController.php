<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Kelas;
use Illuminate\Support\Facade\DB;

class MemberController extends Controller
{
    public function add_class(Request $request)
    {
        $data = $request->validate(['kelas' => 'required','wali_kelas' => 'required']);
        Kelas::create($data);
        return true;
    }
    public function delete_class($id)
    {
        Kelas::where(['id_kelas'=> $id])->delete();
        return true;
    }
    public function edit_class(Request $request,$id)
    {
        $data = $request->validate(['kelas' => 'required','wali_kelas' => 'required']);
        $data = Kelas::where(['id_kelas' => $id])->update($data);
        return true;
    }
    public function show_class()
    {
        return Kelas::all();
    }
    public function show_class_one($id)
    {
        return Kelas::where(['id_kelas'=> $id])->first();
    }
    
    // Member
    public function add_member(Request $request)
    {
        $data = $request->validate(['nama' => 'required','id_kelas' => 'required']);
        \App\Member::create($data);
        return true;
    }
    public function delete_member($id)
    {
        \App\Member::where(['id_member'=> $id])->delete();
        return true;
    }
    public function edit_member(Request $request,$id)
    {
        $data = $request->validate(['nama' => 'required','id_kelas' => 'required']);
        \App\Member::where('id_member' ,$id)->update($data);
        return true;
    }
    public function show_member()
    {
        return \App\Member::all();
    }
    public function show_member_class($id)
    {
        return \App\Member::where(['id_kelas'=> $id])->first();
    }
    public function show_member_one($id)
    {
        return \App\Member::where(['id_member'=> $id])->first();
    }
}
