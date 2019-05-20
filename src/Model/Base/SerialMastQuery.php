<?php

namespace Base;

use \SerialMast as ChildSerialMast;
use \SerialMastQuery as ChildSerialMastQuery;
use \Exception;
use \PDO;
use Map\SerialMastTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'SERIAL_MAST' table.
 *
 *
 *
 * @method     ChildSerialMastQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildSerialMastQuery orderBySermsernbr($order = Criteria::ASC) Order by the SermSerNbr column
 * @method     ChildSerialMastQuery orderBySermproddate($order = Criteria::ASC) Order by the SermProdDate column
 * @method     ChildSerialMastQuery orderBySermprntcnt($order = Criteria::ASC) Order by the SermPrntCnt column
 * @method     ChildSerialMastQuery orderBySermsordnbr($order = Criteria::ASC) Order by the SermSordNbr column
 * @method     ChildSerialMastQuery orderBySerminvcdate($order = Criteria::ASC) Order by the SermInvcDate column
 * @method     ChildSerialMastQuery orderBySermrevision($order = Criteria::ASC) Order by the SermRevision column
 * @method     ChildSerialMastQuery orderBySermctry($order = Criteria::ASC) Order by the SermCtry column
 * @method     ChildSerialMastQuery orderBySermacallocordr($order = Criteria::ASC) Order by the SermAcAllocOrdr column
 * @method     ChildSerialMastQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSerialMastQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSerialMastQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSerialMastQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildSerialMastQuery groupBySermsernbr() Group by the SermSerNbr column
 * @method     ChildSerialMastQuery groupBySermproddate() Group by the SermProdDate column
 * @method     ChildSerialMastQuery groupBySermprntcnt() Group by the SermPrntCnt column
 * @method     ChildSerialMastQuery groupBySermsordnbr() Group by the SermSordNbr column
 * @method     ChildSerialMastQuery groupBySerminvcdate() Group by the SermInvcDate column
 * @method     ChildSerialMastQuery groupBySermrevision() Group by the SermRevision column
 * @method     ChildSerialMastQuery groupBySermctry() Group by the SermCtry column
 * @method     ChildSerialMastQuery groupBySermacallocordr() Group by the SermAcAllocOrdr column
 * @method     ChildSerialMastQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSerialMastQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSerialMastQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSerialMastQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSerialMastQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSerialMastQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSerialMastQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSerialMastQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSerialMastQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSerialMast findOne(ConnectionInterface $con = null) Return the first ChildSerialMast matching the query
 * @method     ChildSerialMast findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSerialMast matching the query, or a new ChildSerialMast object populated from the query conditions when no match is found
 *
 * @method     ChildSerialMast findOneByInititemnbr(string $InitItemNbr) Return the first ChildSerialMast filtered by the InitItemNbr column
 * @method     ChildSerialMast findOneBySermsernbr(string $SermSerNbr) Return the first ChildSerialMast filtered by the SermSerNbr column
 * @method     ChildSerialMast findOneBySermproddate(int $SermProdDate) Return the first ChildSerialMast filtered by the SermProdDate column
 * @method     ChildSerialMast findOneBySermprntcnt(int $SermPrntCnt) Return the first ChildSerialMast filtered by the SermPrntCnt column
 * @method     ChildSerialMast findOneBySermsordnbr(int $SermSordNbr) Return the first ChildSerialMast filtered by the SermSordNbr column
 * @method     ChildSerialMast findOneBySerminvcdate(int $SermInvcDate) Return the first ChildSerialMast filtered by the SermInvcDate column
 * @method     ChildSerialMast findOneBySermrevision(string $SermRevision) Return the first ChildSerialMast filtered by the SermRevision column
 * @method     ChildSerialMast findOneBySermctry(string $SermCtry) Return the first ChildSerialMast filtered by the SermCtry column
 * @method     ChildSerialMast findOneBySermacallocordr(int $SermAcAllocOrdr) Return the first ChildSerialMast filtered by the SermAcAllocOrdr column
 * @method     ChildSerialMast findOneByDateupdtd(int $DateUpdtd) Return the first ChildSerialMast filtered by the DateUpdtd column
 * @method     ChildSerialMast findOneByTimeupdtd(int $TimeUpdtd) Return the first ChildSerialMast filtered by the TimeUpdtd column
 * @method     ChildSerialMast findOneByDummy(string $dummy) Return the first ChildSerialMast filtered by the dummy column *

 * @method     ChildSerialMast requirePk($key, ConnectionInterface $con = null) Return the ChildSerialMast by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSerialMast requireOne(ConnectionInterface $con = null) Return the first ChildSerialMast matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSerialMast requireOneByInititemnbr(string $InitItemNbr) Return the first ChildSerialMast filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSerialMast requireOneBySermsernbr(string $SermSerNbr) Return the first ChildSerialMast filtered by the SermSerNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSerialMast requireOneBySermproddate(int $SermProdDate) Return the first ChildSerialMast filtered by the SermProdDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSerialMast requireOneBySermprntcnt(int $SermPrntCnt) Return the first ChildSerialMast filtered by the SermPrntCnt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSerialMast requireOneBySermsordnbr(int $SermSordNbr) Return the first ChildSerialMast filtered by the SermSordNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSerialMast requireOneBySerminvcdate(int $SermInvcDate) Return the first ChildSerialMast filtered by the SermInvcDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSerialMast requireOneBySermrevision(string $SermRevision) Return the first ChildSerialMast filtered by the SermRevision column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSerialMast requireOneBySermctry(string $SermCtry) Return the first ChildSerialMast filtered by the SermCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSerialMast requireOneBySermacallocordr(int $SermAcAllocOrdr) Return the first ChildSerialMast filtered by the SermAcAllocOrdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSerialMast requireOneByDateupdtd(int $DateUpdtd) Return the first ChildSerialMast filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSerialMast requireOneByTimeupdtd(int $TimeUpdtd) Return the first ChildSerialMast filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSerialMast requireOneByDummy(string $dummy) Return the first ChildSerialMast filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSerialMast[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSerialMast objects based on current ModelCriteria
 * @method     ChildSerialMast[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildSerialMast objects filtered by the InitItemNbr column
 * @method     ChildSerialMast[]|ObjectCollection findBySermsernbr(string $SermSerNbr) Return ChildSerialMast objects filtered by the SermSerNbr column
 * @method     ChildSerialMast[]|ObjectCollection findBySermproddate(int $SermProdDate) Return ChildSerialMast objects filtered by the SermProdDate column
 * @method     ChildSerialMast[]|ObjectCollection findBySermprntcnt(int $SermPrntCnt) Return ChildSerialMast objects filtered by the SermPrntCnt column
 * @method     ChildSerialMast[]|ObjectCollection findBySermsordnbr(int $SermSordNbr) Return ChildSerialMast objects filtered by the SermSordNbr column
 * @method     ChildSerialMast[]|ObjectCollection findBySerminvcdate(int $SermInvcDate) Return ChildSerialMast objects filtered by the SermInvcDate column
 * @method     ChildSerialMast[]|ObjectCollection findBySermrevision(string $SermRevision) Return ChildSerialMast objects filtered by the SermRevision column
 * @method     ChildSerialMast[]|ObjectCollection findBySermctry(string $SermCtry) Return ChildSerialMast objects filtered by the SermCtry column
 * @method     ChildSerialMast[]|ObjectCollection findBySermacallocordr(int $SermAcAllocOrdr) Return ChildSerialMast objects filtered by the SermAcAllocOrdr column
 * @method     ChildSerialMast[]|ObjectCollection findByDateupdtd(int $DateUpdtd) Return ChildSerialMast objects filtered by the DateUpdtd column
 * @method     ChildSerialMast[]|ObjectCollection findByTimeupdtd(int $TimeUpdtd) Return ChildSerialMast objects filtered by the TimeUpdtd column
 * @method     ChildSerialMast[]|ObjectCollection findByDummy(string $dummy) Return ChildSerialMast objects filtered by the dummy column
 * @method     ChildSerialMast[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SerialMastQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SerialMastQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SerialMast', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSerialMastQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSerialMastQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSerialMastQuery) {
            return $criteria;
        }
        $query = new ChildSerialMastQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$InitItemNbr, $SermSerNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSerialMast|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SerialMastTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SerialMastTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildSerialMast A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, SermSerNbr, SermProdDate, SermPrntCnt, SermSordNbr, SermInvcDate, SermRevision, SermCtry, SermAcAllocOrdr, DateUpdtd, TimeUpdtd, dummy FROM SERIAL_MAST WHERE InitItemNbr = :p0 AND SermSerNbr = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSerialMast $obj */
            $obj = new ChildSerialMast();
            $obj->hydrate($row);
            SerialMastTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildSerialMast|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSerialMastQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SerialMastTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SerialMastTableMap::COL_SERMSERNBR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSerialMastQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SerialMastTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SerialMastTableMap::COL_SERMSERNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the InitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInititemnbr('fooValue');   // WHERE InitItemNbr = 'fooValue'
     * $query->filterByInititemnbr('%fooValue%', Criteria::LIKE); // WHERE InitItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inititemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSerialMastQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SerialMastTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the SermSerNbr column
     *
     * Example usage:
     * <code>
     * $query->filterBySermsernbr('fooValue');   // WHERE SermSerNbr = 'fooValue'
     * $query->filterBySermsernbr('%fooValue%', Criteria::LIKE); // WHERE SermSerNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sermsernbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSerialMastQuery The current query, for fluid interface
     */
    public function filterBySermsernbr($sermsernbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermsernbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SerialMastTableMap::COL_SERMSERNBR, $sermsernbr, $comparison);
    }

    /**
     * Filter the query on the SermProdDate column
     *
     * Example usage:
     * <code>
     * $query->filterBySermproddate(1234); // WHERE SermProdDate = 1234
     * $query->filterBySermproddate(array(12, 34)); // WHERE SermProdDate IN (12, 34)
     * $query->filterBySermproddate(array('min' => 12)); // WHERE SermProdDate > 12
     * </code>
     *
     * @param     mixed $sermproddate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSerialMastQuery The current query, for fluid interface
     */
    public function filterBySermproddate($sermproddate = null, $comparison = null)
    {
        if (is_array($sermproddate)) {
            $useMinMax = false;
            if (isset($sermproddate['min'])) {
                $this->addUsingAlias(SerialMastTableMap::COL_SERMPRODDATE, $sermproddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sermproddate['max'])) {
                $this->addUsingAlias(SerialMastTableMap::COL_SERMPRODDATE, $sermproddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SerialMastTableMap::COL_SERMPRODDATE, $sermproddate, $comparison);
    }

    /**
     * Filter the query on the SermPrntCnt column
     *
     * Example usage:
     * <code>
     * $query->filterBySermprntcnt(1234); // WHERE SermPrntCnt = 1234
     * $query->filterBySermprntcnt(array(12, 34)); // WHERE SermPrntCnt IN (12, 34)
     * $query->filterBySermprntcnt(array('min' => 12)); // WHERE SermPrntCnt > 12
     * </code>
     *
     * @param     mixed $sermprntcnt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSerialMastQuery The current query, for fluid interface
     */
    public function filterBySermprntcnt($sermprntcnt = null, $comparison = null)
    {
        if (is_array($sermprntcnt)) {
            $useMinMax = false;
            if (isset($sermprntcnt['min'])) {
                $this->addUsingAlias(SerialMastTableMap::COL_SERMPRNTCNT, $sermprntcnt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sermprntcnt['max'])) {
                $this->addUsingAlias(SerialMastTableMap::COL_SERMPRNTCNT, $sermprntcnt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SerialMastTableMap::COL_SERMPRNTCNT, $sermprntcnt, $comparison);
    }

    /**
     * Filter the query on the SermSordNbr column
     *
     * Example usage:
     * <code>
     * $query->filterBySermsordnbr(1234); // WHERE SermSordNbr = 1234
     * $query->filterBySermsordnbr(array(12, 34)); // WHERE SermSordNbr IN (12, 34)
     * $query->filterBySermsordnbr(array('min' => 12)); // WHERE SermSordNbr > 12
     * </code>
     *
     * @param     mixed $sermsordnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSerialMastQuery The current query, for fluid interface
     */
    public function filterBySermsordnbr($sermsordnbr = null, $comparison = null)
    {
        if (is_array($sermsordnbr)) {
            $useMinMax = false;
            if (isset($sermsordnbr['min'])) {
                $this->addUsingAlias(SerialMastTableMap::COL_SERMSORDNBR, $sermsordnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sermsordnbr['max'])) {
                $this->addUsingAlias(SerialMastTableMap::COL_SERMSORDNBR, $sermsordnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SerialMastTableMap::COL_SERMSORDNBR, $sermsordnbr, $comparison);
    }

    /**
     * Filter the query on the SermInvcDate column
     *
     * Example usage:
     * <code>
     * $query->filterBySerminvcdate(1234); // WHERE SermInvcDate = 1234
     * $query->filterBySerminvcdate(array(12, 34)); // WHERE SermInvcDate IN (12, 34)
     * $query->filterBySerminvcdate(array('min' => 12)); // WHERE SermInvcDate > 12
     * </code>
     *
     * @param     mixed $serminvcdate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSerialMastQuery The current query, for fluid interface
     */
    public function filterBySerminvcdate($serminvcdate = null, $comparison = null)
    {
        if (is_array($serminvcdate)) {
            $useMinMax = false;
            if (isset($serminvcdate['min'])) {
                $this->addUsingAlias(SerialMastTableMap::COL_SERMINVCDATE, $serminvcdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($serminvcdate['max'])) {
                $this->addUsingAlias(SerialMastTableMap::COL_SERMINVCDATE, $serminvcdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SerialMastTableMap::COL_SERMINVCDATE, $serminvcdate, $comparison);
    }

    /**
     * Filter the query on the SermRevision column
     *
     * Example usage:
     * <code>
     * $query->filterBySermrevision('fooValue');   // WHERE SermRevision = 'fooValue'
     * $query->filterBySermrevision('%fooValue%', Criteria::LIKE); // WHERE SermRevision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sermrevision The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSerialMastQuery The current query, for fluid interface
     */
    public function filterBySermrevision($sermrevision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermrevision)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SerialMastTableMap::COL_SERMREVISION, $sermrevision, $comparison);
    }

    /**
     * Filter the query on the SermCtry column
     *
     * Example usage:
     * <code>
     * $query->filterBySermctry('fooValue');   // WHERE SermCtry = 'fooValue'
     * $query->filterBySermctry('%fooValue%', Criteria::LIKE); // WHERE SermCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sermctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSerialMastQuery The current query, for fluid interface
     */
    public function filterBySermctry($sermctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SerialMastTableMap::COL_SERMCTRY, $sermctry, $comparison);
    }

    /**
     * Filter the query on the SermAcAllocOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterBySermacallocordr(1234); // WHERE SermAcAllocOrdr = 1234
     * $query->filterBySermacallocordr(array(12, 34)); // WHERE SermAcAllocOrdr IN (12, 34)
     * $query->filterBySermacallocordr(array('min' => 12)); // WHERE SermAcAllocOrdr > 12
     * </code>
     *
     * @param     mixed $sermacallocordr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSerialMastQuery The current query, for fluid interface
     */
    public function filterBySermacallocordr($sermacallocordr = null, $comparison = null)
    {
        if (is_array($sermacallocordr)) {
            $useMinMax = false;
            if (isset($sermacallocordr['min'])) {
                $this->addUsingAlias(SerialMastTableMap::COL_SERMACALLOCORDR, $sermacallocordr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sermacallocordr['max'])) {
                $this->addUsingAlias(SerialMastTableMap::COL_SERMACALLOCORDR, $sermacallocordr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SerialMastTableMap::COL_SERMACALLOCORDR, $sermacallocordr, $comparison);
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
     * @return $this|ChildSerialMastQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (is_array($dateupdtd)) {
            $useMinMax = false;
            if (isset($dateupdtd['min'])) {
                $this->addUsingAlias(SerialMastTableMap::COL_DATEUPDTD, $dateupdtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateupdtd['max'])) {
                $this->addUsingAlias(SerialMastTableMap::COL_DATEUPDTD, $dateupdtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SerialMastTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildSerialMastQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (is_array($timeupdtd)) {
            $useMinMax = false;
            if (isset($timeupdtd['min'])) {
                $this->addUsingAlias(SerialMastTableMap::COL_TIMEUPDTD, $timeupdtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timeupdtd['max'])) {
                $this->addUsingAlias(SerialMastTableMap::COL_TIMEUPDTD, $timeupdtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SerialMastTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildSerialMastQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SerialMastTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSerialMast $serialMast Object to remove from the list of results
     *
     * @return $this|ChildSerialMastQuery The current query, for fluid interface
     */
    public function prune($serialMast = null)
    {
        if ($serialMast) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SerialMastTableMap::COL_INITITEMNBR), $serialMast->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SerialMastTableMap::COL_SERMSERNBR), $serialMast->getSermsernbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the SERIAL_MAST table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SerialMastTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SerialMastTableMap::clearInstancePool();
            SerialMastTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SerialMastTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SerialMastTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SerialMastTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SerialMastTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SerialMastQuery
