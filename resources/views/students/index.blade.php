@extends('layout')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                 <h4 class="alert alert-success">{{ session('message')}}</h4>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>STUDENTS LIST
                        <a href="{{route('students.create')}}" class="btn btn-primary float-end"> Add Student</a>
                    </h4>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <th></th>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

