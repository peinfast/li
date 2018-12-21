<?php
class Inversa
{
		private $pdo;

		public $id;
		public $FechaIngre;
		public $Tipo;
    public $Area;
    public $Cliente;
		public $Sucursal;
    public $Transporte;
    public $FechaEnvio;
		public $FolioCita;
		public $Factura;
    public $OrdenCompra;
    public $SKU;
    public $Piezas;
		public $Condicion;
    public $Motivo;
    public $Imputable;
    public $FSoliNC;
		public $FolioNC;
		public $BranchIngNC;
    public $EstatusNC;
    public $NotaCredito;
		public $FEntreProd;
		public $AreaEntre;
    public $EstatusFinal;
    public $Observaciones;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();
			//SELECT * FROM courses WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) > start_time
			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE FH_Carga > now() order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function rojo()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE FH_Carga < now() and Estatus5!='Liberado de Cedic' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function verde()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) < FH_Carga order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function amarillo()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) > FH_Carga AND now() < FH_Carga order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function rojoL1b()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE FH_Carga < now() and Estatus5 != 'Liberado de Cedic' and Area='L1bre' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function verdeL1b()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) < FH_Carga and Area='L1bre' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function amarilloL1b()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) > FH_Carga AND now() < FH_Carga and Area='L1bre' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function rojoLI()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE FH_Carga < now() and Area='Logistica Inversa' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function verdeLI()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) < FH_Carga and Area='Logistica Inversa' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function amarilloLI()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) > FH_Carga AND now() < FH_Carga and Area='Logistica Inversa' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function rojoMov()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE FH_Carga < now() and Area='Movilidad' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function verdeMov()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) < FH_Carga and Area='Movilidad' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function amarilloMov()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) > FH_Carga AND now() < FH_Carga and Area='Movilidad' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function rojoPro()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE FH_Carga < now() and Area='Proyectos' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function verdePro()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) < FH_Carga and Area='Proyectos' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function amarilloPro()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) > FH_Carga AND now() < FH_Carga and Area='Proyectos' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function rojoRec()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE FH_Carga < now() and Area='Recibo' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function verdeRec()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) < FH_Carga and Area='Recibo' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function amarilloRec()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) > FH_Carga AND now() < FH_Carga and Area='Recibo' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function rojoRet()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE FH_Carga < now() and Area='Retail' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function verdeRet()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) < FH_Carga and Area='Retail' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function amarilloRet()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) > FH_Carga AND now() < FH_Carga and Area='Retail' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Obtener($id)
	{

		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM folios WHERE id = ?");


			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Avanzada($id)
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{

		try
		{

			//$date = date('Y-m-d H:i:s');
			$sql = "UPDATE  SET Estatus2 = ?, FH_Arribo = now(), Usuario2 = ?, Observaciones2 = ? WHERE Folio = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(

							$data->Estatus2,

							//$data->FH_Arribo,
							$data->Usuario2,
							$data->Observaciones2,
							$data->Folio


					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
//Proceso...
	public function Actualizar2($data)
	{

		try
		{
			$sql = "UPDATE folios  SET Estatus3 = ?, Cortina = ?, FH_Inicio_CarDesc = now(), Usuario3 = ?, Observaciones3 = ? WHERE Folio = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(

							$data->Estatus3,
							$data->Cortina,
							$data->Usuario3,
							$data->Observaciones3,
							$data->Folio


					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar3($data)
	{
		try
		{
			$sql = "UPDATE folios  SET Estatus4 = ?, EstatusProducto = ?, FH_Conclu_CarDesc = now(), Usuario4 = ?, Observaciones4 = ? WHERE Folio = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(

							$data->Estatus4,
							$data->EstatusProducto,
							$data->Usuario4,
							$data->Observaciones4,
							$data->Folio


					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar4($data)
	{
		try
		{
			$sql = "UPDATE folios  SET Estatus5 = ?, FH_Salida_Caseta = now(), Usuario5 = ?, Observaciones5 = ? WHERE Folio = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
							$data->Estatus5,
							//$data->FH_Arribo,
							$data->Usuario5,
							$data->Observaciones5,
							$data->Folio
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function Registrar(Inversa $data)
	{

		try
		{
		$sql = "INSERT INTO rechazos (Factura, OrdenCompra, SKU, Tipo, Area, Cliente, Sucursal, Transporte, FechaEnvio, FolioCita, Piezas, Condicion, Motivo, Imputable, BranchIngNC, FechaIngre, Usuario) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, now(), ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(


			$data->Factura,
      $data->OrdenCompra,
      $data->SKU,
      $data->Tipo,
			$data->Area,
      $data->Cliente,
      $data->Sucursal,
		  $data->Transporte,
		  $data->FechaEnvio,
		  $data->FolioCita,
		  $data->Piezas,
			$data->Condicion,
			$data->Motivo,
			$data->Imputable,
      $data->BranchIngNC,
			$data->FechaIngre,
			$data->Usuario
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
?>
