<?php  require_once ( JELIX_LIB_PATH .'dao/jDaoRecordBase.class.php');
 require_once ( JELIX_LIB_PATH .'dao/jDaoFactoryBase.class.php');

class cDaoRecord_Projet_Jx_bouteille_Jx_mysql extends jDaoRecordBase {
 public $idbouteille;
 public $ref_id_vin;
 public $contenance_cl;
 public $prix_unit_euro;
 public $prix_carton_euro;
 public $couleur_capsule;
 public $nb_bouteille;
 public $date_mise_en_bout;
 public $nom_vin;
   public function getSelector() { return "Projet~bouteille"; }
   public function getProperties() { return cDao_Projet_Jx_bouteille_Jx_mysql::$_properties; }
   public function getPrimaryKeyNames() { return cDao_Projet_Jx_bouteille_Jx_mysql::$_pkFields; }
}

class cDao_Projet_Jx_bouteille_Jx_mysql extends jDaoFactoryBase {
   protected $_tables = array (
  'bouteille' => 
  array (
    'name' => 'bouteille',
    'realname' => 'bouteille',
    'pk' => 
    array (
      0 => 'idbouteille',
    ),
    'fields' => 
    array (
      0 => 'idbouteille',
      1 => 'ref_id_vin',
      2 => 'contenance_cl',
      3 => 'prix_unit_euro',
      4 => 'prix_carton_euro',
      5 => 'couleur_capsule',
      6 => 'nb_bouteille',
      7 => 'date_mise_en_bout',
      8 => 'nom_vin',
    ),
  ),
);
   protected $_primaryTable = 'bouteille';
   protected $_selectClause='SELECT `bouteille`.`idbouteille`, `bouteille`.`ref_id_vin`, `bouteille`.`contenance_cl`, `bouteille`.`prix_unit_euro`, `bouteille`.`prix_carton_euro`, `bouteille`.`couleur_capsule`, `bouteille`.`nb_bouteille`, `bouteille`.`date_mise_en_bout`, `bouteille`.`nom_vin`';
   protected $_fromClause;
   protected $_whereClause='';
   protected $_DaoRecordClassName='cDaoRecord_Projet_Jx_bouteille_Jx_mysql';
   protected $_daoSelector = 'Projet~bouteille';
   public static $_properties = array (
  'idbouteille' => 
  array (
    'name' => 'idbouteille',
    'fieldName' => 'idbouteille',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => true,
    'isPK' => true,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'bouteille',
    'updatePattern' => '',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => true,
  ),
  'ref_id_vin' => 
  array (
    'name' => 'ref_id_vin',
    'fieldName' => 'ref_id_vin',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'bouteille',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'contenance_cl' => 
  array (
    'name' => 'contenance_cl',
    'fieldName' => 'contenance_cl',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'float',
    'unifiedType' => 'float',
    'table' => 'bouteille',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'prix_unit_euro' => 
  array (
    'name' => 'prix_unit_euro',
    'fieldName' => 'prix_unit_euro',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'float',
    'unifiedType' => 'float',
    'table' => 'bouteille',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'prix_carton_euro' => 
  array (
    'name' => 'prix_carton_euro',
    'fieldName' => 'prix_carton_euro',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'float',
    'unifiedType' => 'float',
    'table' => 'bouteille',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'couleur_capsule' => 
  array (
    'name' => 'couleur_capsule',
    'fieldName' => 'couleur_capsule',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'bouteille',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => 15,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'nb_bouteille' => 
  array (
    'name' => 'nb_bouteille',
    'fieldName' => 'nb_bouteille',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'bouteille',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'date_mise_en_bout' => 
  array (
    'name' => 'date_mise_en_bout',
    'fieldName' => 'date_mise_en_bout',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'date',
    'unifiedType' => 'date',
    'table' => 'bouteille',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'nom_vin' => 
  array (
    'name' => 'nom_vin',
    'fieldName' => 'nom_vin',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'bouteille',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => 40,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
);
   public static $_pkFields = array('idbouteille');
 
public function __construct($conn){
   parent::__construct($conn);
   $this->_fromClause = ' FROM `'.$this->_conn->prefixTable('bouteille').'` AS `bouteille`';
}
   public function getProperties() { return self::$_properties; }
   public function getPrimaryKeyNames() { return self::$_pkFields;}
 
 protected function _getPkWhereClauseForSelect($pk){
   extract($pk);
 return ' WHERE  `bouteille`.`idbouteille`'.' = '.intval($idbouteille).'';
}
 
protected function _getPkWhereClauseForNonSelect($pk){
   extract($pk);
   return ' where  `idbouteille`'.' = '.intval($idbouteille).'';
}
public function insert ($record){
 if($record->idbouteille > 0 ){
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('bouteille').'` (
`idbouteille`,`ref_id_vin`,`contenance_cl`,`prix_unit_euro`,`prix_carton_euro`,`couleur_capsule`,`nb_bouteille`,`date_mise_en_bout`,`nom_vin`
) VALUES (
'.($record->idbouteille === null ? 'NULL' : intval($record->idbouteille)).', '.($record->ref_id_vin === null ? 'NULL' : intval($record->ref_id_vin)).', '.($record->contenance_cl === null ? 'NULL' : jDb::floatToStr($record->contenance_cl)).', '.($record->prix_unit_euro === null ? 'NULL' : jDb::floatToStr($record->prix_unit_euro)).', '.($record->prix_carton_euro === null ? 'NULL' : jDb::floatToStr($record->prix_carton_euro)).', '.($record->couleur_capsule === null ? 'NULL' : $this->_conn->quote2($record->couleur_capsule,false)).', '.($record->nb_bouteille === null ? 'NULL' : intval($record->nb_bouteille)).', '.($record->date_mise_en_bout === null ? 'NULL' : $this->_conn->quote2($record->date_mise_en_bout,false)).', '.($record->nom_vin === null ? 'NULL' : $this->_conn->quote2($record->nom_vin,false)).'
)';
}else{
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('bouteille').'` (
`ref_id_vin`,`contenance_cl`,`prix_unit_euro`,`prix_carton_euro`,`couleur_capsule`,`nb_bouteille`,`date_mise_en_bout`,`nom_vin`
) VALUES (
'.($record->ref_id_vin === null ? 'NULL' : intval($record->ref_id_vin)).', '.($record->contenance_cl === null ? 'NULL' : jDb::floatToStr($record->contenance_cl)).', '.($record->prix_unit_euro === null ? 'NULL' : jDb::floatToStr($record->prix_unit_euro)).', '.($record->prix_carton_euro === null ? 'NULL' : jDb::floatToStr($record->prix_carton_euro)).', '.($record->couleur_capsule === null ? 'NULL' : $this->_conn->quote2($record->couleur_capsule,false)).', '.($record->nb_bouteille === null ? 'NULL' : intval($record->nb_bouteille)).', '.($record->date_mise_en_bout === null ? 'NULL' : $this->_conn->quote2($record->date_mise_en_bout,false)).', '.($record->nom_vin === null ? 'NULL' : $this->_conn->quote2($record->nom_vin,false)).'
)';
}
   $result = $this->_conn->exec ($query);
   if(!$result)
       return false;
   if($record->idbouteille < 1 ) 
       $record->idbouteille= $this->_conn->lastInsertId();
    return $result;
}
public function update ($record){
   $query = 'UPDATE `'.$this->_conn->prefixTable('bouteille').'` SET 
 `ref_id_vin`= '.($record->ref_id_vin === null ? 'NULL' : intval($record->ref_id_vin)).', `contenance_cl`= '.($record->contenance_cl === null ? 'NULL' : jDb::floatToStr($record->contenance_cl)).', `prix_unit_euro`= '.($record->prix_unit_euro === null ? 'NULL' : jDb::floatToStr($record->prix_unit_euro)).', `prix_carton_euro`= '.($record->prix_carton_euro === null ? 'NULL' : jDb::floatToStr($record->prix_carton_euro)).', `couleur_capsule`= '.($record->couleur_capsule === null ? 'NULL' : $this->_conn->quote2($record->couleur_capsule,false)).', `nb_bouteille`= '.($record->nb_bouteille === null ? 'NULL' : intval($record->nb_bouteille)).', `date_mise_en_bout`= '.($record->date_mise_en_bout === null ? 'NULL' : $this->_conn->quote2($record->date_mise_en_bout,false)).', `nom_vin`= '.($record->nom_vin === null ? 'NULL' : $this->_conn->quote2($record->nom_vin,false)).'
 where  `idbouteille`'.' = '.intval($record->idbouteille).'
';
   $result = $this->_conn->exec ($query);
   return $result;
 }


}
?>