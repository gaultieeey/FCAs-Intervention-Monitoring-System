<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FCA;
use App\Models\Intervention;
use App\Models\Member;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }
}
