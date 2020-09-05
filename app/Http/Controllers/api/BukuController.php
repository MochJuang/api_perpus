<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BukuController extends Controller
{
    //Judul

    public function add_judul(Request $request)
    {
        $data = $request->validate(['judul' => 'required','pengarang' => 'required']);
        \App\Judul::create($data);
        return true;
    }
    public function delete_judul($id)
    {
        \App\Judul::where(['id_judul'=> $id])->delete();
        return true;
    }
    public function edit_judul(Request $request,$id)
    {
        $data = $request->validate(['judul' => 'required','pengarang' => 'required']);
        \App\Judul::where('id_judul' ,$id)->update($data);
        return true;
    }
    public function show_judul_one($id)
    {
        return \App\Judul::where(['id_judul'=> $id])->first();
    }
    public function show_judul()
    {
        $judul = \App\Judul::all();
        return $judul;
    }

    // Buku 
    public function add_buku($id_judul)
    {
        $kode = substr( str_shuffle('1234567890ASADFSKJHASNCM') ,0,5);
        $data = ['kode_buku' => $kode, 'id_judul' => $id_judul];
        \App\Book::create($data);
        return $data;
    }
    public function delete_buku($id)
    {
        \App\Book::where(['id_buku'=> $id])->delete();
        return true;
    }
    public function show_buku_where($id_judul)
    {
        
        return \App\Book::where(['id_judul' => $id_judul])->get();
    }

    //pinjam buku
    public function pinjam_buku($id_buku,$id_member)
    {
        $data = [
            'id_buku'       => $id_buku,
            'id_member'     => $id_member,
            'tgl_pinjam'    => date('Y-m-d'),
            'tgl_kembali'   => date('Y-m-d',strtotime('+3 days')),
            'is_back'       => 0
        ];
        return \App\Borrow::create($data);
    }

    public function show_pinjam()
    {
        $data =  DB::table('borrows')->select('borrows.id','judul','kode_buku','nama','tgl_pinjam','tgl_kembali')
                                    ->join('books','borrows.id_buku','=','books.id_buku')
                                    ->join('members','borrows.id_member','=','members.id_member')
                                    ->join('juduls','juduls.id_judul','=','books.id_judul')
                                    ->where(['is_back' => 0])
                                    ->get();
        return $data;
    }
    public function back($id)
    {
        return \App\Borrow::where(['id' => $id])->first()->update(['is_back' => 1] );
    }
}
