<?php

namespace Base;

use \BoatInventory as ChildBoatInventory;
use \BoatInventoryQuery as ChildBoatInventoryQuery;
use \Exception;
use \PDO;
use Map\BoatInventoryTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'boat_inventory' table.
 *
 *
 *
 * @method     ChildBoatInventoryQuery orderByDate($order = Criteria::ASC) Order by the Date column
 * @method     ChildBoatInventoryQuery orderByTime($order = Criteria::ASC) Order by the Time column
 * @method     ChildBoatInventoryQuery orderByRecnbr($order = Criteria::ASC) Order by the Recnbr column
 * @method     ChildBoatInventoryQuery orderBySerialnbr($order = Criteria::ASC) Order by the SerialNbr column
 * @method     ChildBoatInventoryQuery orderByItemnbr($order = Criteria::ASC) Order by the ItemNbr column
 * @method     ChildBoatInventoryQuery orderByItemdesc1($order = Criteria::ASC) Order by the ItemDesc1 column
 * @method     ChildBoatInventoryQuery orderByOrdernbr($order = Criteria::ASC) Order by the OrderNbr column
 * @method     ChildBoatInventoryQuery orderByInvoicedate($order = Criteria::ASC) Order by the InvoiceDate column
 * @method     ChildBoatInventoryQuery orderByRegistered($order = Criteria::ASC) Order by the Registered column
 * @method     ChildBoatInventoryQuery orderByCustid($order = Criteria::ASC) Order by the CustId column
 * @method     ChildBoatInventoryQuery orderBySalespersonid($order = Criteria::ASC) Order by the SalespersonId column
 * @method     ChildBoatInventoryQuery orderByOehdusercode2($order = Criteria::ASC) Order by the OehdUserCode2 column
 * @method     ChildBoatInventoryQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildBoatInventoryQuery groupByDate() Group by the Date column
 * @method     ChildBoatInventoryQuery groupByTime() Group by the Time column
 * @method     ChildBoatInventoryQuery groupByRecnbr() Group by the Recnbr column
 * @method     ChildBoatInventoryQuery groupBySerialnbr() Group by the SerialNbr column
 * @method     ChildBoatInventoryQuery groupByItemnbr() Group by the ItemNbr column
 * @method     ChildBoatInventoryQuery groupByItemdesc1() Group by the ItemDesc1 column
 * @method     ChildBoatInventoryQuery groupByOrdernbr() Group by the OrderNbr column
 * @method     ChildBoatInventoryQuery groupByInvoicedate() Group by the InvoiceDate column
 * @method     ChildBoatInventoryQuery groupByRegistered() Group by the Registered column
 * @method     ChildBoatInventoryQuery groupByCustid() Group by the CustId column
 * @method     ChildBoatInventoryQuery groupBySalespersonid() Group by the SalespersonId column
 * @method     ChildBoatInventoryQuery groupByOehdusercode2() Group by the OehdUserCode2 column
 * @method     ChildBoatInventoryQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildBoatInventoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildBoatInventoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildBoatInventoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildBoatInventoryQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildBoatInventoryQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildBoatInventoryQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildBoatInventory findOne(ConnectionInterface $con = null) Return the first ChildBoatInventory matching the query
 * @method     ChildBoatInventory findOneOrCreate(ConnectionInterface $con = null) Return the first ChildBoatInventory matching the query, or a new ChildBoatInventory object populated from the query conditions when no match is found
 *
 * @method     ChildBoatInventory findOneByDate(int $Date) Return the first ChildBoatInventory filtered by the Date column
 * @method     ChildBoatInventory findOneByTime(int $Time) Return the first ChildBoatInventory filtered by the Time column
 * @method     ChildBoatInventory findOneByRecnbr(int $Recnbr) Return the first ChildBoatInventory filtered by the Recnbr column
 * @method     ChildBoatInventory findOneBySerialnbr(string $SerialNbr) Return the first ChildBoatInventory filtered by the SerialNbr column
 * @method     ChildBoatInventory findOneByItemnbr(string $ItemNbr) Return the first ChildBoatInventory filtered by the ItemNbr column
 * @method     ChildBoatInventory findOneByItemdesc1(string $ItemDesc1) Return the first ChildBoatInventory filtered by the ItemDesc1 column
 * @method     ChildBoatInventory findOneByOrdernbr(int $OrderNbr) Return the first ChildBoatInventory filtered by the OrderNbr column
 * @method     ChildBoatInventory findOneByInvoicedate(int $InvoiceDate) Return the first ChildBoatInventory filtered by the InvoiceDate column
 * @method     ChildBoatInventory findOneByRegistered(string $Registered) Return the first ChildBoatInventory filtered by the Registered column
 * @method     ChildBoatInventory findOneByCustid(string $CustId) Return the first ChildBoatInventory filtered by the CustId column
 * @method     ChildBoatInventory findOneBySalespersonid(string $SalespersonId) Return the first ChildBoatInventory filtered by the SalespersonId column
 * @method     ChildBoatInventory findOneByOehdusercode2(string $OehdUserCode2) Return the first ChildBoatInventory filtered by the OehdUserCode2 column
 * @method     ChildBoatInventory findOneByDummy(string $dummy) Return the first ChildBoatInventory filtered by the dummy column *

 * @method     ChildBoatInventory requirePk($key, ConnectionInterface $con = null) Return the ChildBoatInventory by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBoatInventory requireOne(ConnectionInterface $con = null) Return the first ChildBoatInventory matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBoatInventory requireOneByDate(int $Date) Return the first ChildBoatInventory filtered by the Date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBoatInventory requireOneByTime(int $Time) Return the first ChildBoatInventory filtered by the Time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBoatInventory requireOneByRecnbr(int $Recnbr) Return the first ChildBoatInventory filtered by the Recnbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBoatInventory requireOneBySerialnbr(string $SerialNbr) Return the first ChildBoatInventory filtered by the SerialNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBoatInventory requireOneByItemnbr(string $ItemNbr) Return the first ChildBoatInventory filtered by the ItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBoatInventory requireOneByItemdesc1(string $ItemDesc1) Return the first ChildBoatInventory filtered by the ItemDesc1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBoatInventory requireOneByOrdernbr(int $OrderNbr) Return the first ChildBoatInventory filtered by the OrderNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBoatInventory requireOneByInvoicedate(int $InvoiceDate) Return the first ChildBoatInventory filtered by the InvoiceDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBoatInventory requireOneByRegistered(string $Registered) Return the first ChildBoatInventory filtered by the Registered column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBoatInventory requireOneByCustid(string $CustId) Return the first ChildBoatInventory filtered by the CustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBoatInventory requireOneBySalespersonid(string $SalespersonId) Return the first ChildBoatInventory filtered by the SalespersonId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBoatInventory requireOneByOehdusercode2(string $OehdUserCode2) Return the first ChildBoatInventory filtered by the OehdUserCode2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBoatInventory requireOneByDummy(string $dummy) Return the first ChildBoatInventory filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBoatInventory[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildBoatInventory objects based on current ModelCriteria
 * @method     ChildBoatInventory[]|ObjectCollection findByDate(int $Date) Return ChildBoatInventory objects filtered by the Date column
 * @method     ChildBoatInventory[]|ObjectCollection findByTime(int $Time) Return ChildBoatInventory objects filtered by the Time column
 * @method     ChildBoatInventory[]|ObjectCollection findByRecnbr(int $Recnbr) Return ChildBoatInventory objects filtered by the Recnbr column
 * @method     ChildBoatInventory[]|ObjectCollection findBySerialnbr(string $SerialNbr) Return ChildBoatInventory objects filtered by the SerialNbr column
 * @method     ChildBoatInventory[]|ObjectCollection findByItemnbr(string $ItemNbr) Return ChildBoatInventory objects filtered by the ItemNbr column
 * @method     ChildBoatInventory[]|ObjectCollection findByItemdesc1(string $ItemDesc1) Return ChildBoatInventory objects filtered by the ItemDesc1 column
 * @method     ChildBoatInventory[]|ObjectCollection findByOrdernbr(int $OrderNbr) Return ChildBoatInventory objects filtered by the OrderNbr column
 * @method     ChildBoatInventory[]|ObjectCollection findByInvoicedate(int $InvoiceDate) Return ChildBoatInventory objects filtered by the InvoiceDate column
 * @method     ChildBoatInventory[]|ObjectCollection findByRegistered(string $Registered) Return ChildBoatInventory objects filtered by the Registered column
 * @method     ChildBoatInventory[]|ObjectCollection findByCustid(string $CustId) Return ChildBoatInventory objects filtered by the CustId column
 * @method     ChildBoatInventory[]|ObjectCollection findBySalespersonid(string $SalespersonId) Return ChildBoatInventory objects filtered by the SalespersonId column
 * @method     ChildBoatInventory[]|ObjectCollection findByOehdusercode2(string $OehdUserCode2) Return ChildBoatInventory objects filtered by the OehdUserCode2 column
 * @method     ChildBoatInventory[]|ObjectCollection findByDummy(string $dummy) Return ChildBoatInventory objects filtered by the dummy column
 * @method     ChildBoatInventory[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class BoatInventoryQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\BoatInventoryQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\BoatInventory', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildBoatInventoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildBoatInventoryQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildBoatInventoryQuery) {
            return $criteria;
        }
        $query = new ChildBoatInventoryQuery();
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
     * @param array[$SerialNbr, $ItemNbr, $CustId] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildBoatInventory|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(BoatInventoryTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = BoatInventoryTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildBoatInventory A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT Date, Time, Recnbr, SerialNbr, ItemNbr, ItemDesc1, OrderNbr, InvoiceDate, Registered, CustId, SalespersonId, OehdUserCode2, dummy FROM boat_inventory WHERE SerialNbr = :p0 AND ItemNbr = :p1 AND CustId = :p2';
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
            /** @var ChildBoatInventory $obj */
            $obj = new ChildBoatInventory();
            $obj->hydrate($row);
            BoatInventoryTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildBoatInventory|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildBoatInventoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(BoatInventoryTableMap::COL_SERIALNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(BoatInventoryTableMap::COL_ITEMNBR, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(BoatInventoryTableMap::COL_CUSTID, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildBoatInventoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(BoatInventoryTableMap::COL_SERIALNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(BoatInventoryTableMap::COL_ITEMNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(BoatInventoryTableMap::COL_CUSTID, $key[2], Criteria::EQUAL);
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
     * @return $this|ChildBoatInventoryQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(BoatInventoryTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(BoatInventoryTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BoatInventoryTableMap::COL_DATE, $date, $comparison);
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
     * @return $this|ChildBoatInventoryQuery The current query, for fluid interface
     */
    public function filterByTime($time = null, $comparison = null)
    {
        if (is_array($time)) {
            $useMinMax = false;
            if (isset($time['min'])) {
                $this->addUsingAlias(BoatInventoryTableMap::COL_TIME, $time['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($time['max'])) {
                $this->addUsingAlias(BoatInventoryTableMap::COL_TIME, $time['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BoatInventoryTableMap::COL_TIME, $time, $comparison);
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
     * @return $this|ChildBoatInventoryQuery The current query, for fluid interface
     */
    public function filterByRecnbr($recnbr = null, $comparison = null)
    {
        if (is_array($recnbr)) {
            $useMinMax = false;
            if (isset($recnbr['min'])) {
                $this->addUsingAlias(BoatInventoryTableMap::COL_RECNBR, $recnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recnbr['max'])) {
                $this->addUsingAlias(BoatInventoryTableMap::COL_RECNBR, $recnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BoatInventoryTableMap::COL_RECNBR, $recnbr, $comparison);
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
     * @return $this|ChildBoatInventoryQuery The current query, for fluid interface
     */
    public function filterBySerialnbr($serialnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($serialnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BoatInventoryTableMap::COL_SERIALNBR, $serialnbr, $comparison);
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
     * @return $this|ChildBoatInventoryQuery The current query, for fluid interface
     */
    public function filterByItemnbr($itemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BoatInventoryTableMap::COL_ITEMNBR, $itemnbr, $comparison);
    }

    /**
     * Filter the query on the ItemDesc1 column
     *
     * Example usage:
     * <code>
     * $query->filterByItemdesc1('fooValue');   // WHERE ItemDesc1 = 'fooValue'
     * $query->filterByItemdesc1('%fooValue%', Criteria::LIKE); // WHERE ItemDesc1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemdesc1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBoatInventoryQuery The current query, for fluid interface
     */
    public function filterByItemdesc1($itemdesc1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemdesc1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BoatInventoryTableMap::COL_ITEMDESC1, $itemdesc1, $comparison);
    }

    /**
     * Filter the query on the OrderNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdernbr(1234); // WHERE OrderNbr = 1234
     * $query->filterByOrdernbr(array(12, 34)); // WHERE OrderNbr IN (12, 34)
     * $query->filterByOrdernbr(array('min' => 12)); // WHERE OrderNbr > 12
     * </code>
     *
     * @param     mixed $ordernbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBoatInventoryQuery The current query, for fluid interface
     */
    public function filterByOrdernbr($ordernbr = null, $comparison = null)
    {
        if (is_array($ordernbr)) {
            $useMinMax = false;
            if (isset($ordernbr['min'])) {
                $this->addUsingAlias(BoatInventoryTableMap::COL_ORDERNBR, $ordernbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordernbr['max'])) {
                $this->addUsingAlias(BoatInventoryTableMap::COL_ORDERNBR, $ordernbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BoatInventoryTableMap::COL_ORDERNBR, $ordernbr, $comparison);
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
     * @return $this|ChildBoatInventoryQuery The current query, for fluid interface
     */
    public function filterByInvoicedate($invoicedate = null, $comparison = null)
    {
        if (is_array($invoicedate)) {
            $useMinMax = false;
            if (isset($invoicedate['min'])) {
                $this->addUsingAlias(BoatInventoryTableMap::COL_INVOICEDATE, $invoicedate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($invoicedate['max'])) {
                $this->addUsingAlias(BoatInventoryTableMap::COL_INVOICEDATE, $invoicedate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BoatInventoryTableMap::COL_INVOICEDATE, $invoicedate, $comparison);
    }

    /**
     * Filter the query on the Registered column
     *
     * Example usage:
     * <code>
     * $query->filterByRegistered('fooValue');   // WHERE Registered = 'fooValue'
     * $query->filterByRegistered('%fooValue%', Criteria::LIKE); // WHERE Registered LIKE '%fooValue%'
     * </code>
     *
     * @param     string $registered The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBoatInventoryQuery The current query, for fluid interface
     */
    public function filterByRegistered($registered = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($registered)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BoatInventoryTableMap::COL_REGISTERED, $registered, $comparison);
    }

    /**
     * Filter the query on the CustId column
     *
     * Example usage:
     * <code>
     * $query->filterByCustid('fooValue');   // WHERE CustId = 'fooValue'
     * $query->filterByCustid('%fooValue%', Criteria::LIKE); // WHERE CustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $custid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBoatInventoryQuery The current query, for fluid interface
     */
    public function filterByCustid($custid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($custid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BoatInventoryTableMap::COL_CUSTID, $custid, $comparison);
    }

    /**
     * Filter the query on the SalespersonId column
     *
     * Example usage:
     * <code>
     * $query->filterBySalespersonid('fooValue');   // WHERE SalespersonId = 'fooValue'
     * $query->filterBySalespersonid('%fooValue%', Criteria::LIKE); // WHERE SalespersonId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $salespersonid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBoatInventoryQuery The current query, for fluid interface
     */
    public function filterBySalespersonid($salespersonid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($salespersonid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BoatInventoryTableMap::COL_SALESPERSONID, $salespersonid, $comparison);
    }

    /**
     * Filter the query on the OehdUserCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdusercode2('fooValue');   // WHERE OehdUserCode2 = 'fooValue'
     * $query->filterByOehdusercode2('%fooValue%', Criteria::LIKE); // WHERE OehdUserCode2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdusercode2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBoatInventoryQuery The current query, for fluid interface
     */
    public function filterByOehdusercode2($oehdusercode2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdusercode2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BoatInventoryTableMap::COL_OEHDUSERCODE2, $oehdusercode2, $comparison);
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
     * @return $this|ChildBoatInventoryQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BoatInventoryTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildBoatInventory $boatInventory Object to remove from the list of results
     *
     * @return $this|ChildBoatInventoryQuery The current query, for fluid interface
     */
    public function prune($boatInventory = null)
    {
        if ($boatInventory) {
            $this->addCond('pruneCond0', $this->getAliasedColName(BoatInventoryTableMap::COL_SERIALNBR), $boatInventory->getSerialnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(BoatInventoryTableMap::COL_ITEMNBR), $boatInventory->getItemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(BoatInventoryTableMap::COL_CUSTID), $boatInventory->getCustid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the boat_inventory table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BoatInventoryTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BoatInventoryTableMap::clearInstancePool();
            BoatInventoryTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(BoatInventoryTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(BoatInventoryTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            BoatInventoryTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            BoatInventoryTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // BoatInventoryQuery
