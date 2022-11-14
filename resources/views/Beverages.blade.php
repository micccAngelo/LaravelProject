@extends('template')

@section('title', 'Beverages')

@section('content')

    @include('navbar')
    <br>
    <div class= "d-flex justify-content-around">
    @for($i = 0; $i < count($Boba); $i++)
    <div class= "d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top mx-auto" src={{$img[$i]}} alt="Card image cap" style="width: 270px; height: 300px" >
            <div class="card-body">
                <h5 class="card-text">{{$Boba[$i]}}</h5>
                <p class="card-text">{{$Desc[$i]}}</p>
                @if($Type[$i]=="Tea")
                <span class="badge badge-success">{{$Type[$i]}}</span>
                @elseif($Type[$i]=="Boba")
                <span class="badge badge-primary">{{$Type[$i]}}</span>
                @elseif($Type[$i]=="Coffee")
                <span class="badge badge-dark">{{$Type[$i]}}</span>
                @endif
            </div>
        </div>
    </div>
    @endfor
    </div>

@endsection