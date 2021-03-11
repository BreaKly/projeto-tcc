<?php
    class CoautModelo {
        private $CodArtig;
        private $Nome;
        private $EmailCoaut;

        public function setCodArtig($codArtig) {
            $this->CodArtig= $codArtig;
        }
        public function getCodArtig() {
            return $this->CodArtig;
        }

        public function setNome($nome) {
            $this->Nome = $nome;
        }
        public function getNome() {
            return $this->Nome;
        }

        public function setEmailCoAut($emailCoaut) {
            $this->EmailCoaut = $emailCoaut;
        }
        public function getEmailCoAut() {
            return $this->EmailCoaut;
        }


    }


?>