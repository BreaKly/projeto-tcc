<?php
class Conexao{
   private $usr;
   private $pwd;
   private $server;
   private $db;
   private $driver;
   private $pdo;
      function __construct($arq){
         try{
            if(file_exists($arq)){
               $config = parse_ini_file($arq);
               $this->usr = $config['usuario'];
               $this->pwd = $config['password'];
               $this->server = $config['host'];
               $this->db = $config['database'];
               $this->driver = $config['driver'];
               switch($this->driver){
                  case "mysql":
                     $this->pdo = new PDO("{$this->driver}:host={$this->server};dbname={$this->db}",$this->usr,$this->pwd);
                     $this->getPDO()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     echo "<script>console.log('Conexão efetuada com sucesso');</script>";
                     break;
                  default:
                     die("<script>console.error('SGBD Incompatível com o sistema');</script>");  
               }
            }else{
               die("<script>console.error('Arquivo de configuração não encontrado');</script>");
            }    
         }catch(PDOException $e){
            $error = addslashes($e->getMessage());
            echo "<script>console.error('Erro ao conectar ao banco: {$error}');</script>";
         }catch(Exception $e){
            echo "<script>console.error('Erro ao processar o arquivo');</script>";
         }
      }      
   function getPDO(){
      return $this->pdo;
   }
   function fecharConexao(){
      $this->pdo = NULL;
   }

}
?>
