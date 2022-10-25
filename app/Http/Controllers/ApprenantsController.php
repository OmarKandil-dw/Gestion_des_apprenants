<?php

namespace App\Http\Controllers;

use App\Models\Apprenants;
use App\Models\promotion;
use Illuminate\Http\Request;

class ApprenantsController extends Controller
{
    public function selectapprenants(){
        $selectapprenants = Apprenants::all();
        return view ('selectapprenants', compact("selectapprenants"));
    }

    public function insert(Request $request){
        $addapprenants = new Apprenants();
        $addapprenants->name = $request->nameapprenants;
        $addapprenants->email = $request->emailapprenants;
        $addapprenants->id_promo =1;

        $addapprenants->save(); 
        return redirect('selectapprenants');

    }

    public function delete(Request $request){
        Apprenants::where('id',$request->id)->delete();
        return redirect('selectapprenants');
    }
    
    public function update_apprenants($id){
        $edit = new Apprenants();    
        $apprenant = $edit::where('id', $id )->get();
        return view('update_apprenants', compact('apprenant'));
    }

    
    public function edit_apprenants($id,Request $request){
        $editapprenant = Apprenants::where('id',$id)->first();
        $editapprenant->name = $request->name;
        $editapprenant->email = $request->email;
        $editapprenant->id_promo = $request->id_promo;
        $editapprenant->save();
        return redirect('selectapprenants');
        // return $editpromotion;
    }



}
