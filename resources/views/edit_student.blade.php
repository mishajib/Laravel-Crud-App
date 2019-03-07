@extends('layout.masterlayout')
@section('site-title', 'Edit Student')

@section('main-content')
    <div class="container p-2">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>oh snap!</strong> {{$error}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach

        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Student</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update.student', $student->id)}}" method="post" class="needs-validation" novalidate>
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 mb-3 md-form">
                                    <label for="firstname">First name</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" value="{{$student->first_name}}" required>
                                </div>
                                <div class="col-md-6 mb-3 md-form">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control" id="lastname" value="{{$student->last_name}}" name="lastname" placeholder="Last name" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 mb-3 md-form">
                                    <label for="username">User Name</label>
                                    <input type="text" class="form-control" id="username" value="{{$student->username}}" name="username" placeholder="Username" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 mb-3 md-form">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" value="{{$student->email}}" name="email" placeholder="Email" required>
                                </div>

                                <div class="col-md-6 mb-3 md-form">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" value="{{$student->phone}}" name="phone" placeholder="Phone number" required>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">

                                <button class="btn btn-primary btn-lg btn-rounded" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
