@extends('backend.layouts.main')

@section('title')
Project Management
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <h3>List of Project(s)</h3>
        <div class="card">
            <table class="table table-condensed table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Client Name</th>
                        <th>Project Name</th>
                        <th>Price (Rp)</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @forelse($data as $project)
                    <tr>
                        <td>#{{ $no++ }}</td>
                        <td>{{ $project->project_name }}</td>
                        <td>{{ $project->start_date }}</td>
                        <td>{{ $project->due_date }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">
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
    
    <div class="col-md-4">
        <h3>Quick Add Team</h3>
        <form action="sa">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Full Name">
            </div>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email Address">
            </div>
            <hr>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Enter Password">
            </div>
            <button type="submit" class="btn btn-info btn-full">Submit</button>
        </form>
    </div>
</div>
@endsection