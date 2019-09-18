<?php

namespace Modules\COA\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Models\COA;

class ListCOAController extends Controller
{
    public function getListCOA(Request $request){

        $list_coa = COA::whereNotNull('id_coa')->get();

        $data['list'] = $list_coa;

        return view('coa::list',$data);
    }
}
