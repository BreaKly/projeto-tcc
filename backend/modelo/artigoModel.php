<?php
    class artigoModelo {
        private $codProj;
        private $titulo;
        private $natureza;
        private $autPrinc;
        private $emailautPrinc;



        public function setCodProj($codProj) {
            $this->codProj = $codProj;
        }
        public function getCodProj() {
            return $this->codProj;
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }
        public function getTitulo() {
            return $this->titulo;
        }

        public function setNatureza($natureza) {
            $this->natureza = $natureza;
        }
        public function getNatureza() {
            return $this->natureza;
        }
        public function setAutPrinc($autPrinc) {
            $this->autPrinc = $autPrinc;
        }
        public function getAutPrinc() {
            return $this->autPrinc;
        }
        public function setEmailAutPrinc($emailautPrinc) {
            $this->emailautPrinc = $emailautPrinc;
        }
        public function getEmailAutPrinc() {
            return $this->emailautPrinc;
        }


    }


?>