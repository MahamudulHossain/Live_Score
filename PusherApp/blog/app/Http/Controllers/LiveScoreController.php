<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\myEvent;
class LiveScoreController extends Controller
{
    function test(Request $req){
      $score = $req->input('score');
      event(new myEvent($score));
      return $score;
    }

}
