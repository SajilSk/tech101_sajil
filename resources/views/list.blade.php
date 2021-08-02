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
      <li class="nav-item">
        <a class="nav-link" href="{{route('export.excel')}}">Export Excel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('export.pdf')}}">Export PDF</a>
      </li>
      
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css"/>
{{-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> --}}
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
  


<div class="container">
    @if( Session::has('success') )
      <div class="alert alert-warning">{{ Session::get('success') }}</div>
    @endif 
    @if( Session::has('update') )
      <div class="alert alert-warning">{{ Session::get('update') }}</div>
    @endif 
    @if( Session::has('delete') )
      <div class="alert alert-warning">{{ Session::get('delete') }}</div>
    @endif 
    
    <table id="example" class="table table-striped table-bordered" style="width:75%">
        <br>
            <thead>
            <tr class="text-center">
                <th>S.N </th>
                <th>Name </th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
                
            </tr>
            <tbody>                          
                @foreach($student as $key=>$students)
                <tr>
                    
                    <td>{{$key+1}} </td>
                    <td>{{$students->name}}</td>
                    <td>{{$students->email}}</td>                    
                    <td>{{$students->address}}</td>
                     <td>
                        <a href="{{route('student.edit',$students->id)}}"><i class="fa fa-edit" title="Edit"></i></a>
                        <a href="{{route('student.delete',$students->id)}}"><i class="fa fa-minus"  title="Delete"></i></a>

                    </td> 
                </tr>
                 @endforeach                                         
            </tbody>
            </thead>
        </table>
    {{-- </table> --}}
    
</div>

 
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>


<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>