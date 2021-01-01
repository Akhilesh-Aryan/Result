@extends('base')
@section('title')
result | on laravel
@endsection
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <ul>
                @foreach ($errors->all() as $error)
                <li class="text-danger">{{$error}}</li>   
                @endforeach
                </ul>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <h4 class="bg-dark text-white text-center" style="padding: 10px;">Insert Class Here</h4>
                <div class="card-body">
                <form action="{{route('insertClass')}}" method="POST">
                    @csrf
                        <div class="mb-3">
                            <label for="standard">Class of Student</label>
                            <input type="text" name="standard" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="submit"class="form-control btn-block btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <h4 class="bg-dark text-white text-center" style="padding: 10px;">Insert Details</h4>
                <div class="card-body">
                <form action="{{route('insertDetails')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="dob">Age/Date of birth</label>
                            <input type="text" class="form-control" name="dob">
                        </div>
                        <div class="mb-3">
                            <label for="roll">Roll no.</label>
                            <input type="number" class="form-control" name="roll">
                        </div>
                         <div class="mb-3">
                            <label for="Reg_no">Reg no.</label>
                            <input type="text" class="form-control" name="reg_no">
                        </div>
                        <div class="mb-3">
                            <label for="about">About Student</label>
                            <textarea rows="3" class="form-control" name="about"></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="form-control btn btn-success btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection