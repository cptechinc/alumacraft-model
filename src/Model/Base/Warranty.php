<?php

namespace Base;

use \WarrantyQuery as ChildWarrantyQuery;
use \Exception;
use \PDO;
use Map\WarrantyTableMap;
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
 * Base class that represents a row from the 'WARRANTY' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class Warranty implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\WarrantyTableMap';


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
     * The value for the warmseq field.
     *
     * @var        int
     */
    protected $warmseq;

    /**
     * The value for the inititemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the sermsernbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $sermsernbr;

    /**
     * The value for the warmsaledate field.
     *
     * @var        int
     */
    protected $warmsaledate;

    /**
     * The value for the warmownfname field.
     *
     * @var        string
     */
    protected $warmownfname;

    /**
     * The value for the warmownmname field.
     *
     * @var        string
     */
    protected $warmownmname;

    /**
     * The value for the warmownlname field.
     *
     * @var        string
     */
    protected $warmownlname;

    /**
     * The value for the warmownadr1 field.
     *
     * @var        string
     */
    protected $warmownadr1;

    /**
     * The value for the warmownadr2 field.
     *
     * @var        string
     */
    protected $warmownadr2;

    /**
     * The value for the warmownadr3 field.
     *
     * @var        string
     */
    protected $warmownadr3;

    /**
     * The value for the warmowncity field.
     *
     * @var        string
     */
    protected $warmowncity;

    /**
     * The value for the warmownstat field.
     *
     * @var        string
     */
    protected $warmownstat;

    /**
     * The value for the warmownzip field.
     *
     * @var        string
     */
    protected $warmownzip;

    /**
     * The value for the warmsordnbr field.
     *
     * @var        int
     */
    protected $warmsordnbr;

    /**
     * The value for the warminvcdate field.
     *
     * @var        int
     */
    protected $warminvcdate;

    /**
     * The value for the warmcustid field.
     *
     * @var        string
     */
    protected $warmcustid;

    /**
     * The value for the warmspid field.
     *
     * @var        string
     */
    protected $warmspid;

    /**
     * The value for the warmentrydate field.
     *
     * @var        int
     */
    protected $warmentrydate;

    /**
     * The value for the registermotor field.
     *
     * @var        string
     */
    protected $registermotor;

    /**
     * The value for the warmengsernbr field.
     *
     * @var        string
     */
    protected $warmengsernbr;

    /**
     * The value for the warmenghorse field.
     *
     * @var        string
     */
    protected $warmenghorse;

    /**
     * The value for the warmengmodelyear field.
     *
     * @var        int
     */
    protected $warmengmodelyear;

    /**
     * The value for the warmengdesc field.
     *
     * @var        string
     */
    protected $warmengdesc;

    /**
     * The value for the warmphone1 field.
     *
     * @var        string
     */
    protected $warmphone1;

    /**
     * The value for the warmphone2 field.
     *
     * @var        string
     */
    protected $warmphone2;

    /**
     * The value for the warmemail field.
     *
     * @var        string
     */
    protected $warmemail;

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
     * The value for the warmdelvdate field.
     *
     * @var        int
     */
    protected $warmdelvdate;

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
        $this->sermsernbr = '';
    }

    /**
     * Initializes internal state of Base\Warranty object.
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
     * Compares this with another <code>Warranty</code> instance.  If
     * <code>obj</code> is an instance of <code>Warranty</code>, delegates to
     * <code>equals(Warranty)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|Warranty The current object, for fluid interface
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
     * Get the [warmseq] column value.
     *
     * @return int
     */
    public function getWarmseq()
    {
        return $this->warmseq;
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
     * Get the [sermsernbr] column value.
     *
     * @return string
     */
    public function getSermsernbr()
    {
        return $this->sermsernbr;
    }

    /**
     * Get the [warmsaledate] column value.
     *
     * @return int
     */
    public function getWarmsaledate()
    {
        return $this->warmsaledate;
    }

    /**
     * Get the [warmownfname] column value.
     *
     * @return string
     */
    public function getWarmownfname()
    {
        return $this->warmownfname;
    }

    /**
     * Get the [warmownmname] column value.
     *
     * @return string
     */
    public function getWarmownmname()
    {
        return $this->warmownmname;
    }

    /**
     * Get the [warmownlname] column value.
     *
     * @return string
     */
    public function getWarmownlname()
    {
        return $this->warmownlname;
    }

    /**
     * Get the [warmownadr1] column value.
     *
     * @return string
     */
    public function getWarmownadr1()
    {
        return $this->warmownadr1;
    }

    /**
     * Get the [warmownadr2] column value.
     *
     * @return string
     */
    public function getWarmownadr2()
    {
        return $this->warmownadr2;
    }

    /**
     * Get the [warmownadr3] column value.
     *
     * @return string
     */
    public function getWarmownadr3()
    {
        return $this->warmownadr3;
    }

    /**
     * Get the [warmowncity] column value.
     *
     * @return string
     */
    public function getWarmowncity()
    {
        return $this->warmowncity;
    }

    /**
     * Get the [warmownstat] column value.
     *
     * @return string
     */
    public function getWarmownstat()
    {
        return $this->warmownstat;
    }

    /**
     * Get the [warmownzip] column value.
     *
     * @return string
     */
    public function getWarmownzip()
    {
        return $this->warmownzip;
    }

    /**
     * Get the [warmsordnbr] column value.
     *
     * @return int
     */
    public function getWarmsordnbr()
    {
        return $this->warmsordnbr;
    }

    /**
     * Get the [warminvcdate] column value.
     *
     * @return int
     */
    public function getWarminvcdate()
    {
        return $this->warminvcdate;
    }

    /**
     * Get the [warmcustid] column value.
     *
     * @return string
     */
    public function getWarmcustid()
    {
        return $this->warmcustid;
    }

    /**
     * Get the [warmspid] column value.
     *
     * @return string
     */
    public function getWarmspid()
    {
        return $this->warmspid;
    }

    /**
     * Get the [warmentrydate] column value.
     *
     * @return int
     */
    public function getWarmentrydate()
    {
        return $this->warmentrydate;
    }

    /**
     * Get the [registermotor] column value.
     *
     * @return string
     */
    public function getRegistermotor()
    {
        return $this->registermotor;
    }

    /**
     * Get the [warmengsernbr] column value.
     *
     * @return string
     */
    public function getWarmengsernbr()
    {
        return $this->warmengsernbr;
    }

    /**
     * Get the [warmenghorse] column value.
     *
     * @return string
     */
    public function getWarmenghorse()
    {
        return $this->warmenghorse;
    }

    /**
     * Get the [warmengmodelyear] column value.
     *
     * @return int
     */
    public function getWarmengmodelyear()
    {
        return $this->warmengmodelyear;
    }

    /**
     * Get the [warmengdesc] column value.
     *
     * @return string
     */
    public function getWarmengdesc()
    {
        return $this->warmengdesc;
    }

    /**
     * Get the [warmphone1] column value.
     *
     * @return string
     */
    public function getWarmphone1()
    {
        return $this->warmphone1;
    }

    /**
     * Get the [warmphone2] column value.
     *
     * @return string
     */
    public function getWarmphone2()
    {
        return $this->warmphone2;
    }

    /**
     * Get the [warmemail] column value.
     *
     * @return string
     */
    public function getWarmemail()
    {
        return $this->warmemail;
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
     * Get the [warmdelvdate] column value.
     *
     * @return int
     */
    public function getWarmdelvdate()
    {
        return $this->warmdelvdate;
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
     * Set the value of [warmseq] column.
     *
     * @param int $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->warmseq !== $v) {
            $this->warmseq = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMSEQ] = true;
        }

        return $this;
    } // setWarmseq()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_INITITEMNBR] = true;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [sermsernbr] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setSermsernbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sermsernbr !== $v) {
            $this->sermsernbr = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_SERMSERNBR] = true;
        }

        return $this;
    } // setSermsernbr()

    /**
     * Set the value of [warmsaledate] column.
     *
     * @param int $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmsaledate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->warmsaledate !== $v) {
            $this->warmsaledate = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMSALEDATE] = true;
        }

        return $this;
    } // setWarmsaledate()

    /**
     * Set the value of [warmownfname] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmownfname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmownfname !== $v) {
            $this->warmownfname = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMOWNFNAME] = true;
        }

        return $this;
    } // setWarmownfname()

    /**
     * Set the value of [warmownmname] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmownmname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmownmname !== $v) {
            $this->warmownmname = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMOWNMNAME] = true;
        }

        return $this;
    } // setWarmownmname()

    /**
     * Set the value of [warmownlname] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmownlname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmownlname !== $v) {
            $this->warmownlname = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMOWNLNAME] = true;
        }

        return $this;
    } // setWarmownlname()

    /**
     * Set the value of [warmownadr1] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmownadr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmownadr1 !== $v) {
            $this->warmownadr1 = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMOWNADR1] = true;
        }

        return $this;
    } // setWarmownadr1()

    /**
     * Set the value of [warmownadr2] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmownadr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmownadr2 !== $v) {
            $this->warmownadr2 = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMOWNADR2] = true;
        }

        return $this;
    } // setWarmownadr2()

    /**
     * Set the value of [warmownadr3] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmownadr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmownadr3 !== $v) {
            $this->warmownadr3 = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMOWNADR3] = true;
        }

        return $this;
    } // setWarmownadr3()

    /**
     * Set the value of [warmowncity] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmowncity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmowncity !== $v) {
            $this->warmowncity = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMOWNCITY] = true;
        }

        return $this;
    } // setWarmowncity()

    /**
     * Set the value of [warmownstat] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmownstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmownstat !== $v) {
            $this->warmownstat = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMOWNSTAT] = true;
        }

        return $this;
    } // setWarmownstat()

    /**
     * Set the value of [warmownzip] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmownzip($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmownzip !== $v) {
            $this->warmownzip = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMOWNZIP] = true;
        }

        return $this;
    } // setWarmownzip()

    /**
     * Set the value of [warmsordnbr] column.
     *
     * @param int $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmsordnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->warmsordnbr !== $v) {
            $this->warmsordnbr = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMSORDNBR] = true;
        }

        return $this;
    } // setWarmsordnbr()

    /**
     * Set the value of [warminvcdate] column.
     *
     * @param int $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarminvcdate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->warminvcdate !== $v) {
            $this->warminvcdate = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMINVCDATE] = true;
        }

        return $this;
    } // setWarminvcdate()

    /**
     * Set the value of [warmcustid] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmcustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmcustid !== $v) {
            $this->warmcustid = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMCUSTID] = true;
        }

        return $this;
    } // setWarmcustid()

    /**
     * Set the value of [warmspid] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmspid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmspid !== $v) {
            $this->warmspid = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMSPID] = true;
        }

        return $this;
    } // setWarmspid()

    /**
     * Set the value of [warmentrydate] column.
     *
     * @param int $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmentrydate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->warmentrydate !== $v) {
            $this->warmentrydate = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMENTRYDATE] = true;
        }

        return $this;
    } // setWarmentrydate()

    /**
     * Set the value of [registermotor] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setRegistermotor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->registermotor !== $v) {
            $this->registermotor = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_REGISTERMOTOR] = true;
        }

        return $this;
    } // setRegistermotor()

    /**
     * Set the value of [warmengsernbr] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmengsernbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmengsernbr !== $v) {
            $this->warmengsernbr = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMENGSERNBR] = true;
        }

        return $this;
    } // setWarmengsernbr()

    /**
     * Set the value of [warmenghorse] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmenghorse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmenghorse !== $v) {
            $this->warmenghorse = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMENGHORSE] = true;
        }

        return $this;
    } // setWarmenghorse()

    /**
     * Set the value of [warmengmodelyear] column.
     *
     * @param int $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmengmodelyear($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->warmengmodelyear !== $v) {
            $this->warmengmodelyear = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMENGMODELYEAR] = true;
        }

        return $this;
    } // setWarmengmodelyear()

    /**
     * Set the value of [warmengdesc] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmengdesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmengdesc !== $v) {
            $this->warmengdesc = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMENGDESC] = true;
        }

        return $this;
    } // setWarmengdesc()

    /**
     * Set the value of [warmphone1] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmphone1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmphone1 !== $v) {
            $this->warmphone1 = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMPHONE1] = true;
        }

        return $this;
    } // setWarmphone1()

    /**
     * Set the value of [warmphone2] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmphone2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmphone2 !== $v) {
            $this->warmphone2 = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMPHONE2] = true;
        }

        return $this;
    } // setWarmphone2()

    /**
     * Set the value of [warmemail] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmemail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->warmemail !== $v) {
            $this->warmemail = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMEMAIL] = true;
        }

        return $this;
    } // setWarmemail()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param int $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param int $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [warmdelvdate] column.
     *
     * @param int $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setWarmdelvdate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->warmdelvdate !== $v) {
            $this->warmdelvdate = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_WARMDELVDATE] = true;
        }

        return $this;
    } // setWarmdelvdate()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\Warranty The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[WarrantyTableMap::COL_DUMMY] = true;
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

            if ($this->sermsernbr !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : WarrantyTableMap::translateFieldName('Warmseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : WarrantyTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : WarrantyTableMap::translateFieldName('Sermsernbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sermsernbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : WarrantyTableMap::translateFieldName('Warmsaledate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmsaledate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : WarrantyTableMap::translateFieldName('Warmownfname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmownfname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : WarrantyTableMap::translateFieldName('Warmownmname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmownmname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : WarrantyTableMap::translateFieldName('Warmownlname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmownlname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : WarrantyTableMap::translateFieldName('Warmownadr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmownadr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : WarrantyTableMap::translateFieldName('Warmownadr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmownadr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : WarrantyTableMap::translateFieldName('Warmownadr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmownadr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : WarrantyTableMap::translateFieldName('Warmowncity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmowncity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : WarrantyTableMap::translateFieldName('Warmownstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmownstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : WarrantyTableMap::translateFieldName('Warmownzip', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmownzip = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : WarrantyTableMap::translateFieldName('Warmsordnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmsordnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : WarrantyTableMap::translateFieldName('Warminvcdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warminvcdate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : WarrantyTableMap::translateFieldName('Warmcustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmcustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : WarrantyTableMap::translateFieldName('Warmspid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmspid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : WarrantyTableMap::translateFieldName('Warmentrydate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmentrydate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : WarrantyTableMap::translateFieldName('Registermotor', TableMap::TYPE_PHPNAME, $indexType)];
            $this->registermotor = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : WarrantyTableMap::translateFieldName('Warmengsernbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmengsernbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : WarrantyTableMap::translateFieldName('Warmenghorse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmenghorse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : WarrantyTableMap::translateFieldName('Warmengmodelyear', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmengmodelyear = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : WarrantyTableMap::translateFieldName('Warmengdesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmengdesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : WarrantyTableMap::translateFieldName('Warmphone1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmphone1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : WarrantyTableMap::translateFieldName('Warmphone2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmphone2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : WarrantyTableMap::translateFieldName('Warmemail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmemail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : WarrantyTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : WarrantyTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : WarrantyTableMap::translateFieldName('Warmdelvdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->warmdelvdate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : WarrantyTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 30; // 30 = WarrantyTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Warranty'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(WarrantyTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildWarrantyQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see Warranty::setDeleted()
     * @see Warranty::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(WarrantyTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildWarrantyQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(WarrantyTableMap::DATABASE_NAME);
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
                WarrantyTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[WarrantyTableMap::COL_WARMSEQ] = true;
        if (null !== $this->warmseq) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . WarrantyTableMap::COL_WARMSEQ . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'WarmSeq';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_SERMSERNBR)) {
            $modifiedColumns[':p' . $index++]  = 'SermSerNbr';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMSALEDATE)) {
            $modifiedColumns[':p' . $index++]  = 'WarmSaleDate';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMOWNFNAME)) {
            $modifiedColumns[':p' . $index++]  = 'WarmOwnFname';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMOWNMNAME)) {
            $modifiedColumns[':p' . $index++]  = 'WarmOwnMname';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMOWNLNAME)) {
            $modifiedColumns[':p' . $index++]  = 'WarmOwnLname';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMOWNADR1)) {
            $modifiedColumns[':p' . $index++]  = 'WarmOwnAdr1';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMOWNADR2)) {
            $modifiedColumns[':p' . $index++]  = 'WarmOwnAdr2';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMOWNADR3)) {
            $modifiedColumns[':p' . $index++]  = 'WarmOwnAdr3';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMOWNCITY)) {
            $modifiedColumns[':p' . $index++]  = 'WarmOwnCity';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMOWNSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'WarmOwnStat';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMOWNZIP)) {
            $modifiedColumns[':p' . $index++]  = 'WarmOwnZip';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMSORDNBR)) {
            $modifiedColumns[':p' . $index++]  = 'WarmSordNbr';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMINVCDATE)) {
            $modifiedColumns[':p' . $index++]  = 'WarmInvcDate';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'WarmCustId';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMSPID)) {
            $modifiedColumns[':p' . $index++]  = 'WarmSpId';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMENTRYDATE)) {
            $modifiedColumns[':p' . $index++]  = 'WarmEntryDate';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_REGISTERMOTOR)) {
            $modifiedColumns[':p' . $index++]  = 'RegisterMotor';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMENGSERNBR)) {
            $modifiedColumns[':p' . $index++]  = 'WarmEngSerNbr';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMENGHORSE)) {
            $modifiedColumns[':p' . $index++]  = 'WarmEngHorse';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMENGMODELYEAR)) {
            $modifiedColumns[':p' . $index++]  = 'WarmEngModelYear';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMENGDESC)) {
            $modifiedColumns[':p' . $index++]  = 'WarmEngDesc';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMPHONE1)) {
            $modifiedColumns[':p' . $index++]  = 'WarmPhone1';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMPHONE2)) {
            $modifiedColumns[':p' . $index++]  = 'WarmPhone2';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMEMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'WarmEmail';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMDELVDATE)) {
            $modifiedColumns[':p' . $index++]  = 'WarmDelvDate';
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'Dummy';
        }

        $sql = sprintf(
            'INSERT INTO WARRANTY (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'WarmSeq':
                        $stmt->bindValue($identifier, $this->warmseq, PDO::PARAM_INT);
                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'SermSerNbr':
                        $stmt->bindValue($identifier, $this->sermsernbr, PDO::PARAM_STR);
                        break;
                    case 'WarmSaleDate':
                        $stmt->bindValue($identifier, $this->warmsaledate, PDO::PARAM_INT);
                        break;
                    case 'WarmOwnFname':
                        $stmt->bindValue($identifier, $this->warmownfname, PDO::PARAM_STR);
                        break;
                    case 'WarmOwnMname':
                        $stmt->bindValue($identifier, $this->warmownmname, PDO::PARAM_STR);
                        break;
                    case 'WarmOwnLname':
                        $stmt->bindValue($identifier, $this->warmownlname, PDO::PARAM_STR);
                        break;
                    case 'WarmOwnAdr1':
                        $stmt->bindValue($identifier, $this->warmownadr1, PDO::PARAM_STR);
                        break;
                    case 'WarmOwnAdr2':
                        $stmt->bindValue($identifier, $this->warmownadr2, PDO::PARAM_STR);
                        break;
                    case 'WarmOwnAdr3':
                        $stmt->bindValue($identifier, $this->warmownadr3, PDO::PARAM_STR);
                        break;
                    case 'WarmOwnCity':
                        $stmt->bindValue($identifier, $this->warmowncity, PDO::PARAM_STR);
                        break;
                    case 'WarmOwnStat':
                        $stmt->bindValue($identifier, $this->warmownstat, PDO::PARAM_STR);
                        break;
                    case 'WarmOwnZip':
                        $stmt->bindValue($identifier, $this->warmownzip, PDO::PARAM_STR);
                        break;
                    case 'WarmSordNbr':
                        $stmt->bindValue($identifier, $this->warmsordnbr, PDO::PARAM_INT);
                        break;
                    case 'WarmInvcDate':
                        $stmt->bindValue($identifier, $this->warminvcdate, PDO::PARAM_INT);
                        break;
                    case 'WarmCustId':
                        $stmt->bindValue($identifier, $this->warmcustid, PDO::PARAM_STR);
                        break;
                    case 'WarmSpId':
                        $stmt->bindValue($identifier, $this->warmspid, PDO::PARAM_STR);
                        break;
                    case 'WarmEntryDate':
                        $stmt->bindValue($identifier, $this->warmentrydate, PDO::PARAM_INT);
                        break;
                    case 'RegisterMotor':
                        $stmt->bindValue($identifier, $this->registermotor, PDO::PARAM_STR);
                        break;
                    case 'WarmEngSerNbr':
                        $stmt->bindValue($identifier, $this->warmengsernbr, PDO::PARAM_STR);
                        break;
                    case 'WarmEngHorse':
                        $stmt->bindValue($identifier, $this->warmenghorse, PDO::PARAM_STR);
                        break;
                    case 'WarmEngModelYear':
                        $stmt->bindValue($identifier, $this->warmengmodelyear, PDO::PARAM_INT);
                        break;
                    case 'WarmEngDesc':
                        $stmt->bindValue($identifier, $this->warmengdesc, PDO::PARAM_STR);
                        break;
                    case 'WarmPhone1':
                        $stmt->bindValue($identifier, $this->warmphone1, PDO::PARAM_STR);
                        break;
                    case 'WarmPhone2':
                        $stmt->bindValue($identifier, $this->warmphone2, PDO::PARAM_STR);
                        break;
                    case 'WarmEmail':
                        $stmt->bindValue($identifier, $this->warmemail, PDO::PARAM_STR);
                        break;
                    case 'DateUpdtd':
                        $stmt->bindValue($identifier, $this->dateupdtd, PDO::PARAM_INT);
                        break;
                    case 'TimeUpdtd':
                        $stmt->bindValue($identifier, $this->timeupdtd, PDO::PARAM_INT);
                        break;
                    case 'WarmDelvDate':
                        $stmt->bindValue($identifier, $this->warmdelvdate, PDO::PARAM_INT);
                        break;
                    case 'Dummy':
                        $stmt->bindValue($identifier, $this->dummy, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setWarmseq($pk);

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
        $pos = WarrantyTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getWarmseq();
                break;
            case 1:
                return $this->getInititemnbr();
                break;
            case 2:
                return $this->getSermsernbr();
                break;
            case 3:
                return $this->getWarmsaledate();
                break;
            case 4:
                return $this->getWarmownfname();
                break;
            case 5:
                return $this->getWarmownmname();
                break;
            case 6:
                return $this->getWarmownlname();
                break;
            case 7:
                return $this->getWarmownadr1();
                break;
            case 8:
                return $this->getWarmownadr2();
                break;
            case 9:
                return $this->getWarmownadr3();
                break;
            case 10:
                return $this->getWarmowncity();
                break;
            case 11:
                return $this->getWarmownstat();
                break;
            case 12:
                return $this->getWarmownzip();
                break;
            case 13:
                return $this->getWarmsordnbr();
                break;
            case 14:
                return $this->getWarminvcdate();
                break;
            case 15:
                return $this->getWarmcustid();
                break;
            case 16:
                return $this->getWarmspid();
                break;
            case 17:
                return $this->getWarmentrydate();
                break;
            case 18:
                return $this->getRegistermotor();
                break;
            case 19:
                return $this->getWarmengsernbr();
                break;
            case 20:
                return $this->getWarmenghorse();
                break;
            case 21:
                return $this->getWarmengmodelyear();
                break;
            case 22:
                return $this->getWarmengdesc();
                break;
            case 23:
                return $this->getWarmphone1();
                break;
            case 24:
                return $this->getWarmphone2();
                break;
            case 25:
                return $this->getWarmemail();
                break;
            case 26:
                return $this->getDateupdtd();
                break;
            case 27:
                return $this->getTimeupdtd();
                break;
            case 28:
                return $this->getWarmdelvdate();
                break;
            case 29:
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

        if (isset($alreadyDumpedObjects['Warranty'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Warranty'][$this->hashCode()] = true;
        $keys = WarrantyTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getWarmseq(),
            $keys[1] => $this->getInititemnbr(),
            $keys[2] => $this->getSermsernbr(),
            $keys[3] => $this->getWarmsaledate(),
            $keys[4] => $this->getWarmownfname(),
            $keys[5] => $this->getWarmownmname(),
            $keys[6] => $this->getWarmownlname(),
            $keys[7] => $this->getWarmownadr1(),
            $keys[8] => $this->getWarmownadr2(),
            $keys[9] => $this->getWarmownadr3(),
            $keys[10] => $this->getWarmowncity(),
            $keys[11] => $this->getWarmownstat(),
            $keys[12] => $this->getWarmownzip(),
            $keys[13] => $this->getWarmsordnbr(),
            $keys[14] => $this->getWarminvcdate(),
            $keys[15] => $this->getWarmcustid(),
            $keys[16] => $this->getWarmspid(),
            $keys[17] => $this->getWarmentrydate(),
            $keys[18] => $this->getRegistermotor(),
            $keys[19] => $this->getWarmengsernbr(),
            $keys[20] => $this->getWarmenghorse(),
            $keys[21] => $this->getWarmengmodelyear(),
            $keys[22] => $this->getWarmengdesc(),
            $keys[23] => $this->getWarmphone1(),
            $keys[24] => $this->getWarmphone2(),
            $keys[25] => $this->getWarmemail(),
            $keys[26] => $this->getDateupdtd(),
            $keys[27] => $this->getTimeupdtd(),
            $keys[28] => $this->getWarmdelvdate(),
            $keys[29] => $this->getDummy(),
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
     * @return $this|\Warranty
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = WarrantyTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Warranty
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setWarmseq($value);
                break;
            case 1:
                $this->setInititemnbr($value);
                break;
            case 2:
                $this->setSermsernbr($value);
                break;
            case 3:
                $this->setWarmsaledate($value);
                break;
            case 4:
                $this->setWarmownfname($value);
                break;
            case 5:
                $this->setWarmownmname($value);
                break;
            case 6:
                $this->setWarmownlname($value);
                break;
            case 7:
                $this->setWarmownadr1($value);
                break;
            case 8:
                $this->setWarmownadr2($value);
                break;
            case 9:
                $this->setWarmownadr3($value);
                break;
            case 10:
                $this->setWarmowncity($value);
                break;
            case 11:
                $this->setWarmownstat($value);
                break;
            case 12:
                $this->setWarmownzip($value);
                break;
            case 13:
                $this->setWarmsordnbr($value);
                break;
            case 14:
                $this->setWarminvcdate($value);
                break;
            case 15:
                $this->setWarmcustid($value);
                break;
            case 16:
                $this->setWarmspid($value);
                break;
            case 17:
                $this->setWarmentrydate($value);
                break;
            case 18:
                $this->setRegistermotor($value);
                break;
            case 19:
                $this->setWarmengsernbr($value);
                break;
            case 20:
                $this->setWarmenghorse($value);
                break;
            case 21:
                $this->setWarmengmodelyear($value);
                break;
            case 22:
                $this->setWarmengdesc($value);
                break;
            case 23:
                $this->setWarmphone1($value);
                break;
            case 24:
                $this->setWarmphone2($value);
                break;
            case 25:
                $this->setWarmemail($value);
                break;
            case 26:
                $this->setDateupdtd($value);
                break;
            case 27:
                $this->setTimeupdtd($value);
                break;
            case 28:
                $this->setWarmdelvdate($value);
                break;
            case 29:
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
        $keys = WarrantyTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setWarmseq($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setInititemnbr($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setSermsernbr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setWarmsaledate($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setWarmownfname($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setWarmownmname($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setWarmownlname($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setWarmownadr1($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setWarmownadr2($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setWarmownadr3($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setWarmowncity($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setWarmownstat($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setWarmownzip($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setWarmsordnbr($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setWarminvcdate($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setWarmcustid($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setWarmspid($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setWarmentrydate($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setRegistermotor($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setWarmengsernbr($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setWarmenghorse($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setWarmengmodelyear($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setWarmengdesc($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setWarmphone1($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setWarmphone2($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setWarmemail($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setDateupdtd($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setTimeupdtd($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setWarmdelvdate($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setDummy($arr[$keys[29]]);
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
     * @return $this|\Warranty The current object, for fluid interface
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
        $criteria = new Criteria(WarrantyTableMap::DATABASE_NAME);

        if ($this->isColumnModified(WarrantyTableMap::COL_WARMSEQ)) {
            $criteria->add(WarrantyTableMap::COL_WARMSEQ, $this->warmseq);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_INITITEMNBR)) {
            $criteria->add(WarrantyTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_SERMSERNBR)) {
            $criteria->add(WarrantyTableMap::COL_SERMSERNBR, $this->sermsernbr);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMSALEDATE)) {
            $criteria->add(WarrantyTableMap::COL_WARMSALEDATE, $this->warmsaledate);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMOWNFNAME)) {
            $criteria->add(WarrantyTableMap::COL_WARMOWNFNAME, $this->warmownfname);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMOWNMNAME)) {
            $criteria->add(WarrantyTableMap::COL_WARMOWNMNAME, $this->warmownmname);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMOWNLNAME)) {
            $criteria->add(WarrantyTableMap::COL_WARMOWNLNAME, $this->warmownlname);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMOWNADR1)) {
            $criteria->add(WarrantyTableMap::COL_WARMOWNADR1, $this->warmownadr1);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMOWNADR2)) {
            $criteria->add(WarrantyTableMap::COL_WARMOWNADR2, $this->warmownadr2);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMOWNADR3)) {
            $criteria->add(WarrantyTableMap::COL_WARMOWNADR3, $this->warmownadr3);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMOWNCITY)) {
            $criteria->add(WarrantyTableMap::COL_WARMOWNCITY, $this->warmowncity);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMOWNSTAT)) {
            $criteria->add(WarrantyTableMap::COL_WARMOWNSTAT, $this->warmownstat);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMOWNZIP)) {
            $criteria->add(WarrantyTableMap::COL_WARMOWNZIP, $this->warmownzip);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMSORDNBR)) {
            $criteria->add(WarrantyTableMap::COL_WARMSORDNBR, $this->warmsordnbr);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMINVCDATE)) {
            $criteria->add(WarrantyTableMap::COL_WARMINVCDATE, $this->warminvcdate);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMCUSTID)) {
            $criteria->add(WarrantyTableMap::COL_WARMCUSTID, $this->warmcustid);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMSPID)) {
            $criteria->add(WarrantyTableMap::COL_WARMSPID, $this->warmspid);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMENTRYDATE)) {
            $criteria->add(WarrantyTableMap::COL_WARMENTRYDATE, $this->warmentrydate);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_REGISTERMOTOR)) {
            $criteria->add(WarrantyTableMap::COL_REGISTERMOTOR, $this->registermotor);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMENGSERNBR)) {
            $criteria->add(WarrantyTableMap::COL_WARMENGSERNBR, $this->warmengsernbr);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMENGHORSE)) {
            $criteria->add(WarrantyTableMap::COL_WARMENGHORSE, $this->warmenghorse);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMENGMODELYEAR)) {
            $criteria->add(WarrantyTableMap::COL_WARMENGMODELYEAR, $this->warmengmodelyear);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMENGDESC)) {
            $criteria->add(WarrantyTableMap::COL_WARMENGDESC, $this->warmengdesc);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMPHONE1)) {
            $criteria->add(WarrantyTableMap::COL_WARMPHONE1, $this->warmphone1);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMPHONE2)) {
            $criteria->add(WarrantyTableMap::COL_WARMPHONE2, $this->warmphone2);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMEMAIL)) {
            $criteria->add(WarrantyTableMap::COL_WARMEMAIL, $this->warmemail);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_DATEUPDTD)) {
            $criteria->add(WarrantyTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_TIMEUPDTD)) {
            $criteria->add(WarrantyTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_WARMDELVDATE)) {
            $criteria->add(WarrantyTableMap::COL_WARMDELVDATE, $this->warmdelvdate);
        }
        if ($this->isColumnModified(WarrantyTableMap::COL_DUMMY)) {
            $criteria->add(WarrantyTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildWarrantyQuery::create();
        $criteria->add(WarrantyTableMap::COL_WARMSEQ, $this->warmseq);

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
        $validPk = null !== $this->getWarmseq();

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
        return $this->getWarmseq();
    }

    /**
     * Generic method to set the primary key (warmseq column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setWarmseq($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getWarmseq();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Warranty (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setSermsernbr($this->getSermsernbr());
        $copyObj->setWarmsaledate($this->getWarmsaledate());
        $copyObj->setWarmownfname($this->getWarmownfname());
        $copyObj->setWarmownmname($this->getWarmownmname());
        $copyObj->setWarmownlname($this->getWarmownlname());
        $copyObj->setWarmownadr1($this->getWarmownadr1());
        $copyObj->setWarmownadr2($this->getWarmownadr2());
        $copyObj->setWarmownadr3($this->getWarmownadr3());
        $copyObj->setWarmowncity($this->getWarmowncity());
        $copyObj->setWarmownstat($this->getWarmownstat());
        $copyObj->setWarmownzip($this->getWarmownzip());
        $copyObj->setWarmsordnbr($this->getWarmsordnbr());
        $copyObj->setWarminvcdate($this->getWarminvcdate());
        $copyObj->setWarmcustid($this->getWarmcustid());
        $copyObj->setWarmspid($this->getWarmspid());
        $copyObj->setWarmentrydate($this->getWarmentrydate());
        $copyObj->setRegistermotor($this->getRegistermotor());
        $copyObj->setWarmengsernbr($this->getWarmengsernbr());
        $copyObj->setWarmenghorse($this->getWarmenghorse());
        $copyObj->setWarmengmodelyear($this->getWarmengmodelyear());
        $copyObj->setWarmengdesc($this->getWarmengdesc());
        $copyObj->setWarmphone1($this->getWarmphone1());
        $copyObj->setWarmphone2($this->getWarmphone2());
        $copyObj->setWarmemail($this->getWarmemail());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setWarmdelvdate($this->getWarmdelvdate());
        $copyObj->setDummy($this->getDummy());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setWarmseq(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Warranty Clone of current object.
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
        $this->warmseq = null;
        $this->inititemnbr = null;
        $this->sermsernbr = null;
        $this->warmsaledate = null;
        $this->warmownfname = null;
        $this->warmownmname = null;
        $this->warmownlname = null;
        $this->warmownadr1 = null;
        $this->warmownadr2 = null;
        $this->warmownadr3 = null;
        $this->warmowncity = null;
        $this->warmownstat = null;
        $this->warmownzip = null;
        $this->warmsordnbr = null;
        $this->warminvcdate = null;
        $this->warmcustid = null;
        $this->warmspid = null;
        $this->warmentrydate = null;
        $this->registermotor = null;
        $this->warmengsernbr = null;
        $this->warmenghorse = null;
        $this->warmengmodelyear = null;
        $this->warmengdesc = null;
        $this->warmphone1 = null;
        $this->warmphone2 = null;
        $this->warmemail = null;
        $this->dateupdtd = null;
        $this->timeupdtd = null;
        $this->warmdelvdate = null;
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
        return (string) $this->exportTo(WarrantyTableMap::DEFAULT_STRING_FORMAT);
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
