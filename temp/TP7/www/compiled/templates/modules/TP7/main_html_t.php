<?php 
 require_once('C:\Users\h10099\Dropbox\ITI\Dev Web\www\jelix\lib\jelix/plugins/tpl/html/function.formurl.php');
function template_meta_6fb1212e8640be2a701ced50a8415f6b($t){

}
function template_6fb1212e8640be2a701ced50a8415f6b($t){
?><h1 class="apptitle">
    <?php echo $t->_vars['TITLE']; ?>

</h1>
<section>
    <h2>
    <?php echo $t->_vars['CONTENT']; ?>

    </h2>
    <h2>
    Merci de compléter le formulaire suivant...</h2>
    <form action="<?php jtpl_function_html_formurl( $t,'TP7~recupererFormulaire@classic');?>" method="POST">
        <fieldset>
            Genre : <br/><input type="radio" name="gender" value="male" />Homme<br>
                  <input type="radio" name="gender" value="female" />Femme<br>
                  <input type="radio" name="other" value="female" />Autre<br>
            Nom : <input type="text" id="nom" name="nom"><br/>
            Prénom : <input type="text" id="prenom" name="prenom"><br/>
            <input type="submit" Value="Valider"><br/>
        </fieldset>    
    </form>
    <article>
        Voici le contenu de la page <a href="<?php echo $t->_vars['monURL']; ?>">Cliquez-ici</a>
    </article>
</section><?php 
}
?>