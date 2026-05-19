

  <!-- En-tête -->
  <header class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Nouvelle commande</h2>
    <p class="mt-1 text-sm text-gray-500">Créez une commande en y ajoutant des produits.</p>
  </header>

  <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mt-6 mb-12 space-y-6">

    <!-- ============================================================ -->
    <!-- ÉTAPE 1 : SÉLECTION DU CLIENT -->
    <!-- ============================================================ -->
    <!-- TODO: Remplacer l'input + bouton par un <select> PHP ou un champ caché -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sm:p-8">
      <h3 class="text-lg font-semibold text-gray-900 flex items-center gap-2">
        <span class="w-7 h-7 rounded-full bg-indigo-600 text-white text-sm flex items-center justify-center shrink-0">1</span>
        Sélection du client
      </h3>

      <div class="mt-4">
        <label for="client_id" class="block text-sm font-medium text-gray-700 mb-1">Client <span class="text-red-500">*</span></label>
        <!-- TODO: Remplacer les <option> statiques par une boucle PHP foreach($clients as $c) -->
        <select name="client_id" id="client_id" required
                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition bg-white">
          <option value="">— Sélectionner un client —</option>
          <option value="1">#1 — Dupont</option>
          <option value="2">#2 — Martin</option>
          <option value="3">#3 — Bernard</option>
          <option value="4">#4 — Petit</option>
          <option value="5">#5 — Durand</option>
        </select>
      </div>

      <!-- Récapitulatif statique (exemple) -->
      <div class="mt-4 bg-indigo-50 border border-indigo-200 rounded-lg p-4">
        <p class="text-sm font-semibold text-indigo-900">Client sélectionné (exemple)</p>
        <p class="text-sm text-indigo-800"><span class="font-medium">Nom :</span> Dupont</p>
        <p class="text-sm text-indigo-800"><span class="font-medium">Email :</span> dupont@email.com</p>
        <p class="text-sm text-indigo-800"><span class="font-medium">Téléphone :</span> 06 12 34 56 78</p>
        <!-- TODO: Remplacer par une condition PHP : if($client) afficher le bloc -->
      </div>
    </div>

    <!-- ============================================================ -->
    <!-- ÉTAPE 2 : AJOUT DE PRODUITS (STATIQUE — EXEMPLE) -->
    <!-- ============================================================ -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sm:p-8">
      <h3 class="text-lg font-semibold text-gray-900 flex items-center gap-2">
        <span class="w-7 h-7 rounded-full bg-indigo-600 text-white text-sm flex items-center justify-center shrink-0">2</span>
        Ajout de produits
      </h3>

      <div class="mt-4 grid grid-cols-1 sm:grid-cols-3 gap-3">
        <!-- TODO: Remplacer par un <select> ou <datalist> PHP -->
        <select id="produit_ref"
                class="px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition bg-white">
          <option value="">— Référence produit —</option>
          <option value="REF001">REF001 — Chaise Ergonomique</option>
          <option value="REF002">REF002 — Table Assise-Debout</option>
          <option value="REF003">REF003 — Lampe LED Bureau</option>
          <option value="REF004">REF004 — Clavier Mécanique</option>
          <option value="REF005">REF005 — Souris Sans Fil</option>
          <option value="REF006">REF006 — Casque Audio Pro</option>
        </select>

        <input type="number" id="produit_qte" min="1" value="1"
               class="px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition"
               placeholder="Quantité">

        <!-- TODO: Remplacer onclick par une soumission PHP -->
        <button onclick="alert('TODO: Ajouter au tableau via PHP/JS')"
                class="px-5 py-2.5 bg-green-600 text-white text-sm font-medium rounded-lg hover:bg-green-700 transition shadow-sm">
          + Ajouter
        </button>
      </div>

      <!-- Récapitulatif produit statique (exemple) -->
      <div class="mt-4 bg-green-50 border border-green-200 rounded-lg p-4">
        <p class="text-sm font-semibold text-green-900">Dernier produit ajouté (exemple)</p>
        <p class="text-sm text-green-800"><span class="font-medium">Produit :</span> Chaise Ergonomique (REF001)</p>
        <p class="text-sm text-green-800"><span class="font-medium">Prix unitaire :</span> 149,99 €</p>
        <p class="text-sm text-green-800"><span class="font-medium">Stock disponible :</span> 25 unités</p>
      </div>
    </div>

    <!-- ============================================================ -->
    <!-- ÉTAPE 3 : RÉCAPITULATIF — EXEMPLE STATIQUE -->
    <!-- ============================================================ -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sm:p-8">
      <h3 class="text-lg font-semibold text-gray-900 flex items-center gap-2">
        <span class="w-7 h-7 rounded-full bg-indigo-600 text-white text-sm flex items-center justify-center shrink-0">3</span>
        Récapitulatif de la commande
      </h3>

      <!-- TODO: Remplacer par une boucle PHP foreach($lignes as $l) -->
      <div class="mt-4 overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Réf.</th>
              <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nom</th>
              <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Qté</th>
              <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase">Prix U.</th>
              <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase">Sous-total</th>
              <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Action</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr class="hover:bg-gray-50">
              <td class="px-4 py-3 whitespace-nowrap text-sm font-mono text-gray-500">REF001</td>
              <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">Chaise Ergonomique</td>
              <td class="px-4 py-3 whitespace-nowrap text-sm text-center text-gray-700">2</td>
              <td class="px-4 py-3 whitespace-nowrap text-sm text-right text-gray-700">149,99 €</td>
              <td class="px-4 py-3 whitespace-nowrap text-sm text-right font-medium text-gray-900">299,98 €</td>
              <td class="px-4 py-3 whitespace-nowrap text-center">
                <!-- TODO: Remplacer par un lien PHP : index.php?action=supprimer_ligne&index=0 -->
                <a href="#" class="text-red-500 hover:text-red-700 text-lg font-bold">✕</a>
              </td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-4 py-3 whitespace-nowrap text-sm font-mono text-gray-500">REF003</td>
              <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">Lampe LED Bureau</td>
              <td class="px-4 py-3 whitespace-nowrap text-sm text-center text-gray-700">1</td>
              <td class="px-4 py-3 whitespace-nowrap text-sm text-right text-gray-700">59,99 €</td>
              <td class="px-4 py-3 whitespace-nowrap text-sm text-right font-medium text-gray-900">59,99 €</td>
              <td class="px-4 py-3 whitespace-nowrap text-center">
                <a href="#" class="text-red-500 hover:text-red-700 text-lg font-bold">✕</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Total général (statique) -->
      <div class="mt-4 flex justify-end">
        <div class="bg-gray-50 rounded-lg px-6 py-3 border border-gray-200">
          <span class="text-sm font-medium text-gray-500">Total général :</span>
          <!-- TODO: Remplacer par <?= number_format($total, 2) ?> € -->
          <span class="ml-2 text-xl font-bold text-indigo-600">359,97 €</span>
        </div>
      </div>

      <!-- Bouton valider -->
      <div class="mt-6 flex flex-col sm:flex-row sm:justify-end space-y-3 sm:space-y-0 sm:space-x-3">
        <a href="liste.html" class="px-6 py-2.5 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition text-center">Annuler</a>
        <!-- TODO: type="submit" action="controleurs/commandeController.php?action=ajouter" -->
        <button type="submit"
                class="px-6 py-2.5 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition shadow-sm">
          ✅ Valider la commande
        </button>
      </div>
    </div>

  </section>


