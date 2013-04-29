<?php  require_once ( JELIX_LIB_PATH .'dao/jDaoRecordBase.class.php');
 require_once ( JELIX_LIB_PATH .'dao/jDaoFactoryBase.class.php');

class cDaoRecord_TP8_Jx_teachingmodule_Jx_mysql extends jDaoRecordBase {
 public $idteachingmodule;
 public $title;
   public function getSelector() { return "TP8~teachingmodule"; }
   public function getProperties() { return cDao_TP8_Jx_teachingmodule_Jx_mysql::$_properties; }
   public function getPrimaryKeyNames() { return cDao_TP8_Jx_teachingmodule_Jx_mysql::$_pkFields; }
}

class cDao_TP8_Jx_teachingmodule_Jx_mysql extends jDaoFactoryBase {
   protected $_tables = array (
  'teachingmodule' => 
  array (
    'name' => 'teachingmodule',
    'realname' => 'teachingmodule',
    'pk' => 
    array (
      0 => 'idteachingmodule',
    ),
    'fields' => 
    array (
      0 => 'idteachingmodule',
      1 => 'title',
    ),
  ),
);
   protected $_primaryTable = 'teachingmodule';
   protected $_selectClause='SELECT `teachingmodule`.`idteachingmodule`, `teachingmodule`.`title`';
   protected $_fromClause;
   protected $_whereClause='';
   protected $_DaoRecordClassName='cDaoRecord_TP8_Jx_teachingmodule_Jx_mysql';
   protected $_daoSelector = 'TP8~teachingmodule';
   public static $_properties = array (
  'idteachingmodule' => 
  array (
    'name' => 'idteachingmodule',
    'fieldName' => 'idteachingmodule',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => true,
    'isPK' => true,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'teachingmodule',
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
  'title' => 
  array (
    'name' => 'title',
    'fieldName' => 'title',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'teachingmodule',
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
);
   public static $_pkFields = array('idteachingmodule');
 
public function __construct($conn){
   parent::__construct($conn);
   $this->_fromClause = ' FROM `'.$this->_conn->prefixTable('teachingmodule').'` AS `teachingmodule`';
}
   public function getProperties() { return self::$_properties; }
   public function getPrimaryKeyNames() { return self::$_pkFields;}
 
 protected function _getPkWhereClauseForSelect($pk){
   extract($pk);
 return ' WHERE  `teachingmodule`.`idteachingmodule`'.' = '.intval($idteachingmodule).'';
}
 
protected function _getPkWhereClauseForNonSelect($pk){
   extract($pk);
   return ' where  `idteachingmodule`'.' = '.intval($idteachingmodule).'';
}
public function insert ($record){
 if($record->idteachingmodule > 0 ){
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('teachingmodule').'` (
`idteachingmodule`,`title`
) VALUES (
'.($record->idteachingmodule === null ? 'NULL' : intval($record->idteachingmodule)).', '.($record->title === null ? 'NULL' : $this->_conn->quote2($record->title,false)).'
)';
}else{
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('teachingmodule').'` (
`title`
) VALUES (
'.($record->title === null ? 'NULL' : $this->_conn->quote2($record->title,false)).'
)';
}
   $result = $this->_conn->exec ($query);
   if(!$result)
       return false;
   if($record->idteachingmodule < 1 ) 
       $record->idteachingmodule= $this->_conn->lastInsertId();
    return $result;
}
public function update ($record){
   $query = 'UPDATE `'.$this->_conn->prefixTable('teachingmodule').'` SET 
 `title`= '.($record->title === null ? 'NULL' : $this->_conn->quote2($record->title,false)).'
 where  `idteachingmodule`'.' = '.intval($record->idteachingmodule).'
';
   $result = $this->_conn->exec ($query);
   return $result;
 }


}
?>