<?php

namespace Base;

use \Optns as ChildOptns;
use \OptnsQuery as ChildOptnsQuery;
use \Exception;
use \PDO;
use Map\OptnsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'OPTNS' table.
 *
 *
 *
 * @method     ChildOptnsQuery orderByOptnSystem($order = Criteria::ASC) Order by the optn_system column
 * @method     ChildOptnsQuery orderByOptnCode($order = Criteria::ASC) Order by the optn_code column
 * @method     ChildOptnsQuery orderByOptnRecnbr($order = Criteria::ASC) Order by the optn_recnbr column
 * @method     ChildOptnsQuery orderByOptnId($order = Criteria::ASC) Order by the optn_id column
 * @method     ChildOptnsQuery orderByOptnIddesc($order = Criteria::ASC) Order by the optn_iddesc column
 * @method     ChildOptnsQuery orderByInititemnbr($order = Criteria::ASC) Order by the initItemNbr column
 * @method     ChildOptnsQuery orderByArcucustid($order = Criteria::ASC) Order by the arcuCustId column
 * @method     ChildOptnsQuery orderByArcushipid($order = Criteria::ASC) Order by the arcuShipId column
 * @method     ChildOptnsQuery orderByOptnCodeDesc($order = Criteria::ASC) Order by the optn_code_desc column
 * @method     ChildOptnsQuery orderByOptnValidate($order = Criteria::ASC) Order by the optn_validate column
 * @method     ChildOptnsQuery orderByOptnForce($order = Criteria::ASC) Order by the optn_force column
 * @method     ChildOptnsQuery orderByOptnNoteCode($order = Criteria::ASC) Order by the optn_note_code column
 * @method     ChildOptnsQuery orderByOptnListSeq($order = Criteria::ASC) Order by the optn_list_seq column
 * @method     ChildOptnsQuery orderByOptnFileName($order = Criteria::ASC) Order by the optn_file_name column
 * @method     ChildOptnsQuery orderByOptnAdvSearch($order = Criteria::ASC) Order by the optn_adv_search column
 * @method     ChildOptnsQuery orderByOptnFieldType($order = Criteria::ASC) Order by the optn_field_type column
 * @method     ChildOptnsQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildOptnsQuery groupByOptnSystem() Group by the optn_system column
 * @method     ChildOptnsQuery groupByOptnCode() Group by the optn_code column
 * @method     ChildOptnsQuery groupByOptnRecnbr() Group by the optn_recnbr column
 * @method     ChildOptnsQuery groupByOptnId() Group by the optn_id column
 * @method     ChildOptnsQuery groupByOptnIddesc() Group by the optn_iddesc column
 * @method     ChildOptnsQuery groupByInititemnbr() Group by the initItemNbr column
 * @method     ChildOptnsQuery groupByArcucustid() Group by the arcuCustId column
 * @method     ChildOptnsQuery groupByArcushipid() Group by the arcuShipId column
 * @method     ChildOptnsQuery groupByOptnCodeDesc() Group by the optn_code_desc column
 * @method     ChildOptnsQuery groupByOptnValidate() Group by the optn_validate column
 * @method     ChildOptnsQuery groupByOptnForce() Group by the optn_force column
 * @method     ChildOptnsQuery groupByOptnNoteCode() Group by the optn_note_code column
 * @method     ChildOptnsQuery groupByOptnListSeq() Group by the optn_list_seq column
 * @method     ChildOptnsQuery groupByOptnFileName() Group by the optn_file_name column
 * @method     ChildOptnsQuery groupByOptnAdvSearch() Group by the optn_adv_search column
 * @method     ChildOptnsQuery groupByOptnFieldType() Group by the optn_field_type column
 * @method     ChildOptnsQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildOptnsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildOptnsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildOptnsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildOptnsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildOptnsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildOptnsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildOptns findOne(ConnectionInterface $con = null) Return the first ChildOptns matching the query
 * @method     ChildOptns findOneOrCreate(ConnectionInterface $con = null) Return the first ChildOptns matching the query, or a new ChildOptns object populated from the query conditions when no match is found
 *
 * @method     ChildOptns findOneByOptnSystem(string $optn_system) Return the first ChildOptns filtered by the optn_system column
 * @method     ChildOptns findOneByOptnCode(string $optn_code) Return the first ChildOptns filtered by the optn_code column
 * @method     ChildOptns findOneByOptnRecnbr(int $optn_recnbr) Return the first ChildOptns filtered by the optn_recnbr column
 * @method     ChildOptns findOneByOptnId(string $optn_id) Return the first ChildOptns filtered by the optn_id column
 * @method     ChildOptns findOneByOptnIddesc(string $optn_iddesc) Return the first ChildOptns filtered by the optn_iddesc column
 * @method     ChildOptns findOneByInititemnbr(string $initItemNbr) Return the first ChildOptns filtered by the initItemNbr column
 * @method     ChildOptns findOneByArcucustid(string $arcuCustId) Return the first ChildOptns filtered by the arcuCustId column
 * @method     ChildOptns findOneByArcushipid(string $arcuShipId) Return the first ChildOptns filtered by the arcuShipId column
 * @method     ChildOptns findOneByOptnCodeDesc(string $optn_code_desc) Return the first ChildOptns filtered by the optn_code_desc column
 * @method     ChildOptns findOneByOptnValidate(string $optn_validate) Return the first ChildOptns filtered by the optn_validate column
 * @method     ChildOptns findOneByOptnForce(string $optn_force) Return the first ChildOptns filtered by the optn_force column
 * @method     ChildOptns findOneByOptnNoteCode(string $optn_note_code) Return the first ChildOptns filtered by the optn_note_code column
 * @method     ChildOptns findOneByOptnListSeq(int $optn_list_seq) Return the first ChildOptns filtered by the optn_list_seq column
 * @method     ChildOptns findOneByOptnFileName(string $optn_file_name) Return the first ChildOptns filtered by the optn_file_name column
 * @method     ChildOptns findOneByOptnAdvSearch(string $optn_adv_search) Return the first ChildOptns filtered by the optn_adv_search column
 * @method     ChildOptns findOneByOptnFieldType(string $optn_field_type) Return the first ChildOptns filtered by the optn_field_type column
 * @method     ChildOptns findOneByDummy(string $dummy) Return the first ChildOptns filtered by the dummy column *

 * @method     ChildOptns requirePk($key, ConnectionInterface $con = null) Return the ChildOptns by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptns requireOne(ConnectionInterface $con = null) Return the first ChildOptns matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildOptns requireOneByOptnSystem(string $optn_system) Return the first ChildOptns filtered by the optn_system column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptns requireOneByOptnCode(string $optn_code) Return the first ChildOptns filtered by the optn_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptns requireOneByOptnRecnbr(int $optn_recnbr) Return the first ChildOptns filtered by the optn_recnbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptns requireOneByOptnId(string $optn_id) Return the first ChildOptns filtered by the optn_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptns requireOneByOptnIddesc(string $optn_iddesc) Return the first ChildOptns filtered by the optn_iddesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptns requireOneByInititemnbr(string $initItemNbr) Return the first ChildOptns filtered by the initItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptns requireOneByArcucustid(string $arcuCustId) Return the first ChildOptns filtered by the arcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptns requireOneByArcushipid(string $arcuShipId) Return the first ChildOptns filtered by the arcuShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptns requireOneByOptnCodeDesc(string $optn_code_desc) Return the first ChildOptns filtered by the optn_code_desc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptns requireOneByOptnValidate(string $optn_validate) Return the first ChildOptns filtered by the optn_validate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptns requireOneByOptnForce(string $optn_force) Return the first ChildOptns filtered by the optn_force column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptns requireOneByOptnNoteCode(string $optn_note_code) Return the first ChildOptns filtered by the optn_note_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptns requireOneByOptnListSeq(int $optn_list_seq) Return the first ChildOptns filtered by the optn_list_seq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptns requireOneByOptnFileName(string $optn_file_name) Return the first ChildOptns filtered by the optn_file_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptns requireOneByOptnAdvSearch(string $optn_adv_search) Return the first ChildOptns filtered by the optn_adv_search column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptns requireOneByOptnFieldType(string $optn_field_type) Return the first ChildOptns filtered by the optn_field_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptns requireOneByDummy(string $dummy) Return the first ChildOptns filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildOptns[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildOptns objects based on current ModelCriteria
 * @method     ChildOptns[]|ObjectCollection findByOptnSystem(string $optn_system) Return ChildOptns objects filtered by the optn_system column
 * @method     ChildOptns[]|ObjectCollection findByOptnCode(string $optn_code) Return ChildOptns objects filtered by the optn_code column
 * @method     ChildOptns[]|ObjectCollection findByOptnRecnbr(int $optn_recnbr) Return ChildOptns objects filtered by the optn_recnbr column
 * @method     ChildOptns[]|ObjectCollection findByOptnId(string $optn_id) Return ChildOptns objects filtered by the optn_id column
 * @method     ChildOptns[]|ObjectCollection findByOptnIddesc(string $optn_iddesc) Return ChildOptns objects filtered by the optn_iddesc column
 * @method     ChildOptns[]|ObjectCollection findByInititemnbr(string $initItemNbr) Return ChildOptns objects filtered by the initItemNbr column
 * @method     ChildOptns[]|ObjectCollection findByArcucustid(string $arcuCustId) Return ChildOptns objects filtered by the arcuCustId column
 * @method     ChildOptns[]|ObjectCollection findByArcushipid(string $arcuShipId) Return ChildOptns objects filtered by the arcuShipId column
 * @method     ChildOptns[]|ObjectCollection findByOptnCodeDesc(string $optn_code_desc) Return ChildOptns objects filtered by the optn_code_desc column
 * @method     ChildOptns[]|ObjectCollection findByOptnValidate(string $optn_validate) Return ChildOptns objects filtered by the optn_validate column
 * @method     ChildOptns[]|ObjectCollection findByOptnForce(string $optn_force) Return ChildOptns objects filtered by the optn_force column
 * @method     ChildOptns[]|ObjectCollection findByOptnNoteCode(string $optn_note_code) Return ChildOptns objects filtered by the optn_note_code column
 * @method     ChildOptns[]|ObjectCollection findByOptnListSeq(int $optn_list_seq) Return ChildOptns objects filtered by the optn_list_seq column
 * @method     ChildOptns[]|ObjectCollection findByOptnFileName(string $optn_file_name) Return ChildOptns objects filtered by the optn_file_name column
 * @method     ChildOptns[]|ObjectCollection findByOptnAdvSearch(string $optn_adv_search) Return ChildOptns objects filtered by the optn_adv_search column
 * @method     ChildOptns[]|ObjectCollection findByOptnFieldType(string $optn_field_type) Return ChildOptns objects filtered by the optn_field_type column
 * @method     ChildOptns[]|ObjectCollection findByDummy(string $dummy) Return ChildOptns objects filtered by the dummy column
 * @method     ChildOptns[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class OptnsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\OptnsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Optns', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildOptnsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildOptnsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildOptnsQuery) {
            return $criteria;
        }
        $query = new ChildOptnsQuery();
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
     * @param array[$optn_system, $optn_recnbr, $optn_id] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildOptns|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(OptnsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = OptnsTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildOptns A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT optn_system, optn_code, optn_recnbr, optn_id, optn_iddesc, initItemNbr, arcuCustId, arcuShipId, optn_code_desc, optn_validate, optn_force, optn_note_code, optn_list_seq, optn_file_name, optn_adv_search, optn_field_type, dummy FROM OPTNS WHERE optn_system = :p0 AND optn_recnbr = :p1 AND optn_id = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildOptns $obj */
            $obj = new ChildOptns();
            $obj->hydrate($row);
            OptnsTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildOptns|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(OptnsTableMap::COL_OPTN_SYSTEM, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(OptnsTableMap::COL_OPTN_RECNBR, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(OptnsTableMap::COL_OPTN_ID, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(OptnsTableMap::COL_OPTN_SYSTEM, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(OptnsTableMap::COL_OPTN_RECNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(OptnsTableMap::COL_OPTN_ID, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the optn_system column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnSystem('fooValue');   // WHERE optn_system = 'fooValue'
     * $query->filterByOptnSystem('%fooValue%', Criteria::LIKE); // WHERE optn_system LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnSystem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function filterByOptnSystem($optnSystem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnSystem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptnsTableMap::COL_OPTN_SYSTEM, $optnSystem, $comparison);
    }

    /**
     * Filter the query on the optn_code column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnCode('fooValue');   // WHERE optn_code = 'fooValue'
     * $query->filterByOptnCode('%fooValue%', Criteria::LIKE); // WHERE optn_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function filterByOptnCode($optnCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptnsTableMap::COL_OPTN_CODE, $optnCode, $comparison);
    }

    /**
     * Filter the query on the optn_recnbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnRecnbr(1234); // WHERE optn_recnbr = 1234
     * $query->filterByOptnRecnbr(array(12, 34)); // WHERE optn_recnbr IN (12, 34)
     * $query->filterByOptnRecnbr(array('min' => 12)); // WHERE optn_recnbr > 12
     * </code>
     *
     * @param     mixed $optnRecnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function filterByOptnRecnbr($optnRecnbr = null, $comparison = null)
    {
        if (is_array($optnRecnbr)) {
            $useMinMax = false;
            if (isset($optnRecnbr['min'])) {
                $this->addUsingAlias(OptnsTableMap::COL_OPTN_RECNBR, $optnRecnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($optnRecnbr['max'])) {
                $this->addUsingAlias(OptnsTableMap::COL_OPTN_RECNBR, $optnRecnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptnsTableMap::COL_OPTN_RECNBR, $optnRecnbr, $comparison);
    }

    /**
     * Filter the query on the optn_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnId('fooValue');   // WHERE optn_id = 'fooValue'
     * $query->filterByOptnId('%fooValue%', Criteria::LIKE); // WHERE optn_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function filterByOptnId($optnId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptnsTableMap::COL_OPTN_ID, $optnId, $comparison);
    }

    /**
     * Filter the query on the optn_iddesc column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnIddesc('fooValue');   // WHERE optn_iddesc = 'fooValue'
     * $query->filterByOptnIddesc('%fooValue%', Criteria::LIKE); // WHERE optn_iddesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnIddesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function filterByOptnIddesc($optnIddesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnIddesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptnsTableMap::COL_OPTN_IDDESC, $optnIddesc, $comparison);
    }

    /**
     * Filter the query on the initItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInititemnbr('fooValue');   // WHERE initItemNbr = 'fooValue'
     * $query->filterByInititemnbr('%fooValue%', Criteria::LIKE); // WHERE initItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inititemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptnsTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the arcuCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucustid('fooValue');   // WHERE arcuCustId = 'fooValue'
     * $query->filterByArcucustid('%fooValue%', Criteria::LIKE); // WHERE arcuCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptnsTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the arcuShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcushipid('fooValue');   // WHERE arcuShipId = 'fooValue'
     * $query->filterByArcushipid('%fooValue%', Criteria::LIKE); // WHERE arcuShipId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcushipid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function filterByArcushipid($arcushipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcushipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptnsTableMap::COL_ARCUSHIPID, $arcushipid, $comparison);
    }

    /**
     * Filter the query on the optn_code_desc column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnCodeDesc('fooValue');   // WHERE optn_code_desc = 'fooValue'
     * $query->filterByOptnCodeDesc('%fooValue%', Criteria::LIKE); // WHERE optn_code_desc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnCodeDesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function filterByOptnCodeDesc($optnCodeDesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnCodeDesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptnsTableMap::COL_OPTN_CODE_DESC, $optnCodeDesc, $comparison);
    }

    /**
     * Filter the query on the optn_validate column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnValidate('fooValue');   // WHERE optn_validate = 'fooValue'
     * $query->filterByOptnValidate('%fooValue%', Criteria::LIKE); // WHERE optn_validate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnValidate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function filterByOptnValidate($optnValidate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnValidate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptnsTableMap::COL_OPTN_VALIDATE, $optnValidate, $comparison);
    }

    /**
     * Filter the query on the optn_force column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnForce('fooValue');   // WHERE optn_force = 'fooValue'
     * $query->filterByOptnForce('%fooValue%', Criteria::LIKE); // WHERE optn_force LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnForce The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function filterByOptnForce($optnForce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnForce)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptnsTableMap::COL_OPTN_FORCE, $optnForce, $comparison);
    }

    /**
     * Filter the query on the optn_note_code column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnNoteCode('fooValue');   // WHERE optn_note_code = 'fooValue'
     * $query->filterByOptnNoteCode('%fooValue%', Criteria::LIKE); // WHERE optn_note_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnNoteCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function filterByOptnNoteCode($optnNoteCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnNoteCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptnsTableMap::COL_OPTN_NOTE_CODE, $optnNoteCode, $comparison);
    }

    /**
     * Filter the query on the optn_list_seq column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnListSeq(1234); // WHERE optn_list_seq = 1234
     * $query->filterByOptnListSeq(array(12, 34)); // WHERE optn_list_seq IN (12, 34)
     * $query->filterByOptnListSeq(array('min' => 12)); // WHERE optn_list_seq > 12
     * </code>
     *
     * @param     mixed $optnListSeq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function filterByOptnListSeq($optnListSeq = null, $comparison = null)
    {
        if (is_array($optnListSeq)) {
            $useMinMax = false;
            if (isset($optnListSeq['min'])) {
                $this->addUsingAlias(OptnsTableMap::COL_OPTN_LIST_SEQ, $optnListSeq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($optnListSeq['max'])) {
                $this->addUsingAlias(OptnsTableMap::COL_OPTN_LIST_SEQ, $optnListSeq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptnsTableMap::COL_OPTN_LIST_SEQ, $optnListSeq, $comparison);
    }

    /**
     * Filter the query on the optn_file_name column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnFileName('fooValue');   // WHERE optn_file_name = 'fooValue'
     * $query->filterByOptnFileName('%fooValue%', Criteria::LIKE); // WHERE optn_file_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnFileName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function filterByOptnFileName($optnFileName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnFileName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptnsTableMap::COL_OPTN_FILE_NAME, $optnFileName, $comparison);
    }

    /**
     * Filter the query on the optn_adv_search column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnAdvSearch('fooValue');   // WHERE optn_adv_search = 'fooValue'
     * $query->filterByOptnAdvSearch('%fooValue%', Criteria::LIKE); // WHERE optn_adv_search LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnAdvSearch The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function filterByOptnAdvSearch($optnAdvSearch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnAdvSearch)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptnsTableMap::COL_OPTN_ADV_SEARCH, $optnAdvSearch, $comparison);
    }

    /**
     * Filter the query on the optn_field_type column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnFieldType('fooValue');   // WHERE optn_field_type = 'fooValue'
     * $query->filterByOptnFieldType('%fooValue%', Criteria::LIKE); // WHERE optn_field_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnFieldType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function filterByOptnFieldType($optnFieldType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnFieldType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptnsTableMap::COL_OPTN_FIELD_TYPE, $optnFieldType, $comparison);
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
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptnsTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildOptns $optns Object to remove from the list of results
     *
     * @return $this|ChildOptnsQuery The current query, for fluid interface
     */
    public function prune($optns = null)
    {
        if ($optns) {
            $this->addCond('pruneCond0', $this->getAliasedColName(OptnsTableMap::COL_OPTN_SYSTEM), $optns->getOptnSystem(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(OptnsTableMap::COL_OPTN_RECNBR), $optns->getOptnRecnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(OptnsTableMap::COL_OPTN_ID), $optns->getOptnId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the OPTNS table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(OptnsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OptnsTableMap::clearInstancePool();
            OptnsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(OptnsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(OptnsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            OptnsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            OptnsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // OptnsQuery
