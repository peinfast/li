<?php
require_once 'model/inversa.php';

class InversaController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Inversa();
    }

    public function Index(){
        require_once 'view/header.php';
        require_once 'view/inversa/inversa.php';
        require_once 'view/footer.php';
    }
    public function Rechazo(){
        $alm = new Inversa();

        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/inversa/rechazo-editar.php';
        require_once 'view/footer.php';
    }
    public function NC(){
        $alm = new Inversa();

        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/inversa/NC.php';
        require_once 'view/footer.php';
    }
    public function Salida(){
        $alm = new Inversa();

        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/inversa/salida.php';
        require_once 'view/footer.php';
    }
    public function Actuaout(){
        $alm = new Transporte();

        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/transporte/casetaout.php';
        require_once 'view/footer.php';
    }
    public function Cargaini(){
        $alm = new Transporte();

        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/cab.php';
        require_once 'view/transporte/inicar.php';
        require_once 'view/footer.php';
    }
    public function Cargaout(){
        $alm = new Transporte();

        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/cab.php';
        require_once 'view/transporte/fincar.php';
        require_once 'view/footer.php';
    }
    public function GRechazo(){
        $alm = new Inversa();


        $alm->Factura = $_REQUEST['Factura'];
        $alm->OrdenCompra = $_REQUEST['OrdenCompra'];
        $alm->SKU = $_REQUEST['SKU'];
        $alm->Tipo = $_REQUEST['Tipo'];
        $alm->Area = $_REQUEST['Area'];
        $alm->Cliente = $_REQUEST['Cliente'];
        $alm->Sucursal = $_REQUEST['Sucursal'];
        $alm->Transporte = $_REQUEST['Transporte'];
        $alm->FechaEnvio = $_REQUEST['FechaEnvio'];
        $alm->FolioCita = $_REQUEST['FolioCita'];
	      $alm->Piezas = $_REQUEST['Piezas'];
        $alm->Condicion = $_REQUEST['Condicion'];
        $alm->Motivo = $_REQUEST['Motivo'];
        $alm->Imputable = $_REQUEST['Imputable'];
        $alm->BranchIngNC = $_REQUEST['BranchIngNC'];
        $alm->FechaIngre = $_REQUEST['FechaIngre'];
        $alm->Usuario = $_REQUEST['Usuario'];

        $alm->id > 0
            ? $this->model->Registrar($alm)
            : $this->model->Registrar($alm);


        header('Location: index.php');
    }
    public function GSalida(){
        $alm = new Inversa();

        $alm->Factura = $_REQUEST['Factura'];
        $alm->OrdenCompra = $_REQUEST['OrdenCompra'];
        $alm->SKU = $_REQUEST['SKU'];
        $alm->Tipo = $_REQUEST['Tipo'];
        $alm->Area = $_REQUEST['Area'];
        $alm->Cliente = $_REQUEST['Cliente'];
        $alm->Sucursal = $_REQUEST['Sucursal'];
        $alm->Transporte = $_REQUEST['Transporte'];

        $alm->id > 0
            ? $this->model->Actualizar2($alm)
            : $this->model->Actualizar2($alm);


        header('Location: index.php');

    }
    public function GActuaout(){
        $alm = new Transporte();



        //$alm->FH_Arribo = $_REQUEST['FH_Arribo'];
        $alm->Usuario5 = $_REQUEST['Usuario5'];
        $alm->Estatus5 = $_REQUEST['Estatus5'];
        $alm->Observaciones5 = $_REQUEST['Observaciones5'];
        $alm->Folio = $_REQUEST['Folio'];


        $alm->id > 0
            ? $this->model->Actualizar4($alm)
            : $this->model->Actualizar4($alm);


        header('Location: seguridad.php');

    }
    public function GCarga(){
        $alm = new Transporte();



        $alm->Cortina = $_REQUEST['Cortina'];
        $alm->Usuario3 = $_REQUEST['Usuario3'];
        $alm->Estatus3 = $_REQUEST['Estatus3'];
        $alm->Observaciones3 = $_REQUEST['Observaciones3'];
        $alm->Folio = $_REQUEST['Folio'];


        $alm->id > 0
            ? $this->model->Actualizar2($alm)
            : $this->model->Actualizar2($alm);


        header('Location: prevension.php');

    }
    public function GCargaout(){
        $alm = new Transporte();



        $alm->EstatusProducto = $_REQUEST['EstatusProducto'];
        $alm->Usuario4 = $_REQUEST['Usuario4'];
        $alm->Estatus4 = $_REQUEST['Estatus4'];
        $alm->Observaciones4 = $_REQUEST['Observaciones4'];
        $alm->Folio = $_REQUEST['Folio'];


        $alm->id > 0
            ? $this->model->Actualizar3($alm)
            : $this->model->Actualizar3($alm);


        header('Location: prevension.php');

    }
    public function Avanzada(){
        $this->model->Avanzada($_REQUEST['id']);
        header('Location: index.php');
    }

    public function update1(){

    }
}
?>
