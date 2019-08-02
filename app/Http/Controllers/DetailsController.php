<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;
use App\User;

class DetailsController extends Controller
{
    //
    public function detail(Complaint $complaint){
      return view('details.index')->with(compact('complaint'));
    }
}
