<?php

namespace Map;

use \ArShipTo;
use \ArShipToQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'AR_SHIP_TO' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ArShipToTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ArShipToTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'AR_SHIP_TO';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ArShipTo';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ArShipTo';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 45;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 45;

    /**
     * the column name for the ArcuCustId field
     */
    const COL_ARCUCUSTID = 'AR_SHIP_TO.ArcuCustId';

    /**
     * the column name for the ArstShipId field
     */
    const COL_ARSTSHIPID = 'AR_SHIP_TO.ArstShipId';

    /**
     * the column name for the ArstName field
     */
    const COL_ARSTNAME = 'AR_SHIP_TO.ArstName';

    /**
     * the column name for the ArstAdr1 field
     */
    const COL_ARSTADR1 = 'AR_SHIP_TO.ArstAdr1';

    /**
     * the column name for the ArstAdr2 field
     */
    const COL_ARSTADR2 = 'AR_SHIP_TO.ArstAdr2';

    /**
     * the column name for the ArstAdr3 field
     */
    const COL_ARSTADR3 = 'AR_SHIP_TO.ArstAdr3';

    /**
     * the column name for the ArstAdr4 field
     */
    const COL_ARSTADR4 = 'AR_SHIP_TO.ArstAdr4';

    /**
     * the column name for the ArstCtry field
     */
    const COL_ARSTCTRY = 'AR_SHIP_TO.ArstCtry';

    /**
     * the column name for the ArstAdr5 field
     */
    const COL_ARSTADR5 = 'AR_SHIP_TO.ArstAdr5';

    /**
     * the column name for the ArstCity field
     */
    const COL_ARSTCITY = 'AR_SHIP_TO.ArstCity';

    /**
     * the column name for the ArstStat field
     */
    const COL_ARSTSTAT = 'AR_SHIP_TO.ArstStat';

    /**
     * the column name for the ArstZipCode field
     */
    const COL_ARSTZIPCODE = 'AR_SHIP_TO.ArstZipCode';

    /**
     * the column name for the ArstCont1 field
     */
    const COL_ARSTCONT1 = 'AR_SHIP_TO.ArstCont1';

    /**
     * the column name for the ArstCont2 field
     */
    const COL_ARSTCONT2 = 'AR_SHIP_TO.ArstCont2';

    /**
     * the column name for the Arspsaleper1 field
     */
    const COL_ARSPSALEPER1 = 'AR_SHIP_TO.Arspsaleper1';

    /**
     * the column name for the Arspsaleper2 field
     */
    const COL_ARSPSALEPER2 = 'AR_SHIP_TO.Arspsaleper2';

    /**
     * the column name for the Arspsaleper3 field
     */
    const COL_ARSPSALEPER3 = 'AR_SHIP_TO.Arspsaleper3';

    /**
     * the column name for the ArtbMtaxCode field
     */
    const COL_ARTBMTAXCODE = 'AR_SHIP_TO.ArtbMtaxCode';

    /**
     * the column name for the ArstTaxExemNbr field
     */
    const COL_ARSTTAXEXEMNBR = 'AR_SHIP_TO.ArstTaxExemNbr';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'AR_SHIP_TO.IntbWhse';

    /**
     * the column name for the ArtbShipVia field
     */
    const COL_ARTBSHIPVIA = 'AR_SHIP_TO.ArtbShipVia';

    /**
     * the column name for the ArstBord field
     */
    const COL_ARSTBORD = 'AR_SHIP_TO.ArstBord';

    /**
     * the column name for the ArstCredHold field
     */
    const COL_ARSTCREDHOLD = 'AR_SHIP_TO.ArstCredHold';

    /**
     * the column name for the ArstUserCode field
     */
    const COL_ARSTUSERCODE = 'AR_SHIP_TO.ArstUserCode';

    /**
     * the column name for the ArstPricLvl field
     */
    const COL_ARSTPRICLVL = 'AR_SHIP_TO.ArstPricLvl';

    /**
     * the column name for the ArstShipComp field
     */
    const COL_ARSTSHIPCOMP = 'AR_SHIP_TO.ArstShipComp';

    /**
     * the column name for the ArstTxbl field
     */
    const COL_ARSTTXBL = 'AR_SHIP_TO.ArstTxbl';

    /**
     * the column name for the ArstPostal field
     */
    const COL_ARSTPOSTAL = 'AR_SHIP_TO.ArstPostal';

    /**
     * the column name for the ArstSaleMtd field
     */
    const COL_ARSTSALEMTD = 'AR_SHIP_TO.ArstSaleMtd';

    /**
     * the column name for the ArstInvMtd field
     */
    const COL_ARSTINVMTD = 'AR_SHIP_TO.ArstInvMtd';

    /**
     * the column name for the ArstDateOpen field
     */
    const COL_ARSTDATEOPEN = 'AR_SHIP_TO.ArstDateOpen';

    /**
     * the column name for the ArstLastSaleDate field
     */
    const COL_ARSTLASTSALEDATE = 'AR_SHIP_TO.ArstLastSaleDate';

    /**
     * the column name for the ArstPrimShipId field
     */
    const COL_ARSTPRIMSHIPID = 'AR_SHIP_TO.ArstPrimShipId';

    /**
     * the column name for the ArstMyVendId field
     */
    const COL_ARSTMYVENDID = 'AR_SHIP_TO.ArstMyVendId';

    /**
     * the column name for the ArstAddlPricDisc field
     */
    const COL_ARSTADDLPRICDISC = 'AR_SHIP_TO.ArstAddlPricDisc';

    /**
     * the column name for the ArstEdiInvc field
     */
    const COL_ARSTEDIINVC = 'AR_SHIP_TO.ArstEdiInvc';

    /**
     * the column name for the ArstChrgFrt field
     */
    const COL_ARSTCHRGFRT = 'AR_SHIP_TO.ArstChrgFrt';

    /**
     * the column name for the ArstDistCntr field
     */
    const COL_ARSTDISTCNTR = 'AR_SHIP_TO.ArstDistCntr';

    /**
     * the column name for the ArstDunsNbr field
     */
    const COL_ARSTDUNSNBR = 'AR_SHIP_TO.ArstDunsNbr';

    /**
     * the column name for the ArstRfmlValu field
     */
    const COL_ARSTRFMLVALU = 'AR_SHIP_TO.ArstRfmlValu';

    /**
     * the column name for the ArstForcePo field
     */
    const COL_ARSTFORCEPO = 'AR_SHIP_TO.ArstForcePo';

    /**
     * the column name for the ArtbRoutCode field
     */
    const COL_ARTBROUTCODE = 'AR_SHIP_TO.ArtbRoutCode';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'AR_SHIP_TO.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'AR_SHIP_TO.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'AR_SHIP_TO.dummy';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Arcucustid', 'Arstshipid', 'Arstname', 'Arstadr1', 'Arstadr2', 'Arstadr3', 'Arstadr4', 'Arstctry', 'Arstadr5', 'Arstcity', 'Arststat', 'Arstzipcode', 'Arstcont1', 'Arstcont2', 'Arspsaleper1', 'Arspsaleper2', 'Arspsaleper3', 'Artbmtaxcode', 'Arsttaxexemnbr', 'Intbwhse', 'Artbshipvia', 'Arstbord', 'Arstcredhold', 'Arstusercode', 'Arstpriclvl', 'Arstshipcomp', 'Arsttxbl', 'Arstpostal', 'Arstsalemtd', 'Arstinvmtd', 'Arstdateopen', 'Arstlastsaledate', 'Arstprimshipid', 'Arstmyvendid', 'Arstaddlpricdisc', 'Arstediinvc', 'Arstchrgfrt', 'Arstdistcntr', 'Arstdunsnbr', 'Arstrfmlvalu', 'Arstforcepo', 'Artbroutcode', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('arcucustid', 'arstshipid', 'arstname', 'arstadr1', 'arstadr2', 'arstadr3', 'arstadr4', 'arstctry', 'arstadr5', 'arstcity', 'arststat', 'arstzipcode', 'arstcont1', 'arstcont2', 'arspsaleper1', 'arspsaleper2', 'arspsaleper3', 'artbmtaxcode', 'arsttaxexemnbr', 'intbwhse', 'artbshipvia', 'arstbord', 'arstcredhold', 'arstusercode', 'arstpriclvl', 'arstshipcomp', 'arsttxbl', 'arstpostal', 'arstsalemtd', 'arstinvmtd', 'arstdateopen', 'arstlastsaledate', 'arstprimshipid', 'arstmyvendid', 'arstaddlpricdisc', 'arstediinvc', 'arstchrgfrt', 'arstdistcntr', 'arstdunsnbr', 'arstrfmlvalu', 'arstforcepo', 'artbroutcode', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ArShipToTableMap::COL_ARCUCUSTID, ArShipToTableMap::COL_ARSTSHIPID, ArShipToTableMap::COL_ARSTNAME, ArShipToTableMap::COL_ARSTADR1, ArShipToTableMap::COL_ARSTADR2, ArShipToTableMap::COL_ARSTADR3, ArShipToTableMap::COL_ARSTADR4, ArShipToTableMap::COL_ARSTCTRY, ArShipToTableMap::COL_ARSTADR5, ArShipToTableMap::COL_ARSTCITY, ArShipToTableMap::COL_ARSTSTAT, ArShipToTableMap::COL_ARSTZIPCODE, ArShipToTableMap::COL_ARSTCONT1, ArShipToTableMap::COL_ARSTCONT2, ArShipToTableMap::COL_ARSPSALEPER1, ArShipToTableMap::COL_ARSPSALEPER2, ArShipToTableMap::COL_ARSPSALEPER3, ArShipToTableMap::COL_ARTBMTAXCODE, ArShipToTableMap::COL_ARSTTAXEXEMNBR, ArShipToTableMap::COL_INTBWHSE, ArShipToTableMap::COL_ARTBSHIPVIA, ArShipToTableMap::COL_ARSTBORD, ArShipToTableMap::COL_ARSTCREDHOLD, ArShipToTableMap::COL_ARSTUSERCODE, ArShipToTableMap::COL_ARSTPRICLVL, ArShipToTableMap::COL_ARSTSHIPCOMP, ArShipToTableMap::COL_ARSTTXBL, ArShipToTableMap::COL_ARSTPOSTAL, ArShipToTableMap::COL_ARSTSALEMTD, ArShipToTableMap::COL_ARSTINVMTD, ArShipToTableMap::COL_ARSTDATEOPEN, ArShipToTableMap::COL_ARSTLASTSALEDATE, ArShipToTableMap::COL_ARSTPRIMSHIPID, ArShipToTableMap::COL_ARSTMYVENDID, ArShipToTableMap::COL_ARSTADDLPRICDISC, ArShipToTableMap::COL_ARSTEDIINVC, ArShipToTableMap::COL_ARSTCHRGFRT, ArShipToTableMap::COL_ARSTDISTCNTR, ArShipToTableMap::COL_ARSTDUNSNBR, ArShipToTableMap::COL_ARSTRFMLVALU, ArShipToTableMap::COL_ARSTFORCEPO, ArShipToTableMap::COL_ARTBROUTCODE, ArShipToTableMap::COL_DATEUPDTD, ArShipToTableMap::COL_TIMEUPDTD, ArShipToTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId', 'ArstShipId', 'ArstName', 'ArstAdr1', 'ArstAdr2', 'ArstAdr3', 'ArstAdr4', 'ArstCtry', 'ArstAdr5', 'ArstCity', 'ArstStat', 'ArstZipCode', 'ArstCont1', 'ArstCont2', 'Arspsaleper1', 'Arspsaleper2', 'Arspsaleper3', 'ArtbMtaxCode', 'ArstTaxExemNbr', 'IntbWhse', 'ArtbShipVia', 'ArstBord', 'ArstCredHold', 'ArstUserCode', 'ArstPricLvl', 'ArstShipComp', 'ArstTxbl', 'ArstPostal', 'ArstSaleMtd', 'ArstInvMtd', 'ArstDateOpen', 'ArstLastSaleDate', 'ArstPrimShipId', 'ArstMyVendId', 'ArstAddlPricDisc', 'ArstEdiInvc', 'ArstChrgFrt', 'ArstDistCntr', 'ArstDunsNbr', 'ArstRfmlValu', 'ArstForcePo', 'ArtbRoutCode', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Arcucustid' => 0, 'Arstshipid' => 1, 'Arstname' => 2, 'Arstadr1' => 3, 'Arstadr2' => 4, 'Arstadr3' => 5, 'Arstadr4' => 6, 'Arstctry' => 7, 'Arstadr5' => 8, 'Arstcity' => 9, 'Arststat' => 10, 'Arstzipcode' => 11, 'Arstcont1' => 12, 'Arstcont2' => 13, 'Arspsaleper1' => 14, 'Arspsaleper2' => 15, 'Arspsaleper3' => 16, 'Artbmtaxcode' => 17, 'Arsttaxexemnbr' => 18, 'Intbwhse' => 19, 'Artbshipvia' => 20, 'Arstbord' => 21, 'Arstcredhold' => 22, 'Arstusercode' => 23, 'Arstpriclvl' => 24, 'Arstshipcomp' => 25, 'Arsttxbl' => 26, 'Arstpostal' => 27, 'Arstsalemtd' => 28, 'Arstinvmtd' => 29, 'Arstdateopen' => 30, 'Arstlastsaledate' => 31, 'Arstprimshipid' => 32, 'Arstmyvendid' => 33, 'Arstaddlpricdisc' => 34, 'Arstediinvc' => 35, 'Arstchrgfrt' => 36, 'Arstdistcntr' => 37, 'Arstdunsnbr' => 38, 'Arstrfmlvalu' => 39, 'Arstforcepo' => 40, 'Artbroutcode' => 41, 'Dateupdtd' => 42, 'Timeupdtd' => 43, 'Dummy' => 44, ),
        self::TYPE_CAMELNAME     => array('arcucustid' => 0, 'arstshipid' => 1, 'arstname' => 2, 'arstadr1' => 3, 'arstadr2' => 4, 'arstadr3' => 5, 'arstadr4' => 6, 'arstctry' => 7, 'arstadr5' => 8, 'arstcity' => 9, 'arststat' => 10, 'arstzipcode' => 11, 'arstcont1' => 12, 'arstcont2' => 13, 'arspsaleper1' => 14, 'arspsaleper2' => 15, 'arspsaleper3' => 16, 'artbmtaxcode' => 17, 'arsttaxexemnbr' => 18, 'intbwhse' => 19, 'artbshipvia' => 20, 'arstbord' => 21, 'arstcredhold' => 22, 'arstusercode' => 23, 'arstpriclvl' => 24, 'arstshipcomp' => 25, 'arsttxbl' => 26, 'arstpostal' => 27, 'arstsalemtd' => 28, 'arstinvmtd' => 29, 'arstdateopen' => 30, 'arstlastsaledate' => 31, 'arstprimshipid' => 32, 'arstmyvendid' => 33, 'arstaddlpricdisc' => 34, 'arstediinvc' => 35, 'arstchrgfrt' => 36, 'arstdistcntr' => 37, 'arstdunsnbr' => 38, 'arstrfmlvalu' => 39, 'arstforcepo' => 40, 'artbroutcode' => 41, 'dateupdtd' => 42, 'timeupdtd' => 43, 'dummy' => 44, ),
        self::TYPE_COLNAME       => array(ArShipToTableMap::COL_ARCUCUSTID => 0, ArShipToTableMap::COL_ARSTSHIPID => 1, ArShipToTableMap::COL_ARSTNAME => 2, ArShipToTableMap::COL_ARSTADR1 => 3, ArShipToTableMap::COL_ARSTADR2 => 4, ArShipToTableMap::COL_ARSTADR3 => 5, ArShipToTableMap::COL_ARSTADR4 => 6, ArShipToTableMap::COL_ARSTCTRY => 7, ArShipToTableMap::COL_ARSTADR5 => 8, ArShipToTableMap::COL_ARSTCITY => 9, ArShipToTableMap::COL_ARSTSTAT => 10, ArShipToTableMap::COL_ARSTZIPCODE => 11, ArShipToTableMap::COL_ARSTCONT1 => 12, ArShipToTableMap::COL_ARSTCONT2 => 13, ArShipToTableMap::COL_ARSPSALEPER1 => 14, ArShipToTableMap::COL_ARSPSALEPER2 => 15, ArShipToTableMap::COL_ARSPSALEPER3 => 16, ArShipToTableMap::COL_ARTBMTAXCODE => 17, ArShipToTableMap::COL_ARSTTAXEXEMNBR => 18, ArShipToTableMap::COL_INTBWHSE => 19, ArShipToTableMap::COL_ARTBSHIPVIA => 20, ArShipToTableMap::COL_ARSTBORD => 21, ArShipToTableMap::COL_ARSTCREDHOLD => 22, ArShipToTableMap::COL_ARSTUSERCODE => 23, ArShipToTableMap::COL_ARSTPRICLVL => 24, ArShipToTableMap::COL_ARSTSHIPCOMP => 25, ArShipToTableMap::COL_ARSTTXBL => 26, ArShipToTableMap::COL_ARSTPOSTAL => 27, ArShipToTableMap::COL_ARSTSALEMTD => 28, ArShipToTableMap::COL_ARSTINVMTD => 29, ArShipToTableMap::COL_ARSTDATEOPEN => 30, ArShipToTableMap::COL_ARSTLASTSALEDATE => 31, ArShipToTableMap::COL_ARSTPRIMSHIPID => 32, ArShipToTableMap::COL_ARSTMYVENDID => 33, ArShipToTableMap::COL_ARSTADDLPRICDISC => 34, ArShipToTableMap::COL_ARSTEDIINVC => 35, ArShipToTableMap::COL_ARSTCHRGFRT => 36, ArShipToTableMap::COL_ARSTDISTCNTR => 37, ArShipToTableMap::COL_ARSTDUNSNBR => 38, ArShipToTableMap::COL_ARSTRFMLVALU => 39, ArShipToTableMap::COL_ARSTFORCEPO => 40, ArShipToTableMap::COL_ARTBROUTCODE => 41, ArShipToTableMap::COL_DATEUPDTD => 42, ArShipToTableMap::COL_TIMEUPDTD => 43, ArShipToTableMap::COL_DUMMY => 44, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId' => 0, 'ArstShipId' => 1, 'ArstName' => 2, 'ArstAdr1' => 3, 'ArstAdr2' => 4, 'ArstAdr3' => 5, 'ArstAdr4' => 6, 'ArstCtry' => 7, 'ArstAdr5' => 8, 'ArstCity' => 9, 'ArstStat' => 10, 'ArstZipCode' => 11, 'ArstCont1' => 12, 'ArstCont2' => 13, 'Arspsaleper1' => 14, 'Arspsaleper2' => 15, 'Arspsaleper3' => 16, 'ArtbMtaxCode' => 17, 'ArstTaxExemNbr' => 18, 'IntbWhse' => 19, 'ArtbShipVia' => 20, 'ArstBord' => 21, 'ArstCredHold' => 22, 'ArstUserCode' => 23, 'ArstPricLvl' => 24, 'ArstShipComp' => 25, 'ArstTxbl' => 26, 'ArstPostal' => 27, 'ArstSaleMtd' => 28, 'ArstInvMtd' => 29, 'ArstDateOpen' => 30, 'ArstLastSaleDate' => 31, 'ArstPrimShipId' => 32, 'ArstMyVendId' => 33, 'ArstAddlPricDisc' => 34, 'ArstEdiInvc' => 35, 'ArstChrgFrt' => 36, 'ArstDistCntr' => 37, 'ArstDunsNbr' => 38, 'ArstRfmlValu' => 39, 'ArstForcePo' => 40, 'ArtbRoutCode' => 41, 'DateUpdtd' => 42, 'TimeUpdtd' => 43, 'dummy' => 44, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('AR_SHIP_TO');
        $this->setPhpName('ArShipTo');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ArShipTo');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR', true, 6, '');
        $this->addPrimaryKey('ArstShipId', 'Arstshipid', 'VARCHAR', true, 6, '');
        $this->addColumn('ArstName', 'Arstname', 'VARCHAR', false, 30, null);
        $this->addColumn('ArstAdr1', 'Arstadr1', 'VARCHAR', false, 30, null);
        $this->addColumn('ArstAdr2', 'Arstadr2', 'VARCHAR', false, 30, null);
        $this->addColumn('ArstAdr3', 'Arstadr3', 'VARCHAR', false, 30, null);
        $this->addColumn('ArstAdr4', 'Arstadr4', 'VARCHAR', false, 30, null);
        $this->addColumn('ArstCtry', 'Arstctry', 'VARCHAR', false, 4, null);
        $this->addColumn('ArstAdr5', 'Arstadr5', 'VARCHAR', false, 30, null);
        $this->addColumn('ArstCity', 'Arstcity', 'VARCHAR', false, 16, null);
        $this->addColumn('ArstStat', 'Arststat', 'VARCHAR', false, 2, null);
        $this->addColumn('ArstZipCode', 'Arstzipcode', 'VARCHAR', false, 10, null);
        $this->addColumn('ArstCont1', 'Arstcont1', 'VARCHAR', false, 20, null);
        $this->addColumn('ArstCont2', 'Arstcont2', 'VARCHAR', false, 20, null);
        $this->addColumn('Arspsaleper1', 'Arspsaleper1', 'VARCHAR', false, 6, null);
        $this->addColumn('Arspsaleper2', 'Arspsaleper2', 'VARCHAR', false, 6, null);
        $this->addColumn('Arspsaleper3', 'Arspsaleper3', 'VARCHAR', false, 6, null);
        $this->addColumn('ArtbMtaxCode', 'Artbmtaxcode', 'VARCHAR', false, 6, null);
        $this->addColumn('ArstTaxExemNbr', 'Arsttaxexemnbr', 'VARCHAR', false, 20, null);
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', false, 6, null);
        $this->addColumn('ArtbShipVia', 'Artbshipvia', 'VARCHAR', false, 4, null);
        $this->addColumn('ArstBord', 'Arstbord', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstCredHold', 'Arstcredhold', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstUserCode', 'Arstusercode', 'VARCHAR', false, 4, null);
        $this->addColumn('ArstPricLvl', 'Arstpriclvl', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstShipComp', 'Arstshipcomp', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstTxbl', 'Arsttxbl', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstPostal', 'Arstpostal', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstSaleMtd', 'Arstsalemtd', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstInvMtd', 'Arstinvmtd', 'INTEGER', false, 3, null);
        $this->addColumn('ArstDateOpen', 'Arstdateopen', 'INTEGER', false, 8, null);
        $this->addColumn('ArstLastSaleDate', 'Arstlastsaledate', 'INTEGER', false, 8, null);
        $this->addColumn('ArstPrimShipId', 'Arstprimshipid', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstMyVendId', 'Arstmyvendid', 'VARCHAR', false, 12, null);
        $this->addColumn('ArstAddlPricDisc', 'Arstaddlpricdisc', 'DECIMAL', false, 20, null);
        $this->addColumn('ArstEdiInvc', 'Arstediinvc', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstChrgFrt', 'Arstchrgfrt', 'VARCHAR', false, 1, null);
        $this->addColumn('ArstDistCntr', 'Arstdistcntr', 'VARCHAR', false, 6, null);
        $this->addColumn('ArstDunsNbr', 'Arstdunsnbr', 'VARCHAR', false, 20, null);
        $this->addColumn('ArstRfmlValu', 'Arstrfmlvalu', 'INTEGER', false, 3, null);
        $this->addColumn('ArstForcePo', 'Arstforcepo', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbRoutCode', 'Artbroutcode', 'VARCHAR', false, 4, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'INTEGER', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'INTEGER', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \ArShipTo $obj A \ArShipTo object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getArcucustid() || is_scalar($obj->getArcucustid()) || is_callable([$obj->getArcucustid(), '__toString']) ? (string) $obj->getArcucustid() : $obj->getArcucustid()), (null === $obj->getArstshipid() || is_scalar($obj->getArstshipid()) || is_callable([$obj->getArstshipid(), '__toString']) ? (string) $obj->getArstshipid() : $obj->getArstshipid())]);
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param mixed $value A \ArShipTo object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \ArShipTo) {
                $key = serialize([(null === $value->getArcucustid() || is_scalar($value->getArcucustid()) || is_callable([$value->getArcucustid(), '__toString']) ? (string) $value->getArcucustid() : $value->getArcucustid()), (null === $value->getArstshipid() || is_scalar($value->getArstshipid()) || is_callable([$value->getArstshipid(), '__toString']) ? (string) $value->getArstshipid() : $value->getArstshipid())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \ArShipTo object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)])]);
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
            $pks = [];

        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)
        ];

        return $pks;
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? ArShipToTableMap::CLASS_DEFAULT : ArShipToTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (ArShipTo object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ArShipToTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ArShipToTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ArShipToTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ArShipToTableMap::OM_CLASS;
            /** @var ArShipTo $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ArShipToTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = ArShipToTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ArShipToTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ArShipTo $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ArShipToTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTSHIPID);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTNAME);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTADR1);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTADR2);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTADR3);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTADR4);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTCTRY);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTADR5);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTCITY);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTSTAT);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTZIPCODE);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTCONT1);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTCONT2);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSPSALEPER1);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSPSALEPER2);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSPSALEPER3);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARTBMTAXCODE);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTTAXEXEMNBR);
            $criteria->addSelectColumn(ArShipToTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARTBSHIPVIA);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTBORD);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTCREDHOLD);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTUSERCODE);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTPRICLVL);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTSHIPCOMP);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTTXBL);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTPOSTAL);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTSALEMTD);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTINVMTD);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTDATEOPEN);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTLASTSALEDATE);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTPRIMSHIPID);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTMYVENDID);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTADDLPRICDISC);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTEDIINVC);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTCHRGFRT);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTDISTCNTR);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTDUNSNBR);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTRFMLVALU);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARSTFORCEPO);
            $criteria->addSelectColumn(ArShipToTableMap::COL_ARTBROUTCODE);
            $criteria->addSelectColumn(ArShipToTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ArShipToTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ArShipToTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArstShipId');
            $criteria->addSelectColumn($alias . '.ArstName');
            $criteria->addSelectColumn($alias . '.ArstAdr1');
            $criteria->addSelectColumn($alias . '.ArstAdr2');
            $criteria->addSelectColumn($alias . '.ArstAdr3');
            $criteria->addSelectColumn($alias . '.ArstAdr4');
            $criteria->addSelectColumn($alias . '.ArstCtry');
            $criteria->addSelectColumn($alias . '.ArstAdr5');
            $criteria->addSelectColumn($alias . '.ArstCity');
            $criteria->addSelectColumn($alias . '.ArstStat');
            $criteria->addSelectColumn($alias . '.ArstZipCode');
            $criteria->addSelectColumn($alias . '.ArstCont1');
            $criteria->addSelectColumn($alias . '.ArstCont2');
            $criteria->addSelectColumn($alias . '.Arspsaleper1');
            $criteria->addSelectColumn($alias . '.Arspsaleper2');
            $criteria->addSelectColumn($alias . '.Arspsaleper3');
            $criteria->addSelectColumn($alias . '.ArtbMtaxCode');
            $criteria->addSelectColumn($alias . '.ArstTaxExemNbr');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.ArtbShipVia');
            $criteria->addSelectColumn($alias . '.ArstBord');
            $criteria->addSelectColumn($alias . '.ArstCredHold');
            $criteria->addSelectColumn($alias . '.ArstUserCode');
            $criteria->addSelectColumn($alias . '.ArstPricLvl');
            $criteria->addSelectColumn($alias . '.ArstShipComp');
            $criteria->addSelectColumn($alias . '.ArstTxbl');
            $criteria->addSelectColumn($alias . '.ArstPostal');
            $criteria->addSelectColumn($alias . '.ArstSaleMtd');
            $criteria->addSelectColumn($alias . '.ArstInvMtd');
            $criteria->addSelectColumn($alias . '.ArstDateOpen');
            $criteria->addSelectColumn($alias . '.ArstLastSaleDate');
            $criteria->addSelectColumn($alias . '.ArstPrimShipId');
            $criteria->addSelectColumn($alias . '.ArstMyVendId');
            $criteria->addSelectColumn($alias . '.ArstAddlPricDisc');
            $criteria->addSelectColumn($alias . '.ArstEdiInvc');
            $criteria->addSelectColumn($alias . '.ArstChrgFrt');
            $criteria->addSelectColumn($alias . '.ArstDistCntr');
            $criteria->addSelectColumn($alias . '.ArstDunsNbr');
            $criteria->addSelectColumn($alias . '.ArstRfmlValu');
            $criteria->addSelectColumn($alias . '.ArstForcePo');
            $criteria->addSelectColumn($alias . '.ArtbRoutCode');
            $criteria->addSelectColumn($alias . '.DateUpdtd');
            $criteria->addSelectColumn($alias . '.TimeUpdtd');
            $criteria->addSelectColumn($alias . '.dummy');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(ArShipToTableMap::DATABASE_NAME)->getTable(ArShipToTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ArShipToTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ArShipToTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ArShipToTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ArShipTo or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ArShipTo object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArShipToTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ArShipTo) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ArShipToTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ArShipToTableMap::COL_ARCUCUSTID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ArShipToTableMap::COL_ARSTSHIPID, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = ArShipToQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ArShipToTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ArShipToTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the AR_SHIP_TO table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ArShipToQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ArShipTo or Criteria object.
     *
     * @param mixed               $criteria Criteria or ArShipTo object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArShipToTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ArShipTo object
        }


        // Set the correct dbName
        $query = ArShipToQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ArShipToTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ArShipToTableMap::buildTableMap();
