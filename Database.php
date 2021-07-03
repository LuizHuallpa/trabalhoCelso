<?php 
class Database{
   private $coon;
   
   public function __construct(){
       $this->coon =new PDO('mysql:host='.HOSTNAME.';dbname='.DATABASE,USUARIO , PASSWORD);
   }
   
   public function Get_Coon() {
       return $this->coon;
   }
   public function Total_Cand($candidato){
       $string_cand = 'candidato'.$candidato;
       $stmt = $this->coon->prepare("select sum(".$string_cand.") as candidato from votacao ");
       $stmt->execute();
       $result = $stmt->fetch(PDO::FETCH_ASSOC);
       return $result['candidato'];
   }
   
   public function Tot_bran(){
       $stmt = $this->coon->prepare("select sum(branco) as branco from votacao ");
       $stmt->execute();
       $result = $stmt->fetch(PDO::FETCH_ASSOC);
       return $result['branco'];
   }
   public function Tot_null(){
       $stmt = $this->coon->prepare("select sum(nulo) as nulo from votacao ");
       $stmt->execute();
       $result = $stmt->fetch(PDO::FETCH_ASSOC);
       return $result['nulo'];
   }
   public function Send_Vote_Database(Votos $voto) {
       try {
           $this->coon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $stmt_1 = $this->coon->prepare("select * from votacao where  zona = :zona and  secao = :secao and  urna = :urna");
           $stmt_1->bindParam(':zona',$voto->Zona);
           $stmt_1->bindParam(':secao',$voto->Secao);
           $stmt_1->bindParam(':urna',$voto->Urna);
           $stmt_1->execute();
           if(!$stmt_1->fetchColumn()){
           
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
                   return 1;
               }else{
                   return 0;
               }
           }else return 0;
           
       }catch (PDOException $e){
           return 'ERROR: ' . $e->getMessage();
       }
   }
}
?>