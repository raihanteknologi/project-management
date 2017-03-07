@extends('backend.layouts.main')

@section('title')
Team Management
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">
                    {{ $user->name }} <small>{{ '@'.$user->username }}</small>
                </h4>
            </div>
            <div class="content">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#summary" aria-controls="home" role="tab" data-toggle="tab">Profile Summary</a></li>
                    <li role="presentation"><a href="#edit" aria-controls="profile" role="tab" data-toggle="tab">Edit Profile</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="summary">
                        <br>
                        <center>
                            <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                            <h3 class="media-heading">{{ $user->name }} <small>{{ '@'.$user->username }}</small></h3>
                            <span><strong>Skills: </strong></span>
                                <span class="label label-warning">HTML5/CSS</span>
                                <span class="label label-info">Adobe CS 5.5</span>
                                <span class="label label-info">Microsoft Office</span>
                                <span class="label label-success">Windows XP, Vista, 7</span>
                            </center>
                            <hr>
                            <center>
                            <p><strong>Bio: </strong><br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                            <br>
                        </center>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="edit">
                        <div class="container">
                            <form action="sa" class="col-md-8 col-xs-12">
                                <br>
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Full Name</label>
                                    <input type="text" name="name" class="form-control border-input" value="{{ $user->name }}" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-control border-input" value="{{ $user->username }}" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control border-input" value="{{ $user->email }}" placeholder="Email Address">
                                </div>
                                <hr>
                                <div class="form-group col-md-6">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control border-input" placeholder="Enter Password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Repeat Password</label>
                                    <input type="password" class="form-control border-input" placeholder="Enter Password">
                                </div>
                                <hr>
                                <br>
                                <button type="submit" class="btn btn-info btn-full">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection