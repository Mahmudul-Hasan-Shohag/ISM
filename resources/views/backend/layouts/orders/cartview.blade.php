@extends('backend.master')
@section('dashboard')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>selling cart view</title>
  <!-- Roboto Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://mdbootstrap.com/previews/ecommerce-demo/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="https://mdbootstrap.com/previews/ecommerce-demo/css/mdb-pro.min.css">
  <!-- Material Design Bootstrap Ecommerce -->
  <link rel="stylesheet" href="https://mdbootstrap.com/previews/ecommerce-demo/css/mdb.ecommerce.min.css">
  <!-- Your custom styles (optional) -->

</head>

<body class="skin-light">

  <!--Main Navigation-->
  <header>

    

   

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Block Content-->
      <section class="mt-5 mb-4">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-lg-8">


  <!-- Card -->
  <div class="card wish-list mb-4">
              <div class="card-body">
              <div class="form-group">
  
               
                <hr class="mb-4">
               

              </div>
            </div>
            <!-- Card -->




            <!-- Card -->
            <div class="card wish-list mb-4">
              <div class="card-body">

                <h5 class="mb-4"><span>{{count(Cart::content())}}</span> items added</h5>
                <div class="form-group">
     @if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif 
   
@foreach($cart as $data)
                <div class="row mb-4">
                  <div class="col-md-5 col-lg-3 col-xl-3">
                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                      <img class="img-fluid w-100"
                        src="{{url('/uploads/product/'.$data->options->size)}}" alt="Sample">
                      <a href="#!">
                        <div class="mask waves-effect waves-light">
                         
                           
                          <div class="mask rgba-black-slight waves-effect waves-light"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-7 col-lg-9 col-xl-9">
                    <div>
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5>Product Name: {{$data->name}}</h5>
                          <p class="mb-3 text-muted text-uppercase small">Product ID: {{$data->id}}</p>
                          <p class="mb-3 text-muted text-uppercase small">Quantity: {{$data->qty}}</p>
                          <p class="mb-3 text-muted text-uppercase small">Subtotal: {{$data->subtotal()}}</p>
                        </div>
                        <div>
                          
                 <form action="{{route('cart.update',$data->rowId)}}" method="post"> 
                 @csrf      
                        <div>
                          <div class="def-number-input number-input safari_only mb-0 w-100">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                              class="minus" type="submit"></button>
                            <input class="quantity" min="0" name="qty" value="{{$data->qty}}" type="number">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                              class="plus" type="submit"></button>
                          </div>
                        </div>
                      </div>
               </form>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <a href="{{route('cart.remove',$data->rowId)}}" type="" class="card-link-secondary small text-uppercase mr-3"><i
                              class="fas fa-trash-alt mr-1"></i> Remove item </a>
                          
                        </div>
                        <p class="mb-0"><span><strong>Unit Price: {{$data->price}} BDT</strong></span></p>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
               
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 <p class="mb-0"><h5>Total Cost: {{Cart::subtotal()}} BDT</h5></p>
                     <form  action="{{route('create.invoice')}}" method="post">
                     @csrf 

                     <label for="customer_id">Select Customer ID</label>
                <select class="form-control" name="customer_id" id="customer_id">
                   @foreach($customer as $data)
                    <option value="{{$data->id}}"> {{$data->id}}</option>
                  @endforeach
                </select>

               <br>

               <label for="payment_status"> Payment method</label>
                <select class="form-control" name="payment_status" id="payment_status">
                <option value="Cash"> Cash</option>
                <option value="Bkash"> Bkash</option>
                <option value="Nogod"> Nogod</option>
                <option value="Rocket"> Rocket</option>
                </select>
               


            <div class="form-row" >
    <div class="form-group col-md-6">
      <label for="cash">Pay</label>
      <input type="number" class="form-control" id="cash" name="cash">
    </div>
    <div class="form-group col-md-6">
      <label for="due">Due</label>
      <input type="number" class="form-control" id="due" name="due" value="">
    </div>
  </div>
       
   <button type="submit" class="btn btn-success">Check</Button>
  </form>
              
               

            


            
         



            
      

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="https://mdbootstrap.com/previews/ecommerce-demo/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://mdbootstrap.com/previews/ecommerce-demo/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://mdbootstrap.com/previews/ecommerce-demo/js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://mdbootstrap.com/previews/ecommerce-demo/js/mdb.min.js"></script>
    <!-- MDB Ecommerce JavaScript -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/ecommerce-demo/js/mdb.ecommerce.min.js"></script>
  <script>

  </script>
</body>

</html>
@endsection