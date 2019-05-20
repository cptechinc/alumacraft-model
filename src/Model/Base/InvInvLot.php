<?php

namespace Base;

use \InvInvLotQuery as ChildInvInvLotQuery;
use \Exception;
use \PDO;
use Map\InvInvLotTableMap;
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
 * Base class that represents a row from the 'INV_INV_LOT' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class InvInvLot implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\InvInvLotTableMap';


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
     * The value for the inititemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the intbwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the inltlotser field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inltlotser;

    /**
     * The value for the inltbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inltbin;

    /**
     * The value for the inltdate field.
     *
     * @var        int
     */
    protected $inltdate;

    /**
     * The value for the inltdatewrit field.
     *
     * @var        int
     */
    protected $inltdatewrit;

    /**
     * The value for the inltcost field.
     *
     * @var        string
     */
    protected $inltcost;

    /**
     * The value for the inltonhand field.
     *
     * @var        string
     */
    protected $inltonhand;

    /**
     * The value for the inltresv field.
     *
     * @var        string
     */
    protected $inltresv;

    /**
     * The value for the inltship field.
     *
     * @var        string
     */
    protected $inltship;

    /**
     * The value for the inltallo field.
     *
     * @var        string
     */
    protected $inltallo;

    /**
     * The value for the inltfaballo field.
     *
     * @var        string
     */
    protected $inltfaballo;

    /**
     * The value for the inltintran field.
     *
     * @var        string
     */
    protected $inltintran;

    /**
     * The value for the inltinship field.
     *
     * @var        string
     */
    protected $inltinship;

    /**
     * The value for the inltlotref field.
     *
     * @var        string
     */
    protected $inltlotref;

    /**
     * The value for the inltlandcost1 field.
     *
     * @var        string
     */
    protected $inltlandcost1;

    /**
     * The value for the inltlandcost2 field.
     *
     * @var        string
     */
    protected $inltlandcost2;

    /**
     * The value for the inltlandcost3 field.
     *
     * @var        string
     */
    protected $inltlandcost3;

    /**
     * The value for the inltlandcost4 field.
     *
     * @var        string
     */
    protected $inltlandcost4;

    /**
     * The value for the inltlandcost5 field.
     *
     * @var        string
     */
    protected $inltlandcost5;

    /**
     * The value for the inltlandcost6 field.
     *
     * @var        string
     */
    protected $inltlandcost6;

    /**
     * The value for the inltctry field.
     *
     * @var        string
     */
    protected $inltctry;

    /**
     * The value for the inltrvalorigcost field.
     *
     * @var        string
     */
    protected $inltrvalorigcost;

    /**
     * The value for the inltrvalpct field.
     *
     * @var        string
     */
    protected $inltrvalpct;

    /**
     * The value for the inltunitwght field.
     *
     * @var        string
     */
    protected $inltunitwght;

    /**
     * The value for the inltdestwhse field.
     *
     * @var        string
     */
    protected $inltdestwhse;

    /**
     * The value for the inltcntrqty field.
     *
     * @var        int
     */
    protected $inltcntrqty;

    /**
     * The value for the inlttarewght field.
     *
     * @var        string
     */
    protected $inlttarewght;

    /**
     * The value for the inltfrozen field.
     *
     * @var        string
     */
    protected $inltfrozen;

    /**
     * The value for the inltcert field.
     *
     * @var        string
     */
    protected $inltcert;

    /**
     * The value for the inltcuredate field.
     *
     * @var        string
     */
    protected $inltcuredate;

    /**
     * The value for the inltorigbin field.
     *
     * @var        string
     */
    protected $inltorigbin;

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
        $this->inititemnbr = '';
        $this->intbwhse = '';
        $this->inltlotser = '';
        $this->inltbin = '';
    }

    /**
     * Initializes internal state of Base\InvInvLot object.
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
     * Compares this with another <code>InvInvLot</code> instance.  If
     * <code>obj</code> is an instance of <code>InvInvLot</code>, delegates to
     * <code>equals(InvInvLot)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|InvInvLot The current object, for fluid interface
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
     * Get the [inititemnbr] column value.
     *
     * @return string
     */
    public function getInititemnbr()
    {
        return $this->inititemnbr;
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
     * Get the [inltlotser] column value.
     *
     * @return string
     */
    public function getInltlotser()
    {
        return $this->inltlotser;
    }

    /**
     * Get the [inltbin] column value.
     *
     * @return string
     */
    public function getInltbin()
    {
        return $this->inltbin;
    }

    /**
     * Get the [inltdate] column value.
     *
     * @return int
     */
    public function getInltdate()
    {
        return $this->inltdate;
    }

    /**
     * Get the [inltdatewrit] column value.
     *
     * @return int
     */
    public function getInltdatewrit()
    {
        return $this->inltdatewrit;
    }

    /**
     * Get the [inltcost] column value.
     *
     * @return string
     */
    public function getInltcost()
    {
        return $this->inltcost;
    }

    /**
     * Get the [inltonhand] column value.
     *
     * @return string
     */
    public function getInltonhand()
    {
        return $this->inltonhand;
    }

    /**
     * Get the [inltresv] column value.
     *
     * @return string
     */
    public function getInltresv()
    {
        return $this->inltresv;
    }

    /**
     * Get the [inltship] column value.
     *
     * @return string
     */
    public function getInltship()
    {
        return $this->inltship;
    }

    /**
     * Get the [inltallo] column value.
     *
     * @return string
     */
    public function getInltallo()
    {
        return $this->inltallo;
    }

    /**
     * Get the [inltfaballo] column value.
     *
     * @return string
     */
    public function getInltfaballo()
    {
        return $this->inltfaballo;
    }

    /**
     * Get the [inltintran] column value.
     *
     * @return string
     */
    public function getInltintran()
    {
        return $this->inltintran;
    }

    /**
     * Get the [inltinship] column value.
     *
     * @return string
     */
    public function getInltinship()
    {
        return $this->inltinship;
    }

    /**
     * Get the [inltlotref] column value.
     *
     * @return string
     */
    public function getInltlotref()
    {
        return $this->inltlotref;
    }

    /**
     * Get the [inltlandcost1] column value.
     *
     * @return string
     */
    public function getInltlandcost1()
    {
        return $this->inltlandcost1;
    }

    /**
     * Get the [inltlandcost2] column value.
     *
     * @return string
     */
    public function getInltlandcost2()
    {
        return $this->inltlandcost2;
    }

    /**
     * Get the [inltlandcost3] column value.
     *
     * @return string
     */
    public function getInltlandcost3()
    {
        return $this->inltlandcost3;
    }

    /**
     * Get the [inltlandcost4] column value.
     *
     * @return string
     */
    public function getInltlandcost4()
    {
        return $this->inltlandcost4;
    }

    /**
     * Get the [inltlandcost5] column value.
     *
     * @return string
     */
    public function getInltlandcost5()
    {
        return $this->inltlandcost5;
    }

    /**
     * Get the [inltlandcost6] column value.
     *
     * @return string
     */
    public function getInltlandcost6()
    {
        return $this->inltlandcost6;
    }

    /**
     * Get the [inltctry] column value.
     *
     * @return string
     */
    public function getInltctry()
    {
        return $this->inltctry;
    }

    /**
     * Get the [inltrvalorigcost] column value.
     *
     * @return string
     */
    public function getInltrvalorigcost()
    {
        return $this->inltrvalorigcost;
    }

    /**
     * Get the [inltrvalpct] column value.
     *
     * @return string
     */
    public function getInltrvalpct()
    {
        return $this->inltrvalpct;
    }

    /**
     * Get the [inltunitwght] column value.
     *
     * @return string
     */
    public function getInltunitwght()
    {
        return $this->inltunitwght;
    }

    /**
     * Get the [inltdestwhse] column value.
     *
     * @return string
     */
    public function getInltdestwhse()
    {
        return $this->inltdestwhse;
    }

    /**
     * Get the [inltcntrqty] column value.
     *
     * @return int
     */
    public function getInltcntrqty()
    {
        return $this->inltcntrqty;
    }

    /**
     * Get the [inlttarewght] column value.
     *
     * @return string
     */
    public function getInlttarewght()
    {
        return $this->inlttarewght;
    }

    /**
     * Get the [inltfrozen] column value.
     *
     * @return string
     */
    public function getInltfrozen()
    {
        return $this->inltfrozen;
    }

    /**
     * Get the [inltcert] column value.
     *
     * @return string
     */
    public function getInltcert()
    {
        return $this->inltcert;
    }

    /**
     * Get the [inltcuredate] column value.
     *
     * @return string
     */
    public function getInltcuredate()
    {
        return $this->inltcuredate;
    }

    /**
     * Get the [inltorigbin] column value.
     *
     * @return string
     */
    public function getInltorigbin()
    {
        return $this->inltorigbin;
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
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INITITEMNBR] = true;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INTBWHSE] = true;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [inltlotser] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltlotser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltlotser !== $v) {
            $this->inltlotser = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTLOTSER] = true;
        }

        return $this;
    } // setInltlotser()

    /**
     * Set the value of [inltbin] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltbin !== $v) {
            $this->inltbin = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTBIN] = true;
        }

        return $this;
    } // setInltbin()

    /**
     * Set the value of [inltdate] column.
     *
     * @param int $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltdate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inltdate !== $v) {
            $this->inltdate = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTDATE] = true;
        }

        return $this;
    } // setInltdate()

    /**
     * Set the value of [inltdatewrit] column.
     *
     * @param int $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltdatewrit($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inltdatewrit !== $v) {
            $this->inltdatewrit = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTDATEWRIT] = true;
        }

        return $this;
    } // setInltdatewrit()

    /**
     * Set the value of [inltcost] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltcost !== $v) {
            $this->inltcost = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTCOST] = true;
        }

        return $this;
    } // setInltcost()

    /**
     * Set the value of [inltonhand] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltonhand($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltonhand !== $v) {
            $this->inltonhand = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTONHAND] = true;
        }

        return $this;
    } // setInltonhand()

    /**
     * Set the value of [inltresv] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltresv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltresv !== $v) {
            $this->inltresv = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTRESV] = true;
        }

        return $this;
    } // setInltresv()

    /**
     * Set the value of [inltship] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltship !== $v) {
            $this->inltship = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTSHIP] = true;
        }

        return $this;
    } // setInltship()

    /**
     * Set the value of [inltallo] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltallo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltallo !== $v) {
            $this->inltallo = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTALLO] = true;
        }

        return $this;
    } // setInltallo()

    /**
     * Set the value of [inltfaballo] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltfaballo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltfaballo !== $v) {
            $this->inltfaballo = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTFABALLO] = true;
        }

        return $this;
    } // setInltfaballo()

    /**
     * Set the value of [inltintran] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltintran($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltintran !== $v) {
            $this->inltintran = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTINTRAN] = true;
        }

        return $this;
    } // setInltintran()

    /**
     * Set the value of [inltinship] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltinship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltinship !== $v) {
            $this->inltinship = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTINSHIP] = true;
        }

        return $this;
    } // setInltinship()

    /**
     * Set the value of [inltlotref] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltlotref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltlotref !== $v) {
            $this->inltlotref = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTLOTREF] = true;
        }

        return $this;
    } // setInltlotref()

    /**
     * Set the value of [inltlandcost1] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltlandcost1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltlandcost1 !== $v) {
            $this->inltlandcost1 = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTLANDCOST1] = true;
        }

        return $this;
    } // setInltlandcost1()

    /**
     * Set the value of [inltlandcost2] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltlandcost2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltlandcost2 !== $v) {
            $this->inltlandcost2 = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTLANDCOST2] = true;
        }

        return $this;
    } // setInltlandcost2()

    /**
     * Set the value of [inltlandcost3] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltlandcost3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltlandcost3 !== $v) {
            $this->inltlandcost3 = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTLANDCOST3] = true;
        }

        return $this;
    } // setInltlandcost3()

    /**
     * Set the value of [inltlandcost4] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltlandcost4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltlandcost4 !== $v) {
            $this->inltlandcost4 = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTLANDCOST4] = true;
        }

        return $this;
    } // setInltlandcost4()

    /**
     * Set the value of [inltlandcost5] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltlandcost5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltlandcost5 !== $v) {
            $this->inltlandcost5 = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTLANDCOST5] = true;
        }

        return $this;
    } // setInltlandcost5()

    /**
     * Set the value of [inltlandcost6] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltlandcost6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltlandcost6 !== $v) {
            $this->inltlandcost6 = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTLANDCOST6] = true;
        }

        return $this;
    } // setInltlandcost6()

    /**
     * Set the value of [inltctry] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltctry !== $v) {
            $this->inltctry = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTCTRY] = true;
        }

        return $this;
    } // setInltctry()

    /**
     * Set the value of [inltrvalorigcost] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltrvalorigcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltrvalorigcost !== $v) {
            $this->inltrvalorigcost = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTRVALORIGCOST] = true;
        }

        return $this;
    } // setInltrvalorigcost()

    /**
     * Set the value of [inltrvalpct] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltrvalpct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltrvalpct !== $v) {
            $this->inltrvalpct = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTRVALPCT] = true;
        }

        return $this;
    } // setInltrvalpct()

    /**
     * Set the value of [inltunitwght] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltunitwght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltunitwght !== $v) {
            $this->inltunitwght = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTUNITWGHT] = true;
        }

        return $this;
    } // setInltunitwght()

    /**
     * Set the value of [inltdestwhse] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltdestwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltdestwhse !== $v) {
            $this->inltdestwhse = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTDESTWHSE] = true;
        }

        return $this;
    } // setInltdestwhse()

    /**
     * Set the value of [inltcntrqty] column.
     *
     * @param int $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltcntrqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inltcntrqty !== $v) {
            $this->inltcntrqty = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTCNTRQTY] = true;
        }

        return $this;
    } // setInltcntrqty()

    /**
     * Set the value of [inlttarewght] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInlttarewght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inlttarewght !== $v) {
            $this->inlttarewght = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTTAREWGHT] = true;
        }

        return $this;
    } // setInlttarewght()

    /**
     * Set the value of [inltfrozen] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltfrozen($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltfrozen !== $v) {
            $this->inltfrozen = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTFROZEN] = true;
        }

        return $this;
    } // setInltfrozen()

    /**
     * Set the value of [inltcert] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltcert($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltcert !== $v) {
            $this->inltcert = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTCERT] = true;
        }

        return $this;
    } // setInltcert()

    /**
     * Set the value of [inltcuredate] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltcuredate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltcuredate !== $v) {
            $this->inltcuredate = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTCUREDATE] = true;
        }

        return $this;
    } // setInltcuredate()

    /**
     * Set the value of [inltorigbin] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setInltorigbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inltorigbin !== $v) {
            $this->inltorigbin = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_INLTORIGBIN] = true;
        }

        return $this;
    } // setInltorigbin()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param int $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param int $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\InvInvLot The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[InvInvLotTableMap::COL_DUMMY] = true;
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
            if ($this->inititemnbr !== '') {
                return false;
            }

            if ($this->intbwhse !== '') {
                return false;
            }

            if ($this->inltlotser !== '') {
                return false;
            }

            if ($this->inltbin !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : InvInvLotTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : InvInvLotTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : InvInvLotTableMap::translateFieldName('Inltlotser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltlotser = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : InvInvLotTableMap::translateFieldName('Inltbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : InvInvLotTableMap::translateFieldName('Inltdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltdate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : InvInvLotTableMap::translateFieldName('Inltdatewrit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltdatewrit = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : InvInvLotTableMap::translateFieldName('Inltcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : InvInvLotTableMap::translateFieldName('Inltonhand', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltonhand = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : InvInvLotTableMap::translateFieldName('Inltresv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltresv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : InvInvLotTableMap::translateFieldName('Inltship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : InvInvLotTableMap::translateFieldName('Inltallo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltallo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : InvInvLotTableMap::translateFieldName('Inltfaballo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltfaballo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : InvInvLotTableMap::translateFieldName('Inltintran', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltintran = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : InvInvLotTableMap::translateFieldName('Inltinship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltinship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : InvInvLotTableMap::translateFieldName('Inltlotref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltlotref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : InvInvLotTableMap::translateFieldName('Inltlandcost1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltlandcost1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : InvInvLotTableMap::translateFieldName('Inltlandcost2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltlandcost2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : InvInvLotTableMap::translateFieldName('Inltlandcost3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltlandcost3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : InvInvLotTableMap::translateFieldName('Inltlandcost4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltlandcost4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : InvInvLotTableMap::translateFieldName('Inltlandcost5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltlandcost5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : InvInvLotTableMap::translateFieldName('Inltlandcost6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltlandcost6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : InvInvLotTableMap::translateFieldName('Inltctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : InvInvLotTableMap::translateFieldName('Inltrvalorigcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltrvalorigcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : InvInvLotTableMap::translateFieldName('Inltrvalpct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltrvalpct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : InvInvLotTableMap::translateFieldName('Inltunitwght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltunitwght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : InvInvLotTableMap::translateFieldName('Inltdestwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltdestwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : InvInvLotTableMap::translateFieldName('Inltcntrqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltcntrqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : InvInvLotTableMap::translateFieldName('Inlttarewght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inlttarewght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : InvInvLotTableMap::translateFieldName('Inltfrozen', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltfrozen = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : InvInvLotTableMap::translateFieldName('Inltcert', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltcert = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : InvInvLotTableMap::translateFieldName('Inltcuredate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltcuredate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : InvInvLotTableMap::translateFieldName('Inltorigbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inltorigbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : InvInvLotTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : InvInvLotTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : InvInvLotTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 35; // 35 = InvInvLotTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\InvInvLot'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(InvInvLotTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildInvInvLotQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see InvInvLot::setDeleted()
     * @see InvInvLot::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvInvLotTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildInvInvLotQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvInvLotTableMap::DATABASE_NAME);
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
                InvInvLotTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(InvInvLotTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTLOTSER)) {
            $modifiedColumns[':p' . $index++]  = 'InltLotSer';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTBIN)) {
            $modifiedColumns[':p' . $index++]  = 'InltBin';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InltDate';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTDATEWRIT)) {
            $modifiedColumns[':p' . $index++]  = 'InltDateWrit';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InltCost';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTONHAND)) {
            $modifiedColumns[':p' . $index++]  = 'InltOnHand';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTRESV)) {
            $modifiedColumns[':p' . $index++]  = 'InltResv';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'InltShip';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTALLO)) {
            $modifiedColumns[':p' . $index++]  = 'InltAllo';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTFABALLO)) {
            $modifiedColumns[':p' . $index++]  = 'InltFabAllo';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTINTRAN)) {
            $modifiedColumns[':p' . $index++]  = 'InltInTran';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTINSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'InltInShip';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTLOTREF)) {
            $modifiedColumns[':p' . $index++]  = 'InltLotRef';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTLANDCOST1)) {
            $modifiedColumns[':p' . $index++]  = 'InltLandCost1';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTLANDCOST2)) {
            $modifiedColumns[':p' . $index++]  = 'InltLandCost2';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTLANDCOST3)) {
            $modifiedColumns[':p' . $index++]  = 'InltLandCost3';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTLANDCOST4)) {
            $modifiedColumns[':p' . $index++]  = 'InltLandCost4';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTLANDCOST5)) {
            $modifiedColumns[':p' . $index++]  = 'InltLandCost5';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTLANDCOST6)) {
            $modifiedColumns[':p' . $index++]  = 'InltLandCost6';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'InltCtry';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTRVALORIGCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InltRvalOrigCost';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTRVALPCT)) {
            $modifiedColumns[':p' . $index++]  = 'InltRvalPct';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTUNITWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'InltUnitWght';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTDESTWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'InltDestWhse';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTCNTRQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InltCntrQty';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTTAREWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'InltTareWght';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTFROZEN)) {
            $modifiedColumns[':p' . $index++]  = 'InltFrozen';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTCERT)) {
            $modifiedColumns[':p' . $index++]  = 'InltCert';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTCUREDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InltCureDate';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTORIGBIN)) {
            $modifiedColumns[':p' . $index++]  = 'InltOrigBin';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO INV_INV_LOT (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'InltLotSer':
                        $stmt->bindValue($identifier, $this->inltlotser, PDO::PARAM_STR);
                        break;
                    case 'InltBin':
                        $stmt->bindValue($identifier, $this->inltbin, PDO::PARAM_STR);
                        break;
                    case 'InltDate':
                        $stmt->bindValue($identifier, $this->inltdate, PDO::PARAM_INT);
                        break;
                    case 'InltDateWrit':
                        $stmt->bindValue($identifier, $this->inltdatewrit, PDO::PARAM_INT);
                        break;
                    case 'InltCost':
                        $stmt->bindValue($identifier, $this->inltcost, PDO::PARAM_STR);
                        break;
                    case 'InltOnHand':
                        $stmt->bindValue($identifier, $this->inltonhand, PDO::PARAM_STR);
                        break;
                    case 'InltResv':
                        $stmt->bindValue($identifier, $this->inltresv, PDO::PARAM_STR);
                        break;
                    case 'InltShip':
                        $stmt->bindValue($identifier, $this->inltship, PDO::PARAM_STR);
                        break;
                    case 'InltAllo':
                        $stmt->bindValue($identifier, $this->inltallo, PDO::PARAM_STR);
                        break;
                    case 'InltFabAllo':
                        $stmt->bindValue($identifier, $this->inltfaballo, PDO::PARAM_STR);
                        break;
                    case 'InltInTran':
                        $stmt->bindValue($identifier, $this->inltintran, PDO::PARAM_STR);
                        break;
                    case 'InltInShip':
                        $stmt->bindValue($identifier, $this->inltinship, PDO::PARAM_STR);
                        break;
                    case 'InltLotRef':
                        $stmt->bindValue($identifier, $this->inltlotref, PDO::PARAM_STR);
                        break;
                    case 'InltLandCost1':
                        $stmt->bindValue($identifier, $this->inltlandcost1, PDO::PARAM_STR);
                        break;
                    case 'InltLandCost2':
                        $stmt->bindValue($identifier, $this->inltlandcost2, PDO::PARAM_STR);
                        break;
                    case 'InltLandCost3':
                        $stmt->bindValue($identifier, $this->inltlandcost3, PDO::PARAM_STR);
                        break;
                    case 'InltLandCost4':
                        $stmt->bindValue($identifier, $this->inltlandcost4, PDO::PARAM_STR);
                        break;
                    case 'InltLandCost5':
                        $stmt->bindValue($identifier, $this->inltlandcost5, PDO::PARAM_STR);
                        break;
                    case 'InltLandCost6':
                        $stmt->bindValue($identifier, $this->inltlandcost6, PDO::PARAM_STR);
                        break;
                    case 'InltCtry':
                        $stmt->bindValue($identifier, $this->inltctry, PDO::PARAM_STR);
                        break;
                    case 'InltRvalOrigCost':
                        $stmt->bindValue($identifier, $this->inltrvalorigcost, PDO::PARAM_STR);
                        break;
                    case 'InltRvalPct':
                        $stmt->bindValue($identifier, $this->inltrvalpct, PDO::PARAM_STR);
                        break;
                    case 'InltUnitWght':
                        $stmt->bindValue($identifier, $this->inltunitwght, PDO::PARAM_STR);
                        break;
                    case 'InltDestWhse':
                        $stmt->bindValue($identifier, $this->inltdestwhse, PDO::PARAM_STR);
                        break;
                    case 'InltCntrQty':
                        $stmt->bindValue($identifier, $this->inltcntrqty, PDO::PARAM_INT);
                        break;
                    case 'InltTareWght':
                        $stmt->bindValue($identifier, $this->inlttarewght, PDO::PARAM_STR);
                        break;
                    case 'InltFrozen':
                        $stmt->bindValue($identifier, $this->inltfrozen, PDO::PARAM_STR);
                        break;
                    case 'InltCert':
                        $stmt->bindValue($identifier, $this->inltcert, PDO::PARAM_STR);
                        break;
                    case 'InltCureDate':
                        $stmt->bindValue($identifier, $this->inltcuredate, PDO::PARAM_STR);
                        break;
                    case 'InltOrigBin':
                        $stmt->bindValue($identifier, $this->inltorigbin, PDO::PARAM_STR);
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
        $pos = InvInvLotTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getInititemnbr();
                break;
            case 1:
                return $this->getIntbwhse();
                break;
            case 2:
                return $this->getInltlotser();
                break;
            case 3:
                return $this->getInltbin();
                break;
            case 4:
                return $this->getInltdate();
                break;
            case 5:
                return $this->getInltdatewrit();
                break;
            case 6:
                return $this->getInltcost();
                break;
            case 7:
                return $this->getInltonhand();
                break;
            case 8:
                return $this->getInltresv();
                break;
            case 9:
                return $this->getInltship();
                break;
            case 10:
                return $this->getInltallo();
                break;
            case 11:
                return $this->getInltfaballo();
                break;
            case 12:
                return $this->getInltintran();
                break;
            case 13:
                return $this->getInltinship();
                break;
            case 14:
                return $this->getInltlotref();
                break;
            case 15:
                return $this->getInltlandcost1();
                break;
            case 16:
                return $this->getInltlandcost2();
                break;
            case 17:
                return $this->getInltlandcost3();
                break;
            case 18:
                return $this->getInltlandcost4();
                break;
            case 19:
                return $this->getInltlandcost5();
                break;
            case 20:
                return $this->getInltlandcost6();
                break;
            case 21:
                return $this->getInltctry();
                break;
            case 22:
                return $this->getInltrvalorigcost();
                break;
            case 23:
                return $this->getInltrvalpct();
                break;
            case 24:
                return $this->getInltunitwght();
                break;
            case 25:
                return $this->getInltdestwhse();
                break;
            case 26:
                return $this->getInltcntrqty();
                break;
            case 27:
                return $this->getInlttarewght();
                break;
            case 28:
                return $this->getInltfrozen();
                break;
            case 29:
                return $this->getInltcert();
                break;
            case 30:
                return $this->getInltcuredate();
                break;
            case 31:
                return $this->getInltorigbin();
                break;
            case 32:
                return $this->getDateupdtd();
                break;
            case 33:
                return $this->getTimeupdtd();
                break;
            case 34:
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

        if (isset($alreadyDumpedObjects['InvInvLot'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['InvInvLot'][$this->hashCode()] = true;
        $keys = InvInvLotTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getInititemnbr(),
            $keys[1] => $this->getIntbwhse(),
            $keys[2] => $this->getInltlotser(),
            $keys[3] => $this->getInltbin(),
            $keys[4] => $this->getInltdate(),
            $keys[5] => $this->getInltdatewrit(),
            $keys[6] => $this->getInltcost(),
            $keys[7] => $this->getInltonhand(),
            $keys[8] => $this->getInltresv(),
            $keys[9] => $this->getInltship(),
            $keys[10] => $this->getInltallo(),
            $keys[11] => $this->getInltfaballo(),
            $keys[12] => $this->getInltintran(),
            $keys[13] => $this->getInltinship(),
            $keys[14] => $this->getInltlotref(),
            $keys[15] => $this->getInltlandcost1(),
            $keys[16] => $this->getInltlandcost2(),
            $keys[17] => $this->getInltlandcost3(),
            $keys[18] => $this->getInltlandcost4(),
            $keys[19] => $this->getInltlandcost5(),
            $keys[20] => $this->getInltlandcost6(),
            $keys[21] => $this->getInltctry(),
            $keys[22] => $this->getInltrvalorigcost(),
            $keys[23] => $this->getInltrvalpct(),
            $keys[24] => $this->getInltunitwght(),
            $keys[25] => $this->getInltdestwhse(),
            $keys[26] => $this->getInltcntrqty(),
            $keys[27] => $this->getInlttarewght(),
            $keys[28] => $this->getInltfrozen(),
            $keys[29] => $this->getInltcert(),
            $keys[30] => $this->getInltcuredate(),
            $keys[31] => $this->getInltorigbin(),
            $keys[32] => $this->getDateupdtd(),
            $keys[33] => $this->getTimeupdtd(),
            $keys[34] => $this->getDummy(),
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
     * @return $this|\InvInvLot
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = InvInvLotTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\InvInvLot
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setInititemnbr($value);
                break;
            case 1:
                $this->setIntbwhse($value);
                break;
            case 2:
                $this->setInltlotser($value);
                break;
            case 3:
                $this->setInltbin($value);
                break;
            case 4:
                $this->setInltdate($value);
                break;
            case 5:
                $this->setInltdatewrit($value);
                break;
            case 6:
                $this->setInltcost($value);
                break;
            case 7:
                $this->setInltonhand($value);
                break;
            case 8:
                $this->setInltresv($value);
                break;
            case 9:
                $this->setInltship($value);
                break;
            case 10:
                $this->setInltallo($value);
                break;
            case 11:
                $this->setInltfaballo($value);
                break;
            case 12:
                $this->setInltintran($value);
                break;
            case 13:
                $this->setInltinship($value);
                break;
            case 14:
                $this->setInltlotref($value);
                break;
            case 15:
                $this->setInltlandcost1($value);
                break;
            case 16:
                $this->setInltlandcost2($value);
                break;
            case 17:
                $this->setInltlandcost3($value);
                break;
            case 18:
                $this->setInltlandcost4($value);
                break;
            case 19:
                $this->setInltlandcost5($value);
                break;
            case 20:
                $this->setInltlandcost6($value);
                break;
            case 21:
                $this->setInltctry($value);
                break;
            case 22:
                $this->setInltrvalorigcost($value);
                break;
            case 23:
                $this->setInltrvalpct($value);
                break;
            case 24:
                $this->setInltunitwght($value);
                break;
            case 25:
                $this->setInltdestwhse($value);
                break;
            case 26:
                $this->setInltcntrqty($value);
                break;
            case 27:
                $this->setInlttarewght($value);
                break;
            case 28:
                $this->setInltfrozen($value);
                break;
            case 29:
                $this->setInltcert($value);
                break;
            case 30:
                $this->setInltcuredate($value);
                break;
            case 31:
                $this->setInltorigbin($value);
                break;
            case 32:
                $this->setDateupdtd($value);
                break;
            case 33:
                $this->setTimeupdtd($value);
                break;
            case 34:
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
        $keys = InvInvLotTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setInititemnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIntbwhse($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setInltlotser($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setInltbin($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setInltdate($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setInltdatewrit($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setInltcost($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setInltonhand($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setInltresv($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setInltship($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setInltallo($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setInltfaballo($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setInltintran($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setInltinship($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setInltlotref($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setInltlandcost1($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setInltlandcost2($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setInltlandcost3($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setInltlandcost4($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setInltlandcost5($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setInltlandcost6($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setInltctry($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setInltrvalorigcost($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setInltrvalpct($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setInltunitwght($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setInltdestwhse($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setInltcntrqty($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setInlttarewght($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setInltfrozen($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setInltcert($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setInltcuredate($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setInltorigbin($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setDateupdtd($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setTimeupdtd($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setDummy($arr[$keys[34]]);
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
     * @return $this|\InvInvLot The current object, for fluid interface
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
        $criteria = new Criteria(InvInvLotTableMap::DATABASE_NAME);

        if ($this->isColumnModified(InvInvLotTableMap::COL_INITITEMNBR)) {
            $criteria->add(InvInvLotTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INTBWHSE)) {
            $criteria->add(InvInvLotTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTLOTSER)) {
            $criteria->add(InvInvLotTableMap::COL_INLTLOTSER, $this->inltlotser);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTBIN)) {
            $criteria->add(InvInvLotTableMap::COL_INLTBIN, $this->inltbin);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTDATE)) {
            $criteria->add(InvInvLotTableMap::COL_INLTDATE, $this->inltdate);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTDATEWRIT)) {
            $criteria->add(InvInvLotTableMap::COL_INLTDATEWRIT, $this->inltdatewrit);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTCOST)) {
            $criteria->add(InvInvLotTableMap::COL_INLTCOST, $this->inltcost);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTONHAND)) {
            $criteria->add(InvInvLotTableMap::COL_INLTONHAND, $this->inltonhand);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTRESV)) {
            $criteria->add(InvInvLotTableMap::COL_INLTRESV, $this->inltresv);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTSHIP)) {
            $criteria->add(InvInvLotTableMap::COL_INLTSHIP, $this->inltship);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTALLO)) {
            $criteria->add(InvInvLotTableMap::COL_INLTALLO, $this->inltallo);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTFABALLO)) {
            $criteria->add(InvInvLotTableMap::COL_INLTFABALLO, $this->inltfaballo);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTINTRAN)) {
            $criteria->add(InvInvLotTableMap::COL_INLTINTRAN, $this->inltintran);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTINSHIP)) {
            $criteria->add(InvInvLotTableMap::COL_INLTINSHIP, $this->inltinship);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTLOTREF)) {
            $criteria->add(InvInvLotTableMap::COL_INLTLOTREF, $this->inltlotref);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTLANDCOST1)) {
            $criteria->add(InvInvLotTableMap::COL_INLTLANDCOST1, $this->inltlandcost1);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTLANDCOST2)) {
            $criteria->add(InvInvLotTableMap::COL_INLTLANDCOST2, $this->inltlandcost2);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTLANDCOST3)) {
            $criteria->add(InvInvLotTableMap::COL_INLTLANDCOST3, $this->inltlandcost3);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTLANDCOST4)) {
            $criteria->add(InvInvLotTableMap::COL_INLTLANDCOST4, $this->inltlandcost4);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTLANDCOST5)) {
            $criteria->add(InvInvLotTableMap::COL_INLTLANDCOST5, $this->inltlandcost5);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTLANDCOST6)) {
            $criteria->add(InvInvLotTableMap::COL_INLTLANDCOST6, $this->inltlandcost6);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTCTRY)) {
            $criteria->add(InvInvLotTableMap::COL_INLTCTRY, $this->inltctry);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTRVALORIGCOST)) {
            $criteria->add(InvInvLotTableMap::COL_INLTRVALORIGCOST, $this->inltrvalorigcost);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTRVALPCT)) {
            $criteria->add(InvInvLotTableMap::COL_INLTRVALPCT, $this->inltrvalpct);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTUNITWGHT)) {
            $criteria->add(InvInvLotTableMap::COL_INLTUNITWGHT, $this->inltunitwght);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTDESTWHSE)) {
            $criteria->add(InvInvLotTableMap::COL_INLTDESTWHSE, $this->inltdestwhse);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTCNTRQTY)) {
            $criteria->add(InvInvLotTableMap::COL_INLTCNTRQTY, $this->inltcntrqty);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTTAREWGHT)) {
            $criteria->add(InvInvLotTableMap::COL_INLTTAREWGHT, $this->inlttarewght);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTFROZEN)) {
            $criteria->add(InvInvLotTableMap::COL_INLTFROZEN, $this->inltfrozen);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTCERT)) {
            $criteria->add(InvInvLotTableMap::COL_INLTCERT, $this->inltcert);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTCUREDATE)) {
            $criteria->add(InvInvLotTableMap::COL_INLTCUREDATE, $this->inltcuredate);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_INLTORIGBIN)) {
            $criteria->add(InvInvLotTableMap::COL_INLTORIGBIN, $this->inltorigbin);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_DATEUPDTD)) {
            $criteria->add(InvInvLotTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_TIMEUPDTD)) {
            $criteria->add(InvInvLotTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(InvInvLotTableMap::COL_DUMMY)) {
            $criteria->add(InvInvLotTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildInvInvLotQuery::create();
        $criteria->add(InvInvLotTableMap::COL_INITITEMNBR, $this->inititemnbr);
        $criteria->add(InvInvLotTableMap::COL_INTBWHSE, $this->intbwhse);
        $criteria->add(InvInvLotTableMap::COL_INLTLOTSER, $this->inltlotser);
        $criteria->add(InvInvLotTableMap::COL_INLTBIN, $this->inltbin);

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
        $validPk = null !== $this->getInititemnbr() &&
            null !== $this->getIntbwhse() &&
            null !== $this->getInltlotser() &&
            null !== $this->getInltbin();

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
        $pks[0] = $this->getInititemnbr();
        $pks[1] = $this->getIntbwhse();
        $pks[2] = $this->getInltlotser();
        $pks[3] = $this->getInltbin();

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
        $this->setInititemnbr($keys[0]);
        $this->setIntbwhse($keys[1]);
        $this->setInltlotser($keys[2]);
        $this->setInltbin($keys[3]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getInititemnbr()) && (null === $this->getIntbwhse()) && (null === $this->getInltlotser()) && (null === $this->getInltbin());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \InvInvLot (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setInltlotser($this->getInltlotser());
        $copyObj->setInltbin($this->getInltbin());
        $copyObj->setInltdate($this->getInltdate());
        $copyObj->setInltdatewrit($this->getInltdatewrit());
        $copyObj->setInltcost($this->getInltcost());
        $copyObj->setInltonhand($this->getInltonhand());
        $copyObj->setInltresv($this->getInltresv());
        $copyObj->setInltship($this->getInltship());
        $copyObj->setInltallo($this->getInltallo());
        $copyObj->setInltfaballo($this->getInltfaballo());
        $copyObj->setInltintran($this->getInltintran());
        $copyObj->setInltinship($this->getInltinship());
        $copyObj->setInltlotref($this->getInltlotref());
        $copyObj->setInltlandcost1($this->getInltlandcost1());
        $copyObj->setInltlandcost2($this->getInltlandcost2());
        $copyObj->setInltlandcost3($this->getInltlandcost3());
        $copyObj->setInltlandcost4($this->getInltlandcost4());
        $copyObj->setInltlandcost5($this->getInltlandcost5());
        $copyObj->setInltlandcost6($this->getInltlandcost6());
        $copyObj->setInltctry($this->getInltctry());
        $copyObj->setInltrvalorigcost($this->getInltrvalorigcost());
        $copyObj->setInltrvalpct($this->getInltrvalpct());
        $copyObj->setInltunitwght($this->getInltunitwght());
        $copyObj->setInltdestwhse($this->getInltdestwhse());
        $copyObj->setInltcntrqty($this->getInltcntrqty());
        $copyObj->setInlttarewght($this->getInlttarewght());
        $copyObj->setInltfrozen($this->getInltfrozen());
        $copyObj->setInltcert($this->getInltcert());
        $copyObj->setInltcuredate($this->getInltcuredate());
        $copyObj->setInltorigbin($this->getInltorigbin());
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
     * @return \InvInvLot Clone of current object.
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
        $this->inititemnbr = null;
        $this->intbwhse = null;
        $this->inltlotser = null;
        $this->inltbin = null;
        $this->inltdate = null;
        $this->inltdatewrit = null;
        $this->inltcost = null;
        $this->inltonhand = null;
        $this->inltresv = null;
        $this->inltship = null;
        $this->inltallo = null;
        $this->inltfaballo = null;
        $this->inltintran = null;
        $this->inltinship = null;
        $this->inltlotref = null;
        $this->inltlandcost1 = null;
        $this->inltlandcost2 = null;
        $this->inltlandcost3 = null;
        $this->inltlandcost4 = null;
        $this->inltlandcost5 = null;
        $this->inltlandcost6 = null;
        $this->inltctry = null;
        $this->inltrvalorigcost = null;
        $this->inltrvalpct = null;
        $this->inltunitwght = null;
        $this->inltdestwhse = null;
        $this->inltcntrqty = null;
        $this->inlttarewght = null;
        $this->inltfrozen = null;
        $this->inltcert = null;
        $this->inltcuredate = null;
        $this->inltorigbin = null;
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
        return (string) $this->exportTo(InvInvLotTableMap::DEFAULT_STRING_FORMAT);
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
