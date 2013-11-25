<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class TbUser extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='TbUser';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='tb_user';
	const SQL_INSERT='INSERT INTO `tb_user` (`ID`,`mail`,`password`,`name1`,`name2`,`street`,`city`,`zip`,`country`,`createdTM`) VALUES (?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `tb_user` (`mail`,`password`,`name1`,`name2`,`street`,`city`,`zip`,`country`,`createdTM`) VALUES (?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `tb_user` SET `ID`=?,`mail`=?,`password`=?,`name1`=?,`name2`=?,`street`=?,`city`=?,`zip`=?,`country`=?,`createdTM`=? WHERE `ID`=?';
	const SQL_SELECT_PK='SELECT * FROM `tb_user` WHERE `ID`=?';
	const SQL_DELETE_PK='DELETE FROM `tb_user` WHERE `ID`=?';
	const FIELD_ID=-146564787;
	const FIELD_MAIL=886264169;
	const FIELD_PASSWORD=1473830221;
	const FIELD_NAME1=1705312660;
	const FIELD_NAME2=1705312661;
	const FIELD_STREET=1485928245;
	const FIELD_CITY=885974301;
	const FIELD_ZIP=-248492753;
	const FIELD_COUNTRY=1658853028;
	const FIELD_CREATEDTM=-29383953;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'ID',
		self::FIELD_MAIL=>'mail',
		self::FIELD_PASSWORD=>'password',
		self::FIELD_NAME1=>'name1',
		self::FIELD_NAME2=>'name2',
		self::FIELD_STREET=>'street',
		self::FIELD_CITY=>'city',
		self::FIELD_ZIP=>'zip',
		self::FIELD_COUNTRY=>'country',
		self::FIELD_CREATEDTM=>'createdTM');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_MAIL=>'mail',
		self::FIELD_PASSWORD=>'password',
		self::FIELD_NAME1=>'name1',
		self::FIELD_NAME2=>'name2',
		self::FIELD_STREET=>'street',
		self::FIELD_CITY=>'city',
		self::FIELD_ZIP=>'zip',
		self::FIELD_COUNTRY=>'country',
		self::FIELD_CREATEDTM=>'createdTM');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_MAIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PASSWORD=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_NAME1=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_NAME2=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_STREET=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CITY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ZIP=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_COUNTRY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CREATEDTM=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_MAIL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_PASSWORD=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,false),
		self::FIELD_NAME1=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_NAME2=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_STREET=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_CITY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_ZIP=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_COUNTRY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,2,0,false),
		self::FIELD_CREATEDTM=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_MAIL=>'',
		self::FIELD_PASSWORD=>'',
		self::FIELD_NAME1=>'',
		self::FIELD_NAME2=>'',
		self::FIELD_STREET=>'',
		self::FIELD_CITY=>'',
		self::FIELD_ZIP=>0,
		self::FIELD_COUNTRY=>'CH',
		self::FIELD_CREATEDTM=>'CURRENT_TIMESTAMP');
	private $id;
	private $mail;
	private $password;
	private $name1;
	private $name2;
	private $street;
	private $city;
	private $zip;
	private $country;
	private $createdTM;

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
	 * set value for mail 
	 *
	 * type:VARCHAR,size:255,default:null,index
	 *
	 * @param mixed $mail
	 */
	public function setMail($mail) {
		$this->mail=$mail;
	}

	/**
	 * get value for mail 
	 *
	 * type:VARCHAR,size:255,default:null,index
	 *
	 * @return mixed
	 */
	public function getMail() {
		return $this->mail;
	}

	/**
	 * set value for password 
	 *
	 * type:VARCHAR,size:50,default:null
	 *
	 * @param mixed $password
	 */
	public function setPassword($password) {
		$this->password=$password;
	}

	/**
	 * get value for password 
	 *
	 * type:VARCHAR,size:50,default:null
	 *
	 * @return mixed
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * set value for name1 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $name1
	 */
	public function setName1($name1) {
		$this->name1=$name1;
	}

	/**
	 * get value for name1 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getName1() {
		return $this->name1;
	}

	/**
	 * set value for name2 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $name2
	 */
	public function setName2($name2) {
		$this->name2=$name2;
	}

	/**
	 * get value for name2 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getName2() {
		return $this->name2;
	}

	/**
	 * set value for street 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $street
	 */
	public function setStreet($street) {
		$this->street=$street;
	}

	/**
	 * get value for street 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getStreet() {
		return $this->street;
	}

	/**
	 * set value for city 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $city
	 */
	public function setCity($city) {
		$this->city=$city;
	}

	/**
	 * get value for city 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * set value for zip 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @param mixed $zip
	 */
	public function setZip($zip) {
		$this->zip=$zip;
	}

	/**
	 * get value for zip 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getZip() {
		return $this->zip;
	}

	/**
	 * set value for country 
	 *
	 * type:VARCHAR,size:2,default:CH
	 *
	 * @param mixed $country
	 */
	public function setCountry($country) {
		$this->country=$country;
	}

	/**
	 * get value for country 
	 *
	 * type:VARCHAR,size:2,default:CH
	 *
	 * @return mixed
	 */
	public function getCountry() {
		return $this->country;
	}

	/**
	 * set value for createdTM 
	 *
	 * type:TIMESTAMP,size:19,default:CURRENT_TIMESTAMP
	 *
	 * @param mixed $createdTM
	 */
	public function setCreatedTM($createdTM) {
		$this->createdTM=$createdTM;
	}

	/**
	 * get value for createdTM 
	 *
	 * type:TIMESTAMP,size:19,default:CURRENT_TIMESTAMP
	 *
	 * @return mixed
	 */
	public function getCreatedTM() {
		return $this->createdTM;
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
			self::FIELD_MAIL=>$this->getMail(),
			self::FIELD_PASSWORD=>$this->getPassword(),
			self::FIELD_NAME1=>$this->getName1(),
			self::FIELD_NAME2=>$this->getName2(),
			self::FIELD_STREET=>$this->getStreet(),
			self::FIELD_CITY=>$this->getCity(),
			self::FIELD_ZIP=>$this->getZip(),
			self::FIELD_COUNTRY=>$this->getCountry(),
			self::FIELD_CREATEDTM=>$this->getCreatedTM());
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
	 * Match by attributes of passed example instance and return matched rows as an array of TbUser instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param TbUser $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return TbUser[]
	 */
	public static function findByExample(PDO $db,TbUser $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of TbUser instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return TbUser[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `tb_user`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of TbUser instances
	 *
	 * @param PDOStatement $stmt
	 * @return TbUser[]
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
	 * returns the result as an array of TbUser instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return TbUser[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new TbUser();
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
	 * Execute select query and return matched rows as an array of TbUser instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return TbUser[]
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
		$sql='DELETE FROM `tb_user`'
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
		$this->setMail($result['mail']);
		$this->setPassword($result['password']);
		$this->setName1($result['name1']);
		$this->setName2($result['name2']);
		$this->setStreet($result['street']);
		$this->setCity($result['city']);
		$this->setZip($result['zip']);
		$this->setCountry($result['country']);
		$this->setCreatedTM($result['createdTM']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return TbUser
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
		$o=new TbUser();
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
		$stmt->bindValue(2,$this->getMail());
		$stmt->bindValue(3,$this->getPassword());
		$stmt->bindValue(4,$this->getName1());
		$stmt->bindValue(5,$this->getName2());
		$stmt->bindValue(6,$this->getStreet());
		$stmt->bindValue(7,$this->getCity());
		$stmt->bindValue(8,$this->getZip());
		$stmt->bindValue(9,$this->getCountry());
		$stmt->bindValue(10,$this->getCreatedTM());
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
			$stmt->bindValue(1,$this->getMail());
			$stmt->bindValue(2,$this->getPassword());
			$stmt->bindValue(3,$this->getName1());
			$stmt->bindValue(4,$this->getName2());
			$stmt->bindValue(5,$this->getStreet());
			$stmt->bindValue(6,$this->getCity());
			$stmt->bindValue(7,$this->getZip());
			$stmt->bindValue(8,$this->getCountry());
			$stmt->bindValue(9,$this->getCreatedTM());
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
		$stmt->bindValue(11,$this->getId());
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
		return self::hashToDomDocument($this->toHash(), 'TbUser');
	}

	/**
	 * get single TbUser instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return TbUser
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new TbUser();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of TbUser from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return TbUser[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('TbUser') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>