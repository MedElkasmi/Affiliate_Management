<div class="row">
    <div class="col-md-12">
       <div class="x_panel">
          <div class="x_title">
             <h2>Assets Lists </h2>
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
          <div style="display: flex;justify-content: flex-end;">
            <a href="{{route('creative.create')}}" class="btn btn-success btn-sm" style="color: white">Add New Creative</a>
          </div>
          <div class="x_content">
             <div class="row">
               @foreach ($creatives as $asset)
               <div class="col-md-55">
                  <div class="thumbnail">
                     <div class="image view view-first">
                        <img style="width: 100%; display: block;" src="{{ url('upload/creatives/'. $asset->creative_image )}}" alt="image" />
                        <div class="mask no-caption">
                           <div class="tools tools-bottom">
                              <a href="{{route('creative.edit',$asset)}}"><i class="fa fa-pencil"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="caption">
                        <p><strong>{{$asset->creative_name}}</strong></p>
                     </div>
                  </div>
               </div>
               @endforeach
             </div>
          </div>
       </div>
    </div>
 </div>