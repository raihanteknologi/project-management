@extends('backend.layouts.main')

@section('title')
Team Management
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Add Member</h4>
            </div>
            
            <div class="content">
                <form action="{{ route('team.add') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" name="name" class="form-control border-input" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control border-input" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control border-input" placeholder="Email Address">
                    </div>
                    <hr>
                    <div class="form-group col-md-6">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control border-input" placeholder="Enter Password">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Repeat Password</label>
                        <input type="password" name="password_confirmation" class="form-control border-input" placeholder="Enter Password">
                    </div>
                    <hr>
                    <br>
                    <button type="submit" class="btn btn-info btn-full">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
</div>
@endsection