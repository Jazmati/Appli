<?php  require_once ( JELIX_LIB_PATH .'dao/jDaoRecordBase.class.php');
 require_once ( JELIX_LIB_PATH .'dao/jDaoFactoryBase.class.php');

class cDaoRecord_GiteoWebService_Jx_activity_Jx_mysql extends jDaoRecordBase {
 public $id_activity;
 public $act_order;
 public $act_key;
   public function getSelector() { return "GiteoWebService~activity"; }
   public function getProperties() { return cDao_GiteoWebService_Jx_activity_Jx_mysql::$_properties; }
   public function getPrimaryKeyNames() { return cDao_GiteoWebService_Jx_activity_Jx_mysql::$_pkFields; }
}

class cDao_GiteoWebService_Jx_activity_Jx_mysql extends jDaoFactoryBase {
   protected $_tables = array (
  'activity' => 
  array (
    'name' => 'activity',
    'realname' => 'activity',
    'pk' => 
    array (
      0 => 'id_activity',
    ),
    'fields' => 
    array (
      0 => 'id_activity',
      1 => 'act_order',
      2 => 'act_key',
    ),
  ),
);
   protected $_primaryTable = 'activity';
   protected $_selectClause='SELECT `activity`.`id_activity`, `activity`.`act_order`, `activity`.`act_key`';
   protected $_fromClause;
   protected $_whereClause='';
   protected $_DaoRecordClassName='cDaoRecord_GiteoWebService_Jx_activity_Jx_mysql';
   protected $_daoSelector = 'GiteoWebService~activity';
   public static $_properties = array (
  'id_activity' => 
  array (
    'name' => 'id_activity',
    'fieldName' => 'id_activity',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => true,
    'isPK' => true,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'activity',
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
  'act_order' => 
  array (
    'name' => 'act_order',
    'fieldName' => 'act_order',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'tinyint',
    'unifiedType' => 'integer',
    'table' => 'activity',
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
  'act_key' => 
  array (
    'name' => 'act_key',
    'fieldName' => 'act_key',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'activity',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => 20,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
);
   public static $_pkFields = array('id_activity');
 
public function __construct($conn){
   parent::__construct($conn);
   $this->_fromClause = ' FROM `'.$this->_conn->prefixTable('activity').'` AS `activity`';
}
   public function getProperties() { return self::$_properties; }
   public function getPrimaryKeyNames() { return self::$_pkFields;}
 
 protected function _getPkWhereClauseForSelect($pk){
   extract($pk);
 return ' WHERE  `activity`.`id_activity`'.' = '.intval($id_activity).'';
}
 
protected function _getPkWhereClauseForNonSelect($pk){
   extract($pk);
   return ' where  `id_activity`'.' = '.intval($id_activity).'';
}
public function insert ($record){
 if($record->id_activity > 0 ){
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('activity').'` (
`id_activity`,`act_order`,`act_key`
) VALUES (
'.($record->id_activity === null ? 'NULL' : intval($record->id_activity)).', '.($record->act_order === null ? 'NULL' : intval($record->act_order)).', '.($record->act_key === null ? 'NULL' : $this->_conn->quote2($record->act_key,false)).'
)';
}else{
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('activity').'` (
`act_order`,`act_key`
) VALUES (
'.($record->act_order === null ? 'NULL' : intval($record->act_order)).', '.($record->act_key === null ? 'NULL' : $this->_conn->quote2($record->act_key,false)).'
)';
}
   $result = $this->_conn->exec ($query);
   if(!$result)
       return false;
   if($record->id_activity < 1 ) 
       $record->id_activity= $this->_conn->lastInsertId();
    return $result;
}
public function update ($record){
   $query = 'UPDATE `'.$this->_conn->prefixTable('activity').'` SET 
 `act_order`= '.($record->act_order === null ? 'NULL' : intval($record->act_order)).', `act_key`= '.($record->act_key === null ? 'NULL' : $this->_conn->quote2($record->act_key,false)).'
 where  `id_activity`'.' = '.intval($record->id_activity).'
';
   $result = $this->_conn->exec ($query);
   return $result;
 }


}
?>