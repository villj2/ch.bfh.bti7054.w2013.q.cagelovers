<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class TbMail extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='TbMail';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='tb_mail';
	const SQL_INSERT='INSERT INTO `tb_mail` (`ID`,`mailType`,`mailTo`,`mailCC`,`mailBCC`,`mailSubject`,`mailBody`,`mailSent`,`mailSentTM`) VALUES (?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `tb_mail` (`mailType`,`mailTo`,`mailCC`,`mailBCC`,`mailSubject`,`mailBody`,`mailSent`,`mailSentTM`) VALUES (?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `tb_mail` SET `ID`=?,`mailType`=?,`mailTo`=?,`mailCC`=?,`mailBCC`=?,`mailSubject`=?,`mailBody`=?,`mailSent`=?,`mailSentTM`=? WHERE `ID`=?';
	const SQL_SELECT_PK='SELECT * FROM `tb_mail` WHERE `ID`=?';
	const SQL_DELETE_PK='DELETE FROM `tb_mail` WHERE `ID`=?';
	const FIELD_ID=831530977;
	const FIELD_MAILTYPE=-1443444777;
	const FIELD_MAILTO=1522518616;
	const FIELD_MAILCC=1522518045;
	const FIELD_MAILBCC=-46581755;
	const FIELD_MAILSUBJECT=-1465484433;
	const FIELD_MAILBODY=-1443990977;
	const FIELD_MAILSENT=-1443493835;
	const FIELD_MAILSENTTM=76863854;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'ID',
		self::FIELD_MAILTYPE=>'mailType',
		self::FIELD_MAILTO=>'mailTo',
		self::FIELD_MAILCC=>'mailCC',
		self::FIELD_MAILBCC=>'mailBCC',
		self::FIELD_MAILSUBJECT=>'mailSubject',
		self::FIELD_MAILBODY=>'mailBody',
		self::FIELD_MAILSENT=>'mailSent',
		self::FIELD_MAILSENTTM=>'mailSentTM');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_MAILTYPE=>'mailType',
		self::FIELD_MAILTO=>'mailTo',
		self::FIELD_MAILCC=>'mailCC',
		self::FIELD_MAILBCC=>'mailBCC',
		self::FIELD_MAILSUBJECT=>'mailSubject',
		self::FIELD_MAILBODY=>'mailBody',
		self::FIELD_MAILSENT=>'mailSent',
		self::FIELD_MAILSENTTM=>'mailSentTM');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_MAILTYPE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_MAILTO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_MAILCC=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_MAILBCC=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_MAILSUBJECT=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_MAILBODY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_MAILSENT=>Db2PhpEntity::PHP_TYPE_BOOL,
		self::FIELD_MAILSENTTM=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_MAILTYPE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,3,0,false),
		self::FIELD_MAILTO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,500,0,false),
		self::FIELD_MAILCC=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,500,0,true),
		self::FIELD_MAILBCC=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,500,0,true),
		self::FIELD_MAILSUBJECT=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,500,0,true),
		self::FIELD_MAILBODY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,8000,0,true),
		self::FIELD_MAILSENT=>array(Db2PhpEntity::JDBC_TYPE_BIT,1,0,false),
		self::FIELD_MAILSENTTM=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_MAILTYPE=>'',
		self::FIELD_MAILTO=>'',
		self::FIELD_MAILCC=>null,
		self::FIELD_MAILBCC=>null,
		self::FIELD_MAILSUBJECT=>null,
		self::FIELD_MAILBODY=>null,
		self::FIELD_MAILSENT=>'b\'0\'',
		self::FIELD_MAILSENTTM=>'CURRENT_TIMESTAMP');
	private $id;
	private $mailType;
	private $mailTo;
	private $mailCC;
	private $mailBCC;
	private $mailSubject;
	private $mailBody;
	private $mailSent;
	private $mailSentTM;

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
	 * set value for mailType 
	 *
	 * type:VARCHAR,size:3,default:null
	 *
	 * @param mixed $mailType
	 */
	public function setMailType($mailType) {
		$this->mailType=$mailType;
	}

	/**
	 * get value for mailType 
	 *
	 * type:VARCHAR,size:3,default:null
	 *
	 * @return mixed
	 */
	public function getMailType() {
		return $this->mailType;
	}

	/**
	 * set value for mailTo 
	 *
	 * type:VARCHAR,size:500,default:null
	 *
	 * @param mixed $mailTo
	 */
	public function setMailTo($mailTo) {
		$this->mailTo=$mailTo;
	}

	/**
	 * get value for mailTo 
	 *
	 * type:VARCHAR,size:500,default:null
	 *
	 * @return mixed
	 */
	public function getMailTo() {
		return $this->mailTo;
	}

	/**
	 * set value for mailCC 
	 *
	 * type:VARCHAR,size:500,default:null,nullable
	 *
	 * @param mixed $mailCC
	 */
	public function setMailCC($mailCC) {
		$this->mailCC=$mailCC;
	}

	/**
	 * get value for mailCC 
	 *
	 * type:VARCHAR,size:500,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getMailCC() {
		return $this->mailCC;
	}

	/**
	 * set value for mailBCC 
	 *
	 * type:VARCHAR,size:500,default:null,nullable
	 *
	 * @param mixed $mailBCC
	 */
	public function setMailBCC($mailBCC) {
		$this->mailBCC=$mailBCC;
	}

	/**
	 * get value for mailBCC 
	 *
	 * type:VARCHAR,size:500,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getMailBCC() {
		return $this->mailBCC;
	}

	/**
	 * set value for mailSubject 
	 *
	 * type:VARCHAR,size:500,default:null,nullable
	 *
	 * @param mixed $mailSubject
	 */
	public function setMailSubject($mailSubject) {
		$this->mailSubject=$mailSubject;
	}

	/**
	 * get value for mailSubject 
	 *
	 * type:VARCHAR,size:500,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getMailSubject() {
		return $this->mailSubject;
	}

	/**
	 * set value for mailBody 
	 *
	 * type:VARCHAR,size:8000,default:null,nullable
	 *
	 * @param mixed $mailBody
	 */
	public function setMailBody($mailBody) {
		$this->mailBody=$mailBody;
	}

	/**
	 * get value for mailBody 
	 *
	 * type:VARCHAR,size:8000,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getMailBody() {
		return $this->mailBody;
	}

	/**
	 * set value for mailSent 
	 *
	 * type:BIT,size:1,default:b'0'
	 *
	 * @param mixed $mailSent
	 */
	public function setMailSent($mailSent) {
		$this->mailSent=$mailSent;
	}

	/**
	 * get value for mailSent 
	 *
	 * type:BIT,size:1,default:b'0'
	 *
	 * @return mixed
	 */
	public function getMailSent() {
		return $this->mailSent;
	}

	/**
	 * set value for mailSentTM 
	 *
	 * type:TIMESTAMP,size:19,default:CURRENT_TIMESTAMP,nullable
	 *
	 * @param mixed $mailSentTM
	 */
	public function setMailSentTM($mailSentTM) {
		$this->mailSentTM=$mailSentTM;
	}

	/**
	 * get value for mailSentTM 
	 *
	 * type:TIMESTAMP,size:19,default:CURRENT_TIMESTAMP,nullable
	 *
	 * @return mixed
	 */
	public function getMailSentTM() {
		return $this->mailSentTM;
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
			self::FIELD_MAILTYPE=>$this->getMailType(),
			self::FIELD_MAILTO=>$this->getMailTo(),
			self::FIELD_MAILCC=>$this->getMailCC(),
			self::FIELD_MAILBCC=>$this->getMailBCC(),
			self::FIELD_MAILSUBJECT=>$this->getMailSubject(),
			self::FIELD_MAILBODY=>$this->getMailBody(),
			self::FIELD_MAILSENT=>$this->getMailSent(),
			self::FIELD_MAILSENTTM=>$this->getMailSentTM());
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
	 * Match by attributes of passed example instance and return matched rows as an array of TbMail instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param TbMail $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return TbMail[]
	 */
	public static function findByExample(PDO $db,TbMail $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of TbMail instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return TbMail[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `tb_mail`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of TbMail instances
	 *
	 * @param PDOStatement $stmt
	 * @return TbMail[]
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
	 * returns the result as an array of TbMail instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return TbMail[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new TbMail();
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
	 * Execute select query and return matched rows as an array of TbMail instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return TbMail[]
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
		$sql='DELETE FROM `tb_mail`'
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
		$this->setMailType($result['mailType']);
		$this->setMailTo($result['mailTo']);
		$this->setMailCC($result['mailCC']);
		$this->setMailBCC($result['mailBCC']);
		$this->setMailSubject($result['mailSubject']);
		$this->setMailBody($result['mailBody']);
		$this->setMailSent($result['mailSent']);
		$this->setMailSentTM($result['mailSentTM']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return TbMail
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
		$o=new TbMail();
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
		$stmt->bindValue(2,$this->getMailType());
		$stmt->bindValue(3,$this->getMailTo());
		$stmt->bindValue(4,$this->getMailCC());
		$stmt->bindValue(5,$this->getMailBCC());
		$stmt->bindValue(6,$this->getMailSubject());
		$stmt->bindValue(7,$this->getMailBody());
		$stmt->bindValue(8,$this->getMailSent());
		$stmt->bindValue(9,$this->getMailSentTM());
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
			$stmt->bindValue(1,$this->getMailType());
			$stmt->bindValue(2,$this->getMailTo());
			$stmt->bindValue(3,$this->getMailCC());
			$stmt->bindValue(4,$this->getMailBCC());
			$stmt->bindValue(5,$this->getMailSubject());
			$stmt->bindValue(6,$this->getMailBody());
			$stmt->bindValue(7,$this->getMailSent());
			$stmt->bindValue(8,$this->getMailSentTM());
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
		$stmt->bindValue(10,$this->getId());
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
		return self::hashToDomDocument($this->toHash(), 'TbMail');
	}

	/**
	 * get single TbMail instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return TbMail
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new TbMail();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of TbMail from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return TbMail[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('TbMail') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>