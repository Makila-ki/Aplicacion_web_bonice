$(document).ready(inicio)

function inicio(){
    $(".botoncompra").click(anade)
    $("#carrito").load("carrito.php")
}
function anade(){
    var valorcanti=document.getElementById('patata').value;
    $("#carrito").load("carrito.php?p="+$(this).val()+"&a="+valorcanti)
}
