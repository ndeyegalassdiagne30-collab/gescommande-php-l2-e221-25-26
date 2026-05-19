

  <!-- En-tête -->
  <header class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 flex flex-col sm:flex-row sm:items-center sm:justify-between">
    <div>
      <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Commande #1</h2>
      <p class="mt-1 text-sm text-gray-500">Détail complet de la commande.</p>
    </div>
    <div class="mt-4 sm:mt-0 flex space-x-3">
      <a href="formulaire.html" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-lg hover:bg-indigo-700 transition shadow-sm">
        + Nouvelle commande
      </a>
      <a href="liste.html" class="inline-flex items-center px-4 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-200 transition">
        ← Retour
      </a>
    </div>
  </header>

  <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mt-6 mb-12 space-y-6">

    <!-- Bloc client -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sm:p-8">
      <h3 class="text-lg font-semibold text-gray-900 mb-4">👤 Informations client</h3>
      <!-- TODO: Remplacer par <?= htmlspecialchars($client['nom']) ?> -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
        <div>
          <span class="block text-gray-500">Nom</span>
          <span class="block font-medium text-gray-900">Dupont</span>
        </div>
        <div>
          <span class="block text-gray-500">Email</span>
          <span class="block font-medium text-gray-900">dupont@email.com</span>
        </div>
        <div>
          <span class="block text-gray-500">Téléphone</span>
          <span class="block font-medium text-gray-900">06 12 34 56 78</span>
        </div>
        <div>
          <span class="block text-gray-500">Adresse</span>
          <span class="block font-medium text-gray-900">12 Rue de Paris, 75001 Paris</span>
        </div>
      </div>
    </div>

    <!-- Infos commande -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sm:p-8">
      <h3 class="text-lg font-semibold text-gray-900 mb-4">📋 Détails de la commande</h3>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-sm">
        <div>
          <span class="block text-gray-500">N° commande</span>
          <span class="block font-medium text-gray-900">#1</span>
        </div>
        <div>
          <span class="block text-gray-500">Date</span>
          <span class="block font-medium text-gray-900">2026-05-01</span>
        </div>
        <div>
          <span class="block text-gray-500">Statut</span>
          <span class="inline-flex mt-1 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-green-100 text-green-800">Livrée</span>
        </div>
      </div>
    </div>

    <!-- Produits commandés -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sm:p-8">
      <h3 class="text-lg font-semibold text-gray-900 mb-4">📦 Produits commandés</h3>

      <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Réf.</th>
              <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nom</th>
              <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Quantité</th>
              <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase">Prix unitaire</th>
              <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase">Sous-total</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <!-- TODO: Boucle PHP foreach($produits as $p) -->
            <tr class="hover:bg-gray-50">
              <td class="px-4 py-3 whitespace-nowrap text-sm font-mono text-gray-500">REF001</td>
              <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">Chaise Ergonomique</td>
              <td class="px-4 py-3 whitespace-nowrap text-sm text-center text-gray-700">2</td>
              <td class="px-4 py-3 whitespace-nowrap text-sm text-right text-gray-700">149,99 €</td>
              <td class="px-4 py-3 whitespace-nowrap text-sm text-right font-medium text-gray-900">299,98 €</td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-4 py-3 whitespace-nowrap text-sm font-mono text-gray-500">REF003</td>
              <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">Lampe LED Bureau</td>
              <td class="px-4 py-3 whitespace-nowrap text-sm text-center text-gray-700">1</td>
              <td class="px-4 py-3 whitespace-nowrap text-sm text-right text-gray-700">59,99 €</td>
              <td class="px-4 py-3 whitespace-nowrap text-sm text-right font-medium text-gray-900">59,99 €</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Total -->
      <div class="mt-4 flex justify-end">
        <div class="bg-gray-50 rounded-lg px-6 py-3 border border-gray-200">
          <span class="text-sm font-medium text-gray-500">Total général :</span>
          <span class="ml-2 text-xl font-bold text-indigo-600">359,97 €</span>
        </div>
      </div>
    </div>

    <!-- Boutons d'action -->
    <div class="flex flex-col sm:flex-row sm:justify-end space-y-3 sm:space-y-0 sm:space-x-3">
      <a href="liste.html" class="px-6 py-2.5 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition text-center">← Retour aux commandes</a>
      <a href="#modal-supprimer" class="px-6 py-2.5 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 transition text-center">🗑 Supprimer cette commande</a>
    </div>
  </section>

  <!-- Modale suppression -->
  <div id="modal-supprimer" class="modal fixed inset-0 z-50 bg-black/40 flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-xl max-w-md w-full p-6">
      <h3 class="text-lg font-bold text-gray-900">Confirmer la suppression</h3>
      <p class="mt-2 text-sm text-gray-600">Êtes-vous sûr de vouloir supprimer la commande #1 ? Cette action est irréversible.</p>
      <div class="mt-6 flex justify-end space-x-3">
        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200">Annuler</a>
        <a href="?action=supprimer&id=1" class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">Supprimer</a>
      </div>
    </div>
  </div>

