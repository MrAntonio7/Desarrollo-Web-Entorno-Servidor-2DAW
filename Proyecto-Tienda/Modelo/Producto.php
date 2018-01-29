<?php
include_once Database.php;
class Producto
{   
    private $pdo;

    private $producto_cod;
    private $producto_nombre;
    private $producto_nombrecorto;
    private $producto_descripcion;
    private $producto_pvp;
    private $producto_familia;

    public function __construct()
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

			$stm = $this->pdo->prepare("SELECT * FROM producto");
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
			          ->prepare("SELECT * FROM producto WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
    }
    
    public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM producto WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
    }
    
    public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE producto SET 
						producto_cod      	   = ?,
						producto_nombre        = ?, 
                        producto_nombrecorto   = ?, 
                        producto_descripcion   = ?, 
                        producto_pvp           = ?, 
                        producto_familia       = ?, 

						
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->producto_cod, 
                        $data->producto_nombre,
                        $data->producto_nombrecorto,
                        $data->producto_descripcion,
                        $data->producto_pvp, 
                        $data->producto_familia, 
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
    }
    
    public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO producto (producto_cod, producto_nombre, producto_nombrecorto, producto_descripcion, producto_pvp, producto_familia) 
		        VALUES (?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->producto_cod, 
                    $data->producto_nombre,
                    $data->producto_nombrecorto,
                    $data->producto_descripcion,
                    $data->producto_pvp, 
                    $data->producto_familia, 
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}