<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use App\pemesanan;
use App\User;

class PemesananController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$detail = \App\pemesanan::all();
        Auth::user();
        $detail = \App\pemesanan::get()->where('id_user', Auth::user()->id);
        return view('/detail', ['detail'=> $detail]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemesanan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Auth::user();
        $array = ['1A', '1B', '1C', '1D', '1E',
                  '2A', '2B', '2C', '2D', '2E',
                  '3A', '3B', '3C', '3D', '3E',
                  '4A', '4B', '4C', '4D', '4E',
                  '5A', '5B', '5C', '5D', '5E',
                  '6A', '6B', '6C', '6D', '6E',];

        $rand = "";        
        for($i=0; $i < $request->jumlah; $i++) { 

            $last = Arr::random($array);
            $rand .= " ".$last;
        }

        
        $pemesanan = new pemesanan;

        $pemesanan->id_user = Auth::user()->id;
        $pemesanan->kelas = $request->kelas;
        $pemesanan->asal = $request->asal;
        $pemesanan->tujuan = $request->tujuan;
        $pemesanan->jam = $request->jam;
        $pemesanan->no_telepon = $request->no_telepon;
        $pemesanan->tanggal = $request->tanggal;
        $pemesanan->no_kursi = $rand;
        $pemesanan->total = $request->total;
        $pemesanan->save();

        return redirect('/detail');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Auth::user();
       $detail = DB::table('pemesanans')->where('id_user', Auth::user()->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
