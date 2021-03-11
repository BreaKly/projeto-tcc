<?php
    class ArtigoModelo {
        private $CodArtigo;
        private $Titulo;
        private $Natureza;
        private $AutPrinc;
        private $EmailAutPrinc;



        public function setCodArtigo($codArtigo) {
            $this->CodArtigo = $codArtigo;
        }
        public function getCodArtigo() {
            return $this->CodArtigo;
        }

        public function setTitulo($titulo) {
            $this->Titulo = $titulo;
        }
        public function getTitulo() {
            return $this->Titulo;
        }

        public function setNatureza($natureza) {
            $this->Natureza = $natureza;
        }
        public function getNatureza() {
            return $this->Natureza;
        }
        public function setAutPrinc($autPrinc) {
            $this->AutPrinc = $autPrinc;
        }
        public function getAutPrinc() {
            return $this->AutPrinc;
        }
        public function setEmailAutPrinc($emailautPrinc) {
            $this->EmailautPrinc = $emailautPrinc;
        }
        public function getEmailAutPrinc() {
            return $this->EmailAutPrinc;
        }


    }


?>