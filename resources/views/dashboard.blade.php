<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

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
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">logout</button>
      </form>
    </div>
  </nav>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




</div>
      
</body>
</html>
<script type = "text/javascript" >
  function preventBack(){window.history.forward();}
   setTimeout("preventBack()", 0);
   window.onunload=function(){null};
</script>
