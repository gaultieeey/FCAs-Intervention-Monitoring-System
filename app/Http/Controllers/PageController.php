<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use FCA;
use Intervention;
use Member;
use User;

class PageController extends Controller
{
    public function index(){
        $fcas = DB::table('fcas')
            ->select(array('fcas.fca_id as id','fca_name',DB::raw('COUNT(DISTINCT members.member_id) as members'), DB::raw('COUNT(DISTINCT interventions.intervention_id) as interventions'),'municipality','province'))
            ->leftJoin('members','fcas.fca_id','=','members.fca_id')
            ->leftJoin('interventions','fcas.fca_id','=','interventions.fca_id')
            ->groupBy('fcas.fca_id')
            ->get();

        return view('welcome')->with('fcas', $fcas);
    }

    public function show_fca($id)
    {
        return view('fca');
    }
}
