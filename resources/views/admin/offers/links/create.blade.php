<div class="row">
    <div class="col-md-12 col-sm-12 ">
       <div class="x_panel">
          <div class="x_title">
             <h2>Tracking Links</h2>
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
             <form method="POST" action="{{route('link.store')}}">
                @csrf

               
                @foreach ($links as $link)
                <div class="item form-group">
                  <label class="col-md-2 col-sm-2" style="margin-top:7px;">
                  Team 1
                  <input style=" margin-right:10px;" type="checkbox" class="js-switch" checked /> 
                  </label>
                  <div class="col-md-4 col-sm-4">
                     <input type="text" name="redirect" class="form-control" placeholder="Redirect Link" value="{{$link->redirect}}">
                  </div>
                  <div class="col-md-4 col-sm-4">
                     <input type="text" name="footer" class="form-control" placeholder="Unsubscribe Link" value="{{$link->footer}}">
                  </div>
                  <label class="col-md-2 col-sm-2" style="margin-top:10px;">
                  <a href=""><i class="fa fa-share"></i></a>
                  </label>
               </div>
                @endforeach

                <div class="ln_solid"></div>
                <div class="item form-group">
                   <div class="col-md-12 col-sm-12">
                      <button type="submit" class="btn btn-success">Save</button>
                   </div>
                </div>
             </form>
          </div>
       </div>
    </div>
 </div>