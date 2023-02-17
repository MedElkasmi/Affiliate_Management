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
                        <a href="{{route('subject.create')}}" class="btn btn-success btn-sm" style="color: white">Add New Subject</a>
                      </p>
                      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                         <thead>
                            <tr>
                               <th>ID</th>
                               <th>Subject</th>
                               <th>Added</th>
                               <th>Status</th>
                            </tr>
                         </thead>
                         <tbody>
                           @foreach ($subjects as $subject)
                           <tr>
                              <td>1</td>
                              <td>{{$subject->subjects}}</td>
                              <td>{{$subject->created_at}}</td>
                              <td>
                                 <a href="{{route('subject.edit',[$subject->id])}}" class="btn btn-primary btn-sm" style="color: white">Edit</a>
                                 <form method="POST" action="{{ route('subject.destroy', ['subject' => $subject->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" style="color: white">Remove</button>
                                </form>
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
 </div>