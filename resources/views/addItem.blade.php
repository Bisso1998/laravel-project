<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    span:hover {
        background: rgba(0, 0, 0, 0.2);
    }
    a {
        color: white !important;
        text-decoration: none !important;
    }
</style>
<div class="navbar-top" style="height: 55px;   width: 100%; top : 0px; background-color: #0F69D9">
<span style="font-size: 30px; color: white; padding: 8px;">
    BuyPet.com
</span>
<span style="font-size: 20px; color: white; padding: 15px;  cursor: pointer; margin-left: 200px; ">
<a  href="/shop">Shop</a>
</span>
<span style="font-size: 20px; color: white; padding: 15px; cursor: pointer ; margin-left: 200px;">
    <a  href="/cart">My Cart</a>

</span>
<span style="font-size: 20px; color: white; padding: 15px;  cursor: pointer ; margin-left: 200px;">
<a  href="/addItem">Sell Your Cat</a>
</span>

</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><nav class="navbar navbar-default">

    <body>
      

<div class="container" style="margin-top: 40px">
<form method="POST" action="/addItem">
{{ csrf_field()  }}
<div class="form-group">
    <input name="itemName" placeholder="Title...."  class="form-control" style="width: 800px">
    </div>
    <div>
    <input name="itemImage" placeholder="Enter Image Url...." class="form-control">
    <br/>
    </div>
    <div>
    <input name="itemPrice" placeholder="Enter Item Price...." class="form-control">
    <br/>

    </div>
    <div>
    <input name="itemDescription" placeholder="Enter Item Description...." class="form-control">
    <br/>

    </div>
    <div>
    <input name="itemType" placeholder="Enter Item Type...." class="form-control">
    <br/>

    </div>
    <div>
        <button class="btn btn-success btn-block" type="submit">Create</button> 
    </div>
</form> 
</div>


@foreach($errors->all() as $error )
    <li>{{$error}}</li>
@endforeach
    </body>
</html>