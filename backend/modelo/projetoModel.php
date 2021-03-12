<?php
    class ProjetoModelo {
        private $CodProj;
        private $CodResp;
        private $DataInicio;
        private $DataFim;
        private $SituAtual;
    
 

        public function setCodProj($codProj) {
            $this->CodProj = $codProj;
        }
        public function getCodProj() {
            return $this->CodProj;
        }

        public function setCodResp($codResp) {
            $this->CodResp = $codResp;
        }
        public function getCodResp() {
            return $this->CodResp;
        }

        public function setDataInicio($dataInicio) {
            $this->DataInicio = $dataInicio;
        }
        public function getDataInicio() {
            return $this->DataInicio;
        }
        public function setDataFim($dataFim) {
            $this->DataFim = $dataFim;
        }
        public function getDataFim() {
            return $this->DataFim;
        }
        public function setSituAtual($situAtual) {
            $this->SituAtual=$situAtual;
        }
        public function getSituAtual() {
            return $this->SituAtual;
        }


    }


?>