<?php 
class cForm_Projet_Jx_addbout extends jFormsBase {
 public function __construct($sel, &$container, $reset = false){
          parent::__construct($sel, $container, $reset);
$ctrl= new jFormsControlhidden('idbouteille');
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('nom_vin');
$ctrl->label='Nom de la bouteille de vin';
$ctrl->help='Indiquez le nom des bouteilles de vin (Nom unique)';
$ctrl->alertRequired='Nom de vin obligatoire';
$this->addControl($ctrl);
$ctrl= new jFormsControlmenulist('ref_id_vin');
$ctrl->label='Entrez le cépage du vin';
$ctrl->datasource= new jFormsStaticDatasource();
$ctrl->datasource->data = array('1'=>'Cabernet','2'=>'Cabernet Franc','3'=>'Chenin','4'=>'Sauvignon',);
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('couleur_capsule');
$ctrl->label='Couleur de la capsule';
$ctrl->help='Indiquez la couleur des capsules des bouteilles de vin';
$ctrl->alertRequired='Couleur obligatoire';
$this->addControl($ctrl);
$ctrl= new jFormsControlradiobuttons('contenance_cl');
$ctrl->label='Contenance des bouteilles';
$ctrl->help='La contenance des bouteilles est de 37.5 cl pour les petites, 75 cl pour les classiques, 1.5L pour un magnum et 3L pour un Jéroboam';
$ctrl->datasource= new jFormsStaticDatasource();
$ctrl->datasource->data = array('37.5'=>'37.5 cl','75'=>'75 cl','150'=>'1.5 L','300'=>'3 L',);
$ctrl->defaultValue=array (
  0 => '75',
);
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('nb_bouteille');
$ctrl->label='Nombre de bouteilles en stock';
$ctrl->help='Entrez le nombre de bouteille stocké dans votre cave';
$ctrl->alertRequired='Nombre de bouteilles obligatoire';
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