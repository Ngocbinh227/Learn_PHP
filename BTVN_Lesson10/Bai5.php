<?php
abstract class Database {
    abstract public function connect();
    abstract public function query($query, $params = []);
    abstract public function disconnect();
}
class MySQLDatabase extends Database {
	
        public	$isConn;
        protected	$datab;
        
        //CONNECT TO DB
        public	function connect($host = "localhost", $user = "root", $pass = "", $dbname = "deha", $options = [])
        {
            $this->isConn = TRUE;
            try {
                $this->datab = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass, $options);
                $this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $e){
                throw new Exception($e->getMessage());
            }
        }
        
        public function disconnect()
        {
            $this->isConn = FALSE;
            $this->datab = NULL;
        }
        
        public function query($query, $params = [])
        {
            try {
                $stmt = $this->datab->prepare($query);
                $stmt->execute($params);
                return TRUE;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }