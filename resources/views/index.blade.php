

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

      @if($message = Session::get('error'))
          <div class = "alert alert-danger alert-block">
              {{-- <button type="button" class="close" data-dismiss="alert">x</button> --}}
              <strong>{{$message}}</strong>
          </div>
      @endif

      
      @if(count($errors)>0)
          <div class="alert alert-danger">
              <ul>
                  @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                  @endforeach
              </ul>
          <div>
      @endif
      @if(isset(Auth::user()->email))
      <script>window.location="/index";
        </script>    
        @endif    
        {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
  <!------ Include the above in your HEAD tag ---------->
  <html>
    <head>
      <title>Login</title>
      <script type="text/javascript">
          function disableBack() { window.history.forward(); }
          setTimeout("disableBack()", 0);
          window.onunload = function () { null };
      </script>
    </head>
    <body>
      <form id="contact_form"  action="{{route('login')}}" method="post">
        @csrf                                                             
        <div class="simple-login-container">
          <h2>Login</h2>
          <div class="row">
              <div class="col-md-12 form-group">
                  <label>Email:</label>
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
              </div>
            </div>
          <div class="row">
              <div class="col-md-12 form-group">
                  <label>Email:</label>
                  <input type="password" class="form-control" name="password"  placeholder="Password" required>
              </div>
            </div>
          <div class="row">
              <div class="col-md-12 form-group">
                  <input type="submit" class="btn btn-primary" value="Login" id="send">
              </div>
          </div>
      </div>
  </form>
  </body>
  </html>

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
    