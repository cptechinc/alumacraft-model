<?php

namespace Map;

use \ArSaleper1;
use \ArSaleper1Query;
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
 * This class defines the structure of the 'AR_SALEPER1' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ArSaleper1TableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ArSaleper1TableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'AR_SALEPER1';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ArSaleper1';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ArSaleper1';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 15;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 15;

    /**
     * the column name for the ArspSalePer1 field
     */
    const COL_ARSPSALEPER1 = 'AR_SALEPER1.ArspSalePer1';

    /**
     * the column name for the ArspName field
     */
    const COL_ARSPNAME = 'AR_SALEPER1.ArspName';

    /**
     * the column name for the ArspMtdSale field
     */
    const COL_ARSPMTDSALE = 'AR_SALEPER1.ArspMtdSale';

    /**
     * the column name for the ArspYtdSale field
     */
    const COL_ARSPYTDSALE = 'AR_SALEPER1.ArspYtdSale';

    /**
     * the column name for the ArspLtdSale field
     */
    const COL_ARSPLTDSALE = 'AR_SALEPER1.ArspLtdSale';

    /**
     * the column name for the ArspLastSaleDate field
     */
    const COL_ARSPLASTSALEDATE = 'AR_SALEPER1.ArspLastSaleDate';

    /**
     * the column name for the ArspMtdCommEarn field
     */
    const COL_ARSPMTDCOMMEARN = 'AR_SALEPER1.ArspMtdCommEarn';

    /**
     * the column name for the ArspYtdCommEarn field
     */
    const COL_ARSPYTDCOMMEARN = 'AR_SALEPER1.ArspYtdCommEarn';

    /**
     * the column name for the ArspLtdCommEarn field
     */
    const COL_ARSPLTDCOMMEARN = 'AR_SALEPER1.ArspLtdCommEarn';

    /**
     * the column name for the ArspMtdCommPaid field
     */
    const COL_ARSPMTDCOMMPAID = 'AR_SALEPER1.ArspMtdCommPaid';

    /**
     * the column name for the ArspYtdCommPaid field
     */
    const COL_ARSPYTDCOMMPAID = 'AR_SALEPER1.ArspYtdCommPaid';

    /**
     * the column name for the ArspLtdCommPaid field
     */
    const COL_ARSPLTDCOMMPAID = 'AR_SALEPER1.ArspLtdCommPaid';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'AR_SALEPER1.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'AR_SALEPER1.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'AR_SALEPER1.dummy';

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
        self::TYPE_PHPNAME       => array('Arspsaleper1', 'Arspname', 'Arspmtdsale', 'Arspytdsale', 'Arspltdsale', 'Arsplastsaledate', 'Arspmtdcommearn', 'Arspytdcommearn', 'Arspltdcommearn', 'Arspmtdcommpaid', 'Arspytdcommpaid', 'Arspltdcommpaid', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('arspsaleper1', 'arspname', 'arspmtdsale', 'arspytdsale', 'arspltdsale', 'arsplastsaledate', 'arspmtdcommearn', 'arspytdcommearn', 'arspltdcommearn', 'arspmtdcommpaid', 'arspytdcommpaid', 'arspltdcommpaid', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ArSaleper1TableMap::COL_ARSPSALEPER1, ArSaleper1TableMap::COL_ARSPNAME, ArSaleper1TableMap::COL_ARSPMTDSALE, ArSaleper1TableMap::COL_ARSPYTDSALE, ArSaleper1TableMap::COL_ARSPLTDSALE, ArSaleper1TableMap::COL_ARSPLASTSALEDATE, ArSaleper1TableMap::COL_ARSPMTDCOMMEARN, ArSaleper1TableMap::COL_ARSPYTDCOMMEARN, ArSaleper1TableMap::COL_ARSPLTDCOMMEARN, ArSaleper1TableMap::COL_ARSPMTDCOMMPAID, ArSaleper1TableMap::COL_ARSPYTDCOMMPAID, ArSaleper1TableMap::COL_ARSPLTDCOMMPAID, ArSaleper1TableMap::COL_DATEUPDTD, ArSaleper1TableMap::COL_TIMEUPDTD, ArSaleper1TableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ArspSalePer1', 'ArspName', 'ArspMtdSale', 'ArspYtdSale', 'ArspLtdSale', 'ArspLastSaleDate', 'ArspMtdCommEarn', 'ArspYtdCommEarn', 'ArspLtdCommEarn', 'ArspMtdCommPaid', 'ArspYtdCommPaid', 'ArspLtdCommPaid', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Arspsaleper1' => 0, 'Arspname' => 1, 'Arspmtdsale' => 2, 'Arspytdsale' => 3, 'Arspltdsale' => 4, 'Arsplastsaledate' => 5, 'Arspmtdcommearn' => 6, 'Arspytdcommearn' => 7, 'Arspltdcommearn' => 8, 'Arspmtdcommpaid' => 9, 'Arspytdcommpaid' => 10, 'Arspltdcommpaid' => 11, 'Dateupdtd' => 12, 'Timeupdtd' => 13, 'Dummy' => 14, ),
        self::TYPE_CAMELNAME     => array('arspsaleper1' => 0, 'arspname' => 1, 'arspmtdsale' => 2, 'arspytdsale' => 3, 'arspltdsale' => 4, 'arsplastsaledate' => 5, 'arspmtdcommearn' => 6, 'arspytdcommearn' => 7, 'arspltdcommearn' => 8, 'arspmtdcommpaid' => 9, 'arspytdcommpaid' => 10, 'arspltdcommpaid' => 11, 'dateupdtd' => 12, 'timeupdtd' => 13, 'dummy' => 14, ),
        self::TYPE_COLNAME       => array(ArSaleper1TableMap::COL_ARSPSALEPER1 => 0, ArSaleper1TableMap::COL_ARSPNAME => 1, ArSaleper1TableMap::COL_ARSPMTDSALE => 2, ArSaleper1TableMap::COL_ARSPYTDSALE => 3, ArSaleper1TableMap::COL_ARSPLTDSALE => 4, ArSaleper1TableMap::COL_ARSPLASTSALEDATE => 5, ArSaleper1TableMap::COL_ARSPMTDCOMMEARN => 6, ArSaleper1TableMap::COL_ARSPYTDCOMMEARN => 7, ArSaleper1TableMap::COL_ARSPLTDCOMMEARN => 8, ArSaleper1TableMap::COL_ARSPMTDCOMMPAID => 9, ArSaleper1TableMap::COL_ARSPYTDCOMMPAID => 10, ArSaleper1TableMap::COL_ARSPLTDCOMMPAID => 11, ArSaleper1TableMap::COL_DATEUPDTD => 12, ArSaleper1TableMap::COL_TIMEUPDTD => 13, ArSaleper1TableMap::COL_DUMMY => 14, ),
        self::TYPE_FIELDNAME     => array('ArspSalePer1' => 0, 'ArspName' => 1, 'ArspMtdSale' => 2, 'ArspYtdSale' => 3, 'ArspLtdSale' => 4, 'ArspLastSaleDate' => 5, 'ArspMtdCommEarn' => 6, 'ArspYtdCommEarn' => 7, 'ArspLtdCommEarn' => 8, 'ArspMtdCommPaid' => 9, 'ArspYtdCommPaid' => 10, 'ArspLtdCommPaid' => 11, 'DateUpdtd' => 12, 'TimeUpdtd' => 13, 'dummy' => 14, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
        $this->setName('AR_SALEPER1');
        $this->setPhpName('ArSaleper1');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ArSaleper1');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ArspSalePer1', 'Arspsaleper1', 'VARCHAR', true, 6, '');
        $this->addColumn('ArspName', 'Arspname', 'VARCHAR', false, 30, null);
        $this->addColumn('ArspMtdSale', 'Arspmtdsale', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspYtdSale', 'Arspytdsale', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspLtdSale', 'Arspltdsale', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspLastSaleDate', 'Arsplastsaledate', 'INTEGER', false, 8, null);
        $this->addColumn('ArspMtdCommEarn', 'Arspmtdcommearn', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspYtdCommEarn', 'Arspytdcommearn', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspLtdCommEarn', 'Arspltdcommearn', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspMtdCommPaid', 'Arspmtdcommpaid', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspYtdCommPaid', 'Arspytdcommpaid', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspLtdCommPaid', 'Arspltdcommpaid', 'DECIMAL', false, 20, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)];
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
        return (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ArSaleper1TableMap::CLASS_DEFAULT : ArSaleper1TableMap::OM_CLASS;
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
     * @return array           (ArSaleper1 object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ArSaleper1TableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ArSaleper1TableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ArSaleper1TableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ArSaleper1TableMap::OM_CLASS;
            /** @var ArSaleper1 $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ArSaleper1TableMap::addInstanceToPool($obj, $key);
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
            $key = ArSaleper1TableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ArSaleper1TableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ArSaleper1 $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ArSaleper1TableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ArSaleper1TableMap::COL_ARSPSALEPER1);
            $criteria->addSelectColumn(ArSaleper1TableMap::COL_ARSPNAME);
            $criteria->addSelectColumn(ArSaleper1TableMap::COL_ARSPMTDSALE);
            $criteria->addSelectColumn(ArSaleper1TableMap::COL_ARSPYTDSALE);
            $criteria->addSelectColumn(ArSaleper1TableMap::COL_ARSPLTDSALE);
            $criteria->addSelectColumn(ArSaleper1TableMap::COL_ARSPLASTSALEDATE);
            $criteria->addSelectColumn(ArSaleper1TableMap::COL_ARSPMTDCOMMEARN);
            $criteria->addSelectColumn(ArSaleper1TableMap::COL_ARSPYTDCOMMEARN);
            $criteria->addSelectColumn(ArSaleper1TableMap::COL_ARSPLTDCOMMEARN);
            $criteria->addSelectColumn(ArSaleper1TableMap::COL_ARSPMTDCOMMPAID);
            $criteria->addSelectColumn(ArSaleper1TableMap::COL_ARSPYTDCOMMPAID);
            $criteria->addSelectColumn(ArSaleper1TableMap::COL_ARSPLTDCOMMPAID);
            $criteria->addSelectColumn(ArSaleper1TableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ArSaleper1TableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ArSaleper1TableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArspSalePer1');
            $criteria->addSelectColumn($alias . '.ArspName');
            $criteria->addSelectColumn($alias . '.ArspMtdSale');
            $criteria->addSelectColumn($alias . '.ArspYtdSale');
            $criteria->addSelectColumn($alias . '.ArspLtdSale');
            $criteria->addSelectColumn($alias . '.ArspLastSaleDate');
            $criteria->addSelectColumn($alias . '.ArspMtdCommEarn');
            $criteria->addSelectColumn($alias . '.ArspYtdCommEarn');
            $criteria->addSelectColumn($alias . '.ArspLtdCommEarn');
            $criteria->addSelectColumn($alias . '.ArspMtdCommPaid');
            $criteria->addSelectColumn($alias . '.ArspYtdCommPaid');
            $criteria->addSelectColumn($alias . '.ArspLtdCommPaid');
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
        return Propel::getServiceContainer()->getDatabaseMap(ArSaleper1TableMap::DATABASE_NAME)->getTable(ArSaleper1TableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ArSaleper1TableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ArSaleper1TableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ArSaleper1TableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ArSaleper1 or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ArSaleper1 object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArSaleper1TableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ArSaleper1) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ArSaleper1TableMap::DATABASE_NAME);
            $criteria->add(ArSaleper1TableMap::COL_ARSPSALEPER1, (array) $values, Criteria::IN);
        }

        $query = ArSaleper1Query::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ArSaleper1TableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ArSaleper1TableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the AR_SALEPER1 table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ArSaleper1Query::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ArSaleper1 or Criteria object.
     *
     * @param mixed               $criteria Criteria or ArSaleper1 object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArSaleper1TableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ArSaleper1 object
        }


        // Set the correct dbName
        $query = ArSaleper1Query::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ArSaleper1TableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ArSaleper1TableMap::buildTableMap();
