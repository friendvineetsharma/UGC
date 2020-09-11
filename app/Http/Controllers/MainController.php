<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
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
          'username' => 'required|string|max:255|unique:users|alpha_dash',
          'mobile' => 'required|digits:10',
          'email' => 'required|email|unique:users,email',
          'password' => 'required'
      ]);

      $user = User::create(request(['username', 'mobile', 'email', 'password']));
      $hashed = Hash::make($request->input('password'));
      User::where('email',$request->input('email'))->update(['password'=>$hashed]);
      $pin = mt_rand(100000, 999999);
      User::where('email',$request->input('email'))->update(['otp'=>$pin]);

$email = $request->get('email');
      $data = array(
 'email' => $request->get('email'),
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
        User::where('email',$data)->update(['verified'=>'1']);
        return redirect(url('http://127.0.0.1:8000/main'))
         ->with('success','email verified successfully!');
      }
      else
      {
        User::where('email',$data)->delete();
        return back()->with('$error', 'Wrong Login Details');
      }
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
   $temp= User::where('email',$request->get('email'))->value('verified');

   if(Auth::attempt($user_data) && $temp=='1')
   {
    return redirect('main/successlogin');
   }
   else if(Auth::attempt($user_data) && $temp=='0')
   {
     $email = $request->get('email');
     $pin = mt_rand(100000, 999999);
     User::where('email',$request->input('email'))->update(['otp'=>$pin]);
           $data = array(
      'email' => $request->get('email'),
      'otp' => $pin,
      );
      Mail::to($email)->send(new WelcomeMail($data));

           return view('verify',['user'=>$user_data]);
   }
   else {
     return back()->with('error', 'Wrong Login Details');
   }

  }

  function sendfeedback(Request $request)
  {
    $this->validate($request, [
     'message' => 'required|min:3',
     'name'    => 'required|min:3',
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

  function profile()
  {
    return view('profile');
  }

  function editprofile()
  {
    return view('edit');
  }

  function editstore(Request $request)
  {
    //dd(Auth::user()->id);
    $this->validate($request, [
     'dob'    => 'required|min:3',
     'location'   => 'required|min:3',
     'bio'   => 'required|min:3',
     'profession'   => 'required|min:3',
     'about'   => 'required|min:3',
     'image'   => 'required'
    ]);

    if(Input::file('image'))
        {
          $name = mt_rand(100000, 999999);
          $filename=$name.'.'.$request->image->extension();
          $request->image->move(public_path('asset/img/uploads'),$filename);
          User::where('email',$request->input('email'))->update(['image'=>$filename]);
          User::where('email',$request->input('email'))->update(['name'=>$request->input('name')]);
          User::where('email',$request->input('email'))->update(['dob'=>$request->input('dob')]);
          User::where('email',$request->input('email'))->update(['location'=>$request->input('location')]);
          User::where('email',$request->input('email'))->update(['bio'=>$request->input('bio')]);
          User::where('email',$request->input('email'))->update(['profession'=>$request->input('profession')]);
          User::where('email',$request->input('email'))->update(['about'=>$request->input('about')]);
          return redirect('http://127.0.0.1:8000/profile');
        }
     else {
       return back()->with('error', 'Wrong Login Details');
     }
  }

  function verifymail()
  {
    return view('checkemail');
  }

  function checkemail(Request $request)
  {
    $this->validate($request, [
     'email'   => 'required|email'
    ]);
    User::where('email',$request->input('email'))->update(['verified'=>'0']);
    $temp= User::where('email',$request->get('email'))->value('verified');
    $data = mt_rand(100000, 999999);
    $hashed = Hash::make($data);
    User::where('email',$request->input('email'))->update(['password'=>$hashed]);

    $user = array(
     'email'  => $request->get('email'),
     'data' => $data
    );

    if($temp=='0')
    {
     return view('message',['user'=>$user]);
    }
    else {
      return back()->with('error', 'Wrong Details Entered');
    }
  }

  function changepassword()
  {
    return view('changepassword');
  }

  function change(Request $request)
  {
    $this->validate($request, [
     'password'  => 'required|alphaNum|min:3',
     'password1'  => 'required|alphaNum|min:3'
    ]);
    $temp = $request->get('password');
    $data = $request->get('password1');

    if($temp==$data)
    {
      $hashed = Hash::make($request->input('password'));
      User::where('email',$request->input('email'))->update(['password'=>$hashed]);
      return redirect('http://127.0.0.1:8000');
    }
    else {
      return back()->with('error', 'Wrong Details Entered');
    }
  }
}
