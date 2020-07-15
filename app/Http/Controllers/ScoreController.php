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
        if($i->Impact_Factor<=0)
        {
          $score=5;
          score::where('Rank',$i->Rank)->update(['Score'=>$score]);
        }
        else if($i->Impact_Factor<1 and $i->Impact_Factor>0)
        {
          $score=10;
          score::where('Rank',$i->Rank)->update(['Score'=>$score]);
        }
        else if($i->Impact_Factor<=2 and $i->Impact_Factor>1)
        {
          $score=15;
          score::where('Rank',$i->Rank)->update(['Score'=>$score]);
        }
        else if($i->Impact_Factor<=5 and $i->Impact_Factor>2)
        {
          $score=20;
          score::where('Rank',$i->Rank)->update(['Score'=>$score]);
        }
        else if($i->Impact_Factor<=10 and $i->Impact_Factor>5)
        {
          $score=25;
          score::where('Rank',$i->Rank)->update(['Score'=>$score]);
        }
        else if( $i->Impact_Factor>=10)
        {
          $score=30;
          score::where('Rank',$i->Rank)->update(['Score'=>$score]);
        }
      }

      foreach ($impact as $i) {
        if($i->No_of_coauthors==1)
        {
          $score=$i->Score;
          score::where('Rank',$i->Rank)->update(['Score'=>$score]);
        }
        else if($i->No_of_coauthors==2)
        {
          $score=$i->Score*0.7;
          score::where('Rank',$i->Rank)->update(['Score'=>$score]);
        }
        else if($i->No_of_coauthors>2 and $i->Are_you_main_author=="yes")
        {
          $score=$i->Score*0.7;
          score::where('Rank',$i->Rank)->update(['Score'=>$score]);
        }
        else if($i->No_of_coauthors>2 and $i->Are_you_main_author=="no")
        {
          $score=$i->Score*0.3;
          score::where('Rank',$i->Rank)->update(['Score'=>$score]);
        }
      }
      $data= score::where($request->input('Search'),$request->input('ISSN'))->get();
      return view('project.list',['data'=>$data]);
    }
}
