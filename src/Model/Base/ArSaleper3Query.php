<?php

namespace Base;

use \ArSaleper3 as ChildArSaleper3;
use \ArSaleper3Query as ChildArSaleper3Query;
use \Exception;
use \PDO;
use Map\ArSaleper3TableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'AR_SALEPER3' table.
 *
 *
 *
 * @method     ChildArSaleper3Query orderByArspsaleper3($order = Criteria::ASC) Order by the ArspSalePer3 column
 * @method     ChildArSaleper3Query orderByArspname($order = Criteria::ASC) Order by the ArspName column
 * @method     ChildArSaleper3Query orderByArspmtdsale($order = Criteria::ASC) Order by the ArspMtdSale column
 * @method     ChildArSaleper3Query orderByArspytdsale($order = Criteria::ASC) Order by the ArspYtdSale column
 * @method     ChildArSaleper3Query orderByArspltdsale($order = Criteria::ASC) Order by the ArspLtdSale column
 * @method     ChildArSaleper3Query orderByArsplastsaledate($order = Criteria::ASC) Order by the ArspLastSaleDate column
 * @method     ChildArSaleper3Query orderByArspmtdcommearn($order = Criteria::ASC) Order by the ArspMtdCommEarn column
 * @method     ChildArSaleper3Query orderByArspytdcommearn($order = Criteria::ASC) Order by the ArspYtdCommEarn column
 * @method     ChildArSaleper3Query orderByArspltdcommearn($order = Criteria::ASC) Order by the ArspLtdCommEarn column
 * @method     ChildArSaleper3Query orderByArspmtdcommpaid($order = Criteria::ASC) Order by the ArspMtdCommPaid column
 * @method     ChildArSaleper3Query orderByArspytdcommpaid($order = Criteria::ASC) Order by the ArspYtdCommPaid column
 * @method     ChildArSaleper3Query orderByArspltdcommpaid($order = Criteria::ASC) Order by the ArspLtdCommPaid column
 * @method     ChildArSaleper3Query orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArSaleper3Query orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArSaleper3Query orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArSaleper3Query groupByArspsaleper3() Group by the ArspSalePer3 column
 * @method     ChildArSaleper3Query groupByArspname() Group by the ArspName column
 * @method     ChildArSaleper3Query groupByArspmtdsale() Group by the ArspMtdSale column
 * @method     ChildArSaleper3Query groupByArspytdsale() Group by the ArspYtdSale column
 * @method     ChildArSaleper3Query groupByArspltdsale() Group by the ArspLtdSale column
 * @method     ChildArSaleper3Query groupByArsplastsaledate() Group by the ArspLastSaleDate column
 * @method     ChildArSaleper3Query groupByArspmtdcommearn() Group by the ArspMtdCommEarn column
 * @method     ChildArSaleper3Query groupByArspytdcommearn() Group by the ArspYtdCommEarn column
 * @method     ChildArSaleper3Query groupByArspltdcommearn() Group by the ArspLtdCommEarn column
 * @method     ChildArSaleper3Query groupByArspmtdcommpaid() Group by the ArspMtdCommPaid column
 * @method     ChildArSaleper3Query groupByArspytdcommpaid() Group by the ArspYtdCommPaid column
 * @method     ChildArSaleper3Query groupByArspltdcommpaid() Group by the ArspLtdCommPaid column
 * @method     ChildArSaleper3Query groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArSaleper3Query groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArSaleper3Query groupByDummy() Group by the dummy column
 *
 * @method     ChildArSaleper3Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArSaleper3Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArSaleper3Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArSaleper3Query leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArSaleper3Query rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArSaleper3Query innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArSaleper3 findOne(ConnectionInterface $con = null) Return the first ChildArSaleper3 matching the query
 * @method     ChildArSaleper3 findOneOrCreate(ConnectionInterface $con = null) Return the first ChildArSaleper3 matching the query, or a new ChildArSaleper3 object populated from the query conditions when no match is found
 *
 * @method     ChildArSaleper3 findOneByArspsaleper3(string $ArspSalePer3) Return the first ChildArSaleper3 filtered by the ArspSalePer3 column
 * @method     ChildArSaleper3 findOneByArspname(string $ArspName) Return the first ChildArSaleper3 filtered by the ArspName column
 * @method     ChildArSaleper3 findOneByArspmtdsale(string $ArspMtdSale) Return the first ChildArSaleper3 filtered by the ArspMtdSale column
 * @method     ChildArSaleper3 findOneByArspytdsale(string $ArspYtdSale) Return the first ChildArSaleper3 filtered by the ArspYtdSale column
 * @method     ChildArSaleper3 findOneByArspltdsale(string $ArspLtdSale) Return the first ChildArSaleper3 filtered by the ArspLtdSale column
 * @method     ChildArSaleper3 findOneByArsplastsaledate(int $ArspLastSaleDate) Return the first ChildArSaleper3 filtered by the ArspLastSaleDate column
 * @method     ChildArSaleper3 findOneByArspmtdcommearn(string $ArspMtdCommEarn) Return the first ChildArSaleper3 filtered by the ArspMtdCommEarn column
 * @method     ChildArSaleper3 findOneByArspytdcommearn(string $ArspYtdCommEarn) Return the first ChildArSaleper3 filtered by the ArspYtdCommEarn column
 * @method     ChildArSaleper3 findOneByArspltdcommearn(string $ArspLtdCommEarn) Return the first ChildArSaleper3 filtered by the ArspLtdCommEarn column
 * @method     ChildArSaleper3 findOneByArspmtdcommpaid(string $ArspMtdCommPaid) Return the first ChildArSaleper3 filtered by the ArspMtdCommPaid column
 * @method     ChildArSaleper3 findOneByArspytdcommpaid(string $ArspYtdCommPaid) Return the first ChildArSaleper3 filtered by the ArspYtdCommPaid column
 * @method     ChildArSaleper3 findOneByArspltdcommpaid(string $ArspLtdCommPaid) Return the first ChildArSaleper3 filtered by the ArspLtdCommPaid column
 * @method     ChildArSaleper3 findOneByDateupdtd(int $DateUpdtd) Return the first ChildArSaleper3 filtered by the DateUpdtd column
 * @method     ChildArSaleper3 findOneByTimeupdtd(int $TimeUpdtd) Return the first ChildArSaleper3 filtered by the TimeUpdtd column
 * @method     ChildArSaleper3 findOneByDummy(string $dummy) Return the first ChildArSaleper3 filtered by the dummy column *

 * @method     ChildArSaleper3 requirePk($key, ConnectionInterface $con = null) Return the ChildArSaleper3 by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArSaleper3 requireOne(ConnectionInterface $con = null) Return the first ChildArSaleper3 matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArSaleper3 requireOneByArspsaleper3(string $ArspSalePer3) Return the first ChildArSaleper3 filtered by the ArspSalePer3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArSaleper3 requireOneByArspname(string $ArspName) Return the first ChildArSaleper3 filtered by the ArspName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArSaleper3 requireOneByArspmtdsale(string $ArspMtdSale) Return the first ChildArSaleper3 filtered by the ArspMtdSale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArSaleper3 requireOneByArspytdsale(string $ArspYtdSale) Return the first ChildArSaleper3 filtered by the ArspYtdSale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArSaleper3 requireOneByArspltdsale(string $ArspLtdSale) Return the first ChildArSaleper3 filtered by the ArspLtdSale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArSaleper3 requireOneByArsplastsaledate(int $ArspLastSaleDate) Return the first ChildArSaleper3 filtered by the ArspLastSaleDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArSaleper3 requireOneByArspmtdcommearn(string $ArspMtdCommEarn) Return the first ChildArSaleper3 filtered by the ArspMtdCommEarn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArSaleper3 requireOneByArspytdcommearn(string $ArspYtdCommEarn) Return the first ChildArSaleper3 filtered by the ArspYtdCommEarn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArSaleper3 requireOneByArspltdcommearn(string $ArspLtdCommEarn) Return the first ChildArSaleper3 filtered by the ArspLtdCommEarn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArSaleper3 requireOneByArspmtdcommpaid(string $ArspMtdCommPaid) Return the first ChildArSaleper3 filtered by the ArspMtdCommPaid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArSaleper3 requireOneByArspytdcommpaid(string $ArspYtdCommPaid) Return the first ChildArSaleper3 filtered by the ArspYtdCommPaid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArSaleper3 requireOneByArspltdcommpaid(string $ArspLtdCommPaid) Return the first ChildArSaleper3 filtered by the ArspLtdCommPaid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArSaleper3 requireOneByDateupdtd(int $DateUpdtd) Return the first ChildArSaleper3 filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArSaleper3 requireOneByTimeupdtd(int $TimeUpdtd) Return the first ChildArSaleper3 filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArSaleper3 requireOneByDummy(string $dummy) Return the first ChildArSaleper3 filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArSaleper3[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildArSaleper3 objects based on current ModelCriteria
 * @method     ChildArSaleper3[]|ObjectCollection findByArspsaleper3(string $ArspSalePer3) Return ChildArSaleper3 objects filtered by the ArspSalePer3 column
 * @method     ChildArSaleper3[]|ObjectCollection findByArspname(string $ArspName) Return ChildArSaleper3 objects filtered by the ArspName column
 * @method     ChildArSaleper3[]|ObjectCollection findByArspmtdsale(string $ArspMtdSale) Return ChildArSaleper3 objects filtered by the ArspMtdSale column
 * @method     ChildArSaleper3[]|ObjectCollection findByArspytdsale(string $ArspYtdSale) Return ChildArSaleper3 objects filtered by the ArspYtdSale column
 * @method     ChildArSaleper3[]|ObjectCollection findByArspltdsale(string $ArspLtdSale) Return ChildArSaleper3 objects filtered by the ArspLtdSale column
 * @method     ChildArSaleper3[]|ObjectCollection findByArsplastsaledate(int $ArspLastSaleDate) Return ChildArSaleper3 objects filtered by the ArspLastSaleDate column
 * @method     ChildArSaleper3[]|ObjectCollection findByArspmtdcommearn(string $ArspMtdCommEarn) Return ChildArSaleper3 objects filtered by the ArspMtdCommEarn column
 * @method     ChildArSaleper3[]|ObjectCollection findByArspytdcommearn(string $ArspYtdCommEarn) Return ChildArSaleper3 objects filtered by the ArspYtdCommEarn column
 * @method     ChildArSaleper3[]|ObjectCollection findByArspltdcommearn(string $ArspLtdCommEarn) Return ChildArSaleper3 objects filtered by the ArspLtdCommEarn column
 * @method     ChildArSaleper3[]|ObjectCollection findByArspmtdcommpaid(string $ArspMtdCommPaid) Return ChildArSaleper3 objects filtered by the ArspMtdCommPaid column
 * @method     ChildArSaleper3[]|ObjectCollection findByArspytdcommpaid(string $ArspYtdCommPaid) Return ChildArSaleper3 objects filtered by the ArspYtdCommPaid column
 * @method     ChildArSaleper3[]|ObjectCollection findByArspltdcommpaid(string $ArspLtdCommPaid) Return ChildArSaleper3 objects filtered by the ArspLtdCommPaid column
 * @method     ChildArSaleper3[]|ObjectCollection findByDateupdtd(int $DateUpdtd) Return ChildArSaleper3 objects filtered by the DateUpdtd column
 * @method     ChildArSaleper3[]|ObjectCollection findByTimeupdtd(int $TimeUpdtd) Return ChildArSaleper3 objects filtered by the TimeUpdtd column
 * @method     ChildArSaleper3[]|ObjectCollection findByDummy(string $dummy) Return ChildArSaleper3 objects filtered by the dummy column
 * @method     ChildArSaleper3[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ArSaleper3Query extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArSaleper3Query object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArSaleper3', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArSaleper3Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArSaleper3Query
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildArSaleper3Query) {
            return $criteria;
        }
        $query = new ChildArSaleper3Query();
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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildArSaleper3|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArSaleper3TableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArSaleper3TableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildArSaleper3 A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArspSalePer3, ArspName, ArspMtdSale, ArspYtdSale, ArspLtdSale, ArspLastSaleDate, ArspMtdCommEarn, ArspYtdCommEarn, ArspLtdCommEarn, ArspMtdCommPaid, ArspYtdCommPaid, ArspLtdCommPaid, DateUpdtd, TimeUpdtd, dummy FROM AR_SALEPER3 WHERE ArspSalePer3 = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildArSaleper3 $obj */
            $obj = new ChildArSaleper3();
            $obj->hydrate($row);
            ArSaleper3TableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildArSaleper3|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
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
     * @return $this|ChildArSaleper3Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPSALEPER3, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildArSaleper3Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPSALEPER3, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ArspSalePer3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper3('fooValue');   // WHERE ArspSalePer3 = 'fooValue'
     * $query->filterByArspsaleper3('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArSaleper3Query The current query, for fluid interface
     */
    public function filterByArspsaleper3($arspsaleper3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPSALEPER3, $arspsaleper3, $comparison);
    }

    /**
     * Filter the query on the ArspName column
     *
     * Example usage:
     * <code>
     * $query->filterByArspname('fooValue');   // WHERE ArspName = 'fooValue'
     * $query->filterByArspname('%fooValue%', Criteria::LIKE); // WHERE ArspName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArSaleper3Query The current query, for fluid interface
     */
    public function filterByArspname($arspname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPNAME, $arspname, $comparison);
    }

    /**
     * Filter the query on the ArspMtdSale column
     *
     * Example usage:
     * <code>
     * $query->filterByArspmtdsale(1234); // WHERE ArspMtdSale = 1234
     * $query->filterByArspmtdsale(array(12, 34)); // WHERE ArspMtdSale IN (12, 34)
     * $query->filterByArspmtdsale(array('min' => 12)); // WHERE ArspMtdSale > 12
     * </code>
     *
     * @param     mixed $arspmtdsale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArSaleper3Query The current query, for fluid interface
     */
    public function filterByArspmtdsale($arspmtdsale = null, $comparison = null)
    {
        if (is_array($arspmtdsale)) {
            $useMinMax = false;
            if (isset($arspmtdsale['min'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPMTDSALE, $arspmtdsale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arspmtdsale['max'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPMTDSALE, $arspmtdsale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPMTDSALE, $arspmtdsale, $comparison);
    }

    /**
     * Filter the query on the ArspYtdSale column
     *
     * Example usage:
     * <code>
     * $query->filterByArspytdsale(1234); // WHERE ArspYtdSale = 1234
     * $query->filterByArspytdsale(array(12, 34)); // WHERE ArspYtdSale IN (12, 34)
     * $query->filterByArspytdsale(array('min' => 12)); // WHERE ArspYtdSale > 12
     * </code>
     *
     * @param     mixed $arspytdsale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArSaleper3Query The current query, for fluid interface
     */
    public function filterByArspytdsale($arspytdsale = null, $comparison = null)
    {
        if (is_array($arspytdsale)) {
            $useMinMax = false;
            if (isset($arspytdsale['min'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPYTDSALE, $arspytdsale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arspytdsale['max'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPYTDSALE, $arspytdsale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPYTDSALE, $arspytdsale, $comparison);
    }

    /**
     * Filter the query on the ArspLtdSale column
     *
     * Example usage:
     * <code>
     * $query->filterByArspltdsale(1234); // WHERE ArspLtdSale = 1234
     * $query->filterByArspltdsale(array(12, 34)); // WHERE ArspLtdSale IN (12, 34)
     * $query->filterByArspltdsale(array('min' => 12)); // WHERE ArspLtdSale > 12
     * </code>
     *
     * @param     mixed $arspltdsale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArSaleper3Query The current query, for fluid interface
     */
    public function filterByArspltdsale($arspltdsale = null, $comparison = null)
    {
        if (is_array($arspltdsale)) {
            $useMinMax = false;
            if (isset($arspltdsale['min'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPLTDSALE, $arspltdsale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arspltdsale['max'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPLTDSALE, $arspltdsale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPLTDSALE, $arspltdsale, $comparison);
    }

    /**
     * Filter the query on the ArspLastSaleDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArsplastsaledate(1234); // WHERE ArspLastSaleDate = 1234
     * $query->filterByArsplastsaledate(array(12, 34)); // WHERE ArspLastSaleDate IN (12, 34)
     * $query->filterByArsplastsaledate(array('min' => 12)); // WHERE ArspLastSaleDate > 12
     * </code>
     *
     * @param     mixed $arsplastsaledate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArSaleper3Query The current query, for fluid interface
     */
    public function filterByArsplastsaledate($arsplastsaledate = null, $comparison = null)
    {
        if (is_array($arsplastsaledate)) {
            $useMinMax = false;
            if (isset($arsplastsaledate['min'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPLASTSALEDATE, $arsplastsaledate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arsplastsaledate['max'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPLASTSALEDATE, $arsplastsaledate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPLASTSALEDATE, $arsplastsaledate, $comparison);
    }

    /**
     * Filter the query on the ArspMtdCommEarn column
     *
     * Example usage:
     * <code>
     * $query->filterByArspmtdcommearn(1234); // WHERE ArspMtdCommEarn = 1234
     * $query->filterByArspmtdcommearn(array(12, 34)); // WHERE ArspMtdCommEarn IN (12, 34)
     * $query->filterByArspmtdcommearn(array('min' => 12)); // WHERE ArspMtdCommEarn > 12
     * </code>
     *
     * @param     mixed $arspmtdcommearn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArSaleper3Query The current query, for fluid interface
     */
    public function filterByArspmtdcommearn($arspmtdcommearn = null, $comparison = null)
    {
        if (is_array($arspmtdcommearn)) {
            $useMinMax = false;
            if (isset($arspmtdcommearn['min'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPMTDCOMMEARN, $arspmtdcommearn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arspmtdcommearn['max'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPMTDCOMMEARN, $arspmtdcommearn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPMTDCOMMEARN, $arspmtdcommearn, $comparison);
    }

    /**
     * Filter the query on the ArspYtdCommEarn column
     *
     * Example usage:
     * <code>
     * $query->filterByArspytdcommearn(1234); // WHERE ArspYtdCommEarn = 1234
     * $query->filterByArspytdcommearn(array(12, 34)); // WHERE ArspYtdCommEarn IN (12, 34)
     * $query->filterByArspytdcommearn(array('min' => 12)); // WHERE ArspYtdCommEarn > 12
     * </code>
     *
     * @param     mixed $arspytdcommearn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArSaleper3Query The current query, for fluid interface
     */
    public function filterByArspytdcommearn($arspytdcommearn = null, $comparison = null)
    {
        if (is_array($arspytdcommearn)) {
            $useMinMax = false;
            if (isset($arspytdcommearn['min'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPYTDCOMMEARN, $arspytdcommearn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arspytdcommearn['max'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPYTDCOMMEARN, $arspytdcommearn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPYTDCOMMEARN, $arspytdcommearn, $comparison);
    }

    /**
     * Filter the query on the ArspLtdCommEarn column
     *
     * Example usage:
     * <code>
     * $query->filterByArspltdcommearn(1234); // WHERE ArspLtdCommEarn = 1234
     * $query->filterByArspltdcommearn(array(12, 34)); // WHERE ArspLtdCommEarn IN (12, 34)
     * $query->filterByArspltdcommearn(array('min' => 12)); // WHERE ArspLtdCommEarn > 12
     * </code>
     *
     * @param     mixed $arspltdcommearn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArSaleper3Query The current query, for fluid interface
     */
    public function filterByArspltdcommearn($arspltdcommearn = null, $comparison = null)
    {
        if (is_array($arspltdcommearn)) {
            $useMinMax = false;
            if (isset($arspltdcommearn['min'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPLTDCOMMEARN, $arspltdcommearn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arspltdcommearn['max'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPLTDCOMMEARN, $arspltdcommearn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPLTDCOMMEARN, $arspltdcommearn, $comparison);
    }

    /**
     * Filter the query on the ArspMtdCommPaid column
     *
     * Example usage:
     * <code>
     * $query->filterByArspmtdcommpaid(1234); // WHERE ArspMtdCommPaid = 1234
     * $query->filterByArspmtdcommpaid(array(12, 34)); // WHERE ArspMtdCommPaid IN (12, 34)
     * $query->filterByArspmtdcommpaid(array('min' => 12)); // WHERE ArspMtdCommPaid > 12
     * </code>
     *
     * @param     mixed $arspmtdcommpaid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArSaleper3Query The current query, for fluid interface
     */
    public function filterByArspmtdcommpaid($arspmtdcommpaid = null, $comparison = null)
    {
        if (is_array($arspmtdcommpaid)) {
            $useMinMax = false;
            if (isset($arspmtdcommpaid['min'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPMTDCOMMPAID, $arspmtdcommpaid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arspmtdcommpaid['max'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPMTDCOMMPAID, $arspmtdcommpaid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPMTDCOMMPAID, $arspmtdcommpaid, $comparison);
    }

    /**
     * Filter the query on the ArspYtdCommPaid column
     *
     * Example usage:
     * <code>
     * $query->filterByArspytdcommpaid(1234); // WHERE ArspYtdCommPaid = 1234
     * $query->filterByArspytdcommpaid(array(12, 34)); // WHERE ArspYtdCommPaid IN (12, 34)
     * $query->filterByArspytdcommpaid(array('min' => 12)); // WHERE ArspYtdCommPaid > 12
     * </code>
     *
     * @param     mixed $arspytdcommpaid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArSaleper3Query The current query, for fluid interface
     */
    public function filterByArspytdcommpaid($arspytdcommpaid = null, $comparison = null)
    {
        if (is_array($arspytdcommpaid)) {
            $useMinMax = false;
            if (isset($arspytdcommpaid['min'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPYTDCOMMPAID, $arspytdcommpaid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arspytdcommpaid['max'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPYTDCOMMPAID, $arspytdcommpaid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPYTDCOMMPAID, $arspytdcommpaid, $comparison);
    }

    /**
     * Filter the query on the ArspLtdCommPaid column
     *
     * Example usage:
     * <code>
     * $query->filterByArspltdcommpaid(1234); // WHERE ArspLtdCommPaid = 1234
     * $query->filterByArspltdcommpaid(array(12, 34)); // WHERE ArspLtdCommPaid IN (12, 34)
     * $query->filterByArspltdcommpaid(array('min' => 12)); // WHERE ArspLtdCommPaid > 12
     * </code>
     *
     * @param     mixed $arspltdcommpaid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArSaleper3Query The current query, for fluid interface
     */
    public function filterByArspltdcommpaid($arspltdcommpaid = null, $comparison = null)
    {
        if (is_array($arspltdcommpaid)) {
            $useMinMax = false;
            if (isset($arspltdcommpaid['min'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPLTDCOMMPAID, $arspltdcommpaid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arspltdcommpaid['max'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPLTDCOMMPAID, $arspltdcommpaid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPLTDCOMMPAID, $arspltdcommpaid, $comparison);
    }

    /**
     * Filter the query on the DateUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByDateupdtd(1234); // WHERE DateUpdtd = 1234
     * $query->filterByDateupdtd(array(12, 34)); // WHERE DateUpdtd IN (12, 34)
     * $query->filterByDateupdtd(array('min' => 12)); // WHERE DateUpdtd > 12
     * </code>
     *
     * @param     mixed $dateupdtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArSaleper3Query The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (is_array($dateupdtd)) {
            $useMinMax = false;
            if (isset($dateupdtd['min'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_DATEUPDTD, $dateupdtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateupdtd['max'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_DATEUPDTD, $dateupdtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArSaleper3TableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
    }

    /**
     * Filter the query on the TimeUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeupdtd(1234); // WHERE TimeUpdtd = 1234
     * $query->filterByTimeupdtd(array(12, 34)); // WHERE TimeUpdtd IN (12, 34)
     * $query->filterByTimeupdtd(array('min' => 12)); // WHERE TimeUpdtd > 12
     * </code>
     *
     * @param     mixed $timeupdtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArSaleper3Query The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (is_array($timeupdtd)) {
            $useMinMax = false;
            if (isset($timeupdtd['min'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_TIMEUPDTD, $timeupdtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timeupdtd['max'])) {
                $this->addUsingAlias(ArSaleper3TableMap::COL_TIMEUPDTD, $timeupdtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArSaleper3TableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildArSaleper3Query The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArSaleper3TableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildArSaleper3 $arSaleper3 Object to remove from the list of results
     *
     * @return $this|ChildArSaleper3Query The current query, for fluid interface
     */
    public function prune($arSaleper3 = null)
    {
        if ($arSaleper3) {
            $this->addUsingAlias(ArSaleper3TableMap::COL_ARSPSALEPER3, $arSaleper3->getArspsaleper3(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the AR_SALEPER3 table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArSaleper3TableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArSaleper3TableMap::clearInstancePool();
            ArSaleper3TableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArSaleper3TableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArSaleper3TableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArSaleper3TableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArSaleper3TableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ArSaleper3Query
