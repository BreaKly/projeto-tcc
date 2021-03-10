<?php
    class projetoModelo {
        private $codigo;
        private $codResp;
        private $dataInicio;
        private $dataFim;
        private $situAtual;
    
 

        public function setCodigo($codigo) {
            $this->codigo = $codigo;
        }
        public function getCodigo() {
            return $this->codigo;
        }

        public function setCodResp($codResp) {
            $this->codResp = $codResp;
        }
        public function getCodResp() {
            return $this->codResp;
        }

        public function setDataInicio($dataInicio) {
            $this->dataInicio = $dataInicio;
        }
        public function getDataInicio() {
            return $this->dataInicio;
        }
        public function setDataFim($dataFim) {
            $this->dataFim = $dataFim;
        }
        public function getDataFim() {
            return $this->dataFim;
        }
        public function setSituAtual($situAtual) {
            $this->$situAtual;
        }
        public function getSituAtual() {
            return $this->situAtual;
        }


    }


?>