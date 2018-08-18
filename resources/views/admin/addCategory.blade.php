<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add News</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/admin.css" />

        <style >
           form {
            font-size: 16px;
          }
        </style>

</head>


<body>

<nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">E-Waste Management</a>
        </div>
          <ul class="nav navbar-nav">
           <li class="active"><a href="{{route('addnews')}}">Add News</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
           <li><a href="{{route('adminProfile')}}">Profile</a></li>
           <li><a href="#">LogOut</a></li>
          </ul>
      </div>
  </nav>  

<div class="sidenav">

  <div id="" style="">
    <img src="img/logo.png" class="logo" style="width: 180px; height: 180px; top: 10px" >
  </div>

  <br>
  <br>
    <a href="{{route('adminpage')}}">Home</a>
    <a href="{{route('addcategory')}}">Add Category</a>
    <a href="{{route('addnews')}}">Add News</a>
    <a href="{{route('viewbuyers')}}">View Buyers</a>
    <a href="{{route('viewsellers')}}">View Sellers</a>
    <a href="{{route('configurations')}}">Configurations</a>
</div>


<div class="main">

  <br>
  <br>
  <br>
  
@include('partials.messages')

<div class="col-lg-12">
  <div class="row">
   <div class="col-lg-3"></div>
   <div class="col-lg-6">
    <h1 class="text-center">Add Main Waste Category </h1><br>
  
    <div class="card">
     <div class="card-body">
         {!! Form::open(['action' => ['mainCatController@store'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
      


         <div class="form-group">
             {{ Form::label('Category', 'Waste Type', ['class' => 'form-label'] )}}
             {{ Form::text('category', null , ['class' => 'form-control', 'placeholder' => 'subWasteCategory', 'id' => 'type']) }}
         </div>
         
       <div class="row" style="margin-left: -5px;">
                     <div style="float: left;">
                        
                         {{ Form::submit('Add', ['class' => 'btn btn-success btn-md']) }}
                         {!! Form::close() !!}
                     </div>
           <a href="/admin" class="btn btn-secondary btn-md">Back</a>
                  </div>   
     </div>
    </div>
   </div>
  
  </div>
 </div>



<div class="form-group">


</div>


<footer class="footer font-small blue pt-4 mt-4">
 <!-- Copyright -->
  <div class="footer-copyright text-right py-3">© 2018 Copyright:
    <a href="#"> E-Waste Management</a>
  </div>
  <!-- Copyright -->
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html> 
