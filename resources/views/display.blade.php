<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ACE MOTORS</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/css/mdb.lite.min.css" integrity="sha512-Eu5EEZpsrO6niYlnhT+ITom/YVGoIZGEsbAvZ+gUJsO3Xaq9+hX4vZnbecMn/Cq5KOdmNOdehu/U80111W9xsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/js/mdb.min.js" integrity="sha512-XFd1m0eHgU1F05yOmuzEklFHtiacLVbtdBufAyZwFR0zfcq7vc6iJuxerGPyVFOXlPGgM8Uhem9gwzMI8SJ5uw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

    <div class="container">

    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="/display">ACE MOTORS</a>
    </div>
<ul class="nav navbar-nav navbar-right">
      <li><a href="/create"><span class="glyphicon glyphicon-hand-right" style="margin-right:5px;"></span>Sell a Car</a></li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span class="glyphicon glyphicon-user">   {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
    </ul>
    </div>
</nav>


 






<div class="row"">
 @foreach($posts as $post)    
 <div class="col-lg-2"> 
<img src="/cover/{{$post->cover}}" class="img-responsiveness" style="background-color:#cecece; height:200px;width: 200px;" > 
<a class="btn" style="background-color:blue;color:white" href="/morelistings/{{$post->id}}">more</a>
<ul>
  <li>{{$post->carmake}}</li>
  <li>{{$post->carmodel}}</li>
  <li>{{$post->yearofmanufacture}}</li>
  <li>{{$post->price}}</li>
  <li>{{$post->location}}</li>
  <a href="/edit/{{$post->id}}"/>Edit</a>
</ul>    
</div>
@endforeach
    </div>


    <footer class="page-footer teal pt-4">

<!-- Footer Text -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-12""> 

      <!-- Content -->
      <p  style="color: black;font-size: 20px; font-weight: bolder;padding: 5px;">Disclaimer</p>
acemotors.co.ke is a vehicle sales web portal dedicated to the advertising of cars for sale in Kenya. 
The website currently holds a catalogue of  vehicles for sale, mainly used cars in kenya from car dealers nationwide. 
Our mission is to provide a trusted and simple to use portal for new & used car buy and sell needs in Kenya. New & used car dealers from all around kenya 
advertise their second-hand cars on our website. Private persons can now also advertise their vehicles for sale on completely free of charge.
All autos for sale advertised on acemotors.co.ug  come from a network of trusted car dealers and auto exchanges.
The selection of new & pre-owned automobiles spans every major and minor brands and includes all types of the vehicles. 
Buyers can find a wide range of vehicles for sale including buses, trucks, motorbikes, and any other kind of motor vehicles. 
The second-hand cars available covers a wide range of prices accessible to anybody wishing to purchase a pre-owned or second-hand car in Kenya. kelekele is a leading motoring portal in Kenya, 
catering for all vehicle buy and sell cars.</p>
    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-12 mb-md-0 mb-3">

      <!-- Content -->


    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Text -->

</footer>
<!-- Footer -->


<footer class="page-footer  indigo">

<div class="row text-center">
<div class="col-md-4 mb-md-0 mb-4">
<ul class="list-unstyled">

<li><a href="/contacts"> Terms & Conditions</a></li>
<li><a href="/home">  Privacy Policy</a></li>
</ul>
</div>
<div class="col-md-4 mb-md-0 mb-4">
<ul class="list-unstyled">

<li><a href="/contacts">Billing Policy </a></li>
<li><a href="/home">support@fsea.co.ke</a></li>
</ul>
</div>

<div class="col-md-4 mb-md-0 mb-4">
<ul class="list-unstyled">

<li><a href="/contacts"> Facebook </a>  </li>
<li><a href="/home">  Our Twitter  </a> </li>
</ul>

</div>
</div>
</footer>

<footer class="page-footer  blue">
<div class="footer-copyright text-center py-3">
<div class="col-md-4 mb-md-0 mb-4">
<ul class="list-unstyled">

</ul>
</div>
<div class="col-md-4 mb-md-0 mb-4">
<ul class="list-unstyled">
   
     <li><a href="/Home">Privacy Statement</a></li>
</ul>
</div>

</ul>
</div>
</footer>


</div>



 </body>
</html>



