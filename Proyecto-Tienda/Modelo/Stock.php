<?php
include_once Database.php;
class Stock
{
    private $pdo;

    private $stock_producto;
    private $stock_tienda;
    private $stock_unidades;

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

			$stm = $this->pdo->prepare("SELECT * FROM stock");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
    }
    public function Obtener($producto)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM stock WHERE producto = ?");
			          

			$stm->execute(array($producto));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
    }
    public function Eliminar($producto)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM stock WHERE producto = ?");			          

			$stm->execute(array($producto));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
    }
    public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE stock SET 
						stock_producto   	   = ?,
						stock_tienda           = ?, 
                        stock_unidades         = ?,

						
				    WHERE producto = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->stock_producto, 
                        $data->stock_tienda,
                        $data->stock_unidades,
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
		$sql = "INSERT INTO stock (stock_producto, stock_tienda, stock_unidades) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->stock_producto, 
                    $data->stock_tienda,
                    $data->stock_unidades, 
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}