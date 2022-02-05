function agregarCarrito(x1){
    
    var x1 = document.btn.x1.value=x1;
    
    // var y1 = y;
    // console.log('x1');
    document.getElementById('compracarrito').innerHTML+='<div class="input-group mb-1"><input type="text" class="form-control" placeholder="'+x1+'" aria-label="Username" aria-describedby="basic-addon1" value=""><button type="button" class="btn btn-danger input-group-text"><i class="bi bi-x-circle-fill"></i></button></div>';

}

function borrar_compras(){
    var x = 0;
    document.getElementById("compra_carrito"+elem).innerHTML = "";
}