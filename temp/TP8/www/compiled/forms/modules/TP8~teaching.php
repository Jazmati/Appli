<?php 
class cForm_TP8_Jx_teaching extends jFormsBase {
 public function __construct($sel, &$container, $reset = false){
          parent::__construct($sel, $container, $reset);
$ctrl= new jFormsControlhidden('idteachingmodule');
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('name');
$ctrl->label='Votre nom';
$ctrl->alertRequired='Le nom est obligatoire';
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('firstname');
$ctrl->label='Votre prénom';
$this->addControl($ctrl);
$ctrl= new jFormsControldate('birthday');
$ctrl->label=' Votre date de naissance';
$ctrl->help='Indiquez votre date de naissance, en aaaa-mm-jj';
$ctrl->alertInvalid=' Date obligatoire ';
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