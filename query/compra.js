function agregarCarrito(){

    document.getElementById("compracarrito"+elem).innerHTML+='<div class="input-group"><input type="text" class="form-control" placeholder="Redacta la pregunta" aria-label="Username" aria-describedby="basic-addon1"><span class="input-group-text" id="basic-addon1"><i class="bi bi-question-circle-fill"></i></span></div>';

}

function borrar_compras(){
    var x = 0;
    document.getElementById("compra_carrito"+elem).innerHTML = "";
}