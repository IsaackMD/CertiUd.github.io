<!DOCTYPE html>
<html lang="es" class="pos-relative">
  <head>
    <!-- Required meta tags -->
    <?php require_once('../../view/html/MainHead.php') ?>
    <title>Big-Smoke: Certificado</title>
  </head>

  <body class="pos-relative">

    <div class="ht-100v d-flex align-items-center justify-content-center">
      <div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
        <h1 class="tx-100 tx-xs-140 tx-normal tx-inverse tx-roboto mg-b-0">

            <canvas class=" img-fluid border border-dark" id="canvaCert" height="850rem" width="1200rem"></canvas>
            <!-- <img src="../../public/Certificado.png" class="img-fluid" alt="Responsive image"/> -->
        </h1>
        <br>
        <p class="tx-16 mg-b-30 text-justify" id="Descripcion">
        </p>

        <div class="form-layout-footer">
            <button id="btn_png" class="btn btn-outline-primary">
                <i class="fa fa-download mg-r-10"></i>
                PNG
            </button>
            <button id="btn_pdf" class="btn btn-outline-success ">
                <i class="fa fa-download mg-r-10"></i>
                PDF
            </button>
        </div><!-- form-layout-footer -->

      </div>
    </div><!-- ht-100v -->

    <?php require_once('../../view/html/MainJs.php') ?>
    <script type="text/javascript" src="certificado.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>

  </body>
</html>
