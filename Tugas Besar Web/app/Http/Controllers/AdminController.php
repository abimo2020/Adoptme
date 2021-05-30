<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Http\Requests\CreateHewan;
use Illuminate\Support\Facades\DB;
Use App\Http\Requests\AdminHewan;
use App\Models\Testimoni;
use GuzzleHttp\Promise\Create;

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
    public function store(Request $req){
        $validateData = $req->validate([
            'jenis_hewan' => 'required',
            'usia' => 'required|integer',
            'jenis_kelamin' =>'required',
            'alamat' => 'required',
            'ras' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|file|mimes:png,jpg,jpeg|image|max:2000',
            'allowed' => 'required',
            'no_hp' => 'required',
        ]);
        $pet = new Pet();
        if($validateData['jenis_hewan']==='Kucing'){
            $pet->kode_hewan = 'KCG-'.rand(100,999);}
        elseif($validateData['jenis_hewan']==='Anjing'){
            $pet->kode_hewan = 'AJG-'.rand(100,999);}
        $pet->jenis_hewan = $validateData['jenis_hewan'];
        $pet->usia = $validateData['usia'];
        $pet->jenis_kelamin = $validateData['jenis_kelamin'];
        $pet->ras = $validateData['ras'];
        $pet->no_hp = $validateData['no_hp'];
        $pet->alamat = $validateData['alamat'];
        $pet->deskripsi = $validateData['deskripsi'];
        $pet->foto = $validateData['foto']->store('foto','public');
        $pet->allowed = $validateData['allowed'];
        $pet->save();
        return redirect()->route('admin.index');
    }
    public function dashboard(){
        $hewan_belum_teradopsi = Pet::where('adopted','0')->count();
        $hewan_teradopsi = Pet::where('adopted','1')->count();
        $hewan_diacc = Pet::where('allowed','1')->count();
        $total_hewan = Pet::count();
        $total_testimoni = Testimoni::count();
        $testimoni_diacc = Testimoni::where('allowed','1')->count();
        return view('pages.admin.dashboard')->with([
            'hewan_belum_teradopsi' => $hewan_belum_teradopsi,
            'hewan_teradopsi' => $hewan_teradopsi,
            'total_hewan' => $total_hewan,
            'hewan_diacc' => $hewan_diacc,
            'total_testimoni' => $total_testimoni,
            'testimoni_diacc' => $testimoni_diacc
        ]);
    }
    public function edit(Pet $item){
        return view('pages.admin.edit',['item'=>$item]);
    }
    public function update(Request $request, Pet $pet){
        $validatedData = $request->validate([
                // 'kode_hewan' => 'size:4|unique:pets,kode_hewan,'.$pet->id,
                'jenis_hewan' => 'required',
                'usia' => 'required|integer',
                'jenis_kelamin' =>'required',
                'ras' => 'required',
                'no_hp' => 'required',
                'alamat' => 'required',
                'deskripsi' => 'required',
                'adopted' => 'required',
                'allowed' => 'required',
                'nama_adopter' => '',
                'alamat_adopter' => '',
                'no_hp_adopter' => '',

        ]);
        $pet->update($validatedData);
        return redirect()->route('admin.index');
    }
    public function destroy(Pet $item){
        $item->delete();
        return redirect()->route('admin.index');
    }
    public function allow(Pet $pet){
        $pet = Pet::findOrFail($pet->id);
        $pet->allowed = '1';
        $pet->save();
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
    public function testi(){
        $item = DB::select("SELECT * FROM testimonis");
        return view('pages.admin.testi')->with(['item'=>$item]);
    }
    public function editTesti(Testimoni $testi){
        return view('pages.admin.editTesti',['testi'=>$testi]);
    }
    public function updateTesti(Request $request, Testimoni $testi){
        $validateData = $request->validate([
            'allowed' => 'required',
            'nama' => '',
            'sebagai' => '',
            'testimoni' => ''
        ]);
        $testi->update($validateData);
        return redirect()->route('admin.testi');
    }
    // public function destroyTesti(Testimoni $testi){
    //     $testi->delete();
    //     return redirect()->route('admin.testi');
    // }
    public function tst(Testimoni $testi,Request $request){
        return view('pages.admin.editTesti')->with('testi',$testi);
    }
    public function tstUp(Request $request,Testimoni $testi){

        $testi = Testimoni::findOrFail($testi->id);
        $testi->allowed = '1';
        $testi->save();
        return redirect()->route('admin.testi');
    }
    public function tstDel(Request $request, Testimoni $testi){
        $testi->delete();
        return redirect()->route('admin.testi');
    }

}
