<?php
    include('query/qconn/qc.php');
?>

<!-- canvas -->

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel"><i class="bi bi-cart-plus"></i> Carrito de compras</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <hr>
  
        <div class="row-12">
            <form action="query/compras.php" method="POST">
                <p id="compracarrito"></p>

                <div class="col-2">
                    1
                </div>
                <div class="col-6">
                    Descripción
                </div>
                <div class="4">
                    Precio
                </div>
                    
            </form>
        </div>
    
  </div>
</div>