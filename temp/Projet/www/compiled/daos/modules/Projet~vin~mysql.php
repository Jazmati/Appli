<?php  require_once ( JELIX_LIB_PATH .'dao/jDaoRecordBase.class.php');
 require_once ( JELIX_LIB_PATH .'dao/jDaoFactoryBase.class.php');

class cDaoRecord_Projet_Jx_vin_Jx_mysql extends jDaoRecordBase {
 public $idvin;
 public $ref_id_producteur;
 public $libelle_cepage;
 public $vin_bio;
 public $nb_hectare_vigne;
 public $type_vin;
 public $couleur;
 public $quantite_hectolitre;
 public $date_product;
   public function getSelector() { return "Projet~vin"; }
   public function getProperties() { return cDao_Projet_Jx_vin_Jx_mysql::$_properties; }
   public function getPrimaryKeyNames() { return cDao_Projet_Jx_vin_Jx_mysql::$_pkFields; }
}

class cDao_Projet_Jx_vin_Jx_mysql extends jDaoFactoryBase {
   protected $_tables = array (
  'vin' => 
  array (
    'name' => 'vin',
    'realname' => 'vin',
    'pk' => 
    array (
      0 => 'idvin',
    ),
    'fields' => 
    array (
      0 => 'idvin',
      1 => 'ref_id_producteur',
      2 => 'libelle_cepage',
      3 => 'vin_bio',
      4 => 'nb_hectare_vigne',
      5 => 'type_vin',
      6 => 'couleur',
      7 => 'quantite_hectolitre',
      8 => 'date_product',
    ),
  ),
);
   protected $_primaryTable = 'vin';
   protected $_selectClause='SELECT `vin`.`idvin`, `vin`.`ref_id_producteur`, `vin`.`libelle_cepage`, `vin`.`vin_bio`, `vin`.`nb_hectare_vigne`, `vin`.`type_vin`, `vin`.`couleur`, `vin`.`quantite_hectolitre`, `vin`.`date_product`';
   protected $_fromClause;
   protected $_whereClause='';
   protected $_DaoRecordClassName='cDaoRecord_Projet_Jx_vin_Jx_mysql';
   protected $_daoSelector = 'Projet~vin';
   public static $_properties = array (
  'idvin' => 
  array (
    'name' => 'idvin',
    'fieldName' => 'idvin',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => true,
    'isPK' => true,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'vin',
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
  'ref_id_producteur' => 
  array (
    'name' => 'ref_id_producteur',
    'fieldName' => 'ref_id_producteur',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'vin',
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
  'libelle_cepage' => 
  array (
    'name' => 'libelle_cepage',
    'fieldName' => 'libelle_cepage',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'vin',
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
  'vin_bio' => 
  array (
    'name' => 'vin_bio',
    'fieldName' => 'vin_bio',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'tinyint',
    'unifiedType' => 'integer',
    'table' => 'vin',
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
  'nb_hectare_vigne' => 
  array (
    'name' => 'nb_hectare_vigne',
    'fieldName' => 'nb_hectare_vigne',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'float',
    'unifiedType' => 'float',
    'table' => 'vin',
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
  'type_vin' => 
  array (
    'name' => 'type_vin',
    'fieldName' => 'type_vin',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'vin',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => 60,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'couleur' => 
  array (
    'name' => 'couleur',
    'fieldName' => 'couleur',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'vin',
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
  'quantite_hectolitre' => 
  array (
    'name' => 'quantite_hectolitre',
    'fieldName' => 'quantite_hectolitre',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'vin',
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
  'date_product' => 
  array (
    'name' => 'date_product',
    'fieldName' => 'date_product',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'year',
    'unifiedType' => 'year',
    'table' => 'vin',
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
);
   public static $_pkFields = array('idvin');
 
public function __construct($conn){
   parent::__construct($conn);
   $this->_fromClause = ' FROM `'.$this->_conn->prefixTable('vin').'` AS `vin`';
}
   public function getProperties() { return self::$_properties; }
   public function getPrimaryKeyNames() { return self::$_pkFields;}
 
 protected function _getPkWhereClauseForSelect($pk){
   extract($pk);
 return ' WHERE  `vin`.`idvin`'.' = '.intval($idvin).'';
}
 
protected function _getPkWhereClauseForNonSelect($pk){
   extract($pk);
   return ' where  `idvin`'.' = '.intval($idvin).'';
}
public function insert ($record){
 if($record->idvin > 0 ){
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('vin').'` (
`idvin`,`ref_id_producteur`,`libelle_cepage`,`vin_bio`,`nb_hectare_vigne`,`type_vin`,`couleur`,`quantite_hectolitre`,`date_product`
) VALUES (
'.($record->idvin === null ? 'NULL' : intval($record->idvin)).', '.($record->ref_id_producteur === null ? 'NULL' : intval($record->ref_id_producteur)).', '.($record->libelle_cepage === null ? 'NULL' : $this->_conn->quote2($record->libelle_cepage,false)).', '.($record->vin_bio === null ? 'NULL' : intval($record->vin_bio)).', '.($record->nb_hectare_vigne === null ? 'NULL' : jDb::floatToStr($record->nb_hectare_vigne)).', '.($record->type_vin === null ? 'NULL' : $this->_conn->quote2($record->type_vin,false)).', '.($record->couleur === null ? 'NULL' : $this->_conn->quote2($record->couleur,false)).', '.($record->quantite_hectolitre === null ? 'NULL' : intval($record->quantite_hectolitre)).', '.($record->date_product === null ? 'NULL' : $this->_conn->quote2($record->date_product,false)).'
)';
}else{
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('vin').'` (
`ref_id_producteur`,`libelle_cepage`,`vin_bio`,`nb_hectare_vigne`,`type_vin`,`couleur`,`quantite_hectolitre`,`date_product`
) VALUES (
'.($record->ref_id_producteur === null ? 'NULL' : intval($record->ref_id_producteur)).', '.($record->libelle_cepage === null ? 'NULL' : $this->_conn->quote2($record->libelle_cepage,false)).', '.($record->vin_bio === null ? 'NULL' : intval($record->vin_bio)).', '.($record->nb_hectare_vigne === null ? 'NULL' : jDb::floatToStr($record->nb_hectare_vigne)).', '.($record->type_vin === null ? 'NULL' : $this->_conn->quote2($record->type_vin,false)).', '.($record->couleur === null ? 'NULL' : $this->_conn->quote2($record->couleur,false)).', '.($record->quantite_hectolitre === null ? 'NULL' : intval($record->quantite_hectolitre)).', '.($record->date_product === null ? 'NULL' : $this->_conn->quote2($record->date_product,false)).'
)';
}
   $result = $this->_conn->exec ($query);
   if(!$result)
       return false;
   if($record->idvin < 1 ) 
       $record->idvin= $this->_conn->lastInsertId();
    return $result;
}
public function update ($record){
   $query = 'UPDATE `'.$this->_conn->prefixTable('vin').'` SET 
 `ref_id_producteur`= '.($record->ref_id_producteur === null ? 'NULL' : intval($record->ref_id_producteur)).', `libelle_cepage`= '.($record->libelle_cepage === null ? 'NULL' : $this->_conn->quote2($record->libelle_cepage,false)).', `vin_bio`= '.($record->vin_bio === null ? 'NULL' : intval($record->vin_bio)).', `nb_hectare_vigne`= '.($record->nb_hectare_vigne === null ? 'NULL' : jDb::floatToStr($record->nb_hectare_vigne)).', `type_vin`= '.($record->type_vin === null ? 'NULL' : $this->_conn->quote2($record->type_vin,false)).', `couleur`= '.($record->couleur === null ? 'NULL' : $this->_conn->quote2($record->couleur,false)).', `quantite_hectolitre`= '.($record->quantite_hectolitre === null ? 'NULL' : intval($record->quantite_hectolitre)).', `date_product`= '.($record->date_product === null ? 'NULL' : $this->_conn->quote2($record->date_product,false)).'
 where  `idvin`'.' = '.intval($record->idvin).'
';
   $result = $this->_conn->exec ($query);
   return $result;
 }


}
?>