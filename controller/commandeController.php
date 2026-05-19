<?php
require_once ROOT."/model/commandeModel.php";
$liste=function(){
$commandes = getAllcommandes();
$total_commandes=countTable("commande");
loadView("commandes/liste",["commandes"=>$commandes,"total_commandes"=>$total_commandes]);

};

$ajout=function(){
loadView("commandes/ajout",[], "side");
};

$detail=function(){
loadView("commandes/detail");
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
         
