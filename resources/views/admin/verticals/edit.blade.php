@extends('admin.master')
@section('content')
<div class="col-md-12 col-sm-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> Create New Vertical </h2>
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
            <form method="post" action="{{ route('vertical.update',$vertical) }}">
                @csrf
                @method('PUT')
                
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Vertical
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="vertical" class="form-control" value="{{$vertical->vertical}}">
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection