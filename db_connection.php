<?php

    class db {

        private $host = 'localhost';

        private $user = 'root';

        private $password = '';

        private $database = 'market';

        public function mysql_connection(){

            $con = mysqli_connect($this-> host, $this-> user, $this-> password, $this->database);

            mysqli_set_charset($con, 'utf8');

            if(mysqli_connect_errno()){
                echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();	
            }
            
            return $con;
        }
    }
?>