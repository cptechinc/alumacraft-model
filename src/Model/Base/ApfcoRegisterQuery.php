<?php

namespace Base;

use \ApfcoRegister as ChildApfcoRegister;
use \ApfcoRegisterQuery as ChildApfcoRegisterQuery;
use \Exception;
use \PDO;
use Map\ApfcoRegisterTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'apfco_register' table.
 *
 *
 *
 * @method     ChildApfcoRegisterQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildApfcoRegisterQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildApfcoRegisterQuery orderByUserid($order = Criteria::ASC) Order by the userid column
 * @method     ChildApfcoRegisterQuery orderBySerial($order = Criteria::ASC) Order by the serial column
 * @method     ChildApfcoRegisterQuery orderByItemid($order = Criteria::ASC) Order by the itemid column
 * @method     ChildApfcoRegisterQuery orderByError($order = Criteria::ASC) Order by the error column
 * @method     ChildApfcoRegisterQuery orderByErrorMessage($order = Criteria::ASC) Order by the error_message column
 *
 * @method     ChildApfcoRegisterQuery groupById() Group by the id column
 * @method     ChildApfcoRegisterQuery groupByDate() Group by the date column
 * @method     ChildApfcoRegisterQuery groupByUserid() Group by the userid column
 * @method     ChildApfcoRegisterQuery groupBySerial() Group by the serial column
 * @method     ChildApfcoRegisterQuery groupByItemid() Group by the itemid column
 * @method     ChildApfcoRegisterQuery groupByError() Group by the error column
 * @method     ChildApfcoRegisterQuery groupByErrorMessage() Group by the error_message column
 *
 * @method     ChildApfcoRegisterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildApfcoRegisterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildApfcoRegisterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildApfcoRegisterQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildApfcoRegisterQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildApfcoRegisterQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildApfcoRegister findOne(ConnectionInterface $con = null) Return the first ChildApfcoRegister matching the query
 * @method     ChildApfcoRegister findOneOrCreate(ConnectionInterface $con = null) Return the first ChildApfcoRegister matching the query, or a new ChildApfcoRegister object populated from the query conditions when no match is found
 *
 * @method     ChildApfcoRegister findOneById(int $id) Return the first ChildApfcoRegister filtered by the id column
 * @method     ChildApfcoRegister findOneByDate(string $date) Return the first ChildApfcoRegister filtered by the date column
 * @method     ChildApfcoRegister findOneByUserid(string $userid) Return the first ChildApfcoRegister filtered by the userid column
 * @method     ChildApfcoRegister findOneBySerial(string $serial) Return the first ChildApfcoRegister filtered by the serial column
 * @method     ChildApfcoRegister findOneByItemid(string $itemid) Return the first ChildApfcoRegister filtered by the itemid column
 * @method     ChildApfcoRegister findOneByError(string $error) Return the first ChildApfcoRegister filtered by the error column
 * @method     ChildApfcoRegister findOneByErrorMessage(string $error_message) Return the first ChildApfcoRegister filtered by the error_message column *

 * @method     ChildApfcoRegister requirePk($key, ConnectionInterface $con = null) Return the ChildApfcoRegister by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApfcoRegister requireOne(ConnectionInterface $con = null) Return the first ChildApfcoRegister matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildApfcoRegister requireOneById(int $id) Return the first ChildApfcoRegister filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApfcoRegister requireOneByDate(string $date) Return the first ChildApfcoRegister filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApfcoRegister requireOneByUserid(string $userid) Return the first ChildApfcoRegister filtered by the userid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApfcoRegister requireOneBySerial(string $serial) Return the first ChildApfcoRegister filtered by the serial column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApfcoRegister requireOneByItemid(string $itemid) Return the first ChildApfcoRegister filtered by the itemid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApfcoRegister requireOneByError(string $error) Return the first ChildApfcoRegister filtered by the error column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApfcoRegister requireOneByErrorMessage(string $error_message) Return the first ChildApfcoRegister filtered by the error_message column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildApfcoRegister[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildApfcoRegister objects based on current ModelCriteria
 * @method     ChildApfcoRegister[]|ObjectCollection findById(int $id) Return ChildApfcoRegister objects filtered by the id column
 * @method     ChildApfcoRegister[]|ObjectCollection findByDate(string $date) Return ChildApfcoRegister objects filtered by the date column
 * @method     ChildApfcoRegister[]|ObjectCollection findByUserid(string $userid) Return ChildApfcoRegister objects filtered by the userid column
 * @method     ChildApfcoRegister[]|ObjectCollection findBySerial(string $serial) Return ChildApfcoRegister objects filtered by the serial column
 * @method     ChildApfcoRegister[]|ObjectCollection findByItemid(string $itemid) Return ChildApfcoRegister objects filtered by the itemid column
 * @method     ChildApfcoRegister[]|ObjectCollection findByError(string $error) Return ChildApfcoRegister objects filtered by the error column
 * @method     ChildApfcoRegister[]|ObjectCollection findByErrorMessage(string $error_message) Return ChildApfcoRegister objects filtered by the error_message column
 * @method     ChildApfcoRegister[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ApfcoRegisterQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ApfcoRegisterQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ApfcoRegister', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildApfcoRegisterQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildApfcoRegisterQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildApfcoRegisterQuery) {
            return $criteria;
        }
        $query = new ChildApfcoRegisterQuery();
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
     * @return ChildApfcoRegister|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ApfcoRegisterTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ApfcoRegisterTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildApfcoRegister A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, date, userid, serial, itemid, error, error_message FROM apfco_register WHERE id = :p0';
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
            /** @var ChildApfcoRegister $obj */
            $obj = new ChildApfcoRegister();
            $obj->hydrate($row);
            ApfcoRegisterTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildApfcoRegister|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildApfcoRegisterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ApfcoRegisterTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildApfcoRegisterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ApfcoRegisterTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApfcoRegisterQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ApfcoRegisterTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ApfcoRegisterTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApfcoRegisterTableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildApfcoRegisterQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(ApfcoRegisterTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(ApfcoRegisterTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApfcoRegisterTableMap::COL_DATE, $date, $comparison);
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
     * @return $this|ChildApfcoRegisterQuery The current query, for fluid interface
     */
    public function filterByUserid($userid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApfcoRegisterTableMap::COL_USERID, $userid, $comparison);
    }

    /**
     * Filter the query on the serial column
     *
     * Example usage:
     * <code>
     * $query->filterBySerial('fooValue');   // WHERE serial = 'fooValue'
     * $query->filterBySerial('%fooValue%', Criteria::LIKE); // WHERE serial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $serial The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApfcoRegisterQuery The current query, for fluid interface
     */
    public function filterBySerial($serial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($serial)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApfcoRegisterTableMap::COL_SERIAL, $serial, $comparison);
    }

    /**
     * Filter the query on the itemid column
     *
     * Example usage:
     * <code>
     * $query->filterByItemid('fooValue');   // WHERE itemid = 'fooValue'
     * $query->filterByItemid('%fooValue%', Criteria::LIKE); // WHERE itemid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApfcoRegisterQuery The current query, for fluid interface
     */
    public function filterByItemid($itemid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApfcoRegisterTableMap::COL_ITEMID, $itemid, $comparison);
    }

    /**
     * Filter the query on the error column
     *
     * Example usage:
     * <code>
     * $query->filterByError('fooValue');   // WHERE error = 'fooValue'
     * $query->filterByError('%fooValue%', Criteria::LIKE); // WHERE error LIKE '%fooValue%'
     * </code>
     *
     * @param     string $error The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApfcoRegisterQuery The current query, for fluid interface
     */
    public function filterByError($error = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($error)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApfcoRegisterTableMap::COL_ERROR, $error, $comparison);
    }

    /**
     * Filter the query on the error_message column
     *
     * Example usage:
     * <code>
     * $query->filterByErrorMessage('fooValue');   // WHERE error_message = 'fooValue'
     * $query->filterByErrorMessage('%fooValue%', Criteria::LIKE); // WHERE error_message LIKE '%fooValue%'
     * </code>
     *
     * @param     string $errorMessage The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApfcoRegisterQuery The current query, for fluid interface
     */
    public function filterByErrorMessage($errorMessage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($errorMessage)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApfcoRegisterTableMap::COL_ERROR_MESSAGE, $errorMessage, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildApfcoRegister $apfcoRegister Object to remove from the list of results
     *
     * @return $this|ChildApfcoRegisterQuery The current query, for fluid interface
     */
    public function prune($apfcoRegister = null)
    {
        if ($apfcoRegister) {
            $this->addUsingAlias(ApfcoRegisterTableMap::COL_ID, $apfcoRegister->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the apfco_register table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApfcoRegisterTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ApfcoRegisterTableMap::clearInstancePool();
            ApfcoRegisterTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ApfcoRegisterTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ApfcoRegisterTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ApfcoRegisterTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ApfcoRegisterTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ApfcoRegisterQuery
