<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="includes/nav/img/Method Draw Image.png">
  <title>VidaGamer</title>
</head>

<?php include("includes/nav/index.html") ?>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://i.blogs.es/6a7b2f/god-of-war/1366_2000.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img
                src="https://s1.1zoom.me/b5050/565/Red_Dead_Redemption_2_Men_Rifles_Arthur_Morgan_Hat_580584_1366x768.jpg"
                class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://s1.1zoom.me/b5050/426/326859-alexfas01_1366x768.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
            data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"
            data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="background-color: #F8F9FA; padding-left: 0; padding-right: 0;">
    <div class="row d-flex justify-content-around" style="margin-left: 0; margin-right: 0;">
      <div class="col-md-8" style="padding: 5vh;">
        <div class="card-deck">
          <div class="card">
            <img src="https://gepig.com/game_cover_460w/1549.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/292030/header.jpg?t=1675178392"
              class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img src="https://cdn.akamai.steamstatic.com/steam/apps/945360/header.jpg?t=1673370035" class="card-img-top"
              alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include("includes/footer/index.html") ?>
</body>
</html>