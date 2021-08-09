<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel CRUD With Multiple Image Upload</title>

      <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
    <body>

        <div class="container">

            <h3 class="text-center text-danger"><b>Laravel CRUD With Multiple Image Upload</b> </h3>
            <a href="/create" class="btn btn-outline-success">Add New Post</a>

            <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Description</th>
                    <th>Cover</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->author}}</td>
                        <td>{{$post->body}}</td>
                        <td><img src="/cover/{{$post->cover}}" class="img-responsiveness" style="max-height:100px;max-width: 100px;" alt="" src=""></td>
                        <td><a href="/edit/{{$post->id}}" class="btn btn-outline-primary">update</a></td>
                        <td>
<form action="/deleteimage/{{$post->id}}" method="post">
<button class="btn btn-outline-danger" onclick="return confirm('are you sure')" type="submit" >delete</button>
@csrf
@method('delete')
</form>

                        </td>
                </tr>
                        @endforeach
                </tbody>
              </table>



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
      <h5 class="text-uppercase font-weight-bold">Footer text 2</h5>
   


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