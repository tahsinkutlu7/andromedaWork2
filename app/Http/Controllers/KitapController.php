<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kitap;
use App\Models\Kategori;
use App\Models\Yazar;
use App\Models\Dil;
use App\Models\YayinEvi;

class KitapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $kategoriler=Kategori::get();
        $kitaplar=Kitap::paginate(16);
        $yazarlar=Yazar::get();
        return view('welcome',compact('kategoriler','kitaplar','yazarlar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arananKelime=$request['search'];
        $kitap = Kitap::get()->where('ISBN', $arananKelime)->first();
        $yazar=Yazar::get();
        if ($kitap) {
            if ($kitap['kitapDurum']=='aktif') {
                $kategori=Kategori::get();
                $dil=Dil::get();
                $yayinEvi=YayinEvi::get();
                return view('kitapDetay',compact('kitap','yazar','kategori','dil','yayinEvi'));
            }else{
                abort(404,'Kitap bulunamadı');
            }
            }else{
                // $kitaplar = Kitap::where('kitapAdi','Like', '%' . $arananKelime . '%')
                //                     ->paginate(16) ?? abort(404,'Kitap bulunamadı');
                // $kategoriler=Kategori::get();
                // dd($kitaplar);
                // return view('kitapAramaSayfasi',compact('kitaplar','kategoriler','arananKelime','yazar'));
                return redirect()->route('kitap.aramasayfa',['deger'=>$arananKelime]);
            }
        
    }
    public function aramasayfa($deger){
        $arananKelime = $deger;
        $kitaplar = Kitap::where('kitapAdi','Like', '%' . $arananKelime . '%')->paginate(16);
        $kategoriler=Kategori::get();
        $yazar=Yazar::get();
        if (count($kitaplar)<1) {
           return abort(404,'Kitap bulunamadı');
        }
        return view('kitapAramaSayfasi',compact('kitaplar','kategoriler','arananKelime','yazar'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kitap=Kitap::find($id) ?? abort(404,'Kitap bulunamadı');
        $yazar=Yazar::get();
        $kategori=Kategori::get();
        $dil=Dil::get();
        $yayinEvi=YayinEvi::get();
        if($kitap['kitapDurum']=='aktif'){
           return view('kitapDetay',compact('kitap','yazar','kategori','dil','yayinEvi'));
        }else{
            abort(404,'Kitap bulunamadı');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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