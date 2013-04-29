<?php  require_once ( JELIX_LIB_PATH .'dao/jDaoRecordBase.class.php');
 require_once ( JELIX_LIB_PATH .'dao/jDaoFactoryBase.class.php');

class cDaoRecord_GiteoWebService_Jx_promotion2_Jx_mysql extends jDaoRecordBase {
 public $id_promotion2;
 public $pr2_title;
 public $pr2_subTitle;
 public $pr2_description;
 public $pr2_choice;
 public $pr2_dateBegin;
 public $pr2_dateEnd;
 public $pr2_applyTo;
 public $pr2_type;
 public $pr2_reduction;
   public function getSelector() { return "GiteoWebService~promotion2"; }
   public function getProperties() { return cDao_GiteoWebService_Jx_promotion2_Jx_mysql::$_properties; }
   public function getPrimaryKeyNames() { return cDao_GiteoWebService_Jx_promotion2_Jx_mysql::$_pkFields; }
}

class cDao_GiteoWebService_Jx_promotion2_Jx_mysql extends jDaoFactoryBase {
   protected $_tables = array (
  'promotion2' => 
  array (
    'name' => 'promotion2',
    'realname' => 'promotion2',
    'pk' => 
    array (
      0 => 'id_promotion2',
    ),
    'fields' => 
    array (
      0 => 'id_promotion2',
      1 => 'pr2_title',
      2 => 'pr2_subTitle',
      3 => 'pr2_description',
      4 => 'pr2_choice',
      5 => 'pr2_dateBegin',
      6 => 'pr2_dateEnd',
      7 => 'pr2_applyTo',
      8 => 'pr2_type',
      9 => 'pr2_reduction',
    ),
  ),
);
   protected $_primaryTable = 'promotion2';
   protected $_selectClause='SELECT `promotion2`.`id_promotion2`, `promotion2`.`pr2_title`, `promotion2`.`pr2_subTitle`, `promotion2`.`pr2_description`, `promotion2`.`pr2_choice`, `promotion2`.`pr2_dateBegin`, `promotion2`.`pr2_dateEnd`, `promotion2`.`pr2_applyTo`, `promotion2`.`pr2_type`, `promotion2`.`pr2_reduction`';
   protected $_fromClause;
   protected $_whereClause='';
   protected $_DaoRecordClassName='cDaoRecord_GiteoWebService_Jx_promotion2_Jx_mysql';
   protected $_daoSelector = 'GiteoWebService~promotion2';
   public static $_properties = array (
  'id_promotion2' => 
  array (
    'name' => 'id_promotion2',
    'fieldName' => 'id_promotion2',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => true,
    'isPK' => true,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'promotion2',
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
  'pr2_title' => 
  array (
    'name' => 'pr2_title',
    'fieldName' => 'pr2_title',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'promotion2',
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
  'pr2_subTitle' => 
  array (
    'name' => 'pr2_subTitle',
    'fieldName' => 'pr2_subTitle',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'promotion2',
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
  'pr2_description' => 
  array (
    'name' => 'pr2_description',
    'fieldName' => 'pr2_description',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'tinytext',
    'unifiedType' => 'text',
    'table' => 'promotion2',
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
  'pr2_choice' => 
  array (
    'name' => 'pr2_choice',
    'fieldName' => 'pr2_choice',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'enum',
    'unifiedType' => 'varchar',
    'table' => 'promotion2',
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
  'pr2_dateBegin' => 
  array (
    'name' => 'pr2_dateBegin',
    'fieldName' => 'pr2_dateBegin',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'date',
    'unifiedType' => 'date',
    'table' => 'promotion2',
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
  'pr2_dateEnd' => 
  array (
    'name' => 'pr2_dateEnd',
    'fieldName' => 'pr2_dateEnd',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'date',
    'unifiedType' => 'date',
    'table' => 'promotion2',
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
  'pr2_applyTo' => 
  array (
    'name' => 'pr2_applyTo',
    'fieldName' => 'pr2_applyTo',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'enum',
    'unifiedType' => 'varchar',
    'table' => 'promotion2',
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
  'pr2_type' => 
  array (
    'name' => 'pr2_type',
    'fieldName' => 'pr2_type',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'enum',
    'unifiedType' => 'varchar',
    'table' => 'promotion2',
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
  'pr2_reduction' => 
  array (
    'name' => 'pr2_reduction',
    'fieldName' => 'pr2_reduction',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'promotion2',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => 3,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
);
   public static $_pkFields = array('id_promotion2');
 
public function __construct($conn){
   parent::__construct($conn);
   $this->_fromClause = ' FROM `'.$this->_conn->prefixTable('promotion2').'` AS `promotion2`';
}
   public function getProperties() { return self::$_properties; }
   public function getPrimaryKeyNames() { return self::$_pkFields;}
 
 protected function _getPkWhereClauseForSelect($pk){
   extract($pk);
 return ' WHERE  `promotion2`.`id_promotion2`'.' = '.intval($id_promotion2).'';
}
 
protected function _getPkWhereClauseForNonSelect($pk){
   extract($pk);
   return ' where  `id_promotion2`'.' = '.intval($id_promotion2).'';
}
public function insert ($record){
 if($record->id_promotion2 > 0 ){
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('promotion2').'` (
`id_promotion2`,`pr2_title`,`pr2_subTitle`,`pr2_description`,`pr2_choice`,`pr2_dateBegin`,`pr2_dateEnd`,`pr2_applyTo`,`pr2_type`,`pr2_reduction`
) VALUES (
'.($record->id_promotion2 === null ? 'NULL' : intval($record->id_promotion2)).', '.($record->pr2_title === null ? 'NULL' : $this->_conn->quote2($record->pr2_title,false)).', '.($record->pr2_subTitle === null ? 'NULL' : $this->_conn->quote2($record->pr2_subTitle,false)).', '.($record->pr2_description === null ? 'NULL' : $this->_conn->quote2($record->pr2_description,false)).', '.($record->pr2_choice === null ? 'NULL' : $this->_conn->quote2($record->pr2_choice,false)).', '.($record->pr2_dateBegin === null ? 'NULL' : $this->_conn->quote2($record->pr2_dateBegin,false)).', '.($record->pr2_dateEnd === null ? 'NULL' : $this->_conn->quote2($record->pr2_dateEnd,false)).', '.($record->pr2_applyTo === null ? 'NULL' : $this->_conn->quote2($record->pr2_applyTo,false)).', '.($record->pr2_type === null ? 'NULL' : $this->_conn->quote2($record->pr2_type,false)).', '.($record->pr2_reduction === null ? 'NULL' : $this->_conn->quote2($record->pr2_reduction,false)).'
)';
}else{
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('promotion2').'` (
`pr2_title`,`pr2_subTitle`,`pr2_description`,`pr2_choice`,`pr2_dateBegin`,`pr2_dateEnd`,`pr2_applyTo`,`pr2_type`,`pr2_reduction`
) VALUES (
'.($record->pr2_title === null ? 'NULL' : $this->_conn->quote2($record->pr2_title,false)).', '.($record->pr2_subTitle === null ? 'NULL' : $this->_conn->quote2($record->pr2_subTitle,false)).', '.($record->pr2_description === null ? 'NULL' : $this->_conn->quote2($record->pr2_description,false)).', '.($record->pr2_choice === null ? 'NULL' : $this->_conn->quote2($record->pr2_choice,false)).', '.($record->pr2_dateBegin === null ? 'NULL' : $this->_conn->quote2($record->pr2_dateBegin,false)).', '.($record->pr2_dateEnd === null ? 'NULL' : $this->_conn->quote2($record->pr2_dateEnd,false)).', '.($record->pr2_applyTo === null ? 'NULL' : $this->_conn->quote2($record->pr2_applyTo,false)).', '.($record->pr2_type === null ? 'NULL' : $this->_conn->quote2($record->pr2_type,false)).', '.($record->pr2_reduction === null ? 'NULL' : $this->_conn->quote2($record->pr2_reduction,false)).'
)';
}
   $result = $this->_conn->exec ($query);
   if(!$result)
       return false;
   if($record->id_promotion2 < 1 ) 
       $record->id_promotion2= $this->_conn->lastInsertId();
    return $result;
}
public function update ($record){
   $query = 'UPDATE `'.$this->_conn->prefixTable('promotion2').'` SET 
 `pr2_title`= '.($record->pr2_title === null ? 'NULL' : $this->_conn->quote2($record->pr2_title,false)).', `pr2_subTitle`= '.($record->pr2_subTitle === null ? 'NULL' : $this->_conn->quote2($record->pr2_subTitle,false)).', `pr2_description`= '.($record->pr2_description === null ? 'NULL' : $this->_conn->quote2($record->pr2_description,false)).', `pr2_choice`= '.($record->pr2_choice === null ? 'NULL' : $this->_conn->quote2($record->pr2_choice,false)).', `pr2_dateBegin`= '.($record->pr2_dateBegin === null ? 'NULL' : $this->_conn->quote2($record->pr2_dateBegin,false)).', `pr2_dateEnd`= '.($record->pr2_dateEnd === null ? 'NULL' : $this->_conn->quote2($record->pr2_dateEnd,false)).', `pr2_applyTo`= '.($record->pr2_applyTo === null ? 'NULL' : $this->_conn->quote2($record->pr2_applyTo,false)).', `pr2_type`= '.($record->pr2_type === null ? 'NULL' : $this->_conn->quote2($record->pr2_type,false)).', `pr2_reduction`= '.($record->pr2_reduction === null ? 'NULL' : $this->_conn->quote2($record->pr2_reduction,false)).'
 where  `id_promotion2`'.' = '.intval($record->id_promotion2).'
';
   $result = $this->_conn->exec ($query);
   return $result;
 }


}
?>