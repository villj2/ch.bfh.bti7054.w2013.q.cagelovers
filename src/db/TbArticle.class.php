<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class TbArticle extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='TbArticle';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='tb_article';
	const SQL_INSERT='INSERT INTO `tb_article` (`ID`,`Title`,`Description`,`Width`,`Height`,`Length`,`Weight`,`Price`) VALUES (?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `tb_article` (`Title`,`Description`,`Width`,`Height`,`Length`,`Weight`,`Price`) VALUES (?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `tb_article` SET `ID`=?,`Title`=?,`Description`=?,`Width`=?,`Height`=?,`Length`=?,`Weight`=?,`Price`=? WHERE `ID`=?';
	const SQL_SELECT_PK='SELECT * FROM `tb_article` WHERE `ID`=?';
	const SQL_DELETE_PK='DELETE FROM `tb_article` WHERE `ID`=?';
	const FIELD_ID=1343411076;
	const FIELD_TITLE=1065476911;
	const FIELD_DESCRIPTION=-969996397;
	const FIELD_WIDTH=1068232349;
	const FIELD_HEIGHT=-1677530320;
	const FIELD_LENGTH=-1562864401;
	const FIELD_WEIGHT=-1248093055;
	const FIELD_PRICE=1062040096;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'ID',
		self::FIELD_TITLE=>'Title',
		self::FIELD_DESCRIPTION=>'Description',
		self::FIELD_WIDTH=>'Width',
		self::FIELD_HEIGHT=>'Height',
		self::FIELD_LENGTH=>'Length',
		self::FIELD_WEIGHT=>'Weight',
		self::FIELD_PRICE=>'Price');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_TITLE=>'Title',
		self::FIELD_DESCRIPTION=>'Description',
		self::FIELD_WIDTH=>'Width',
		self::FIELD_HEIGHT=>'Height',
		self::FIELD_LENGTH=>'Length',
		self::FIELD_WEIGHT=>'Weight',
		self::FIELD_PRICE=>'Price');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_TITLE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DESCRIPTION=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_WIDTH=>Db2PhpEntity::PHP_TYPE_FLOAT,
		self::FIELD_HEIGHT=>Db2PhpEntity::PHP_TYPE_FLOAT,
		self::FIELD_LENGTH=>Db2PhpEntity::PHP_TYPE_FLOAT,
		self::FIELD_WEIGHT=>Db2PhpEntity::PHP_TYPE_FLOAT,
		self::FIELD_PRICE=>Db2PhpEntity::PHP_TYPE_FLOAT);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_TITLE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_DESCRIPTION=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,8000,0,true),
		self::FIELD_WIDTH=>array(Db2PhpEntity::JDBC_TYPE_DECIMAL,10,0,true),
		self::FIELD_HEIGHT=>array(Db2PhpEntity::JDBC_TYPE_DECIMAL,10,0,true),
		self::FIELD_LENGTH=>array(Db2PhpEntity::JDBC_TYPE_DECIMAL,10,0,true),
		self::FIELD_WEIGHT=>array(Db2PhpEntity::JDBC_TYPE_DECIMAL,10,0,true),
		self::FIELD_PRICE=>array(Db2PhpEntity::JDBC_TYPE_DECIMAL,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_TITLE=>null,
		self::FIELD_DESCRIPTION=>null,
		self::FIELD_WIDTH=>null,
		self::FIELD_HEIGHT=>null,
		self::FIELD_LENGTH=>null,
		self::FIELD_WEIGHT=>null,
		self::FIELD_PRICE=>null);
	private $id;
	private $Title;
	private $Description;
	private $Width;
	private $Height;
	private $Length;
	private $Weight;
	private $Price;

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
	 * set value for Title 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $Title
	 */
	public function setTitle($Title) {
		$this->Title=$Title;
	}

	/**
	 * get value for Title 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTitle() {
		return $this->Title;
	}

	/**
	 * set value for Description 
	 *
	 * type:VARCHAR,size:8000,default:null,nullable
	 *
	 * @param mixed $Description
	 */
	public function setDescription($Description) {
		$this->Description=$Description;
	}

	/**
	 * get value for Description 
	 *
	 * type:VARCHAR,size:8000,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getDescription() {
		return $this->Description;
	}

	/**
	 * set value for Width 
	 *
	 * type:DECIMAL,size:10,default:null,nullable
	 *
	 * @param mixed $Width
	 */
	public function setWidth($Width) {
		$this->Width=$Width;
	}

	/**
	 * get value for Width 
	 *
	 * type:DECIMAL,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getWidth() {
		return $this->Width;
	}

	/**
	 * set value for Height 
	 *
	 * type:DECIMAL,size:10,default:null,nullable
	 *
	 * @param mixed $Height
	 */
	public function setHeight($Height) {
		$this->Height=$Height;
	}

	/**
	 * get value for Height 
	 *
	 * type:DECIMAL,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getHeight() {
		return $this->Height;
	}

	/**
	 * set value for Length 
	 *
	 * type:DECIMAL,size:10,default:null,nullable
	 *
	 * @param mixed $Length
	 */
	public function setLength($Length) {
		$this->Length=$Length;
	}

	/**
	 * get value for Length 
	 *
	 * type:DECIMAL,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getLength() {
		return $this->Length;
	}

	/**
	 * set value for Weight 
	 *
	 * type:DECIMAL,size:10,default:null,nullable
	 *
	 * @param mixed $Weight
	 */
	public function setWeight($Weight) {
		$this->Weight=$Weight;
	}

	/**
	 * get value for Weight 
	 *
	 * type:DECIMAL,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getWeight() {
		return $this->Weight;
	}

	/**
	 * set value for Price 
	 *
	 * type:DECIMAL,size:10,default:null,nullable
	 *
	 * @param mixed $Price
	 */
	public function setPrice($Price) {
		$this->Price=$Price;
	}

	/**
	 * get value for Price 
	 *
	 * type:DECIMAL,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPrice() {
		return $this->Price;
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
			self::FIELD_TITLE=>$this->getTitle(),
			self::FIELD_DESCRIPTION=>$this->getDescription(),
			self::FIELD_WIDTH=>$this->getWidth(),
			self::FIELD_HEIGHT=>$this->getHeight(),
			self::FIELD_LENGTH=>$this->getLength(),
			self::FIELD_WEIGHT=>$this->getWeight(),
			self::FIELD_PRICE=>$this->getPrice());
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
	 * Match by attributes of passed example instance and return matched rows as an array of TbArticle instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param TbArticle $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return TbArticle[]
	 */
	public static function findByExample(PDO $db,TbArticle $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of TbArticle instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return TbArticle[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `tb_article`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of TbArticle instances
	 *
	 * @param PDOStatement $stmt
	 * @return TbArticle[]
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
	 * returns the result as an array of TbArticle instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return TbArticle[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new TbArticle();
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
	 * Execute select query and return matched rows as an array of TbArticle instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return TbArticle[]
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
		$sql='DELETE FROM `tb_article`'
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
		$this->setTitle($result['Title']);
		$this->setDescription($result['Description']);
		$this->setWidth($result['Width']);
		$this->setHeight($result['Height']);
		$this->setLength($result['Length']);
		$this->setWeight($result['Weight']);
		$this->setPrice($result['Price']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return TbArticle
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
		$o=new TbArticle();
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
		$stmt->bindValue(2,$this->getTitle());
		$stmt->bindValue(3,$this->getDescription());
		$stmt->bindValue(4,$this->getWidth());
		$stmt->bindValue(5,$this->getHeight());
		$stmt->bindValue(6,$this->getLength());
		$stmt->bindValue(7,$this->getWeight());
		$stmt->bindValue(8,$this->getPrice());
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
			$stmt->bindValue(1,$this->getTitle());
			$stmt->bindValue(2,$this->getDescription());
			$stmt->bindValue(3,$this->getWidth());
			$stmt->bindValue(4,$this->getHeight());
			$stmt->bindValue(5,$this->getLength());
			$stmt->bindValue(6,$this->getWeight());
			$stmt->bindValue(7,$this->getPrice());
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
		$stmt->bindValue(9,$this->getId());
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
		return self::hashToDomDocument($this->toHash(), 'TbArticle');
	}

	/**
	 * get single TbArticle instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return TbArticle
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new TbArticle();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of TbArticle from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return TbArticle[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('TbArticle') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>