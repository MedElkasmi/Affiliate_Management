@extends('admin.master')

@section('content')

<div class="row">

    @include('admin.profile.partials.update-profile-information-form')
</div>

<div class="row">
    @include('admin.profile.partials.update-password-form')

    @include('admin.profile.partials.update-profile-image')
</div>


    


@endsection
