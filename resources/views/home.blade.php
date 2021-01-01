@extends('base')
@section('title')
This is homepage
@endsection
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-3 mt-2">
            @foreach($standards as $item)
            <div class="list-group">
                <a href="" class="list-group-item list-group-item-action">{{$item->standard}}</a>
            </div>
            @endforeach
        </div>
        <div class="col-lg-9">
            @foreach($posts as $item)

            <div class="card mt-2">
                <div class="card-body">
                    <h5 class="text-center">This Is Student's details</h5>
                    <p class="lead">
                        <h6>Name-</h6>{{$item->name}}
                    </p>
                    <p class="lead">
                        <h6>DOB-</h6>{{$item->dob}}
                    </p>
                    <p class="lead">
                        <h6>Roll-</h6>{{$item->roll}}
                    </p>
                    <p class="lead">
                        <h6>Reg_no.-</h6>{{$item->reg_no}}
                    </p>
                    <p class="lead">
                        <h6>About-</h6>{{$item->about}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
