<?php

namespace Map;

use \WarrantyRegister;
use \WarrantyRegisterQuery;
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
 * This class defines the structure of the 'warranty_register' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class WarrantyRegisterTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.WarrantyRegisterTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'warranty_register';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\WarrantyRegister';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'WarrantyRegister';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 24;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 24;

    /**
     * the column name for the Date field
     */
    const COL_DATE = 'warranty_register.Date';

    /**
     * the column name for the Time field
     */
    const COL_TIME = 'warranty_register.Time';

    /**
     * the column name for the Recnbr field
     */
    const COL_RECNBR = 'warranty_register.Recnbr';

    /**
     * the column name for the SerialNbr field
     */
    const COL_SERIALNBR = 'warranty_register.SerialNbr';

    /**
     * the column name for the ItemNbr field
     */
    const COL_ITEMNBR = 'warranty_register.ItemNbr';

    /**
     * the column name for the InvoiceNbr field
     */
    const COL_INVOICENBR = 'warranty_register.InvoiceNbr';

    /**
     * the column name for the InvoiceDate field
     */
    const COL_INVOICEDATE = 'warranty_register.InvoiceDate';

    /**
     * the column name for the RegisterMotor field
     */
    const COL_REGISTERMOTOR = 'warranty_register.RegisterMotor';

    /**
     * the column name for the FirstName field
     */
    const COL_FIRSTNAME = 'warranty_register.FirstName';

    /**
     * the column name for the MiddleName field
     */
    const COL_MIDDLENAME = 'warranty_register.MiddleName';

    /**
     * the column name for the LastName field
     */
    const COL_LASTNAME = 'warranty_register.LastName';

    /**
     * the column name for the Adr1 field
     */
    const COL_ADR1 = 'warranty_register.Adr1';

    /**
     * the column name for the Adr2 field
     */
    const COL_ADR2 = 'warranty_register.Adr2';

    /**
     * the column name for the City field
     */
    const COL_CITY = 'warranty_register.City';

    /**
     * the column name for the State field
     */
    const COL_STATE = 'warranty_register.State';

    /**
     * the column name for the Zip field
     */
    const COL_ZIP = 'warranty_register.Zip';

    /**
     * the column name for the Email field
     */
    const COL_EMAIL = 'warranty_register.Email';

    /**
     * the column name for the Phone field
     */
    const COL_PHONE = 'warranty_register.Phone';

    /**
     * the column name for the SaleDate field
     */
    const COL_SALEDATE = 'warranty_register.SaleDate';

    /**
     * the column name for the EngSerialNbr field
     */
    const COL_ENGSERIALNBR = 'warranty_register.EngSerialNbr';

    /**
     * the column name for the EngHorsePower field
     */
    const COL_ENGHORSEPOWER = 'warranty_register.EngHorsePower';

    /**
     * the column name for the EngModelYear field
     */
    const COL_ENGMODELYEAR = 'warranty_register.EngModelYear';

    /**
     * the column name for the EngDesc field
     */
    const COL_ENGDESC = 'warranty_register.EngDesc';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'warranty_register.dummy';

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
        self::TYPE_PHPNAME       => array('Date', 'Time', 'Recnbr', 'Serialnbr', 'Itemnbr', 'Invoicenbr', 'Invoicedate', 'Registermotor', 'Firstname', 'Middlename', 'Lastname', 'Adr1', 'Adr2', 'City', 'State', 'Zip', 'Email', 'Phone', 'Saledate', 'Engserialnbr', 'Enghorsepower', 'Engmodelyear', 'Engdesc', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('date', 'time', 'recnbr', 'serialnbr', 'itemnbr', 'invoicenbr', 'invoicedate', 'registermotor', 'firstname', 'middlename', 'lastname', 'adr1', 'adr2', 'city', 'state', 'zip', 'email', 'phone', 'saledate', 'engserialnbr', 'enghorsepower', 'engmodelyear', 'engdesc', 'dummy', ),
        self::TYPE_COLNAME       => array(WarrantyRegisterTableMap::COL_DATE, WarrantyRegisterTableMap::COL_TIME, WarrantyRegisterTableMap::COL_RECNBR, WarrantyRegisterTableMap::COL_SERIALNBR, WarrantyRegisterTableMap::COL_ITEMNBR, WarrantyRegisterTableMap::COL_INVOICENBR, WarrantyRegisterTableMap::COL_INVOICEDATE, WarrantyRegisterTableMap::COL_REGISTERMOTOR, WarrantyRegisterTableMap::COL_FIRSTNAME, WarrantyRegisterTableMap::COL_MIDDLENAME, WarrantyRegisterTableMap::COL_LASTNAME, WarrantyRegisterTableMap::COL_ADR1, WarrantyRegisterTableMap::COL_ADR2, WarrantyRegisterTableMap::COL_CITY, WarrantyRegisterTableMap::COL_STATE, WarrantyRegisterTableMap::COL_ZIP, WarrantyRegisterTableMap::COL_EMAIL, WarrantyRegisterTableMap::COL_PHONE, WarrantyRegisterTableMap::COL_SALEDATE, WarrantyRegisterTableMap::COL_ENGSERIALNBR, WarrantyRegisterTableMap::COL_ENGHORSEPOWER, WarrantyRegisterTableMap::COL_ENGMODELYEAR, WarrantyRegisterTableMap::COL_ENGDESC, WarrantyRegisterTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('Date', 'Time', 'Recnbr', 'SerialNbr', 'ItemNbr', 'InvoiceNbr', 'InvoiceDate', 'RegisterMotor', 'FirstName', 'MiddleName', 'LastName', 'Adr1', 'Adr2', 'City', 'State', 'Zip', 'Email', 'Phone', 'SaleDate', 'EngSerialNbr', 'EngHorsePower', 'EngModelYear', 'EngDesc', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Date' => 0, 'Time' => 1, 'Recnbr' => 2, 'Serialnbr' => 3, 'Itemnbr' => 4, 'Invoicenbr' => 5, 'Invoicedate' => 6, 'Registermotor' => 7, 'Firstname' => 8, 'Middlename' => 9, 'Lastname' => 10, 'Adr1' => 11, 'Adr2' => 12, 'City' => 13, 'State' => 14, 'Zip' => 15, 'Email' => 16, 'Phone' => 17, 'Saledate' => 18, 'Engserialnbr' => 19, 'Enghorsepower' => 20, 'Engmodelyear' => 21, 'Engdesc' => 22, 'Dummy' => 23, ),
        self::TYPE_CAMELNAME     => array('date' => 0, 'time' => 1, 'recnbr' => 2, 'serialnbr' => 3, 'itemnbr' => 4, 'invoicenbr' => 5, 'invoicedate' => 6, 'registermotor' => 7, 'firstname' => 8, 'middlename' => 9, 'lastname' => 10, 'adr1' => 11, 'adr2' => 12, 'city' => 13, 'state' => 14, 'zip' => 15, 'email' => 16, 'phone' => 17, 'saledate' => 18, 'engserialnbr' => 19, 'enghorsepower' => 20, 'engmodelyear' => 21, 'engdesc' => 22, 'dummy' => 23, ),
        self::TYPE_COLNAME       => array(WarrantyRegisterTableMap::COL_DATE => 0, WarrantyRegisterTableMap::COL_TIME => 1, WarrantyRegisterTableMap::COL_RECNBR => 2, WarrantyRegisterTableMap::COL_SERIALNBR => 3, WarrantyRegisterTableMap::COL_ITEMNBR => 4, WarrantyRegisterTableMap::COL_INVOICENBR => 5, WarrantyRegisterTableMap::COL_INVOICEDATE => 6, WarrantyRegisterTableMap::COL_REGISTERMOTOR => 7, WarrantyRegisterTableMap::COL_FIRSTNAME => 8, WarrantyRegisterTableMap::COL_MIDDLENAME => 9, WarrantyRegisterTableMap::COL_LASTNAME => 10, WarrantyRegisterTableMap::COL_ADR1 => 11, WarrantyRegisterTableMap::COL_ADR2 => 12, WarrantyRegisterTableMap::COL_CITY => 13, WarrantyRegisterTableMap::COL_STATE => 14, WarrantyRegisterTableMap::COL_ZIP => 15, WarrantyRegisterTableMap::COL_EMAIL => 16, WarrantyRegisterTableMap::COL_PHONE => 17, WarrantyRegisterTableMap::COL_SALEDATE => 18, WarrantyRegisterTableMap::COL_ENGSERIALNBR => 19, WarrantyRegisterTableMap::COL_ENGHORSEPOWER => 20, WarrantyRegisterTableMap::COL_ENGMODELYEAR => 21, WarrantyRegisterTableMap::COL_ENGDESC => 22, WarrantyRegisterTableMap::COL_DUMMY => 23, ),
        self::TYPE_FIELDNAME     => array('Date' => 0, 'Time' => 1, 'Recnbr' => 2, 'SerialNbr' => 3, 'ItemNbr' => 4, 'InvoiceNbr' => 5, 'InvoiceDate' => 6, 'RegisterMotor' => 7, 'FirstName' => 8, 'MiddleName' => 9, 'LastName' => 10, 'Adr1' => 11, 'Adr2' => 12, 'City' => 13, 'State' => 14, 'Zip' => 15, 'Email' => 16, 'Phone' => 17, 'SaleDate' => 18, 'EngSerialNbr' => 19, 'EngHorsePower' => 20, 'EngModelYear' => 21, 'EngDesc' => 22, 'dummy' => 23, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
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
        $this->setName('warranty_register');
        $this->setPhpName('WarrantyRegister');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\WarrantyRegister');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('Date', 'Date', 'INTEGER', false, 8, null);
        $this->addColumn('Time', 'Time', 'INTEGER', false, 8, null);
        $this->addColumn('Recnbr', 'Recnbr', 'INTEGER', false, 8, null);
        $this->addPrimaryKey('SerialNbr', 'Serialnbr', 'VARCHAR', true, 20, '');
        $this->addPrimaryKey('ItemNbr', 'Itemnbr', 'VARCHAR', true, 30, '');
        $this->addPrimaryKey('InvoiceNbr', 'Invoicenbr', 'VARCHAR', true, 10, '');
        $this->addColumn('InvoiceDate', 'Invoicedate', 'INTEGER', false, 8, null);
        $this->addColumn('RegisterMotor', 'Registermotor', 'VARCHAR', false, 1, null);
        $this->addColumn('FirstName', 'Firstname', 'VARCHAR', false, 30, null);
        $this->addColumn('MiddleName', 'Middlename', 'VARCHAR', false, 30, null);
        $this->addColumn('LastName', 'Lastname', 'VARCHAR', false, 30, null);
        $this->addColumn('Adr1', 'Adr1', 'VARCHAR', false, 30, null);
        $this->addColumn('Adr2', 'Adr2', 'VARCHAR', false, 30, null);
        $this->addColumn('City', 'City', 'VARCHAR', false, 16, null);
        $this->addColumn('State', 'State', 'VARCHAR', false, 3, null);
        $this->addColumn('Zip', 'Zip', 'VARCHAR', false, 10, null);
        $this->addColumn('Email', 'Email', 'VARCHAR', false, 50, null);
        $this->addColumn('Phone', 'Phone', 'VARCHAR', false, 20, null);
        $this->addColumn('SaleDate', 'Saledate', 'INTEGER', false, 8, null);
        $this->addColumn('EngSerialNbr', 'Engserialnbr', 'VARCHAR', false, 20, null);
        $this->addColumn('EngHorsePower', 'Enghorsepower', 'DECIMAL', false, 5, null);
        $this->addColumn('EngModelYear', 'Engmodelyear', 'INTEGER', false, 4, null);
        $this->addColumn('EngDesc', 'Engdesc', 'VARCHAR', false, 35, null);
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
     * @param \WarrantyRegister $obj A \WarrantyRegister object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getSerialnbr() || is_scalar($obj->getSerialnbr()) || is_callable([$obj->getSerialnbr(), '__toString']) ? (string) $obj->getSerialnbr() : $obj->getSerialnbr()), (null === $obj->getItemnbr() || is_scalar($obj->getItemnbr()) || is_callable([$obj->getItemnbr(), '__toString']) ? (string) $obj->getItemnbr() : $obj->getItemnbr()), (null === $obj->getInvoicenbr() || is_scalar($obj->getInvoicenbr()) || is_callable([$obj->getInvoicenbr(), '__toString']) ? (string) $obj->getInvoicenbr() : $obj->getInvoicenbr())]);
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
     * @param mixed $value A \WarrantyRegister object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \WarrantyRegister) {
                $key = serialize([(null === $value->getSerialnbr() || is_scalar($value->getSerialnbr()) || is_callable([$value->getSerialnbr(), '__toString']) ? (string) $value->getSerialnbr() : $value->getSerialnbr()), (null === $value->getItemnbr() || is_scalar($value->getItemnbr()) || is_callable([$value->getItemnbr(), '__toString']) ? (string) $value->getItemnbr() : $value->getItemnbr()), (null === $value->getInvoicenbr() || is_scalar($value->getInvoicenbr()) || is_callable([$value->getInvoicenbr(), '__toString']) ? (string) $value->getInvoicenbr() : $value->getInvoicenbr())]);

            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \WarrantyRegister object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Serialnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Itemnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Invoicenbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Serialnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Serialnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Serialnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Serialnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('Serialnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Itemnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Itemnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Itemnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Itemnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 4 + $offset : static::translateFieldName('Itemnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Invoicenbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Invoicenbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Invoicenbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Invoicenbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Invoicenbr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                ? 5 + $offset
                : self::translateFieldName('Invoicenbr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? WarrantyRegisterTableMap::CLASS_DEFAULT : WarrantyRegisterTableMap::OM_CLASS;
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
     * @return array           (WarrantyRegister object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = WarrantyRegisterTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = WarrantyRegisterTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + WarrantyRegisterTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = WarrantyRegisterTableMap::OM_CLASS;
            /** @var WarrantyRegister $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            WarrantyRegisterTableMap::addInstanceToPool($obj, $key);
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
            $key = WarrantyRegisterTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = WarrantyRegisterTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var WarrantyRegister $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                WarrantyRegisterTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_DATE);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_TIME);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_RECNBR);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_SERIALNBR);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_ITEMNBR);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_INVOICENBR);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_INVOICEDATE);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_REGISTERMOTOR);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_FIRSTNAME);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_MIDDLENAME);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_LASTNAME);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_ADR1);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_ADR2);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_CITY);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_STATE);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_ZIP);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_EMAIL);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_PHONE);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_SALEDATE);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_ENGSERIALNBR);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_ENGHORSEPOWER);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_ENGMODELYEAR);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_ENGDESC);
            $criteria->addSelectColumn(WarrantyRegisterTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.Date');
            $criteria->addSelectColumn($alias . '.Time');
            $criteria->addSelectColumn($alias . '.Recnbr');
            $criteria->addSelectColumn($alias . '.SerialNbr');
            $criteria->addSelectColumn($alias . '.ItemNbr');
            $criteria->addSelectColumn($alias . '.InvoiceNbr');
            $criteria->addSelectColumn($alias . '.InvoiceDate');
            $criteria->addSelectColumn($alias . '.RegisterMotor');
            $criteria->addSelectColumn($alias . '.FirstName');
            $criteria->addSelectColumn($alias . '.MiddleName');
            $criteria->addSelectColumn($alias . '.LastName');
            $criteria->addSelectColumn($alias . '.Adr1');
            $criteria->addSelectColumn($alias . '.Adr2');
            $criteria->addSelectColumn($alias . '.City');
            $criteria->addSelectColumn($alias . '.State');
            $criteria->addSelectColumn($alias . '.Zip');
            $criteria->addSelectColumn($alias . '.Email');
            $criteria->addSelectColumn($alias . '.Phone');
            $criteria->addSelectColumn($alias . '.SaleDate');
            $criteria->addSelectColumn($alias . '.EngSerialNbr');
            $criteria->addSelectColumn($alias . '.EngHorsePower');
            $criteria->addSelectColumn($alias . '.EngModelYear');
            $criteria->addSelectColumn($alias . '.EngDesc');
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
        return Propel::getServiceContainer()->getDatabaseMap(WarrantyRegisterTableMap::DATABASE_NAME)->getTable(WarrantyRegisterTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(WarrantyRegisterTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(WarrantyRegisterTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new WarrantyRegisterTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a WarrantyRegister or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or WarrantyRegister object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(WarrantyRegisterTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \WarrantyRegister) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(WarrantyRegisterTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(WarrantyRegisterTableMap::COL_SERIALNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(WarrantyRegisterTableMap::COL_ITEMNBR, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(WarrantyRegisterTableMap::COL_INVOICENBR, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        $query = WarrantyRegisterQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            WarrantyRegisterTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                WarrantyRegisterTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the warranty_register table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return WarrantyRegisterQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a WarrantyRegister or Criteria object.
     *
     * @param mixed               $criteria Criteria or WarrantyRegister object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WarrantyRegisterTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from WarrantyRegister object
        }


        // Set the correct dbName
        $query = WarrantyRegisterQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // WarrantyRegisterTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
WarrantyRegisterTableMap::buildTableMap();
