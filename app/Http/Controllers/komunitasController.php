<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class komunitasController extends Controller
{
    // menampilkan
    public function index()
    {
    	// mengambil data dari table komunitasPertanyaan
    	$data = DB::table('komunitasPertanyaan')->get();
 
    	// mengirim data ke view index
    	return view('komunitas/index',['data' => $data]);
 
    }
}
