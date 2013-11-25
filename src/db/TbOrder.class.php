<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class TbOrder extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='TbOrder';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='tb_order';
	const SQL_INSERT='INSERT INTO `tb_order` (`ID`,`UserID`,`Status`,`OrderDate`,`ShippingDate`,`ShippingMethod`,`ShippingName1`,`ShippingName2`,`ShippingStreet`,`ShippingZIP`,`ShippingCountry`) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `tb_order` (`UserID`,`Status`,`OrderDate`,`ShippingDate`,`ShippingMethod`,`ShippingName1`,`ShippingName2`,`ShippingStreet`,`ShippingZIP`,`ShippingCountry`) VALUES (?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `tb_order` SET `ID`=?,`UserID`=?,`Status`=?,`OrderDate`=?,`ShippingDate`=?,`ShippingMethod`=?,`ShippingName1`=?,`ShippingName2`=?,`ShippingStreet`=?,`ShippingZIP`=?,`ShippingCountry`=? WHERE `ID`=?';
	const SQL_SELECT_PK='SELECT * FROM `tb_order` WHERE `ID`=?';
	const SQL_DELETE_PK='DELETE FROM `tb_order` WHERE `ID`=?';
	const FIELD_ID=1253360236;
	const FIELD_USERID=-1682586857;
	const FIELD_STATUS=-1739037469;
	const FIELD_ORDERDATE=-91484789;
	const FIELD_SHIPPINGDATE=-851306835;
	const FIELD_SHIPPINGMETHOD=-1800719328;
	const FIELD_SHIPPINGNAME1=-611479577;
	const FIELD_SHIPPINGNAME2=-611479576;
	const FIELD_SHIPPINGSTREET=-1615154366;
	const FIELD_SHIPPINGZIP=-2105651134;
	const FIELD_SHIPPINGCOUNTRY=14572599;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'ID',
		self::FIELD_USERID=>'UserID',
		self::FIELD_STATUS=>'Status',
		self::FIELD_ORDERDATE=>'OrderDate',
		self::FIELD_SHIPPINGDATE=>'ShippingDate',
		self::FIELD_SHIPPINGMETHOD=>'ShippingMethod',
		self::FIELD_SHIPPINGNAME1=>'ShippingName1',
		self::FIELD_SHIPPINGNAME2=>'ShippingName2',
		self::FIELD_SHIPPINGSTREET=>'ShippingStreet',
		self::FIELD_SHIPPINGZIP=>'ShippingZIP',
		self::FIELD_SHIPPINGCOUNTRY=>'ShippingCountry');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_USERID=>'UserID',
		self::FIELD_STATUS=>'Status',
		self::FIELD_ORDERDATE=>'OrderDate',
		self::FIELD_SHIPPINGDATE=>'ShippingDate',
		self::FIELD_SHIPPINGMETHOD=>'ShippingMethod',
		self::FIELD_SHIPPINGNAME1=>'ShippingName1',
		self::FIELD_SHIPPINGNAME2=>'ShippingName2',
		self::FIELD_SHIPPINGSTREET=>'ShippingStreet',
		self::FIELD_SHIPPINGZIP=>'ShippingZIP',
		self::FIELD_SHIPPINGCOUNTRY=>'ShippingCountry');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_USERID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_STATUS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ORDERDATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPPINGDATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPPINGMETHOD=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPPINGNAME1=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPPINGNAME2=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPPINGSTREET=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SHIPPINGZIP=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_SHIPPINGCOUNTRY=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_USERID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_STATUS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,3,0,false),
		self::FIELD_ORDERDATE=>array(Db2PhpEntity::JDBC_TYPE_DATE,10,0,false),
		self::FIELD_SHIPPINGDATE=>array(Db2PhpEntity::JDBC_TYPE_DATE,10,0,true),
		self::FIELD_SHIPPINGMETHOD=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,3,0,false),
		self::FIELD_SHIPPINGNAME1=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_SHIPPINGNAME2=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_SHIPPINGSTREET=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_SHIPPINGZIP=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_SHIPPINGCOUNTRY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,2,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_USERID=>0,
		self::FIELD_STATUS=>'',
		self::FIELD_ORDERDATE=>'',
		self::FIELD_SHIPPINGDATE=>null,
		self::FIELD_SHIPPINGMETHOD=>'',
		self::FIELD_SHIPPINGNAME1=>'',
		self::FIELD_SHIPPINGNAME2=>'',
		self::FIELD_SHIPPINGSTREET=>'',
		self::FIELD_SHIPPINGZIP=>0,
		self::FIELD_SHIPPINGCOUNTRY=>'CH');
	private $id;
	private $UserID;
	private $Status;
	private $OrderDate;
	private $ShippingDate;
	private $ShippingMethod;
	private $ShippingName1;
	private $ShippingName2;
	private $ShippingStreet;
	private $ShippingZIP;
	private $ShippingCountry;

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
	 * set value for UserID 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @param mixed $UserID
	 */
	public function setUserID($UserID) {
		$this->UserID=$UserID;
	}

	/**
	 * get value for UserID 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getUserID() {
		return $this->UserID;
	}

	/**
	 * set value for Status 
	 *
	 * type:VARCHAR,size:3,default:null,index
	 *
	 * @param mixed $Status
	 */
	public function setStatus($Status) {
		$this->Status=$Status;
	}

	/**
	 * get value for Status 
	 *
	 * type:VARCHAR,size:3,default:null,index
	 *
	 * @return mixed
	 */
	public function getStatus() {
		return $this->Status;
	}

	/**
	 * set value for OrderDate 
	 *
	 * type:DATE,size:10,default:null,index
	 *
	 * @param mixed $OrderDate
	 */
	public function setOrderDate($OrderDate) {
		$this->OrderDate=$OrderDate;
	}

	/**
	 * get value for OrderDate 
	 *
	 * type:DATE,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getOrderDate() {
		return $this->OrderDate;
	}

	/**
	 * set value for ShippingDate 
	 *
	 * type:DATE,size:10,default:null,nullable
	 *
	 * @param mixed $ShippingDate
	 */
	public function setShippingDate($ShippingDate) {
		$this->ShippingDate=$ShippingDate;
	}

	/**
	 * get value for ShippingDate 
	 *
	 * type:DATE,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getShippingDate() {
		return $this->ShippingDate;
	}

	/**
	 * set value for ShippingMethod 
	 *
	 * type:VARCHAR,size:3,default:null,index
	 *
	 * @param mixed $ShippingMethod
	 */
	public function setShippingMethod($ShippingMethod) {
		$this->ShippingMethod=$ShippingMethod;
	}

	/**
	 * get value for ShippingMethod 
	 *
	 * type:VARCHAR,size:3,default:null,index
	 *
	 * @return mixed
	 */
	public function getShippingMethod() {
		return $this->ShippingMethod;
	}

	/**
	 * set value for ShippingName1 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $ShippingName1
	 */
	public function setShippingName1($ShippingName1) {
		$this->ShippingName1=$ShippingName1;
	}

	/**
	 * get value for ShippingName1 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getShippingName1() {
		return $this->ShippingName1;
	}

	/**
	 * set value for ShippingName2 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $ShippingName2
	 */
	public function setShippingName2($ShippingName2) {
		$this->ShippingName2=$ShippingName2;
	}

	/**
	 * get value for ShippingName2 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getShippingName2() {
		return $this->ShippingName2;
	}

	/**
	 * set value for ShippingStreet 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $ShippingStreet
	 */
	public function setShippingStreet($ShippingStreet) {
		$this->ShippingStreet=$ShippingStreet;
	}

	/**
	 * get value for ShippingStreet 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getShippingStreet() {
		return $this->ShippingStreet;
	}

	/**
	 * set value for ShippingZIP 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @param mixed $ShippingZIP
	 */
	public function setShippingZIP($ShippingZIP) {
		$this->ShippingZIP=$ShippingZIP;
	}

	/**
	 * get value for ShippingZIP 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getShippingZIP() {
		return $this->ShippingZIP;
	}

	/**
	 * set value for ShippingCountry 
	 *
	 * type:VARCHAR,size:2,default:CH
	 *
	 * @param mixed $ShippingCountry
	 */
	public function setShippingCountry($ShippingCountry) {
		$this->ShippingCountry=$ShippingCountry;
	}

	/**
	 * get value for ShippingCountry 
	 *
	 * type:VARCHAR,size:2,default:CH
	 *
	 * @return mixed
	 */
	public function getShippingCountry() {
		return $this->ShippingCountry;
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
			self::FIELD_USERID=>$this->getUserID(),
			self::FIELD_STATUS=>$this->getStatus(),
			self::FIELD_ORDERDATE=>$this->getOrderDate(),
			self::FIELD_SHIPPINGDATE=>$this->getShippingDate(),
			self::FIELD_SHIPPINGMETHOD=>$this->getShippingMethod(),
			self::FIELD_SHIPPINGNAME1=>$this->getShippingName1(),
			self::FIELD_SHIPPINGNAME2=>$this->getShippingName2(),
			self::FIELD_SHIPPINGSTREET=>$this->getShippingStreet(),
			self::FIELD_SHIPPINGZIP=>$this->getShippingZIP(),
			self::FIELD_SHIPPINGCOUNTRY=>$this->getShippingCountry());
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
	 * Match by attributes of passed example instance and return matched rows as an array of TbOrder instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param TbOrder $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return TbOrder[]
	 */
	public static function findByExample(PDO $db,TbOrder $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of TbOrder instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return TbOrder[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `tb_order`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of TbOrder instances
	 *
	 * @param PDOStatement $stmt
	 * @return TbOrder[]
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
	 * returns the result as an array of TbOrder instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return TbOrder[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new TbOrder();
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
	 * Execute select query and return matched rows as an array of TbOrder instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return TbOrder[]
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
		$sql='DELETE FROM `tb_order`'
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
		$this->setUserID($result['UserID']);
		$this->setStatus($result['Status']);
		$this->setOrderDate($result['OrderDate']);
		$this->setShippingDate($result['ShippingDate']);
		$this->setShippingMethod($result['ShippingMethod']);
		$this->setShippingName1($result['ShippingName1']);
		$this->setShippingName2($result['ShippingName2']);
		$this->setShippingStreet($result['ShippingStreet']);
		$this->setShippingZIP($result['ShippingZIP']);
		$this->setShippingCountry($result['ShippingCountry']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return TbOrder
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
		$o=new TbOrder();
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
		$stmt->bindValue(2,$this->getUserID());
		$stmt->bindValue(3,$this->getStatus());
		$stmt->bindValue(4,$this->getOrderDate());
		$stmt->bindValue(5,$this->getShippingDate());
		$stmt->bindValue(6,$this->getShippingMethod());
		$stmt->bindValue(7,$this->getShippingName1());
		$stmt->bindValue(8,$this->getShippingName2());
		$stmt->bindValue(9,$this->getShippingStreet());
		$stmt->bindValue(10,$this->getShippingZIP());
		$stmt->bindValue(11,$this->getShippingCountry());
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
			$stmt->bindValue(1,$this->getUserID());
			$stmt->bindValue(2,$this->getStatus());
			$stmt->bindValue(3,$this->getOrderDate());
			$stmt->bindValue(4,$this->getShippingDate());
			$stmt->bindValue(5,$this->getShippingMethod());
			$stmt->bindValue(6,$this->getShippingName1());
			$stmt->bindValue(7,$this->getShippingName2());
			$stmt->bindValue(8,$this->getShippingStreet());
			$stmt->bindValue(9,$this->getShippingZIP());
			$stmt->bindValue(10,$this->getShippingCountry());
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
		$stmt->bindValue(12,$this->getId());
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
		return self::hashToDomDocument($this->toHash(), 'TbOrder');
	}

	/**
	 * get single TbOrder instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return TbOrder
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new TbOrder();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of TbOrder from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return TbOrder[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('TbOrder') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>