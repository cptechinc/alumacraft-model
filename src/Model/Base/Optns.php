<?php

namespace Base;

use \OptnsQuery as ChildOptnsQuery;
use \Exception;
use \PDO;
use Map\OptnsTableMap;
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
 * Base class that represents a row from the 'OPTNS' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class Optns implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\OptnsTableMap';


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
     * The value for the optn_system field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $optn_system;

    /**
     * The value for the optn_code field.
     *
     * @var        string
     */
    protected $optn_code;

    /**
     * The value for the optn_recnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $optn_recnbr;

    /**
     * The value for the optn_id field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $optn_id;

    /**
     * The value for the optn_iddesc field.
     *
     * @var        string
     */
    protected $optn_iddesc;

    /**
     * The value for the inititemnbr field.
     *
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the arcucustid field.
     *
     * @var        string
     */
    protected $arcucustid;

    /**
     * The value for the arcushipid field.
     *
     * @var        string
     */
    protected $arcushipid;

    /**
     * The value for the optn_code_desc field.
     *
     * @var        string
     */
    protected $optn_code_desc;

    /**
     * The value for the optn_validate field.
     *
     * @var        string
     */
    protected $optn_validate;

    /**
     * The value for the optn_force field.
     *
     * @var        string
     */
    protected $optn_force;

    /**
     * The value for the optn_note_code field.
     *
     * @var        string
     */
    protected $optn_note_code;

    /**
     * The value for the optn_list_seq field.
     *
     * @var        int
     */
    protected $optn_list_seq;

    /**
     * The value for the optn_file_name field.
     *
     * @var        string
     */
    protected $optn_file_name;

    /**
     * The value for the optn_adv_search field.
     *
     * @var        string
     */
    protected $optn_adv_search;

    /**
     * The value for the optn_field_type field.
     *
     * @var        string
     */
    protected $optn_field_type;

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
        $this->optn_system = '';
        $this->optn_recnbr = 0;
        $this->optn_id = '';
    }

    /**
     * Initializes internal state of Base\Optns object.
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
     * Compares this with another <code>Optns</code> instance.  If
     * <code>obj</code> is an instance of <code>Optns</code>, delegates to
     * <code>equals(Optns)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|Optns The current object, for fluid interface
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
     * Get the [optn_system] column value.
     *
     * @return string
     */
    public function getOptnSystem()
    {
        return $this->optn_system;
    }

    /**
     * Get the [optn_code] column value.
     *
     * @return string
     */
    public function getOptnCode()
    {
        return $this->optn_code;
    }

    /**
     * Get the [optn_recnbr] column value.
     *
     * @return int
     */
    public function getOptnRecnbr()
    {
        return $this->optn_recnbr;
    }

    /**
     * Get the [optn_id] column value.
     *
     * @return string
     */
    public function getOptnId()
    {
        return $this->optn_id;
    }

    /**
     * Get the [optn_iddesc] column value.
     *
     * @return string
     */
    public function getOptnIddesc()
    {
        return $this->optn_iddesc;
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
     * Get the [arcucustid] column value.
     *
     * @return string
     */
    public function getArcucustid()
    {
        return $this->arcucustid;
    }

    /**
     * Get the [arcushipid] column value.
     *
     * @return string
     */
    public function getArcushipid()
    {
        return $this->arcushipid;
    }

    /**
     * Get the [optn_code_desc] column value.
     *
     * @return string
     */
    public function getOptnCodeDesc()
    {
        return $this->optn_code_desc;
    }

    /**
     * Get the [optn_validate] column value.
     *
     * @return string
     */
    public function getOptnValidate()
    {
        return $this->optn_validate;
    }

    /**
     * Get the [optn_force] column value.
     *
     * @return string
     */
    public function getOptnForce()
    {
        return $this->optn_force;
    }

    /**
     * Get the [optn_note_code] column value.
     *
     * @return string
     */
    public function getOptnNoteCode()
    {
        return $this->optn_note_code;
    }

    /**
     * Get the [optn_list_seq] column value.
     *
     * @return int
     */
    public function getOptnListSeq()
    {
        return $this->optn_list_seq;
    }

    /**
     * Get the [optn_file_name] column value.
     *
     * @return string
     */
    public function getOptnFileName()
    {
        return $this->optn_file_name;
    }

    /**
     * Get the [optn_adv_search] column value.
     *
     * @return string
     */
    public function getOptnAdvSearch()
    {
        return $this->optn_adv_search;
    }

    /**
     * Get the [optn_field_type] column value.
     *
     * @return string
     */
    public function getOptnFieldType()
    {
        return $this->optn_field_type;
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
     * Set the value of [optn_system] column.
     *
     * @param string $v new value
     * @return $this|\Optns The current object (for fluent API support)
     */
    public function setOptnSystem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optn_system !== $v) {
            $this->optn_system = $v;
            $this->modifiedColumns[OptnsTableMap::COL_OPTN_SYSTEM] = true;
        }

        return $this;
    } // setOptnSystem()

    /**
     * Set the value of [optn_code] column.
     *
     * @param string $v new value
     * @return $this|\Optns The current object (for fluent API support)
     */
    public function setOptnCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optn_code !== $v) {
            $this->optn_code = $v;
            $this->modifiedColumns[OptnsTableMap::COL_OPTN_CODE] = true;
        }

        return $this;
    } // setOptnCode()

    /**
     * Set the value of [optn_recnbr] column.
     *
     * @param int $v new value
     * @return $this|\Optns The current object (for fluent API support)
     */
    public function setOptnRecnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->optn_recnbr !== $v) {
            $this->optn_recnbr = $v;
            $this->modifiedColumns[OptnsTableMap::COL_OPTN_RECNBR] = true;
        }

        return $this;
    } // setOptnRecnbr()

    /**
     * Set the value of [optn_id] column.
     *
     * @param string $v new value
     * @return $this|\Optns The current object (for fluent API support)
     */
    public function setOptnId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optn_id !== $v) {
            $this->optn_id = $v;
            $this->modifiedColumns[OptnsTableMap::COL_OPTN_ID] = true;
        }

        return $this;
    } // setOptnId()

    /**
     * Set the value of [optn_iddesc] column.
     *
     * @param string $v new value
     * @return $this|\Optns The current object (for fluent API support)
     */
    public function setOptnIddesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optn_iddesc !== $v) {
            $this->optn_iddesc = $v;
            $this->modifiedColumns[OptnsTableMap::COL_OPTN_IDDESC] = true;
        }

        return $this;
    } // setOptnIddesc()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\Optns The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[OptnsTableMap::COL_INITITEMNBR] = true;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [arcucustid] column.
     *
     * @param string $v new value
     * @return $this|\Optns The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[OptnsTableMap::COL_ARCUCUSTID] = true;
        }

        return $this;
    } // setArcucustid()

    /**
     * Set the value of [arcushipid] column.
     *
     * @param string $v new value
     * @return $this|\Optns The current object (for fluent API support)
     */
    public function setArcushipid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcushipid !== $v) {
            $this->arcushipid = $v;
            $this->modifiedColumns[OptnsTableMap::COL_ARCUSHIPID] = true;
        }

        return $this;
    } // setArcushipid()

    /**
     * Set the value of [optn_code_desc] column.
     *
     * @param string $v new value
     * @return $this|\Optns The current object (for fluent API support)
     */
    public function setOptnCodeDesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optn_code_desc !== $v) {
            $this->optn_code_desc = $v;
            $this->modifiedColumns[OptnsTableMap::COL_OPTN_CODE_DESC] = true;
        }

        return $this;
    } // setOptnCodeDesc()

    /**
     * Set the value of [optn_validate] column.
     *
     * @param string $v new value
     * @return $this|\Optns The current object (for fluent API support)
     */
    public function setOptnValidate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optn_validate !== $v) {
            $this->optn_validate = $v;
            $this->modifiedColumns[OptnsTableMap::COL_OPTN_VALIDATE] = true;
        }

        return $this;
    } // setOptnValidate()

    /**
     * Set the value of [optn_force] column.
     *
     * @param string $v new value
     * @return $this|\Optns The current object (for fluent API support)
     */
    public function setOptnForce($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optn_force !== $v) {
            $this->optn_force = $v;
            $this->modifiedColumns[OptnsTableMap::COL_OPTN_FORCE] = true;
        }

        return $this;
    } // setOptnForce()

    /**
     * Set the value of [optn_note_code] column.
     *
     * @param string $v new value
     * @return $this|\Optns The current object (for fluent API support)
     */
    public function setOptnNoteCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optn_note_code !== $v) {
            $this->optn_note_code = $v;
            $this->modifiedColumns[OptnsTableMap::COL_OPTN_NOTE_CODE] = true;
        }

        return $this;
    } // setOptnNoteCode()

    /**
     * Set the value of [optn_list_seq] column.
     *
     * @param int $v new value
     * @return $this|\Optns The current object (for fluent API support)
     */
    public function setOptnListSeq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->optn_list_seq !== $v) {
            $this->optn_list_seq = $v;
            $this->modifiedColumns[OptnsTableMap::COL_OPTN_LIST_SEQ] = true;
        }

        return $this;
    } // setOptnListSeq()

    /**
     * Set the value of [optn_file_name] column.
     *
     * @param string $v new value
     * @return $this|\Optns The current object (for fluent API support)
     */
    public function setOptnFileName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optn_file_name !== $v) {
            $this->optn_file_name = $v;
            $this->modifiedColumns[OptnsTableMap::COL_OPTN_FILE_NAME] = true;
        }

        return $this;
    } // setOptnFileName()

    /**
     * Set the value of [optn_adv_search] column.
     *
     * @param string $v new value
     * @return $this|\Optns The current object (for fluent API support)
     */
    public function setOptnAdvSearch($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optn_adv_search !== $v) {
            $this->optn_adv_search = $v;
            $this->modifiedColumns[OptnsTableMap::COL_OPTN_ADV_SEARCH] = true;
        }

        return $this;
    } // setOptnAdvSearch()

    /**
     * Set the value of [optn_field_type] column.
     *
     * @param string $v new value
     * @return $this|\Optns The current object (for fluent API support)
     */
    public function setOptnFieldType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->optn_field_type !== $v) {
            $this->optn_field_type = $v;
            $this->modifiedColumns[OptnsTableMap::COL_OPTN_FIELD_TYPE] = true;
        }

        return $this;
    } // setOptnFieldType()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\Optns The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[OptnsTableMap::COL_DUMMY] = true;
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
            if ($this->optn_system !== '') {
                return false;
            }

            if ($this->optn_recnbr !== 0) {
                return false;
            }

            if ($this->optn_id !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : OptnsTableMap::translateFieldName('OptnSystem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optn_system = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : OptnsTableMap::translateFieldName('OptnCode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optn_code = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : OptnsTableMap::translateFieldName('OptnRecnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optn_recnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : OptnsTableMap::translateFieldName('OptnId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optn_id = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : OptnsTableMap::translateFieldName('OptnIddesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optn_iddesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : OptnsTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : OptnsTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : OptnsTableMap::translateFieldName('Arcushipid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcushipid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : OptnsTableMap::translateFieldName('OptnCodeDesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optn_code_desc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : OptnsTableMap::translateFieldName('OptnValidate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optn_validate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : OptnsTableMap::translateFieldName('OptnForce', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optn_force = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : OptnsTableMap::translateFieldName('OptnNoteCode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optn_note_code = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : OptnsTableMap::translateFieldName('OptnListSeq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optn_list_seq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : OptnsTableMap::translateFieldName('OptnFileName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optn_file_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : OptnsTableMap::translateFieldName('OptnAdvSearch', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optn_adv_search = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : OptnsTableMap::translateFieldName('OptnFieldType', TableMap::TYPE_PHPNAME, $indexType)];
            $this->optn_field_type = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : OptnsTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 17; // 17 = OptnsTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Optns'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(OptnsTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildOptnsQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see Optns::setDeleted()
     * @see Optns::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(OptnsTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildOptnsQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(OptnsTableMap::DATABASE_NAME);
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
                OptnsTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_SYSTEM)) {
            $modifiedColumns[':p' . $index++]  = 'optn_system';
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'optn_code';
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_RECNBR)) {
            $modifiedColumns[':p' . $index++]  = 'optn_recnbr';
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_ID)) {
            $modifiedColumns[':p' . $index++]  = 'optn_id';
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_IDDESC)) {
            $modifiedColumns[':p' . $index++]  = 'optn_iddesc';
        }
        if ($this->isColumnModified(OptnsTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'initItemNbr';
        }
        if ($this->isColumnModified(OptnsTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'arcuCustId';
        }
        if ($this->isColumnModified(OptnsTableMap::COL_ARCUSHIPID)) {
            $modifiedColumns[':p' . $index++]  = 'arcuShipId';
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_CODE_DESC)) {
            $modifiedColumns[':p' . $index++]  = 'optn_code_desc';
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_VALIDATE)) {
            $modifiedColumns[':p' . $index++]  = 'optn_validate';
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_FORCE)) {
            $modifiedColumns[':p' . $index++]  = 'optn_force';
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_NOTE_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'optn_note_code';
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_LIST_SEQ)) {
            $modifiedColumns[':p' . $index++]  = 'optn_list_seq';
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_FILE_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'optn_file_name';
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_ADV_SEARCH)) {
            $modifiedColumns[':p' . $index++]  = 'optn_adv_search';
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_FIELD_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'optn_field_type';
        }
        if ($this->isColumnModified(OptnsTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO OPTNS (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'optn_system':
                        $stmt->bindValue($identifier, $this->optn_system, PDO::PARAM_STR);
                        break;
                    case 'optn_code':
                        $stmt->bindValue($identifier, $this->optn_code, PDO::PARAM_STR);
                        break;
                    case 'optn_recnbr':
                        $stmt->bindValue($identifier, $this->optn_recnbr, PDO::PARAM_INT);
                        break;
                    case 'optn_id':
                        $stmt->bindValue($identifier, $this->optn_id, PDO::PARAM_STR);
                        break;
                    case 'optn_iddesc':
                        $stmt->bindValue($identifier, $this->optn_iddesc, PDO::PARAM_STR);
                        break;
                    case 'initItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'arcuCustId':
                        $stmt->bindValue($identifier, $this->arcucustid, PDO::PARAM_STR);
                        break;
                    case 'arcuShipId':
                        $stmt->bindValue($identifier, $this->arcushipid, PDO::PARAM_STR);
                        break;
                    case 'optn_code_desc':
                        $stmt->bindValue($identifier, $this->optn_code_desc, PDO::PARAM_STR);
                        break;
                    case 'optn_validate':
                        $stmt->bindValue($identifier, $this->optn_validate, PDO::PARAM_STR);
                        break;
                    case 'optn_force':
                        $stmt->bindValue($identifier, $this->optn_force, PDO::PARAM_STR);
                        break;
                    case 'optn_note_code':
                        $stmt->bindValue($identifier, $this->optn_note_code, PDO::PARAM_STR);
                        break;
                    case 'optn_list_seq':
                        $stmt->bindValue($identifier, $this->optn_list_seq, PDO::PARAM_INT);
                        break;
                    case 'optn_file_name':
                        $stmt->bindValue($identifier, $this->optn_file_name, PDO::PARAM_STR);
                        break;
                    case 'optn_adv_search':
                        $stmt->bindValue($identifier, $this->optn_adv_search, PDO::PARAM_STR);
                        break;
                    case 'optn_field_type':
                        $stmt->bindValue($identifier, $this->optn_field_type, PDO::PARAM_STR);
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
        $pos = OptnsTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getOptnSystem();
                break;
            case 1:
                return $this->getOptnCode();
                break;
            case 2:
                return $this->getOptnRecnbr();
                break;
            case 3:
                return $this->getOptnId();
                break;
            case 4:
                return $this->getOptnIddesc();
                break;
            case 5:
                return $this->getInititemnbr();
                break;
            case 6:
                return $this->getArcucustid();
                break;
            case 7:
                return $this->getArcushipid();
                break;
            case 8:
                return $this->getOptnCodeDesc();
                break;
            case 9:
                return $this->getOptnValidate();
                break;
            case 10:
                return $this->getOptnForce();
                break;
            case 11:
                return $this->getOptnNoteCode();
                break;
            case 12:
                return $this->getOptnListSeq();
                break;
            case 13:
                return $this->getOptnFileName();
                break;
            case 14:
                return $this->getOptnAdvSearch();
                break;
            case 15:
                return $this->getOptnFieldType();
                break;
            case 16:
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

        if (isset($alreadyDumpedObjects['Optns'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Optns'][$this->hashCode()] = true;
        $keys = OptnsTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOptnSystem(),
            $keys[1] => $this->getOptnCode(),
            $keys[2] => $this->getOptnRecnbr(),
            $keys[3] => $this->getOptnId(),
            $keys[4] => $this->getOptnIddesc(),
            $keys[5] => $this->getInititemnbr(),
            $keys[6] => $this->getArcucustid(),
            $keys[7] => $this->getArcushipid(),
            $keys[8] => $this->getOptnCodeDesc(),
            $keys[9] => $this->getOptnValidate(),
            $keys[10] => $this->getOptnForce(),
            $keys[11] => $this->getOptnNoteCode(),
            $keys[12] => $this->getOptnListSeq(),
            $keys[13] => $this->getOptnFileName(),
            $keys[14] => $this->getOptnAdvSearch(),
            $keys[15] => $this->getOptnFieldType(),
            $keys[16] => $this->getDummy(),
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
     * @return $this|\Optns
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = OptnsTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Optns
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setOptnSystem($value);
                break;
            case 1:
                $this->setOptnCode($value);
                break;
            case 2:
                $this->setOptnRecnbr($value);
                break;
            case 3:
                $this->setOptnId($value);
                break;
            case 4:
                $this->setOptnIddesc($value);
                break;
            case 5:
                $this->setInititemnbr($value);
                break;
            case 6:
                $this->setArcucustid($value);
                break;
            case 7:
                $this->setArcushipid($value);
                break;
            case 8:
                $this->setOptnCodeDesc($value);
                break;
            case 9:
                $this->setOptnValidate($value);
                break;
            case 10:
                $this->setOptnForce($value);
                break;
            case 11:
                $this->setOptnNoteCode($value);
                break;
            case 12:
                $this->setOptnListSeq($value);
                break;
            case 13:
                $this->setOptnFileName($value);
                break;
            case 14:
                $this->setOptnAdvSearch($value);
                break;
            case 15:
                $this->setOptnFieldType($value);
                break;
            case 16:
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
        $keys = OptnsTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setOptnSystem($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setOptnCode($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setOptnRecnbr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setOptnId($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setOptnIddesc($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setInititemnbr($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setArcucustid($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setArcushipid($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setOptnCodeDesc($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setOptnValidate($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setOptnForce($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setOptnNoteCode($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setOptnListSeq($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setOptnFileName($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setOptnAdvSearch($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setOptnFieldType($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setDummy($arr[$keys[16]]);
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
     * @return $this|\Optns The current object, for fluid interface
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
        $criteria = new Criteria(OptnsTableMap::DATABASE_NAME);

        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_SYSTEM)) {
            $criteria->add(OptnsTableMap::COL_OPTN_SYSTEM, $this->optn_system);
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_CODE)) {
            $criteria->add(OptnsTableMap::COL_OPTN_CODE, $this->optn_code);
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_RECNBR)) {
            $criteria->add(OptnsTableMap::COL_OPTN_RECNBR, $this->optn_recnbr);
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_ID)) {
            $criteria->add(OptnsTableMap::COL_OPTN_ID, $this->optn_id);
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_IDDESC)) {
            $criteria->add(OptnsTableMap::COL_OPTN_IDDESC, $this->optn_iddesc);
        }
        if ($this->isColumnModified(OptnsTableMap::COL_INITITEMNBR)) {
            $criteria->add(OptnsTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(OptnsTableMap::COL_ARCUCUSTID)) {
            $criteria->add(OptnsTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(OptnsTableMap::COL_ARCUSHIPID)) {
            $criteria->add(OptnsTableMap::COL_ARCUSHIPID, $this->arcushipid);
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_CODE_DESC)) {
            $criteria->add(OptnsTableMap::COL_OPTN_CODE_DESC, $this->optn_code_desc);
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_VALIDATE)) {
            $criteria->add(OptnsTableMap::COL_OPTN_VALIDATE, $this->optn_validate);
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_FORCE)) {
            $criteria->add(OptnsTableMap::COL_OPTN_FORCE, $this->optn_force);
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_NOTE_CODE)) {
            $criteria->add(OptnsTableMap::COL_OPTN_NOTE_CODE, $this->optn_note_code);
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_LIST_SEQ)) {
            $criteria->add(OptnsTableMap::COL_OPTN_LIST_SEQ, $this->optn_list_seq);
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_FILE_NAME)) {
            $criteria->add(OptnsTableMap::COL_OPTN_FILE_NAME, $this->optn_file_name);
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_ADV_SEARCH)) {
            $criteria->add(OptnsTableMap::COL_OPTN_ADV_SEARCH, $this->optn_adv_search);
        }
        if ($this->isColumnModified(OptnsTableMap::COL_OPTN_FIELD_TYPE)) {
            $criteria->add(OptnsTableMap::COL_OPTN_FIELD_TYPE, $this->optn_field_type);
        }
        if ($this->isColumnModified(OptnsTableMap::COL_DUMMY)) {
            $criteria->add(OptnsTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildOptnsQuery::create();
        $criteria->add(OptnsTableMap::COL_OPTN_SYSTEM, $this->optn_system);
        $criteria->add(OptnsTableMap::COL_OPTN_RECNBR, $this->optn_recnbr);
        $criteria->add(OptnsTableMap::COL_OPTN_ID, $this->optn_id);

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
        $validPk = null !== $this->getOptnSystem() &&
            null !== $this->getOptnRecnbr() &&
            null !== $this->getOptnId();

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
        $pks[0] = $this->getOptnSystem();
        $pks[1] = $this->getOptnRecnbr();
        $pks[2] = $this->getOptnId();

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
        $this->setOptnSystem($keys[0]);
        $this->setOptnRecnbr($keys[1]);
        $this->setOptnId($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getOptnSystem()) && (null === $this->getOptnRecnbr()) && (null === $this->getOptnId());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Optns (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOptnSystem($this->getOptnSystem());
        $copyObj->setOptnCode($this->getOptnCode());
        $copyObj->setOptnRecnbr($this->getOptnRecnbr());
        $copyObj->setOptnId($this->getOptnId());
        $copyObj->setOptnIddesc($this->getOptnIddesc());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setArcushipid($this->getArcushipid());
        $copyObj->setOptnCodeDesc($this->getOptnCodeDesc());
        $copyObj->setOptnValidate($this->getOptnValidate());
        $copyObj->setOptnForce($this->getOptnForce());
        $copyObj->setOptnNoteCode($this->getOptnNoteCode());
        $copyObj->setOptnListSeq($this->getOptnListSeq());
        $copyObj->setOptnFileName($this->getOptnFileName());
        $copyObj->setOptnAdvSearch($this->getOptnAdvSearch());
        $copyObj->setOptnFieldType($this->getOptnFieldType());
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
     * @return \Optns Clone of current object.
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
        $this->optn_system = null;
        $this->optn_code = null;
        $this->optn_recnbr = null;
        $this->optn_id = null;
        $this->optn_iddesc = null;
        $this->inititemnbr = null;
        $this->arcucustid = null;
        $this->arcushipid = null;
        $this->optn_code_desc = null;
        $this->optn_validate = null;
        $this->optn_force = null;
        $this->optn_note_code = null;
        $this->optn_list_seq = null;
        $this->optn_file_name = null;
        $this->optn_adv_search = null;
        $this->optn_field_type = null;
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
        return (string) $this->exportTo(OptnsTableMap::DEFAULT_STRING_FORMAT);
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
