<?php

namespace App\Http\Controllers;
use App\Models\Pet;
use App\Http\Requests\CreateHewan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller

{
    public function index(){
        $user = Auth::user();
        return view('pages.user.home',compact('user'));
    }
    public function create(){
        return view('pages.user.create');
    }
    public function adopt(){
        return view('pages.user.kucing');
    }
    public function storeCreate(CreateHewan $request){
        $validatedData = $request->validated();
        $pet = new Pet();
        $pet->jenis_hewan = $validatedData['jenis_hewan'];
        $pet->usia = $validatedData['usia'];
        $pet->jenis_kelamin = $validatedData['jenis_kelamin'];
        $pet->ras = $validatedData['ras'];
        $pet->alamat = $validatedData['alamat'];
        $pet->deskripsi = $validatedData['deskripsi'];
        $pet->foto = $validatedData['foto']->store('foto','public');
        $pet->save();
        return redirect()->route('index');
    }
    public function tes(){
        return view('pages.user.create_pic');
    }
}
