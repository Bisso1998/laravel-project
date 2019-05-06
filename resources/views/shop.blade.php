@extends('navbar')
@section('content')
<ul class="nav nav-pills nav-fill" style="width: 100%; color: black;">
  <li class="nav-item" style="margin: 20px">
  <form method="GET" action="/shop/dog">
  {{ csrf_field()  }}

    <button type="submit" class="nav-link active btn-block" >Dogs</button>
</form>
  </li>
  <li class="nav-item" style="margin: 20px">
  <form method="GET" action="/shop/cat">
  {{ csrf_field()  }}

    <button type="submit" class="nav-link active btn-block" >Cats</button>
</form>  </li>
  <li class="nav-item " style="margin: 20px">
  <form method="GET" action="/shop">
  {{ csrf_field()  }}

    <button type="submit" class="nav-link active btn-block" >All</button>
</form>
  </li>
 
</ul>

<!-- <h1 class="text text-primary" style="margin-top: 30px"> LIST OF ITEMS </h1> -->
<br/>
<br/>

<div class="container"  style="margin-top: 50px">
<div class="row">

@foreach ($Items as $Item)
    @if($Item->isSelected === '0')
    <form method="POST" action="/shop/{{$Item->itemId}}">
    <div class="col-md-4">
   
    {{ csrf_field()  }}
        {{ method_field('PATCH') }}
    <div class="card" style="width: 300px;">
  <img class="card-img-top" src="{{$Item->itemImage}}" alt="Card image cap" style="background-position: center; background-repeat: no-repeat; background-size: cover; height: 250px">
  <div class="card-body">
    <h5 class="card-title"> {{$Item->itemName}} |  Type: {{$Item->itemType}} </h5>
    <p class="card-text">{{$Item->itemDescription}} </p>
    <br/>
   <p style="font-size: 26px">
   <b>{{$Item->itemPrice}}$</b>
   </p>
    <br/>
    <button type="submit"  class="btn btn-primary">Add to shopping cart</button> 

  </div>
</div>
</div>
</form>

    @endif

@endforeach
</div>
@endsection