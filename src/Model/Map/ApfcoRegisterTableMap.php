<?php

namespace Map;

use \ApfcoRegister;
use \ApfcoRegisterQuery;
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
 * This class defines the structure of the 'apfco_register' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ApfcoRegisterTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ApfcoRegisterTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'apfco_register';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ApfcoRegister';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ApfcoRegister';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 7;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 7;

    /**
     * the column name for the id field
     */
    const COL_ID = 'apfco_register.id';

    /**
     * the column name for the date field
     */
    const COL_DATE = 'apfco_register.date';

    /**
     * the column name for the userid field
     */
    const COL_USERID = 'apfco_register.userid';

    /**
     * the column name for the serial field
     */
    const COL_SERIAL = 'apfco_register.serial';

    /**
     * the column name for the itemid field
     */
    const COL_ITEMID = 'apfco_register.itemid';

    /**
     * the column name for the error field
     */
    const COL_ERROR = 'apfco_register.error';

    /**
     * the column name for the error_message field
     */
    const COL_ERROR_MESSAGE = 'apfco_register.error_message';

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
        self::TYPE_PHPNAME       => array('Id', 'Date', 'Userid', 'Serial', 'Itemid', 'Error', 'ErrorMessage', ),
        self::TYPE_CAMELNAME     => array('id', 'date', 'userid', 'serial', 'itemid', 'error', 'errorMessage', ),
        self::TYPE_COLNAME       => array(ApfcoRegisterTableMap::COL_ID, ApfcoRegisterTableMap::COL_DATE, ApfcoRegisterTableMap::COL_USERID, ApfcoRegisterTableMap::COL_SERIAL, ApfcoRegisterTableMap::COL_ITEMID, ApfcoRegisterTableMap::COL_ERROR, ApfcoRegisterTableMap::COL_ERROR_MESSAGE, ),
        self::TYPE_FIELDNAME     => array('id', 'date', 'userid', 'serial', 'itemid', 'error', 'error_message', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Date' => 1, 'Userid' => 2, 'Serial' => 3, 'Itemid' => 4, 'Error' => 5, 'ErrorMessage' => 6, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'date' => 1, 'userid' => 2, 'serial' => 3, 'itemid' => 4, 'error' => 5, 'errorMessage' => 6, ),
        self::TYPE_COLNAME       => array(ApfcoRegisterTableMap::COL_ID => 0, ApfcoRegisterTableMap::COL_DATE => 1, ApfcoRegisterTableMap::COL_USERID => 2, ApfcoRegisterTableMap::COL_SERIAL => 3, ApfcoRegisterTableMap::COL_ITEMID => 4, ApfcoRegisterTableMap::COL_ERROR => 5, ApfcoRegisterTableMap::COL_ERROR_MESSAGE => 6, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'date' => 1, 'userid' => 2, 'serial' => 3, 'itemid' => 4, 'error' => 5, 'error_message' => 6, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
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
        $this->setName('apfco_register');
        $this->setPhpName('ApfcoRegister');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ApfcoRegister');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('date', 'Date', 'TIMESTAMP', false, null, null);
        $this->addColumn('userid', 'Userid', 'VARCHAR', false, 45, null);
        $this->addColumn('serial', 'Serial', 'VARCHAR', false, 45, null);
        $this->addColumn('itemid', 'Itemid', 'VARCHAR', false, 45, null);
        $this->addColumn('error', 'Error', 'VARCHAR', false, 45, null);
        $this->addColumn('error_message', 'ErrorMessage', 'LONGVARCHAR', false, null, null);
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
        return $withPrefix ? ApfcoRegisterTableMap::CLASS_DEFAULT : ApfcoRegisterTableMap::OM_CLASS;
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
     * @return array           (ApfcoRegister object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ApfcoRegisterTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ApfcoRegisterTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ApfcoRegisterTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ApfcoRegisterTableMap::OM_CLASS;
            /** @var ApfcoRegister $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ApfcoRegisterTableMap::addInstanceToPool($obj, $key);
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
            $key = ApfcoRegisterTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ApfcoRegisterTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ApfcoRegister $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ApfcoRegisterTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ApfcoRegisterTableMap::COL_ID);
            $criteria->addSelectColumn(ApfcoRegisterTableMap::COL_DATE);
            $criteria->addSelectColumn(ApfcoRegisterTableMap::COL_USERID);
            $criteria->addSelectColumn(ApfcoRegisterTableMap::COL_SERIAL);
            $criteria->addSelectColumn(ApfcoRegisterTableMap::COL_ITEMID);
            $criteria->addSelectColumn(ApfcoRegisterTableMap::COL_ERROR);
            $criteria->addSelectColumn(ApfcoRegisterTableMap::COL_ERROR_MESSAGE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.userid');
            $criteria->addSelectColumn($alias . '.serial');
            $criteria->addSelectColumn($alias . '.itemid');
            $criteria->addSelectColumn($alias . '.error');
            $criteria->addSelectColumn($alias . '.error_message');
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
        return Propel::getServiceContainer()->getDatabaseMap(ApfcoRegisterTableMap::DATABASE_NAME)->getTable(ApfcoRegisterTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ApfcoRegisterTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ApfcoRegisterTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ApfcoRegisterTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ApfcoRegister or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ApfcoRegister object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ApfcoRegisterTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ApfcoRegister) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ApfcoRegisterTableMap::DATABASE_NAME);
            $criteria->add(ApfcoRegisterTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = ApfcoRegisterQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ApfcoRegisterTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ApfcoRegisterTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the apfco_register table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ApfcoRegisterQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ApfcoRegister or Criteria object.
     *
     * @param mixed               $criteria Criteria or ApfcoRegister object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApfcoRegisterTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ApfcoRegister object
        }

        if ($criteria->containsKey(ApfcoRegisterTableMap::COL_ID) && $criteria->keyContainsValue(ApfcoRegisterTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ApfcoRegisterTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = ApfcoRegisterQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ApfcoRegisterTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ApfcoRegisterTableMap::buildTableMap();
