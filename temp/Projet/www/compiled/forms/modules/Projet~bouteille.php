<?php 
class cForm_Projet_Jx_bouteille extends jFormsBase {
 public function __construct($sel, &$container, $reset = false){
          parent::__construct($sel, $container, $reset);
$ctrl= new jFormsControlhidden('idbouteille');
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('nom_vin');
$ctrl->label='Nom du vin';
$ctrl->help='Indiquez le nom des bouteilles de vin';
$ctrl->alertRequired='Nom de vin obligatoire';
$this->addControl($ctrl);
$ctrl= new jFormsControlradiobuttons('contenance_cl');
$ctrl->label='Contenance des bouteilles';
$ctrl->help='La contenance des bouteilles est de 37.5 cl pour les petites, 75 cl pour les classiques, 1.5L pour un magnum et 3L pour un Jéroboam';
$ctrl->datasource= new jFormsStaticDatasource();
$ctrl->datasource->data = array('37.5'=>'37.5 cl','75'=>'75 cl','150'=>'1.5 L','300'=>'3 L',);
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('prix_unit_euro');
$ctrl->label='Prix d\'une bouteille en euros';
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('prix_carton_euro');
$ctrl->label='Prix d\'un carton en euros';
$this->addControl($ctrl);
$ctrl= new jFormsControldate('date_mise_en_bout');
$ctrl->label=' Date de la mise en bouteille';
$ctrl->help='Indiquez la date de mise en bouteille, en mm-jj-aaaa';
$ctrl->alertInvalid=' Date obligatoire ';
$this->addControl($ctrl);
$ctrl= new jFormsControlcaptcha('antispam');
$ctrl->label='Vérification anti-spam';
$this->addControl($ctrl);
$ctrl= new jFormsControlsubmit('submit');
$ctrl->label='Enregistrer';
$ctrl->datasource= new jFormsStaticDatasource();
$this->addControl($ctrl);
  }
} ?>