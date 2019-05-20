<?php

namespace Base;

use \Sessions as ChildSessions;
use \SessionsQuery as ChildSessionsQuery;
use \Exception;
use \PDO;
use Map\SessionsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'sessions' table.
 *
 *
 *
 * @method     ChildSessionsQuery orderByRecord($order = Criteria::ASC) Order by the record column
 * @method     ChildSessionsQuery orderBySessionid($order = Criteria::ASC) Order by the sessionid column
 * @method     ChildSessionsQuery orderByExternalsessionid($order = Criteria::ASC) Order by the externalsessionid column
 * @method     ChildSessionsQuery orderByExternalrecord($order = Criteria::ASC) Order by the externalrecord column
 * @method     ChildSessionsQuery orderByUserid($order = Criteria::ASC) Order by the userid column
 * @method     ChildSessionsQuery orderByDate($order = Criteria::ASC) Order by the date column
 *
 * @method     ChildSessionsQuery groupByRecord() Group by the record column
 * @method     ChildSessionsQuery groupBySessionid() Group by the sessionid column
 * @method     ChildSessionsQuery groupByExternalsessionid() Group by the externalsessionid column
 * @method     ChildSessionsQuery groupByExternalrecord() Group by the externalrecord column
 * @method     ChildSessionsQuery groupByUserid() Group by the userid column
 * @method     ChildSessionsQuery groupByDate() Group by the date column
 *
 * @method     ChildSessionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSessionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSessionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSessionsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSessionsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSessionsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSessions findOne(ConnectionInterface $con = null) Return the first ChildSessions matching the query
 * @method     ChildSessions findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSessions matching the query, or a new ChildSessions object populated from the query conditions when no match is found
 *
 * @method     ChildSessions findOneByRecord(int $record) Return the first ChildSessions filtered by the record column
 * @method     ChildSessions findOneBySessionid(string $sessionid) Return the first ChildSessions filtered by the sessionid column
 * @method     ChildSessions findOneByExternalsessionid(string $externalsessionid) Return the first ChildSessions filtered by the externalsessionid column
 * @method     ChildSessions findOneByExternalrecord(string $externalrecord) Return the first ChildSessions filtered by the externalrecord column
 * @method     ChildSessions findOneByUserid(string $userid) Return the first ChildSessions filtered by the userid column
 * @method     ChildSessions findOneByDate(string $date) Return the first ChildSessions filtered by the date column *

 * @method     ChildSessions requirePk($key, ConnectionInterface $con = null) Return the ChildSessions by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSessions requireOne(ConnectionInterface $con = null) Return the first ChildSessions matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSessions requireOneByRecord(int $record) Return the first ChildSessions filtered by the record column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSessions requireOneBySessionid(string $sessionid) Return the first ChildSessions filtered by the sessionid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSessions requireOneByExternalsessionid(string $externalsessionid) Return the first ChildSessions filtered by the externalsessionid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSessions requireOneByExternalrecord(string $externalrecord) Return the first ChildSessions filtered by the externalrecord column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSessions requireOneByUserid(string $userid) Return the first ChildSessions filtered by the userid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSessions requireOneByDate(string $date) Return the first ChildSessions filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSessions[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSessions objects based on current ModelCriteria
 * @method     ChildSessions[]|ObjectCollection findByRecord(int $record) Return ChildSessions objects filtered by the record column
 * @method     ChildSessions[]|ObjectCollection findBySessionid(string $sessionid) Return ChildSessions objects filtered by the sessionid column
 * @method     ChildSessions[]|ObjectCollection findByExternalsessionid(string $externalsessionid) Return ChildSessions objects filtered by the externalsessionid column
 * @method     ChildSessions[]|ObjectCollection findByExternalrecord(string $externalrecord) Return ChildSessions objects filtered by the externalrecord column
 * @method     ChildSessions[]|ObjectCollection findByUserid(string $userid) Return ChildSessions objects filtered by the userid column
 * @method     ChildSessions[]|ObjectCollection findByDate(string $date) Return ChildSessions objects filtered by the date column
 * @method     ChildSessions[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SessionsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SessionsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Sessions', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSessionsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSessionsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSessionsQuery) {
            return $criteria;
        }
        $query = new ChildSessionsQuery();
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
     * @return ChildSessions|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SessionsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SessionsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSessions A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT record, sessionid, externalsessionid, externalrecord, userid, date FROM sessions WHERE record = :p0';
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
            /** @var ChildSessions $obj */
            $obj = new ChildSessions();
            $obj->hydrate($row);
            SessionsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSessions|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSessionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SessionsTableMap::COL_RECORD, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSessionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SessionsTableMap::COL_RECORD, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the record column
     *
     * Example usage:
     * <code>
     * $query->filterByRecord(1234); // WHERE record = 1234
     * $query->filterByRecord(array(12, 34)); // WHERE record IN (12, 34)
     * $query->filterByRecord(array('min' => 12)); // WHERE record > 12
     * </code>
     *
     * @param     mixed $record The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSessionsQuery The current query, for fluid interface
     */
    public function filterByRecord($record = null, $comparison = null)
    {
        if (is_array($record)) {
            $useMinMax = false;
            if (isset($record['min'])) {
                $this->addUsingAlias(SessionsTableMap::COL_RECORD, $record['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($record['max'])) {
                $this->addUsingAlias(SessionsTableMap::COL_RECORD, $record['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SessionsTableMap::COL_RECORD, $record, $comparison);
    }

    /**
     * Filter the query on the sessionid column
     *
     * Example usage:
     * <code>
     * $query->filterBySessionid('fooValue');   // WHERE sessionid = 'fooValue'
     * $query->filterBySessionid('%fooValue%', Criteria::LIKE); // WHERE sessionid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sessionid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSessionsQuery The current query, for fluid interface
     */
    public function filterBySessionid($sessionid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sessionid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SessionsTableMap::COL_SESSIONID, $sessionid, $comparison);
    }

    /**
     * Filter the query on the externalsessionid column
     *
     * Example usage:
     * <code>
     * $query->filterByExternalsessionid('fooValue');   // WHERE externalsessionid = 'fooValue'
     * $query->filterByExternalsessionid('%fooValue%', Criteria::LIKE); // WHERE externalsessionid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $externalsessionid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSessionsQuery The current query, for fluid interface
     */
    public function filterByExternalsessionid($externalsessionid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($externalsessionid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SessionsTableMap::COL_EXTERNALSESSIONID, $externalsessionid, $comparison);
    }

    /**
     * Filter the query on the externalrecord column
     *
     * Example usage:
     * <code>
     * $query->filterByExternalrecord('fooValue');   // WHERE externalrecord = 'fooValue'
     * $query->filterByExternalrecord('%fooValue%', Criteria::LIKE); // WHERE externalrecord LIKE '%fooValue%'
     * </code>
     *
     * @param     string $externalrecord The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSessionsQuery The current query, for fluid interface
     */
    public function filterByExternalrecord($externalrecord = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($externalrecord)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SessionsTableMap::COL_EXTERNALRECORD, $externalrecord, $comparison);
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
     * @return $this|ChildSessionsQuery The current query, for fluid interface
     */
    public function filterByUserid($userid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SessionsTableMap::COL_USERID, $userid, $comparison);
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
     * @return $this|ChildSessionsQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(SessionsTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(SessionsTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SessionsTableMap::COL_DATE, $date, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSessions $sessions Object to remove from the list of results
     *
     * @return $this|ChildSessionsQuery The current query, for fluid interface
     */
    public function prune($sessions = null)
    {
        if ($sessions) {
            $this->addUsingAlias(SessionsTableMap::COL_RECORD, $sessions->getRecord(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the sessions table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SessionsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SessionsTableMap::clearInstancePool();
            SessionsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SessionsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SessionsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SessionsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SessionsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SessionsQuery
