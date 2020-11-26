<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Auth;
use App\User;
use App\under_graduation_detail;
use App\post_graduation_detail;
use App\other_dintinction;
use App\research_paper;
use App\research_publication;
use App\research_project;
use App\experience;

class detailcontroller extends Controller
{
    function pd()
    {
      return view('details.personal');
    }

    function savepd(Request $request)
    {
      $this->validate($request,[
        'fname'=>'required',
        'gender'=>'required',
        'category'=>'required',
        'nationality'=>'required',
        'dob'=>'required',
        'marital_status'=>'required',
        'father'=>'required',
        'mother'=>'required',
        'mobile'=>'required',
        'aadhar'=>'required',
        'c_address'=>'required',
        'p_address'=>'required'
      ]);

      User::where('id',Auth::user()->id)->update([
        'fname'=>$request->input('fname'),
        'mname'=>$request->input('mname'),
        'lname'=>$request->input('lname'),
        'gender'=>$request->input('gender'),
        'category'=>$request->input('category'),
        'nationality'=>$request->input('nationality'),
        'dob'=>$request->input('dob'),
        'marital_status'=>$request->input('marital_status'),
        'father'=>$request->input('father'),
        'mother'=>$request->input('mother'),
        'mobile'=>$request->input('mobile'),
        'aadhar'=>$request->input('aadhar'),
        'c_address'=>$request->input('c_address'),
        'p_address'=>$request->input('p_address'),
      ]);
      return redirect('/edu');
    }

    function education()
    {
      $data = under_graduation_detail::where('key',Auth::user()->id)->get();
      $post = post_graduation_detail::where('key',Auth::user()->id)->get();
      $detail = other_dintinction::where('key',Auth::user()->id)->get();
      return view('details.education',['data'=>$data,'post'=>$post,'detail'=>$detail]);
    }

    function savesd(Request $request)
    {
      $this->validate($request,[
        'year10'=>'required',
        'subject10'=>'required',
        'grade10'=>'required',
        'school10'=>'required',
        'board10'=>'required',
        'year12'=>'required',
        'subject12'=>'required',
        'grade12'=>'required',
        'school12'=>'required',
        'board12'=>'required'
      ]);

      User::where('id',Auth::user()->id)->update([
        'year10'=>$request->input('year10'),
        'subject10'=>$request->input('subject10'),
        'grade10'=>$request->input('grade10'),
        'school10'=>$request->input('school10'),
        'board10'=>$request->input('board10'),
        'year12'=>$request->input('year12'),
        'subject12'=>$request->input('subject12'),
        'grade12'=>$request->input('grade12'),
        'school12'=>$request->input('school12'),
        'board12'=>$request->input('board12'),
      ]);
      return redirect('/edu');
    }

    function saveug(Request $request)
    {
      $this->validate($request,[
        'name'=>'required',
        'subject'=>'required',
        'grade'=>'required',
        'year'=>'required',
        'institute'=>'required',
        'state'=>'required',
        'country'=>'required',
        'key'=>'required'
      ]);

      under_graduation_detail::create(request([
        'name',
        'subject',
        'grade',
        'year',
        'institute',
        'state',
        'country',
        'key'
      ]));
      return redirect('/edu');
    }

    function deleteug($id)
    {
      $data = under_graduation_detail::find($id);
      $data->delete();
      return redirect('/edu');
    }

    function savepg(Request $request)
    {
      $this->validate($request,[
        'name'=>'required',
        'subject'=>'required',
        'grade'=>'required',
        'year'=>'required',
        'institute'=>'required',
        'state'=>'required',
        'country'=>'required',
        'key'=>'required'
      ]);

      post_graduation_detail::create(request([
        'name',
        'subject',
        'grade',
        'year',
        'institute',
        'state',
        'country',
        'key'
      ]));
      return redirect('/edu');
    }

    function deletepg($id)
    {
      $data = post_graduation_detail::find($id);
      $data->delete();
      return redirect('/edu');
    }

    function saveod(Request $request)
    {
      $this->validate($request,[
        'title'=>'required',
        'date'=>'required',
        'description'=>'required',
        'institute'=>'required',
        'key'=>'required'
      ]);

      other_dintinction::create(request([
        'title',
        'date',
        'description',
        'institute',
        'key'
      ]));
      return redirect('/edu');
    }

    function deleteod($id)
    {
      $data = other_dintinction::find($id);
      $data->delete();
      return redirect('/edu');
    }

    function research()
    {
      $data = research_paper::where('key',Auth::user()->id)->get();
      $detail = research_publication::where('key',Auth::user()->id)->get();
      $post = research_project::where('key',Auth::user()->id)->get();
      return view('details.research',['data'=>$data,'detail'=>$detail,'post'=>$post]);
    }

    function saverpp(Request $request)
    {
      $this->validate($request,[
        'type'=>'required',
        'title'=>'required',
        'name'=>'required',
        'ISSN'=>'required',
        'refereed'=>'required',
        'author'=>'required',
        'year'=>'required',
        'key'=>'required'
      ]);

      research_paper::create(request([
        'type',
        'title',
        'name',
        'ISSN',
        'refereed',
        'author',
        'year',
        'key'
      ]));
      return redirect('/research');
    }

    function deleterpp($id)
    {
      $data = research_paper::find($id);
      $data->delete();
      return redirect('/research');
    }

    function saverpb(Request $request)
    {
      $this->validate($request,[
        'type'=>'required',
        'title'=>'required',
        'ISSN'=>'required',
        'refereed'=>'required',
        'author'=>'required',
        'publisher'=>'required',
        'year'=>'required',
        'key'=>'required'
      ]);

      research_publication::create(request([
        'type',
        'title',
        'ISSN',
        'refereed',
        'author',
        'publisher',
        'year',
        'key'
      ]));
      return redirect('/research');
    }

    function deleterpb($id)
    {
      $data = research_publication::find($id);
      $data->delete();
      return redirect('/research');
    }

    function saverpj(Request $request)
    {
      $this->validate($request,[
        'title'=>'required',
        'major_minor'=>'required',
        'period'=>'required',
        'total_grant'=>'required',
        'funding'=>'required',
        'outcome'=>'required',
        'key'=>'required'
      ]);

      research_project::create(request([
        'title',
        'major_minor',
        'period',
        'total_grant',
        'funding',
        'outcome',
        'key'
      ]));
      return redirect('/research');
    }

    function deleterpj($id)
    {
      $data = research_project::find($id);
      $data->delete();
      return redirect('/research');
    }

    function experience()
    {
      $data = experience::where('key',Auth::user()->id)->get();
      return view('details.experience',['data'=>$data]);
    }

    function saveexp(Request $request)
    {
      $this->validate($request,[
        'type'=>'required',
        'name'=>'required',
        'designation'=>'required',
        'pay_band'=>'required',
        'pay_level'=>'required',
        'status'=>'required',
        'from'=>'required',
        'to'=>'required',
        'experience'=>'required',
        'key'=>'required'
      ]);

      experience::create(request([
        'type',
        'name',
        'designation',
        'pay_band',
        'pay_level',
        'status',
        'from',
        'to',
        'experience',
        'key'
      ]));
      return redirect('/exp');
    }

    function deleteexp($id)
    {
      $data = experience::find($id);
      $data->delete();
      return redirect('/exp');
    }
}
