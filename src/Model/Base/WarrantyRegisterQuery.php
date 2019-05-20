<?php

namespace Base;

use \WarrantyRegister as ChildWarrantyRegister;
use \WarrantyRegisterQuery as ChildWarrantyRegisterQuery;
use \Exception;
use \PDO;
use Map\WarrantyRegisterTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'warranty_register' table.
 *
 *
 *
 * @method     ChildWarrantyRegisterQuery orderByDate($order = Criteria::ASC) Order by the Date column
 * @method     ChildWarrantyRegisterQuery orderByTime($order = Criteria::ASC) Order by the Time column
 * @method     ChildWarrantyRegisterQuery orderByRecnbr($order = Criteria::ASC) Order by the Recnbr column
 * @method     ChildWarrantyRegisterQuery orderBySerialnbr($order = Criteria::ASC) Order by the SerialNbr column
 * @method     ChildWarrantyRegisterQuery orderByItemnbr($order = Criteria::ASC) Order by the ItemNbr column
 * @method     ChildWarrantyRegisterQuery orderByInvoicenbr($order = Criteria::ASC) Order by the InvoiceNbr column
 * @method     ChildWarrantyRegisterQuery orderByInvoicedate($order = Criteria::ASC) Order by the InvoiceDate column
 * @method     ChildWarrantyRegisterQuery orderByRegistermotor($order = Criteria::ASC) Order by the RegisterMotor column
 * @method     ChildWarrantyRegisterQuery orderByFirstname($order = Criteria::ASC) Order by the FirstName column
 * @method     ChildWarrantyRegisterQuery orderByMiddlename($order = Criteria::ASC) Order by the MiddleName column
 * @method     ChildWarrantyRegisterQuery orderByLastname($order = Criteria::ASC) Order by the LastName column
 * @method     ChildWarrantyRegisterQuery orderByAdr1($order = Criteria::ASC) Order by the Adr1 column
 * @method     ChildWarrantyRegisterQuery orderByAdr2($order = Criteria::ASC) Order by the Adr2 column
 * @method     ChildWarrantyRegisterQuery orderByCity($order = Criteria::ASC) Order by the City column
 * @method     ChildWarrantyRegisterQuery orderByState($order = Criteria::ASC) Order by the State column
 * @method     ChildWarrantyRegisterQuery orderByZip($order = Criteria::ASC) Order by the Zip column
 * @method     ChildWarrantyRegisterQuery orderByEmail($order = Criteria::ASC) Order by the Email column
 * @method     ChildWarrantyRegisterQuery orderByPhone($order = Criteria::ASC) Order by the Phone column
 * @method     ChildWarrantyRegisterQuery orderBySaledate($order = Criteria::ASC) Order by the SaleDate column
 * @method     ChildWarrantyRegisterQuery orderByEngserialnbr($order = Criteria::ASC) Order by the EngSerialNbr column
 * @method     ChildWarrantyRegisterQuery orderByEnghorsepower($order = Criteria::ASC) Order by the EngHorsePower column
 * @method     ChildWarrantyRegisterQuery orderByEngmodelyear($order = Criteria::ASC) Order by the EngModelYear column
 * @method     ChildWarrantyRegisterQuery orderByEngdesc($order = Criteria::ASC) Order by the EngDesc column
 * @method     ChildWarrantyRegisterQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildWarrantyRegisterQuery groupByDate() Group by the Date column
 * @method     ChildWarrantyRegisterQuery groupByTime() Group by the Time column
 * @method     ChildWarrantyRegisterQuery groupByRecnbr() Group by the Recnbr column
 * @method     ChildWarrantyRegisterQuery groupBySerialnbr() Group by the SerialNbr column
 * @method     ChildWarrantyRegisterQuery groupByItemnbr() Group by the ItemNbr column
 * @method     ChildWarrantyRegisterQuery groupByInvoicenbr() Group by the InvoiceNbr column
 * @method     ChildWarrantyRegisterQuery groupByInvoicedate() Group by the InvoiceDate column
 * @method     ChildWarrantyRegisterQuery groupByRegistermotor() Group by the RegisterMotor column
 * @method     ChildWarrantyRegisterQuery groupByFirstname() Group by the FirstName column
 * @method     ChildWarrantyRegisterQuery groupByMiddlename() Group by the MiddleName column
 * @method     ChildWarrantyRegisterQuery groupByLastname() Group by the LastName column
 * @method     ChildWarrantyRegisterQuery groupByAdr1() Group by the Adr1 column
 * @method     ChildWarrantyRegisterQuery groupByAdr2() Group by the Adr2 column
 * @method     ChildWarrantyRegisterQuery groupByCity() Group by the City column
 * @method     ChildWarrantyRegisterQuery groupByState() Group by the State column
 * @method     ChildWarrantyRegisterQuery groupByZip() Group by the Zip column
 * @method     ChildWarrantyRegisterQuery groupByEmail() Group by the Email column
 * @method     ChildWarrantyRegisterQuery groupByPhone() Group by the Phone column
 * @method     ChildWarrantyRegisterQuery groupBySaledate() Group by the SaleDate column
 * @method     ChildWarrantyRegisterQuery groupByEngserialnbr() Group by the EngSerialNbr column
 * @method     ChildWarrantyRegisterQuery groupByEnghorsepower() Group by the EngHorsePower column
 * @method     ChildWarrantyRegisterQuery groupByEngmodelyear() Group by the EngModelYear column
 * @method     ChildWarrantyRegisterQuery groupByEngdesc() Group by the EngDesc column
 * @method     ChildWarrantyRegisterQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildWarrantyRegisterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildWarrantyRegisterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildWarrantyRegisterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildWarrantyRegisterQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildWarrantyRegisterQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildWarrantyRegisterQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildWarrantyRegister findOne(ConnectionInterface $con = null) Return the first ChildWarrantyRegister matching the query
 * @method     ChildWarrantyRegister findOneOrCreate(ConnectionInterface $con = null) Return the first ChildWarrantyRegister matching the query, or a new ChildWarrantyRegister object populated from the query conditions when no match is found
 *
 * @method     ChildWarrantyRegister findOneByDate(int $Date) Return the first ChildWarrantyRegister filtered by the Date column
 * @method     ChildWarrantyRegister findOneByTime(int $Time) Return the first ChildWarrantyRegister filtered by the Time column
 * @method     ChildWarrantyRegister findOneByRecnbr(int $Recnbr) Return the first ChildWarrantyRegister filtered by the Recnbr column
 * @method     ChildWarrantyRegister findOneBySerialnbr(string $SerialNbr) Return the first ChildWarrantyRegister filtered by the SerialNbr column
 * @method     ChildWarrantyRegister findOneByItemnbr(string $ItemNbr) Return the first ChildWarrantyRegister filtered by the ItemNbr column
 * @method     ChildWarrantyRegister findOneByInvoicenbr(string $InvoiceNbr) Return the first ChildWarrantyRegister filtered by the InvoiceNbr column
 * @method     ChildWarrantyRegister findOneByInvoicedate(int $InvoiceDate) Return the first ChildWarrantyRegister filtered by the InvoiceDate column
 * @method     ChildWarrantyRegister findOneByRegistermotor(string $RegisterMotor) Return the first ChildWarrantyRegister filtered by the RegisterMotor column
 * @method     ChildWarrantyRegister findOneByFirstname(string $FirstName) Return the first ChildWarrantyRegister filtered by the FirstName column
 * @method     ChildWarrantyRegister findOneByMiddlename(string $MiddleName) Return the first ChildWarrantyRegister filtered by the MiddleName column
 * @method     ChildWarrantyRegister findOneByLastname(string $LastName) Return the first ChildWarrantyRegister filtered by the LastName column
 * @method     ChildWarrantyRegister findOneByAdr1(string $Adr1) Return the first ChildWarrantyRegister filtered by the Adr1 column
 * @method     ChildWarrantyRegister findOneByAdr2(string $Adr2) Return the first ChildWarrantyRegister filtered by the Adr2 column
 * @method     ChildWarrantyRegister findOneByCity(string $City) Return the first ChildWarrantyRegister filtered by the City column
 * @method     ChildWarrantyRegister findOneByState(string $State) Return the first ChildWarrantyRegister filtered by the State column
 * @method     ChildWarrantyRegister findOneByZip(string $Zip) Return the first ChildWarrantyRegister filtered by the Zip column
 * @method     ChildWarrantyRegister findOneByEmail(string $Email) Return the first ChildWarrantyRegister filtered by the Email column
 * @method     ChildWarrantyRegister findOneByPhone(string $Phone) Return the first ChildWarrantyRegister filtered by the Phone column
 * @method     ChildWarrantyRegister findOneBySaledate(int $SaleDate) Return the first ChildWarrantyRegister filtered by the SaleDate column
 * @method     ChildWarrantyRegister findOneByEngserialnbr(string $EngSerialNbr) Return the first ChildWarrantyRegister filtered by the EngSerialNbr column
 * @method     ChildWarrantyRegister findOneByEnghorsepower(string $EngHorsePower) Return the first ChildWarrantyRegister filtered by the EngHorsePower column
 * @method     ChildWarrantyRegister findOneByEngmodelyear(int $EngModelYear) Return the first ChildWarrantyRegister filtered by the EngModelYear column
 * @method     ChildWarrantyRegister findOneByEngdesc(string $EngDesc) Return the first ChildWarrantyRegister filtered by the EngDesc column
 * @method     ChildWarrantyRegister findOneByDummy(string $dummy) Return the first ChildWarrantyRegister filtered by the dummy column *

 * @method     ChildWarrantyRegister requirePk($key, ConnectionInterface $con = null) Return the ChildWarrantyRegister by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOne(ConnectionInterface $con = null) Return the first ChildWarrantyRegister matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWarrantyRegister requireOneByDate(int $Date) Return the first ChildWarrantyRegister filtered by the Date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByTime(int $Time) Return the first ChildWarrantyRegister filtered by the Time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByRecnbr(int $Recnbr) Return the first ChildWarrantyRegister filtered by the Recnbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneBySerialnbr(string $SerialNbr) Return the first ChildWarrantyRegister filtered by the SerialNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByItemnbr(string $ItemNbr) Return the first ChildWarrantyRegister filtered by the ItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByInvoicenbr(string $InvoiceNbr) Return the first ChildWarrantyRegister filtered by the InvoiceNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByInvoicedate(int $InvoiceDate) Return the first ChildWarrantyRegister filtered by the InvoiceDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByRegistermotor(string $RegisterMotor) Return the first ChildWarrantyRegister filtered by the RegisterMotor column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByFirstname(string $FirstName) Return the first ChildWarrantyRegister filtered by the FirstName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByMiddlename(string $MiddleName) Return the first ChildWarrantyRegister filtered by the MiddleName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByLastname(string $LastName) Return the first ChildWarrantyRegister filtered by the LastName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByAdr1(string $Adr1) Return the first ChildWarrantyRegister filtered by the Adr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByAdr2(string $Adr2) Return the first ChildWarrantyRegister filtered by the Adr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByCity(string $City) Return the first ChildWarrantyRegister filtered by the City column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByState(string $State) Return the first ChildWarrantyRegister filtered by the State column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByZip(string $Zip) Return the first ChildWarrantyRegister filtered by the Zip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByEmail(string $Email) Return the first ChildWarrantyRegister filtered by the Email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByPhone(string $Phone) Return the first ChildWarrantyRegister filtered by the Phone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneBySaledate(int $SaleDate) Return the first ChildWarrantyRegister filtered by the SaleDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByEngserialnbr(string $EngSerialNbr) Return the first ChildWarrantyRegister filtered by the EngSerialNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByEnghorsepower(string $EngHorsePower) Return the first ChildWarrantyRegister filtered by the EngHorsePower column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByEngmodelyear(int $EngModelYear) Return the first ChildWarrantyRegister filtered by the EngModelYear column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByEngdesc(string $EngDesc) Return the first ChildWarrantyRegister filtered by the EngDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarrantyRegister requireOneByDummy(string $dummy) Return the first ChildWarrantyRegister filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWarrantyRegister[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildWarrantyRegister objects based on current ModelCriteria
 * @method     ChildWarrantyRegister[]|ObjectCollection findByDate(int $Date) Return ChildWarrantyRegister objects filtered by the Date column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByTime(int $Time) Return ChildWarrantyRegister objects filtered by the Time column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByRecnbr(int $Recnbr) Return ChildWarrantyRegister objects filtered by the Recnbr column
 * @method     ChildWarrantyRegister[]|ObjectCollection findBySerialnbr(string $SerialNbr) Return ChildWarrantyRegister objects filtered by the SerialNbr column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByItemnbr(string $ItemNbr) Return ChildWarrantyRegister objects filtered by the ItemNbr column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByInvoicenbr(string $InvoiceNbr) Return ChildWarrantyRegister objects filtered by the InvoiceNbr column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByInvoicedate(int $InvoiceDate) Return ChildWarrantyRegister objects filtered by the InvoiceDate column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByRegistermotor(string $RegisterMotor) Return ChildWarrantyRegister objects filtered by the RegisterMotor column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByFirstname(string $FirstName) Return ChildWarrantyRegister objects filtered by the FirstName column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByMiddlename(string $MiddleName) Return ChildWarrantyRegister objects filtered by the MiddleName column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByLastname(string $LastName) Return ChildWarrantyRegister objects filtered by the LastName column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByAdr1(string $Adr1) Return ChildWarrantyRegister objects filtered by the Adr1 column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByAdr2(string $Adr2) Return ChildWarrantyRegister objects filtered by the Adr2 column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByCity(string $City) Return ChildWarrantyRegister objects filtered by the City column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByState(string $State) Return ChildWarrantyRegister objects filtered by the State column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByZip(string $Zip) Return ChildWarrantyRegister objects filtered by the Zip column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByEmail(string $Email) Return ChildWarrantyRegister objects filtered by the Email column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByPhone(string $Phone) Return ChildWarrantyRegister objects filtered by the Phone column
 * @method     ChildWarrantyRegister[]|ObjectCollection findBySaledate(int $SaleDate) Return ChildWarrantyRegister objects filtered by the SaleDate column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByEngserialnbr(string $EngSerialNbr) Return ChildWarrantyRegister objects filtered by the EngSerialNbr column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByEnghorsepower(string $EngHorsePower) Return ChildWarrantyRegister objects filtered by the EngHorsePower column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByEngmodelyear(int $EngModelYear) Return ChildWarrantyRegister objects filtered by the EngModelYear column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByEngdesc(string $EngDesc) Return ChildWarrantyRegister objects filtered by the EngDesc column
 * @method     ChildWarrantyRegister[]|ObjectCollection findByDummy(string $dummy) Return ChildWarrantyRegister objects filtered by the dummy column
 * @method     ChildWarrantyRegister[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class WarrantyRegisterQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\WarrantyRegisterQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\WarrantyRegister', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildWarrantyRegisterQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildWarrantyRegisterQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildWarrantyRegisterQuery) {
            return $criteria;
        }
        $query = new ChildWarrantyRegisterQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array[$SerialNbr, $ItemNbr, $InvoiceNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildWarrantyRegister|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(WarrantyRegisterTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = WarrantyRegisterTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildWarrantyRegister A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT Date, Time, Recnbr, SerialNbr, ItemNbr, InvoiceNbr, InvoiceDate, RegisterMotor, FirstName, MiddleName, LastName, Adr1, Adr2, City, State, Zip, Email, Phone, SaleDate, EngSerialNbr, EngHorsePower, EngModelYear, EngDesc, dummy FROM warranty_register WHERE SerialNbr = :p0 AND ItemNbr = :p1 AND InvoiceNbr = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildWarrantyRegister $obj */
            $obj = new ChildWarrantyRegister();
            $obj->hydrate($row);
            WarrantyRegisterTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildWarrantyRegister|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(WarrantyRegisterTableMap::COL_SERIALNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(WarrantyRegisterTableMap::COL_ITEMNBR, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(WarrantyRegisterTableMap::COL_INVOICENBR, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(WarrantyRegisterTableMap::COL_SERIALNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(WarrantyRegisterTableMap::COL_ITEMNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(WarrantyRegisterTableMap::COL_INVOICENBR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the Date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate(1234); // WHERE Date = 1234
     * $query->filterByDate(array(12, 34)); // WHERE Date IN (12, 34)
     * $query->filterByDate(array('min' => 12)); // WHERE Date > 12
     * </code>
     *
     * @param     mixed $date The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(WarrantyRegisterTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(WarrantyRegisterTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_DATE, $date, $comparison);
    }

    /**
     * Filter the query on the Time column
     *
     * Example usage:
     * <code>
     * $query->filterByTime(1234); // WHERE Time = 1234
     * $query->filterByTime(array(12, 34)); // WHERE Time IN (12, 34)
     * $query->filterByTime(array('min' => 12)); // WHERE Time > 12
     * </code>
     *
     * @param     mixed $time The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByTime($time = null, $comparison = null)
    {
        if (is_array($time)) {
            $useMinMax = false;
            if (isset($time['min'])) {
                $this->addUsingAlias(WarrantyRegisterTableMap::COL_TIME, $time['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($time['max'])) {
                $this->addUsingAlias(WarrantyRegisterTableMap::COL_TIME, $time['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_TIME, $time, $comparison);
    }

    /**
     * Filter the query on the Recnbr column
     *
     * Example usage:
     * <code>
     * $query->filterByRecnbr(1234); // WHERE Recnbr = 1234
     * $query->filterByRecnbr(array(12, 34)); // WHERE Recnbr IN (12, 34)
     * $query->filterByRecnbr(array('min' => 12)); // WHERE Recnbr > 12
     * </code>
     *
     * @param     mixed $recnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByRecnbr($recnbr = null, $comparison = null)
    {
        if (is_array($recnbr)) {
            $useMinMax = false;
            if (isset($recnbr['min'])) {
                $this->addUsingAlias(WarrantyRegisterTableMap::COL_RECNBR, $recnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recnbr['max'])) {
                $this->addUsingAlias(WarrantyRegisterTableMap::COL_RECNBR, $recnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_RECNBR, $recnbr, $comparison);
    }

    /**
     * Filter the query on the SerialNbr column
     *
     * Example usage:
     * <code>
     * $query->filterBySerialnbr('fooValue');   // WHERE SerialNbr = 'fooValue'
     * $query->filterBySerialnbr('%fooValue%', Criteria::LIKE); // WHERE SerialNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $serialnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterBySerialnbr($serialnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($serialnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_SERIALNBR, $serialnbr, $comparison);
    }

    /**
     * Filter the query on the ItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnbr('fooValue');   // WHERE ItemNbr = 'fooValue'
     * $query->filterByItemnbr('%fooValue%', Criteria::LIKE); // WHERE ItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByItemnbr($itemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_ITEMNBR, $itemnbr, $comparison);
    }

    /**
     * Filter the query on the InvoiceNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInvoicenbr('fooValue');   // WHERE InvoiceNbr = 'fooValue'
     * $query->filterByInvoicenbr('%fooValue%', Criteria::LIKE); // WHERE InvoiceNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $invoicenbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByInvoicenbr($invoicenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($invoicenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_INVOICENBR, $invoicenbr, $comparison);
    }

    /**
     * Filter the query on the InvoiceDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInvoicedate(1234); // WHERE InvoiceDate = 1234
     * $query->filterByInvoicedate(array(12, 34)); // WHERE InvoiceDate IN (12, 34)
     * $query->filterByInvoicedate(array('min' => 12)); // WHERE InvoiceDate > 12
     * </code>
     *
     * @param     mixed $invoicedate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByInvoicedate($invoicedate = null, $comparison = null)
    {
        if (is_array($invoicedate)) {
            $useMinMax = false;
            if (isset($invoicedate['min'])) {
                $this->addUsingAlias(WarrantyRegisterTableMap::COL_INVOICEDATE, $invoicedate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($invoicedate['max'])) {
                $this->addUsingAlias(WarrantyRegisterTableMap::COL_INVOICEDATE, $invoicedate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_INVOICEDATE, $invoicedate, $comparison);
    }

    /**
     * Filter the query on the RegisterMotor column
     *
     * Example usage:
     * <code>
     * $query->filterByRegistermotor('fooValue');   // WHERE RegisterMotor = 'fooValue'
     * $query->filterByRegistermotor('%fooValue%', Criteria::LIKE); // WHERE RegisterMotor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $registermotor The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByRegistermotor($registermotor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($registermotor)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_REGISTERMOTOR, $registermotor, $comparison);
    }

    /**
     * Filter the query on the FirstName column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstname('fooValue');   // WHERE FirstName = 'fooValue'
     * $query->filterByFirstname('%fooValue%', Criteria::LIKE); // WHERE FirstName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firstname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByFirstname($firstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($firstname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_FIRSTNAME, $firstname, $comparison);
    }

    /**
     * Filter the query on the MiddleName column
     *
     * Example usage:
     * <code>
     * $query->filterByMiddlename('fooValue');   // WHERE MiddleName = 'fooValue'
     * $query->filterByMiddlename('%fooValue%', Criteria::LIKE); // WHERE MiddleName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $middlename The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByMiddlename($middlename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($middlename)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_MIDDLENAME, $middlename, $comparison);
    }

    /**
     * Filter the query on the LastName column
     *
     * Example usage:
     * <code>
     * $query->filterByLastname('fooValue');   // WHERE LastName = 'fooValue'
     * $query->filterByLastname('%fooValue%', Criteria::LIKE); // WHERE LastName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lastname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByLastname($lastname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lastname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_LASTNAME, $lastname, $comparison);
    }

    /**
     * Filter the query on the Adr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAdr1('fooValue');   // WHERE Adr1 = 'fooValue'
     * $query->filterByAdr1('%fooValue%', Criteria::LIKE); // WHERE Adr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByAdr1($adr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_ADR1, $adr1, $comparison);
    }

    /**
     * Filter the query on the Adr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAdr2('fooValue');   // WHERE Adr2 = 'fooValue'
     * $query->filterByAdr2('%fooValue%', Criteria::LIKE); // WHERE Adr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByAdr2($adr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_ADR2, $adr2, $comparison);
    }

    /**
     * Filter the query on the City column
     *
     * Example usage:
     * <code>
     * $query->filterByCity('fooValue');   // WHERE City = 'fooValue'
     * $query->filterByCity('%fooValue%', Criteria::LIKE); // WHERE City LIKE '%fooValue%'
     * </code>
     *
     * @param     string $city The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByCity($city = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($city)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_CITY, $city, $comparison);
    }

    /**
     * Filter the query on the State column
     *
     * Example usage:
     * <code>
     * $query->filterByState('fooValue');   // WHERE State = 'fooValue'
     * $query->filterByState('%fooValue%', Criteria::LIKE); // WHERE State LIKE '%fooValue%'
     * </code>
     *
     * @param     string $state The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByState($state = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($state)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_STATE, $state, $comparison);
    }

    /**
     * Filter the query on the Zip column
     *
     * Example usage:
     * <code>
     * $query->filterByZip('fooValue');   // WHERE Zip = 'fooValue'
     * $query->filterByZip('%fooValue%', Criteria::LIKE); // WHERE Zip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $zip The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByZip($zip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($zip)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_ZIP, $zip, $comparison);
    }

    /**
     * Filter the query on the Email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE Email = 'fooValue'
     * $query->filterByEmail('%fooValue%', Criteria::LIKE); // WHERE Email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the Phone column
     *
     * Example usage:
     * <code>
     * $query->filterByPhone('fooValue');   // WHERE Phone = 'fooValue'
     * $query->filterByPhone('%fooValue%', Criteria::LIKE); // WHERE Phone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phone The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByPhone($phone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phone)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_PHONE, $phone, $comparison);
    }

    /**
     * Filter the query on the SaleDate column
     *
     * Example usage:
     * <code>
     * $query->filterBySaledate(1234); // WHERE SaleDate = 1234
     * $query->filterBySaledate(array(12, 34)); // WHERE SaleDate IN (12, 34)
     * $query->filterBySaledate(array('min' => 12)); // WHERE SaleDate > 12
     * </code>
     *
     * @param     mixed $saledate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterBySaledate($saledate = null, $comparison = null)
    {
        if (is_array($saledate)) {
            $useMinMax = false;
            if (isset($saledate['min'])) {
                $this->addUsingAlias(WarrantyRegisterTableMap::COL_SALEDATE, $saledate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saledate['max'])) {
                $this->addUsingAlias(WarrantyRegisterTableMap::COL_SALEDATE, $saledate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_SALEDATE, $saledate, $comparison);
    }

    /**
     * Filter the query on the EngSerialNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByEngserialnbr('fooValue');   // WHERE EngSerialNbr = 'fooValue'
     * $query->filterByEngserialnbr('%fooValue%', Criteria::LIKE); // WHERE EngSerialNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $engserialnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByEngserialnbr($engserialnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($engserialnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_ENGSERIALNBR, $engserialnbr, $comparison);
    }

    /**
     * Filter the query on the EngHorsePower column
     *
     * Example usage:
     * <code>
     * $query->filterByEnghorsepower(1234); // WHERE EngHorsePower = 1234
     * $query->filterByEnghorsepower(array(12, 34)); // WHERE EngHorsePower IN (12, 34)
     * $query->filterByEnghorsepower(array('min' => 12)); // WHERE EngHorsePower > 12
     * </code>
     *
     * @param     mixed $enghorsepower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByEnghorsepower($enghorsepower = null, $comparison = null)
    {
        if (is_array($enghorsepower)) {
            $useMinMax = false;
            if (isset($enghorsepower['min'])) {
                $this->addUsingAlias(WarrantyRegisterTableMap::COL_ENGHORSEPOWER, $enghorsepower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($enghorsepower['max'])) {
                $this->addUsingAlias(WarrantyRegisterTableMap::COL_ENGHORSEPOWER, $enghorsepower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_ENGHORSEPOWER, $enghorsepower, $comparison);
    }

    /**
     * Filter the query on the EngModelYear column
     *
     * Example usage:
     * <code>
     * $query->filterByEngmodelyear(1234); // WHERE EngModelYear = 1234
     * $query->filterByEngmodelyear(array(12, 34)); // WHERE EngModelYear IN (12, 34)
     * $query->filterByEngmodelyear(array('min' => 12)); // WHERE EngModelYear > 12
     * </code>
     *
     * @param     mixed $engmodelyear The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByEngmodelyear($engmodelyear = null, $comparison = null)
    {
        if (is_array($engmodelyear)) {
            $useMinMax = false;
            if (isset($engmodelyear['min'])) {
                $this->addUsingAlias(WarrantyRegisterTableMap::COL_ENGMODELYEAR, $engmodelyear['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($engmodelyear['max'])) {
                $this->addUsingAlias(WarrantyRegisterTableMap::COL_ENGMODELYEAR, $engmodelyear['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_ENGMODELYEAR, $engmodelyear, $comparison);
    }

    /**
     * Filter the query on the EngDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByEngdesc('fooValue');   // WHERE EngDesc = 'fooValue'
     * $query->filterByEngdesc('%fooValue%', Criteria::LIKE); // WHERE EngDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $engdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByEngdesc($engdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($engdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_ENGDESC, $engdesc, $comparison);
    }

    /**
     * Filter the query on the dummy column
     *
     * Example usage:
     * <code>
     * $query->filterByDummy('fooValue');   // WHERE dummy = 'fooValue'
     * $query->filterByDummy('%fooValue%', Criteria::LIKE); // WHERE dummy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dummy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyRegisterTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildWarrantyRegister $warrantyRegister Object to remove from the list of results
     *
     * @return $this|ChildWarrantyRegisterQuery The current query, for fluid interface
     */
    public function prune($warrantyRegister = null)
    {
        if ($warrantyRegister) {
            $this->addCond('pruneCond0', $this->getAliasedColName(WarrantyRegisterTableMap::COL_SERIALNBR), $warrantyRegister->getSerialnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(WarrantyRegisterTableMap::COL_ITEMNBR), $warrantyRegister->getItemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(WarrantyRegisterTableMap::COL_INVOICENBR), $warrantyRegister->getInvoicenbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the warranty_register table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WarrantyRegisterTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            WarrantyRegisterTableMap::clearInstancePool();
            WarrantyRegisterTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WarrantyRegisterTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(WarrantyRegisterTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            WarrantyRegisterTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            WarrantyRegisterTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // WarrantyRegisterQuery
