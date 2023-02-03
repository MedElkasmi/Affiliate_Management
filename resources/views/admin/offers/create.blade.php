@extends('admin.master')
@section('content')
<div class="row">
   <div class="col-md-12 col-sm-12  ">
      <div class="x_panel">
         <div class="x_title">
            <h2><i class="fa fa-bars"></i> Tabs <small>Float left</small></h2>
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
            <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" id="offers-tab" data-toggle="tab" href="#offers" role="tab" aria-controls="offers" aria-selected="true">Offers Details</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="subjects-tab" data-toggle="tab" href="#subjects" role="tab" aria-controls="subjects" aria-selected="false">Subjects</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="froms-tab" data-toggle="tab" href="#froms" role="tab" aria-controls="froms" aria-selected="false">Froms</a>
               </li>
               <li class="nav-item">
                <a class="nav-link" id="creatives-tab" data-toggle="tab" href="#creatives" role="tab" aria-controls="creatives" aria-selected="false">Creatives</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="offers" role="tabpanel" aria-labelledby="offers-tab">
                <div class="x_title">
                    <h2>Create New Offer</h2>
                    <div class="clearfix"></div>
                </div>
                <form method="post" action="">
                    @csrf
                    
                    <div class="item form-group">
                        <label style="margin-top:7px;">
                            Team 1
                            <input style=" margin-right:10px;" type="checkbox" class="js-switch" checked /> 
                        </label>
                        <div class="col-md-5 col-sm-5">
                            <input type="text" name="name" required="required" class="form-control">
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <input type="text" name="name" required="required" class="form-control">
                        </div>
                        <label style="margin-top:10px;">
                            <a href=""><i class="fa fa-share"></i></a>
                        </label>
                    </div>
                    <div class="item form-group">
                        <label style="margin-top:7px;">
                            Team 1
                            <input style=" margin-right:10px;" type="checkbox" class="js-switch" checked /> 
                        </label>
                        <div class="col-md-5 col-sm-5">
                            <input type="text" name="name" required="required" class="form-control">
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <input type="text" name="name" required="required" class="form-control">
                        </div>
                        <label style="margin-top:10px;">
                            <a href=""><i class="fa fa-share"></i></a>
                        </label>
                    </div>
                    <div class="item form-group">
                        <label style="margin-top:7px;">
                            Team 1
                            <input style=" margin-right:10px;" type="checkbox" class="js-switch" checked /> 
                        </label>
                        <div class="col-md-5 col-sm-5">
                            <input type="text" name="name" required="required" class="form-control">
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <input type="text" name="name" required="required" class="form-control">
                        </div>
                        <label style="margin-top:10px;">
                            <a href=""><i class="fa fa-share"></i></a>
                        </label>
                    </div>
                    <div class="item form-group">
                        <label style="margin-top:7px;">
                            Team 1
                            <input style=" margin-right:10px;" type="checkbox" class="js-switch" checked /> 
                        </label>
                        <div class="col-md-5 col-sm-5">
                            <input type="text" name="name" required="required" class="form-control">
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <input type="text" name="name" required="required" class="form-control">
                        </div>
                        <label style="margin-top:10px;">
                            <a href=""><i class="fa fa-share"></i></a>
                        </label>
                    </div>
                    <div class="item form-group">
                        <label style="margin-top:7px;">
                            Team 1
                            <input style=" margin-right:10px;" type="checkbox" class="js-switch" checked /> 
                        </label>
                        <div class="col-md-5 col-sm-5">
                            <input type="text" name="name" required="required" class="form-control">
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <input type="text" name="name" required="required" class="form-control">
                        </div>
                        <label style="margin-top:10px;">
                            <a href=""><i class="fa fa-share"></i></a>
                        </label>
                    </div>
                    <div class="item form-group">
                        <label style="margin-top:7px;">
                            Team 1
                            <input style=" margin-right:10px;" type="checkbox" class="js-switch" checked /> 
                        </label>
                        <div class="col-md-5 col-sm-5">
                            <input type="text" name="name" required="required" class="form-control">
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <input type="text" name="name" required="required" class="form-control">
                        </div>
                        <label style="margin-top:10px;">
                            <a href=""><i class="fa fa-share"></i></a>
                        </label>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
        
                </form>
               </div>
               <div class="tab-pane fade" id="subjects" role="tabpanel" aria-labelledby="subjects-tab">
                  Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                  booth letterpress, commodo enim craft beer mlkshk aliquip
               </div>
               <div class="tab-pane fade" id="froms" role="tabpanel" aria-labelledby="froms-tab">
                  xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                  booth letterpress, commodo enim craft beer mlkshk 
               </div>
               <div class="tab-pane fade" id="creatives" role="tabpanel" aria-labelledby="creatives-tab">
                xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                booth letterpress, commodo enim craft beer mlkshk 
             </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
