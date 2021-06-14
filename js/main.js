$(document).ready(function(){

    $.ajax({
type:'POST',
url:'php/cargarListas.php',
 })
    .done(function(listas_rep){
     $('#listas_reproduccion').html(listas_rep)
    })
    .fail(function(){
        alert('error');
    })

    $('#listas_reproduccion').on('change',function(){
         var id = $('#listas_reproduccion').val();    
        $.ajax({
            type:'POST',
            url:'php/cargarMusica.php',
            data: {'id': id} ,
             })
                .done(function(listas_rep){
                 $('#musica').html(listas_rep)
                })
                .fail(function(){
                    alert('error');
                })
            })
$('#enviar').on('click', function(){
 var result  = 'Lista de reproducción:' + $('#listas_reproduccion option:selected').text() +' '+ '<br>' +
 ' Video elegido: ' +   $('#musica option:selected').text();
$('#resultado').html(result);


    })
})