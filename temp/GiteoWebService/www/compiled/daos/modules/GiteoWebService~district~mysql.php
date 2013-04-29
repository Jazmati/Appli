<?php  require_once ( JELIX_LIB_PATH .'dao/jDaoRecordBase.class.php');
 require_once ( JELIX_LIB_PATH .'dao/jDaoFactoryBase.class.php');

class cDaoRecord_GiteoWebService_Jx_district_Jx_mysql extends jDaoRecordBase {
 public $id_district;
 public $dst_name;
 public $dst_urlName;
 public $dst_neighbors;
   public function getSelector() { return "GiteoWebService~district"; }
   public function getProperties() { return cDao_GiteoWebService_Jx_district_Jx_mysql::$_properties; }
   public function getPrimaryKeyNames() { return cDao_GiteoWebService_Jx_district_Jx_mysql::$_pkFields; }
}

class cDao_GiteoWebService_Jx_district_Jx_mysql extends jDaoFactoryBase {
   protected $_tables = array (
  'district' => 
  array (
    'name' => 'district',
    'realname' => 'district',
    'pk' => 
    array (
      0 => 'id_district',
    ),
    'fields' => 
    array (
      0 => 'id_district',
      1 => 'dst_name',
      2 => 'dst_urlName',
      3 => 'dst_neighbors',
    ),
  ),
);
   protected $_primaryTable = 'district';
   protected $_selectClause='SELECT `district`.`id_district`, `district`.`dst_name`, `district`.`dst_urlName`, `district`.`dst_neighbors`';
   protected $_fromClause;
   protected $_whereClause='';
   protected $_DaoRecordClassName='cDaoRecord_GiteoWebService_Jx_district_Jx_mysql';
   protected $_daoSelector = 'GiteoWebService~district';
   public static $_properties = array (
  'id_district' => 
  array (
    'name' => 'id_district',
    'fieldName' => 'id_district',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => true,
    'isPK' => true,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'district',
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
  'dst_name' => 
  array (
    'name' => 'dst_name',
    'fieldName' => 'dst_name',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'district',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => 50,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'dst_urlName' => 
  array (
    'name' => 'dst_urlName',
    'fieldName' => 'dst_urlName',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'district',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => 50,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'dst_neighbors' => 
  array (
    'name' => 'dst_neighbors',
    'fieldName' => 'dst_neighbors',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'district',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => 30,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
);
   public static $_pkFields = array('id_district');
 
public function __construct($conn){
   parent::__construct($conn);
   $this->_fromClause = ' FROM `'.$this->_conn->prefixTable('district').'` AS `district`';
}
   public function getProperties() { return self::$_properties; }
   public function getPrimaryKeyNames() { return self::$_pkFields;}
 
 protected function _getPkWhereClauseForSelect($pk){
   extract($pk);
 return ' WHERE  `district`.`id_district`'.' = '.intval($id_district).'';
}
 
protected function _getPkWhereClauseForNonSelect($pk){
   extract($pk);
   return ' where  `id_district`'.' = '.intval($id_district).'';
}
public function insert ($record){
 if($record->id_district > 0 ){
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('district').'` (
`id_district`,`dst_name`,`dst_urlName`,`dst_neighbors`
) VALUES (
'.($record->id_district === null ? 'NULL' : intval($record->id_district)).', '.($record->dst_name === null ? 'NULL' : $this->_conn->quote2($record->dst_name,false)).', '.($record->dst_urlName === null ? 'NULL' : $this->_conn->quote2($record->dst_urlName,false)).', '.($record->dst_neighbors === null ? 'NULL' : $this->_conn->quote2($record->dst_neighbors,false)).'
)';
}else{
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('district').'` (
`dst_name`,`dst_urlName`,`dst_neighbors`
) VALUES (
'.($record->dst_name === null ? 'NULL' : $this->_conn->quote2($record->dst_name,false)).', '.($record->dst_urlName === null ? 'NULL' : $this->_conn->quote2($record->dst_urlName,false)).', '.($record->dst_neighbors === null ? 'NULL' : $this->_conn->quote2($record->dst_neighbors,false)).'
)';
}
   $result = $this->_conn->exec ($query);
   if(!$result)
       return false;
   if($record->id_district < 1 ) 
       $record->id_district= $this->_conn->lastInsertId();
    return $result;
}
public function update ($record){
   $query = 'UPDATE `'.$this->_conn->prefixTable('district').'` SET 
 `dst_name`= '.($record->dst_name === null ? 'NULL' : $this->_conn->quote2($record->dst_name,false)).', `dst_urlName`= '.($record->dst_urlName === null ? 'NULL' : $this->_conn->quote2($record->dst_urlName,false)).', `dst_neighbors`= '.($record->dst_neighbors === null ? 'NULL' : $this->_conn->quote2($record->dst_neighbors,false)).'
 where  `id_district`'.' = '.intval($record->id_district).'
';
   $result = $this->_conn->exec ($query);
   return $result;
 }


}
?>