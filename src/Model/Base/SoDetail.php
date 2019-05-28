<?php

namespace Base;

use \SoDetailQuery as ChildSoDetailQuery;
use \SoHeader as ChildSoHeader;
use \SoHeaderQuery as ChildSoHeaderQuery;
use \Exception;
use \PDO;
use Map\SoDetailTableMap;
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
 * Base class that represents a row from the 'SO_DETAIL' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class SoDetail implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\SoDetailTableMap';


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
     * The value for the oehdnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oehdnbr;

    /**
     * The value for the oedtline field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oedtline;

    /**
     * The value for the inititemnbr field.
     *
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the oedtdesc field.
     *
     * @var        string
     */
    protected $oedtdesc;

    /**
     * The value for the oedtdesc2 field.
     *
     * @var        string
     */
    protected $oedtdesc2;

    /**
     * The value for the intbwhse field.
     *
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the oedtrqstdate field.
     *
     * @var        int
     */
    protected $oedtrqstdate;

    /**
     * The value for the oedtcancdate field.
     *
     * @var        int
     */
    protected $oedtcancdate;

    /**
     * The value for the oedtshipdate field.
     *
     * @var        int
     */
    protected $oedtshipdate;

    /**
     * The value for the oedtspecordr field.
     *
     * @var        string
     */
    protected $oedtspecordr;

    /**
     * The value for the artbmtaxcode field.
     *
     * @var        string
     */
    protected $artbmtaxcode;

    /**
     * The value for the oedtqtyord field.
     *
     * @var        string
     */
    protected $oedtqtyord;

    /**
     * The value for the oedtqtyship field.
     *
     * @var        string
     */
    protected $oedtqtyship;

    /**
     * The value for the oedtqtyshiptot field.
     *
     * @var        string
     */
    protected $oedtqtyshiptot;

    /**
     * The value for the oedtqtybord field.
     *
     * @var        string
     */
    protected $oedtqtybord;

    /**
     * The value for the oedtpric field.
     *
     * @var        string
     */
    protected $oedtpric;

    /**
     * The value for the oedtcost field.
     *
     * @var        string
     */
    protected $oedtcost;

    /**
     * The value for the oedttaxpcttot field.
     *
     * @var        string
     */
    protected $oedttaxpcttot;

    /**
     * The value for the oedtprictot field.
     *
     * @var        string
     */
    protected $oedtprictot;

    /**
     * The value for the oedtcosttot field.
     *
     * @var        string
     */
    protected $oedtcosttot;

    /**
     * The value for the oedtbrkncaseqty field.
     *
     * @var        int
     */
    protected $oedtbrkncaseqty;

    /**
     * The value for the oedtbin field.
     *
     * @var        string
     */
    protected $oedtbin;

    /**
     * The value for the oedtpersonalcd field.
     *
     * @var        string
     */
    protected $oedtpersonalcd;

    /**
     * The value for the oedtcorepric field.
     *
     * @var        string
     */
    protected $oedtcorepric;

    /**
     * The value for the oedtasstcode field.
     *
     * @var        string
     */
    protected $oedtasstcode;

    /**
     * The value for the oedtasstqty field.
     *
     * @var        string
     */
    protected $oedtasstqty;

    /**
     * The value for the oedtlistpric field.
     *
     * @var        string
     */
    protected $oedtlistpric;

    /**
     * The value for the oedtstancost field.
     *
     * @var        string
     */
    protected $oedtstancost;

    /**
     * The value for the oedtvenditemjob field.
     *
     * @var        string
     */
    protected $oedtvenditemjob;

    /**
     * The value for the apvevendid field.
     *
     * @var        string
     */
    protected $apvevendid;

    /**
     * The value for the oedtnsitemgrup field.
     *
     * @var        string
     */
    protected $oedtnsitemgrup;

    /**
     * The value for the oedtusecode field.
     *
     * @var        string
     */
    protected $oedtusecode;

    /**
     * The value for the oedtnsshipfromid field.
     *
     * @var        string
     */
    protected $oedtnsshipfromid;

    /**
     * The value for the oedtasstovrd field.
     *
     * @var        string
     */
    protected $oedtasstovrd;

    /**
     * The value for the oedtdealflag field.
     *
     * @var        string
     */
    protected $oedtdealflag;

    /**
     * The value for the oedtpickflag field.
     *
     * @var        string
     */
    protected $oedtpickflag;

    /**
     * The value for the oedtmstrtaxcode1 field.
     *
     * @var        string
     */
    protected $oedtmstrtaxcode1;

    /**
     * The value for the oedtmstrtaxpct1 field.
     *
     * @var        string
     */
    protected $oedtmstrtaxpct1;

    /**
     * The value for the oedtmstrtaxcode2 field.
     *
     * @var        string
     */
    protected $oedtmstrtaxcode2;

    /**
     * The value for the oedtmstrtaxpct2 field.
     *
     * @var        string
     */
    protected $oedtmstrtaxpct2;

    /**
     * The value for the oedtmstrtaxcode3 field.
     *
     * @var        string
     */
    protected $oedtmstrtaxcode3;

    /**
     * The value for the oedtmstrtaxpct3 field.
     *
     * @var        string
     */
    protected $oedtmstrtaxpct3;

    /**
     * The value for the oedtmstrtaxcode4 field.
     *
     * @var        string
     */
    protected $oedtmstrtaxcode4;

    /**
     * The value for the oedtmstrtaxpct4 field.
     *
     * @var        string
     */
    protected $oedtmstrtaxpct4;

    /**
     * The value for the oedtmstrtaxcode5 field.
     *
     * @var        string
     */
    protected $oedtmstrtaxcode5;

    /**
     * The value for the oedtmstrtaxpct5 field.
     *
     * @var        string
     */
    protected $oedtmstrtaxpct5;

    /**
     * The value for the oedtmstrtaxcode6 field.
     *
     * @var        string
     */
    protected $oedtmstrtaxcode6;

    /**
     * The value for the oedtmstrtaxpct6 field.
     *
     * @var        string
     */
    protected $oedtmstrtaxpct6;

    /**
     * The value for the oedtmstrtaxcode7 field.
     *
     * @var        string
     */
    protected $oedtmstrtaxcode7;

    /**
     * The value for the oedtmstrtaxpct7 field.
     *
     * @var        string
     */
    protected $oedtmstrtaxpct7;

    /**
     * The value for the oedtmstrtaxcode8 field.
     *
     * @var        string
     */
    protected $oedtmstrtaxcode8;

    /**
     * The value for the oedtmstrtaxpct8 field.
     *
     * @var        string
     */
    protected $oedtmstrtaxpct8;

    /**
     * The value for the oedtmstrtaxcode9 field.
     *
     * @var        string
     */
    protected $oedtmstrtaxcode9;

    /**
     * The value for the oedtmstrtaxpct9 field.
     *
     * @var        string
     */
    protected $oedtmstrtaxpct9;

    /**
     * The value for the oedtbinarea field.
     *
     * @var        string
     */
    protected $oedtbinarea;

    /**
     * The value for the oedtsplitline field.
     *
     * @var        string
     */
    protected $oedtsplitline;

    /**
     * The value for the oedtorigline field.
     *
     * @var        int
     */
    protected $oedtorigline;

    /**
     * The value for the oedtcustcrssref field.
     *
     * @var        string
     */
    protected $oedtcustcrssref;

    /**
     * The value for the intbuomsale field.
     *
     * @var        string
     */
    protected $intbuomsale;

    /**
     * The value for the oedtshipflag field.
     *
     * @var        string
     */
    protected $oedtshipflag;

    /**
     * The value for the oedtkitflag field.
     *
     * @var        string
     */
    protected $oedtkitflag;

    /**
     * The value for the oedtkititemnbr field.
     *
     * @var        string
     */
    protected $oedtkititemnbr;

    /**
     * The value for the oedtbfcost field.
     *
     * @var        string
     */
    protected $oedtbfcost;

    /**
     * The value for the oedtbfmsgcode field.
     *
     * @var        string
     */
    protected $oedtbfmsgcode;

    /**
     * The value for the oedtbfcosttot field.
     *
     * @var        string
     */
    protected $oedtbfcosttot;

    /**
     * The value for the oedtwght field.
     *
     * @var        string
     */
    protected $oedtwght;

    /**
     * The value for the oedtqbpicker field.
     *
     * @var        string
     */
    protected $oedtqbpicker;

    /**
     * The value for the oedtpodetlinenbr field.
     *
     * @var        int
     */
    protected $oedtpodetlinenbr;

    /**
     * The value for the oedtqtytoship field.
     *
     * @var        string
     */
    protected $oedtqtytoship;

    /**
     * The value for the oedtponbr field.
     *
     * @var        int
     */
    protected $oedtponbr;

    /**
     * The value for the oedtporef field.
     *
     * @var        string
     */
    protected $oedtporef;

    /**
     * The value for the oedtfrtin field.
     *
     * @var        string
     */
    protected $oedtfrtin;

    /**
     * The value for the oedtfrtinentered field.
     *
     * @var        string
     */
    protected $oedtfrtinentered;

    /**
     * The value for the oedtprodcmplt field.
     *
     * @var        string
     */
    protected $oedtprodcmplt;

    /**
     * The value for the oedterflag field.
     *
     * @var        string
     */
    protected $oedterflag;

    /**
     * The value for the oedtorigitem field.
     *
     * @var        string
     */
    protected $oedtorigitem;

    /**
     * The value for the oedtsubflag field.
     *
     * @var        string
     */
    protected $oedtsubflag;

    /**
     * The value for the oedtediincomingseq field.
     *
     * @var        int
     */
    protected $oedtediincomingseq;

    /**
     * The value for the oedtspordpoline field.
     *
     * @var        int
     */
    protected $oedtspordpoline;

    /**
     * The value for the oedtcatlgid field.
     *
     * @var        string
     */
    protected $oedtcatlgid;

    /**
     * The value for the oedtdiscpct field.
     *
     * @var        string
     */
    protected $oedtdiscpct;

    /**
     * The value for the oedtdealpush field.
     *
     * @var        string
     */
    protected $oedtdealpush;

    /**
     * The value for the oedtcoreflag field.
     *
     * @var        string
     */
    protected $oedtcoreflag;

    /**
     * The value for the oedtnssalesacct field.
     *
     * @var        string
     */
    protected $oedtnssalesacct;

    /**
     * The value for the oedtcertreqd field.
     *
     * @var        string
     */
    protected $oedtcertreqd;

    /**
     * The value for the oedtaddonsales field.
     *
     * @var        string
     */
    protected $oedtaddonsales;

    /**
     * The value for the oedtbordflag field.
     *
     * @var        string
     */
    protected $oedtbordflag;

    /**
     * The value for the oedtitemref field.
     *
     * @var        string
     */
    protected $oedtitemref;

    /**
     * The value for the oedtwgtaxcode field.
     *
     * @var        string
     */
    protected $oedtwgtaxcode;

    /**
     * The value for the oedtwgprice field.
     *
     * @var        string
     */
    protected $oedtwgprice;

    /**
     * The value for the oedtwgtot field.
     *
     * @var        string
     */
    protected $oedtwgtot;

    /**
     * The value for the oedtcntrqty field.
     *
     * @var        int
     */
    protected $oedtcntrqty;

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
     * @var        ChildSoHeader
     */
    protected $aSoHeader;

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
        $this->oehdnbr = 0;
        $this->oedtline = 0;
    }

    /**
     * Initializes internal state of Base\SoDetail object.
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
     * Compares this with another <code>SoDetail</code> instance.  If
     * <code>obj</code> is an instance of <code>SoDetail</code>, delegates to
     * <code>equals(SoDetail)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|SoDetail The current object, for fluid interface
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
     * Get the [oehdnbr] column value.
     *
     * @return int
     */
    public function getOehdnbr()
    {
        return $this->oehdnbr;
    }

    /**
     * Get the [oedtline] column value.
     *
     * @return int
     */
    public function getOedtline()
    {
        return $this->oedtline;
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
     * Get the [oedtdesc] column value.
     *
     * @return string
     */
    public function getOedtdesc()
    {
        return $this->oedtdesc;
    }

    /**
     * Get the [oedtdesc2] column value.
     *
     * @return string
     */
    public function getOedtdesc2()
    {
        return $this->oedtdesc2;
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
     * Get the [oedtrqstdate] column value.
     *
     * @return int
     */
    public function getOedtrqstdate()
    {
        return $this->oedtrqstdate;
    }

    /**
     * Get the [oedtcancdate] column value.
     *
     * @return int
     */
    public function getOedtcancdate()
    {
        return $this->oedtcancdate;
    }

    /**
     * Get the [oedtshipdate] column value.
     *
     * @return int
     */
    public function getOedtshipdate()
    {
        return $this->oedtshipdate;
    }

    /**
     * Get the [oedtspecordr] column value.
     *
     * @return string
     */
    public function getOedtspecordr()
    {
        return $this->oedtspecordr;
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
     * Get the [oedtqtyord] column value.
     *
     * @return string
     */
    public function getOedtqtyord()
    {
        return $this->oedtqtyord;
    }

    /**
     * Get the [oedtqtyship] column value.
     *
     * @return string
     */
    public function getOedtqtyship()
    {
        return $this->oedtqtyship;
    }

    /**
     * Get the [oedtqtyshiptot] column value.
     *
     * @return string
     */
    public function getOedtqtyshiptot()
    {
        return $this->oedtqtyshiptot;
    }

    /**
     * Get the [oedtqtybord] column value.
     *
     * @return string
     */
    public function getOedtqtybord()
    {
        return $this->oedtqtybord;
    }

    /**
     * Get the [oedtpric] column value.
     *
     * @return string
     */
    public function getOedtpric()
    {
        return $this->oedtpric;
    }

    /**
     * Get the [oedtcost] column value.
     *
     * @return string
     */
    public function getOedtcost()
    {
        return $this->oedtcost;
    }

    /**
     * Get the [oedttaxpcttot] column value.
     *
     * @return string
     */
    public function getOedttaxpcttot()
    {
        return $this->oedttaxpcttot;
    }

    /**
     * Get the [oedtprictot] column value.
     *
     * @return string
     */
    public function getOedtprictot()
    {
        return $this->oedtprictot;
    }

    /**
     * Get the [oedtcosttot] column value.
     *
     * @return string
     */
    public function getOedtcosttot()
    {
        return $this->oedtcosttot;
    }

    /**
     * Get the [oedtbrkncaseqty] column value.
     *
     * @return int
     */
    public function getOedtbrkncaseqty()
    {
        return $this->oedtbrkncaseqty;
    }

    /**
     * Get the [oedtbin] column value.
     *
     * @return string
     */
    public function getOedtbin()
    {
        return $this->oedtbin;
    }

    /**
     * Get the [oedtpersonalcd] column value.
     *
     * @return string
     */
    public function getOedtpersonalcd()
    {
        return $this->oedtpersonalcd;
    }

    /**
     * Get the [oedtcorepric] column value.
     *
     * @return string
     */
    public function getOedtcorepric()
    {
        return $this->oedtcorepric;
    }

    /**
     * Get the [oedtasstcode] column value.
     *
     * @return string
     */
    public function getOedtasstcode()
    {
        return $this->oedtasstcode;
    }

    /**
     * Get the [oedtasstqty] column value.
     *
     * @return string
     */
    public function getOedtasstqty()
    {
        return $this->oedtasstqty;
    }

    /**
     * Get the [oedtlistpric] column value.
     *
     * @return string
     */
    public function getOedtlistpric()
    {
        return $this->oedtlistpric;
    }

    /**
     * Get the [oedtstancost] column value.
     *
     * @return string
     */
    public function getOedtstancost()
    {
        return $this->oedtstancost;
    }

    /**
     * Get the [oedtvenditemjob] column value.
     *
     * @return string
     */
    public function getOedtvenditemjob()
    {
        return $this->oedtvenditemjob;
    }

    /**
     * Get the [apvevendid] column value.
     *
     * @return string
     */
    public function getApvevendid()
    {
        return $this->apvevendid;
    }

    /**
     * Get the [oedtnsitemgrup] column value.
     *
     * @return string
     */
    public function getOedtnsitemgrup()
    {
        return $this->oedtnsitemgrup;
    }

    /**
     * Get the [oedtusecode] column value.
     *
     * @return string
     */
    public function getOedtusecode()
    {
        return $this->oedtusecode;
    }

    /**
     * Get the [oedtnsshipfromid] column value.
     *
     * @return string
     */
    public function getOedtnsshipfromid()
    {
        return $this->oedtnsshipfromid;
    }

    /**
     * Get the [oedtasstovrd] column value.
     *
     * @return string
     */
    public function getOedtasstovrd()
    {
        return $this->oedtasstovrd;
    }

    /**
     * Get the [oedtdealflag] column value.
     *
     * @return string
     */
    public function getOedtdealflag()
    {
        return $this->oedtdealflag;
    }

    /**
     * Get the [oedtpickflag] column value.
     *
     * @return string
     */
    public function getOedtpickflag()
    {
        return $this->oedtpickflag;
    }

    /**
     * Get the [oedtmstrtaxcode1] column value.
     *
     * @return string
     */
    public function getOedtmstrtaxcode1()
    {
        return $this->oedtmstrtaxcode1;
    }

    /**
     * Get the [oedtmstrtaxpct1] column value.
     *
     * @return string
     */
    public function getOedtmstrtaxpct1()
    {
        return $this->oedtmstrtaxpct1;
    }

    /**
     * Get the [oedtmstrtaxcode2] column value.
     *
     * @return string
     */
    public function getOedtmstrtaxcode2()
    {
        return $this->oedtmstrtaxcode2;
    }

    /**
     * Get the [oedtmstrtaxpct2] column value.
     *
     * @return string
     */
    public function getOedtmstrtaxpct2()
    {
        return $this->oedtmstrtaxpct2;
    }

    /**
     * Get the [oedtmstrtaxcode3] column value.
     *
     * @return string
     */
    public function getOedtmstrtaxcode3()
    {
        return $this->oedtmstrtaxcode3;
    }

    /**
     * Get the [oedtmstrtaxpct3] column value.
     *
     * @return string
     */
    public function getOedtmstrtaxpct3()
    {
        return $this->oedtmstrtaxpct3;
    }

    /**
     * Get the [oedtmstrtaxcode4] column value.
     *
     * @return string
     */
    public function getOedtmstrtaxcode4()
    {
        return $this->oedtmstrtaxcode4;
    }

    /**
     * Get the [oedtmstrtaxpct4] column value.
     *
     * @return string
     */
    public function getOedtmstrtaxpct4()
    {
        return $this->oedtmstrtaxpct4;
    }

    /**
     * Get the [oedtmstrtaxcode5] column value.
     *
     * @return string
     */
    public function getOedtmstrtaxcode5()
    {
        return $this->oedtmstrtaxcode5;
    }

    /**
     * Get the [oedtmstrtaxpct5] column value.
     *
     * @return string
     */
    public function getOedtmstrtaxpct5()
    {
        return $this->oedtmstrtaxpct5;
    }

    /**
     * Get the [oedtmstrtaxcode6] column value.
     *
     * @return string
     */
    public function getOedtmstrtaxcode6()
    {
        return $this->oedtmstrtaxcode6;
    }

    /**
     * Get the [oedtmstrtaxpct6] column value.
     *
     * @return string
     */
    public function getOedtmstrtaxpct6()
    {
        return $this->oedtmstrtaxpct6;
    }

    /**
     * Get the [oedtmstrtaxcode7] column value.
     *
     * @return string
     */
    public function getOedtmstrtaxcode7()
    {
        return $this->oedtmstrtaxcode7;
    }

    /**
     * Get the [oedtmstrtaxpct7] column value.
     *
     * @return string
     */
    public function getOedtmstrtaxpct7()
    {
        return $this->oedtmstrtaxpct7;
    }

    /**
     * Get the [oedtmstrtaxcode8] column value.
     *
     * @return string
     */
    public function getOedtmstrtaxcode8()
    {
        return $this->oedtmstrtaxcode8;
    }

    /**
     * Get the [oedtmstrtaxpct8] column value.
     *
     * @return string
     */
    public function getOedtmstrtaxpct8()
    {
        return $this->oedtmstrtaxpct8;
    }

    /**
     * Get the [oedtmstrtaxcode9] column value.
     *
     * @return string
     */
    public function getOedtmstrtaxcode9()
    {
        return $this->oedtmstrtaxcode9;
    }

    /**
     * Get the [oedtmstrtaxpct9] column value.
     *
     * @return string
     */
    public function getOedtmstrtaxpct9()
    {
        return $this->oedtmstrtaxpct9;
    }

    /**
     * Get the [oedtbinarea] column value.
     *
     * @return string
     */
    public function getOedtbinarea()
    {
        return $this->oedtbinarea;
    }

    /**
     * Get the [oedtsplitline] column value.
     *
     * @return string
     */
    public function getOedtsplitline()
    {
        return $this->oedtsplitline;
    }

    /**
     * Get the [oedtorigline] column value.
     *
     * @return int
     */
    public function getOedtorigline()
    {
        return $this->oedtorigline;
    }

    /**
     * Get the [oedtcustcrssref] column value.
     *
     * @return string
     */
    public function getOedtcustcrssref()
    {
        return $this->oedtcustcrssref;
    }

    /**
     * Get the [intbuomsale] column value.
     *
     * @return string
     */
    public function getIntbuomsale()
    {
        return $this->intbuomsale;
    }

    /**
     * Get the [oedtshipflag] column value.
     *
     * @return string
     */
    public function getOedtshipflag()
    {
        return $this->oedtshipflag;
    }

    /**
     * Get the [oedtkitflag] column value.
     *
     * @return string
     */
    public function getOedtkitflag()
    {
        return $this->oedtkitflag;
    }

    /**
     * Get the [oedtkititemnbr] column value.
     *
     * @return string
     */
    public function getOedtkititemnbr()
    {
        return $this->oedtkititemnbr;
    }

    /**
     * Get the [oedtbfcost] column value.
     *
     * @return string
     */
    public function getOedtbfcost()
    {
        return $this->oedtbfcost;
    }

    /**
     * Get the [oedtbfmsgcode] column value.
     *
     * @return string
     */
    public function getOedtbfmsgcode()
    {
        return $this->oedtbfmsgcode;
    }

    /**
     * Get the [oedtbfcosttot] column value.
     *
     * @return string
     */
    public function getOedtbfcosttot()
    {
        return $this->oedtbfcosttot;
    }

    /**
     * Get the [oedtwght] column value.
     *
     * @return string
     */
    public function getOedtwght()
    {
        return $this->oedtwght;
    }

    /**
     * Get the [oedtqbpicker] column value.
     *
     * @return string
     */
    public function getOedtqbpicker()
    {
        return $this->oedtqbpicker;
    }

    /**
     * Get the [oedtpodetlinenbr] column value.
     *
     * @return int
     */
    public function getOedtpodetlinenbr()
    {
        return $this->oedtpodetlinenbr;
    }

    /**
     * Get the [oedtqtytoship] column value.
     *
     * @return string
     */
    public function getOedtqtytoship()
    {
        return $this->oedtqtytoship;
    }

    /**
     * Get the [oedtponbr] column value.
     *
     * @return int
     */
    public function getOedtponbr()
    {
        return $this->oedtponbr;
    }

    /**
     * Get the [oedtporef] column value.
     *
     * @return string
     */
    public function getOedtporef()
    {
        return $this->oedtporef;
    }

    /**
     * Get the [oedtfrtin] column value.
     *
     * @return string
     */
    public function getOedtfrtin()
    {
        return $this->oedtfrtin;
    }

    /**
     * Get the [oedtfrtinentered] column value.
     *
     * @return string
     */
    public function getOedtfrtinentered()
    {
        return $this->oedtfrtinentered;
    }

    /**
     * Get the [oedtprodcmplt] column value.
     *
     * @return string
     */
    public function getOedtprodcmplt()
    {
        return $this->oedtprodcmplt;
    }

    /**
     * Get the [oedterflag] column value.
     *
     * @return string
     */
    public function getOedterflag()
    {
        return $this->oedterflag;
    }

    /**
     * Get the [oedtorigitem] column value.
     *
     * @return string
     */
    public function getOedtorigitem()
    {
        return $this->oedtorigitem;
    }

    /**
     * Get the [oedtsubflag] column value.
     *
     * @return string
     */
    public function getOedtsubflag()
    {
        return $this->oedtsubflag;
    }

    /**
     * Get the [oedtediincomingseq] column value.
     *
     * @return int
     */
    public function getOedtediincomingseq()
    {
        return $this->oedtediincomingseq;
    }

    /**
     * Get the [oedtspordpoline] column value.
     *
     * @return int
     */
    public function getOedtspordpoline()
    {
        return $this->oedtspordpoline;
    }

    /**
     * Get the [oedtcatlgid] column value.
     *
     * @return string
     */
    public function getOedtcatlgid()
    {
        return $this->oedtcatlgid;
    }

    /**
     * Get the [oedtdiscpct] column value.
     *
     * @return string
     */
    public function getOedtdiscpct()
    {
        return $this->oedtdiscpct;
    }

    /**
     * Get the [oedtdealpush] column value.
     *
     * @return string
     */
    public function getOedtdealpush()
    {
        return $this->oedtdealpush;
    }

    /**
     * Get the [oedtcoreflag] column value.
     *
     * @return string
     */
    public function getOedtcoreflag()
    {
        return $this->oedtcoreflag;
    }

    /**
     * Get the [oedtnssalesacct] column value.
     *
     * @return string
     */
    public function getOedtnssalesacct()
    {
        return $this->oedtnssalesacct;
    }

    /**
     * Get the [oedtcertreqd] column value.
     *
     * @return string
     */
    public function getOedtcertreqd()
    {
        return $this->oedtcertreqd;
    }

    /**
     * Get the [oedtaddonsales] column value.
     *
     * @return string
     */
    public function getOedtaddonsales()
    {
        return $this->oedtaddonsales;
    }

    /**
     * Get the [oedtbordflag] column value.
     *
     * @return string
     */
    public function getOedtbordflag()
    {
        return $this->oedtbordflag;
    }

    /**
     * Get the [oedtitemref] column value.
     *
     * @return string
     */
    public function getOedtitemref()
    {
        return $this->oedtitemref;
    }

    /**
     * Get the [oedtwgtaxcode] column value.
     *
     * @return string
     */
    public function getOedtwgtaxcode()
    {
        return $this->oedtwgtaxcode;
    }

    /**
     * Get the [oedtwgprice] column value.
     *
     * @return string
     */
    public function getOedtwgprice()
    {
        return $this->oedtwgprice;
    }

    /**
     * Get the [oedtwgtot] column value.
     *
     * @return string
     */
    public function getOedtwgtot()
    {
        return $this->oedtwgtot;
    }

    /**
     * Get the [oedtcntrqty] column value.
     *
     * @return int
     */
    public function getOedtcntrqty()
    {
        return $this->oedtcntrqty;
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
     * Set the value of [oehdnbr] column.
     *
     * @param int $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOehdnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdnbr !== $v) {
            $this->oehdnbr = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEHDNBR] = true;
        }

        if ($this->aSoHeader !== null && $this->aSoHeader->getOehdnbr() !== $v) {
            $this->aSoHeader = null;
        }

        return $this;
    } // setOehdnbr()

    /**
     * Set the value of [oedtline] column.
     *
     * @param int $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedtline !== $v) {
            $this->oedtline = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTLINE] = true;
        }

        return $this;
    } // setOedtline()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_INITITEMNBR] = true;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [oedtdesc] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtdesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtdesc !== $v) {
            $this->oedtdesc = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTDESC] = true;
        }

        return $this;
    } // setOedtdesc()

    /**
     * Set the value of [oedtdesc2] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtdesc2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtdesc2 !== $v) {
            $this->oedtdesc2 = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTDESC2] = true;
        }

        return $this;
    } // setOedtdesc2()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_INTBWHSE] = true;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [oedtrqstdate] column.
     *
     * @param int $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtrqstdate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedtrqstdate !== $v) {
            $this->oedtrqstdate = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTRQSTDATE] = true;
        }

        return $this;
    } // setOedtrqstdate()

    /**
     * Set the value of [oedtcancdate] column.
     *
     * @param int $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtcancdate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedtcancdate !== $v) {
            $this->oedtcancdate = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTCANCDATE] = true;
        }

        return $this;
    } // setOedtcancdate()

    /**
     * Set the value of [oedtshipdate] column.
     *
     * @param int $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtshipdate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedtshipdate !== $v) {
            $this->oedtshipdate = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTSHIPDATE] = true;
        }

        return $this;
    } // setOedtshipdate()

    /**
     * Set the value of [oedtspecordr] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtspecordr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtspecordr !== $v) {
            $this->oedtspecordr = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTSPECORDR] = true;
        }

        return $this;
    } // setOedtspecordr()

    /**
     * Set the value of [artbmtaxcode] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setArtbmtaxcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxcode !== $v) {
            $this->artbmtaxcode = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_ARTBMTAXCODE] = true;
        }

        return $this;
    } // setArtbmtaxcode()

    /**
     * Set the value of [oedtqtyord] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtqtyord($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtqtyord !== $v) {
            $this->oedtqtyord = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTQTYORD] = true;
        }

        return $this;
    } // setOedtqtyord()

    /**
     * Set the value of [oedtqtyship] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtqtyship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtqtyship !== $v) {
            $this->oedtqtyship = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTQTYSHIP] = true;
        }

        return $this;
    } // setOedtqtyship()

    /**
     * Set the value of [oedtqtyshiptot] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtqtyshiptot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtqtyshiptot !== $v) {
            $this->oedtqtyshiptot = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTQTYSHIPTOT] = true;
        }

        return $this;
    } // setOedtqtyshiptot()

    /**
     * Set the value of [oedtqtybord] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtqtybord($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtqtybord !== $v) {
            $this->oedtqtybord = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTQTYBORD] = true;
        }

        return $this;
    } // setOedtqtybord()

    /**
     * Set the value of [oedtpric] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtpric($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtpric !== $v) {
            $this->oedtpric = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTPRIC] = true;
        }

        return $this;
    } // setOedtpric()

    /**
     * Set the value of [oedtcost] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtcost !== $v) {
            $this->oedtcost = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTCOST] = true;
        }

        return $this;
    } // setOedtcost()

    /**
     * Set the value of [oedttaxpcttot] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedttaxpcttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedttaxpcttot !== $v) {
            $this->oedttaxpcttot = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTTAXPCTTOT] = true;
        }

        return $this;
    } // setOedttaxpcttot()

    /**
     * Set the value of [oedtprictot] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtprictot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtprictot !== $v) {
            $this->oedtprictot = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTPRICTOT] = true;
        }

        return $this;
    } // setOedtprictot()

    /**
     * Set the value of [oedtcosttot] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtcosttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtcosttot !== $v) {
            $this->oedtcosttot = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTCOSTTOT] = true;
        }

        return $this;
    } // setOedtcosttot()

    /**
     * Set the value of [oedtbrkncaseqty] column.
     *
     * @param int $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtbrkncaseqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedtbrkncaseqty !== $v) {
            $this->oedtbrkncaseqty = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTBRKNCASEQTY] = true;
        }

        return $this;
    } // setOedtbrkncaseqty()

    /**
     * Set the value of [oedtbin] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtbin !== $v) {
            $this->oedtbin = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTBIN] = true;
        }

        return $this;
    } // setOedtbin()

    /**
     * Set the value of [oedtpersonalcd] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtpersonalcd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtpersonalcd !== $v) {
            $this->oedtpersonalcd = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTPERSONALCD] = true;
        }

        return $this;
    } // setOedtpersonalcd()

    /**
     * Set the value of [oedtcorepric] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtcorepric($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtcorepric !== $v) {
            $this->oedtcorepric = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTCOREPRIC] = true;
        }

        return $this;
    } // setOedtcorepric()

    /**
     * Set the value of [oedtasstcode] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtasstcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtasstcode !== $v) {
            $this->oedtasstcode = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTASSTCODE] = true;
        }

        return $this;
    } // setOedtasstcode()

    /**
     * Set the value of [oedtasstqty] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtasstqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtasstqty !== $v) {
            $this->oedtasstqty = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTASSTQTY] = true;
        }

        return $this;
    } // setOedtasstqty()

    /**
     * Set the value of [oedtlistpric] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtlistpric($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtlistpric !== $v) {
            $this->oedtlistpric = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTLISTPRIC] = true;
        }

        return $this;
    } // setOedtlistpric()

    /**
     * Set the value of [oedtstancost] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtstancost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtstancost !== $v) {
            $this->oedtstancost = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTSTANCOST] = true;
        }

        return $this;
    } // setOedtstancost()

    /**
     * Set the value of [oedtvenditemjob] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtvenditemjob($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtvenditemjob !== $v) {
            $this->oedtvenditemjob = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTVENDITEMJOB] = true;
        }

        return $this;
    } // setOedtvenditemjob()

    /**
     * Set the value of [apvevendid] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setApvevendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvevendid !== $v) {
            $this->apvevendid = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_APVEVENDID] = true;
        }

        return $this;
    } // setApvevendid()

    /**
     * Set the value of [oedtnsitemgrup] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtnsitemgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtnsitemgrup !== $v) {
            $this->oedtnsitemgrup = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTNSITEMGRUP] = true;
        }

        return $this;
    } // setOedtnsitemgrup()

    /**
     * Set the value of [oedtusecode] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtusecode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtusecode !== $v) {
            $this->oedtusecode = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTUSECODE] = true;
        }

        return $this;
    } // setOedtusecode()

    /**
     * Set the value of [oedtnsshipfromid] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtnsshipfromid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtnsshipfromid !== $v) {
            $this->oedtnsshipfromid = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTNSSHIPFROMID] = true;
        }

        return $this;
    } // setOedtnsshipfromid()

    /**
     * Set the value of [oedtasstovrd] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtasstovrd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtasstovrd !== $v) {
            $this->oedtasstovrd = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTASSTOVRD] = true;
        }

        return $this;
    } // setOedtasstovrd()

    /**
     * Set the value of [oedtdealflag] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtdealflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtdealflag !== $v) {
            $this->oedtdealflag = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTDEALFLAG] = true;
        }

        return $this;
    } // setOedtdealflag()

    /**
     * Set the value of [oedtpickflag] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtpickflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtpickflag !== $v) {
            $this->oedtpickflag = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTPICKFLAG] = true;
        }

        return $this;
    } // setOedtpickflag()

    /**
     * Set the value of [oedtmstrtaxcode1] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtmstrtaxcode1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtmstrtaxcode1 !== $v) {
            $this->oedtmstrtaxcode1 = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTMSTRTAXCODE1] = true;
        }

        return $this;
    } // setOedtmstrtaxcode1()

    /**
     * Set the value of [oedtmstrtaxpct1] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtmstrtaxpct1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtmstrtaxpct1 !== $v) {
            $this->oedtmstrtaxpct1 = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTMSTRTAXPCT1] = true;
        }

        return $this;
    } // setOedtmstrtaxpct1()

    /**
     * Set the value of [oedtmstrtaxcode2] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtmstrtaxcode2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtmstrtaxcode2 !== $v) {
            $this->oedtmstrtaxcode2 = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTMSTRTAXCODE2] = true;
        }

        return $this;
    } // setOedtmstrtaxcode2()

    /**
     * Set the value of [oedtmstrtaxpct2] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtmstrtaxpct2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtmstrtaxpct2 !== $v) {
            $this->oedtmstrtaxpct2 = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTMSTRTAXPCT2] = true;
        }

        return $this;
    } // setOedtmstrtaxpct2()

    /**
     * Set the value of [oedtmstrtaxcode3] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtmstrtaxcode3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtmstrtaxcode3 !== $v) {
            $this->oedtmstrtaxcode3 = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTMSTRTAXCODE3] = true;
        }

        return $this;
    } // setOedtmstrtaxcode3()

    /**
     * Set the value of [oedtmstrtaxpct3] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtmstrtaxpct3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtmstrtaxpct3 !== $v) {
            $this->oedtmstrtaxpct3 = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTMSTRTAXPCT3] = true;
        }

        return $this;
    } // setOedtmstrtaxpct3()

    /**
     * Set the value of [oedtmstrtaxcode4] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtmstrtaxcode4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtmstrtaxcode4 !== $v) {
            $this->oedtmstrtaxcode4 = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTMSTRTAXCODE4] = true;
        }

        return $this;
    } // setOedtmstrtaxcode4()

    /**
     * Set the value of [oedtmstrtaxpct4] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtmstrtaxpct4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtmstrtaxpct4 !== $v) {
            $this->oedtmstrtaxpct4 = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTMSTRTAXPCT4] = true;
        }

        return $this;
    } // setOedtmstrtaxpct4()

    /**
     * Set the value of [oedtmstrtaxcode5] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtmstrtaxcode5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtmstrtaxcode5 !== $v) {
            $this->oedtmstrtaxcode5 = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTMSTRTAXCODE5] = true;
        }

        return $this;
    } // setOedtmstrtaxcode5()

    /**
     * Set the value of [oedtmstrtaxpct5] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtmstrtaxpct5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtmstrtaxpct5 !== $v) {
            $this->oedtmstrtaxpct5 = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTMSTRTAXPCT5] = true;
        }

        return $this;
    } // setOedtmstrtaxpct5()

    /**
     * Set the value of [oedtmstrtaxcode6] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtmstrtaxcode6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtmstrtaxcode6 !== $v) {
            $this->oedtmstrtaxcode6 = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTMSTRTAXCODE6] = true;
        }

        return $this;
    } // setOedtmstrtaxcode6()

    /**
     * Set the value of [oedtmstrtaxpct6] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtmstrtaxpct6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtmstrtaxpct6 !== $v) {
            $this->oedtmstrtaxpct6 = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTMSTRTAXPCT6] = true;
        }

        return $this;
    } // setOedtmstrtaxpct6()

    /**
     * Set the value of [oedtmstrtaxcode7] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtmstrtaxcode7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtmstrtaxcode7 !== $v) {
            $this->oedtmstrtaxcode7 = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTMSTRTAXCODE7] = true;
        }

        return $this;
    } // setOedtmstrtaxcode7()

    /**
     * Set the value of [oedtmstrtaxpct7] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtmstrtaxpct7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtmstrtaxpct7 !== $v) {
            $this->oedtmstrtaxpct7 = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTMSTRTAXPCT7] = true;
        }

        return $this;
    } // setOedtmstrtaxpct7()

    /**
     * Set the value of [oedtmstrtaxcode8] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtmstrtaxcode8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtmstrtaxcode8 !== $v) {
            $this->oedtmstrtaxcode8 = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTMSTRTAXCODE8] = true;
        }

        return $this;
    } // setOedtmstrtaxcode8()

    /**
     * Set the value of [oedtmstrtaxpct8] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtmstrtaxpct8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtmstrtaxpct8 !== $v) {
            $this->oedtmstrtaxpct8 = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTMSTRTAXPCT8] = true;
        }

        return $this;
    } // setOedtmstrtaxpct8()

    /**
     * Set the value of [oedtmstrtaxcode9] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtmstrtaxcode9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtmstrtaxcode9 !== $v) {
            $this->oedtmstrtaxcode9 = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTMSTRTAXCODE9] = true;
        }

        return $this;
    } // setOedtmstrtaxcode9()

    /**
     * Set the value of [oedtmstrtaxpct9] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtmstrtaxpct9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtmstrtaxpct9 !== $v) {
            $this->oedtmstrtaxpct9 = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTMSTRTAXPCT9] = true;
        }

        return $this;
    } // setOedtmstrtaxpct9()

    /**
     * Set the value of [oedtbinarea] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtbinarea($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtbinarea !== $v) {
            $this->oedtbinarea = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTBINAREA] = true;
        }

        return $this;
    } // setOedtbinarea()

    /**
     * Set the value of [oedtsplitline] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtsplitline($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtsplitline !== $v) {
            $this->oedtsplitline = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTSPLITLINE] = true;
        }

        return $this;
    } // setOedtsplitline()

    /**
     * Set the value of [oedtorigline] column.
     *
     * @param int $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtorigline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedtorigline !== $v) {
            $this->oedtorigline = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTORIGLINE] = true;
        }

        return $this;
    } // setOedtorigline()

    /**
     * Set the value of [oedtcustcrssref] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtcustcrssref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtcustcrssref !== $v) {
            $this->oedtcustcrssref = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTCUSTCRSSREF] = true;
        }

        return $this;
    } // setOedtcustcrssref()

    /**
     * Set the value of [intbuomsale] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setIntbuomsale($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbuomsale !== $v) {
            $this->intbuomsale = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_INTBUOMSALE] = true;
        }

        return $this;
    } // setIntbuomsale()

    /**
     * Set the value of [oedtshipflag] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtshipflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtshipflag !== $v) {
            $this->oedtshipflag = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTSHIPFLAG] = true;
        }

        return $this;
    } // setOedtshipflag()

    /**
     * Set the value of [oedtkitflag] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtkitflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtkitflag !== $v) {
            $this->oedtkitflag = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTKITFLAG] = true;
        }

        return $this;
    } // setOedtkitflag()

    /**
     * Set the value of [oedtkititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtkititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtkititemnbr !== $v) {
            $this->oedtkititemnbr = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTKITITEMNBR] = true;
        }

        return $this;
    } // setOedtkititemnbr()

    /**
     * Set the value of [oedtbfcost] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtbfcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtbfcost !== $v) {
            $this->oedtbfcost = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTBFCOST] = true;
        }

        return $this;
    } // setOedtbfcost()

    /**
     * Set the value of [oedtbfmsgcode] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtbfmsgcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtbfmsgcode !== $v) {
            $this->oedtbfmsgcode = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTBFMSGCODE] = true;
        }

        return $this;
    } // setOedtbfmsgcode()

    /**
     * Set the value of [oedtbfcosttot] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtbfcosttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtbfcosttot !== $v) {
            $this->oedtbfcosttot = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTBFCOSTTOT] = true;
        }

        return $this;
    } // setOedtbfcosttot()

    /**
     * Set the value of [oedtwght] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtwght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtwght !== $v) {
            $this->oedtwght = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTWGHT] = true;
        }

        return $this;
    } // setOedtwght()

    /**
     * Set the value of [oedtqbpicker] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtqbpicker($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtqbpicker !== $v) {
            $this->oedtqbpicker = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTQBPICKER] = true;
        }

        return $this;
    } // setOedtqbpicker()

    /**
     * Set the value of [oedtpodetlinenbr] column.
     *
     * @param int $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtpodetlinenbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedtpodetlinenbr !== $v) {
            $this->oedtpodetlinenbr = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTPODETLINENBR] = true;
        }

        return $this;
    } // setOedtpodetlinenbr()

    /**
     * Set the value of [oedtqtytoship] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtqtytoship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtqtytoship !== $v) {
            $this->oedtqtytoship = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTQTYTOSHIP] = true;
        }

        return $this;
    } // setOedtqtytoship()

    /**
     * Set the value of [oedtponbr] column.
     *
     * @param int $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtponbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedtponbr !== $v) {
            $this->oedtponbr = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTPONBR] = true;
        }

        return $this;
    } // setOedtponbr()

    /**
     * Set the value of [oedtporef] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtporef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtporef !== $v) {
            $this->oedtporef = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTPOREF] = true;
        }

        return $this;
    } // setOedtporef()

    /**
     * Set the value of [oedtfrtin] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtfrtin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtfrtin !== $v) {
            $this->oedtfrtin = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTFRTIN] = true;
        }

        return $this;
    } // setOedtfrtin()

    /**
     * Set the value of [oedtfrtinentered] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtfrtinentered($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtfrtinentered !== $v) {
            $this->oedtfrtinentered = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTFRTINENTERED] = true;
        }

        return $this;
    } // setOedtfrtinentered()

    /**
     * Set the value of [oedtprodcmplt] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtprodcmplt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtprodcmplt !== $v) {
            $this->oedtprodcmplt = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTPRODCMPLT] = true;
        }

        return $this;
    } // setOedtprodcmplt()

    /**
     * Set the value of [oedterflag] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedterflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedterflag !== $v) {
            $this->oedterflag = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTERFLAG] = true;
        }

        return $this;
    } // setOedterflag()

    /**
     * Set the value of [oedtorigitem] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtorigitem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtorigitem !== $v) {
            $this->oedtorigitem = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTORIGITEM] = true;
        }

        return $this;
    } // setOedtorigitem()

    /**
     * Set the value of [oedtsubflag] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtsubflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtsubflag !== $v) {
            $this->oedtsubflag = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTSUBFLAG] = true;
        }

        return $this;
    } // setOedtsubflag()

    /**
     * Set the value of [oedtediincomingseq] column.
     *
     * @param int $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtediincomingseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedtediincomingseq !== $v) {
            $this->oedtediincomingseq = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTEDIINCOMINGSEQ] = true;
        }

        return $this;
    } // setOedtediincomingseq()

    /**
     * Set the value of [oedtspordpoline] column.
     *
     * @param int $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtspordpoline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedtspordpoline !== $v) {
            $this->oedtspordpoline = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTSPORDPOLINE] = true;
        }

        return $this;
    } // setOedtspordpoline()

    /**
     * Set the value of [oedtcatlgid] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtcatlgid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtcatlgid !== $v) {
            $this->oedtcatlgid = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTCATLGID] = true;
        }

        return $this;
    } // setOedtcatlgid()

    /**
     * Set the value of [oedtdiscpct] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtdiscpct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtdiscpct !== $v) {
            $this->oedtdiscpct = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTDISCPCT] = true;
        }

        return $this;
    } // setOedtdiscpct()

    /**
     * Set the value of [oedtdealpush] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtdealpush($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtdealpush !== $v) {
            $this->oedtdealpush = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTDEALPUSH] = true;
        }

        return $this;
    } // setOedtdealpush()

    /**
     * Set the value of [oedtcoreflag] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtcoreflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtcoreflag !== $v) {
            $this->oedtcoreflag = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTCOREFLAG] = true;
        }

        return $this;
    } // setOedtcoreflag()

    /**
     * Set the value of [oedtnssalesacct] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtnssalesacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtnssalesacct !== $v) {
            $this->oedtnssalesacct = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTNSSALESACCT] = true;
        }

        return $this;
    } // setOedtnssalesacct()

    /**
     * Set the value of [oedtcertreqd] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtcertreqd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtcertreqd !== $v) {
            $this->oedtcertreqd = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTCERTREQD] = true;
        }

        return $this;
    } // setOedtcertreqd()

    /**
     * Set the value of [oedtaddonsales] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtaddonsales($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtaddonsales !== $v) {
            $this->oedtaddonsales = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTADDONSALES] = true;
        }

        return $this;
    } // setOedtaddonsales()

    /**
     * Set the value of [oedtbordflag] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtbordflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtbordflag !== $v) {
            $this->oedtbordflag = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTBORDFLAG] = true;
        }

        return $this;
    } // setOedtbordflag()

    /**
     * Set the value of [oedtitemref] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtitemref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtitemref !== $v) {
            $this->oedtitemref = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTITEMREF] = true;
        }

        return $this;
    } // setOedtitemref()

    /**
     * Set the value of [oedtwgtaxcode] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtwgtaxcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtwgtaxcode !== $v) {
            $this->oedtwgtaxcode = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTWGTAXCODE] = true;
        }

        return $this;
    } // setOedtwgtaxcode()

    /**
     * Set the value of [oedtwgprice] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtwgprice($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtwgprice !== $v) {
            $this->oedtwgprice = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTWGPRICE] = true;
        }

        return $this;
    } // setOedtwgprice()

    /**
     * Set the value of [oedtwgtot] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtwgtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedtwgtot !== $v) {
            $this->oedtwgtot = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTWGTOT] = true;
        }

        return $this;
    } // setOedtwgtot()

    /**
     * Set the value of [oedtcntrqty] column.
     *
     * @param int $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setOedtcntrqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedtcntrqty !== $v) {
            $this->oedtcntrqty = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_OEDTCNTRQTY] = true;
        }

        return $this;
    } // setOedtcntrqty()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param int $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param int $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\SoDetail The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[SoDetailTableMap::COL_DUMMY] = true;
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
            if ($this->oehdnbr !== 0) {
                return false;
            }

            if ($this->oedtline !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SoDetailTableMap::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SoDetailTableMap::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SoDetailTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SoDetailTableMap::translateFieldName('Oedtdesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtdesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SoDetailTableMap::translateFieldName('Oedtdesc2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtdesc2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SoDetailTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SoDetailTableMap::translateFieldName('Oedtrqstdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtrqstdate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SoDetailTableMap::translateFieldName('Oedtcancdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtcancdate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : SoDetailTableMap::translateFieldName('Oedtshipdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtshipdate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : SoDetailTableMap::translateFieldName('Oedtspecordr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtspecordr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : SoDetailTableMap::translateFieldName('Artbmtaxcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : SoDetailTableMap::translateFieldName('Oedtqtyord', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtqtyord = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : SoDetailTableMap::translateFieldName('Oedtqtyship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtqtyship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : SoDetailTableMap::translateFieldName('Oedtqtyshiptot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtqtyshiptot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : SoDetailTableMap::translateFieldName('Oedtqtybord', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtqtybord = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : SoDetailTableMap::translateFieldName('Oedtpric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtpric = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : SoDetailTableMap::translateFieldName('Oedtcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : SoDetailTableMap::translateFieldName('Oedttaxpcttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedttaxpcttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : SoDetailTableMap::translateFieldName('Oedtprictot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtprictot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : SoDetailTableMap::translateFieldName('Oedtcosttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtcosttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : SoDetailTableMap::translateFieldName('Oedtbrkncaseqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtbrkncaseqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : SoDetailTableMap::translateFieldName('Oedtbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : SoDetailTableMap::translateFieldName('Oedtpersonalcd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtpersonalcd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : SoDetailTableMap::translateFieldName('Oedtcorepric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtcorepric = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : SoDetailTableMap::translateFieldName('Oedtasstcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtasstcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : SoDetailTableMap::translateFieldName('Oedtasstqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtasstqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : SoDetailTableMap::translateFieldName('Oedtlistpric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtlistpric = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : SoDetailTableMap::translateFieldName('Oedtstancost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtstancost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : SoDetailTableMap::translateFieldName('Oedtvenditemjob', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtvenditemjob = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : SoDetailTableMap::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvevendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : SoDetailTableMap::translateFieldName('Oedtnsitemgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtnsitemgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : SoDetailTableMap::translateFieldName('Oedtusecode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtusecode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : SoDetailTableMap::translateFieldName('Oedtnsshipfromid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtnsshipfromid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : SoDetailTableMap::translateFieldName('Oedtasstovrd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtasstovrd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : SoDetailTableMap::translateFieldName('Oedtdealflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtdealflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : SoDetailTableMap::translateFieldName('Oedtpickflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtpickflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : SoDetailTableMap::translateFieldName('Oedtmstrtaxcode1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtmstrtaxcode1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : SoDetailTableMap::translateFieldName('Oedtmstrtaxpct1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtmstrtaxpct1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : SoDetailTableMap::translateFieldName('Oedtmstrtaxcode2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtmstrtaxcode2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : SoDetailTableMap::translateFieldName('Oedtmstrtaxpct2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtmstrtaxpct2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : SoDetailTableMap::translateFieldName('Oedtmstrtaxcode3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtmstrtaxcode3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : SoDetailTableMap::translateFieldName('Oedtmstrtaxpct3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtmstrtaxpct3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : SoDetailTableMap::translateFieldName('Oedtmstrtaxcode4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtmstrtaxcode4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : SoDetailTableMap::translateFieldName('Oedtmstrtaxpct4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtmstrtaxpct4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : SoDetailTableMap::translateFieldName('Oedtmstrtaxcode5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtmstrtaxcode5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : SoDetailTableMap::translateFieldName('Oedtmstrtaxpct5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtmstrtaxpct5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : SoDetailTableMap::translateFieldName('Oedtmstrtaxcode6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtmstrtaxcode6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : SoDetailTableMap::translateFieldName('Oedtmstrtaxpct6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtmstrtaxpct6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : SoDetailTableMap::translateFieldName('Oedtmstrtaxcode7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtmstrtaxcode7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : SoDetailTableMap::translateFieldName('Oedtmstrtaxpct7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtmstrtaxpct7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : SoDetailTableMap::translateFieldName('Oedtmstrtaxcode8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtmstrtaxcode8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : SoDetailTableMap::translateFieldName('Oedtmstrtaxpct8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtmstrtaxpct8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : SoDetailTableMap::translateFieldName('Oedtmstrtaxcode9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtmstrtaxcode9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : SoDetailTableMap::translateFieldName('Oedtmstrtaxpct9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtmstrtaxpct9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : SoDetailTableMap::translateFieldName('Oedtbinarea', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtbinarea = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : SoDetailTableMap::translateFieldName('Oedtsplitline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtsplitline = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : SoDetailTableMap::translateFieldName('Oedtorigline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtorigline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : SoDetailTableMap::translateFieldName('Oedtcustcrssref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtcustcrssref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : SoDetailTableMap::translateFieldName('Intbuomsale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbuomsale = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : SoDetailTableMap::translateFieldName('Oedtshipflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtshipflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : SoDetailTableMap::translateFieldName('Oedtkitflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtkitflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : SoDetailTableMap::translateFieldName('Oedtkititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtkititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : SoDetailTableMap::translateFieldName('Oedtbfcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtbfcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : SoDetailTableMap::translateFieldName('Oedtbfmsgcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtbfmsgcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : SoDetailTableMap::translateFieldName('Oedtbfcosttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtbfcosttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : SoDetailTableMap::translateFieldName('Oedtwght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtwght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : SoDetailTableMap::translateFieldName('Oedtqbpicker', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtqbpicker = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : SoDetailTableMap::translateFieldName('Oedtpodetlinenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtpodetlinenbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : SoDetailTableMap::translateFieldName('Oedtqtytoship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtqtytoship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : SoDetailTableMap::translateFieldName('Oedtponbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtponbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 70 + $startcol : SoDetailTableMap::translateFieldName('Oedtporef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtporef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 71 + $startcol : SoDetailTableMap::translateFieldName('Oedtfrtin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtfrtin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 72 + $startcol : SoDetailTableMap::translateFieldName('Oedtfrtinentered', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtfrtinentered = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 73 + $startcol : SoDetailTableMap::translateFieldName('Oedtprodcmplt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtprodcmplt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 74 + $startcol : SoDetailTableMap::translateFieldName('Oedterflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedterflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 75 + $startcol : SoDetailTableMap::translateFieldName('Oedtorigitem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtorigitem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 76 + $startcol : SoDetailTableMap::translateFieldName('Oedtsubflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtsubflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 77 + $startcol : SoDetailTableMap::translateFieldName('Oedtediincomingseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtediincomingseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 78 + $startcol : SoDetailTableMap::translateFieldName('Oedtspordpoline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtspordpoline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 79 + $startcol : SoDetailTableMap::translateFieldName('Oedtcatlgid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtcatlgid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 80 + $startcol : SoDetailTableMap::translateFieldName('Oedtdiscpct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtdiscpct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 81 + $startcol : SoDetailTableMap::translateFieldName('Oedtdealpush', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtdealpush = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 82 + $startcol : SoDetailTableMap::translateFieldName('Oedtcoreflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtcoreflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 83 + $startcol : SoDetailTableMap::translateFieldName('Oedtnssalesacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtnssalesacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 84 + $startcol : SoDetailTableMap::translateFieldName('Oedtcertreqd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtcertreqd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 85 + $startcol : SoDetailTableMap::translateFieldName('Oedtaddonsales', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtaddonsales = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 86 + $startcol : SoDetailTableMap::translateFieldName('Oedtbordflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtbordflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 87 + $startcol : SoDetailTableMap::translateFieldName('Oedtitemref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtitemref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 88 + $startcol : SoDetailTableMap::translateFieldName('Oedtwgtaxcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtwgtaxcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 89 + $startcol : SoDetailTableMap::translateFieldName('Oedtwgprice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtwgprice = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 90 + $startcol : SoDetailTableMap::translateFieldName('Oedtwgtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtwgtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 91 + $startcol : SoDetailTableMap::translateFieldName('Oedtcntrqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedtcntrqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 92 + $startcol : SoDetailTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 93 + $startcol : SoDetailTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 94 + $startcol : SoDetailTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 95; // 95 = SoDetailTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\SoDetail'), 0, $e);
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
        if ($this->aSoHeader !== null && $this->oehdnbr !== $this->aSoHeader->getOehdnbr()) {
            $this->aSoHeader = null;
        }
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
            $con = Propel::getServiceContainer()->getReadConnection(SoDetailTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSoDetailQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSoHeader = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SoDetail::setDeleted()
     * @see SoDetail::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoDetailTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSoDetailQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SoDetailTableMap::DATABASE_NAME);
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
                SoDetailTableMap::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aSoHeader !== null) {
                if ($this->aSoHeader->isModified() || $this->aSoHeader->isNew()) {
                    $affectedRows += $this->aSoHeader->save($con);
                }
                $this->setSoHeader($this->aSoHeader);
            }

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
        if ($this->isColumnModified(SoDetailTableMap::COL_OEHDNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdNbr';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTLINE)) {
            $modifiedColumns[':p' . $index++]  = 'OedtLine';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTDESC)) {
            $modifiedColumns[':p' . $index++]  = 'OedtDesc';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTDESC2)) {
            $modifiedColumns[':p' . $index++]  = 'OedtDesc2';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTRQSTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OedtRqstDate';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTCANCDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OedtCancDate';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTSHIPDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OedtShipDate';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTSPECORDR)) {
            $modifiedColumns[':p' . $index++]  = 'OedtSpecOrdr';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_ARTBMTAXCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMTaxCode';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTQTYORD)) {
            $modifiedColumns[':p' . $index++]  = 'OedtQtyOrd';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTQTYSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'OedtQtyShip';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTQTYSHIPTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OedtQtyShipTot';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTQTYBORD)) {
            $modifiedColumns[':p' . $index++]  = 'OedtQtyBord';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'OedtPric';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTCOST)) {
            $modifiedColumns[':p' . $index++]  = 'OedtCost';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTTAXPCTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OedtTaxPctTot';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTPRICTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OedtPricTot';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTCOSTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OedtCostTot';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTBRKNCASEQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OedtBrknCaseQty';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTBIN)) {
            $modifiedColumns[':p' . $index++]  = 'OedtBin';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTPERSONALCD)) {
            $modifiedColumns[':p' . $index++]  = 'OedtPersonalCd';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTCOREPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'OedtCorePric';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTASSTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OedtAsstCode';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTASSTQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OedtAsstQty';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTLISTPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'OedtListPric';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTSTANCOST)) {
            $modifiedColumns[':p' . $index++]  = 'OedtStanCost';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTVENDITEMJOB)) {
            $modifiedColumns[':p' . $index++]  = 'OedtVendItemJob';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_APVEVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'ApveVendId';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTNSITEMGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'OedtNsItemGrup';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTUSECODE)) {
            $modifiedColumns[':p' . $index++]  = 'OedtUseCode';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTNSSHIPFROMID)) {
            $modifiedColumns[':p' . $index++]  = 'OedtNsShipFromId';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTASSTOVRD)) {
            $modifiedColumns[':p' . $index++]  = 'OedtAsstOvrd';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTDEALFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OedtDealFlag';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTPICKFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OedtPickFlag';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXCODE1)) {
            $modifiedColumns[':p' . $index++]  = 'OedtMstrTaxCode1';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXPCT1)) {
            $modifiedColumns[':p' . $index++]  = 'OedtMstrTaxPct1';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXCODE2)) {
            $modifiedColumns[':p' . $index++]  = 'OedtMstrTaxCode2';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXPCT2)) {
            $modifiedColumns[':p' . $index++]  = 'OedtMstrTaxPct2';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXCODE3)) {
            $modifiedColumns[':p' . $index++]  = 'OedtMstrTaxCode3';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXPCT3)) {
            $modifiedColumns[':p' . $index++]  = 'OedtMstrTaxPct3';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXCODE4)) {
            $modifiedColumns[':p' . $index++]  = 'OedtMstrTaxCode4';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXPCT4)) {
            $modifiedColumns[':p' . $index++]  = 'OedtMstrTaxPct4';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXCODE5)) {
            $modifiedColumns[':p' . $index++]  = 'OedtMstrTaxCode5';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXPCT5)) {
            $modifiedColumns[':p' . $index++]  = 'OedtMstrTaxPct5';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXCODE6)) {
            $modifiedColumns[':p' . $index++]  = 'OedtMstrTaxCode6';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXPCT6)) {
            $modifiedColumns[':p' . $index++]  = 'OedtMstrTaxPct6';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXCODE7)) {
            $modifiedColumns[':p' . $index++]  = 'OedtMstrTaxCode7';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXPCT7)) {
            $modifiedColumns[':p' . $index++]  = 'OedtMstrTaxPct7';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXCODE8)) {
            $modifiedColumns[':p' . $index++]  = 'OedtMstrTaxCode8';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXPCT8)) {
            $modifiedColumns[':p' . $index++]  = 'OedtMstrTaxPct8';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXCODE9)) {
            $modifiedColumns[':p' . $index++]  = 'OedtMstrTaxCode9';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXPCT9)) {
            $modifiedColumns[':p' . $index++]  = 'OedtMstrTaxPct9';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTBINAREA)) {
            $modifiedColumns[':p' . $index++]  = 'OedtBinArea';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTSPLITLINE)) {
            $modifiedColumns[':p' . $index++]  = 'OedtSplitLine';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTORIGLINE)) {
            $modifiedColumns[':p' . $index++]  = 'OedtOrigLine';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTCUSTCRSSREF)) {
            $modifiedColumns[':p' . $index++]  = 'OedtCustCrssRef';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_INTBUOMSALE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbUomSale';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTSHIPFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OedtShipFlag';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTKITFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OedtKitFlag';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTKITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OedtKitItemNbr';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTBFCOST)) {
            $modifiedColumns[':p' . $index++]  = 'OedtBfCost';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTBFMSGCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OedtBfMsgCode';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTBFCOSTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OedtBfCostTot';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'OedtWght';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTQBPICKER)) {
            $modifiedColumns[':p' . $index++]  = 'OedtQbPicker';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTPODETLINENBR)) {
            $modifiedColumns[':p' . $index++]  = 'OedtPoDetLineNbr';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTQTYTOSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'OedtQtyToShip';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTPONBR)) {
            $modifiedColumns[':p' . $index++]  = 'OedtPoNbr';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTPOREF)) {
            $modifiedColumns[':p' . $index++]  = 'OedtPoRef';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTFRTIN)) {
            $modifiedColumns[':p' . $index++]  = 'OedtFrtIn';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTFRTINENTERED)) {
            $modifiedColumns[':p' . $index++]  = 'OedtFrtInEntered';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTPRODCMPLT)) {
            $modifiedColumns[':p' . $index++]  = 'OedtProdCmplt';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTERFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OedtErFlag';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTORIGITEM)) {
            $modifiedColumns[':p' . $index++]  = 'OedtOrigItem';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTSUBFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OedtSubFlag';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTEDIINCOMINGSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'OedtEdiIncomingSeq';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTSPORDPOLINE)) {
            $modifiedColumns[':p' . $index++]  = 'OedtSpordPoLine';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTCATLGID)) {
            $modifiedColumns[':p' . $index++]  = 'OedtCatlgId';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTDISCPCT)) {
            $modifiedColumns[':p' . $index++]  = 'OedtDiscPct';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTDEALPUSH)) {
            $modifiedColumns[':p' . $index++]  = 'OedtDealPush';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTCOREFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OedtCoreFlag';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTNSSALESACCT)) {
            $modifiedColumns[':p' . $index++]  = 'OedtNsSalesAcct';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTCERTREQD)) {
            $modifiedColumns[':p' . $index++]  = 'OedtCertReqd';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTADDONSALES)) {
            $modifiedColumns[':p' . $index++]  = 'OedtAddOnSales';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTBORDFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OedtBordFlag';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTITEMREF)) {
            $modifiedColumns[':p' . $index++]  = 'OedtItemRef';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTWGTAXCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OedtWgTaxCode';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTWGPRICE)) {
            $modifiedColumns[':p' . $index++]  = 'OedtWgPrice';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTWGTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OedtWgTot';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTCNTRQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OedtCntrQty';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO SO_DETAIL (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'OehdNbr':
                        $stmt->bindValue($identifier, $this->oehdnbr, PDO::PARAM_INT);
                        break;
                    case 'OedtLine':
                        $stmt->bindValue($identifier, $this->oedtline, PDO::PARAM_INT);
                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'OedtDesc':
                        $stmt->bindValue($identifier, $this->oedtdesc, PDO::PARAM_STR);
                        break;
                    case 'OedtDesc2':
                        $stmt->bindValue($identifier, $this->oedtdesc2, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'OedtRqstDate':
                        $stmt->bindValue($identifier, $this->oedtrqstdate, PDO::PARAM_INT);
                        break;
                    case 'OedtCancDate':
                        $stmt->bindValue($identifier, $this->oedtcancdate, PDO::PARAM_INT);
                        break;
                    case 'OedtShipDate':
                        $stmt->bindValue($identifier, $this->oedtshipdate, PDO::PARAM_INT);
                        break;
                    case 'OedtSpecOrdr':
                        $stmt->bindValue($identifier, $this->oedtspecordr, PDO::PARAM_STR);
                        break;
                    case 'ArtbMTaxCode':
                        $stmt->bindValue($identifier, $this->artbmtaxcode, PDO::PARAM_STR);
                        break;
                    case 'OedtQtyOrd':
                        $stmt->bindValue($identifier, $this->oedtqtyord, PDO::PARAM_STR);
                        break;
                    case 'OedtQtyShip':
                        $stmt->bindValue($identifier, $this->oedtqtyship, PDO::PARAM_STR);
                        break;
                    case 'OedtQtyShipTot':
                        $stmt->bindValue($identifier, $this->oedtqtyshiptot, PDO::PARAM_STR);
                        break;
                    case 'OedtQtyBord':
                        $stmt->bindValue($identifier, $this->oedtqtybord, PDO::PARAM_STR);
                        break;
                    case 'OedtPric':
                        $stmt->bindValue($identifier, $this->oedtpric, PDO::PARAM_STR);
                        break;
                    case 'OedtCost':
                        $stmt->bindValue($identifier, $this->oedtcost, PDO::PARAM_STR);
                        break;
                    case 'OedtTaxPctTot':
                        $stmt->bindValue($identifier, $this->oedttaxpcttot, PDO::PARAM_STR);
                        break;
                    case 'OedtPricTot':
                        $stmt->bindValue($identifier, $this->oedtprictot, PDO::PARAM_STR);
                        break;
                    case 'OedtCostTot':
                        $stmt->bindValue($identifier, $this->oedtcosttot, PDO::PARAM_STR);
                        break;
                    case 'OedtBrknCaseQty':
                        $stmt->bindValue($identifier, $this->oedtbrkncaseqty, PDO::PARAM_INT);
                        break;
                    case 'OedtBin':
                        $stmt->bindValue($identifier, $this->oedtbin, PDO::PARAM_STR);
                        break;
                    case 'OedtPersonalCd':
                        $stmt->bindValue($identifier, $this->oedtpersonalcd, PDO::PARAM_STR);
                        break;
                    case 'OedtCorePric':
                        $stmt->bindValue($identifier, $this->oedtcorepric, PDO::PARAM_STR);
                        break;
                    case 'OedtAsstCode':
                        $stmt->bindValue($identifier, $this->oedtasstcode, PDO::PARAM_STR);
                        break;
                    case 'OedtAsstQty':
                        $stmt->bindValue($identifier, $this->oedtasstqty, PDO::PARAM_STR);
                        break;
                    case 'OedtListPric':
                        $stmt->bindValue($identifier, $this->oedtlistpric, PDO::PARAM_STR);
                        break;
                    case 'OedtStanCost':
                        $stmt->bindValue($identifier, $this->oedtstancost, PDO::PARAM_STR);
                        break;
                    case 'OedtVendItemJob':
                        $stmt->bindValue($identifier, $this->oedtvenditemjob, PDO::PARAM_STR);
                        break;
                    case 'ApveVendId':
                        $stmt->bindValue($identifier, $this->apvevendid, PDO::PARAM_STR);
                        break;
                    case 'OedtNsItemGrup':
                        $stmt->bindValue($identifier, $this->oedtnsitemgrup, PDO::PARAM_STR);
                        break;
                    case 'OedtUseCode':
                        $stmt->bindValue($identifier, $this->oedtusecode, PDO::PARAM_STR);
                        break;
                    case 'OedtNsShipFromId':
                        $stmt->bindValue($identifier, $this->oedtnsshipfromid, PDO::PARAM_STR);
                        break;
                    case 'OedtAsstOvrd':
                        $stmt->bindValue($identifier, $this->oedtasstovrd, PDO::PARAM_STR);
                        break;
                    case 'OedtDealFlag':
                        $stmt->bindValue($identifier, $this->oedtdealflag, PDO::PARAM_STR);
                        break;
                    case 'OedtPickFlag':
                        $stmt->bindValue($identifier, $this->oedtpickflag, PDO::PARAM_STR);
                        break;
                    case 'OedtMstrTaxCode1':
                        $stmt->bindValue($identifier, $this->oedtmstrtaxcode1, PDO::PARAM_STR);
                        break;
                    case 'OedtMstrTaxPct1':
                        $stmt->bindValue($identifier, $this->oedtmstrtaxpct1, PDO::PARAM_STR);
                        break;
                    case 'OedtMstrTaxCode2':
                        $stmt->bindValue($identifier, $this->oedtmstrtaxcode2, PDO::PARAM_STR);
                        break;
                    case 'OedtMstrTaxPct2':
                        $stmt->bindValue($identifier, $this->oedtmstrtaxpct2, PDO::PARAM_STR);
                        break;
                    case 'OedtMstrTaxCode3':
                        $stmt->bindValue($identifier, $this->oedtmstrtaxcode3, PDO::PARAM_STR);
                        break;
                    case 'OedtMstrTaxPct3':
                        $stmt->bindValue($identifier, $this->oedtmstrtaxpct3, PDO::PARAM_STR);
                        break;
                    case 'OedtMstrTaxCode4':
                        $stmt->bindValue($identifier, $this->oedtmstrtaxcode4, PDO::PARAM_STR);
                        break;
                    case 'OedtMstrTaxPct4':
                        $stmt->bindValue($identifier, $this->oedtmstrtaxpct4, PDO::PARAM_STR);
                        break;
                    case 'OedtMstrTaxCode5':
                        $stmt->bindValue($identifier, $this->oedtmstrtaxcode5, PDO::PARAM_STR);
                        break;
                    case 'OedtMstrTaxPct5':
                        $stmt->bindValue($identifier, $this->oedtmstrtaxpct5, PDO::PARAM_STR);
                        break;
                    case 'OedtMstrTaxCode6':
                        $stmt->bindValue($identifier, $this->oedtmstrtaxcode6, PDO::PARAM_STR);
                        break;
                    case 'OedtMstrTaxPct6':
                        $stmt->bindValue($identifier, $this->oedtmstrtaxpct6, PDO::PARAM_STR);
                        break;
                    case 'OedtMstrTaxCode7':
                        $stmt->bindValue($identifier, $this->oedtmstrtaxcode7, PDO::PARAM_STR);
                        break;
                    case 'OedtMstrTaxPct7':
                        $stmt->bindValue($identifier, $this->oedtmstrtaxpct7, PDO::PARAM_STR);
                        break;
                    case 'OedtMstrTaxCode8':
                        $stmt->bindValue($identifier, $this->oedtmstrtaxcode8, PDO::PARAM_STR);
                        break;
                    case 'OedtMstrTaxPct8':
                        $stmt->bindValue($identifier, $this->oedtmstrtaxpct8, PDO::PARAM_STR);
                        break;
                    case 'OedtMstrTaxCode9':
                        $stmt->bindValue($identifier, $this->oedtmstrtaxcode9, PDO::PARAM_STR);
                        break;
                    case 'OedtMstrTaxPct9':
                        $stmt->bindValue($identifier, $this->oedtmstrtaxpct9, PDO::PARAM_STR);
                        break;
                    case 'OedtBinArea':
                        $stmt->bindValue($identifier, $this->oedtbinarea, PDO::PARAM_STR);
                        break;
                    case 'OedtSplitLine':
                        $stmt->bindValue($identifier, $this->oedtsplitline, PDO::PARAM_STR);
                        break;
                    case 'OedtOrigLine':
                        $stmt->bindValue($identifier, $this->oedtorigline, PDO::PARAM_INT);
                        break;
                    case 'OedtCustCrssRef':
                        $stmt->bindValue($identifier, $this->oedtcustcrssref, PDO::PARAM_STR);
                        break;
                    case 'IntbUomSale':
                        $stmt->bindValue($identifier, $this->intbuomsale, PDO::PARAM_STR);
                        break;
                    case 'OedtShipFlag':
                        $stmt->bindValue($identifier, $this->oedtshipflag, PDO::PARAM_STR);
                        break;
                    case 'OedtKitFlag':
                        $stmt->bindValue($identifier, $this->oedtkitflag, PDO::PARAM_STR);
                        break;
                    case 'OedtKitItemNbr':
                        $stmt->bindValue($identifier, $this->oedtkititemnbr, PDO::PARAM_STR);
                        break;
                    case 'OedtBfCost':
                        $stmt->bindValue($identifier, $this->oedtbfcost, PDO::PARAM_STR);
                        break;
                    case 'OedtBfMsgCode':
                        $stmt->bindValue($identifier, $this->oedtbfmsgcode, PDO::PARAM_STR);
                        break;
                    case 'OedtBfCostTot':
                        $stmt->bindValue($identifier, $this->oedtbfcosttot, PDO::PARAM_STR);
                        break;
                    case 'OedtWght':
                        $stmt->bindValue($identifier, $this->oedtwght, PDO::PARAM_STR);
                        break;
                    case 'OedtQbPicker':
                        $stmt->bindValue($identifier, $this->oedtqbpicker, PDO::PARAM_STR);
                        break;
                    case 'OedtPoDetLineNbr':
                        $stmt->bindValue($identifier, $this->oedtpodetlinenbr, PDO::PARAM_INT);
                        break;
                    case 'OedtQtyToShip':
                        $stmt->bindValue($identifier, $this->oedtqtytoship, PDO::PARAM_STR);
                        break;
                    case 'OedtPoNbr':
                        $stmt->bindValue($identifier, $this->oedtponbr, PDO::PARAM_INT);
                        break;
                    case 'OedtPoRef':
                        $stmt->bindValue($identifier, $this->oedtporef, PDO::PARAM_STR);
                        break;
                    case 'OedtFrtIn':
                        $stmt->bindValue($identifier, $this->oedtfrtin, PDO::PARAM_STR);
                        break;
                    case 'OedtFrtInEntered':
                        $stmt->bindValue($identifier, $this->oedtfrtinentered, PDO::PARAM_STR);
                        break;
                    case 'OedtProdCmplt':
                        $stmt->bindValue($identifier, $this->oedtprodcmplt, PDO::PARAM_STR);
                        break;
                    case 'OedtErFlag':
                        $stmt->bindValue($identifier, $this->oedterflag, PDO::PARAM_STR);
                        break;
                    case 'OedtOrigItem':
                        $stmt->bindValue($identifier, $this->oedtorigitem, PDO::PARAM_STR);
                        break;
                    case 'OedtSubFlag':
                        $stmt->bindValue($identifier, $this->oedtsubflag, PDO::PARAM_STR);
                        break;
                    case 'OedtEdiIncomingSeq':
                        $stmt->bindValue($identifier, $this->oedtediincomingseq, PDO::PARAM_INT);
                        break;
                    case 'OedtSpordPoLine':
                        $stmt->bindValue($identifier, $this->oedtspordpoline, PDO::PARAM_INT);
                        break;
                    case 'OedtCatlgId':
                        $stmt->bindValue($identifier, $this->oedtcatlgid, PDO::PARAM_STR);
                        break;
                    case 'OedtDiscPct':
                        $stmt->bindValue($identifier, $this->oedtdiscpct, PDO::PARAM_STR);
                        break;
                    case 'OedtDealPush':
                        $stmt->bindValue($identifier, $this->oedtdealpush, PDO::PARAM_STR);
                        break;
                    case 'OedtCoreFlag':
                        $stmt->bindValue($identifier, $this->oedtcoreflag, PDO::PARAM_STR);
                        break;
                    case 'OedtNsSalesAcct':
                        $stmt->bindValue($identifier, $this->oedtnssalesacct, PDO::PARAM_STR);
                        break;
                    case 'OedtCertReqd':
                        $stmt->bindValue($identifier, $this->oedtcertreqd, PDO::PARAM_STR);
                        break;
                    case 'OedtAddOnSales':
                        $stmt->bindValue($identifier, $this->oedtaddonsales, PDO::PARAM_STR);
                        break;
                    case 'OedtBordFlag':
                        $stmt->bindValue($identifier, $this->oedtbordflag, PDO::PARAM_STR);
                        break;
                    case 'OedtItemRef':
                        $stmt->bindValue($identifier, $this->oedtitemref, PDO::PARAM_STR);
                        break;
                    case 'OedtWgTaxCode':
                        $stmt->bindValue($identifier, $this->oedtwgtaxcode, PDO::PARAM_STR);
                        break;
                    case 'OedtWgPrice':
                        $stmt->bindValue($identifier, $this->oedtwgprice, PDO::PARAM_STR);
                        break;
                    case 'OedtWgTot':
                        $stmt->bindValue($identifier, $this->oedtwgtot, PDO::PARAM_STR);
                        break;
                    case 'OedtCntrQty':
                        $stmt->bindValue($identifier, $this->oedtcntrqty, PDO::PARAM_INT);
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
        $pos = SoDetailTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getOehdnbr();
                break;
            case 1:
                return $this->getOedtline();
                break;
            case 2:
                return $this->getInititemnbr();
                break;
            case 3:
                return $this->getOedtdesc();
                break;
            case 4:
                return $this->getOedtdesc2();
                break;
            case 5:
                return $this->getIntbwhse();
                break;
            case 6:
                return $this->getOedtrqstdate();
                break;
            case 7:
                return $this->getOedtcancdate();
                break;
            case 8:
                return $this->getOedtshipdate();
                break;
            case 9:
                return $this->getOedtspecordr();
                break;
            case 10:
                return $this->getArtbmtaxcode();
                break;
            case 11:
                return $this->getOedtqtyord();
                break;
            case 12:
                return $this->getOedtqtyship();
                break;
            case 13:
                return $this->getOedtqtyshiptot();
                break;
            case 14:
                return $this->getOedtqtybord();
                break;
            case 15:
                return $this->getOedtpric();
                break;
            case 16:
                return $this->getOedtcost();
                break;
            case 17:
                return $this->getOedttaxpcttot();
                break;
            case 18:
                return $this->getOedtprictot();
                break;
            case 19:
                return $this->getOedtcosttot();
                break;
            case 20:
                return $this->getOedtbrkncaseqty();
                break;
            case 21:
                return $this->getOedtbin();
                break;
            case 22:
                return $this->getOedtpersonalcd();
                break;
            case 23:
                return $this->getOedtcorepric();
                break;
            case 24:
                return $this->getOedtasstcode();
                break;
            case 25:
                return $this->getOedtasstqty();
                break;
            case 26:
                return $this->getOedtlistpric();
                break;
            case 27:
                return $this->getOedtstancost();
                break;
            case 28:
                return $this->getOedtvenditemjob();
                break;
            case 29:
                return $this->getApvevendid();
                break;
            case 30:
                return $this->getOedtnsitemgrup();
                break;
            case 31:
                return $this->getOedtusecode();
                break;
            case 32:
                return $this->getOedtnsshipfromid();
                break;
            case 33:
                return $this->getOedtasstovrd();
                break;
            case 34:
                return $this->getOedtdealflag();
                break;
            case 35:
                return $this->getOedtpickflag();
                break;
            case 36:
                return $this->getOedtmstrtaxcode1();
                break;
            case 37:
                return $this->getOedtmstrtaxpct1();
                break;
            case 38:
                return $this->getOedtmstrtaxcode2();
                break;
            case 39:
                return $this->getOedtmstrtaxpct2();
                break;
            case 40:
                return $this->getOedtmstrtaxcode3();
                break;
            case 41:
                return $this->getOedtmstrtaxpct3();
                break;
            case 42:
                return $this->getOedtmstrtaxcode4();
                break;
            case 43:
                return $this->getOedtmstrtaxpct4();
                break;
            case 44:
                return $this->getOedtmstrtaxcode5();
                break;
            case 45:
                return $this->getOedtmstrtaxpct5();
                break;
            case 46:
                return $this->getOedtmstrtaxcode6();
                break;
            case 47:
                return $this->getOedtmstrtaxpct6();
                break;
            case 48:
                return $this->getOedtmstrtaxcode7();
                break;
            case 49:
                return $this->getOedtmstrtaxpct7();
                break;
            case 50:
                return $this->getOedtmstrtaxcode8();
                break;
            case 51:
                return $this->getOedtmstrtaxpct8();
                break;
            case 52:
                return $this->getOedtmstrtaxcode9();
                break;
            case 53:
                return $this->getOedtmstrtaxpct9();
                break;
            case 54:
                return $this->getOedtbinarea();
                break;
            case 55:
                return $this->getOedtsplitline();
                break;
            case 56:
                return $this->getOedtorigline();
                break;
            case 57:
                return $this->getOedtcustcrssref();
                break;
            case 58:
                return $this->getIntbuomsale();
                break;
            case 59:
                return $this->getOedtshipflag();
                break;
            case 60:
                return $this->getOedtkitflag();
                break;
            case 61:
                return $this->getOedtkititemnbr();
                break;
            case 62:
                return $this->getOedtbfcost();
                break;
            case 63:
                return $this->getOedtbfmsgcode();
                break;
            case 64:
                return $this->getOedtbfcosttot();
                break;
            case 65:
                return $this->getOedtwght();
                break;
            case 66:
                return $this->getOedtqbpicker();
                break;
            case 67:
                return $this->getOedtpodetlinenbr();
                break;
            case 68:
                return $this->getOedtqtytoship();
                break;
            case 69:
                return $this->getOedtponbr();
                break;
            case 70:
                return $this->getOedtporef();
                break;
            case 71:
                return $this->getOedtfrtin();
                break;
            case 72:
                return $this->getOedtfrtinentered();
                break;
            case 73:
                return $this->getOedtprodcmplt();
                break;
            case 74:
                return $this->getOedterflag();
                break;
            case 75:
                return $this->getOedtorigitem();
                break;
            case 76:
                return $this->getOedtsubflag();
                break;
            case 77:
                return $this->getOedtediincomingseq();
                break;
            case 78:
                return $this->getOedtspordpoline();
                break;
            case 79:
                return $this->getOedtcatlgid();
                break;
            case 80:
                return $this->getOedtdiscpct();
                break;
            case 81:
                return $this->getOedtdealpush();
                break;
            case 82:
                return $this->getOedtcoreflag();
                break;
            case 83:
                return $this->getOedtnssalesacct();
                break;
            case 84:
                return $this->getOedtcertreqd();
                break;
            case 85:
                return $this->getOedtaddonsales();
                break;
            case 86:
                return $this->getOedtbordflag();
                break;
            case 87:
                return $this->getOedtitemref();
                break;
            case 88:
                return $this->getOedtwgtaxcode();
                break;
            case 89:
                return $this->getOedtwgprice();
                break;
            case 90:
                return $this->getOedtwgtot();
                break;
            case 91:
                return $this->getOedtcntrqty();
                break;
            case 92:
                return $this->getDateupdtd();
                break;
            case 93:
                return $this->getTimeupdtd();
                break;
            case 94:
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
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {

        if (isset($alreadyDumpedObjects['SoDetail'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SoDetail'][$this->hashCode()] = true;
        $keys = SoDetailTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOehdnbr(),
            $keys[1] => $this->getOedtline(),
            $keys[2] => $this->getInititemnbr(),
            $keys[3] => $this->getOedtdesc(),
            $keys[4] => $this->getOedtdesc2(),
            $keys[5] => $this->getIntbwhse(),
            $keys[6] => $this->getOedtrqstdate(),
            $keys[7] => $this->getOedtcancdate(),
            $keys[8] => $this->getOedtshipdate(),
            $keys[9] => $this->getOedtspecordr(),
            $keys[10] => $this->getArtbmtaxcode(),
            $keys[11] => $this->getOedtqtyord(),
            $keys[12] => $this->getOedtqtyship(),
            $keys[13] => $this->getOedtqtyshiptot(),
            $keys[14] => $this->getOedtqtybord(),
            $keys[15] => $this->getOedtpric(),
            $keys[16] => $this->getOedtcost(),
            $keys[17] => $this->getOedttaxpcttot(),
            $keys[18] => $this->getOedtprictot(),
            $keys[19] => $this->getOedtcosttot(),
            $keys[20] => $this->getOedtbrkncaseqty(),
            $keys[21] => $this->getOedtbin(),
            $keys[22] => $this->getOedtpersonalcd(),
            $keys[23] => $this->getOedtcorepric(),
            $keys[24] => $this->getOedtasstcode(),
            $keys[25] => $this->getOedtasstqty(),
            $keys[26] => $this->getOedtlistpric(),
            $keys[27] => $this->getOedtstancost(),
            $keys[28] => $this->getOedtvenditemjob(),
            $keys[29] => $this->getApvevendid(),
            $keys[30] => $this->getOedtnsitemgrup(),
            $keys[31] => $this->getOedtusecode(),
            $keys[32] => $this->getOedtnsshipfromid(),
            $keys[33] => $this->getOedtasstovrd(),
            $keys[34] => $this->getOedtdealflag(),
            $keys[35] => $this->getOedtpickflag(),
            $keys[36] => $this->getOedtmstrtaxcode1(),
            $keys[37] => $this->getOedtmstrtaxpct1(),
            $keys[38] => $this->getOedtmstrtaxcode2(),
            $keys[39] => $this->getOedtmstrtaxpct2(),
            $keys[40] => $this->getOedtmstrtaxcode3(),
            $keys[41] => $this->getOedtmstrtaxpct3(),
            $keys[42] => $this->getOedtmstrtaxcode4(),
            $keys[43] => $this->getOedtmstrtaxpct4(),
            $keys[44] => $this->getOedtmstrtaxcode5(),
            $keys[45] => $this->getOedtmstrtaxpct5(),
            $keys[46] => $this->getOedtmstrtaxcode6(),
            $keys[47] => $this->getOedtmstrtaxpct6(),
            $keys[48] => $this->getOedtmstrtaxcode7(),
            $keys[49] => $this->getOedtmstrtaxpct7(),
            $keys[50] => $this->getOedtmstrtaxcode8(),
            $keys[51] => $this->getOedtmstrtaxpct8(),
            $keys[52] => $this->getOedtmstrtaxcode9(),
            $keys[53] => $this->getOedtmstrtaxpct9(),
            $keys[54] => $this->getOedtbinarea(),
            $keys[55] => $this->getOedtsplitline(),
            $keys[56] => $this->getOedtorigline(),
            $keys[57] => $this->getOedtcustcrssref(),
            $keys[58] => $this->getIntbuomsale(),
            $keys[59] => $this->getOedtshipflag(),
            $keys[60] => $this->getOedtkitflag(),
            $keys[61] => $this->getOedtkititemnbr(),
            $keys[62] => $this->getOedtbfcost(),
            $keys[63] => $this->getOedtbfmsgcode(),
            $keys[64] => $this->getOedtbfcosttot(),
            $keys[65] => $this->getOedtwght(),
            $keys[66] => $this->getOedtqbpicker(),
            $keys[67] => $this->getOedtpodetlinenbr(),
            $keys[68] => $this->getOedtqtytoship(),
            $keys[69] => $this->getOedtponbr(),
            $keys[70] => $this->getOedtporef(),
            $keys[71] => $this->getOedtfrtin(),
            $keys[72] => $this->getOedtfrtinentered(),
            $keys[73] => $this->getOedtprodcmplt(),
            $keys[74] => $this->getOedterflag(),
            $keys[75] => $this->getOedtorigitem(),
            $keys[76] => $this->getOedtsubflag(),
            $keys[77] => $this->getOedtediincomingseq(),
            $keys[78] => $this->getOedtspordpoline(),
            $keys[79] => $this->getOedtcatlgid(),
            $keys[80] => $this->getOedtdiscpct(),
            $keys[81] => $this->getOedtdealpush(),
            $keys[82] => $this->getOedtcoreflag(),
            $keys[83] => $this->getOedtnssalesacct(),
            $keys[84] => $this->getOedtcertreqd(),
            $keys[85] => $this->getOedtaddonsales(),
            $keys[86] => $this->getOedtbordflag(),
            $keys[87] => $this->getOedtitemref(),
            $keys[88] => $this->getOedtwgtaxcode(),
            $keys[89] => $this->getOedtwgprice(),
            $keys[90] => $this->getOedtwgtot(),
            $keys[91] => $this->getOedtcntrqty(),
            $keys[92] => $this->getDateupdtd(),
            $keys[93] => $this->getTimeupdtd(),
            $keys[94] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSoHeader) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'soHeader';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'SO_HEADER';
                        break;
                    default:
                        $key = 'SoHeader';
                }

                $result[$key] = $this->aSoHeader->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
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
     * @return $this|\SoDetail
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = SoDetailTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\SoDetail
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setOehdnbr($value);
                break;
            case 1:
                $this->setOedtline($value);
                break;
            case 2:
                $this->setInititemnbr($value);
                break;
            case 3:
                $this->setOedtdesc($value);
                break;
            case 4:
                $this->setOedtdesc2($value);
                break;
            case 5:
                $this->setIntbwhse($value);
                break;
            case 6:
                $this->setOedtrqstdate($value);
                break;
            case 7:
                $this->setOedtcancdate($value);
                break;
            case 8:
                $this->setOedtshipdate($value);
                break;
            case 9:
                $this->setOedtspecordr($value);
                break;
            case 10:
                $this->setArtbmtaxcode($value);
                break;
            case 11:
                $this->setOedtqtyord($value);
                break;
            case 12:
                $this->setOedtqtyship($value);
                break;
            case 13:
                $this->setOedtqtyshiptot($value);
                break;
            case 14:
                $this->setOedtqtybord($value);
                break;
            case 15:
                $this->setOedtpric($value);
                break;
            case 16:
                $this->setOedtcost($value);
                break;
            case 17:
                $this->setOedttaxpcttot($value);
                break;
            case 18:
                $this->setOedtprictot($value);
                break;
            case 19:
                $this->setOedtcosttot($value);
                break;
            case 20:
                $this->setOedtbrkncaseqty($value);
                break;
            case 21:
                $this->setOedtbin($value);
                break;
            case 22:
                $this->setOedtpersonalcd($value);
                break;
            case 23:
                $this->setOedtcorepric($value);
                break;
            case 24:
                $this->setOedtasstcode($value);
                break;
            case 25:
                $this->setOedtasstqty($value);
                break;
            case 26:
                $this->setOedtlistpric($value);
                break;
            case 27:
                $this->setOedtstancost($value);
                break;
            case 28:
                $this->setOedtvenditemjob($value);
                break;
            case 29:
                $this->setApvevendid($value);
                break;
            case 30:
                $this->setOedtnsitemgrup($value);
                break;
            case 31:
                $this->setOedtusecode($value);
                break;
            case 32:
                $this->setOedtnsshipfromid($value);
                break;
            case 33:
                $this->setOedtasstovrd($value);
                break;
            case 34:
                $this->setOedtdealflag($value);
                break;
            case 35:
                $this->setOedtpickflag($value);
                break;
            case 36:
                $this->setOedtmstrtaxcode1($value);
                break;
            case 37:
                $this->setOedtmstrtaxpct1($value);
                break;
            case 38:
                $this->setOedtmstrtaxcode2($value);
                break;
            case 39:
                $this->setOedtmstrtaxpct2($value);
                break;
            case 40:
                $this->setOedtmstrtaxcode3($value);
                break;
            case 41:
                $this->setOedtmstrtaxpct3($value);
                break;
            case 42:
                $this->setOedtmstrtaxcode4($value);
                break;
            case 43:
                $this->setOedtmstrtaxpct4($value);
                break;
            case 44:
                $this->setOedtmstrtaxcode5($value);
                break;
            case 45:
                $this->setOedtmstrtaxpct5($value);
                break;
            case 46:
                $this->setOedtmstrtaxcode6($value);
                break;
            case 47:
                $this->setOedtmstrtaxpct6($value);
                break;
            case 48:
                $this->setOedtmstrtaxcode7($value);
                break;
            case 49:
                $this->setOedtmstrtaxpct7($value);
                break;
            case 50:
                $this->setOedtmstrtaxcode8($value);
                break;
            case 51:
                $this->setOedtmstrtaxpct8($value);
                break;
            case 52:
                $this->setOedtmstrtaxcode9($value);
                break;
            case 53:
                $this->setOedtmstrtaxpct9($value);
                break;
            case 54:
                $this->setOedtbinarea($value);
                break;
            case 55:
                $this->setOedtsplitline($value);
                break;
            case 56:
                $this->setOedtorigline($value);
                break;
            case 57:
                $this->setOedtcustcrssref($value);
                break;
            case 58:
                $this->setIntbuomsale($value);
                break;
            case 59:
                $this->setOedtshipflag($value);
                break;
            case 60:
                $this->setOedtkitflag($value);
                break;
            case 61:
                $this->setOedtkititemnbr($value);
                break;
            case 62:
                $this->setOedtbfcost($value);
                break;
            case 63:
                $this->setOedtbfmsgcode($value);
                break;
            case 64:
                $this->setOedtbfcosttot($value);
                break;
            case 65:
                $this->setOedtwght($value);
                break;
            case 66:
                $this->setOedtqbpicker($value);
                break;
            case 67:
                $this->setOedtpodetlinenbr($value);
                break;
            case 68:
                $this->setOedtqtytoship($value);
                break;
            case 69:
                $this->setOedtponbr($value);
                break;
            case 70:
                $this->setOedtporef($value);
                break;
            case 71:
                $this->setOedtfrtin($value);
                break;
            case 72:
                $this->setOedtfrtinentered($value);
                break;
            case 73:
                $this->setOedtprodcmplt($value);
                break;
            case 74:
                $this->setOedterflag($value);
                break;
            case 75:
                $this->setOedtorigitem($value);
                break;
            case 76:
                $this->setOedtsubflag($value);
                break;
            case 77:
                $this->setOedtediincomingseq($value);
                break;
            case 78:
                $this->setOedtspordpoline($value);
                break;
            case 79:
                $this->setOedtcatlgid($value);
                break;
            case 80:
                $this->setOedtdiscpct($value);
                break;
            case 81:
                $this->setOedtdealpush($value);
                break;
            case 82:
                $this->setOedtcoreflag($value);
                break;
            case 83:
                $this->setOedtnssalesacct($value);
                break;
            case 84:
                $this->setOedtcertreqd($value);
                break;
            case 85:
                $this->setOedtaddonsales($value);
                break;
            case 86:
                $this->setOedtbordflag($value);
                break;
            case 87:
                $this->setOedtitemref($value);
                break;
            case 88:
                $this->setOedtwgtaxcode($value);
                break;
            case 89:
                $this->setOedtwgprice($value);
                break;
            case 90:
                $this->setOedtwgtot($value);
                break;
            case 91:
                $this->setOedtcntrqty($value);
                break;
            case 92:
                $this->setDateupdtd($value);
                break;
            case 93:
                $this->setTimeupdtd($value);
                break;
            case 94:
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
        $keys = SoDetailTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setOehdnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setOedtline($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setInititemnbr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setOedtdesc($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setOedtdesc2($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setIntbwhse($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setOedtrqstdate($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setOedtcancdate($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setOedtshipdate($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setOedtspecordr($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setArtbmtaxcode($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setOedtqtyord($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setOedtqtyship($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setOedtqtyshiptot($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setOedtqtybord($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setOedtpric($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setOedtcost($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setOedttaxpcttot($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setOedtprictot($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setOedtcosttot($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setOedtbrkncaseqty($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setOedtbin($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setOedtpersonalcd($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setOedtcorepric($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setOedtasstcode($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setOedtasstqty($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setOedtlistpric($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setOedtstancost($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setOedtvenditemjob($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setApvevendid($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setOedtnsitemgrup($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setOedtusecode($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setOedtnsshipfromid($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setOedtasstovrd($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setOedtdealflag($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setOedtpickflag($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setOedtmstrtaxcode1($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setOedtmstrtaxpct1($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setOedtmstrtaxcode2($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setOedtmstrtaxpct2($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setOedtmstrtaxcode3($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setOedtmstrtaxpct3($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setOedtmstrtaxcode4($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setOedtmstrtaxpct4($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setOedtmstrtaxcode5($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setOedtmstrtaxpct5($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setOedtmstrtaxcode6($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setOedtmstrtaxpct6($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setOedtmstrtaxcode7($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setOedtmstrtaxpct7($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setOedtmstrtaxcode8($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setOedtmstrtaxpct8($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setOedtmstrtaxcode9($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setOedtmstrtaxpct9($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setOedtbinarea($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setOedtsplitline($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setOedtorigline($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setOedtcustcrssref($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setIntbuomsale($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setOedtshipflag($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setOedtkitflag($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setOedtkititemnbr($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setOedtbfcost($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setOedtbfmsgcode($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setOedtbfcosttot($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setOedtwght($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setOedtqbpicker($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setOedtpodetlinenbr($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setOedtqtytoship($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setOedtponbr($arr[$keys[69]]);
        }
        if (array_key_exists($keys[70], $arr)) {
            $this->setOedtporef($arr[$keys[70]]);
        }
        if (array_key_exists($keys[71], $arr)) {
            $this->setOedtfrtin($arr[$keys[71]]);
        }
        if (array_key_exists($keys[72], $arr)) {
            $this->setOedtfrtinentered($arr[$keys[72]]);
        }
        if (array_key_exists($keys[73], $arr)) {
            $this->setOedtprodcmplt($arr[$keys[73]]);
        }
        if (array_key_exists($keys[74], $arr)) {
            $this->setOedterflag($arr[$keys[74]]);
        }
        if (array_key_exists($keys[75], $arr)) {
            $this->setOedtorigitem($arr[$keys[75]]);
        }
        if (array_key_exists($keys[76], $arr)) {
            $this->setOedtsubflag($arr[$keys[76]]);
        }
        if (array_key_exists($keys[77], $arr)) {
            $this->setOedtediincomingseq($arr[$keys[77]]);
        }
        if (array_key_exists($keys[78], $arr)) {
            $this->setOedtspordpoline($arr[$keys[78]]);
        }
        if (array_key_exists($keys[79], $arr)) {
            $this->setOedtcatlgid($arr[$keys[79]]);
        }
        if (array_key_exists($keys[80], $arr)) {
            $this->setOedtdiscpct($arr[$keys[80]]);
        }
        if (array_key_exists($keys[81], $arr)) {
            $this->setOedtdealpush($arr[$keys[81]]);
        }
        if (array_key_exists($keys[82], $arr)) {
            $this->setOedtcoreflag($arr[$keys[82]]);
        }
        if (array_key_exists($keys[83], $arr)) {
            $this->setOedtnssalesacct($arr[$keys[83]]);
        }
        if (array_key_exists($keys[84], $arr)) {
            $this->setOedtcertreqd($arr[$keys[84]]);
        }
        if (array_key_exists($keys[85], $arr)) {
            $this->setOedtaddonsales($arr[$keys[85]]);
        }
        if (array_key_exists($keys[86], $arr)) {
            $this->setOedtbordflag($arr[$keys[86]]);
        }
        if (array_key_exists($keys[87], $arr)) {
            $this->setOedtitemref($arr[$keys[87]]);
        }
        if (array_key_exists($keys[88], $arr)) {
            $this->setOedtwgtaxcode($arr[$keys[88]]);
        }
        if (array_key_exists($keys[89], $arr)) {
            $this->setOedtwgprice($arr[$keys[89]]);
        }
        if (array_key_exists($keys[90], $arr)) {
            $this->setOedtwgtot($arr[$keys[90]]);
        }
        if (array_key_exists($keys[91], $arr)) {
            $this->setOedtcntrqty($arr[$keys[91]]);
        }
        if (array_key_exists($keys[92], $arr)) {
            $this->setDateupdtd($arr[$keys[92]]);
        }
        if (array_key_exists($keys[93], $arr)) {
            $this->setTimeupdtd($arr[$keys[93]]);
        }
        if (array_key_exists($keys[94], $arr)) {
            $this->setDummy($arr[$keys[94]]);
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
     * @return $this|\SoDetail The current object, for fluid interface
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
        $criteria = new Criteria(SoDetailTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SoDetailTableMap::COL_OEHDNBR)) {
            $criteria->add(SoDetailTableMap::COL_OEHDNBR, $this->oehdnbr);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTLINE)) {
            $criteria->add(SoDetailTableMap::COL_OEDTLINE, $this->oedtline);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_INITITEMNBR)) {
            $criteria->add(SoDetailTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTDESC)) {
            $criteria->add(SoDetailTableMap::COL_OEDTDESC, $this->oedtdesc);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTDESC2)) {
            $criteria->add(SoDetailTableMap::COL_OEDTDESC2, $this->oedtdesc2);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_INTBWHSE)) {
            $criteria->add(SoDetailTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTRQSTDATE)) {
            $criteria->add(SoDetailTableMap::COL_OEDTRQSTDATE, $this->oedtrqstdate);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTCANCDATE)) {
            $criteria->add(SoDetailTableMap::COL_OEDTCANCDATE, $this->oedtcancdate);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTSHIPDATE)) {
            $criteria->add(SoDetailTableMap::COL_OEDTSHIPDATE, $this->oedtshipdate);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTSPECORDR)) {
            $criteria->add(SoDetailTableMap::COL_OEDTSPECORDR, $this->oedtspecordr);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_ARTBMTAXCODE)) {
            $criteria->add(SoDetailTableMap::COL_ARTBMTAXCODE, $this->artbmtaxcode);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTQTYORD)) {
            $criteria->add(SoDetailTableMap::COL_OEDTQTYORD, $this->oedtqtyord);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTQTYSHIP)) {
            $criteria->add(SoDetailTableMap::COL_OEDTQTYSHIP, $this->oedtqtyship);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTQTYSHIPTOT)) {
            $criteria->add(SoDetailTableMap::COL_OEDTQTYSHIPTOT, $this->oedtqtyshiptot);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTQTYBORD)) {
            $criteria->add(SoDetailTableMap::COL_OEDTQTYBORD, $this->oedtqtybord);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTPRIC)) {
            $criteria->add(SoDetailTableMap::COL_OEDTPRIC, $this->oedtpric);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTCOST)) {
            $criteria->add(SoDetailTableMap::COL_OEDTCOST, $this->oedtcost);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTTAXPCTTOT)) {
            $criteria->add(SoDetailTableMap::COL_OEDTTAXPCTTOT, $this->oedttaxpcttot);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTPRICTOT)) {
            $criteria->add(SoDetailTableMap::COL_OEDTPRICTOT, $this->oedtprictot);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTCOSTTOT)) {
            $criteria->add(SoDetailTableMap::COL_OEDTCOSTTOT, $this->oedtcosttot);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTBRKNCASEQTY)) {
            $criteria->add(SoDetailTableMap::COL_OEDTBRKNCASEQTY, $this->oedtbrkncaseqty);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTBIN)) {
            $criteria->add(SoDetailTableMap::COL_OEDTBIN, $this->oedtbin);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTPERSONALCD)) {
            $criteria->add(SoDetailTableMap::COL_OEDTPERSONALCD, $this->oedtpersonalcd);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTCOREPRIC)) {
            $criteria->add(SoDetailTableMap::COL_OEDTCOREPRIC, $this->oedtcorepric);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTASSTCODE)) {
            $criteria->add(SoDetailTableMap::COL_OEDTASSTCODE, $this->oedtasstcode);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTASSTQTY)) {
            $criteria->add(SoDetailTableMap::COL_OEDTASSTQTY, $this->oedtasstqty);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTLISTPRIC)) {
            $criteria->add(SoDetailTableMap::COL_OEDTLISTPRIC, $this->oedtlistpric);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTSTANCOST)) {
            $criteria->add(SoDetailTableMap::COL_OEDTSTANCOST, $this->oedtstancost);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTVENDITEMJOB)) {
            $criteria->add(SoDetailTableMap::COL_OEDTVENDITEMJOB, $this->oedtvenditemjob);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_APVEVENDID)) {
            $criteria->add(SoDetailTableMap::COL_APVEVENDID, $this->apvevendid);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTNSITEMGRUP)) {
            $criteria->add(SoDetailTableMap::COL_OEDTNSITEMGRUP, $this->oedtnsitemgrup);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTUSECODE)) {
            $criteria->add(SoDetailTableMap::COL_OEDTUSECODE, $this->oedtusecode);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTNSSHIPFROMID)) {
            $criteria->add(SoDetailTableMap::COL_OEDTNSSHIPFROMID, $this->oedtnsshipfromid);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTASSTOVRD)) {
            $criteria->add(SoDetailTableMap::COL_OEDTASSTOVRD, $this->oedtasstovrd);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTDEALFLAG)) {
            $criteria->add(SoDetailTableMap::COL_OEDTDEALFLAG, $this->oedtdealflag);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTPICKFLAG)) {
            $criteria->add(SoDetailTableMap::COL_OEDTPICKFLAG, $this->oedtpickflag);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXCODE1)) {
            $criteria->add(SoDetailTableMap::COL_OEDTMSTRTAXCODE1, $this->oedtmstrtaxcode1);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXPCT1)) {
            $criteria->add(SoDetailTableMap::COL_OEDTMSTRTAXPCT1, $this->oedtmstrtaxpct1);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXCODE2)) {
            $criteria->add(SoDetailTableMap::COL_OEDTMSTRTAXCODE2, $this->oedtmstrtaxcode2);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXPCT2)) {
            $criteria->add(SoDetailTableMap::COL_OEDTMSTRTAXPCT2, $this->oedtmstrtaxpct2);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXCODE3)) {
            $criteria->add(SoDetailTableMap::COL_OEDTMSTRTAXCODE3, $this->oedtmstrtaxcode3);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXPCT3)) {
            $criteria->add(SoDetailTableMap::COL_OEDTMSTRTAXPCT3, $this->oedtmstrtaxpct3);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXCODE4)) {
            $criteria->add(SoDetailTableMap::COL_OEDTMSTRTAXCODE4, $this->oedtmstrtaxcode4);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXPCT4)) {
            $criteria->add(SoDetailTableMap::COL_OEDTMSTRTAXPCT4, $this->oedtmstrtaxpct4);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXCODE5)) {
            $criteria->add(SoDetailTableMap::COL_OEDTMSTRTAXCODE5, $this->oedtmstrtaxcode5);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXPCT5)) {
            $criteria->add(SoDetailTableMap::COL_OEDTMSTRTAXPCT5, $this->oedtmstrtaxpct5);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXCODE6)) {
            $criteria->add(SoDetailTableMap::COL_OEDTMSTRTAXCODE6, $this->oedtmstrtaxcode6);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXPCT6)) {
            $criteria->add(SoDetailTableMap::COL_OEDTMSTRTAXPCT6, $this->oedtmstrtaxpct6);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXCODE7)) {
            $criteria->add(SoDetailTableMap::COL_OEDTMSTRTAXCODE7, $this->oedtmstrtaxcode7);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXPCT7)) {
            $criteria->add(SoDetailTableMap::COL_OEDTMSTRTAXPCT7, $this->oedtmstrtaxpct7);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXCODE8)) {
            $criteria->add(SoDetailTableMap::COL_OEDTMSTRTAXCODE8, $this->oedtmstrtaxcode8);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXPCT8)) {
            $criteria->add(SoDetailTableMap::COL_OEDTMSTRTAXPCT8, $this->oedtmstrtaxpct8);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXCODE9)) {
            $criteria->add(SoDetailTableMap::COL_OEDTMSTRTAXCODE9, $this->oedtmstrtaxcode9);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTMSTRTAXPCT9)) {
            $criteria->add(SoDetailTableMap::COL_OEDTMSTRTAXPCT9, $this->oedtmstrtaxpct9);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTBINAREA)) {
            $criteria->add(SoDetailTableMap::COL_OEDTBINAREA, $this->oedtbinarea);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTSPLITLINE)) {
            $criteria->add(SoDetailTableMap::COL_OEDTSPLITLINE, $this->oedtsplitline);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTORIGLINE)) {
            $criteria->add(SoDetailTableMap::COL_OEDTORIGLINE, $this->oedtorigline);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTCUSTCRSSREF)) {
            $criteria->add(SoDetailTableMap::COL_OEDTCUSTCRSSREF, $this->oedtcustcrssref);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_INTBUOMSALE)) {
            $criteria->add(SoDetailTableMap::COL_INTBUOMSALE, $this->intbuomsale);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTSHIPFLAG)) {
            $criteria->add(SoDetailTableMap::COL_OEDTSHIPFLAG, $this->oedtshipflag);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTKITFLAG)) {
            $criteria->add(SoDetailTableMap::COL_OEDTKITFLAG, $this->oedtkitflag);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTKITITEMNBR)) {
            $criteria->add(SoDetailTableMap::COL_OEDTKITITEMNBR, $this->oedtkititemnbr);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTBFCOST)) {
            $criteria->add(SoDetailTableMap::COL_OEDTBFCOST, $this->oedtbfcost);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTBFMSGCODE)) {
            $criteria->add(SoDetailTableMap::COL_OEDTBFMSGCODE, $this->oedtbfmsgcode);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTBFCOSTTOT)) {
            $criteria->add(SoDetailTableMap::COL_OEDTBFCOSTTOT, $this->oedtbfcosttot);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTWGHT)) {
            $criteria->add(SoDetailTableMap::COL_OEDTWGHT, $this->oedtwght);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTQBPICKER)) {
            $criteria->add(SoDetailTableMap::COL_OEDTQBPICKER, $this->oedtqbpicker);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTPODETLINENBR)) {
            $criteria->add(SoDetailTableMap::COL_OEDTPODETLINENBR, $this->oedtpodetlinenbr);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTQTYTOSHIP)) {
            $criteria->add(SoDetailTableMap::COL_OEDTQTYTOSHIP, $this->oedtqtytoship);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTPONBR)) {
            $criteria->add(SoDetailTableMap::COL_OEDTPONBR, $this->oedtponbr);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTPOREF)) {
            $criteria->add(SoDetailTableMap::COL_OEDTPOREF, $this->oedtporef);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTFRTIN)) {
            $criteria->add(SoDetailTableMap::COL_OEDTFRTIN, $this->oedtfrtin);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTFRTINENTERED)) {
            $criteria->add(SoDetailTableMap::COL_OEDTFRTINENTERED, $this->oedtfrtinentered);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTPRODCMPLT)) {
            $criteria->add(SoDetailTableMap::COL_OEDTPRODCMPLT, $this->oedtprodcmplt);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTERFLAG)) {
            $criteria->add(SoDetailTableMap::COL_OEDTERFLAG, $this->oedterflag);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTORIGITEM)) {
            $criteria->add(SoDetailTableMap::COL_OEDTORIGITEM, $this->oedtorigitem);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTSUBFLAG)) {
            $criteria->add(SoDetailTableMap::COL_OEDTSUBFLAG, $this->oedtsubflag);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTEDIINCOMINGSEQ)) {
            $criteria->add(SoDetailTableMap::COL_OEDTEDIINCOMINGSEQ, $this->oedtediincomingseq);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTSPORDPOLINE)) {
            $criteria->add(SoDetailTableMap::COL_OEDTSPORDPOLINE, $this->oedtspordpoline);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTCATLGID)) {
            $criteria->add(SoDetailTableMap::COL_OEDTCATLGID, $this->oedtcatlgid);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTDISCPCT)) {
            $criteria->add(SoDetailTableMap::COL_OEDTDISCPCT, $this->oedtdiscpct);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTDEALPUSH)) {
            $criteria->add(SoDetailTableMap::COL_OEDTDEALPUSH, $this->oedtdealpush);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTCOREFLAG)) {
            $criteria->add(SoDetailTableMap::COL_OEDTCOREFLAG, $this->oedtcoreflag);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTNSSALESACCT)) {
            $criteria->add(SoDetailTableMap::COL_OEDTNSSALESACCT, $this->oedtnssalesacct);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTCERTREQD)) {
            $criteria->add(SoDetailTableMap::COL_OEDTCERTREQD, $this->oedtcertreqd);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTADDONSALES)) {
            $criteria->add(SoDetailTableMap::COL_OEDTADDONSALES, $this->oedtaddonsales);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTBORDFLAG)) {
            $criteria->add(SoDetailTableMap::COL_OEDTBORDFLAG, $this->oedtbordflag);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTITEMREF)) {
            $criteria->add(SoDetailTableMap::COL_OEDTITEMREF, $this->oedtitemref);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTWGTAXCODE)) {
            $criteria->add(SoDetailTableMap::COL_OEDTWGTAXCODE, $this->oedtwgtaxcode);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTWGPRICE)) {
            $criteria->add(SoDetailTableMap::COL_OEDTWGPRICE, $this->oedtwgprice);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTWGTOT)) {
            $criteria->add(SoDetailTableMap::COL_OEDTWGTOT, $this->oedtwgtot);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_OEDTCNTRQTY)) {
            $criteria->add(SoDetailTableMap::COL_OEDTCNTRQTY, $this->oedtcntrqty);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_DATEUPDTD)) {
            $criteria->add(SoDetailTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_TIMEUPDTD)) {
            $criteria->add(SoDetailTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(SoDetailTableMap::COL_DUMMY)) {
            $criteria->add(SoDetailTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildSoDetailQuery::create();
        $criteria->add(SoDetailTableMap::COL_OEHDNBR, $this->oehdnbr);
        $criteria->add(SoDetailTableMap::COL_OEDTLINE, $this->oedtline);

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
        $validPk = null !== $this->getOehdnbr() &&
            null !== $this->getOedtline();

        $validPrimaryKeyFKs = 1;
        $primaryKeyFKs = [];

        //relation SO_DETAIL_fk_760d3d to table SO_HEADER
        if ($this->aSoHeader && $hash = spl_object_hash($this->aSoHeader)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

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
        $pks[0] = $this->getOehdnbr();
        $pks[1] = $this->getOedtline();

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
        $this->setOehdnbr($keys[0]);
        $this->setOedtline($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getOehdnbr()) && (null === $this->getOedtline());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \SoDetail (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOehdnbr($this->getOehdnbr());
        $copyObj->setOedtline($this->getOedtline());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setOedtdesc($this->getOedtdesc());
        $copyObj->setOedtdesc2($this->getOedtdesc2());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setOedtrqstdate($this->getOedtrqstdate());
        $copyObj->setOedtcancdate($this->getOedtcancdate());
        $copyObj->setOedtshipdate($this->getOedtshipdate());
        $copyObj->setOedtspecordr($this->getOedtspecordr());
        $copyObj->setArtbmtaxcode($this->getArtbmtaxcode());
        $copyObj->setOedtqtyord($this->getOedtqtyord());
        $copyObj->setOedtqtyship($this->getOedtqtyship());
        $copyObj->setOedtqtyshiptot($this->getOedtqtyshiptot());
        $copyObj->setOedtqtybord($this->getOedtqtybord());
        $copyObj->setOedtpric($this->getOedtpric());
        $copyObj->setOedtcost($this->getOedtcost());
        $copyObj->setOedttaxpcttot($this->getOedttaxpcttot());
        $copyObj->setOedtprictot($this->getOedtprictot());
        $copyObj->setOedtcosttot($this->getOedtcosttot());
        $copyObj->setOedtbrkncaseqty($this->getOedtbrkncaseqty());
        $copyObj->setOedtbin($this->getOedtbin());
        $copyObj->setOedtpersonalcd($this->getOedtpersonalcd());
        $copyObj->setOedtcorepric($this->getOedtcorepric());
        $copyObj->setOedtasstcode($this->getOedtasstcode());
        $copyObj->setOedtasstqty($this->getOedtasstqty());
        $copyObj->setOedtlistpric($this->getOedtlistpric());
        $copyObj->setOedtstancost($this->getOedtstancost());
        $copyObj->setOedtvenditemjob($this->getOedtvenditemjob());
        $copyObj->setApvevendid($this->getApvevendid());
        $copyObj->setOedtnsitemgrup($this->getOedtnsitemgrup());
        $copyObj->setOedtusecode($this->getOedtusecode());
        $copyObj->setOedtnsshipfromid($this->getOedtnsshipfromid());
        $copyObj->setOedtasstovrd($this->getOedtasstovrd());
        $copyObj->setOedtdealflag($this->getOedtdealflag());
        $copyObj->setOedtpickflag($this->getOedtpickflag());
        $copyObj->setOedtmstrtaxcode1($this->getOedtmstrtaxcode1());
        $copyObj->setOedtmstrtaxpct1($this->getOedtmstrtaxpct1());
        $copyObj->setOedtmstrtaxcode2($this->getOedtmstrtaxcode2());
        $copyObj->setOedtmstrtaxpct2($this->getOedtmstrtaxpct2());
        $copyObj->setOedtmstrtaxcode3($this->getOedtmstrtaxcode3());
        $copyObj->setOedtmstrtaxpct3($this->getOedtmstrtaxpct3());
        $copyObj->setOedtmstrtaxcode4($this->getOedtmstrtaxcode4());
        $copyObj->setOedtmstrtaxpct4($this->getOedtmstrtaxpct4());
        $copyObj->setOedtmstrtaxcode5($this->getOedtmstrtaxcode5());
        $copyObj->setOedtmstrtaxpct5($this->getOedtmstrtaxpct5());
        $copyObj->setOedtmstrtaxcode6($this->getOedtmstrtaxcode6());
        $copyObj->setOedtmstrtaxpct6($this->getOedtmstrtaxpct6());
        $copyObj->setOedtmstrtaxcode7($this->getOedtmstrtaxcode7());
        $copyObj->setOedtmstrtaxpct7($this->getOedtmstrtaxpct7());
        $copyObj->setOedtmstrtaxcode8($this->getOedtmstrtaxcode8());
        $copyObj->setOedtmstrtaxpct8($this->getOedtmstrtaxpct8());
        $copyObj->setOedtmstrtaxcode9($this->getOedtmstrtaxcode9());
        $copyObj->setOedtmstrtaxpct9($this->getOedtmstrtaxpct9());
        $copyObj->setOedtbinarea($this->getOedtbinarea());
        $copyObj->setOedtsplitline($this->getOedtsplitline());
        $copyObj->setOedtorigline($this->getOedtorigline());
        $copyObj->setOedtcustcrssref($this->getOedtcustcrssref());
        $copyObj->setIntbuomsale($this->getIntbuomsale());
        $copyObj->setOedtshipflag($this->getOedtshipflag());
        $copyObj->setOedtkitflag($this->getOedtkitflag());
        $copyObj->setOedtkititemnbr($this->getOedtkititemnbr());
        $copyObj->setOedtbfcost($this->getOedtbfcost());
        $copyObj->setOedtbfmsgcode($this->getOedtbfmsgcode());
        $copyObj->setOedtbfcosttot($this->getOedtbfcosttot());
        $copyObj->setOedtwght($this->getOedtwght());
        $copyObj->setOedtqbpicker($this->getOedtqbpicker());
        $copyObj->setOedtpodetlinenbr($this->getOedtpodetlinenbr());
        $copyObj->setOedtqtytoship($this->getOedtqtytoship());
        $copyObj->setOedtponbr($this->getOedtponbr());
        $copyObj->setOedtporef($this->getOedtporef());
        $copyObj->setOedtfrtin($this->getOedtfrtin());
        $copyObj->setOedtfrtinentered($this->getOedtfrtinentered());
        $copyObj->setOedtprodcmplt($this->getOedtprodcmplt());
        $copyObj->setOedterflag($this->getOedterflag());
        $copyObj->setOedtorigitem($this->getOedtorigitem());
        $copyObj->setOedtsubflag($this->getOedtsubflag());
        $copyObj->setOedtediincomingseq($this->getOedtediincomingseq());
        $copyObj->setOedtspordpoline($this->getOedtspordpoline());
        $copyObj->setOedtcatlgid($this->getOedtcatlgid());
        $copyObj->setOedtdiscpct($this->getOedtdiscpct());
        $copyObj->setOedtdealpush($this->getOedtdealpush());
        $copyObj->setOedtcoreflag($this->getOedtcoreflag());
        $copyObj->setOedtnssalesacct($this->getOedtnssalesacct());
        $copyObj->setOedtcertreqd($this->getOedtcertreqd());
        $copyObj->setOedtaddonsales($this->getOedtaddonsales());
        $copyObj->setOedtbordflag($this->getOedtbordflag());
        $copyObj->setOedtitemref($this->getOedtitemref());
        $copyObj->setOedtwgtaxcode($this->getOedtwgtaxcode());
        $copyObj->setOedtwgprice($this->getOedtwgprice());
        $copyObj->setOedtwgtot($this->getOedtwgtot());
        $copyObj->setOedtcntrqty($this->getOedtcntrqty());
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
     * @return \SoDetail Clone of current object.
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
     * Declares an association between this object and a ChildSoHeader object.
     *
     * @param  ChildSoHeader $v
     * @return $this|\SoDetail The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSoHeader(ChildSoHeader $v = null)
    {
        if ($v === null) {
            $this->setOehdnbr(0);
        } else {
            $this->setOehdnbr($v->getOehdnbr());
        }

        $this->aSoHeader = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSoHeader object, it will not be re-added.
        if ($v !== null) {
            $v->addSoDetail($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSoHeader object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSoHeader The associated ChildSoHeader object.
     * @throws PropelException
     */
    public function getSoHeader(ConnectionInterface $con = null)
    {
        if ($this->aSoHeader === null && ($this->oehdnbr != 0)) {
            $this->aSoHeader = ChildSoHeaderQuery::create()->findPk($this->oehdnbr, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSoHeader->addSoDetails($this);
             */
        }

        return $this->aSoHeader;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aSoHeader) {
            $this->aSoHeader->removeSoDetail($this);
        }
        $this->oehdnbr = null;
        $this->oedtline = null;
        $this->inititemnbr = null;
        $this->oedtdesc = null;
        $this->oedtdesc2 = null;
        $this->intbwhse = null;
        $this->oedtrqstdate = null;
        $this->oedtcancdate = null;
        $this->oedtshipdate = null;
        $this->oedtspecordr = null;
        $this->artbmtaxcode = null;
        $this->oedtqtyord = null;
        $this->oedtqtyship = null;
        $this->oedtqtyshiptot = null;
        $this->oedtqtybord = null;
        $this->oedtpric = null;
        $this->oedtcost = null;
        $this->oedttaxpcttot = null;
        $this->oedtprictot = null;
        $this->oedtcosttot = null;
        $this->oedtbrkncaseqty = null;
        $this->oedtbin = null;
        $this->oedtpersonalcd = null;
        $this->oedtcorepric = null;
        $this->oedtasstcode = null;
        $this->oedtasstqty = null;
        $this->oedtlistpric = null;
        $this->oedtstancost = null;
        $this->oedtvenditemjob = null;
        $this->apvevendid = null;
        $this->oedtnsitemgrup = null;
        $this->oedtusecode = null;
        $this->oedtnsshipfromid = null;
        $this->oedtasstovrd = null;
        $this->oedtdealflag = null;
        $this->oedtpickflag = null;
        $this->oedtmstrtaxcode1 = null;
        $this->oedtmstrtaxpct1 = null;
        $this->oedtmstrtaxcode2 = null;
        $this->oedtmstrtaxpct2 = null;
        $this->oedtmstrtaxcode3 = null;
        $this->oedtmstrtaxpct3 = null;
        $this->oedtmstrtaxcode4 = null;
        $this->oedtmstrtaxpct4 = null;
        $this->oedtmstrtaxcode5 = null;
        $this->oedtmstrtaxpct5 = null;
        $this->oedtmstrtaxcode6 = null;
        $this->oedtmstrtaxpct6 = null;
        $this->oedtmstrtaxcode7 = null;
        $this->oedtmstrtaxpct7 = null;
        $this->oedtmstrtaxcode8 = null;
        $this->oedtmstrtaxpct8 = null;
        $this->oedtmstrtaxcode9 = null;
        $this->oedtmstrtaxpct9 = null;
        $this->oedtbinarea = null;
        $this->oedtsplitline = null;
        $this->oedtorigline = null;
        $this->oedtcustcrssref = null;
        $this->intbuomsale = null;
        $this->oedtshipflag = null;
        $this->oedtkitflag = null;
        $this->oedtkititemnbr = null;
        $this->oedtbfcost = null;
        $this->oedtbfmsgcode = null;
        $this->oedtbfcosttot = null;
        $this->oedtwght = null;
        $this->oedtqbpicker = null;
        $this->oedtpodetlinenbr = null;
        $this->oedtqtytoship = null;
        $this->oedtponbr = null;
        $this->oedtporef = null;
        $this->oedtfrtin = null;
        $this->oedtfrtinentered = null;
        $this->oedtprodcmplt = null;
        $this->oedterflag = null;
        $this->oedtorigitem = null;
        $this->oedtsubflag = null;
        $this->oedtediincomingseq = null;
        $this->oedtspordpoline = null;
        $this->oedtcatlgid = null;
        $this->oedtdiscpct = null;
        $this->oedtdealpush = null;
        $this->oedtcoreflag = null;
        $this->oedtnssalesacct = null;
        $this->oedtcertreqd = null;
        $this->oedtaddonsales = null;
        $this->oedtbordflag = null;
        $this->oedtitemref = null;
        $this->oedtwgtaxcode = null;
        $this->oedtwgprice = null;
        $this->oedtwgtot = null;
        $this->oedtcntrqty = null;
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

        $this->aSoHeader = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SoDetailTableMap::DEFAULT_STRING_FORMAT);
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
