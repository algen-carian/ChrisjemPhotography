
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/v2landingpage.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Login Account</title>
	  <link rel="icon" type="" href="picxellence.png">
</head>
<body>
    <div class="wrapper">

    @if(session()->has('status') || session() === null)

<div class="alert alert-primary "  style="color:red; background-color:#cfffe6; border-color:#0dcaf0;  padding: 25px 50px 50px 50px;   margin: 0% 0% 0% 40%; font-family:Times New Roman; text-align:center; font-size:20px; position:absolute; ">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
    <strong>WARNING!</strong> {{ session()->get('status') }} 
</div>
@endif




        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-------Image-------->
                    <img src="assets/picxellence.png" alt="LOGO">
                    <div class="text">
                        <p>Photography and Videography  Online Reservation System <i>- picxellence</i></p>
                    </div>
                </div>
                <div class="col-md-6 right">
                     <div class="input-box">
                        <header>Login Account</header>
                        <form  method="post" action="{{url('/adminlogin')}}">
                             @csrf

                                        <div class="input-field">
                                            <input type="text" class="input" name="email" id="email" required autocomplete="off">
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="input-field">
                                            <input type="password" class="input" name="password" id="password" required>
                                            <label for="password">Password</label>
                                            
                                            <input name="submit"  id="login" type="submit" class="submit" value="Sign in">
                                        </div>
                            </form>   


                            <div class="signin">
                                <span>Forgot Password? <a href="forgotpassword">Click here</a></span>
                            </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>