<?php

namespace Base;

use \Warranty2 as ChildWarranty2;
use \Warranty2Query as ChildWarranty2Query;
use \Exception;
use \PDO;
use Map\Warranty2TableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'WARRANTY2' table.
 *
 *
 *
 * @method     ChildWarranty2Query orderByWarmseq($order = Criteria::ASC) Order by the WarmSeq column
 * @method     ChildWarranty2Query orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildWarranty2Query orderBySermsernbr($order = Criteria::ASC) Order by the SermSerNbr column
 * @method     ChildWarranty2Query orderByWarmsaledate($order = Criteria::ASC) Order by the WarmSaleDate column
 * @method     ChildWarranty2Query orderByWarmownfname($order = Criteria::ASC) Order by the WarmOwnFname column
 * @method     ChildWarranty2Query orderByWarmownmname($order = Criteria::ASC) Order by the WarmOwnMname column
 * @method     ChildWarranty2Query orderByWarmownlname($order = Criteria::ASC) Order by the WarmOwnLname column
 * @method     ChildWarranty2Query orderByWarmownadr1($order = Criteria::ASC) Order by the WarmOwnAdr1 column
 * @method     ChildWarranty2Query orderByWarmownadr2($order = Criteria::ASC) Order by the WarmOwnAdr2 column
 * @method     ChildWarranty2Query orderByWarmownadr3($order = Criteria::ASC) Order by the WarmOwnAdr3 column
 * @method     ChildWarranty2Query orderByWarmowncity($order = Criteria::ASC) Order by the WarmOwnCity column
 * @method     ChildWarranty2Query orderByWarmownstat($order = Criteria::ASC) Order by the WarmOwnStat column
 * @method     ChildWarranty2Query orderByWarmownzip($order = Criteria::ASC) Order by the WarmOwnZip column
 * @method     ChildWarranty2Query orderByWarmsordnbr($order = Criteria::ASC) Order by the WarmSordNbr column
 * @method     ChildWarranty2Query orderByWarminvcdate($order = Criteria::ASC) Order by the WarmInvcDate column
 * @method     ChildWarranty2Query orderByWarmcustid($order = Criteria::ASC) Order by the WarmCustId column
 * @method     ChildWarranty2Query orderByWarmspid($order = Criteria::ASC) Order by the WarmSpId column
 * @method     ChildWarranty2Query orderByWarmentrydate($order = Criteria::ASC) Order by the WarmEntryDate column
 * @method     ChildWarranty2Query orderByRegistermotor($order = Criteria::ASC) Order by the RegisterMotor column
 * @method     ChildWarranty2Query orderByWarmengsernbr($order = Criteria::ASC) Order by the WarmEngSerNbr column
 * @method     ChildWarranty2Query orderByWarmenghorse($order = Criteria::ASC) Order by the WarmEngHorse column
 * @method     ChildWarranty2Query orderByWarmengmodelyear($order = Criteria::ASC) Order by the WarmEngModelYear column
 * @method     ChildWarranty2Query orderByWarmengdesc($order = Criteria::ASC) Order by the WarmEngDesc column
 * @method     ChildWarranty2Query orderByWarmphone1($order = Criteria::ASC) Order by the WarmPhone1 column
 * @method     ChildWarranty2Query orderByWarmphone2($order = Criteria::ASC) Order by the WarmPhone2 column
 * @method     ChildWarranty2Query orderByWarmemail($order = Criteria::ASC) Order by the WarmEmail column
 * @method     ChildWarranty2Query orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildWarranty2Query orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildWarranty2Query orderByWarmdelvdate($order = Criteria::ASC) Order by the WarmDelvDate column
 * @method     ChildWarranty2Query orderByDummy($order = Criteria::ASC) Order by the Dummy column
 *
 * @method     ChildWarranty2Query groupByWarmseq() Group by the WarmSeq column
 * @method     ChildWarranty2Query groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildWarranty2Query groupBySermsernbr() Group by the SermSerNbr column
 * @method     ChildWarranty2Query groupByWarmsaledate() Group by the WarmSaleDate column
 * @method     ChildWarranty2Query groupByWarmownfname() Group by the WarmOwnFname column
 * @method     ChildWarranty2Query groupByWarmownmname() Group by the WarmOwnMname column
 * @method     ChildWarranty2Query groupByWarmownlname() Group by the WarmOwnLname column
 * @method     ChildWarranty2Query groupByWarmownadr1() Group by the WarmOwnAdr1 column
 * @method     ChildWarranty2Query groupByWarmownadr2() Group by the WarmOwnAdr2 column
 * @method     ChildWarranty2Query groupByWarmownadr3() Group by the WarmOwnAdr3 column
 * @method     ChildWarranty2Query groupByWarmowncity() Group by the WarmOwnCity column
 * @method     ChildWarranty2Query groupByWarmownstat() Group by the WarmOwnStat column
 * @method     ChildWarranty2Query groupByWarmownzip() Group by the WarmOwnZip column
 * @method     ChildWarranty2Query groupByWarmsordnbr() Group by the WarmSordNbr column
 * @method     ChildWarranty2Query groupByWarminvcdate() Group by the WarmInvcDate column
 * @method     ChildWarranty2Query groupByWarmcustid() Group by the WarmCustId column
 * @method     ChildWarranty2Query groupByWarmspid() Group by the WarmSpId column
 * @method     ChildWarranty2Query groupByWarmentrydate() Group by the WarmEntryDate column
 * @method     ChildWarranty2Query groupByRegistermotor() Group by the RegisterMotor column
 * @method     ChildWarranty2Query groupByWarmengsernbr() Group by the WarmEngSerNbr column
 * @method     ChildWarranty2Query groupByWarmenghorse() Group by the WarmEngHorse column
 * @method     ChildWarranty2Query groupByWarmengmodelyear() Group by the WarmEngModelYear column
 * @method     ChildWarranty2Query groupByWarmengdesc() Group by the WarmEngDesc column
 * @method     ChildWarranty2Query groupByWarmphone1() Group by the WarmPhone1 column
 * @method     ChildWarranty2Query groupByWarmphone2() Group by the WarmPhone2 column
 * @method     ChildWarranty2Query groupByWarmemail() Group by the WarmEmail column
 * @method     ChildWarranty2Query groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildWarranty2Query groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildWarranty2Query groupByWarmdelvdate() Group by the WarmDelvDate column
 * @method     ChildWarranty2Query groupByDummy() Group by the Dummy column
 *
 * @method     ChildWarranty2Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildWarranty2Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildWarranty2Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildWarranty2Query leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildWarranty2Query rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildWarranty2Query innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildWarranty2 findOne(ConnectionInterface $con = null) Return the first ChildWarranty2 matching the query
 * @method     ChildWarranty2 findOneOrCreate(ConnectionInterface $con = null) Return the first ChildWarranty2 matching the query, or a new ChildWarranty2 object populated from the query conditions when no match is found
 *
 * @method     ChildWarranty2 findOneByWarmseq(int $WarmSeq) Return the first ChildWarranty2 filtered by the WarmSeq column
 * @method     ChildWarranty2 findOneByInititemnbr(string $InitItemNbr) Return the first ChildWarranty2 filtered by the InitItemNbr column
 * @method     ChildWarranty2 findOneBySermsernbr(string $SermSerNbr) Return the first ChildWarranty2 filtered by the SermSerNbr column
 * @method     ChildWarranty2 findOneByWarmsaledate(int $WarmSaleDate) Return the first ChildWarranty2 filtered by the WarmSaleDate column
 * @method     ChildWarranty2 findOneByWarmownfname(string $WarmOwnFname) Return the first ChildWarranty2 filtered by the WarmOwnFname column
 * @method     ChildWarranty2 findOneByWarmownmname(string $WarmOwnMname) Return the first ChildWarranty2 filtered by the WarmOwnMname column
 * @method     ChildWarranty2 findOneByWarmownlname(string $WarmOwnLname) Return the first ChildWarranty2 filtered by the WarmOwnLname column
 * @method     ChildWarranty2 findOneByWarmownadr1(string $WarmOwnAdr1) Return the first ChildWarranty2 filtered by the WarmOwnAdr1 column
 * @method     ChildWarranty2 findOneByWarmownadr2(string $WarmOwnAdr2) Return the first ChildWarranty2 filtered by the WarmOwnAdr2 column
 * @method     ChildWarranty2 findOneByWarmownadr3(string $WarmOwnAdr3) Return the first ChildWarranty2 filtered by the WarmOwnAdr3 column
 * @method     ChildWarranty2 findOneByWarmowncity(string $WarmOwnCity) Return the first ChildWarranty2 filtered by the WarmOwnCity column
 * @method     ChildWarranty2 findOneByWarmownstat(string $WarmOwnStat) Return the first ChildWarranty2 filtered by the WarmOwnStat column
 * @method     ChildWarranty2 findOneByWarmownzip(string $WarmOwnZip) Return the first ChildWarranty2 filtered by the WarmOwnZip column
 * @method     ChildWarranty2 findOneByWarmsordnbr(int $WarmSordNbr) Return the first ChildWarranty2 filtered by the WarmSordNbr column
 * @method     ChildWarranty2 findOneByWarminvcdate(int $WarmInvcDate) Return the first ChildWarranty2 filtered by the WarmInvcDate column
 * @method     ChildWarranty2 findOneByWarmcustid(string $WarmCustId) Return the first ChildWarranty2 filtered by the WarmCustId column
 * @method     ChildWarranty2 findOneByWarmspid(string $WarmSpId) Return the first ChildWarranty2 filtered by the WarmSpId column
 * @method     ChildWarranty2 findOneByWarmentrydate(int $WarmEntryDate) Return the first ChildWarranty2 filtered by the WarmEntryDate column
 * @method     ChildWarranty2 findOneByRegistermotor(string $RegisterMotor) Return the first ChildWarranty2 filtered by the RegisterMotor column
 * @method     ChildWarranty2 findOneByWarmengsernbr(string $WarmEngSerNbr) Return the first ChildWarranty2 filtered by the WarmEngSerNbr column
 * @method     ChildWarranty2 findOneByWarmenghorse(string $WarmEngHorse) Return the first ChildWarranty2 filtered by the WarmEngHorse column
 * @method     ChildWarranty2 findOneByWarmengmodelyear(int $WarmEngModelYear) Return the first ChildWarranty2 filtered by the WarmEngModelYear column
 * @method     ChildWarranty2 findOneByWarmengdesc(string $WarmEngDesc) Return the first ChildWarranty2 filtered by the WarmEngDesc column
 * @method     ChildWarranty2 findOneByWarmphone1(string $WarmPhone1) Return the first ChildWarranty2 filtered by the WarmPhone1 column
 * @method     ChildWarranty2 findOneByWarmphone2(string $WarmPhone2) Return the first ChildWarranty2 filtered by the WarmPhone2 column
 * @method     ChildWarranty2 findOneByWarmemail(string $WarmEmail) Return the first ChildWarranty2 filtered by the WarmEmail column
 * @method     ChildWarranty2 findOneByDateupdtd(int $DateUpdtd) Return the first ChildWarranty2 filtered by the DateUpdtd column
 * @method     ChildWarranty2 findOneByTimeupdtd(int $TimeUpdtd) Return the first ChildWarranty2 filtered by the TimeUpdtd column
 * @method     ChildWarranty2 findOneByWarmdelvdate(int $WarmDelvDate) Return the first ChildWarranty2 filtered by the WarmDelvDate column
 * @method     ChildWarranty2 findOneByDummy(string $Dummy) Return the first ChildWarranty2 filtered by the Dummy column *

 * @method     ChildWarranty2 requirePk($key, ConnectionInterface $con = null) Return the ChildWarranty2 by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOne(ConnectionInterface $con = null) Return the first ChildWarranty2 matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWarranty2 requireOneByWarmseq(int $WarmSeq) Return the first ChildWarranty2 filtered by the WarmSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByInititemnbr(string $InitItemNbr) Return the first ChildWarranty2 filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneBySermsernbr(string $SermSerNbr) Return the first ChildWarranty2 filtered by the SermSerNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmsaledate(int $WarmSaleDate) Return the first ChildWarranty2 filtered by the WarmSaleDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmownfname(string $WarmOwnFname) Return the first ChildWarranty2 filtered by the WarmOwnFname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmownmname(string $WarmOwnMname) Return the first ChildWarranty2 filtered by the WarmOwnMname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmownlname(string $WarmOwnLname) Return the first ChildWarranty2 filtered by the WarmOwnLname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmownadr1(string $WarmOwnAdr1) Return the first ChildWarranty2 filtered by the WarmOwnAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmownadr2(string $WarmOwnAdr2) Return the first ChildWarranty2 filtered by the WarmOwnAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmownadr3(string $WarmOwnAdr3) Return the first ChildWarranty2 filtered by the WarmOwnAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmowncity(string $WarmOwnCity) Return the first ChildWarranty2 filtered by the WarmOwnCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmownstat(string $WarmOwnStat) Return the first ChildWarranty2 filtered by the WarmOwnStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmownzip(string $WarmOwnZip) Return the first ChildWarranty2 filtered by the WarmOwnZip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmsordnbr(int $WarmSordNbr) Return the first ChildWarranty2 filtered by the WarmSordNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarminvcdate(int $WarmInvcDate) Return the first ChildWarranty2 filtered by the WarmInvcDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmcustid(string $WarmCustId) Return the first ChildWarranty2 filtered by the WarmCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmspid(string $WarmSpId) Return the first ChildWarranty2 filtered by the WarmSpId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmentrydate(int $WarmEntryDate) Return the first ChildWarranty2 filtered by the WarmEntryDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByRegistermotor(string $RegisterMotor) Return the first ChildWarranty2 filtered by the RegisterMotor column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmengsernbr(string $WarmEngSerNbr) Return the first ChildWarranty2 filtered by the WarmEngSerNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmenghorse(string $WarmEngHorse) Return the first ChildWarranty2 filtered by the WarmEngHorse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmengmodelyear(int $WarmEngModelYear) Return the first ChildWarranty2 filtered by the WarmEngModelYear column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmengdesc(string $WarmEngDesc) Return the first ChildWarranty2 filtered by the WarmEngDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmphone1(string $WarmPhone1) Return the first ChildWarranty2 filtered by the WarmPhone1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmphone2(string $WarmPhone2) Return the first ChildWarranty2 filtered by the WarmPhone2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmemail(string $WarmEmail) Return the first ChildWarranty2 filtered by the WarmEmail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByDateupdtd(int $DateUpdtd) Return the first ChildWarranty2 filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByTimeupdtd(int $TimeUpdtd) Return the first ChildWarranty2 filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByWarmdelvdate(int $WarmDelvDate) Return the first ChildWarranty2 filtered by the WarmDelvDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarranty2 requireOneByDummy(string $Dummy) Return the first ChildWarranty2 filtered by the Dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWarranty2[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildWarranty2 objects based on current ModelCriteria
 * @method     ChildWarranty2[]|ObjectCollection findByWarmseq(int $WarmSeq) Return ChildWarranty2 objects filtered by the WarmSeq column
 * @method     ChildWarranty2[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildWarranty2 objects filtered by the InitItemNbr column
 * @method     ChildWarranty2[]|ObjectCollection findBySermsernbr(string $SermSerNbr) Return ChildWarranty2 objects filtered by the SermSerNbr column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmsaledate(int $WarmSaleDate) Return ChildWarranty2 objects filtered by the WarmSaleDate column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmownfname(string $WarmOwnFname) Return ChildWarranty2 objects filtered by the WarmOwnFname column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmownmname(string $WarmOwnMname) Return ChildWarranty2 objects filtered by the WarmOwnMname column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmownlname(string $WarmOwnLname) Return ChildWarranty2 objects filtered by the WarmOwnLname column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmownadr1(string $WarmOwnAdr1) Return ChildWarranty2 objects filtered by the WarmOwnAdr1 column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmownadr2(string $WarmOwnAdr2) Return ChildWarranty2 objects filtered by the WarmOwnAdr2 column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmownadr3(string $WarmOwnAdr3) Return ChildWarranty2 objects filtered by the WarmOwnAdr3 column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmowncity(string $WarmOwnCity) Return ChildWarranty2 objects filtered by the WarmOwnCity column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmownstat(string $WarmOwnStat) Return ChildWarranty2 objects filtered by the WarmOwnStat column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmownzip(string $WarmOwnZip) Return ChildWarranty2 objects filtered by the WarmOwnZip column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmsordnbr(int $WarmSordNbr) Return ChildWarranty2 objects filtered by the WarmSordNbr column
 * @method     ChildWarranty2[]|ObjectCollection findByWarminvcdate(int $WarmInvcDate) Return ChildWarranty2 objects filtered by the WarmInvcDate column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmcustid(string $WarmCustId) Return ChildWarranty2 objects filtered by the WarmCustId column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmspid(string $WarmSpId) Return ChildWarranty2 objects filtered by the WarmSpId column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmentrydate(int $WarmEntryDate) Return ChildWarranty2 objects filtered by the WarmEntryDate column
 * @method     ChildWarranty2[]|ObjectCollection findByRegistermotor(string $RegisterMotor) Return ChildWarranty2 objects filtered by the RegisterMotor column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmengsernbr(string $WarmEngSerNbr) Return ChildWarranty2 objects filtered by the WarmEngSerNbr column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmenghorse(string $WarmEngHorse) Return ChildWarranty2 objects filtered by the WarmEngHorse column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmengmodelyear(int $WarmEngModelYear) Return ChildWarranty2 objects filtered by the WarmEngModelYear column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmengdesc(string $WarmEngDesc) Return ChildWarranty2 objects filtered by the WarmEngDesc column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmphone1(string $WarmPhone1) Return ChildWarranty2 objects filtered by the WarmPhone1 column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmphone2(string $WarmPhone2) Return ChildWarranty2 objects filtered by the WarmPhone2 column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmemail(string $WarmEmail) Return ChildWarranty2 objects filtered by the WarmEmail column
 * @method     ChildWarranty2[]|ObjectCollection findByDateupdtd(int $DateUpdtd) Return ChildWarranty2 objects filtered by the DateUpdtd column
 * @method     ChildWarranty2[]|ObjectCollection findByTimeupdtd(int $TimeUpdtd) Return ChildWarranty2 objects filtered by the TimeUpdtd column
 * @method     ChildWarranty2[]|ObjectCollection findByWarmdelvdate(int $WarmDelvDate) Return ChildWarranty2 objects filtered by the WarmDelvDate column
 * @method     ChildWarranty2[]|ObjectCollection findByDummy(string $Dummy) Return ChildWarranty2 objects filtered by the Dummy column
 * @method     ChildWarranty2[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class Warranty2Query extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\Warranty2Query object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Warranty2', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildWarranty2Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildWarranty2Query
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildWarranty2Query) {
            return $criteria;
        }
        $query = new ChildWarranty2Query();
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
     * @return ChildWarranty2|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(Warranty2TableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = Warranty2TableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildWarranty2 A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT WarmSeq, InitItemNbr, SermSerNbr, WarmSaleDate, WarmOwnFname, WarmOwnMname, WarmOwnLname, WarmOwnAdr1, WarmOwnAdr2, WarmOwnAdr3, WarmOwnCity, WarmOwnStat, WarmOwnZip, WarmSordNbr, WarmInvcDate, WarmCustId, WarmSpId, WarmEntryDate, RegisterMotor, WarmEngSerNbr, WarmEngHorse, WarmEngModelYear, WarmEngDesc, WarmPhone1, WarmPhone2, WarmEmail, DateUpdtd, TimeUpdtd, WarmDelvDate, Dummy FROM WARRANTY2 WHERE WarmSeq = :p0';
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
            /** @var ChildWarranty2 $obj */
            $obj = new ChildWarranty2();
            $obj->hydrate($row);
            Warranty2TableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildWarranty2|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMSEQ, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMSEQ, $keys, Criteria::IN);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmseq($warmseq = null, $comparison = null)
    {
        if (is_array($warmseq)) {
            $useMinMax = false;
            if (isset($warmseq['min'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_WARMSEQ, $warmseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warmseq['max'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_WARMSEQ, $warmseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMSEQ, $warmseq, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterBySermsernbr($sermsernbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermsernbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_SERMSERNBR, $sermsernbr, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmsaledate($warmsaledate = null, $comparison = null)
    {
        if (is_array($warmsaledate)) {
            $useMinMax = false;
            if (isset($warmsaledate['min'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_WARMSALEDATE, $warmsaledate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warmsaledate['max'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_WARMSALEDATE, $warmsaledate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMSALEDATE, $warmsaledate, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmownfname($warmownfname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownfname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMOWNFNAME, $warmownfname, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmownmname($warmownmname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownmname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMOWNMNAME, $warmownmname, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmownlname($warmownlname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownlname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMOWNLNAME, $warmownlname, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmownadr1($warmownadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMOWNADR1, $warmownadr1, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmownadr2($warmownadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMOWNADR2, $warmownadr2, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmownadr3($warmownadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMOWNADR3, $warmownadr3, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmowncity($warmowncity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmowncity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMOWNCITY, $warmowncity, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmownstat($warmownstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMOWNSTAT, $warmownstat, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmownzip($warmownzip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownzip)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMOWNZIP, $warmownzip, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmsordnbr($warmsordnbr = null, $comparison = null)
    {
        if (is_array($warmsordnbr)) {
            $useMinMax = false;
            if (isset($warmsordnbr['min'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_WARMSORDNBR, $warmsordnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warmsordnbr['max'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_WARMSORDNBR, $warmsordnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMSORDNBR, $warmsordnbr, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarminvcdate($warminvcdate = null, $comparison = null)
    {
        if (is_array($warminvcdate)) {
            $useMinMax = false;
            if (isset($warminvcdate['min'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_WARMINVCDATE, $warminvcdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warminvcdate['max'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_WARMINVCDATE, $warminvcdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMINVCDATE, $warminvcdate, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmcustid($warmcustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmcustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMCUSTID, $warmcustid, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmspid($warmspid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmspid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMSPID, $warmspid, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmentrydate($warmentrydate = null, $comparison = null)
    {
        if (is_array($warmentrydate)) {
            $useMinMax = false;
            if (isset($warmentrydate['min'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_WARMENTRYDATE, $warmentrydate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warmentrydate['max'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_WARMENTRYDATE, $warmentrydate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMENTRYDATE, $warmentrydate, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByRegistermotor($registermotor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($registermotor)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_REGISTERMOTOR, $registermotor, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmengsernbr($warmengsernbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmengsernbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMENGSERNBR, $warmengsernbr, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmenghorse($warmenghorse = null, $comparison = null)
    {
        if (is_array($warmenghorse)) {
            $useMinMax = false;
            if (isset($warmenghorse['min'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_WARMENGHORSE, $warmenghorse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warmenghorse['max'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_WARMENGHORSE, $warmenghorse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMENGHORSE, $warmenghorse, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmengmodelyear($warmengmodelyear = null, $comparison = null)
    {
        if (is_array($warmengmodelyear)) {
            $useMinMax = false;
            if (isset($warmengmodelyear['min'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_WARMENGMODELYEAR, $warmengmodelyear['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warmengmodelyear['max'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_WARMENGMODELYEAR, $warmengmodelyear['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMENGMODELYEAR, $warmengmodelyear, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmengdesc($warmengdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmengdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMENGDESC, $warmengdesc, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmphone1($warmphone1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmphone1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMPHONE1, $warmphone1, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmphone2($warmphone2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmphone2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMPHONE2, $warmphone2, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmemail($warmemail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmemail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMEMAIL, $warmemail, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (is_array($dateupdtd)) {
            $useMinMax = false;
            if (isset($dateupdtd['min'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_DATEUPDTD, $dateupdtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateupdtd['max'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_DATEUPDTD, $dateupdtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (is_array($timeupdtd)) {
            $useMinMax = false;
            if (isset($timeupdtd['min'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_TIMEUPDTD, $timeupdtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timeupdtd['max'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_TIMEUPDTD, $timeupdtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByWarmdelvdate($warmdelvdate = null, $comparison = null)
    {
        if (is_array($warmdelvdate)) {
            $useMinMax = false;
            if (isset($warmdelvdate['min'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_WARMDELVDATE, $warmdelvdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warmdelvdate['max'])) {
                $this->addUsingAlias(Warranty2TableMap::COL_WARMDELVDATE, $warmdelvdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_WARMDELVDATE, $warmdelvdate, $comparison);
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
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Warranty2TableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildWarranty2 $warranty2 Object to remove from the list of results
     *
     * @return $this|ChildWarranty2Query The current query, for fluid interface
     */
    public function prune($warranty2 = null)
    {
        if ($warranty2) {
            $this->addUsingAlias(Warranty2TableMap::COL_WARMSEQ, $warranty2->getWarmseq(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the WARRANTY2 table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(Warranty2TableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            Warranty2TableMap::clearInstancePool();
            Warranty2TableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(Warranty2TableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(Warranty2TableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            Warranty2TableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            Warranty2TableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // Warranty2Query
