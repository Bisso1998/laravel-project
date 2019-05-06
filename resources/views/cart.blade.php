@extends('navbar')
@section('content')
<div class="container"  style="margin-top: 50px">
<div class="row" style="">
<br/>
<?php
// Declaring variables
$sum = 0;
$count = 0;
?>
@foreach ($Items as $Item)
    @if($Item->isSelected === '1')
    <form method="POST" action="/cart/{{$Item->itemId}}">
    <div class="col-md-4">
   
    {{ csrf_field()  }}
        {{ method_field('PATCH') }}

<p style="display: none">         {{$sum = $sum + $Item->itemPrice}} {{$count+=1}}
</p>
    <div class="card" style="width: 300px;">
  <img class="card-img-top" src="{{$Item->itemImage}}" alt="Card image cap" style="background-position: center; background-repeat: no-repeat; background-size: cover; height: 250px">
  <div class="card-body">
    <h5 class="card-title"> {{$Item->itemName}} </h5>
    <p class="card-text">{{$Item->itemDescription}} </p>
    <br/>
   <p style="font-size: 26px">
   <b>{{$Item->itemPrice}}$</b>
   </p>
    <br/>

    <button type="submit"  class="btn btn-warning">Remove from shopping cart</button> 

  </div>
</div>
</div>
</form>

    @endif

@endforeach
<div class="card" style="width: 300px; height: 200px">
  <div class="card-body">
    <h5 class="card-title">Cart Details</h5>
    <p class="card-text">
    <p style="font-size: 30px">
   <b>    Total cost = {{$sum}}$ 
    </b>
   </p>
   <p style="font-size: 30px">
    Number of pets {{$count}}
   </p>
    </p>
  </div>
</div>
</div>
@endsection