<?php
require_once ROOT."/model/produitModel.php";
$liste=function(){
$produits = getAllproduits();
$total_produits=countTable("produit");
    loadView("produits/liste",["produits"=>$produits,"total_produits"=>$total_produits]);


};

$ajout=function(){
 loadView("produits/ajout",[],"side");

};

$detail=function(){
echo "je detail un produit";
};

$modifier=function(){
echo "je modifie un produit";
};

$supprimer=function(){
echo "je supprime un produit";
};


$actions=[
    "liste"=>$liste,
    "ajout"=>$ajout,
    "detail"=>$detail,
    "modifier"=>$modifier,
    "supprimer"=>$supprimer
    
];
 $action=$_REQUEST["action"]??"liste";
 
 if (array_key_exists($action, $actions)) {
         $actions[$action]();
     }
     else{
         echo "page introuvable c produit";
         exit();
}
         
