<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion de Commandes — Commandes</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .modal { display: none !important; }
    .modal:target { display: flex !important; }
  </style>
</head>
<body class="bg-gray-50 font-sans antialiased">

  <!-- Navigation -->
  <nav class="bg-white shadow-sm border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center space-x-8">
          <a href="../index.html" class="text-xl font-bold text-indigo-600">📦 GES-COMMANDE</a>
          <div class="hidden sm:flex space-x-4">
            <a href="../index.html" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-indigo-600 hover:bg-gray-100">Dashboard</a>
            <a href="<?=WEBROOT."?controller=client&action=liste"?>" class="px-3 py-2 rounded-md text-sm font-medium text-indigo-600 bg-indigo-50">Clients</a>
            <a href="<?=WEBROOT."?controller=produit&action=liste"?>" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-indigo-600 hover:bg-gray-100">Produits</a>
            <a href="<?=WEBROOT."?controller=commande&action=liste"?>" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-indigo-600 hover:bg-gray-100">Commandes</a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- En-tête -->
  <header class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 flex flex-col sm:flex-row sm:items-center sm:justify-between">
    <div>
      <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Commandes</h2>
      <p class="mt-1 text-sm text-gray-500">Suivez et gérez les commandes clients.</p>
    </div>
    <a href="formulaire.html" class="mt-4 sm:mt-0 inline-flex items-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-lg hover:bg-indigo-700 transition shadow-sm">
      + Nouvelle commande
    </a>
  </header>

  <!-- Tableau -->
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6 mb-12">
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
      <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">N°</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Client</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Statut</th>
              <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Total</th>
              <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Articles</th>
              <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Actions</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><a href="detail.html?id=1" class="text-indigo-600 hover:underline">#1</a></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Dupont</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">2026-05-01</td>
              <td class="px-6 py-4 whitespace-nowrap"><span class="inline-flex px-2.5 py-0.5 rounded-full text-xs font-semibold bg-green-100 text-green-800">Livrée</span></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-right">299,98 €</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-600">2</td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#modal-1" class="inline-flex items-center px-3 py-1.5 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-xs font-medium">Supprimer</a>
              </td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><a href="detail.html?id=2" class="text-indigo-600 hover:underline">#2</a></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Martin</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">2026-05-03</td>
              <td class="px-6 py-4 whitespace-nowrap"><span class="inline-flex px-2.5 py-0.5 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-800">En cours</span></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-right">139,98 €</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-600">2</td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#modal-2" class="inline-flex items-center px-3 py-1.5 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-xs font-medium">Supprimer</a>
              </td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><a href="detail.html?id=3" class="text-indigo-600 hover:underline">#3</a></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Bernard</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">2026-05-05</td>
              <td class="px-6 py-4 whitespace-nowrap"><span class="inline-flex px-2.5 py-0.5 rounded-full text-xs font-semibold bg-gray-100 text-gray-800">En attente</span></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-right">399,99 €</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-600">1</td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#modal-3" class="inline-flex items-center px-3 py-1.5 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-xs font-medium">Supprimer</a>
              </td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><a href="detail.html?id=4" class="text-indigo-600 hover:underline">#4</a></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Durand</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">2026-05-08</td>
              <td class="px-6 py-4 whitespace-nowrap"><span class="inline-flex px-2.5 py-0.5 rounded-full text-xs font-semibold bg-gray-100 text-gray-800">En attente</span></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-right">589,96 €</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-600">4</td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#modal-4" class="inline-flex items-center px-3 py-1.5 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-xs font-medium">Supprimer</a>
              </td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><a href="detail.html?id=5" class="text-indigo-600 hover:underline">#5</a></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Petit</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">2026-05-10</td>
              <td class="px-6 py-4 whitespace-nowrap"><span class="inline-flex px-2.5 py-0.5 rounded-full text-xs font-semibold bg-green-100 text-green-800">Livrée</span></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-right">269,97 €</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-600">3</td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#modal-5" class="inline-flex items-center px-3 py-1.5 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-xs font-medium">Supprimer</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="p-4 text-sm text-gray-500 text-center border-t border-gray-100">5 commandes</div>
    </div>
  </section>

  <!-- Modales suppression -->
  <div id="modal-1" class="modal fixed inset-0 z-50 bg-black/40 flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-xl max-w-md w-full p-6">
      <h3 class="text-lg font-bold text-gray-900">Confirmer la suppression</h3>
      <p class="mt-2 text-sm text-gray-600">Êtes-vous sûr de vouloir supprimer la commande #1 ? Cette action est irréversible.</p>
      <div class="mt-6 flex justify-end space-x-3">
        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200">Annuler</a>
        <a href="?action=supprimer&id=1" class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">Supprimer</a>
      </div>
    </div>
  </div>
  <div id="modal-2" class="modal fixed inset-0 z-50 bg-black/40 flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-xl max-w-md w-full p-6">
      <h3 class="text-lg font-bold text-gray-900">Confirmer la suppression</h3>
      <p class="mt-2 text-sm text-gray-600">Êtes-vous sûr de vouloir supprimer la commande #2 ? Cette action est irréversible.</p>
      <div class="mt-6 flex justify-end space-x-3">
        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200">Annuler</a>
        <a href="?action=supprimer&id=2" class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">Supprimer</a>
      </div>
    </div>
  </div>
  <div id="modal-3" class="modal fixed inset-0 z-50 bg-black/40 flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-xl max-w-md w-full p-6">
      <h3 class="text-lg font-bold text-gray-900">Confirmer la suppression</h3>
      <p class="mt-2 text-sm text-gray-600">Êtes-vous sûr de vouloir supprimer la commande #3 ? Cette action est irréversible.</p>
      <div class="mt-6 flex justify-end space-x-3">
        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200">Annuler</a>
        <a href="?action=supprimer&id=3" class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">Supprimer</a>
      </div>
    </div>
  </div>
  <div id="modal-4" class="modal fixed inset-0 z-50 bg-black/40 flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-xl max-w-md w-full p-6">
      <h3 class="text-lg font-bold text-gray-900">Confirmer la suppression</h3>
      <p class="mt-2 text-sm text-gray-600">Êtes-vous sûr de vouloir supprimer la commande #4 ? Cette action est irréversible.</p>
      <div class="mt-6 flex justify-end space-x-3">
        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200">Annuler</a>
        <a href="?action=supprimer&id=4" class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">Supprimer</a>
      </div>
    </div>
  </div>
  <div id="modal-5" class="modal fixed inset-0 z-50 bg-black/40 flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-xl max-w-md w-full p-6">
      <h3 class="text-lg font-bold text-gray-900">Confirmer la suppression</h3>
      <p class="mt-2 text-sm text-gray-600">Êtes-vous sûr de vouloir supprimer la commande #5 ? Cette action est irréversible.</p>
      <div class="mt-6 flex justify-end space-x-3">
        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200">Annuler</a>
        <a href="?action=supprimer&id=5" class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">Supprimer</a>
      </div>
    </div>
  </div>

</body>
</html>
