<?php
    include('query/qconn/qc.php');
?>

<!-- canvas -->

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header border-bottom">
    <h5 id="offcanvasRightLabel"><i class="bi bi-cart-plus"></i> Carrito de compras</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body border-bottom">
  
        <div class="row-12">
            <form action="query/compras.php" method="POST" class="border-bottom" onchange="cambioInput()">
                <p id="compracarrito"></p>
                <hr class="w-100 justify-aligment-center">
                                    
            </form>
            <button class="btn btn-primary w-100" id="btncerrar"><i class="bi bi-cart-plus" onclick="cambiarHidden()"></i> Pagar carrito</button>

            <div class="col-12 mt-2">
                <strong>Número de productos:</strong> ###
                </div>
                
                <div class="col-12">
                    <strong>Total: </strong> $$$
                </div>
                
                <div class="4">
            </div>
        </div>

        <div class="row-12 border-top mt-3" id="cambiohidden">

          <div class="col mt-2">
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label"><small><i class="bi bi-person-circle"></i> Nombre completo</small></label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre...">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label"><small><i class="bi bi-card-heading"></i> Dirección</small></label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Dirección...">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label"><small><i class="bi bi-phone"></i> Teléfono</small></label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Teléfono...">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label"><small><i class="bi bi-envelope-fill"></i> Correo electrónico</small></label>
              <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Correo electrónico...">
            </div>
            <div class="mb-3">
              
              <label for="formGroupExampleInput" class="form-label"><small><i class="bi bi-credit-card-2-back"></i> Tarjeta para pago</small></label>
              <div class="input-group">
              <input type="text" class="form-control w-75" id="formGroupExampleInput" placeholder="Tarjeta...">
              <input type="password" class="form-control w-25" id="formGroupExampleInput" placeholder="NIP...">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary w-100"><i class="bi bi-cart-plus"></i> Realizar pago</button>  
        </div>
    
  </div>
</div>

<script>
  function cambioInput(){
    var inputs = document.getElementById("offcanvasRight").getElementsById("contadorId");
    alert("Valor recibido: " + inputs);
  }
</script>

<script>
  document.getElementById('cambiohidden').style.visibility = 'hidden';
function cambiarHidden(){
  document.getElementById('cambiohidden').style.visibility = 'visible';
  document.getElementById('btncerrar').style.visibility = 'hidden';
  
  // https://www.w3schools.com/jsref/prop_style_visibility.asp
}
</script>

<!-- ejemplos de cards -->
<!-- https://bbbootstrap.com/snippets/bootstrap-5-simple-information-card-85881560 -->
<!-- https://bbbootstrap.com/ -->