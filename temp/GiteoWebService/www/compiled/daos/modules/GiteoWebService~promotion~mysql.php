<?php  require_once ( JELIX_LIB_PATH .'dao/jDaoRecordBase.class.php');
 require_once ( JELIX_LIB_PATH .'dao/jDaoFactoryBase.class.php');

class cDaoRecord_GiteoWebService_Jx_promotion_Jx_mysql extends jDaoRecordBase {
 public $id_promotion;
 public $prm_code;
 public $prm_dateBegin;
 public $prm_dateEnd;
 public $prm_commissionRate;
 public $prm_nbUsesLimit;
 public $prm_comment;
   public function getSelector() { return "GiteoWebService~promotion"; }
   public function getProperties() { return cDao_GiteoWebService_Jx_promotion_Jx_mysql::$_properties; }
   public function getPrimaryKeyNames() { return cDao_GiteoWebService_Jx_promotion_Jx_mysql::$_pkFields; }
}

class cDao_GiteoWebService_Jx_promotion_Jx_mysql extends jDaoFactoryBase {
   protected $_tables = array (
  'promotion' => 
  array (
    'name' => 'promotion',
    'realname' => 'promotion',
    'pk' => 
    array (
      0 => 'id_promotion',
    ),
    'fields' => 
    array (
      0 => 'id_promotion',
      1 => 'prm_code',
      2 => 'prm_dateBegin',
      3 => 'prm_dateEnd',
      4 => 'prm_commissionRate',
      5 => 'prm_nbUsesLimit',
      6 => 'prm_comment',
    ),
  ),
);
   protected $_primaryTable = 'promotion';
   protected $_selectClause='SELECT `promotion`.`id_promotion`, `promotion`.`prm_code`, `promotion`.`prm_dateBegin`, `promotion`.`prm_dateEnd`, `promotion`.`prm_commissionRate`, `promotion`.`prm_nbUsesLimit`, `promotion`.`prm_comment`';
   protected $_fromClause;
   protected $_whereClause='';
   protected $_DaoRecordClassName='cDaoRecord_GiteoWebService_Jx_promotion_Jx_mysql';
   protected $_daoSelector = 'GiteoWebService~promotion';
   public static $_properties = array (
  'id_promotion' => 
  array (
    'name' => 'id_promotion',
    'fieldName' => 'id_promotion',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => true,
    'isPK' => true,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'promotion',
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
  'prm_code' => 
  array (
    'name' => 'prm_code',
    'fieldName' => 'prm_code',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'promotion',
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
  'prm_dateBegin' => 
  array (
    'name' => 'prm_dateBegin',
    'fieldName' => 'prm_dateBegin',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'date',
    'unifiedType' => 'date',
    'table' => 'promotion',
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
  'prm_dateEnd' => 
  array (
    'name' => 'prm_dateEnd',
    'fieldName' => 'prm_dateEnd',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'date',
    'unifiedType' => 'date',
    'table' => 'promotion',
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
  'prm_commissionRate' => 
  array (
    'name' => 'prm_commissionRate',
    'fieldName' => 'prm_commissionRate',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'decimal',
    'unifiedType' => 'decimal',
    'table' => 'promotion',
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
  'prm_nbUsesLimit' => 
  array (
    'name' => 'prm_nbUsesLimit',
    'fieldName' => 'prm_nbUsesLimit',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'smallint',
    'unifiedType' => 'integer',
    'table' => 'promotion',
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
  'prm_comment' => 
  array (
    'name' => 'prm_comment',
    'fieldName' => 'prm_comment',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'text',
    'unifiedType' => 'text',
    'table' => 'promotion',
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
   public static $_pkFields = array('id_promotion');
 
public function __construct($conn){
   parent::__construct($conn);
   $this->_fromClause = ' FROM `'.$this->_conn->prefixTable('promotion').'` AS `promotion`';
}
   public function getProperties() { return self::$_properties; }
   public function getPrimaryKeyNames() { return self::$_pkFields;}
 
 protected function _getPkWhereClauseForSelect($pk){
   extract($pk);
 return ' WHERE  `promotion`.`id_promotion`'.' = '.intval($id_promotion).'';
}
 
protected function _getPkWhereClauseForNonSelect($pk){
   extract($pk);
   return ' where  `id_promotion`'.' = '.intval($id_promotion).'';
}
public function insert ($record){
 if($record->id_promotion > 0 ){
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('promotion').'` (
`id_promotion`,`prm_code`,`prm_dateBegin`,`prm_dateEnd`,`prm_commissionRate`,`prm_nbUsesLimit`,`prm_comment`
) VALUES (
'.($record->id_promotion === null ? 'NULL' : intval($record->id_promotion)).', '.($record->prm_code === null ? 'NULL' : $this->_conn->quote2($record->prm_code,false)).', '.($record->prm_dateBegin === null ? 'NULL' : $this->_conn->quote2($record->prm_dateBegin,false)).', '.($record->prm_dateEnd === null ? 'NULL' : $this->_conn->quote2($record->prm_dateEnd,false)).', '.($record->prm_commissionRate === null ? 'NULL' : jDb::floatToStr($record->prm_commissionRate)).', '.($record->prm_nbUsesLimit === null ? 'NULL' : intval($record->prm_nbUsesLimit)).', '.($record->prm_comment === null ? 'NULL' : $this->_conn->quote2($record->prm_comment,false)).'
)';
}else{
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('promotion').'` (
`prm_code`,`prm_dateBegin`,`prm_dateEnd`,`prm_commissionRate`,`prm_nbUsesLimit`,`prm_comment`
) VALUES (
'.($record->prm_code === null ? 'NULL' : $this->_conn->quote2($record->prm_code,false)).', '.($record->prm_dateBegin === null ? 'NULL' : $this->_conn->quote2($record->prm_dateBegin,false)).', '.($record->prm_dateEnd === null ? 'NULL' : $this->_conn->quote2($record->prm_dateEnd,false)).', '.($record->prm_commissionRate === null ? 'NULL' : jDb::floatToStr($record->prm_commissionRate)).', '.($record->prm_nbUsesLimit === null ? 'NULL' : intval($record->prm_nbUsesLimit)).', '.($record->prm_comment === null ? 'NULL' : $this->_conn->quote2($record->prm_comment,false)).'
)';
}
   $result = $this->_conn->exec ($query);
   if(!$result)
       return false;
   if($record->id_promotion < 1 ) 
       $record->id_promotion= $this->_conn->lastInsertId();
    return $result;
}
public function update ($record){
   $query = 'UPDATE `'.$this->_conn->prefixTable('promotion').'` SET 
 `prm_code`= '.($record->prm_code === null ? 'NULL' : $this->_conn->quote2($record->prm_code,false)).', `prm_dateBegin`= '.($record->prm_dateBegin === null ? 'NULL' : $this->_conn->quote2($record->prm_dateBegin,false)).', `prm_dateEnd`= '.($record->prm_dateEnd === null ? 'NULL' : $this->_conn->quote2($record->prm_dateEnd,false)).', `prm_commissionRate`= '.($record->prm_commissionRate === null ? 'NULL' : jDb::floatToStr($record->prm_commissionRate)).', `prm_nbUsesLimit`= '.($record->prm_nbUsesLimit === null ? 'NULL' : intval($record->prm_nbUsesLimit)).', `prm_comment`= '.($record->prm_comment === null ? 'NULL' : $this->_conn->quote2($record->prm_comment,false)).'
 where  `id_promotion`'.' = '.intval($record->id_promotion).'
';
   $result = $this->_conn->exec ($query);
   return $result;
 }


}
?>