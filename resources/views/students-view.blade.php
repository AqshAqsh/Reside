<!DOCTYPE html>
<html lang="en">
    <head>
        <title>View Record

        </title>
        @include('layouts.links') 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        @include('layouts.header')
    
        <div class="container-fluid">
            <b><h1 style="text-align: center; ">Students record view</h1></b>
            <br>
        </div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <a href="{{ route('student.add') }}">
                            <button class="btn btn-primary float-right" >Add Student
                            </button>
                        </a>
                        
                    </tr>
                    
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Phone_no</th>
                        <th>Check_in</th>
                        <th>Check_out</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $value)
                    <tr>
                        <td> {{$value->name}}</td>
                        <td> {{$value->email}} </td>
                        <td>{{$value->dob}}</td>
                        <td>{{$value->gender}}</td>
                        <td>{{$value->address}}</td>
                        <td>{{$value->phone_no}}</td>
                        <td>{{$value->check_in}}</td>
                        <td>{{$value->check_out}}</td>
                        <td>
                            <a href="{{url('/student/delete/')}}/{{$value->id}}">
                                <button class="btn btn-danger p-1">Delete</button> 
                            </a>
                        <button class="btn btn-primary p-1">Update</button></td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('layouts.footer') 
    </body>
</html>
