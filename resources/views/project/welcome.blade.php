<DOCTYPE html>
 <html lang=”en-US”>
 <head>
 <meta charset=”utf-8">
 </head>
 <body>
  Hi {{$data['name']}}, we’re glad you’re here! Following are your account details: <br>

  Email: {{$data['email']}}<br><br>
  Username: {{$data['name']}}<br><br?
  Phone: {{$data['phone']}}<br><br>
  your otp for email verification is
  otp: {{$data['otp']}}


  </body>
  </html>
