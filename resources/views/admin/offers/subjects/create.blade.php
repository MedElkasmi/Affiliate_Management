@extends('admin.master')
@section('content')
<div class="row">
   <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
         <div class="x_title">
            <h2>List of Active Subjects</h2>
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
            <div class="row">
               <div class="col-sm-12">
                  <div class="card-box table-responsive">
                     <p class="text-muted font-13 m-b-30">
                       Add your list
                     </p>
                     <form>

                        <div class="item form-group">
                            <div class="col-md-12 col-sm-12">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <div class="col-md-2 col-sm-2">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    
                    </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection