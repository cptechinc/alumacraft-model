<?php

namespace Map;

use \WipHeader;
use \WipHeaderQuery;
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
 * This class defines the structure of the 'WIP_HEADER' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class WipHeaderTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.WipHeaderTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'WIP_HEADER';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\WipHeader';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'WipHeader';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 19;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 19;

    /**
     * the column name for the WiphWipNbr field
     */
    const COL_WIPHWIPNBR = 'WIP_HEADER.WiphWipNbr';

    /**
     * the column name for the WiphStatus field
     */
    const COL_WIPHSTATUS = 'WIP_HEADER.WiphStatus';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'WIP_HEADER.IntbWhse';

    /**
     * the column name for the WiphPlanDate field
     */
    const COL_WIPHPLANDATE = 'WIP_HEADER.WiphPlanDate';

    /**
     * the column name for the WiphLevel field
     */
    const COL_WIPHLEVEL = 'WIP_HEADER.WiphLevel';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'WIP_HEADER.InitItemNbr';

    /**
     * the column name for the WiphPlanQty field
     */
    const COL_WIPHPLANQTY = 'WIP_HEADER.WiphPlanQty';

    /**
     * the column name for the WiphCmpltdQty field
     */
    const COL_WIPHCMPLTDQTY = 'WIP_HEADER.WiphCmpltdQty';

    /**
     * the column name for the WiphCmpltdDate field
     */
    const COL_WIPHCMPLTDDATE = 'WIP_HEADER.WiphCmpltdDate';

    /**
     * the column name for the WiphBin field
     */
    const COL_WIPHBIN = 'WIP_HEADER.WiphBin';

    /**
     * the column name for the OehdNbr field
     */
    const COL_OEHDNBR = 'WIP_HEADER.OehdNbr';

    /**
     * the column name for the ArcuCustId field
     */
    const COL_ARCUCUSTID = 'WIP_HEADER.ArcuCustId';

    /**
     * the column name for the WiphWorkCenter field
     */
    const COL_WIPHWORKCENTER = 'WIP_HEADER.WiphWorkCenter';

    /**
     * the column name for the WiphOper field
     */
    const COL_WIPHOPER = 'WIP_HEADER.WiphOper';

    /**
     * the column name for the WiphAlumaSer field
     */
    const COL_WIPHALUMASER = 'WIP_HEADER.WiphAlumaSer';

    /**
     * the column name for the WiphNegWip field
     */
    const COL_WIPHNEGWIP = 'WIP_HEADER.WiphNegWip';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'WIP_HEADER.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'WIP_HEADER.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'WIP_HEADER.dummy';

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
        self::TYPE_PHPNAME       => array('Wiphwipnbr', 'Wiphstatus', 'Intbwhse', 'Wiphplandate', 'Wiphlevel', 'Inititemnbr', 'Wiphplanqty', 'Wiphcmpltdqty', 'Wiphcmpltddate', 'Wiphbin', 'Oehdnbr', 'Arcucustid', 'Wiphworkcenter', 'Wiphoper', 'Wiphalumaser', 'Wiphnegwip', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('wiphwipnbr', 'wiphstatus', 'intbwhse', 'wiphplandate', 'wiphlevel', 'inititemnbr', 'wiphplanqty', 'wiphcmpltdqty', 'wiphcmpltddate', 'wiphbin', 'oehdnbr', 'arcucustid', 'wiphworkcenter', 'wiphoper', 'wiphalumaser', 'wiphnegwip', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(WipHeaderTableMap::COL_WIPHWIPNBR, WipHeaderTableMap::COL_WIPHSTATUS, WipHeaderTableMap::COL_INTBWHSE, WipHeaderTableMap::COL_WIPHPLANDATE, WipHeaderTableMap::COL_WIPHLEVEL, WipHeaderTableMap::COL_INITITEMNBR, WipHeaderTableMap::COL_WIPHPLANQTY, WipHeaderTableMap::COL_WIPHCMPLTDQTY, WipHeaderTableMap::COL_WIPHCMPLTDDATE, WipHeaderTableMap::COL_WIPHBIN, WipHeaderTableMap::COL_OEHDNBR, WipHeaderTableMap::COL_ARCUCUSTID, WipHeaderTableMap::COL_WIPHWORKCENTER, WipHeaderTableMap::COL_WIPHOPER, WipHeaderTableMap::COL_WIPHALUMASER, WipHeaderTableMap::COL_WIPHNEGWIP, WipHeaderTableMap::COL_DATEUPDTD, WipHeaderTableMap::COL_TIMEUPDTD, WipHeaderTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('WiphWipNbr', 'WiphStatus', 'IntbWhse', 'WiphPlanDate', 'WiphLevel', 'InitItemNbr', 'WiphPlanQty', 'WiphCmpltdQty', 'WiphCmpltdDate', 'WiphBin', 'OehdNbr', 'ArcuCustId', 'WiphWorkCenter', 'WiphOper', 'WiphAlumaSer', 'WiphNegWip', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Wiphwipnbr' => 0, 'Wiphstatus' => 1, 'Intbwhse' => 2, 'Wiphplandate' => 3, 'Wiphlevel' => 4, 'Inititemnbr' => 5, 'Wiphplanqty' => 6, 'Wiphcmpltdqty' => 7, 'Wiphcmpltddate' => 8, 'Wiphbin' => 9, 'Oehdnbr' => 10, 'Arcucustid' => 11, 'Wiphworkcenter' => 12, 'Wiphoper' => 13, 'Wiphalumaser' => 14, 'Wiphnegwip' => 15, 'Dateupdtd' => 16, 'Timeupdtd' => 17, 'Dummy' => 18, ),
        self::TYPE_CAMELNAME     => array('wiphwipnbr' => 0, 'wiphstatus' => 1, 'intbwhse' => 2, 'wiphplandate' => 3, 'wiphlevel' => 4, 'inititemnbr' => 5, 'wiphplanqty' => 6, 'wiphcmpltdqty' => 7, 'wiphcmpltddate' => 8, 'wiphbin' => 9, 'oehdnbr' => 10, 'arcucustid' => 11, 'wiphworkcenter' => 12, 'wiphoper' => 13, 'wiphalumaser' => 14, 'wiphnegwip' => 15, 'dateupdtd' => 16, 'timeupdtd' => 17, 'dummy' => 18, ),
        self::TYPE_COLNAME       => array(WipHeaderTableMap::COL_WIPHWIPNBR => 0, WipHeaderTableMap::COL_WIPHSTATUS => 1, WipHeaderTableMap::COL_INTBWHSE => 2, WipHeaderTableMap::COL_WIPHPLANDATE => 3, WipHeaderTableMap::COL_WIPHLEVEL => 4, WipHeaderTableMap::COL_INITITEMNBR => 5, WipHeaderTableMap::COL_WIPHPLANQTY => 6, WipHeaderTableMap::COL_WIPHCMPLTDQTY => 7, WipHeaderTableMap::COL_WIPHCMPLTDDATE => 8, WipHeaderTableMap::COL_WIPHBIN => 9, WipHeaderTableMap::COL_OEHDNBR => 10, WipHeaderTableMap::COL_ARCUCUSTID => 11, WipHeaderTableMap::COL_WIPHWORKCENTER => 12, WipHeaderTableMap::COL_WIPHOPER => 13, WipHeaderTableMap::COL_WIPHALUMASER => 14, WipHeaderTableMap::COL_WIPHNEGWIP => 15, WipHeaderTableMap::COL_DATEUPDTD => 16, WipHeaderTableMap::COL_TIMEUPDTD => 17, WipHeaderTableMap::COL_DUMMY => 18, ),
        self::TYPE_FIELDNAME     => array('WiphWipNbr' => 0, 'WiphStatus' => 1, 'IntbWhse' => 2, 'WiphPlanDate' => 3, 'WiphLevel' => 4, 'InitItemNbr' => 5, 'WiphPlanQty' => 6, 'WiphCmpltdQty' => 7, 'WiphCmpltdDate' => 8, 'WiphBin' => 9, 'OehdNbr' => 10, 'ArcuCustId' => 11, 'WiphWorkCenter' => 12, 'WiphOper' => 13, 'WiphAlumaSer' => 14, 'WiphNegWip' => 15, 'DateUpdtd' => 16, 'TimeUpdtd' => 17, 'dummy' => 18, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
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
        $this->setName('WIP_HEADER');
        $this->setPhpName('WipHeader');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\WipHeader');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('WiphWipNbr', 'Wiphwipnbr', 'INTEGER', true, 8, 0);
        $this->addColumn('WiphStatus', 'Wiphstatus', 'VARCHAR', false, 1, null);
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('WiphPlanDate', 'Wiphplandate', 'INTEGER', false, 8, null);
        $this->addColumn('WiphLevel', 'Wiphlevel', 'INTEGER', false, 2, null);
        $this->addColumn('InitItemNbr', 'Inititemnbr', 'VARCHAR', false, 30, null);
        $this->addColumn('WiphPlanQty', 'Wiphplanqty', 'DECIMAL', false, 20, null);
        $this->addColumn('WiphCmpltdQty', 'Wiphcmpltdqty', 'DECIMAL', false, 20, null);
        $this->addColumn('WiphCmpltdDate', 'Wiphcmpltddate', 'INTEGER', false, 8, null);
        $this->addColumn('WiphBin', 'Wiphbin', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdNbr', 'Oehdnbr', 'INTEGER', false, 8, null);
        $this->addColumn('ArcuCustId', 'Arcucustid', 'VARCHAR', false, 6, null);
        $this->addColumn('WiphWorkCenter', 'Wiphworkcenter', 'VARCHAR', false, 4, null);
        $this->addColumn('WiphOper', 'Wiphoper', 'VARCHAR', false, 6, null);
        $this->addColumn('WiphAlumaSer', 'Wiphalumaser', 'VARCHAR', false, 20, null);
        $this->addColumn('WiphNegWip', 'Wiphnegwip', 'VARCHAR', false, 1, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Wiphwipnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Wiphwipnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Wiphwipnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Wiphwipnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Wiphwipnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Wiphwipnbr', TableMap::TYPE_PHPNAME, $indexType)];
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
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Wiphwipnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
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
        return $withPrefix ? WipHeaderTableMap::CLASS_DEFAULT : WipHeaderTableMap::OM_CLASS;
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
     * @return array           (WipHeader object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = WipHeaderTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = WipHeaderTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + WipHeaderTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = WipHeaderTableMap::OM_CLASS;
            /** @var WipHeader $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            WipHeaderTableMap::addInstanceToPool($obj, $key);
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
            $key = WipHeaderTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = WipHeaderTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var WipHeader $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                WipHeaderTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(WipHeaderTableMap::COL_WIPHWIPNBR);
            $criteria->addSelectColumn(WipHeaderTableMap::COL_WIPHSTATUS);
            $criteria->addSelectColumn(WipHeaderTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(WipHeaderTableMap::COL_WIPHPLANDATE);
            $criteria->addSelectColumn(WipHeaderTableMap::COL_WIPHLEVEL);
            $criteria->addSelectColumn(WipHeaderTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(WipHeaderTableMap::COL_WIPHPLANQTY);
            $criteria->addSelectColumn(WipHeaderTableMap::COL_WIPHCMPLTDQTY);
            $criteria->addSelectColumn(WipHeaderTableMap::COL_WIPHCMPLTDDATE);
            $criteria->addSelectColumn(WipHeaderTableMap::COL_WIPHBIN);
            $criteria->addSelectColumn(WipHeaderTableMap::COL_OEHDNBR);
            $criteria->addSelectColumn(WipHeaderTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(WipHeaderTableMap::COL_WIPHWORKCENTER);
            $criteria->addSelectColumn(WipHeaderTableMap::COL_WIPHOPER);
            $criteria->addSelectColumn(WipHeaderTableMap::COL_WIPHALUMASER);
            $criteria->addSelectColumn(WipHeaderTableMap::COL_WIPHNEGWIP);
            $criteria->addSelectColumn(WipHeaderTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(WipHeaderTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(WipHeaderTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.WiphWipNbr');
            $criteria->addSelectColumn($alias . '.WiphStatus');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.WiphPlanDate');
            $criteria->addSelectColumn($alias . '.WiphLevel');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.WiphPlanQty');
            $criteria->addSelectColumn($alias . '.WiphCmpltdQty');
            $criteria->addSelectColumn($alias . '.WiphCmpltdDate');
            $criteria->addSelectColumn($alias . '.WiphBin');
            $criteria->addSelectColumn($alias . '.OehdNbr');
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.WiphWorkCenter');
            $criteria->addSelectColumn($alias . '.WiphOper');
            $criteria->addSelectColumn($alias . '.WiphAlumaSer');
            $criteria->addSelectColumn($alias . '.WiphNegWip');
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
        return Propel::getServiceContainer()->getDatabaseMap(WipHeaderTableMap::DATABASE_NAME)->getTable(WipHeaderTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(WipHeaderTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(WipHeaderTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new WipHeaderTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a WipHeader or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or WipHeader object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(WipHeaderTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \WipHeader) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(WipHeaderTableMap::DATABASE_NAME);
            $criteria->add(WipHeaderTableMap::COL_WIPHWIPNBR, (array) $values, Criteria::IN);
        }

        $query = WipHeaderQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            WipHeaderTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                WipHeaderTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the WIP_HEADER table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return WipHeaderQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a WipHeader or Criteria object.
     *
     * @param mixed               $criteria Criteria or WipHeader object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WipHeaderTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from WipHeader object
        }


        // Set the correct dbName
        $query = WipHeaderQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // WipHeaderTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
WipHeaderTableMap::buildTableMap();
