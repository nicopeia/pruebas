
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>php app</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/styles.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>

 <div class="container">
    <div class="tittle mt-4">
        <h2 class="bold text-uppercase">lista de reproducccion :</h2><small class="text-muted">PHP - JS - MYSLI - AJAXS</small>
    </div>
    <hr class="text-muted">

<div class="box-tittle">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>DALE PLAY!</strong> TU CATEGORIA Y CANCION.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
</div>
<p>ELIGE TU MUSICA FAVORITA</p>
<div class="row bg-dark">

   


  

    <div class="col-md-4">
    
        <label for="" class="text-bold">Elige Categoria <select name="listas_reproduccion" id="listas_reproduccion" class=""></select></label>
    </div>
    <div class="col-md-4">
        <label for="" class="text-bold ">Elige cancion <select name="musica" id="musica" class=""><option value=""></option></select></label>
    </div>
        <div class="col-md-4">
        <button id="enviar" class="btn btn-warning text-uppercase ">enviar</button> 
  
    </div>
    


<div class="text-white ">
   <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <p id="resultado"></p> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>


















</div>

 </div>


















   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="js/main.js" ></script>   
</body>
</html>