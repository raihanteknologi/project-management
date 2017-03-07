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
                    List of Member(s)
                    <div class="pull-right">
                        <a href="{{ route('team.formadd') }}" class="btn btn-info btn-lg btn-xs">Add Member</a>
                    </div>
                </h4>
            </div>
            <div class="content">
                <table class="table table-condensed table-hover table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @forelse($data as $user)
                        <tr>
                            <td>#{{ $no++ }}</td>
                            <td><a href="{{ route('team.detail', $user->id) }}">{{ $user->name }}</a></td>
                            <td>{{ '@'.$user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>IT Manager</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">
                                <center><h3>There's no Data</h3></center>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                    
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    
</div>
@endsection