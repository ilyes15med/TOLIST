<?php   require "./config/config.php"?>
<?php  
session_start();
$_SESSION['username']="ilyes";




?>
<?php
$req="SELECT message,created_at FROM Notification";
$fetch=$connect->query($req);
$Notifications= $fetch->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TODO Tasks</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800">

  <!-- Header/Navbar -->
  <nav class="bg-white shadow-md px-8 py-4 flex justify-between items-center">
    
    <!-- Logo -->
    
    
   

    <!-- Navigation links -->
    <div class="space-x-6 text-sm font-medium flex">
     
      <button type="button" class="text-red-600" onclick="document.getElementById('mess').classList.toggle('hidden');">
       notifications

      </button>
   
    </div>

   

  </nav>
  <div id="mess" class="hidden max-w-sm min-h-screen bg-stone-300">
        <table>
        <?php foreach($Notifications as $Not): ?>
          <tbody style="text-align:center">

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
 <?php  endforeach;?>
      </tbody>
        </table>


      </div>

    