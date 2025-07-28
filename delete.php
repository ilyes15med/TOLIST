

<?php 
require  "./config/config.php";
   

        if(isset($_GET['idtesk']) && isset($_GET['nomtesk']) ){
            $IdTESK=$_GET['idtesk'];
            $nomtesk=$_GET['nomtesk'];
            $req="DELETE FROM task WHERE id=:idTesk";
            $d=$connect->prepare($req);
            $d->execute([
               ':idTesk'=>$IdTESK

            ]);
               
             if($d){  
           
                $Not="supprimer le tesk (".$nomtesk.")";
                $NotifDelete="INSERT INTO Notification (message) VALUES (:message) ";
                $deleting=$connect->prepare($NotifDelete);
                 $deleting->execute(

                    [
                        ':message'=>$Not
                    ]
                 );


                   
                   
            
                }
                header("location: index.php");
            
            

        }
      


   
?>
