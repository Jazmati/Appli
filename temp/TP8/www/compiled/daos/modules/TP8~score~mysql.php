<?php  require_once ( JELIX_LIB_PATH .'dao/jDaoRecordBase.class.php');
 require_once ( JELIX_LIB_PATH .'dao/jDaoFactoryBase.class.php');

class cDaoRecord_TP8_Jx_score_Jx_mysql extends jDaoRecordBase {
 public $idstudent;
 public $idteachingmodule;
 public $scorevalue;
 public $studentName;
 public $teachingTitle;
   public function getSelector() { return "TP8~score"; }
   public function getProperties() { return cDao_TP8_Jx_score_Jx_mysql::$_properties; }
   public function getPrimaryKeyNames() { return cDao_TP8_Jx_score_Jx_mysql::$_pkFields; }
}

class cDao_TP8_Jx_score_Jx_mysql extends jDaoFactoryBase {
   protected $_tables = array (
  'score' => 
  array (
    'name' => 'score',
    'realname' => 'score',
    'pk' => 
    array (
      0 => 'idstudent',
      1 => 'idteachingmodule',
    ),
    'fields' => 
    array (
      0 => 'idstudent',
      1 => 'idteachingmodule',
      2 => 'scorevalue',
    ),
  ),
  'myStudent' => 
  array (
    'name' => 'myStudent',
    'realname' => 'student',
    'pk' => 
    array (
      0 => 'idstudent',
    ),
    'fk' => 
    array (
      0 => 'idstudent',
    ),
    'fields' => 
    array (
      0 => 'studentName',
    ),
  ),
  'myTeaching' => 
  array (
    'name' => 'myTeaching',
    'realname' => 'teachingmodule',
    'pk' => 
    array (
      0 => 'idteachingmodule',
    ),
    'fk' => 
    array (
      0 => 'idteachingmodule',
    ),
    'fields' => 
    array (
      0 => 'teachingTitle',
    ),
  ),
);
   protected $_primaryTable = 'score';
   protected $_selectClause='SELECT `score`.`idstudent`, `score`.`idteachingmodule`, `score`.`scorevalue`, `myStudent`.`name` as `studentName`, `myTeaching`.`title` as `teachingTitle`';
   protected $_fromClause;
   protected $_whereClause=' WHERE  `score`.`idstudent`=`myStudent`.`idstudent` AND `score`.`idteachingmodule`=`myTeaching`.`idteachingmodule`';
   protected $_DaoRecordClassName='cDaoRecord_TP8_Jx_score_Jx_mysql';
   protected $_daoSelector = 'TP8~score';
   public static $_properties = array (
  'idstudent' => 
  array (
    'name' => 'idstudent',
    'fieldName' => 'idstudent',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => true,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'score',
    'updatePattern' => '',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'idteachingmodule' => 
  array (
    'name' => 'idteachingmodule',
    'fieldName' => 'idteachingmodule',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => true,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'score',
    'updatePattern' => '',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'scorevalue' => 
  array (
    'name' => 'scorevalue',
    'fieldName' => 'scorevalue',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'float',
    'unifiedType' => 'float',
    'table' => 'score',
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
  'studentName' => 
  array (
    'name' => 'studentName',
    'fieldName' => 'name',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'myStudent',
    'updatePattern' => '',
    'insertPattern' => '',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => false,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'teachingTitle' => 
  array (
    'name' => 'teachingTitle',
    'fieldName' => 'title',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'myTeaching',
    'updatePattern' => '',
    'insertPattern' => '',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => false,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
);
   public static $_pkFields = array('idstudent','idteachingmodule');
 
public function __construct($conn){
   parent::__construct($conn);
   $this->_fromClause = ' FROM `'.$this->_conn->prefixTable('score').'` AS `score`, `'.$this->_conn->prefixTable('student').'` AS `myStudent`, `'.$this->_conn->prefixTable('teachingmodule').'` AS `myTeaching`';
}
   public function getProperties() { return self::$_properties; }
   public function getPrimaryKeyNames() { return self::$_pkFields;}
 
 protected function _getPkWhereClauseForSelect($pk){
   extract($pk);
 return ' AND  `score`.`idstudent`'.' = '.intval($idstudent).' AND `score`.`idteachingmodule`'.' = '.intval($idteachingmodule).'';
}
 
protected function _getPkWhereClauseForNonSelect($pk){
   extract($pk);
   return ' where  `idstudent`'.' = '.intval($idstudent).' AND `idteachingmodule`'.' = '.intval($idteachingmodule).'';
}
public function insert ($record){
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('score').'` (
`idstudent`,`idteachingmodule`,`scorevalue`
) VALUES (
'.($record->idstudent === null ? 'NULL' : intval($record->idstudent)).', '.($record->idteachingmodule === null ? 'NULL' : intval($record->idteachingmodule)).', '.($record->scorevalue === null ? 'NULL' : jDb::floatToStr($record->scorevalue)).'
)';
   $result = $this->_conn->exec ($query);
    return $result;
}
public function update ($record){
   $query = 'UPDATE `'.$this->_conn->prefixTable('score').'` SET 
 `scorevalue`= '.($record->scorevalue === null ? 'NULL' : jDb::floatToStr($record->scorevalue)).'
 where  `idstudent`'.' = '.intval($record->idstudent).' AND `idteachingmodule`'.' = '.intval($record->idteachingmodule).'
';
   $result = $this->_conn->exec ($query);
   return $result;
 }


}
?>