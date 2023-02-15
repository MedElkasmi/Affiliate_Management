@extends('admin.master')
@section('content')
<div class="row">
   <div class="col-md-12 col-sm-12">
      <div class="x_panel">
         <div class="x_title">
            <h2>Upload Creative Image</h2>
            <ul class="nav navbar-right panel_toolbox">
               <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <a class="dropdown-item" href="#">Settings 1</a>
                     <a class="dropdown-item" href="#">Settings 2</a>
                  </div>
               </li>
               <li><a class="close-link"><i class="fa fa-close"></i></a>
               </li>
            </ul>
            <div class="clearfix"></div>
         </div>
         <form method="POST" action="{{route('creative.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
               <div class="col-md-6 col-sm-6 ">
                  <input type="text" name="creative_name" class="form-control">
               </div>
            </div>

            <div class="form-group row">
               <div class="col-md-6 col-sm-6 ">
                  <input type="file" name="creative" class="form-control">
               </div>
            </div>

            <div class="form-group row">
               <div class="col-md-6 col-sm-6 ">
                  <input type="file" name="footer" class="form-control">
               </div>
            </div>

            <div class="ln_solid"></div>
            <div class="form-group">
               <div class="col-md-2 col-sm-2">
                  <button type="submit" class="btn btn-success">Save</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection