<?php

namespace Map;

use \InvInvLot;
use \InvInvLotQuery;
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
 * This class defines the structure of the 'INV_INV_LOT' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class InvInvLotTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.InvInvLotTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'INV_INV_LOT';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\InvInvLot';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'InvInvLot';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 35;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 35;

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'INV_INV_LOT.InitItemNbr';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'INV_INV_LOT.IntbWhse';

    /**
     * the column name for the InltLotSer field
     */
    const COL_INLTLOTSER = 'INV_INV_LOT.InltLotSer';

    /**
     * the column name for the InltBin field
     */
    const COL_INLTBIN = 'INV_INV_LOT.InltBin';

    /**
     * the column name for the InltDate field
     */
    const COL_INLTDATE = 'INV_INV_LOT.InltDate';

    /**
     * the column name for the InltDateWrit field
     */
    const COL_INLTDATEWRIT = 'INV_INV_LOT.InltDateWrit';

    /**
     * the column name for the InltCost field
     */
    const COL_INLTCOST = 'INV_INV_LOT.InltCost';

    /**
     * the column name for the InltOnHand field
     */
    const COL_INLTONHAND = 'INV_INV_LOT.InltOnHand';

    /**
     * the column name for the InltResv field
     */
    const COL_INLTRESV = 'INV_INV_LOT.InltResv';

    /**
     * the column name for the InltShip field
     */
    const COL_INLTSHIP = 'INV_INV_LOT.InltShip';

    /**
     * the column name for the InltAllo field
     */
    const COL_INLTALLO = 'INV_INV_LOT.InltAllo';

    /**
     * the column name for the InltFabAllo field
     */
    const COL_INLTFABALLO = 'INV_INV_LOT.InltFabAllo';

    /**
     * the column name for the InltInTran field
     */
    const COL_INLTINTRAN = 'INV_INV_LOT.InltInTran';

    /**
     * the column name for the InltInShip field
     */
    const COL_INLTINSHIP = 'INV_INV_LOT.InltInShip';

    /**
     * the column name for the InltLotRef field
     */
    const COL_INLTLOTREF = 'INV_INV_LOT.InltLotRef';

    /**
     * the column name for the InltLandCost1 field
     */
    const COL_INLTLANDCOST1 = 'INV_INV_LOT.InltLandCost1';

    /**
     * the column name for the InltLandCost2 field
     */
    const COL_INLTLANDCOST2 = 'INV_INV_LOT.InltLandCost2';

    /**
     * the column name for the InltLandCost3 field
     */
    const COL_INLTLANDCOST3 = 'INV_INV_LOT.InltLandCost3';

    /**
     * the column name for the InltLandCost4 field
     */
    const COL_INLTLANDCOST4 = 'INV_INV_LOT.InltLandCost4';

    /**
     * the column name for the InltLandCost5 field
     */
    const COL_INLTLANDCOST5 = 'INV_INV_LOT.InltLandCost5';

    /**
     * the column name for the InltLandCost6 field
     */
    const COL_INLTLANDCOST6 = 'INV_INV_LOT.InltLandCost6';

    /**
     * the column name for the InltCtry field
     */
    const COL_INLTCTRY = 'INV_INV_LOT.InltCtry';

    /**
     * the column name for the InltRvalOrigCost field
     */
    const COL_INLTRVALORIGCOST = 'INV_INV_LOT.InltRvalOrigCost';

    /**
     * the column name for the InltRvalPct field
     */
    const COL_INLTRVALPCT = 'INV_INV_LOT.InltRvalPct';

    /**
     * the column name for the InltUnitWght field
     */
    const COL_INLTUNITWGHT = 'INV_INV_LOT.InltUnitWght';

    /**
     * the column name for the InltDestWhse field
     */
    const COL_INLTDESTWHSE = 'INV_INV_LOT.InltDestWhse';

    /**
     * the column name for the InltCntrQty field
     */
    const COL_INLTCNTRQTY = 'INV_INV_LOT.InltCntrQty';

    /**
     * the column name for the InltTareWght field
     */
    const COL_INLTTAREWGHT = 'INV_INV_LOT.InltTareWght';

    /**
     * the column name for the InltFrozen field
     */
    const COL_INLTFROZEN = 'INV_INV_LOT.InltFrozen';

    /**
     * the column name for the InltCert field
     */
    const COL_INLTCERT = 'INV_INV_LOT.InltCert';

    /**
     * the column name for the InltCureDate field
     */
    const COL_INLTCUREDATE = 'INV_INV_LOT.InltCureDate';

    /**
     * the column name for the InltOrigBin field
     */
    const COL_INLTORIGBIN = 'INV_INV_LOT.InltOrigBin';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'INV_INV_LOT.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'INV_INV_LOT.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'INV_INV_LOT.dummy';

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
        self::TYPE_PHPNAME       => array('Inititemnbr', 'Intbwhse', 'Inltlotser', 'Inltbin', 'Inltdate', 'Inltdatewrit', 'Inltcost', 'Inltonhand', 'Inltresv', 'Inltship', 'Inltallo', 'Inltfaballo', 'Inltintran', 'Inltinship', 'Inltlotref', 'Inltlandcost1', 'Inltlandcost2', 'Inltlandcost3', 'Inltlandcost4', 'Inltlandcost5', 'Inltlandcost6', 'Inltctry', 'Inltrvalorigcost', 'Inltrvalpct', 'Inltunitwght', 'Inltdestwhse', 'Inltcntrqty', 'Inlttarewght', 'Inltfrozen', 'Inltcert', 'Inltcuredate', 'Inltorigbin', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('inititemnbr', 'intbwhse', 'inltlotser', 'inltbin', 'inltdate', 'inltdatewrit', 'inltcost', 'inltonhand', 'inltresv', 'inltship', 'inltallo', 'inltfaballo', 'inltintran', 'inltinship', 'inltlotref', 'inltlandcost1', 'inltlandcost2', 'inltlandcost3', 'inltlandcost4', 'inltlandcost5', 'inltlandcost6', 'inltctry', 'inltrvalorigcost', 'inltrvalpct', 'inltunitwght', 'inltdestwhse', 'inltcntrqty', 'inlttarewght', 'inltfrozen', 'inltcert', 'inltcuredate', 'inltorigbin', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(InvInvLotTableMap::COL_INITITEMNBR, InvInvLotTableMap::COL_INTBWHSE, InvInvLotTableMap::COL_INLTLOTSER, InvInvLotTableMap::COL_INLTBIN, InvInvLotTableMap::COL_INLTDATE, InvInvLotTableMap::COL_INLTDATEWRIT, InvInvLotTableMap::COL_INLTCOST, InvInvLotTableMap::COL_INLTONHAND, InvInvLotTableMap::COL_INLTRESV, InvInvLotTableMap::COL_INLTSHIP, InvInvLotTableMap::COL_INLTALLO, InvInvLotTableMap::COL_INLTFABALLO, InvInvLotTableMap::COL_INLTINTRAN, InvInvLotTableMap::COL_INLTINSHIP, InvInvLotTableMap::COL_INLTLOTREF, InvInvLotTableMap::COL_INLTLANDCOST1, InvInvLotTableMap::COL_INLTLANDCOST2, InvInvLotTableMap::COL_INLTLANDCOST3, InvInvLotTableMap::COL_INLTLANDCOST4, InvInvLotTableMap::COL_INLTLANDCOST5, InvInvLotTableMap::COL_INLTLANDCOST6, InvInvLotTableMap::COL_INLTCTRY, InvInvLotTableMap::COL_INLTRVALORIGCOST, InvInvLotTableMap::COL_INLTRVALPCT, InvInvLotTableMap::COL_INLTUNITWGHT, InvInvLotTableMap::COL_INLTDESTWHSE, InvInvLotTableMap::COL_INLTCNTRQTY, InvInvLotTableMap::COL_INLTTAREWGHT, InvInvLotTableMap::COL_INLTFROZEN, InvInvLotTableMap::COL_INLTCERT, InvInvLotTableMap::COL_INLTCUREDATE, InvInvLotTableMap::COL_INLTORIGBIN, InvInvLotTableMap::COL_DATEUPDTD, InvInvLotTableMap::COL_TIMEUPDTD, InvInvLotTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr', 'IntbWhse', 'InltLotSer', 'InltBin', 'InltDate', 'InltDateWrit', 'InltCost', 'InltOnHand', 'InltResv', 'InltShip', 'InltAllo', 'InltFabAllo', 'InltInTran', 'InltInShip', 'InltLotRef', 'InltLandCost1', 'InltLandCost2', 'InltLandCost3', 'InltLandCost4', 'InltLandCost5', 'InltLandCost6', 'InltCtry', 'InltRvalOrigCost', 'InltRvalPct', 'InltUnitWght', 'InltDestWhse', 'InltCntrQty', 'InltTareWght', 'InltFrozen', 'InltCert', 'InltCureDate', 'InltOrigBin', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Inititemnbr' => 0, 'Intbwhse' => 1, 'Inltlotser' => 2, 'Inltbin' => 3, 'Inltdate' => 4, 'Inltdatewrit' => 5, 'Inltcost' => 6, 'Inltonhand' => 7, 'Inltresv' => 8, 'Inltship' => 9, 'Inltallo' => 10, 'Inltfaballo' => 11, 'Inltintran' => 12, 'Inltinship' => 13, 'Inltlotref' => 14, 'Inltlandcost1' => 15, 'Inltlandcost2' => 16, 'Inltlandcost3' => 17, 'Inltlandcost4' => 18, 'Inltlandcost5' => 19, 'Inltlandcost6' => 20, 'Inltctry' => 21, 'Inltrvalorigcost' => 22, 'Inltrvalpct' => 23, 'Inltunitwght' => 24, 'Inltdestwhse' => 25, 'Inltcntrqty' => 26, 'Inlttarewght' => 27, 'Inltfrozen' => 28, 'Inltcert' => 29, 'Inltcuredate' => 30, 'Inltorigbin' => 31, 'Dateupdtd' => 32, 'Timeupdtd' => 33, 'Dummy' => 34, ),
        self::TYPE_CAMELNAME     => array('inititemnbr' => 0, 'intbwhse' => 1, 'inltlotser' => 2, 'inltbin' => 3, 'inltdate' => 4, 'inltdatewrit' => 5, 'inltcost' => 6, 'inltonhand' => 7, 'inltresv' => 8, 'inltship' => 9, 'inltallo' => 10, 'inltfaballo' => 11, 'inltintran' => 12, 'inltinship' => 13, 'inltlotref' => 14, 'inltlandcost1' => 15, 'inltlandcost2' => 16, 'inltlandcost3' => 17, 'inltlandcost4' => 18, 'inltlandcost5' => 19, 'inltlandcost6' => 20, 'inltctry' => 21, 'inltrvalorigcost' => 22, 'inltrvalpct' => 23, 'inltunitwght' => 24, 'inltdestwhse' => 25, 'inltcntrqty' => 26, 'inlttarewght' => 27, 'inltfrozen' => 28, 'inltcert' => 29, 'inltcuredate' => 30, 'inltorigbin' => 31, 'dateupdtd' => 32, 'timeupdtd' => 33, 'dummy' => 34, ),
        self::TYPE_COLNAME       => array(InvInvLotTableMap::COL_INITITEMNBR => 0, InvInvLotTableMap::COL_INTBWHSE => 1, InvInvLotTableMap::COL_INLTLOTSER => 2, InvInvLotTableMap::COL_INLTBIN => 3, InvInvLotTableMap::COL_INLTDATE => 4, InvInvLotTableMap::COL_INLTDATEWRIT => 5, InvInvLotTableMap::COL_INLTCOST => 6, InvInvLotTableMap::COL_INLTONHAND => 7, InvInvLotTableMap::COL_INLTRESV => 8, InvInvLotTableMap::COL_INLTSHIP => 9, InvInvLotTableMap::COL_INLTALLO => 10, InvInvLotTableMap::COL_INLTFABALLO => 11, InvInvLotTableMap::COL_INLTINTRAN => 12, InvInvLotTableMap::COL_INLTINSHIP => 13, InvInvLotTableMap::COL_INLTLOTREF => 14, InvInvLotTableMap::COL_INLTLANDCOST1 => 15, InvInvLotTableMap::COL_INLTLANDCOST2 => 16, InvInvLotTableMap::COL_INLTLANDCOST3 => 17, InvInvLotTableMap::COL_INLTLANDCOST4 => 18, InvInvLotTableMap::COL_INLTLANDCOST5 => 19, InvInvLotTableMap::COL_INLTLANDCOST6 => 20, InvInvLotTableMap::COL_INLTCTRY => 21, InvInvLotTableMap::COL_INLTRVALORIGCOST => 22, InvInvLotTableMap::COL_INLTRVALPCT => 23, InvInvLotTableMap::COL_INLTUNITWGHT => 24, InvInvLotTableMap::COL_INLTDESTWHSE => 25, InvInvLotTableMap::COL_INLTCNTRQTY => 26, InvInvLotTableMap::COL_INLTTAREWGHT => 27, InvInvLotTableMap::COL_INLTFROZEN => 28, InvInvLotTableMap::COL_INLTCERT => 29, InvInvLotTableMap::COL_INLTCUREDATE => 30, InvInvLotTableMap::COL_INLTORIGBIN => 31, InvInvLotTableMap::COL_DATEUPDTD => 32, InvInvLotTableMap::COL_TIMEUPDTD => 33, InvInvLotTableMap::COL_DUMMY => 34, ),
        self::TYPE_FIELDNAME     => array('InitItemNbr' => 0, 'IntbWhse' => 1, 'InltLotSer' => 2, 'InltBin' => 3, 'InltDate' => 4, 'InltDateWrit' => 5, 'InltCost' => 6, 'InltOnHand' => 7, 'InltResv' => 8, 'InltShip' => 9, 'InltAllo' => 10, 'InltFabAllo' => 11, 'InltInTran' => 12, 'InltInShip' => 13, 'InltLotRef' => 14, 'InltLandCost1' => 15, 'InltLandCost2' => 16, 'InltLandCost3' => 17, 'InltLandCost4' => 18, 'InltLandCost5' => 19, 'InltLandCost6' => 20, 'InltCtry' => 21, 'InltRvalOrigCost' => 22, 'InltRvalPct' => 23, 'InltUnitWght' => 24, 'InltDestWhse' => 25, 'InltCntrQty' => 26, 'InltTareWght' => 27, 'InltFrozen' => 28, 'InltCert' => 29, 'InltCureDate' => 30, 'InltOrigBin' => 31, 'DateUpdtd' => 32, 'TimeUpdtd' => 33, 'dummy' => 34, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
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
        $this->setName('INV_INV_LOT');
        $this->setPhpName('InvInvLot');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InvInvLot');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', true, 30, '');
        $this->addPrimaryKey('IntbWhse', 'Intbwhse', 'VARCHAR', true, 2, '');
        $this->addPrimaryKey('InltLotSer', 'Inltlotser', 'VARCHAR', true, 20, '');
        $this->addPrimaryKey('InltBin', 'Inltbin', 'VARCHAR', true, 8, '');
        $this->addColumn('InltDate', 'Inltdate', 'INTEGER', false, 8, null);
        $this->addColumn('InltDateWrit', 'Inltdatewrit', 'INTEGER', false, 8, null);
        $this->addColumn('InltCost', 'Inltcost', 'DECIMAL', false, 20, null);
        $this->addColumn('InltOnHand', 'Inltonhand', 'DECIMAL', false, 20, null);
        $this->addColumn('InltResv', 'Inltresv', 'DECIMAL', false, 20, null);
        $this->addColumn('InltShip', 'Inltship', 'DECIMAL', false, 20, null);
        $this->addColumn('InltAllo', 'Inltallo', 'DECIMAL', false, 20, null);
        $this->addColumn('InltFabAllo', 'Inltfaballo', 'DECIMAL', false, 20, null);
        $this->addColumn('InltInTran', 'Inltintran', 'DECIMAL', false, 20, null);
        $this->addColumn('InltInShip', 'Inltinship', 'DECIMAL', false, 20, null);
        $this->addColumn('InltLotRef', 'Inltlotref', 'VARCHAR', false, 20, null);
        $this->addColumn('InltLandCost1', 'Inltlandcost1', 'DECIMAL', false, 20, null);
        $this->addColumn('InltLandCost2', 'Inltlandcost2', 'DECIMAL', false, 20, null);
        $this->addColumn('InltLandCost3', 'Inltlandcost3', 'DECIMAL', false, 20, null);
        $this->addColumn('InltLandCost4', 'Inltlandcost4', 'DECIMAL', false, 20, null);
        $this->addColumn('InltLandCost5', 'Inltlandcost5', 'DECIMAL', false, 20, null);
        $this->addColumn('InltLandCost6', 'Inltlandcost6', 'DECIMAL', false, 20, null);
        $this->addColumn('InltCtry', 'Inltctry', 'VARCHAR', false, 4, null);
        $this->addColumn('InltRvalOrigCost', 'Inltrvalorigcost', 'DECIMAL', false, 20, null);
        $this->addColumn('InltRvalPct', 'Inltrvalpct', 'DECIMAL', false, 20, null);
        $this->addColumn('InltUnitWght', 'Inltunitwght', 'DECIMAL', false, 20, null);
        $this->addColumn('InltDestWhse', 'Inltdestwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('InltCntrQty', 'Inltcntrqty', 'INTEGER', false, 7, null);
        $this->addColumn('InltTareWght', 'Inlttarewght', 'DECIMAL', false, 20, null);
        $this->addColumn('InltFrozen', 'Inltfrozen', 'VARCHAR', false, 1, null);
        $this->addColumn('InltCert', 'Inltcert', 'VARCHAR', false, 1, null);
        $this->addColumn('InltCureDate', 'Inltcuredate', 'VARCHAR', false, 10, null);
        $this->addColumn('InltOrigBin', 'Inltorigbin', 'VARCHAR', false, 8, null);
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
     * @param \InvInvLot $obj A \InvInvLot object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getInititemnbr() || is_scalar($obj->getInititemnbr()) || is_callable([$obj->getInititemnbr(), '__toString']) ? (string) $obj->getInititemnbr() : $obj->getInititemnbr()), (null === $obj->getIntbwhse() || is_scalar($obj->getIntbwhse()) || is_callable([$obj->getIntbwhse(), '__toString']) ? (string) $obj->getIntbwhse() : $obj->getIntbwhse()), (null === $obj->getInltlotser() || is_scalar($obj->getInltlotser()) || is_callable([$obj->getInltlotser(), '__toString']) ? (string) $obj->getInltlotser() : $obj->getInltlotser()), (null === $obj->getInltbin() || is_scalar($obj->getInltbin()) || is_callable([$obj->getInltbin(), '__toString']) ? (string) $obj->getInltbin() : $obj->getInltbin())]);
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
     * @param mixed $value A \InvInvLot object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \InvInvLot) {
                $key = serialize([(null === $value->getInititemnbr() || is_scalar($value->getInititemnbr()) || is_callable([$value->getInititemnbr(), '__toString']) ? (string) $value->getInititemnbr() : $value->getInititemnbr()), (null === $value->getIntbwhse() || is_scalar($value->getIntbwhse()) || is_callable([$value->getIntbwhse(), '__toString']) ? (string) $value->getIntbwhse() : $value->getIntbwhse()), (null === $value->getInltlotser() || is_scalar($value->getInltlotser()) || is_callable([$value->getInltlotser(), '__toString']) ? (string) $value->getInltlotser() : $value->getInltlotser()), (null === $value->getInltbin() || is_scalar($value->getInltbin()) || is_callable([$value->getInltbin(), '__toString']) ? (string) $value->getInltbin() : $value->getInltbin())]);

            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2]), (null === $value[3] || is_scalar($value[3]) || is_callable([$value[3], '__toString']) ? (string) $value[3] : $value[3])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \InvInvLot object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inltlotser', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inltbin', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inltlotser', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inltlotser', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inltlotser', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inltlotser', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Inltlotser', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inltbin', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inltbin', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inltbin', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inltbin', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Inltbin', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Inltlotser', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('Inltbin', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? InvInvLotTableMap::CLASS_DEFAULT : InvInvLotTableMap::OM_CLASS;
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
     * @return array           (InvInvLot object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = InvInvLotTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvInvLotTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvInvLotTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvInvLotTableMap::OM_CLASS;
            /** @var InvInvLot $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvInvLotTableMap::addInstanceToPool($obj, $key);
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
            $key = InvInvLotTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvInvLotTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InvInvLot $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvInvLotTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTLOTSER);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTBIN);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTDATE);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTDATEWRIT);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTCOST);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTONHAND);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTRESV);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTSHIP);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTALLO);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTFABALLO);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTINTRAN);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTINSHIP);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTLOTREF);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTLANDCOST1);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTLANDCOST2);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTLANDCOST3);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTLANDCOST4);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTLANDCOST5);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTLANDCOST6);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTCTRY);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTRVALORIGCOST);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTRVALPCT);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTUNITWGHT);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTDESTWHSE);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTCNTRQTY);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTTAREWGHT);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTFROZEN);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTCERT);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTCUREDATE);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_INLTORIGBIN);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InvInvLotTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.InltLotSer');
            $criteria->addSelectColumn($alias . '.InltBin');
            $criteria->addSelectColumn($alias . '.InltDate');
            $criteria->addSelectColumn($alias . '.InltDateWrit');
            $criteria->addSelectColumn($alias . '.InltCost');
            $criteria->addSelectColumn($alias . '.InltOnHand');
            $criteria->addSelectColumn($alias . '.InltResv');
            $criteria->addSelectColumn($alias . '.InltShip');
            $criteria->addSelectColumn($alias . '.InltAllo');
            $criteria->addSelectColumn($alias . '.InltFabAllo');
            $criteria->addSelectColumn($alias . '.InltInTran');
            $criteria->addSelectColumn($alias . '.InltInShip');
            $criteria->addSelectColumn($alias . '.InltLotRef');
            $criteria->addSelectColumn($alias . '.InltLandCost1');
            $criteria->addSelectColumn($alias . '.InltLandCost2');
            $criteria->addSelectColumn($alias . '.InltLandCost3');
            $criteria->addSelectColumn($alias . '.InltLandCost4');
            $criteria->addSelectColumn($alias . '.InltLandCost5');
            $criteria->addSelectColumn($alias . '.InltLandCost6');
            $criteria->addSelectColumn($alias . '.InltCtry');
            $criteria->addSelectColumn($alias . '.InltRvalOrigCost');
            $criteria->addSelectColumn($alias . '.InltRvalPct');
            $criteria->addSelectColumn($alias . '.InltUnitWght');
            $criteria->addSelectColumn($alias . '.InltDestWhse');
            $criteria->addSelectColumn($alias . '.InltCntrQty');
            $criteria->addSelectColumn($alias . '.InltTareWght');
            $criteria->addSelectColumn($alias . '.InltFrozen');
            $criteria->addSelectColumn($alias . '.InltCert');
            $criteria->addSelectColumn($alias . '.InltCureDate');
            $criteria->addSelectColumn($alias . '.InltOrigBin');
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
        return Propel::getServiceContainer()->getDatabaseMap(InvInvLotTableMap::DATABASE_NAME)->getTable(InvInvLotTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(InvInvLotTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(InvInvLotTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new InvInvLotTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a InvInvLot or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or InvInvLot object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvInvLotTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InvInvLot) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvInvLotTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(InvInvLotTableMap::COL_INITITEMNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(InvInvLotTableMap::COL_INTBWHSE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(InvInvLotTableMap::COL_INLTLOTSER, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(InvInvLotTableMap::COL_INLTBIN, $value[3]));
                $criteria->addOr($criterion);
            }
        }

        $query = InvInvLotQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvInvLotTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvInvLotTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the INV_INV_LOT table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return InvInvLotQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InvInvLot or Criteria object.
     *
     * @param mixed               $criteria Criteria or InvInvLot object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvInvLotTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InvInvLot object
        }


        // Set the correct dbName
        $query = InvInvLotQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // InvInvLotTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
InvInvLotTableMap::buildTableMap();
