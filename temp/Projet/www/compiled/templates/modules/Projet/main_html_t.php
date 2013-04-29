<?php 
 require_once('C:\Users\www\jelix\lib\jelix/plugins/tpl/html/function.jurl.php');
function template_meta_54fc1c64559ff1bc75203840e5a3849c($t){

}
function template_54fc1c64559ff1bc75203840e5a3849c($t){
?><h1 class="apptitle" id="titre1">Présentation des vins de la propriété<br/></h1>

<div class="block">
    <h2>Vins produits à la propriété</h2>
    <div class="blockcontent">
        <ul>
            <?php foreach($t->_vars['ALLVIN'] as $t->_vars['COURANTVIN']):?>
                <li>Vin <?php echo $t->_vars['COURANTVIN']->couleur; ?>, Cépage: <?php echo $t->_vars['COURANTVIN']->libelle_cepage; ?>, Année: <?php echo $t->_vars['COURANTVIN']->date_product; ?></br> 
                    Caractéristiques: <?php echo $t->_vars['COURANTVIN']->type_vin; ?> 
                </li>
            <?php endforeach;?>

        </ul>
    </div>
</div>

<div class="block">
    <h2>Liste des bouteilles proposées et leur tarifs</h2>
    <div class="blockcontent">
        <ul>
            <?php foreach($t->_vars['ALLBOUTEILLE'] as $t->_vars['COURANTBOUTEILLE']):?>
                <li>
                    <?php echo $t->_vars['COURANTBOUTEILLE']->nom_vin; ?> <?php echo $t->_vars['COURANTBOUTEILLE']->contenance_cl; ?> cl, 
                    <?php echo $t->_vars['COURANTBOUTEILLE']->prix_unit_euro; ?> € la bouteille et 
                    <?php echo $t->_vars['COURANTBOUTEILLE']->prix_carton_euro; ?> € le carton de 6 bouteilles. Date de mise en bouteille: 
                    <?php echo $t->_vars['COURANTBOUTEILLE']->date_mise_en_bout; ?>.
                    <a href="<?php jtpl_function_html_jurl( $t,'Projet~updatebouteille@classic', array('idbouteille'=>$t->_vars['COURANTBOUTEILLE']->idbouteille));?>">Modifier</a>
                    <a style="cursor:pointer" onclick="confirmdelete('<?php jtpl_function_html_jurl( $t,'Projet~deletebouteille@classic', array('idbouteille'=>$t->_vars['COURANTBOUTEILLE']->idbouteille));?>')">Supprimer</a>
                </li>
            <?php endforeach;?>

            <br/><a id="add" href="<?php jtpl_function_html_jurl( $t,'Projet~addbouteille@classic');?>">Ajouter une bouteille</a>
        </ul>
    </div>
</div>       <?php 
}
?>