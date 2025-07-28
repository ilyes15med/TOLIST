<?php require "../includes/header.php" ?>
<?php require "../config/config.php" ?>
<h1 class="text-2xl">Notification</h1>
<div class="min-h-screen p-4">
   <p class="text-red-600">
   hello user 
   </p> 
   <table>
    <?php 
        $req="SELECT message,created_at FROM Notification";
        $fetch=$connect->query($req);
       $Notifications= $fetch->fetchAll(PDO::FETCH_ASSOC);




    ?>
    <tbody> 
      <?php foreach($Notifications as $Not): ?>

       <tr>

            <td>
                <?php 
                   echo '
                   <div class="max-w-sm mx-auto p-4 bg-white hover:bg-violet-500 shadow rounded ml-5 mb-4">
                     <p class="text-black">'
                       . htmlspecialchars($Not['message']) .
                     '</p>
                     <p class="text-black">'
                       . htmlspecialchars($Not['created_at']) .
                     '</p>
                   </div>
                 ';
                
               
                
                ?>
               
            </td>
       </tr>
   </table>
     <?php  endforeach; ?>
   </tbody>


</div>


<?php
require "../includes/footer.php";
?>