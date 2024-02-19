@extends('layout')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>STUDENTS LIST
                        <a href="" class="btn btn-primary float-end"> Add Student</a>
                    </h4>
                </div>

                <div class="card-body">
                    <form action="{{route(students.store)}}" method="POST">
                        @csrf
                        @method('POST')
                        <h4>Students</h4>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="firstname" id="floatingInput" placeholder="First Name">
                            <label for="floatingInput">First Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="phone" id="floatingInput" placeholder="Phone Number">
                            <label for="floatingInput">Phone Number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email ID</label>
                        </div>

                        <h4>Students Details</h4>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="alter_no" id="floatingInput" placeholder="Alternative Phone Number">
                            <label for="floatingInput">Alternative Phone Number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="address" id="floatingInput" placeholder="Address">
                            <label for="floatingInput">Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="course" id="floatingInput" placeholder="Course">
                            <label for="Course">Course</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="roll_no" id="floatingInput" placeholder="Roll Number">
                            <label for="Roll Number">Roll Number</label>
                        </div>

                        <div class="form-floating mb-3 d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

