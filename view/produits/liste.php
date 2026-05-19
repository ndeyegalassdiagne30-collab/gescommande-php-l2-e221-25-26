<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion de Commandes — Produits</title>
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
      <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Produits</h2>
      <p class="mt-1 text-sm text-gray-500">Gérez votre catalogue de produits.</p>
    </div>
    <a href="formulaire.html" class="mt-4 sm:mt-0 inline-flex items-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-lg hover:bg-indigo-700 transition shadow-sm">
      + Ajouter un produit
    </a>
  </header>

  <!-- Tableau -->
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6 mb-12">
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
      <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Réf.</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nom</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
              <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Prix U.</th>
              <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Stock</th>
              <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Actions</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-mono text-gray-500">REF001</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Chaise Ergonomique</td>
              <td class="px-6 py-4 text-sm text-gray-600 max-w-xs truncate">Chaise de bureau réglable</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-right text-gray-700 font-medium">149,99 €</td>
              <td class="px-6 py-4 whitespace-nowrap text-center"><span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">25</span></td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                <a href="formulaire.html?id=1" class="inline-flex items-center px-3 py-1.5 bg-indigo-50 text-indigo-700 rounded-md hover:bg-indigo-100 text-xs font-medium">Modifier</a>
                <a href="#modal-1" class="inline-flex items-center px-3 py-1.5 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-xs font-medium">Supprimer</a>
              </td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-mono text-gray-500">REF002</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Table Assise-Debout</td>
              <td class="px-6 py-4 text-sm text-gray-600 max-w-xs truncate">Table électrique réglable en hauteur</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-right text-gray-700 font-medium">399,99 €</td>
              <td class="px-6 py-4 whitespace-nowrap text-center"><span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">10</span></td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                <a href="formulaire.html?id=2" class="inline-flex items-center px-3 py-1.5 bg-indigo-50 text-indigo-700 rounded-md hover:bg-indigo-100 text-xs font-medium">Modifier</a>
                <a href="#modal-2" class="inline-flex items-center px-3 py-1.5 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-xs font-medium">Supprimer</a>
              </td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-mono text-gray-500">REF003</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Lampe LED Bureau</td>
              <td class="px-6 py-4 text-sm text-gray-600 max-w-xs truncate">Lampe avec gradation et température réglable</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-right text-gray-700 font-medium">59,99 €</td>
              <td class="px-6 py-4 whitespace-nowrap text-center"><span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">50</span></td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                <a href="formulaire.html?id=3" class="inline-flex items-center px-3 py-1.5 bg-indigo-50 text-indigo-700 rounded-md hover:bg-indigo-100 text-xs font-medium">Modifier</a>
                <a href="#modal-3" class="inline-flex items-center px-3 py-1.5 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-xs font-medium">Supprimer</a>
              </td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">4</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-mono text-gray-500">REF004</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Clavier Mécanique</td>
              <td class="px-6 py-4 text-sm text-gray-600 max-w-xs truncate">Clavier RGB switches Cherry MX</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-right text-gray-700 font-medium">129,99 €</td>
              <td class="px-6 py-4 whitespace-nowrap text-center"><span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">30</span></td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                <a href="formulaire.html?id=4" class="inline-flex items-center px-3 py-1.5 bg-indigo-50 text-indigo-700 rounded-md hover:bg-indigo-100 text-xs font-medium">Modifier</a>
                <a href="#modal-4" class="inline-flex items-center px-3 py-1.5 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-xs font-medium">Supprimer</a>
              </td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">5</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-mono text-gray-500">REF005</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Souris Sans Fil</td>
              <td class="px-6 py-4 text-sm text-gray-600 max-w-xs truncate">Souris ergonomique rechargeable</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-right text-gray-700 font-medium">79,99 €</td>
              <td class="px-6 py-4 whitespace-nowrap text-center"><span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">40</span></td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                <a href="formulaire.html?id=5" class="inline-flex items-center px-3 py-1.5 bg-indigo-50 text-indigo-700 rounded-md hover:bg-indigo-100 text-xs font-medium">Modifier</a>
                <a href="#modal-5" class="inline-flex items-center px-3 py-1.5 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-xs font-medium">Supprimer</a>
              </td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">6</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-mono text-gray-500">REF006</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Casque Audio Pro</td>
              <td class="px-6 py-4 text-sm text-gray-600 max-w-xs truncate">Casque studio circum-auriculaire</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-right text-gray-700 font-medium">199,99 €</td>
              <td class="px-6 py-4 whitespace-nowrap text-center"><span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">15</span></td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                <a href="formulaire.html?id=6" class="inline-flex items-center px-3 py-1.5 bg-indigo-50 text-indigo-700 rounded-md hover:bg-indigo-100 text-xs font-medium">Modifier</a>
                <a href="#modal-6" class="inline-flex items-center px-3 py-1.5 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-xs font-medium">Supprimer</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="p-4 text-sm text-gray-500 text-center border-t border-gray-100">6 produits</div>
    </div>
  </section>

  <!-- Modales de suppression -->
  <div id="modal-1" class="modal fixed inset-0 z-50 bg-black/40 flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-xl max-w-md w-full p-6">
      <h3 class="text-lg font-bold text-gray-900">Confirmer la suppression</h3>
      <p class="mt-2 text-sm text-gray-600">Êtes-vous sûr de vouloir supprimer "Chaise Ergonomique" ? Cette action est irréversible.</p>
      <div class="mt-6 flex justify-end space-x-3">
        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition">Annuler</a>
        <a href="?action=supprimer&id=1" class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 transition">Supprimer</a>
      </div>
    </div>
  </div>
  <div id="modal-2" class="modal fixed inset-0 z-50 bg-black/40 flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-xl max-w-md w-full p-6">
      <h3 class="text-lg font-bold text-gray-900">Confirmer la suppression</h3>
      <p class="mt-2 text-sm text-gray-600">Êtes-vous sûr de vouloir supprimer "Table Assise-Debout" ? Cette action est irréversible.</p>
      <div class="mt-6 flex justify-end space-x-3">
        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition">Annuler</a>
        <a href="?action=supprimer&id=2" class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 transition">Supprimer</a>
      </div>
    </div>
  </div>
  <div id="modal-3" class="modal fixed inset-0 z-50 bg-black/40 flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-xl max-w-md w-full p-6">
      <h3 class="text-lg font-bold text-gray-900">Confirmer la suppression</h3>
      <p class="mt-2 text-sm text-gray-600">Êtes-vous sûr de vouloir supprimer "Lampe LED Bureau" ? Cette action est irréversible.</p>
      <div class="mt-6 flex justify-end space-x-3">
        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition">Annuler</a>
        <a href="?action=supprimer&id=3" class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 transition">Supprimer</a>
      </div>
    </div>
  </div>
  <div id="modal-4" class="modal fixed inset-0 z-50 bg-black/40 flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-xl max-w-md w-full p-6">
      <h3 class="text-lg font-bold text-gray-900">Confirmer la suppression</h3>
      <p class="mt-2 text-sm text-gray-600">Êtes-vous sûr de vouloir supprimer "Clavier Mécanique" ? Cette action est irréversible.</p>
      <div class="mt-6 flex justify-end space-x-3">
        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition">Annuler</a>
        <a href="?action=supprimer&id=4" class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 transition">Supprimer</a>
      </div>
    </div>
  </div>
  <div id="modal-5" class="modal fixed inset-0 z-50 bg-black/40 flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-xl max-w-md w-full p-6">
      <h3 class="text-lg font-bold text-gray-900">Confirmer la suppression</h3>
      <p class="mt-2 text-sm text-gray-600">Êtes-vous sûr de vouloir supprimer "Souris Sans Fil" ? Cette action est irréversible.</p>
      <div class="mt-6 flex justify-end space-x-3">
        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition">Annuler</a>
        <a href="?action=supprimer&id=5" class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 transition">Supprimer</a>
      </div>
    </div>
  </div>
  <div id="modal-6" class="modal fixed inset-0 z-50 bg-black/40 flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-xl max-w-md w-full p-6">
      <h3 class="text-lg font-bold text-gray-900">Confirmer la suppression</h3>
      <p class="mt-2 text-sm text-gray-600">Êtes-vous sûr de vouloir supprimer "Casque Audio Pro" ? Cette action est irréversible.</p>
      <div class="mt-6 flex justify-end space-x-3">
        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition">Annuler</a>
        <a href="?action=supprimer&id=6" class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 transition">Supprimer</a>
      </div>
    </div>
  </div>

</body>
</html>
