<?php

namespace Base;

use \SoDetail as ChildSoDetail;
use \SoDetailQuery as ChildSoDetailQuery;
use \SoHeader as ChildSoHeader;
use \SoHeaderQuery as ChildSoHeaderQuery;
use \Exception;
use \PDO;
use Map\SoDetailTableMap;
use Map\SoHeaderTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;

/**
 * Base class that represents a row from the 'SO_HEADER' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class SoHeader implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\SoHeaderTableMap';


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
     * The value for the oehdstat field.
     *
     * @var        string
     */
    protected $oehdstat;

    /**
     * The value for the oehdhold field.
     *
     * @var        string
     */
    protected $oehdhold;

    /**
     * The value for the arcucustid field.
     *
     * @var        string
     */
    protected $arcucustid;

    /**
     * The value for the arstshipid field.
     *
     * @var        string
     */
    protected $arstshipid;

    /**
     * The value for the oehdstlastname field.
     *
     * @var        string
     */
    protected $oehdstlastname;

    /**
     * The value for the oehdstfirstname field.
     *
     * @var        string
     */
    protected $oehdstfirstname;

    /**
     * The value for the oehdstadr1 field.
     *
     * @var        string
     */
    protected $oehdstadr1;

    /**
     * The value for the oehdstadr2 field.
     *
     * @var        string
     */
    protected $oehdstadr2;

    /**
     * The value for the oehdstadr3 field.
     *
     * @var        string
     */
    protected $oehdstadr3;

    /**
     * The value for the oehdstctry field.
     *
     * @var        string
     */
    protected $oehdstctry;

    /**
     * The value for the oehdstcity field.
     *
     * @var        string
     */
    protected $oehdstcity;

    /**
     * The value for the oehdststat field.
     *
     * @var        string
     */
    protected $oehdststat;

    /**
     * The value for the oehdstzipcode field.
     *
     * @var        string
     */
    protected $oehdstzipcode;

    /**
     * The value for the oehdcustpo field.
     *
     * @var        string
     */
    protected $oehdcustpo;

    /**
     * The value for the oehdordrdate field.
     *
     * @var        int
     */
    protected $oehdordrdate;

    /**
     * The value for the artmtermcd field.
     *
     * @var        string
     */
    protected $artmtermcd;

    /**
     * The value for the artbshipvia field.
     *
     * @var        string
     */
    protected $artbshipvia;

    /**
     * The value for the arininvnbr field.
     *
     * @var        int
     */
    protected $arininvnbr;

    /**
     * The value for the oehdinvdate field.
     *
     * @var        int
     */
    protected $oehdinvdate;

    /**
     * The value for the oehdglpd field.
     *
     * @var        int
     */
    protected $oehdglpd;

    /**
     * The value for the arspsaleper1 field.
     *
     * @var        string
     */
    protected $arspsaleper1;

    /**
     * The value for the oehdsp1pct field.
     *
     * @var        string
     */
    protected $oehdsp1pct;

    /**
     * The value for the arspsaleper2 field.
     *
     * @var        string
     */
    protected $arspsaleper2;

    /**
     * The value for the oehdsp2pct field.
     *
     * @var        string
     */
    protected $oehdsp2pct;

    /**
     * The value for the arspsaleper3 field.
     *
     * @var        string
     */
    protected $arspsaleper3;

    /**
     * The value for the oehdsp3pct field.
     *
     * @var        string
     */
    protected $oehdsp3pct;

    /**
     * The value for the oehdcntrnbr field.
     *
     * @var        int
     */
    protected $oehdcntrnbr;

    /**
     * The value for the oehddroprelhold field.
     *
     * @var        string
     */
    protected $oehddroprelhold;

    /**
     * The value for the oehdtaxsub field.
     *
     * @var        string
     */
    protected $oehdtaxsub;

    /**
     * The value for the oehdnontaxsub field.
     *
     * @var        string
     */
    protected $oehdnontaxsub;

    /**
     * The value for the oehdtaxtot field.
     *
     * @var        string
     */
    protected $oehdtaxtot;

    /**
     * The value for the oehdfrttot field.
     *
     * @var        string
     */
    protected $oehdfrttot;

    /**
     * The value for the oehdmisctot field.
     *
     * @var        string
     */
    protected $oehdmisctot;

    /**
     * The value for the oehdordrtot field.
     *
     * @var        string
     */
    protected $oehdordrtot;

    /**
     * The value for the oehdcosttot field.
     *
     * @var        string
     */
    protected $oehdcosttot;

    /**
     * The value for the oehdspcommlock field.
     *
     * @var        string
     */
    protected $oehdspcommlock;

    /**
     * The value for the oehdtakendate field.
     *
     * @var        int
     */
    protected $oehdtakendate;

    /**
     * The value for the oehdtakentime field.
     *
     * @var        int
     */
    protected $oehdtakentime;

    /**
     * The value for the oehdpickdate field.
     *
     * @var        int
     */
    protected $oehdpickdate;

    /**
     * The value for the oehdpicktime field.
     *
     * @var        int
     */
    protected $oehdpicktime;

    /**
     * The value for the oehdpackdate field.
     *
     * @var        int
     */
    protected $oehdpackdate;

    /**
     * The value for the oehdpacktime field.
     *
     * @var        int
     */
    protected $oehdpacktime;

    /**
     * The value for the oehdverifydate field.
     *
     * @var        int
     */
    protected $oehdverifydate;

    /**
     * The value for the oehdverifytime field.
     *
     * @var        int
     */
    protected $oehdverifytime;

    /**
     * The value for the oehdcreditmemo field.
     *
     * @var        string
     */
    protected $oehdcreditmemo;

    /**
     * The value for the oehdbookedyn field.
     *
     * @var        string
     */
    protected $oehdbookedyn;

    /**
     * The value for the intbwhseorig field.
     *
     * @var        string
     */
    protected $intbwhseorig;

    /**
     * The value for the oehdbtstat field.
     *
     * @var        string
     */
    protected $oehdbtstat;

    /**
     * The value for the oehdshipcomp field.
     *
     * @var        string
     */
    protected $oehdshipcomp;

    /**
     * The value for the oehdcwoflag field.
     *
     * @var        string
     */
    protected $oehdcwoflag;

    /**
     * The value for the oehddivision field.
     *
     * @var        string
     */
    protected $oehddivision;

    /**
     * The value for the oehdtakencode field.
     *
     * @var        string
     */
    protected $oehdtakencode;

    /**
     * The value for the oehdpickcode field.
     *
     * @var        string
     */
    protected $oehdpickcode;

    /**
     * The value for the oehdpackcode field.
     *
     * @var        string
     */
    protected $oehdpackcode;

    /**
     * The value for the oehdverifycode field.
     *
     * @var        string
     */
    protected $oehdverifycode;

    /**
     * The value for the oehdtotdisc field.
     *
     * @var        string
     */
    protected $oehdtotdisc;

    /**
     * The value for the oehdedirefnbrqual field.
     *
     * @var        string
     */
    protected $oehdedirefnbrqual;

    /**
     * The value for the oehdusercode1 field.
     *
     * @var        string
     */
    protected $oehdusercode1;

    /**
     * The value for the oehdusercode2 field.
     *
     * @var        string
     */
    protected $oehdusercode2;

    /**
     * The value for the oehdusercode3 field.
     *
     * @var        string
     */
    protected $oehdusercode3;

    /**
     * The value for the oehdusercode4 field.
     *
     * @var        string
     */
    protected $oehdusercode4;

    /**
     * The value for the oehdexchctry field.
     *
     * @var        string
     */
    protected $oehdexchctry;

    /**
     * The value for the oehdexchrate field.
     *
     * @var        string
     */
    protected $oehdexchrate;

    /**
     * The value for the oehdwght field.
     *
     * @var        string
     */
    protected $oehdwght;

    /**
     * The value for the oehdqbpacker field.
     *
     * @var        string
     */
    protected $oehdqbpacker;

    /**
     * The value for the oehdqblabeler1 field.
     *
     * @var        string
     */
    protected $oehdqblabeler1;

    /**
     * The value for the oehdqblabeler2 field.
     *
     * @var        string
     */
    protected $oehdqblabeler2;

    /**
     * The value for the oehdboxcount field.
     *
     * @var        int
     */
    protected $oehdboxcount;

    /**
     * The value for the oehdrqstdate field.
     *
     * @var        int
     */
    protected $oehdrqstdate;

    /**
     * The value for the oehdcancdate field.
     *
     * @var        int
     */
    protected $oehdcancdate;

    /**
     * The value for the oehdcrntuser field.
     *
     * @var        string
     */
    protected $oehdcrntuser;

    /**
     * The value for the oehdreleasenbr field.
     *
     * @var        string
     */
    protected $oehdreleasenbr;

    /**
     * The value for the intbwhse field.
     *
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the oehdbordbuilddate field.
     *
     * @var        int
     */
    protected $oehdbordbuilddate;

    /**
     * The value for the oehddeptcode field.
     *
     * @var        string
     */
    protected $oehddeptcode;

    /**
     * The value for the oehdfrtinentered field.
     *
     * @var        string
     */
    protected $oehdfrtinentered;

    /**
     * The value for the dropshipentered field.
     *
     * @var        string
     */
    protected $dropshipentered;

    /**
     * The value for the oehderflag field.
     *
     * @var        string
     */
    protected $oehderflag;

    /**
     * The value for the oehdfrtin field.
     *
     * @var        string
     */
    protected $oehdfrtin;

    /**
     * The value for the oehddropship field.
     *
     * @var        string
     */
    protected $oehddropship;

    /**
     * The value for the oehdminorder field.
     *
     * @var        string
     */
    protected $oehdminorder;

    /**
     * The value for the oehdcontractterms field.
     *
     * @var        string
     */
    protected $oehdcontractterms;

    /**
     * The value for the oehddiscdate1 field.
     *
     * @var        int
     */
    protected $oehddiscdate1;

    /**
     * The value for the oehddiscpct1 field.
     *
     * @var        string
     */
    protected $oehddiscpct1;

    /**
     * The value for the oehdduedate1 field.
     *
     * @var        int
     */
    protected $oehdduedate1;

    /**
     * The value for the oehddueamt1 field.
     *
     * @var        string
     */
    protected $oehddueamt1;

    /**
     * The value for the oehdduepct1 field.
     *
     * @var        string
     */
    protected $oehdduepct1;

    /**
     * The value for the oehddiscdate2 field.
     *
     * @var        int
     */
    protected $oehddiscdate2;

    /**
     * The value for the oehddiscpct2 field.
     *
     * @var        string
     */
    protected $oehddiscpct2;

    /**
     * The value for the oehdduedate2 field.
     *
     * @var        int
     */
    protected $oehdduedate2;

    /**
     * The value for the oehddueamt2 field.
     *
     * @var        string
     */
    protected $oehddueamt2;

    /**
     * The value for the oehdduepct2 field.
     *
     * @var        string
     */
    protected $oehdduepct2;

    /**
     * The value for the oehddiscdate3 field.
     *
     * @var        int
     */
    protected $oehddiscdate3;

    /**
     * The value for the oehddiscpct3 field.
     *
     * @var        string
     */
    protected $oehddiscpct3;

    /**
     * The value for the oehdduedate3 field.
     *
     * @var        int
     */
    protected $oehdduedate3;

    /**
     * The value for the oehddueamt3 field.
     *
     * @var        string
     */
    protected $oehddueamt3;

    /**
     * The value for the oehdduepct3 field.
     *
     * @var        string
     */
    protected $oehdduepct3;

    /**
     * The value for the oehddiscdate4 field.
     *
     * @var        int
     */
    protected $oehddiscdate4;

    /**
     * The value for the oehddiscpct4 field.
     *
     * @var        string
     */
    protected $oehddiscpct4;

    /**
     * The value for the oehdduedate4 field.
     *
     * @var        int
     */
    protected $oehdduedate4;

    /**
     * The value for the oehddueamt4 field.
     *
     * @var        string
     */
    protected $oehddueamt4;

    /**
     * The value for the oehdduepct4 field.
     *
     * @var        string
     */
    protected $oehdduepct4;

    /**
     * The value for the oehddiscdate5 field.
     *
     * @var        int
     */
    protected $oehddiscdate5;

    /**
     * The value for the oehddiscpct5 field.
     *
     * @var        string
     */
    protected $oehddiscpct5;

    /**
     * The value for the oehdduedate5 field.
     *
     * @var        int
     */
    protected $oehdduedate5;

    /**
     * The value for the oehddueamt5 field.
     *
     * @var        string
     */
    protected $oehddueamt5;

    /**
     * The value for the oehdduepct5 field.
     *
     * @var        string
     */
    protected $oehdduepct5;

    /**
     * The value for the oehddropshipbilled field.
     *
     * @var        string
     */
    protected $oehddropshipbilled;

    /**
     * The value for the oehdordtyp field.
     *
     * @var        string
     */
    protected $oehdordtyp;

    /**
     * The value for the oehdtracknbr field.
     *
     * @var        string
     */
    protected $oehdtracknbr;

    /**
     * The value for the oehdsource field.
     *
     * @var        string
     */
    protected $oehdsource;

    /**
     * The value for the oehdccaprv field.
     *
     * @var        string
     */
    protected $oehdccaprv;

    /**
     * The value for the oehdpickfmattype field.
     *
     * @var        string
     */
    protected $oehdpickfmattype;

    /**
     * The value for the oehdinvcfmattype field.
     *
     * @var        string
     */
    protected $oehdinvcfmattype;

    /**
     * The value for the oehdcashamt field.
     *
     * @var        string
     */
    protected $oehdcashamt;

    /**
     * The value for the oehdcheckamt field.
     *
     * @var        string
     */
    protected $oehdcheckamt;

    /**
     * The value for the oehdchecknbr field.
     *
     * @var        string
     */
    protected $oehdchecknbr;

    /**
     * The value for the oehddepositamt field.
     *
     * @var        string
     */
    protected $oehddepositamt;

    /**
     * The value for the oehddepositnbr field.
     *
     * @var        string
     */
    protected $oehddepositnbr;

    /**
     * The value for the oehdccamt field.
     *
     * @var        string
     */
    protected $oehdccamt;

    /**
     * The value for the oehdotaxsub field.
     *
     * @var        string
     */
    protected $oehdotaxsub;

    /**
     * The value for the oehdonontaxsub field.
     *
     * @var        string
     */
    protected $oehdonontaxsub;

    /**
     * The value for the oehdotaxtot field.
     *
     * @var        string
     */
    protected $oehdotaxtot;

    /**
     * The value for the oehdoordrtot field.
     *
     * @var        string
     */
    protected $oehdoordrtot;

    /**
     * The value for the oehdpickprintdate field.
     *
     * @var        int
     */
    protected $oehdpickprintdate;

    /**
     * The value for the oehdpickprinttime field.
     *
     * @var        int
     */
    protected $oehdpickprinttime;

    /**
     * The value for the oehdcont field.
     *
     * @var        string
     */
    protected $oehdcont;

    /**
     * The value for the oehdcontteleintl field.
     *
     * @var        string
     */
    protected $oehdcontteleintl;

    /**
     * The value for the oehdconttelenbr field.
     *
     * @var        string
     */
    protected $oehdconttelenbr;

    /**
     * The value for the oehdcontteleext field.
     *
     * @var        string
     */
    protected $oehdcontteleext;

    /**
     * The value for the oehdcontfaxintl field.
     *
     * @var        string
     */
    protected $oehdcontfaxintl;

    /**
     * The value for the oehdcontfaxnbr field.
     *
     * @var        int
     */
    protected $oehdcontfaxnbr;

    /**
     * The value for the oehdmailid field.
     *
     * @var        string
     */
    protected $oehdmailid;

    /**
     * The value for the oehdchgdue field.
     *
     * @var        string
     */
    protected $oehdchgdue;

    /**
     * The value for the oehdaddlpricdisc field.
     *
     * @var        string
     */
    protected $oehdaddlpricdisc;

    /**
     * The value for the oehdallship field.
     *
     * @var        string
     */
    protected $oehdallship;

    /**
     * The value for the oehdqtyorderamt field.
     *
     * @var        string
     */
    protected $oehdqtyorderamt;

    /**
     * The value for the oehdqtytaxtot field.
     *
     * @var        string
     */
    protected $oehdqtytaxtot;

    /**
     * The value for the oehdqtyfrtin field.
     *
     * @var        string
     */
    protected $oehdqtyfrtin;

    /**
     * The value for the oehdorideshipcomp field.
     *
     * @var        string
     */
    protected $oehdorideshipcomp;

    /**
     * The value for the oehdcontemail field.
     *
     * @var        string
     */
    protected $oehdcontemail;

    /**
     * The value for the oehdmanualfrt field.
     *
     * @var        string
     */
    protected $oehdmanualfrt;

    /**
     * The value for the oehdinternalfrt field.
     *
     * @var        string
     */
    protected $oehdinternalfrt;

    /**
     * The value for the oehdfrtcost field.
     *
     * @var        string
     */
    protected $oehdfrtcost;

    /**
     * The value for the oehdroute field.
     *
     * @var        string
     */
    protected $oehdroute;

    /**
     * The value for the oehdrouteseq field.
     *
     * @var        int
     */
    protected $oehdrouteseq;

    /**
     * The value for the oehdfrttaxcode1 field.
     *
     * @var        string
     */
    protected $oehdfrttaxcode1;

    /**
     * The value for the oehdfrttaxamt1 field.
     *
     * @var        string
     */
    protected $oehdfrttaxamt1;

    /**
     * The value for the oehdfrttaxcode2 field.
     *
     * @var        string
     */
    protected $oehdfrttaxcode2;

    /**
     * The value for the oehdfrttaxamt2 field.
     *
     * @var        string
     */
    protected $oehdfrttaxamt2;

    /**
     * The value for the oehdfrttaxcode3 field.
     *
     * @var        string
     */
    protected $oehdfrttaxcode3;

    /**
     * The value for the oehdfrttaxamt3 field.
     *
     * @var        string
     */
    protected $oehdfrttaxamt3;

    /**
     * The value for the oehdfrttaxcode4 field.
     *
     * @var        string
     */
    protected $oehdfrttaxcode4;

    /**
     * The value for the oehdfrttaxamt4 field.
     *
     * @var        string
     */
    protected $oehdfrttaxamt4;

    /**
     * The value for the oehdfrttaxcode5 field.
     *
     * @var        string
     */
    protected $oehdfrttaxcode5;

    /**
     * The value for the oehdfrttaxamt5 field.
     *
     * @var        string
     */
    protected $oehdfrttaxamt5;

    /**
     * The value for the oehdedi855sent field.
     *
     * @var        string
     */
    protected $oehdedi855sent;

    /**
     * The value for the oehdfrt3rdparty field.
     *
     * @var        string
     */
    protected $oehdfrt3rdparty;

    /**
     * The value for the oehdfob field.
     *
     * @var        string
     */
    protected $oehdfob;

    /**
     * The value for the oehdconfirmimagyn field.
     *
     * @var        string
     */
    protected $oehdconfirmimagyn;

    /**
     * The value for the oehdcstkconsign field.
     *
     * @var        string
     */
    protected $oehdcstkconsign;

    /**
     * The value for the oehdstoreid field.
     *
     * @var        string
     */
    protected $oehdstoreid;

    /**
     * The value for the oehdpickqueue field.
     *
     * @var        string
     */
    protected $oehdpickqueue;

    /**
     * The value for the oehdarrvdate field.
     *
     * @var        int
     */
    protected $oehdarrvdate;

    /**
     * The value for the oehdsurchgstat field.
     *
     * @var        string
     */
    protected $oehdsurchgstat;

    /**
     * The value for the oehdfrtgrup field.
     *
     * @var        string
     */
    protected $oehdfrtgrup;

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
     * @var        ObjectCollection|ChildSoDetail[] Collection to store aggregation of ChildSoDetail objects.
     */
    protected $collSoDetails;
    protected $collSoDetailsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSoDetail[]
     */
    protected $soDetailsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->oehdnbr = 0;
    }

    /**
     * Initializes internal state of Base\SoHeader object.
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
     * Compares this with another <code>SoHeader</code> instance.  If
     * <code>obj</code> is an instance of <code>SoHeader</code>, delegates to
     * <code>equals(SoHeader)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|SoHeader The current object, for fluid interface
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
     * Get the [oehdstat] column value.
     *
     * @return string
     */
    public function getOehdstat()
    {
        return $this->oehdstat;
    }

    /**
     * Get the [oehdhold] column value.
     *
     * @return string
     */
    public function getOehdhold()
    {
        return $this->oehdhold;
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
     * Get the [oehdstlastname] column value.
     *
     * @return string
     */
    public function getOehdstlastname()
    {
        return $this->oehdstlastname;
    }

    /**
     * Get the [oehdstfirstname] column value.
     *
     * @return string
     */
    public function getOehdstfirstname()
    {
        return $this->oehdstfirstname;
    }

    /**
     * Get the [oehdstadr1] column value.
     *
     * @return string
     */
    public function getOehdstadr1()
    {
        return $this->oehdstadr1;
    }

    /**
     * Get the [oehdstadr2] column value.
     *
     * @return string
     */
    public function getOehdstadr2()
    {
        return $this->oehdstadr2;
    }

    /**
     * Get the [oehdstadr3] column value.
     *
     * @return string
     */
    public function getOehdstadr3()
    {
        return $this->oehdstadr3;
    }

    /**
     * Get the [oehdstctry] column value.
     *
     * @return string
     */
    public function getOehdstctry()
    {
        return $this->oehdstctry;
    }

    /**
     * Get the [oehdstcity] column value.
     *
     * @return string
     */
    public function getOehdstcity()
    {
        return $this->oehdstcity;
    }

    /**
     * Get the [oehdststat] column value.
     *
     * @return string
     */
    public function getOehdststat()
    {
        return $this->oehdststat;
    }

    /**
     * Get the [oehdstzipcode] column value.
     *
     * @return string
     */
    public function getOehdstzipcode()
    {
        return $this->oehdstzipcode;
    }

    /**
     * Get the [oehdcustpo] column value.
     *
     * @return string
     */
    public function getOehdcustpo()
    {
        return $this->oehdcustpo;
    }

    /**
     * Get the [oehdordrdate] column value.
     *
     * @return int
     */
    public function getOehdordrdate()
    {
        return $this->oehdordrdate;
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
     * Get the [artbshipvia] column value.
     *
     * @return string
     */
    public function getArtbshipvia()
    {
        return $this->artbshipvia;
    }

    /**
     * Get the [arininvnbr] column value.
     *
     * @return int
     */
    public function getArininvnbr()
    {
        return $this->arininvnbr;
    }

    /**
     * Get the [oehdinvdate] column value.
     *
     * @return int
     */
    public function getOehdinvdate()
    {
        return $this->oehdinvdate;
    }

    /**
     * Get the [oehdglpd] column value.
     *
     * @return int
     */
    public function getOehdglpd()
    {
        return $this->oehdglpd;
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
     * Get the [oehdsp1pct] column value.
     *
     * @return string
     */
    public function getOehdsp1pct()
    {
        return $this->oehdsp1pct;
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
     * Get the [oehdsp2pct] column value.
     *
     * @return string
     */
    public function getOehdsp2pct()
    {
        return $this->oehdsp2pct;
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
     * Get the [oehdsp3pct] column value.
     *
     * @return string
     */
    public function getOehdsp3pct()
    {
        return $this->oehdsp3pct;
    }

    /**
     * Get the [oehdcntrnbr] column value.
     *
     * @return int
     */
    public function getOehdcntrnbr()
    {
        return $this->oehdcntrnbr;
    }

    /**
     * Get the [oehddroprelhold] column value.
     *
     * @return string
     */
    public function getOehddroprelhold()
    {
        return $this->oehddroprelhold;
    }

    /**
     * Get the [oehdtaxsub] column value.
     *
     * @return string
     */
    public function getOehdtaxsub()
    {
        return $this->oehdtaxsub;
    }

    /**
     * Get the [oehdnontaxsub] column value.
     *
     * @return string
     */
    public function getOehdnontaxsub()
    {
        return $this->oehdnontaxsub;
    }

    /**
     * Get the [oehdtaxtot] column value.
     *
     * @return string
     */
    public function getOehdtaxtot()
    {
        return $this->oehdtaxtot;
    }

    /**
     * Get the [oehdfrttot] column value.
     *
     * @return string
     */
    public function getOehdfrttot()
    {
        return $this->oehdfrttot;
    }

    /**
     * Get the [oehdmisctot] column value.
     *
     * @return string
     */
    public function getOehdmisctot()
    {
        return $this->oehdmisctot;
    }

    /**
     * Get the [oehdordrtot] column value.
     *
     * @return string
     */
    public function getOehdordrtot()
    {
        return $this->oehdordrtot;
    }

    /**
     * Get the [oehdcosttot] column value.
     *
     * @return string
     */
    public function getOehdcosttot()
    {
        return $this->oehdcosttot;
    }

    /**
     * Get the [oehdspcommlock] column value.
     *
     * @return string
     */
    public function getOehdspcommlock()
    {
        return $this->oehdspcommlock;
    }

    /**
     * Get the [oehdtakendate] column value.
     *
     * @return int
     */
    public function getOehdtakendate()
    {
        return $this->oehdtakendate;
    }

    /**
     * Get the [oehdtakentime] column value.
     *
     * @return int
     */
    public function getOehdtakentime()
    {
        return $this->oehdtakentime;
    }

    /**
     * Get the [oehdpickdate] column value.
     *
     * @return int
     */
    public function getOehdpickdate()
    {
        return $this->oehdpickdate;
    }

    /**
     * Get the [oehdpicktime] column value.
     *
     * @return int
     */
    public function getOehdpicktime()
    {
        return $this->oehdpicktime;
    }

    /**
     * Get the [oehdpackdate] column value.
     *
     * @return int
     */
    public function getOehdpackdate()
    {
        return $this->oehdpackdate;
    }

    /**
     * Get the [oehdpacktime] column value.
     *
     * @return int
     */
    public function getOehdpacktime()
    {
        return $this->oehdpacktime;
    }

    /**
     * Get the [oehdverifydate] column value.
     *
     * @return int
     */
    public function getOehdverifydate()
    {
        return $this->oehdverifydate;
    }

    /**
     * Get the [oehdverifytime] column value.
     *
     * @return int
     */
    public function getOehdverifytime()
    {
        return $this->oehdverifytime;
    }

    /**
     * Get the [oehdcreditmemo] column value.
     *
     * @return string
     */
    public function getOehdcreditmemo()
    {
        return $this->oehdcreditmemo;
    }

    /**
     * Get the [oehdbookedyn] column value.
     *
     * @return string
     */
    public function getOehdbookedyn()
    {
        return $this->oehdbookedyn;
    }

    /**
     * Get the [intbwhseorig] column value.
     *
     * @return string
     */
    public function getIntbwhseorig()
    {
        return $this->intbwhseorig;
    }

    /**
     * Get the [oehdbtstat] column value.
     *
     * @return string
     */
    public function getOehdbtstat()
    {
        return $this->oehdbtstat;
    }

    /**
     * Get the [oehdshipcomp] column value.
     *
     * @return string
     */
    public function getOehdshipcomp()
    {
        return $this->oehdshipcomp;
    }

    /**
     * Get the [oehdcwoflag] column value.
     *
     * @return string
     */
    public function getOehdcwoflag()
    {
        return $this->oehdcwoflag;
    }

    /**
     * Get the [oehddivision] column value.
     *
     * @return string
     */
    public function getOehddivision()
    {
        return $this->oehddivision;
    }

    /**
     * Get the [oehdtakencode] column value.
     *
     * @return string
     */
    public function getOehdtakencode()
    {
        return $this->oehdtakencode;
    }

    /**
     * Get the [oehdpickcode] column value.
     *
     * @return string
     */
    public function getOehdpickcode()
    {
        return $this->oehdpickcode;
    }

    /**
     * Get the [oehdpackcode] column value.
     *
     * @return string
     */
    public function getOehdpackcode()
    {
        return $this->oehdpackcode;
    }

    /**
     * Get the [oehdverifycode] column value.
     *
     * @return string
     */
    public function getOehdverifycode()
    {
        return $this->oehdverifycode;
    }

    /**
     * Get the [oehdtotdisc] column value.
     *
     * @return string
     */
    public function getOehdtotdisc()
    {
        return $this->oehdtotdisc;
    }

    /**
     * Get the [oehdedirefnbrqual] column value.
     *
     * @return string
     */
    public function getOehdedirefnbrqual()
    {
        return $this->oehdedirefnbrqual;
    }

    /**
     * Get the [oehdusercode1] column value.
     *
     * @return string
     */
    public function getOehdusercode1()
    {
        return $this->oehdusercode1;
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
     * Get the [oehdusercode3] column value.
     *
     * @return string
     */
    public function getOehdusercode3()
    {
        return $this->oehdusercode3;
    }

    /**
     * Get the [oehdusercode4] column value.
     *
     * @return string
     */
    public function getOehdusercode4()
    {
        return $this->oehdusercode4;
    }

    /**
     * Get the [oehdexchctry] column value.
     *
     * @return string
     */
    public function getOehdexchctry()
    {
        return $this->oehdexchctry;
    }

    /**
     * Get the [oehdexchrate] column value.
     *
     * @return string
     */
    public function getOehdexchrate()
    {
        return $this->oehdexchrate;
    }

    /**
     * Get the [oehdwght] column value.
     *
     * @return string
     */
    public function getOehdwght()
    {
        return $this->oehdwght;
    }

    /**
     * Get the [oehdqbpacker] column value.
     *
     * @return string
     */
    public function getOehdqbpacker()
    {
        return $this->oehdqbpacker;
    }

    /**
     * Get the [oehdqblabeler1] column value.
     *
     * @return string
     */
    public function getOehdqblabeler1()
    {
        return $this->oehdqblabeler1;
    }

    /**
     * Get the [oehdqblabeler2] column value.
     *
     * @return string
     */
    public function getOehdqblabeler2()
    {
        return $this->oehdqblabeler2;
    }

    /**
     * Get the [oehdboxcount] column value.
     *
     * @return int
     */
    public function getOehdboxcount()
    {
        return $this->oehdboxcount;
    }

    /**
     * Get the [oehdrqstdate] column value.
     *
     * @return int
     */
    public function getOehdrqstdate()
    {
        return $this->oehdrqstdate;
    }

    /**
     * Get the [oehdcancdate] column value.
     *
     * @return int
     */
    public function getOehdcancdate()
    {
        return $this->oehdcancdate;
    }

    /**
     * Get the [oehdcrntuser] column value.
     *
     * @return string
     */
    public function getOehdcrntuser()
    {
        return $this->oehdcrntuser;
    }

    /**
     * Get the [oehdreleasenbr] column value.
     *
     * @return string
     */
    public function getOehdreleasenbr()
    {
        return $this->oehdreleasenbr;
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
     * Get the [oehdbordbuilddate] column value.
     *
     * @return int
     */
    public function getOehdbordbuilddate()
    {
        return $this->oehdbordbuilddate;
    }

    /**
     * Get the [oehddeptcode] column value.
     *
     * @return string
     */
    public function getOehddeptcode()
    {
        return $this->oehddeptcode;
    }

    /**
     * Get the [oehdfrtinentered] column value.
     *
     * @return string
     */
    public function getOehdfrtinentered()
    {
        return $this->oehdfrtinentered;
    }

    /**
     * Get the [dropshipentered] column value.
     *
     * @return string
     */
    public function getDropshipentered()
    {
        return $this->dropshipentered;
    }

    /**
     * Get the [oehderflag] column value.
     *
     * @return string
     */
    public function getOehderflag()
    {
        return $this->oehderflag;
    }

    /**
     * Get the [oehdfrtin] column value.
     *
     * @return string
     */
    public function getOehdfrtin()
    {
        return $this->oehdfrtin;
    }

    /**
     * Get the [oehddropship] column value.
     *
     * @return string
     */
    public function getOehddropship()
    {
        return $this->oehddropship;
    }

    /**
     * Get the [oehdminorder] column value.
     *
     * @return string
     */
    public function getOehdminorder()
    {
        return $this->oehdminorder;
    }

    /**
     * Get the [oehdcontractterms] column value.
     *
     * @return string
     */
    public function getOehdcontractterms()
    {
        return $this->oehdcontractterms;
    }

    /**
     * Get the [oehddiscdate1] column value.
     *
     * @return int
     */
    public function getOehddiscdate1()
    {
        return $this->oehddiscdate1;
    }

    /**
     * Get the [oehddiscpct1] column value.
     *
     * @return string
     */
    public function getOehddiscpct1()
    {
        return $this->oehddiscpct1;
    }

    /**
     * Get the [oehdduedate1] column value.
     *
     * @return int
     */
    public function getOehdduedate1()
    {
        return $this->oehdduedate1;
    }

    /**
     * Get the [oehddueamt1] column value.
     *
     * @return string
     */
    public function getOehddueamt1()
    {
        return $this->oehddueamt1;
    }

    /**
     * Get the [oehdduepct1] column value.
     *
     * @return string
     */
    public function getOehdduepct1()
    {
        return $this->oehdduepct1;
    }

    /**
     * Get the [oehddiscdate2] column value.
     *
     * @return int
     */
    public function getOehddiscdate2()
    {
        return $this->oehddiscdate2;
    }

    /**
     * Get the [oehddiscpct2] column value.
     *
     * @return string
     */
    public function getOehddiscpct2()
    {
        return $this->oehddiscpct2;
    }

    /**
     * Get the [oehdduedate2] column value.
     *
     * @return int
     */
    public function getOehdduedate2()
    {
        return $this->oehdduedate2;
    }

    /**
     * Get the [oehddueamt2] column value.
     *
     * @return string
     */
    public function getOehddueamt2()
    {
        return $this->oehddueamt2;
    }

    /**
     * Get the [oehdduepct2] column value.
     *
     * @return string
     */
    public function getOehdduepct2()
    {
        return $this->oehdduepct2;
    }

    /**
     * Get the [oehddiscdate3] column value.
     *
     * @return int
     */
    public function getOehddiscdate3()
    {
        return $this->oehddiscdate3;
    }

    /**
     * Get the [oehddiscpct3] column value.
     *
     * @return string
     */
    public function getOehddiscpct3()
    {
        return $this->oehddiscpct3;
    }

    /**
     * Get the [oehdduedate3] column value.
     *
     * @return int
     */
    public function getOehdduedate3()
    {
        return $this->oehdduedate3;
    }

    /**
     * Get the [oehddueamt3] column value.
     *
     * @return string
     */
    public function getOehddueamt3()
    {
        return $this->oehddueamt3;
    }

    /**
     * Get the [oehdduepct3] column value.
     *
     * @return string
     */
    public function getOehdduepct3()
    {
        return $this->oehdduepct3;
    }

    /**
     * Get the [oehddiscdate4] column value.
     *
     * @return int
     */
    public function getOehddiscdate4()
    {
        return $this->oehddiscdate4;
    }

    /**
     * Get the [oehddiscpct4] column value.
     *
     * @return string
     */
    public function getOehddiscpct4()
    {
        return $this->oehddiscpct4;
    }

    /**
     * Get the [oehdduedate4] column value.
     *
     * @return int
     */
    public function getOehdduedate4()
    {
        return $this->oehdduedate4;
    }

    /**
     * Get the [oehddueamt4] column value.
     *
     * @return string
     */
    public function getOehddueamt4()
    {
        return $this->oehddueamt4;
    }

    /**
     * Get the [oehdduepct4] column value.
     *
     * @return string
     */
    public function getOehdduepct4()
    {
        return $this->oehdduepct4;
    }

    /**
     * Get the [oehddiscdate5] column value.
     *
     * @return int
     */
    public function getOehddiscdate5()
    {
        return $this->oehddiscdate5;
    }

    /**
     * Get the [oehddiscpct5] column value.
     *
     * @return string
     */
    public function getOehddiscpct5()
    {
        return $this->oehddiscpct5;
    }

    /**
     * Get the [oehdduedate5] column value.
     *
     * @return int
     */
    public function getOehdduedate5()
    {
        return $this->oehdduedate5;
    }

    /**
     * Get the [oehddueamt5] column value.
     *
     * @return string
     */
    public function getOehddueamt5()
    {
        return $this->oehddueamt5;
    }

    /**
     * Get the [oehdduepct5] column value.
     *
     * @return string
     */
    public function getOehdduepct5()
    {
        return $this->oehdduepct5;
    }

    /**
     * Get the [oehddropshipbilled] column value.
     *
     * @return string
     */
    public function getOehddropshipbilled()
    {
        return $this->oehddropshipbilled;
    }

    /**
     * Get the [oehdordtyp] column value.
     *
     * @return string
     */
    public function getOehdordtyp()
    {
        return $this->oehdordtyp;
    }

    /**
     * Get the [oehdtracknbr] column value.
     *
     * @return string
     */
    public function getOehdtracknbr()
    {
        return $this->oehdtracknbr;
    }

    /**
     * Get the [oehdsource] column value.
     *
     * @return string
     */
    public function getOehdsource()
    {
        return $this->oehdsource;
    }

    /**
     * Get the [oehdccaprv] column value.
     *
     * @return string
     */
    public function getOehdccaprv()
    {
        return $this->oehdccaprv;
    }

    /**
     * Get the [oehdpickfmattype] column value.
     *
     * @return string
     */
    public function getOehdpickfmattype()
    {
        return $this->oehdpickfmattype;
    }

    /**
     * Get the [oehdinvcfmattype] column value.
     *
     * @return string
     */
    public function getOehdinvcfmattype()
    {
        return $this->oehdinvcfmattype;
    }

    /**
     * Get the [oehdcashamt] column value.
     *
     * @return string
     */
    public function getOehdcashamt()
    {
        return $this->oehdcashamt;
    }

    /**
     * Get the [oehdcheckamt] column value.
     *
     * @return string
     */
    public function getOehdcheckamt()
    {
        return $this->oehdcheckamt;
    }

    /**
     * Get the [oehdchecknbr] column value.
     *
     * @return string
     */
    public function getOehdchecknbr()
    {
        return $this->oehdchecknbr;
    }

    /**
     * Get the [oehddepositamt] column value.
     *
     * @return string
     */
    public function getOehddepositamt()
    {
        return $this->oehddepositamt;
    }

    /**
     * Get the [oehddepositnbr] column value.
     *
     * @return string
     */
    public function getOehddepositnbr()
    {
        return $this->oehddepositnbr;
    }

    /**
     * Get the [oehdccamt] column value.
     *
     * @return string
     */
    public function getOehdccamt()
    {
        return $this->oehdccamt;
    }

    /**
     * Get the [oehdotaxsub] column value.
     *
     * @return string
     */
    public function getOehdotaxsub()
    {
        return $this->oehdotaxsub;
    }

    /**
     * Get the [oehdonontaxsub] column value.
     *
     * @return string
     */
    public function getOehdonontaxsub()
    {
        return $this->oehdonontaxsub;
    }

    /**
     * Get the [oehdotaxtot] column value.
     *
     * @return string
     */
    public function getOehdotaxtot()
    {
        return $this->oehdotaxtot;
    }

    /**
     * Get the [oehdoordrtot] column value.
     *
     * @return string
     */
    public function getOehdoordrtot()
    {
        return $this->oehdoordrtot;
    }

    /**
     * Get the [oehdpickprintdate] column value.
     *
     * @return int
     */
    public function getOehdpickprintdate()
    {
        return $this->oehdpickprintdate;
    }

    /**
     * Get the [oehdpickprinttime] column value.
     *
     * @return int
     */
    public function getOehdpickprinttime()
    {
        return $this->oehdpickprinttime;
    }

    /**
     * Get the [oehdcont] column value.
     *
     * @return string
     */
    public function getOehdcont()
    {
        return $this->oehdcont;
    }

    /**
     * Get the [oehdcontteleintl] column value.
     *
     * @return string
     */
    public function getOehdcontteleintl()
    {
        return $this->oehdcontteleintl;
    }

    /**
     * Get the [oehdconttelenbr] column value.
     *
     * @return string
     */
    public function getOehdconttelenbr()
    {
        return $this->oehdconttelenbr;
    }

    /**
     * Get the [oehdcontteleext] column value.
     *
     * @return string
     */
    public function getOehdcontteleext()
    {
        return $this->oehdcontteleext;
    }

    /**
     * Get the [oehdcontfaxintl] column value.
     *
     * @return string
     */
    public function getOehdcontfaxintl()
    {
        return $this->oehdcontfaxintl;
    }

    /**
     * Get the [oehdcontfaxnbr] column value.
     *
     * @return int
     */
    public function getOehdcontfaxnbr()
    {
        return $this->oehdcontfaxnbr;
    }

    /**
     * Get the [oehdmailid] column value.
     *
     * @return string
     */
    public function getOehdmailid()
    {
        return $this->oehdmailid;
    }

    /**
     * Get the [oehdchgdue] column value.
     *
     * @return string
     */
    public function getOehdchgdue()
    {
        return $this->oehdchgdue;
    }

    /**
     * Get the [oehdaddlpricdisc] column value.
     *
     * @return string
     */
    public function getOehdaddlpricdisc()
    {
        return $this->oehdaddlpricdisc;
    }

    /**
     * Get the [oehdallship] column value.
     *
     * @return string
     */
    public function getOehdallship()
    {
        return $this->oehdallship;
    }

    /**
     * Get the [oehdqtyorderamt] column value.
     *
     * @return string
     */
    public function getOehdqtyorderamt()
    {
        return $this->oehdqtyorderamt;
    }

    /**
     * Get the [oehdqtytaxtot] column value.
     *
     * @return string
     */
    public function getOehdqtytaxtot()
    {
        return $this->oehdqtytaxtot;
    }

    /**
     * Get the [oehdqtyfrtin] column value.
     *
     * @return string
     */
    public function getOehdqtyfrtin()
    {
        return $this->oehdqtyfrtin;
    }

    /**
     * Get the [oehdorideshipcomp] column value.
     *
     * @return string
     */
    public function getOehdorideshipcomp()
    {
        return $this->oehdorideshipcomp;
    }

    /**
     * Get the [oehdcontemail] column value.
     *
     * @return string
     */
    public function getOehdcontemail()
    {
        return $this->oehdcontemail;
    }

    /**
     * Get the [oehdmanualfrt] column value.
     *
     * @return string
     */
    public function getOehdmanualfrt()
    {
        return $this->oehdmanualfrt;
    }

    /**
     * Get the [oehdinternalfrt] column value.
     *
     * @return string
     */
    public function getOehdinternalfrt()
    {
        return $this->oehdinternalfrt;
    }

    /**
     * Get the [oehdfrtcost] column value.
     *
     * @return string
     */
    public function getOehdfrtcost()
    {
        return $this->oehdfrtcost;
    }

    /**
     * Get the [oehdroute] column value.
     *
     * @return string
     */
    public function getOehdroute()
    {
        return $this->oehdroute;
    }

    /**
     * Get the [oehdrouteseq] column value.
     *
     * @return int
     */
    public function getOehdrouteseq()
    {
        return $this->oehdrouteseq;
    }

    /**
     * Get the [oehdfrttaxcode1] column value.
     *
     * @return string
     */
    public function getOehdfrttaxcode1()
    {
        return $this->oehdfrttaxcode1;
    }

    /**
     * Get the [oehdfrttaxamt1] column value.
     *
     * @return string
     */
    public function getOehdfrttaxamt1()
    {
        return $this->oehdfrttaxamt1;
    }

    /**
     * Get the [oehdfrttaxcode2] column value.
     *
     * @return string
     */
    public function getOehdfrttaxcode2()
    {
        return $this->oehdfrttaxcode2;
    }

    /**
     * Get the [oehdfrttaxamt2] column value.
     *
     * @return string
     */
    public function getOehdfrttaxamt2()
    {
        return $this->oehdfrttaxamt2;
    }

    /**
     * Get the [oehdfrttaxcode3] column value.
     *
     * @return string
     */
    public function getOehdfrttaxcode3()
    {
        return $this->oehdfrttaxcode3;
    }

    /**
     * Get the [oehdfrttaxamt3] column value.
     *
     * @return string
     */
    public function getOehdfrttaxamt3()
    {
        return $this->oehdfrttaxamt3;
    }

    /**
     * Get the [oehdfrttaxcode4] column value.
     *
     * @return string
     */
    public function getOehdfrttaxcode4()
    {
        return $this->oehdfrttaxcode4;
    }

    /**
     * Get the [oehdfrttaxamt4] column value.
     *
     * @return string
     */
    public function getOehdfrttaxamt4()
    {
        return $this->oehdfrttaxamt4;
    }

    /**
     * Get the [oehdfrttaxcode5] column value.
     *
     * @return string
     */
    public function getOehdfrttaxcode5()
    {
        return $this->oehdfrttaxcode5;
    }

    /**
     * Get the [oehdfrttaxamt5] column value.
     *
     * @return string
     */
    public function getOehdfrttaxamt5()
    {
        return $this->oehdfrttaxamt5;
    }

    /**
     * Get the [oehdedi855sent] column value.
     *
     * @return string
     */
    public function getOehdedi855sent()
    {
        return $this->oehdedi855sent;
    }

    /**
     * Get the [oehdfrt3rdparty] column value.
     *
     * @return string
     */
    public function getOehdfrt3rdparty()
    {
        return $this->oehdfrt3rdparty;
    }

    /**
     * Get the [oehdfob] column value.
     *
     * @return string
     */
    public function getOehdfob()
    {
        return $this->oehdfob;
    }

    /**
     * Get the [oehdconfirmimagyn] column value.
     *
     * @return string
     */
    public function getOehdconfirmimagyn()
    {
        return $this->oehdconfirmimagyn;
    }

    /**
     * Get the [oehdcstkconsign] column value.
     *
     * @return string
     */
    public function getOehdcstkconsign()
    {
        return $this->oehdcstkconsign;
    }

    /**
     * Get the [oehdstoreid] column value.
     *
     * @return string
     */
    public function getOehdstoreid()
    {
        return $this->oehdstoreid;
    }

    /**
     * Get the [oehdpickqueue] column value.
     *
     * @return string
     */
    public function getOehdpickqueue()
    {
        return $this->oehdpickqueue;
    }

    /**
     * Get the [oehdarrvdate] column value.
     *
     * @return int
     */
    public function getOehdarrvdate()
    {
        return $this->oehdarrvdate;
    }

    /**
     * Get the [oehdsurchgstat] column value.
     *
     * @return string
     */
    public function getOehdsurchgstat()
    {
        return $this->oehdsurchgstat;
    }

    /**
     * Get the [oehdfrtgrup] column value.
     *
     * @return string
     */
    public function getOehdfrtgrup()
    {
        return $this->oehdfrtgrup;
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
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdnbr !== $v) {
            $this->oehdnbr = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDNBR] = true;
        }

        return $this;
    } // setOehdnbr()

    /**
     * Set the value of [oehdstat] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstat !== $v) {
            $this->oehdstat = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDSTAT] = true;
        }

        return $this;
    } // setOehdstat()

    /**
     * Set the value of [oehdhold] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdhold($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdhold !== $v) {
            $this->oehdhold = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDHOLD] = true;
        }

        return $this;
    } // setOehdhold()

    /**
     * Set the value of [arcucustid] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_ARCUCUSTID] = true;
        }

        return $this;
    } // setArcucustid()

    /**
     * Set the value of [arstshipid] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setArstshipid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstshipid !== $v) {
            $this->arstshipid = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_ARSTSHIPID] = true;
        }

        return $this;
    } // setArstshipid()

    /**
     * Set the value of [oehdstlastname] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdstlastname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstlastname !== $v) {
            $this->oehdstlastname = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDSTLASTNAME] = true;
        }

        return $this;
    } // setOehdstlastname()

    /**
     * Set the value of [oehdstfirstname] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdstfirstname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstfirstname !== $v) {
            $this->oehdstfirstname = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDSTFIRSTNAME] = true;
        }

        return $this;
    } // setOehdstfirstname()

    /**
     * Set the value of [oehdstadr1] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdstadr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstadr1 !== $v) {
            $this->oehdstadr1 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDSTADR1] = true;
        }

        return $this;
    } // setOehdstadr1()

    /**
     * Set the value of [oehdstadr2] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdstadr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstadr2 !== $v) {
            $this->oehdstadr2 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDSTADR2] = true;
        }

        return $this;
    } // setOehdstadr2()

    /**
     * Set the value of [oehdstadr3] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdstadr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstadr3 !== $v) {
            $this->oehdstadr3 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDSTADR3] = true;
        }

        return $this;
    } // setOehdstadr3()

    /**
     * Set the value of [oehdstctry] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdstctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstctry !== $v) {
            $this->oehdstctry = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDSTCTRY] = true;
        }

        return $this;
    } // setOehdstctry()

    /**
     * Set the value of [oehdstcity] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdstcity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstcity !== $v) {
            $this->oehdstcity = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDSTCITY] = true;
        }

        return $this;
    } // setOehdstcity()

    /**
     * Set the value of [oehdststat] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdststat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdststat !== $v) {
            $this->oehdststat = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDSTSTAT] = true;
        }

        return $this;
    } // setOehdststat()

    /**
     * Set the value of [oehdstzipcode] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdstzipcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstzipcode !== $v) {
            $this->oehdstzipcode = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDSTZIPCODE] = true;
        }

        return $this;
    } // setOehdstzipcode()

    /**
     * Set the value of [oehdcustpo] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdcustpo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcustpo !== $v) {
            $this->oehdcustpo = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCUSTPO] = true;
        }

        return $this;
    } // setOehdcustpo()

    /**
     * Set the value of [oehdordrdate] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdordrdate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdordrdate !== $v) {
            $this->oehdordrdate = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDORDRDATE] = true;
        }

        return $this;
    } // setOehdordrdate()

    /**
     * Set the value of [artmtermcd] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setArtmtermcd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmtermcd !== $v) {
            $this->artmtermcd = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_ARTMTERMCD] = true;
        }

        return $this;
    } // setArtmtermcd()

    /**
     * Set the value of [artbshipvia] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setArtbshipvia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbshipvia !== $v) {
            $this->artbshipvia = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_ARTBSHIPVIA] = true;
        }

        return $this;
    } // setArtbshipvia()

    /**
     * Set the value of [arininvnbr] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setArininvnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arininvnbr !== $v) {
            $this->arininvnbr = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_ARININVNBR] = true;
        }

        return $this;
    } // setArininvnbr()

    /**
     * Set the value of [oehdinvdate] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdinvdate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdinvdate !== $v) {
            $this->oehdinvdate = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDINVDATE] = true;
        }

        return $this;
    } // setOehdinvdate()

    /**
     * Set the value of [oehdglpd] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdglpd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdglpd !== $v) {
            $this->oehdglpd = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDGLPD] = true;
        }

        return $this;
    } // setOehdglpd()

    /**
     * Set the value of [arspsaleper1] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setArspsaleper1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper1 !== $v) {
            $this->arspsaleper1 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_ARSPSALEPER1] = true;
        }

        return $this;
    } // setArspsaleper1()

    /**
     * Set the value of [oehdsp1pct] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdsp1pct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdsp1pct !== $v) {
            $this->oehdsp1pct = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDSP1PCT] = true;
        }

        return $this;
    } // setOehdsp1pct()

    /**
     * Set the value of [arspsaleper2] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setArspsaleper2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper2 !== $v) {
            $this->arspsaleper2 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_ARSPSALEPER2] = true;
        }

        return $this;
    } // setArspsaleper2()

    /**
     * Set the value of [oehdsp2pct] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdsp2pct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdsp2pct !== $v) {
            $this->oehdsp2pct = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDSP2PCT] = true;
        }

        return $this;
    } // setOehdsp2pct()

    /**
     * Set the value of [arspsaleper3] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setArspsaleper3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper3 !== $v) {
            $this->arspsaleper3 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_ARSPSALEPER3] = true;
        }

        return $this;
    } // setArspsaleper3()

    /**
     * Set the value of [oehdsp3pct] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdsp3pct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdsp3pct !== $v) {
            $this->oehdsp3pct = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDSP3PCT] = true;
        }

        return $this;
    } // setOehdsp3pct()

    /**
     * Set the value of [oehdcntrnbr] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdcntrnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdcntrnbr !== $v) {
            $this->oehdcntrnbr = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCNTRNBR] = true;
        }

        return $this;
    } // setOehdcntrnbr()

    /**
     * Set the value of [oehddroprelhold] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddroprelhold($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddroprelhold !== $v) {
            $this->oehddroprelhold = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDROPRELHOLD] = true;
        }

        return $this;
    } // setOehddroprelhold()

    /**
     * Set the value of [oehdtaxsub] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdtaxsub($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdtaxsub !== $v) {
            $this->oehdtaxsub = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDTAXSUB] = true;
        }

        return $this;
    } // setOehdtaxsub()

    /**
     * Set the value of [oehdnontaxsub] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdnontaxsub($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdnontaxsub !== $v) {
            $this->oehdnontaxsub = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDNONTAXSUB] = true;
        }

        return $this;
    } // setOehdnontaxsub()

    /**
     * Set the value of [oehdtaxtot] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdtaxtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdtaxtot !== $v) {
            $this->oehdtaxtot = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDTAXTOT] = true;
        }

        return $this;
    } // setOehdtaxtot()

    /**
     * Set the value of [oehdfrttot] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdfrttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttot !== $v) {
            $this->oehdfrttot = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDFRTTOT] = true;
        }

        return $this;
    } // setOehdfrttot()

    /**
     * Set the value of [oehdmisctot] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdmisctot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdmisctot !== $v) {
            $this->oehdmisctot = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDMISCTOT] = true;
        }

        return $this;
    } // setOehdmisctot()

    /**
     * Set the value of [oehdordrtot] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdordrtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdordrtot !== $v) {
            $this->oehdordrtot = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDORDRTOT] = true;
        }

        return $this;
    } // setOehdordrtot()

    /**
     * Set the value of [oehdcosttot] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdcosttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcosttot !== $v) {
            $this->oehdcosttot = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCOSTTOT] = true;
        }

        return $this;
    } // setOehdcosttot()

    /**
     * Set the value of [oehdspcommlock] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdspcommlock($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdspcommlock !== $v) {
            $this->oehdspcommlock = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDSPCOMMLOCK] = true;
        }

        return $this;
    } // setOehdspcommlock()

    /**
     * Set the value of [oehdtakendate] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdtakendate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdtakendate !== $v) {
            $this->oehdtakendate = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDTAKENDATE] = true;
        }

        return $this;
    } // setOehdtakendate()

    /**
     * Set the value of [oehdtakentime] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdtakentime($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdtakentime !== $v) {
            $this->oehdtakentime = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDTAKENTIME] = true;
        }

        return $this;
    } // setOehdtakentime()

    /**
     * Set the value of [oehdpickdate] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdpickdate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdpickdate !== $v) {
            $this->oehdpickdate = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDPICKDATE] = true;
        }

        return $this;
    } // setOehdpickdate()

    /**
     * Set the value of [oehdpicktime] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdpicktime($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdpicktime !== $v) {
            $this->oehdpicktime = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDPICKTIME] = true;
        }

        return $this;
    } // setOehdpicktime()

    /**
     * Set the value of [oehdpackdate] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdpackdate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdpackdate !== $v) {
            $this->oehdpackdate = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDPACKDATE] = true;
        }

        return $this;
    } // setOehdpackdate()

    /**
     * Set the value of [oehdpacktime] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdpacktime($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdpacktime !== $v) {
            $this->oehdpacktime = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDPACKTIME] = true;
        }

        return $this;
    } // setOehdpacktime()

    /**
     * Set the value of [oehdverifydate] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdverifydate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdverifydate !== $v) {
            $this->oehdverifydate = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDVERIFYDATE] = true;
        }

        return $this;
    } // setOehdverifydate()

    /**
     * Set the value of [oehdverifytime] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdverifytime($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdverifytime !== $v) {
            $this->oehdverifytime = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDVERIFYTIME] = true;
        }

        return $this;
    } // setOehdverifytime()

    /**
     * Set the value of [oehdcreditmemo] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdcreditmemo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcreditmemo !== $v) {
            $this->oehdcreditmemo = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCREDITMEMO] = true;
        }

        return $this;
    } // setOehdcreditmemo()

    /**
     * Set the value of [oehdbookedyn] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdbookedyn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdbookedyn !== $v) {
            $this->oehdbookedyn = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDBOOKEDYN] = true;
        }

        return $this;
    } // setOehdbookedyn()

    /**
     * Set the value of [intbwhseorig] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setIntbwhseorig($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhseorig !== $v) {
            $this->intbwhseorig = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_INTBWHSEORIG] = true;
        }

        return $this;
    } // setIntbwhseorig()

    /**
     * Set the value of [oehdbtstat] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdbtstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdbtstat !== $v) {
            $this->oehdbtstat = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDBTSTAT] = true;
        }

        return $this;
    } // setOehdbtstat()

    /**
     * Set the value of [oehdshipcomp] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdshipcomp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdshipcomp !== $v) {
            $this->oehdshipcomp = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDSHIPCOMP] = true;
        }

        return $this;
    } // setOehdshipcomp()

    /**
     * Set the value of [oehdcwoflag] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdcwoflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcwoflag !== $v) {
            $this->oehdcwoflag = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCWOFLAG] = true;
        }

        return $this;
    } // setOehdcwoflag()

    /**
     * Set the value of [oehddivision] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddivision($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddivision !== $v) {
            $this->oehddivision = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDIVISION] = true;
        }

        return $this;
    } // setOehddivision()

    /**
     * Set the value of [oehdtakencode] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdtakencode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdtakencode !== $v) {
            $this->oehdtakencode = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDTAKENCODE] = true;
        }

        return $this;
    } // setOehdtakencode()

    /**
     * Set the value of [oehdpickcode] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdpickcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdpickcode !== $v) {
            $this->oehdpickcode = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDPICKCODE] = true;
        }

        return $this;
    } // setOehdpickcode()

    /**
     * Set the value of [oehdpackcode] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdpackcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdpackcode !== $v) {
            $this->oehdpackcode = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDPACKCODE] = true;
        }

        return $this;
    } // setOehdpackcode()

    /**
     * Set the value of [oehdverifycode] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdverifycode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdverifycode !== $v) {
            $this->oehdverifycode = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDVERIFYCODE] = true;
        }

        return $this;
    } // setOehdverifycode()

    /**
     * Set the value of [oehdtotdisc] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdtotdisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdtotdisc !== $v) {
            $this->oehdtotdisc = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDTOTDISC] = true;
        }

        return $this;
    } // setOehdtotdisc()

    /**
     * Set the value of [oehdedirefnbrqual] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdedirefnbrqual($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdedirefnbrqual !== $v) {
            $this->oehdedirefnbrqual = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDEDIREFNBRQUAL] = true;
        }

        return $this;
    } // setOehdedirefnbrqual()

    /**
     * Set the value of [oehdusercode1] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdusercode1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdusercode1 !== $v) {
            $this->oehdusercode1 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDUSERCODE1] = true;
        }

        return $this;
    } // setOehdusercode1()

    /**
     * Set the value of [oehdusercode2] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdusercode2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdusercode2 !== $v) {
            $this->oehdusercode2 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDUSERCODE2] = true;
        }

        return $this;
    } // setOehdusercode2()

    /**
     * Set the value of [oehdusercode3] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdusercode3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdusercode3 !== $v) {
            $this->oehdusercode3 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDUSERCODE3] = true;
        }

        return $this;
    } // setOehdusercode3()

    /**
     * Set the value of [oehdusercode4] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdusercode4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdusercode4 !== $v) {
            $this->oehdusercode4 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDUSERCODE4] = true;
        }

        return $this;
    } // setOehdusercode4()

    /**
     * Set the value of [oehdexchctry] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdexchctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdexchctry !== $v) {
            $this->oehdexchctry = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDEXCHCTRY] = true;
        }

        return $this;
    } // setOehdexchctry()

    /**
     * Set the value of [oehdexchrate] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdexchrate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdexchrate !== $v) {
            $this->oehdexchrate = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDEXCHRATE] = true;
        }

        return $this;
    } // setOehdexchrate()

    /**
     * Set the value of [oehdwght] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdwght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdwght !== $v) {
            $this->oehdwght = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDWGHT] = true;
        }

        return $this;
    } // setOehdwght()

    /**
     * Set the value of [oehdqbpacker] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdqbpacker($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdqbpacker !== $v) {
            $this->oehdqbpacker = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDQBPACKER] = true;
        }

        return $this;
    } // setOehdqbpacker()

    /**
     * Set the value of [oehdqblabeler1] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdqblabeler1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdqblabeler1 !== $v) {
            $this->oehdqblabeler1 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDQBLABELER1] = true;
        }

        return $this;
    } // setOehdqblabeler1()

    /**
     * Set the value of [oehdqblabeler2] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdqblabeler2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdqblabeler2 !== $v) {
            $this->oehdqblabeler2 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDQBLABELER2] = true;
        }

        return $this;
    } // setOehdqblabeler2()

    /**
     * Set the value of [oehdboxcount] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdboxcount($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdboxcount !== $v) {
            $this->oehdboxcount = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDBOXCOUNT] = true;
        }

        return $this;
    } // setOehdboxcount()

    /**
     * Set the value of [oehdrqstdate] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdrqstdate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdrqstdate !== $v) {
            $this->oehdrqstdate = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDRQSTDATE] = true;
        }

        return $this;
    } // setOehdrqstdate()

    /**
     * Set the value of [oehdcancdate] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdcancdate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdcancdate !== $v) {
            $this->oehdcancdate = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCANCDATE] = true;
        }

        return $this;
    } // setOehdcancdate()

    /**
     * Set the value of [oehdcrntuser] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdcrntuser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcrntuser !== $v) {
            $this->oehdcrntuser = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCRNTUSER] = true;
        }

        return $this;
    } // setOehdcrntuser()

    /**
     * Set the value of [oehdreleasenbr] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdreleasenbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdreleasenbr !== $v) {
            $this->oehdreleasenbr = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDRELEASENBR] = true;
        }

        return $this;
    } // setOehdreleasenbr()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_INTBWHSE] = true;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [oehdbordbuilddate] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdbordbuilddate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdbordbuilddate !== $v) {
            $this->oehdbordbuilddate = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDBORDBUILDDATE] = true;
        }

        return $this;
    } // setOehdbordbuilddate()

    /**
     * Set the value of [oehddeptcode] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddeptcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddeptcode !== $v) {
            $this->oehddeptcode = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDEPTCODE] = true;
        }

        return $this;
    } // setOehddeptcode()

    /**
     * Set the value of [oehdfrtinentered] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdfrtinentered($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrtinentered !== $v) {
            $this->oehdfrtinentered = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDFRTINENTERED] = true;
        }

        return $this;
    } // setOehdfrtinentered()

    /**
     * Set the value of [dropshipentered] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setDropshipentered($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dropshipentered !== $v) {
            $this->dropshipentered = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_DROPSHIPENTERED] = true;
        }

        return $this;
    } // setDropshipentered()

    /**
     * Set the value of [oehderflag] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehderflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehderflag !== $v) {
            $this->oehderflag = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDERFLAG] = true;
        }

        return $this;
    } // setOehderflag()

    /**
     * Set the value of [oehdfrtin] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdfrtin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrtin !== $v) {
            $this->oehdfrtin = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDFRTIN] = true;
        }

        return $this;
    } // setOehdfrtin()

    /**
     * Set the value of [oehddropship] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddropship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddropship !== $v) {
            $this->oehddropship = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDROPSHIP] = true;
        }

        return $this;
    } // setOehddropship()

    /**
     * Set the value of [oehdminorder] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdminorder($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdminorder !== $v) {
            $this->oehdminorder = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDMINORDER] = true;
        }

        return $this;
    } // setOehdminorder()

    /**
     * Set the value of [oehdcontractterms] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdcontractterms($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcontractterms !== $v) {
            $this->oehdcontractterms = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCONTRACTTERMS] = true;
        }

        return $this;
    } // setOehdcontractterms()

    /**
     * Set the value of [oehddiscdate1] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddiscdate1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehddiscdate1 !== $v) {
            $this->oehddiscdate1 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDISCDATE1] = true;
        }

        return $this;
    } // setOehddiscdate1()

    /**
     * Set the value of [oehddiscpct1] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddiscpct1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddiscpct1 !== $v) {
            $this->oehddiscpct1 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDISCPCT1] = true;
        }

        return $this;
    } // setOehddiscpct1()

    /**
     * Set the value of [oehdduedate1] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdduedate1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdduedate1 !== $v) {
            $this->oehdduedate1 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDUEDATE1] = true;
        }

        return $this;
    } // setOehdduedate1()

    /**
     * Set the value of [oehddueamt1] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddueamt1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddueamt1 !== $v) {
            $this->oehddueamt1 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDUEAMT1] = true;
        }

        return $this;
    } // setOehddueamt1()

    /**
     * Set the value of [oehdduepct1] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdduepct1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdduepct1 !== $v) {
            $this->oehdduepct1 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDUEPCT1] = true;
        }

        return $this;
    } // setOehdduepct1()

    /**
     * Set the value of [oehddiscdate2] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddiscdate2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehddiscdate2 !== $v) {
            $this->oehddiscdate2 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDISCDATE2] = true;
        }

        return $this;
    } // setOehddiscdate2()

    /**
     * Set the value of [oehddiscpct2] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddiscpct2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddiscpct2 !== $v) {
            $this->oehddiscpct2 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDISCPCT2] = true;
        }

        return $this;
    } // setOehddiscpct2()

    /**
     * Set the value of [oehdduedate2] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdduedate2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdduedate2 !== $v) {
            $this->oehdduedate2 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDUEDATE2] = true;
        }

        return $this;
    } // setOehdduedate2()

    /**
     * Set the value of [oehddueamt2] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddueamt2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddueamt2 !== $v) {
            $this->oehddueamt2 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDUEAMT2] = true;
        }

        return $this;
    } // setOehddueamt2()

    /**
     * Set the value of [oehdduepct2] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdduepct2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdduepct2 !== $v) {
            $this->oehdduepct2 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDUEPCT2] = true;
        }

        return $this;
    } // setOehdduepct2()

    /**
     * Set the value of [oehddiscdate3] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddiscdate3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehddiscdate3 !== $v) {
            $this->oehddiscdate3 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDISCDATE3] = true;
        }

        return $this;
    } // setOehddiscdate3()

    /**
     * Set the value of [oehddiscpct3] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddiscpct3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddiscpct3 !== $v) {
            $this->oehddiscpct3 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDISCPCT3] = true;
        }

        return $this;
    } // setOehddiscpct3()

    /**
     * Set the value of [oehdduedate3] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdduedate3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdduedate3 !== $v) {
            $this->oehdduedate3 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDUEDATE3] = true;
        }

        return $this;
    } // setOehdduedate3()

    /**
     * Set the value of [oehddueamt3] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddueamt3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddueamt3 !== $v) {
            $this->oehddueamt3 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDUEAMT3] = true;
        }

        return $this;
    } // setOehddueamt3()

    /**
     * Set the value of [oehdduepct3] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdduepct3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdduepct3 !== $v) {
            $this->oehdduepct3 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDUEPCT3] = true;
        }

        return $this;
    } // setOehdduepct3()

    /**
     * Set the value of [oehddiscdate4] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddiscdate4($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehddiscdate4 !== $v) {
            $this->oehddiscdate4 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDISCDATE4] = true;
        }

        return $this;
    } // setOehddiscdate4()

    /**
     * Set the value of [oehddiscpct4] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddiscpct4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddiscpct4 !== $v) {
            $this->oehddiscpct4 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDISCPCT4] = true;
        }

        return $this;
    } // setOehddiscpct4()

    /**
     * Set the value of [oehdduedate4] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdduedate4($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdduedate4 !== $v) {
            $this->oehdduedate4 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDUEDATE4] = true;
        }

        return $this;
    } // setOehdduedate4()

    /**
     * Set the value of [oehddueamt4] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddueamt4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddueamt4 !== $v) {
            $this->oehddueamt4 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDUEAMT4] = true;
        }

        return $this;
    } // setOehddueamt4()

    /**
     * Set the value of [oehdduepct4] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdduepct4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdduepct4 !== $v) {
            $this->oehdduepct4 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDUEPCT4] = true;
        }

        return $this;
    } // setOehdduepct4()

    /**
     * Set the value of [oehddiscdate5] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddiscdate5($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehddiscdate5 !== $v) {
            $this->oehddiscdate5 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDISCDATE5] = true;
        }

        return $this;
    } // setOehddiscdate5()

    /**
     * Set the value of [oehddiscpct5] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddiscpct5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddiscpct5 !== $v) {
            $this->oehddiscpct5 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDISCPCT5] = true;
        }

        return $this;
    } // setOehddiscpct5()

    /**
     * Set the value of [oehdduedate5] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdduedate5($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdduedate5 !== $v) {
            $this->oehdduedate5 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDUEDATE5] = true;
        }

        return $this;
    } // setOehdduedate5()

    /**
     * Set the value of [oehddueamt5] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddueamt5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddueamt5 !== $v) {
            $this->oehddueamt5 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDUEAMT5] = true;
        }

        return $this;
    } // setOehddueamt5()

    /**
     * Set the value of [oehdduepct5] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdduepct5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdduepct5 !== $v) {
            $this->oehdduepct5 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDUEPCT5] = true;
        }

        return $this;
    } // setOehdduepct5()

    /**
     * Set the value of [oehddropshipbilled] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddropshipbilled($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddropshipbilled !== $v) {
            $this->oehddropshipbilled = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDROPSHIPBILLED] = true;
        }

        return $this;
    } // setOehddropshipbilled()

    /**
     * Set the value of [oehdordtyp] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdordtyp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdordtyp !== $v) {
            $this->oehdordtyp = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDORDTYP] = true;
        }

        return $this;
    } // setOehdordtyp()

    /**
     * Set the value of [oehdtracknbr] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdtracknbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdtracknbr !== $v) {
            $this->oehdtracknbr = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDTRACKNBR] = true;
        }

        return $this;
    } // setOehdtracknbr()

    /**
     * Set the value of [oehdsource] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdsource($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdsource !== $v) {
            $this->oehdsource = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDSOURCE] = true;
        }

        return $this;
    } // setOehdsource()

    /**
     * Set the value of [oehdccaprv] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdccaprv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdccaprv !== $v) {
            $this->oehdccaprv = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCCAPRV] = true;
        }

        return $this;
    } // setOehdccaprv()

    /**
     * Set the value of [oehdpickfmattype] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdpickfmattype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdpickfmattype !== $v) {
            $this->oehdpickfmattype = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDPICKFMATTYPE] = true;
        }

        return $this;
    } // setOehdpickfmattype()

    /**
     * Set the value of [oehdinvcfmattype] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdinvcfmattype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdinvcfmattype !== $v) {
            $this->oehdinvcfmattype = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDINVCFMATTYPE] = true;
        }

        return $this;
    } // setOehdinvcfmattype()

    /**
     * Set the value of [oehdcashamt] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdcashamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcashamt !== $v) {
            $this->oehdcashamt = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCASHAMT] = true;
        }

        return $this;
    } // setOehdcashamt()

    /**
     * Set the value of [oehdcheckamt] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdcheckamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcheckamt !== $v) {
            $this->oehdcheckamt = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCHECKAMT] = true;
        }

        return $this;
    } // setOehdcheckamt()

    /**
     * Set the value of [oehdchecknbr] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdchecknbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdchecknbr !== $v) {
            $this->oehdchecknbr = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCHECKNBR] = true;
        }

        return $this;
    } // setOehdchecknbr()

    /**
     * Set the value of [oehddepositamt] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddepositamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddepositamt !== $v) {
            $this->oehddepositamt = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDEPOSITAMT] = true;
        }

        return $this;
    } // setOehddepositamt()

    /**
     * Set the value of [oehddepositnbr] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehddepositnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddepositnbr !== $v) {
            $this->oehddepositnbr = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDDEPOSITNBR] = true;
        }

        return $this;
    } // setOehddepositnbr()

    /**
     * Set the value of [oehdccamt] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdccamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdccamt !== $v) {
            $this->oehdccamt = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCCAMT] = true;
        }

        return $this;
    } // setOehdccamt()

    /**
     * Set the value of [oehdotaxsub] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdotaxsub($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdotaxsub !== $v) {
            $this->oehdotaxsub = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDOTAXSUB] = true;
        }

        return $this;
    } // setOehdotaxsub()

    /**
     * Set the value of [oehdonontaxsub] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdonontaxsub($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdonontaxsub !== $v) {
            $this->oehdonontaxsub = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDONONTAXSUB] = true;
        }

        return $this;
    } // setOehdonontaxsub()

    /**
     * Set the value of [oehdotaxtot] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdotaxtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdotaxtot !== $v) {
            $this->oehdotaxtot = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDOTAXTOT] = true;
        }

        return $this;
    } // setOehdotaxtot()

    /**
     * Set the value of [oehdoordrtot] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdoordrtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdoordrtot !== $v) {
            $this->oehdoordrtot = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDOORDRTOT] = true;
        }

        return $this;
    } // setOehdoordrtot()

    /**
     * Set the value of [oehdpickprintdate] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdpickprintdate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdpickprintdate !== $v) {
            $this->oehdpickprintdate = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDPICKPRINTDATE] = true;
        }

        return $this;
    } // setOehdpickprintdate()

    /**
     * Set the value of [oehdpickprinttime] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdpickprinttime($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdpickprinttime !== $v) {
            $this->oehdpickprinttime = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDPICKPRINTTIME] = true;
        }

        return $this;
    } // setOehdpickprinttime()

    /**
     * Set the value of [oehdcont] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdcont($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcont !== $v) {
            $this->oehdcont = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCONT] = true;
        }

        return $this;
    } // setOehdcont()

    /**
     * Set the value of [oehdcontteleintl] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdcontteleintl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcontteleintl !== $v) {
            $this->oehdcontteleintl = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCONTTELEINTL] = true;
        }

        return $this;
    } // setOehdcontteleintl()

    /**
     * Set the value of [oehdconttelenbr] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdconttelenbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdconttelenbr !== $v) {
            $this->oehdconttelenbr = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCONTTELENBR] = true;
        }

        return $this;
    } // setOehdconttelenbr()

    /**
     * Set the value of [oehdcontteleext] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdcontteleext($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcontteleext !== $v) {
            $this->oehdcontteleext = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCONTTELEEXT] = true;
        }

        return $this;
    } // setOehdcontteleext()

    /**
     * Set the value of [oehdcontfaxintl] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdcontfaxintl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcontfaxintl !== $v) {
            $this->oehdcontfaxintl = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCONTFAXINTL] = true;
        }

        return $this;
    } // setOehdcontfaxintl()

    /**
     * Set the value of [oehdcontfaxnbr] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdcontfaxnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdcontfaxnbr !== $v) {
            $this->oehdcontfaxnbr = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCONTFAXNBR] = true;
        }

        return $this;
    } // setOehdcontfaxnbr()

    /**
     * Set the value of [oehdmailid] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdmailid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdmailid !== $v) {
            $this->oehdmailid = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDMAILID] = true;
        }

        return $this;
    } // setOehdmailid()

    /**
     * Set the value of [oehdchgdue] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdchgdue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdchgdue !== $v) {
            $this->oehdchgdue = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCHGDUE] = true;
        }

        return $this;
    } // setOehdchgdue()

    /**
     * Set the value of [oehdaddlpricdisc] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdaddlpricdisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdaddlpricdisc !== $v) {
            $this->oehdaddlpricdisc = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDADDLPRICDISC] = true;
        }

        return $this;
    } // setOehdaddlpricdisc()

    /**
     * Set the value of [oehdallship] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdallship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdallship !== $v) {
            $this->oehdallship = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDALLSHIP] = true;
        }

        return $this;
    } // setOehdallship()

    /**
     * Set the value of [oehdqtyorderamt] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdqtyorderamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdqtyorderamt !== $v) {
            $this->oehdqtyorderamt = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDQTYORDERAMT] = true;
        }

        return $this;
    } // setOehdqtyorderamt()

    /**
     * Set the value of [oehdqtytaxtot] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdqtytaxtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdqtytaxtot !== $v) {
            $this->oehdqtytaxtot = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDQTYTAXTOT] = true;
        }

        return $this;
    } // setOehdqtytaxtot()

    /**
     * Set the value of [oehdqtyfrtin] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdqtyfrtin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdqtyfrtin !== $v) {
            $this->oehdqtyfrtin = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDQTYFRTIN] = true;
        }

        return $this;
    } // setOehdqtyfrtin()

    /**
     * Set the value of [oehdorideshipcomp] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdorideshipcomp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdorideshipcomp !== $v) {
            $this->oehdorideshipcomp = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDORIDESHIPCOMP] = true;
        }

        return $this;
    } // setOehdorideshipcomp()

    /**
     * Set the value of [oehdcontemail] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdcontemail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcontemail !== $v) {
            $this->oehdcontemail = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCONTEMAIL] = true;
        }

        return $this;
    } // setOehdcontemail()

    /**
     * Set the value of [oehdmanualfrt] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdmanualfrt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdmanualfrt !== $v) {
            $this->oehdmanualfrt = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDMANUALFRT] = true;
        }

        return $this;
    } // setOehdmanualfrt()

    /**
     * Set the value of [oehdinternalfrt] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdinternalfrt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdinternalfrt !== $v) {
            $this->oehdinternalfrt = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDINTERNALFRT] = true;
        }

        return $this;
    } // setOehdinternalfrt()

    /**
     * Set the value of [oehdfrtcost] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdfrtcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrtcost !== $v) {
            $this->oehdfrtcost = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDFRTCOST] = true;
        }

        return $this;
    } // setOehdfrtcost()

    /**
     * Set the value of [oehdroute] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdroute($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdroute !== $v) {
            $this->oehdroute = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDROUTE] = true;
        }

        return $this;
    } // setOehdroute()

    /**
     * Set the value of [oehdrouteseq] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdrouteseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdrouteseq !== $v) {
            $this->oehdrouteseq = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDROUTESEQ] = true;
        }

        return $this;
    } // setOehdrouteseq()

    /**
     * Set the value of [oehdfrttaxcode1] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdfrttaxcode1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxcode1 !== $v) {
            $this->oehdfrttaxcode1 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDFRTTAXCODE1] = true;
        }

        return $this;
    } // setOehdfrttaxcode1()

    /**
     * Set the value of [oehdfrttaxamt1] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdfrttaxamt1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxamt1 !== $v) {
            $this->oehdfrttaxamt1 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDFRTTAXAMT1] = true;
        }

        return $this;
    } // setOehdfrttaxamt1()

    /**
     * Set the value of [oehdfrttaxcode2] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdfrttaxcode2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxcode2 !== $v) {
            $this->oehdfrttaxcode2 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDFRTTAXCODE2] = true;
        }

        return $this;
    } // setOehdfrttaxcode2()

    /**
     * Set the value of [oehdfrttaxamt2] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdfrttaxamt2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxamt2 !== $v) {
            $this->oehdfrttaxamt2 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDFRTTAXAMT2] = true;
        }

        return $this;
    } // setOehdfrttaxamt2()

    /**
     * Set the value of [oehdfrttaxcode3] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdfrttaxcode3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxcode3 !== $v) {
            $this->oehdfrttaxcode3 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDFRTTAXCODE3] = true;
        }

        return $this;
    } // setOehdfrttaxcode3()

    /**
     * Set the value of [oehdfrttaxamt3] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdfrttaxamt3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxamt3 !== $v) {
            $this->oehdfrttaxamt3 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDFRTTAXAMT3] = true;
        }

        return $this;
    } // setOehdfrttaxamt3()

    /**
     * Set the value of [oehdfrttaxcode4] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdfrttaxcode4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxcode4 !== $v) {
            $this->oehdfrttaxcode4 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDFRTTAXCODE4] = true;
        }

        return $this;
    } // setOehdfrttaxcode4()

    /**
     * Set the value of [oehdfrttaxamt4] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdfrttaxamt4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxamt4 !== $v) {
            $this->oehdfrttaxamt4 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDFRTTAXAMT4] = true;
        }

        return $this;
    } // setOehdfrttaxamt4()

    /**
     * Set the value of [oehdfrttaxcode5] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdfrttaxcode5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxcode5 !== $v) {
            $this->oehdfrttaxcode5 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDFRTTAXCODE5] = true;
        }

        return $this;
    } // setOehdfrttaxcode5()

    /**
     * Set the value of [oehdfrttaxamt5] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdfrttaxamt5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxamt5 !== $v) {
            $this->oehdfrttaxamt5 = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDFRTTAXAMT5] = true;
        }

        return $this;
    } // setOehdfrttaxamt5()

    /**
     * Set the value of [oehdedi855sent] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdedi855sent($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdedi855sent !== $v) {
            $this->oehdedi855sent = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDEDI855SENT] = true;
        }

        return $this;
    } // setOehdedi855sent()

    /**
     * Set the value of [oehdfrt3rdparty] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdfrt3rdparty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrt3rdparty !== $v) {
            $this->oehdfrt3rdparty = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDFRT3RDPARTY] = true;
        }

        return $this;
    } // setOehdfrt3rdparty()

    /**
     * Set the value of [oehdfob] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdfob($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfob !== $v) {
            $this->oehdfob = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDFOB] = true;
        }

        return $this;
    } // setOehdfob()

    /**
     * Set the value of [oehdconfirmimagyn] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdconfirmimagyn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdconfirmimagyn !== $v) {
            $this->oehdconfirmimagyn = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCONFIRMIMAGYN] = true;
        }

        return $this;
    } // setOehdconfirmimagyn()

    /**
     * Set the value of [oehdcstkconsign] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdcstkconsign($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcstkconsign !== $v) {
            $this->oehdcstkconsign = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDCSTKCONSIGN] = true;
        }

        return $this;
    } // setOehdcstkconsign()

    /**
     * Set the value of [oehdstoreid] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdstoreid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstoreid !== $v) {
            $this->oehdstoreid = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDSTOREID] = true;
        }

        return $this;
    } // setOehdstoreid()

    /**
     * Set the value of [oehdpickqueue] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdpickqueue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdpickqueue !== $v) {
            $this->oehdpickqueue = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDPICKQUEUE] = true;
        }

        return $this;
    } // setOehdpickqueue()

    /**
     * Set the value of [oehdarrvdate] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdarrvdate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdarrvdate !== $v) {
            $this->oehdarrvdate = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDARRVDATE] = true;
        }

        return $this;
    } // setOehdarrvdate()

    /**
     * Set the value of [oehdsurchgstat] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdsurchgstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdsurchgstat !== $v) {
            $this->oehdsurchgstat = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDSURCHGSTAT] = true;
        }

        return $this;
    } // setOehdsurchgstat()

    /**
     * Set the value of [oehdfrtgrup] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setOehdfrtgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrtgrup !== $v) {
            $this->oehdfrtgrup = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_OEHDFRTGRUP] = true;
        }

        return $this;
    } // setOehdfrtgrup()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param int $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[SoHeaderTableMap::COL_DUMMY] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SoHeaderTableMap::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SoHeaderTableMap::translateFieldName('Oehdstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SoHeaderTableMap::translateFieldName('Oehdhold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdhold = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SoHeaderTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SoHeaderTableMap::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstshipid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SoHeaderTableMap::translateFieldName('Oehdstlastname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstlastname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SoHeaderTableMap::translateFieldName('Oehdstfirstname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstfirstname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SoHeaderTableMap::translateFieldName('Oehdstadr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstadr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : SoHeaderTableMap::translateFieldName('Oehdstadr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstadr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : SoHeaderTableMap::translateFieldName('Oehdstadr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstadr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : SoHeaderTableMap::translateFieldName('Oehdstctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : SoHeaderTableMap::translateFieldName('Oehdstcity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstcity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : SoHeaderTableMap::translateFieldName('Oehdststat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdststat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : SoHeaderTableMap::translateFieldName('Oehdstzipcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstzipcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : SoHeaderTableMap::translateFieldName('Oehdcustpo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcustpo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : SoHeaderTableMap::translateFieldName('Oehdordrdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdordrdate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : SoHeaderTableMap::translateFieldName('Artmtermcd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmtermcd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : SoHeaderTableMap::translateFieldName('Artbshipvia', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbshipvia = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : SoHeaderTableMap::translateFieldName('Arininvnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arininvnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : SoHeaderTableMap::translateFieldName('Oehdinvdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdinvdate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : SoHeaderTableMap::translateFieldName('Oehdglpd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdglpd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : SoHeaderTableMap::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : SoHeaderTableMap::translateFieldName('Oehdsp1pct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdsp1pct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : SoHeaderTableMap::translateFieldName('Arspsaleper2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : SoHeaderTableMap::translateFieldName('Oehdsp2pct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdsp2pct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : SoHeaderTableMap::translateFieldName('Arspsaleper3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : SoHeaderTableMap::translateFieldName('Oehdsp3pct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdsp3pct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : SoHeaderTableMap::translateFieldName('Oehdcntrnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcntrnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : SoHeaderTableMap::translateFieldName('Oehddroprelhold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddroprelhold = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : SoHeaderTableMap::translateFieldName('Oehdtaxsub', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdtaxsub = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : SoHeaderTableMap::translateFieldName('Oehdnontaxsub', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdnontaxsub = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : SoHeaderTableMap::translateFieldName('Oehdtaxtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdtaxtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : SoHeaderTableMap::translateFieldName('Oehdfrttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : SoHeaderTableMap::translateFieldName('Oehdmisctot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdmisctot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : SoHeaderTableMap::translateFieldName('Oehdordrtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdordrtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : SoHeaderTableMap::translateFieldName('Oehdcosttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcosttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : SoHeaderTableMap::translateFieldName('Oehdspcommlock', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdspcommlock = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : SoHeaderTableMap::translateFieldName('Oehdtakendate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdtakendate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : SoHeaderTableMap::translateFieldName('Oehdtakentime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdtakentime = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : SoHeaderTableMap::translateFieldName('Oehdpickdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpickdate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : SoHeaderTableMap::translateFieldName('Oehdpicktime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpicktime = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : SoHeaderTableMap::translateFieldName('Oehdpackdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpackdate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : SoHeaderTableMap::translateFieldName('Oehdpacktime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpacktime = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : SoHeaderTableMap::translateFieldName('Oehdverifydate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdverifydate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : SoHeaderTableMap::translateFieldName('Oehdverifytime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdverifytime = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : SoHeaderTableMap::translateFieldName('Oehdcreditmemo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcreditmemo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : SoHeaderTableMap::translateFieldName('Oehdbookedyn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdbookedyn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : SoHeaderTableMap::translateFieldName('Intbwhseorig', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhseorig = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : SoHeaderTableMap::translateFieldName('Oehdbtstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdbtstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : SoHeaderTableMap::translateFieldName('Oehdshipcomp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdshipcomp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : SoHeaderTableMap::translateFieldName('Oehdcwoflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcwoflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : SoHeaderTableMap::translateFieldName('Oehddivision', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddivision = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : SoHeaderTableMap::translateFieldName('Oehdtakencode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdtakencode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : SoHeaderTableMap::translateFieldName('Oehdpickcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpickcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : SoHeaderTableMap::translateFieldName('Oehdpackcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpackcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : SoHeaderTableMap::translateFieldName('Oehdverifycode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdverifycode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : SoHeaderTableMap::translateFieldName('Oehdtotdisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdtotdisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : SoHeaderTableMap::translateFieldName('Oehdedirefnbrqual', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdedirefnbrqual = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : SoHeaderTableMap::translateFieldName('Oehdusercode1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdusercode1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : SoHeaderTableMap::translateFieldName('Oehdusercode2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdusercode2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : SoHeaderTableMap::translateFieldName('Oehdusercode3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdusercode3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : SoHeaderTableMap::translateFieldName('Oehdusercode4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdusercode4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : SoHeaderTableMap::translateFieldName('Oehdexchctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdexchctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : SoHeaderTableMap::translateFieldName('Oehdexchrate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdexchrate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : SoHeaderTableMap::translateFieldName('Oehdwght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdwght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : SoHeaderTableMap::translateFieldName('Oehdqbpacker', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdqbpacker = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : SoHeaderTableMap::translateFieldName('Oehdqblabeler1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdqblabeler1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : SoHeaderTableMap::translateFieldName('Oehdqblabeler2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdqblabeler2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : SoHeaderTableMap::translateFieldName('Oehdboxcount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdboxcount = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : SoHeaderTableMap::translateFieldName('Oehdrqstdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdrqstdate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 70 + $startcol : SoHeaderTableMap::translateFieldName('Oehdcancdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcancdate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 71 + $startcol : SoHeaderTableMap::translateFieldName('Oehdcrntuser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcrntuser = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 72 + $startcol : SoHeaderTableMap::translateFieldName('Oehdreleasenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdreleasenbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 73 + $startcol : SoHeaderTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 74 + $startcol : SoHeaderTableMap::translateFieldName('Oehdbordbuilddate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdbordbuilddate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 75 + $startcol : SoHeaderTableMap::translateFieldName('Oehddeptcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddeptcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 76 + $startcol : SoHeaderTableMap::translateFieldName('Oehdfrtinentered', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrtinentered = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 77 + $startcol : SoHeaderTableMap::translateFieldName('Dropshipentered', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dropshipentered = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 78 + $startcol : SoHeaderTableMap::translateFieldName('Oehderflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehderflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 79 + $startcol : SoHeaderTableMap::translateFieldName('Oehdfrtin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrtin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 80 + $startcol : SoHeaderTableMap::translateFieldName('Oehddropship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddropship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 81 + $startcol : SoHeaderTableMap::translateFieldName('Oehdminorder', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdminorder = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 82 + $startcol : SoHeaderTableMap::translateFieldName('Oehdcontractterms', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcontractterms = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 83 + $startcol : SoHeaderTableMap::translateFieldName('Oehddiscdate1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscdate1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 84 + $startcol : SoHeaderTableMap::translateFieldName('Oehddiscpct1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscpct1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 85 + $startcol : SoHeaderTableMap::translateFieldName('Oehdduedate1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduedate1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 86 + $startcol : SoHeaderTableMap::translateFieldName('Oehddueamt1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddueamt1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 87 + $startcol : SoHeaderTableMap::translateFieldName('Oehdduepct1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduepct1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 88 + $startcol : SoHeaderTableMap::translateFieldName('Oehddiscdate2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscdate2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 89 + $startcol : SoHeaderTableMap::translateFieldName('Oehddiscpct2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscpct2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 90 + $startcol : SoHeaderTableMap::translateFieldName('Oehdduedate2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduedate2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 91 + $startcol : SoHeaderTableMap::translateFieldName('Oehddueamt2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddueamt2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 92 + $startcol : SoHeaderTableMap::translateFieldName('Oehdduepct2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduepct2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 93 + $startcol : SoHeaderTableMap::translateFieldName('Oehddiscdate3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscdate3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 94 + $startcol : SoHeaderTableMap::translateFieldName('Oehddiscpct3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscpct3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 95 + $startcol : SoHeaderTableMap::translateFieldName('Oehdduedate3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduedate3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 96 + $startcol : SoHeaderTableMap::translateFieldName('Oehddueamt3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddueamt3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 97 + $startcol : SoHeaderTableMap::translateFieldName('Oehdduepct3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduepct3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 98 + $startcol : SoHeaderTableMap::translateFieldName('Oehddiscdate4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscdate4 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 99 + $startcol : SoHeaderTableMap::translateFieldName('Oehddiscpct4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscpct4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 100 + $startcol : SoHeaderTableMap::translateFieldName('Oehdduedate4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduedate4 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 101 + $startcol : SoHeaderTableMap::translateFieldName('Oehddueamt4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddueamt4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 102 + $startcol : SoHeaderTableMap::translateFieldName('Oehdduepct4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduepct4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 103 + $startcol : SoHeaderTableMap::translateFieldName('Oehddiscdate5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscdate5 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 104 + $startcol : SoHeaderTableMap::translateFieldName('Oehddiscpct5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscpct5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 105 + $startcol : SoHeaderTableMap::translateFieldName('Oehdduedate5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduedate5 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 106 + $startcol : SoHeaderTableMap::translateFieldName('Oehddueamt5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddueamt5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 107 + $startcol : SoHeaderTableMap::translateFieldName('Oehdduepct5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduepct5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 108 + $startcol : SoHeaderTableMap::translateFieldName('Oehddropshipbilled', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddropshipbilled = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 109 + $startcol : SoHeaderTableMap::translateFieldName('Oehdordtyp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdordtyp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 110 + $startcol : SoHeaderTableMap::translateFieldName('Oehdtracknbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdtracknbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 111 + $startcol : SoHeaderTableMap::translateFieldName('Oehdsource', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdsource = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 112 + $startcol : SoHeaderTableMap::translateFieldName('Oehdccaprv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdccaprv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 113 + $startcol : SoHeaderTableMap::translateFieldName('Oehdpickfmattype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpickfmattype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 114 + $startcol : SoHeaderTableMap::translateFieldName('Oehdinvcfmattype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdinvcfmattype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 115 + $startcol : SoHeaderTableMap::translateFieldName('Oehdcashamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcashamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 116 + $startcol : SoHeaderTableMap::translateFieldName('Oehdcheckamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcheckamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 117 + $startcol : SoHeaderTableMap::translateFieldName('Oehdchecknbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdchecknbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 118 + $startcol : SoHeaderTableMap::translateFieldName('Oehddepositamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddepositamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 119 + $startcol : SoHeaderTableMap::translateFieldName('Oehddepositnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddepositnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 120 + $startcol : SoHeaderTableMap::translateFieldName('Oehdccamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdccamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 121 + $startcol : SoHeaderTableMap::translateFieldName('Oehdotaxsub', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdotaxsub = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 122 + $startcol : SoHeaderTableMap::translateFieldName('Oehdonontaxsub', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdonontaxsub = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 123 + $startcol : SoHeaderTableMap::translateFieldName('Oehdotaxtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdotaxtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 124 + $startcol : SoHeaderTableMap::translateFieldName('Oehdoordrtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdoordrtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 125 + $startcol : SoHeaderTableMap::translateFieldName('Oehdpickprintdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpickprintdate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 126 + $startcol : SoHeaderTableMap::translateFieldName('Oehdpickprinttime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpickprinttime = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 127 + $startcol : SoHeaderTableMap::translateFieldName('Oehdcont', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcont = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 128 + $startcol : SoHeaderTableMap::translateFieldName('Oehdcontteleintl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcontteleintl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 129 + $startcol : SoHeaderTableMap::translateFieldName('Oehdconttelenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdconttelenbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 130 + $startcol : SoHeaderTableMap::translateFieldName('Oehdcontteleext', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcontteleext = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 131 + $startcol : SoHeaderTableMap::translateFieldName('Oehdcontfaxintl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcontfaxintl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 132 + $startcol : SoHeaderTableMap::translateFieldName('Oehdcontfaxnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcontfaxnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 133 + $startcol : SoHeaderTableMap::translateFieldName('Oehdmailid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdmailid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 134 + $startcol : SoHeaderTableMap::translateFieldName('Oehdchgdue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdchgdue = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 135 + $startcol : SoHeaderTableMap::translateFieldName('Oehdaddlpricdisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdaddlpricdisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 136 + $startcol : SoHeaderTableMap::translateFieldName('Oehdallship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdallship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 137 + $startcol : SoHeaderTableMap::translateFieldName('Oehdqtyorderamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdqtyorderamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 138 + $startcol : SoHeaderTableMap::translateFieldName('Oehdqtytaxtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdqtytaxtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 139 + $startcol : SoHeaderTableMap::translateFieldName('Oehdqtyfrtin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdqtyfrtin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 140 + $startcol : SoHeaderTableMap::translateFieldName('Oehdorideshipcomp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdorideshipcomp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 141 + $startcol : SoHeaderTableMap::translateFieldName('Oehdcontemail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcontemail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 142 + $startcol : SoHeaderTableMap::translateFieldName('Oehdmanualfrt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdmanualfrt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 143 + $startcol : SoHeaderTableMap::translateFieldName('Oehdinternalfrt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdinternalfrt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 144 + $startcol : SoHeaderTableMap::translateFieldName('Oehdfrtcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrtcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 145 + $startcol : SoHeaderTableMap::translateFieldName('Oehdroute', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdroute = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 146 + $startcol : SoHeaderTableMap::translateFieldName('Oehdrouteseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdrouteseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 147 + $startcol : SoHeaderTableMap::translateFieldName('Oehdfrttaxcode1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxcode1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 148 + $startcol : SoHeaderTableMap::translateFieldName('Oehdfrttaxamt1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxamt1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 149 + $startcol : SoHeaderTableMap::translateFieldName('Oehdfrttaxcode2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxcode2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 150 + $startcol : SoHeaderTableMap::translateFieldName('Oehdfrttaxamt2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxamt2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 151 + $startcol : SoHeaderTableMap::translateFieldName('Oehdfrttaxcode3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxcode3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 152 + $startcol : SoHeaderTableMap::translateFieldName('Oehdfrttaxamt3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxamt3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 153 + $startcol : SoHeaderTableMap::translateFieldName('Oehdfrttaxcode4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxcode4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 154 + $startcol : SoHeaderTableMap::translateFieldName('Oehdfrttaxamt4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxamt4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 155 + $startcol : SoHeaderTableMap::translateFieldName('Oehdfrttaxcode5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxcode5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 156 + $startcol : SoHeaderTableMap::translateFieldName('Oehdfrttaxamt5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxamt5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 157 + $startcol : SoHeaderTableMap::translateFieldName('Oehdedi855sent', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdedi855sent = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 158 + $startcol : SoHeaderTableMap::translateFieldName('Oehdfrt3rdparty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrt3rdparty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 159 + $startcol : SoHeaderTableMap::translateFieldName('Oehdfob', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfob = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 160 + $startcol : SoHeaderTableMap::translateFieldName('Oehdconfirmimagyn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdconfirmimagyn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 161 + $startcol : SoHeaderTableMap::translateFieldName('Oehdcstkconsign', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcstkconsign = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 162 + $startcol : SoHeaderTableMap::translateFieldName('Oehdstoreid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstoreid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 163 + $startcol : SoHeaderTableMap::translateFieldName('Oehdpickqueue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpickqueue = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 164 + $startcol : SoHeaderTableMap::translateFieldName('Oehdarrvdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdarrvdate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 165 + $startcol : SoHeaderTableMap::translateFieldName('Oehdsurchgstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdsurchgstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 166 + $startcol : SoHeaderTableMap::translateFieldName('Oehdfrtgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrtgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 167 + $startcol : SoHeaderTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 168 + $startcol : SoHeaderTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 169 + $startcol : SoHeaderTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 170; // 170 = SoHeaderTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\SoHeader'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(SoHeaderTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSoHeaderQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collSoDetails = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SoHeader::setDeleted()
     * @see SoHeader::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoHeaderTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSoHeaderQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SoHeaderTableMap::DATABASE_NAME);
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
                SoHeaderTableMap::addInstanceToPool($this);
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

            if ($this->soDetailsScheduledForDeletion !== null) {
                if (!$this->soDetailsScheduledForDeletion->isEmpty()) {
                    \SoDetailQuery::create()
                        ->filterByPrimaryKeys($this->soDetailsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->soDetailsScheduledForDeletion = null;
                }
            }

            if ($this->collSoDetails !== null) {
                foreach ($this->collSoDetails as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdNbr';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStat';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'OehdHold';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_ARSTSHIPID)) {
            $modifiedColumns[':p' . $index++]  = 'ArstShipId';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTLASTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStLastName';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTFIRSTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStFirstName';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTADR1)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStAdr1';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTADR2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStAdr2';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTADR3)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStAdr3';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStCtry';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTCITY)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStCity';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStStat';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStZipCode';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCUSTPO)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCustPo';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDORDRDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdOrdrDate';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_ARTMTERMCD)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmTermCd';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_ARTBSHIPVIA)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbShipVia';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_ARININVNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArinInvNbr';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDINVDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdInvDate';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDGLPD)) {
            $modifiedColumns[':p' . $index++]  = 'OehdGLPd';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_ARSPSALEPER1)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer1';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSP1PCT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdSp1Pct';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_ARSPSALEPER2)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer2';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSP2PCT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdSp2Pct';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_ARSPSALEPER3)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer3';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSP3PCT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdSp3Pct';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCNTRNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCntrNbr';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDROPRELHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDropRelHold';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDTAXSUB)) {
            $modifiedColumns[':p' . $index++]  = 'OehdTaxSub';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDNONTAXSUB)) {
            $modifiedColumns[':p' . $index++]  = 'OehdNonTaxSub';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDTAXTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdTaxTot';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTot';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDMISCTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdMiscTot';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDORDRTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdOrdrTot';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCOSTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCostTot';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSPCOMMLOCK)) {
            $modifiedColumns[':p' . $index++]  = 'OehdSpCommLock';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDTAKENDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdTakenDate';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDTAKENTIME)) {
            $modifiedColumns[':p' . $index++]  = 'OehdTakenTime';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPICKDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPickDate';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPICKTIME)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPickTime';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPACKDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPackDate';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPACKTIME)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPackTime';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDVERIFYDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdVerifyDate';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDVERIFYTIME)) {
            $modifiedColumns[':p' . $index++]  = 'OehdVerifyTime';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCREDITMEMO)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCreditMemo';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDBOOKEDYN)) {
            $modifiedColumns[':p' . $index++]  = 'OehdBookedYn';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_INTBWHSEORIG)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseOrig';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDBTSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdBtStat';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSHIPCOMP)) {
            $modifiedColumns[':p' . $index++]  = 'OehdShipComp';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCWOFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCwoFlag';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDIVISION)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDivision';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDTAKENCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdTakenCode';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPICKCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPickCode';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPACKCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPackCode';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDVERIFYCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdVerifyCode';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDTOTDISC)) {
            $modifiedColumns[':p' . $index++]  = 'OehdTotDisc';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDEDIREFNBRQUAL)) {
            $modifiedColumns[':p' . $index++]  = 'OehdEdiRefNbrQual';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDUSERCODE1)) {
            $modifiedColumns[':p' . $index++]  = 'OehdUserCode1';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDUSERCODE2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdUserCode2';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDUSERCODE3)) {
            $modifiedColumns[':p' . $index++]  = 'OehdUserCode3';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDUSERCODE4)) {
            $modifiedColumns[':p' . $index++]  = 'OehdUserCode4';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDEXCHCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'OehdExchCtry';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDEXCHRATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdExchRate';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdWght';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDQBPACKER)) {
            $modifiedColumns[':p' . $index++]  = 'OehdQbPacker';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDQBLABELER1)) {
            $modifiedColumns[':p' . $index++]  = 'OehdQbLabeler1';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDQBLABELER2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdQbLabeler2';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDBOXCOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdBoxCount';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDRQSTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdRqstDate';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCANCDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCancDate';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCRNTUSER)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCrntUser';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDRELEASENBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdReleaseNbr';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDBORDBUILDDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdBordBuildDate';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDEPTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDeptCode';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTINENTERED)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtInEntered';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_DROPSHIPENTERED)) {
            $modifiedColumns[':p' . $index++]  = 'DropShipEntered';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDERFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OehdErFlag';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTIN)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtIn';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDROPSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDropShip';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDMINORDER)) {
            $modifiedColumns[':p' . $index++]  = 'OehdMinOrder';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCONTRACTTERMS)) {
            $modifiedColumns[':p' . $index++]  = 'OehdContractTerms';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCDATE1)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscDate1';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCPCT1)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscPct1';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEDATE1)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueDate1';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEAMT1)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueAmt1';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEPCT1)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDuePct1';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCDATE2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscDate2';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCPCT2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscPct2';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEDATE2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueDate2';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEAMT2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueAmt2';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEPCT2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDuePct2';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCDATE3)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscDate3';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCPCT3)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscPct3';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEDATE3)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueDate3';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEAMT3)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueAmt3';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEPCT3)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDuePct3';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCDATE4)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscDate4';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCPCT4)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscPct4';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEDATE4)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueDate4';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEAMT4)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueAmt4';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEPCT4)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDuePct4';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCDATE5)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscDate5';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCPCT5)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscPct5';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEDATE5)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueDate5';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEAMT5)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueAmt5';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEPCT5)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDuePct5';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDROPSHIPBILLED)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDropShipBilled';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDORDTYP)) {
            $modifiedColumns[':p' . $index++]  = 'OehdOrdTyp';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDTRACKNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdTrackNbr';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSOURCE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdSource';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCCAPRV)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCcAprv';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPICKFMATTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPickFmatType';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDINVCFMATTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdInvcFmatType';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCASHAMT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCashAmt';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCHECKAMT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCheckAmt';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCHECKNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCheckNbr';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDEPOSITAMT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDepositAmt';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDEPOSITNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDepositNbr';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCCAMT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCcAmt';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDOTAXSUB)) {
            $modifiedColumns[':p' . $index++]  = 'OehdOTaxSub';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDONONTAXSUB)) {
            $modifiedColumns[':p' . $index++]  = 'OehdONonTaxSub';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDOTAXTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdOTaxTot';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDOORDRTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdOOrdrTot';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPICKPRINTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPickPrintDate';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPICKPRINTTIME)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPickPrintTime';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCONT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCont';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCONTTELEINTL)) {
            $modifiedColumns[':p' . $index++]  = 'OehdContTeleIntl';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCONTTELENBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdContTeleNbr';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCONTTELEEXT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdContTeleExt';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCONTFAXINTL)) {
            $modifiedColumns[':p' . $index++]  = 'OehdContFaxIntl';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCONTFAXNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdContFaxNbr';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDMAILID)) {
            $modifiedColumns[':p' . $index++]  = 'OehdMailId';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCHGDUE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdChgDue';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDADDLPRICDISC)) {
            $modifiedColumns[':p' . $index++]  = 'OehdAddlPricDisc';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDALLSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'OehdAllShip';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDQTYORDERAMT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdQtyOrderAmt';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDQTYTAXTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdQtyTaxTot';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDQTYFRTIN)) {
            $modifiedColumns[':p' . $index++]  = 'OehdQtyFrtIn';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDORIDESHIPCOMP)) {
            $modifiedColumns[':p' . $index++]  = 'OehdOrideShipComp';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCONTEMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'OehdContEmail';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDMANUALFRT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdManualFrt';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDINTERNALFRT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdInternalFrt';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTCOST)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtCost';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDROUTE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdRoute';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDROUTESEQ)) {
            $modifiedColumns[':p' . $index++]  = 'OehdRouteSeq';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXCODE1)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxCode1';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXAMT1)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxAmt1';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXCODE2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxCode2';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXAMT2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxAmt2';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXCODE3)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxCode3';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXAMT3)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxAmt3';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXCODE4)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxCode4';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXAMT4)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxAmt4';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXCODE5)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxCode5';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXAMT5)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxAmt5';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDEDI855SENT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdEdi855Sent';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRT3RDPARTY)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrt3rdParty';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFOB)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFob';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCONFIRMIMAGYN)) {
            $modifiedColumns[':p' . $index++]  = 'OehdConfirmImagYn';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCSTKCONSIGN)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCstkConsign';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTOREID)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStoreId';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPICKQUEUE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPickQueue';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDARRVDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdArrvDate';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSURCHGSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdSurchgStat';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtGrup';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO SO_HEADER (%s) VALUES (%s)',
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
                    case 'OehdStat':
                        $stmt->bindValue($identifier, $this->oehdstat, PDO::PARAM_STR);
                        break;
                    case 'OehdHold':
                        $stmt->bindValue($identifier, $this->oehdhold, PDO::PARAM_STR);
                        break;
                    case 'ArcuCustId':
                        $stmt->bindValue($identifier, $this->arcucustid, PDO::PARAM_STR);
                        break;
                    case 'ArstShipId':
                        $stmt->bindValue($identifier, $this->arstshipid, PDO::PARAM_STR);
                        break;
                    case 'OehdStLastName':
                        $stmt->bindValue($identifier, $this->oehdstlastname, PDO::PARAM_STR);
                        break;
                    case 'OehdStFirstName':
                        $stmt->bindValue($identifier, $this->oehdstfirstname, PDO::PARAM_STR);
                        break;
                    case 'OehdStAdr1':
                        $stmt->bindValue($identifier, $this->oehdstadr1, PDO::PARAM_STR);
                        break;
                    case 'OehdStAdr2':
                        $stmt->bindValue($identifier, $this->oehdstadr2, PDO::PARAM_STR);
                        break;
                    case 'OehdStAdr3':
                        $stmt->bindValue($identifier, $this->oehdstadr3, PDO::PARAM_STR);
                        break;
                    case 'OehdStCtry':
                        $stmt->bindValue($identifier, $this->oehdstctry, PDO::PARAM_STR);
                        break;
                    case 'OehdStCity':
                        $stmt->bindValue($identifier, $this->oehdstcity, PDO::PARAM_STR);
                        break;
                    case 'OehdStStat':
                        $stmt->bindValue($identifier, $this->oehdststat, PDO::PARAM_STR);
                        break;
                    case 'OehdStZipCode':
                        $stmt->bindValue($identifier, $this->oehdstzipcode, PDO::PARAM_STR);
                        break;
                    case 'OehdCustPo':
                        $stmt->bindValue($identifier, $this->oehdcustpo, PDO::PARAM_STR);
                        break;
                    case 'OehdOrdrDate':
                        $stmt->bindValue($identifier, $this->oehdordrdate, PDO::PARAM_INT);
                        break;
                    case 'ArtmTermCd':
                        $stmt->bindValue($identifier, $this->artmtermcd, PDO::PARAM_STR);
                        break;
                    case 'ArtbShipVia':
                        $stmt->bindValue($identifier, $this->artbshipvia, PDO::PARAM_STR);
                        break;
                    case 'ArinInvNbr':
                        $stmt->bindValue($identifier, $this->arininvnbr, PDO::PARAM_INT);
                        break;
                    case 'OehdInvDate':
                        $stmt->bindValue($identifier, $this->oehdinvdate, PDO::PARAM_INT);
                        break;
                    case 'OehdGLPd':
                        $stmt->bindValue($identifier, $this->oehdglpd, PDO::PARAM_INT);
                        break;
                    case 'ArspSalePer1':
                        $stmt->bindValue($identifier, $this->arspsaleper1, PDO::PARAM_STR);
                        break;
                    case 'OehdSp1Pct':
                        $stmt->bindValue($identifier, $this->oehdsp1pct, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer2':
                        $stmt->bindValue($identifier, $this->arspsaleper2, PDO::PARAM_STR);
                        break;
                    case 'OehdSp2Pct':
                        $stmt->bindValue($identifier, $this->oehdsp2pct, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer3':
                        $stmt->bindValue($identifier, $this->arspsaleper3, PDO::PARAM_STR);
                        break;
                    case 'OehdSp3Pct':
                        $stmt->bindValue($identifier, $this->oehdsp3pct, PDO::PARAM_STR);
                        break;
                    case 'OehdCntrNbr':
                        $stmt->bindValue($identifier, $this->oehdcntrnbr, PDO::PARAM_INT);
                        break;
                    case 'OehdDropRelHold':
                        $stmt->bindValue($identifier, $this->oehddroprelhold, PDO::PARAM_STR);
                        break;
                    case 'OehdTaxSub':
                        $stmt->bindValue($identifier, $this->oehdtaxsub, PDO::PARAM_STR);
                        break;
                    case 'OehdNonTaxSub':
                        $stmt->bindValue($identifier, $this->oehdnontaxsub, PDO::PARAM_STR);
                        break;
                    case 'OehdTaxTot':
                        $stmt->bindValue($identifier, $this->oehdtaxtot, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTot':
                        $stmt->bindValue($identifier, $this->oehdfrttot, PDO::PARAM_STR);
                        break;
                    case 'OehdMiscTot':
                        $stmt->bindValue($identifier, $this->oehdmisctot, PDO::PARAM_STR);
                        break;
                    case 'OehdOrdrTot':
                        $stmt->bindValue($identifier, $this->oehdordrtot, PDO::PARAM_STR);
                        break;
                    case 'OehdCostTot':
                        $stmt->bindValue($identifier, $this->oehdcosttot, PDO::PARAM_STR);
                        break;
                    case 'OehdSpCommLock':
                        $stmt->bindValue($identifier, $this->oehdspcommlock, PDO::PARAM_STR);
                        break;
                    case 'OehdTakenDate':
                        $stmt->bindValue($identifier, $this->oehdtakendate, PDO::PARAM_INT);
                        break;
                    case 'OehdTakenTime':
                        $stmt->bindValue($identifier, $this->oehdtakentime, PDO::PARAM_INT);
                        break;
                    case 'OehdPickDate':
                        $stmt->bindValue($identifier, $this->oehdpickdate, PDO::PARAM_INT);
                        break;
                    case 'OehdPickTime':
                        $stmt->bindValue($identifier, $this->oehdpicktime, PDO::PARAM_INT);
                        break;
                    case 'OehdPackDate':
                        $stmt->bindValue($identifier, $this->oehdpackdate, PDO::PARAM_INT);
                        break;
                    case 'OehdPackTime':
                        $stmt->bindValue($identifier, $this->oehdpacktime, PDO::PARAM_INT);
                        break;
                    case 'OehdVerifyDate':
                        $stmt->bindValue($identifier, $this->oehdverifydate, PDO::PARAM_INT);
                        break;
                    case 'OehdVerifyTime':
                        $stmt->bindValue($identifier, $this->oehdverifytime, PDO::PARAM_INT);
                        break;
                    case 'OehdCreditMemo':
                        $stmt->bindValue($identifier, $this->oehdcreditmemo, PDO::PARAM_STR);
                        break;
                    case 'OehdBookedYn':
                        $stmt->bindValue($identifier, $this->oehdbookedyn, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseOrig':
                        $stmt->bindValue($identifier, $this->intbwhseorig, PDO::PARAM_STR);
                        break;
                    case 'OehdBtStat':
                        $stmt->bindValue($identifier, $this->oehdbtstat, PDO::PARAM_STR);
                        break;
                    case 'OehdShipComp':
                        $stmt->bindValue($identifier, $this->oehdshipcomp, PDO::PARAM_STR);
                        break;
                    case 'OehdCwoFlag':
                        $stmt->bindValue($identifier, $this->oehdcwoflag, PDO::PARAM_STR);
                        break;
                    case 'OehdDivision':
                        $stmt->bindValue($identifier, $this->oehddivision, PDO::PARAM_STR);
                        break;
                    case 'OehdTakenCode':
                        $stmt->bindValue($identifier, $this->oehdtakencode, PDO::PARAM_STR);
                        break;
                    case 'OehdPickCode':
                        $stmt->bindValue($identifier, $this->oehdpickcode, PDO::PARAM_STR);
                        break;
                    case 'OehdPackCode':
                        $stmt->bindValue($identifier, $this->oehdpackcode, PDO::PARAM_STR);
                        break;
                    case 'OehdVerifyCode':
                        $stmt->bindValue($identifier, $this->oehdverifycode, PDO::PARAM_STR);
                        break;
                    case 'OehdTotDisc':
                        $stmt->bindValue($identifier, $this->oehdtotdisc, PDO::PARAM_STR);
                        break;
                    case 'OehdEdiRefNbrQual':
                        $stmt->bindValue($identifier, $this->oehdedirefnbrqual, PDO::PARAM_STR);
                        break;
                    case 'OehdUserCode1':
                        $stmt->bindValue($identifier, $this->oehdusercode1, PDO::PARAM_STR);
                        break;
                    case 'OehdUserCode2':
                        $stmt->bindValue($identifier, $this->oehdusercode2, PDO::PARAM_STR);
                        break;
                    case 'OehdUserCode3':
                        $stmt->bindValue($identifier, $this->oehdusercode3, PDO::PARAM_STR);
                        break;
                    case 'OehdUserCode4':
                        $stmt->bindValue($identifier, $this->oehdusercode4, PDO::PARAM_STR);
                        break;
                    case 'OehdExchCtry':
                        $stmt->bindValue($identifier, $this->oehdexchctry, PDO::PARAM_STR);
                        break;
                    case 'OehdExchRate':
                        $stmt->bindValue($identifier, $this->oehdexchrate, PDO::PARAM_STR);
                        break;
                    case 'OehdWght':
                        $stmt->bindValue($identifier, $this->oehdwght, PDO::PARAM_STR);
                        break;
                    case 'OehdQbPacker':
                        $stmt->bindValue($identifier, $this->oehdqbpacker, PDO::PARAM_STR);
                        break;
                    case 'OehdQbLabeler1':
                        $stmt->bindValue($identifier, $this->oehdqblabeler1, PDO::PARAM_STR);
                        break;
                    case 'OehdQbLabeler2':
                        $stmt->bindValue($identifier, $this->oehdqblabeler2, PDO::PARAM_STR);
                        break;
                    case 'OehdBoxCount':
                        $stmt->bindValue($identifier, $this->oehdboxcount, PDO::PARAM_INT);
                        break;
                    case 'OehdRqstDate':
                        $stmt->bindValue($identifier, $this->oehdrqstdate, PDO::PARAM_INT);
                        break;
                    case 'OehdCancDate':
                        $stmt->bindValue($identifier, $this->oehdcancdate, PDO::PARAM_INT);
                        break;
                    case 'OehdCrntUser':
                        $stmt->bindValue($identifier, $this->oehdcrntuser, PDO::PARAM_STR);
                        break;
                    case 'OehdReleaseNbr':
                        $stmt->bindValue($identifier, $this->oehdreleasenbr, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'OehdBordBuildDate':
                        $stmt->bindValue($identifier, $this->oehdbordbuilddate, PDO::PARAM_INT);
                        break;
                    case 'OehdDeptCode':
                        $stmt->bindValue($identifier, $this->oehddeptcode, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtInEntered':
                        $stmt->bindValue($identifier, $this->oehdfrtinentered, PDO::PARAM_STR);
                        break;
                    case 'DropShipEntered':
                        $stmt->bindValue($identifier, $this->dropshipentered, PDO::PARAM_STR);
                        break;
                    case 'OehdErFlag':
                        $stmt->bindValue($identifier, $this->oehderflag, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtIn':
                        $stmt->bindValue($identifier, $this->oehdfrtin, PDO::PARAM_STR);
                        break;
                    case 'OehdDropShip':
                        $stmt->bindValue($identifier, $this->oehddropship, PDO::PARAM_STR);
                        break;
                    case 'OehdMinOrder':
                        $stmt->bindValue($identifier, $this->oehdminorder, PDO::PARAM_STR);
                        break;
                    case 'OehdContractTerms':
                        $stmt->bindValue($identifier, $this->oehdcontractterms, PDO::PARAM_STR);
                        break;
                    case 'OehdDiscDate1':
                        $stmt->bindValue($identifier, $this->oehddiscdate1, PDO::PARAM_INT);
                        break;
                    case 'OehdDiscPct1':
                        $stmt->bindValue($identifier, $this->oehddiscpct1, PDO::PARAM_STR);
                        break;
                    case 'OehdDueDate1':
                        $stmt->bindValue($identifier, $this->oehdduedate1, PDO::PARAM_INT);
                        break;
                    case 'OehdDueAmt1':
                        $stmt->bindValue($identifier, $this->oehddueamt1, PDO::PARAM_STR);
                        break;
                    case 'OehdDuePct1':
                        $stmt->bindValue($identifier, $this->oehdduepct1, PDO::PARAM_STR);
                        break;
                    case 'OehdDiscDate2':
                        $stmt->bindValue($identifier, $this->oehddiscdate2, PDO::PARAM_INT);
                        break;
                    case 'OehdDiscPct2':
                        $stmt->bindValue($identifier, $this->oehddiscpct2, PDO::PARAM_STR);
                        break;
                    case 'OehdDueDate2':
                        $stmt->bindValue($identifier, $this->oehdduedate2, PDO::PARAM_INT);
                        break;
                    case 'OehdDueAmt2':
                        $stmt->bindValue($identifier, $this->oehddueamt2, PDO::PARAM_STR);
                        break;
                    case 'OehdDuePct2':
                        $stmt->bindValue($identifier, $this->oehdduepct2, PDO::PARAM_STR);
                        break;
                    case 'OehdDiscDate3':
                        $stmt->bindValue($identifier, $this->oehddiscdate3, PDO::PARAM_INT);
                        break;
                    case 'OehdDiscPct3':
                        $stmt->bindValue($identifier, $this->oehddiscpct3, PDO::PARAM_STR);
                        break;
                    case 'OehdDueDate3':
                        $stmt->bindValue($identifier, $this->oehdduedate3, PDO::PARAM_INT);
                        break;
                    case 'OehdDueAmt3':
                        $stmt->bindValue($identifier, $this->oehddueamt3, PDO::PARAM_STR);
                        break;
                    case 'OehdDuePct3':
                        $stmt->bindValue($identifier, $this->oehdduepct3, PDO::PARAM_STR);
                        break;
                    case 'OehdDiscDate4':
                        $stmt->bindValue($identifier, $this->oehddiscdate4, PDO::PARAM_INT);
                        break;
                    case 'OehdDiscPct4':
                        $stmt->bindValue($identifier, $this->oehddiscpct4, PDO::PARAM_STR);
                        break;
                    case 'OehdDueDate4':
                        $stmt->bindValue($identifier, $this->oehdduedate4, PDO::PARAM_INT);
                        break;
                    case 'OehdDueAmt4':
                        $stmt->bindValue($identifier, $this->oehddueamt4, PDO::PARAM_STR);
                        break;
                    case 'OehdDuePct4':
                        $stmt->bindValue($identifier, $this->oehdduepct4, PDO::PARAM_STR);
                        break;
                    case 'OehdDiscDate5':
                        $stmt->bindValue($identifier, $this->oehddiscdate5, PDO::PARAM_INT);
                        break;
                    case 'OehdDiscPct5':
                        $stmt->bindValue($identifier, $this->oehddiscpct5, PDO::PARAM_STR);
                        break;
                    case 'OehdDueDate5':
                        $stmt->bindValue($identifier, $this->oehdduedate5, PDO::PARAM_INT);
                        break;
                    case 'OehdDueAmt5':
                        $stmt->bindValue($identifier, $this->oehddueamt5, PDO::PARAM_STR);
                        break;
                    case 'OehdDuePct5':
                        $stmt->bindValue($identifier, $this->oehdduepct5, PDO::PARAM_STR);
                        break;
                    case 'OehdDropShipBilled':
                        $stmt->bindValue($identifier, $this->oehddropshipbilled, PDO::PARAM_STR);
                        break;
                    case 'OehdOrdTyp':
                        $stmt->bindValue($identifier, $this->oehdordtyp, PDO::PARAM_STR);
                        break;
                    case 'OehdTrackNbr':
                        $stmt->bindValue($identifier, $this->oehdtracknbr, PDO::PARAM_STR);
                        break;
                    case 'OehdSource':
                        $stmt->bindValue($identifier, $this->oehdsource, PDO::PARAM_STR);
                        break;
                    case 'OehdCcAprv':
                        $stmt->bindValue($identifier, $this->oehdccaprv, PDO::PARAM_STR);
                        break;
                    case 'OehdPickFmatType':
                        $stmt->bindValue($identifier, $this->oehdpickfmattype, PDO::PARAM_STR);
                        break;
                    case 'OehdInvcFmatType':
                        $stmt->bindValue($identifier, $this->oehdinvcfmattype, PDO::PARAM_STR);
                        break;
                    case 'OehdCashAmt':
                        $stmt->bindValue($identifier, $this->oehdcashamt, PDO::PARAM_STR);
                        break;
                    case 'OehdCheckAmt':
                        $stmt->bindValue($identifier, $this->oehdcheckamt, PDO::PARAM_STR);
                        break;
                    case 'OehdCheckNbr':
                        $stmt->bindValue($identifier, $this->oehdchecknbr, PDO::PARAM_STR);
                        break;
                    case 'OehdDepositAmt':
                        $stmt->bindValue($identifier, $this->oehddepositamt, PDO::PARAM_STR);
                        break;
                    case 'OehdDepositNbr':
                        $stmt->bindValue($identifier, $this->oehddepositnbr, PDO::PARAM_STR);
                        break;
                    case 'OehdCcAmt':
                        $stmt->bindValue($identifier, $this->oehdccamt, PDO::PARAM_STR);
                        break;
                    case 'OehdOTaxSub':
                        $stmt->bindValue($identifier, $this->oehdotaxsub, PDO::PARAM_STR);
                        break;
                    case 'OehdONonTaxSub':
                        $stmt->bindValue($identifier, $this->oehdonontaxsub, PDO::PARAM_STR);
                        break;
                    case 'OehdOTaxTot':
                        $stmt->bindValue($identifier, $this->oehdotaxtot, PDO::PARAM_STR);
                        break;
                    case 'OehdOOrdrTot':
                        $stmt->bindValue($identifier, $this->oehdoordrtot, PDO::PARAM_STR);
                        break;
                    case 'OehdPickPrintDate':
                        $stmt->bindValue($identifier, $this->oehdpickprintdate, PDO::PARAM_INT);
                        break;
                    case 'OehdPickPrintTime':
                        $stmt->bindValue($identifier, $this->oehdpickprinttime, PDO::PARAM_INT);
                        break;
                    case 'OehdCont':
                        $stmt->bindValue($identifier, $this->oehdcont, PDO::PARAM_STR);
                        break;
                    case 'OehdContTeleIntl':
                        $stmt->bindValue($identifier, $this->oehdcontteleintl, PDO::PARAM_STR);
                        break;
                    case 'OehdContTeleNbr':
                        $stmt->bindValue($identifier, $this->oehdconttelenbr, PDO::PARAM_STR);
                        break;
                    case 'OehdContTeleExt':
                        $stmt->bindValue($identifier, $this->oehdcontteleext, PDO::PARAM_STR);
                        break;
                    case 'OehdContFaxIntl':
                        $stmt->bindValue($identifier, $this->oehdcontfaxintl, PDO::PARAM_STR);
                        break;
                    case 'OehdContFaxNbr':
                        $stmt->bindValue($identifier, $this->oehdcontfaxnbr, PDO::PARAM_INT);
                        break;
                    case 'OehdMailId':
                        $stmt->bindValue($identifier, $this->oehdmailid, PDO::PARAM_STR);
                        break;
                    case 'OehdChgDue':
                        $stmt->bindValue($identifier, $this->oehdchgdue, PDO::PARAM_STR);
                        break;
                    case 'OehdAddlPricDisc':
                        $stmt->bindValue($identifier, $this->oehdaddlpricdisc, PDO::PARAM_STR);
                        break;
                    case 'OehdAllShip':
                        $stmt->bindValue($identifier, $this->oehdallship, PDO::PARAM_STR);
                        break;
                    case 'OehdQtyOrderAmt':
                        $stmt->bindValue($identifier, $this->oehdqtyorderamt, PDO::PARAM_STR);
                        break;
                    case 'OehdQtyTaxTot':
                        $stmt->bindValue($identifier, $this->oehdqtytaxtot, PDO::PARAM_STR);
                        break;
                    case 'OehdQtyFrtIn':
                        $stmt->bindValue($identifier, $this->oehdqtyfrtin, PDO::PARAM_STR);
                        break;
                    case 'OehdOrideShipComp':
                        $stmt->bindValue($identifier, $this->oehdorideshipcomp, PDO::PARAM_STR);
                        break;
                    case 'OehdContEmail':
                        $stmt->bindValue($identifier, $this->oehdcontemail, PDO::PARAM_STR);
                        break;
                    case 'OehdManualFrt':
                        $stmt->bindValue($identifier, $this->oehdmanualfrt, PDO::PARAM_STR);
                        break;
                    case 'OehdInternalFrt':
                        $stmt->bindValue($identifier, $this->oehdinternalfrt, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtCost':
                        $stmt->bindValue($identifier, $this->oehdfrtcost, PDO::PARAM_STR);
                        break;
                    case 'OehdRoute':
                        $stmt->bindValue($identifier, $this->oehdroute, PDO::PARAM_STR);
                        break;
                    case 'OehdRouteSeq':
                        $stmt->bindValue($identifier, $this->oehdrouteseq, PDO::PARAM_INT);
                        break;
                    case 'OehdFrtTaxCode1':
                        $stmt->bindValue($identifier, $this->oehdfrttaxcode1, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTaxAmt1':
                        $stmt->bindValue($identifier, $this->oehdfrttaxamt1, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTaxCode2':
                        $stmt->bindValue($identifier, $this->oehdfrttaxcode2, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTaxAmt2':
                        $stmt->bindValue($identifier, $this->oehdfrttaxamt2, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTaxCode3':
                        $stmt->bindValue($identifier, $this->oehdfrttaxcode3, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTaxAmt3':
                        $stmt->bindValue($identifier, $this->oehdfrttaxamt3, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTaxCode4':
                        $stmt->bindValue($identifier, $this->oehdfrttaxcode4, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTaxAmt4':
                        $stmt->bindValue($identifier, $this->oehdfrttaxamt4, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTaxCode5':
                        $stmt->bindValue($identifier, $this->oehdfrttaxcode5, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTaxAmt5':
                        $stmt->bindValue($identifier, $this->oehdfrttaxamt5, PDO::PARAM_STR);
                        break;
                    case 'OehdEdi855Sent':
                        $stmt->bindValue($identifier, $this->oehdedi855sent, PDO::PARAM_STR);
                        break;
                    case 'OehdFrt3rdParty':
                        $stmt->bindValue($identifier, $this->oehdfrt3rdparty, PDO::PARAM_STR);
                        break;
                    case 'OehdFob':
                        $stmt->bindValue($identifier, $this->oehdfob, PDO::PARAM_STR);
                        break;
                    case 'OehdConfirmImagYn':
                        $stmt->bindValue($identifier, $this->oehdconfirmimagyn, PDO::PARAM_STR);
                        break;
                    case 'OehdCstkConsign':
                        $stmt->bindValue($identifier, $this->oehdcstkconsign, PDO::PARAM_STR);
                        break;
                    case 'OehdStoreId':
                        $stmt->bindValue($identifier, $this->oehdstoreid, PDO::PARAM_STR);
                        break;
                    case 'OehdPickQueue':
                        $stmt->bindValue($identifier, $this->oehdpickqueue, PDO::PARAM_STR);
                        break;
                    case 'OehdArrvDate':
                        $stmt->bindValue($identifier, $this->oehdarrvdate, PDO::PARAM_INT);
                        break;
                    case 'OehdSurchgStat':
                        $stmt->bindValue($identifier, $this->oehdsurchgstat, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtGrup':
                        $stmt->bindValue($identifier, $this->oehdfrtgrup, PDO::PARAM_STR);
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
        $pos = SoHeaderTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getOehdstat();
                break;
            case 2:
                return $this->getOehdhold();
                break;
            case 3:
                return $this->getArcucustid();
                break;
            case 4:
                return $this->getArstshipid();
                break;
            case 5:
                return $this->getOehdstlastname();
                break;
            case 6:
                return $this->getOehdstfirstname();
                break;
            case 7:
                return $this->getOehdstadr1();
                break;
            case 8:
                return $this->getOehdstadr2();
                break;
            case 9:
                return $this->getOehdstadr3();
                break;
            case 10:
                return $this->getOehdstctry();
                break;
            case 11:
                return $this->getOehdstcity();
                break;
            case 12:
                return $this->getOehdststat();
                break;
            case 13:
                return $this->getOehdstzipcode();
                break;
            case 14:
                return $this->getOehdcustpo();
                break;
            case 15:
                return $this->getOehdordrdate();
                break;
            case 16:
                return $this->getArtmtermcd();
                break;
            case 17:
                return $this->getArtbshipvia();
                break;
            case 18:
                return $this->getArininvnbr();
                break;
            case 19:
                return $this->getOehdinvdate();
                break;
            case 20:
                return $this->getOehdglpd();
                break;
            case 21:
                return $this->getArspsaleper1();
                break;
            case 22:
                return $this->getOehdsp1pct();
                break;
            case 23:
                return $this->getArspsaleper2();
                break;
            case 24:
                return $this->getOehdsp2pct();
                break;
            case 25:
                return $this->getArspsaleper3();
                break;
            case 26:
                return $this->getOehdsp3pct();
                break;
            case 27:
                return $this->getOehdcntrnbr();
                break;
            case 28:
                return $this->getOehddroprelhold();
                break;
            case 29:
                return $this->getOehdtaxsub();
                break;
            case 30:
                return $this->getOehdnontaxsub();
                break;
            case 31:
                return $this->getOehdtaxtot();
                break;
            case 32:
                return $this->getOehdfrttot();
                break;
            case 33:
                return $this->getOehdmisctot();
                break;
            case 34:
                return $this->getOehdordrtot();
                break;
            case 35:
                return $this->getOehdcosttot();
                break;
            case 36:
                return $this->getOehdspcommlock();
                break;
            case 37:
                return $this->getOehdtakendate();
                break;
            case 38:
                return $this->getOehdtakentime();
                break;
            case 39:
                return $this->getOehdpickdate();
                break;
            case 40:
                return $this->getOehdpicktime();
                break;
            case 41:
                return $this->getOehdpackdate();
                break;
            case 42:
                return $this->getOehdpacktime();
                break;
            case 43:
                return $this->getOehdverifydate();
                break;
            case 44:
                return $this->getOehdverifytime();
                break;
            case 45:
                return $this->getOehdcreditmemo();
                break;
            case 46:
                return $this->getOehdbookedyn();
                break;
            case 47:
                return $this->getIntbwhseorig();
                break;
            case 48:
                return $this->getOehdbtstat();
                break;
            case 49:
                return $this->getOehdshipcomp();
                break;
            case 50:
                return $this->getOehdcwoflag();
                break;
            case 51:
                return $this->getOehddivision();
                break;
            case 52:
                return $this->getOehdtakencode();
                break;
            case 53:
                return $this->getOehdpickcode();
                break;
            case 54:
                return $this->getOehdpackcode();
                break;
            case 55:
                return $this->getOehdverifycode();
                break;
            case 56:
                return $this->getOehdtotdisc();
                break;
            case 57:
                return $this->getOehdedirefnbrqual();
                break;
            case 58:
                return $this->getOehdusercode1();
                break;
            case 59:
                return $this->getOehdusercode2();
                break;
            case 60:
                return $this->getOehdusercode3();
                break;
            case 61:
                return $this->getOehdusercode4();
                break;
            case 62:
                return $this->getOehdexchctry();
                break;
            case 63:
                return $this->getOehdexchrate();
                break;
            case 64:
                return $this->getOehdwght();
                break;
            case 65:
                return $this->getOehdqbpacker();
                break;
            case 66:
                return $this->getOehdqblabeler1();
                break;
            case 67:
                return $this->getOehdqblabeler2();
                break;
            case 68:
                return $this->getOehdboxcount();
                break;
            case 69:
                return $this->getOehdrqstdate();
                break;
            case 70:
                return $this->getOehdcancdate();
                break;
            case 71:
                return $this->getOehdcrntuser();
                break;
            case 72:
                return $this->getOehdreleasenbr();
                break;
            case 73:
                return $this->getIntbwhse();
                break;
            case 74:
                return $this->getOehdbordbuilddate();
                break;
            case 75:
                return $this->getOehddeptcode();
                break;
            case 76:
                return $this->getOehdfrtinentered();
                break;
            case 77:
                return $this->getDropshipentered();
                break;
            case 78:
                return $this->getOehderflag();
                break;
            case 79:
                return $this->getOehdfrtin();
                break;
            case 80:
                return $this->getOehddropship();
                break;
            case 81:
                return $this->getOehdminorder();
                break;
            case 82:
                return $this->getOehdcontractterms();
                break;
            case 83:
                return $this->getOehddiscdate1();
                break;
            case 84:
                return $this->getOehddiscpct1();
                break;
            case 85:
                return $this->getOehdduedate1();
                break;
            case 86:
                return $this->getOehddueamt1();
                break;
            case 87:
                return $this->getOehdduepct1();
                break;
            case 88:
                return $this->getOehddiscdate2();
                break;
            case 89:
                return $this->getOehddiscpct2();
                break;
            case 90:
                return $this->getOehdduedate2();
                break;
            case 91:
                return $this->getOehddueamt2();
                break;
            case 92:
                return $this->getOehdduepct2();
                break;
            case 93:
                return $this->getOehddiscdate3();
                break;
            case 94:
                return $this->getOehddiscpct3();
                break;
            case 95:
                return $this->getOehdduedate3();
                break;
            case 96:
                return $this->getOehddueamt3();
                break;
            case 97:
                return $this->getOehdduepct3();
                break;
            case 98:
                return $this->getOehddiscdate4();
                break;
            case 99:
                return $this->getOehddiscpct4();
                break;
            case 100:
                return $this->getOehdduedate4();
                break;
            case 101:
                return $this->getOehddueamt4();
                break;
            case 102:
                return $this->getOehdduepct4();
                break;
            case 103:
                return $this->getOehddiscdate5();
                break;
            case 104:
                return $this->getOehddiscpct5();
                break;
            case 105:
                return $this->getOehdduedate5();
                break;
            case 106:
                return $this->getOehddueamt5();
                break;
            case 107:
                return $this->getOehdduepct5();
                break;
            case 108:
                return $this->getOehddropshipbilled();
                break;
            case 109:
                return $this->getOehdordtyp();
                break;
            case 110:
                return $this->getOehdtracknbr();
                break;
            case 111:
                return $this->getOehdsource();
                break;
            case 112:
                return $this->getOehdccaprv();
                break;
            case 113:
                return $this->getOehdpickfmattype();
                break;
            case 114:
                return $this->getOehdinvcfmattype();
                break;
            case 115:
                return $this->getOehdcashamt();
                break;
            case 116:
                return $this->getOehdcheckamt();
                break;
            case 117:
                return $this->getOehdchecknbr();
                break;
            case 118:
                return $this->getOehddepositamt();
                break;
            case 119:
                return $this->getOehddepositnbr();
                break;
            case 120:
                return $this->getOehdccamt();
                break;
            case 121:
                return $this->getOehdotaxsub();
                break;
            case 122:
                return $this->getOehdonontaxsub();
                break;
            case 123:
                return $this->getOehdotaxtot();
                break;
            case 124:
                return $this->getOehdoordrtot();
                break;
            case 125:
                return $this->getOehdpickprintdate();
                break;
            case 126:
                return $this->getOehdpickprinttime();
                break;
            case 127:
                return $this->getOehdcont();
                break;
            case 128:
                return $this->getOehdcontteleintl();
                break;
            case 129:
                return $this->getOehdconttelenbr();
                break;
            case 130:
                return $this->getOehdcontteleext();
                break;
            case 131:
                return $this->getOehdcontfaxintl();
                break;
            case 132:
                return $this->getOehdcontfaxnbr();
                break;
            case 133:
                return $this->getOehdmailid();
                break;
            case 134:
                return $this->getOehdchgdue();
                break;
            case 135:
                return $this->getOehdaddlpricdisc();
                break;
            case 136:
                return $this->getOehdallship();
                break;
            case 137:
                return $this->getOehdqtyorderamt();
                break;
            case 138:
                return $this->getOehdqtytaxtot();
                break;
            case 139:
                return $this->getOehdqtyfrtin();
                break;
            case 140:
                return $this->getOehdorideshipcomp();
                break;
            case 141:
                return $this->getOehdcontemail();
                break;
            case 142:
                return $this->getOehdmanualfrt();
                break;
            case 143:
                return $this->getOehdinternalfrt();
                break;
            case 144:
                return $this->getOehdfrtcost();
                break;
            case 145:
                return $this->getOehdroute();
                break;
            case 146:
                return $this->getOehdrouteseq();
                break;
            case 147:
                return $this->getOehdfrttaxcode1();
                break;
            case 148:
                return $this->getOehdfrttaxamt1();
                break;
            case 149:
                return $this->getOehdfrttaxcode2();
                break;
            case 150:
                return $this->getOehdfrttaxamt2();
                break;
            case 151:
                return $this->getOehdfrttaxcode3();
                break;
            case 152:
                return $this->getOehdfrttaxamt3();
                break;
            case 153:
                return $this->getOehdfrttaxcode4();
                break;
            case 154:
                return $this->getOehdfrttaxamt4();
                break;
            case 155:
                return $this->getOehdfrttaxcode5();
                break;
            case 156:
                return $this->getOehdfrttaxamt5();
                break;
            case 157:
                return $this->getOehdedi855sent();
                break;
            case 158:
                return $this->getOehdfrt3rdparty();
                break;
            case 159:
                return $this->getOehdfob();
                break;
            case 160:
                return $this->getOehdconfirmimagyn();
                break;
            case 161:
                return $this->getOehdcstkconsign();
                break;
            case 162:
                return $this->getOehdstoreid();
                break;
            case 163:
                return $this->getOehdpickqueue();
                break;
            case 164:
                return $this->getOehdarrvdate();
                break;
            case 165:
                return $this->getOehdsurchgstat();
                break;
            case 166:
                return $this->getOehdfrtgrup();
                break;
            case 167:
                return $this->getDateupdtd();
                break;
            case 168:
                return $this->getTimeupdtd();
                break;
            case 169:
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

        if (isset($alreadyDumpedObjects['SoHeader'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SoHeader'][$this->hashCode()] = true;
        $keys = SoHeaderTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOehdnbr(),
            $keys[1] => $this->getOehdstat(),
            $keys[2] => $this->getOehdhold(),
            $keys[3] => $this->getArcucustid(),
            $keys[4] => $this->getArstshipid(),
            $keys[5] => $this->getOehdstlastname(),
            $keys[6] => $this->getOehdstfirstname(),
            $keys[7] => $this->getOehdstadr1(),
            $keys[8] => $this->getOehdstadr2(),
            $keys[9] => $this->getOehdstadr3(),
            $keys[10] => $this->getOehdstctry(),
            $keys[11] => $this->getOehdstcity(),
            $keys[12] => $this->getOehdststat(),
            $keys[13] => $this->getOehdstzipcode(),
            $keys[14] => $this->getOehdcustpo(),
            $keys[15] => $this->getOehdordrdate(),
            $keys[16] => $this->getArtmtermcd(),
            $keys[17] => $this->getArtbshipvia(),
            $keys[18] => $this->getArininvnbr(),
            $keys[19] => $this->getOehdinvdate(),
            $keys[20] => $this->getOehdglpd(),
            $keys[21] => $this->getArspsaleper1(),
            $keys[22] => $this->getOehdsp1pct(),
            $keys[23] => $this->getArspsaleper2(),
            $keys[24] => $this->getOehdsp2pct(),
            $keys[25] => $this->getArspsaleper3(),
            $keys[26] => $this->getOehdsp3pct(),
            $keys[27] => $this->getOehdcntrnbr(),
            $keys[28] => $this->getOehddroprelhold(),
            $keys[29] => $this->getOehdtaxsub(),
            $keys[30] => $this->getOehdnontaxsub(),
            $keys[31] => $this->getOehdtaxtot(),
            $keys[32] => $this->getOehdfrttot(),
            $keys[33] => $this->getOehdmisctot(),
            $keys[34] => $this->getOehdordrtot(),
            $keys[35] => $this->getOehdcosttot(),
            $keys[36] => $this->getOehdspcommlock(),
            $keys[37] => $this->getOehdtakendate(),
            $keys[38] => $this->getOehdtakentime(),
            $keys[39] => $this->getOehdpickdate(),
            $keys[40] => $this->getOehdpicktime(),
            $keys[41] => $this->getOehdpackdate(),
            $keys[42] => $this->getOehdpacktime(),
            $keys[43] => $this->getOehdverifydate(),
            $keys[44] => $this->getOehdverifytime(),
            $keys[45] => $this->getOehdcreditmemo(),
            $keys[46] => $this->getOehdbookedyn(),
            $keys[47] => $this->getIntbwhseorig(),
            $keys[48] => $this->getOehdbtstat(),
            $keys[49] => $this->getOehdshipcomp(),
            $keys[50] => $this->getOehdcwoflag(),
            $keys[51] => $this->getOehddivision(),
            $keys[52] => $this->getOehdtakencode(),
            $keys[53] => $this->getOehdpickcode(),
            $keys[54] => $this->getOehdpackcode(),
            $keys[55] => $this->getOehdverifycode(),
            $keys[56] => $this->getOehdtotdisc(),
            $keys[57] => $this->getOehdedirefnbrqual(),
            $keys[58] => $this->getOehdusercode1(),
            $keys[59] => $this->getOehdusercode2(),
            $keys[60] => $this->getOehdusercode3(),
            $keys[61] => $this->getOehdusercode4(),
            $keys[62] => $this->getOehdexchctry(),
            $keys[63] => $this->getOehdexchrate(),
            $keys[64] => $this->getOehdwght(),
            $keys[65] => $this->getOehdqbpacker(),
            $keys[66] => $this->getOehdqblabeler1(),
            $keys[67] => $this->getOehdqblabeler2(),
            $keys[68] => $this->getOehdboxcount(),
            $keys[69] => $this->getOehdrqstdate(),
            $keys[70] => $this->getOehdcancdate(),
            $keys[71] => $this->getOehdcrntuser(),
            $keys[72] => $this->getOehdreleasenbr(),
            $keys[73] => $this->getIntbwhse(),
            $keys[74] => $this->getOehdbordbuilddate(),
            $keys[75] => $this->getOehddeptcode(),
            $keys[76] => $this->getOehdfrtinentered(),
            $keys[77] => $this->getDropshipentered(),
            $keys[78] => $this->getOehderflag(),
            $keys[79] => $this->getOehdfrtin(),
            $keys[80] => $this->getOehddropship(),
            $keys[81] => $this->getOehdminorder(),
            $keys[82] => $this->getOehdcontractterms(),
            $keys[83] => $this->getOehddiscdate1(),
            $keys[84] => $this->getOehddiscpct1(),
            $keys[85] => $this->getOehdduedate1(),
            $keys[86] => $this->getOehddueamt1(),
            $keys[87] => $this->getOehdduepct1(),
            $keys[88] => $this->getOehddiscdate2(),
            $keys[89] => $this->getOehddiscpct2(),
            $keys[90] => $this->getOehdduedate2(),
            $keys[91] => $this->getOehddueamt2(),
            $keys[92] => $this->getOehdduepct2(),
            $keys[93] => $this->getOehddiscdate3(),
            $keys[94] => $this->getOehddiscpct3(),
            $keys[95] => $this->getOehdduedate3(),
            $keys[96] => $this->getOehddueamt3(),
            $keys[97] => $this->getOehdduepct3(),
            $keys[98] => $this->getOehddiscdate4(),
            $keys[99] => $this->getOehddiscpct4(),
            $keys[100] => $this->getOehdduedate4(),
            $keys[101] => $this->getOehddueamt4(),
            $keys[102] => $this->getOehdduepct4(),
            $keys[103] => $this->getOehddiscdate5(),
            $keys[104] => $this->getOehddiscpct5(),
            $keys[105] => $this->getOehdduedate5(),
            $keys[106] => $this->getOehddueamt5(),
            $keys[107] => $this->getOehdduepct5(),
            $keys[108] => $this->getOehddropshipbilled(),
            $keys[109] => $this->getOehdordtyp(),
            $keys[110] => $this->getOehdtracknbr(),
            $keys[111] => $this->getOehdsource(),
            $keys[112] => $this->getOehdccaprv(),
            $keys[113] => $this->getOehdpickfmattype(),
            $keys[114] => $this->getOehdinvcfmattype(),
            $keys[115] => $this->getOehdcashamt(),
            $keys[116] => $this->getOehdcheckamt(),
            $keys[117] => $this->getOehdchecknbr(),
            $keys[118] => $this->getOehddepositamt(),
            $keys[119] => $this->getOehddepositnbr(),
            $keys[120] => $this->getOehdccamt(),
            $keys[121] => $this->getOehdotaxsub(),
            $keys[122] => $this->getOehdonontaxsub(),
            $keys[123] => $this->getOehdotaxtot(),
            $keys[124] => $this->getOehdoordrtot(),
            $keys[125] => $this->getOehdpickprintdate(),
            $keys[126] => $this->getOehdpickprinttime(),
            $keys[127] => $this->getOehdcont(),
            $keys[128] => $this->getOehdcontteleintl(),
            $keys[129] => $this->getOehdconttelenbr(),
            $keys[130] => $this->getOehdcontteleext(),
            $keys[131] => $this->getOehdcontfaxintl(),
            $keys[132] => $this->getOehdcontfaxnbr(),
            $keys[133] => $this->getOehdmailid(),
            $keys[134] => $this->getOehdchgdue(),
            $keys[135] => $this->getOehdaddlpricdisc(),
            $keys[136] => $this->getOehdallship(),
            $keys[137] => $this->getOehdqtyorderamt(),
            $keys[138] => $this->getOehdqtytaxtot(),
            $keys[139] => $this->getOehdqtyfrtin(),
            $keys[140] => $this->getOehdorideshipcomp(),
            $keys[141] => $this->getOehdcontemail(),
            $keys[142] => $this->getOehdmanualfrt(),
            $keys[143] => $this->getOehdinternalfrt(),
            $keys[144] => $this->getOehdfrtcost(),
            $keys[145] => $this->getOehdroute(),
            $keys[146] => $this->getOehdrouteseq(),
            $keys[147] => $this->getOehdfrttaxcode1(),
            $keys[148] => $this->getOehdfrttaxamt1(),
            $keys[149] => $this->getOehdfrttaxcode2(),
            $keys[150] => $this->getOehdfrttaxamt2(),
            $keys[151] => $this->getOehdfrttaxcode3(),
            $keys[152] => $this->getOehdfrttaxamt3(),
            $keys[153] => $this->getOehdfrttaxcode4(),
            $keys[154] => $this->getOehdfrttaxamt4(),
            $keys[155] => $this->getOehdfrttaxcode5(),
            $keys[156] => $this->getOehdfrttaxamt5(),
            $keys[157] => $this->getOehdedi855sent(),
            $keys[158] => $this->getOehdfrt3rdparty(),
            $keys[159] => $this->getOehdfob(),
            $keys[160] => $this->getOehdconfirmimagyn(),
            $keys[161] => $this->getOehdcstkconsign(),
            $keys[162] => $this->getOehdstoreid(),
            $keys[163] => $this->getOehdpickqueue(),
            $keys[164] => $this->getOehdarrvdate(),
            $keys[165] => $this->getOehdsurchgstat(),
            $keys[166] => $this->getOehdfrtgrup(),
            $keys[167] => $this->getDateupdtd(),
            $keys[168] => $this->getTimeupdtd(),
            $keys[169] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collSoDetails) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'soDetails';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'SO_DETAILs';
                        break;
                    default:
                        $key = 'SoDetails';
                }

                $result[$key] = $this->collSoDetails->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\SoHeader
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = SoHeaderTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\SoHeader
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setOehdnbr($value);
                break;
            case 1:
                $this->setOehdstat($value);
                break;
            case 2:
                $this->setOehdhold($value);
                break;
            case 3:
                $this->setArcucustid($value);
                break;
            case 4:
                $this->setArstshipid($value);
                break;
            case 5:
                $this->setOehdstlastname($value);
                break;
            case 6:
                $this->setOehdstfirstname($value);
                break;
            case 7:
                $this->setOehdstadr1($value);
                break;
            case 8:
                $this->setOehdstadr2($value);
                break;
            case 9:
                $this->setOehdstadr3($value);
                break;
            case 10:
                $this->setOehdstctry($value);
                break;
            case 11:
                $this->setOehdstcity($value);
                break;
            case 12:
                $this->setOehdststat($value);
                break;
            case 13:
                $this->setOehdstzipcode($value);
                break;
            case 14:
                $this->setOehdcustpo($value);
                break;
            case 15:
                $this->setOehdordrdate($value);
                break;
            case 16:
                $this->setArtmtermcd($value);
                break;
            case 17:
                $this->setArtbshipvia($value);
                break;
            case 18:
                $this->setArininvnbr($value);
                break;
            case 19:
                $this->setOehdinvdate($value);
                break;
            case 20:
                $this->setOehdglpd($value);
                break;
            case 21:
                $this->setArspsaleper1($value);
                break;
            case 22:
                $this->setOehdsp1pct($value);
                break;
            case 23:
                $this->setArspsaleper2($value);
                break;
            case 24:
                $this->setOehdsp2pct($value);
                break;
            case 25:
                $this->setArspsaleper3($value);
                break;
            case 26:
                $this->setOehdsp3pct($value);
                break;
            case 27:
                $this->setOehdcntrnbr($value);
                break;
            case 28:
                $this->setOehddroprelhold($value);
                break;
            case 29:
                $this->setOehdtaxsub($value);
                break;
            case 30:
                $this->setOehdnontaxsub($value);
                break;
            case 31:
                $this->setOehdtaxtot($value);
                break;
            case 32:
                $this->setOehdfrttot($value);
                break;
            case 33:
                $this->setOehdmisctot($value);
                break;
            case 34:
                $this->setOehdordrtot($value);
                break;
            case 35:
                $this->setOehdcosttot($value);
                break;
            case 36:
                $this->setOehdspcommlock($value);
                break;
            case 37:
                $this->setOehdtakendate($value);
                break;
            case 38:
                $this->setOehdtakentime($value);
                break;
            case 39:
                $this->setOehdpickdate($value);
                break;
            case 40:
                $this->setOehdpicktime($value);
                break;
            case 41:
                $this->setOehdpackdate($value);
                break;
            case 42:
                $this->setOehdpacktime($value);
                break;
            case 43:
                $this->setOehdverifydate($value);
                break;
            case 44:
                $this->setOehdverifytime($value);
                break;
            case 45:
                $this->setOehdcreditmemo($value);
                break;
            case 46:
                $this->setOehdbookedyn($value);
                break;
            case 47:
                $this->setIntbwhseorig($value);
                break;
            case 48:
                $this->setOehdbtstat($value);
                break;
            case 49:
                $this->setOehdshipcomp($value);
                break;
            case 50:
                $this->setOehdcwoflag($value);
                break;
            case 51:
                $this->setOehddivision($value);
                break;
            case 52:
                $this->setOehdtakencode($value);
                break;
            case 53:
                $this->setOehdpickcode($value);
                break;
            case 54:
                $this->setOehdpackcode($value);
                break;
            case 55:
                $this->setOehdverifycode($value);
                break;
            case 56:
                $this->setOehdtotdisc($value);
                break;
            case 57:
                $this->setOehdedirefnbrqual($value);
                break;
            case 58:
                $this->setOehdusercode1($value);
                break;
            case 59:
                $this->setOehdusercode2($value);
                break;
            case 60:
                $this->setOehdusercode3($value);
                break;
            case 61:
                $this->setOehdusercode4($value);
                break;
            case 62:
                $this->setOehdexchctry($value);
                break;
            case 63:
                $this->setOehdexchrate($value);
                break;
            case 64:
                $this->setOehdwght($value);
                break;
            case 65:
                $this->setOehdqbpacker($value);
                break;
            case 66:
                $this->setOehdqblabeler1($value);
                break;
            case 67:
                $this->setOehdqblabeler2($value);
                break;
            case 68:
                $this->setOehdboxcount($value);
                break;
            case 69:
                $this->setOehdrqstdate($value);
                break;
            case 70:
                $this->setOehdcancdate($value);
                break;
            case 71:
                $this->setOehdcrntuser($value);
                break;
            case 72:
                $this->setOehdreleasenbr($value);
                break;
            case 73:
                $this->setIntbwhse($value);
                break;
            case 74:
                $this->setOehdbordbuilddate($value);
                break;
            case 75:
                $this->setOehddeptcode($value);
                break;
            case 76:
                $this->setOehdfrtinentered($value);
                break;
            case 77:
                $this->setDropshipentered($value);
                break;
            case 78:
                $this->setOehderflag($value);
                break;
            case 79:
                $this->setOehdfrtin($value);
                break;
            case 80:
                $this->setOehddropship($value);
                break;
            case 81:
                $this->setOehdminorder($value);
                break;
            case 82:
                $this->setOehdcontractterms($value);
                break;
            case 83:
                $this->setOehddiscdate1($value);
                break;
            case 84:
                $this->setOehddiscpct1($value);
                break;
            case 85:
                $this->setOehdduedate1($value);
                break;
            case 86:
                $this->setOehddueamt1($value);
                break;
            case 87:
                $this->setOehdduepct1($value);
                break;
            case 88:
                $this->setOehddiscdate2($value);
                break;
            case 89:
                $this->setOehddiscpct2($value);
                break;
            case 90:
                $this->setOehdduedate2($value);
                break;
            case 91:
                $this->setOehddueamt2($value);
                break;
            case 92:
                $this->setOehdduepct2($value);
                break;
            case 93:
                $this->setOehddiscdate3($value);
                break;
            case 94:
                $this->setOehddiscpct3($value);
                break;
            case 95:
                $this->setOehdduedate3($value);
                break;
            case 96:
                $this->setOehddueamt3($value);
                break;
            case 97:
                $this->setOehdduepct3($value);
                break;
            case 98:
                $this->setOehddiscdate4($value);
                break;
            case 99:
                $this->setOehddiscpct4($value);
                break;
            case 100:
                $this->setOehdduedate4($value);
                break;
            case 101:
                $this->setOehddueamt4($value);
                break;
            case 102:
                $this->setOehdduepct4($value);
                break;
            case 103:
                $this->setOehddiscdate5($value);
                break;
            case 104:
                $this->setOehddiscpct5($value);
                break;
            case 105:
                $this->setOehdduedate5($value);
                break;
            case 106:
                $this->setOehddueamt5($value);
                break;
            case 107:
                $this->setOehdduepct5($value);
                break;
            case 108:
                $this->setOehddropshipbilled($value);
                break;
            case 109:
                $this->setOehdordtyp($value);
                break;
            case 110:
                $this->setOehdtracknbr($value);
                break;
            case 111:
                $this->setOehdsource($value);
                break;
            case 112:
                $this->setOehdccaprv($value);
                break;
            case 113:
                $this->setOehdpickfmattype($value);
                break;
            case 114:
                $this->setOehdinvcfmattype($value);
                break;
            case 115:
                $this->setOehdcashamt($value);
                break;
            case 116:
                $this->setOehdcheckamt($value);
                break;
            case 117:
                $this->setOehdchecknbr($value);
                break;
            case 118:
                $this->setOehddepositamt($value);
                break;
            case 119:
                $this->setOehddepositnbr($value);
                break;
            case 120:
                $this->setOehdccamt($value);
                break;
            case 121:
                $this->setOehdotaxsub($value);
                break;
            case 122:
                $this->setOehdonontaxsub($value);
                break;
            case 123:
                $this->setOehdotaxtot($value);
                break;
            case 124:
                $this->setOehdoordrtot($value);
                break;
            case 125:
                $this->setOehdpickprintdate($value);
                break;
            case 126:
                $this->setOehdpickprinttime($value);
                break;
            case 127:
                $this->setOehdcont($value);
                break;
            case 128:
                $this->setOehdcontteleintl($value);
                break;
            case 129:
                $this->setOehdconttelenbr($value);
                break;
            case 130:
                $this->setOehdcontteleext($value);
                break;
            case 131:
                $this->setOehdcontfaxintl($value);
                break;
            case 132:
                $this->setOehdcontfaxnbr($value);
                break;
            case 133:
                $this->setOehdmailid($value);
                break;
            case 134:
                $this->setOehdchgdue($value);
                break;
            case 135:
                $this->setOehdaddlpricdisc($value);
                break;
            case 136:
                $this->setOehdallship($value);
                break;
            case 137:
                $this->setOehdqtyorderamt($value);
                break;
            case 138:
                $this->setOehdqtytaxtot($value);
                break;
            case 139:
                $this->setOehdqtyfrtin($value);
                break;
            case 140:
                $this->setOehdorideshipcomp($value);
                break;
            case 141:
                $this->setOehdcontemail($value);
                break;
            case 142:
                $this->setOehdmanualfrt($value);
                break;
            case 143:
                $this->setOehdinternalfrt($value);
                break;
            case 144:
                $this->setOehdfrtcost($value);
                break;
            case 145:
                $this->setOehdroute($value);
                break;
            case 146:
                $this->setOehdrouteseq($value);
                break;
            case 147:
                $this->setOehdfrttaxcode1($value);
                break;
            case 148:
                $this->setOehdfrttaxamt1($value);
                break;
            case 149:
                $this->setOehdfrttaxcode2($value);
                break;
            case 150:
                $this->setOehdfrttaxamt2($value);
                break;
            case 151:
                $this->setOehdfrttaxcode3($value);
                break;
            case 152:
                $this->setOehdfrttaxamt3($value);
                break;
            case 153:
                $this->setOehdfrttaxcode4($value);
                break;
            case 154:
                $this->setOehdfrttaxamt4($value);
                break;
            case 155:
                $this->setOehdfrttaxcode5($value);
                break;
            case 156:
                $this->setOehdfrttaxamt5($value);
                break;
            case 157:
                $this->setOehdedi855sent($value);
                break;
            case 158:
                $this->setOehdfrt3rdparty($value);
                break;
            case 159:
                $this->setOehdfob($value);
                break;
            case 160:
                $this->setOehdconfirmimagyn($value);
                break;
            case 161:
                $this->setOehdcstkconsign($value);
                break;
            case 162:
                $this->setOehdstoreid($value);
                break;
            case 163:
                $this->setOehdpickqueue($value);
                break;
            case 164:
                $this->setOehdarrvdate($value);
                break;
            case 165:
                $this->setOehdsurchgstat($value);
                break;
            case 166:
                $this->setOehdfrtgrup($value);
                break;
            case 167:
                $this->setDateupdtd($value);
                break;
            case 168:
                $this->setTimeupdtd($value);
                break;
            case 169:
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
        $keys = SoHeaderTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setOehdnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setOehdstat($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setOehdhold($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setArcucustid($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setArstshipid($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setOehdstlastname($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setOehdstfirstname($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setOehdstadr1($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setOehdstadr2($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setOehdstadr3($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setOehdstctry($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setOehdstcity($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setOehdststat($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setOehdstzipcode($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setOehdcustpo($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setOehdordrdate($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setArtmtermcd($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setArtbshipvia($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setArininvnbr($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setOehdinvdate($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setOehdglpd($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setArspsaleper1($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setOehdsp1pct($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setArspsaleper2($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setOehdsp2pct($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setArspsaleper3($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setOehdsp3pct($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setOehdcntrnbr($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setOehddroprelhold($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setOehdtaxsub($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setOehdnontaxsub($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setOehdtaxtot($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setOehdfrttot($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setOehdmisctot($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setOehdordrtot($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setOehdcosttot($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setOehdspcommlock($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setOehdtakendate($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setOehdtakentime($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setOehdpickdate($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setOehdpicktime($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setOehdpackdate($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setOehdpacktime($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setOehdverifydate($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setOehdverifytime($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setOehdcreditmemo($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setOehdbookedyn($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setIntbwhseorig($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setOehdbtstat($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setOehdshipcomp($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setOehdcwoflag($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setOehddivision($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setOehdtakencode($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setOehdpickcode($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setOehdpackcode($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setOehdverifycode($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setOehdtotdisc($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setOehdedirefnbrqual($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setOehdusercode1($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setOehdusercode2($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setOehdusercode3($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setOehdusercode4($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setOehdexchctry($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setOehdexchrate($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setOehdwght($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setOehdqbpacker($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setOehdqblabeler1($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setOehdqblabeler2($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setOehdboxcount($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setOehdrqstdate($arr[$keys[69]]);
        }
        if (array_key_exists($keys[70], $arr)) {
            $this->setOehdcancdate($arr[$keys[70]]);
        }
        if (array_key_exists($keys[71], $arr)) {
            $this->setOehdcrntuser($arr[$keys[71]]);
        }
        if (array_key_exists($keys[72], $arr)) {
            $this->setOehdreleasenbr($arr[$keys[72]]);
        }
        if (array_key_exists($keys[73], $arr)) {
            $this->setIntbwhse($arr[$keys[73]]);
        }
        if (array_key_exists($keys[74], $arr)) {
            $this->setOehdbordbuilddate($arr[$keys[74]]);
        }
        if (array_key_exists($keys[75], $arr)) {
            $this->setOehddeptcode($arr[$keys[75]]);
        }
        if (array_key_exists($keys[76], $arr)) {
            $this->setOehdfrtinentered($arr[$keys[76]]);
        }
        if (array_key_exists($keys[77], $arr)) {
            $this->setDropshipentered($arr[$keys[77]]);
        }
        if (array_key_exists($keys[78], $arr)) {
            $this->setOehderflag($arr[$keys[78]]);
        }
        if (array_key_exists($keys[79], $arr)) {
            $this->setOehdfrtin($arr[$keys[79]]);
        }
        if (array_key_exists($keys[80], $arr)) {
            $this->setOehddropship($arr[$keys[80]]);
        }
        if (array_key_exists($keys[81], $arr)) {
            $this->setOehdminorder($arr[$keys[81]]);
        }
        if (array_key_exists($keys[82], $arr)) {
            $this->setOehdcontractterms($arr[$keys[82]]);
        }
        if (array_key_exists($keys[83], $arr)) {
            $this->setOehddiscdate1($arr[$keys[83]]);
        }
        if (array_key_exists($keys[84], $arr)) {
            $this->setOehddiscpct1($arr[$keys[84]]);
        }
        if (array_key_exists($keys[85], $arr)) {
            $this->setOehdduedate1($arr[$keys[85]]);
        }
        if (array_key_exists($keys[86], $arr)) {
            $this->setOehddueamt1($arr[$keys[86]]);
        }
        if (array_key_exists($keys[87], $arr)) {
            $this->setOehdduepct1($arr[$keys[87]]);
        }
        if (array_key_exists($keys[88], $arr)) {
            $this->setOehddiscdate2($arr[$keys[88]]);
        }
        if (array_key_exists($keys[89], $arr)) {
            $this->setOehddiscpct2($arr[$keys[89]]);
        }
        if (array_key_exists($keys[90], $arr)) {
            $this->setOehdduedate2($arr[$keys[90]]);
        }
        if (array_key_exists($keys[91], $arr)) {
            $this->setOehddueamt2($arr[$keys[91]]);
        }
        if (array_key_exists($keys[92], $arr)) {
            $this->setOehdduepct2($arr[$keys[92]]);
        }
        if (array_key_exists($keys[93], $arr)) {
            $this->setOehddiscdate3($arr[$keys[93]]);
        }
        if (array_key_exists($keys[94], $arr)) {
            $this->setOehddiscpct3($arr[$keys[94]]);
        }
        if (array_key_exists($keys[95], $arr)) {
            $this->setOehdduedate3($arr[$keys[95]]);
        }
        if (array_key_exists($keys[96], $arr)) {
            $this->setOehddueamt3($arr[$keys[96]]);
        }
        if (array_key_exists($keys[97], $arr)) {
            $this->setOehdduepct3($arr[$keys[97]]);
        }
        if (array_key_exists($keys[98], $arr)) {
            $this->setOehddiscdate4($arr[$keys[98]]);
        }
        if (array_key_exists($keys[99], $arr)) {
            $this->setOehddiscpct4($arr[$keys[99]]);
        }
        if (array_key_exists($keys[100], $arr)) {
            $this->setOehdduedate4($arr[$keys[100]]);
        }
        if (array_key_exists($keys[101], $arr)) {
            $this->setOehddueamt4($arr[$keys[101]]);
        }
        if (array_key_exists($keys[102], $arr)) {
            $this->setOehdduepct4($arr[$keys[102]]);
        }
        if (array_key_exists($keys[103], $arr)) {
            $this->setOehddiscdate5($arr[$keys[103]]);
        }
        if (array_key_exists($keys[104], $arr)) {
            $this->setOehddiscpct5($arr[$keys[104]]);
        }
        if (array_key_exists($keys[105], $arr)) {
            $this->setOehdduedate5($arr[$keys[105]]);
        }
        if (array_key_exists($keys[106], $arr)) {
            $this->setOehddueamt5($arr[$keys[106]]);
        }
        if (array_key_exists($keys[107], $arr)) {
            $this->setOehdduepct5($arr[$keys[107]]);
        }
        if (array_key_exists($keys[108], $arr)) {
            $this->setOehddropshipbilled($arr[$keys[108]]);
        }
        if (array_key_exists($keys[109], $arr)) {
            $this->setOehdordtyp($arr[$keys[109]]);
        }
        if (array_key_exists($keys[110], $arr)) {
            $this->setOehdtracknbr($arr[$keys[110]]);
        }
        if (array_key_exists($keys[111], $arr)) {
            $this->setOehdsource($arr[$keys[111]]);
        }
        if (array_key_exists($keys[112], $arr)) {
            $this->setOehdccaprv($arr[$keys[112]]);
        }
        if (array_key_exists($keys[113], $arr)) {
            $this->setOehdpickfmattype($arr[$keys[113]]);
        }
        if (array_key_exists($keys[114], $arr)) {
            $this->setOehdinvcfmattype($arr[$keys[114]]);
        }
        if (array_key_exists($keys[115], $arr)) {
            $this->setOehdcashamt($arr[$keys[115]]);
        }
        if (array_key_exists($keys[116], $arr)) {
            $this->setOehdcheckamt($arr[$keys[116]]);
        }
        if (array_key_exists($keys[117], $arr)) {
            $this->setOehdchecknbr($arr[$keys[117]]);
        }
        if (array_key_exists($keys[118], $arr)) {
            $this->setOehddepositamt($arr[$keys[118]]);
        }
        if (array_key_exists($keys[119], $arr)) {
            $this->setOehddepositnbr($arr[$keys[119]]);
        }
        if (array_key_exists($keys[120], $arr)) {
            $this->setOehdccamt($arr[$keys[120]]);
        }
        if (array_key_exists($keys[121], $arr)) {
            $this->setOehdotaxsub($arr[$keys[121]]);
        }
        if (array_key_exists($keys[122], $arr)) {
            $this->setOehdonontaxsub($arr[$keys[122]]);
        }
        if (array_key_exists($keys[123], $arr)) {
            $this->setOehdotaxtot($arr[$keys[123]]);
        }
        if (array_key_exists($keys[124], $arr)) {
            $this->setOehdoordrtot($arr[$keys[124]]);
        }
        if (array_key_exists($keys[125], $arr)) {
            $this->setOehdpickprintdate($arr[$keys[125]]);
        }
        if (array_key_exists($keys[126], $arr)) {
            $this->setOehdpickprinttime($arr[$keys[126]]);
        }
        if (array_key_exists($keys[127], $arr)) {
            $this->setOehdcont($arr[$keys[127]]);
        }
        if (array_key_exists($keys[128], $arr)) {
            $this->setOehdcontteleintl($arr[$keys[128]]);
        }
        if (array_key_exists($keys[129], $arr)) {
            $this->setOehdconttelenbr($arr[$keys[129]]);
        }
        if (array_key_exists($keys[130], $arr)) {
            $this->setOehdcontteleext($arr[$keys[130]]);
        }
        if (array_key_exists($keys[131], $arr)) {
            $this->setOehdcontfaxintl($arr[$keys[131]]);
        }
        if (array_key_exists($keys[132], $arr)) {
            $this->setOehdcontfaxnbr($arr[$keys[132]]);
        }
        if (array_key_exists($keys[133], $arr)) {
            $this->setOehdmailid($arr[$keys[133]]);
        }
        if (array_key_exists($keys[134], $arr)) {
            $this->setOehdchgdue($arr[$keys[134]]);
        }
        if (array_key_exists($keys[135], $arr)) {
            $this->setOehdaddlpricdisc($arr[$keys[135]]);
        }
        if (array_key_exists($keys[136], $arr)) {
            $this->setOehdallship($arr[$keys[136]]);
        }
        if (array_key_exists($keys[137], $arr)) {
            $this->setOehdqtyorderamt($arr[$keys[137]]);
        }
        if (array_key_exists($keys[138], $arr)) {
            $this->setOehdqtytaxtot($arr[$keys[138]]);
        }
        if (array_key_exists($keys[139], $arr)) {
            $this->setOehdqtyfrtin($arr[$keys[139]]);
        }
        if (array_key_exists($keys[140], $arr)) {
            $this->setOehdorideshipcomp($arr[$keys[140]]);
        }
        if (array_key_exists($keys[141], $arr)) {
            $this->setOehdcontemail($arr[$keys[141]]);
        }
        if (array_key_exists($keys[142], $arr)) {
            $this->setOehdmanualfrt($arr[$keys[142]]);
        }
        if (array_key_exists($keys[143], $arr)) {
            $this->setOehdinternalfrt($arr[$keys[143]]);
        }
        if (array_key_exists($keys[144], $arr)) {
            $this->setOehdfrtcost($arr[$keys[144]]);
        }
        if (array_key_exists($keys[145], $arr)) {
            $this->setOehdroute($arr[$keys[145]]);
        }
        if (array_key_exists($keys[146], $arr)) {
            $this->setOehdrouteseq($arr[$keys[146]]);
        }
        if (array_key_exists($keys[147], $arr)) {
            $this->setOehdfrttaxcode1($arr[$keys[147]]);
        }
        if (array_key_exists($keys[148], $arr)) {
            $this->setOehdfrttaxamt1($arr[$keys[148]]);
        }
        if (array_key_exists($keys[149], $arr)) {
            $this->setOehdfrttaxcode2($arr[$keys[149]]);
        }
        if (array_key_exists($keys[150], $arr)) {
            $this->setOehdfrttaxamt2($arr[$keys[150]]);
        }
        if (array_key_exists($keys[151], $arr)) {
            $this->setOehdfrttaxcode3($arr[$keys[151]]);
        }
        if (array_key_exists($keys[152], $arr)) {
            $this->setOehdfrttaxamt3($arr[$keys[152]]);
        }
        if (array_key_exists($keys[153], $arr)) {
            $this->setOehdfrttaxcode4($arr[$keys[153]]);
        }
        if (array_key_exists($keys[154], $arr)) {
            $this->setOehdfrttaxamt4($arr[$keys[154]]);
        }
        if (array_key_exists($keys[155], $arr)) {
            $this->setOehdfrttaxcode5($arr[$keys[155]]);
        }
        if (array_key_exists($keys[156], $arr)) {
            $this->setOehdfrttaxamt5($arr[$keys[156]]);
        }
        if (array_key_exists($keys[157], $arr)) {
            $this->setOehdedi855sent($arr[$keys[157]]);
        }
        if (array_key_exists($keys[158], $arr)) {
            $this->setOehdfrt3rdparty($arr[$keys[158]]);
        }
        if (array_key_exists($keys[159], $arr)) {
            $this->setOehdfob($arr[$keys[159]]);
        }
        if (array_key_exists($keys[160], $arr)) {
            $this->setOehdconfirmimagyn($arr[$keys[160]]);
        }
        if (array_key_exists($keys[161], $arr)) {
            $this->setOehdcstkconsign($arr[$keys[161]]);
        }
        if (array_key_exists($keys[162], $arr)) {
            $this->setOehdstoreid($arr[$keys[162]]);
        }
        if (array_key_exists($keys[163], $arr)) {
            $this->setOehdpickqueue($arr[$keys[163]]);
        }
        if (array_key_exists($keys[164], $arr)) {
            $this->setOehdarrvdate($arr[$keys[164]]);
        }
        if (array_key_exists($keys[165], $arr)) {
            $this->setOehdsurchgstat($arr[$keys[165]]);
        }
        if (array_key_exists($keys[166], $arr)) {
            $this->setOehdfrtgrup($arr[$keys[166]]);
        }
        if (array_key_exists($keys[167], $arr)) {
            $this->setDateupdtd($arr[$keys[167]]);
        }
        if (array_key_exists($keys[168], $arr)) {
            $this->setTimeupdtd($arr[$keys[168]]);
        }
        if (array_key_exists($keys[169], $arr)) {
            $this->setDummy($arr[$keys[169]]);
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
     * @return $this|\SoHeader The current object, for fluid interface
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
        $criteria = new Criteria(SoHeaderTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDNBR)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDNBR, $this->oehdnbr);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTAT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDSTAT, $this->oehdstat);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDHOLD)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDHOLD, $this->oehdhold);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_ARCUCUSTID)) {
            $criteria->add(SoHeaderTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_ARSTSHIPID)) {
            $criteria->add(SoHeaderTableMap::COL_ARSTSHIPID, $this->arstshipid);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTLASTNAME)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDSTLASTNAME, $this->oehdstlastname);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTFIRSTNAME)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDSTFIRSTNAME, $this->oehdstfirstname);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTADR1)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDSTADR1, $this->oehdstadr1);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTADR2)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDSTADR2, $this->oehdstadr2);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTADR3)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDSTADR3, $this->oehdstadr3);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTCTRY)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDSTCTRY, $this->oehdstctry);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTCITY)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDSTCITY, $this->oehdstcity);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTSTAT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDSTSTAT, $this->oehdststat);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTZIPCODE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDSTZIPCODE, $this->oehdstzipcode);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCUSTPO)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCUSTPO, $this->oehdcustpo);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDORDRDATE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDORDRDATE, $this->oehdordrdate);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_ARTMTERMCD)) {
            $criteria->add(SoHeaderTableMap::COL_ARTMTERMCD, $this->artmtermcd);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_ARTBSHIPVIA)) {
            $criteria->add(SoHeaderTableMap::COL_ARTBSHIPVIA, $this->artbshipvia);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_ARININVNBR)) {
            $criteria->add(SoHeaderTableMap::COL_ARININVNBR, $this->arininvnbr);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDINVDATE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDINVDATE, $this->oehdinvdate);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDGLPD)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDGLPD, $this->oehdglpd);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_ARSPSALEPER1)) {
            $criteria->add(SoHeaderTableMap::COL_ARSPSALEPER1, $this->arspsaleper1);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSP1PCT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDSP1PCT, $this->oehdsp1pct);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_ARSPSALEPER2)) {
            $criteria->add(SoHeaderTableMap::COL_ARSPSALEPER2, $this->arspsaleper2);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSP2PCT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDSP2PCT, $this->oehdsp2pct);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_ARSPSALEPER3)) {
            $criteria->add(SoHeaderTableMap::COL_ARSPSALEPER3, $this->arspsaleper3);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSP3PCT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDSP3PCT, $this->oehdsp3pct);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCNTRNBR)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCNTRNBR, $this->oehdcntrnbr);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDROPRELHOLD)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDROPRELHOLD, $this->oehddroprelhold);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDTAXSUB)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDTAXSUB, $this->oehdtaxsub);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDNONTAXSUB)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDNONTAXSUB, $this->oehdnontaxsub);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDTAXTOT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDTAXTOT, $this->oehdtaxtot);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTOT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDFRTTOT, $this->oehdfrttot);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDMISCTOT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDMISCTOT, $this->oehdmisctot);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDORDRTOT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDORDRTOT, $this->oehdordrtot);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCOSTTOT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCOSTTOT, $this->oehdcosttot);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSPCOMMLOCK)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDSPCOMMLOCK, $this->oehdspcommlock);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDTAKENDATE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDTAKENDATE, $this->oehdtakendate);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDTAKENTIME)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDTAKENTIME, $this->oehdtakentime);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPICKDATE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDPICKDATE, $this->oehdpickdate);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPICKTIME)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDPICKTIME, $this->oehdpicktime);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPACKDATE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDPACKDATE, $this->oehdpackdate);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPACKTIME)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDPACKTIME, $this->oehdpacktime);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDVERIFYDATE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDVERIFYDATE, $this->oehdverifydate);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDVERIFYTIME)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDVERIFYTIME, $this->oehdverifytime);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCREDITMEMO)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCREDITMEMO, $this->oehdcreditmemo);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDBOOKEDYN)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDBOOKEDYN, $this->oehdbookedyn);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_INTBWHSEORIG)) {
            $criteria->add(SoHeaderTableMap::COL_INTBWHSEORIG, $this->intbwhseorig);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDBTSTAT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDBTSTAT, $this->oehdbtstat);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSHIPCOMP)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDSHIPCOMP, $this->oehdshipcomp);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCWOFLAG)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCWOFLAG, $this->oehdcwoflag);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDIVISION)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDIVISION, $this->oehddivision);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDTAKENCODE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDTAKENCODE, $this->oehdtakencode);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPICKCODE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDPICKCODE, $this->oehdpickcode);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPACKCODE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDPACKCODE, $this->oehdpackcode);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDVERIFYCODE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDVERIFYCODE, $this->oehdverifycode);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDTOTDISC)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDTOTDISC, $this->oehdtotdisc);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDEDIREFNBRQUAL)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDEDIREFNBRQUAL, $this->oehdedirefnbrqual);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDUSERCODE1)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDUSERCODE1, $this->oehdusercode1);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDUSERCODE2)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDUSERCODE2, $this->oehdusercode2);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDUSERCODE3)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDUSERCODE3, $this->oehdusercode3);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDUSERCODE4)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDUSERCODE4, $this->oehdusercode4);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDEXCHCTRY)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDEXCHCTRY, $this->oehdexchctry);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDEXCHRATE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDEXCHRATE, $this->oehdexchrate);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDWGHT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDWGHT, $this->oehdwght);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDQBPACKER)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDQBPACKER, $this->oehdqbpacker);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDQBLABELER1)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDQBLABELER1, $this->oehdqblabeler1);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDQBLABELER2)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDQBLABELER2, $this->oehdqblabeler2);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDBOXCOUNT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDBOXCOUNT, $this->oehdboxcount);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDRQSTDATE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDRQSTDATE, $this->oehdrqstdate);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCANCDATE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCANCDATE, $this->oehdcancdate);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCRNTUSER)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCRNTUSER, $this->oehdcrntuser);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDRELEASENBR)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDRELEASENBR, $this->oehdreleasenbr);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_INTBWHSE)) {
            $criteria->add(SoHeaderTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDBORDBUILDDATE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDBORDBUILDDATE, $this->oehdbordbuilddate);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDEPTCODE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDEPTCODE, $this->oehddeptcode);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTINENTERED)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDFRTINENTERED, $this->oehdfrtinentered);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_DROPSHIPENTERED)) {
            $criteria->add(SoHeaderTableMap::COL_DROPSHIPENTERED, $this->dropshipentered);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDERFLAG)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDERFLAG, $this->oehderflag);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTIN)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDFRTIN, $this->oehdfrtin);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDROPSHIP)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDROPSHIP, $this->oehddropship);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDMINORDER)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDMINORDER, $this->oehdminorder);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCONTRACTTERMS)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCONTRACTTERMS, $this->oehdcontractterms);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCDATE1)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDISCDATE1, $this->oehddiscdate1);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCPCT1)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDISCPCT1, $this->oehddiscpct1);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEDATE1)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDUEDATE1, $this->oehdduedate1);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEAMT1)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDUEAMT1, $this->oehddueamt1);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEPCT1)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDUEPCT1, $this->oehdduepct1);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCDATE2)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDISCDATE2, $this->oehddiscdate2);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCPCT2)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDISCPCT2, $this->oehddiscpct2);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEDATE2)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDUEDATE2, $this->oehdduedate2);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEAMT2)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDUEAMT2, $this->oehddueamt2);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEPCT2)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDUEPCT2, $this->oehdduepct2);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCDATE3)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDISCDATE3, $this->oehddiscdate3);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCPCT3)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDISCPCT3, $this->oehddiscpct3);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEDATE3)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDUEDATE3, $this->oehdduedate3);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEAMT3)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDUEAMT3, $this->oehddueamt3);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEPCT3)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDUEPCT3, $this->oehdduepct3);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCDATE4)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDISCDATE4, $this->oehddiscdate4);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCPCT4)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDISCPCT4, $this->oehddiscpct4);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEDATE4)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDUEDATE4, $this->oehdduedate4);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEAMT4)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDUEAMT4, $this->oehddueamt4);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEPCT4)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDUEPCT4, $this->oehdduepct4);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCDATE5)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDISCDATE5, $this->oehddiscdate5);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDISCPCT5)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDISCPCT5, $this->oehddiscpct5);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEDATE5)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDUEDATE5, $this->oehdduedate5);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEAMT5)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDUEAMT5, $this->oehddueamt5);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDUEPCT5)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDUEPCT5, $this->oehdduepct5);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDROPSHIPBILLED)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDROPSHIPBILLED, $this->oehddropshipbilled);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDORDTYP)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDORDTYP, $this->oehdordtyp);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDTRACKNBR)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDTRACKNBR, $this->oehdtracknbr);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSOURCE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDSOURCE, $this->oehdsource);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCCAPRV)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCCAPRV, $this->oehdccaprv);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPICKFMATTYPE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDPICKFMATTYPE, $this->oehdpickfmattype);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDINVCFMATTYPE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDINVCFMATTYPE, $this->oehdinvcfmattype);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCASHAMT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCASHAMT, $this->oehdcashamt);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCHECKAMT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCHECKAMT, $this->oehdcheckamt);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCHECKNBR)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCHECKNBR, $this->oehdchecknbr);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDEPOSITAMT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDEPOSITAMT, $this->oehddepositamt);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDDEPOSITNBR)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDDEPOSITNBR, $this->oehddepositnbr);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCCAMT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCCAMT, $this->oehdccamt);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDOTAXSUB)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDOTAXSUB, $this->oehdotaxsub);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDONONTAXSUB)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDONONTAXSUB, $this->oehdonontaxsub);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDOTAXTOT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDOTAXTOT, $this->oehdotaxtot);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDOORDRTOT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDOORDRTOT, $this->oehdoordrtot);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPICKPRINTDATE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDPICKPRINTDATE, $this->oehdpickprintdate);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPICKPRINTTIME)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDPICKPRINTTIME, $this->oehdpickprinttime);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCONT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCONT, $this->oehdcont);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCONTTELEINTL)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCONTTELEINTL, $this->oehdcontteleintl);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCONTTELENBR)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCONTTELENBR, $this->oehdconttelenbr);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCONTTELEEXT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCONTTELEEXT, $this->oehdcontteleext);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCONTFAXINTL)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCONTFAXINTL, $this->oehdcontfaxintl);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCONTFAXNBR)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCONTFAXNBR, $this->oehdcontfaxnbr);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDMAILID)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDMAILID, $this->oehdmailid);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCHGDUE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCHGDUE, $this->oehdchgdue);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDADDLPRICDISC)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDADDLPRICDISC, $this->oehdaddlpricdisc);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDALLSHIP)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDALLSHIP, $this->oehdallship);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDQTYORDERAMT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDQTYORDERAMT, $this->oehdqtyorderamt);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDQTYTAXTOT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDQTYTAXTOT, $this->oehdqtytaxtot);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDQTYFRTIN)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDQTYFRTIN, $this->oehdqtyfrtin);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDORIDESHIPCOMP)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDORIDESHIPCOMP, $this->oehdorideshipcomp);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCONTEMAIL)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCONTEMAIL, $this->oehdcontemail);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDMANUALFRT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDMANUALFRT, $this->oehdmanualfrt);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDINTERNALFRT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDINTERNALFRT, $this->oehdinternalfrt);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTCOST)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDFRTCOST, $this->oehdfrtcost);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDROUTE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDROUTE, $this->oehdroute);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDROUTESEQ)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDROUTESEQ, $this->oehdrouteseq);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXCODE1)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDFRTTAXCODE1, $this->oehdfrttaxcode1);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXAMT1)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDFRTTAXAMT1, $this->oehdfrttaxamt1);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXCODE2)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDFRTTAXCODE2, $this->oehdfrttaxcode2);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXAMT2)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDFRTTAXAMT2, $this->oehdfrttaxamt2);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXCODE3)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDFRTTAXCODE3, $this->oehdfrttaxcode3);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXAMT3)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDFRTTAXAMT3, $this->oehdfrttaxamt3);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXCODE4)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDFRTTAXCODE4, $this->oehdfrttaxcode4);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXAMT4)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDFRTTAXAMT4, $this->oehdfrttaxamt4);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXCODE5)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDFRTTAXCODE5, $this->oehdfrttaxcode5);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTTAXAMT5)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDFRTTAXAMT5, $this->oehdfrttaxamt5);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDEDI855SENT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDEDI855SENT, $this->oehdedi855sent);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRT3RDPARTY)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDFRT3RDPARTY, $this->oehdfrt3rdparty);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFOB)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDFOB, $this->oehdfob);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCONFIRMIMAGYN)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCONFIRMIMAGYN, $this->oehdconfirmimagyn);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDCSTKCONSIGN)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDCSTKCONSIGN, $this->oehdcstkconsign);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSTOREID)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDSTOREID, $this->oehdstoreid);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDPICKQUEUE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDPICKQUEUE, $this->oehdpickqueue);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDARRVDATE)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDARRVDATE, $this->oehdarrvdate);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDSURCHGSTAT)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDSURCHGSTAT, $this->oehdsurchgstat);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_OEHDFRTGRUP)) {
            $criteria->add(SoHeaderTableMap::COL_OEHDFRTGRUP, $this->oehdfrtgrup);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_DATEUPDTD)) {
            $criteria->add(SoHeaderTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_TIMEUPDTD)) {
            $criteria->add(SoHeaderTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(SoHeaderTableMap::COL_DUMMY)) {
            $criteria->add(SoHeaderTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildSoHeaderQuery::create();
        $criteria->add(SoHeaderTableMap::COL_OEHDNBR, $this->oehdnbr);

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
        $validPk = null !== $this->getOehdnbr();

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
        return $this->getOehdnbr();
    }

    /**
     * Generic method to set the primary key (oehdnbr column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOehdnbr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getOehdnbr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \SoHeader (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOehdnbr($this->getOehdnbr());
        $copyObj->setOehdstat($this->getOehdstat());
        $copyObj->setOehdhold($this->getOehdhold());
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setArstshipid($this->getArstshipid());
        $copyObj->setOehdstlastname($this->getOehdstlastname());
        $copyObj->setOehdstfirstname($this->getOehdstfirstname());
        $copyObj->setOehdstadr1($this->getOehdstadr1());
        $copyObj->setOehdstadr2($this->getOehdstadr2());
        $copyObj->setOehdstadr3($this->getOehdstadr3());
        $copyObj->setOehdstctry($this->getOehdstctry());
        $copyObj->setOehdstcity($this->getOehdstcity());
        $copyObj->setOehdststat($this->getOehdststat());
        $copyObj->setOehdstzipcode($this->getOehdstzipcode());
        $copyObj->setOehdcustpo($this->getOehdcustpo());
        $copyObj->setOehdordrdate($this->getOehdordrdate());
        $copyObj->setArtmtermcd($this->getArtmtermcd());
        $copyObj->setArtbshipvia($this->getArtbshipvia());
        $copyObj->setArininvnbr($this->getArininvnbr());
        $copyObj->setOehdinvdate($this->getOehdinvdate());
        $copyObj->setOehdglpd($this->getOehdglpd());
        $copyObj->setArspsaleper1($this->getArspsaleper1());
        $copyObj->setOehdsp1pct($this->getOehdsp1pct());
        $copyObj->setArspsaleper2($this->getArspsaleper2());
        $copyObj->setOehdsp2pct($this->getOehdsp2pct());
        $copyObj->setArspsaleper3($this->getArspsaleper3());
        $copyObj->setOehdsp3pct($this->getOehdsp3pct());
        $copyObj->setOehdcntrnbr($this->getOehdcntrnbr());
        $copyObj->setOehddroprelhold($this->getOehddroprelhold());
        $copyObj->setOehdtaxsub($this->getOehdtaxsub());
        $copyObj->setOehdnontaxsub($this->getOehdnontaxsub());
        $copyObj->setOehdtaxtot($this->getOehdtaxtot());
        $copyObj->setOehdfrttot($this->getOehdfrttot());
        $copyObj->setOehdmisctot($this->getOehdmisctot());
        $copyObj->setOehdordrtot($this->getOehdordrtot());
        $copyObj->setOehdcosttot($this->getOehdcosttot());
        $copyObj->setOehdspcommlock($this->getOehdspcommlock());
        $copyObj->setOehdtakendate($this->getOehdtakendate());
        $copyObj->setOehdtakentime($this->getOehdtakentime());
        $copyObj->setOehdpickdate($this->getOehdpickdate());
        $copyObj->setOehdpicktime($this->getOehdpicktime());
        $copyObj->setOehdpackdate($this->getOehdpackdate());
        $copyObj->setOehdpacktime($this->getOehdpacktime());
        $copyObj->setOehdverifydate($this->getOehdverifydate());
        $copyObj->setOehdverifytime($this->getOehdverifytime());
        $copyObj->setOehdcreditmemo($this->getOehdcreditmemo());
        $copyObj->setOehdbookedyn($this->getOehdbookedyn());
        $copyObj->setIntbwhseorig($this->getIntbwhseorig());
        $copyObj->setOehdbtstat($this->getOehdbtstat());
        $copyObj->setOehdshipcomp($this->getOehdshipcomp());
        $copyObj->setOehdcwoflag($this->getOehdcwoflag());
        $copyObj->setOehddivision($this->getOehddivision());
        $copyObj->setOehdtakencode($this->getOehdtakencode());
        $copyObj->setOehdpickcode($this->getOehdpickcode());
        $copyObj->setOehdpackcode($this->getOehdpackcode());
        $copyObj->setOehdverifycode($this->getOehdverifycode());
        $copyObj->setOehdtotdisc($this->getOehdtotdisc());
        $copyObj->setOehdedirefnbrqual($this->getOehdedirefnbrqual());
        $copyObj->setOehdusercode1($this->getOehdusercode1());
        $copyObj->setOehdusercode2($this->getOehdusercode2());
        $copyObj->setOehdusercode3($this->getOehdusercode3());
        $copyObj->setOehdusercode4($this->getOehdusercode4());
        $copyObj->setOehdexchctry($this->getOehdexchctry());
        $copyObj->setOehdexchrate($this->getOehdexchrate());
        $copyObj->setOehdwght($this->getOehdwght());
        $copyObj->setOehdqbpacker($this->getOehdqbpacker());
        $copyObj->setOehdqblabeler1($this->getOehdqblabeler1());
        $copyObj->setOehdqblabeler2($this->getOehdqblabeler2());
        $copyObj->setOehdboxcount($this->getOehdboxcount());
        $copyObj->setOehdrqstdate($this->getOehdrqstdate());
        $copyObj->setOehdcancdate($this->getOehdcancdate());
        $copyObj->setOehdcrntuser($this->getOehdcrntuser());
        $copyObj->setOehdreleasenbr($this->getOehdreleasenbr());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setOehdbordbuilddate($this->getOehdbordbuilddate());
        $copyObj->setOehddeptcode($this->getOehddeptcode());
        $copyObj->setOehdfrtinentered($this->getOehdfrtinentered());
        $copyObj->setDropshipentered($this->getDropshipentered());
        $copyObj->setOehderflag($this->getOehderflag());
        $copyObj->setOehdfrtin($this->getOehdfrtin());
        $copyObj->setOehddropship($this->getOehddropship());
        $copyObj->setOehdminorder($this->getOehdminorder());
        $copyObj->setOehdcontractterms($this->getOehdcontractterms());
        $copyObj->setOehddiscdate1($this->getOehddiscdate1());
        $copyObj->setOehddiscpct1($this->getOehddiscpct1());
        $copyObj->setOehdduedate1($this->getOehdduedate1());
        $copyObj->setOehddueamt1($this->getOehddueamt1());
        $copyObj->setOehdduepct1($this->getOehdduepct1());
        $copyObj->setOehddiscdate2($this->getOehddiscdate2());
        $copyObj->setOehddiscpct2($this->getOehddiscpct2());
        $copyObj->setOehdduedate2($this->getOehdduedate2());
        $copyObj->setOehddueamt2($this->getOehddueamt2());
        $copyObj->setOehdduepct2($this->getOehdduepct2());
        $copyObj->setOehddiscdate3($this->getOehddiscdate3());
        $copyObj->setOehddiscpct3($this->getOehddiscpct3());
        $copyObj->setOehdduedate3($this->getOehdduedate3());
        $copyObj->setOehddueamt3($this->getOehddueamt3());
        $copyObj->setOehdduepct3($this->getOehdduepct3());
        $copyObj->setOehddiscdate4($this->getOehddiscdate4());
        $copyObj->setOehddiscpct4($this->getOehddiscpct4());
        $copyObj->setOehdduedate4($this->getOehdduedate4());
        $copyObj->setOehddueamt4($this->getOehddueamt4());
        $copyObj->setOehdduepct4($this->getOehdduepct4());
        $copyObj->setOehddiscdate5($this->getOehddiscdate5());
        $copyObj->setOehddiscpct5($this->getOehddiscpct5());
        $copyObj->setOehdduedate5($this->getOehdduedate5());
        $copyObj->setOehddueamt5($this->getOehddueamt5());
        $copyObj->setOehdduepct5($this->getOehdduepct5());
        $copyObj->setOehddropshipbilled($this->getOehddropshipbilled());
        $copyObj->setOehdordtyp($this->getOehdordtyp());
        $copyObj->setOehdtracknbr($this->getOehdtracknbr());
        $copyObj->setOehdsource($this->getOehdsource());
        $copyObj->setOehdccaprv($this->getOehdccaprv());
        $copyObj->setOehdpickfmattype($this->getOehdpickfmattype());
        $copyObj->setOehdinvcfmattype($this->getOehdinvcfmattype());
        $copyObj->setOehdcashamt($this->getOehdcashamt());
        $copyObj->setOehdcheckamt($this->getOehdcheckamt());
        $copyObj->setOehdchecknbr($this->getOehdchecknbr());
        $copyObj->setOehddepositamt($this->getOehddepositamt());
        $copyObj->setOehddepositnbr($this->getOehddepositnbr());
        $copyObj->setOehdccamt($this->getOehdccamt());
        $copyObj->setOehdotaxsub($this->getOehdotaxsub());
        $copyObj->setOehdonontaxsub($this->getOehdonontaxsub());
        $copyObj->setOehdotaxtot($this->getOehdotaxtot());
        $copyObj->setOehdoordrtot($this->getOehdoordrtot());
        $copyObj->setOehdpickprintdate($this->getOehdpickprintdate());
        $copyObj->setOehdpickprinttime($this->getOehdpickprinttime());
        $copyObj->setOehdcont($this->getOehdcont());
        $copyObj->setOehdcontteleintl($this->getOehdcontteleintl());
        $copyObj->setOehdconttelenbr($this->getOehdconttelenbr());
        $copyObj->setOehdcontteleext($this->getOehdcontteleext());
        $copyObj->setOehdcontfaxintl($this->getOehdcontfaxintl());
        $copyObj->setOehdcontfaxnbr($this->getOehdcontfaxnbr());
        $copyObj->setOehdmailid($this->getOehdmailid());
        $copyObj->setOehdchgdue($this->getOehdchgdue());
        $copyObj->setOehdaddlpricdisc($this->getOehdaddlpricdisc());
        $copyObj->setOehdallship($this->getOehdallship());
        $copyObj->setOehdqtyorderamt($this->getOehdqtyorderamt());
        $copyObj->setOehdqtytaxtot($this->getOehdqtytaxtot());
        $copyObj->setOehdqtyfrtin($this->getOehdqtyfrtin());
        $copyObj->setOehdorideshipcomp($this->getOehdorideshipcomp());
        $copyObj->setOehdcontemail($this->getOehdcontemail());
        $copyObj->setOehdmanualfrt($this->getOehdmanualfrt());
        $copyObj->setOehdinternalfrt($this->getOehdinternalfrt());
        $copyObj->setOehdfrtcost($this->getOehdfrtcost());
        $copyObj->setOehdroute($this->getOehdroute());
        $copyObj->setOehdrouteseq($this->getOehdrouteseq());
        $copyObj->setOehdfrttaxcode1($this->getOehdfrttaxcode1());
        $copyObj->setOehdfrttaxamt1($this->getOehdfrttaxamt1());
        $copyObj->setOehdfrttaxcode2($this->getOehdfrttaxcode2());
        $copyObj->setOehdfrttaxamt2($this->getOehdfrttaxamt2());
        $copyObj->setOehdfrttaxcode3($this->getOehdfrttaxcode3());
        $copyObj->setOehdfrttaxamt3($this->getOehdfrttaxamt3());
        $copyObj->setOehdfrttaxcode4($this->getOehdfrttaxcode4());
        $copyObj->setOehdfrttaxamt4($this->getOehdfrttaxamt4());
        $copyObj->setOehdfrttaxcode5($this->getOehdfrttaxcode5());
        $copyObj->setOehdfrttaxamt5($this->getOehdfrttaxamt5());
        $copyObj->setOehdedi855sent($this->getOehdedi855sent());
        $copyObj->setOehdfrt3rdparty($this->getOehdfrt3rdparty());
        $copyObj->setOehdfob($this->getOehdfob());
        $copyObj->setOehdconfirmimagyn($this->getOehdconfirmimagyn());
        $copyObj->setOehdcstkconsign($this->getOehdcstkconsign());
        $copyObj->setOehdstoreid($this->getOehdstoreid());
        $copyObj->setOehdpickqueue($this->getOehdpickqueue());
        $copyObj->setOehdarrvdate($this->getOehdarrvdate());
        $copyObj->setOehdsurchgstat($this->getOehdsurchgstat());
        $copyObj->setOehdfrtgrup($this->getOehdfrtgrup());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSoDetails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSoDetail($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

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
     * @return \SoHeader Clone of current object.
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
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('SoDetail' == $relationName) {
            $this->initSoDetails();
            return;
        }
    }

    /**
     * Clears out the collSoDetails collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSoDetails()
     */
    public function clearSoDetails()
    {
        $this->collSoDetails = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSoDetails collection loaded partially.
     */
    public function resetPartialSoDetails($v = true)
    {
        $this->collSoDetailsPartial = $v;
    }

    /**
     * Initializes the collSoDetails collection.
     *
     * By default this just sets the collSoDetails collection to an empty array (like clearcollSoDetails());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSoDetails($overrideExisting = true)
    {
        if (null !== $this->collSoDetails && !$overrideExisting) {
            return;
        }

        $collectionClassName = SoDetailTableMap::getTableMap()->getCollectionClassName();

        $this->collSoDetails = new $collectionClassName;
        $this->collSoDetails->setModel('\SoDetail');
    }

    /**
     * Gets an array of ChildSoDetail objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSoHeader is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSoDetail[] List of ChildSoDetail objects
     * @throws PropelException
     */
    public function getSoDetails(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSoDetailsPartial && !$this->isNew();
        if (null === $this->collSoDetails || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSoDetails) {
                // return empty collection
                $this->initSoDetails();
            } else {
                $collSoDetails = ChildSoDetailQuery::create(null, $criteria)
                    ->filterBySoHeader($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSoDetailsPartial && count($collSoDetails)) {
                        $this->initSoDetails(false);

                        foreach ($collSoDetails as $obj) {
                            if (false == $this->collSoDetails->contains($obj)) {
                                $this->collSoDetails->append($obj);
                            }
                        }

                        $this->collSoDetailsPartial = true;
                    }

                    return $collSoDetails;
                }

                if ($partial && $this->collSoDetails) {
                    foreach ($this->collSoDetails as $obj) {
                        if ($obj->isNew()) {
                            $collSoDetails[] = $obj;
                        }
                    }
                }

                $this->collSoDetails = $collSoDetails;
                $this->collSoDetailsPartial = false;
            }
        }

        return $this->collSoDetails;
    }

    /**
     * Sets a collection of ChildSoDetail objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $soDetails A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSoHeader The current object (for fluent API support)
     */
    public function setSoDetails(Collection $soDetails, ConnectionInterface $con = null)
    {
        /** @var ChildSoDetail[] $soDetailsToDelete */
        $soDetailsToDelete = $this->getSoDetails(new Criteria(), $con)->diff($soDetails);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->soDetailsScheduledForDeletion = clone $soDetailsToDelete;

        foreach ($soDetailsToDelete as $soDetailRemoved) {
            $soDetailRemoved->setSoHeader(null);
        }

        $this->collSoDetails = null;
        foreach ($soDetails as $soDetail) {
            $this->addSoDetail($soDetail);
        }

        $this->collSoDetails = $soDetails;
        $this->collSoDetailsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SoDetail objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SoDetail objects.
     * @throws PropelException
     */
    public function countSoDetails(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSoDetailsPartial && !$this->isNew();
        if (null === $this->collSoDetails || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSoDetails) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSoDetails());
            }

            $query = ChildSoDetailQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySoHeader($this)
                ->count($con);
        }

        return count($this->collSoDetails);
    }

    /**
     * Method called to associate a ChildSoDetail object to this object
     * through the ChildSoDetail foreign key attribute.
     *
     * @param  ChildSoDetail $l ChildSoDetail
     * @return $this|\SoHeader The current object (for fluent API support)
     */
    public function addSoDetail(ChildSoDetail $l)
    {
        if ($this->collSoDetails === null) {
            $this->initSoDetails();
            $this->collSoDetailsPartial = true;
        }

        if (!$this->collSoDetails->contains($l)) {
            $this->doAddSoDetail($l);

            if ($this->soDetailsScheduledForDeletion and $this->soDetailsScheduledForDeletion->contains($l)) {
                $this->soDetailsScheduledForDeletion->remove($this->soDetailsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSoDetail $soDetail The ChildSoDetail object to add.
     */
    protected function doAddSoDetail(ChildSoDetail $soDetail)
    {
        $this->collSoDetails[]= $soDetail;
        $soDetail->setSoHeader($this);
    }

    /**
     * @param  ChildSoDetail $soDetail The ChildSoDetail object to remove.
     * @return $this|ChildSoHeader The current object (for fluent API support)
     */
    public function removeSoDetail(ChildSoDetail $soDetail)
    {
        if ($this->getSoDetails()->contains($soDetail)) {
            $pos = $this->collSoDetails->search($soDetail);
            $this->collSoDetails->remove($pos);
            if (null === $this->soDetailsScheduledForDeletion) {
                $this->soDetailsScheduledForDeletion = clone $this->collSoDetails;
                $this->soDetailsScheduledForDeletion->clear();
            }
            $this->soDetailsScheduledForDeletion[]= clone $soDetail;
            $soDetail->setSoHeader(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SoHeader is new, it will return
     * an empty collection; or if this SoHeader has previously
     * been saved, it will retrieve related SoDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SoHeader.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSoDetail[] List of ChildSoDetail objects
     */
    public function getSoDetailsJoinBoatMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSoDetailQuery::create(null, $criteria);
        $query->joinWith('BoatMaster', $joinBehavior);

        return $this->getSoDetails($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->oehdnbr = null;
        $this->oehdstat = null;
        $this->oehdhold = null;
        $this->arcucustid = null;
        $this->arstshipid = null;
        $this->oehdstlastname = null;
        $this->oehdstfirstname = null;
        $this->oehdstadr1 = null;
        $this->oehdstadr2 = null;
        $this->oehdstadr3 = null;
        $this->oehdstctry = null;
        $this->oehdstcity = null;
        $this->oehdststat = null;
        $this->oehdstzipcode = null;
        $this->oehdcustpo = null;
        $this->oehdordrdate = null;
        $this->artmtermcd = null;
        $this->artbshipvia = null;
        $this->arininvnbr = null;
        $this->oehdinvdate = null;
        $this->oehdglpd = null;
        $this->arspsaleper1 = null;
        $this->oehdsp1pct = null;
        $this->arspsaleper2 = null;
        $this->oehdsp2pct = null;
        $this->arspsaleper3 = null;
        $this->oehdsp3pct = null;
        $this->oehdcntrnbr = null;
        $this->oehddroprelhold = null;
        $this->oehdtaxsub = null;
        $this->oehdnontaxsub = null;
        $this->oehdtaxtot = null;
        $this->oehdfrttot = null;
        $this->oehdmisctot = null;
        $this->oehdordrtot = null;
        $this->oehdcosttot = null;
        $this->oehdspcommlock = null;
        $this->oehdtakendate = null;
        $this->oehdtakentime = null;
        $this->oehdpickdate = null;
        $this->oehdpicktime = null;
        $this->oehdpackdate = null;
        $this->oehdpacktime = null;
        $this->oehdverifydate = null;
        $this->oehdverifytime = null;
        $this->oehdcreditmemo = null;
        $this->oehdbookedyn = null;
        $this->intbwhseorig = null;
        $this->oehdbtstat = null;
        $this->oehdshipcomp = null;
        $this->oehdcwoflag = null;
        $this->oehddivision = null;
        $this->oehdtakencode = null;
        $this->oehdpickcode = null;
        $this->oehdpackcode = null;
        $this->oehdverifycode = null;
        $this->oehdtotdisc = null;
        $this->oehdedirefnbrqual = null;
        $this->oehdusercode1 = null;
        $this->oehdusercode2 = null;
        $this->oehdusercode3 = null;
        $this->oehdusercode4 = null;
        $this->oehdexchctry = null;
        $this->oehdexchrate = null;
        $this->oehdwght = null;
        $this->oehdqbpacker = null;
        $this->oehdqblabeler1 = null;
        $this->oehdqblabeler2 = null;
        $this->oehdboxcount = null;
        $this->oehdrqstdate = null;
        $this->oehdcancdate = null;
        $this->oehdcrntuser = null;
        $this->oehdreleasenbr = null;
        $this->intbwhse = null;
        $this->oehdbordbuilddate = null;
        $this->oehddeptcode = null;
        $this->oehdfrtinentered = null;
        $this->dropshipentered = null;
        $this->oehderflag = null;
        $this->oehdfrtin = null;
        $this->oehddropship = null;
        $this->oehdminorder = null;
        $this->oehdcontractterms = null;
        $this->oehddiscdate1 = null;
        $this->oehddiscpct1 = null;
        $this->oehdduedate1 = null;
        $this->oehddueamt1 = null;
        $this->oehdduepct1 = null;
        $this->oehddiscdate2 = null;
        $this->oehddiscpct2 = null;
        $this->oehdduedate2 = null;
        $this->oehddueamt2 = null;
        $this->oehdduepct2 = null;
        $this->oehddiscdate3 = null;
        $this->oehddiscpct3 = null;
        $this->oehdduedate3 = null;
        $this->oehddueamt3 = null;
        $this->oehdduepct3 = null;
        $this->oehddiscdate4 = null;
        $this->oehddiscpct4 = null;
        $this->oehdduedate4 = null;
        $this->oehddueamt4 = null;
        $this->oehdduepct4 = null;
        $this->oehddiscdate5 = null;
        $this->oehddiscpct5 = null;
        $this->oehdduedate5 = null;
        $this->oehddueamt5 = null;
        $this->oehdduepct5 = null;
        $this->oehddropshipbilled = null;
        $this->oehdordtyp = null;
        $this->oehdtracknbr = null;
        $this->oehdsource = null;
        $this->oehdccaprv = null;
        $this->oehdpickfmattype = null;
        $this->oehdinvcfmattype = null;
        $this->oehdcashamt = null;
        $this->oehdcheckamt = null;
        $this->oehdchecknbr = null;
        $this->oehddepositamt = null;
        $this->oehddepositnbr = null;
        $this->oehdccamt = null;
        $this->oehdotaxsub = null;
        $this->oehdonontaxsub = null;
        $this->oehdotaxtot = null;
        $this->oehdoordrtot = null;
        $this->oehdpickprintdate = null;
        $this->oehdpickprinttime = null;
        $this->oehdcont = null;
        $this->oehdcontteleintl = null;
        $this->oehdconttelenbr = null;
        $this->oehdcontteleext = null;
        $this->oehdcontfaxintl = null;
        $this->oehdcontfaxnbr = null;
        $this->oehdmailid = null;
        $this->oehdchgdue = null;
        $this->oehdaddlpricdisc = null;
        $this->oehdallship = null;
        $this->oehdqtyorderamt = null;
        $this->oehdqtytaxtot = null;
        $this->oehdqtyfrtin = null;
        $this->oehdorideshipcomp = null;
        $this->oehdcontemail = null;
        $this->oehdmanualfrt = null;
        $this->oehdinternalfrt = null;
        $this->oehdfrtcost = null;
        $this->oehdroute = null;
        $this->oehdrouteseq = null;
        $this->oehdfrttaxcode1 = null;
        $this->oehdfrttaxamt1 = null;
        $this->oehdfrttaxcode2 = null;
        $this->oehdfrttaxamt2 = null;
        $this->oehdfrttaxcode3 = null;
        $this->oehdfrttaxamt3 = null;
        $this->oehdfrttaxcode4 = null;
        $this->oehdfrttaxamt4 = null;
        $this->oehdfrttaxcode5 = null;
        $this->oehdfrttaxamt5 = null;
        $this->oehdedi855sent = null;
        $this->oehdfrt3rdparty = null;
        $this->oehdfob = null;
        $this->oehdconfirmimagyn = null;
        $this->oehdcstkconsign = null;
        $this->oehdstoreid = null;
        $this->oehdpickqueue = null;
        $this->oehdarrvdate = null;
        $this->oehdsurchgstat = null;
        $this->oehdfrtgrup = null;
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
            if ($this->collSoDetails) {
                foreach ($this->collSoDetails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSoDetails = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SoHeaderTableMap::DEFAULT_STRING_FORMAT);
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
