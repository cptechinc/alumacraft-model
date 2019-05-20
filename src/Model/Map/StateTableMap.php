<?php

namespace Map;

use \State;
use \StateQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'state' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class StateTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.StateTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'state';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\State';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'State';

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
     * the column name for the id field
     */
    const COL_ID = 'state.id';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'state.name';

    /**
     * the column name for the abbreviation field
     */
    const COL_ABBREVIATION = 'state.abbreviation';

    /**
     * the column name for the country field
     */
    const COL_COUNTRY = 'state.country';

    /**
     * the column name for the type field
     */
    const COL_TYPE = 'state.type';

    /**
     * the column name for the assoc_press field
     */
    const COL_ASSOC_PRESS = 'state.assoc_press';

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
        self::TYPE_PHPNAME       => array('Id', 'Name', 'Abbreviation', 'Country', 'Type', 'AssocPress', ),
        self::TYPE_CAMELNAME     => array('id', 'name', 'abbreviation', 'country', 'type', 'assocPress', ),
        self::TYPE_COLNAME       => array(StateTableMap::COL_ID, StateTableMap::COL_NAME, StateTableMap::COL_ABBREVIATION, StateTableMap::COL_COUNTRY, StateTableMap::COL_TYPE, StateTableMap::COL_ASSOC_PRESS, ),
        self::TYPE_FIELDNAME     => array('id', 'name', 'abbreviation', 'country', 'type', 'assoc_press', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Name' => 1, 'Abbreviation' => 2, 'Country' => 3, 'Type' => 4, 'AssocPress' => 5, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'name' => 1, 'abbreviation' => 2, 'country' => 3, 'type' => 4, 'assocPress' => 5, ),
        self::TYPE_COLNAME       => array(StateTableMap::COL_ID => 0, StateTableMap::COL_NAME => 1, StateTableMap::COL_ABBREVIATION => 2, StateTableMap::COL_COUNTRY => 3, StateTableMap::COL_TYPE => 4, StateTableMap::COL_ASSOC_PRESS => 5, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'name' => 1, 'abbreviation' => 2, 'country' => 3, 'type' => 4, 'assoc_press' => 5, ),
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
        $this->setName('state');
        $this->setPhpName('State');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\State');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('id', 'Id', 'INTEGER', false, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 255, null);
        $this->addColumn('abbreviation', 'Abbreviation', 'VARCHAR', false, 255, null);
        $this->addColumn('country', 'Country', 'VARCHAR', false, 255, null);
        $this->addColumn('type', 'Type', 'VARCHAR', false, 255, null);
        $this->addColumn('assoc_press', 'AssocPress', 'VARCHAR', false, 255, null);
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
        return null;
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
        return '';
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
        return $withPrefix ? StateTableMap::CLASS_DEFAULT : StateTableMap::OM_CLASS;
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
     * @return array           (State object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = StateTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = StateTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + StateTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = StateTableMap::OM_CLASS;
            /** @var State $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            StateTableMap::addInstanceToPool($obj, $key);
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
            $key = StateTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = StateTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var State $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                StateTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(StateTableMap::COL_ID);
            $criteria->addSelectColumn(StateTableMap::COL_NAME);
            $criteria->addSelectColumn(StateTableMap::COL_ABBREVIATION);
            $criteria->addSelectColumn(StateTableMap::COL_COUNTRY);
            $criteria->addSelectColumn(StateTableMap::COL_TYPE);
            $criteria->addSelectColumn(StateTableMap::COL_ASSOC_PRESS);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.abbreviation');
            $criteria->addSelectColumn($alias . '.country');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.assoc_press');
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
        return Propel::getServiceContainer()->getDatabaseMap(StateTableMap::DATABASE_NAME)->getTable(StateTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(StateTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(StateTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new StateTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a State or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or State object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(StateTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \State) { // it's a model object
            // create criteria based on pk value
            $criteria = $values->buildCriteria();
        } else { // it's a primary key, or an array of pks
            throw new LogicException('The State object has no primary key');
        }

        $query = StateQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            StateTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                StateTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the state table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return StateQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a State or Criteria object.
     *
     * @param mixed               $criteria Criteria or State object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(StateTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from State object
        }


        // Set the correct dbName
        $query = StateQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // StateTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
StateTableMap::buildTableMap();
