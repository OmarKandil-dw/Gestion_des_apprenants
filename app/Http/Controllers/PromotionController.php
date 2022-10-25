<?php

namespace App\Http\Controllers;

use App\Models\Apprenants;
use App\Models\promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    //

    public function select(){
        $data = promotion::all();
        return view ('index', compact("data"));
    }

    public function add(){
        return view('add');
    }

    public function insert(Request $request){
        $addpromotion = new promotion();
        $addpromotion->name = $request->name;
        $addpromotion->save(); 
        return redirect('index');

    }

    public function deletepromo(Request $request){

        promotion::where('id',$request->id)->delete();
        return redirect('index');
    }


    public function update_promotion($id){
        $edit = new promotion();    
        $promotion = $edit::where('id', $id )->get();
        return view('update_promotion', compact('promotion'));
    }
    

    public function edit($id,Request $request){
        $editpromotion = promotion::where('id',$id)->first();
        $editpromotion->name = $request->name;
        $editpromotion->save();
        return redirect('index');
        // return $editpromotion;
    }

    public function search($name=null){ 
        // dd($request->search);
        //  dd($data);
        if($name == null){
            $data =promotion::all();
            return view('index_search',compact('data'));        }
        else {
            $data =promotion::where('name', 'like','%'.$name.'%')->get();
            return view('index_search',compact('data'));

        }

    }


    public function show_appr_by_prom($id)
    {
        // $prom = promotion::where('id', $id)->first();
        $apprenants = Apprenants::select(
            'promotions.id as id_prom',
            'apprenants.id as id_apppr',
            'promotions.name as nom_prom',
            'apprenants.name as nom_appr'
        )
            ->rightJoin('promotions', 'promotions.id', '=', 'apprenants.id_promo')
            ->where('promotions.id', $id)
            ->get();
        return view('update_promotion', compact('apprenants'));
    }

}


// AFFICHAGE GHALAT 