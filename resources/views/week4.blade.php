<!doctype html>
<html lang="en">
  <head>
    <title>Week 4</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <style>
      .open-sans-tentang {
        font-family: "Open Sans", sans-serif;
        font-optical-sizing: auto;
        font-weight: 300;
        font-style: normal;
        font-variation-settings: "wdth" 100;
      }
      .btn-buy {
        background-color: #111b47;
        color: white;
        border: 2px solid #111b47;
      }

      .btn-2 {
        background-color: white;
        color: #111b47;
        border: 2px solid #111b47;
      }

      .text-biru {
        color: #37437d;
      }

      .hero {
        min-height: 100vh;
        display: flex;
        align-items: center;
      }

      .main {
        background-image: url("designer_1.png");
        background-repeat: no-repeat;
        background-position: right top;
        background-size: contain;
      }
    </style>
  </head>
  <body>
    <div class="main">
      <div class="container pt-2">
        <div class="row text-center align-items-center text-biru">
          <div class="col-1">
            <p>Home</p>
          </div>
          <div class="col-1">
            <p>About</p>
          </div>
          <div class="col-1">
            <p>Contact</p>
          </div>
          <div class="col-6 text-center ">
            <h1 class="font-weight-bold">Landing</h1>
          </div>
          <div class="col-3 text-right">
            <button class="btn btn-buy w-75">Buy Now</button>
          </div>
        </div>
      </div>

      <!--main page-->
      <div class="hero">
        <div class="container">
          <div class="row mb-2 align-items-center">
            <div class="col-6">
              <h1>Introduce Your Product Quickly & Effectively</h1>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-6">
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                penatibus et magnis dis parturient montes, nascetur ridiculus
              </p>
              <p>
                mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                quis, sem. Nulla consequat massa quis enim.
              </p>
            </div>
          </div>
          <div class="row mt-5 align-items-center">
            <div class="col-2">
              <button class="btn btn-buy w-100">Purchase UI Kit</button>
            </div>
            <div class="col-2">
              <button class="btn btn-2 w-100">Learn More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
