<?php  require_once ( JELIX_LIB_PATH .'dao/jDaoRecordBase.class.php');
 require_once ( JELIX_LIB_PATH .'dao/jDaoFactoryBase.class.php');

class cDaoRecord_GiteoWebService_Jx_autologin_Jx_mysql extends jDaoRecordBase {
 public $id_autologin;
 public $alg_code;
 public $alg_nbUses=0;
 public $alg_cre;
 public $alg_lastUse;
 public $id_owner;
 public $id_tenant;
   public function getSelector() { return "GiteoWebService~autologin"; }
   public function getProperties() { return cDao_GiteoWebService_Jx_autologin_Jx_mysql::$_properties; }
   public function getPrimaryKeyNames() { return cDao_GiteoWebService_Jx_autologin_Jx_mysql::$_pkFields; }
}

class cDao_GiteoWebService_Jx_autologin_Jx_mysql extends jDaoFactoryBase {
   protected $_tables = array (
  'autologin' => 
  array (
    'name' => 'autologin',
    'realname' => 'autologin',
    'pk' => 
    array (
      0 => 'id_autologin',
    ),
    'fields' => 
    array (
      0 => 'id_autologin',
      1 => 'alg_code',
      2 => 'alg_nbUses',
      3 => 'alg_cre',
      4 => 'alg_lastUse',
      5 => 'id_owner',
      6 => 'id_tenant',
    ),
  ),
);
   protected $_primaryTable = 'autologin';
   protected $_selectClause='SELECT `autologin`.`id_autologin`, `autologin`.`alg_code`, `autologin`.`alg_nbUses`, `autologin`.`alg_cre`, `autologin`.`alg_lastUse`, `autologin`.`id_owner`, `autologin`.`id_tenant`';
   protected $_fromClause;
   protected $_whereClause='';
   protected $_DaoRecordClassName='cDaoRecord_GiteoWebService_Jx_autologin_Jx_mysql';
   protected $_daoSelector = 'GiteoWebService~autologin';
   public static $_properties = array (
  'id_autologin' => 
  array (
    'name' => 'id_autologin',
    'fieldName' => 'id_autologin',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => true,
    'isPK' => true,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'autologin',
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
  'alg_code' => 
  array (
    'name' => 'alg_code',
    'fieldName' => 'alg_code',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'char',
    'unifiedType' => 'char',
    'table' => 'autologin',
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
  'alg_nbUses' => 
  array (
    'name' => 'alg_nbUses',
    'fieldName' => 'alg_nbUses',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'tinyint',
    'unifiedType' => 'integer',
    'table' => 'autologin',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => 0,
    'autoIncrement' => false,
  ),
  'alg_cre' => 
  array (
    'name' => 'alg_cre',
    'fieldName' => 'alg_cre',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'datetime',
    'unifiedType' => 'datetime',
    'table' => 'autologin',
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
  'alg_lastUse' => 
  array (
    'name' => 'alg_lastUse',
    'fieldName' => 'alg_lastUse',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'datetime',
    'unifiedType' => 'datetime',
    'table' => 'autologin',
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
  'id_owner' => 
  array (
    'name' => 'id_owner',
    'fieldName' => 'id_owner',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'autologin',
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
  'id_tenant' => 
  array (
    'name' => 'id_tenant',
    'fieldName' => 'id_tenant',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'autologin',
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
   public static $_pkFields = array('id_autologin');
 
public function __construct($conn){
   parent::__construct($conn);
   $this->_fromClause = ' FROM `'.$this->_conn->prefixTable('autologin').'` AS `autologin`';
}
   public function getProperties() { return self::$_properties; }
   public function getPrimaryKeyNames() { return self::$_pkFields;}
 
 protected function _getPkWhereClauseForSelect($pk){
   extract($pk);
 return ' WHERE  `autologin`.`id_autologin`'.' = '.intval($id_autologin).'';
}
 
protected function _getPkWhereClauseForNonSelect($pk){
   extract($pk);
   return ' where  `id_autologin`'.' = '.intval($id_autologin).'';
}
public function insert ($record){
 if($record->id_autologin > 0 ){
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('autologin').'` (
`id_autologin`,`alg_code`,`alg_nbUses`,`alg_cre`,`alg_lastUse`,`id_owner`,`id_tenant`
) VALUES (
'.($record->id_autologin === null ? 'NULL' : intval($record->id_autologin)).', '.($record->alg_code === null ? 'NULL' : $this->_conn->quote2($record->alg_code,false)).', '.($record->alg_nbUses === null ? 'NULL' : intval($record->alg_nbUses)).', '.($record->alg_cre === null ? 'NULL' : $this->_conn->quote2($record->alg_cre,false)).', '.($record->alg_lastUse === null ? 'NULL' : $this->_conn->quote2($record->alg_lastUse,false)).', '.($record->id_owner === null ? 'NULL' : intval($record->id_owner)).', '.($record->id_tenant === null ? 'NULL' : intval($record->id_tenant)).'
)';
}else{
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('autologin').'` (
`alg_code`,`alg_nbUses`,`alg_cre`,`alg_lastUse`,`id_owner`,`id_tenant`
) VALUES (
'.($record->alg_code === null ? 'NULL' : $this->_conn->quote2($record->alg_code,false)).', '.($record->alg_nbUses === null ? 'NULL' : intval($record->alg_nbUses)).', '.($record->alg_cre === null ? 'NULL' : $this->_conn->quote2($record->alg_cre,false)).', '.($record->alg_lastUse === null ? 'NULL' : $this->_conn->quote2($record->alg_lastUse,false)).', '.($record->id_owner === null ? 'NULL' : intval($record->id_owner)).', '.($record->id_tenant === null ? 'NULL' : intval($record->id_tenant)).'
)';
}
   $result = $this->_conn->exec ($query);
   if(!$result)
       return false;
   if($record->id_autologin < 1 ) 
       $record->id_autologin= $this->_conn->lastInsertId();
    return $result;
}
public function update ($record){
   $query = 'UPDATE `'.$this->_conn->prefixTable('autologin').'` SET 
 `alg_code`= '.($record->alg_code === null ? 'NULL' : $this->_conn->quote2($record->alg_code,false)).', `alg_nbUses`= '.($record->alg_nbUses === null ? 'NULL' : intval($record->alg_nbUses)).', `alg_cre`= '.($record->alg_cre === null ? 'NULL' : $this->_conn->quote2($record->alg_cre,false)).', `alg_lastUse`= '.($record->alg_lastUse === null ? 'NULL' : $this->_conn->quote2($record->alg_lastUse,false)).', `id_owner`= '.($record->id_owner === null ? 'NULL' : intval($record->id_owner)).', `id_tenant`= '.($record->id_tenant === null ? 'NULL' : intval($record->id_tenant)).'
 where  `id_autologin`'.' = '.intval($record->id_autologin).'
';
   $result = $this->_conn->exec ($query);
   return $result;
 }


}
?>