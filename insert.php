
<?php 
   require "./config/config.php";
?>

<?php
      
      try {
        if(isset($_POST['Ajouter'])){
          $tesk=$_POST['tesk'];
          $date=$_POST['Date'];
          $req="INSERT INTO task (name,Datepost) VALUES (:name,:date)";
          $exec=$connect->prepare($req);
          $affiche= $exec->execute([
              ":name"=>$tesk,
              ":date"=>$date
           ]);
           if($affiche){
            //insert dans la table notification 
            //var
            $mess="le tesk (".$tesk.") a été bien ajouter";
            $req="INSERT INTO Notification (message) VALUES (:message) ";
            $ajout =$connect->prepare($req);
            $bien=$ajout->execute(
              [
                ':message'=>$mess
              ]
            );
           
           } 
         header("location:index.php");  
       
        }
       
      } catch (PDOException $e) {
        echo "Erreur d'insertion : " . $e->getMessage();
     }
    
      
?>