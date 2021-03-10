<?php
    class coautModelo {
        private $codArtigo;
        private $nome;
        private $emailCoautor;

        public function setCodArtigo($codArtigo) {
            $this->codArtigo = $codArtigo;
        }
        public function getCodArtigo() {
            return $this->codArtigo;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function getNome() {
            return $this->nome;
        }

        public function setEmailCoAutor($emailCoautor) {
            $this->emailCoautor = $emailCoautor;
        }
        public function getEmailCoAutor() {
            return $this->emailCoautor;
        }


    }


?>