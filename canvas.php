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
          <form action="query/compras.php" method="POST" class="" onchange="cambioInput()">
                <p id="compracarrito"></p>
                <!-- <hr class="w-100 justify-aligment-center"> -->
                                    
            <!-- </form> -->
            <button class="btn btn-primary w-100" type="button" id="btncerrar" onclick="cambiarHidden()"><i class="bi bi-cart-plus"></i> Pagar carrito</button>

            <div class="col-12 mt-2">
                <strong>Número de productos: </strong><span id="contadorInputs"></span>
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
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Teléfono..." onkeypress="ValidaSoloNumeros()">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label"><small><i class="bi bi-envelope-fill"></i> Correo electrónico</small></label>
              <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Correo electrónico...">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label"><small><i class="bi bi-credit-card-2-back"></i> Tarjeta para pago</small></label>
              <div class="input-group">
                <input type="text" class="form-control w-70" id="tarjetaNum" maxlength ="16" placeholder="XXXX-XXXX-XXXX-XXXX" onkeypress="ValidaSoloNumeros()">
                <input type="text" class="form-control w-30" id="tipoTarjeta" readonly>
              </div>
              <input type="text" class="form-control w-100" id="formGroupExampleInput" placeholder="Nombre en tarjeta...">
              
              <div class="input-group">
              <input type="text" class="form-control w-40" id="formGroupExampleInput" placeholder="Expira Mes..." maxlength="2" onkeypress="ValidaSoloNumeros()">
              <input type="text" class="form-control w-40" id="formGroupExampleInput" placeholder="Expira Año..." maxlength="2" onkeypress="ValidaSoloNumeros()">
              <input type="password" class="form-control w-20" id="formGroupExampleInput" placeholder="NIP..." maxlength="3" onkeypress="ValidaSoloNumeros()">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary w-100"><i class="bi bi-cart-plus"></i> Realizar pago</button>  
          </form>
        </div>
    
  </div>
</div>

<script>
  function cambioInput() {
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

//Función que permite solo Números
function ValidaSoloNumeros() {
 if ((event.keyCode < 48) || (event.keyCode > 57)) 
  event.returnValue = false;
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- https://es.stackoverflow.com/questions/70426/buscar-numero-de-tarjeta-de-credito-en-un-input-o-textbox-posterior-a-esto-remo -->
<script>
  function getCardType(cardNo) {
  var cards = {
    "American Express": /^3[47][0-9]{13}$/,
    "Mastercard": /^5[1-5][0-9]{14}$/,
    "Visa": /^4[0-9]{12}(?:[0-9]{3})?$/
  };
  
  for(var card in cards) {
    if (cards[card].test(cardNo)) {
      return card;
    }
  }
  
  return undefined;
}

// $('input').on('change', function() {
$('input[id="tarjetaNum"]').on('change', function() {
  var value = $(this).val().trim();
  
  var cardType = getCardType(value);
  
  if (!cardType) {
    alert('tarjeta invalida');
  } else {
    // alert('tarjeta tipo:' + cardType);
    document.getElementById('tipoTarjeta').value = cardType;
    $(this).val(Array(value.length-4).join("X")+value.substring(value.length-4));
  }      
});
</script>

<!-- 4915663435988911 -->
<!-- 5579100275123121 -->

<!-- ejemplos de cards -->
<!-- https://bbbootstrap.com/snippets/bootstrap-5-simple-information-card-85881560 -->
<!-- https://bbbootstrap.com/ -->