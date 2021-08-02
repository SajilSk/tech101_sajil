<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
    <script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
      </script>

<!-- Sidebar -->

<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Menu</h3>
@if (Auth::user()->can('student-crud'))

        <a href="{{route('add.student.form')}}" class="w3-bar-item w3-button">Add Student</a>
        <a href="{{route('list.student')}}" class="w3-bar-item w3-button">Student List</a>
@endif

</div>

<!-- Page Content -->
<div style="margin-left:25%">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
  
    </ul>
    <form class="form-inline my-2 my-lg-0" action="{{route('logout')}}">
      {{-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> --}}
      <button class="btn btn-outline-success my-2 my-sm-0" >logout</button>
    </form>
  </div>
</nav>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form id="#"   method="post" action={{route('student.store')}}>
    @csrf                                                             
    <div class="simple-login-container">
        
        <div class="row">
            <div class="col-md-12 form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="name" placeholder="Name" required>
            </div>
        </div>        
        
        <div class="row">
            <div class="col-md-12 form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="email"  placeholder="Email" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <label>Password:</label>
                <input type="password" class="form-control" name="password"  placeholder="Phone" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <label>Address:</label>
                <input type="text" class="form-control" name="address"  placeholder="Address" required>
            </div>
        </div>
        {{-- <div class="form-group">
            <label>Role:</label>
            <br>            
              <input type="radio" id="administrator" name="role" value="admin">
              <label for="administrator">Administrator</label><br>
            <input type="radio" id="student" name="role" value="student">
            <label for="student">Student</label><br>
          </div> --}}
        
        <div class="row">
            <div class="col-md-12 form-group">
                <input type="submit" class="btn btn-primary" value="Submit" id="send">
            </div>
        </div>
    </div>
</form>    

<style>
body{
    background-color:#F0FFFF;
    font-size:14px;
    /* color:#fff; */   
}
.simple-login-container{
    width:300px;
    max-width:100%;
    margin:50px auto;
}
.simple-login-container h2{
    text-align:center;
    font-size:20px;
}

.simple-login-container .btn-login{
    background-color:#FF5964;
    color:#fff;
}
a{
    color:#fff;
}
</style>






</div>
      
</body>
</html>
