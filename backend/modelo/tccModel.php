<?php
    class tccModelo {
        private $CodProj;
        private $TituloTCC;
        private $AutorTCC;
        private $Situacao;

        public function setCodProj($codProj) {
            $this->CodProj = $codProj;
        }
        public function getCodProj() {
            return $this->CodProj;
        }

        public function setTituloTCC($tituloTcc) {
            $this->TituloTCC = $tituloTcc;
        }
        public function getTituloTCC() {
            return $this->TituloTCC;
        }

        public function setAutorTCC($autorTcc) {
            $this->AutorTCC = $autorTcc;
        }
        public function getAutorTCC() {
            return $this->AutorTCC;
        }
        public function setSituacao($situacao) {
            $this->Situacao=$situacao;
        }
        public function getSituacao() {
            return $this->Situacao;
        }


    }


?>