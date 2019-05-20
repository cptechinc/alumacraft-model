<?php

namespace Base;

use \BoatInventoryQuery as ChildBoatInventoryQuery;
use \Exception;
use \PDO;
use Map\BoatInventoryTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;

/**
 * Base class that represents a row from the 'boat_inventory' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class BoatInventory implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\BoatInventoryTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var boolean
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var boolean
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = array();

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = array();

    /**
     * The value for the date field.
     *
     * @var        int
     */
    protected $date;

    /**
     * The value for the time field.
     *
     * @var        int
     */
    protected $time;

    /**
     * The value for the recnbr field.
     *
     * @var        int
     */
    protected $recnbr;

    /**
     * The value for the serialnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $serialnbr;

    /**
     * The value for the itemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $itemnbr;

    /**
     * The value for the itemdesc1 field.
     *
     * @var        string
     */
    protected $itemdesc1;

    /**
     * The value for the ordernbr field.
     *
     * @var        int
     */
    protected $ordernbr;

    /**
     * The value for the invoicedate field.
     *
     * @var        int
     */
    protected $invoicedate;

    /**
     * The value for the registered field.
     *
     * @var        string
     */
    protected $registered;

    /**
     * The value for the custid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $custid;

    /**
     * The value for the salespersonid field.
     *
     * @var        string
     */
    protected $salespersonid;

    /**
     * The value for the oehdusercode2 field.
     *
     * @var        string
     */
    protected $oehdusercode2;

    /**
     * The value for the dummy field.
     *
     * @var        string
     */
    protected $dummy;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->serialnbr = '';
        $this->itemnbr = '';
        $this->custid = '';
    }

    /**
     * Initializes internal state of Base\BoatInventory object.
     * @see applyDefaults()
     */
    public function __construct()
    {
        $this->applyDefaultValues();
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return boolean True if the object has been modified.
     */
    public function isModified()
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param  string  $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return boolean True if $col has been modified.
     */
    public function isColumnModified($col)
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns()
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return boolean true, if the object has never been persisted.
     */
    public function isNew()
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param boolean $b the state of the object.
     */
    public function setNew($b)
    {
        $this->new = (boolean) $b;
    }

    /**
     * Whether this object has been deleted.
     * @return boolean The deleted state of this object.
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param  boolean $b The deleted state of this object.
     * @return void
     */
    public function setDeleted($b)
    {
        $this->deleted = (boolean) $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param  string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified($col = null)
    {
        if (null !== $col) {
            if (isset($this->modifiedColumns[$col])) {
                unset($this->modifiedColumns[$col]);
            }
        } else {
            $this->modifiedColumns = array();
        }
    }

    /**
     * Compares this with another <code>BoatInventory</code> instance.  If
     * <code>obj</code> is an instance of <code>BoatInventory</code>, delegates to
     * <code>equals(BoatInventory)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param  mixed   $obj The object to compare to.
     * @return boolean Whether equal to the object specified.
     */
    public function equals($obj)
    {
        if (!$obj instanceof static) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey() || null === $obj->getPrimaryKey()) {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns()
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param  string  $name The virtual column name
     * @return boolean
     */
    public function hasVirtualColumn($name)
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param  string $name The virtual column name
     * @return mixed
     *
     * @throws PropelException
     */
    public function getVirtualColumn($name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of inexistent virtual column %s.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name  The virtual column name
     * @param mixed  $value The value to give to the virtual column
     *
     * @return $this|BoatInventory The current object, for fluid interface
     */
    public function setVirtualColumn($name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param  string  $msg
     * @param  int     $priority One of the Propel::LOG_* logging levels
     * @return boolean
     */
    protected function log($msg, $priority = Propel::LOG_INFO)
    {
        return Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param  mixed   $parser                 A AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param  boolean $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @return string  The exported data
     */
    public function exportTo($parser, $includeLazyLoadColumns = true)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray(TableMap::TYPE_PHPNAME, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     */
    public function __sleep()
    {
        $this->clearAllReferences();

        $cls = new \ReflectionClass($this);
        $propertyNames = [];
        $serializableProperties = array_diff($cls->getProperties(), $cls->getProperties(\ReflectionProperty::IS_STATIC));

        foreach($serializableProperties as $property) {
            $propertyNames[] = $property->getName();
        }

        return $propertyNames;
    }

    /**
     * Get the [date] column value.
     *
     * @return int
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get the [time] column value.
     *
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Get the [recnbr] column value.
     *
     * @return int
     */
    public function getRecnbr()
    {
        return $this->recnbr;
    }

    /**
     * Get the [serialnbr] column value.
     *
     * @return string
     */
    public function getSerialnbr()
    {
        return $this->serialnbr;
    }

    /**
     * Get the [itemnbr] column value.
     *
     * @return string
     */
    public function getItemnbr()
    {
        return $this->itemnbr;
    }

    /**
     * Get the [itemdesc1] column value.
     *
     * @return string
     */
    public function getItemdesc1()
    {
        return $this->itemdesc1;
    }

    /**
     * Get the [ordernbr] column value.
     *
     * @return int
     */
    public function getOrdernbr()
    {
        return $this->ordernbr;
    }

    /**
     * Get the [invoicedate] column value.
     *
     * @return int
     */
    public function getInvoicedate()
    {
        return $this->invoicedate;
    }

    /**
     * Get the [registered] column value.
     *
     * @return string
     */
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * Get the [custid] column value.
     *
     * @return string
     */
    public function getCustid()
    {
        return $this->custid;
    }

    /**
     * Get the [salespersonid] column value.
     *
     * @return string
     */
    public function getSalespersonid()
    {
        return $this->salespersonid;
    }

    /**
     * Get the [oehdusercode2] column value.
     *
     * @return string
     */
    public function getOehdusercode2()
    {
        return $this->oehdusercode2;
    }

    /**
     * Get the [dummy] column value.
     *
     * @return string
     */
    public function getDummy()
    {
        return $this->dummy;
    }

    /**
     * Set the value of [date] column.
     *
     * @param int $v new value
     * @return $this|\BoatInventory The current object (for fluent API support)
     */
    public function setDate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->date !== $v) {
            $this->date = $v;
            $this->modifiedColumns[BoatInventoryTableMap::COL_DATE] = true;
        }

        return $this;
    } // setDate()

    /**
     * Set the value of [time] column.
     *
     * @param int $v new value
     * @return $this|\BoatInventory The current object (for fluent API support)
     */
    public function setTime($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->time !== $v) {
            $this->time = $v;
            $this->modifiedColumns[BoatInventoryTableMap::COL_TIME] = true;
        }

        return $this;
    } // setTime()

    /**
     * Set the value of [recnbr] column.
     *
     * @param int $v new value
     * @return $this|\BoatInventory The current object (for fluent API support)
     */
    public function setRecnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->recnbr !== $v) {
            $this->recnbr = $v;
            $this->modifiedColumns[BoatInventoryTableMap::COL_RECNBR] = true;
        }

        return $this;
    } // setRecnbr()

    /**
     * Set the value of [serialnbr] column.
     *
     * @param string $v new value
     * @return $this|\BoatInventory The current object (for fluent API support)
     */
    public function setSerialnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->serialnbr !== $v) {
            $this->serialnbr = $v;
            $this->modifiedColumns[BoatInventoryTableMap::COL_SERIALNBR] = true;
        }

        return $this;
    } // setSerialnbr()

    /**
     * Set the value of [itemnbr] column.
     *
     * @param string $v new value
     * @return $this|\BoatInventory The current object (for fluent API support)
     */
    public function setItemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->itemnbr !== $v) {
            $this->itemnbr = $v;
            $this->modifiedColumns[BoatInventoryTableMap::COL_ITEMNBR] = true;
        }

        return $this;
    } // setItemnbr()

    /**
     * Set the value of [itemdesc1] column.
     *
     * @param string $v new value
     * @return $this|\BoatInventory The current object (for fluent API support)
     */
    public function setItemdesc1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->itemdesc1 !== $v) {
            $this->itemdesc1 = $v;
            $this->modifiedColumns[BoatInventoryTableMap::COL_ITEMDESC1] = true;
        }

        return $this;
    } // setItemdesc1()

    /**
     * Set the value of [ordernbr] column.
     *
     * @param int $v new value
     * @return $this|\BoatInventory The current object (for fluent API support)
     */
    public function setOrdernbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->ordernbr !== $v) {
            $this->ordernbr = $v;
            $this->modifiedColumns[BoatInventoryTableMap::COL_ORDERNBR] = true;
        }

        return $this;
    } // setOrdernbr()

    /**
     * Set the value of [invoicedate] column.
     *
     * @param int $v new value
     * @return $this|\BoatInventory The current object (for fluent API support)
     */
    public function setInvoicedate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->invoicedate !== $v) {
            $this->invoicedate = $v;
            $this->modifiedColumns[BoatInventoryTableMap::COL_INVOICEDATE] = true;
        }

        return $this;
    } // setInvoicedate()

    /**
     * Set the value of [registered] column.
     *
     * @param string $v new value
     * @return $this|\BoatInventory The current object (for fluent API support)
     */
    public function setRegistered($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->registered !== $v) {
            $this->registered = $v;
            $this->modifiedColumns[BoatInventoryTableMap::COL_REGISTERED] = true;
        }

        return $this;
    } // setRegistered()

    /**
     * Set the value of [custid] column.
     *
     * @param string $v new value
     * @return $this|\BoatInventory The current object (for fluent API support)
     */
    public function setCustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->custid !== $v) {
            $this->custid = $v;
            $this->modifiedColumns[BoatInventoryTableMap::COL_CUSTID] = true;
        }

        return $this;
    } // setCustid()

    /**
     * Set the value of [salespersonid] column.
     *
     * @param string $v new value
     * @return $this|\BoatInventory The current object (for fluent API support)
     */
    public function setSalespersonid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->salespersonid !== $v) {
            $this->salespersonid = $v;
            $this->modifiedColumns[BoatInventoryTableMap::COL_SALESPERSONID] = true;
        }

        return $this;
    } // setSalespersonid()

    /**
     * Set the value of [oehdusercode2] column.
     *
     * @param string $v new value
     * @return $this|\BoatInventory The current object (for fluent API support)
     */
    public function setOehdusercode2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdusercode2 !== $v) {
            $this->oehdusercode2 = $v;
            $this->modifiedColumns[BoatInventoryTableMap::COL_OEHDUSERCODE2] = true;
        }

        return $this;
    } // setOehdusercode2()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\BoatInventory The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[BoatInventoryTableMap::COL_DUMMY] = true;
        }

        return $this;
    } // setDummy()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->serialnbr !== '') {
                return false;
            }

            if ($this->itemnbr !== '') {
                return false;
            }

            if ($this->custid !== '') {
                return false;
            }

        // otherwise, everything was equal, so return TRUE
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array   $row       The row returned by DataFetcher->fetch().
     * @param int     $startcol  0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @param string  $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false, $indexType = TableMap::TYPE_NUM)
    {
        try {

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : BoatInventoryTableMap::translateFieldName('Date', TableMap::TYPE_PHPNAME, $indexType)];
            $this->date = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : BoatInventoryTableMap::translateFieldName('Time', TableMap::TYPE_PHPNAME, $indexType)];
            $this->time = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : BoatInventoryTableMap::translateFieldName('Recnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->recnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : BoatInventoryTableMap::translateFieldName('Serialnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->serialnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : BoatInventoryTableMap::translateFieldName('Itemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->itemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : BoatInventoryTableMap::translateFieldName('Itemdesc1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->itemdesc1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : BoatInventoryTableMap::translateFieldName('Ordernbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ordernbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : BoatInventoryTableMap::translateFieldName('Invoicedate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->invoicedate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : BoatInventoryTableMap::translateFieldName('Registered', TableMap::TYPE_PHPNAME, $indexType)];
            $this->registered = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : BoatInventoryTableMap::translateFieldName('Custid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->custid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : BoatInventoryTableMap::translateFieldName('Salespersonid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->salespersonid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : BoatInventoryTableMap::translateFieldName('Oehdusercode2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdusercode2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : BoatInventoryTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 13; // 13 = BoatInventoryTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\BoatInventory'), 0, $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(BoatInventoryTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildBoatInventoryQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see BoatInventory::setDeleted()
     * @see BoatInventory::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(BoatInventoryTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildBoatInventoryQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $this->setDeleted(true);
            }
        });
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see doSave()
     */
    public function save(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($this->alreadyInSave) {
            return 0;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(BoatInventoryTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                BoatInventoryTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }

            return $affectedRows;
        });
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                    $affectedRows += 1;
                } else {
                    $affectedRows += $this->doUpdate($con);
                }
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @throws PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con)
    {
        $modifiedColumns = array();
        $index = 0;


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(BoatInventoryTableMap::COL_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'Date';
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'Time';
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_RECNBR)) {
            $modifiedColumns[':p' . $index++]  = 'Recnbr';
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_SERIALNBR)) {
            $modifiedColumns[':p' . $index++]  = 'SerialNbr';
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_ITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ItemNbr';
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_ITEMDESC1)) {
            $modifiedColumns[':p' . $index++]  = 'ItemDesc1';
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_ORDERNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OrderNbr';
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_INVOICEDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InvoiceDate';
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_REGISTERED)) {
            $modifiedColumns[':p' . $index++]  = 'Registered';
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_CUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'CustId';
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_SALESPERSONID)) {
            $modifiedColumns[':p' . $index++]  = 'SalespersonId';
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_OEHDUSERCODE2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdUserCode2';
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO boat_inventory (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'Date':
                        $stmt->bindValue($identifier, $this->date, PDO::PARAM_INT);
                        break;
                    case 'Time':
                        $stmt->bindValue($identifier, $this->time, PDO::PARAM_INT);
                        break;
                    case 'Recnbr':
                        $stmt->bindValue($identifier, $this->recnbr, PDO::PARAM_INT);
                        break;
                    case 'SerialNbr':
                        $stmt->bindValue($identifier, $this->serialnbr, PDO::PARAM_STR);
                        break;
                    case 'ItemNbr':
                        $stmt->bindValue($identifier, $this->itemnbr, PDO::PARAM_STR);
                        break;
                    case 'ItemDesc1':
                        $stmt->bindValue($identifier, $this->itemdesc1, PDO::PARAM_STR);
                        break;
                    case 'OrderNbr':
                        $stmt->bindValue($identifier, $this->ordernbr, PDO::PARAM_INT);
                        break;
                    case 'InvoiceDate':
                        $stmt->bindValue($identifier, $this->invoicedate, PDO::PARAM_INT);
                        break;
                    case 'Registered':
                        $stmt->bindValue($identifier, $this->registered, PDO::PARAM_STR);
                        break;
                    case 'CustId':
                        $stmt->bindValue($identifier, $this->custid, PDO::PARAM_STR);
                        break;
                    case 'SalespersonId':
                        $stmt->bindValue($identifier, $this->salespersonid, PDO::PARAM_STR);
                        break;
                    case 'OehdUserCode2':
                        $stmt->bindValue($identifier, $this->oehdusercode2, PDO::PARAM_STR);
                        break;
                    case 'dummy':
                        $stmt->bindValue($identifier, $this->dummy, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @return Integer Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return mixed Value of field.
     */
    public function getByName($name, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = BoatInventoryTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getDate();
                break;
            case 1:
                return $this->getTime();
                break;
            case 2:
                return $this->getRecnbr();
                break;
            case 3:
                return $this->getSerialnbr();
                break;
            case 4:
                return $this->getItemnbr();
                break;
            case 5:
                return $this->getItemdesc1();
                break;
            case 6:
                return $this->getOrdernbr();
                break;
            case 7:
                return $this->getInvoicedate();
                break;
            case 8:
                return $this->getRegistered();
                break;
            case 9:
                return $this->getCustid();
                break;
            case 10:
                return $this->getSalespersonid();
                break;
            case 11:
                return $this->getOehdusercode2();
                break;
            case 12:
                return $this->getDummy();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {

        if (isset($alreadyDumpedObjects['BoatInventory'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['BoatInventory'][$this->hashCode()] = true;
        $keys = BoatInventoryTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getDate(),
            $keys[1] => $this->getTime(),
            $keys[2] => $this->getRecnbr(),
            $keys[3] => $this->getSerialnbr(),
            $keys[4] => $this->getItemnbr(),
            $keys[5] => $this->getItemdesc1(),
            $keys[6] => $this->getOrdernbr(),
            $keys[7] => $this->getInvoicedate(),
            $keys[8] => $this->getRegistered(),
            $keys[9] => $this->getCustid(),
            $keys[10] => $this->getSalespersonid(),
            $keys[11] => $this->getOehdusercode2(),
            $keys[12] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }


        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param  string $name
     * @param  mixed  $value field value
     * @param  string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_PHPNAME.
     * @return $this|\BoatInventory
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = BoatInventoryTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\BoatInventory
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setDate($value);
                break;
            case 1:
                $this->setTime($value);
                break;
            case 2:
                $this->setRecnbr($value);
                break;
            case 3:
                $this->setSerialnbr($value);
                break;
            case 4:
                $this->setItemnbr($value);
                break;
            case 5:
                $this->setItemdesc1($value);
                break;
            case 6:
                $this->setOrdernbr($value);
                break;
            case 7:
                $this->setInvoicedate($value);
                break;
            case 8:
                $this->setRegistered($value);
                break;
            case 9:
                $this->setCustid($value);
                break;
            case 10:
                $this->setSalespersonid($value);
                break;
            case 11:
                $this->setOehdusercode2($value);
                break;
            case 12:
                $this->setDummy($value);
                break;
        } // switch()

        return $this;
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = BoatInventoryTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setDate($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setTime($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setRecnbr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setSerialnbr($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setItemnbr($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setItemdesc1($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setOrdernbr($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setInvoicedate($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setRegistered($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setCustid($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setSalespersonid($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setOehdusercode2($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setDummy($arr[$keys[12]]);
        }
    }

     /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     * @param string $keyType The type of keys the array uses.
     *
     * @return $this|\BoatInventory The current object, for fluid interface
     */
    public function importFrom($parser, $data, $keyType = TableMap::TYPE_PHPNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), $keyType);

        return $this;
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(BoatInventoryTableMap::DATABASE_NAME);

        if ($this->isColumnModified(BoatInventoryTableMap::COL_DATE)) {
            $criteria->add(BoatInventoryTableMap::COL_DATE, $this->date);
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_TIME)) {
            $criteria->add(BoatInventoryTableMap::COL_TIME, $this->time);
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_RECNBR)) {
            $criteria->add(BoatInventoryTableMap::COL_RECNBR, $this->recnbr);
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_SERIALNBR)) {
            $criteria->add(BoatInventoryTableMap::COL_SERIALNBR, $this->serialnbr);
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_ITEMNBR)) {
            $criteria->add(BoatInventoryTableMap::COL_ITEMNBR, $this->itemnbr);
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_ITEMDESC1)) {
            $criteria->add(BoatInventoryTableMap::COL_ITEMDESC1, $this->itemdesc1);
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_ORDERNBR)) {
            $criteria->add(BoatInventoryTableMap::COL_ORDERNBR, $this->ordernbr);
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_INVOICEDATE)) {
            $criteria->add(BoatInventoryTableMap::COL_INVOICEDATE, $this->invoicedate);
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_REGISTERED)) {
            $criteria->add(BoatInventoryTableMap::COL_REGISTERED, $this->registered);
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_CUSTID)) {
            $criteria->add(BoatInventoryTableMap::COL_CUSTID, $this->custid);
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_SALESPERSONID)) {
            $criteria->add(BoatInventoryTableMap::COL_SALESPERSONID, $this->salespersonid);
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_OEHDUSERCODE2)) {
            $criteria->add(BoatInventoryTableMap::COL_OEHDUSERCODE2, $this->oehdusercode2);
        }
        if ($this->isColumnModified(BoatInventoryTableMap::COL_DUMMY)) {
            $criteria->add(BoatInventoryTableMap::COL_DUMMY, $this->dummy);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = ChildBoatInventoryQuery::create();
        $criteria->add(BoatInventoryTableMap::COL_SERIALNBR, $this->serialnbr);
        $criteria->add(BoatInventoryTableMap::COL_ITEMNBR, $this->itemnbr);
        $criteria->add(BoatInventoryTableMap::COL_CUSTID, $this->custid);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int Hashcode
     */
    public function hashCode()
    {
        $validPk = null !== $this->getSerialnbr() &&
            null !== $this->getItemnbr() &&
            null !== $this->getCustid();

        $validPrimaryKeyFKs = 0;
        $primaryKeyFKs = [];

        if ($validPk) {
            return crc32(json_encode($this->getPrimaryKey(), JSON_UNESCAPED_UNICODE));
        } elseif ($validPrimaryKeyFKs) {
            return crc32(json_encode($primaryKeyFKs, JSON_UNESCAPED_UNICODE));
        }

        return spl_object_hash($this);
    }

    /**
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getSerialnbr();
        $pks[1] = $this->getItemnbr();
        $pks[2] = $this->getCustid();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param      array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setSerialnbr($keys[0]);
        $this->setItemnbr($keys[1]);
        $this->setCustid($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getSerialnbr()) && (null === $this->getItemnbr()) && (null === $this->getCustid());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \BoatInventory (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setDate($this->getDate());
        $copyObj->setTime($this->getTime());
        $copyObj->setRecnbr($this->getRecnbr());
        $copyObj->setSerialnbr($this->getSerialnbr());
        $copyObj->setItemnbr($this->getItemnbr());
        $copyObj->setItemdesc1($this->getItemdesc1());
        $copyObj->setOrdernbr($this->getOrdernbr());
        $copyObj->setInvoicedate($this->getInvoicedate());
        $copyObj->setRegistered($this->getRegistered());
        $copyObj->setCustid($this->getCustid());
        $copyObj->setSalespersonid($this->getSalespersonid());
        $copyObj->setOehdusercode2($this->getOehdusercode2());
        $copyObj->setDummy($this->getDummy());
        if ($makeNew) {
            $copyObj->setNew(true);
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param  boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \BoatInventory Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->date = null;
        $this->time = null;
        $this->recnbr = null;
        $this->serialnbr = null;
        $this->itemnbr = null;
        $this->itemdesc1 = null;
        $this->ordernbr = null;
        $this->invoicedate = null;
        $this->registered = null;
        $this->custid = null;
        $this->salespersonid = null;
        $this->oehdusercode2 = null;
        $this->dummy = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
        } // if ($deep)

    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(BoatInventoryTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            return parent::preSave($con);
        }
        return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface $con
     */
    public function postSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postSave')) {
            parent::postSave($con);
        }
    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preInsert')) {
            return parent::preInsert($con);
        }
        return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postInsert')) {
            parent::postInsert($con);
        }
    }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preUpdate')) {
            return parent::preUpdate($con);
        }
        return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postUpdate')) {
            parent::postUpdate($con);
        }
    }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preDelete')) {
            return parent::preDelete($con);
        }
        return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postDelete')) {
            parent::postDelete($con);
        }
    }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed  $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);

            return $this->importFrom($format, reset($params));
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = isset($params[0]) ? $params[0] : true;

            return $this->exportTo($format, $includeLazyLoadColumns);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
