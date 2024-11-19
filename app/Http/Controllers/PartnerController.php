<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    function index(){
        $mediapartner = Partner::all(); // Mengambil data dari model MediaPartner
        return view('admin.mediapartner', compact('mediapartner'));
    }

    function submit(Request $request){
        $mediapartner = new Partner();
        $mediapartner->name = $request->name;
        $mediapartner->jabatan = $request->jabatan;
        $mediapartner->asalkomunitas = $request->asalKomunitas;
        $mediapartner->telepon = $request->phone;
        $mediapartner->email = $request->email;
        $mediapartner->tujuan = $request->tujuan;
        $mediapartner->save();
        // return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('pendaftaran.index');

    }

    function delete($id){
        $mediapartner = Partner::find($id);
        $mediapartner->delete();  
        return redirect()->route('admin.mediapartner');
      }
}
