<?php  require_once ( JELIX_LIB_PATH .'dao/jDaoRecordBase.class.php');
 require_once ( JELIX_LIB_PATH .'dao/jDaoFactoryBase.class.php');

class cDaoRecord_TP8_Jx_student_Jx_mysql extends jDaoRecordBase {
 public $idstudent;
 public $firstname;
 public $name;
 public $birthday;
 public $toString;
   public function getSelector() { return "TP8~student"; }
   public function getProperties() { return cDao_TP8_Jx_student_Jx_mysql::$_properties; }
   public function getPrimaryKeyNames() { return cDao_TP8_Jx_student_Jx_mysql::$_pkFields; }
}

class cDao_TP8_Jx_student_Jx_mysql extends jDaoFactoryBase {
   protected $_tables = array (
  'student' => 
  array (
    'name' => 'student',
    'realname' => 'student',
    'pk' => 
    array (
      0 => 'idstudent',
    ),
    'fields' => 
    array (
      0 => 'idstudent',
      1 => 'firstname',
      2 => 'name',
      3 => 'birthday',
      4 => 'toString',
    ),
  ),
);
   protected $_primaryTable = 'student';
   protected $_selectClause='SELECT `student`.`idstudent`, `student`.`firstname`, `student`.`name`, `student`.`birthday`, CONCAT(UPPER(name),\' \',LOWER(firstname)) as `toString`';
   protected $_fromClause;
   protected $_whereClause='';
   protected $_DaoRecordClassName='cDaoRecord_TP8_Jx_student_Jx_mysql';
   protected $_daoSelector = 'TP8~student';
   public static $_properties = array (
  'idstudent' => 
  array (
    'name' => 'idstudent',
    'fieldName' => 'idstudent',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => true,
    'isPK' => true,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'student',
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
  'firstname' => 
  array (
    'name' => 'firstname',
    'fieldName' => 'firstname',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'student',
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
  'name' => 
  array (
    'name' => 'name',
    'fieldName' => 'name',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'student',
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
  'birthday' => 
  array (
    'name' => 'birthday',
    'fieldName' => 'birthday',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'date',
    'unifiedType' => 'date',
    'table' => 'student',
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
  'toString' => 
  array (
    'name' => 'toString',
    'fieldName' => 'toString',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'string',
    'unifiedType' => 'varchar',
    'table' => 'student',
    'updatePattern' => '',
    'insertPattern' => '',
    'selectPattern' => 'CONCAT(UPPER(name),\' \',LOWER(firstname))',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
);
   public static $_pkFields = array('idstudent');
 
public function __construct($conn){
   parent::__construct($conn);
   $this->_fromClause = ' FROM `'.$this->_conn->prefixTable('student').'` AS `student`';
}
   public function getProperties() { return self::$_properties; }
   public function getPrimaryKeyNames() { return self::$_pkFields;}
 
 protected function _getPkWhereClauseForSelect($pk){
   extract($pk);
 return ' WHERE  `student`.`idstudent`'.' = '.intval($idstudent).'';
}
 
protected function _getPkWhereClauseForNonSelect($pk){
   extract($pk);
   return ' where  `idstudent`'.' = '.intval($idstudent).'';
}
public function insert ($record){
 if($record->idstudent > 0 ){
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('student').'` (
`idstudent`,`firstname`,`name`,`birthday`
) VALUES (
'.($record->idstudent === null ? 'NULL' : intval($record->idstudent)).', '.($record->firstname === null ? 'NULL' : $this->_conn->quote2($record->firstname,false)).', '.($record->name === null ? 'NULL' : $this->_conn->quote2($record->name,false)).', '.($record->birthday === null ? 'NULL' : $this->_conn->quote2($record->birthday,false)).'
)';
}else{
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('student').'` (
`firstname`,`name`,`birthday`
) VALUES (
'.($record->firstname === null ? 'NULL' : $this->_conn->quote2($record->firstname,false)).', '.($record->name === null ? 'NULL' : $this->_conn->quote2($record->name,false)).', '.($record->birthday === null ? 'NULL' : $this->_conn->quote2($record->birthday,false)).'
)';
}
   $result = $this->_conn->exec ($query);
   if(!$result)
       return false;
   if($record->idstudent < 1 ) 
       $record->idstudent= $this->_conn->lastInsertId();
  $query ='SELECT CONCAT(UPPER(name),\' \',LOWER(firstname)) as `toString` FROM `'.$this->_conn->prefixTable('student').'` WHERE  `idstudent`'.' = '.intval($record->idstudent).'';
  $rs  =  $this->_conn->query ($query);
  $newrecord =  $rs->fetch ();
  $record->toString = $newrecord->toString;
    return $result;
}
public function update ($record){
   $query = 'UPDATE `'.$this->_conn->prefixTable('student').'` SET 
 `firstname`= '.($record->firstname === null ? 'NULL' : $this->_conn->quote2($record->firstname,false)).', `name`= '.($record->name === null ? 'NULL' : $this->_conn->quote2($record->name,false)).', `birthday`= '.($record->birthday === null ? 'NULL' : $this->_conn->quote2($record->birthday,false)).'
 where  `idstudent`'.' = '.intval($record->idstudent).'
';
   $result = $this->_conn->exec ($query);
  $query ='SELECT CONCAT(UPPER(name),\' \',LOWER(firstname)) as `toString` FROM `'.$this->_conn->prefixTable('student').'` WHERE  `idstudent`'.' = '.intval($record->idstudent).'';
  $rs  =  $this->_conn->query ($query, jDbConnection::FETCH_INTO, $record);
  $record =  $rs->fetch ();
   return $result;
 }


}
?>