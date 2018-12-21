<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){

      var addButton = $('.btn-danger'); //Add button selector
      var wrapper = $('.col-sm-9'); //Input field wrapper
      var fieldHTML = '<div style="margin-top:10px"class="input-group"> <input type="text" name="field_producto[]" class="form-control"  placeholder="Ingrese el producto">    <span class="input-group-btn" style="width:0px;"></span>    <input type="text" name="field_cantidad[]" class="form-control" placeholder="Ingrese la cantidad">    <div class="input-group-btn">  <button type="button" id="btn-erase" class="btn btn-danger">-</button></div></div>'; //New input field html
      $(addButton).click(function(){ //Once add button is clicked
            $(wrapper).append(fieldHTML);
      });
      $(wrapper).on('click', '#btn-erase', function(e){ //Once remove button is clicked
          e.preventDefault();
           $(this).parent().parent().remove(); //Remove field html
      });

      $("#formulario").submit(function (){ // CUANDO ENVIEN EL FORMULARIO
        var a = document.querySelectorAll("input[type='text']"); //BUSCAMOS TODOS LOS INPUTS
         for(var b in a){ //COMO RETORNA UN ARRAY ITERAMOS
           var c = a[b];
           if(typeof c == "object"){ // SOLO PUROS OBJECTS
            if(c.id != "idusuario"){ // SOLO BUSCAMOS LOS PRODUCTOS Y CANTIDADES
              console.log(c.name,c.value); // NOMBRE DEL INPUT Y SU VALOR DE LA BUSQUEDA...
            }
           }
         }
      });
    });
</script>
  </head>
  <body>
    <form id="formulario" action="registrar.php" method="post">
               <div class="form-group">
             <label for="idusuario">Ingresar cliente:</label>
             <input type="text" REQUIRED class="form-control" id="idusuario" placeholder="Ingresar Nombre">
           </div>


           <div class="form-group">
               <label class="col-sm-3 control-label">Ingrese el producto:</label>
               <div class="col-sm-9">
                 <div class="input-group">
                   <input type="text" name="field_producto[]" class="form-control"  placeholder="Ingrese el producto">
                   <span class="input-group-btn" style="width:0px;"></span>
                    <input type="text" name="field_cantidad[]" class="form-control" placeholder="Ingrese la cantidad">
                   <div class="input-group-btn">
                     <button type="button" class="btn btn-danger">+</button>
                   </div>
                 </div>
               </div>
           </div>

       <button type="submit" class="btn btn-primary">Registrar</button>
       <button type="button" class="btn btn-default">Cancelar</button>
    </form>

  </body>
</html>
