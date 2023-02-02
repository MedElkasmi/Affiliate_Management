<div class="x_panel">
    <div class="x_title">
        <h2>Update profile</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <br />
        <form method="post" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')
            
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Full Name 
                    <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="text" name="name" required="required" class="form-control">
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Email 
                    <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="email" name="email" required="required" class="form-control">
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Retype Email
                    <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="email" name="re-email" class="form-control">
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