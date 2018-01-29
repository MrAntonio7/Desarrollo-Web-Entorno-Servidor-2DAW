<?php
include_once Database.php;
class Tienda
{

    private $pdo;

    private $tienda_cod;
    private $tienda_nombre;
    private $tienda_tlf;

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

			$stm = $this->pdo->prepare("SELECT * FROM tienda");
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
			          ->prepare("SELECT * FROM tienda WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM tienda WHERE id = ?");			          

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
			$sql = "UPDATE tienda SET 
						tienda_cod  	   = ?,
						tienda_nombre      = ?, 
                        tienda_tlf         = ?, 

				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->tienda_cod, 
                        $data->tienda_nombre,
                        $data->tienda_tlf,
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
		$sql = "INSERT INTO tienda (tienda_cod, tienda_nombre, tienda_tlf) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->tienda_cod, 
                    $data->tienda_nombre,
                    $data->tienda_tlf,
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}