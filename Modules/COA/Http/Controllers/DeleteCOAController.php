<?php

namespace Modules\COA\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use App\Models\COA;

class DeleteCOAController extends Controller
{   
   public function deleteCOA(Request $request){

        $detail_coa = COA::where('id_coa', $request->id_coa)->delete();

        if($detail_coa){
            return redirect()->back()->withSuccess(['success to delete COA']);
        } else {
            return redirect()->back()->withError(['failed to delete coa']);
        }

   }
}
