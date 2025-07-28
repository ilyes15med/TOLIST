<?php 
require "./config/config.php";



if (isset($_GET['idtesk'])) {  
    $IdTESK = $_GET['idtesk'];

    // استعلام لجلب معلومات التسك
    $req = "SELECT id, name, Datepost FROM task WHERE id = :id";
    $fetch = $connect->prepare($req);
    $fetch->execute([':id' => $IdTESK]);
    $tesk = $fetch->fetch(PDO::FETCH_ASSOC);

    // إذا تم إرسال الفورم لتحديث البيانات
    if ($tesk && isset($_POST['Ajouter'])) {
        $teskName = $_POST['tesk'];
        $dateTesk = $_POST['Date'];

        $reqUpdate = "UPDATE task SET name = :teskName, Datepost = :dateTesk WHERE id = :idTesk";
        $updating = $connect->prepare($reqUpdate);
        $updating->execute([
            ':idTesk' => $tesk['id'],
            ':teskName' => $teskName,
            ':dateTesk' => $dateTesk
        ]);

        // إعادة التوجيه بعد التحديث
        header("Location: index.php");
        exit;
    }
}
?>

<?php require "./includes/header.php" ?>

<!-- نموذج التعديل -->
<div class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-6 rounded shadow-md w-full max-w-md z-50" id="formulaire">
    <p class="text-center text-2xl">Saisir les informations</p>
    <div class="space-y-4">
        <form action="update.php?idtesk=<?php echo $IdTESK ?>" method="post">
            <label for="tesk">tesk</label>
            <input type="text" name="tesk" id="tesk"
                   value="<?php echo $tesk['name']?>"
                   class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            <br>
            <label for="Date">Date</label>
            <input type="datetime-local" name="Date" id="Date"
                   value="<?php echo $tesk['Datepost']?>"
                   class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            <br>
            <div class="flex justify-center space-x-4 mt-2">
                <button type="submit" name="Ajouter"
                        class="rounded p-2 font-bold bg-cyan-900 text-white px-4 py-2">Submit</button>
                <a href="index.php" class="rounded p-2 font-bold bg-red-600 text-white px-4 py-2"
                        onclick="document.getElementById('formulaire').classList.add('hidden')">Quitter
                </a>
            </div>
        </form>
    </div>
</div>


