@extends('admin.master')
@section('content')
<div class="row">
   <div class="col-md-12 col-sm-12">
      <div class="x_panel">
         <div class="x_title">
            <h2><i class="fa fa-bars"></i> Campaign Info</h2>
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
                  <a class="nav-link active" id="subjects-tab" data-toggle="tab" href="#subjects" role="tab" aria-controls="subjects" aria-selected="false">Subjects</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="froms-tab" data-toggle="tab" href="#froms" role="tab" aria-controls="froms" aria-selected="false">Froms</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="creatives-tab" data-toggle="tab" href="#creatives" role="tab" aria-controls="creatives" aria-selected="false">Creatives</a>
               </li>
            </ul>
            <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="subjects" role="tabpanel" aria-labelledby="subjects-tab">
                  @include('admin.offers.subjects.index')
               </div>
               <div class="tab-pane fade" id="froms" role="tabpanel" aria-labelledby="froms-tab">
                  @include('admin.offers.froms.index')
               </div>
               <div class="tab-pane fade" id="creatives" role="tabpanel" aria-labelledby="creatives-tab">
                  @include('admin.offers.creatives.index')
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

 
@endsection
