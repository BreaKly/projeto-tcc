<?php
    class tccModelo {
        private $codProj;
        private $tituloTcc;
        private $autorTcc;
        private $situacao;

        public function setCodProj($codProj) {
            $this->codProj = $codProj;
        }
        public function getCodProj() {
            return $this->codProj;
        }

        public function setTituloTcc($tituloTcc) {
            $this->tituloTcc = $tituloTcc;
        }
        public function getTituloTcc() {
            return $this->tituloTcc;
        }

        public function setAutorTcc($autorTcc) {
            $this->autorTcc = $autorTcc;
        }
        public function getAutorTcc() {
            return $this->autorTcc;
        }
        public function setSituacao($situacao) {
            $this->situacao=$situacao;
        }
        public function getSituacao() {
            return $this->situacao;
        }


    }


?>