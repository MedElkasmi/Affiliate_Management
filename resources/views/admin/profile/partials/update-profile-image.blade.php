<div class="col-md-6">
    <div class="x_panel">
        <div class="x_title">
            <h2>Update Profile Image</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
            <form method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 ">Password</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input type="file" name='profile_name' class="form-control" value="passwordonetwo">
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-9 col-sm-9  offset-md-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>