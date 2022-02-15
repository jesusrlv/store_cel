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
            <form action="query/compras.php" method="POST" class="border-bottom">
                <p id="compracarrito"></p>
                <hr class="w-100 justify-aligment-center">
                <button type="submit" class="btn btn-primary w-100"><i class="bi bi-cart-plus"></i> Comprar</button>                    
            </form>

            <div class="col-12 mt-2">
                    <strong>Número de productos:</strong> ###
                </div>
                <div class="col-12">
                    <strong>Total: </strong> $$$
                </div>
                <div class="4">
                    
                </div>
        </div>
    
  </div>
</div>

<script>
  var inputs = document.getElementById("offcanvasRight").getElementsById("contadorId");
  alert("Valor recibido: " + inputs);
</script>

<!-- ejemplos de cards -->
<!-- https://bbbootstrap.com/snippets/bootstrap-5-simple-information-card-85881560 -->