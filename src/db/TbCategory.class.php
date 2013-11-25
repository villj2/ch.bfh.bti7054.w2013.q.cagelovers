<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class TbCategory extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='TbCategory';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='tb_category';
	const SQL_INSERT='INSERT INTO `tb_category` (`ID`,`DescriptionDE`,`DescriptionFR`,`DescriptionIT`,`DescriptionEN`,`ParentID`,`OrderID`) VALUES (?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `tb_category` (`DescriptionDE`,`DescriptionFR`,`DescriptionIT`,`DescriptionEN`,`ParentID`,`OrderID`) VALUES (?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `tb_category` SET `ID`=?,`DescriptionDE`=?,`DescriptionFR`=?,`DescriptionIT`=?,`DescriptionEN`=?,`ParentID`=?,`OrderID`=? WHERE `ID`=?';
	const SQL_SELECT_PK='SELECT * FROM `tb_category` WHERE `ID`=?';
	const SQL_DELETE_PK='DELETE FROM `tb_category` WHERE `ID`=?';
	const FIELD_ID=-583260230;
	const FIELD_DESCRIPTIONDE=-1350662818;
	const FIELD_DESCRIPTIONFR=-1350662743;
	const FIELD_DESCRIPTIONIT=-1350662648;
	const FIELD_DESCRIPTIONEN=-1350662778;
	const FIELD_PARENTID=538074820;
	const FIELD_ORDERID=1681832330;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'ID',
		self::FIELD_DESCRIPTIONDE=>'DescriptionDE',
		self::FIELD_DESCRIPTIONFR=>'DescriptionFR',
		self::FIELD_DESCRIPTIONIT=>'DescriptionIT',
		self::FIELD_DESCRIPTIONEN=>'DescriptionEN',
		self::FIELD_PARENTID=>'ParentID',
		self::FIELD_ORDERID=>'OrderID');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_DESCRIPTIONDE=>'DescriptionDE',
		self::FIELD_DESCRIPTIONFR=>'DescriptionFR',
		self::FIELD_DESCRIPTIONIT=>'DescriptionIT',
		self::FIELD_DESCRIPTIONEN=>'DescriptionEN',
		self::FIELD_PARENTID=>'ParentID',
		self::FIELD_ORDERID=>'OrderID');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_DESCRIPTIONDE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DESCRIPTIONFR=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DESCRIPTIONIT=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DESCRIPTIONEN=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PARENTID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ORDERID=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_DESCRIPTIONDE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_DESCRIPTIONFR=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_DESCRIPTIONIT=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_DESCRIPTIONEN=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_PARENTID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_ORDERID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_DESCRIPTIONDE=>'',
		self::FIELD_DESCRIPTIONFR=>'',
		self::FIELD_DESCRIPTIONIT=>'',
		self::FIELD_DESCRIPTIONEN=>'',
		self::FIELD_PARENTID=>null,
		self::FIELD_ORDERID=>0);
	private $id;
	private $DescriptionDE;
	private $DescriptionFR;
	private $DescriptionIT;
	private $DescriptionEN;
	private $ParentID;
	private $OrderID;

	/**
	 * set value for ID 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 */
	public function setId($id) {
		$this->id=$id;
	}

	/**
	 * get value for ID 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * set value for DescriptionDE 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $DescriptionDE
	 */
	public function setDescriptionDE($DescriptionDE) {
		$this->DescriptionDE=$DescriptionDE;
	}

	/**
	 * get value for DescriptionDE 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getDescriptionDE() {
		return $this->DescriptionDE;
	}

	/**
	 * set value for DescriptionFR 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $DescriptionFR
	 */
	public function setDescriptionFR($DescriptionFR) {
		$this->DescriptionFR=$DescriptionFR;
	}

	/**
	 * get value for DescriptionFR 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getDescriptionFR() {
		return $this->DescriptionFR;
	}

	/**
	 * set value for DescriptionIT 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $DescriptionIT
	 */
	public function setDescriptionIT($DescriptionIT) {
		$this->DescriptionIT=$DescriptionIT;
	}

	/**
	 * get value for DescriptionIT 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getDescriptionIT() {
		return $this->DescriptionIT;
	}

	/**
	 * set value for DescriptionEN 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $DescriptionEN
	 */
	public function setDescriptionEN($DescriptionEN) {
		$this->DescriptionEN=$DescriptionEN;
	}

	/**
	 * get value for DescriptionEN 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getDescriptionEN() {
		return $this->DescriptionEN;
	}

	/**
	 * set value for ParentID 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $ParentID
	 */
	public function setParentID($ParentID) {
		$this->ParentID=$ParentID;
	}

	/**
	 * get value for ParentID 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getParentID() {
		return $this->ParentID;
	}

	/**
	 * set value for OrderID 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @param mixed $OrderID
	 */
	public function setOrderID($OrderID) {
		$this->OrderID=$OrderID;
	}

	/**
	 * get value for OrderID 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getOrderID() {
		return $this->OrderID;
	}

	/**
	 * Get table name
	 *
	 * @return string
	 */
	public static function getTableName() {
		return self::SQL_TABLE_NAME;
	}

	/**
	 * Get array with field id as index and field name as value
	 *
	 * @return array
	 */
	public static function getFieldNames() {
		return self::$FIELD_NAMES;
	}

	/**
	 * Get array with field id as index and property name as value
	 *
	 * @return array
	 */
	public static function getPropertyNames() {
		return self::$PROPERTY_NAMES;
	}

	/**
	 * get the field name for the passed field id.
	 *
	 * @param int $fieldId
	 * @param bool $fullyQualifiedName true if field name should be qualified by table name
	 * @return string field name for the passed field id, null if the field doesn't exist
	 */
	public static function getFieldNameByFieldId($fieldId, $fullyQualifiedName=true) {
		if (!array_key_exists($fieldId, self::$FIELD_NAMES)) {
			return null;
		}
		$fieldName=self::SQL_IDENTIFIER_QUOTE . self::$FIELD_NAMES[$fieldId] . self::SQL_IDENTIFIER_QUOTE;
		if ($fullyQualifiedName) {
			return self::SQL_IDENTIFIER_QUOTE . self::SQL_TABLE_NAME . self::SQL_IDENTIFIER_QUOTE . '.' . $fieldName;
		}
		return $fieldName;
	}

	/**
	 * Get array with field ids of identifiers
	 *
	 * @return array
	 */
	public static function getIdentifierFields() {
		return self::$PRIMARY_KEYS;
	}

	/**
	 * Get array with field ids of autoincrement fields
	 *
	 * @return array
	 */
	public static function getAutoincrementFields() {
		return self::$AUTOINCREMENT_FIELDS;
	}

	/**
	 * Get array with field id as index and property type as value
	 *
	 * @return array
	 */
	public static function getPropertyTypes() {
		return self::$PROPERTY_TYPES;
	}

	/**
	 * Get array with field id as index and field type as value
	 *
	 * @return array
	 */
	public static function getFieldTypes() {
		return self::$FIELD_TYPES;
	}

	/**
	 * Assign default values according to table
	 * 
	 */
	public function assignDefaultValues() {
		$this->assignByArray(self::$DEFAULT_VALUES);
	}


	/**
	 * return hash with the field name as index and the field value as value.
	 *
	 * @return array
	 */
	public function toHash() {
		$array=$this->toArray();
		$hash=array();
		foreach ($array as $fieldId=>$value) {
			$hash[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		return $hash;
	}

	/**
	 * return array with the field id as index and the field value as value.
	 *
	 * @return array
	 */
	public function toArray() {
		return array(
			self::FIELD_ID=>$this->getId(),
			self::FIELD_DESCRIPTIONDE=>$this->getDescriptionDE(),
			self::FIELD_DESCRIPTIONFR=>$this->getDescriptionFR(),
			self::FIELD_DESCRIPTIONIT=>$this->getDescriptionIT(),
			self::FIELD_DESCRIPTIONEN=>$this->getDescriptionEN(),
			self::FIELD_PARENTID=>$this->getParentID(),
			self::FIELD_ORDERID=>$this->getOrderID());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_ID=>$this->getId());
	}

	/**
	 * cached statements
	 *
	 * @var array<string,array<string,PDOStatement>>
	 */
	private static $stmts=array();
	private static $cacheStatements=true;
	
	/**
	 * prepare passed string as statement or return cached if enabled and available
	 *
	 * @param PDO $db
	 * @param string $statement
	 * @return PDOStatement
	 */
	protected static function prepareStatement(PDO $db, $statement) {
		if(self::isCacheStatements()) {
			if (in_array($statement, array(self::SQL_INSERT, self::SQL_INSERT_AUTOINCREMENT, self::SQL_UPDATE, self::SQL_SELECT_PK, self::SQL_DELETE_PK))) {
				$dbInstanceId=spl_object_hash($db);
				if (empty(self::$stmts[$statement][$dbInstanceId])) {
					self::$stmts[$statement][$dbInstanceId]=$db->prepare($statement);
				}
				return self::$stmts[$statement][$dbInstanceId];
			}
		}
		return $db->prepare($statement);
	}

	/**
	 * Enable statement cache
	 *
	 * @param bool $cache
	 */
	public static function setCacheStatements($cache) {
		self::$cacheStatements=true==$cache;
	}

	/**
	 * Check if statement cache is enabled
	 *
	 * @return bool
	 */
	public static function isCacheStatements() {
		return self::$cacheStatements;
	}
	
	/**
	 * check if this instance exists in the database
	 *
	 * @param PDO $db
	 * @return bool
	 */
	public function existsInDatabase(PDO $db) {
		$filter=array();
		foreach ($this->getPrimaryKeyValues() as $fieldId=>$value) {
			$filter[]=new DFC($fieldId, $value, DFC::EXACT_NULLSAFE);
		}
		return 0!=count(self::findByFilter($db, $filter, true));
	}
	
	/**
	 * Update to database if exists, otherwise insert
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateInsertToDatabase(PDO $db) {
		if ($this->existsInDatabase($db)) {
			return $this->updateToDatabase($db);
		} else {
			return $this->insertIntoDatabase($db);
		}
	}

	/**
	 * Query by Example.
	 *
	 * Match by attributes of passed example instance and return matched rows as an array of TbCategory instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param TbCategory $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return TbCategory[]
	 */
	public static function findByExample(PDO $db,TbCategory $example, $and=true, $sort=null) {
		$exampleValues=$example->toArray();
		$filter=array();
		foreach ($exampleValues as $fieldId=>$value) {
			if (null!==$value) {
				$filter[$fieldId]=$value;
			}
		}
		return self::findByFilter($db, $filter, $and, $sort);
	}

	/**
	 * Query by filter.
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * Will return matched rows as an array of TbCategory instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return TbCategory[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `tb_category`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of TbCategory instances
	 *
	 * @param PDOStatement $stmt
	 * @return TbCategory[]
	 */
	public static function fromStatement(PDOStatement $stmt) {
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * returns the result as an array of TbCategory instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return TbCategory[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new TbCategory();
			$o->assignByHash($result);
			$resultInstances[]=$o;
		}
		$stmt->closeCursor();
		return $resultInstances;
	}

	/**
	 * Get sql WHERE part from filter.
	 *
	 * @param array $filter
	 * @param bool $and
	 * @param bool $fullyQualifiedNames true if field names should be qualified by table name
	 * @param bool $prependWhere true if WHERE should be prepended to conditions
	 * @return string
	 */
	public static function buildSqlWhere($filter, $and, $fullyQualifiedNames=true, $prependWhere=false) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		return $filter->buildSqlWhere(new self::$CLASS_NAME, $fullyQualifiedNames, $prependWhere);
	}

	/**
	 * get sql ORDER BY part from DSCs
	 *
	 * @param array $sort array of DSC instances
	 * @return string
	 */
	protected static function buildSqlOrderBy($sort) {
		return DSC::buildSqlOrderBy(new self::$CLASS_NAME, $sort);
	}

	/**
	 * bind values from filter to statement
	 *
	 * @param PDOStatement $stmt
	 * @param DFCInterface $filter
	 */
	public static function bindValuesForFilter(PDOStatement &$stmt, DFCInterface $filter) {
		$filter->bindValuesForFilter(new self::$CLASS_NAME, $stmt);
	}

	/**
	 * Execute select query and return matched rows as an array of TbCategory instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return TbCategory[]
	 */
	public static function findBySql(PDO $db, $sql) {
		$stmt=$db->query($sql);
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * Delete rows matching the filter
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * @param PDO $db
	 * @param array $filter
	 * @param bool $and
	 * @return mixed
	 */
	public static function deleteByFilter(PDO $db, $filter, $and=true) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		if (0==count($filter)) {
			throw new InvalidArgumentException('refusing to delete without filter'); // just comment out this line if you are brave
		}
		$sql='DELETE FROM `tb_category`'
		. self::buildSqlWhere($filter, $and, false, true);
		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Assign values from array with the field id as index and the value as value
	 *
	 * @param array $array
	 */
	public function assignByArray($array) {
		$result=array();
		foreach ($array as $fieldId=>$value) {
			$result[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		$this->assignByHash($result);
	}

	/**
	 * Assign values from hash where the indexes match the tables field names
	 *
	 * @param array $result
	 */
	public function assignByHash($result) {
		$this->setId($result['ID']);
		$this->setDescriptionDE($result['DescriptionDE']);
		$this->setDescriptionFR($result['DescriptionFR']);
		$this->setDescriptionIT($result['DescriptionIT']);
		$this->setDescriptionEN($result['DescriptionEN']);
		$this->setParentID($result['ParentID']);
		$this->setOrderID($result['OrderID']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return TbCategory
	 */
	public static function findById(PDO $db,$id) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$id);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$result=$stmt->fetch(PDO::FETCH_ASSOC);
		$stmt->closeCursor();
		if(!$result) {
			return null;
		}
		$o=new TbCategory();
		$o->assignByHash($result);
		return $o;
	}

	/**
	 * Bind all values to statement
	 *
	 * @param PDOStatement $stmt
	 */
	protected function bindValues(PDOStatement &$stmt) {
		$stmt->bindValue(1,$this->getId());
		$stmt->bindValue(2,$this->getDescriptionDE());
		$stmt->bindValue(3,$this->getDescriptionFR());
		$stmt->bindValue(4,$this->getDescriptionIT());
		$stmt->bindValue(5,$this->getDescriptionEN());
		$stmt->bindValue(6,$this->getParentID());
		$stmt->bindValue(7,$this->getOrderID());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getId()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getDescriptionDE());
			$stmt->bindValue(2,$this->getDescriptionFR());
			$stmt->bindValue(3,$this->getDescriptionIT());
			$stmt->bindValue(4,$this->getDescriptionEN());
			$stmt->bindValue(5,$this->getParentID());
			$stmt->bindValue(6,$this->getOrderID());
		} else {
			$stmt=self::prepareStatement($db,self::SQL_INSERT);
			$this->bindValues($stmt);
		}
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$lastInsertId=$db->lastInsertId();
		if (false!==$lastInsertId) {
			$this->setId($lastInsertId);
		}
		$stmt->closeCursor();
		return $affected;
	}


	/**
	 * Update this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateToDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_UPDATE);
		$this->bindValues($stmt);
		$stmt->bindValue(8,$this->getId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}


	/**
	 * Delete this instance from the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function deleteFromDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_DELETE_PK);
		$stmt->bindValue(1,$this->getId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'TbCategory');
	}

	/**
	 * get single TbCategory instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return TbCategory
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new TbCategory();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of TbCategory from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return TbCategory[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('TbCategory') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>