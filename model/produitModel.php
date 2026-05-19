<?php
require_once(ROOT."bd/database.php");
function getAllProduits(){
    $sql="SELECT * FROM produit";
   return executeSelect($sql);
}