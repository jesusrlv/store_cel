function agregarCarrito(x1,nombre,costo){
    
    let x = x1;
    let y = nombre; 
    let precio = costo;
    alert("Valor recibido: " + y);
    // var y1 = y;
    // console.log('x1');
    document.getElementById('compracarrito').innerHTML+='<div class="input-group mb-1"><input name="nombreproducto" type="text" class="form-control w-50" placeholder="" aria-label="Username" aria-describedby="basic-addon1" value="'+y+'" READONLY><input name="valor" type="text" class="form-control text-center" placeholder="" aria-label="Username" aria-describedby="basic-addon1" value="$'+precio+'" READONLY><input name="valor" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" value="'+x+'" hidden><button type="button" class="btn btn-danger input-group-text"><i class="bi bi-x-circle-fill"></i></button></div>';

}

function borrar_compras(){
    var x = 0;
    document.getElementById("compra_carrito"+elem).innerHTML = "";
}