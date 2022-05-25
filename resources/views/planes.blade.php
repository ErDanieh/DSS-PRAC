@extends('layouts.principal')

@section('content')

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>Planes de pago</title>

  <style>
    .card {
      border:none;
      padding: 10px 50px;
    }

    .card::after {
      position: absolute;
      z-index: -1;
      opacity: 0;
      -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
      transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .card:hover {


      transform: scale(1.02, 1.02);
      -webkit-transform: scale(1.02, 1.02);
      backface-visibility: hidden; 
      will-change: transform;
      box-shadow: 0 1rem 3rem rgba(0,0,0,.75) !important;
    }

    .card:hover::after {
      opacity: 1;
    }

    .card:hover .btn-outline-primary{
      color:white;
      background:#007bff;
    }

  </style>

</head>
<body>

  <div class="container-fluid" style="background: linear-gradient(45deg, #2937f0, #9f1ae2);">
    <div class="container p-5">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
            @include("PlanesData.PlanBasico")
        </div>
        <div class="col-lg-4 col-md-12 mb-4">
          @include("PlanesData.PlanStandard")
        </div>
        <div class="col-lg-4 col-md-12 mb-4">
          @include("PlanesData.PlanSinLimite")
        </div>
      </div>
      <div class="row">
        
          <div class="card h-100 shadow-lg">
            <div class="card-body">
              <div class="text-center p-3">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="U6AYLBD9Z7KEU">
                <table class="table text-center">
                <tr><td class="text-center "><input type="hidden" name="on0" value="Seleccione tipo de plan">Seleccione Tipo de Plan</td></tr><tr><td ><select name="os0">
                  <option value="Plan Básico">Plan Básico : €9,99 EUR/MES</option>
                  <option value="Plan Standard">Plan Standard : €14,99 EUR/MES</option>
                  <option value="Plan Sin Límite">Plan Sin Límite : €20,99 EUR/MES</option>
                </select> </td></tr>
                </table>
                <input type="hidden" name="currency_code" value="EUR">
                <input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_subscribe_LG.gif" border="0" name="submit" alt="PayPal, la forma rápida y segura de pagar en Internet.">
                <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </form>
              </div>
            </div>
          </div>
        
    </div>
  </body>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>

@endsection