<?php

namespace Map;

use \ApprovedLog;
use \ApprovedLogQuery;
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
 * This class defines the structure of the 'approved_log' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ApprovedLogTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ApprovedLogTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'approved_log';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ApprovedLog';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ApprovedLog';

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
     * the column name for the logid field
     */
    const COL_LOGID = 'approved_log.logid';

    /**
     * the column name for the ordn field
     */
    const COL_ORDN = 'approved_log.ordn';

    /**
     * the column name for the userid field
     */
    const COL_USERID = 'approved_log.userid';

    /**
     * the column name for the ordrsalesrep field
     */
    const COL_ORDRSALESREP = 'approved_log.ordrsalesrep';

    /**
     * the column name for the date field
     */
    const COL_DATE = 'approved_log.date';

    /**
     * the column name for the approved field
     */
    const COL_APPROVED = 'approved_log.approved';

    /**
     * the column name for the reason field
     */
    const COL_REASON = 'approved_log.reason';

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
        self::TYPE_PHPNAME       => array('Logid', 'Ordn', 'Userid', 'Ordrsalesrep', 'Date', 'Approved', 'Reason', ),
        self::TYPE_CAMELNAME     => array('logid', 'ordn', 'userid', 'ordrsalesrep', 'date', 'approved', 'reason', ),
        self::TYPE_COLNAME       => array(ApprovedLogTableMap::COL_LOGID, ApprovedLogTableMap::COL_ORDN, ApprovedLogTableMap::COL_USERID, ApprovedLogTableMap::COL_ORDRSALESREP, ApprovedLogTableMap::COL_DATE, ApprovedLogTableMap::COL_APPROVED, ApprovedLogTableMap::COL_REASON, ),
        self::TYPE_FIELDNAME     => array('logid', 'ordn', 'userid', 'ordrsalesrep', 'date', 'approved', 'reason', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Logid' => 0, 'Ordn' => 1, 'Userid' => 2, 'Ordrsalesrep' => 3, 'Date' => 4, 'Approved' => 5, 'Reason' => 6, ),
        self::TYPE_CAMELNAME     => array('logid' => 0, 'ordn' => 1, 'userid' => 2, 'ordrsalesrep' => 3, 'date' => 4, 'approved' => 5, 'reason' => 6, ),
        self::TYPE_COLNAME       => array(ApprovedLogTableMap::COL_LOGID => 0, ApprovedLogTableMap::COL_ORDN => 1, ApprovedLogTableMap::COL_USERID => 2, ApprovedLogTableMap::COL_ORDRSALESREP => 3, ApprovedLogTableMap::COL_DATE => 4, ApprovedLogTableMap::COL_APPROVED => 5, ApprovedLogTableMap::COL_REASON => 6, ),
        self::TYPE_FIELDNAME     => array('logid' => 0, 'ordn' => 1, 'userid' => 2, 'ordrsalesrep' => 3, 'date' => 4, 'approved' => 5, 'reason' => 6, ),
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
        $this->setName('approved_log');
        $this->setPhpName('ApprovedLog');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ApprovedLog');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('logid', 'Logid', 'INTEGER', true, null, null);
        $this->addColumn('ordn', 'Ordn', 'VARCHAR', false, 45, null);
        $this->addColumn('userid', 'Userid', 'VARCHAR', false, 45, null);
        $this->addColumn('ordrsalesrep', 'Ordrsalesrep', 'VARCHAR', false, 45, null);
        $this->addColumn('date', 'Date', 'TIMESTAMP', false, null, null);
        $this->addColumn('approved', 'Approved', 'VARCHAR', false, 10, null);
        $this->addColumn('reason', 'Reason', 'LONGVARCHAR', false, null, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Logid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Logid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Logid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Logid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Logid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Logid', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Logid', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ApprovedLogTableMap::CLASS_DEFAULT : ApprovedLogTableMap::OM_CLASS;
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
     * @return array           (ApprovedLog object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ApprovedLogTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ApprovedLogTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ApprovedLogTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ApprovedLogTableMap::OM_CLASS;
            /** @var ApprovedLog $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ApprovedLogTableMap::addInstanceToPool($obj, $key);
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
            $key = ApprovedLogTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ApprovedLogTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ApprovedLog $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ApprovedLogTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ApprovedLogTableMap::COL_LOGID);
            $criteria->addSelectColumn(ApprovedLogTableMap::COL_ORDN);
            $criteria->addSelectColumn(ApprovedLogTableMap::COL_USERID);
            $criteria->addSelectColumn(ApprovedLogTableMap::COL_ORDRSALESREP);
            $criteria->addSelectColumn(ApprovedLogTableMap::COL_DATE);
            $criteria->addSelectColumn(ApprovedLogTableMap::COL_APPROVED);
            $criteria->addSelectColumn(ApprovedLogTableMap::COL_REASON);
        } else {
            $criteria->addSelectColumn($alias . '.logid');
            $criteria->addSelectColumn($alias . '.ordn');
            $criteria->addSelectColumn($alias . '.userid');
            $criteria->addSelectColumn($alias . '.ordrsalesrep');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.approved');
            $criteria->addSelectColumn($alias . '.reason');
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
        return Propel::getServiceContainer()->getDatabaseMap(ApprovedLogTableMap::DATABASE_NAME)->getTable(ApprovedLogTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ApprovedLogTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ApprovedLogTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ApprovedLogTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ApprovedLog or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ApprovedLog object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ApprovedLogTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ApprovedLog) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ApprovedLogTableMap::DATABASE_NAME);
            $criteria->add(ApprovedLogTableMap::COL_LOGID, (array) $values, Criteria::IN);
        }

        $query = ApprovedLogQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ApprovedLogTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ApprovedLogTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the approved_log table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ApprovedLogQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ApprovedLog or Criteria object.
     *
     * @param mixed               $criteria Criteria or ApprovedLog object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApprovedLogTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ApprovedLog object
        }

        if ($criteria->containsKey(ApprovedLogTableMap::COL_LOGID) && $criteria->keyContainsValue(ApprovedLogTableMap::COL_LOGID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ApprovedLogTableMap::COL_LOGID.')');
        }


        // Set the correct dbName
        $query = ApprovedLogQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ApprovedLogTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ApprovedLogTableMap::buildTableMap();
