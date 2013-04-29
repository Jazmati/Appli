<?php 
class cForm_TP8_Jx_teachingmodule extends jFormsBase {
 public function __construct($sel, &$container, $reset = false){
          parent::__construct($sel, $container, $reset);
$ctrl= new jFormsControlhidden('idteachingmodule');
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('title');
$ctrl->label='Nom de la matière';
$ctrl->alertRequired='Le nom est obligatoire';
$this->addControl($ctrl);
$ctrl= new jFormsControlcaptcha('antispam');
$ctrl->label='Vérif anti-spam';
$this->addControl($ctrl);
$ctrl= new jFormsControlsubmit('submit');
$ctrl->label='Enregistrer';
$ctrl->datasource= new jFormsStaticDatasource();
$this->addControl($ctrl);
  }
} ?>