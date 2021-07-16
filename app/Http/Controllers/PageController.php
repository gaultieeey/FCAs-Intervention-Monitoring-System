<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\FCA;
use App\Models\Intervention;
use App\Models\Member;
use App\Models\User;

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
        $fca = FCA::find($id);

        $members = Member::where('fca_id',$id)
            ->orderby('position')
            ->limit(8)
            ->get();
        $countmembers = count($members);
        $memberswithsysgen = Member::select('system_gen_control_num')
            ->where('fca_id',$id)
            ->where('system_gen_control_num','like','%-%')
            ->get();
        $countmemberswithsysgen = count($memberswithsysgen);

        $interventions = Intervention::where('fca_id', $id)->get();
        $countinterventions = count($interventions);

        return view('fca')
            ->with('fca', $fca)
            ->with('members', $members)
            ->with('interventions', $interventions)
            ->with('countmembers', $countmembers)
            ->with('countinterventions', $countinterventions)
            ->with('countmemberswithsysgen', $countmemberswithsysgen);
    }
}
