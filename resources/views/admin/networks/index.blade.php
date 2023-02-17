@extends('admin.master')
@section('content')
<div class="col-md-12 col-sm-12">
 




           <div class="x_panel">
              <div class="x_title">
                 <h2>List of Networks</h2>
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
                            List of Networks
                          </p>
                          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                             <thead>
                                <tr>
                                   <th>ID</th>
                                   <th>Network</th>
                                   <th>Login path</th>
                                   <th>Username</th>
                                   <th>APi Key</th>
                                   <th>Created Date</th>
                                   <th>Action</th>
                                </tr>
                             </thead>
                             <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($networks as $network)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$network->network}}</td>
                                    <td>{{$network->urlpath}}</td>
                                    <td>{{$network->username}}</td>
                                    <td>{{$network->apikey}}</td>
                                    <td>{{$network->created_at}}</td>
                                    <td>
                                       <a href="{{route('network.edit',$network)}}" class="btn btn-primary btn-sm" style="color: white">Edit</a>
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