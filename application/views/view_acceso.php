<div class="container-fluid"> 
  <div class="row"> 
    <br><br><br><br>
    <div class="col-md-4 mt-4"></div>        
    <div class="col-md-4"> 
      <?php echo form_open('', array( 'id'=>'my_form' )); ?> 
      <div class="form-group"> 
        <input type="text" class="form-control" name="usuario" placeholder="usuario"> 
      </div> 
      <div class="form-group"> 
        <input type="password" class="form-control" name="clave" placeholder="clave"> 
      </div> 
      <button type="button" id="log" onclick="loguear()" class="btn btn-info btn-block"><i class="glyphicon glyphicon-ok-sign"></i>&nbsp;Acceder</button> 
      <?php form_close(); ?> 
    </div>
  </div> 
</div><!-- FIN CONTAINER -->

<script> 
 var img='<i class="glyphicon glyphicon-dashboard"></i>'; 
 function loguear()
 { 
  $.ajax({ 
   url      : 'Acceso/loguear', 
   type     : 'post', 
   dataType : 'json',  
   data     : $('#my_form').serialize(),  
   beforeSend : function(){ 
    alerta( img + ' Espere...' ); 
   },
   success : function(data){ 
    alerta(); 
    if( data.type==false)
    {
     alerta( data.message, false );
    }
    else
    {      
      alerta(img + ' Redireccionando...', true ); 
     setTimeout( function(){ window.location.replace( 'usuarios' ); }, 2000 );    
    }    
   }, 
   error : function(xhr, status){ 
    alerta(); dialogo( 'Error', 'Error en la función acceso/loguear.' );    
    console.log(xhr); console.log(status);
   } 
  }); 
 };
 alert("Recuerda que las credenciales son:\nusuario: admin\nclave: 123\nIntregrantes:\nDurán Miranda, Oscar René 25-0048-2016\nSotelo de la O, Diego Alejandro 25-0763-2016");
 
$(document).keypress(function(e){
    var code = (e.keyCode ? e.keyCode : e.which);
    if(code==13)
    {
        $("#log").click();
    }
});
</script> 