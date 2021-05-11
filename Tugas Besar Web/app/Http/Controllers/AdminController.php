<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Http\Requests\CreateHewan;
class AdminController extends Controller
{
    public function index(){
        $user = Auth::user();
        $item = Pet::all();
        return view('pages.admin.index',compact('user'))->with(['item'=>$item]);
    }
    public function create(){
        return view('pages.admin.create');
    }
    public function dashboard(){
        $hewan_belum_teradopsi = Pet::where('adopted','0')->count();
        $hewan_teradopsi = Pet::where('adopted','1')->count();
        $total_hewan = Pet::count();
        return view('pages.admin.dashboard')->with([
            'hewan_belum_teradopsi' => $hewan_belum_teradopsi,
            'hewan_teradopsi' => $hewan_teradopsi,
            'total_hewan' => $total_hewan
        ]);
    }
    public function edit(Pet $item){
        return view('pages.admin.edit',['item'=>$item]);
    }
    public function update(CreateHewan $request){
        $validateData = $request->validated();
        $pet = new Pet();
        $pet->kode_hewan = $validateData['kode_hewan'];
        $pet->jenis_hewan = $validateData['jenis_hewan'];
        $pet->jenis_kelamin = $validateData['jenis_kelamin'];
        $pet->ras = $validateData['ras'];
        $pet->alamat = $validateData['alamat'];
        $pet->usia = $validateData['usia'];
        $pet->deskripsi = $validateData['deskripsi'];
        $pet->foto = $validateData['foto']->store('foto','public');
        $pet->adopted = $validateData['adopted'];
        $pet->save();
        return redirect()->route('admin.index');
    }
    public function destroy(Pet $item){
        $item->delete();
        return redirect()->route('admin.index');
}
}
