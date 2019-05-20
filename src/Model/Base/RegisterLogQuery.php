<?php

namespace Base;

use \RegisterLog as ChildRegisterLog;
use \RegisterLogQuery as ChildRegisterLogQuery;
use \Exception;
use \PDO;
use Map\RegisterLogTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'register_log' table.
 *
 *
 *
 * @method     ChildRegisterLogQuery orderByLogid($order = Criteria::ASC) Order by the logid column
 * @method     ChildRegisterLogQuery orderBySerialnbr($order = Criteria::ASC) Order by the serialnbr column
 * @method     ChildRegisterLogQuery orderByUserid($order = Criteria::ASC) Order by the userid column
 * @method     ChildRegisterLogQuery orderByDate($order = Criteria::ASC) Order by the date column
 *
 * @method     ChildRegisterLogQuery groupByLogid() Group by the logid column
 * @method     ChildRegisterLogQuery groupBySerialnbr() Group by the serialnbr column
 * @method     ChildRegisterLogQuery groupByUserid() Group by the userid column
 * @method     ChildRegisterLogQuery groupByDate() Group by the date column
 *
 * @method     ChildRegisterLogQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildRegisterLogQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildRegisterLogQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildRegisterLogQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildRegisterLogQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildRegisterLogQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildRegisterLog findOne(ConnectionInterface $con = null) Return the first ChildRegisterLog matching the query
 * @method     ChildRegisterLog findOneOrCreate(ConnectionInterface $con = null) Return the first ChildRegisterLog matching the query, or a new ChildRegisterLog object populated from the query conditions when no match is found
 *
 * @method     ChildRegisterLog findOneByLogid(int $logid) Return the first ChildRegisterLog filtered by the logid column
 * @method     ChildRegisterLog findOneBySerialnbr(string $serialnbr) Return the first ChildRegisterLog filtered by the serialnbr column
 * @method     ChildRegisterLog findOneByUserid(string $userid) Return the first ChildRegisterLog filtered by the userid column
 * @method     ChildRegisterLog findOneByDate(string $date) Return the first ChildRegisterLog filtered by the date column *

 * @method     ChildRegisterLog requirePk($key, ConnectionInterface $con = null) Return the ChildRegisterLog by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRegisterLog requireOne(ConnectionInterface $con = null) Return the first ChildRegisterLog matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildRegisterLog requireOneByLogid(int $logid) Return the first ChildRegisterLog filtered by the logid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRegisterLog requireOneBySerialnbr(string $serialnbr) Return the first ChildRegisterLog filtered by the serialnbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRegisterLog requireOneByUserid(string $userid) Return the first ChildRegisterLog filtered by the userid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRegisterLog requireOneByDate(string $date) Return the first ChildRegisterLog filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildRegisterLog[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildRegisterLog objects based on current ModelCriteria
 * @method     ChildRegisterLog[]|ObjectCollection findByLogid(int $logid) Return ChildRegisterLog objects filtered by the logid column
 * @method     ChildRegisterLog[]|ObjectCollection findBySerialnbr(string $serialnbr) Return ChildRegisterLog objects filtered by the serialnbr column
 * @method     ChildRegisterLog[]|ObjectCollection findByUserid(string $userid) Return ChildRegisterLog objects filtered by the userid column
 * @method     ChildRegisterLog[]|ObjectCollection findByDate(string $date) Return ChildRegisterLog objects filtered by the date column
 * @method     ChildRegisterLog[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class RegisterLogQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\RegisterLogQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\RegisterLog', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildRegisterLogQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildRegisterLogQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildRegisterLogQuery) {
            return $criteria;
        }
        $query = new ChildRegisterLogQuery();
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
     * @return ChildRegisterLog|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(RegisterLogTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = RegisterLogTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildRegisterLog A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT logid, serialnbr, userid, date FROM register_log WHERE logid = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildRegisterLog $obj */
            $obj = new ChildRegisterLog();
            $obj->hydrate($row);
            RegisterLogTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildRegisterLog|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildRegisterLogQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RegisterLogTableMap::COL_LOGID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildRegisterLogQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RegisterLogTableMap::COL_LOGID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the logid column
     *
     * Example usage:
     * <code>
     * $query->filterByLogid(1234); // WHERE logid = 1234
     * $query->filterByLogid(array(12, 34)); // WHERE logid IN (12, 34)
     * $query->filterByLogid(array('min' => 12)); // WHERE logid > 12
     * </code>
     *
     * @param     mixed $logid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRegisterLogQuery The current query, for fluid interface
     */
    public function filterByLogid($logid = null, $comparison = null)
    {
        if (is_array($logid)) {
            $useMinMax = false;
            if (isset($logid['min'])) {
                $this->addUsingAlias(RegisterLogTableMap::COL_LOGID, $logid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($logid['max'])) {
                $this->addUsingAlias(RegisterLogTableMap::COL_LOGID, $logid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RegisterLogTableMap::COL_LOGID, $logid, $comparison);
    }

    /**
     * Filter the query on the serialnbr column
     *
     * Example usage:
     * <code>
     * $query->filterBySerialnbr('fooValue');   // WHERE serialnbr = 'fooValue'
     * $query->filterBySerialnbr('%fooValue%', Criteria::LIKE); // WHERE serialnbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $serialnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRegisterLogQuery The current query, for fluid interface
     */
    public function filterBySerialnbr($serialnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($serialnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RegisterLogTableMap::COL_SERIALNBR, $serialnbr, $comparison);
    }

    /**
     * Filter the query on the userid column
     *
     * Example usage:
     * <code>
     * $query->filterByUserid('fooValue');   // WHERE userid = 'fooValue'
     * $query->filterByUserid('%fooValue%', Criteria::LIKE); // WHERE userid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRegisterLogQuery The current query, for fluid interface
     */
    public function filterByUserid($userid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RegisterLogTableMap::COL_USERID, $userid, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('2011-03-14'); // WHERE date = '2011-03-14'
     * $query->filterByDate('now'); // WHERE date = '2011-03-14'
     * $query->filterByDate(array('max' => 'yesterday')); // WHERE date > '2011-03-13'
     * </code>
     *
     * @param     mixed $date The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRegisterLogQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(RegisterLogTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(RegisterLogTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RegisterLogTableMap::COL_DATE, $date, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildRegisterLog $registerLog Object to remove from the list of results
     *
     * @return $this|ChildRegisterLogQuery The current query, for fluid interface
     */
    public function prune($registerLog = null)
    {
        if ($registerLog) {
            $this->addUsingAlias(RegisterLogTableMap::COL_LOGID, $registerLog->getLogid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the register_log table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(RegisterLogTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            RegisterLogTableMap::clearInstancePool();
            RegisterLogTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(RegisterLogTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(RegisterLogTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            RegisterLogTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            RegisterLogTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // RegisterLogQuery
