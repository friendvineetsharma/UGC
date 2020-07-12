<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\feedback;
use Auth;

class MainController extends Controller
{
  function index()
{
 return view('login');
}

public function create()
{
   return view('create');
}

public function store()
  {
      $this->validate(request(), [
          'name' => 'required',
          'dob' => 'required',
          'mobile' => 'required|digits:10',
          'email' => 'required|email',
          'password' => 'required'
      ]);

      $user = User::create(request(['name', 'dob', 'mobile', 'email', 'password']));

      auth()->login($user);

      return redirect()->to('/main');
  }

function checklogin(Request $request)
  {
   $this->validate($request, [
    'email'   => 'required|email',
    'password'  => 'required|alphaNum|min:3'
   ]);

   $user_data = array(
    'email'  => $request->get('email'),
    'password' => $request->get('password')
   );

   if(Auth::attempt($user_data))
   {
    return redirect('main/successlogin');
   }
   else
   {
    return back()->with('error', 'Wrong Login Details');
   }

  }

  function sendfeedback(Request $request)
  {
    $this->validate($request, [
     'email'   => 'required|email'
    ]);
               $feedback = new feedback;
               $feedback->message = $request->input('message');
               $feedback->name = $request->input('name');
               $feedback->email = $request->input('email');
               $feedback->save();

            return view('feedback');
  }

  function welcome()
  {
    $data= feedback::all();
    return view('welcome',['data'=>$data]);
  }

  function feedback()
  {
    $data= feedback::all();
    return view('feedback',['data'=>$data]);
  }

  function successlogin()
  {
   return view('successlogin');
  }

  function about()
  {
    return view('about');
  }

  function faq()
  {
    return view('faq');
  }

  function contact()
  {
    return view('contact');
  }

  function logout()
  {
   Auth::logout();
   return redirect('main');
  }
}
