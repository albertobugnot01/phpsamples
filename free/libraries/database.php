<?php include 'config.php'; ?>
<?php
	Class Database {
		
		protected $conn   = null;
		protected $config = array();

		public function __construct() {
			$this->config();
		}

		public function config(){
			$this->config = [
				'DBNAME'  	=> 'project',
				'HOST' 		=> 'localhost',
				'USERNAME' 	=> 'root',
				'PASSWORD' 	=> 'localhost',
			];
			return $this->config;
		}

		public function connect(){
			try {

	            $dsn 		= "mysql:dbname=".$this->config['DBNAME']."; host=".$this->config['HOST']."";
	            $user 		= $this->config['USERNAME'];
	            $password 	= $this->config['PASSWORD'];

	            $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	            );


	            $this->conn = new PDO($dsn, $user, $password, $options);
	            return $this->conn;

	        } catch (PDOException $e) {
	            echo 'Connection error: ' . $e->getMessage();
	        }
		}

		public function Close() {
        	$this->conn = null;
    	}
	}
?>