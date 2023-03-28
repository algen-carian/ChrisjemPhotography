@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  
    <link rel = "stylesheet" href = " {{ URL::asset('assets/css/adminloginregistration.css'); }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/adminloginregistration.css">

    <title>ADMIN LOGIN</title>
    <link rel="icon" type="" href="../assets/style-lp/images/picxellence.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<style>
  .alert {
  padding: 20px;
  border-radius: 5px;
  background-color: #f44336;
  color: white;
  left: 40%;
  right: 40%;
  position:fixed;
  z-index: 1;
}.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}.closebtn:hover {
  color: black;
}
</style>
  
@if(session()->has('status') || session() === null)

            <div class="alert alert-primary ">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong>WARNING!</strong> {{ session()->get('status') }}
              
            </div>
        @endif

<body>

<center>
<img src="assets/picxellence.png" alt="ADMIN" class="avatar" >
<h1>PICXELLENCE</h1>
  
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

</center>
<center>
  <a type="button" href = "/" class="btn btn-success mt-2 mb-2">User login</a>
</center>
</div>
<div id="id01" class="modal">
    

  <form class="modal-content animate"  method="post" action="/adminAuth">
    @csrf
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="assets/ADMIN.png" alt="ADMIN" class="avatar" >
    </div>

    <div class="container">
      <label for="email"><b>ADMIN</b></label>
  
      <input type="text" placeholder="Enter Username" name="email" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      

    
      <button type="submit">Login</button>
      

      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
@endsection


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>

