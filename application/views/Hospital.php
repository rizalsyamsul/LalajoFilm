<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}


.DaftarRS {
  position: relative;
  text-align:center;
  top: 70px;
  left: 5%;
  height: 100px;
  width: 90%;
  margin-bottom: 450px;
}

.HeaderRS {
  position: relative;
  top: 50px;
  right: 0;
  left: 0;
  height: 550px;
  width: 100%;
  background-image : url('<?php echo base_url() ?>/gambar/Hospitals.jpg');
  background-size: 100% ;
  filter: contrast(80%);
}
h1{
  font-family: Open Sans;
  font-style: normal;
  font-weight: bold;
  font-size: 54px;
  color: white;
  text-align:center;

}
.txtHeader {
  position: relative;
  left: 0;
  text-align: center;
  top:420px;
  background: rgba(0, 0, 0, 0.7); /* Black background with 0.5 opacity */
  color: white;
  width: 100%;
  padding: 30px;
}
.card-img-top{
  width: 100%;
  height :300px;
}
</style>
</head>
<body>
<div class="row">
  <div class="HeaderRS">
    <div class="row justify-content-center">
      <div class="txtHeader">
          <h1>Daftar Rumah Sakit</h1>
      </div>
    </div>
  </div>
  <div class="DaftarRS">

    <hr class="my-4">

    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="controls-top">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="<?php echo base_url() ?>/gambar/rshermina.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">RS Hermina</h4>

                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="<?php echo base_url() ?>/gambar/rspertamina.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">RS Pertamina</h4>

                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="<?php echo base_url() ?>/gambar/rspersahabatan.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">RS Persahabatan</h4>

                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="<?php echo base_url() ?>/gambar/telkomedika.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Telkomedika</h4>

                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="<?php echo base_url() ?>/gambar/rsjakarta.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">RS Jakarta</h4>

                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="<?php echo base_url() ?>/gambar/rshs.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">RS Hasan Sadikin</h4>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/.Second slide-->
        <!--Third slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="<?php echo base_url() ?>/gambar/rssantosa.png"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">RS Santosa</h4>

                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="<?php echo base_url() ?>/gambar/rsah.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">RS Al Ihsan</h4>

                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="<?php echo base_url() ?>/gambar/rsdc.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">RS Dr Cipto Mangunkusumo</h4>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/.Third slide-->
      </div>
      <!--/.Slides-->
    </div>
    <!--/.Carousel Wrapper-->
  </div>
</div>
</body>
</html>
