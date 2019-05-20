<?php

namespace Base;

use \State as ChildState;
use \StateQuery as ChildStateQuery;
use \Exception;
use Map\StateTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'state' table.
 *
 *
 *
 * @method     ChildStateQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildStateQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildStateQuery orderByAbbreviation($order = Criteria::ASC) Order by the abbreviation column
 * @method     ChildStateQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     ChildStateQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     ChildStateQuery orderByAssocPress($order = Criteria::ASC) Order by the assoc_press column
 *
 * @method     ChildStateQuery groupById() Group by the id column
 * @method     ChildStateQuery groupByName() Group by the name column
 * @method     ChildStateQuery groupByAbbreviation() Group by the abbreviation column
 * @method     ChildStateQuery groupByCountry() Group by the country column
 * @method     ChildStateQuery groupByType() Group by the type column
 * @method     ChildStateQuery groupByAssocPress() Group by the assoc_press column
 *
 * @method     ChildStateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildStateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildStateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildStateQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildStateQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildStateQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildState findOne(ConnectionInterface $con = null) Return the first ChildState matching the query
 * @method     ChildState findOneOrCreate(ConnectionInterface $con = null) Return the first ChildState matching the query, or a new ChildState object populated from the query conditions when no match is found
 *
 * @method     ChildState findOneById(int $id) Return the first ChildState filtered by the id column
 * @method     ChildState findOneByName(string $name) Return the first ChildState filtered by the name column
 * @method     ChildState findOneByAbbreviation(string $abbreviation) Return the first ChildState filtered by the abbreviation column
 * @method     ChildState findOneByCountry(string $country) Return the first ChildState filtered by the country column
 * @method     ChildState findOneByType(string $type) Return the first ChildState filtered by the type column
 * @method     ChildState findOneByAssocPress(string $assoc_press) Return the first ChildState filtered by the assoc_press column *

 * @method     ChildState requirePk($key, ConnectionInterface $con = null) Return the ChildState by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildState requireOne(ConnectionInterface $con = null) Return the first ChildState matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildState requireOneById(int $id) Return the first ChildState filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildState requireOneByName(string $name) Return the first ChildState filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildState requireOneByAbbreviation(string $abbreviation) Return the first ChildState filtered by the abbreviation column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildState requireOneByCountry(string $country) Return the first ChildState filtered by the country column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildState requireOneByType(string $type) Return the first ChildState filtered by the type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildState requireOneByAssocPress(string $assoc_press) Return the first ChildState filtered by the assoc_press column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildState[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildState objects based on current ModelCriteria
 * @method     ChildState[]|ObjectCollection findById(int $id) Return ChildState objects filtered by the id column
 * @method     ChildState[]|ObjectCollection findByName(string $name) Return ChildState objects filtered by the name column
 * @method     ChildState[]|ObjectCollection findByAbbreviation(string $abbreviation) Return ChildState objects filtered by the abbreviation column
 * @method     ChildState[]|ObjectCollection findByCountry(string $country) Return ChildState objects filtered by the country column
 * @method     ChildState[]|ObjectCollection findByType(string $type) Return ChildState objects filtered by the type column
 * @method     ChildState[]|ObjectCollection findByAssocPress(string $assoc_press) Return ChildState objects filtered by the assoc_press column
 * @method     ChildState[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class StateQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\StateQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\State', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildStateQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildStateQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildStateQuery) {
            return $criteria;
        }
        $query = new ChildStateQuery();
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
     * @return ChildState|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The State object has no primary key');
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
        throw new LogicException('The State object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildStateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The State object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildStateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The State object has no primary key');
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
     * @return $this|ChildStateQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(StateTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(StateTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StateTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStateQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StateTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the abbreviation column
     *
     * Example usage:
     * <code>
     * $query->filterByAbbreviation('fooValue');   // WHERE abbreviation = 'fooValue'
     * $query->filterByAbbreviation('%fooValue%', Criteria::LIKE); // WHERE abbreviation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abbreviation The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStateQuery The current query, for fluid interface
     */
    public function filterByAbbreviation($abbreviation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abbreviation)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StateTableMap::COL_ABBREVIATION, $abbreviation, $comparison);
    }

    /**
     * Filter the query on the country column
     *
     * Example usage:
     * <code>
     * $query->filterByCountry('fooValue');   // WHERE country = 'fooValue'
     * $query->filterByCountry('%fooValue%', Criteria::LIKE); // WHERE country LIKE '%fooValue%'
     * </code>
     *
     * @param     string $country The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStateQuery The current query, for fluid interface
     */
    public function filterByCountry($country = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($country)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StateTableMap::COL_COUNTRY, $country, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%', Criteria::LIKE); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStateQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StateTableMap::COL_TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the assoc_press column
     *
     * Example usage:
     * <code>
     * $query->filterByAssocPress('fooValue');   // WHERE assoc_press = 'fooValue'
     * $query->filterByAssocPress('%fooValue%', Criteria::LIKE); // WHERE assoc_press LIKE '%fooValue%'
     * </code>
     *
     * @param     string $assocPress The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStateQuery The current query, for fluid interface
     */
    public function filterByAssocPress($assocPress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($assocPress)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StateTableMap::COL_ASSOC_PRESS, $assocPress, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildState $state Object to remove from the list of results
     *
     * @return $this|ChildStateQuery The current query, for fluid interface
     */
    public function prune($state = null)
    {
        if ($state) {
            throw new LogicException('State object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the state table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(StateTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            StateTableMap::clearInstancePool();
            StateTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(StateTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(StateTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            StateTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            StateTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // StateQuery
