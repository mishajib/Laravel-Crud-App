@extends('layout.masterlayout')

@section('site-title', 'Home')

@section('main-content')
    <div class="container">
        @if (session('successMsg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Well done!</strong> {{session('successMsg')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">First name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email address</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($students as $key => $student)


                    <tr class="text-center">
                        <th scope="row">{{++$key}}</th>
                        <td>{{$student->first_name}}</td>
                        <td>{{$student->last_name}}</td>
                        <td>{{$student->username}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->phone}}</td>
                        <td>

                                <a href="{{route('edit.student',$student->id)}}" class="btn btn-default btn-sm"><i
                                        class="fa fa-edit"></i></a> |
                            <form action="{{route('delete.student',$student->id)}}" id="delete-form-{{$student->id}}" style="display: none;" method="post">
                                @csrf
                                {{ method_field('delete') }}
                            </form>
                            
                            <button onclick="if (confirm('Are you sure, you want to delete this?')){
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{$student->id}}').submit();
                            }else{
                                event.preventDefault();
                            } " class="btn btn-danger btn-sm" href=""><i
                                        class="far fa-trash-alt"></i></button>
                            

                        </td>
                    </tr>
            @endforeach
                    </tbody>
                </table>
                {{$students->links()}}
            </div>
        </div>
    </div>
@stop


