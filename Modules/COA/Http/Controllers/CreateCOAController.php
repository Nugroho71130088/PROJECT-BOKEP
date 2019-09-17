<?php

namespace Modules\COA\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Models\COA;

class CreateCOAController extends Controller
{
    //tampil view create
    public function createView(Request $request){
    
        return view('coa::create',[
            'side_bar' => 'coa'
        ]);
    }

    //send data create to database

    public function postCreateCOA(Request $request){

    }
}
