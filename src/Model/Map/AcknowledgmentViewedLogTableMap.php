<?php

namespace Map;

use \AcknowledgmentViewedLog;
use \AcknowledgmentViewedLogQuery;
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
 * This class defines the structure of the 'acknowledgment_viewed_log' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class AcknowledgmentViewedLogTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.AcknowledgmentViewedLogTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'acknowledgment_viewed_log';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\AcknowledgmentViewedLog';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'AcknowledgmentViewedLog';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 6;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 6;

    /**
     * the column name for the logid field
     */
    const COL_LOGID = 'acknowledgment_viewed_log.logid';

    /**
     * the column name for the ordn field
     */
    const COL_ORDN = 'acknowledgment_viewed_log.ordn';

    /**
     * the column name for the userid field
     */
    const COL_USERID = 'acknowledgment_viewed_log.userid';

    /**
     * the column name for the custid field
     */
    const COL_CUSTID = 'acknowledgment_viewed_log.custid';

    /**
     * the column name for the date field
     */
    const COL_DATE = 'acknowledgment_viewed_log.date';

    /**
     * the column name for the docviewed field
     */
    const COL_DOCVIEWED = 'acknowledgment_viewed_log.docviewed';

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
        self::TYPE_PHPNAME       => array('Logid', 'Ordn', 'Userid', 'Custid', 'Date', 'Docviewed', ),
        self::TYPE_CAMELNAME     => array('logid', 'ordn', 'userid', 'custid', 'date', 'docviewed', ),
        self::TYPE_COLNAME       => array(AcknowledgmentViewedLogTableMap::COL_LOGID, AcknowledgmentViewedLogTableMap::COL_ORDN, AcknowledgmentViewedLogTableMap::COL_USERID, AcknowledgmentViewedLogTableMap::COL_CUSTID, AcknowledgmentViewedLogTableMap::COL_DATE, AcknowledgmentViewedLogTableMap::COL_DOCVIEWED, ),
        self::TYPE_FIELDNAME     => array('logid', 'ordn', 'userid', 'custid', 'date', 'docviewed', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Logid' => 0, 'Ordn' => 1, 'Userid' => 2, 'Custid' => 3, 'Date' => 4, 'Docviewed' => 5, ),
        self::TYPE_CAMELNAME     => array('logid' => 0, 'ordn' => 1, 'userid' => 2, 'custid' => 3, 'date' => 4, 'docviewed' => 5, ),
        self::TYPE_COLNAME       => array(AcknowledgmentViewedLogTableMap::COL_LOGID => 0, AcknowledgmentViewedLogTableMap::COL_ORDN => 1, AcknowledgmentViewedLogTableMap::COL_USERID => 2, AcknowledgmentViewedLogTableMap::COL_CUSTID => 3, AcknowledgmentViewedLogTableMap::COL_DATE => 4, AcknowledgmentViewedLogTableMap::COL_DOCVIEWED => 5, ),
        self::TYPE_FIELDNAME     => array('logid' => 0, 'ordn' => 1, 'userid' => 2, 'custid' => 3, 'date' => 4, 'docviewed' => 5, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
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
        $this->setName('acknowledgment_viewed_log');
        $this->setPhpName('AcknowledgmentViewedLog');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\AcknowledgmentViewedLog');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('logid', 'Logid', 'INTEGER', true, null, null);
        $this->addColumn('ordn', 'Ordn', 'VARCHAR', false, 45, null);
        $this->addColumn('userid', 'Userid', 'VARCHAR', false, 45, null);
        $this->addColumn('custid', 'Custid', 'VARCHAR', false, 45, null);
        $this->addColumn('date', 'Date', 'TIMESTAMP', false, null, null);
        $this->addColumn('docviewed', 'Docviewed', 'VARCHAR', false, 70, null);
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
        return $withPrefix ? AcknowledgmentViewedLogTableMap::CLASS_DEFAULT : AcknowledgmentViewedLogTableMap::OM_CLASS;
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
     * @return array           (AcknowledgmentViewedLog object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = AcknowledgmentViewedLogTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = AcknowledgmentViewedLogTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + AcknowledgmentViewedLogTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = AcknowledgmentViewedLogTableMap::OM_CLASS;
            /** @var AcknowledgmentViewedLog $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            AcknowledgmentViewedLogTableMap::addInstanceToPool($obj, $key);
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
            $key = AcknowledgmentViewedLogTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = AcknowledgmentViewedLogTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var AcknowledgmentViewedLog $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                AcknowledgmentViewedLogTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(AcknowledgmentViewedLogTableMap::COL_LOGID);
            $criteria->addSelectColumn(AcknowledgmentViewedLogTableMap::COL_ORDN);
            $criteria->addSelectColumn(AcknowledgmentViewedLogTableMap::COL_USERID);
            $criteria->addSelectColumn(AcknowledgmentViewedLogTableMap::COL_CUSTID);
            $criteria->addSelectColumn(AcknowledgmentViewedLogTableMap::COL_DATE);
            $criteria->addSelectColumn(AcknowledgmentViewedLogTableMap::COL_DOCVIEWED);
        } else {
            $criteria->addSelectColumn($alias . '.logid');
            $criteria->addSelectColumn($alias . '.ordn');
            $criteria->addSelectColumn($alias . '.userid');
            $criteria->addSelectColumn($alias . '.custid');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.docviewed');
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
        return Propel::getServiceContainer()->getDatabaseMap(AcknowledgmentViewedLogTableMap::DATABASE_NAME)->getTable(AcknowledgmentViewedLogTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(AcknowledgmentViewedLogTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(AcknowledgmentViewedLogTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new AcknowledgmentViewedLogTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a AcknowledgmentViewedLog or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or AcknowledgmentViewedLog object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(AcknowledgmentViewedLogTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \AcknowledgmentViewedLog) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(AcknowledgmentViewedLogTableMap::DATABASE_NAME);
            $criteria->add(AcknowledgmentViewedLogTableMap::COL_LOGID, (array) $values, Criteria::IN);
        }

        $query = AcknowledgmentViewedLogQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            AcknowledgmentViewedLogTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                AcknowledgmentViewedLogTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the acknowledgment_viewed_log table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return AcknowledgmentViewedLogQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a AcknowledgmentViewedLog or Criteria object.
     *
     * @param mixed               $criteria Criteria or AcknowledgmentViewedLog object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(AcknowledgmentViewedLogTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from AcknowledgmentViewedLog object
        }

        if ($criteria->containsKey(AcknowledgmentViewedLogTableMap::COL_LOGID) && $criteria->keyContainsValue(AcknowledgmentViewedLogTableMap::COL_LOGID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.AcknowledgmentViewedLogTableMap::COL_LOGID.')');
        }


        // Set the correct dbName
        $query = AcknowledgmentViewedLogQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // AcknowledgmentViewedLogTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
AcknowledgmentViewedLogTableMap::buildTableMap();
