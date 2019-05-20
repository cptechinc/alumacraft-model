<?php

namespace Base;

use \WipHeader as ChildWipHeader;
use \WipHeaderQuery as ChildWipHeaderQuery;
use \Exception;
use \PDO;
use Map\WipHeaderTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'WIP_HEADER' table.
 *
 *
 *
 * @method     ChildWipHeaderQuery orderByWiphwipnbr($order = Criteria::ASC) Order by the WiphWipNbr column
 * @method     ChildWipHeaderQuery orderByWiphstatus($order = Criteria::ASC) Order by the WiphStatus column
 * @method     ChildWipHeaderQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildWipHeaderQuery orderByWiphplandate($order = Criteria::ASC) Order by the WiphPlanDate column
 * @method     ChildWipHeaderQuery orderByWiphlevel($order = Criteria::ASC) Order by the WiphLevel column
 * @method     ChildWipHeaderQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildWipHeaderQuery orderByWiphplanqty($order = Criteria::ASC) Order by the WiphPlanQty column
 * @method     ChildWipHeaderQuery orderByWiphcmpltdqty($order = Criteria::ASC) Order by the WiphCmpltdQty column
 * @method     ChildWipHeaderQuery orderByWiphcmpltddate($order = Criteria::ASC) Order by the WiphCmpltdDate column
 * @method     ChildWipHeaderQuery orderByWiphbin($order = Criteria::ASC) Order by the WiphBin column
 * @method     ChildWipHeaderQuery orderByOehdnbr($order = Criteria::ASC) Order by the OehdNbr column
 * @method     ChildWipHeaderQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildWipHeaderQuery orderByWiphworkcenter($order = Criteria::ASC) Order by the WiphWorkCenter column
 * @method     ChildWipHeaderQuery orderByWiphoper($order = Criteria::ASC) Order by the WiphOper column
 * @method     ChildWipHeaderQuery orderByWiphalumaser($order = Criteria::ASC) Order by the WiphAlumaSer column
 * @method     ChildWipHeaderQuery orderByWiphnegwip($order = Criteria::ASC) Order by the WiphNegWip column
 * @method     ChildWipHeaderQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildWipHeaderQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildWipHeaderQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildWipHeaderQuery groupByWiphwipnbr() Group by the WiphWipNbr column
 * @method     ChildWipHeaderQuery groupByWiphstatus() Group by the WiphStatus column
 * @method     ChildWipHeaderQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildWipHeaderQuery groupByWiphplandate() Group by the WiphPlanDate column
 * @method     ChildWipHeaderQuery groupByWiphlevel() Group by the WiphLevel column
 * @method     ChildWipHeaderQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildWipHeaderQuery groupByWiphplanqty() Group by the WiphPlanQty column
 * @method     ChildWipHeaderQuery groupByWiphcmpltdqty() Group by the WiphCmpltdQty column
 * @method     ChildWipHeaderQuery groupByWiphcmpltddate() Group by the WiphCmpltdDate column
 * @method     ChildWipHeaderQuery groupByWiphbin() Group by the WiphBin column
 * @method     ChildWipHeaderQuery groupByOehdnbr() Group by the OehdNbr column
 * @method     ChildWipHeaderQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildWipHeaderQuery groupByWiphworkcenter() Group by the WiphWorkCenter column
 * @method     ChildWipHeaderQuery groupByWiphoper() Group by the WiphOper column
 * @method     ChildWipHeaderQuery groupByWiphalumaser() Group by the WiphAlumaSer column
 * @method     ChildWipHeaderQuery groupByWiphnegwip() Group by the WiphNegWip column
 * @method     ChildWipHeaderQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildWipHeaderQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildWipHeaderQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildWipHeaderQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildWipHeaderQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildWipHeaderQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildWipHeaderQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildWipHeaderQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildWipHeaderQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildWipHeader findOne(ConnectionInterface $con = null) Return the first ChildWipHeader matching the query
 * @method     ChildWipHeader findOneOrCreate(ConnectionInterface $con = null) Return the first ChildWipHeader matching the query, or a new ChildWipHeader object populated from the query conditions when no match is found
 *
 * @method     ChildWipHeader findOneByWiphwipnbr(int $WiphWipNbr) Return the first ChildWipHeader filtered by the WiphWipNbr column
 * @method     ChildWipHeader findOneByWiphstatus(string $WiphStatus) Return the first ChildWipHeader filtered by the WiphStatus column
 * @method     ChildWipHeader findOneByIntbwhse(string $IntbWhse) Return the first ChildWipHeader filtered by the IntbWhse column
 * @method     ChildWipHeader findOneByWiphplandate(int $WiphPlanDate) Return the first ChildWipHeader filtered by the WiphPlanDate column
 * @method     ChildWipHeader findOneByWiphlevel(int $WiphLevel) Return the first ChildWipHeader filtered by the WiphLevel column
 * @method     ChildWipHeader findOneByInititemnbr(string $InitItemNbr) Return the first ChildWipHeader filtered by the InitItemNbr column
 * @method     ChildWipHeader findOneByWiphplanqty(string $WiphPlanQty) Return the first ChildWipHeader filtered by the WiphPlanQty column
 * @method     ChildWipHeader findOneByWiphcmpltdqty(string $WiphCmpltdQty) Return the first ChildWipHeader filtered by the WiphCmpltdQty column
 * @method     ChildWipHeader findOneByWiphcmpltddate(int $WiphCmpltdDate) Return the first ChildWipHeader filtered by the WiphCmpltdDate column
 * @method     ChildWipHeader findOneByWiphbin(string $WiphBin) Return the first ChildWipHeader filtered by the WiphBin column
 * @method     ChildWipHeader findOneByOehdnbr(int $OehdNbr) Return the first ChildWipHeader filtered by the OehdNbr column
 * @method     ChildWipHeader findOneByArcucustid(string $ArcuCustId) Return the first ChildWipHeader filtered by the ArcuCustId column
 * @method     ChildWipHeader findOneByWiphworkcenter(string $WiphWorkCenter) Return the first ChildWipHeader filtered by the WiphWorkCenter column
 * @method     ChildWipHeader findOneByWiphoper(string $WiphOper) Return the first ChildWipHeader filtered by the WiphOper column
 * @method     ChildWipHeader findOneByWiphalumaser(string $WiphAlumaSer) Return the first ChildWipHeader filtered by the WiphAlumaSer column
 * @method     ChildWipHeader findOneByWiphnegwip(string $WiphNegWip) Return the first ChildWipHeader filtered by the WiphNegWip column
 * @method     ChildWipHeader findOneByDateupdtd(int $DateUpdtd) Return the first ChildWipHeader filtered by the DateUpdtd column
 * @method     ChildWipHeader findOneByTimeupdtd(int $TimeUpdtd) Return the first ChildWipHeader filtered by the TimeUpdtd column
 * @method     ChildWipHeader findOneByDummy(string $dummy) Return the first ChildWipHeader filtered by the dummy column *

 * @method     ChildWipHeader requirePk($key, ConnectionInterface $con = null) Return the ChildWipHeader by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWipHeader requireOne(ConnectionInterface $con = null) Return the first ChildWipHeader matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWipHeader requireOneByWiphwipnbr(int $WiphWipNbr) Return the first ChildWipHeader filtered by the WiphWipNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWipHeader requireOneByWiphstatus(string $WiphStatus) Return the first ChildWipHeader filtered by the WiphStatus column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWipHeader requireOneByIntbwhse(string $IntbWhse) Return the first ChildWipHeader filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWipHeader requireOneByWiphplandate(int $WiphPlanDate) Return the first ChildWipHeader filtered by the WiphPlanDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWipHeader requireOneByWiphlevel(int $WiphLevel) Return the first ChildWipHeader filtered by the WiphLevel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWipHeader requireOneByInititemnbr(string $InitItemNbr) Return the first ChildWipHeader filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWipHeader requireOneByWiphplanqty(string $WiphPlanQty) Return the first ChildWipHeader filtered by the WiphPlanQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWipHeader requireOneByWiphcmpltdqty(string $WiphCmpltdQty) Return the first ChildWipHeader filtered by the WiphCmpltdQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWipHeader requireOneByWiphcmpltddate(int $WiphCmpltdDate) Return the first ChildWipHeader filtered by the WiphCmpltdDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWipHeader requireOneByWiphbin(string $WiphBin) Return the first ChildWipHeader filtered by the WiphBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWipHeader requireOneByOehdnbr(int $OehdNbr) Return the first ChildWipHeader filtered by the OehdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWipHeader requireOneByArcucustid(string $ArcuCustId) Return the first ChildWipHeader filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWipHeader requireOneByWiphworkcenter(string $WiphWorkCenter) Return the first ChildWipHeader filtered by the WiphWorkCenter column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWipHeader requireOneByWiphoper(string $WiphOper) Return the first ChildWipHeader filtered by the WiphOper column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWipHeader requireOneByWiphalumaser(string $WiphAlumaSer) Return the first ChildWipHeader filtered by the WiphAlumaSer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWipHeader requireOneByWiphnegwip(string $WiphNegWip) Return the first ChildWipHeader filtered by the WiphNegWip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWipHeader requireOneByDateupdtd(int $DateUpdtd) Return the first ChildWipHeader filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWipHeader requireOneByTimeupdtd(int $TimeUpdtd) Return the first ChildWipHeader filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWipHeader requireOneByDummy(string $dummy) Return the first ChildWipHeader filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWipHeader[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildWipHeader objects based on current ModelCriteria
 * @method     ChildWipHeader[]|ObjectCollection findByWiphwipnbr(int $WiphWipNbr) Return ChildWipHeader objects filtered by the WiphWipNbr column
 * @method     ChildWipHeader[]|ObjectCollection findByWiphstatus(string $WiphStatus) Return ChildWipHeader objects filtered by the WiphStatus column
 * @method     ChildWipHeader[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildWipHeader objects filtered by the IntbWhse column
 * @method     ChildWipHeader[]|ObjectCollection findByWiphplandate(int $WiphPlanDate) Return ChildWipHeader objects filtered by the WiphPlanDate column
 * @method     ChildWipHeader[]|ObjectCollection findByWiphlevel(int $WiphLevel) Return ChildWipHeader objects filtered by the WiphLevel column
 * @method     ChildWipHeader[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildWipHeader objects filtered by the InitItemNbr column
 * @method     ChildWipHeader[]|ObjectCollection findByWiphplanqty(string $WiphPlanQty) Return ChildWipHeader objects filtered by the WiphPlanQty column
 * @method     ChildWipHeader[]|ObjectCollection findByWiphcmpltdqty(string $WiphCmpltdQty) Return ChildWipHeader objects filtered by the WiphCmpltdQty column
 * @method     ChildWipHeader[]|ObjectCollection findByWiphcmpltddate(int $WiphCmpltdDate) Return ChildWipHeader objects filtered by the WiphCmpltdDate column
 * @method     ChildWipHeader[]|ObjectCollection findByWiphbin(string $WiphBin) Return ChildWipHeader objects filtered by the WiphBin column
 * @method     ChildWipHeader[]|ObjectCollection findByOehdnbr(int $OehdNbr) Return ChildWipHeader objects filtered by the OehdNbr column
 * @method     ChildWipHeader[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildWipHeader objects filtered by the ArcuCustId column
 * @method     ChildWipHeader[]|ObjectCollection findByWiphworkcenter(string $WiphWorkCenter) Return ChildWipHeader objects filtered by the WiphWorkCenter column
 * @method     ChildWipHeader[]|ObjectCollection findByWiphoper(string $WiphOper) Return ChildWipHeader objects filtered by the WiphOper column
 * @method     ChildWipHeader[]|ObjectCollection findByWiphalumaser(string $WiphAlumaSer) Return ChildWipHeader objects filtered by the WiphAlumaSer column
 * @method     ChildWipHeader[]|ObjectCollection findByWiphnegwip(string $WiphNegWip) Return ChildWipHeader objects filtered by the WiphNegWip column
 * @method     ChildWipHeader[]|ObjectCollection findByDateupdtd(int $DateUpdtd) Return ChildWipHeader objects filtered by the DateUpdtd column
 * @method     ChildWipHeader[]|ObjectCollection findByTimeupdtd(int $TimeUpdtd) Return ChildWipHeader objects filtered by the TimeUpdtd column
 * @method     ChildWipHeader[]|ObjectCollection findByDummy(string $dummy) Return ChildWipHeader objects filtered by the dummy column
 * @method     ChildWipHeader[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class WipHeaderQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\WipHeaderQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\WipHeader', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildWipHeaderQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildWipHeaderQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildWipHeaderQuery) {
            return $criteria;
        }
        $query = new ChildWipHeaderQuery();
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
     * @return ChildWipHeader|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(WipHeaderTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = WipHeaderTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildWipHeader A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT WiphWipNbr, WiphStatus, IntbWhse, WiphPlanDate, WiphLevel, InitItemNbr, WiphPlanQty, WiphCmpltdQty, WiphCmpltdDate, WiphBin, OehdNbr, ArcuCustId, WiphWorkCenter, WiphOper, WiphAlumaSer, WiphNegWip, DateUpdtd, TimeUpdtd, dummy FROM WIP_HEADER WHERE WiphWipNbr = :p0';
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
            /** @var ChildWipHeader $obj */
            $obj = new ChildWipHeader();
            $obj->hydrate($row);
            WipHeaderTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildWipHeader|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(WipHeaderTableMap::COL_WIPHWIPNBR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(WipHeaderTableMap::COL_WIPHWIPNBR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the WiphWipNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByWiphwipnbr(1234); // WHERE WiphWipNbr = 1234
     * $query->filterByWiphwipnbr(array(12, 34)); // WHERE WiphWipNbr IN (12, 34)
     * $query->filterByWiphwipnbr(array('min' => 12)); // WHERE WiphWipNbr > 12
     * </code>
     *
     * @param     mixed $wiphwipnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByWiphwipnbr($wiphwipnbr = null, $comparison = null)
    {
        if (is_array($wiphwipnbr)) {
            $useMinMax = false;
            if (isset($wiphwipnbr['min'])) {
                $this->addUsingAlias(WipHeaderTableMap::COL_WIPHWIPNBR, $wiphwipnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wiphwipnbr['max'])) {
                $this->addUsingAlias(WipHeaderTableMap::COL_WIPHWIPNBR, $wiphwipnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WipHeaderTableMap::COL_WIPHWIPNBR, $wiphwipnbr, $comparison);
    }

    /**
     * Filter the query on the WiphStatus column
     *
     * Example usage:
     * <code>
     * $query->filterByWiphstatus('fooValue');   // WHERE WiphStatus = 'fooValue'
     * $query->filterByWiphstatus('%fooValue%', Criteria::LIKE); // WHERE WiphStatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $wiphstatus The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByWiphstatus($wiphstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($wiphstatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WipHeaderTableMap::COL_WIPHSTATUS, $wiphstatus, $comparison);
    }

    /**
     * Filter the query on the IntbWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhse('fooValue');   // WHERE IntbWhse = 'fooValue'
     * $query->filterByIntbwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WipHeaderTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the WiphPlanDate column
     *
     * Example usage:
     * <code>
     * $query->filterByWiphplandate(1234); // WHERE WiphPlanDate = 1234
     * $query->filterByWiphplandate(array(12, 34)); // WHERE WiphPlanDate IN (12, 34)
     * $query->filterByWiphplandate(array('min' => 12)); // WHERE WiphPlanDate > 12
     * </code>
     *
     * @param     mixed $wiphplandate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByWiphplandate($wiphplandate = null, $comparison = null)
    {
        if (is_array($wiphplandate)) {
            $useMinMax = false;
            if (isset($wiphplandate['min'])) {
                $this->addUsingAlias(WipHeaderTableMap::COL_WIPHPLANDATE, $wiphplandate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wiphplandate['max'])) {
                $this->addUsingAlias(WipHeaderTableMap::COL_WIPHPLANDATE, $wiphplandate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WipHeaderTableMap::COL_WIPHPLANDATE, $wiphplandate, $comparison);
    }

    /**
     * Filter the query on the WiphLevel column
     *
     * Example usage:
     * <code>
     * $query->filterByWiphlevel(1234); // WHERE WiphLevel = 1234
     * $query->filterByWiphlevel(array(12, 34)); // WHERE WiphLevel IN (12, 34)
     * $query->filterByWiphlevel(array('min' => 12)); // WHERE WiphLevel > 12
     * </code>
     *
     * @param     mixed $wiphlevel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByWiphlevel($wiphlevel = null, $comparison = null)
    {
        if (is_array($wiphlevel)) {
            $useMinMax = false;
            if (isset($wiphlevel['min'])) {
                $this->addUsingAlias(WipHeaderTableMap::COL_WIPHLEVEL, $wiphlevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wiphlevel['max'])) {
                $this->addUsingAlias(WipHeaderTableMap::COL_WIPHLEVEL, $wiphlevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WipHeaderTableMap::COL_WIPHLEVEL, $wiphlevel, $comparison);
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
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WipHeaderTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the WiphPlanQty column
     *
     * Example usage:
     * <code>
     * $query->filterByWiphplanqty(1234); // WHERE WiphPlanQty = 1234
     * $query->filterByWiphplanqty(array(12, 34)); // WHERE WiphPlanQty IN (12, 34)
     * $query->filterByWiphplanqty(array('min' => 12)); // WHERE WiphPlanQty > 12
     * </code>
     *
     * @param     mixed $wiphplanqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByWiphplanqty($wiphplanqty = null, $comparison = null)
    {
        if (is_array($wiphplanqty)) {
            $useMinMax = false;
            if (isset($wiphplanqty['min'])) {
                $this->addUsingAlias(WipHeaderTableMap::COL_WIPHPLANQTY, $wiphplanqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wiphplanqty['max'])) {
                $this->addUsingAlias(WipHeaderTableMap::COL_WIPHPLANQTY, $wiphplanqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WipHeaderTableMap::COL_WIPHPLANQTY, $wiphplanqty, $comparison);
    }

    /**
     * Filter the query on the WiphCmpltdQty column
     *
     * Example usage:
     * <code>
     * $query->filterByWiphcmpltdqty(1234); // WHERE WiphCmpltdQty = 1234
     * $query->filterByWiphcmpltdqty(array(12, 34)); // WHERE WiphCmpltdQty IN (12, 34)
     * $query->filterByWiphcmpltdqty(array('min' => 12)); // WHERE WiphCmpltdQty > 12
     * </code>
     *
     * @param     mixed $wiphcmpltdqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByWiphcmpltdqty($wiphcmpltdqty = null, $comparison = null)
    {
        if (is_array($wiphcmpltdqty)) {
            $useMinMax = false;
            if (isset($wiphcmpltdqty['min'])) {
                $this->addUsingAlias(WipHeaderTableMap::COL_WIPHCMPLTDQTY, $wiphcmpltdqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wiphcmpltdqty['max'])) {
                $this->addUsingAlias(WipHeaderTableMap::COL_WIPHCMPLTDQTY, $wiphcmpltdqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WipHeaderTableMap::COL_WIPHCMPLTDQTY, $wiphcmpltdqty, $comparison);
    }

    /**
     * Filter the query on the WiphCmpltdDate column
     *
     * Example usage:
     * <code>
     * $query->filterByWiphcmpltddate(1234); // WHERE WiphCmpltdDate = 1234
     * $query->filterByWiphcmpltddate(array(12, 34)); // WHERE WiphCmpltdDate IN (12, 34)
     * $query->filterByWiphcmpltddate(array('min' => 12)); // WHERE WiphCmpltdDate > 12
     * </code>
     *
     * @param     mixed $wiphcmpltddate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByWiphcmpltddate($wiphcmpltddate = null, $comparison = null)
    {
        if (is_array($wiphcmpltddate)) {
            $useMinMax = false;
            if (isset($wiphcmpltddate['min'])) {
                $this->addUsingAlias(WipHeaderTableMap::COL_WIPHCMPLTDDATE, $wiphcmpltddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wiphcmpltddate['max'])) {
                $this->addUsingAlias(WipHeaderTableMap::COL_WIPHCMPLTDDATE, $wiphcmpltddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WipHeaderTableMap::COL_WIPHCMPLTDDATE, $wiphcmpltddate, $comparison);
    }

    /**
     * Filter the query on the WiphBin column
     *
     * Example usage:
     * <code>
     * $query->filterByWiphbin('fooValue');   // WHERE WiphBin = 'fooValue'
     * $query->filterByWiphbin('%fooValue%', Criteria::LIKE); // WHERE WiphBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $wiphbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByWiphbin($wiphbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($wiphbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WipHeaderTableMap::COL_WIPHBIN, $wiphbin, $comparison);
    }

    /**
     * Filter the query on the OehdNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdnbr(1234); // WHERE OehdNbr = 1234
     * $query->filterByOehdnbr(array(12, 34)); // WHERE OehdNbr IN (12, 34)
     * $query->filterByOehdnbr(array('min' => 12)); // WHERE OehdNbr > 12
     * </code>
     *
     * @param     mixed $oehdnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByOehdnbr($oehdnbr = null, $comparison = null)
    {
        if (is_array($oehdnbr)) {
            $useMinMax = false;
            if (isset($oehdnbr['min'])) {
                $this->addUsingAlias(WipHeaderTableMap::COL_OEHDNBR, $oehdnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdnbr['max'])) {
                $this->addUsingAlias(WipHeaderTableMap::COL_OEHDNBR, $oehdnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WipHeaderTableMap::COL_OEHDNBR, $oehdnbr, $comparison);
    }

    /**
     * Filter the query on the ArcuCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucustid('fooValue');   // WHERE ArcuCustId = 'fooValue'
     * $query->filterByArcucustid('%fooValue%', Criteria::LIKE); // WHERE ArcuCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WipHeaderTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the WiphWorkCenter column
     *
     * Example usage:
     * <code>
     * $query->filterByWiphworkcenter('fooValue');   // WHERE WiphWorkCenter = 'fooValue'
     * $query->filterByWiphworkcenter('%fooValue%', Criteria::LIKE); // WHERE WiphWorkCenter LIKE '%fooValue%'
     * </code>
     *
     * @param     string $wiphworkcenter The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByWiphworkcenter($wiphworkcenter = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($wiphworkcenter)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WipHeaderTableMap::COL_WIPHWORKCENTER, $wiphworkcenter, $comparison);
    }

    /**
     * Filter the query on the WiphOper column
     *
     * Example usage:
     * <code>
     * $query->filterByWiphoper('fooValue');   // WHERE WiphOper = 'fooValue'
     * $query->filterByWiphoper('%fooValue%', Criteria::LIKE); // WHERE WiphOper LIKE '%fooValue%'
     * </code>
     *
     * @param     string $wiphoper The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByWiphoper($wiphoper = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($wiphoper)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WipHeaderTableMap::COL_WIPHOPER, $wiphoper, $comparison);
    }

    /**
     * Filter the query on the WiphAlumaSer column
     *
     * Example usage:
     * <code>
     * $query->filterByWiphalumaser('fooValue');   // WHERE WiphAlumaSer = 'fooValue'
     * $query->filterByWiphalumaser('%fooValue%', Criteria::LIKE); // WHERE WiphAlumaSer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $wiphalumaser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByWiphalumaser($wiphalumaser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($wiphalumaser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WipHeaderTableMap::COL_WIPHALUMASER, $wiphalumaser, $comparison);
    }

    /**
     * Filter the query on the WiphNegWip column
     *
     * Example usage:
     * <code>
     * $query->filterByWiphnegwip('fooValue');   // WHERE WiphNegWip = 'fooValue'
     * $query->filterByWiphnegwip('%fooValue%', Criteria::LIKE); // WHERE WiphNegWip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $wiphnegwip The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByWiphnegwip($wiphnegwip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($wiphnegwip)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WipHeaderTableMap::COL_WIPHNEGWIP, $wiphnegwip, $comparison);
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
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (is_array($dateupdtd)) {
            $useMinMax = false;
            if (isset($dateupdtd['min'])) {
                $this->addUsingAlias(WipHeaderTableMap::COL_DATEUPDTD, $dateupdtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateupdtd['max'])) {
                $this->addUsingAlias(WipHeaderTableMap::COL_DATEUPDTD, $dateupdtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WipHeaderTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (is_array($timeupdtd)) {
            $useMinMax = false;
            if (isset($timeupdtd['min'])) {
                $this->addUsingAlias(WipHeaderTableMap::COL_TIMEUPDTD, $timeupdtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timeupdtd['max'])) {
                $this->addUsingAlias(WipHeaderTableMap::COL_TIMEUPDTD, $timeupdtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WipHeaderTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WipHeaderTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildWipHeader $wipHeader Object to remove from the list of results
     *
     * @return $this|ChildWipHeaderQuery The current query, for fluid interface
     */
    public function prune($wipHeader = null)
    {
        if ($wipHeader) {
            $this->addUsingAlias(WipHeaderTableMap::COL_WIPHWIPNBR, $wipHeader->getWiphwipnbr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the WIP_HEADER table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WipHeaderTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            WipHeaderTableMap::clearInstancePool();
            WipHeaderTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(WipHeaderTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(WipHeaderTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            WipHeaderTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            WipHeaderTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // WipHeaderQuery
