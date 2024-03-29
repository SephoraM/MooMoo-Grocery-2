<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

  <!-- Carousel -->
  <section class="container-fluid main-carousel">
    <div id="main-display" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item carousel-item-1 active">
          <h1>Not a member?</h1>
          <a href="SignUp.php" type="button" class="btn btn-red">Register today</a>
        </div>
        <div class="carousel-item carousel-item-2">
          <h1>We got milk!</h1>
          <a href="aisles/dairy.php" type="button" class="btn btn-red">Go to Dairy</a>
        </div>
        <div class="carousel-item carousel-item-3">
          <h1>Always fresh!</h1>
          <a href="aisles/produce.php" type="button" class="btn btn-red">Go to Produce</a>
        </div>
      </div>
      <a class="carousel-control-prev" href="#main-display" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#main-display" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <!-- Banner -->
  <aside role="banner" class="container-fluid">
    <h3 class="d-inline-block align-middle">Covid-19 Restrictions</h3>
    <a href="#news" type="button" class="btn btn-outline-light btn-banner">Learn more</a>
  </aside>
  <hr />
  <!-- Featured Products -->
  <section class="featured-products">
    <h2>Featured Products</h2>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
          <div class="card mb-3 h-100">
            <div class="embed-responsive embed-responsive-4by3">
              <a href="aisles/dairy.php"><img src="images/eggs.png" class="card-img-top embed-responsive-item" alt="Large Brown Eggs"></a>
            </div>
            <div class="card-body">
              <a href="aisles/dairy.php"><h4 class="card-title">Brown Eggs</h4></a>
              <p class="card-text">Certified organic eggs. These eggs are Omega-3 enriched and are produced on a free
                range farm in St. Jerome.</p>
              <a href="aisles/dairy.php">Go to Dairy Aisle</a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
          <div class="card mb-3 h-100">
            <div class="embed-responsive embed-responsive-4by3">
              <a href="aisles/produce.php"><img src="images/fruits.jpg" class="card-img-top embed-responsive-item" alt="fruit"></a>
            </div>
            <div class="card-body">
              <a href="aisles/produce.php"><h4 class="card-title">Tropical Fruit</h4></a>
              <p class="card-text">We have an array of beautiful internationally sourced tropical fruit from eco-friendly farms.</p>
              <a href="aisles/produce.php">Go to Produce Aisle</a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
          <div class="card mb-3 h-100">
            <div class="embed-responsive embed-responsive-4by3">
              <a href="aisles/meat.php"><img src="images/steak.jpeg" class="card-img-top embed-responsive-item" alt="Beef Steak"></a>
            </div>
            <div class="card-body">
              <a href="aisles/meat.php"><h4 class="card-title">Beef Steaks</h4></a>
              <p class="card-text">Barbeque some of our beautiful steaks for a lovely summer treat. We have many available cuts of AAA American beef.</p>
              <a href="aisles/meat.php">Go to Meat Aisle</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr />
  <!-- Covid-19 News -->
  <section class="container-fluid covid-news" id="news">
    <h2>Covid-19 Updates</h2>
    <p>In order to reduce the risk of spread of Covid-19 Health Canada has imposed some restrictions which are designed
      to help the country
      reduce the spread of the virus. In order to do our part, if you have any symptoms stay home, otherwise all
      customers must wear a mask,
      maintain physical distance from one another, and keep hands clean. We request that our customers handle the
      produce as little as
      possible to reduce the risk of spread. Thank you for your patience.
    </p>
  </section>

  <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
