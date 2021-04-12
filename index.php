<?php

require_once(__DIR__.'/config/database.php');
require_once(__DIR__.'/Includes/header.php');

?>
<link href="Assets/CSS/persotheme4.css" rel="stylesheet">

<main role="main">
<div style="width:100%;">

<div style="float:left;" id="carouselExampleCaptions" class="carousel slide w-50" data-ride="carousel">
    <!--pour proportionner selon l'écran faire le w-->
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Assets/images/eyes4.png" class="h-100 d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Assets/images/eyes9.jpeg" class="h-100 d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Assets/images/eyes8.jpeg" class="h-100 d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div style="float:right;" class="container-fluid w-50">
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
        <div class="cardup">
        <div class="card">
        <img src="Assets/images/eyes2.png" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title card-title-custom">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
        <div class="cardup">
        <div class="card">
        <img src="Assets/images/eyes1.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title card-title-custom">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
        <div class="cardup">
        <div class="card p-3">
        <blockquote class="blockquote mb-0 card-body">
        <p>A well-known quote, contained in a blockquote element.</p>
        <small class="text-muted">
        Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
        </blockquote>
        </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
        <div class="cardup">
        <div class="card bg-primary text-white text-center p-3 bg-color">
        <blockquote class="blockquote mb-0">
            <p>A well-known quote, contained in a blockquote element.</p>
                <small>
                Someone famous in <cite title="Source Title">Source Title</cite>
                </small>
        </blockquote>
        </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
        <div class="cardup">
        <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title card-title-custom">Card title</h5>
            <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
        <div class="cardup">
        <div class="card">
        <img src="Assets/images/eyes7.jpeg" class="card-img" alt="...">
        </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
        <div class="cardup">
        <div class="card p-3 text-right">
        <blockquote class="blockquote mb-0">
            <p>A well-known quote, contained in a blockquote element.</p>
                <small class="text-muted">
                Someone famous in <cite title="Source Title">Source Title</cite>
                </small>
        </blockquote>
        </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
        <div class="cardup">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title card-title-custom">Card title</h5>
            <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        </div>
        </div>
    </div>
</div>
</div>

</div>

<form>
  <div class="form-group w-50 text-center">
  <h2 class="title title-custom text-center">LOGIN</h2>
    <label for="exampleInputEmail1">Email address</label>
    <div class="d-flex justify-content-center">
        <input type="email" class="form-control w-75" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group w-50 text-center">
    <label for="exampleInputPassword1">Password</label>
    <div class="d-flex justify-content-center">
        <input type="password" class="form-control w-75" id="exampleInputPassword1">
    </div>
  </div>
  <div class="container-fluid w-50 d-flex justify-content-around" id="form-check1">
  <div class="row">
    <div class="col">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <div class="col">
    <button type="submit" class="btn btn-primary custom-btn">Submit</button>
    </div>
  </div>
  </div>
</form>

</br>

<h2 class="title title-custom text-center">SUBSCRIBE</h2>
<form Class="w-50" id="form2">
  <div class="form-row w-75">
    <div class="form-group col-md-12">
      <label for="inputEmail4" class="mep">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-row w-75">
  <div class="form-group col-md-12">
    <label for="inputAddress" class="mep">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  </div>
  <div class="form-row w-75">
    <div class="form-group col-md-4">
      <label for="inputCity" class="mep">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="phonenumber">Tel</label>
      <input type="tel" class="form-control" id="Phonenumber">
    </div>
  </div>
  <div class="container-fluid w-50 d-flex justify-content-around" id="form-check2">
  <div class="row">
    <div class="col-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <div class="col-6">
    <button type="submit" class="btn btn-primary custom-btn">Submit</button>
    </div>
  </div>
  </div>
</form>

</br>

<?php

require_once(__DIR__.'/Includes/footer.php')

?>