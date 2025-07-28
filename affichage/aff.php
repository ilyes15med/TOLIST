<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Message succès</title>
  
</head>
<body>
<script src="https://cdn.tailwindcss.com"></script>
<!-- ✅ SCRIPT à mettre après l'élément ! -->
<script>
  function quiter() {
    document.getElementById("message").classList.add("hidden");
  }
</script>

<!-- ✅ MESSAGE -->
<div id="message" class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-green-300 shadow-lg rounded p-6 max-w-md w-full text-center">
  <button onclick="quiter()" class="absolute top-2 right-2 text-red-600 text-xl font-bold hover:text-red-800">
    ❌
  </button>
  <h1 class="text-2xl font-bold">✅ Tâche ajoutée avec succès</h1>
</div>

</body>
</html>
