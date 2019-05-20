<?php

namespace Base;

use \Horsepower as ChildHorsepower;
use \HorsepowerQuery as ChildHorsepowerQuery;
use \Exception;
use \PDO;
use Map\HorsepowerTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'horsepower' table.
 *
 *
 *
 * @method     ChildHorsepowerQuery orderByHorsepower($order = Criteria::ASC) Order by the horsepower column
 *
 * @method     ChildHorsepowerQuery groupByHorsepower() Group by the horsepower column
 *
 * @method     ChildHorsepowerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildHorsepowerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildHorsepowerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildHorsepowerQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildHorsepowerQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildHorsepowerQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildHorsepower findOne(ConnectionInterface $con = null) Return the first ChildHorsepower matching the query
 * @method     ChildHorsepower findOneOrCreate(ConnectionInterface $con = null) Return the first ChildHorsepower matching the query, or a new ChildHorsepower object populated from the query conditions when no match is found
 *
 * @method     ChildHorsepower findOneByHorsepower(string $horsepower) Return the first ChildHorsepower filtered by the horsepower column *

 * @method     ChildHorsepower requirePk($key, ConnectionInterface $con = null) Return the ChildHorsepower by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHorsepower requireOne(ConnectionInterface $con = null) Return the first ChildHorsepower matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildHorsepower requireOneByHorsepower(string $horsepower) Return the first ChildHorsepower filtered by the horsepower column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildHorsepower[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildHorsepower objects based on current ModelCriteria
 * @method     ChildHorsepower[]|ObjectCollection findByHorsepower(string $horsepower) Return ChildHorsepower objects filtered by the horsepower column
 * @method     ChildHorsepower[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class HorsepowerQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\HorsepowerQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Horsepower', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildHorsepowerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildHorsepowerQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildHorsepowerQuery) {
            return $criteria;
        }
        $query = new ChildHorsepowerQuery();
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
     * @return ChildHorsepower|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(HorsepowerTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = HorsepowerTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildHorsepower A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT horsepower FROM horsepower WHERE horsepower = :p0';
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
            /** @var ChildHorsepower $obj */
            $obj = new ChildHorsepower();
            $obj->hydrate($row);
            HorsepowerTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildHorsepower|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildHorsepowerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(HorsepowerTableMap::COL_HORSEPOWER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildHorsepowerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(HorsepowerTableMap::COL_HORSEPOWER, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the horsepower column
     *
     * Example usage:
     * <code>
     * $query->filterByHorsepower(1234); // WHERE horsepower = 1234
     * $query->filterByHorsepower(array(12, 34)); // WHERE horsepower IN (12, 34)
     * $query->filterByHorsepower(array('min' => 12)); // WHERE horsepower > 12
     * </code>
     *
     * @param     mixed $horsepower The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHorsepowerQuery The current query, for fluid interface
     */
    public function filterByHorsepower($horsepower = null, $comparison = null)
    {
        if (is_array($horsepower)) {
            $useMinMax = false;
            if (isset($horsepower['min'])) {
                $this->addUsingAlias(HorsepowerTableMap::COL_HORSEPOWER, $horsepower['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($horsepower['max'])) {
                $this->addUsingAlias(HorsepowerTableMap::COL_HORSEPOWER, $horsepower['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HorsepowerTableMap::COL_HORSEPOWER, $horsepower, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildHorsepower $horsepower Object to remove from the list of results
     *
     * @return $this|ChildHorsepowerQuery The current query, for fluid interface
     */
    public function prune($horsepower = null)
    {
        if ($horsepower) {
            $this->addUsingAlias(HorsepowerTableMap::COL_HORSEPOWER, $horsepower->getHorsepower(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the horsepower table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(HorsepowerTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            HorsepowerTableMap::clearInstancePool();
            HorsepowerTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(HorsepowerTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(HorsepowerTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            HorsepowerTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            HorsepowerTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // HorsepowerQuery
