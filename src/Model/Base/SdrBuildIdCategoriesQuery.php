<?php

namespace Base;

use \SdrBuildIdCategories as ChildSdrBuildIdCategories;
use \SdrBuildIdCategoriesQuery as ChildSdrBuildIdCategoriesQuery;
use \Exception;
use \PDO;
use Map\SdrBuildIdCategoriesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'SDR_build_id_categories' table.
 *
 *
 *
 * @method     ChildSdrBuildIdCategoriesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildSdrBuildIdCategoriesQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method     ChildSdrBuildIdCategoriesQuery orderByModelNameReal($order = Criteria::ASC) Order by the model_name_real column
 * @method     ChildSdrBuildIdCategoriesQuery orderByClothingGiftAmounts($order = Criteria::ASC) Order by the clothing_gift_amounts column
 *
 * @method     ChildSdrBuildIdCategoriesQuery groupById() Group by the id column
 * @method     ChildSdrBuildIdCategoriesQuery groupByItemId() Group by the item_id column
 * @method     ChildSdrBuildIdCategoriesQuery groupByModelNameReal() Group by the model_name_real column
 * @method     ChildSdrBuildIdCategoriesQuery groupByClothingGiftAmounts() Group by the clothing_gift_amounts column
 *
 * @method     ChildSdrBuildIdCategoriesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSdrBuildIdCategoriesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSdrBuildIdCategoriesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSdrBuildIdCategoriesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSdrBuildIdCategoriesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSdrBuildIdCategoriesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSdrBuildIdCategories findOne(ConnectionInterface $con = null) Return the first ChildSdrBuildIdCategories matching the query
 * @method     ChildSdrBuildIdCategories findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSdrBuildIdCategories matching the query, or a new ChildSdrBuildIdCategories object populated from the query conditions when no match is found
 *
 * @method     ChildSdrBuildIdCategories findOneById(int $id) Return the first ChildSdrBuildIdCategories filtered by the id column
 * @method     ChildSdrBuildIdCategories findOneByItemId(int $item_id) Return the first ChildSdrBuildIdCategories filtered by the item_id column
 * @method     ChildSdrBuildIdCategories findOneByModelNameReal(string $model_name_real) Return the first ChildSdrBuildIdCategories filtered by the model_name_real column
 * @method     ChildSdrBuildIdCategories findOneByClothingGiftAmounts(string $clothing_gift_amounts) Return the first ChildSdrBuildIdCategories filtered by the clothing_gift_amounts column *

 * @method     ChildSdrBuildIdCategories requirePk($key, ConnectionInterface $con = null) Return the ChildSdrBuildIdCategories by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSdrBuildIdCategories requireOne(ConnectionInterface $con = null) Return the first ChildSdrBuildIdCategories matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSdrBuildIdCategories requireOneById(int $id) Return the first ChildSdrBuildIdCategories filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSdrBuildIdCategories requireOneByItemId(int $item_id) Return the first ChildSdrBuildIdCategories filtered by the item_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSdrBuildIdCategories requireOneByModelNameReal(string $model_name_real) Return the first ChildSdrBuildIdCategories filtered by the model_name_real column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSdrBuildIdCategories requireOneByClothingGiftAmounts(string $clothing_gift_amounts) Return the first ChildSdrBuildIdCategories filtered by the clothing_gift_amounts column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSdrBuildIdCategories[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSdrBuildIdCategories objects based on current ModelCriteria
 * @method     ChildSdrBuildIdCategories[]|ObjectCollection findById(int $id) Return ChildSdrBuildIdCategories objects filtered by the id column
 * @method     ChildSdrBuildIdCategories[]|ObjectCollection findByItemId(int $item_id) Return ChildSdrBuildIdCategories objects filtered by the item_id column
 * @method     ChildSdrBuildIdCategories[]|ObjectCollection findByModelNameReal(string $model_name_real) Return ChildSdrBuildIdCategories objects filtered by the model_name_real column
 * @method     ChildSdrBuildIdCategories[]|ObjectCollection findByClothingGiftAmounts(string $clothing_gift_amounts) Return ChildSdrBuildIdCategories objects filtered by the clothing_gift_amounts column
 * @method     ChildSdrBuildIdCategories[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SdrBuildIdCategoriesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SdrBuildIdCategoriesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SdrBuildIdCategories', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSdrBuildIdCategoriesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSdrBuildIdCategoriesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSdrBuildIdCategoriesQuery) {
            return $criteria;
        }
        $query = new ChildSdrBuildIdCategoriesQuery();
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
     * @return ChildSdrBuildIdCategories|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SdrBuildIdCategoriesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SdrBuildIdCategoriesTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSdrBuildIdCategories A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, item_id, model_name_real, clothing_gift_amounts FROM SDR_build_id_categories WHERE id = :p0';
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
            /** @var ChildSdrBuildIdCategories $obj */
            $obj = new ChildSdrBuildIdCategories();
            $obj->hydrate($row);
            SdrBuildIdCategoriesTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSdrBuildIdCategories|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSdrBuildIdCategoriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SdrBuildIdCategoriesTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSdrBuildIdCategoriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SdrBuildIdCategoriesTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildSdrBuildIdCategoriesQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(SdrBuildIdCategoriesTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(SdrBuildIdCategoriesTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SdrBuildIdCategoriesTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the item_id column
     *
     * Example usage:
     * <code>
     * $query->filterByItemId(1234); // WHERE item_id = 1234
     * $query->filterByItemId(array(12, 34)); // WHERE item_id IN (12, 34)
     * $query->filterByItemId(array('min' => 12)); // WHERE item_id > 12
     * </code>
     *
     * @param     mixed $itemId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSdrBuildIdCategoriesQuery The current query, for fluid interface
     */
    public function filterByItemId($itemId = null, $comparison = null)
    {
        if (is_array($itemId)) {
            $useMinMax = false;
            if (isset($itemId['min'])) {
                $this->addUsingAlias(SdrBuildIdCategoriesTableMap::COL_ITEM_ID, $itemId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemId['max'])) {
                $this->addUsingAlias(SdrBuildIdCategoriesTableMap::COL_ITEM_ID, $itemId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SdrBuildIdCategoriesTableMap::COL_ITEM_ID, $itemId, $comparison);
    }

    /**
     * Filter the query on the model_name_real column
     *
     * Example usage:
     * <code>
     * $query->filterByModelNameReal('fooValue');   // WHERE model_name_real = 'fooValue'
     * $query->filterByModelNameReal('%fooValue%', Criteria::LIKE); // WHERE model_name_real LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modelNameReal The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSdrBuildIdCategoriesQuery The current query, for fluid interface
     */
    public function filterByModelNameReal($modelNameReal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modelNameReal)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SdrBuildIdCategoriesTableMap::COL_MODEL_NAME_REAL, $modelNameReal, $comparison);
    }

    /**
     * Filter the query on the clothing_gift_amounts column
     *
     * Example usage:
     * <code>
     * $query->filterByClothingGiftAmounts(1234); // WHERE clothing_gift_amounts = 1234
     * $query->filterByClothingGiftAmounts(array(12, 34)); // WHERE clothing_gift_amounts IN (12, 34)
     * $query->filterByClothingGiftAmounts(array('min' => 12)); // WHERE clothing_gift_amounts > 12
     * </code>
     *
     * @param     mixed $clothingGiftAmounts The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSdrBuildIdCategoriesQuery The current query, for fluid interface
     */
    public function filterByClothingGiftAmounts($clothingGiftAmounts = null, $comparison = null)
    {
        if (is_array($clothingGiftAmounts)) {
            $useMinMax = false;
            if (isset($clothingGiftAmounts['min'])) {
                $this->addUsingAlias(SdrBuildIdCategoriesTableMap::COL_CLOTHING_GIFT_AMOUNTS, $clothingGiftAmounts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clothingGiftAmounts['max'])) {
                $this->addUsingAlias(SdrBuildIdCategoriesTableMap::COL_CLOTHING_GIFT_AMOUNTS, $clothingGiftAmounts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SdrBuildIdCategoriesTableMap::COL_CLOTHING_GIFT_AMOUNTS, $clothingGiftAmounts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSdrBuildIdCategories $sdrBuildIdCategories Object to remove from the list of results
     *
     * @return $this|ChildSdrBuildIdCategoriesQuery The current query, for fluid interface
     */
    public function prune($sdrBuildIdCategories = null)
    {
        if ($sdrBuildIdCategories) {
            $this->addUsingAlias(SdrBuildIdCategoriesTableMap::COL_ID, $sdrBuildIdCategories->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the SDR_build_id_categories table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SdrBuildIdCategoriesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SdrBuildIdCategoriesTableMap::clearInstancePool();
            SdrBuildIdCategoriesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SdrBuildIdCategoriesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SdrBuildIdCategoriesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SdrBuildIdCategoriesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SdrBuildIdCategoriesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SdrBuildIdCategoriesQuery
