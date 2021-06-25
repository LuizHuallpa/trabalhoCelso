<?php 
class Database{
   private $coon;
   
   public function __construct(){
       $this->coon =new PDO('mysql:host='.HOSTNAME.';dbname='.DATABASE,USUARIO , PASSWORD);
   }
   
   public function Get_Coon() {
       return $this->coon;
   }
   public function Send_Vote_Database(Votos $voto) {
       try {
           $this->coon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $stmt = $this->coon->prepare("insert into votacao (zona,secao,urna,candidato1,candidato2,candidato3,candidato4,candidato5,branco,nulo) values(:zona,:secao,:urna,:candidato1,:candidato2,:candidato3,:candidato4,:candidato5,:branco,:nulo)");
           $stmt->bindParam(':zona',$voto->Zona);
           $stmt->bindParam(':secao',$voto->Secao);
           $stmt->bindParam(':urna',$voto->Urna);
           $stmt->bindParam(':candidato1',$voto->Candidato1);
           $stmt->bindParam(':candidato2',$voto->Candidato2);
           $stmt->bindParam(':candidato3',$voto->Candidato3);
           $stmt->bindParam(':candidato4',$voto->Candidato4);
           $stmt->bindParam(':candidato5',$voto->Candidato5);
           $stmt->bindParam(':branco',$voto->Branco);
           $stmt->bindParam(':nulo',$voto->Nulo);
           if($stmt->execute()){
               return 'INSERIDO COM SUCESSO';
           }else{
               return 'não foi possivel inserir';
           }
           
       }catch (PDOException $e){
           return 'ERROR: ' . $e->getMessage();
       }
   }
}
?>