<?php

namespace Base;

use \ArShipToQuery as ChildArShipToQuery;
use \Exception;
use \PDO;
use Map\ArShipToTableMap;
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
 * Base class that represents a row from the 'AR_SHIP_TO' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ArShipTo implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ArShipToTableMap';


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
     * The value for the arcucustid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arcucustid;

    /**
     * The value for the arstshipid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arstshipid;

    /**
     * The value for the arstname field.
     *
     * @var        string
     */
    protected $arstname;

    /**
     * The value for the arstadr1 field.
     *
     * @var        string
     */
    protected $arstadr1;

    /**
     * The value for the arstadr2 field.
     *
     * @var        string
     */
    protected $arstadr2;

    /**
     * The value for the arstadr3 field.
     *
     * @var        string
     */
    protected $arstadr3;

    /**
     * The value for the arstadr4 field.
     *
     * @var        string
     */
    protected $arstadr4;

    /**
     * The value for the arstctry field.
     *
     * @var        string
     */
    protected $arstctry;

    /**
     * The value for the arstadr5 field.
     *
     * @var        string
     */
    protected $arstadr5;

    /**
     * The value for the arstcity field.
     *
     * @var        string
     */
    protected $arstcity;

    /**
     * The value for the arststat field.
     *
     * @var        string
     */
    protected $arststat;

    /**
     * The value for the arstzipcode field.
     *
     * @var        string
     */
    protected $arstzipcode;

    /**
     * The value for the arstcont1 field.
     *
     * @var        string
     */
    protected $arstcont1;

    /**
     * The value for the arstcont2 field.
     *
     * @var        string
     */
    protected $arstcont2;

    /**
     * The value for the arspsaleper1 field.
     *
     * @var        string
     */
    protected $arspsaleper1;

    /**
     * The value for the arspsaleper2 field.
     *
     * @var        string
     */
    protected $arspsaleper2;

    /**
     * The value for the arspsaleper3 field.
     *
     * @var        string
     */
    protected $arspsaleper3;

    /**
     * The value for the artbmtaxcode field.
     *
     * @var        string
     */
    protected $artbmtaxcode;

    /**
     * The value for the arsttaxexemnbr field.
     *
     * @var        string
     */
    protected $arsttaxexemnbr;

    /**
     * The value for the intbwhse field.
     *
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the artbshipvia field.
     *
     * @var        string
     */
    protected $artbshipvia;

    /**
     * The value for the arstbord field.
     *
     * @var        string
     */
    protected $arstbord;

    /**
     * The value for the arstcredhold field.
     *
     * @var        string
     */
    protected $arstcredhold;

    /**
     * The value for the arstusercode field.
     *
     * @var        string
     */
    protected $arstusercode;

    /**
     * The value for the arstpriclvl field.
     *
     * @var        string
     */
    protected $arstpriclvl;

    /**
     * The value for the arstshipcomp field.
     *
     * @var        string
     */
    protected $arstshipcomp;

    /**
     * The value for the arsttxbl field.
     *
     * @var        string
     */
    protected $arsttxbl;

    /**
     * The value for the arstpostal field.
     *
     * @var        string
     */
    protected $arstpostal;

    /**
     * The value for the arstsalemtd field.
     *
     * @var        string
     */
    protected $arstsalemtd;

    /**
     * The value for the arstinvmtd field.
     *
     * @var        int
     */
    protected $arstinvmtd;

    /**
     * The value for the arstdateopen field.
     *
     * @var        int
     */
    protected $arstdateopen;

    /**
     * The value for the arstlastsaledate field.
     *
     * @var        int
     */
    protected $arstlastsaledate;

    /**
     * The value for the arstprimshipid field.
     *
     * @var        string
     */
    protected $arstprimshipid;

    /**
     * The value for the arstmyvendid field.
     *
     * @var        string
     */
    protected $arstmyvendid;

    /**
     * The value for the arstaddlpricdisc field.
     *
     * @var        string
     */
    protected $arstaddlpricdisc;

    /**
     * The value for the arstediinvc field.
     *
     * @var        string
     */
    protected $arstediinvc;

    /**
     * The value for the arstchrgfrt field.
     *
     * @var        string
     */
    protected $arstchrgfrt;

    /**
     * The value for the arstdistcntr field.
     *
     * @var        string
     */
    protected $arstdistcntr;

    /**
     * The value for the arstdunsnbr field.
     *
     * @var        string
     */
    protected $arstdunsnbr;

    /**
     * The value for the arstrfmlvalu field.
     *
     * @var        int
     */
    protected $arstrfmlvalu;

    /**
     * The value for the arstforcepo field.
     *
     * @var        string
     */
    protected $arstforcepo;

    /**
     * The value for the artbroutcode field.
     *
     * @var        string
     */
    protected $artbroutcode;

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
        $this->arcucustid = '';
        $this->arstshipid = '';
    }

    /**
     * Initializes internal state of Base\ArShipTo object.
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
     * Compares this with another <code>ArShipTo</code> instance.  If
     * <code>obj</code> is an instance of <code>ArShipTo</code>, delegates to
     * <code>equals(ArShipTo)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ArShipTo The current object, for fluid interface
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
     * Get the [arcucustid] column value.
     *
     * @return string
     */
    public function getArcucustid()
    {
        return $this->arcucustid;
    }

    /**
     * Get the [arstshipid] column value.
     *
     * @return string
     */
    public function getArstshipid()
    {
        return $this->arstshipid;
    }

    /**
     * Get the [arstname] column value.
     *
     * @return string
     */
    public function getArstname()
    {
        return $this->arstname;
    }

    /**
     * Get the [arstadr1] column value.
     *
     * @return string
     */
    public function getArstadr1()
    {
        return $this->arstadr1;
    }

    /**
     * Get the [arstadr2] column value.
     *
     * @return string
     */
    public function getArstadr2()
    {
        return $this->arstadr2;
    }

    /**
     * Get the [arstadr3] column value.
     *
     * @return string
     */
    public function getArstadr3()
    {
        return $this->arstadr3;
    }

    /**
     * Get the [arstadr4] column value.
     *
     * @return string
     */
    public function getArstadr4()
    {
        return $this->arstadr4;
    }

    /**
     * Get the [arstctry] column value.
     *
     * @return string
     */
    public function getArstctry()
    {
        return $this->arstctry;
    }

    /**
     * Get the [arstadr5] column value.
     *
     * @return string
     */
    public function getArstadr5()
    {
        return $this->arstadr5;
    }

    /**
     * Get the [arstcity] column value.
     *
     * @return string
     */
    public function getArstcity()
    {
        return $this->arstcity;
    }

    /**
     * Get the [arststat] column value.
     *
     * @return string
     */
    public function getArststat()
    {
        return $this->arststat;
    }

    /**
     * Get the [arstzipcode] column value.
     *
     * @return string
     */
    public function getArstzipcode()
    {
        return $this->arstzipcode;
    }

    /**
     * Get the [arstcont1] column value.
     *
     * @return string
     */
    public function getArstcont1()
    {
        return $this->arstcont1;
    }

    /**
     * Get the [arstcont2] column value.
     *
     * @return string
     */
    public function getArstcont2()
    {
        return $this->arstcont2;
    }

    /**
     * Get the [arspsaleper1] column value.
     *
     * @return string
     */
    public function getArspsaleper1()
    {
        return $this->arspsaleper1;
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
     * Get the [arspsaleper3] column value.
     *
     * @return string
     */
    public function getArspsaleper3()
    {
        return $this->arspsaleper3;
    }

    /**
     * Get the [artbmtaxcode] column value.
     *
     * @return string
     */
    public function getArtbmtaxcode()
    {
        return $this->artbmtaxcode;
    }

    /**
     * Get the [arsttaxexemnbr] column value.
     *
     * @return string
     */
    public function getArsttaxexemnbr()
    {
        return $this->arsttaxexemnbr;
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
     * Get the [artbshipvia] column value.
     *
     * @return string
     */
    public function getArtbshipvia()
    {
        return $this->artbshipvia;
    }

    /**
     * Get the [arstbord] column value.
     *
     * @return string
     */
    public function getArstbord()
    {
        return $this->arstbord;
    }

    /**
     * Get the [arstcredhold] column value.
     *
     * @return string
     */
    public function getArstcredhold()
    {
        return $this->arstcredhold;
    }

    /**
     * Get the [arstusercode] column value.
     *
     * @return string
     */
    public function getArstusercode()
    {
        return $this->arstusercode;
    }

    /**
     * Get the [arstpriclvl] column value.
     *
     * @return string
     */
    public function getArstpriclvl()
    {
        return $this->arstpriclvl;
    }

    /**
     * Get the [arstshipcomp] column value.
     *
     * @return string
     */
    public function getArstshipcomp()
    {
        return $this->arstshipcomp;
    }

    /**
     * Get the [arsttxbl] column value.
     *
     * @return string
     */
    public function getArsttxbl()
    {
        return $this->arsttxbl;
    }

    /**
     * Get the [arstpostal] column value.
     *
     * @return string
     */
    public function getArstpostal()
    {
        return $this->arstpostal;
    }

    /**
     * Get the [arstsalemtd] column value.
     *
     * @return string
     */
    public function getArstsalemtd()
    {
        return $this->arstsalemtd;
    }

    /**
     * Get the [arstinvmtd] column value.
     *
     * @return int
     */
    public function getArstinvmtd()
    {
        return $this->arstinvmtd;
    }

    /**
     * Get the [arstdateopen] column value.
     *
     * @return int
     */
    public function getArstdateopen()
    {
        return $this->arstdateopen;
    }

    /**
     * Get the [arstlastsaledate] column value.
     *
     * @return int
     */
    public function getArstlastsaledate()
    {
        return $this->arstlastsaledate;
    }

    /**
     * Get the [arstprimshipid] column value.
     *
     * @return string
     */
    public function getArstprimshipid()
    {
        return $this->arstprimshipid;
    }

    /**
     * Get the [arstmyvendid] column value.
     *
     * @return string
     */
    public function getArstmyvendid()
    {
        return $this->arstmyvendid;
    }

    /**
     * Get the [arstaddlpricdisc] column value.
     *
     * @return string
     */
    public function getArstaddlpricdisc()
    {
        return $this->arstaddlpricdisc;
    }

    /**
     * Get the [arstediinvc] column value.
     *
     * @return string
     */
    public function getArstediinvc()
    {
        return $this->arstediinvc;
    }

    /**
     * Get the [arstchrgfrt] column value.
     *
     * @return string
     */
    public function getArstchrgfrt()
    {
        return $this->arstchrgfrt;
    }

    /**
     * Get the [arstdistcntr] column value.
     *
     * @return string
     */
    public function getArstdistcntr()
    {
        return $this->arstdistcntr;
    }

    /**
     * Get the [arstdunsnbr] column value.
     *
     * @return string
     */
    public function getArstdunsnbr()
    {
        return $this->arstdunsnbr;
    }

    /**
     * Get the [arstrfmlvalu] column value.
     *
     * @return int
     */
    public function getArstrfmlvalu()
    {
        return $this->arstrfmlvalu;
    }

    /**
     * Get the [arstforcepo] column value.
     *
     * @return string
     */
    public function getArstforcepo()
    {
        return $this->arstforcepo;
    }

    /**
     * Get the [artbroutcode] column value.
     *
     * @return string
     */
    public function getArtbroutcode()
    {
        return $this->artbroutcode;
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
     * Set the value of [arcucustid] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARCUCUSTID] = true;
        }

        return $this;
    } // setArcucustid()

    /**
     * Set the value of [arstshipid] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstshipid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstshipid !== $v) {
            $this->arstshipid = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTSHIPID] = true;
        }

        return $this;
    } // setArstshipid()

    /**
     * Set the value of [arstname] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstname !== $v) {
            $this->arstname = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTNAME] = true;
        }

        return $this;
    } // setArstname()

    /**
     * Set the value of [arstadr1] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstadr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstadr1 !== $v) {
            $this->arstadr1 = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTADR1] = true;
        }

        return $this;
    } // setArstadr1()

    /**
     * Set the value of [arstadr2] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstadr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstadr2 !== $v) {
            $this->arstadr2 = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTADR2] = true;
        }

        return $this;
    } // setArstadr2()

    /**
     * Set the value of [arstadr3] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstadr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstadr3 !== $v) {
            $this->arstadr3 = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTADR3] = true;
        }

        return $this;
    } // setArstadr3()

    /**
     * Set the value of [arstadr4] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstadr4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstadr4 !== $v) {
            $this->arstadr4 = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTADR4] = true;
        }

        return $this;
    } // setArstadr4()

    /**
     * Set the value of [arstctry] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstctry !== $v) {
            $this->arstctry = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTCTRY] = true;
        }

        return $this;
    } // setArstctry()

    /**
     * Set the value of [arstadr5] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstadr5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstadr5 !== $v) {
            $this->arstadr5 = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTADR5] = true;
        }

        return $this;
    } // setArstadr5()

    /**
     * Set the value of [arstcity] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstcity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstcity !== $v) {
            $this->arstcity = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTCITY] = true;
        }

        return $this;
    } // setArstcity()

    /**
     * Set the value of [arststat] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArststat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arststat !== $v) {
            $this->arststat = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTSTAT] = true;
        }

        return $this;
    } // setArststat()

    /**
     * Set the value of [arstzipcode] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstzipcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstzipcode !== $v) {
            $this->arstzipcode = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTZIPCODE] = true;
        }

        return $this;
    } // setArstzipcode()

    /**
     * Set the value of [arstcont1] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstcont1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstcont1 !== $v) {
            $this->arstcont1 = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTCONT1] = true;
        }

        return $this;
    } // setArstcont1()

    /**
     * Set the value of [arstcont2] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstcont2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstcont2 !== $v) {
            $this->arstcont2 = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTCONT2] = true;
        }

        return $this;
    } // setArstcont2()

    /**
     * Set the value of [arspsaleper1] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArspsaleper1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper1 !== $v) {
            $this->arspsaleper1 = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSPSALEPER1] = true;
        }

        return $this;
    } // setArspsaleper1()

    /**
     * Set the value of [arspsaleper2] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArspsaleper2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper2 !== $v) {
            $this->arspsaleper2 = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSPSALEPER2] = true;
        }

        return $this;
    } // setArspsaleper2()

    /**
     * Set the value of [arspsaleper3] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArspsaleper3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper3 !== $v) {
            $this->arspsaleper3 = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSPSALEPER3] = true;
        }

        return $this;
    } // setArspsaleper3()

    /**
     * Set the value of [artbmtaxcode] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArtbmtaxcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxcode !== $v) {
            $this->artbmtaxcode = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARTBMTAXCODE] = true;
        }

        return $this;
    } // setArtbmtaxcode()

    /**
     * Set the value of [arsttaxexemnbr] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArsttaxexemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arsttaxexemnbr !== $v) {
            $this->arsttaxexemnbr = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTTAXEXEMNBR] = true;
        }

        return $this;
    } // setArsttaxexemnbr()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_INTBWHSE] = true;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [artbshipvia] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArtbshipvia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbshipvia !== $v) {
            $this->artbshipvia = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARTBSHIPVIA] = true;
        }

        return $this;
    } // setArtbshipvia()

    /**
     * Set the value of [arstbord] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstbord($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstbord !== $v) {
            $this->arstbord = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTBORD] = true;
        }

        return $this;
    } // setArstbord()

    /**
     * Set the value of [arstcredhold] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstcredhold($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstcredhold !== $v) {
            $this->arstcredhold = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTCREDHOLD] = true;
        }

        return $this;
    } // setArstcredhold()

    /**
     * Set the value of [arstusercode] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstusercode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstusercode !== $v) {
            $this->arstusercode = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTUSERCODE] = true;
        }

        return $this;
    } // setArstusercode()

    /**
     * Set the value of [arstpriclvl] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstpriclvl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstpriclvl !== $v) {
            $this->arstpriclvl = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTPRICLVL] = true;
        }

        return $this;
    } // setArstpriclvl()

    /**
     * Set the value of [arstshipcomp] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstshipcomp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstshipcomp !== $v) {
            $this->arstshipcomp = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTSHIPCOMP] = true;
        }

        return $this;
    } // setArstshipcomp()

    /**
     * Set the value of [arsttxbl] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArsttxbl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arsttxbl !== $v) {
            $this->arsttxbl = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTTXBL] = true;
        }

        return $this;
    } // setArsttxbl()

    /**
     * Set the value of [arstpostal] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstpostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstpostal !== $v) {
            $this->arstpostal = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTPOSTAL] = true;
        }

        return $this;
    } // setArstpostal()

    /**
     * Set the value of [arstsalemtd] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstsalemtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstsalemtd !== $v) {
            $this->arstsalemtd = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTSALEMTD] = true;
        }

        return $this;
    } // setArstsalemtd()

    /**
     * Set the value of [arstinvmtd] column.
     *
     * @param int $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstinvmtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstinvmtd !== $v) {
            $this->arstinvmtd = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTINVMTD] = true;
        }

        return $this;
    } // setArstinvmtd()

    /**
     * Set the value of [arstdateopen] column.
     *
     * @param int $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstdateopen($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstdateopen !== $v) {
            $this->arstdateopen = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTDATEOPEN] = true;
        }

        return $this;
    } // setArstdateopen()

    /**
     * Set the value of [arstlastsaledate] column.
     *
     * @param int $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstlastsaledate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstlastsaledate !== $v) {
            $this->arstlastsaledate = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTLASTSALEDATE] = true;
        }

        return $this;
    } // setArstlastsaledate()

    /**
     * Set the value of [arstprimshipid] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstprimshipid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstprimshipid !== $v) {
            $this->arstprimshipid = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTPRIMSHIPID] = true;
        }

        return $this;
    } // setArstprimshipid()

    /**
     * Set the value of [arstmyvendid] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstmyvendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstmyvendid !== $v) {
            $this->arstmyvendid = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTMYVENDID] = true;
        }

        return $this;
    } // setArstmyvendid()

    /**
     * Set the value of [arstaddlpricdisc] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstaddlpricdisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstaddlpricdisc !== $v) {
            $this->arstaddlpricdisc = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTADDLPRICDISC] = true;
        }

        return $this;
    } // setArstaddlpricdisc()

    /**
     * Set the value of [arstediinvc] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstediinvc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstediinvc !== $v) {
            $this->arstediinvc = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTEDIINVC] = true;
        }

        return $this;
    } // setArstediinvc()

    /**
     * Set the value of [arstchrgfrt] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstchrgfrt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstchrgfrt !== $v) {
            $this->arstchrgfrt = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTCHRGFRT] = true;
        }

        return $this;
    } // setArstchrgfrt()

    /**
     * Set the value of [arstdistcntr] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstdistcntr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstdistcntr !== $v) {
            $this->arstdistcntr = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTDISTCNTR] = true;
        }

        return $this;
    } // setArstdistcntr()

    /**
     * Set the value of [arstdunsnbr] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstdunsnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstdunsnbr !== $v) {
            $this->arstdunsnbr = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTDUNSNBR] = true;
        }

        return $this;
    } // setArstdunsnbr()

    /**
     * Set the value of [arstrfmlvalu] column.
     *
     * @param int $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstrfmlvalu($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arstrfmlvalu !== $v) {
            $this->arstrfmlvalu = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTRFMLVALU] = true;
        }

        return $this;
    } // setArstrfmlvalu()

    /**
     * Set the value of [arstforcepo] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArstforcepo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstforcepo !== $v) {
            $this->arstforcepo = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARSTFORCEPO] = true;
        }

        return $this;
    } // setArstforcepo()

    /**
     * Set the value of [artbroutcode] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setArtbroutcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbroutcode !== $v) {
            $this->artbroutcode = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_ARTBROUTCODE] = true;
        }

        return $this;
    } // setArtbroutcode()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param int $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param int $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ArShipTo The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ArShipToTableMap::COL_DUMMY] = true;
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
            if ($this->arcucustid !== '') {
                return false;
            }

            if ($this->arstshipid !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ArShipToTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ArShipToTableMap::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstshipid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ArShipToTableMap::translateFieldName('Arstname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ArShipToTableMap::translateFieldName('Arstadr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstadr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ArShipToTableMap::translateFieldName('Arstadr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstadr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ArShipToTableMap::translateFieldName('Arstadr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstadr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ArShipToTableMap::translateFieldName('Arstadr4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstadr4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ArShipToTableMap::translateFieldName('Arstctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ArShipToTableMap::translateFieldName('Arstadr5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstadr5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ArShipToTableMap::translateFieldName('Arstcity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstcity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ArShipToTableMap::translateFieldName('Arststat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arststat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ArShipToTableMap::translateFieldName('Arstzipcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstzipcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ArShipToTableMap::translateFieldName('Arstcont1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstcont1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ArShipToTableMap::translateFieldName('Arstcont2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstcont2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ArShipToTableMap::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ArShipToTableMap::translateFieldName('Arspsaleper2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ArShipToTableMap::translateFieldName('Arspsaleper3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ArShipToTableMap::translateFieldName('Artbmtaxcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ArShipToTableMap::translateFieldName('Arsttaxexemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arsttaxexemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ArShipToTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ArShipToTableMap::translateFieldName('Artbshipvia', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbshipvia = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ArShipToTableMap::translateFieldName('Arstbord', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstbord = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ArShipToTableMap::translateFieldName('Arstcredhold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstcredhold = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ArShipToTableMap::translateFieldName('Arstusercode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstusercode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ArShipToTableMap::translateFieldName('Arstpriclvl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstpriclvl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : ArShipToTableMap::translateFieldName('Arstshipcomp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstshipcomp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : ArShipToTableMap::translateFieldName('Arsttxbl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arsttxbl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : ArShipToTableMap::translateFieldName('Arstpostal', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstpostal = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : ArShipToTableMap::translateFieldName('Arstsalemtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstsalemtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : ArShipToTableMap::translateFieldName('Arstinvmtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstinvmtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : ArShipToTableMap::translateFieldName('Arstdateopen', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstdateopen = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : ArShipToTableMap::translateFieldName('Arstlastsaledate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstlastsaledate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : ArShipToTableMap::translateFieldName('Arstprimshipid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstprimshipid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : ArShipToTableMap::translateFieldName('Arstmyvendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstmyvendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : ArShipToTableMap::translateFieldName('Arstaddlpricdisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstaddlpricdisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : ArShipToTableMap::translateFieldName('Arstediinvc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstediinvc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : ArShipToTableMap::translateFieldName('Arstchrgfrt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstchrgfrt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : ArShipToTableMap::translateFieldName('Arstdistcntr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstdistcntr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : ArShipToTableMap::translateFieldName('Arstdunsnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstdunsnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : ArShipToTableMap::translateFieldName('Arstrfmlvalu', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstrfmlvalu = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : ArShipToTableMap::translateFieldName('Arstforcepo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstforcepo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : ArShipToTableMap::translateFieldName('Artbroutcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbroutcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : ArShipToTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : ArShipToTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : ArShipToTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 45; // 45 = ArShipToTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ArShipTo'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ArShipToTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildArShipToQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see ArShipTo::setDeleted()
     * @see ArShipTo::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArShipToTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildArShipToQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArShipToTableMap::DATABASE_NAME);
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
                ArShipToTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ArShipToTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTSHIPID)) {
            $modifiedColumns[':p' . $index++]  = 'ArstShipId';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'ArstName';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTADR1)) {
            $modifiedColumns[':p' . $index++]  = 'ArstAdr1';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTADR2)) {
            $modifiedColumns[':p' . $index++]  = 'ArstAdr2';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTADR3)) {
            $modifiedColumns[':p' . $index++]  = 'ArstAdr3';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTADR4)) {
            $modifiedColumns[':p' . $index++]  = 'ArstAdr4';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'ArstCtry';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTADR5)) {
            $modifiedColumns[':p' . $index++]  = 'ArstAdr5';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTCITY)) {
            $modifiedColumns[':p' . $index++]  = 'ArstCity';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'ArstStat';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArstZipCode';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTCONT1)) {
            $modifiedColumns[':p' . $index++]  = 'ArstCont1';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTCONT2)) {
            $modifiedColumns[':p' . $index++]  = 'ArstCont2';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSPSALEPER1)) {
            $modifiedColumns[':p' . $index++]  = 'Arspsaleper1';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSPSALEPER2)) {
            $modifiedColumns[':p' . $index++]  = 'Arspsaleper2';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSPSALEPER3)) {
            $modifiedColumns[':p' . $index++]  = 'Arspsaleper3';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARTBMTAXCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxCode';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTTAXEXEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArstTaxExemNbr';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARTBSHIPVIA)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbShipVia';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTBORD)) {
            $modifiedColumns[':p' . $index++]  = 'ArstBord';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTCREDHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'ArstCredHold';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTUSERCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArstUserCode';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTPRICLVL)) {
            $modifiedColumns[':p' . $index++]  = 'ArstPricLvl';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTSHIPCOMP)) {
            $modifiedColumns[':p' . $index++]  = 'ArstShipComp';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTTXBL)) {
            $modifiedColumns[':p' . $index++]  = 'ArstTxbl';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = 'ArstPostal';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTSALEMTD)) {
            $modifiedColumns[':p' . $index++]  = 'ArstSaleMtd';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTINVMTD)) {
            $modifiedColumns[':p' . $index++]  = 'ArstInvMtd';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTDATEOPEN)) {
            $modifiedColumns[':p' . $index++]  = 'ArstDateOpen';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTLASTSALEDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArstLastSaleDate';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTPRIMSHIPID)) {
            $modifiedColumns[':p' . $index++]  = 'ArstPrimShipId';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTMYVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'ArstMyVendId';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTADDLPRICDISC)) {
            $modifiedColumns[':p' . $index++]  = 'ArstAddlPricDisc';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTEDIINVC)) {
            $modifiedColumns[':p' . $index++]  = 'ArstEdiInvc';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTCHRGFRT)) {
            $modifiedColumns[':p' . $index++]  = 'ArstChrgFrt';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTDISTCNTR)) {
            $modifiedColumns[':p' . $index++]  = 'ArstDistCntr';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTDUNSNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArstDunsNbr';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTRFMLVALU)) {
            $modifiedColumns[':p' . $index++]  = 'ArstRfmlValu';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTFORCEPO)) {
            $modifiedColumns[':p' . $index++]  = 'ArstForcePo';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARTBROUTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbRoutCode';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO AR_SHIP_TO (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ArcuCustId':
                        $stmt->bindValue($identifier, $this->arcucustid, PDO::PARAM_STR);
                        break;
                    case 'ArstShipId':
                        $stmt->bindValue($identifier, $this->arstshipid, PDO::PARAM_STR);
                        break;
                    case 'ArstName':
                        $stmt->bindValue($identifier, $this->arstname, PDO::PARAM_STR);
                        break;
                    case 'ArstAdr1':
                        $stmt->bindValue($identifier, $this->arstadr1, PDO::PARAM_STR);
                        break;
                    case 'ArstAdr2':
                        $stmt->bindValue($identifier, $this->arstadr2, PDO::PARAM_STR);
                        break;
                    case 'ArstAdr3':
                        $stmt->bindValue($identifier, $this->arstadr3, PDO::PARAM_STR);
                        break;
                    case 'ArstAdr4':
                        $stmt->bindValue($identifier, $this->arstadr4, PDO::PARAM_STR);
                        break;
                    case 'ArstCtry':
                        $stmt->bindValue($identifier, $this->arstctry, PDO::PARAM_STR);
                        break;
                    case 'ArstAdr5':
                        $stmt->bindValue($identifier, $this->arstadr5, PDO::PARAM_STR);
                        break;
                    case 'ArstCity':
                        $stmt->bindValue($identifier, $this->arstcity, PDO::PARAM_STR);
                        break;
                    case 'ArstStat':
                        $stmt->bindValue($identifier, $this->arststat, PDO::PARAM_STR);
                        break;
                    case 'ArstZipCode':
                        $stmt->bindValue($identifier, $this->arstzipcode, PDO::PARAM_STR);
                        break;
                    case 'ArstCont1':
                        $stmt->bindValue($identifier, $this->arstcont1, PDO::PARAM_STR);
                        break;
                    case 'ArstCont2':
                        $stmt->bindValue($identifier, $this->arstcont2, PDO::PARAM_STR);
                        break;
                    case 'Arspsaleper1':
                        $stmt->bindValue($identifier, $this->arspsaleper1, PDO::PARAM_STR);
                        break;
                    case 'Arspsaleper2':
                        $stmt->bindValue($identifier, $this->arspsaleper2, PDO::PARAM_STR);
                        break;
                    case 'Arspsaleper3':
                        $stmt->bindValue($identifier, $this->arspsaleper3, PDO::PARAM_STR);
                        break;
                    case 'ArtbMtaxCode':
                        $stmt->bindValue($identifier, $this->artbmtaxcode, PDO::PARAM_STR);
                        break;
                    case 'ArstTaxExemNbr':
                        $stmt->bindValue($identifier, $this->arsttaxexemnbr, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'ArtbShipVia':
                        $stmt->bindValue($identifier, $this->artbshipvia, PDO::PARAM_STR);
                        break;
                    case 'ArstBord':
                        $stmt->bindValue($identifier, $this->arstbord, PDO::PARAM_STR);
                        break;
                    case 'ArstCredHold':
                        $stmt->bindValue($identifier, $this->arstcredhold, PDO::PARAM_STR);
                        break;
                    case 'ArstUserCode':
                        $stmt->bindValue($identifier, $this->arstusercode, PDO::PARAM_STR);
                        break;
                    case 'ArstPricLvl':
                        $stmt->bindValue($identifier, $this->arstpriclvl, PDO::PARAM_STR);
                        break;
                    case 'ArstShipComp':
                        $stmt->bindValue($identifier, $this->arstshipcomp, PDO::PARAM_STR);
                        break;
                    case 'ArstTxbl':
                        $stmt->bindValue($identifier, $this->arsttxbl, PDO::PARAM_STR);
                        break;
                    case 'ArstPostal':
                        $stmt->bindValue($identifier, $this->arstpostal, PDO::PARAM_STR);
                        break;
                    case 'ArstSaleMtd':
                        $stmt->bindValue($identifier, $this->arstsalemtd, PDO::PARAM_STR);
                        break;
                    case 'ArstInvMtd':
                        $stmt->bindValue($identifier, $this->arstinvmtd, PDO::PARAM_INT);
                        break;
                    case 'ArstDateOpen':
                        $stmt->bindValue($identifier, $this->arstdateopen, PDO::PARAM_INT);
                        break;
                    case 'ArstLastSaleDate':
                        $stmt->bindValue($identifier, $this->arstlastsaledate, PDO::PARAM_INT);
                        break;
                    case 'ArstPrimShipId':
                        $stmt->bindValue($identifier, $this->arstprimshipid, PDO::PARAM_STR);
                        break;
                    case 'ArstMyVendId':
                        $stmt->bindValue($identifier, $this->arstmyvendid, PDO::PARAM_STR);
                        break;
                    case 'ArstAddlPricDisc':
                        $stmt->bindValue($identifier, $this->arstaddlpricdisc, PDO::PARAM_STR);
                        break;
                    case 'ArstEdiInvc':
                        $stmt->bindValue($identifier, $this->arstediinvc, PDO::PARAM_STR);
                        break;
                    case 'ArstChrgFrt':
                        $stmt->bindValue($identifier, $this->arstchrgfrt, PDO::PARAM_STR);
                        break;
                    case 'ArstDistCntr':
                        $stmt->bindValue($identifier, $this->arstdistcntr, PDO::PARAM_STR);
                        break;
                    case 'ArstDunsNbr':
                        $stmt->bindValue($identifier, $this->arstdunsnbr, PDO::PARAM_STR);
                        break;
                    case 'ArstRfmlValu':
                        $stmt->bindValue($identifier, $this->arstrfmlvalu, PDO::PARAM_INT);
                        break;
                    case 'ArstForcePo':
                        $stmt->bindValue($identifier, $this->arstforcepo, PDO::PARAM_STR);
                        break;
                    case 'ArtbRoutCode':
                        $stmt->bindValue($identifier, $this->artbroutcode, PDO::PARAM_STR);
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
        $pos = ArShipToTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getArcucustid();
                break;
            case 1:
                return $this->getArstshipid();
                break;
            case 2:
                return $this->getArstname();
                break;
            case 3:
                return $this->getArstadr1();
                break;
            case 4:
                return $this->getArstadr2();
                break;
            case 5:
                return $this->getArstadr3();
                break;
            case 6:
                return $this->getArstadr4();
                break;
            case 7:
                return $this->getArstctry();
                break;
            case 8:
                return $this->getArstadr5();
                break;
            case 9:
                return $this->getArstcity();
                break;
            case 10:
                return $this->getArststat();
                break;
            case 11:
                return $this->getArstzipcode();
                break;
            case 12:
                return $this->getArstcont1();
                break;
            case 13:
                return $this->getArstcont2();
                break;
            case 14:
                return $this->getArspsaleper1();
                break;
            case 15:
                return $this->getArspsaleper2();
                break;
            case 16:
                return $this->getArspsaleper3();
                break;
            case 17:
                return $this->getArtbmtaxcode();
                break;
            case 18:
                return $this->getArsttaxexemnbr();
                break;
            case 19:
                return $this->getIntbwhse();
                break;
            case 20:
                return $this->getArtbshipvia();
                break;
            case 21:
                return $this->getArstbord();
                break;
            case 22:
                return $this->getArstcredhold();
                break;
            case 23:
                return $this->getArstusercode();
                break;
            case 24:
                return $this->getArstpriclvl();
                break;
            case 25:
                return $this->getArstshipcomp();
                break;
            case 26:
                return $this->getArsttxbl();
                break;
            case 27:
                return $this->getArstpostal();
                break;
            case 28:
                return $this->getArstsalemtd();
                break;
            case 29:
                return $this->getArstinvmtd();
                break;
            case 30:
                return $this->getArstdateopen();
                break;
            case 31:
                return $this->getArstlastsaledate();
                break;
            case 32:
                return $this->getArstprimshipid();
                break;
            case 33:
                return $this->getArstmyvendid();
                break;
            case 34:
                return $this->getArstaddlpricdisc();
                break;
            case 35:
                return $this->getArstediinvc();
                break;
            case 36:
                return $this->getArstchrgfrt();
                break;
            case 37:
                return $this->getArstdistcntr();
                break;
            case 38:
                return $this->getArstdunsnbr();
                break;
            case 39:
                return $this->getArstrfmlvalu();
                break;
            case 40:
                return $this->getArstforcepo();
                break;
            case 41:
                return $this->getArtbroutcode();
                break;
            case 42:
                return $this->getDateupdtd();
                break;
            case 43:
                return $this->getTimeupdtd();
                break;
            case 44:
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

        if (isset($alreadyDumpedObjects['ArShipTo'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ArShipTo'][$this->hashCode()] = true;
        $keys = ArShipToTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getArcucustid(),
            $keys[1] => $this->getArstshipid(),
            $keys[2] => $this->getArstname(),
            $keys[3] => $this->getArstadr1(),
            $keys[4] => $this->getArstadr2(),
            $keys[5] => $this->getArstadr3(),
            $keys[6] => $this->getArstadr4(),
            $keys[7] => $this->getArstctry(),
            $keys[8] => $this->getArstadr5(),
            $keys[9] => $this->getArstcity(),
            $keys[10] => $this->getArststat(),
            $keys[11] => $this->getArstzipcode(),
            $keys[12] => $this->getArstcont1(),
            $keys[13] => $this->getArstcont2(),
            $keys[14] => $this->getArspsaleper1(),
            $keys[15] => $this->getArspsaleper2(),
            $keys[16] => $this->getArspsaleper3(),
            $keys[17] => $this->getArtbmtaxcode(),
            $keys[18] => $this->getArsttaxexemnbr(),
            $keys[19] => $this->getIntbwhse(),
            $keys[20] => $this->getArtbshipvia(),
            $keys[21] => $this->getArstbord(),
            $keys[22] => $this->getArstcredhold(),
            $keys[23] => $this->getArstusercode(),
            $keys[24] => $this->getArstpriclvl(),
            $keys[25] => $this->getArstshipcomp(),
            $keys[26] => $this->getArsttxbl(),
            $keys[27] => $this->getArstpostal(),
            $keys[28] => $this->getArstsalemtd(),
            $keys[29] => $this->getArstinvmtd(),
            $keys[30] => $this->getArstdateopen(),
            $keys[31] => $this->getArstlastsaledate(),
            $keys[32] => $this->getArstprimshipid(),
            $keys[33] => $this->getArstmyvendid(),
            $keys[34] => $this->getArstaddlpricdisc(),
            $keys[35] => $this->getArstediinvc(),
            $keys[36] => $this->getArstchrgfrt(),
            $keys[37] => $this->getArstdistcntr(),
            $keys[38] => $this->getArstdunsnbr(),
            $keys[39] => $this->getArstrfmlvalu(),
            $keys[40] => $this->getArstforcepo(),
            $keys[41] => $this->getArtbroutcode(),
            $keys[42] => $this->getDateupdtd(),
            $keys[43] => $this->getTimeupdtd(),
            $keys[44] => $this->getDummy(),
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
     * @return $this|\ArShipTo
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ArShipToTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ArShipTo
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setArcucustid($value);
                break;
            case 1:
                $this->setArstshipid($value);
                break;
            case 2:
                $this->setArstname($value);
                break;
            case 3:
                $this->setArstadr1($value);
                break;
            case 4:
                $this->setArstadr2($value);
                break;
            case 5:
                $this->setArstadr3($value);
                break;
            case 6:
                $this->setArstadr4($value);
                break;
            case 7:
                $this->setArstctry($value);
                break;
            case 8:
                $this->setArstadr5($value);
                break;
            case 9:
                $this->setArstcity($value);
                break;
            case 10:
                $this->setArststat($value);
                break;
            case 11:
                $this->setArstzipcode($value);
                break;
            case 12:
                $this->setArstcont1($value);
                break;
            case 13:
                $this->setArstcont2($value);
                break;
            case 14:
                $this->setArspsaleper1($value);
                break;
            case 15:
                $this->setArspsaleper2($value);
                break;
            case 16:
                $this->setArspsaleper3($value);
                break;
            case 17:
                $this->setArtbmtaxcode($value);
                break;
            case 18:
                $this->setArsttaxexemnbr($value);
                break;
            case 19:
                $this->setIntbwhse($value);
                break;
            case 20:
                $this->setArtbshipvia($value);
                break;
            case 21:
                $this->setArstbord($value);
                break;
            case 22:
                $this->setArstcredhold($value);
                break;
            case 23:
                $this->setArstusercode($value);
                break;
            case 24:
                $this->setArstpriclvl($value);
                break;
            case 25:
                $this->setArstshipcomp($value);
                break;
            case 26:
                $this->setArsttxbl($value);
                break;
            case 27:
                $this->setArstpostal($value);
                break;
            case 28:
                $this->setArstsalemtd($value);
                break;
            case 29:
                $this->setArstinvmtd($value);
                break;
            case 30:
                $this->setArstdateopen($value);
                break;
            case 31:
                $this->setArstlastsaledate($value);
                break;
            case 32:
                $this->setArstprimshipid($value);
                break;
            case 33:
                $this->setArstmyvendid($value);
                break;
            case 34:
                $this->setArstaddlpricdisc($value);
                break;
            case 35:
                $this->setArstediinvc($value);
                break;
            case 36:
                $this->setArstchrgfrt($value);
                break;
            case 37:
                $this->setArstdistcntr($value);
                break;
            case 38:
                $this->setArstdunsnbr($value);
                break;
            case 39:
                $this->setArstrfmlvalu($value);
                break;
            case 40:
                $this->setArstforcepo($value);
                break;
            case 41:
                $this->setArtbroutcode($value);
                break;
            case 42:
                $this->setDateupdtd($value);
                break;
            case 43:
                $this->setTimeupdtd($value);
                break;
            case 44:
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
        $keys = ArShipToTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setArcucustid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setArstshipid($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setArstname($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setArstadr1($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setArstadr2($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setArstadr3($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setArstadr4($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setArstctry($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setArstadr5($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setArstcity($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setArststat($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setArstzipcode($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setArstcont1($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setArstcont2($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setArspsaleper1($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setArspsaleper2($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setArspsaleper3($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setArtbmtaxcode($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setArsttaxexemnbr($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setIntbwhse($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setArtbshipvia($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setArstbord($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setArstcredhold($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setArstusercode($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setArstpriclvl($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setArstshipcomp($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setArsttxbl($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setArstpostal($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setArstsalemtd($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setArstinvmtd($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setArstdateopen($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setArstlastsaledate($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setArstprimshipid($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setArstmyvendid($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setArstaddlpricdisc($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setArstediinvc($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setArstchrgfrt($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setArstdistcntr($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setArstdunsnbr($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setArstrfmlvalu($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setArstforcepo($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setArtbroutcode($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setDateupdtd($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setTimeupdtd($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setDummy($arr[$keys[44]]);
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
     * @return $this|\ArShipTo The current object, for fluid interface
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
        $criteria = new Criteria(ArShipToTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ArShipToTableMap::COL_ARCUCUSTID)) {
            $criteria->add(ArShipToTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTSHIPID)) {
            $criteria->add(ArShipToTableMap::COL_ARSTSHIPID, $this->arstshipid);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTNAME)) {
            $criteria->add(ArShipToTableMap::COL_ARSTNAME, $this->arstname);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTADR1)) {
            $criteria->add(ArShipToTableMap::COL_ARSTADR1, $this->arstadr1);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTADR2)) {
            $criteria->add(ArShipToTableMap::COL_ARSTADR2, $this->arstadr2);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTADR3)) {
            $criteria->add(ArShipToTableMap::COL_ARSTADR3, $this->arstadr3);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTADR4)) {
            $criteria->add(ArShipToTableMap::COL_ARSTADR4, $this->arstadr4);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTCTRY)) {
            $criteria->add(ArShipToTableMap::COL_ARSTCTRY, $this->arstctry);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTADR5)) {
            $criteria->add(ArShipToTableMap::COL_ARSTADR5, $this->arstadr5);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTCITY)) {
            $criteria->add(ArShipToTableMap::COL_ARSTCITY, $this->arstcity);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTSTAT)) {
            $criteria->add(ArShipToTableMap::COL_ARSTSTAT, $this->arststat);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTZIPCODE)) {
            $criteria->add(ArShipToTableMap::COL_ARSTZIPCODE, $this->arstzipcode);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTCONT1)) {
            $criteria->add(ArShipToTableMap::COL_ARSTCONT1, $this->arstcont1);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTCONT2)) {
            $criteria->add(ArShipToTableMap::COL_ARSTCONT2, $this->arstcont2);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSPSALEPER1)) {
            $criteria->add(ArShipToTableMap::COL_ARSPSALEPER1, $this->arspsaleper1);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSPSALEPER2)) {
            $criteria->add(ArShipToTableMap::COL_ARSPSALEPER2, $this->arspsaleper2);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSPSALEPER3)) {
            $criteria->add(ArShipToTableMap::COL_ARSPSALEPER3, $this->arspsaleper3);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARTBMTAXCODE)) {
            $criteria->add(ArShipToTableMap::COL_ARTBMTAXCODE, $this->artbmtaxcode);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTTAXEXEMNBR)) {
            $criteria->add(ArShipToTableMap::COL_ARSTTAXEXEMNBR, $this->arsttaxexemnbr);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_INTBWHSE)) {
            $criteria->add(ArShipToTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARTBSHIPVIA)) {
            $criteria->add(ArShipToTableMap::COL_ARTBSHIPVIA, $this->artbshipvia);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTBORD)) {
            $criteria->add(ArShipToTableMap::COL_ARSTBORD, $this->arstbord);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTCREDHOLD)) {
            $criteria->add(ArShipToTableMap::COL_ARSTCREDHOLD, $this->arstcredhold);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTUSERCODE)) {
            $criteria->add(ArShipToTableMap::COL_ARSTUSERCODE, $this->arstusercode);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTPRICLVL)) {
            $criteria->add(ArShipToTableMap::COL_ARSTPRICLVL, $this->arstpriclvl);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTSHIPCOMP)) {
            $criteria->add(ArShipToTableMap::COL_ARSTSHIPCOMP, $this->arstshipcomp);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTTXBL)) {
            $criteria->add(ArShipToTableMap::COL_ARSTTXBL, $this->arsttxbl);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTPOSTAL)) {
            $criteria->add(ArShipToTableMap::COL_ARSTPOSTAL, $this->arstpostal);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTSALEMTD)) {
            $criteria->add(ArShipToTableMap::COL_ARSTSALEMTD, $this->arstsalemtd);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTINVMTD)) {
            $criteria->add(ArShipToTableMap::COL_ARSTINVMTD, $this->arstinvmtd);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTDATEOPEN)) {
            $criteria->add(ArShipToTableMap::COL_ARSTDATEOPEN, $this->arstdateopen);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTLASTSALEDATE)) {
            $criteria->add(ArShipToTableMap::COL_ARSTLASTSALEDATE, $this->arstlastsaledate);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTPRIMSHIPID)) {
            $criteria->add(ArShipToTableMap::COL_ARSTPRIMSHIPID, $this->arstprimshipid);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTMYVENDID)) {
            $criteria->add(ArShipToTableMap::COL_ARSTMYVENDID, $this->arstmyvendid);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTADDLPRICDISC)) {
            $criteria->add(ArShipToTableMap::COL_ARSTADDLPRICDISC, $this->arstaddlpricdisc);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTEDIINVC)) {
            $criteria->add(ArShipToTableMap::COL_ARSTEDIINVC, $this->arstediinvc);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTCHRGFRT)) {
            $criteria->add(ArShipToTableMap::COL_ARSTCHRGFRT, $this->arstchrgfrt);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTDISTCNTR)) {
            $criteria->add(ArShipToTableMap::COL_ARSTDISTCNTR, $this->arstdistcntr);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTDUNSNBR)) {
            $criteria->add(ArShipToTableMap::COL_ARSTDUNSNBR, $this->arstdunsnbr);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTRFMLVALU)) {
            $criteria->add(ArShipToTableMap::COL_ARSTRFMLVALU, $this->arstrfmlvalu);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARSTFORCEPO)) {
            $criteria->add(ArShipToTableMap::COL_ARSTFORCEPO, $this->arstforcepo);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_ARTBROUTCODE)) {
            $criteria->add(ArShipToTableMap::COL_ARTBROUTCODE, $this->artbroutcode);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_DATEUPDTD)) {
            $criteria->add(ArShipToTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ArShipToTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ArShipToTableMap::COL_DUMMY)) {
            $criteria->add(ArShipToTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildArShipToQuery::create();
        $criteria->add(ArShipToTableMap::COL_ARCUCUSTID, $this->arcucustid);
        $criteria->add(ArShipToTableMap::COL_ARSTSHIPID, $this->arstshipid);

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
        $validPk = null !== $this->getArcucustid() &&
            null !== $this->getArstshipid();

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
        $pks[0] = $this->getArcucustid();
        $pks[1] = $this->getArstshipid();

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
        $this->setArcucustid($keys[0]);
        $this->setArstshipid($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getArcucustid()) && (null === $this->getArstshipid());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ArShipTo (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setArstshipid($this->getArstshipid());
        $copyObj->setArstname($this->getArstname());
        $copyObj->setArstadr1($this->getArstadr1());
        $copyObj->setArstadr2($this->getArstadr2());
        $copyObj->setArstadr3($this->getArstadr3());
        $copyObj->setArstadr4($this->getArstadr4());
        $copyObj->setArstctry($this->getArstctry());
        $copyObj->setArstadr5($this->getArstadr5());
        $copyObj->setArstcity($this->getArstcity());
        $copyObj->setArststat($this->getArststat());
        $copyObj->setArstzipcode($this->getArstzipcode());
        $copyObj->setArstcont1($this->getArstcont1());
        $copyObj->setArstcont2($this->getArstcont2());
        $copyObj->setArspsaleper1($this->getArspsaleper1());
        $copyObj->setArspsaleper2($this->getArspsaleper2());
        $copyObj->setArspsaleper3($this->getArspsaleper3());
        $copyObj->setArtbmtaxcode($this->getArtbmtaxcode());
        $copyObj->setArsttaxexemnbr($this->getArsttaxexemnbr());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setArtbshipvia($this->getArtbshipvia());
        $copyObj->setArstbord($this->getArstbord());
        $copyObj->setArstcredhold($this->getArstcredhold());
        $copyObj->setArstusercode($this->getArstusercode());
        $copyObj->setArstpriclvl($this->getArstpriclvl());
        $copyObj->setArstshipcomp($this->getArstshipcomp());
        $copyObj->setArsttxbl($this->getArsttxbl());
        $copyObj->setArstpostal($this->getArstpostal());
        $copyObj->setArstsalemtd($this->getArstsalemtd());
        $copyObj->setArstinvmtd($this->getArstinvmtd());
        $copyObj->setArstdateopen($this->getArstdateopen());
        $copyObj->setArstlastsaledate($this->getArstlastsaledate());
        $copyObj->setArstprimshipid($this->getArstprimshipid());
        $copyObj->setArstmyvendid($this->getArstmyvendid());
        $copyObj->setArstaddlpricdisc($this->getArstaddlpricdisc());
        $copyObj->setArstediinvc($this->getArstediinvc());
        $copyObj->setArstchrgfrt($this->getArstchrgfrt());
        $copyObj->setArstdistcntr($this->getArstdistcntr());
        $copyObj->setArstdunsnbr($this->getArstdunsnbr());
        $copyObj->setArstrfmlvalu($this->getArstrfmlvalu());
        $copyObj->setArstforcepo($this->getArstforcepo());
        $copyObj->setArtbroutcode($this->getArtbroutcode());
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
     * @return \ArShipTo Clone of current object.
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
        $this->arcucustid = null;
        $this->arstshipid = null;
        $this->arstname = null;
        $this->arstadr1 = null;
        $this->arstadr2 = null;
        $this->arstadr3 = null;
        $this->arstadr4 = null;
        $this->arstctry = null;
        $this->arstadr5 = null;
        $this->arstcity = null;
        $this->arststat = null;
        $this->arstzipcode = null;
        $this->arstcont1 = null;
        $this->arstcont2 = null;
        $this->arspsaleper1 = null;
        $this->arspsaleper2 = null;
        $this->arspsaleper3 = null;
        $this->artbmtaxcode = null;
        $this->arsttaxexemnbr = null;
        $this->intbwhse = null;
        $this->artbshipvia = null;
        $this->arstbord = null;
        $this->arstcredhold = null;
        $this->arstusercode = null;
        $this->arstpriclvl = null;
        $this->arstshipcomp = null;
        $this->arsttxbl = null;
        $this->arstpostal = null;
        $this->arstsalemtd = null;
        $this->arstinvmtd = null;
        $this->arstdateopen = null;
        $this->arstlastsaledate = null;
        $this->arstprimshipid = null;
        $this->arstmyvendid = null;
        $this->arstaddlpricdisc = null;
        $this->arstediinvc = null;
        $this->arstchrgfrt = null;
        $this->arstdistcntr = null;
        $this->arstdunsnbr = null;
        $this->arstrfmlvalu = null;
        $this->arstforcepo = null;
        $this->artbroutcode = null;
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
        return (string) $this->exportTo(ArShipToTableMap::DEFAULT_STRING_FORMAT);
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
