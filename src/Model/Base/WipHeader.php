<?php

namespace Base;

use \WipHeaderQuery as ChildWipHeaderQuery;
use \Exception;
use \PDO;
use Map\WipHeaderTableMap;
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
 * Base class that represents a row from the 'WIP_HEADER' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class WipHeader implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\WipHeaderTableMap';


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
     * The value for the wiphwipnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $wiphwipnbr;

    /**
     * The value for the wiphstatus field.
     *
     * @var        string
     */
    protected $wiphstatus;

    /**
     * The value for the intbwhse field.
     *
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the wiphplandate field.
     *
     * @var        int
     */
    protected $wiphplandate;

    /**
     * The value for the wiphlevel field.
     *
     * @var        int
     */
    protected $wiphlevel;

    /**
     * The value for the inititemnbr field.
     *
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the wiphplanqty field.
     *
     * @var        string
     */
    protected $wiphplanqty;

    /**
     * The value for the wiphcmpltdqty field.
     *
     * @var        string
     */
    protected $wiphcmpltdqty;

    /**
     * The value for the wiphcmpltddate field.
     *
     * @var        int
     */
    protected $wiphcmpltddate;

    /**
     * The value for the wiphbin field.
     *
     * @var        string
     */
    protected $wiphbin;

    /**
     * The value for the oehdnbr field.
     *
     * @var        int
     */
    protected $oehdnbr;

    /**
     * The value for the arcucustid field.
     *
     * @var        string
     */
    protected $arcucustid;

    /**
     * The value for the wiphworkcenter field.
     *
     * @var        string
     */
    protected $wiphworkcenter;

    /**
     * The value for the wiphoper field.
     *
     * @var        string
     */
    protected $wiphoper;

    /**
     * The value for the wiphalumaser field.
     *
     * @var        string
     */
    protected $wiphalumaser;

    /**
     * The value for the wiphnegwip field.
     *
     * @var        string
     */
    protected $wiphnegwip;

    /**
     * The value for the dateupdtd field.
     *
     * @var        int
     */
    protected $dateupdtd;

    /**
     * The value for the timeupdtd field.
     *
     * @var        int
     */
    protected $timeupdtd;

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
        $this->wiphwipnbr = 0;
    }

    /**
     * Initializes internal state of Base\WipHeader object.
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
     * Compares this with another <code>WipHeader</code> instance.  If
     * <code>obj</code> is an instance of <code>WipHeader</code>, delegates to
     * <code>equals(WipHeader)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|WipHeader The current object, for fluid interface
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
     * Get the [wiphwipnbr] column value.
     *
     * @return int
     */
    public function getWiphwipnbr()
    {
        return $this->wiphwipnbr;
    }

    /**
     * Get the [wiphstatus] column value.
     *
     * @return string
     */
    public function getWiphstatus()
    {
        return $this->wiphstatus;
    }

    /**
     * Get the [intbwhse] column value.
     *
     * @return string
     */
    public function getIntbwhse()
    {
        return $this->intbwhse;
    }

    /**
     * Get the [wiphplandate] column value.
     *
     * @return int
     */
    public function getWiphplandate()
    {
        return $this->wiphplandate;
    }

    /**
     * Get the [wiphlevel] column value.
     *
     * @return int
     */
    public function getWiphlevel()
    {
        return $this->wiphlevel;
    }

    /**
     * Get the [inititemnbr] column value.
     *
     * @return string
     */
    public function getInititemnbr()
    {
        return $this->inititemnbr;
    }

    /**
     * Get the [wiphplanqty] column value.
     *
     * @return string
     */
    public function getWiphplanqty()
    {
        return $this->wiphplanqty;
    }

    /**
     * Get the [wiphcmpltdqty] column value.
     *
     * @return string
     */
    public function getWiphcmpltdqty()
    {
        return $this->wiphcmpltdqty;
    }

    /**
     * Get the [wiphcmpltddate] column value.
     *
     * @return int
     */
    public function getWiphcmpltddate()
    {
        return $this->wiphcmpltddate;
    }

    /**
     * Get the [wiphbin] column value.
     *
     * @return string
     */
    public function getWiphbin()
    {
        return $this->wiphbin;
    }

    /**
     * Get the [oehdnbr] column value.
     *
     * @return int
     */
    public function getOehdnbr()
    {
        return $this->oehdnbr;
    }

    /**
     * Get the [arcucustid] column value.
     *
     * @return string
     */
    public function getArcucustid()
    {
        return $this->arcucustid;
    }

    /**
     * Get the [wiphworkcenter] column value.
     *
     * @return string
     */
    public function getWiphworkcenter()
    {
        return $this->wiphworkcenter;
    }

    /**
     * Get the [wiphoper] column value.
     *
     * @return string
     */
    public function getWiphoper()
    {
        return $this->wiphoper;
    }

    /**
     * Get the [wiphalumaser] column value.
     *
     * @return string
     */
    public function getWiphalumaser()
    {
        return $this->wiphalumaser;
    }

    /**
     * Get the [wiphnegwip] column value.
     *
     * @return string
     */
    public function getWiphnegwip()
    {
        return $this->wiphnegwip;
    }

    /**
     * Get the [dateupdtd] column value.
     *
     * @return int
     */
    public function getDateupdtd()
    {
        return $this->dateupdtd;
    }

    /**
     * Get the [timeupdtd] column value.
     *
     * @return int
     */
    public function getTimeupdtd()
    {
        return $this->timeupdtd;
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
     * Set the value of [wiphwipnbr] column.
     *
     * @param int $v new value
     * @return $this|\WipHeader The current object (for fluent API support)
     */
    public function setWiphwipnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->wiphwipnbr !== $v) {
            $this->wiphwipnbr = $v;
            $this->modifiedColumns[WipHeaderTableMap::COL_WIPHWIPNBR] = true;
        }

        return $this;
    } // setWiphwipnbr()

    /**
     * Set the value of [wiphstatus] column.
     *
     * @param string $v new value
     * @return $this|\WipHeader The current object (for fluent API support)
     */
    public function setWiphstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->wiphstatus !== $v) {
            $this->wiphstatus = $v;
            $this->modifiedColumns[WipHeaderTableMap::COL_WIPHSTATUS] = true;
        }

        return $this;
    } // setWiphstatus()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\WipHeader The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[WipHeaderTableMap::COL_INTBWHSE] = true;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [wiphplandate] column.
     *
     * @param int $v new value
     * @return $this|\WipHeader The current object (for fluent API support)
     */
    public function setWiphplandate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->wiphplandate !== $v) {
            $this->wiphplandate = $v;
            $this->modifiedColumns[WipHeaderTableMap::COL_WIPHPLANDATE] = true;
        }

        return $this;
    } // setWiphplandate()

    /**
     * Set the value of [wiphlevel] column.
     *
     * @param int $v new value
     * @return $this|\WipHeader The current object (for fluent API support)
     */
    public function setWiphlevel($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->wiphlevel !== $v) {
            $this->wiphlevel = $v;
            $this->modifiedColumns[WipHeaderTableMap::COL_WIPHLEVEL] = true;
        }

        return $this;
    } // setWiphlevel()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\WipHeader The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[WipHeaderTableMap::COL_INITITEMNBR] = true;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [wiphplanqty] column.
     *
     * @param string $v new value
     * @return $this|\WipHeader The current object (for fluent API support)
     */
    public function setWiphplanqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->wiphplanqty !== $v) {
            $this->wiphplanqty = $v;
            $this->modifiedColumns[WipHeaderTableMap::COL_WIPHPLANQTY] = true;
        }

        return $this;
    } // setWiphplanqty()

    /**
     * Set the value of [wiphcmpltdqty] column.
     *
     * @param string $v new value
     * @return $this|\WipHeader The current object (for fluent API support)
     */
    public function setWiphcmpltdqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->wiphcmpltdqty !== $v) {
            $this->wiphcmpltdqty = $v;
            $this->modifiedColumns[WipHeaderTableMap::COL_WIPHCMPLTDQTY] = true;
        }

        return $this;
    } // setWiphcmpltdqty()

    /**
     * Set the value of [wiphcmpltddate] column.
     *
     * @param int $v new value
     * @return $this|\WipHeader The current object (for fluent API support)
     */
    public function setWiphcmpltddate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->wiphcmpltddate !== $v) {
            $this->wiphcmpltddate = $v;
            $this->modifiedColumns[WipHeaderTableMap::COL_WIPHCMPLTDDATE] = true;
        }

        return $this;
    } // setWiphcmpltddate()

    /**
     * Set the value of [wiphbin] column.
     *
     * @param string $v new value
     * @return $this|\WipHeader The current object (for fluent API support)
     */
    public function setWiphbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->wiphbin !== $v) {
            $this->wiphbin = $v;
            $this->modifiedColumns[WipHeaderTableMap::COL_WIPHBIN] = true;
        }

        return $this;
    } // setWiphbin()

    /**
     * Set the value of [oehdnbr] column.
     *
     * @param int $v new value
     * @return $this|\WipHeader The current object (for fluent API support)
     */
    public function setOehdnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdnbr !== $v) {
            $this->oehdnbr = $v;
            $this->modifiedColumns[WipHeaderTableMap::COL_OEHDNBR] = true;
        }

        return $this;
    } // setOehdnbr()

    /**
     * Set the value of [arcucustid] column.
     *
     * @param string $v new value
     * @return $this|\WipHeader The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[WipHeaderTableMap::COL_ARCUCUSTID] = true;
        }

        return $this;
    } // setArcucustid()

    /**
     * Set the value of [wiphworkcenter] column.
     *
     * @param string $v new value
     * @return $this|\WipHeader The current object (for fluent API support)
     */
    public function setWiphworkcenter($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->wiphworkcenter !== $v) {
            $this->wiphworkcenter = $v;
            $this->modifiedColumns[WipHeaderTableMap::COL_WIPHWORKCENTER] = true;
        }

        return $this;
    } // setWiphworkcenter()

    /**
     * Set the value of [wiphoper] column.
     *
     * @param string $v new value
     * @return $this|\WipHeader The current object (for fluent API support)
     */
    public function setWiphoper($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->wiphoper !== $v) {
            $this->wiphoper = $v;
            $this->modifiedColumns[WipHeaderTableMap::COL_WIPHOPER] = true;
        }

        return $this;
    } // setWiphoper()

    /**
     * Set the value of [wiphalumaser] column.
     *
     * @param string $v new value
     * @return $this|\WipHeader The current object (for fluent API support)
     */
    public function setWiphalumaser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->wiphalumaser !== $v) {
            $this->wiphalumaser = $v;
            $this->modifiedColumns[WipHeaderTableMap::COL_WIPHALUMASER] = true;
        }

        return $this;
    } // setWiphalumaser()

    /**
     * Set the value of [wiphnegwip] column.
     *
     * @param string $v new value
     * @return $this|\WipHeader The current object (for fluent API support)
     */
    public function setWiphnegwip($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->wiphnegwip !== $v) {
            $this->wiphnegwip = $v;
            $this->modifiedColumns[WipHeaderTableMap::COL_WIPHNEGWIP] = true;
        }

        return $this;
    } // setWiphnegwip()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param int $v new value
     * @return $this|\WipHeader The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[WipHeaderTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param int $v new value
     * @return $this|\WipHeader The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[WipHeaderTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\WipHeader The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[WipHeaderTableMap::COL_DUMMY] = true;
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
            if ($this->wiphwipnbr !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : WipHeaderTableMap::translateFieldName('Wiphwipnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->wiphwipnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : WipHeaderTableMap::translateFieldName('Wiphstatus', TableMap::TYPE_PHPNAME, $indexType)];
            $this->wiphstatus = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : WipHeaderTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : WipHeaderTableMap::translateFieldName('Wiphplandate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->wiphplandate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : WipHeaderTableMap::translateFieldName('Wiphlevel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->wiphlevel = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : WipHeaderTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : WipHeaderTableMap::translateFieldName('Wiphplanqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->wiphplanqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : WipHeaderTableMap::translateFieldName('Wiphcmpltdqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->wiphcmpltdqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : WipHeaderTableMap::translateFieldName('Wiphcmpltddate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->wiphcmpltddate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : WipHeaderTableMap::translateFieldName('Wiphbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->wiphbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : WipHeaderTableMap::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : WipHeaderTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : WipHeaderTableMap::translateFieldName('Wiphworkcenter', TableMap::TYPE_PHPNAME, $indexType)];
            $this->wiphworkcenter = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : WipHeaderTableMap::translateFieldName('Wiphoper', TableMap::TYPE_PHPNAME, $indexType)];
            $this->wiphoper = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : WipHeaderTableMap::translateFieldName('Wiphalumaser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->wiphalumaser = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : WipHeaderTableMap::translateFieldName('Wiphnegwip', TableMap::TYPE_PHPNAME, $indexType)];
            $this->wiphnegwip = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : WipHeaderTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : WipHeaderTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : WipHeaderTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 19; // 19 = WipHeaderTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\WipHeader'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(WipHeaderTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildWipHeaderQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see WipHeader::setDeleted()
     * @see WipHeader::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(WipHeaderTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildWipHeaderQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(WipHeaderTableMap::DATABASE_NAME);
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
                WipHeaderTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHWIPNBR)) {
            $modifiedColumns[':p' . $index++]  = 'WiphWipNbr';
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHSTATUS)) {
            $modifiedColumns[':p' . $index++]  = 'WiphStatus';
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHPLANDATE)) {
            $modifiedColumns[':p' . $index++]  = 'WiphPlanDate';
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHLEVEL)) {
            $modifiedColumns[':p' . $index++]  = 'WiphLevel';
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHPLANQTY)) {
            $modifiedColumns[':p' . $index++]  = 'WiphPlanQty';
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHCMPLTDQTY)) {
            $modifiedColumns[':p' . $index++]  = 'WiphCmpltdQty';
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHCMPLTDDATE)) {
            $modifiedColumns[':p' . $index++]  = 'WiphCmpltdDate';
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHBIN)) {
            $modifiedColumns[':p' . $index++]  = 'WiphBin';
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_OEHDNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdNbr';
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHWORKCENTER)) {
            $modifiedColumns[':p' . $index++]  = 'WiphWorkCenter';
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHOPER)) {
            $modifiedColumns[':p' . $index++]  = 'WiphOper';
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHALUMASER)) {
            $modifiedColumns[':p' . $index++]  = 'WiphAlumaSer';
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHNEGWIP)) {
            $modifiedColumns[':p' . $index++]  = 'WiphNegWip';
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO WIP_HEADER (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'WiphWipNbr':
                        $stmt->bindValue($identifier, $this->wiphwipnbr, PDO::PARAM_INT);
                        break;
                    case 'WiphStatus':
                        $stmt->bindValue($identifier, $this->wiphstatus, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'WiphPlanDate':
                        $stmt->bindValue($identifier, $this->wiphplandate, PDO::PARAM_INT);
                        break;
                    case 'WiphLevel':
                        $stmt->bindValue($identifier, $this->wiphlevel, PDO::PARAM_INT);
                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'WiphPlanQty':
                        $stmt->bindValue($identifier, $this->wiphplanqty, PDO::PARAM_STR);
                        break;
                    case 'WiphCmpltdQty':
                        $stmt->bindValue($identifier, $this->wiphcmpltdqty, PDO::PARAM_STR);
                        break;
                    case 'WiphCmpltdDate':
                        $stmt->bindValue($identifier, $this->wiphcmpltddate, PDO::PARAM_INT);
                        break;
                    case 'WiphBin':
                        $stmt->bindValue($identifier, $this->wiphbin, PDO::PARAM_STR);
                        break;
                    case 'OehdNbr':
                        $stmt->bindValue($identifier, $this->oehdnbr, PDO::PARAM_INT);
                        break;
                    case 'ArcuCustId':
                        $stmt->bindValue($identifier, $this->arcucustid, PDO::PARAM_STR);
                        break;
                    case 'WiphWorkCenter':
                        $stmt->bindValue($identifier, $this->wiphworkcenter, PDO::PARAM_STR);
                        break;
                    case 'WiphOper':
                        $stmt->bindValue($identifier, $this->wiphoper, PDO::PARAM_STR);
                        break;
                    case 'WiphAlumaSer':
                        $stmt->bindValue($identifier, $this->wiphalumaser, PDO::PARAM_STR);
                        break;
                    case 'WiphNegWip':
                        $stmt->bindValue($identifier, $this->wiphnegwip, PDO::PARAM_STR);
                        break;
                    case 'DateUpdtd':
                        $stmt->bindValue($identifier, $this->dateupdtd, PDO::PARAM_INT);
                        break;
                    case 'TimeUpdtd':
                        $stmt->bindValue($identifier, $this->timeupdtd, PDO::PARAM_INT);
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
        $pos = WipHeaderTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getWiphwipnbr();
                break;
            case 1:
                return $this->getWiphstatus();
                break;
            case 2:
                return $this->getIntbwhse();
                break;
            case 3:
                return $this->getWiphplandate();
                break;
            case 4:
                return $this->getWiphlevel();
                break;
            case 5:
                return $this->getInititemnbr();
                break;
            case 6:
                return $this->getWiphplanqty();
                break;
            case 7:
                return $this->getWiphcmpltdqty();
                break;
            case 8:
                return $this->getWiphcmpltddate();
                break;
            case 9:
                return $this->getWiphbin();
                break;
            case 10:
                return $this->getOehdnbr();
                break;
            case 11:
                return $this->getArcucustid();
                break;
            case 12:
                return $this->getWiphworkcenter();
                break;
            case 13:
                return $this->getWiphoper();
                break;
            case 14:
                return $this->getWiphalumaser();
                break;
            case 15:
                return $this->getWiphnegwip();
                break;
            case 16:
                return $this->getDateupdtd();
                break;
            case 17:
                return $this->getTimeupdtd();
                break;
            case 18:
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

        if (isset($alreadyDumpedObjects['WipHeader'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['WipHeader'][$this->hashCode()] = true;
        $keys = WipHeaderTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getWiphwipnbr(),
            $keys[1] => $this->getWiphstatus(),
            $keys[2] => $this->getIntbwhse(),
            $keys[3] => $this->getWiphplandate(),
            $keys[4] => $this->getWiphlevel(),
            $keys[5] => $this->getInititemnbr(),
            $keys[6] => $this->getWiphplanqty(),
            $keys[7] => $this->getWiphcmpltdqty(),
            $keys[8] => $this->getWiphcmpltddate(),
            $keys[9] => $this->getWiphbin(),
            $keys[10] => $this->getOehdnbr(),
            $keys[11] => $this->getArcucustid(),
            $keys[12] => $this->getWiphworkcenter(),
            $keys[13] => $this->getWiphoper(),
            $keys[14] => $this->getWiphalumaser(),
            $keys[15] => $this->getWiphnegwip(),
            $keys[16] => $this->getDateupdtd(),
            $keys[17] => $this->getTimeupdtd(),
            $keys[18] => $this->getDummy(),
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
     * @return $this|\WipHeader
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = WipHeaderTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\WipHeader
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setWiphwipnbr($value);
                break;
            case 1:
                $this->setWiphstatus($value);
                break;
            case 2:
                $this->setIntbwhse($value);
                break;
            case 3:
                $this->setWiphplandate($value);
                break;
            case 4:
                $this->setWiphlevel($value);
                break;
            case 5:
                $this->setInititemnbr($value);
                break;
            case 6:
                $this->setWiphplanqty($value);
                break;
            case 7:
                $this->setWiphcmpltdqty($value);
                break;
            case 8:
                $this->setWiphcmpltddate($value);
                break;
            case 9:
                $this->setWiphbin($value);
                break;
            case 10:
                $this->setOehdnbr($value);
                break;
            case 11:
                $this->setArcucustid($value);
                break;
            case 12:
                $this->setWiphworkcenter($value);
                break;
            case 13:
                $this->setWiphoper($value);
                break;
            case 14:
                $this->setWiphalumaser($value);
                break;
            case 15:
                $this->setWiphnegwip($value);
                break;
            case 16:
                $this->setDateupdtd($value);
                break;
            case 17:
                $this->setTimeupdtd($value);
                break;
            case 18:
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
        $keys = WipHeaderTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setWiphwipnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setWiphstatus($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setIntbwhse($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setWiphplandate($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setWiphlevel($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setInititemnbr($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setWiphplanqty($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setWiphcmpltdqty($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setWiphcmpltddate($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setWiphbin($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setOehdnbr($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setArcucustid($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setWiphworkcenter($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setWiphoper($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setWiphalumaser($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setWiphnegwip($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setDateupdtd($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setTimeupdtd($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setDummy($arr[$keys[18]]);
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
     * @return $this|\WipHeader The current object, for fluid interface
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
        $criteria = new Criteria(WipHeaderTableMap::DATABASE_NAME);

        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHWIPNBR)) {
            $criteria->add(WipHeaderTableMap::COL_WIPHWIPNBR, $this->wiphwipnbr);
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHSTATUS)) {
            $criteria->add(WipHeaderTableMap::COL_WIPHSTATUS, $this->wiphstatus);
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_INTBWHSE)) {
            $criteria->add(WipHeaderTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHPLANDATE)) {
            $criteria->add(WipHeaderTableMap::COL_WIPHPLANDATE, $this->wiphplandate);
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHLEVEL)) {
            $criteria->add(WipHeaderTableMap::COL_WIPHLEVEL, $this->wiphlevel);
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_INITITEMNBR)) {
            $criteria->add(WipHeaderTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHPLANQTY)) {
            $criteria->add(WipHeaderTableMap::COL_WIPHPLANQTY, $this->wiphplanqty);
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHCMPLTDQTY)) {
            $criteria->add(WipHeaderTableMap::COL_WIPHCMPLTDQTY, $this->wiphcmpltdqty);
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHCMPLTDDATE)) {
            $criteria->add(WipHeaderTableMap::COL_WIPHCMPLTDDATE, $this->wiphcmpltddate);
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHBIN)) {
            $criteria->add(WipHeaderTableMap::COL_WIPHBIN, $this->wiphbin);
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_OEHDNBR)) {
            $criteria->add(WipHeaderTableMap::COL_OEHDNBR, $this->oehdnbr);
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_ARCUCUSTID)) {
            $criteria->add(WipHeaderTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHWORKCENTER)) {
            $criteria->add(WipHeaderTableMap::COL_WIPHWORKCENTER, $this->wiphworkcenter);
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHOPER)) {
            $criteria->add(WipHeaderTableMap::COL_WIPHOPER, $this->wiphoper);
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHALUMASER)) {
            $criteria->add(WipHeaderTableMap::COL_WIPHALUMASER, $this->wiphalumaser);
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_WIPHNEGWIP)) {
            $criteria->add(WipHeaderTableMap::COL_WIPHNEGWIP, $this->wiphnegwip);
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_DATEUPDTD)) {
            $criteria->add(WipHeaderTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_TIMEUPDTD)) {
            $criteria->add(WipHeaderTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(WipHeaderTableMap::COL_DUMMY)) {
            $criteria->add(WipHeaderTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildWipHeaderQuery::create();
        $criteria->add(WipHeaderTableMap::COL_WIPHWIPNBR, $this->wiphwipnbr);

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
        $validPk = null !== $this->getWiphwipnbr();

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
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getWiphwipnbr();
    }

    /**
     * Generic method to set the primary key (wiphwipnbr column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setWiphwipnbr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getWiphwipnbr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \WipHeader (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setWiphwipnbr($this->getWiphwipnbr());
        $copyObj->setWiphstatus($this->getWiphstatus());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setWiphplandate($this->getWiphplandate());
        $copyObj->setWiphlevel($this->getWiphlevel());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setWiphplanqty($this->getWiphplanqty());
        $copyObj->setWiphcmpltdqty($this->getWiphcmpltdqty());
        $copyObj->setWiphcmpltddate($this->getWiphcmpltddate());
        $copyObj->setWiphbin($this->getWiphbin());
        $copyObj->setOehdnbr($this->getOehdnbr());
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setWiphworkcenter($this->getWiphworkcenter());
        $copyObj->setWiphoper($this->getWiphoper());
        $copyObj->setWiphalumaser($this->getWiphalumaser());
        $copyObj->setWiphnegwip($this->getWiphnegwip());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
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
     * @return \WipHeader Clone of current object.
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
        $this->wiphwipnbr = null;
        $this->wiphstatus = null;
        $this->intbwhse = null;
        $this->wiphplandate = null;
        $this->wiphlevel = null;
        $this->inititemnbr = null;
        $this->wiphplanqty = null;
        $this->wiphcmpltdqty = null;
        $this->wiphcmpltddate = null;
        $this->wiphbin = null;
        $this->oehdnbr = null;
        $this->arcucustid = null;
        $this->wiphworkcenter = null;
        $this->wiphoper = null;
        $this->wiphalumaser = null;
        $this->wiphnegwip = null;
        $this->dateupdtd = null;
        $this->timeupdtd = null;
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
        return (string) $this->exportTo(WipHeaderTableMap::DEFAULT_STRING_FORMAT);
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
