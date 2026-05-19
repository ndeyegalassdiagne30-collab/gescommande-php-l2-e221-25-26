<?php
require_once ROOT."/model/commandeModel.php";
$liste=function(){
$commandes = getAllcommandes();
require_once(ROOT."view/commandes/liste.php");

};

$ajout=function(){
echo "je ajoute un commande";
};

$detail=function(){
echo "je detail un commande";
};

$modifier=function(){
echo "je modifie un commande";
};

$supprimer=function(){
echo "je supprime un commande";
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
         echo "page introuvable c commande";
         exit();
}
         
