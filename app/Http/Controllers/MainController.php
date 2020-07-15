<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\feedback;
use App\Mail\WelcomeMail;
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

public function store(Request $request)
  {
      $this->validate(request(), [
          'name' => 'required',
          'dob' => 'required',
          'mobile' => 'required|digits:10',
          'email' => 'required|email',
          'password' => 'required'
      ]);

      $user = User::create(request(['name', 'dob', 'mobile', 'email', 'password']));
      $pin = mt_rand(1000000, 9999999);
      User::where('email',$request->input('email'))->update(['otp'=>$pin]);

$email = $request->get('email');
      $data = array(
 'name' => $request->get('name'),
 'email' => $request->get('email'),
 'phone' => $request->get('mobile'),
 'otp' => $pin,
 );
 Mail::to($email)->send(new WelcomeMail($data));

      return view('verify',['user'=>$user]);
  }

  function checkverify(Request $request)
  {
    $data=$request->input('email');
    $otp=$request->input('otp');
    $temp= User::where('email', $data)->value('otp');
      if($otp==$temp)
      {
        return redirect(url('http://127.0.0.1:8000'))
         ->with('success','email verified successfully!');
      }
      else
      {
        User::where('email',$data)->delete();
        return redirect(url('http://127.0.0.1:8000/main'))
         ->with('error','you have entered wrong otp, try again later!',);
      }
  }

  function checknotverify(Request $request)
  {
    User::where('email',$request->input('email'))->delete();
    return redirect(url('http://127.0.0.1:8000/main'))
     ->with('error','you have not entered otp, try again later!',);
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

  function verify()
  {
    return view('verify');
  }

  function logout()
  {
   Auth::logout();
   return redirect('main');
  }
}
