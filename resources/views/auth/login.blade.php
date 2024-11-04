<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>halaman Login</title>
        <!-- Link ke file CSS di public/css -->
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    </head>
 <body>
  <div class="login-container">
    <img alt="Logo 1" src="{{ asset('img/tutwuri.png') }}" />
    <img alt="Logo 2" src="{{ asset('img/tutwuri.png') }}" />
    
   <h1>
    SIAK
   </h1>
   <h2>
    SISTEM INFORMASI AKADEMIK
   </h2>
   <h2>
    LOGIN
   </h2>
   <form method="POST" action="{{ route('login') }}">
    @csrf
    <input type="text" name="email" placeholder="email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">LOGIN</button>
</form>
   <p>
    Lupa Password?
    <a href="#">
     RESET
    </a>
   </p>
  </div>
 </body>
</html>