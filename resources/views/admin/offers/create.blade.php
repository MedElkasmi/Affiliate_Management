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
                  <a class="nav-link active" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="true">New Offer</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="offers-tab" data-toggle="tab" href="#offers" role="tab" aria-controls="offers" aria-selected="true">Offers Details</a>
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
               <div class="tab-pane fade  show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                  <div class="row">
                     <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                           <div class="x_title">
                              <h2>Create New Offer</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                 <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                 </li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                       <li><a class="dropdown-item" href="#">Settings 1</a>
                                       </li>
                                       <li><a class="dropdown-item" href="#">Settings 2</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li><a class="close-link"><i class="fa fa-close"></i></a>
                                 </li>
                              </ul>
                              <div class="clearfix"></div>
                           </div>
                           <div class="x_content">
                              <br />
                              <form>
                                 <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Offer Name</label>
                                    <div class="col-md-6 col-sm-6">
                                       <input type="text"required="required" class="form-control">
                                    </div>
                                 </div>
                                 <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Offer ID</label>
                                    <div class="col-md-6 col-sm-6">
                                       <input type="text" required="required" class="form-control">
                                    </div>
                                 </div>
                                 <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 label-align">Select Network</label>
                                    <div class="col-md-6 col-sm-6">
                                       <select class="form-control">
                                          <option>Network1</option>
                                          <option>Network2</option>
                                          <option>Network3</option>
                                          <option>Network4</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 label-align">Descripton / Restriction</label>
                                    <div class="col-md-6 col-sm-6">
                                       <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                 </div>
                                 <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Payout</label>
                                    <div class="col-md-6 col-sm-6">
                                       <input type="text"required="required" class="form-control">
                                    </div>
                                 </div>
                                 <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 label-align">Select Vertical</label>
                                    <div class="col-md-6 col-sm-6">
                                       <select class="form-control">
                                          <option>Vertical1</option>
                                          <option>Vertical1</option>
                                          <option>Vertical1</option>
                                          <option>Vertical1</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 label-align">GEOs</label>
                                    <div class="col-md-6 col-sm-6">
                                       <input id="tags_1" type="text" class="tags form-control" />
                                       <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label class="control-label col-md-3 col-sm-3 label-align">Offer Type</label>
                                    <div class="col-md-6 col-sm-6">
                                       <div class="radio">
                                          <label>
                                          <input type="radio" class="flat" checked name="iCheck"> CPA
                                          </label>
                                       </div>
                                       <div class="radio">
                                          <label>
                                          <input type="radio" class="flat" name="iCheck"> CPL
                                          </label>
                                       </div>
                                       <div class="radio">
                                          <label>
                                          <input type="radio" class="flat" name="iCheck"> RevShare
                                          </label>
                                       </div>
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
               </div>
               <div class="tab-pane fade" id="offers" role="tabpanel" aria-labelledby="offers-tab">
                  <div class="row">
                     <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                           <div class="x_title">
                              <h2>Create New Offer</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                 <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                 </li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                       <li><a class="dropdown-item" href="#">Settings 1</a>
                                       </li>
                                       <li><a class="dropdown-item" href="#">Settings 2</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li><a class="close-link"><i class="fa fa-close"></i></a>
                                 </li>
                              </ul>
                              <div class="clearfix"></div>
                           </div>
                           <div class="x_content">
                              <br />
                              <form method="post" action="">
                                 @csrf
                                 <div class="item form-group">
                                    <label class="col-md-2 col-sm-2" style="margin-top:7px;">
                                    Team 1
                                    <input style=" margin-right:10px;" type="checkbox" class="js-switch" checked /> 
                                    </label>
                                    <div class="col-md-4 col-sm-4">
                                       <input type="text" name="name" required="required" class="form-control">
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                       <input type="text" name="name" required="required" class="form-control">
                                    </div>
                                    <label class="col-md-2 col-sm-2" style="margin-top:10px;">
                                    <a href=""><i class="fa fa-share"></i></a>
                                    </label>
                                 </div>
                                 <div class="item form-group">
                                    <label class="col-md-2 col-sm-2" style="margin-top:7px;">
                                    Team 1
                                    <input style=" margin-right:10px;" type="checkbox" class="js-switch" checked /> 
                                    </label>
                                    <div class="col-md-4 col-sm-4">
                                       <input type="text" name="name" required="required" class="form-control">
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                       <input type="text" name="name" required="required" class="form-control">
                                    </div>
                                    <label class="col-md-2 col-sm-2" style="margin-top:10px;">
                                    <a href=""><i class="fa fa-share"></i></a>
                                    </label>
                                 </div>
                                 <div class="item form-group">
                                    <label class="col-md-2 col-sm-2" style="margin-top:7px;">
                                    Team 1
                                    <input style=" margin-right:10px;" type="checkbox" class="js-switch" checked /> 
                                    </label>
                                    <div class="col-md-4 col-sm-4">
                                       <input type="text" name="name" required="required" class="form-control">
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                       <input type="text" name="name" required="required" class="form-control">
                                    </div>
                                    <label class="col-md-2 col-sm-2" style="margin-top:10px;">
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
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="subjects" role="tabpanel" aria-labelledby="subjects-tab">
                  @include('admin.offers.subjects.create')
               </div>
               <div class="tab-pane fade" id="froms" role="tabpanel" aria-labelledby="froms-tab">
                  @include('admin.offers.froms.create')
               </div>
               <div class="tab-pane fade" id="creatives" role="tabpanel" aria-labelledby="creatives-tab">
                  @include('admin.offers.creatives.create')
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
