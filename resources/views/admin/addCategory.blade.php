<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Category</title>
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
           <li class="active"><a href="{{route('addnews')}}">Add Category</a></li>
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
    <a href="{{route('addnews')}}">Add News</a>
    <a href="{{route('viewbuyers')}}">View Buyers</a>
    <a href="{{route('viewsellers')}}">View Sellers</a>
     <a href="{{route('addcategory')}}">Add Category</a>
    <a href="{{route('configurations')}}">Configurations</a>
</div>


<div class="main">

  <br>
  <br>
  <br>
  

<div class="container">
    <div class="row">
    <div class="col-md-12">
      

      <div class="tabbable-panel">
        <div class="tabbable-line">
          <ul class="nav nav-tabs ">
            <li class="active">
              <a href="#addmain" data-toggle="tab">
              Add Main E-waste Category</a>
            </li>
            <li>
              <a href="#addsub" data-toggle="tab">
              Add Sub E-waste Category</a>
            </li>
            <li>
              <a href="#delete" data-toggle="tab">
              Delete E-waste Category</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="addmain">

              <div class="col-lg-12">
                    <div class="row">
                       <div class="col-lg-3"></div>
                          <div class="col-lg-6">

                            <br>
                            <br>
                             <h1 class="text-center">Add Main Waste Category </h1><br>
  
                              <div class="card">
                            <div class="card-body">
                                @include('partials.messages')
                                 {!! Form::open(['action' => ['AdminController@addMainCategory'], 'method' => 'POST']) !!}
      


                            <div class="form-group">
                                  {{ Form::label('Category', 'Main Waste Type', ['class' => 'form-label'] )}}
                                   {{ Form::text('maincategory', null , ['class' => 'form-control', 'placeholder' => 'Main Waste Category', 'id' => 'maintype']) }}
                            </div>
         
                            <div class="row" style="margin-left: -5px;">
                                <div style="float: left;">
                        
                                 {{ Form::submit('Add', ['class' => 'btn btn-primary btn-md']) }}
                                  {!! Form::close() !!}
                                </div>
                            <a href="/admin" class="btn btn-secondary btn-md">Back</a>
                          </div>   
                     </div>
                   </div>
                   </div>
  
                 </div>
              </div>
            





            </div>

            <div class="tab-pane" id="addsub">

              <div class="col-lg-12">
                    <div class="row">
                       <div class="col-lg-3"></div>
                          <div class="col-lg-6">

                            <br>
                            <br>
                             <h1 class="text-center">Add Sub Waste Category </h1><br>
  
                              <div class="card">
                            <div class="card-body">
                                @include('partials.messages')
                                <!-- {!! Form::open(['action' => ['AdminController@addSubCategory'], 'method' => 'POST']) !!} -->
                                 <form method="POST" action="{{ route('addsubcategory') }}">
                                  @csrf

                            <div class="form-group">

                              {{ Form::label('select', 'Select Main E-waste Type :', ['class' => 'form-label'] )}}

                              <select class="form-control" id="maincategoryselect" name ="maintype" >
                                  <option value="">Select a Category</option>
                                  @if(count($maincategories) > 0)
                                  @foreach ($maincategories as $maincategory)
                                  <option name = "maintypes" id = "maintypes" value= '{{ $maincategory->id }}'>{{ $maincategory->main_category }}</option>
                                  @endforeach
                                  @endif
                              </select>

                            </div> 
      


                            <div class="form-group">
                                  {{ Form::label('Category', 'Sub Waste Type', ['class' => 'form-label'] )}}
                                  <!--{{ Form::text('subcategory', null , ['class' => 'form-control', 'placeholder' => 'Sub Waste Category', 'id' => 'subtype']) }}-->
                                   <input type="text" class="form-control" id="subcategory" name="subcategory" placeholder="Sub Waste Category">


                            </div>

                             <div class="form-group">
                                  {{ Form::label('body', 'Description ', ['class' => 'form-label'] )}}
                                <!--  {{ Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Give a Description', 'id' => 'body']) }}-->
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div> 
         
                            <div class="row" style="margin-left: -5px;">
                                <div style="float: left;">
                        
                                <!-- {{ Form::submit('Add', ['class' => 'btn btn-primary btn-md']) }}
                                  {!! Form::close() !!} -->
                                  <button type="submit" class="btn btn-primary">Add</button>

                                 </form>



                                </div>
                            <a href="/admin" class="btn btn-secondary btn-md">Back</a>
                          </div> 

                          <br>
                          <br>

                     </div>
                   </div>

                   </div>

                 </div>
               </div>
              




            </div>

            <div class="tab-pane" id="delete">

              <br>

              <div class="col-lg-12">
                    <div class="row">
                       <div class="col-lg-3"></div>
                          <div class="col-lg-6">

                            <br>
                           
                            <div class="card">
                            <div class="card-body">
                                @include('partials.messages')
                                 {!! Form::open(['action' => ['AdminController@addMainCategory'], 'method' => 'POST']) !!}

                                
      

                           <div class="form-inline" role="form">       
                            <div class="form-group">
                                  {{ Form::label('Category', 'Delete Main Waste Type', ['class' => 'form-label'] )}}
                                  <select class="form-control" id="maincategoryselect" name ="maintype" >
                                  <option value="">Select a Category</option>
                                  @if(count($maincategories) > 0)
                                  @foreach ($maincategories as $maincategory)
                                  <option name = "maintypes" id = "maintypes" value= '{{ $maincategory->id }}'>{{ $maincategory->main_category }}</option>
                                  @endforeach
                                  @endif
                                   </select>

                                   <button type="submit" class="btn btn-danger submit" onclick="return confirm('Are you sure you want to delete this main category?');">Delete</button>
                            </div>
         
                            <div class="row" style="margin-left: -5px;">
                                <div style="float: left;">
                        
                                  {!! Form::close() !!}
                                </div>
                          
                          </div> 
                        </div>  
                     </div>
                   </div>

                   <hr>
                   <br>

                   <label style="font-size: 15px;">Delete Sub E-waste Category : </label>

<div class="container">
   
                              <div class="row">

                                 <div class="col-lg-6">
                                      <div class="table-responsive table-bordered ">
                                          <table class="table" style="font-size: 16px;">

                                                <tr>
                                                    <th>Sub Category Name</th>
                                                    <th>Description</th>
                                                    <th>Delete</th>
                        
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="#">
                                                     <button type='submit' class='btn btn-danger' onclick="return confirm('Are you sure you want to delete this sub category?');">Delete</button>
                                                     </a></td>
                                                </tr>


                                          </table>
                                        </div>
                                         <br>

                                      </div>
                                   </div>

</div>



                   </div>  
                 </div>
              </div>





 

              
            </div>




          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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
