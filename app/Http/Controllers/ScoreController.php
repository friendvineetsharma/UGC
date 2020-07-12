<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\score;

class ScoreController extends Controller
{
    function list(Request $request)
    {
      $score=0;
      $impact= score::all();
      foreach ($impact as $i) {
        if($i->Impact_Factor==0)
        {
          $score=5;
          score::where('Rank',$i->Rank)->update(['Score'=>$score]);
        }
        else if($i->Impact_Factor>10)
        {
          $score=35;
          score::where('Rank',$i->Rank)->update(['Score'=>$score]);
        }
        else if($i->Impact_Factor<10)
        {
          $score=25;
          score::where('Rank',$i->Rank)->update(['Score'=>$score]);
        }
      }
      $data= score::where($request->input('Search'),$request->input('ISSN'))->get();
      return view('project.list',['data'=>$data]);
    }

    function score()
    {
      $score=0;
      $impact= score::all();
      foreach ($impact as $i) {
        if($i->Impact_Factor==0)
        {
          $score=5;
          score::where('Rank',$i->Rank)->update(['Score'=>$score]);
        }
        else if($i->Impact_Factor>10)
        {
          $score=30;
          score::where('Rank',$i->Rank)->update(['Score'=>$score]);
        }
        else if($i->Impact_Factor<10)
        {
          $score=20;
          score::where('Rank',$i->Rank)->update(['Score'=>$score]);
        }
      }
      return view('score_update');
    }
}
