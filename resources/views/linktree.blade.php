<!doctype html>
<html lang="en">
  <head>
    <title>@xgatesurabaya | Facebook, Tiktok | Linktree</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script>
      function showme() {
        Swal.fire({
          title: "Halo!",
          text: "Selamat siang!",
          icon: "success"
        });
        console.log("Ini baris 14, sudah sampai disini");
        a = 18+10;
        console.log("Hasil penjumlahan ="+ a);
        c = 1 * 2 * 3;
        console.log("Hasil perkalian = "+c);
      }

      function changeText(){
        const element = document.getElementById("intro");
        element.innerHTML = "Sistem Informasi";
      }

      function changeStyle(){
        const element = document.getElementById("tombol2");
        element.style.color="red";
        element.style.background="yellow";
      }
    </script>
    <link rel="stylesheet" href="assets2/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="background"></div>
    <div class="container bg-container">
      <div class="row justify-content-center mb-4 mt-5">
        <div class="col-11 col-md-6 col-lg-4 text-center">
          <img
            src="assets2/img/xgateprofile.webp"
            alt=""
            class="img-fluid rounded-circle mx-auto d-block"
            style="height: 130px"
          />
        </div>
      </div>
      <h3 id="intro" class="text-center">@xgatesurabaya</h3>
      <button class="btn btn-primary w-100" onclick="showme()">Show Alert</button>
      <button class="btn btn-primary w-100" onclick="changeText()">Change Text</button>
      <button  class="btn btn-primary w-100" onclick="changeStyle()">Change Style</button>

      <!--tombol gmaps-->
      <div  class="row justify-content-center mt-4 ">
        
        <div class="col-11 col-md-6 col-lg-6" >
          <!--grid dalam tombol-->
          <a
            href="https://maps.app.goo.gl/rhpL4JT4QoegEhSx7"
            target="_blank"
            class="btn tombol w-100" id="tombol2"
          >
            <div class="row text-center align-items-center">
              <div class="col-2">
                <img
                  src="assets2/img/gmaps.webp"
                  alt=""
                  class=""
                  style="width: 50px; height: auto"
                />
              </div>

              <div class="col-8 font-weight-bold align-items-center">
                Gmaps Xgate Surabaya
              </div>
              <div class="col-2">
                <img
                  src="assets2/img/threedot.svg"
                  alt=""
                  style="width: 17px; height: auto; filter: invert(1)"
                  onclick="showme();"
                />
                
              </div>
            </div>
          </a>
        </div>
      </div>

      

      <!--tombol discord-->
      <div class="row justify-content-center mt-4">
        <div class="col-11 col-md-6 col-lg-6">
          <!--grid dalam tombol-->
          <a
            href="https://discord.gg/KqNZs8szaU"
            target="_blank"
            class="btn tombol w-100"
          >
            <div class="row text-center align-items-center">
              <div class="col-2">
                <img
                  src="assets2/img/discord.webp"
                  alt=""
                  class=""
                  style="width: 50px; height: auto"
                />
              </div>

              <div class="col-8 font-weight-bold align-items-center">
                Discord Xgate
              </div>
              <div class="col-2">
                <img
                  src="assets2/img/threedot.svg"
                  alt=""
                  style="width: 17px; height: auto; filter: invert(1)"
                />
              </div>
            </div>
          </a>
        </div>
      </div>

      <!--tombol facebook-->
      <div class="row justify-content-center mt-4">
        <div class="col-11 col-md-6 col-lg-6">
          <!--grid dalam tombol-->
          <a
            href="https://www.facebook.com/xgatevip"
            target="_blank"
            class="btn tombol w-100"
          >
            <div class="row text-center align-items-center">
              <div class="col-2">
                <img
                  src="assets2/img/facebook.webp"
                  alt=""
                  class=""
                  style="width: 50px; height: auto"
                />
              </div>

              <div class="col-8 font-weight-bold align-items-center">
                Facebook Xgate
              </div>
              <div class="col-2">
                <img
                  src="assets2/img/threedot.svg"
                  alt=""
                  style="width: 17px; height: auto; filter: invert(1)"
                />
              </div>
            </div>
          </a>
        </div>
      </div>

      <!--tombol tiktok-->
      <div class="row justify-content-center mt-4">
        <div class="col-11 col-md-6 col-lg-6">
          <!--grid dalam tombol-->
          <a
            href="https://www.tiktok.com/@xgatearena?is_from_webapp=1&sender_device=pc"
            target="_blank"
            class="btn tombol w-100"
          >
            <div class="row text-center align-items-center">
              <div class="col-2">
                <img
                  src="assets2/img/tiktok.webp"
                  alt=""
                  class=""
                  style="width: 50px; height: auto"
                />
              </div>

              <div class="col-8 font-weight-bold align-items-center">
                Tiktok Xgate
              </div>
              <div class="col-2">
                <img
                  src="assets2/img/threedot.svg"
                  alt=""
                  style="width: 17px; height: auto; filter: invert(1)"
                />
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="footer-section">
        <div class="row justify-content-center mt-5">
          <div class="col-3 text-center">
            <a
              href="https://linktr.ee/?utm_source=linktree&utm_medium=profile&utm_campaign=footer_logo_cta&utm_content=xgates&ses_dat=MmJjYWFhZDItNzhjZS01OGY3LTkyMTctODY2YzU4MjVkMGQ0fDk2NzhkMDkyLWZmZjItNDU2MS1hMGEyLTU3NzM4MGJhNDZlMnxNb24gQXByIDA2IDIwMjYgMjE6Mzk6NTMgR01UKzA3MDAgKFdlc3Rlcm4gSW5kb25lc2lhIFRpbWUpfE1vbiBBcHIgMDYgMjAyNiAyMTowOTozNiBHTVQrMDcwMCAoV2VzdGVybiBJbmRvbmVzaWEgVGltZSl8"
              target="_blank"
              ><button
                type="button"
                class="btn btn-light rounded-pill font-weight-bold btn-lg w-100"
              >
                Join xgates on Linktree
              </button></a
            >
          </div>
        </div>

        <div class="row justify-content-center mt-4">
          <div class="col-12 text-center footer">
            <a href="#" class="link-bawah">Cookie Preferences</a>
            <span class="pemisah">•</span>
            <a href="#" class="link-bawah">Report</a>
            <span class="pemisah">•</span>
            <a href="#" class="link-bawah">Privacy</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
