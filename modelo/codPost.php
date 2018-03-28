<?php
//se crea la clase profesor
	class codPost
	{

		/*se declaran las variables privadas*/
		private $con;
		private $array;

		/*se crea el contructor*/

		public function __construct()
		{
			$this->con=Conexion::connect();
			$this->array=array();

		}



		public function get_CP($cp){

			$sql=$this->con->query("SELECT cp, id FROM huella WHERE cp LIKE '%$cp%' GROUP BY cp");//realiza la consulta a la base de datos

				if($sql){//se pregunta que cumnplan las dos consultas.
					if($sql->num_rows>0){

						while($rw=$sql->fetch_array())
						{
							$this->array[]=$rw;
						}

					}else{

					}


				}else{
						return false;

			   }

			   return $this->array;
		}

	}
 ?>
