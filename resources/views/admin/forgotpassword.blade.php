
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>ForgotPass</title>
	 <link rel="icon" type="" href="picxellence.png">

     <!-- PWA  -->
<meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('../../../public/assets/PICXELLENCE LOGO.png') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">

</head>
<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-------Image-------->
                    <img src="assets/picxellence.png" alt="LOGO">
                    <div class="text">
                        <p>Hello Admin! <i>- you can Change password to Recorver account. </i></p>
                    </div>
                </div>
                <div class="col-md-6 right">
                     <div class="input-box">
                        <header>Forgot Password</header>
                        <form  method="post" action="{{url('/adminlogin')}}">
                             @csrf
                        <div class="input-field">
                            <input type="text" class="input" id="email" required autocomplete="off">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="password" required>
                            <label for="password">New Password</label>
                        </div>
						 <div class="input-field">
                            <input type="password" class="input" id="password" required>
                            <label for="password">Re enter Password</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="submit" value="Enter">
                            
                        </div>
                        <div class="signin">
                            <span>Already have an account? <a href="login">Log in here</a></span>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    
<!-- PWA -->
<script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
</body>
</html>