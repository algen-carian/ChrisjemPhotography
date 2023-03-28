<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
<link href="{{ asset('css/sign-in-sign-up.css') }}" rel="stylesheet" type="text/css" >
<link rel="stylesheet" href="../assets/css/userlogin.css">

<!-- bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<title>USERLOGIN</title>

</head>
<body style = "background-color: rgb(52, 116, 124)">
    <div id="app">
        
        <main class="mt-5">
            @yield('content')
        </main>
    </div>
</body>
</html>
