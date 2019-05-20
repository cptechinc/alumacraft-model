<?php

namespace Base;

use \Countries as ChildCountries;
use \CountriesQuery as ChildCountriesQuery;
use \Exception;
use \PDO;
use Map\CountriesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'countries' table.
 *
 *
 *
 * @method     ChildCountriesQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildCountriesQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCountriesQuery orderByContinent($order = Criteria::ASC) Order by the continent column
 *
 * @method     ChildCountriesQuery groupByCode() Group by the code column
 * @method     ChildCountriesQuery groupByName() Group by the name column
 * @method     ChildCountriesQuery groupByContinent() Group by the continent column
 *
 * @method     ChildCountriesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCountriesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCountriesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCountriesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCountriesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCountriesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCountries findOne(ConnectionInterface $con = null) Return the first ChildCountries matching the query
 * @method     ChildCountries findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCountries matching the query, or a new ChildCountries object populated from the query conditions when no match is found
 *
 * @method     ChildCountries findOneByCode(string $code) Return the first ChildCountries filtered by the code column
 * @method     ChildCountries findOneByName(string $name) Return the first ChildCountries filtered by the name column
 * @method     ChildCountries findOneByContinent(string $continent) Return the first ChildCountries filtered by the continent column *

 * @method     ChildCountries requirePk($key, ConnectionInterface $con = null) Return the ChildCountries by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCountries requireOne(ConnectionInterface $con = null) Return the first ChildCountries matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCountries requireOneByCode(string $code) Return the first ChildCountries filtered by the code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCountries requireOneByName(string $name) Return the first ChildCountries filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCountries requireOneByContinent(string $continent) Return the first ChildCountries filtered by the continent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCountries[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCountries objects based on current ModelCriteria
 * @method     ChildCountries[]|ObjectCollection findByCode(string $code) Return ChildCountries objects filtered by the code column
 * @method     ChildCountries[]|ObjectCollection findByName(string $name) Return ChildCountries objects filtered by the name column
 * @method     ChildCountries[]|ObjectCollection findByContinent(string $continent) Return ChildCountries objects filtered by the continent column
 * @method     ChildCountries[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CountriesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CountriesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Countries', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCountriesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCountriesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCountriesQuery) {
            return $criteria;
        }
        $query = new ChildCountriesQuery();
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
     * @return ChildCountries|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CountriesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CountriesTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCountries A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT code, name, continent FROM countries WHERE code = :p0';
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
            /** @var ChildCountries $obj */
            $obj = new ChildCountries();
            $obj->hydrate($row);
            CountriesTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCountries|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCountriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CountriesTableMap::COL_CODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCountriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CountriesTableMap::COL_CODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%', Criteria::LIKE); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCountriesQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountriesTableMap::COL_CODE, $code, $comparison);
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
     * @return $this|ChildCountriesQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountriesTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the continent column
     *
     * Example usage:
     * <code>
     * $query->filterByContinent('fooValue');   // WHERE continent = 'fooValue'
     * $query->filterByContinent('%fooValue%', Criteria::LIKE); // WHERE continent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $continent The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCountriesQuery The current query, for fluid interface
     */
    public function filterByContinent($continent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($continent)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountriesTableMap::COL_CONTINENT, $continent, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCountries $countries Object to remove from the list of results
     *
     * @return $this|ChildCountriesQuery The current query, for fluid interface
     */
    public function prune($countries = null)
    {
        if ($countries) {
            $this->addUsingAlias(CountriesTableMap::COL_CODE, $countries->getCode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the countries table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CountriesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CountriesTableMap::clearInstancePool();
            CountriesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CountriesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CountriesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CountriesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CountriesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CountriesQuery
