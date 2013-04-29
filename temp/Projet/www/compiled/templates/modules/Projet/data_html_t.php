<?php 
 require_once('C:\Users\www\jelix\lib\jelix/plugins/tpl/html/function.ctrl_label.php');
 require_once('C:\Users\www\jelix\lib\jelix/plugins/tpl/html/function.ctrl_control.php');
 require_once('C:\Users\www\jelix\lib\jelix/plugins/tpl/html/function.formsubmit.php');
function template_meta_c6cf1426d11c311ab0c648ad85deec77($t){
if(isset($t->_vars['MODIFICATION'])) { $t->_vars['MODIFICATION']->getBuilder( 'htmllight')->outputMetaContent($t);}

}
function template_c6cf1426d11c311ab0c648ad85deec77($t){
?><h1 class="apptitle" id="titre1">Modification d'une bouteille<br/></h1>
<div class="block">
    <h2>Formulaire de modification des bouteilles</h2>
    <div class="blockcontent">
        <?php  $t->_privateVars['__form'] = $t->_vars['MODIFICATION'];
$t->_privateVars['__formbuilder'] = $t->_privateVars['__form']->getBuilder( 'htmllight');
$t->_privateVars['__formbuilder']->setAction('Projet~savebouteille@classic',array());
$t->_privateVars['__formbuilder']->outputHeader( array("errorDecorator"=>"MyErrorDecorator"));
$t->_privateVars['__displayed_ctrl'] = array();
?>
        <fieldset>
            <?php $ctrls_to_display=null;$ctrls_notto_display=null;
if (!isset($t->_privateVars['__displayed_ctrl'])) {
    $t->_privateVars['__displayed_ctrl'] = array();
}
$t->_privateVars['__ctrlref']='';

foreach($t->_privateVars['__form']->getRootControls() as $ctrlref=>$ctrl){
    if(!$t->_privateVars['__form']->isActivated($ctrlref)) continue;
    if($ctrl->type == 'reset' || $ctrl->type == 'hidden') continue;
if($ctrl->type == 'submit') continue;if(!isset($t->_privateVars['__displayed_ctrl'][$ctrlref])
       && (  ($ctrls_to_display===null && $ctrls_notto_display === null)
          || ($ctrls_to_display===null && !in_array($ctrlref, $ctrls_notto_display))
          || (is_array($ctrls_to_display) && in_array($ctrlref, $ctrls_to_display) ))) {
        $t->_privateVars['__ctrlref'] = $ctrlref;
        $t->_privateVars['__ctrl'] = $ctrl;
?>
            <p> <?php jtpl_function_html_ctrl_label( $t);?> : <?php jtpl_function_html_ctrl_control( $t);?> </p>
            <?php }} $t->_privateVars['__ctrlref']='';?>
        </fieldset>
            <div><?php jtpl_function_html_formsubmit( $t);?></div>
        <?php $t->_privateVars['__formbuilder']->outputFooter();
unset($t->_privateVars['__form']);
unset($t->_privateVars['__formbuilder']);
unset($t->_privateVars['__displayed_ctrl']);?>

    </div><?php 
}
?>