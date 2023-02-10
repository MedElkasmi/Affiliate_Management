@extends('admin.master')
@section('content')
<div class="col-md-12 col-sm-12">
 




           <div class="x_panel">
              <div class="x_title">
                 <h2>List of Verticals</h2>
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
                           List of Verticals
                          </p>
                          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                             <thead>
                                <tr>
                                   <th>ID</th>
                                   <th>Vertical</th>
                                   <th>Created Date</th>
                                   <th>Action</th>
                                </tr>
                             </thead>
                             <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($verticals as $vertical)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$vertical->vertical}}</td>
                                    <td>{{$vertical->created_at}}</td>
                                    <td>
                                       <a href="" class="btn btn-primary btn-sm" style="color: white">Edit</a>
                                       <a href="" class="btn btn-danger btn-sm" style="color: white">Remove</a>
                                    </td>
                                 </tr>
                                @endforeach
                             </tbody>
                          </table>
                       </div>
                    </div>
                 </div>
              </div>
           </div>




</div>
@endsection