<?php

namespace Base;

use \Warranty as ChildWarranty;
use \WarrantyQuery as ChildWarrantyQuery;
use \Exception;
use \PDO;
use Map\WarrantyTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'WARRANTY' table.
 *
 *
 *
 * @method     ChildWarrantyQuery orderByWarmseq($order = Criteria::ASC) Order by the WarmSeq column
 * @method     ChildWarrantyQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildWarrantyQuery orderBySermsernbr($order = Criteria::ASC) Order by the SermSerNbr column
 * @method     ChildWarrantyQuery orderByWarmsaledate($order = Criteria::ASC) Order by the WarmSaleDate column
 * @method     ChildWarrantyQuery orderByWarmownfname($order = Criteria::ASC) Order by the WarmOwnFname column
 * @method     ChildWarrantyQuery orderByWarmownmname($order = Criteria::ASC) Order by the WarmOwnMname column
 * @method     ChildWarrantyQuery orderByWarmownlname($order = Criteria::ASC) Order by the WarmOwnLname column
 * @method     ChildWarrantyQuery orderByWarmownadr1($order = Criteria::ASC) Order by the WarmOwnAdr1 column
 * @method     ChildWarrantyQuery orderByWarmownadr2($order = Criteria::ASC) Order by the WarmOwnAdr2 column
 * @method     ChildWarrantyQuery orderByWarmownadr3($order = Criteria::ASC) Order by the WarmOwnAdr3 column
 * @method     ChildWarrantyQuery orderByWarmowncity($order = Criteria::ASC) Order by the WarmOwnCity column
 * @method     ChildWarrantyQuery orderByWarmownstat($order = Criteria::ASC) Order by the WarmOwnStat column
 * @method     ChildWarrantyQuery orderByWarmownzip($order = Criteria::ASC) Order by the WarmOwnZip column
 * @method     ChildWarrantyQuery orderByWarmsordnbr($order = Criteria::ASC) Order by the WarmSordNbr column
 * @method     ChildWarrantyQuery orderByWarminvcdate($order = Criteria::ASC) Order by the WarmInvcDate column
 * @method     ChildWarrantyQuery orderByWarmcustid($order = Criteria::ASC) Order by the WarmCustId column
 * @method     ChildWarrantyQuery orderByWarmspid($order = Criteria::ASC) Order by the WarmSpId column
 * @method     ChildWarrantyQuery orderByWarmentrydate($order = Criteria::ASC) Order by the WarmEntryDate column
 * @method     ChildWarrantyQuery orderByRegistermotor($order = Criteria::ASC) Order by the RegisterMotor column
 * @method     ChildWarrantyQuery orderByWarmengsernbr($order = Criteria::ASC) Order by the WarmEngSerNbr column
 * @method     ChildWarrantyQuery orderByWarmenghorse($order = Criteria::ASC) Order by the WarmEngHorse column
 * @method     ChildWarrantyQuery orderByWarmengmodelyear($order = Criteria::ASC) Order by the WarmEngModelYear column
 * @method     ChildWarrantyQuery orderByWarmengdesc($order = Criteria::ASC) Order by the WarmEngDesc column
 * @method     ChildWarrantyQuery orderByWarmphone1($order = Criteria::ASC) Order by the WarmPhone1 column
 * @method     ChildWarrantyQuery orderByWarmphone2($order = Criteria::ASC) Order by the WarmPhone2 column
 * @method     ChildWarrantyQuery orderByWarmemail($order = Criteria::ASC) Order by the WarmEmail column
 * @method     ChildWarrantyQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildWarrantyQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildWarrantyQuery orderByWarmdelvdate($order = Criteria::ASC) Order by the WarmDelvDate column
 * @method     ChildWarrantyQuery orderByDummy($order = Criteria::ASC) Order by the Dummy column
 *
 * @method     ChildWarrantyQuery groupByWarmseq() Group by the WarmSeq column
 * @method     ChildWarrantyQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildWarrantyQuery groupBySermsernbr() Group by the SermSerNbr column
 * @method     ChildWarrantyQuery groupByWarmsaledate() Group by the WarmSaleDate column
 * @method     ChildWarrantyQuery groupByWarmownfname() Group by the WarmOwnFname column
 * @method     ChildWarrantyQuery groupByWarmownmname() Group by the WarmOwnMname column
 * @method     ChildWarrantyQuery groupByWarmownlname() Group by the WarmOwnLname column
 * @method     ChildWarrantyQuery groupByWarmownadr1() Group by the WarmOwnAdr1 column
 * @method     ChildWarrantyQuery groupByWarmownadr2() Group by the WarmOwnAdr2 column
 * @method     ChildWarrantyQuery groupByWarmownadr3() Group by the WarmOwnAdr3 column
 * @method     ChildWarrantyQuery groupByWarmowncity() Group by the WarmOwnCity column
 * @method     ChildWarrantyQuery groupByWarmownstat() Group by the WarmOwnStat column
 * @method     ChildWarrantyQuery groupByWarmownzip() Group by the WarmOwnZip column
 * @method     ChildWarrantyQuery groupByWarmsordnbr() Group by the WarmSordNbr column
 * @method     ChildWarrantyQuery groupByWarminvcdate() Group by the WarmInvcDate column
 * @method     ChildWarrantyQuery groupByWarmcustid() Group by the WarmCustId column
 * @method     ChildWarrantyQuery groupByWarmspid() Group by the WarmSpId column
 * @method     ChildWarrantyQuery groupByWarmentrydate() Group by the WarmEntryDate column
 * @method     ChildWarrantyQuery groupByRegistermotor() Group by the RegisterMotor column
 * @method     ChildWarrantyQuery groupByWarmengsernbr() Group by the WarmEngSerNbr column
 * @method     ChildWarrantyQuery groupByWarmenghorse() Group by the WarmEngHorse column
 * @method     ChildWarrantyQuery groupByWarmengmodelyear() Group by the WarmEngModelYear column
 * @method     ChildWarrantyQuery groupByWarmengdesc() Group by the WarmEngDesc column
 * @method     ChildWarrantyQuery groupByWarmphone1() Group by the WarmPhone1 column
 * @method     ChildWarrantyQuery groupByWarmphone2() Group by the WarmPhone2 column
 * @method     ChildWarrantyQuery groupByWarmemail() Group by the WarmEmail column
 * @method     ChildWarrantyQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildWarrantyQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildWarrantyQuery groupByWarmdelvdate() Group by the WarmDelvDate column
 * @method     ChildWarrantyQuery groupByDummy() Group by the Dummy column
 *
 * @method     ChildWarrantyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildWarrantyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildWarrantyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildWarrantyQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildWarrantyQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildWarrantyQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildWarranty findOne(ConnectionInterface $con = null) Return the first ChildWarranty matching the query
 * @method     ChildWarranty findOneOrCreate(ConnectionInterface $con = null) Return the first ChildWarranty matching the query, or a new ChildWarranty object populated from the query conditions when no match is found
 *
 * @method     ChildWarranty findOneByWarmseq(int $WarmSeq) Return the first ChildWarranty filtered by the WarmSeq column
 * @method     ChildWarranty findOneByInititemnbr(string $InitItemNbr) Return the first ChildWarranty filtered by the InitItemNbr column
 * @method     ChildWarranty findOneBySermsernbr(string $SermSerNbr) Return the first ChildWarranty filtered by the SermSerNbr column
 * @method     ChildWarranty findOneByWarmsaledate(int $WarmSaleDate) Return the first ChildWarranty filtered by the WarmSaleDate column
 * @method     ChildWarranty findOneByWarmownfname(string $WarmOwnFname) Return the first ChildWarranty filtered by the WarmOwnFname column
 * @method     ChildWarranty findOneByWarmownmname(string $WarmOwnMname) Return the first ChildWarranty filtered by the WarmOwnMname column
 * @method     ChildWarranty findOneByWarmownlname(string $WarmOwnLname) Return the first ChildWarranty filtered by the WarmOwnLname column
 * @method     ChildWarranty findOneByWarmownadr1(string $WarmOwnAdr1) Return the first ChildWarranty filtered by the WarmOwnAdr1 column
 * @method     ChildWarranty findOneByWarmownadr2(string $WarmOwnAdr2) Return the first ChildWarranty filtered by the WarmOwnAdr2 column
 * @method     ChildWarranty findOneByWarmownadr3(string $WarmOwnAdr3) Return the first ChildWarranty filtered by the WarmOwnAdr3 column
 * @method     ChildWarranty findOneByWarmowncity(string $WarmOwnCity) Return the first ChildWarranty filtered by the WarmOwnCity column
 * @method     ChildWarranty findOneByWarmownstat(string $WarmOwnStat) Return the first ChildWarranty filtered by the WarmOwnStat column
 * @method     ChildWarranty findOneByWarmownzip(string $WarmOwnZip) Return the first ChildWarranty filtered by the WarmOwnZip column
 * @method     ChildWarranty findOneByWarmsordnbr(int $WarmSordNbr) Return the first ChildWarranty filtered by the WarmSordNbr column
 * @method     ChildWarranty findOneByWarminvcdate(int $WarmInvcDate) Return the first ChildWarranty filtered by the WarmInvcDate column
 * @method     ChildWarranty findOneByWarmcustid(string $WarmCustId) Return the first ChildWarranty filtered by the WarmCustId column
 * @method     ChildWarranty findOneByWarmspid(string $WarmSpId) Return the first ChildWarranty filtered by the WarmSpId column
 * @method     ChildWarranty findOneByWarmentrydate(int $WarmEntryDate) Return the first ChildWarranty filtered by the WarmEntryDate column
 * @method     ChildWarranty findOneByRegistermotor(string $RegisterMotor) Return the first ChildWarranty filtered by the RegisterMotor column
 * @method     ChildWarranty findOneByWarmengsernbr(string $WarmEngSerNbr) Return the first ChildWarranty filtered by the WarmEngSerNbr column
 * @method     ChildWarranty findOneByWarmenghorse(string $WarmEngHorse) Return the first ChildWarranty filtered by the WarmEngHorse column
 * @method     ChildWarranty findOneByWarmengmodelyear(int $WarmEngModelYear) Return the first ChildWarranty filtered by the WarmEngModelYear column
 * @method     ChildWarranty findOneByWarmengdesc(string $WarmEngDesc) Return the first ChildWarranty filtered by the WarmEngDesc column
 * @method     ChildWarranty findOneByWarmphone1(string $WarmPhone1) Return the first ChildWarranty filtered by the WarmPhone1 column
 * @method     ChildWarranty findOneByWarmphone2(string $WarmPhone2) Return the first ChildWarranty filtered by the WarmPhone2 column
 * @method     ChildWarranty findOneByWarmemail(string $WarmEmail) Return the first ChildWarranty filtered by the WarmEmail column
 * @method     ChildWarranty findOneByDateupdtd(int $DateUpdtd) Return the first ChildWarranty filtered by the DateUpdtd column
 * @method     ChildWarranty findOneByTimeupdtd(int $TimeUpdtd) Return the first ChildWarranty filtered by the TimeUpdtd column
 * @method     ChildWarranty findOneByWarmdelvdate(int $WarmDelvDate) Return the first ChildWarranty filtered by the WarmDelvDate column
 * @method     ChildWarranty findOneByDummy(string $Dummy) Return the first ChildWarranty filtered by the Dummy column *

 * @method     ChildWarranty requirePk($key, ConnectionInterface $con = null) Return the ChildWarranty by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOne(ConnectionInterface $con = null) Return the first ChildWarranty matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWarranty requireOneByWarmseq(int $WarmSeq) Return the first ChildWarranty filtered by the WarmSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByInititemnbr(string $InitItemNbr) Return the first ChildWarranty filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneBySermsernbr(string $SermSerNbr) Return the first ChildWarranty filtered by the SermSerNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmsaledate(int $WarmSaleDate) Return the first ChildWarranty filtered by the WarmSaleDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmownfname(string $WarmOwnFname) Return the first ChildWarranty filtered by the WarmOwnFname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmownmname(string $WarmOwnMname) Return the first ChildWarranty filtered by the WarmOwnMname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmownlname(string $WarmOwnLname) Return the first ChildWarranty filtered by the WarmOwnLname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmownadr1(string $WarmOwnAdr1) Return the first ChildWarranty filtered by the WarmOwnAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmownadr2(string $WarmOwnAdr2) Return the first ChildWarranty filtered by the WarmOwnAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmownadr3(string $WarmOwnAdr3) Return the first ChildWarranty filtered by the WarmOwnAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmowncity(string $WarmOwnCity) Return the first ChildWarranty filtered by the WarmOwnCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmownstat(string $WarmOwnStat) Return the first ChildWarranty filtered by the WarmOwnStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmownzip(string $WarmOwnZip) Return the first ChildWarranty filtered by the WarmOwnZip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmsordnbr(int $WarmSordNbr) Return the first ChildWarranty filtered by the WarmSordNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarminvcdate(int $WarmInvcDate) Return the first ChildWarranty filtered by the WarmInvcDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmcustid(string $WarmCustId) Return the first ChildWarranty filtered by the WarmCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmspid(string $WarmSpId) Return the first ChildWarranty filtered by the WarmSpId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmentrydate(int $WarmEntryDate) Return the first ChildWarranty filtered by the WarmEntryDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByRegistermotor(string $RegisterMotor) Return the first ChildWarranty filtered by the RegisterMotor column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmengsernbr(string $WarmEngSerNbr) Return the first ChildWarranty filtered by the WarmEngSerNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmenghorse(string $WarmEngHorse) Return the first ChildWarranty filtered by the WarmEngHorse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmengmodelyear(int $WarmEngModelYear) Return the first ChildWarranty filtered by the WarmEngModelYear column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmengdesc(string $WarmEngDesc) Return the first ChildWarranty filtered by the WarmEngDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmphone1(string $WarmPhone1) Return the first ChildWarranty filtered by the WarmPhone1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmphone2(string $WarmPhone2) Return the first ChildWarranty filtered by the WarmPhone2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmemail(string $WarmEmail) Return the first ChildWarranty filtered by the WarmEmail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByDateupdtd(int $DateUpdtd) Return the first ChildWarranty filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByTimeupdtd(int $TimeUpdtd) Return the first ChildWarranty filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByWarmdelvdate(int $WarmDelvDate) Return the first ChildWarranty filtered by the WarmDelvDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty requireOneByDummy(string $Dummy) Return the first ChildWarranty filtered by the Dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWarranty[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildWarranty objects based on current ModelCriteria
 * @method     ChildWarranty[]|ObjectCollection findByWarmseq(int $WarmSeq) Return ChildWarranty objects filtered by the WarmSeq column
 * @method     ChildWarranty[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildWarranty objects filtered by the InitItemNbr column
 * @method     ChildWarranty[]|ObjectCollection findBySermsernbr(string $SermSerNbr) Return ChildWarranty objects filtered by the SermSerNbr column
 * @method     ChildWarranty[]|ObjectCollection findByWarmsaledate(int $WarmSaleDate) Return ChildWarranty objects filtered by the WarmSaleDate column
 * @method     ChildWarranty[]|ObjectCollection findByWarmownfname(string $WarmOwnFname) Return ChildWarranty objects filtered by the WarmOwnFname column
 * @method     ChildWarranty[]|ObjectCollection findByWarmownmname(string $WarmOwnMname) Return ChildWarranty objects filtered by the WarmOwnMname column
 * @method     ChildWarranty[]|ObjectCollection findByWarmownlname(string $WarmOwnLname) Return ChildWarranty objects filtered by the WarmOwnLname column
 * @method     ChildWarranty[]|ObjectCollection findByWarmownadr1(string $WarmOwnAdr1) Return ChildWarranty objects filtered by the WarmOwnAdr1 column
 * @method     ChildWarranty[]|ObjectCollection findByWarmownadr2(string $WarmOwnAdr2) Return ChildWarranty objects filtered by the WarmOwnAdr2 column
 * @method     ChildWarranty[]|ObjectCollection findByWarmownadr3(string $WarmOwnAdr3) Return ChildWarranty objects filtered by the WarmOwnAdr3 column
 * @method     ChildWarranty[]|ObjectCollection findByWarmowncity(string $WarmOwnCity) Return ChildWarranty objects filtered by the WarmOwnCity column
 * @method     ChildWarranty[]|ObjectCollection findByWarmownstat(string $WarmOwnStat) Return ChildWarranty objects filtered by the WarmOwnStat column
 * @method     ChildWarranty[]|ObjectCollection findByWarmownzip(string $WarmOwnZip) Return ChildWarranty objects filtered by the WarmOwnZip column
 * @method     ChildWarranty[]|ObjectCollection findByWarmsordnbr(int $WarmSordNbr) Return ChildWarranty objects filtered by the WarmSordNbr column
 * @method     ChildWarranty[]|ObjectCollection findByWarminvcdate(int $WarmInvcDate) Return ChildWarranty objects filtered by the WarmInvcDate column
 * @method     ChildWarranty[]|ObjectCollection findByWarmcustid(string $WarmCustId) Return ChildWarranty objects filtered by the WarmCustId column
 * @method     ChildWarranty[]|ObjectCollection findByWarmspid(string $WarmSpId) Return ChildWarranty objects filtered by the WarmSpId column
 * @method     ChildWarranty[]|ObjectCollection findByWarmentrydate(int $WarmEntryDate) Return ChildWarranty objects filtered by the WarmEntryDate column
 * @method     ChildWarranty[]|ObjectCollection findByRegistermotor(string $RegisterMotor) Return ChildWarranty objects filtered by the RegisterMotor column
 * @method     ChildWarranty[]|ObjectCollection findByWarmengsernbr(string $WarmEngSerNbr) Return ChildWarranty objects filtered by the WarmEngSerNbr column
 * @method     ChildWarranty[]|ObjectCollection findByWarmenghorse(string $WarmEngHorse) Return ChildWarranty objects filtered by the WarmEngHorse column
 * @method     ChildWarranty[]|ObjectCollection findByWarmengmodelyear(int $WarmEngModelYear) Return ChildWarranty objects filtered by the WarmEngModelYear column
 * @method     ChildWarranty[]|ObjectCollection findByWarmengdesc(string $WarmEngDesc) Return ChildWarranty objects filtered by the WarmEngDesc column
 * @method     ChildWarranty[]|ObjectCollection findByWarmphone1(string $WarmPhone1) Return ChildWarranty objects filtered by the WarmPhone1 column
 * @method     ChildWarranty[]|ObjectCollection findByWarmphone2(string $WarmPhone2) Return ChildWarranty objects filtered by the WarmPhone2 column
 * @method     ChildWarranty[]|ObjectCollection findByWarmemail(string $WarmEmail) Return ChildWarranty objects filtered by the WarmEmail column
 * @method     ChildWarranty[]|ObjectCollection findByDateupdtd(int $DateUpdtd) Return ChildWarranty objects filtered by the DateUpdtd column
 * @method     ChildWarranty[]|ObjectCollection findByTimeupdtd(int $TimeUpdtd) Return ChildWarranty objects filtered by the TimeUpdtd column
 * @method     ChildWarranty[]|ObjectCollection findByWarmdelvdate(int $WarmDelvDate) Return ChildWarranty objects filtered by the WarmDelvDate column
 * @method     ChildWarranty[]|ObjectCollection findByDummy(string $Dummy) Return ChildWarranty objects filtered by the Dummy column
 * @method     ChildWarranty[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class WarrantyQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\WarrantyQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Warranty', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildWarrantyQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildWarrantyQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildWarrantyQuery) {
            return $criteria;
        }
        $query = new ChildWarrantyQuery();
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
     * @return ChildWarranty|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(WarrantyTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = WarrantyTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildWarranty A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT WarmSeq, InitItemNbr, SermSerNbr, WarmSaleDate, WarmOwnFname, WarmOwnMname, WarmOwnLname, WarmOwnAdr1, WarmOwnAdr2, WarmOwnAdr3, WarmOwnCity, WarmOwnStat, WarmOwnZip, WarmSordNbr, WarmInvcDate, WarmCustId, WarmSpId, WarmEntryDate, RegisterMotor, WarmEngSerNbr, WarmEngHorse, WarmEngModelYear, WarmEngDesc, WarmPhone1, WarmPhone2, WarmEmail, DateUpdtd, TimeUpdtd, WarmDelvDate, Dummy FROM WARRANTY WHERE WarmSeq = :p0';
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
            /** @var ChildWarranty $obj */
            $obj = new ChildWarranty();
            $obj->hydrate($row);
            WarrantyTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildWarranty|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMSEQ, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMSEQ, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the WarmSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmseq(1234); // WHERE WarmSeq = 1234
     * $query->filterByWarmseq(array(12, 34)); // WHERE WarmSeq IN (12, 34)
     * $query->filterByWarmseq(array('min' => 12)); // WHERE WarmSeq > 12
     * </code>
     *
     * @param     mixed $warmseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmseq($warmseq = null, $comparison = null)
    {
        if (is_array($warmseq)) {
            $useMinMax = false;
            if (isset($warmseq['min'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_WARMSEQ, $warmseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warmseq['max'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_WARMSEQ, $warmseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMSEQ, $warmseq, $comparison);
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
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
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
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterBySermsernbr($sermsernbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermsernbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_SERMSERNBR, $sermsernbr, $comparison);
    }

    /**
     * Filter the query on the WarmSaleDate column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmsaledate(1234); // WHERE WarmSaleDate = 1234
     * $query->filterByWarmsaledate(array(12, 34)); // WHERE WarmSaleDate IN (12, 34)
     * $query->filterByWarmsaledate(array('min' => 12)); // WHERE WarmSaleDate > 12
     * </code>
     *
     * @param     mixed $warmsaledate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmsaledate($warmsaledate = null, $comparison = null)
    {
        if (is_array($warmsaledate)) {
            $useMinMax = false;
            if (isset($warmsaledate['min'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_WARMSALEDATE, $warmsaledate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warmsaledate['max'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_WARMSALEDATE, $warmsaledate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMSALEDATE, $warmsaledate, $comparison);
    }

    /**
     * Filter the query on the WarmOwnFname column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmownfname('fooValue');   // WHERE WarmOwnFname = 'fooValue'
     * $query->filterByWarmownfname('%fooValue%', Criteria::LIKE); // WHERE WarmOwnFname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmownfname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmownfname($warmownfname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownfname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMOWNFNAME, $warmownfname, $comparison);
    }

    /**
     * Filter the query on the WarmOwnMname column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmownmname('fooValue');   // WHERE WarmOwnMname = 'fooValue'
     * $query->filterByWarmownmname('%fooValue%', Criteria::LIKE); // WHERE WarmOwnMname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmownmname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmownmname($warmownmname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownmname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMOWNMNAME, $warmownmname, $comparison);
    }

    /**
     * Filter the query on the WarmOwnLname column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmownlname('fooValue');   // WHERE WarmOwnLname = 'fooValue'
     * $query->filterByWarmownlname('%fooValue%', Criteria::LIKE); // WHERE WarmOwnLname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmownlname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmownlname($warmownlname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownlname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMOWNLNAME, $warmownlname, $comparison);
    }

    /**
     * Filter the query on the WarmOwnAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmownadr1('fooValue');   // WHERE WarmOwnAdr1 = 'fooValue'
     * $query->filterByWarmownadr1('%fooValue%', Criteria::LIKE); // WHERE WarmOwnAdr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmownadr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmownadr1($warmownadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMOWNADR1, $warmownadr1, $comparison);
    }

    /**
     * Filter the query on the WarmOwnAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmownadr2('fooValue');   // WHERE WarmOwnAdr2 = 'fooValue'
     * $query->filterByWarmownadr2('%fooValue%', Criteria::LIKE); // WHERE WarmOwnAdr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmownadr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmownadr2($warmownadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMOWNADR2, $warmownadr2, $comparison);
    }

    /**
     * Filter the query on the WarmOwnAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmownadr3('fooValue');   // WHERE WarmOwnAdr3 = 'fooValue'
     * $query->filterByWarmownadr3('%fooValue%', Criteria::LIKE); // WHERE WarmOwnAdr3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmownadr3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmownadr3($warmownadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMOWNADR3, $warmownadr3, $comparison);
    }

    /**
     * Filter the query on the WarmOwnCity column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmowncity('fooValue');   // WHERE WarmOwnCity = 'fooValue'
     * $query->filterByWarmowncity('%fooValue%', Criteria::LIKE); // WHERE WarmOwnCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmowncity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmowncity($warmowncity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmowncity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMOWNCITY, $warmowncity, $comparison);
    }

    /**
     * Filter the query on the WarmOwnStat column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmownstat('fooValue');   // WHERE WarmOwnStat = 'fooValue'
     * $query->filterByWarmownstat('%fooValue%', Criteria::LIKE); // WHERE WarmOwnStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmownstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmownstat($warmownstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMOWNSTAT, $warmownstat, $comparison);
    }

    /**
     * Filter the query on the WarmOwnZip column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmownzip('fooValue');   // WHERE WarmOwnZip = 'fooValue'
     * $query->filterByWarmownzip('%fooValue%', Criteria::LIKE); // WHERE WarmOwnZip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmownzip The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmownzip($warmownzip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownzip)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMOWNZIP, $warmownzip, $comparison);
    }

    /**
     * Filter the query on the WarmSordNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmsordnbr(1234); // WHERE WarmSordNbr = 1234
     * $query->filterByWarmsordnbr(array(12, 34)); // WHERE WarmSordNbr IN (12, 34)
     * $query->filterByWarmsordnbr(array('min' => 12)); // WHERE WarmSordNbr > 12
     * </code>
     *
     * @param     mixed $warmsordnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmsordnbr($warmsordnbr = null, $comparison = null)
    {
        if (is_array($warmsordnbr)) {
            $useMinMax = false;
            if (isset($warmsordnbr['min'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_WARMSORDNBR, $warmsordnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warmsordnbr['max'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_WARMSORDNBR, $warmsordnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMSORDNBR, $warmsordnbr, $comparison);
    }

    /**
     * Filter the query on the WarmInvcDate column
     *
     * Example usage:
     * <code>
     * $query->filterByWarminvcdate(1234); // WHERE WarmInvcDate = 1234
     * $query->filterByWarminvcdate(array(12, 34)); // WHERE WarmInvcDate IN (12, 34)
     * $query->filterByWarminvcdate(array('min' => 12)); // WHERE WarmInvcDate > 12
     * </code>
     *
     * @param     mixed $warminvcdate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarminvcdate($warminvcdate = null, $comparison = null)
    {
        if (is_array($warminvcdate)) {
            $useMinMax = false;
            if (isset($warminvcdate['min'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_WARMINVCDATE, $warminvcdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warminvcdate['max'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_WARMINVCDATE, $warminvcdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMINVCDATE, $warminvcdate, $comparison);
    }

    /**
     * Filter the query on the WarmCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmcustid('fooValue');   // WHERE WarmCustId = 'fooValue'
     * $query->filterByWarmcustid('%fooValue%', Criteria::LIKE); // WHERE WarmCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmcustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmcustid($warmcustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmcustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMCUSTID, $warmcustid, $comparison);
    }

    /**
     * Filter the query on the WarmSpId column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmspid('fooValue');   // WHERE WarmSpId = 'fooValue'
     * $query->filterByWarmspid('%fooValue%', Criteria::LIKE); // WHERE WarmSpId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmspid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmspid($warmspid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmspid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMSPID, $warmspid, $comparison);
    }

    /**
     * Filter the query on the WarmEntryDate column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmentrydate(1234); // WHERE WarmEntryDate = 1234
     * $query->filterByWarmentrydate(array(12, 34)); // WHERE WarmEntryDate IN (12, 34)
     * $query->filterByWarmentrydate(array('min' => 12)); // WHERE WarmEntryDate > 12
     * </code>
     *
     * @param     mixed $warmentrydate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmentrydate($warmentrydate = null, $comparison = null)
    {
        if (is_array($warmentrydate)) {
            $useMinMax = false;
            if (isset($warmentrydate['min'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_WARMENTRYDATE, $warmentrydate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warmentrydate['max'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_WARMENTRYDATE, $warmentrydate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMENTRYDATE, $warmentrydate, $comparison);
    }

    /**
     * Filter the query on the RegisterMotor column
     *
     * Example usage:
     * <code>
     * $query->filterByRegistermotor('fooValue');   // WHERE RegisterMotor = 'fooValue'
     * $query->filterByRegistermotor('%fooValue%', Criteria::LIKE); // WHERE RegisterMotor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $registermotor The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByRegistermotor($registermotor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($registermotor)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_REGISTERMOTOR, $registermotor, $comparison);
    }

    /**
     * Filter the query on the WarmEngSerNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmengsernbr('fooValue');   // WHERE WarmEngSerNbr = 'fooValue'
     * $query->filterByWarmengsernbr('%fooValue%', Criteria::LIKE); // WHERE WarmEngSerNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmengsernbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmengsernbr($warmengsernbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmengsernbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMENGSERNBR, $warmengsernbr, $comparison);
    }

    /**
     * Filter the query on the WarmEngHorse column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmenghorse(1234); // WHERE WarmEngHorse = 1234
     * $query->filterByWarmenghorse(array(12, 34)); // WHERE WarmEngHorse IN (12, 34)
     * $query->filterByWarmenghorse(array('min' => 12)); // WHERE WarmEngHorse > 12
     * </code>
     *
     * @param     mixed $warmenghorse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmenghorse($warmenghorse = null, $comparison = null)
    {
        if (is_array($warmenghorse)) {
            $useMinMax = false;
            if (isset($warmenghorse['min'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_WARMENGHORSE, $warmenghorse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warmenghorse['max'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_WARMENGHORSE, $warmenghorse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMENGHORSE, $warmenghorse, $comparison);
    }

    /**
     * Filter the query on the WarmEngModelYear column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmengmodelyear(1234); // WHERE WarmEngModelYear = 1234
     * $query->filterByWarmengmodelyear(array(12, 34)); // WHERE WarmEngModelYear IN (12, 34)
     * $query->filterByWarmengmodelyear(array('min' => 12)); // WHERE WarmEngModelYear > 12
     * </code>
     *
     * @param     mixed $warmengmodelyear The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmengmodelyear($warmengmodelyear = null, $comparison = null)
    {
        if (is_array($warmengmodelyear)) {
            $useMinMax = false;
            if (isset($warmengmodelyear['min'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_WARMENGMODELYEAR, $warmengmodelyear['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warmengmodelyear['max'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_WARMENGMODELYEAR, $warmengmodelyear['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMENGMODELYEAR, $warmengmodelyear, $comparison);
    }

    /**
     * Filter the query on the WarmEngDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmengdesc('fooValue');   // WHERE WarmEngDesc = 'fooValue'
     * $query->filterByWarmengdesc('%fooValue%', Criteria::LIKE); // WHERE WarmEngDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmengdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmengdesc($warmengdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmengdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMENGDESC, $warmengdesc, $comparison);
    }

    /**
     * Filter the query on the WarmPhone1 column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmphone1('fooValue');   // WHERE WarmPhone1 = 'fooValue'
     * $query->filterByWarmphone1('%fooValue%', Criteria::LIKE); // WHERE WarmPhone1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmphone1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmphone1($warmphone1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmphone1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMPHONE1, $warmphone1, $comparison);
    }

    /**
     * Filter the query on the WarmPhone2 column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmphone2('fooValue');   // WHERE WarmPhone2 = 'fooValue'
     * $query->filterByWarmphone2('%fooValue%', Criteria::LIKE); // WHERE WarmPhone2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmphone2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmphone2($warmphone2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmphone2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMPHONE2, $warmphone2, $comparison);
    }

    /**
     * Filter the query on the WarmEmail column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmemail('fooValue');   // WHERE WarmEmail = 'fooValue'
     * $query->filterByWarmemail('%fooValue%', Criteria::LIKE); // WHERE WarmEmail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmemail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmemail($warmemail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmemail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMEMAIL, $warmemail, $comparison);
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
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (is_array($dateupdtd)) {
            $useMinMax = false;
            if (isset($dateupdtd['min'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_DATEUPDTD, $dateupdtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateupdtd['max'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_DATEUPDTD, $dateupdtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (is_array($timeupdtd)) {
            $useMinMax = false;
            if (isset($timeupdtd['min'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_TIMEUPDTD, $timeupdtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timeupdtd['max'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_TIMEUPDTD, $timeupdtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
    }

    /**
     * Filter the query on the WarmDelvDate column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmdelvdate(1234); // WHERE WarmDelvDate = 1234
     * $query->filterByWarmdelvdate(array(12, 34)); // WHERE WarmDelvDate IN (12, 34)
     * $query->filterByWarmdelvdate(array('min' => 12)); // WHERE WarmDelvDate > 12
     * </code>
     *
     * @param     mixed $warmdelvdate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmdelvdate($warmdelvdate = null, $comparison = null)
    {
        if (is_array($warmdelvdate)) {
            $useMinMax = false;
            if (isset($warmdelvdate['min'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_WARMDELVDATE, $warmdelvdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warmdelvdate['max'])) {
                $this->addUsingAlias(WarrantyTableMap::COL_WARMDELVDATE, $warmdelvdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_WARMDELVDATE, $warmdelvdate, $comparison);
    }

    /**
     * Filter the query on the Dummy column
     *
     * Example usage:
     * <code>
     * $query->filterByDummy('fooValue');   // WHERE Dummy = 'fooValue'
     * $query->filterByDummy('%fooValue%', Criteria::LIKE); // WHERE Dummy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dummy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarrantyTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildWarranty $warranty Object to remove from the list of results
     *
     * @return $this|ChildWarrantyQuery The current query, for fluid interface
     */
    public function prune($warranty = null)
    {
        if ($warranty) {
            $this->addUsingAlias(WarrantyTableMap::COL_WARMSEQ, $warranty->getWarmseq(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the WARRANTY table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WarrantyTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            WarrantyTableMap::clearInstancePool();
            WarrantyTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(WarrantyTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(WarrantyTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            WarrantyTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            WarrantyTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // WarrantyQuery
