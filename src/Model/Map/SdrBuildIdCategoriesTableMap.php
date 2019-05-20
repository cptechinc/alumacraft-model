<?php

namespace Map;

use \SdrBuildIdCategories;
use \SdrBuildIdCategoriesQuery;
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
 * This class defines the structure of the 'SDR_build_id_categories' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class SdrBuildIdCategoriesTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SdrBuildIdCategoriesTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'SDR_build_id_categories';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\SdrBuildIdCategories';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SdrBuildIdCategories';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 4;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 4;

    /**
     * the column name for the id field
     */
    const COL_ID = 'SDR_build_id_categories.id';

    /**
     * the column name for the item_id field
     */
    const COL_ITEM_ID = 'SDR_build_id_categories.item_id';

    /**
     * the column name for the model_name_real field
     */
    const COL_MODEL_NAME_REAL = 'SDR_build_id_categories.model_name_real';

    /**
     * the column name for the clothing_gift_amounts field
     */
    const COL_CLOTHING_GIFT_AMOUNTS = 'SDR_build_id_categories.clothing_gift_amounts';

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
        self::TYPE_PHPNAME       => array('Id', 'ItemId', 'ModelNameReal', 'ClothingGiftAmounts', ),
        self::TYPE_CAMELNAME     => array('id', 'itemId', 'modelNameReal', 'clothingGiftAmounts', ),
        self::TYPE_COLNAME       => array(SdrBuildIdCategoriesTableMap::COL_ID, SdrBuildIdCategoriesTableMap::COL_ITEM_ID, SdrBuildIdCategoriesTableMap::COL_MODEL_NAME_REAL, SdrBuildIdCategoriesTableMap::COL_CLOTHING_GIFT_AMOUNTS, ),
        self::TYPE_FIELDNAME     => array('id', 'item_id', 'model_name_real', 'clothing_gift_amounts', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'ItemId' => 1, 'ModelNameReal' => 2, 'ClothingGiftAmounts' => 3, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'itemId' => 1, 'modelNameReal' => 2, 'clothingGiftAmounts' => 3, ),
        self::TYPE_COLNAME       => array(SdrBuildIdCategoriesTableMap::COL_ID => 0, SdrBuildIdCategoriesTableMap::COL_ITEM_ID => 1, SdrBuildIdCategoriesTableMap::COL_MODEL_NAME_REAL => 2, SdrBuildIdCategoriesTableMap::COL_CLOTHING_GIFT_AMOUNTS => 3, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'item_id' => 1, 'model_name_real' => 2, 'clothing_gift_amounts' => 3, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, )
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
        $this->setName('SDR_build_id_categories');
        $this->setPhpName('SdrBuildIdCategories');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SdrBuildIdCategories');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('item_id', 'ItemId', 'INTEGER', true, null, null);
        $this->addColumn('model_name_real', 'ModelNameReal', 'VARCHAR', false, 45, null);
        $this->addColumn('clothing_gift_amounts', 'ClothingGiftAmounts', 'DECIMAL', true, 12, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SdrBuildIdCategoriesTableMap::CLASS_DEFAULT : SdrBuildIdCategoriesTableMap::OM_CLASS;
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
     * @return array           (SdrBuildIdCategories object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SdrBuildIdCategoriesTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SdrBuildIdCategoriesTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SdrBuildIdCategoriesTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SdrBuildIdCategoriesTableMap::OM_CLASS;
            /** @var SdrBuildIdCategories $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SdrBuildIdCategoriesTableMap::addInstanceToPool($obj, $key);
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
            $key = SdrBuildIdCategoriesTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SdrBuildIdCategoriesTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SdrBuildIdCategories $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SdrBuildIdCategoriesTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SdrBuildIdCategoriesTableMap::COL_ID);
            $criteria->addSelectColumn(SdrBuildIdCategoriesTableMap::COL_ITEM_ID);
            $criteria->addSelectColumn(SdrBuildIdCategoriesTableMap::COL_MODEL_NAME_REAL);
            $criteria->addSelectColumn(SdrBuildIdCategoriesTableMap::COL_CLOTHING_GIFT_AMOUNTS);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.item_id');
            $criteria->addSelectColumn($alias . '.model_name_real');
            $criteria->addSelectColumn($alias . '.clothing_gift_amounts');
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
        return Propel::getServiceContainer()->getDatabaseMap(SdrBuildIdCategoriesTableMap::DATABASE_NAME)->getTable(SdrBuildIdCategoriesTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SdrBuildIdCategoriesTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SdrBuildIdCategoriesTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SdrBuildIdCategoriesTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SdrBuildIdCategories or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SdrBuildIdCategories object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SdrBuildIdCategoriesTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SdrBuildIdCategories) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SdrBuildIdCategoriesTableMap::DATABASE_NAME);
            $criteria->add(SdrBuildIdCategoriesTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = SdrBuildIdCategoriesQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SdrBuildIdCategoriesTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SdrBuildIdCategoriesTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the SDR_build_id_categories table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SdrBuildIdCategoriesQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SdrBuildIdCategories or Criteria object.
     *
     * @param mixed               $criteria Criteria or SdrBuildIdCategories object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SdrBuildIdCategoriesTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SdrBuildIdCategories object
        }

        if ($criteria->containsKey(SdrBuildIdCategoriesTableMap::COL_ID) && $criteria->keyContainsValue(SdrBuildIdCategoriesTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SdrBuildIdCategoriesTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = SdrBuildIdCategoriesQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SdrBuildIdCategoriesTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SdrBuildIdCategoriesTableMap::buildTableMap();
