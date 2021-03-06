<?php

namespace Base;

use \ArCustMastQuery as ChildArCustMastQuery;
use \Exception;
use \PDO;
use Map\ArCustMastTableMap;
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
 * Base class that represents a row from the 'AR_CUST_MAST' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ArCustMast implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ArCustMastTableMap';


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
     * The value for the arcuname field.
     *
     * @var        string
     */
    protected $arcuname;

    /**
     * The value for the arcuadr1 field.
     *
     * @var        string
     */
    protected $arcuadr1;

    /**
     * The value for the arcuadr2 field.
     *
     * @var        string
     */
    protected $arcuadr2;

    /**
     * The value for the arcuadr3 field.
     *
     * @var        string
     */
    protected $arcuadr3;

    /**
     * The value for the arcuctry field.
     *
     * @var        string
     */
    protected $arcuctry;

    /**
     * The value for the arcucity field.
     *
     * @var        string
     */
    protected $arcucity;

    /**
     * The value for the arcustat field.
     *
     * @var        string
     */
    protected $arcustat;

    /**
     * The value for the arcuzipcode5 field.
     *
     * @var        string
     */
    protected $arcuzipcode5;

    /**
     * The value for the arcuzipcode4 field.
     *
     * @var        string
     */
    protected $arcuzipcode4;

    /**
     * The value for the arcuzipcode10 field.
     *
     * @var        string
     */
    protected $arcuzipcode10;

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
     * The value for the arcutaxexemnbr field.
     *
     * @var        string
     */
    protected $arcutaxexemnbr;

    /**
     * The value for the intbwhse field.
     *
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the arcupriclvl field.
     *
     * @var        string
     */
    protected $arcupriclvl;

    /**
     * The value for the arcushipcomp field.
     *
     * @var        string
     */
    protected $arcushipcomp;

    /**
     * The value for the arcutxbl field.
     *
     * @var        string
     */
    protected $arcutxbl;

    /**
     * The value for the arcupostal field.
     *
     * @var        string
     */
    protected $arcupostal;

    /**
     * The value for the artbshipvia field.
     *
     * @var        string
     */
    protected $artbshipvia;

    /**
     * The value for the arcubord field.
     *
     * @var        string
     */
    protected $arcubord;

    /**
     * The value for the artbtypecode field.
     *
     * @var        string
     */
    protected $artbtypecode;

    /**
     * The value for the artbpriccode field.
     *
     * @var        string
     */
    protected $artbpriccode;

    /**
     * The value for the artbcommcode field.
     *
     * @var        string
     */
    protected $artbcommcode;

    /**
     * The value for the artmtermcd field.
     *
     * @var        string
     */
    protected $artmtermcd;

    /**
     * The value for the arcucredlmt field.
     *
     * @var        string
     */
    protected $arcucredlmt;

    /**
     * The value for the arcustmtcode field.
     *
     * @var        string
     */
    protected $arcustmtcode;

    /**
     * The value for the arcucredhold field.
     *
     * @var        string
     */
    protected $arcucredhold;

    /**
     * The value for the arcufinchrg field.
     *
     * @var        string
     */
    protected $arcufinchrg;

    /**
     * The value for the arcuusercode field.
     *
     * @var        string
     */
    protected $arcuusercode;

    /**
     * The value for the arcunewfc field.
     *
     * @var        string
     */
    protected $arcunewfc;

    /**
     * The value for the arcuunpdfc field.
     *
     * @var        string
     */
    protected $arcuunpdfc;

    /**
     * The value for the arcucurbal field.
     *
     * @var        string
     */
    protected $arcucurbal;

    /**
     * The value for the arcubalodue1 field.
     *
     * @var        string
     */
    protected $arcubalodue1;

    /**
     * The value for the arcubalodue2 field.
     *
     * @var        string
     */
    protected $arcubalodue2;

    /**
     * The value for the arcubalodue3 field.
     *
     * @var        string
     */
    protected $arcubalodue3;

    /**
     * The value for the arcusalemtd field.
     *
     * @var        string
     */
    protected $arcusalemtd;

    /**
     * The value for the arcuinvmtd field.
     *
     * @var        int
     */
    protected $arcuinvmtd;

    /**
     * The value for the arcudateopen field.
     *
     * @var        int
     */
    protected $arcudateopen;

    /**
     * The value for the arculastsaledate field.
     *
     * @var        int
     */
    protected $arculastsaledate;

    /**
     * The value for the arcuhighbal field.
     *
     * @var        string
     */
    protected $arcuhighbal;

    /**
     * The value for the arcubigsalemo field.
     *
     * @var        string
     */
    protected $arcubigsalemo;

    /**
     * The value for the arculastpaydate field.
     *
     * @var        int
     */
    protected $arculastpaydate;

    /**
     * The value for the arcuavgpaydays field.
     *
     * @var        int
     */
    protected $arcuavgpaydays;

    /**
     * The value for the arcuupszone field.
     *
     * @var        string
     */
    protected $arcuupszone;

    /**
     * The value for the arcuhighbaldate field.
     *
     * @var        int
     */
    protected $arcuhighbaldate;

    /**
     * The value for the arcusale24mo1 field.
     *
     * @var        string
     */
    protected $arcusale24mo1;

    /**
     * The value for the arcuinv24mo1 field.
     *
     * @var        int
     */
    protected $arcuinv24mo1;

    /**
     * The value for the arcusale24mo2 field.
     *
     * @var        string
     */
    protected $arcusale24mo2;

    /**
     * The value for the arcuinv24mo2 field.
     *
     * @var        int
     */
    protected $arcuinv24mo2;

    /**
     * The value for the arcusale24mo3 field.
     *
     * @var        string
     */
    protected $arcusale24mo3;

    /**
     * The value for the arcuinv24mo3 field.
     *
     * @var        int
     */
    protected $arcuinv24mo3;

    /**
     * The value for the arcusale24mo4 field.
     *
     * @var        string
     */
    protected $arcusale24mo4;

    /**
     * The value for the arcuinv24mo4 field.
     *
     * @var        int
     */
    protected $arcuinv24mo4;

    /**
     * The value for the arcusale24mo5 field.
     *
     * @var        string
     */
    protected $arcusale24mo5;

    /**
     * The value for the arcuinv24mo5 field.
     *
     * @var        int
     */
    protected $arcuinv24mo5;

    /**
     * The value for the arcusale24mo6 field.
     *
     * @var        string
     */
    protected $arcusale24mo6;

    /**
     * The value for the arcuinv24mo6 field.
     *
     * @var        int
     */
    protected $arcuinv24mo6;

    /**
     * The value for the arcusale24mo7 field.
     *
     * @var        string
     */
    protected $arcusale24mo7;

    /**
     * The value for the arcuinv24mo7 field.
     *
     * @var        int
     */
    protected $arcuinv24mo7;

    /**
     * The value for the arcusale24mo8 field.
     *
     * @var        string
     */
    protected $arcusale24mo8;

    /**
     * The value for the arcuinv24mo8 field.
     *
     * @var        int
     */
    protected $arcuinv24mo8;

    /**
     * The value for the arcusale24mo9 field.
     *
     * @var        string
     */
    protected $arcusale24mo9;

    /**
     * The value for the arcuinv24mo9 field.
     *
     * @var        int
     */
    protected $arcuinv24mo9;

    /**
     * The value for the arcusale24mo10 field.
     *
     * @var        string
     */
    protected $arcusale24mo10;

    /**
     * The value for the arcuinv24mo10 field.
     *
     * @var        int
     */
    protected $arcuinv24mo10;

    /**
     * The value for the arcusale24mo11 field.
     *
     * @var        string
     */
    protected $arcusale24mo11;

    /**
     * The value for the arcuinv24mo11 field.
     *
     * @var        int
     */
    protected $arcuinv24mo11;

    /**
     * The value for the arcusale24mo12 field.
     *
     * @var        string
     */
    protected $arcusale24mo12;

    /**
     * The value for the arcuinv24mo12 field.
     *
     * @var        int
     */
    protected $arcuinv24mo12;

    /**
     * The value for the arcusale24mo13 field.
     *
     * @var        string
     */
    protected $arcusale24mo13;

    /**
     * The value for the arcuinv24mo13 field.
     *
     * @var        int
     */
    protected $arcuinv24mo13;

    /**
     * The value for the arcusale24mo14 field.
     *
     * @var        string
     */
    protected $arcusale24mo14;

    /**
     * The value for the arcuinv24mo14 field.
     *
     * @var        int
     */
    protected $arcuinv24mo14;

    /**
     * The value for the arcusale24mo15 field.
     *
     * @var        string
     */
    protected $arcusale24mo15;

    /**
     * The value for the arcuinv24mo15 field.
     *
     * @var        int
     */
    protected $arcuinv24mo15;

    /**
     * The value for the arcusale24mo16 field.
     *
     * @var        string
     */
    protected $arcusale24mo16;

    /**
     * The value for the arcuinv24mo16 field.
     *
     * @var        int
     */
    protected $arcuinv24mo16;

    /**
     * The value for the arcusale24mo17 field.
     *
     * @var        string
     */
    protected $arcusale24mo17;

    /**
     * The value for the arcuinv24mo17 field.
     *
     * @var        int
     */
    protected $arcuinv24mo17;

    /**
     * The value for the arcusale24mo18 field.
     *
     * @var        string
     */
    protected $arcusale24mo18;

    /**
     * The value for the arcuinv24mo18 field.
     *
     * @var        int
     */
    protected $arcuinv24mo18;

    /**
     * The value for the arcusale24mo19 field.
     *
     * @var        string
     */
    protected $arcusale24mo19;

    /**
     * The value for the arcuinv24mo19 field.
     *
     * @var        int
     */
    protected $arcuinv24mo19;

    /**
     * The value for the arcusale24mo20 field.
     *
     * @var        string
     */
    protected $arcusale24mo20;

    /**
     * The value for the arcuinv24mo20 field.
     *
     * @var        int
     */
    protected $arcuinv24mo20;

    /**
     * The value for the arcusale24mo21 field.
     *
     * @var        string
     */
    protected $arcusale24mo21;

    /**
     * The value for the arcuinv24mo21 field.
     *
     * @var        int
     */
    protected $arcuinv24mo21;

    /**
     * The value for the arcusale24mo22 field.
     *
     * @var        string
     */
    protected $arcusale24mo22;

    /**
     * The value for the arcuinv24mo22 field.
     *
     * @var        int
     */
    protected $arcuinv24mo22;

    /**
     * The value for the arcusale24mo23 field.
     *
     * @var        string
     */
    protected $arcusale24mo23;

    /**
     * The value for the arcuinv24mo23 field.
     *
     * @var        int
     */
    protected $arcuinv24mo23;

    /**
     * The value for the arcusale24mo24 field.
     *
     * @var        string
     */
    protected $arcusale24mo24;

    /**
     * The value for the arcuinv24mo24 field.
     *
     * @var        int
     */
    protected $arcuinv24mo24;

    /**
     * The value for the arculastpayamt field.
     *
     * @var        string
     */
    protected $arculastpayamt;

    /**
     * The value for the arcuordrtot field.
     *
     * @var        string
     */
    protected $arcuordrtot;

    /**
     * The value for the arcuusefrtin field.
     *
     * @var        string
     */
    protected $arcuusefrtin;

    /**
     * The value for the arcumyvendid field.
     *
     * @var        string
     */
    protected $arcumyvendid;

    /**
     * The value for the arcuaddlpricdisc field.
     *
     * @var        string
     */
    protected $arcuaddlpricdisc;

    /**
     * The value for the arcuchrgfrt field.
     *
     * @var        string
     */
    protected $arcuchrgfrt;

    /**
     * The value for the arcucorexdays field.
     *
     * @var        int
     */
    protected $arcucorexdays;

    /**
     * The value for the arcucontractnbr field.
     *
     * @var        string
     */
    protected $arcucontractnbr;

    /**
     * The value for the arcucorelf field.
     *
     * @var        string
     */
    protected $arcucorelf;

    /**
     * The value for the arcucorebankid field.
     *
     * @var        string
     */
    protected $arcucorebankid;

    /**
     * The value for the arcudunsnbr field.
     *
     * @var        string
     */
    protected $arcudunsnbr;

    /**
     * The value for the arcurfmlvalu field.
     *
     * @var        int
     */
    protected $arcurfmlvalu;

    /**
     * The value for the arcuforcecustpo field.
     *
     * @var        string
     */
    protected $arcuforcecustpo;

    /**
     * The value for the arcuagelevel field.
     *
     * @var        int
     */
    protected $arcuagelevel;

    /**
     * The value for the artbroute field.
     *
     * @var        string
     */
    protected $artbroute;

    /**
     * The value for the arcuwgtaxcode field.
     *
     * @var        string
     */
    protected $arcuwgtaxcode;

    /**
     * The value for the arcuacptsupercede field.
     *
     * @var        string
     */
    protected $arcuacptsupercede;

    /**
     * The value for the arcumstrcustid field.
     *
     * @var        string
     */
    protected $arcumstrcustid;

    /**
     * The value for the arcusurchgpct field.
     *
     * @var        string
     */
    protected $arcusurchgpct;

    /**
     * The value for the arcufrgtsplit field.
     *
     * @var        string
     */
    protected $arcufrgtsplit;

    /**
     * The value for the arculinemin field.
     *
     * @var        string
     */
    protected $arculinemin;

    /**
     * The value for the arcuordrmin field.
     *
     * @var        string
     */
    protected $arcuordrmin;

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
    }

    /**
     * Initializes internal state of Base\ArCustMast object.
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
     * Compares this with another <code>ArCustMast</code> instance.  If
     * <code>obj</code> is an instance of <code>ArCustMast</code>, delegates to
     * <code>equals(ArCustMast)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ArCustMast The current object, for fluid interface
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
     * Get the [arcuname] column value.
     *
     * @return string
     */
    public function getArcuname()
    {
        return $this->arcuname;
    }

    /**
     * Get the [arcuadr1] column value.
     *
     * @return string
     */
    public function getArcuadr1()
    {
        return $this->arcuadr1;
    }

    /**
     * Get the [arcuadr2] column value.
     *
     * @return string
     */
    public function getArcuadr2()
    {
        return $this->arcuadr2;
    }

    /**
     * Get the [arcuadr3] column value.
     *
     * @return string
     */
    public function getArcuadr3()
    {
        return $this->arcuadr3;
    }

    /**
     * Get the [arcuctry] column value.
     *
     * @return string
     */
    public function getArcuctry()
    {
        return $this->arcuctry;
    }

    /**
     * Get the [arcucity] column value.
     *
     * @return string
     */
    public function getArcucity()
    {
        return $this->arcucity;
    }

    /**
     * Get the [arcustat] column value.
     *
     * @return string
     */
    public function getArcustat()
    {
        return $this->arcustat;
    }

    /**
     * Get the [arcuzipcode5] column value.
     *
     * @return string
     */
    public function getArcuzipcode5()
    {
        return $this->arcuzipcode5;
    }

    /**
     * Get the [arcuzipcode4] column value.
     *
     * @return string
     */
    public function getArcuzipcode4()
    {
        return $this->arcuzipcode4;
    }

    /**
     * Get the [arcuzipcode10] column value.
     *
     * @return string
     */
    public function getArcuzipcode10()
    {
        return $this->arcuzipcode10;
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
     * Get the [arcutaxexemnbr] column value.
     *
     * @return string
     */
    public function getArcutaxexemnbr()
    {
        return $this->arcutaxexemnbr;
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
     * Get the [arcupriclvl] column value.
     *
     * @return string
     */
    public function getArcupriclvl()
    {
        return $this->arcupriclvl;
    }

    /**
     * Get the [arcushipcomp] column value.
     *
     * @return string
     */
    public function getArcushipcomp()
    {
        return $this->arcushipcomp;
    }

    /**
     * Get the [arcutxbl] column value.
     *
     * @return string
     */
    public function getArcutxbl()
    {
        return $this->arcutxbl;
    }

    /**
     * Get the [arcupostal] column value.
     *
     * @return string
     */
    public function getArcupostal()
    {
        return $this->arcupostal;
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
     * Get the [arcubord] column value.
     *
     * @return string
     */
    public function getArcubord()
    {
        return $this->arcubord;
    }

    /**
     * Get the [artbtypecode] column value.
     *
     * @return string
     */
    public function getArtbtypecode()
    {
        return $this->artbtypecode;
    }

    /**
     * Get the [artbpriccode] column value.
     *
     * @return string
     */
    public function getArtbpriccode()
    {
        return $this->artbpriccode;
    }

    /**
     * Get the [artbcommcode] column value.
     *
     * @return string
     */
    public function getArtbcommcode()
    {
        return $this->artbcommcode;
    }

    /**
     * Get the [artmtermcd] column value.
     *
     * @return string
     */
    public function getArtmtermcd()
    {
        return $this->artmtermcd;
    }

    /**
     * Get the [arcucredlmt] column value.
     *
     * @return string
     */
    public function getArcucredlmt()
    {
        return $this->arcucredlmt;
    }

    /**
     * Get the [arcustmtcode] column value.
     *
     * @return string
     */
    public function getArcustmtcode()
    {
        return $this->arcustmtcode;
    }

    /**
     * Get the [arcucredhold] column value.
     *
     * @return string
     */
    public function getArcucredhold()
    {
        return $this->arcucredhold;
    }

    /**
     * Get the [arcufinchrg] column value.
     *
     * @return string
     */
    public function getArcufinchrg()
    {
        return $this->arcufinchrg;
    }

    /**
     * Get the [arcuusercode] column value.
     *
     * @return string
     */
    public function getArcuusercode()
    {
        return $this->arcuusercode;
    }

    /**
     * Get the [arcunewfc] column value.
     *
     * @return string
     */
    public function getArcunewfc()
    {
        return $this->arcunewfc;
    }

    /**
     * Get the [arcuunpdfc] column value.
     *
     * @return string
     */
    public function getArcuunpdfc()
    {
        return $this->arcuunpdfc;
    }

    /**
     * Get the [arcucurbal] column value.
     *
     * @return string
     */
    public function getArcucurbal()
    {
        return $this->arcucurbal;
    }

    /**
     * Get the [arcubalodue1] column value.
     *
     * @return string
     */
    public function getArcubalodue1()
    {
        return $this->arcubalodue1;
    }

    /**
     * Get the [arcubalodue2] column value.
     *
     * @return string
     */
    public function getArcubalodue2()
    {
        return $this->arcubalodue2;
    }

    /**
     * Get the [arcubalodue3] column value.
     *
     * @return string
     */
    public function getArcubalodue3()
    {
        return $this->arcubalodue3;
    }

    /**
     * Get the [arcusalemtd] column value.
     *
     * @return string
     */
    public function getArcusalemtd()
    {
        return $this->arcusalemtd;
    }

    /**
     * Get the [arcuinvmtd] column value.
     *
     * @return int
     */
    public function getArcuinvmtd()
    {
        return $this->arcuinvmtd;
    }

    /**
     * Get the [arcudateopen] column value.
     *
     * @return int
     */
    public function getArcudateopen()
    {
        return $this->arcudateopen;
    }

    /**
     * Get the [arculastsaledate] column value.
     *
     * @return int
     */
    public function getArculastsaledate()
    {
        return $this->arculastsaledate;
    }

    /**
     * Get the [arcuhighbal] column value.
     *
     * @return string
     */
    public function getArcuhighbal()
    {
        return $this->arcuhighbal;
    }

    /**
     * Get the [arcubigsalemo] column value.
     *
     * @return string
     */
    public function getArcubigsalemo()
    {
        return $this->arcubigsalemo;
    }

    /**
     * Get the [arculastpaydate] column value.
     *
     * @return int
     */
    public function getArculastpaydate()
    {
        return $this->arculastpaydate;
    }

    /**
     * Get the [arcuavgpaydays] column value.
     *
     * @return int
     */
    public function getArcuavgpaydays()
    {
        return $this->arcuavgpaydays;
    }

    /**
     * Get the [arcuupszone] column value.
     *
     * @return string
     */
    public function getArcuupszone()
    {
        return $this->arcuupszone;
    }

    /**
     * Get the [arcuhighbaldate] column value.
     *
     * @return int
     */
    public function getArcuhighbaldate()
    {
        return $this->arcuhighbaldate;
    }

    /**
     * Get the [arcusale24mo1] column value.
     *
     * @return string
     */
    public function getArcusale24mo1()
    {
        return $this->arcusale24mo1;
    }

    /**
     * Get the [arcuinv24mo1] column value.
     *
     * @return int
     */
    public function getArcuinv24mo1()
    {
        return $this->arcuinv24mo1;
    }

    /**
     * Get the [arcusale24mo2] column value.
     *
     * @return string
     */
    public function getArcusale24mo2()
    {
        return $this->arcusale24mo2;
    }

    /**
     * Get the [arcuinv24mo2] column value.
     *
     * @return int
     */
    public function getArcuinv24mo2()
    {
        return $this->arcuinv24mo2;
    }

    /**
     * Get the [arcusale24mo3] column value.
     *
     * @return string
     */
    public function getArcusale24mo3()
    {
        return $this->arcusale24mo3;
    }

    /**
     * Get the [arcuinv24mo3] column value.
     *
     * @return int
     */
    public function getArcuinv24mo3()
    {
        return $this->arcuinv24mo3;
    }

    /**
     * Get the [arcusale24mo4] column value.
     *
     * @return string
     */
    public function getArcusale24mo4()
    {
        return $this->arcusale24mo4;
    }

    /**
     * Get the [arcuinv24mo4] column value.
     *
     * @return int
     */
    public function getArcuinv24mo4()
    {
        return $this->arcuinv24mo4;
    }

    /**
     * Get the [arcusale24mo5] column value.
     *
     * @return string
     */
    public function getArcusale24mo5()
    {
        return $this->arcusale24mo5;
    }

    /**
     * Get the [arcuinv24mo5] column value.
     *
     * @return int
     */
    public function getArcuinv24mo5()
    {
        return $this->arcuinv24mo5;
    }

    /**
     * Get the [arcusale24mo6] column value.
     *
     * @return string
     */
    public function getArcusale24mo6()
    {
        return $this->arcusale24mo6;
    }

    /**
     * Get the [arcuinv24mo6] column value.
     *
     * @return int
     */
    public function getArcuinv24mo6()
    {
        return $this->arcuinv24mo6;
    }

    /**
     * Get the [arcusale24mo7] column value.
     *
     * @return string
     */
    public function getArcusale24mo7()
    {
        return $this->arcusale24mo7;
    }

    /**
     * Get the [arcuinv24mo7] column value.
     *
     * @return int
     */
    public function getArcuinv24mo7()
    {
        return $this->arcuinv24mo7;
    }

    /**
     * Get the [arcusale24mo8] column value.
     *
     * @return string
     */
    public function getArcusale24mo8()
    {
        return $this->arcusale24mo8;
    }

    /**
     * Get the [arcuinv24mo8] column value.
     *
     * @return int
     */
    public function getArcuinv24mo8()
    {
        return $this->arcuinv24mo8;
    }

    /**
     * Get the [arcusale24mo9] column value.
     *
     * @return string
     */
    public function getArcusale24mo9()
    {
        return $this->arcusale24mo9;
    }

    /**
     * Get the [arcuinv24mo9] column value.
     *
     * @return int
     */
    public function getArcuinv24mo9()
    {
        return $this->arcuinv24mo9;
    }

    /**
     * Get the [arcusale24mo10] column value.
     *
     * @return string
     */
    public function getArcusale24mo10()
    {
        return $this->arcusale24mo10;
    }

    /**
     * Get the [arcuinv24mo10] column value.
     *
     * @return int
     */
    public function getArcuinv24mo10()
    {
        return $this->arcuinv24mo10;
    }

    /**
     * Get the [arcusale24mo11] column value.
     *
     * @return string
     */
    public function getArcusale24mo11()
    {
        return $this->arcusale24mo11;
    }

    /**
     * Get the [arcuinv24mo11] column value.
     *
     * @return int
     */
    public function getArcuinv24mo11()
    {
        return $this->arcuinv24mo11;
    }

    /**
     * Get the [arcusale24mo12] column value.
     *
     * @return string
     */
    public function getArcusale24mo12()
    {
        return $this->arcusale24mo12;
    }

    /**
     * Get the [arcuinv24mo12] column value.
     *
     * @return int
     */
    public function getArcuinv24mo12()
    {
        return $this->arcuinv24mo12;
    }

    /**
     * Get the [arcusale24mo13] column value.
     *
     * @return string
     */
    public function getArcusale24mo13()
    {
        return $this->arcusale24mo13;
    }

    /**
     * Get the [arcuinv24mo13] column value.
     *
     * @return int
     */
    public function getArcuinv24mo13()
    {
        return $this->arcuinv24mo13;
    }

    /**
     * Get the [arcusale24mo14] column value.
     *
     * @return string
     */
    public function getArcusale24mo14()
    {
        return $this->arcusale24mo14;
    }

    /**
     * Get the [arcuinv24mo14] column value.
     *
     * @return int
     */
    public function getArcuinv24mo14()
    {
        return $this->arcuinv24mo14;
    }

    /**
     * Get the [arcusale24mo15] column value.
     *
     * @return string
     */
    public function getArcusale24mo15()
    {
        return $this->arcusale24mo15;
    }

    /**
     * Get the [arcuinv24mo15] column value.
     *
     * @return int
     */
    public function getArcuinv24mo15()
    {
        return $this->arcuinv24mo15;
    }

    /**
     * Get the [arcusale24mo16] column value.
     *
     * @return string
     */
    public function getArcusale24mo16()
    {
        return $this->arcusale24mo16;
    }

    /**
     * Get the [arcuinv24mo16] column value.
     *
     * @return int
     */
    public function getArcuinv24mo16()
    {
        return $this->arcuinv24mo16;
    }

    /**
     * Get the [arcusale24mo17] column value.
     *
     * @return string
     */
    public function getArcusale24mo17()
    {
        return $this->arcusale24mo17;
    }

    /**
     * Get the [arcuinv24mo17] column value.
     *
     * @return int
     */
    public function getArcuinv24mo17()
    {
        return $this->arcuinv24mo17;
    }

    /**
     * Get the [arcusale24mo18] column value.
     *
     * @return string
     */
    public function getArcusale24mo18()
    {
        return $this->arcusale24mo18;
    }

    /**
     * Get the [arcuinv24mo18] column value.
     *
     * @return int
     */
    public function getArcuinv24mo18()
    {
        return $this->arcuinv24mo18;
    }

    /**
     * Get the [arcusale24mo19] column value.
     *
     * @return string
     */
    public function getArcusale24mo19()
    {
        return $this->arcusale24mo19;
    }

    /**
     * Get the [arcuinv24mo19] column value.
     *
     * @return int
     */
    public function getArcuinv24mo19()
    {
        return $this->arcuinv24mo19;
    }

    /**
     * Get the [arcusale24mo20] column value.
     *
     * @return string
     */
    public function getArcusale24mo20()
    {
        return $this->arcusale24mo20;
    }

    /**
     * Get the [arcuinv24mo20] column value.
     *
     * @return int
     */
    public function getArcuinv24mo20()
    {
        return $this->arcuinv24mo20;
    }

    /**
     * Get the [arcusale24mo21] column value.
     *
     * @return string
     */
    public function getArcusale24mo21()
    {
        return $this->arcusale24mo21;
    }

    /**
     * Get the [arcuinv24mo21] column value.
     *
     * @return int
     */
    public function getArcuinv24mo21()
    {
        return $this->arcuinv24mo21;
    }

    /**
     * Get the [arcusale24mo22] column value.
     *
     * @return string
     */
    public function getArcusale24mo22()
    {
        return $this->arcusale24mo22;
    }

    /**
     * Get the [arcuinv24mo22] column value.
     *
     * @return int
     */
    public function getArcuinv24mo22()
    {
        return $this->arcuinv24mo22;
    }

    /**
     * Get the [arcusale24mo23] column value.
     *
     * @return string
     */
    public function getArcusale24mo23()
    {
        return $this->arcusale24mo23;
    }

    /**
     * Get the [arcuinv24mo23] column value.
     *
     * @return int
     */
    public function getArcuinv24mo23()
    {
        return $this->arcuinv24mo23;
    }

    /**
     * Get the [arcusale24mo24] column value.
     *
     * @return string
     */
    public function getArcusale24mo24()
    {
        return $this->arcusale24mo24;
    }

    /**
     * Get the [arcuinv24mo24] column value.
     *
     * @return int
     */
    public function getArcuinv24mo24()
    {
        return $this->arcuinv24mo24;
    }

    /**
     * Get the [arculastpayamt] column value.
     *
     * @return string
     */
    public function getArculastpayamt()
    {
        return $this->arculastpayamt;
    }

    /**
     * Get the [arcuordrtot] column value.
     *
     * @return string
     */
    public function getArcuordrtot()
    {
        return $this->arcuordrtot;
    }

    /**
     * Get the [arcuusefrtin] column value.
     *
     * @return string
     */
    public function getArcuusefrtin()
    {
        return $this->arcuusefrtin;
    }

    /**
     * Get the [arcumyvendid] column value.
     *
     * @return string
     */
    public function getArcumyvendid()
    {
        return $this->arcumyvendid;
    }

    /**
     * Get the [arcuaddlpricdisc] column value.
     *
     * @return string
     */
    public function getArcuaddlpricdisc()
    {
        return $this->arcuaddlpricdisc;
    }

    /**
     * Get the [arcuchrgfrt] column value.
     *
     * @return string
     */
    public function getArcuchrgfrt()
    {
        return $this->arcuchrgfrt;
    }

    /**
     * Get the [arcucorexdays] column value.
     *
     * @return int
     */
    public function getArcucorexdays()
    {
        return $this->arcucorexdays;
    }

    /**
     * Get the [arcucontractnbr] column value.
     *
     * @return string
     */
    public function getArcucontractnbr()
    {
        return $this->arcucontractnbr;
    }

    /**
     * Get the [arcucorelf] column value.
     *
     * @return string
     */
    public function getArcucorelf()
    {
        return $this->arcucorelf;
    }

    /**
     * Get the [arcucorebankid] column value.
     *
     * @return string
     */
    public function getArcucorebankid()
    {
        return $this->arcucorebankid;
    }

    /**
     * Get the [arcudunsnbr] column value.
     *
     * @return string
     */
    public function getArcudunsnbr()
    {
        return $this->arcudunsnbr;
    }

    /**
     * Get the [arcurfmlvalu] column value.
     *
     * @return int
     */
    public function getArcurfmlvalu()
    {
        return $this->arcurfmlvalu;
    }

    /**
     * Get the [arcuforcecustpo] column value.
     *
     * @return string
     */
    public function getArcuforcecustpo()
    {
        return $this->arcuforcecustpo;
    }

    /**
     * Get the [arcuagelevel] column value.
     *
     * @return int
     */
    public function getArcuagelevel()
    {
        return $this->arcuagelevel;
    }

    /**
     * Get the [artbroute] column value.
     *
     * @return string
     */
    public function getArtbroute()
    {
        return $this->artbroute;
    }

    /**
     * Get the [arcuwgtaxcode] column value.
     *
     * @return string
     */
    public function getArcuwgtaxcode()
    {
        return $this->arcuwgtaxcode;
    }

    /**
     * Get the [arcuacptsupercede] column value.
     *
     * @return string
     */
    public function getArcuacptsupercede()
    {
        return $this->arcuacptsupercede;
    }

    /**
     * Get the [arcumstrcustid] column value.
     *
     * @return string
     */
    public function getArcumstrcustid()
    {
        return $this->arcumstrcustid;
    }

    /**
     * Get the [arcusurchgpct] column value.
     *
     * @return string
     */
    public function getArcusurchgpct()
    {
        return $this->arcusurchgpct;
    }

    /**
     * Get the [arcufrgtsplit] column value.
     *
     * @return string
     */
    public function getArcufrgtsplit()
    {
        return $this->arcufrgtsplit;
    }

    /**
     * Get the [arculinemin] column value.
     *
     * @return string
     */
    public function getArculinemin()
    {
        return $this->arculinemin;
    }

    /**
     * Get the [arcuordrmin] column value.
     *
     * @return string
     */
    public function getArcuordrmin()
    {
        return $this->arcuordrmin;
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
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUCUSTID] = true;
        }

        return $this;
    } // setArcucustid()

    /**
     * Set the value of [arcuname] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuname !== $v) {
            $this->arcuname = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUNAME] = true;
        }

        return $this;
    } // setArcuname()

    /**
     * Set the value of [arcuadr1] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuadr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuadr1 !== $v) {
            $this->arcuadr1 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUADR1] = true;
        }

        return $this;
    } // setArcuadr1()

    /**
     * Set the value of [arcuadr2] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuadr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuadr2 !== $v) {
            $this->arcuadr2 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUADR2] = true;
        }

        return $this;
    } // setArcuadr2()

    /**
     * Set the value of [arcuadr3] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuadr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuadr3 !== $v) {
            $this->arcuadr3 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUADR3] = true;
        }

        return $this;
    } // setArcuadr3()

    /**
     * Set the value of [arcuctry] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuctry !== $v) {
            $this->arcuctry = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUCTRY] = true;
        }

        return $this;
    } // setArcuctry()

    /**
     * Set the value of [arcucity] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcucity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucity !== $v) {
            $this->arcucity = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUCITY] = true;
        }

        return $this;
    } // setArcucity()

    /**
     * Set the value of [arcustat] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcustat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcustat !== $v) {
            $this->arcustat = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSTAT] = true;
        }

        return $this;
    } // setArcustat()

    /**
     * Set the value of [arcuzipcode5] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuzipcode5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuzipcode5 !== $v) {
            $this->arcuzipcode5 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUZIPCODE5] = true;
        }

        return $this;
    } // setArcuzipcode5()

    /**
     * Set the value of [arcuzipcode4] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuzipcode4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuzipcode4 !== $v) {
            $this->arcuzipcode4 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUZIPCODE4] = true;
        }

        return $this;
    } // setArcuzipcode4()

    /**
     * Set the value of [arcuzipcode10] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuzipcode10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuzipcode10 !== $v) {
            $this->arcuzipcode10 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUZIPCODE10] = true;
        }

        return $this;
    } // setArcuzipcode10()

    /**
     * Set the value of [arspsaleper1] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArspsaleper1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper1 !== $v) {
            $this->arspsaleper1 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARSPSALEPER1] = true;
        }

        return $this;
    } // setArspsaleper1()

    /**
     * Set the value of [arspsaleper2] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArspsaleper2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper2 !== $v) {
            $this->arspsaleper2 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARSPSALEPER2] = true;
        }

        return $this;
    } // setArspsaleper2()

    /**
     * Set the value of [arspsaleper3] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArspsaleper3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper3 !== $v) {
            $this->arspsaleper3 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARSPSALEPER3] = true;
        }

        return $this;
    } // setArspsaleper3()

    /**
     * Set the value of [artbmtaxcode] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArtbmtaxcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxcode !== $v) {
            $this->artbmtaxcode = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARTBMTAXCODE] = true;
        }

        return $this;
    } // setArtbmtaxcode()

    /**
     * Set the value of [arcutaxexemnbr] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcutaxexemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcutaxexemnbr !== $v) {
            $this->arcutaxexemnbr = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUTAXEXEMNBR] = true;
        }

        return $this;
    } // setArcutaxexemnbr()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_INTBWHSE] = true;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [arcupriclvl] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcupriclvl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcupriclvl !== $v) {
            $this->arcupriclvl = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUPRICLVL] = true;
        }

        return $this;
    } // setArcupriclvl()

    /**
     * Set the value of [arcushipcomp] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcushipcomp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcushipcomp !== $v) {
            $this->arcushipcomp = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSHIPCOMP] = true;
        }

        return $this;
    } // setArcushipcomp()

    /**
     * Set the value of [arcutxbl] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcutxbl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcutxbl !== $v) {
            $this->arcutxbl = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUTXBL] = true;
        }

        return $this;
    } // setArcutxbl()

    /**
     * Set the value of [arcupostal] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcupostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcupostal !== $v) {
            $this->arcupostal = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUPOSTAL] = true;
        }

        return $this;
    } // setArcupostal()

    /**
     * Set the value of [artbshipvia] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArtbshipvia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbshipvia !== $v) {
            $this->artbshipvia = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARTBSHIPVIA] = true;
        }

        return $this;
    } // setArtbshipvia()

    /**
     * Set the value of [arcubord] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcubord($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcubord !== $v) {
            $this->arcubord = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUBORD] = true;
        }

        return $this;
    } // setArcubord()

    /**
     * Set the value of [artbtypecode] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArtbtypecode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbtypecode !== $v) {
            $this->artbtypecode = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARTBTYPECODE] = true;
        }

        return $this;
    } // setArtbtypecode()

    /**
     * Set the value of [artbpriccode] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArtbpriccode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbpriccode !== $v) {
            $this->artbpriccode = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARTBPRICCODE] = true;
        }

        return $this;
    } // setArtbpriccode()

    /**
     * Set the value of [artbcommcode] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArtbcommcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcommcode !== $v) {
            $this->artbcommcode = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARTBCOMMCODE] = true;
        }

        return $this;
    } // setArtbcommcode()

    /**
     * Set the value of [artmtermcd] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArtmtermcd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmtermcd !== $v) {
            $this->artmtermcd = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARTMTERMCD] = true;
        }

        return $this;
    } // setArtmtermcd()

    /**
     * Set the value of [arcucredlmt] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcucredlmt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucredlmt !== $v) {
            $this->arcucredlmt = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUCREDLMT] = true;
        }

        return $this;
    } // setArcucredlmt()

    /**
     * Set the value of [arcustmtcode] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcustmtcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcustmtcode !== $v) {
            $this->arcustmtcode = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSTMTCODE] = true;
        }

        return $this;
    } // setArcustmtcode()

    /**
     * Set the value of [arcucredhold] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcucredhold($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucredhold !== $v) {
            $this->arcucredhold = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUCREDHOLD] = true;
        }

        return $this;
    } // setArcucredhold()

    /**
     * Set the value of [arcufinchrg] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcufinchrg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcufinchrg !== $v) {
            $this->arcufinchrg = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUFINCHRG] = true;
        }

        return $this;
    } // setArcufinchrg()

    /**
     * Set the value of [arcuusercode] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuusercode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuusercode !== $v) {
            $this->arcuusercode = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUUSERCODE] = true;
        }

        return $this;
    } // setArcuusercode()

    /**
     * Set the value of [arcunewfc] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcunewfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcunewfc !== $v) {
            $this->arcunewfc = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUNEWFC] = true;
        }

        return $this;
    } // setArcunewfc()

    /**
     * Set the value of [arcuunpdfc] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuunpdfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuunpdfc !== $v) {
            $this->arcuunpdfc = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUUNPDFC] = true;
        }

        return $this;
    } // setArcuunpdfc()

    /**
     * Set the value of [arcucurbal] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcucurbal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucurbal !== $v) {
            $this->arcucurbal = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUCURBAL] = true;
        }

        return $this;
    } // setArcucurbal()

    /**
     * Set the value of [arcubalodue1] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcubalodue1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcubalodue1 !== $v) {
            $this->arcubalodue1 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUBALODUE1] = true;
        }

        return $this;
    } // setArcubalodue1()

    /**
     * Set the value of [arcubalodue2] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcubalodue2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcubalodue2 !== $v) {
            $this->arcubalodue2 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUBALODUE2] = true;
        }

        return $this;
    } // setArcubalodue2()

    /**
     * Set the value of [arcubalodue3] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcubalodue3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcubalodue3 !== $v) {
            $this->arcubalodue3 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUBALODUE3] = true;
        }

        return $this;
    } // setArcubalodue3()

    /**
     * Set the value of [arcusalemtd] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusalemtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusalemtd !== $v) {
            $this->arcusalemtd = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALEMTD] = true;
        }

        return $this;
    } // setArcusalemtd()

    /**
     * Set the value of [arcuinvmtd] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinvmtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinvmtd !== $v) {
            $this->arcuinvmtd = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINVMTD] = true;
        }

        return $this;
    } // setArcuinvmtd()

    /**
     * Set the value of [arcudateopen] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcudateopen($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcudateopen !== $v) {
            $this->arcudateopen = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUDATEOPEN] = true;
        }

        return $this;
    } // setArcudateopen()

    /**
     * Set the value of [arculastsaledate] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArculastsaledate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arculastsaledate !== $v) {
            $this->arculastsaledate = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCULASTSALEDATE] = true;
        }

        return $this;
    } // setArculastsaledate()

    /**
     * Set the value of [arcuhighbal] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuhighbal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuhighbal !== $v) {
            $this->arcuhighbal = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUHIGHBAL] = true;
        }

        return $this;
    } // setArcuhighbal()

    /**
     * Set the value of [arcubigsalemo] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcubigsalemo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcubigsalemo !== $v) {
            $this->arcubigsalemo = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUBIGSALEMO] = true;
        }

        return $this;
    } // setArcubigsalemo()

    /**
     * Set the value of [arculastpaydate] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArculastpaydate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arculastpaydate !== $v) {
            $this->arculastpaydate = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCULASTPAYDATE] = true;
        }

        return $this;
    } // setArculastpaydate()

    /**
     * Set the value of [arcuavgpaydays] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuavgpaydays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuavgpaydays !== $v) {
            $this->arcuavgpaydays = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUAVGPAYDAYS] = true;
        }

        return $this;
    } // setArcuavgpaydays()

    /**
     * Set the value of [arcuupszone] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuupszone($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuupszone !== $v) {
            $this->arcuupszone = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUUPSZONE] = true;
        }

        return $this;
    } // setArcuupszone()

    /**
     * Set the value of [arcuhighbaldate] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuhighbaldate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuhighbaldate !== $v) {
            $this->arcuhighbaldate = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUHIGHBALDATE] = true;
        }

        return $this;
    } // setArcuhighbaldate()

    /**
     * Set the value of [arcusale24mo1] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo1 !== $v) {
            $this->arcusale24mo1 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO1] = true;
        }

        return $this;
    } // setArcusale24mo1()

    /**
     * Set the value of [arcuinv24mo1] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo1 !== $v) {
            $this->arcuinv24mo1 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO1] = true;
        }

        return $this;
    } // setArcuinv24mo1()

    /**
     * Set the value of [arcusale24mo2] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo2 !== $v) {
            $this->arcusale24mo2 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO2] = true;
        }

        return $this;
    } // setArcusale24mo2()

    /**
     * Set the value of [arcuinv24mo2] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo2 !== $v) {
            $this->arcuinv24mo2 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO2] = true;
        }

        return $this;
    } // setArcuinv24mo2()

    /**
     * Set the value of [arcusale24mo3] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo3 !== $v) {
            $this->arcusale24mo3 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO3] = true;
        }

        return $this;
    } // setArcusale24mo3()

    /**
     * Set the value of [arcuinv24mo3] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo3 !== $v) {
            $this->arcuinv24mo3 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO3] = true;
        }

        return $this;
    } // setArcuinv24mo3()

    /**
     * Set the value of [arcusale24mo4] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo4 !== $v) {
            $this->arcusale24mo4 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO4] = true;
        }

        return $this;
    } // setArcusale24mo4()

    /**
     * Set the value of [arcuinv24mo4] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo4($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo4 !== $v) {
            $this->arcuinv24mo4 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO4] = true;
        }

        return $this;
    } // setArcuinv24mo4()

    /**
     * Set the value of [arcusale24mo5] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo5 !== $v) {
            $this->arcusale24mo5 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO5] = true;
        }

        return $this;
    } // setArcusale24mo5()

    /**
     * Set the value of [arcuinv24mo5] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo5($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo5 !== $v) {
            $this->arcuinv24mo5 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO5] = true;
        }

        return $this;
    } // setArcuinv24mo5()

    /**
     * Set the value of [arcusale24mo6] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo6 !== $v) {
            $this->arcusale24mo6 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO6] = true;
        }

        return $this;
    } // setArcusale24mo6()

    /**
     * Set the value of [arcuinv24mo6] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo6($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo6 !== $v) {
            $this->arcuinv24mo6 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO6] = true;
        }

        return $this;
    } // setArcuinv24mo6()

    /**
     * Set the value of [arcusale24mo7] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo7 !== $v) {
            $this->arcusale24mo7 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO7] = true;
        }

        return $this;
    } // setArcusale24mo7()

    /**
     * Set the value of [arcuinv24mo7] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo7($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo7 !== $v) {
            $this->arcuinv24mo7 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO7] = true;
        }

        return $this;
    } // setArcuinv24mo7()

    /**
     * Set the value of [arcusale24mo8] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo8 !== $v) {
            $this->arcusale24mo8 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO8] = true;
        }

        return $this;
    } // setArcusale24mo8()

    /**
     * Set the value of [arcuinv24mo8] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo8($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo8 !== $v) {
            $this->arcuinv24mo8 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO8] = true;
        }

        return $this;
    } // setArcuinv24mo8()

    /**
     * Set the value of [arcusale24mo9] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo9 !== $v) {
            $this->arcusale24mo9 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO9] = true;
        }

        return $this;
    } // setArcusale24mo9()

    /**
     * Set the value of [arcuinv24mo9] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo9($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo9 !== $v) {
            $this->arcuinv24mo9 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO9] = true;
        }

        return $this;
    } // setArcuinv24mo9()

    /**
     * Set the value of [arcusale24mo10] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo10 !== $v) {
            $this->arcusale24mo10 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO10] = true;
        }

        return $this;
    } // setArcusale24mo10()

    /**
     * Set the value of [arcuinv24mo10] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo10($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo10 !== $v) {
            $this->arcuinv24mo10 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO10] = true;
        }

        return $this;
    } // setArcuinv24mo10()

    /**
     * Set the value of [arcusale24mo11] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo11($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo11 !== $v) {
            $this->arcusale24mo11 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO11] = true;
        }

        return $this;
    } // setArcusale24mo11()

    /**
     * Set the value of [arcuinv24mo11] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo11($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo11 !== $v) {
            $this->arcuinv24mo11 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO11] = true;
        }

        return $this;
    } // setArcuinv24mo11()

    /**
     * Set the value of [arcusale24mo12] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo12($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo12 !== $v) {
            $this->arcusale24mo12 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO12] = true;
        }

        return $this;
    } // setArcusale24mo12()

    /**
     * Set the value of [arcuinv24mo12] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo12($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo12 !== $v) {
            $this->arcuinv24mo12 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO12] = true;
        }

        return $this;
    } // setArcuinv24mo12()

    /**
     * Set the value of [arcusale24mo13] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo13($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo13 !== $v) {
            $this->arcusale24mo13 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO13] = true;
        }

        return $this;
    } // setArcusale24mo13()

    /**
     * Set the value of [arcuinv24mo13] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo13($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo13 !== $v) {
            $this->arcuinv24mo13 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO13] = true;
        }

        return $this;
    } // setArcuinv24mo13()

    /**
     * Set the value of [arcusale24mo14] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo14($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo14 !== $v) {
            $this->arcusale24mo14 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO14] = true;
        }

        return $this;
    } // setArcusale24mo14()

    /**
     * Set the value of [arcuinv24mo14] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo14($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo14 !== $v) {
            $this->arcuinv24mo14 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO14] = true;
        }

        return $this;
    } // setArcuinv24mo14()

    /**
     * Set the value of [arcusale24mo15] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo15($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo15 !== $v) {
            $this->arcusale24mo15 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO15] = true;
        }

        return $this;
    } // setArcusale24mo15()

    /**
     * Set the value of [arcuinv24mo15] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo15($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo15 !== $v) {
            $this->arcuinv24mo15 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO15] = true;
        }

        return $this;
    } // setArcuinv24mo15()

    /**
     * Set the value of [arcusale24mo16] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo16($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo16 !== $v) {
            $this->arcusale24mo16 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO16] = true;
        }

        return $this;
    } // setArcusale24mo16()

    /**
     * Set the value of [arcuinv24mo16] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo16($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo16 !== $v) {
            $this->arcuinv24mo16 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO16] = true;
        }

        return $this;
    } // setArcuinv24mo16()

    /**
     * Set the value of [arcusale24mo17] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo17($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo17 !== $v) {
            $this->arcusale24mo17 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO17] = true;
        }

        return $this;
    } // setArcusale24mo17()

    /**
     * Set the value of [arcuinv24mo17] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo17($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo17 !== $v) {
            $this->arcuinv24mo17 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO17] = true;
        }

        return $this;
    } // setArcuinv24mo17()

    /**
     * Set the value of [arcusale24mo18] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo18($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo18 !== $v) {
            $this->arcusale24mo18 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO18] = true;
        }

        return $this;
    } // setArcusale24mo18()

    /**
     * Set the value of [arcuinv24mo18] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo18($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo18 !== $v) {
            $this->arcuinv24mo18 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO18] = true;
        }

        return $this;
    } // setArcuinv24mo18()

    /**
     * Set the value of [arcusale24mo19] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo19($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo19 !== $v) {
            $this->arcusale24mo19 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO19] = true;
        }

        return $this;
    } // setArcusale24mo19()

    /**
     * Set the value of [arcuinv24mo19] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo19($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo19 !== $v) {
            $this->arcuinv24mo19 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO19] = true;
        }

        return $this;
    } // setArcuinv24mo19()

    /**
     * Set the value of [arcusale24mo20] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo20($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo20 !== $v) {
            $this->arcusale24mo20 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO20] = true;
        }

        return $this;
    } // setArcusale24mo20()

    /**
     * Set the value of [arcuinv24mo20] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo20($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo20 !== $v) {
            $this->arcuinv24mo20 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO20] = true;
        }

        return $this;
    } // setArcuinv24mo20()

    /**
     * Set the value of [arcusale24mo21] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo21($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo21 !== $v) {
            $this->arcusale24mo21 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO21] = true;
        }

        return $this;
    } // setArcusale24mo21()

    /**
     * Set the value of [arcuinv24mo21] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo21($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo21 !== $v) {
            $this->arcuinv24mo21 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO21] = true;
        }

        return $this;
    } // setArcuinv24mo21()

    /**
     * Set the value of [arcusale24mo22] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo22($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo22 !== $v) {
            $this->arcusale24mo22 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO22] = true;
        }

        return $this;
    } // setArcusale24mo22()

    /**
     * Set the value of [arcuinv24mo22] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo22($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo22 !== $v) {
            $this->arcuinv24mo22 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO22] = true;
        }

        return $this;
    } // setArcuinv24mo22()

    /**
     * Set the value of [arcusale24mo23] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo23($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo23 !== $v) {
            $this->arcusale24mo23 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO23] = true;
        }

        return $this;
    } // setArcusale24mo23()

    /**
     * Set the value of [arcuinv24mo23] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo23($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo23 !== $v) {
            $this->arcuinv24mo23 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO23] = true;
        }

        return $this;
    } // setArcuinv24mo23()

    /**
     * Set the value of [arcusale24mo24] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusale24mo24($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo24 !== $v) {
            $this->arcusale24mo24 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSALE24MO24] = true;
        }

        return $this;
    } // setArcusale24mo24()

    /**
     * Set the value of [arcuinv24mo24] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuinv24mo24($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo24 !== $v) {
            $this->arcuinv24mo24 = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUINV24MO24] = true;
        }

        return $this;
    } // setArcuinv24mo24()

    /**
     * Set the value of [arculastpayamt] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArculastpayamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arculastpayamt !== $v) {
            $this->arculastpayamt = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCULASTPAYAMT] = true;
        }

        return $this;
    } // setArculastpayamt()

    /**
     * Set the value of [arcuordrtot] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuordrtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuordrtot !== $v) {
            $this->arcuordrtot = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUORDRTOT] = true;
        }

        return $this;
    } // setArcuordrtot()

    /**
     * Set the value of [arcuusefrtin] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuusefrtin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuusefrtin !== $v) {
            $this->arcuusefrtin = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUUSEFRTIN] = true;
        }

        return $this;
    } // setArcuusefrtin()

    /**
     * Set the value of [arcumyvendid] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcumyvendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcumyvendid !== $v) {
            $this->arcumyvendid = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUMYVENDID] = true;
        }

        return $this;
    } // setArcumyvendid()

    /**
     * Set the value of [arcuaddlpricdisc] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuaddlpricdisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuaddlpricdisc !== $v) {
            $this->arcuaddlpricdisc = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUADDLPRICDISC] = true;
        }

        return $this;
    } // setArcuaddlpricdisc()

    /**
     * Set the value of [arcuchrgfrt] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuchrgfrt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuchrgfrt !== $v) {
            $this->arcuchrgfrt = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUCHRGFRT] = true;
        }

        return $this;
    } // setArcuchrgfrt()

    /**
     * Set the value of [arcucorexdays] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcucorexdays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcucorexdays !== $v) {
            $this->arcucorexdays = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUCOREXDAYS] = true;
        }

        return $this;
    } // setArcucorexdays()

    /**
     * Set the value of [arcucontractnbr] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcucontractnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucontractnbr !== $v) {
            $this->arcucontractnbr = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUCONTRACTNBR] = true;
        }

        return $this;
    } // setArcucontractnbr()

    /**
     * Set the value of [arcucorelf] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcucorelf($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucorelf !== $v) {
            $this->arcucorelf = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUCORELF] = true;
        }

        return $this;
    } // setArcucorelf()

    /**
     * Set the value of [arcucorebankid] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcucorebankid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucorebankid !== $v) {
            $this->arcucorebankid = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUCOREBANKID] = true;
        }

        return $this;
    } // setArcucorebankid()

    /**
     * Set the value of [arcudunsnbr] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcudunsnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcudunsnbr !== $v) {
            $this->arcudunsnbr = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUDUNSNBR] = true;
        }

        return $this;
    } // setArcudunsnbr()

    /**
     * Set the value of [arcurfmlvalu] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcurfmlvalu($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcurfmlvalu !== $v) {
            $this->arcurfmlvalu = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCURFMLVALU] = true;
        }

        return $this;
    } // setArcurfmlvalu()

    /**
     * Set the value of [arcuforcecustpo] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuforcecustpo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuforcecustpo !== $v) {
            $this->arcuforcecustpo = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUFORCECUSTPO] = true;
        }

        return $this;
    } // setArcuforcecustpo()

    /**
     * Set the value of [arcuagelevel] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuagelevel($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuagelevel !== $v) {
            $this->arcuagelevel = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUAGELEVEL] = true;
        }

        return $this;
    } // setArcuagelevel()

    /**
     * Set the value of [artbroute] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArtbroute($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbroute !== $v) {
            $this->artbroute = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARTBROUTE] = true;
        }

        return $this;
    } // setArtbroute()

    /**
     * Set the value of [arcuwgtaxcode] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuwgtaxcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuwgtaxcode !== $v) {
            $this->arcuwgtaxcode = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUWGTAXCODE] = true;
        }

        return $this;
    } // setArcuwgtaxcode()

    /**
     * Set the value of [arcuacptsupercede] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuacptsupercede($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuacptsupercede !== $v) {
            $this->arcuacptsupercede = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUACPTSUPERCEDE] = true;
        }

        return $this;
    } // setArcuacptsupercede()

    /**
     * Set the value of [arcumstrcustid] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcumstrcustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcumstrcustid !== $v) {
            $this->arcumstrcustid = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUMSTRCUSTID] = true;
        }

        return $this;
    } // setArcumstrcustid()

    /**
     * Set the value of [arcusurchgpct] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcusurchgpct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusurchgpct !== $v) {
            $this->arcusurchgpct = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUSURCHGPCT] = true;
        }

        return $this;
    } // setArcusurchgpct()

    /**
     * Set the value of [arcufrgtsplit] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcufrgtsplit($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcufrgtsplit !== $v) {
            $this->arcufrgtsplit = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUFRGTSPLIT] = true;
        }

        return $this;
    } // setArcufrgtsplit()

    /**
     * Set the value of [arculinemin] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArculinemin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arculinemin !== $v) {
            $this->arculinemin = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCULINEMIN] = true;
        }

        return $this;
    } // setArculinemin()

    /**
     * Set the value of [arcuordrmin] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setArcuordrmin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuordrmin !== $v) {
            $this->arcuordrmin = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_ARCUORDRMIN] = true;
        }

        return $this;
    } // setArcuordrmin()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param int $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ArCustMast The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ArCustMastTableMap::COL_DUMMY] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ArCustMastTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ArCustMastTableMap::translateFieldName('Arcuname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ArCustMastTableMap::translateFieldName('Arcuadr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuadr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ArCustMastTableMap::translateFieldName('Arcuadr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuadr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ArCustMastTableMap::translateFieldName('Arcuadr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuadr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ArCustMastTableMap::translateFieldName('Arcuctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ArCustMastTableMap::translateFieldName('Arcucity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ArCustMastTableMap::translateFieldName('Arcustat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcustat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ArCustMastTableMap::translateFieldName('Arcuzipcode5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuzipcode5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ArCustMastTableMap::translateFieldName('Arcuzipcode4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuzipcode4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ArCustMastTableMap::translateFieldName('Arcuzipcode10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuzipcode10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ArCustMastTableMap::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ArCustMastTableMap::translateFieldName('Arspsaleper2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ArCustMastTableMap::translateFieldName('Arspsaleper3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ArCustMastTableMap::translateFieldName('Artbmtaxcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ArCustMastTableMap::translateFieldName('Arcutaxexemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcutaxexemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ArCustMastTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ArCustMastTableMap::translateFieldName('Arcupriclvl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcupriclvl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ArCustMastTableMap::translateFieldName('Arcushipcomp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcushipcomp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ArCustMastTableMap::translateFieldName('Arcutxbl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcutxbl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ArCustMastTableMap::translateFieldName('Arcupostal', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcupostal = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ArCustMastTableMap::translateFieldName('Artbshipvia', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbshipvia = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ArCustMastTableMap::translateFieldName('Arcubord', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcubord = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ArCustMastTableMap::translateFieldName('Artbtypecode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbtypecode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ArCustMastTableMap::translateFieldName('Artbpriccode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbpriccode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : ArCustMastTableMap::translateFieldName('Artbcommcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcommcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : ArCustMastTableMap::translateFieldName('Artmtermcd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmtermcd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : ArCustMastTableMap::translateFieldName('Arcucredlmt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucredlmt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : ArCustMastTableMap::translateFieldName('Arcustmtcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcustmtcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : ArCustMastTableMap::translateFieldName('Arcucredhold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucredhold = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : ArCustMastTableMap::translateFieldName('Arcufinchrg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcufinchrg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : ArCustMastTableMap::translateFieldName('Arcuusercode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuusercode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : ArCustMastTableMap::translateFieldName('Arcunewfc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcunewfc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : ArCustMastTableMap::translateFieldName('Arcuunpdfc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuunpdfc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : ArCustMastTableMap::translateFieldName('Arcucurbal', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucurbal = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : ArCustMastTableMap::translateFieldName('Arcubalodue1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcubalodue1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : ArCustMastTableMap::translateFieldName('Arcubalodue2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcubalodue2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : ArCustMastTableMap::translateFieldName('Arcubalodue3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcubalodue3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : ArCustMastTableMap::translateFieldName('Arcusalemtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusalemtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinvmtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinvmtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : ArCustMastTableMap::translateFieldName('Arcudateopen', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcudateopen = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : ArCustMastTableMap::translateFieldName('Arculastsaledate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arculastsaledate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : ArCustMastTableMap::translateFieldName('Arcuhighbal', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuhighbal = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : ArCustMastTableMap::translateFieldName('Arcubigsalemo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcubigsalemo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : ArCustMastTableMap::translateFieldName('Arculastpaydate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arculastpaydate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : ArCustMastTableMap::translateFieldName('Arcuavgpaydays', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuavgpaydays = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : ArCustMastTableMap::translateFieldName('Arcuupszone', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuupszone = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : ArCustMastTableMap::translateFieldName('Arcuhighbaldate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuhighbaldate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo4 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo5 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo6 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo7 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo8 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo9 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo10 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo11 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo11 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 70 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo12 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 71 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo12 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 72 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo13', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo13 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 73 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo13', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo13 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 74 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo14', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo14 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 75 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo14', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo14 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 76 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo15', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo15 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 77 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo15', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo15 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 78 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo16', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo16 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 79 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo16', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo16 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 80 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo17', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo17 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 81 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo17', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo17 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 82 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo18', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo18 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 83 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo18', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo18 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 84 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo19', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo19 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 85 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo19', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo19 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 86 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo20', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo20 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 87 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo20', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo20 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 88 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo21', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo21 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 89 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo21', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo21 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 90 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo22', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo22 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 91 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo22', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo22 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 92 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo23', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo23 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 93 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo23', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo23 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 94 + $startcol : ArCustMastTableMap::translateFieldName('Arcusale24mo24', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo24 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 95 + $startcol : ArCustMastTableMap::translateFieldName('Arcuinv24mo24', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo24 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 96 + $startcol : ArCustMastTableMap::translateFieldName('Arculastpayamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arculastpayamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 97 + $startcol : ArCustMastTableMap::translateFieldName('Arcuordrtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuordrtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 98 + $startcol : ArCustMastTableMap::translateFieldName('Arcuusefrtin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuusefrtin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 99 + $startcol : ArCustMastTableMap::translateFieldName('Arcumyvendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcumyvendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 100 + $startcol : ArCustMastTableMap::translateFieldName('Arcuaddlpricdisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuaddlpricdisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 101 + $startcol : ArCustMastTableMap::translateFieldName('Arcuchrgfrt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuchrgfrt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 102 + $startcol : ArCustMastTableMap::translateFieldName('Arcucorexdays', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucorexdays = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 103 + $startcol : ArCustMastTableMap::translateFieldName('Arcucontractnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucontractnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 104 + $startcol : ArCustMastTableMap::translateFieldName('Arcucorelf', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucorelf = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 105 + $startcol : ArCustMastTableMap::translateFieldName('Arcucorebankid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucorebankid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 106 + $startcol : ArCustMastTableMap::translateFieldName('Arcudunsnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcudunsnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 107 + $startcol : ArCustMastTableMap::translateFieldName('Arcurfmlvalu', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcurfmlvalu = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 108 + $startcol : ArCustMastTableMap::translateFieldName('Arcuforcecustpo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuforcecustpo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 109 + $startcol : ArCustMastTableMap::translateFieldName('Arcuagelevel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuagelevel = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 110 + $startcol : ArCustMastTableMap::translateFieldName('Artbroute', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbroute = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 111 + $startcol : ArCustMastTableMap::translateFieldName('Arcuwgtaxcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuwgtaxcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 112 + $startcol : ArCustMastTableMap::translateFieldName('Arcuacptsupercede', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuacptsupercede = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 113 + $startcol : ArCustMastTableMap::translateFieldName('Arcumstrcustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcumstrcustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 114 + $startcol : ArCustMastTableMap::translateFieldName('Arcusurchgpct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusurchgpct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 115 + $startcol : ArCustMastTableMap::translateFieldName('Arcufrgtsplit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcufrgtsplit = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 116 + $startcol : ArCustMastTableMap::translateFieldName('Arculinemin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arculinemin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 117 + $startcol : ArCustMastTableMap::translateFieldName('Arcuordrmin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuordrmin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 118 + $startcol : ArCustMastTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 119 + $startcol : ArCustMastTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 120 + $startcol : ArCustMastTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 121; // 121 = ArCustMastTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ArCustMast'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ArCustMastTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildArCustMastQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see ArCustMast::setDeleted()
     * @see ArCustMast::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArCustMastTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildArCustMastQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArCustMastTableMap::DATABASE_NAME);
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
                ArCustMastTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUNAME)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuName';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUADR1)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuAdr1';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUADR2)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuAdr2';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUADR3)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuAdr3';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCtry';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCITY)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCity';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuStat';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUZIPCODE5)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuZipCode5';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUZIPCODE4)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuZipCode4';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUZIPCODE10)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuZipCode10';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARSPSALEPER1)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer1';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARSPSALEPER2)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer2';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARSPSALEPER3)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer3';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARTBMTAXCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxCode';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUTAXEXEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuTaxExemNbr';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUPRICLVL)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuPricLvl';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSHIPCOMP)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuShipComp';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUTXBL)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuTxbl';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuPostal';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARTBSHIPVIA)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbShipVia';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUBORD)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuBord';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARTBTYPECODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbTypeCode';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARTBPRICCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbPricCode';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARTBCOMMCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCommCode';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARTMTERMCD)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmTermCd';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCREDLMT)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCredLmt';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSTMTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuStmtCode';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCREDHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCredHold';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUFINCHRG)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuFinChrg';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUUSERCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuUserCode';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUNEWFC)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuNewFc';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUUNPDFC)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuUnpdFc';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCURBAL)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCurBal';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUBALODUE1)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuBalOdue1';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUBALODUE2)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuBalOdue2';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUBALODUE3)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuBalOdue3';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALEMTD)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSaleMtd';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINVMTD)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInvMtd';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUDATEOPEN)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuDateOpen';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCULASTSALEDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuLastSaleDate';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUHIGHBAL)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuHighBal';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUBIGSALEMO)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuBigSaleMo';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCULASTPAYDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuLastPayDate';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUAVGPAYDAYS)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuAvgPayDays';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUUPSZONE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuUpsZone';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUHIGHBALDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuHighBalDate';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO1)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo1';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO1)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo1';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO2)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo2';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO2)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo2';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO3)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo3';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO3)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo3';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO4)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo4';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO4)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo4';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO5)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo5';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO5)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo5';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO6)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo6';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO6)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo6';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO7)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo7';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO7)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo7';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO8)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo8';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO8)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo8';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO9)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo9';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO9)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo9';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO10)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo10';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO10)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo10';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO11)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo11';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO11)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo11';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO12)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo12';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO12)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo12';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO13)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo13';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO13)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo13';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO14)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo14';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO14)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo14';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO15)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo15';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO15)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo15';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO16)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo16';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO16)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo16';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO17)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo17';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO17)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo17';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO18)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo18';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO18)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo18';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO19)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo19';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO19)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo19';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO20)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo20';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO20)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo20';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO21)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo21';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO21)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo21';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO22)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo22';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO22)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo22';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO23)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo23';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO23)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo23';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO24)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo24';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO24)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo24';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCULASTPAYAMT)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuLastPayAmt';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUORDRTOT)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuOrdrTot';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUUSEFRTIN)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuUseFrtIn';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUMYVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuMyVendId';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUADDLPRICDISC)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuAddlPricDisc';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCHRGFRT)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuChrgFrt';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCOREXDAYS)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCoreXDays';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCONTRACTNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuContractNbr';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCORELF)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCoreLF';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCOREBANKID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCoreBankId';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUDUNSNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuDunsNbr';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCURFMLVALU)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuRfmlValu';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUFORCECUSTPO)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuForceCustPo';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUAGELEVEL)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuAgeLevel';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARTBROUTE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbRoute';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUWGTAXCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuWgTaxCode';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUACPTSUPERCEDE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuAcptSupercede';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUMSTRCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuMstrCustId';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSURCHGPCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSurchgPct';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUFRGTSPLIT)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuFrgtSplit';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCULINEMIN)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuLineMin';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUORDRMIN)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuOrdrMin';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO AR_CUST_MAST (%s) VALUES (%s)',
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
                    case 'ArcuName':
                        $stmt->bindValue($identifier, $this->arcuname, PDO::PARAM_STR);
                        break;
                    case 'ArcuAdr1':
                        $stmt->bindValue($identifier, $this->arcuadr1, PDO::PARAM_STR);
                        break;
                    case 'ArcuAdr2':
                        $stmt->bindValue($identifier, $this->arcuadr2, PDO::PARAM_STR);
                        break;
                    case 'ArcuAdr3':
                        $stmt->bindValue($identifier, $this->arcuadr3, PDO::PARAM_STR);
                        break;
                    case 'ArcuCtry':
                        $stmt->bindValue($identifier, $this->arcuctry, PDO::PARAM_STR);
                        break;
                    case 'ArcuCity':
                        $stmt->bindValue($identifier, $this->arcucity, PDO::PARAM_STR);
                        break;
                    case 'ArcuStat':
                        $stmt->bindValue($identifier, $this->arcustat, PDO::PARAM_STR);
                        break;
                    case 'ArcuZipCode5':
                        $stmt->bindValue($identifier, $this->arcuzipcode5, PDO::PARAM_STR);
                        break;
                    case 'ArcuZipCode4':
                        $stmt->bindValue($identifier, $this->arcuzipcode4, PDO::PARAM_STR);
                        break;
                    case 'ArcuZipCode10':
                        $stmt->bindValue($identifier, $this->arcuzipcode10, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer1':
                        $stmt->bindValue($identifier, $this->arspsaleper1, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer2':
                        $stmt->bindValue($identifier, $this->arspsaleper2, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer3':
                        $stmt->bindValue($identifier, $this->arspsaleper3, PDO::PARAM_STR);
                        break;
                    case 'ArtbMtaxCode':
                        $stmt->bindValue($identifier, $this->artbmtaxcode, PDO::PARAM_STR);
                        break;
                    case 'ArcuTaxExemNbr':
                        $stmt->bindValue($identifier, $this->arcutaxexemnbr, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'ArcuPricLvl':
                        $stmt->bindValue($identifier, $this->arcupriclvl, PDO::PARAM_STR);
                        break;
                    case 'ArcuShipComp':
                        $stmt->bindValue($identifier, $this->arcushipcomp, PDO::PARAM_STR);
                        break;
                    case 'ArcuTxbl':
                        $stmt->bindValue($identifier, $this->arcutxbl, PDO::PARAM_STR);
                        break;
                    case 'ArcuPostal':
                        $stmt->bindValue($identifier, $this->arcupostal, PDO::PARAM_STR);
                        break;
                    case 'ArtbShipVia':
                        $stmt->bindValue($identifier, $this->artbshipvia, PDO::PARAM_STR);
                        break;
                    case 'ArcuBord':
                        $stmt->bindValue($identifier, $this->arcubord, PDO::PARAM_STR);
                        break;
                    case 'ArtbTypeCode':
                        $stmt->bindValue($identifier, $this->artbtypecode, PDO::PARAM_STR);
                        break;
                    case 'ArtbPricCode':
                        $stmt->bindValue($identifier, $this->artbpriccode, PDO::PARAM_STR);
                        break;
                    case 'ArtbCommCode':
                        $stmt->bindValue($identifier, $this->artbcommcode, PDO::PARAM_STR);
                        break;
                    case 'ArtmTermCd':
                        $stmt->bindValue($identifier, $this->artmtermcd, PDO::PARAM_STR);
                        break;
                    case 'ArcuCredLmt':
                        $stmt->bindValue($identifier, $this->arcucredlmt, PDO::PARAM_STR);
                        break;
                    case 'ArcuStmtCode':
                        $stmt->bindValue($identifier, $this->arcustmtcode, PDO::PARAM_STR);
                        break;
                    case 'ArcuCredHold':
                        $stmt->bindValue($identifier, $this->arcucredhold, PDO::PARAM_STR);
                        break;
                    case 'ArcuFinChrg':
                        $stmt->bindValue($identifier, $this->arcufinchrg, PDO::PARAM_STR);
                        break;
                    case 'ArcuUserCode':
                        $stmt->bindValue($identifier, $this->arcuusercode, PDO::PARAM_STR);
                        break;
                    case 'ArcuNewFc':
                        $stmt->bindValue($identifier, $this->arcunewfc, PDO::PARAM_STR);
                        break;
                    case 'ArcuUnpdFc':
                        $stmt->bindValue($identifier, $this->arcuunpdfc, PDO::PARAM_STR);
                        break;
                    case 'ArcuCurBal':
                        $stmt->bindValue($identifier, $this->arcucurbal, PDO::PARAM_STR);
                        break;
                    case 'ArcuBalOdue1':
                        $stmt->bindValue($identifier, $this->arcubalodue1, PDO::PARAM_STR);
                        break;
                    case 'ArcuBalOdue2':
                        $stmt->bindValue($identifier, $this->arcubalodue2, PDO::PARAM_STR);
                        break;
                    case 'ArcuBalOdue3':
                        $stmt->bindValue($identifier, $this->arcubalodue3, PDO::PARAM_STR);
                        break;
                    case 'ArcuSaleMtd':
                        $stmt->bindValue($identifier, $this->arcusalemtd, PDO::PARAM_STR);
                        break;
                    case 'ArcuInvMtd':
                        $stmt->bindValue($identifier, $this->arcuinvmtd, PDO::PARAM_INT);
                        break;
                    case 'ArcuDateOpen':
                        $stmt->bindValue($identifier, $this->arcudateopen, PDO::PARAM_INT);
                        break;
                    case 'ArcuLastSaleDate':
                        $stmt->bindValue($identifier, $this->arculastsaledate, PDO::PARAM_INT);
                        break;
                    case 'ArcuHighBal':
                        $stmt->bindValue($identifier, $this->arcuhighbal, PDO::PARAM_STR);
                        break;
                    case 'ArcuBigSaleMo':
                        $stmt->bindValue($identifier, $this->arcubigsalemo, PDO::PARAM_STR);
                        break;
                    case 'ArcuLastPayDate':
                        $stmt->bindValue($identifier, $this->arculastpaydate, PDO::PARAM_INT);
                        break;
                    case 'ArcuAvgPayDays':
                        $stmt->bindValue($identifier, $this->arcuavgpaydays, PDO::PARAM_INT);
                        break;
                    case 'ArcuUpsZone':
                        $stmt->bindValue($identifier, $this->arcuupszone, PDO::PARAM_STR);
                        break;
                    case 'ArcuHighBalDate':
                        $stmt->bindValue($identifier, $this->arcuhighbaldate, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo1':
                        $stmt->bindValue($identifier, $this->arcusale24mo1, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo1':
                        $stmt->bindValue($identifier, $this->arcuinv24mo1, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo2':
                        $stmt->bindValue($identifier, $this->arcusale24mo2, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo2':
                        $stmt->bindValue($identifier, $this->arcuinv24mo2, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo3':
                        $stmt->bindValue($identifier, $this->arcusale24mo3, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo3':
                        $stmt->bindValue($identifier, $this->arcuinv24mo3, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo4':
                        $stmt->bindValue($identifier, $this->arcusale24mo4, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo4':
                        $stmt->bindValue($identifier, $this->arcuinv24mo4, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo5':
                        $stmt->bindValue($identifier, $this->arcusale24mo5, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo5':
                        $stmt->bindValue($identifier, $this->arcuinv24mo5, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo6':
                        $stmt->bindValue($identifier, $this->arcusale24mo6, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo6':
                        $stmt->bindValue($identifier, $this->arcuinv24mo6, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo7':
                        $stmt->bindValue($identifier, $this->arcusale24mo7, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo7':
                        $stmt->bindValue($identifier, $this->arcuinv24mo7, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo8':
                        $stmt->bindValue($identifier, $this->arcusale24mo8, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo8':
                        $stmt->bindValue($identifier, $this->arcuinv24mo8, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo9':
                        $stmt->bindValue($identifier, $this->arcusale24mo9, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo9':
                        $stmt->bindValue($identifier, $this->arcuinv24mo9, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo10':
                        $stmt->bindValue($identifier, $this->arcusale24mo10, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo10':
                        $stmt->bindValue($identifier, $this->arcuinv24mo10, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo11':
                        $stmt->bindValue($identifier, $this->arcusale24mo11, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo11':
                        $stmt->bindValue($identifier, $this->arcuinv24mo11, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo12':
                        $stmt->bindValue($identifier, $this->arcusale24mo12, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo12':
                        $stmt->bindValue($identifier, $this->arcuinv24mo12, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo13':
                        $stmt->bindValue($identifier, $this->arcusale24mo13, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo13':
                        $stmt->bindValue($identifier, $this->arcuinv24mo13, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo14':
                        $stmt->bindValue($identifier, $this->arcusale24mo14, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo14':
                        $stmt->bindValue($identifier, $this->arcuinv24mo14, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo15':
                        $stmt->bindValue($identifier, $this->arcusale24mo15, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo15':
                        $stmt->bindValue($identifier, $this->arcuinv24mo15, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo16':
                        $stmt->bindValue($identifier, $this->arcusale24mo16, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo16':
                        $stmt->bindValue($identifier, $this->arcuinv24mo16, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo17':
                        $stmt->bindValue($identifier, $this->arcusale24mo17, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo17':
                        $stmt->bindValue($identifier, $this->arcuinv24mo17, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo18':
                        $stmt->bindValue($identifier, $this->arcusale24mo18, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo18':
                        $stmt->bindValue($identifier, $this->arcuinv24mo18, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo19':
                        $stmt->bindValue($identifier, $this->arcusale24mo19, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo19':
                        $stmt->bindValue($identifier, $this->arcuinv24mo19, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo20':
                        $stmt->bindValue($identifier, $this->arcusale24mo20, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo20':
                        $stmt->bindValue($identifier, $this->arcuinv24mo20, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo21':
                        $stmt->bindValue($identifier, $this->arcusale24mo21, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo21':
                        $stmt->bindValue($identifier, $this->arcuinv24mo21, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo22':
                        $stmt->bindValue($identifier, $this->arcusale24mo22, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo22':
                        $stmt->bindValue($identifier, $this->arcuinv24mo22, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo23':
                        $stmt->bindValue($identifier, $this->arcusale24mo23, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo23':
                        $stmt->bindValue($identifier, $this->arcuinv24mo23, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo24':
                        $stmt->bindValue($identifier, $this->arcusale24mo24, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo24':
                        $stmt->bindValue($identifier, $this->arcuinv24mo24, PDO::PARAM_INT);
                        break;
                    case 'ArcuLastPayAmt':
                        $stmt->bindValue($identifier, $this->arculastpayamt, PDO::PARAM_STR);
                        break;
                    case 'ArcuOrdrTot':
                        $stmt->bindValue($identifier, $this->arcuordrtot, PDO::PARAM_STR);
                        break;
                    case 'ArcuUseFrtIn':
                        $stmt->bindValue($identifier, $this->arcuusefrtin, PDO::PARAM_STR);
                        break;
                    case 'ArcuMyVendId':
                        $stmt->bindValue($identifier, $this->arcumyvendid, PDO::PARAM_STR);
                        break;
                    case 'ArcuAddlPricDisc':
                        $stmt->bindValue($identifier, $this->arcuaddlpricdisc, PDO::PARAM_STR);
                        break;
                    case 'ArcuChrgFrt':
                        $stmt->bindValue($identifier, $this->arcuchrgfrt, PDO::PARAM_STR);
                        break;
                    case 'ArcuCoreXDays':
                        $stmt->bindValue($identifier, $this->arcucorexdays, PDO::PARAM_INT);
                        break;
                    case 'ArcuContractNbr':
                        $stmt->bindValue($identifier, $this->arcucontractnbr, PDO::PARAM_STR);
                        break;
                    case 'ArcuCoreLF':
                        $stmt->bindValue($identifier, $this->arcucorelf, PDO::PARAM_STR);
                        break;
                    case 'ArcuCoreBankId':
                        $stmt->bindValue($identifier, $this->arcucorebankid, PDO::PARAM_STR);
                        break;
                    case 'ArcuDunsNbr':
                        $stmt->bindValue($identifier, $this->arcudunsnbr, PDO::PARAM_STR);
                        break;
                    case 'ArcuRfmlValu':
                        $stmt->bindValue($identifier, $this->arcurfmlvalu, PDO::PARAM_INT);
                        break;
                    case 'ArcuForceCustPo':
                        $stmt->bindValue($identifier, $this->arcuforcecustpo, PDO::PARAM_STR);
                        break;
                    case 'ArcuAgeLevel':
                        $stmt->bindValue($identifier, $this->arcuagelevel, PDO::PARAM_INT);
                        break;
                    case 'ArtbRoute':
                        $stmt->bindValue($identifier, $this->artbroute, PDO::PARAM_STR);
                        break;
                    case 'ArcuWgTaxCode':
                        $stmt->bindValue($identifier, $this->arcuwgtaxcode, PDO::PARAM_STR);
                        break;
                    case 'ArcuAcptSupercede':
                        $stmt->bindValue($identifier, $this->arcuacptsupercede, PDO::PARAM_STR);
                        break;
                    case 'ArcuMstrCustId':
                        $stmt->bindValue($identifier, $this->arcumstrcustid, PDO::PARAM_STR);
                        break;
                    case 'ArcuSurchgPct':
                        $stmt->bindValue($identifier, $this->arcusurchgpct, PDO::PARAM_STR);
                        break;
                    case 'ArcuFrgtSplit':
                        $stmt->bindValue($identifier, $this->arcufrgtsplit, PDO::PARAM_STR);
                        break;
                    case 'ArcuLineMin':
                        $stmt->bindValue($identifier, $this->arculinemin, PDO::PARAM_STR);
                        break;
                    case 'ArcuOrdrMin':
                        $stmt->bindValue($identifier, $this->arcuordrmin, PDO::PARAM_STR);
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
        $pos = ArCustMastTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getArcuname();
                break;
            case 2:
                return $this->getArcuadr1();
                break;
            case 3:
                return $this->getArcuadr2();
                break;
            case 4:
                return $this->getArcuadr3();
                break;
            case 5:
                return $this->getArcuctry();
                break;
            case 6:
                return $this->getArcucity();
                break;
            case 7:
                return $this->getArcustat();
                break;
            case 8:
                return $this->getArcuzipcode5();
                break;
            case 9:
                return $this->getArcuzipcode4();
                break;
            case 10:
                return $this->getArcuzipcode10();
                break;
            case 11:
                return $this->getArspsaleper1();
                break;
            case 12:
                return $this->getArspsaleper2();
                break;
            case 13:
                return $this->getArspsaleper3();
                break;
            case 14:
                return $this->getArtbmtaxcode();
                break;
            case 15:
                return $this->getArcutaxexemnbr();
                break;
            case 16:
                return $this->getIntbwhse();
                break;
            case 17:
                return $this->getArcupriclvl();
                break;
            case 18:
                return $this->getArcushipcomp();
                break;
            case 19:
                return $this->getArcutxbl();
                break;
            case 20:
                return $this->getArcupostal();
                break;
            case 21:
                return $this->getArtbshipvia();
                break;
            case 22:
                return $this->getArcubord();
                break;
            case 23:
                return $this->getArtbtypecode();
                break;
            case 24:
                return $this->getArtbpriccode();
                break;
            case 25:
                return $this->getArtbcommcode();
                break;
            case 26:
                return $this->getArtmtermcd();
                break;
            case 27:
                return $this->getArcucredlmt();
                break;
            case 28:
                return $this->getArcustmtcode();
                break;
            case 29:
                return $this->getArcucredhold();
                break;
            case 30:
                return $this->getArcufinchrg();
                break;
            case 31:
                return $this->getArcuusercode();
                break;
            case 32:
                return $this->getArcunewfc();
                break;
            case 33:
                return $this->getArcuunpdfc();
                break;
            case 34:
                return $this->getArcucurbal();
                break;
            case 35:
                return $this->getArcubalodue1();
                break;
            case 36:
                return $this->getArcubalodue2();
                break;
            case 37:
                return $this->getArcubalodue3();
                break;
            case 38:
                return $this->getArcusalemtd();
                break;
            case 39:
                return $this->getArcuinvmtd();
                break;
            case 40:
                return $this->getArcudateopen();
                break;
            case 41:
                return $this->getArculastsaledate();
                break;
            case 42:
                return $this->getArcuhighbal();
                break;
            case 43:
                return $this->getArcubigsalemo();
                break;
            case 44:
                return $this->getArculastpaydate();
                break;
            case 45:
                return $this->getArcuavgpaydays();
                break;
            case 46:
                return $this->getArcuupszone();
                break;
            case 47:
                return $this->getArcuhighbaldate();
                break;
            case 48:
                return $this->getArcusale24mo1();
                break;
            case 49:
                return $this->getArcuinv24mo1();
                break;
            case 50:
                return $this->getArcusale24mo2();
                break;
            case 51:
                return $this->getArcuinv24mo2();
                break;
            case 52:
                return $this->getArcusale24mo3();
                break;
            case 53:
                return $this->getArcuinv24mo3();
                break;
            case 54:
                return $this->getArcusale24mo4();
                break;
            case 55:
                return $this->getArcuinv24mo4();
                break;
            case 56:
                return $this->getArcusale24mo5();
                break;
            case 57:
                return $this->getArcuinv24mo5();
                break;
            case 58:
                return $this->getArcusale24mo6();
                break;
            case 59:
                return $this->getArcuinv24mo6();
                break;
            case 60:
                return $this->getArcusale24mo7();
                break;
            case 61:
                return $this->getArcuinv24mo7();
                break;
            case 62:
                return $this->getArcusale24mo8();
                break;
            case 63:
                return $this->getArcuinv24mo8();
                break;
            case 64:
                return $this->getArcusale24mo9();
                break;
            case 65:
                return $this->getArcuinv24mo9();
                break;
            case 66:
                return $this->getArcusale24mo10();
                break;
            case 67:
                return $this->getArcuinv24mo10();
                break;
            case 68:
                return $this->getArcusale24mo11();
                break;
            case 69:
                return $this->getArcuinv24mo11();
                break;
            case 70:
                return $this->getArcusale24mo12();
                break;
            case 71:
                return $this->getArcuinv24mo12();
                break;
            case 72:
                return $this->getArcusale24mo13();
                break;
            case 73:
                return $this->getArcuinv24mo13();
                break;
            case 74:
                return $this->getArcusale24mo14();
                break;
            case 75:
                return $this->getArcuinv24mo14();
                break;
            case 76:
                return $this->getArcusale24mo15();
                break;
            case 77:
                return $this->getArcuinv24mo15();
                break;
            case 78:
                return $this->getArcusale24mo16();
                break;
            case 79:
                return $this->getArcuinv24mo16();
                break;
            case 80:
                return $this->getArcusale24mo17();
                break;
            case 81:
                return $this->getArcuinv24mo17();
                break;
            case 82:
                return $this->getArcusale24mo18();
                break;
            case 83:
                return $this->getArcuinv24mo18();
                break;
            case 84:
                return $this->getArcusale24mo19();
                break;
            case 85:
                return $this->getArcuinv24mo19();
                break;
            case 86:
                return $this->getArcusale24mo20();
                break;
            case 87:
                return $this->getArcuinv24mo20();
                break;
            case 88:
                return $this->getArcusale24mo21();
                break;
            case 89:
                return $this->getArcuinv24mo21();
                break;
            case 90:
                return $this->getArcusale24mo22();
                break;
            case 91:
                return $this->getArcuinv24mo22();
                break;
            case 92:
                return $this->getArcusale24mo23();
                break;
            case 93:
                return $this->getArcuinv24mo23();
                break;
            case 94:
                return $this->getArcusale24mo24();
                break;
            case 95:
                return $this->getArcuinv24mo24();
                break;
            case 96:
                return $this->getArculastpayamt();
                break;
            case 97:
                return $this->getArcuordrtot();
                break;
            case 98:
                return $this->getArcuusefrtin();
                break;
            case 99:
                return $this->getArcumyvendid();
                break;
            case 100:
                return $this->getArcuaddlpricdisc();
                break;
            case 101:
                return $this->getArcuchrgfrt();
                break;
            case 102:
                return $this->getArcucorexdays();
                break;
            case 103:
                return $this->getArcucontractnbr();
                break;
            case 104:
                return $this->getArcucorelf();
                break;
            case 105:
                return $this->getArcucorebankid();
                break;
            case 106:
                return $this->getArcudunsnbr();
                break;
            case 107:
                return $this->getArcurfmlvalu();
                break;
            case 108:
                return $this->getArcuforcecustpo();
                break;
            case 109:
                return $this->getArcuagelevel();
                break;
            case 110:
                return $this->getArtbroute();
                break;
            case 111:
                return $this->getArcuwgtaxcode();
                break;
            case 112:
                return $this->getArcuacptsupercede();
                break;
            case 113:
                return $this->getArcumstrcustid();
                break;
            case 114:
                return $this->getArcusurchgpct();
                break;
            case 115:
                return $this->getArcufrgtsplit();
                break;
            case 116:
                return $this->getArculinemin();
                break;
            case 117:
                return $this->getArcuordrmin();
                break;
            case 118:
                return $this->getDateupdtd();
                break;
            case 119:
                return $this->getTimeupdtd();
                break;
            case 120:
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

        if (isset($alreadyDumpedObjects['ArCustMast'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ArCustMast'][$this->hashCode()] = true;
        $keys = ArCustMastTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getArcucustid(),
            $keys[1] => $this->getArcuname(),
            $keys[2] => $this->getArcuadr1(),
            $keys[3] => $this->getArcuadr2(),
            $keys[4] => $this->getArcuadr3(),
            $keys[5] => $this->getArcuctry(),
            $keys[6] => $this->getArcucity(),
            $keys[7] => $this->getArcustat(),
            $keys[8] => $this->getArcuzipcode5(),
            $keys[9] => $this->getArcuzipcode4(),
            $keys[10] => $this->getArcuzipcode10(),
            $keys[11] => $this->getArspsaleper1(),
            $keys[12] => $this->getArspsaleper2(),
            $keys[13] => $this->getArspsaleper3(),
            $keys[14] => $this->getArtbmtaxcode(),
            $keys[15] => $this->getArcutaxexemnbr(),
            $keys[16] => $this->getIntbwhse(),
            $keys[17] => $this->getArcupriclvl(),
            $keys[18] => $this->getArcushipcomp(),
            $keys[19] => $this->getArcutxbl(),
            $keys[20] => $this->getArcupostal(),
            $keys[21] => $this->getArtbshipvia(),
            $keys[22] => $this->getArcubord(),
            $keys[23] => $this->getArtbtypecode(),
            $keys[24] => $this->getArtbpriccode(),
            $keys[25] => $this->getArtbcommcode(),
            $keys[26] => $this->getArtmtermcd(),
            $keys[27] => $this->getArcucredlmt(),
            $keys[28] => $this->getArcustmtcode(),
            $keys[29] => $this->getArcucredhold(),
            $keys[30] => $this->getArcufinchrg(),
            $keys[31] => $this->getArcuusercode(),
            $keys[32] => $this->getArcunewfc(),
            $keys[33] => $this->getArcuunpdfc(),
            $keys[34] => $this->getArcucurbal(),
            $keys[35] => $this->getArcubalodue1(),
            $keys[36] => $this->getArcubalodue2(),
            $keys[37] => $this->getArcubalodue3(),
            $keys[38] => $this->getArcusalemtd(),
            $keys[39] => $this->getArcuinvmtd(),
            $keys[40] => $this->getArcudateopen(),
            $keys[41] => $this->getArculastsaledate(),
            $keys[42] => $this->getArcuhighbal(),
            $keys[43] => $this->getArcubigsalemo(),
            $keys[44] => $this->getArculastpaydate(),
            $keys[45] => $this->getArcuavgpaydays(),
            $keys[46] => $this->getArcuupszone(),
            $keys[47] => $this->getArcuhighbaldate(),
            $keys[48] => $this->getArcusale24mo1(),
            $keys[49] => $this->getArcuinv24mo1(),
            $keys[50] => $this->getArcusale24mo2(),
            $keys[51] => $this->getArcuinv24mo2(),
            $keys[52] => $this->getArcusale24mo3(),
            $keys[53] => $this->getArcuinv24mo3(),
            $keys[54] => $this->getArcusale24mo4(),
            $keys[55] => $this->getArcuinv24mo4(),
            $keys[56] => $this->getArcusale24mo5(),
            $keys[57] => $this->getArcuinv24mo5(),
            $keys[58] => $this->getArcusale24mo6(),
            $keys[59] => $this->getArcuinv24mo6(),
            $keys[60] => $this->getArcusale24mo7(),
            $keys[61] => $this->getArcuinv24mo7(),
            $keys[62] => $this->getArcusale24mo8(),
            $keys[63] => $this->getArcuinv24mo8(),
            $keys[64] => $this->getArcusale24mo9(),
            $keys[65] => $this->getArcuinv24mo9(),
            $keys[66] => $this->getArcusale24mo10(),
            $keys[67] => $this->getArcuinv24mo10(),
            $keys[68] => $this->getArcusale24mo11(),
            $keys[69] => $this->getArcuinv24mo11(),
            $keys[70] => $this->getArcusale24mo12(),
            $keys[71] => $this->getArcuinv24mo12(),
            $keys[72] => $this->getArcusale24mo13(),
            $keys[73] => $this->getArcuinv24mo13(),
            $keys[74] => $this->getArcusale24mo14(),
            $keys[75] => $this->getArcuinv24mo14(),
            $keys[76] => $this->getArcusale24mo15(),
            $keys[77] => $this->getArcuinv24mo15(),
            $keys[78] => $this->getArcusale24mo16(),
            $keys[79] => $this->getArcuinv24mo16(),
            $keys[80] => $this->getArcusale24mo17(),
            $keys[81] => $this->getArcuinv24mo17(),
            $keys[82] => $this->getArcusale24mo18(),
            $keys[83] => $this->getArcuinv24mo18(),
            $keys[84] => $this->getArcusale24mo19(),
            $keys[85] => $this->getArcuinv24mo19(),
            $keys[86] => $this->getArcusale24mo20(),
            $keys[87] => $this->getArcuinv24mo20(),
            $keys[88] => $this->getArcusale24mo21(),
            $keys[89] => $this->getArcuinv24mo21(),
            $keys[90] => $this->getArcusale24mo22(),
            $keys[91] => $this->getArcuinv24mo22(),
            $keys[92] => $this->getArcusale24mo23(),
            $keys[93] => $this->getArcuinv24mo23(),
            $keys[94] => $this->getArcusale24mo24(),
            $keys[95] => $this->getArcuinv24mo24(),
            $keys[96] => $this->getArculastpayamt(),
            $keys[97] => $this->getArcuordrtot(),
            $keys[98] => $this->getArcuusefrtin(),
            $keys[99] => $this->getArcumyvendid(),
            $keys[100] => $this->getArcuaddlpricdisc(),
            $keys[101] => $this->getArcuchrgfrt(),
            $keys[102] => $this->getArcucorexdays(),
            $keys[103] => $this->getArcucontractnbr(),
            $keys[104] => $this->getArcucorelf(),
            $keys[105] => $this->getArcucorebankid(),
            $keys[106] => $this->getArcudunsnbr(),
            $keys[107] => $this->getArcurfmlvalu(),
            $keys[108] => $this->getArcuforcecustpo(),
            $keys[109] => $this->getArcuagelevel(),
            $keys[110] => $this->getArtbroute(),
            $keys[111] => $this->getArcuwgtaxcode(),
            $keys[112] => $this->getArcuacptsupercede(),
            $keys[113] => $this->getArcumstrcustid(),
            $keys[114] => $this->getArcusurchgpct(),
            $keys[115] => $this->getArcufrgtsplit(),
            $keys[116] => $this->getArculinemin(),
            $keys[117] => $this->getArcuordrmin(),
            $keys[118] => $this->getDateupdtd(),
            $keys[119] => $this->getTimeupdtd(),
            $keys[120] => $this->getDummy(),
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
     * @return $this|\ArCustMast
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ArCustMastTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ArCustMast
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setArcucustid($value);
                break;
            case 1:
                $this->setArcuname($value);
                break;
            case 2:
                $this->setArcuadr1($value);
                break;
            case 3:
                $this->setArcuadr2($value);
                break;
            case 4:
                $this->setArcuadr3($value);
                break;
            case 5:
                $this->setArcuctry($value);
                break;
            case 6:
                $this->setArcucity($value);
                break;
            case 7:
                $this->setArcustat($value);
                break;
            case 8:
                $this->setArcuzipcode5($value);
                break;
            case 9:
                $this->setArcuzipcode4($value);
                break;
            case 10:
                $this->setArcuzipcode10($value);
                break;
            case 11:
                $this->setArspsaleper1($value);
                break;
            case 12:
                $this->setArspsaleper2($value);
                break;
            case 13:
                $this->setArspsaleper3($value);
                break;
            case 14:
                $this->setArtbmtaxcode($value);
                break;
            case 15:
                $this->setArcutaxexemnbr($value);
                break;
            case 16:
                $this->setIntbwhse($value);
                break;
            case 17:
                $this->setArcupriclvl($value);
                break;
            case 18:
                $this->setArcushipcomp($value);
                break;
            case 19:
                $this->setArcutxbl($value);
                break;
            case 20:
                $this->setArcupostal($value);
                break;
            case 21:
                $this->setArtbshipvia($value);
                break;
            case 22:
                $this->setArcubord($value);
                break;
            case 23:
                $this->setArtbtypecode($value);
                break;
            case 24:
                $this->setArtbpriccode($value);
                break;
            case 25:
                $this->setArtbcommcode($value);
                break;
            case 26:
                $this->setArtmtermcd($value);
                break;
            case 27:
                $this->setArcucredlmt($value);
                break;
            case 28:
                $this->setArcustmtcode($value);
                break;
            case 29:
                $this->setArcucredhold($value);
                break;
            case 30:
                $this->setArcufinchrg($value);
                break;
            case 31:
                $this->setArcuusercode($value);
                break;
            case 32:
                $this->setArcunewfc($value);
                break;
            case 33:
                $this->setArcuunpdfc($value);
                break;
            case 34:
                $this->setArcucurbal($value);
                break;
            case 35:
                $this->setArcubalodue1($value);
                break;
            case 36:
                $this->setArcubalodue2($value);
                break;
            case 37:
                $this->setArcubalodue3($value);
                break;
            case 38:
                $this->setArcusalemtd($value);
                break;
            case 39:
                $this->setArcuinvmtd($value);
                break;
            case 40:
                $this->setArcudateopen($value);
                break;
            case 41:
                $this->setArculastsaledate($value);
                break;
            case 42:
                $this->setArcuhighbal($value);
                break;
            case 43:
                $this->setArcubigsalemo($value);
                break;
            case 44:
                $this->setArculastpaydate($value);
                break;
            case 45:
                $this->setArcuavgpaydays($value);
                break;
            case 46:
                $this->setArcuupszone($value);
                break;
            case 47:
                $this->setArcuhighbaldate($value);
                break;
            case 48:
                $this->setArcusale24mo1($value);
                break;
            case 49:
                $this->setArcuinv24mo1($value);
                break;
            case 50:
                $this->setArcusale24mo2($value);
                break;
            case 51:
                $this->setArcuinv24mo2($value);
                break;
            case 52:
                $this->setArcusale24mo3($value);
                break;
            case 53:
                $this->setArcuinv24mo3($value);
                break;
            case 54:
                $this->setArcusale24mo4($value);
                break;
            case 55:
                $this->setArcuinv24mo4($value);
                break;
            case 56:
                $this->setArcusale24mo5($value);
                break;
            case 57:
                $this->setArcuinv24mo5($value);
                break;
            case 58:
                $this->setArcusale24mo6($value);
                break;
            case 59:
                $this->setArcuinv24mo6($value);
                break;
            case 60:
                $this->setArcusale24mo7($value);
                break;
            case 61:
                $this->setArcuinv24mo7($value);
                break;
            case 62:
                $this->setArcusale24mo8($value);
                break;
            case 63:
                $this->setArcuinv24mo8($value);
                break;
            case 64:
                $this->setArcusale24mo9($value);
                break;
            case 65:
                $this->setArcuinv24mo9($value);
                break;
            case 66:
                $this->setArcusale24mo10($value);
                break;
            case 67:
                $this->setArcuinv24mo10($value);
                break;
            case 68:
                $this->setArcusale24mo11($value);
                break;
            case 69:
                $this->setArcuinv24mo11($value);
                break;
            case 70:
                $this->setArcusale24mo12($value);
                break;
            case 71:
                $this->setArcuinv24mo12($value);
                break;
            case 72:
                $this->setArcusale24mo13($value);
                break;
            case 73:
                $this->setArcuinv24mo13($value);
                break;
            case 74:
                $this->setArcusale24mo14($value);
                break;
            case 75:
                $this->setArcuinv24mo14($value);
                break;
            case 76:
                $this->setArcusale24mo15($value);
                break;
            case 77:
                $this->setArcuinv24mo15($value);
                break;
            case 78:
                $this->setArcusale24mo16($value);
                break;
            case 79:
                $this->setArcuinv24mo16($value);
                break;
            case 80:
                $this->setArcusale24mo17($value);
                break;
            case 81:
                $this->setArcuinv24mo17($value);
                break;
            case 82:
                $this->setArcusale24mo18($value);
                break;
            case 83:
                $this->setArcuinv24mo18($value);
                break;
            case 84:
                $this->setArcusale24mo19($value);
                break;
            case 85:
                $this->setArcuinv24mo19($value);
                break;
            case 86:
                $this->setArcusale24mo20($value);
                break;
            case 87:
                $this->setArcuinv24mo20($value);
                break;
            case 88:
                $this->setArcusale24mo21($value);
                break;
            case 89:
                $this->setArcuinv24mo21($value);
                break;
            case 90:
                $this->setArcusale24mo22($value);
                break;
            case 91:
                $this->setArcuinv24mo22($value);
                break;
            case 92:
                $this->setArcusale24mo23($value);
                break;
            case 93:
                $this->setArcuinv24mo23($value);
                break;
            case 94:
                $this->setArcusale24mo24($value);
                break;
            case 95:
                $this->setArcuinv24mo24($value);
                break;
            case 96:
                $this->setArculastpayamt($value);
                break;
            case 97:
                $this->setArcuordrtot($value);
                break;
            case 98:
                $this->setArcuusefrtin($value);
                break;
            case 99:
                $this->setArcumyvendid($value);
                break;
            case 100:
                $this->setArcuaddlpricdisc($value);
                break;
            case 101:
                $this->setArcuchrgfrt($value);
                break;
            case 102:
                $this->setArcucorexdays($value);
                break;
            case 103:
                $this->setArcucontractnbr($value);
                break;
            case 104:
                $this->setArcucorelf($value);
                break;
            case 105:
                $this->setArcucorebankid($value);
                break;
            case 106:
                $this->setArcudunsnbr($value);
                break;
            case 107:
                $this->setArcurfmlvalu($value);
                break;
            case 108:
                $this->setArcuforcecustpo($value);
                break;
            case 109:
                $this->setArcuagelevel($value);
                break;
            case 110:
                $this->setArtbroute($value);
                break;
            case 111:
                $this->setArcuwgtaxcode($value);
                break;
            case 112:
                $this->setArcuacptsupercede($value);
                break;
            case 113:
                $this->setArcumstrcustid($value);
                break;
            case 114:
                $this->setArcusurchgpct($value);
                break;
            case 115:
                $this->setArcufrgtsplit($value);
                break;
            case 116:
                $this->setArculinemin($value);
                break;
            case 117:
                $this->setArcuordrmin($value);
                break;
            case 118:
                $this->setDateupdtd($value);
                break;
            case 119:
                $this->setTimeupdtd($value);
                break;
            case 120:
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
        $keys = ArCustMastTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setArcucustid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setArcuname($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setArcuadr1($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setArcuadr2($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setArcuadr3($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setArcuctry($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setArcucity($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setArcustat($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setArcuzipcode5($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setArcuzipcode4($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setArcuzipcode10($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setArspsaleper1($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setArspsaleper2($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setArspsaleper3($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setArtbmtaxcode($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setArcutaxexemnbr($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setIntbwhse($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setArcupriclvl($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setArcushipcomp($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setArcutxbl($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setArcupostal($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setArtbshipvia($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setArcubord($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setArtbtypecode($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setArtbpriccode($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setArtbcommcode($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setArtmtermcd($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setArcucredlmt($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setArcustmtcode($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setArcucredhold($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setArcufinchrg($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setArcuusercode($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setArcunewfc($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setArcuunpdfc($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setArcucurbal($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setArcubalodue1($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setArcubalodue2($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setArcubalodue3($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setArcusalemtd($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setArcuinvmtd($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setArcudateopen($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setArculastsaledate($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setArcuhighbal($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setArcubigsalemo($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setArculastpaydate($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setArcuavgpaydays($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setArcuupszone($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setArcuhighbaldate($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setArcusale24mo1($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setArcuinv24mo1($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setArcusale24mo2($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setArcuinv24mo2($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setArcusale24mo3($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setArcuinv24mo3($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setArcusale24mo4($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setArcuinv24mo4($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setArcusale24mo5($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setArcuinv24mo5($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setArcusale24mo6($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setArcuinv24mo6($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setArcusale24mo7($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setArcuinv24mo7($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setArcusale24mo8($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setArcuinv24mo8($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setArcusale24mo9($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setArcuinv24mo9($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setArcusale24mo10($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setArcuinv24mo10($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setArcusale24mo11($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setArcuinv24mo11($arr[$keys[69]]);
        }
        if (array_key_exists($keys[70], $arr)) {
            $this->setArcusale24mo12($arr[$keys[70]]);
        }
        if (array_key_exists($keys[71], $arr)) {
            $this->setArcuinv24mo12($arr[$keys[71]]);
        }
        if (array_key_exists($keys[72], $arr)) {
            $this->setArcusale24mo13($arr[$keys[72]]);
        }
        if (array_key_exists($keys[73], $arr)) {
            $this->setArcuinv24mo13($arr[$keys[73]]);
        }
        if (array_key_exists($keys[74], $arr)) {
            $this->setArcusale24mo14($arr[$keys[74]]);
        }
        if (array_key_exists($keys[75], $arr)) {
            $this->setArcuinv24mo14($arr[$keys[75]]);
        }
        if (array_key_exists($keys[76], $arr)) {
            $this->setArcusale24mo15($arr[$keys[76]]);
        }
        if (array_key_exists($keys[77], $arr)) {
            $this->setArcuinv24mo15($arr[$keys[77]]);
        }
        if (array_key_exists($keys[78], $arr)) {
            $this->setArcusale24mo16($arr[$keys[78]]);
        }
        if (array_key_exists($keys[79], $arr)) {
            $this->setArcuinv24mo16($arr[$keys[79]]);
        }
        if (array_key_exists($keys[80], $arr)) {
            $this->setArcusale24mo17($arr[$keys[80]]);
        }
        if (array_key_exists($keys[81], $arr)) {
            $this->setArcuinv24mo17($arr[$keys[81]]);
        }
        if (array_key_exists($keys[82], $arr)) {
            $this->setArcusale24mo18($arr[$keys[82]]);
        }
        if (array_key_exists($keys[83], $arr)) {
            $this->setArcuinv24mo18($arr[$keys[83]]);
        }
        if (array_key_exists($keys[84], $arr)) {
            $this->setArcusale24mo19($arr[$keys[84]]);
        }
        if (array_key_exists($keys[85], $arr)) {
            $this->setArcuinv24mo19($arr[$keys[85]]);
        }
        if (array_key_exists($keys[86], $arr)) {
            $this->setArcusale24mo20($arr[$keys[86]]);
        }
        if (array_key_exists($keys[87], $arr)) {
            $this->setArcuinv24mo20($arr[$keys[87]]);
        }
        if (array_key_exists($keys[88], $arr)) {
            $this->setArcusale24mo21($arr[$keys[88]]);
        }
        if (array_key_exists($keys[89], $arr)) {
            $this->setArcuinv24mo21($arr[$keys[89]]);
        }
        if (array_key_exists($keys[90], $arr)) {
            $this->setArcusale24mo22($arr[$keys[90]]);
        }
        if (array_key_exists($keys[91], $arr)) {
            $this->setArcuinv24mo22($arr[$keys[91]]);
        }
        if (array_key_exists($keys[92], $arr)) {
            $this->setArcusale24mo23($arr[$keys[92]]);
        }
        if (array_key_exists($keys[93], $arr)) {
            $this->setArcuinv24mo23($arr[$keys[93]]);
        }
        if (array_key_exists($keys[94], $arr)) {
            $this->setArcusale24mo24($arr[$keys[94]]);
        }
        if (array_key_exists($keys[95], $arr)) {
            $this->setArcuinv24mo24($arr[$keys[95]]);
        }
        if (array_key_exists($keys[96], $arr)) {
            $this->setArculastpayamt($arr[$keys[96]]);
        }
        if (array_key_exists($keys[97], $arr)) {
            $this->setArcuordrtot($arr[$keys[97]]);
        }
        if (array_key_exists($keys[98], $arr)) {
            $this->setArcuusefrtin($arr[$keys[98]]);
        }
        if (array_key_exists($keys[99], $arr)) {
            $this->setArcumyvendid($arr[$keys[99]]);
        }
        if (array_key_exists($keys[100], $arr)) {
            $this->setArcuaddlpricdisc($arr[$keys[100]]);
        }
        if (array_key_exists($keys[101], $arr)) {
            $this->setArcuchrgfrt($arr[$keys[101]]);
        }
        if (array_key_exists($keys[102], $arr)) {
            $this->setArcucorexdays($arr[$keys[102]]);
        }
        if (array_key_exists($keys[103], $arr)) {
            $this->setArcucontractnbr($arr[$keys[103]]);
        }
        if (array_key_exists($keys[104], $arr)) {
            $this->setArcucorelf($arr[$keys[104]]);
        }
        if (array_key_exists($keys[105], $arr)) {
            $this->setArcucorebankid($arr[$keys[105]]);
        }
        if (array_key_exists($keys[106], $arr)) {
            $this->setArcudunsnbr($arr[$keys[106]]);
        }
        if (array_key_exists($keys[107], $arr)) {
            $this->setArcurfmlvalu($arr[$keys[107]]);
        }
        if (array_key_exists($keys[108], $arr)) {
            $this->setArcuforcecustpo($arr[$keys[108]]);
        }
        if (array_key_exists($keys[109], $arr)) {
            $this->setArcuagelevel($arr[$keys[109]]);
        }
        if (array_key_exists($keys[110], $arr)) {
            $this->setArtbroute($arr[$keys[110]]);
        }
        if (array_key_exists($keys[111], $arr)) {
            $this->setArcuwgtaxcode($arr[$keys[111]]);
        }
        if (array_key_exists($keys[112], $arr)) {
            $this->setArcuacptsupercede($arr[$keys[112]]);
        }
        if (array_key_exists($keys[113], $arr)) {
            $this->setArcumstrcustid($arr[$keys[113]]);
        }
        if (array_key_exists($keys[114], $arr)) {
            $this->setArcusurchgpct($arr[$keys[114]]);
        }
        if (array_key_exists($keys[115], $arr)) {
            $this->setArcufrgtsplit($arr[$keys[115]]);
        }
        if (array_key_exists($keys[116], $arr)) {
            $this->setArculinemin($arr[$keys[116]]);
        }
        if (array_key_exists($keys[117], $arr)) {
            $this->setArcuordrmin($arr[$keys[117]]);
        }
        if (array_key_exists($keys[118], $arr)) {
            $this->setDateupdtd($arr[$keys[118]]);
        }
        if (array_key_exists($keys[119], $arr)) {
            $this->setTimeupdtd($arr[$keys[119]]);
        }
        if (array_key_exists($keys[120], $arr)) {
            $this->setDummy($arr[$keys[120]]);
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
     * @return $this|\ArCustMast The current object, for fluid interface
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
        $criteria = new Criteria(ArCustMastTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCUSTID)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUNAME)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUNAME, $this->arcuname);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUADR1)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUADR1, $this->arcuadr1);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUADR2)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUADR2, $this->arcuadr2);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUADR3)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUADR3, $this->arcuadr3);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCTRY)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUCTRY, $this->arcuctry);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCITY)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUCITY, $this->arcucity);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSTAT)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSTAT, $this->arcustat);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUZIPCODE5)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUZIPCODE5, $this->arcuzipcode5);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUZIPCODE4)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUZIPCODE4, $this->arcuzipcode4);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUZIPCODE10)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUZIPCODE10, $this->arcuzipcode10);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARSPSALEPER1)) {
            $criteria->add(ArCustMastTableMap::COL_ARSPSALEPER1, $this->arspsaleper1);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARSPSALEPER2)) {
            $criteria->add(ArCustMastTableMap::COL_ARSPSALEPER2, $this->arspsaleper2);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARSPSALEPER3)) {
            $criteria->add(ArCustMastTableMap::COL_ARSPSALEPER3, $this->arspsaleper3);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARTBMTAXCODE)) {
            $criteria->add(ArCustMastTableMap::COL_ARTBMTAXCODE, $this->artbmtaxcode);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUTAXEXEMNBR)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUTAXEXEMNBR, $this->arcutaxexemnbr);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_INTBWHSE)) {
            $criteria->add(ArCustMastTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUPRICLVL)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUPRICLVL, $this->arcupriclvl);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSHIPCOMP)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSHIPCOMP, $this->arcushipcomp);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUTXBL)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUTXBL, $this->arcutxbl);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUPOSTAL)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUPOSTAL, $this->arcupostal);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARTBSHIPVIA)) {
            $criteria->add(ArCustMastTableMap::COL_ARTBSHIPVIA, $this->artbshipvia);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUBORD)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUBORD, $this->arcubord);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARTBTYPECODE)) {
            $criteria->add(ArCustMastTableMap::COL_ARTBTYPECODE, $this->artbtypecode);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARTBPRICCODE)) {
            $criteria->add(ArCustMastTableMap::COL_ARTBPRICCODE, $this->artbpriccode);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARTBCOMMCODE)) {
            $criteria->add(ArCustMastTableMap::COL_ARTBCOMMCODE, $this->artbcommcode);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARTMTERMCD)) {
            $criteria->add(ArCustMastTableMap::COL_ARTMTERMCD, $this->artmtermcd);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCREDLMT)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUCREDLMT, $this->arcucredlmt);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSTMTCODE)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSTMTCODE, $this->arcustmtcode);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCREDHOLD)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUCREDHOLD, $this->arcucredhold);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUFINCHRG)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUFINCHRG, $this->arcufinchrg);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUUSERCODE)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUUSERCODE, $this->arcuusercode);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUNEWFC)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUNEWFC, $this->arcunewfc);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUUNPDFC)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUUNPDFC, $this->arcuunpdfc);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCURBAL)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUCURBAL, $this->arcucurbal);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUBALODUE1)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUBALODUE1, $this->arcubalodue1);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUBALODUE2)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUBALODUE2, $this->arcubalodue2);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUBALODUE3)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUBALODUE3, $this->arcubalodue3);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALEMTD)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALEMTD, $this->arcusalemtd);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINVMTD)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINVMTD, $this->arcuinvmtd);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUDATEOPEN)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUDATEOPEN, $this->arcudateopen);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCULASTSALEDATE)) {
            $criteria->add(ArCustMastTableMap::COL_ARCULASTSALEDATE, $this->arculastsaledate);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUHIGHBAL)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUHIGHBAL, $this->arcuhighbal);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUBIGSALEMO)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUBIGSALEMO, $this->arcubigsalemo);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCULASTPAYDATE)) {
            $criteria->add(ArCustMastTableMap::COL_ARCULASTPAYDATE, $this->arculastpaydate);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUAVGPAYDAYS)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUAVGPAYDAYS, $this->arcuavgpaydays);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUUPSZONE)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUUPSZONE, $this->arcuupszone);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUHIGHBALDATE)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUHIGHBALDATE, $this->arcuhighbaldate);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO1)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO1, $this->arcusale24mo1);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO1)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO1, $this->arcuinv24mo1);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO2)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO2, $this->arcusale24mo2);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO2)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO2, $this->arcuinv24mo2);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO3)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO3, $this->arcusale24mo3);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO3)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO3, $this->arcuinv24mo3);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO4)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO4, $this->arcusale24mo4);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO4)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO4, $this->arcuinv24mo4);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO5)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO5, $this->arcusale24mo5);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO5)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO5, $this->arcuinv24mo5);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO6)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO6, $this->arcusale24mo6);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO6)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO6, $this->arcuinv24mo6);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO7)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO7, $this->arcusale24mo7);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO7)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO7, $this->arcuinv24mo7);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO8)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO8, $this->arcusale24mo8);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO8)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO8, $this->arcuinv24mo8);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO9)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO9, $this->arcusale24mo9);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO9)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO9, $this->arcuinv24mo9);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO10)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO10, $this->arcusale24mo10);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO10)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO10, $this->arcuinv24mo10);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO11)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO11, $this->arcusale24mo11);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO11)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO11, $this->arcuinv24mo11);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO12)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO12, $this->arcusale24mo12);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO12)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO12, $this->arcuinv24mo12);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO13)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO13, $this->arcusale24mo13);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO13)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO13, $this->arcuinv24mo13);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO14)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO14, $this->arcusale24mo14);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO14)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO14, $this->arcuinv24mo14);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO15)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO15, $this->arcusale24mo15);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO15)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO15, $this->arcuinv24mo15);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO16)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO16, $this->arcusale24mo16);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO16)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO16, $this->arcuinv24mo16);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO17)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO17, $this->arcusale24mo17);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO17)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO17, $this->arcuinv24mo17);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO18)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO18, $this->arcusale24mo18);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO18)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO18, $this->arcuinv24mo18);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO19)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO19, $this->arcusale24mo19);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO19)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO19, $this->arcuinv24mo19);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO20)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO20, $this->arcusale24mo20);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO20)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO20, $this->arcuinv24mo20);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO21)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO21, $this->arcusale24mo21);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO21)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO21, $this->arcuinv24mo21);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO22)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO22, $this->arcusale24mo22);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO22)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO22, $this->arcuinv24mo22);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO23)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO23, $this->arcusale24mo23);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO23)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO23, $this->arcuinv24mo23);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSALE24MO24)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSALE24MO24, $this->arcusale24mo24);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUINV24MO24)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUINV24MO24, $this->arcuinv24mo24);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCULASTPAYAMT)) {
            $criteria->add(ArCustMastTableMap::COL_ARCULASTPAYAMT, $this->arculastpayamt);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUORDRTOT)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUORDRTOT, $this->arcuordrtot);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUUSEFRTIN)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUUSEFRTIN, $this->arcuusefrtin);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUMYVENDID)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUMYVENDID, $this->arcumyvendid);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUADDLPRICDISC)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUADDLPRICDISC, $this->arcuaddlpricdisc);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCHRGFRT)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUCHRGFRT, $this->arcuchrgfrt);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCOREXDAYS)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUCOREXDAYS, $this->arcucorexdays);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCONTRACTNBR)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUCONTRACTNBR, $this->arcucontractnbr);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCORELF)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUCORELF, $this->arcucorelf);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUCOREBANKID)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUCOREBANKID, $this->arcucorebankid);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUDUNSNBR)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUDUNSNBR, $this->arcudunsnbr);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCURFMLVALU)) {
            $criteria->add(ArCustMastTableMap::COL_ARCURFMLVALU, $this->arcurfmlvalu);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUFORCECUSTPO)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUFORCECUSTPO, $this->arcuforcecustpo);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUAGELEVEL)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUAGELEVEL, $this->arcuagelevel);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARTBROUTE)) {
            $criteria->add(ArCustMastTableMap::COL_ARTBROUTE, $this->artbroute);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUWGTAXCODE)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUWGTAXCODE, $this->arcuwgtaxcode);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUACPTSUPERCEDE)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUACPTSUPERCEDE, $this->arcuacptsupercede);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUMSTRCUSTID)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUMSTRCUSTID, $this->arcumstrcustid);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUSURCHGPCT)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUSURCHGPCT, $this->arcusurchgpct);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUFRGTSPLIT)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUFRGTSPLIT, $this->arcufrgtsplit);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCULINEMIN)) {
            $criteria->add(ArCustMastTableMap::COL_ARCULINEMIN, $this->arculinemin);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_ARCUORDRMIN)) {
            $criteria->add(ArCustMastTableMap::COL_ARCUORDRMIN, $this->arcuordrmin);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_DATEUPDTD)) {
            $criteria->add(ArCustMastTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ArCustMastTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ArCustMastTableMap::COL_DUMMY)) {
            $criteria->add(ArCustMastTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildArCustMastQuery::create();
        $criteria->add(ArCustMastTableMap::COL_ARCUCUSTID, $this->arcucustid);

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
        $validPk = null !== $this->getArcucustid();

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
        return $this->getArcucustid();
    }

    /**
     * Generic method to set the primary key (arcucustid column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setArcucustid($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getArcucustid();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ArCustMast (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setArcuname($this->getArcuname());
        $copyObj->setArcuadr1($this->getArcuadr1());
        $copyObj->setArcuadr2($this->getArcuadr2());
        $copyObj->setArcuadr3($this->getArcuadr3());
        $copyObj->setArcuctry($this->getArcuctry());
        $copyObj->setArcucity($this->getArcucity());
        $copyObj->setArcustat($this->getArcustat());
        $copyObj->setArcuzipcode5($this->getArcuzipcode5());
        $copyObj->setArcuzipcode4($this->getArcuzipcode4());
        $copyObj->setArcuzipcode10($this->getArcuzipcode10());
        $copyObj->setArspsaleper1($this->getArspsaleper1());
        $copyObj->setArspsaleper2($this->getArspsaleper2());
        $copyObj->setArspsaleper3($this->getArspsaleper3());
        $copyObj->setArtbmtaxcode($this->getArtbmtaxcode());
        $copyObj->setArcutaxexemnbr($this->getArcutaxexemnbr());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setArcupriclvl($this->getArcupriclvl());
        $copyObj->setArcushipcomp($this->getArcushipcomp());
        $copyObj->setArcutxbl($this->getArcutxbl());
        $copyObj->setArcupostal($this->getArcupostal());
        $copyObj->setArtbshipvia($this->getArtbshipvia());
        $copyObj->setArcubord($this->getArcubord());
        $copyObj->setArtbtypecode($this->getArtbtypecode());
        $copyObj->setArtbpriccode($this->getArtbpriccode());
        $copyObj->setArtbcommcode($this->getArtbcommcode());
        $copyObj->setArtmtermcd($this->getArtmtermcd());
        $copyObj->setArcucredlmt($this->getArcucredlmt());
        $copyObj->setArcustmtcode($this->getArcustmtcode());
        $copyObj->setArcucredhold($this->getArcucredhold());
        $copyObj->setArcufinchrg($this->getArcufinchrg());
        $copyObj->setArcuusercode($this->getArcuusercode());
        $copyObj->setArcunewfc($this->getArcunewfc());
        $copyObj->setArcuunpdfc($this->getArcuunpdfc());
        $copyObj->setArcucurbal($this->getArcucurbal());
        $copyObj->setArcubalodue1($this->getArcubalodue1());
        $copyObj->setArcubalodue2($this->getArcubalodue2());
        $copyObj->setArcubalodue3($this->getArcubalodue3());
        $copyObj->setArcusalemtd($this->getArcusalemtd());
        $copyObj->setArcuinvmtd($this->getArcuinvmtd());
        $copyObj->setArcudateopen($this->getArcudateopen());
        $copyObj->setArculastsaledate($this->getArculastsaledate());
        $copyObj->setArcuhighbal($this->getArcuhighbal());
        $copyObj->setArcubigsalemo($this->getArcubigsalemo());
        $copyObj->setArculastpaydate($this->getArculastpaydate());
        $copyObj->setArcuavgpaydays($this->getArcuavgpaydays());
        $copyObj->setArcuupszone($this->getArcuupszone());
        $copyObj->setArcuhighbaldate($this->getArcuhighbaldate());
        $copyObj->setArcusale24mo1($this->getArcusale24mo1());
        $copyObj->setArcuinv24mo1($this->getArcuinv24mo1());
        $copyObj->setArcusale24mo2($this->getArcusale24mo2());
        $copyObj->setArcuinv24mo2($this->getArcuinv24mo2());
        $copyObj->setArcusale24mo3($this->getArcusale24mo3());
        $copyObj->setArcuinv24mo3($this->getArcuinv24mo3());
        $copyObj->setArcusale24mo4($this->getArcusale24mo4());
        $copyObj->setArcuinv24mo4($this->getArcuinv24mo4());
        $copyObj->setArcusale24mo5($this->getArcusale24mo5());
        $copyObj->setArcuinv24mo5($this->getArcuinv24mo5());
        $copyObj->setArcusale24mo6($this->getArcusale24mo6());
        $copyObj->setArcuinv24mo6($this->getArcuinv24mo6());
        $copyObj->setArcusale24mo7($this->getArcusale24mo7());
        $copyObj->setArcuinv24mo7($this->getArcuinv24mo7());
        $copyObj->setArcusale24mo8($this->getArcusale24mo8());
        $copyObj->setArcuinv24mo8($this->getArcuinv24mo8());
        $copyObj->setArcusale24mo9($this->getArcusale24mo9());
        $copyObj->setArcuinv24mo9($this->getArcuinv24mo9());
        $copyObj->setArcusale24mo10($this->getArcusale24mo10());
        $copyObj->setArcuinv24mo10($this->getArcuinv24mo10());
        $copyObj->setArcusale24mo11($this->getArcusale24mo11());
        $copyObj->setArcuinv24mo11($this->getArcuinv24mo11());
        $copyObj->setArcusale24mo12($this->getArcusale24mo12());
        $copyObj->setArcuinv24mo12($this->getArcuinv24mo12());
        $copyObj->setArcusale24mo13($this->getArcusale24mo13());
        $copyObj->setArcuinv24mo13($this->getArcuinv24mo13());
        $copyObj->setArcusale24mo14($this->getArcusale24mo14());
        $copyObj->setArcuinv24mo14($this->getArcuinv24mo14());
        $copyObj->setArcusale24mo15($this->getArcusale24mo15());
        $copyObj->setArcuinv24mo15($this->getArcuinv24mo15());
        $copyObj->setArcusale24mo16($this->getArcusale24mo16());
        $copyObj->setArcuinv24mo16($this->getArcuinv24mo16());
        $copyObj->setArcusale24mo17($this->getArcusale24mo17());
        $copyObj->setArcuinv24mo17($this->getArcuinv24mo17());
        $copyObj->setArcusale24mo18($this->getArcusale24mo18());
        $copyObj->setArcuinv24mo18($this->getArcuinv24mo18());
        $copyObj->setArcusale24mo19($this->getArcusale24mo19());
        $copyObj->setArcuinv24mo19($this->getArcuinv24mo19());
        $copyObj->setArcusale24mo20($this->getArcusale24mo20());
        $copyObj->setArcuinv24mo20($this->getArcuinv24mo20());
        $copyObj->setArcusale24mo21($this->getArcusale24mo21());
        $copyObj->setArcuinv24mo21($this->getArcuinv24mo21());
        $copyObj->setArcusale24mo22($this->getArcusale24mo22());
        $copyObj->setArcuinv24mo22($this->getArcuinv24mo22());
        $copyObj->setArcusale24mo23($this->getArcusale24mo23());
        $copyObj->setArcuinv24mo23($this->getArcuinv24mo23());
        $copyObj->setArcusale24mo24($this->getArcusale24mo24());
        $copyObj->setArcuinv24mo24($this->getArcuinv24mo24());
        $copyObj->setArculastpayamt($this->getArculastpayamt());
        $copyObj->setArcuordrtot($this->getArcuordrtot());
        $copyObj->setArcuusefrtin($this->getArcuusefrtin());
        $copyObj->setArcumyvendid($this->getArcumyvendid());
        $copyObj->setArcuaddlpricdisc($this->getArcuaddlpricdisc());
        $copyObj->setArcuchrgfrt($this->getArcuchrgfrt());
        $copyObj->setArcucorexdays($this->getArcucorexdays());
        $copyObj->setArcucontractnbr($this->getArcucontractnbr());
        $copyObj->setArcucorelf($this->getArcucorelf());
        $copyObj->setArcucorebankid($this->getArcucorebankid());
        $copyObj->setArcudunsnbr($this->getArcudunsnbr());
        $copyObj->setArcurfmlvalu($this->getArcurfmlvalu());
        $copyObj->setArcuforcecustpo($this->getArcuforcecustpo());
        $copyObj->setArcuagelevel($this->getArcuagelevel());
        $copyObj->setArtbroute($this->getArtbroute());
        $copyObj->setArcuwgtaxcode($this->getArcuwgtaxcode());
        $copyObj->setArcuacptsupercede($this->getArcuacptsupercede());
        $copyObj->setArcumstrcustid($this->getArcumstrcustid());
        $copyObj->setArcusurchgpct($this->getArcusurchgpct());
        $copyObj->setArcufrgtsplit($this->getArcufrgtsplit());
        $copyObj->setArculinemin($this->getArculinemin());
        $copyObj->setArcuordrmin($this->getArcuordrmin());
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
     * @return \ArCustMast Clone of current object.
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
        $this->arcuname = null;
        $this->arcuadr1 = null;
        $this->arcuadr2 = null;
        $this->arcuadr3 = null;
        $this->arcuctry = null;
        $this->arcucity = null;
        $this->arcustat = null;
        $this->arcuzipcode5 = null;
        $this->arcuzipcode4 = null;
        $this->arcuzipcode10 = null;
        $this->arspsaleper1 = null;
        $this->arspsaleper2 = null;
        $this->arspsaleper3 = null;
        $this->artbmtaxcode = null;
        $this->arcutaxexemnbr = null;
        $this->intbwhse = null;
        $this->arcupriclvl = null;
        $this->arcushipcomp = null;
        $this->arcutxbl = null;
        $this->arcupostal = null;
        $this->artbshipvia = null;
        $this->arcubord = null;
        $this->artbtypecode = null;
        $this->artbpriccode = null;
        $this->artbcommcode = null;
        $this->artmtermcd = null;
        $this->arcucredlmt = null;
        $this->arcustmtcode = null;
        $this->arcucredhold = null;
        $this->arcufinchrg = null;
        $this->arcuusercode = null;
        $this->arcunewfc = null;
        $this->arcuunpdfc = null;
        $this->arcucurbal = null;
        $this->arcubalodue1 = null;
        $this->arcubalodue2 = null;
        $this->arcubalodue3 = null;
        $this->arcusalemtd = null;
        $this->arcuinvmtd = null;
        $this->arcudateopen = null;
        $this->arculastsaledate = null;
        $this->arcuhighbal = null;
        $this->arcubigsalemo = null;
        $this->arculastpaydate = null;
        $this->arcuavgpaydays = null;
        $this->arcuupszone = null;
        $this->arcuhighbaldate = null;
        $this->arcusale24mo1 = null;
        $this->arcuinv24mo1 = null;
        $this->arcusale24mo2 = null;
        $this->arcuinv24mo2 = null;
        $this->arcusale24mo3 = null;
        $this->arcuinv24mo3 = null;
        $this->arcusale24mo4 = null;
        $this->arcuinv24mo4 = null;
        $this->arcusale24mo5 = null;
        $this->arcuinv24mo5 = null;
        $this->arcusale24mo6 = null;
        $this->arcuinv24mo6 = null;
        $this->arcusale24mo7 = null;
        $this->arcuinv24mo7 = null;
        $this->arcusale24mo8 = null;
        $this->arcuinv24mo8 = null;
        $this->arcusale24mo9 = null;
        $this->arcuinv24mo9 = null;
        $this->arcusale24mo10 = null;
        $this->arcuinv24mo10 = null;
        $this->arcusale24mo11 = null;
        $this->arcuinv24mo11 = null;
        $this->arcusale24mo12 = null;
        $this->arcuinv24mo12 = null;
        $this->arcusale24mo13 = null;
        $this->arcuinv24mo13 = null;
        $this->arcusale24mo14 = null;
        $this->arcuinv24mo14 = null;
        $this->arcusale24mo15 = null;
        $this->arcuinv24mo15 = null;
        $this->arcusale24mo16 = null;
        $this->arcuinv24mo16 = null;
        $this->arcusale24mo17 = null;
        $this->arcuinv24mo17 = null;
        $this->arcusale24mo18 = null;
        $this->arcuinv24mo18 = null;
        $this->arcusale24mo19 = null;
        $this->arcuinv24mo19 = null;
        $this->arcusale24mo20 = null;
        $this->arcuinv24mo20 = null;
        $this->arcusale24mo21 = null;
        $this->arcuinv24mo21 = null;
        $this->arcusale24mo22 = null;
        $this->arcuinv24mo22 = null;
        $this->arcusale24mo23 = null;
        $this->arcuinv24mo23 = null;
        $this->arcusale24mo24 = null;
        $this->arcuinv24mo24 = null;
        $this->arculastpayamt = null;
        $this->arcuordrtot = null;
        $this->arcuusefrtin = null;
        $this->arcumyvendid = null;
        $this->arcuaddlpricdisc = null;
        $this->arcuchrgfrt = null;
        $this->arcucorexdays = null;
        $this->arcucontractnbr = null;
        $this->arcucorelf = null;
        $this->arcucorebankid = null;
        $this->arcudunsnbr = null;
        $this->arcurfmlvalu = null;
        $this->arcuforcecustpo = null;
        $this->arcuagelevel = null;
        $this->artbroute = null;
        $this->arcuwgtaxcode = null;
        $this->arcuacptsupercede = null;
        $this->arcumstrcustid = null;
        $this->arcusurchgpct = null;
        $this->arcufrgtsplit = null;
        $this->arculinemin = null;
        $this->arcuordrmin = null;
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
        return (string) $this->exportTo(ArCustMastTableMap::DEFAULT_STRING_FORMAT);
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
