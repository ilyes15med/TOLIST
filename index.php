

<?php  require "./includes/header.php"?>

<?php
         $fetch=$connect->query("SELECT id,name,Datepost FROM task");
        $tesks= $fetch->fetchAll(PDO::FETCH_ASSOC);
?>
   
<!-- Main content -->
<div class="min-h-screen p-8">
   <h3>Hi <?php echo $_SESSION['username']?></h3>
  <h1 class="text-2xl font-semibold">Bienvenue dans l'application TODO</h1>
   <div class="">
      <table style="width:100%;border:1px solid black">
        <thead>
            <tr>
                <th>Numero</th>
                <th> tesk</th>
                <th>Date</th>
                <th>
                      <button class="p-2 rounded-full text-white bg-purple-600 hov= isset($tesk['Datepost']) ? date('Y-m-d\TH:i', strtotime(er:bg-purple-950" onclick="
                      
                      document.getElementById('formulaire').classList.remove('hidden')">Ajouter</button>
      
         
                </th>
            </tr>
        </thead>
      <tbody style="text-align:center">
<?php  foreach($tesks as $t) :?>
         <tr>
            <td>
               <?php  echo $t['id'];?>
               
               
            </td>
            <td>

               <?php  echo $t['name'];?>
            </td>
            <td>
               <?php  echo $t['Datepost'];?>

            </td>
            <td>
              
               <a href="delete.php?idtesk=<?php echo $t['id'];?>&nomtesk=<?php echo $t['name'];?>" type="button" name="supprimer" class="text-white rounder-none shadow bg-red-600 hover:bg-red-800 ">Supprimer</a>
            </td>
            <td>
              
               <a href="update.php?idtesk=<?php echo $t['id'];?>&nomtesk=<?php echo $t['name'];?>" type="button" name="supprimer" class="text-white rounder-none shadow bg-amber-700 hover:bg-amber-800 ">modifier</a>
           </td>

         </tr>
         <?php  endforeach;?>
      </tbody>
   
      </table>
    
   </div>
   <div class="hidden fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 
            bg-white p-6 rounded shadow-md w-full max-w-md z-50" id="formulaire">
    <p class="text-center text-2xl">saisir les informations</p>
    <div class="space-y-4">
      <form action="insert.php" method="post">
         <label>tesk</label>
         <input type="text" name="tesk" id="tesk" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
         <br>
         <label>Date faire</label>
         
         <input type="datetime-local"  name="Date" id="Date" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
         <br>
        
         <div class="flex justify-center space-x-4 mt-2">
               <button class="rounded-non p-2 text-bold bg-cyan-900 text-white px-4 py-2 rounded" name="Ajouter">Submit</button>
               <button type="button" class="rounded-non p-2 text-bold bg-red-600 text-white px-4 py-2 rounded" onclick="  document.getElementById('formulaire').classList.add('hidden')">Quitter</button>
         </div>

      </form>
    </div>
   

   </div>

</div>


<?php  require "./includes/footer.php"?>