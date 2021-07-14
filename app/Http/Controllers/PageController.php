<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PageController extends Controller
{
    public function index(){
        $fcas = DB::table('fcas')
            ->select(array('fca_name',DB::raw('count(members.id) as members')))
            ->leftJoin('members','fcas.id','=','members.fca_id')
            ->groupBy('fcas.id')
            ->get();

        dd($fcas);
        return view('welcome');
    }
}
