<?php

namespace App\Http\Controllers;
use App\Models\Pet;
use App\Models\User;
use App\Http\Requests\CreateHewan;
use App\Http\Requests\CreateTestimoni;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Str;
class UserController extends Controller

{
    public function index(){
        $items = Pet::paginate(12);
        $testi = Testimoni::orderByRaw('RAND()')->limit(9)->get();
        return view('pages.user.home')->with(['items' => $items])->with(['testi'=>$testi]);
    }
    public function create(){
        return view('pages.user.create');
    }
    public function storeCreate(CreateHewan $request, User $user){
        $user = User::findOrFail(Auth::user()->id);
        $validatedData = $request->validated();
        $pet = new Pet();
        if($validatedData['jenis_hewan']==='Kucing'){
            $db = Pet::latest()->first();
                if($db!=null){
                    $urutan = $db->id+1;
                }else{
                    $urutan = 1;
                }
            $pet->kode_hewan = 'KCG-'.$urutan;}
        elseif($validatedData['jenis_hewan']==='Anjing'){
            $db = Pet::latest()->first();
                if($db!=null){
                    $urutan = $db->id+1;
                }else{
                    $urutan = 1;
                }
            $pet->kode_hewan = 'AJG-'.$urutan;}
        $pet->jenis_hewan = $validatedData['jenis_hewan'];
        $pet->usia = $validatedData['usia'];
        $pet->jenis_kelamin = $validatedData['jenis_kelamin'];
        $pet->ras = $validatedData['ras'];
        $pet->no_hp = $user->no_hp;
        $pet->alamat = $user->alamat;
        $pet->deskripsi = $validatedData['deskripsi'];
        $pet->foto = $validatedData['foto']->store('foto','public');
        $pet->save();
        return redirect()->route('user.index');
    }
    public function adopted(Request $request, Pet $pet, User $user){
        $validateData = $request->validate([
            'adopted' => 'required',
            'no_hp_adopter' =>'',
            'alamat_adopter'=>'',
            'nama_adopter' =>''
        ]);
        $pet->update($validateData);
        return redirect()->route('user.index');
    }
    public function show(Pet $item, User $user){
        $user = User::findOrFail(Auth::user()->id);
        return view('pages.user.kucing')->with('item',$item)->with('user',$user);
    }
    public function testi(){
        return view('pages.user.testi');
    }
    public function storeTesti(CreateTestimoni $request, User $user){
        $user = User::findOrFail(Auth::user()->id);
        $validatedData = $request->validated();
        $testi = new Testimoni();
        $testi->nama = $user->name;
        $testi->sebagai= $validatedData['sebagai'];
        $testi->testimoni=$validatedData['testimoni'];
        $testi->save();
        return redirect()->route('user.index');
    }
}
