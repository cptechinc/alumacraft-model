<?php

namespace Map;

use \BoatInventory;
use \BoatInventoryQuery;
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
 * This class defines the structure of the 'boat_inventory' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class BoatInventoryTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.BoatInventoryTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'boat_inventory';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\BoatInventory';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'BoatInventory';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 13;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 13;

    /**
     * the column name for the Date field
     */
    const COL_DATE = 'boat_inventory.Date';

    /**
     * the column name for the Time field
     */
    const COL_TIME = 'boat_inventory.Time';

    /**
     * the column name for the Recnbr field
     */
    const COL_RECNBR = 'boat_inventory.Recnbr';

    /**
     * the column name for the SerialNbr field
     */
    const COL_SERIALNBR = 'boat_inventory.SerialNbr';

    /**
     * the column name for the ItemNbr field
     */
    const COL_ITEMNBR = 'boat_inventory.ItemNbr';

    /**
     * the column name for the ItemDesc1 field
     */
    const COL_ITEMDESC1 = 'boat_inventory.ItemDesc1';

    /**
     * the column name for the OrderNbr field
     */
    const COL_ORDERNBR = 'boat_inventory.OrderNbr';

    /**
     * the column name for the InvoiceDate field
     */
    const COL_INVOICEDATE = 'boat_inventory.InvoiceDate';

    /**
     * the column name for the Registered field
     */
    const COL_REGISTERED = 'boat_inventory.Registered';

    /**
     * the column name for the CustId field
     */
    const COL_CUSTID = 'boat_inventory.CustId';

    /**
     * the column name for the SalespersonId field
     */
    const COL_SALESPERSONID = 'boat_inventory.SalespersonId';

    /**
     * the column name for the OehdUserCode2 field
     */
    const COL_OEHDUSERCODE2 = 'boat_inventory.OehdUserCode2';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'boat_inventory.dummy';

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
        self::TYPE_PHPNAME       => array('Date', 'Time', 'Recnbr', 'Serialnbr', 'Itemnbr', 'Itemdesc1', 'Ordernbr', 'Invoicedate', 'Registered', 'Custid', 'Salespersonid', 'Oehdusercode2', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('date', 'time', 'recnbr', 'serialnbr', 'itemnbr', 'itemdesc1', 'ordernbr', 'invoicedate', 'registered', 'custid', 'salespersonid', 'oehdusercode2', 'dummy', ),
        self::TYPE_COLNAME       => array(BoatInventoryTableMap::COL_DATE, BoatInventoryTableMap::COL_TIME, BoatInventoryTableMap::COL_RECNBR, BoatInventoryTableMap::COL_SERIALNBR, BoatInventoryTableMap::COL_ITEMNBR, BoatInventoryTableMap::COL_ITEMDESC1, BoatInventoryTableMap::COL_ORDERNBR, BoatInventoryTableMap::COL_INVOICEDATE, BoatInventoryTableMap::COL_REGISTERED, BoatInventoryTableMap::COL_CUSTID, BoatInventoryTableMap::COL_SALESPERSONID, BoatInventoryTableMap::COL_OEHDUSERCODE2, BoatInventoryTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('Date', 'Time', 'Recnbr', 'SerialNbr', 'ItemNbr', 'ItemDesc1', 'OrderNbr', 'InvoiceDate', 'Registered', 'CustId', 'SalespersonId', 'OehdUserCode2', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Date' => 0, 'Time' => 1, 'Recnbr' => 2, 'Serialnbr' => 3, 'Itemnbr' => 4, 'Itemdesc1' => 5, 'Ordernbr' => 6, 'Invoicedate' => 7, 'Registered' => 8, 'Custid' => 9, 'Salespersonid' => 10, 'Oehdusercode2' => 11, 'Dummy' => 12, ),
        self::TYPE_CAMELNAME     => array('date' => 0, 'time' => 1, 'recnbr' => 2, 'serialnbr' => 3, 'itemnbr' => 4, 'itemdesc1' => 5, 'ordernbr' => 6, 'invoicedate' => 7, 'registered' => 8, 'custid' => 9, 'salespersonid' => 10, 'oehdusercode2' => 11, 'dummy' => 12, ),
        self::TYPE_COLNAME       => array(BoatInventoryTableMap::COL_DATE => 0, BoatInventoryTableMap::COL_TIME => 1, BoatInventoryTableMap::COL_RECNBR => 2, BoatInventoryTableMap::COL_SERIALNBR => 3, BoatInventoryTableMap::COL_ITEMNBR => 4, BoatInventoryTableMap::COL_ITEMDESC1 => 5, BoatInventoryTableMap::COL_ORDERNBR => 6, BoatInventoryTableMap::COL_INVOICEDATE => 7, BoatInventoryTableMap::COL_REGISTERED => 8, BoatInventoryTableMap::COL_CUSTID => 9, BoatInventoryTableMap::COL_SALESPERSONID => 10, BoatInventoryTableMap::COL_OEHDUSERCODE2 => 11, BoatInventoryTableMap::COL_DUMMY => 12, ),
        self::TYPE_FIELDNAME     => array('Date' => 0, 'Time' => 1, 'Recnbr' => 2, 'SerialNbr' => 3, 'ItemNbr' => 4, 'ItemDesc1' => 5, 'OrderNbr' => 6, 'InvoiceDate' => 7, 'Registered' => 8, 'CustId' => 9, 'SalespersonId' => 10, 'OehdUserCode2' => 11, 'dummy' => 12, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
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
        $this->setName('boat_inventory');
        $this->setPhpName('BoatInventory');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\BoatInventory');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('Date', 'Date', 'INTEGER', false, 8, null);
        $this->addColumn('Time', 'Time', 'INTEGER', false, 8, null);
        $this->addColumn('Recnbr', 'Recnbr', 'INTEGER', false, 8, null);
        $this->addPrimaryKey('SerialNbr', 'Serialnbr', 'VARCHAR', true, 20, '');
        $this->addPrimaryKey('ItemNbr', 'Itemnbr', 'VARCHAR', true, 30, '');
        $this->addColumn('ItemDesc1', 'Itemdesc1', 'VARCHAR', false, 35, null);
        $this->addColumn('OrderNbr', 'Ordernbr', 'INTEGER', false, 10, null);
        $this->addColumn('InvoiceDate', 'Invoicedate', 'INTEGER', false, 8, null);
        $this->addColumn('Registered', 'Registered', 'VARCHAR', false, 1, null);
        $this->addPrimaryKey('CustId', 'Custid', 'VARCHAR', true, 6, '');
        $this->addColumn('SalespersonId', 'Salespersonid', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdUserCode2', 'Oehdusercode2', 'VARCHAR', false, 45, null);
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
     * @param \BoatInventory $obj A \BoatInventory object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getSerialnbr() || is_scalar($obj->getSerialnbr()) || is_callable([$obj->getSerialnbr(), '__toString']) ? (string) $obj->getSerialnbr() : $obj->getSerialnbr()), (null === $obj->getItemnbr() || is_scalar($obj->getItemnbr()) || is_callable([$obj->getItemnbr(), '__toString']) ? (string) $obj->getItemnbr() : $obj->getItemnbr()), (null === $obj->getCustid() || is_scalar($obj->getCustid()) || is_callable([$obj->getCustid(), '__toString']) ? (string) $obj->getCustid() : $obj->getCustid())]);
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
     * @param mixed $value A \BoatInventory object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \BoatInventory) {
                $key = serialize([(null === $value->getSerialnbr() || is_scalar($value->getSerialnbr()) || is_callable([$value->getSerialnbr(), '__toString']) ? (string) $value->getSerialnbr() : $value->getSerialnbr()), (null === $value->getItemnbr() || is_scalar($value->getItemnbr()) || is_callable([$value->getItemnbr(), '__toString']) ? (string) $value->getItemnbr() : $value->getItemnbr()), (null === $value->getCustid() || is_scalar($value->getCustid()) || is_callable([$value->getCustid(), '__toString']) ? (string) $value->getCustid() : $value->getCustid())]);

            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \BoatInventory object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Serialnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Itemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 9 + $offset : static::translateFieldName('Custid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Serialnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Serialnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Serialnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Serialnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Serialnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Itemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Itemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Itemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Itemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Itemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 9 + $offset : static::translateFieldName('Custid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 9 + $offset : static::translateFieldName('Custid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 9 + $offset : static::translateFieldName('Custid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 9 + $offset : static::translateFieldName('Custid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 9 + $offset : static::translateFieldName('Custid', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                ? 3 + $offset
                : self::translateFieldName('Serialnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 4 + $offset
                : self::translateFieldName('Itemnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 9 + $offset
                : self::translateFieldName('Custid', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? BoatInventoryTableMap::CLASS_DEFAULT : BoatInventoryTableMap::OM_CLASS;
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
     * @return array           (BoatInventory object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = BoatInventoryTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = BoatInventoryTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + BoatInventoryTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = BoatInventoryTableMap::OM_CLASS;
            /** @var BoatInventory $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            BoatInventoryTableMap::addInstanceToPool($obj, $key);
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
            $key = BoatInventoryTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = BoatInventoryTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var BoatInventory $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                BoatInventoryTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(BoatInventoryTableMap::COL_DATE);
            $criteria->addSelectColumn(BoatInventoryTableMap::COL_TIME);
            $criteria->addSelectColumn(BoatInventoryTableMap::COL_RECNBR);
            $criteria->addSelectColumn(BoatInventoryTableMap::COL_SERIALNBR);
            $criteria->addSelectColumn(BoatInventoryTableMap::COL_ITEMNBR);
            $criteria->addSelectColumn(BoatInventoryTableMap::COL_ITEMDESC1);
            $criteria->addSelectColumn(BoatInventoryTableMap::COL_ORDERNBR);
            $criteria->addSelectColumn(BoatInventoryTableMap::COL_INVOICEDATE);
            $criteria->addSelectColumn(BoatInventoryTableMap::COL_REGISTERED);
            $criteria->addSelectColumn(BoatInventoryTableMap::COL_CUSTID);
            $criteria->addSelectColumn(BoatInventoryTableMap::COL_SALESPERSONID);
            $criteria->addSelectColumn(BoatInventoryTableMap::COL_OEHDUSERCODE2);
            $criteria->addSelectColumn(BoatInventoryTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.Date');
            $criteria->addSelectColumn($alias . '.Time');
            $criteria->addSelectColumn($alias . '.Recnbr');
            $criteria->addSelectColumn($alias . '.SerialNbr');
            $criteria->addSelectColumn($alias . '.ItemNbr');
            $criteria->addSelectColumn($alias . '.ItemDesc1');
            $criteria->addSelectColumn($alias . '.OrderNbr');
            $criteria->addSelectColumn($alias . '.InvoiceDate');
            $criteria->addSelectColumn($alias . '.Registered');
            $criteria->addSelectColumn($alias . '.CustId');
            $criteria->addSelectColumn($alias . '.SalespersonId');
            $criteria->addSelectColumn($alias . '.OehdUserCode2');
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
        return Propel::getServiceContainer()->getDatabaseMap(BoatInventoryTableMap::DATABASE_NAME)->getTable(BoatInventoryTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(BoatInventoryTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(BoatInventoryTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new BoatInventoryTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a BoatInventory or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or BoatInventory object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(BoatInventoryTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \BoatInventory) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(BoatInventoryTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(BoatInventoryTableMap::COL_SERIALNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(BoatInventoryTableMap::COL_ITEMNBR, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(BoatInventoryTableMap::COL_CUSTID, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        $query = BoatInventoryQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            BoatInventoryTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                BoatInventoryTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the boat_inventory table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return BoatInventoryQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a BoatInventory or Criteria object.
     *
     * @param mixed               $criteria Criteria or BoatInventory object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BoatInventoryTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from BoatInventory object
        }


        // Set the correct dbName
        $query = BoatInventoryQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // BoatInventoryTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BoatInventoryTableMap::buildTableMap();
