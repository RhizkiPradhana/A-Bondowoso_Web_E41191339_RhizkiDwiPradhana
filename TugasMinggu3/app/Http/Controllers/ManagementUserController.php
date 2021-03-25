<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller

{
    public function index()
    {
       // return "Hallo ini adalah method index, dalam controller ManagementUser.";
       return "method ini nantinya akan digunakan untuk mengambil semua data user ";
    }
    public function create()
    {
        return "method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user baru";
    }
    public function store()
    {
        return "method ini nantinya akan digunakan untuk menciptakan data user baru";
    }
    public function show($id)
    {
        return "method ini nantinya akan digunakan untuk mengambil satu data user dengan id" .$id;
    }
    public function edit($id)
    {
        return "method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id" .$id;
    }
    public function update(Request $request, $id)
    {
        return "method ini nantinya akan digunakan untuk mengubah data user dengan id" .$id;
    } 
    public function destroy($id)
    {
        return "method ini nantinya akan digunakan untuk menghapus data user dengan id" .$id;
    }
}
