<?php

namespace Modules\COA\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class UpdateCOAController extends Controller
{
    public function editCOA(Request $request){

        if(!empty($request->kode_coa)){
            $data['kode_coa'] = $request->kode_coa;
        }
        if(!empty($request->nama_coa)){
            $data['nama_coa'] = $request->nama_coa;
        }

        $update_coa = COA::where('id_coa', $request->id_coa)->update($data);

        if($update_coa){
            return redirect()->back()->withSuccess(['success update coa']);
        } else{
            return redirect()->back()->withError(['failed to update coa']);
        }
    }
}
