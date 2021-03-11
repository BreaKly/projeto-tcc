<?php
    class ResponsavelModelo {
        private $Nome;
        private $Email;
       

        public function setNome($nome) {
            $this->Nome = $nome;
        }
        public function getNome() {
            return $this->Nome;
        }

        public function setEmail($email) {
            $this->Email = $email;
        }
        public function getEmail() {
            return $this->Email;
        }


    }


?>