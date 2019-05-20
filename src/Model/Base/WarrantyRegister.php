<?php

namespace Base;

use \WarrantyRegisterQuery as ChildWarrantyRegisterQuery;
use \Exception;
use \PDO;
use Map\WarrantyRegisterTableMap;
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
 * Base class that represents a row from the 'warranty_register' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class WarrantyRegister implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\WarrantyRegisterTableMap';


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
     * The value for the invoicenbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $invoicenbr;

    /**
     * The value for the invoicedate field.
     *
     * @var        int
     */
    protected $invoicedate;

    /**
     * The value for the registermotor field.
     *
     * @var        string
     */
    protected $registermotor;

    /**
     * The value for the firstname field.
     *
     * @var        string
     */
    protected $firstname;

    /**
     * The value for the middlename field.
     *
     * @var        string
     */
    protected $middlename;

    /**
     * The value for the lastname field.
     *
     * @var        string
     */
    protected $lastname;

    /**
     * The value for the adr1 field.
     *
     * @var        string
     */
    protected $adr1;

    /**
     * The value for the adr2 field.
     *
     * @var        string
     */
    protected $adr2;

    /**
     * The value for the city field.
     *
     * @var        string
     */
    protected $city;

    /**
     * The value for the state field.
     *
     * @var        string
     */
    protected $state;

    /**
     * The value for the zip field.
     *
     * @var        string
     */
    protected $zip;

    /**
     * The value for the email field.
     *
     * @var        string
     */
    protected $email;

    /**
     * The value for the phone field.
     *
     * @var        string
     */
    protected $phone;

    /**
     * The value for the saledate field.
     *
     * @var        int
     */
    protected $saledate;

    /**
     * The value for the engserialnbr field.
     *
     * @var        string
     */
    protected $engserialnbr;

    /**
     * The value for the enghorsepower field.
     *
     * @var        string
     */
    protected $enghorsepower;

    /**
     * The value for the engmodelyear field.
     *
     * @var        int
     */
    protected $engmodelyear;

    /**
     * The value for the engdesc field.
     *
     * @var        string
     */
    protected $engdesc;

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
        $this->invoicenbr = '';
    }

    /**
     * Initializes internal state of Base\WarrantyRegister object.
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
     * Compares this with another <code>WarrantyRegister</code> instance.  If
     * <code>obj</code> is an instance of <code>WarrantyRegister</code>, delegates to
     * <code>equals(WarrantyRegister)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|WarrantyRegister The current object, for fluid interface
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
     * Get the [invoicenbr] column value.
     *
     * @return string
     */
    public function getInvoicenbr()
    {
        return $this->invoicenbr;
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
     * Get the [registermotor] column value.
     *
     * @return string
     */
    public function getRegistermotor()
    {
        return $this->registermotor;
    }

    /**
     * Get the [firstname] column value.
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Get the [middlename] column value.
     *
     * @return string
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }

    /**
     * Get the [lastname] column value.
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Get the [adr1] column value.
     *
     * @return string
     */
    public function getAdr1()
    {
        return $this->adr1;
    }

    /**
     * Get the [adr2] column value.
     *
     * @return string
     */
    public function getAdr2()
    {
        return $this->adr2;
    }

    /**
     * Get the [city] column value.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Get the [state] column value.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Get the [zip] column value.
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Get the [email] column value.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the [phone] column value.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Get the [saledate] column value.
     *
     * @return int
     */
    public function getSaledate()
    {
        return $this->saledate;
    }

    /**
     * Get the [engserialnbr] column value.
     *
     * @return string
     */
    public function getEngserialnbr()
    {
        return $this->engserialnbr;
    }

    /**
     * Get the [enghorsepower] column value.
     *
     * @return string
     */
    public function getEnghorsepower()
    {
        return $this->enghorsepower;
    }

    /**
     * Get the [engmodelyear] column value.
     *
     * @return int
     */
    public function getEngmodelyear()
    {
        return $this->engmodelyear;
    }

    /**
     * Get the [engdesc] column value.
     *
     * @return string
     */
    public function getEngdesc()
    {
        return $this->engdesc;
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
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setDate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->date !== $v) {
            $this->date = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_DATE] = true;
        }

        return $this;
    } // setDate()

    /**
     * Set the value of [time] column.
     *
     * @param int $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setTime($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->time !== $v) {
            $this->time = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_TIME] = true;
        }

        return $this;
    } // setTime()

    /**
     * Set the value of [recnbr] column.
     *
     * @param int $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setRecnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->recnbr !== $v) {
            $this->recnbr = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_RECNBR] = true;
        }

        return $this;
    } // setRecnbr()

    /**
     * Set the value of [serialnbr] column.
     *
     * @param string $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setSerialnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->serialnbr !== $v) {
            $this->serialnbr = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_SERIALNBR] = true;
        }

        return $this;
    } // setSerialnbr()

    /**
     * Set the value of [itemnbr] column.
     *
     * @param string $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setItemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->itemnbr !== $v) {
            $this->itemnbr = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_ITEMNBR] = true;
        }

        return $this;
    } // setItemnbr()

    /**
     * Set the value of [invoicenbr] column.
     *
     * @param string $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setInvoicenbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->invoicenbr !== $v) {
            $this->invoicenbr = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_INVOICENBR] = true;
        }

        return $this;
    } // setInvoicenbr()

    /**
     * Set the value of [invoicedate] column.
     *
     * @param int $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setInvoicedate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->invoicedate !== $v) {
            $this->invoicedate = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_INVOICEDATE] = true;
        }

        return $this;
    } // setInvoicedate()

    /**
     * Set the value of [registermotor] column.
     *
     * @param string $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setRegistermotor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->registermotor !== $v) {
            $this->registermotor = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_REGISTERMOTOR] = true;
        }

        return $this;
    } // setRegistermotor()

    /**
     * Set the value of [firstname] column.
     *
     * @param string $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setFirstname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->firstname !== $v) {
            $this->firstname = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_FIRSTNAME] = true;
        }

        return $this;
    } // setFirstname()

    /**
     * Set the value of [middlename] column.
     *
     * @param string $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setMiddlename($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->middlename !== $v) {
            $this->middlename = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_MIDDLENAME] = true;
        }

        return $this;
    } // setMiddlename()

    /**
     * Set the value of [lastname] column.
     *
     * @param string $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setLastname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lastname !== $v) {
            $this->lastname = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_LASTNAME] = true;
        }

        return $this;
    } // setLastname()

    /**
     * Set the value of [adr1] column.
     *
     * @param string $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setAdr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->adr1 !== $v) {
            $this->adr1 = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_ADR1] = true;
        }

        return $this;
    } // setAdr1()

    /**
     * Set the value of [adr2] column.
     *
     * @param string $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setAdr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->adr2 !== $v) {
            $this->adr2 = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_ADR2] = true;
        }

        return $this;
    } // setAdr2()

    /**
     * Set the value of [city] column.
     *
     * @param string $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setCity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->city !== $v) {
            $this->city = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_CITY] = true;
        }

        return $this;
    } // setCity()

    /**
     * Set the value of [state] column.
     *
     * @param string $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setState($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->state !== $v) {
            $this->state = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_STATE] = true;
        }

        return $this;
    } // setState()

    /**
     * Set the value of [zip] column.
     *
     * @param string $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setZip($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->zip !== $v) {
            $this->zip = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_ZIP] = true;
        }

        return $this;
    } // setZip()

    /**
     * Set the value of [email] column.
     *
     * @param string $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_EMAIL] = true;
        }

        return $this;
    } // setEmail()

    /**
     * Set the value of [phone] column.
     *
     * @param string $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setPhone($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phone !== $v) {
            $this->phone = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_PHONE] = true;
        }

        return $this;
    } // setPhone()

    /**
     * Set the value of [saledate] column.
     *
     * @param int $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setSaledate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->saledate !== $v) {
            $this->saledate = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_SALEDATE] = true;
        }

        return $this;
    } // setSaledate()

    /**
     * Set the value of [engserialnbr] column.
     *
     * @param string $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setEngserialnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->engserialnbr !== $v) {
            $this->engserialnbr = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_ENGSERIALNBR] = true;
        }

        return $this;
    } // setEngserialnbr()

    /**
     * Set the value of [enghorsepower] column.
     *
     * @param string $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setEnghorsepower($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->enghorsepower !== $v) {
            $this->enghorsepower = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_ENGHORSEPOWER] = true;
        }

        return $this;
    } // setEnghorsepower()

    /**
     * Set the value of [engmodelyear] column.
     *
     * @param int $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setEngmodelyear($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->engmodelyear !== $v) {
            $this->engmodelyear = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_ENGMODELYEAR] = true;
        }

        return $this;
    } // setEngmodelyear()

    /**
     * Set the value of [engdesc] column.
     *
     * @param string $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setEngdesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->engdesc !== $v) {
            $this->engdesc = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_ENGDESC] = true;
        }

        return $this;
    } // setEngdesc()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\WarrantyRegister The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[WarrantyRegisterTableMap::COL_DUMMY] = true;
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

            if ($this->invoicenbr !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : WarrantyRegisterTableMap::translateFieldName('Date', TableMap::TYPE_PHPNAME, $indexType)];
            $this->date = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : WarrantyRegisterTableMap::translateFieldName('Time', TableMap::TYPE_PHPNAME, $indexType)];
            $this->time = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : WarrantyRegisterTableMap::translateFieldName('Recnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->recnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : WarrantyRegisterTableMap::translateFieldName('Serialnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->serialnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : WarrantyRegisterTableMap::translateFieldName('Itemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->itemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : WarrantyRegisterTableMap::translateFieldName('Invoicenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->invoicenbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : WarrantyRegisterTableMap::translateFieldName('Invoicedate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->invoicedate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : WarrantyRegisterTableMap::translateFieldName('Registermotor', TableMap::TYPE_PHPNAME, $indexType)];
            $this->registermotor = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : WarrantyRegisterTableMap::translateFieldName('Firstname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->firstname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : WarrantyRegisterTableMap::translateFieldName('Middlename', TableMap::TYPE_PHPNAME, $indexType)];
            $this->middlename = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : WarrantyRegisterTableMap::translateFieldName('Lastname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->lastname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : WarrantyRegisterTableMap::translateFieldName('Adr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->adr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : WarrantyRegisterTableMap::translateFieldName('Adr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->adr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : WarrantyRegisterTableMap::translateFieldName('City', TableMap::TYPE_PHPNAME, $indexType)];
            $this->city = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : WarrantyRegisterTableMap::translateFieldName('State', TableMap::TYPE_PHPNAME, $indexType)];
            $this->state = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : WarrantyRegisterTableMap::translateFieldName('Zip', TableMap::TYPE_PHPNAME, $indexType)];
            $this->zip = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : WarrantyRegisterTableMap::translateFieldName('Email', TableMap::TYPE_PHPNAME, $indexType)];
            $this->email = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : WarrantyRegisterTableMap::translateFieldName('Phone', TableMap::TYPE_PHPNAME, $indexType)];
            $this->phone = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : WarrantyRegisterTableMap::translateFieldName('Saledate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->saledate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : WarrantyRegisterTableMap::translateFieldName('Engserialnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->engserialnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : WarrantyRegisterTableMap::translateFieldName('Enghorsepower', TableMap::TYPE_PHPNAME, $indexType)];
            $this->enghorsepower = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : WarrantyRegisterTableMap::translateFieldName('Engmodelyear', TableMap::TYPE_PHPNAME, $indexType)];
            $this->engmodelyear = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : WarrantyRegisterTableMap::translateFieldName('Engdesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->engdesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : WarrantyRegisterTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 24; // 24 = WarrantyRegisterTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\WarrantyRegister'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(WarrantyRegisterTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildWarrantyRegisterQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see WarrantyRegister::setDeleted()
     * @see WarrantyRegister::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(WarrantyRegisterTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildWarrantyRegisterQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(WarrantyRegisterTableMap::DATABASE_NAME);
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
                WarrantyRegisterTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'Date';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_TIME)) {
            $modifiedColumns[':p' . $index++]  = 'Time';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_RECNBR)) {
            $modifiedColumns[':p' . $index++]  = 'Recnbr';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_SERIALNBR)) {
            $modifiedColumns[':p' . $index++]  = 'SerialNbr';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_ITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ItemNbr';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_INVOICENBR)) {
            $modifiedColumns[':p' . $index++]  = 'InvoiceNbr';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_INVOICEDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InvoiceDate';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_REGISTERMOTOR)) {
            $modifiedColumns[':p' . $index++]  = 'RegisterMotor';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_FIRSTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'FirstName';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_MIDDLENAME)) {
            $modifiedColumns[':p' . $index++]  = 'MiddleName';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_LASTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'LastName';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_ADR1)) {
            $modifiedColumns[':p' . $index++]  = 'Adr1';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_ADR2)) {
            $modifiedColumns[':p' . $index++]  = 'Adr2';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_CITY)) {
            $modifiedColumns[':p' . $index++]  = 'City';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_STATE)) {
            $modifiedColumns[':p' . $index++]  = 'State';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_ZIP)) {
            $modifiedColumns[':p' . $index++]  = 'Zip';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'Email';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_PHONE)) {
            $modifiedColumns[':p' . $index++]  = 'Phone';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_SALEDATE)) {
            $modifiedColumns[':p' . $index++]  = 'SaleDate';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_ENGSERIALNBR)) {
            $modifiedColumns[':p' . $index++]  = 'EngSerialNbr';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_ENGHORSEPOWER)) {
            $modifiedColumns[':p' . $index++]  = 'EngHorsePower';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_ENGMODELYEAR)) {
            $modifiedColumns[':p' . $index++]  = 'EngModelYear';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_ENGDESC)) {
            $modifiedColumns[':p' . $index++]  = 'EngDesc';
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO warranty_register (%s) VALUES (%s)',
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
                    case 'InvoiceNbr':
                        $stmt->bindValue($identifier, $this->invoicenbr, PDO::PARAM_STR);
                        break;
                    case 'InvoiceDate':
                        $stmt->bindValue($identifier, $this->invoicedate, PDO::PARAM_INT);
                        break;
                    case 'RegisterMotor':
                        $stmt->bindValue($identifier, $this->registermotor, PDO::PARAM_STR);
                        break;
                    case 'FirstName':
                        $stmt->bindValue($identifier, $this->firstname, PDO::PARAM_STR);
                        break;
                    case 'MiddleName':
                        $stmt->bindValue($identifier, $this->middlename, PDO::PARAM_STR);
                        break;
                    case 'LastName':
                        $stmt->bindValue($identifier, $this->lastname, PDO::PARAM_STR);
                        break;
                    case 'Adr1':
                        $stmt->bindValue($identifier, $this->adr1, PDO::PARAM_STR);
                        break;
                    case 'Adr2':
                        $stmt->bindValue($identifier, $this->adr2, PDO::PARAM_STR);
                        break;
                    case 'City':
                        $stmt->bindValue($identifier, $this->city, PDO::PARAM_STR);
                        break;
                    case 'State':
                        $stmt->bindValue($identifier, $this->state, PDO::PARAM_STR);
                        break;
                    case 'Zip':
                        $stmt->bindValue($identifier, $this->zip, PDO::PARAM_STR);
                        break;
                    case 'Email':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case 'Phone':
                        $stmt->bindValue($identifier, $this->phone, PDO::PARAM_STR);
                        break;
                    case 'SaleDate':
                        $stmt->bindValue($identifier, $this->saledate, PDO::PARAM_INT);
                        break;
                    case 'EngSerialNbr':
                        $stmt->bindValue($identifier, $this->engserialnbr, PDO::PARAM_STR);
                        break;
                    case 'EngHorsePower':
                        $stmt->bindValue($identifier, $this->enghorsepower, PDO::PARAM_STR);
                        break;
                    case 'EngModelYear':
                        $stmt->bindValue($identifier, $this->engmodelyear, PDO::PARAM_INT);
                        break;
                    case 'EngDesc':
                        $stmt->bindValue($identifier, $this->engdesc, PDO::PARAM_STR);
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
        $pos = WarrantyRegisterTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getInvoicenbr();
                break;
            case 6:
                return $this->getInvoicedate();
                break;
            case 7:
                return $this->getRegistermotor();
                break;
            case 8:
                return $this->getFirstname();
                break;
            case 9:
                return $this->getMiddlename();
                break;
            case 10:
                return $this->getLastname();
                break;
            case 11:
                return $this->getAdr1();
                break;
            case 12:
                return $this->getAdr2();
                break;
            case 13:
                return $this->getCity();
                break;
            case 14:
                return $this->getState();
                break;
            case 15:
                return $this->getZip();
                break;
            case 16:
                return $this->getEmail();
                break;
            case 17:
                return $this->getPhone();
                break;
            case 18:
                return $this->getSaledate();
                break;
            case 19:
                return $this->getEngserialnbr();
                break;
            case 20:
                return $this->getEnghorsepower();
                break;
            case 21:
                return $this->getEngmodelyear();
                break;
            case 22:
                return $this->getEngdesc();
                break;
            case 23:
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

        if (isset($alreadyDumpedObjects['WarrantyRegister'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['WarrantyRegister'][$this->hashCode()] = true;
        $keys = WarrantyRegisterTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getDate(),
            $keys[1] => $this->getTime(),
            $keys[2] => $this->getRecnbr(),
            $keys[3] => $this->getSerialnbr(),
            $keys[4] => $this->getItemnbr(),
            $keys[5] => $this->getInvoicenbr(),
            $keys[6] => $this->getInvoicedate(),
            $keys[7] => $this->getRegistermotor(),
            $keys[8] => $this->getFirstname(),
            $keys[9] => $this->getMiddlename(),
            $keys[10] => $this->getLastname(),
            $keys[11] => $this->getAdr1(),
            $keys[12] => $this->getAdr2(),
            $keys[13] => $this->getCity(),
            $keys[14] => $this->getState(),
            $keys[15] => $this->getZip(),
            $keys[16] => $this->getEmail(),
            $keys[17] => $this->getPhone(),
            $keys[18] => $this->getSaledate(),
            $keys[19] => $this->getEngserialnbr(),
            $keys[20] => $this->getEnghorsepower(),
            $keys[21] => $this->getEngmodelyear(),
            $keys[22] => $this->getEngdesc(),
            $keys[23] => $this->getDummy(),
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
     * @return $this|\WarrantyRegister
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = WarrantyRegisterTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\WarrantyRegister
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
                $this->setInvoicenbr($value);
                break;
            case 6:
                $this->setInvoicedate($value);
                break;
            case 7:
                $this->setRegistermotor($value);
                break;
            case 8:
                $this->setFirstname($value);
                break;
            case 9:
                $this->setMiddlename($value);
                break;
            case 10:
                $this->setLastname($value);
                break;
            case 11:
                $this->setAdr1($value);
                break;
            case 12:
                $this->setAdr2($value);
                break;
            case 13:
                $this->setCity($value);
                break;
            case 14:
                $this->setState($value);
                break;
            case 15:
                $this->setZip($value);
                break;
            case 16:
                $this->setEmail($value);
                break;
            case 17:
                $this->setPhone($value);
                break;
            case 18:
                $this->setSaledate($value);
                break;
            case 19:
                $this->setEngserialnbr($value);
                break;
            case 20:
                $this->setEnghorsepower($value);
                break;
            case 21:
                $this->setEngmodelyear($value);
                break;
            case 22:
                $this->setEngdesc($value);
                break;
            case 23:
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
        $keys = WarrantyRegisterTableMap::getFieldNames($keyType);

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
            $this->setInvoicenbr($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setInvoicedate($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setRegistermotor($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setFirstname($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setMiddlename($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setLastname($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setAdr1($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setAdr2($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setCity($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setState($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setZip($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setEmail($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setPhone($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setSaledate($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setEngserialnbr($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setEnghorsepower($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setEngmodelyear($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setEngdesc($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setDummy($arr[$keys[23]]);
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
     * @return $this|\WarrantyRegister The current object, for fluid interface
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
        $criteria = new Criteria(WarrantyRegisterTableMap::DATABASE_NAME);

        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_DATE)) {
            $criteria->add(WarrantyRegisterTableMap::COL_DATE, $this->date);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_TIME)) {
            $criteria->add(WarrantyRegisterTableMap::COL_TIME, $this->time);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_RECNBR)) {
            $criteria->add(WarrantyRegisterTableMap::COL_RECNBR, $this->recnbr);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_SERIALNBR)) {
            $criteria->add(WarrantyRegisterTableMap::COL_SERIALNBR, $this->serialnbr);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_ITEMNBR)) {
            $criteria->add(WarrantyRegisterTableMap::COL_ITEMNBR, $this->itemnbr);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_INVOICENBR)) {
            $criteria->add(WarrantyRegisterTableMap::COL_INVOICENBR, $this->invoicenbr);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_INVOICEDATE)) {
            $criteria->add(WarrantyRegisterTableMap::COL_INVOICEDATE, $this->invoicedate);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_REGISTERMOTOR)) {
            $criteria->add(WarrantyRegisterTableMap::COL_REGISTERMOTOR, $this->registermotor);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_FIRSTNAME)) {
            $criteria->add(WarrantyRegisterTableMap::COL_FIRSTNAME, $this->firstname);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_MIDDLENAME)) {
            $criteria->add(WarrantyRegisterTableMap::COL_MIDDLENAME, $this->middlename);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_LASTNAME)) {
            $criteria->add(WarrantyRegisterTableMap::COL_LASTNAME, $this->lastname);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_ADR1)) {
            $criteria->add(WarrantyRegisterTableMap::COL_ADR1, $this->adr1);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_ADR2)) {
            $criteria->add(WarrantyRegisterTableMap::COL_ADR2, $this->adr2);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_CITY)) {
            $criteria->add(WarrantyRegisterTableMap::COL_CITY, $this->city);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_STATE)) {
            $criteria->add(WarrantyRegisterTableMap::COL_STATE, $this->state);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_ZIP)) {
            $criteria->add(WarrantyRegisterTableMap::COL_ZIP, $this->zip);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_EMAIL)) {
            $criteria->add(WarrantyRegisterTableMap::COL_EMAIL, $this->email);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_PHONE)) {
            $criteria->add(WarrantyRegisterTableMap::COL_PHONE, $this->phone);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_SALEDATE)) {
            $criteria->add(WarrantyRegisterTableMap::COL_SALEDATE, $this->saledate);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_ENGSERIALNBR)) {
            $criteria->add(WarrantyRegisterTableMap::COL_ENGSERIALNBR, $this->engserialnbr);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_ENGHORSEPOWER)) {
            $criteria->add(WarrantyRegisterTableMap::COL_ENGHORSEPOWER, $this->enghorsepower);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_ENGMODELYEAR)) {
            $criteria->add(WarrantyRegisterTableMap::COL_ENGMODELYEAR, $this->engmodelyear);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_ENGDESC)) {
            $criteria->add(WarrantyRegisterTableMap::COL_ENGDESC, $this->engdesc);
        }
        if ($this->isColumnModified(WarrantyRegisterTableMap::COL_DUMMY)) {
            $criteria->add(WarrantyRegisterTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildWarrantyRegisterQuery::create();
        $criteria->add(WarrantyRegisterTableMap::COL_SERIALNBR, $this->serialnbr);
        $criteria->add(WarrantyRegisterTableMap::COL_ITEMNBR, $this->itemnbr);
        $criteria->add(WarrantyRegisterTableMap::COL_INVOICENBR, $this->invoicenbr);

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
            null !== $this->getInvoicenbr();

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
        $pks[2] = $this->getInvoicenbr();

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
        $this->setInvoicenbr($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getSerialnbr()) && (null === $this->getItemnbr()) && (null === $this->getInvoicenbr());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \WarrantyRegister (or compatible) type.
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
        $copyObj->setInvoicenbr($this->getInvoicenbr());
        $copyObj->setInvoicedate($this->getInvoicedate());
        $copyObj->setRegistermotor($this->getRegistermotor());
        $copyObj->setFirstname($this->getFirstname());
        $copyObj->setMiddlename($this->getMiddlename());
        $copyObj->setLastname($this->getLastname());
        $copyObj->setAdr1($this->getAdr1());
        $copyObj->setAdr2($this->getAdr2());
        $copyObj->setCity($this->getCity());
        $copyObj->setState($this->getState());
        $copyObj->setZip($this->getZip());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setPhone($this->getPhone());
        $copyObj->setSaledate($this->getSaledate());
        $copyObj->setEngserialnbr($this->getEngserialnbr());
        $copyObj->setEnghorsepower($this->getEnghorsepower());
        $copyObj->setEngmodelyear($this->getEngmodelyear());
        $copyObj->setEngdesc($this->getEngdesc());
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
     * @return \WarrantyRegister Clone of current object.
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
        $this->invoicenbr = null;
        $this->invoicedate = null;
        $this->registermotor = null;
        $this->firstname = null;
        $this->middlename = null;
        $this->lastname = null;
        $this->adr1 = null;
        $this->adr2 = null;
        $this->city = null;
        $this->state = null;
        $this->zip = null;
        $this->email = null;
        $this->phone = null;
        $this->saledate = null;
        $this->engserialnbr = null;
        $this->enghorsepower = null;
        $this->engmodelyear = null;
        $this->engdesc = null;
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
        return (string) $this->exportTo(WarrantyRegisterTableMap::DEFAULT_STRING_FORMAT);
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
