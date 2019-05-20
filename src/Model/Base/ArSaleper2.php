<?php

namespace Base;

use \ArSaleper2Query as ChildArSaleper2Query;
use \Exception;
use \PDO;
use Map\ArSaleper2TableMap;
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
 * Base class that represents a row from the 'AR_SALEPER2' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ArSaleper2 implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ArSaleper2TableMap';


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
     * The value for the arspsaleper2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arspsaleper2;

    /**
     * The value for the arspname field.
     *
     * @var        string
     */
    protected $arspname;

    /**
     * The value for the arspmtdsale field.
     *
     * @var        string
     */
    protected $arspmtdsale;

    /**
     * The value for the arspytdsale field.
     *
     * @var        string
     */
    protected $arspytdsale;

    /**
     * The value for the arspltdsale field.
     *
     * @var        string
     */
    protected $arspltdsale;

    /**
     * The value for the arsplastsaledate field.
     *
     * @var        int
     */
    protected $arsplastsaledate;

    /**
     * The value for the arspmtdcommearn field.
     *
     * @var        string
     */
    protected $arspmtdcommearn;

    /**
     * The value for the arspytdcommearn field.
     *
     * @var        string
     */
    protected $arspytdcommearn;

    /**
     * The value for the arspltdcommearn field.
     *
     * @var        string
     */
    protected $arspltdcommearn;

    /**
     * The value for the arspmtdcommpaid field.
     *
     * @var        string
     */
    protected $arspmtdcommpaid;

    /**
     * The value for the arspytdcommpaid field.
     *
     * @var        string
     */
    protected $arspytdcommpaid;

    /**
     * The value for the arspltdcommpaid field.
     *
     * @var        string
     */
    protected $arspltdcommpaid;

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
        $this->arspsaleper2 = '';
    }

    /**
     * Initializes internal state of Base\ArSaleper2 object.
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
     * Compares this with another <code>ArSaleper2</code> instance.  If
     * <code>obj</code> is an instance of <code>ArSaleper2</code>, delegates to
     * <code>equals(ArSaleper2)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ArSaleper2 The current object, for fluid interface
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
     * Get the [arspsaleper2] column value.
     *
     * @return string
     */
    public function getArspsaleper2()
    {
        return $this->arspsaleper2;
    }

    /**
     * Get the [arspname] column value.
     *
     * @return string
     */
    public function getArspname()
    {
        return $this->arspname;
    }

    /**
     * Get the [arspmtdsale] column value.
     *
     * @return string
     */
    public function getArspmtdsale()
    {
        return $this->arspmtdsale;
    }

    /**
     * Get the [arspytdsale] column value.
     *
     * @return string
     */
    public function getArspytdsale()
    {
        return $this->arspytdsale;
    }

    /**
     * Get the [arspltdsale] column value.
     *
     * @return string
     */
    public function getArspltdsale()
    {
        return $this->arspltdsale;
    }

    /**
     * Get the [arsplastsaledate] column value.
     *
     * @return int
     */
    public function getArsplastsaledate()
    {
        return $this->arsplastsaledate;
    }

    /**
     * Get the [arspmtdcommearn] column value.
     *
     * @return string
     */
    public function getArspmtdcommearn()
    {
        return $this->arspmtdcommearn;
    }

    /**
     * Get the [arspytdcommearn] column value.
     *
     * @return string
     */
    public function getArspytdcommearn()
    {
        return $this->arspytdcommearn;
    }

    /**
     * Get the [arspltdcommearn] column value.
     *
     * @return string
     */
    public function getArspltdcommearn()
    {
        return $this->arspltdcommearn;
    }

    /**
     * Get the [arspmtdcommpaid] column value.
     *
     * @return string
     */
    public function getArspmtdcommpaid()
    {
        return $this->arspmtdcommpaid;
    }

    /**
     * Get the [arspytdcommpaid] column value.
     *
     * @return string
     */
    public function getArspytdcommpaid()
    {
        return $this->arspytdcommpaid;
    }

    /**
     * Get the [arspltdcommpaid] column value.
     *
     * @return string
     */
    public function getArspltdcommpaid()
    {
        return $this->arspltdcommpaid;
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
     * Set the value of [arspsaleper2] column.
     *
     * @param string $v new value
     * @return $this|\ArSaleper2 The current object (for fluent API support)
     */
    public function setArspsaleper2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper2 !== $v) {
            $this->arspsaleper2 = $v;
            $this->modifiedColumns[ArSaleper2TableMap::COL_ARSPSALEPER2] = true;
        }

        return $this;
    } // setArspsaleper2()

    /**
     * Set the value of [arspname] column.
     *
     * @param string $v new value
     * @return $this|\ArSaleper2 The current object (for fluent API support)
     */
    public function setArspname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspname !== $v) {
            $this->arspname = $v;
            $this->modifiedColumns[ArSaleper2TableMap::COL_ARSPNAME] = true;
        }

        return $this;
    } // setArspname()

    /**
     * Set the value of [arspmtdsale] column.
     *
     * @param string $v new value
     * @return $this|\ArSaleper2 The current object (for fluent API support)
     */
    public function setArspmtdsale($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspmtdsale !== $v) {
            $this->arspmtdsale = $v;
            $this->modifiedColumns[ArSaleper2TableMap::COL_ARSPMTDSALE] = true;
        }

        return $this;
    } // setArspmtdsale()

    /**
     * Set the value of [arspytdsale] column.
     *
     * @param string $v new value
     * @return $this|\ArSaleper2 The current object (for fluent API support)
     */
    public function setArspytdsale($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspytdsale !== $v) {
            $this->arspytdsale = $v;
            $this->modifiedColumns[ArSaleper2TableMap::COL_ARSPYTDSALE] = true;
        }

        return $this;
    } // setArspytdsale()

    /**
     * Set the value of [arspltdsale] column.
     *
     * @param string $v new value
     * @return $this|\ArSaleper2 The current object (for fluent API support)
     */
    public function setArspltdsale($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspltdsale !== $v) {
            $this->arspltdsale = $v;
            $this->modifiedColumns[ArSaleper2TableMap::COL_ARSPLTDSALE] = true;
        }

        return $this;
    } // setArspltdsale()

    /**
     * Set the value of [arsplastsaledate] column.
     *
     * @param int $v new value
     * @return $this|\ArSaleper2 The current object (for fluent API support)
     */
    public function setArsplastsaledate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arsplastsaledate !== $v) {
            $this->arsplastsaledate = $v;
            $this->modifiedColumns[ArSaleper2TableMap::COL_ARSPLASTSALEDATE] = true;
        }

        return $this;
    } // setArsplastsaledate()

    /**
     * Set the value of [arspmtdcommearn] column.
     *
     * @param string $v new value
     * @return $this|\ArSaleper2 The current object (for fluent API support)
     */
    public function setArspmtdcommearn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspmtdcommearn !== $v) {
            $this->arspmtdcommearn = $v;
            $this->modifiedColumns[ArSaleper2TableMap::COL_ARSPMTDCOMMEARN] = true;
        }

        return $this;
    } // setArspmtdcommearn()

    /**
     * Set the value of [arspytdcommearn] column.
     *
     * @param string $v new value
     * @return $this|\ArSaleper2 The current object (for fluent API support)
     */
    public function setArspytdcommearn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspytdcommearn !== $v) {
            $this->arspytdcommearn = $v;
            $this->modifiedColumns[ArSaleper2TableMap::COL_ARSPYTDCOMMEARN] = true;
        }

        return $this;
    } // setArspytdcommearn()

    /**
     * Set the value of [arspltdcommearn] column.
     *
     * @param string $v new value
     * @return $this|\ArSaleper2 The current object (for fluent API support)
     */
    public function setArspltdcommearn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspltdcommearn !== $v) {
            $this->arspltdcommearn = $v;
            $this->modifiedColumns[ArSaleper2TableMap::COL_ARSPLTDCOMMEARN] = true;
        }

        return $this;
    } // setArspltdcommearn()

    /**
     * Set the value of [arspmtdcommpaid] column.
     *
     * @param string $v new value
     * @return $this|\ArSaleper2 The current object (for fluent API support)
     */
    public function setArspmtdcommpaid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspmtdcommpaid !== $v) {
            $this->arspmtdcommpaid = $v;
            $this->modifiedColumns[ArSaleper2TableMap::COL_ARSPMTDCOMMPAID] = true;
        }

        return $this;
    } // setArspmtdcommpaid()

    /**
     * Set the value of [arspytdcommpaid] column.
     *
     * @param string $v new value
     * @return $this|\ArSaleper2 The current object (for fluent API support)
     */
    public function setArspytdcommpaid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspytdcommpaid !== $v) {
            $this->arspytdcommpaid = $v;
            $this->modifiedColumns[ArSaleper2TableMap::COL_ARSPYTDCOMMPAID] = true;
        }

        return $this;
    } // setArspytdcommpaid()

    /**
     * Set the value of [arspltdcommpaid] column.
     *
     * @param string $v new value
     * @return $this|\ArSaleper2 The current object (for fluent API support)
     */
    public function setArspltdcommpaid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspltdcommpaid !== $v) {
            $this->arspltdcommpaid = $v;
            $this->modifiedColumns[ArSaleper2TableMap::COL_ARSPLTDCOMMPAID] = true;
        }

        return $this;
    } // setArspltdcommpaid()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param int $v new value
     * @return $this|\ArSaleper2 The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ArSaleper2TableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param int $v new value
     * @return $this|\ArSaleper2 The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ArSaleper2TableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ArSaleper2 The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ArSaleper2TableMap::COL_DUMMY] = true;
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
            if ($this->arspsaleper2 !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ArSaleper2TableMap::translateFieldName('Arspsaleper2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ArSaleper2TableMap::translateFieldName('Arspname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ArSaleper2TableMap::translateFieldName('Arspmtdsale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspmtdsale = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ArSaleper2TableMap::translateFieldName('Arspytdsale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspytdsale = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ArSaleper2TableMap::translateFieldName('Arspltdsale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspltdsale = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ArSaleper2TableMap::translateFieldName('Arsplastsaledate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arsplastsaledate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ArSaleper2TableMap::translateFieldName('Arspmtdcommearn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspmtdcommearn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ArSaleper2TableMap::translateFieldName('Arspytdcommearn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspytdcommearn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ArSaleper2TableMap::translateFieldName('Arspltdcommearn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspltdcommearn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ArSaleper2TableMap::translateFieldName('Arspmtdcommpaid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspmtdcommpaid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ArSaleper2TableMap::translateFieldName('Arspytdcommpaid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspytdcommpaid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ArSaleper2TableMap::translateFieldName('Arspltdcommpaid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspltdcommpaid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ArSaleper2TableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ArSaleper2TableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ArSaleper2TableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 15; // 15 = ArSaleper2TableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ArSaleper2'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ArSaleper2TableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildArSaleper2Query::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see ArSaleper2::setDeleted()
     * @see ArSaleper2::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArSaleper2TableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildArSaleper2Query::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArSaleper2TableMap::DATABASE_NAME);
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
                ArSaleper2TableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPSALEPER2)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer2';
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPNAME)) {
            $modifiedColumns[':p' . $index++]  = 'ArspName';
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPMTDSALE)) {
            $modifiedColumns[':p' . $index++]  = 'ArspMtdSale';
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPYTDSALE)) {
            $modifiedColumns[':p' . $index++]  = 'ArspYtdSale';
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPLTDSALE)) {
            $modifiedColumns[':p' . $index++]  = 'ArspLtdSale';
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPLASTSALEDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArspLastSaleDate';
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPMTDCOMMEARN)) {
            $modifiedColumns[':p' . $index++]  = 'ArspMtdCommEarn';
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPYTDCOMMEARN)) {
            $modifiedColumns[':p' . $index++]  = 'ArspYtdCommEarn';
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPLTDCOMMEARN)) {
            $modifiedColumns[':p' . $index++]  = 'ArspLtdCommEarn';
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPMTDCOMMPAID)) {
            $modifiedColumns[':p' . $index++]  = 'ArspMtdCommPaid';
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPYTDCOMMPAID)) {
            $modifiedColumns[':p' . $index++]  = 'ArspYtdCommPaid';
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPLTDCOMMPAID)) {
            $modifiedColumns[':p' . $index++]  = 'ArspLtdCommPaid';
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO AR_SALEPER2 (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ArspSalePer2':
                        $stmt->bindValue($identifier, $this->arspsaleper2, PDO::PARAM_STR);
                        break;
                    case 'ArspName':
                        $stmt->bindValue($identifier, $this->arspname, PDO::PARAM_STR);
                        break;
                    case 'ArspMtdSale':
                        $stmt->bindValue($identifier, $this->arspmtdsale, PDO::PARAM_STR);
                        break;
                    case 'ArspYtdSale':
                        $stmt->bindValue($identifier, $this->arspytdsale, PDO::PARAM_STR);
                        break;
                    case 'ArspLtdSale':
                        $stmt->bindValue($identifier, $this->arspltdsale, PDO::PARAM_STR);
                        break;
                    case 'ArspLastSaleDate':
                        $stmt->bindValue($identifier, $this->arsplastsaledate, PDO::PARAM_INT);
                        break;
                    case 'ArspMtdCommEarn':
                        $stmt->bindValue($identifier, $this->arspmtdcommearn, PDO::PARAM_STR);
                        break;
                    case 'ArspYtdCommEarn':
                        $stmt->bindValue($identifier, $this->arspytdcommearn, PDO::PARAM_STR);
                        break;
                    case 'ArspLtdCommEarn':
                        $stmt->bindValue($identifier, $this->arspltdcommearn, PDO::PARAM_STR);
                        break;
                    case 'ArspMtdCommPaid':
                        $stmt->bindValue($identifier, $this->arspmtdcommpaid, PDO::PARAM_STR);
                        break;
                    case 'ArspYtdCommPaid':
                        $stmt->bindValue($identifier, $this->arspytdcommpaid, PDO::PARAM_STR);
                        break;
                    case 'ArspLtdCommPaid':
                        $stmt->bindValue($identifier, $this->arspltdcommpaid, PDO::PARAM_STR);
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
        $pos = ArSaleper2TableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getArspsaleper2();
                break;
            case 1:
                return $this->getArspname();
                break;
            case 2:
                return $this->getArspmtdsale();
                break;
            case 3:
                return $this->getArspytdsale();
                break;
            case 4:
                return $this->getArspltdsale();
                break;
            case 5:
                return $this->getArsplastsaledate();
                break;
            case 6:
                return $this->getArspmtdcommearn();
                break;
            case 7:
                return $this->getArspytdcommearn();
                break;
            case 8:
                return $this->getArspltdcommearn();
                break;
            case 9:
                return $this->getArspmtdcommpaid();
                break;
            case 10:
                return $this->getArspytdcommpaid();
                break;
            case 11:
                return $this->getArspltdcommpaid();
                break;
            case 12:
                return $this->getDateupdtd();
                break;
            case 13:
                return $this->getTimeupdtd();
                break;
            case 14:
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

        if (isset($alreadyDumpedObjects['ArSaleper2'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ArSaleper2'][$this->hashCode()] = true;
        $keys = ArSaleper2TableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getArspsaleper2(),
            $keys[1] => $this->getArspname(),
            $keys[2] => $this->getArspmtdsale(),
            $keys[3] => $this->getArspytdsale(),
            $keys[4] => $this->getArspltdsale(),
            $keys[5] => $this->getArsplastsaledate(),
            $keys[6] => $this->getArspmtdcommearn(),
            $keys[7] => $this->getArspytdcommearn(),
            $keys[8] => $this->getArspltdcommearn(),
            $keys[9] => $this->getArspmtdcommpaid(),
            $keys[10] => $this->getArspytdcommpaid(),
            $keys[11] => $this->getArspltdcommpaid(),
            $keys[12] => $this->getDateupdtd(),
            $keys[13] => $this->getTimeupdtd(),
            $keys[14] => $this->getDummy(),
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
     * @return $this|\ArSaleper2
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ArSaleper2TableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ArSaleper2
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setArspsaleper2($value);
                break;
            case 1:
                $this->setArspname($value);
                break;
            case 2:
                $this->setArspmtdsale($value);
                break;
            case 3:
                $this->setArspytdsale($value);
                break;
            case 4:
                $this->setArspltdsale($value);
                break;
            case 5:
                $this->setArsplastsaledate($value);
                break;
            case 6:
                $this->setArspmtdcommearn($value);
                break;
            case 7:
                $this->setArspytdcommearn($value);
                break;
            case 8:
                $this->setArspltdcommearn($value);
                break;
            case 9:
                $this->setArspmtdcommpaid($value);
                break;
            case 10:
                $this->setArspytdcommpaid($value);
                break;
            case 11:
                $this->setArspltdcommpaid($value);
                break;
            case 12:
                $this->setDateupdtd($value);
                break;
            case 13:
                $this->setTimeupdtd($value);
                break;
            case 14:
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
        $keys = ArSaleper2TableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setArspsaleper2($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setArspname($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setArspmtdsale($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setArspytdsale($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setArspltdsale($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setArsplastsaledate($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setArspmtdcommearn($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setArspytdcommearn($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setArspltdcommearn($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setArspmtdcommpaid($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setArspytdcommpaid($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setArspltdcommpaid($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setDateupdtd($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setTimeupdtd($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setDummy($arr[$keys[14]]);
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
     * @return $this|\ArSaleper2 The current object, for fluid interface
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
        $criteria = new Criteria(ArSaleper2TableMap::DATABASE_NAME);

        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPSALEPER2)) {
            $criteria->add(ArSaleper2TableMap::COL_ARSPSALEPER2, $this->arspsaleper2);
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPNAME)) {
            $criteria->add(ArSaleper2TableMap::COL_ARSPNAME, $this->arspname);
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPMTDSALE)) {
            $criteria->add(ArSaleper2TableMap::COL_ARSPMTDSALE, $this->arspmtdsale);
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPYTDSALE)) {
            $criteria->add(ArSaleper2TableMap::COL_ARSPYTDSALE, $this->arspytdsale);
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPLTDSALE)) {
            $criteria->add(ArSaleper2TableMap::COL_ARSPLTDSALE, $this->arspltdsale);
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPLASTSALEDATE)) {
            $criteria->add(ArSaleper2TableMap::COL_ARSPLASTSALEDATE, $this->arsplastsaledate);
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPMTDCOMMEARN)) {
            $criteria->add(ArSaleper2TableMap::COL_ARSPMTDCOMMEARN, $this->arspmtdcommearn);
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPYTDCOMMEARN)) {
            $criteria->add(ArSaleper2TableMap::COL_ARSPYTDCOMMEARN, $this->arspytdcommearn);
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPLTDCOMMEARN)) {
            $criteria->add(ArSaleper2TableMap::COL_ARSPLTDCOMMEARN, $this->arspltdcommearn);
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPMTDCOMMPAID)) {
            $criteria->add(ArSaleper2TableMap::COL_ARSPMTDCOMMPAID, $this->arspmtdcommpaid);
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPYTDCOMMPAID)) {
            $criteria->add(ArSaleper2TableMap::COL_ARSPYTDCOMMPAID, $this->arspytdcommpaid);
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_ARSPLTDCOMMPAID)) {
            $criteria->add(ArSaleper2TableMap::COL_ARSPLTDCOMMPAID, $this->arspltdcommpaid);
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_DATEUPDTD)) {
            $criteria->add(ArSaleper2TableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_TIMEUPDTD)) {
            $criteria->add(ArSaleper2TableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ArSaleper2TableMap::COL_DUMMY)) {
            $criteria->add(ArSaleper2TableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildArSaleper2Query::create();
        $criteria->add(ArSaleper2TableMap::COL_ARSPSALEPER2, $this->arspsaleper2);

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
        $validPk = null !== $this->getArspsaleper2();

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
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getArspsaleper2();
    }

    /**
     * Generic method to set the primary key (arspsaleper2 column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setArspsaleper2($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getArspsaleper2();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ArSaleper2 (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setArspsaleper2($this->getArspsaleper2());
        $copyObj->setArspname($this->getArspname());
        $copyObj->setArspmtdsale($this->getArspmtdsale());
        $copyObj->setArspytdsale($this->getArspytdsale());
        $copyObj->setArspltdsale($this->getArspltdsale());
        $copyObj->setArsplastsaledate($this->getArsplastsaledate());
        $copyObj->setArspmtdcommearn($this->getArspmtdcommearn());
        $copyObj->setArspytdcommearn($this->getArspytdcommearn());
        $copyObj->setArspltdcommearn($this->getArspltdcommearn());
        $copyObj->setArspmtdcommpaid($this->getArspmtdcommpaid());
        $copyObj->setArspytdcommpaid($this->getArspytdcommpaid());
        $copyObj->setArspltdcommpaid($this->getArspltdcommpaid());
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
     * @return \ArSaleper2 Clone of current object.
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
        $this->arspsaleper2 = null;
        $this->arspname = null;
        $this->arspmtdsale = null;
        $this->arspytdsale = null;
        $this->arspltdsale = null;
        $this->arsplastsaledate = null;
        $this->arspmtdcommearn = null;
        $this->arspytdcommearn = null;
        $this->arspltdcommearn = null;
        $this->arspmtdcommpaid = null;
        $this->arspytdcommpaid = null;
        $this->arspltdcommpaid = null;
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
        return (string) $this->exportTo(ArSaleper2TableMap::DEFAULT_STRING_FORMAT);
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
