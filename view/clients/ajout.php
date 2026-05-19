

  <!-- En-tête -->
  <header class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
    <!-- TODO: Remplacer le titre par une condition PHP : if($id) => "Modifier" else "Ajouter" -->
    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Ajouter un client</h2>
    <p class="mt-1 text-sm text-gray-500">Remplissez les champs ci-dessous.</p>
  </header>

  <!-- Formulaire -->
  <section class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 mt-6 mb-12">
    <!-- TODO: action = "controleurs/clientController.php?action=ajouter" / méthode POST -->
    <!-- TODO: Ajouter champ caché <input type="hidden" name="action" value="ajouter"> -->
    <form class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sm:p-8" action="#" method="POST">

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <!-- Nom -->
        <div class="sm:col-span-2">
          <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Nom complet <span class="text-red-500">*</span></label>
          <!-- TODO: value = <?= htmlspecialchars($client['nom'] ?? '') ?> -->
          <input type="text" name="nom" id="nom" required
                 class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition"
                 placeholder="Ex: Dupont Jean">
          <p class="mt-1 text-xs text-gray-400">Obligatoire</p>
        </div>

        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email <span class="text-red-500">*</span></label>
          <input type="email" name="email" id="email" required
                 class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition"
                 placeholder="exemple@email.com">
        </div>

        <!-- Téléphone -->
        <div>
          <label for="telephone" class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
          <input type="tel" name="telephone" id="telephone"
                 class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition"
                 placeholder="06 12 34 56 78">
        </div>

        <!-- Adresse -->
        <div class="sm:col-span-2">
          <label for="adresse" class="block text-sm font-medium text-gray-700 mb-1">Adresse</label>
          <textarea name="adresse" id="adresse" rows="2"
                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition resize-none"
                    placeholder="12 Rue de Paris, 75001 Paris"></textarea>
        </div>
      </div>

      <!-- Boutons -->
      <div class="mt-8 flex flex-col sm:flex-row sm:justify-end space-y-3 sm:space-y-0 sm:space-x-3">
        <a href="liste.html" class="px-6 py-2.5 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition text-center">Annuler</a>
        <button type="submit" class="px-6 py-2.5 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition shadow-sm">
          Enregistrer
        </button>
      </div>
    </form>
  </section>


