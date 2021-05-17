<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Http\Requests\CreateHewan;
use Illuminate\Support\Facades\DB;
Use App\Http\Requests\AdminHewan;
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
    public function store(AdminHewan $request){
        $validatedData = $request->validated();
        $pet = new Pet();
        $pet->kode_hewan = $validatedData['kode_hewan'];
        $pet->jenis_hewan = $validatedData['jenis_hewan'];
        $pet->usia = $validatedData['usia'];
        $pet->jenis_kelamin = $validatedData['jenis_kelamin'];
        $pet->ras = $validatedData['ras'];
        $pet->alamat = $validatedData['alamat'];
        $pet->deskripsi = $validatedData['deskripsi'];
        $pet->foto = $validatedData['foto']->store('foto','public');
        $pet->save();
        return redirect()->route('admin.index');
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
    public function update(Request $request, Pet $pet){
        $validatedData = $request->validate([
                'kode_hewan' => 'size:4|unique:pets,kode_hewan,'.$pet->id,
                'jenis_hewan' => 'required',
                'usia' => 'required|integer',
                'jenis_kelamin' =>'required',
                'ras' => 'required',
                'alamat' => 'required',
                'deskripsi' => 'required'
        ]);
        $pet->update($validatedData);
        return redirect()->route('admin.index');
    }
    public function destroy(Pet $item){
        $item->delete();
        return redirect()->route('admin.index');
    }
    public function listKucing(){
        $item = DB::select("select * from pets where jenis_hewan = 'Kucing'");
        return view('pages.admin.index')->with(['item'=>$item]);
    }
    public function listAnjing(){
        $item = DB::select("select * from pets where jenis_hewan = 'Anjing'");
        return view('pages.admin.index')->with(['item'=>$item]);
    }
}
