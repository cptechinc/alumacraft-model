<?php

namespace Base;

use \BoatMaster as ChildBoatMaster;
use \BoatMasterQuery as ChildBoatMasterQuery;
use \Exception;
use \PDO;
use Map\BoatMasterTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'boat_master' table.
 *
 *
 *
 * @method     ChildBoatMasterQuery orderByItemnbr($order = Criteria::ASC) Order by the ItemNbr column
 * @method     ChildBoatMasterQuery orderByItemdesc1($order = Criteria::ASC) Order by the ItemDesc1 column
 * @method     ChildBoatMasterQuery orderByDate($order = Criteria::ASC) Order by the Date column
 * @method     ChildBoatMasterQuery orderByTime($order = Criteria::ASC) Order by the Time column
 * @method     ChildBoatMasterQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildBoatMasterQuery groupByItemnbr() Group by the ItemNbr column
 * @method     ChildBoatMasterQuery groupByItemdesc1() Group by the ItemDesc1 column
 * @method     ChildBoatMasterQuery groupByDate() Group by the Date column
 * @method     ChildBoatMasterQuery groupByTime() Group by the Time column
 * @method     ChildBoatMasterQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildBoatMasterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildBoatMasterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildBoatMasterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildBoatMasterQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildBoatMasterQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildBoatMasterQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildBoatMasterQuery leftJoinSoDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the SoDetail relation
 * @method     ChildBoatMasterQuery rightJoinSoDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SoDetail relation
 * @method     ChildBoatMasterQuery innerJoinSoDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the SoDetail relation
 *
 * @method     ChildBoatMasterQuery joinWithSoDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SoDetail relation
 *
 * @method     ChildBoatMasterQuery leftJoinWithSoDetail() Adds a LEFT JOIN clause and with to the query using the SoDetail relation
 * @method     ChildBoatMasterQuery rightJoinWithSoDetail() Adds a RIGHT JOIN clause and with to the query using the SoDetail relation
 * @method     ChildBoatMasterQuery innerJoinWithSoDetail() Adds a INNER JOIN clause and with to the query using the SoDetail relation
 *
 * @method     \SoDetailQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildBoatMaster findOne(ConnectionInterface $con = null) Return the first ChildBoatMaster matching the query
 * @method     ChildBoatMaster findOneOrCreate(ConnectionInterface $con = null) Return the first ChildBoatMaster matching the query, or a new ChildBoatMaster object populated from the query conditions when no match is found
 *
 * @method     ChildBoatMaster findOneByItemnbr(string $ItemNbr) Return the first ChildBoatMaster filtered by the ItemNbr column
 * @method     ChildBoatMaster findOneByItemdesc1(string $ItemDesc1) Return the first ChildBoatMaster filtered by the ItemDesc1 column
 * @method     ChildBoatMaster findOneByDate(int $Date) Return the first ChildBoatMaster filtered by the Date column
 * @method     ChildBoatMaster findOneByTime(int $Time) Return the first ChildBoatMaster filtered by the Time column
 * @method     ChildBoatMaster findOneByDummy(string $dummy) Return the first ChildBoatMaster filtered by the dummy column *

 * @method     ChildBoatMaster requirePk($key, ConnectionInterface $con = null) Return the ChildBoatMaster by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBoatMaster requireOne(ConnectionInterface $con = null) Return the first ChildBoatMaster matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBoatMaster requireOneByItemnbr(string $ItemNbr) Return the first ChildBoatMaster filtered by the ItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBoatMaster requireOneByItemdesc1(string $ItemDesc1) Return the first ChildBoatMaster filtered by the ItemDesc1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBoatMaster requireOneByDate(int $Date) Return the first ChildBoatMaster filtered by the Date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBoatMaster requireOneByTime(int $Time) Return the first ChildBoatMaster filtered by the Time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBoatMaster requireOneByDummy(string $dummy) Return the first ChildBoatMaster filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBoatMaster[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildBoatMaster objects based on current ModelCriteria
 * @method     ChildBoatMaster[]|ObjectCollection findByItemnbr(string $ItemNbr) Return ChildBoatMaster objects filtered by the ItemNbr column
 * @method     ChildBoatMaster[]|ObjectCollection findByItemdesc1(string $ItemDesc1) Return ChildBoatMaster objects filtered by the ItemDesc1 column
 * @method     ChildBoatMaster[]|ObjectCollection findByDate(int $Date) Return ChildBoatMaster objects filtered by the Date column
 * @method     ChildBoatMaster[]|ObjectCollection findByTime(int $Time) Return ChildBoatMaster objects filtered by the Time column
 * @method     ChildBoatMaster[]|ObjectCollection findByDummy(string $dummy) Return ChildBoatMaster objects filtered by the dummy column
 * @method     ChildBoatMaster[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class BoatMasterQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\BoatMasterQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\BoatMaster', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildBoatMasterQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildBoatMasterQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildBoatMasterQuery) {
            return $criteria;
        }
        $query = new ChildBoatMasterQuery();
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
     * @return ChildBoatMaster|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(BoatMasterTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = BoatMasterTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildBoatMaster A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ItemNbr, ItemDesc1, Date, Time, dummy FROM boat_master WHERE ItemNbr = :p0';
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
            /** @var ChildBoatMaster $obj */
            $obj = new ChildBoatMaster();
            $obj->hydrate($row);
            BoatMasterTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildBoatMaster|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildBoatMasterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(BoatMasterTableMap::COL_ITEMNBR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildBoatMasterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(BoatMasterTableMap::COL_ITEMNBR, $keys, Criteria::IN);
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
     * @return $this|ChildBoatMasterQuery The current query, for fluid interface
     */
    public function filterByItemnbr($itemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BoatMasterTableMap::COL_ITEMNBR, $itemnbr, $comparison);
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
     * @return $this|ChildBoatMasterQuery The current query, for fluid interface
     */
    public function filterByItemdesc1($itemdesc1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemdesc1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BoatMasterTableMap::COL_ITEMDESC1, $itemdesc1, $comparison);
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
     * @return $this|ChildBoatMasterQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(BoatMasterTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(BoatMasterTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BoatMasterTableMap::COL_DATE, $date, $comparison);
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
     * @return $this|ChildBoatMasterQuery The current query, for fluid interface
     */
    public function filterByTime($time = null, $comparison = null)
    {
        if (is_array($time)) {
            $useMinMax = false;
            if (isset($time['min'])) {
                $this->addUsingAlias(BoatMasterTableMap::COL_TIME, $time['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($time['max'])) {
                $this->addUsingAlias(BoatMasterTableMap::COL_TIME, $time['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BoatMasterTableMap::COL_TIME, $time, $comparison);
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
     * @return $this|ChildBoatMasterQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BoatMasterTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \SoDetail object
     *
     * @param \SoDetail|ObjectCollection $soDetail the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildBoatMasterQuery The current query, for fluid interface
     */
    public function filterBySoDetail($soDetail, $comparison = null)
    {
        if ($soDetail instanceof \SoDetail) {
            return $this
                ->addUsingAlias(BoatMasterTableMap::COL_ITEMNBR, $soDetail->getInititemnbr(), $comparison);
        } elseif ($soDetail instanceof ObjectCollection) {
            return $this
                ->useSoDetailQuery()
                ->filterByPrimaryKeys($soDetail->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySoDetail() only accepts arguments of type \SoDetail or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoDetail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildBoatMasterQuery The current query, for fluid interface
     */
    public function joinSoDetail($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SoDetail');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SoDetail');
        }

        return $this;
    }

    /**
     * Use the SoDetail relation SoDetail object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SoDetailQuery A secondary query class using the current class as primary query
     */
    public function useSoDetailQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSoDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SoDetail', '\SoDetailQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildBoatMaster $boatMaster Object to remove from the list of results
     *
     * @return $this|ChildBoatMasterQuery The current query, for fluid interface
     */
    public function prune($boatMaster = null)
    {
        if ($boatMaster) {
            $this->addUsingAlias(BoatMasterTableMap::COL_ITEMNBR, $boatMaster->getItemnbr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the boat_master table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BoatMasterTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BoatMasterTableMap::clearInstancePool();
            BoatMasterTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(BoatMasterTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(BoatMasterTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            BoatMasterTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            BoatMasterTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // BoatMasterQuery
