<?php

namespace Map;

use \Optns;
use \OptnsQuery;
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
 * This class defines the structure of the 'OPTNS' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class OptnsTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.OptnsTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'OPTNS';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Optns';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Optns';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 17;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 17;

    /**
     * the column name for the optn_system field
     */
    const COL_OPTN_SYSTEM = 'OPTNS.optn_system';

    /**
     * the column name for the optn_code field
     */
    const COL_OPTN_CODE = 'OPTNS.optn_code';

    /**
     * the column name for the optn_recnbr field
     */
    const COL_OPTN_RECNBR = 'OPTNS.optn_recnbr';

    /**
     * the column name for the optn_id field
     */
    const COL_OPTN_ID = 'OPTNS.optn_id';

    /**
     * the column name for the optn_iddesc field
     */
    const COL_OPTN_IDDESC = 'OPTNS.optn_iddesc';

    /**
     * the column name for the initItemNbr field
     */
    const COL_INITITEMNBR = 'OPTNS.initItemNbr';

    /**
     * the column name for the arcuCustId field
     */
    const COL_ARCUCUSTID = 'OPTNS.arcuCustId';

    /**
     * the column name for the arcuShipId field
     */
    const COL_ARCUSHIPID = 'OPTNS.arcuShipId';

    /**
     * the column name for the optn_code_desc field
     */
    const COL_OPTN_CODE_DESC = 'OPTNS.optn_code_desc';

    /**
     * the column name for the optn_validate field
     */
    const COL_OPTN_VALIDATE = 'OPTNS.optn_validate';

    /**
     * the column name for the optn_force field
     */
    const COL_OPTN_FORCE = 'OPTNS.optn_force';

    /**
     * the column name for the optn_note_code field
     */
    const COL_OPTN_NOTE_CODE = 'OPTNS.optn_note_code';

    /**
     * the column name for the optn_list_seq field
     */
    const COL_OPTN_LIST_SEQ = 'OPTNS.optn_list_seq';

    /**
     * the column name for the optn_file_name field
     */
    const COL_OPTN_FILE_NAME = 'OPTNS.optn_file_name';

    /**
     * the column name for the optn_adv_search field
     */
    const COL_OPTN_ADV_SEARCH = 'OPTNS.optn_adv_search';

    /**
     * the column name for the optn_field_type field
     */
    const COL_OPTN_FIELD_TYPE = 'OPTNS.optn_field_type';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'OPTNS.dummy';

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
        self::TYPE_PHPNAME       => array('OptnSystem', 'OptnCode', 'OptnRecnbr', 'OptnId', 'OptnIddesc', 'Inititemnbr', 'Arcucustid', 'Arcushipid', 'OptnCodeDesc', 'OptnValidate', 'OptnForce', 'OptnNoteCode', 'OptnListSeq', 'OptnFileName', 'OptnAdvSearch', 'OptnFieldType', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('optnSystem', 'optnCode', 'optnRecnbr', 'optnId', 'optnIddesc', 'inititemnbr', 'arcucustid', 'arcushipid', 'optnCodeDesc', 'optnValidate', 'optnForce', 'optnNoteCode', 'optnListSeq', 'optnFileName', 'optnAdvSearch', 'optnFieldType', 'dummy', ),
        self::TYPE_COLNAME       => array(OptnsTableMap::COL_OPTN_SYSTEM, OptnsTableMap::COL_OPTN_CODE, OptnsTableMap::COL_OPTN_RECNBR, OptnsTableMap::COL_OPTN_ID, OptnsTableMap::COL_OPTN_IDDESC, OptnsTableMap::COL_INITITEMNBR, OptnsTableMap::COL_ARCUCUSTID, OptnsTableMap::COL_ARCUSHIPID, OptnsTableMap::COL_OPTN_CODE_DESC, OptnsTableMap::COL_OPTN_VALIDATE, OptnsTableMap::COL_OPTN_FORCE, OptnsTableMap::COL_OPTN_NOTE_CODE, OptnsTableMap::COL_OPTN_LIST_SEQ, OptnsTableMap::COL_OPTN_FILE_NAME, OptnsTableMap::COL_OPTN_ADV_SEARCH, OptnsTableMap::COL_OPTN_FIELD_TYPE, OptnsTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('optn_system', 'optn_code', 'optn_recnbr', 'optn_id', 'optn_iddesc', 'initItemNbr', 'arcuCustId', 'arcuShipId', 'optn_code_desc', 'optn_validate', 'optn_force', 'optn_note_code', 'optn_list_seq', 'optn_file_name', 'optn_adv_search', 'optn_field_type', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('OptnSystem' => 0, 'OptnCode' => 1, 'OptnRecnbr' => 2, 'OptnId' => 3, 'OptnIddesc' => 4, 'Inititemnbr' => 5, 'Arcucustid' => 6, 'Arcushipid' => 7, 'OptnCodeDesc' => 8, 'OptnValidate' => 9, 'OptnForce' => 10, 'OptnNoteCode' => 11, 'OptnListSeq' => 12, 'OptnFileName' => 13, 'OptnAdvSearch' => 14, 'OptnFieldType' => 15, 'Dummy' => 16, ),
        self::TYPE_CAMELNAME     => array('optnSystem' => 0, 'optnCode' => 1, 'optnRecnbr' => 2, 'optnId' => 3, 'optnIddesc' => 4, 'inititemnbr' => 5, 'arcucustid' => 6, 'arcushipid' => 7, 'optnCodeDesc' => 8, 'optnValidate' => 9, 'optnForce' => 10, 'optnNoteCode' => 11, 'optnListSeq' => 12, 'optnFileName' => 13, 'optnAdvSearch' => 14, 'optnFieldType' => 15, 'dummy' => 16, ),
        self::TYPE_COLNAME       => array(OptnsTableMap::COL_OPTN_SYSTEM => 0, OptnsTableMap::COL_OPTN_CODE => 1, OptnsTableMap::COL_OPTN_RECNBR => 2, OptnsTableMap::COL_OPTN_ID => 3, OptnsTableMap::COL_OPTN_IDDESC => 4, OptnsTableMap::COL_INITITEMNBR => 5, OptnsTableMap::COL_ARCUCUSTID => 6, OptnsTableMap::COL_ARCUSHIPID => 7, OptnsTableMap::COL_OPTN_CODE_DESC => 8, OptnsTableMap::COL_OPTN_VALIDATE => 9, OptnsTableMap::COL_OPTN_FORCE => 10, OptnsTableMap::COL_OPTN_NOTE_CODE => 11, OptnsTableMap::COL_OPTN_LIST_SEQ => 12, OptnsTableMap::COL_OPTN_FILE_NAME => 13, OptnsTableMap::COL_OPTN_ADV_SEARCH => 14, OptnsTableMap::COL_OPTN_FIELD_TYPE => 15, OptnsTableMap::COL_DUMMY => 16, ),
        self::TYPE_FIELDNAME     => array('optn_system' => 0, 'optn_code' => 1, 'optn_recnbr' => 2, 'optn_id' => 3, 'optn_iddesc' => 4, 'initItemNbr' => 5, 'arcuCustId' => 6, 'arcuShipId' => 7, 'optn_code_desc' => 8, 'optn_validate' => 9, 'optn_force' => 10, 'optn_note_code' => 11, 'optn_list_seq' => 12, 'optn_file_name' => 13, 'optn_adv_search' => 14, 'optn_field_type' => 15, 'dummy' => 16, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $this->setName('OPTNS');
        $this->setPhpName('Optns');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Optns');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('optn_system', 'OptnSystem', 'VARCHAR', true, 2, '');
        $this->addColumn('optn_code', 'OptnCode', 'VARCHAR', true, 8, null);
        $this->addPrimaryKey('optn_recnbr', 'OptnRecnbr', 'INTEGER', true, 8, 0);
        $this->addPrimaryKey('optn_id', 'OptnId', 'VARCHAR', true, 30, '');
        $this->addColumn('optn_iddesc', 'OptnIddesc', 'VARCHAR', false, 30, null);
        $this->addColumn('initItemNbr', 'Inititemnbr', 'VARCHAR', false, 30, null);
        $this->addColumn('arcuCustId', 'Arcucustid', 'VARCHAR', false, 6, null);
        $this->addColumn('arcuShipId', 'Arcushipid', 'VARCHAR', false, 6, null);
        $this->addColumn('optn_code_desc', 'OptnCodeDesc', 'VARCHAR', false, 20, null);
        $this->addColumn('optn_validate', 'OptnValidate', 'VARCHAR', false, 1, null);
        $this->addColumn('optn_force', 'OptnForce', 'VARCHAR', false, 1, null);
        $this->addColumn('optn_note_code', 'OptnNoteCode', 'VARCHAR', false, 4, null);
        $this->addColumn('optn_list_seq', 'OptnListSeq', 'INTEGER', false, 1, null);
        $this->addColumn('optn_file_name', 'OptnFileName', 'VARCHAR', false, 1, null);
        $this->addColumn('optn_adv_search', 'OptnAdvSearch', 'VARCHAR', false, 1, null);
        $this->addColumn('optn_field_type', 'OptnFieldType', 'VARCHAR', false, 1, null);
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
     * @param \Optns $obj A \Optns object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getOptnSystem() || is_scalar($obj->getOptnSystem()) || is_callable([$obj->getOptnSystem(), '__toString']) ? (string) $obj->getOptnSystem() : $obj->getOptnSystem()), (null === $obj->getOptnRecnbr() || is_scalar($obj->getOptnRecnbr()) || is_callable([$obj->getOptnRecnbr(), '__toString']) ? (string) $obj->getOptnRecnbr() : $obj->getOptnRecnbr()), (null === $obj->getOptnId() || is_scalar($obj->getOptnId()) || is_callable([$obj->getOptnId(), '__toString']) ? (string) $obj->getOptnId() : $obj->getOptnId())]);
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
     * @param mixed $value A \Optns object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \Optns) {
                $key = serialize([(null === $value->getOptnSystem() || is_scalar($value->getOptnSystem()) || is_callable([$value->getOptnSystem(), '__toString']) ? (string) $value->getOptnSystem() : $value->getOptnSystem()), (null === $value->getOptnRecnbr() || is_scalar($value->getOptnRecnbr()) || is_callable([$value->getOptnRecnbr(), '__toString']) ? (string) $value->getOptnRecnbr() : $value->getOptnRecnbr()), (null === $value->getOptnId() || is_scalar($value->getOptnId()) || is_callable([$value->getOptnId(), '__toString']) ? (string) $value->getOptnId() : $value->getOptnId())]);

            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \Optns object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('OptnSystem', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('OptnRecnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('OptnId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('OptnSystem', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('OptnSystem', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('OptnSystem', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('OptnSystem', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('OptnSystem', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('OptnRecnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('OptnRecnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('OptnRecnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('OptnRecnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('OptnRecnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('OptnId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('OptnId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('OptnId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('OptnId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('OptnId', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                : self::translateFieldName('OptnSystem', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('OptnRecnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('OptnId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? OptnsTableMap::CLASS_DEFAULT : OptnsTableMap::OM_CLASS;
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
     * @return array           (Optns object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = OptnsTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = OptnsTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + OptnsTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OptnsTableMap::OM_CLASS;
            /** @var Optns $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            OptnsTableMap::addInstanceToPool($obj, $key);
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
            $key = OptnsTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = OptnsTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Optns $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OptnsTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(OptnsTableMap::COL_OPTN_SYSTEM);
            $criteria->addSelectColumn(OptnsTableMap::COL_OPTN_CODE);
            $criteria->addSelectColumn(OptnsTableMap::COL_OPTN_RECNBR);
            $criteria->addSelectColumn(OptnsTableMap::COL_OPTN_ID);
            $criteria->addSelectColumn(OptnsTableMap::COL_OPTN_IDDESC);
            $criteria->addSelectColumn(OptnsTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(OptnsTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(OptnsTableMap::COL_ARCUSHIPID);
            $criteria->addSelectColumn(OptnsTableMap::COL_OPTN_CODE_DESC);
            $criteria->addSelectColumn(OptnsTableMap::COL_OPTN_VALIDATE);
            $criteria->addSelectColumn(OptnsTableMap::COL_OPTN_FORCE);
            $criteria->addSelectColumn(OptnsTableMap::COL_OPTN_NOTE_CODE);
            $criteria->addSelectColumn(OptnsTableMap::COL_OPTN_LIST_SEQ);
            $criteria->addSelectColumn(OptnsTableMap::COL_OPTN_FILE_NAME);
            $criteria->addSelectColumn(OptnsTableMap::COL_OPTN_ADV_SEARCH);
            $criteria->addSelectColumn(OptnsTableMap::COL_OPTN_FIELD_TYPE);
            $criteria->addSelectColumn(OptnsTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.optn_system');
            $criteria->addSelectColumn($alias . '.optn_code');
            $criteria->addSelectColumn($alias . '.optn_recnbr');
            $criteria->addSelectColumn($alias . '.optn_id');
            $criteria->addSelectColumn($alias . '.optn_iddesc');
            $criteria->addSelectColumn($alias . '.initItemNbr');
            $criteria->addSelectColumn($alias . '.arcuCustId');
            $criteria->addSelectColumn($alias . '.arcuShipId');
            $criteria->addSelectColumn($alias . '.optn_code_desc');
            $criteria->addSelectColumn($alias . '.optn_validate');
            $criteria->addSelectColumn($alias . '.optn_force');
            $criteria->addSelectColumn($alias . '.optn_note_code');
            $criteria->addSelectColumn($alias . '.optn_list_seq');
            $criteria->addSelectColumn($alias . '.optn_file_name');
            $criteria->addSelectColumn($alias . '.optn_adv_search');
            $criteria->addSelectColumn($alias . '.optn_field_type');
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
        return Propel::getServiceContainer()->getDatabaseMap(OptnsTableMap::DATABASE_NAME)->getTable(OptnsTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(OptnsTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(OptnsTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new OptnsTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Optns or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Optns object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(OptnsTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Optns) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OptnsTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(OptnsTableMap::COL_OPTN_SYSTEM, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(OptnsTableMap::COL_OPTN_RECNBR, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(OptnsTableMap::COL_OPTN_ID, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        $query = OptnsQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            OptnsTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                OptnsTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the OPTNS table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return OptnsQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Optns or Criteria object.
     *
     * @param mixed               $criteria Criteria or Optns object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(OptnsTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Optns object
        }


        // Set the correct dbName
        $query = OptnsQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // OptnsTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
OptnsTableMap::buildTableMap();
