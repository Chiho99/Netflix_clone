<?php
    class User {
        private $con, $qlData;

        public function __construct($con, $usernmae) {
            $this->con = $con;

            $query = $con->prepare("SELECT * FROM users WHERE username=:username");
            $query->bindValue(":username" , $usernmae);
            $query->execute();

            $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
            
        }

        public function getFirstName() {
            return $this->sqlData["firstName"];
        }
        public function getLastName() {
            return $this->sqlData["lastName"];
        }
        public function getEmail() {
            return $this->sqlData["email"];
        }
    }