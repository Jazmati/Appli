<?php 
 require_once('C:\Users\h10099\Dropbox\ITI\Dev Web\www\jelix\lib\jelix/plugins/tpl/html/function.jurl.php');
function template_meta_a39356f68e9a9dcd8878aea67001c038($t){
if(isset($t->_vars['FORMULAIRESTU'])) { $t->_vars['FORMULAIRESTU']->getBuilder('html')->outputMetaContent($t);}
if(isset($t->_vars['FORMULAIRETEA'])) { $t->_vars['FORMULAIRETEA']->getBuilder('html')->outputMetaContent($t);}

}
function template_a39356f68e9a9dcd8878aea67001c038($t){
?><h1 class="apptitle">Bienvenue sur la page de présentation des étudiants</h1>
<div class="block">
	<h2>Voici la liste des étudiants</h2>
	<div class="blockcontent">
        <ul><?php foreach($t->_vars['ALLSTUDENT'] as $t->_vars['COURANTSTUDENT']):?>
        	<li><a href="<?php jtpl_function_html_jurl( $t,'TP8~index@classic', array('idstudent'=>$t->_vars['COURANTSTUDENT']->idstudent));?>">
                        <?php echo $t->_vars['COURANTSTUDENT']->toString; ?>
                    </a></li>
        	<?php endforeach;?>
        </ul>
	</div>
        
</div>
        
<div class="block">
	<h2>Voici la liste des matières</h2>
	<div class="blockcontent">
        <ul><?php foreach($t->_vars['ALLTEACHING'] as $t->_vars['COURANTTEACHING']):?>
        	<li><a href="<?php jtpl_function_html_jurl( $t,'TP8~index@classic', array('idteachingmodule'=>$t->_vars['COURANTTEACHING']->idteachingmodule));?>">
                        <?php echo $t->_vars['COURANTTEACHING']->title; ?>
                    </a></li>
        	<?php endforeach;?>
        </ul>
	</div>
        
</div>
        
<div class="block">
	<h2>Voici la liste des notes</h2>
	<div class="blockcontent">
        <ul><?php foreach($t->_vars['ALLSCORE'] as $t->_vars['COURANTSCORE']):?>
                    <li><a href=""><?php echo $t->_vars['COURANTSCORE']->studentName,' : ',$t->_vars['COURANTSCORE']->teachingTitle,'->',$t->_vars['COURANTSCORE']->scorevalue; ?></a></li>
        	<?php endforeach;?>

        </ul>
	</div>
        
</div>
        <div class="block">
        <h2>Formulaire de modif des étudiants</h2>
        <div class="blockcontent">
        <?php  $formfull = $t->_vars['FORMULAIRESTU'];
    $formfullBuilder = $formfull->getBuilder('html');
    $formfullBuilder->setAction( 'TP8~saveStudent@classic',array());
    $formfullBuilder->outputHeader(array());
    $formfullBuilder->outputAllControls();
    $formfullBuilder->outputFooter();?>
        </div>
        </div>
        
        <div class="block">
        <h2>Formulaire de modif des matières</h2>
        <div class="blockcontent">
        <?php  $formfull = $t->_vars['FORMULAIRETEA'];
    $formfullBuilder = $formfull->getBuilder('html');
    $formfullBuilder->setAction( 'TP8~saveTeaching@classic',array());
    $formfullBuilder->outputHeader(array());
    $formfullBuilder->outputAllControls();
    $formfullBuilder->outputFooter();?>
        </div>
        </div><?php 
}
?>