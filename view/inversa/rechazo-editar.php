<h1 class="page-header">Registro
</h1>
<form id="formulario" action="?c=Inversa&a=GRechazo" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label>Factura</label>
        <input type="text" name="Factura" value="<?php echo $alm->Factura; ?>" class="form-control" placeholder="Ingrese Factura" />
    </div>

    <div class="form-group" id="Ordencopia">
        <label>Orden de Compra</label>
        <div id="inputs">
        <input id="dato1" type="text" name="OrdenCompra1" class="form-control"/>
        </div>
        <input type="button" id="agrega" value="+">
    </div>

    <div class="form-group">
        <label>SKU</label>
        <input type="text" name="SKU" value="<?php echo $alm->SKU; ?>" class="form-control" placeholder="Ingrese SKU" />
    </div>

    <div class="form-group">
        <label>Tipo de Ingreso</label>
        <select name="Tipo" class="form-control">
            <option value="Ajuste de Inventario">Ajuste de Inventario</option>
            <option value="Cancelacion">Cancelacion</option>
            <option value="Devolucion Comercial">Devolucion Comercial</option>
            <option value="Devolucion por Falla">Devolucion por Falla</option>
            <option value="Rechazo">Rechazo</option>
            <option value="Rechazo Parcial">Rechazo Parcial</option>
            <option value="Rechazo Total">Rechazo Total</option>
            <option value="Samples">Samples</option>
        </select>
    </div>

    <div class="form-group">
        <label>Area de Distribucion</label>
        <select name="Area" class="form-control">
            <option value="Gibson">Gibson</option>
            <option value="Movilidad">Movilidad</option>
            <option value="Proyectos">Proyectos</option>
            <option value="Retail">Retail</option>
        </select>
    </div>

    <div class="form-group">
        <label>Cliente</label>
        <input type="text" name="Cliente" value="<?php echo $alm->Cliente; ?>" class="form-control" placeholder="Ingrese Cliente" />
    </div>

    <div class="form-group">
        <label>Sucursal</label>
        <input type="text" name="Sucursal" value="<?php echo $alm->Sucursal; ?>" class="form-control" placeholder="Ingrese la Sucursal" />
    </div>
    <div class="form-group">
        <label>Transporte</label>
        <select name="Transporte" class="form-control">
            <option value="AG">AG</option>
            <option value="Astor">Astor</option>
            <option value="Castores">Castores</option>
            <option value="Celestics">Celestics</option>
            <option value="Cobra Expres">Cobra Expres</option>
            <option value="Fedex">Fedex</option>
            <option value="FH">FH</option>
            <option value="GCP">GCP</option>
            <option value="GMax">GMax</option>
            <option value="Halcones">Halcones</option>
            <option value="Mexamerik">Mexamerik</option>
            <option value="No aplica">No aplica</option>
            <option value="No indicado">No indicado</option>
            <option value="No se enbarco">No se enbarco</option>
            <option value="Orostico">Orostico</option>
            <option value="Send">Send</option>
            <option value="Sendex">Sendex</option>
            <option value="Tejeda">Tejeda</option>
            <option value="Transport Martin">Transport Martin</option>
        </select>
    </div>

    <div class="form-group">
        <label>Fecha de envio</label>
        <input type="date" name="FechaEnvio" value="<?php echo $alm->FechaEnvio; ?>" class="form-control" placeholder="AAAA-MM-DD" />
    </div>

    <div class="form-group">
        <label>Folio Cita</label>
        <input type="text" name="FolioCita" value="<?php echo $alm->FolioCita; ?>" class="form-control" placeholder="Ingrase el Folio de la Cita" />
    </div>

    <div class="form-group">
        <label>Piezas</label>
        <input type="text" name="Piezas" value="<?php echo $alm->Piezas; ?>" class="form-control" placeholder="Numero de piezas" />
    </div>

    <div class="form-group">
        <label>Condiciones Fisicas</label>
        <select name="Condicion" class="form-control">
            <option value="Blister Dañado">Blister Dañado</option>
            <option value="Buen Estado">Buen Estado</option>
            <option value="Caja dañada">Caja dañada</option>
            <option value="Caja empaque dañada">Caja empaque dañada</option>
            <option value="Caja fajilla dañada">Caja fajilla dañada</option>
            <option value="Celofan roto y disco suelto">Celofan roto y disco suelto</option>
            <option value="Corrugado dañado">Corrugado dañado</option>
            <option value="Corrugado doblado">Corrugado doblado</option>
            <option value="Corrugado manchado">Corrugado manchado</option>
            <option value="Devolucion">Devolucion</option>
            <option value="Empaque dañado">Empaque dañado</option>
            <option value="Empaque maltratado">Empaque maltratado</option>
            <option value="Empaque maltratado y sucio">Empaque maltratado y sucio</option>
            <option value="Empaque sucio sellos doblados">Empaque sucio sellos doblados</option>
            <option value="Empaque(s) y fajilla(s) dañada(s)">Empaque(s) y fajilla(s) dañada(s)</option>
            <option value="Equipo dañado">Equipo dañado</option>
            <option value="Extravio">Extravio</option>
            <option value="Faltantes">Faltantes</option>
            <option value="Faltantes de origen">Faltantes de origen</option>
            <option value="Garantia">Garantia</option>
            <option value="Mojado">Mojado</option>
            <option value="No indicadas">No indicadas</option>
            <option value="No procesado">No procesado</option>
            <option value="No recibido fisicamente">No recibido fisicamente</option>
            <option value="No recibido">No recibido</option>
            <option value="Parcial">Parcial</option>
            <option value="Producto sobrante">Producto sobrante</option>
            <option value="Rechazo">Rechazo</option>
            <option value="Sellos doblados">Sellos doblados</option>
            <option value="Sin empaque">Sin empaque</option>
            <option value="Sin etiqueta">Sin etiqueta</option>
            <option value="UPC equivocado">UPC equivocado</option>
        </select>
    </div>

    <div class="form-group">
        <label>Motivo</label>
        <input type="text" name="Motivo" value="<?php echo $alm->Motivo; ?>" class="form-control" placeholder="Ingrese el motivo" />
    </div>

    <div class="form-group">
        <label>Imputable a</label>
        <select name="Imputable" class="form-control">
            <option value="Administrativo">Administrativo</option>
            <option value="Almacen">Almacen</option>
            <option value="Area comercial">Area comercial</option>
            <option value="Comercial">Comercial</option>
            <option value="Empaques">Empaques</option>
            <option value="En validacion">En validacion</option>
            <option value="Garantias">Garantias</option>
            <option value="Maniobras">Maniobras</option>
            <option value="No indicado">No indicado</option>
            <option value="Operativo">Operativo</option>
            <option value="Pendiente">Pendiente</option>
            <option value="Por definir">Por definir</option>
            <option value="Samples">Samples</option>
            <option value="Sistemas">Sistemas</option>
            <option value="Transporte">Transporte</option>
        </select>
    </div>

    <div class="form-group">
        <label>Branch de Ingreso Nota de Credito</label>
        <select name="BranchIngNC" class="form-control">
            <option value="3">3</option>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="19">19</option>
            <option value="73">73</option>
            <option value="77">77</option>
            <option value="77-19">77-19</option>
            <option value="MX77">MX77</option>
            <option value="No aplica">No aplica</option>
            <option value="Pendiente">Pendiente</option>
            </select>
    </div>

    <input type="hidden" name="FechaIngre" value="<?php echo $alm->FechaIngre; ?>" />

    <input type="hidden" name="Usuario" value="<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'li';

    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($db->connect_error) {
        die("Unable to connect database: " . $db->connect_error);
    }
    $query = $db->query("SELECT nombre FROM usuarios WHERE user='$user'");
    $row = mysqli_fetch_array($query);
    $nombre=$row['nombre'];
    echo $nombre;
    ?>" />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-transporte").submit(function(){
            return $(this).validate();
        });
    })
</script>
