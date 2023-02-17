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
            <div class="x_content">
               <br />
               <form method="POST" action="{{route('creative.update',$creative)}}" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                  @csrf
                  @method('PUT')
                  
                  <div class="item form-group">
                     <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Creative Name <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="creative_name" class="form-control" value="{{$creative->creative_name}}">
                     </div>
                  </div>
                  <div class="item form-group">
                     <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Template <span class="required">*</span>
                     </label>
                     <div class="col-md-6 col-sm-6 ">
                        <input type="file" name="creative" required="required" class="form-control">
                     </div>
                  </div>
                  <div class="item form-group">
                     <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Footer <span class="required">*</span>

                     </label>
                     <div class="col-md-6 col-sm-6 ">
                        <input type="file" name="footer" class="form-control">
                     </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="item form-group">
                     <div class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-primary" type="button">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                     </div>
                  </div>

               </form>
            </div>
      </div>
   </div>
</div>
@endsection