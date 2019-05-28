<?php

namespace Map;

use \SoHeader;
use \SoHeaderQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'SO_HEADER' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class SoHeaderTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SoHeaderTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'SO_HEADER';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\SoHeader';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SoHeader';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 170;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 170;

    /**
     * the column name for the OehdNbr field
     */
    const COL_OEHDNBR = 'SO_HEADER.OehdNbr';

    /**
     * the column name for the OehdStat field
     */
    const COL_OEHDSTAT = 'SO_HEADER.OehdStat';

    /**
     * the column name for the OehdHold field
     */
    const COL_OEHDHOLD = 'SO_HEADER.OehdHold';

    /**
     * the column name for the ArcuCustId field
     */
    const COL_ARCUCUSTID = 'SO_HEADER.ArcuCustId';

    /**
     * the column name for the ArstShipId field
     */
    const COL_ARSTSHIPID = 'SO_HEADER.ArstShipId';

    /**
     * the column name for the OehdStLastName field
     */
    const COL_OEHDSTLASTNAME = 'SO_HEADER.OehdStLastName';

    /**
     * the column name for the OehdStFirstName field
     */
    const COL_OEHDSTFIRSTNAME = 'SO_HEADER.OehdStFirstName';

    /**
     * the column name for the OehdStAdr1 field
     */
    const COL_OEHDSTADR1 = 'SO_HEADER.OehdStAdr1';

    /**
     * the column name for the OehdStAdr2 field
     */
    const COL_OEHDSTADR2 = 'SO_HEADER.OehdStAdr2';

    /**
     * the column name for the OehdStAdr3 field
     */
    const COL_OEHDSTADR3 = 'SO_HEADER.OehdStAdr3';

    /**
     * the column name for the OehdStCtry field
     */
    const COL_OEHDSTCTRY = 'SO_HEADER.OehdStCtry';

    /**
     * the column name for the OehdStCity field
     */
    const COL_OEHDSTCITY = 'SO_HEADER.OehdStCity';

    /**
     * the column name for the OehdStStat field
     */
    const COL_OEHDSTSTAT = 'SO_HEADER.OehdStStat';

    /**
     * the column name for the OehdStZipCode field
     */
    const COL_OEHDSTZIPCODE = 'SO_HEADER.OehdStZipCode';

    /**
     * the column name for the OehdCustPo field
     */
    const COL_OEHDCUSTPO = 'SO_HEADER.OehdCustPo';

    /**
     * the column name for the OehdOrdrDate field
     */
    const COL_OEHDORDRDATE = 'SO_HEADER.OehdOrdrDate';

    /**
     * the column name for the ArtmTermCd field
     */
    const COL_ARTMTERMCD = 'SO_HEADER.ArtmTermCd';

    /**
     * the column name for the ArtbShipVia field
     */
    const COL_ARTBSHIPVIA = 'SO_HEADER.ArtbShipVia';

    /**
     * the column name for the ArinInvNbr field
     */
    const COL_ARININVNBR = 'SO_HEADER.ArinInvNbr';

    /**
     * the column name for the OehdInvDate field
     */
    const COL_OEHDINVDATE = 'SO_HEADER.OehdInvDate';

    /**
     * the column name for the OehdGLPd field
     */
    const COL_OEHDGLPD = 'SO_HEADER.OehdGLPd';

    /**
     * the column name for the ArspSalePer1 field
     */
    const COL_ARSPSALEPER1 = 'SO_HEADER.ArspSalePer1';

    /**
     * the column name for the OehdSp1Pct field
     */
    const COL_OEHDSP1PCT = 'SO_HEADER.OehdSp1Pct';

    /**
     * the column name for the ArspSalePer2 field
     */
    const COL_ARSPSALEPER2 = 'SO_HEADER.ArspSalePer2';

    /**
     * the column name for the OehdSp2Pct field
     */
    const COL_OEHDSP2PCT = 'SO_HEADER.OehdSp2Pct';

    /**
     * the column name for the ArspSalePer3 field
     */
    const COL_ARSPSALEPER3 = 'SO_HEADER.ArspSalePer3';

    /**
     * the column name for the OehdSp3Pct field
     */
    const COL_OEHDSP3PCT = 'SO_HEADER.OehdSp3Pct';

    /**
     * the column name for the OehdCntrNbr field
     */
    const COL_OEHDCNTRNBR = 'SO_HEADER.OehdCntrNbr';

    /**
     * the column name for the OehdDropRelHold field
     */
    const COL_OEHDDROPRELHOLD = 'SO_HEADER.OehdDropRelHold';

    /**
     * the column name for the OehdTaxSub field
     */
    const COL_OEHDTAXSUB = 'SO_HEADER.OehdTaxSub';

    /**
     * the column name for the OehdNonTaxSub field
     */
    const COL_OEHDNONTAXSUB = 'SO_HEADER.OehdNonTaxSub';

    /**
     * the column name for the OehdTaxTot field
     */
    const COL_OEHDTAXTOT = 'SO_HEADER.OehdTaxTot';

    /**
     * the column name for the OehdFrtTot field
     */
    const COL_OEHDFRTTOT = 'SO_HEADER.OehdFrtTot';

    /**
     * the column name for the OehdMiscTot field
     */
    const COL_OEHDMISCTOT = 'SO_HEADER.OehdMiscTot';

    /**
     * the column name for the OehdOrdrTot field
     */
    const COL_OEHDORDRTOT = 'SO_HEADER.OehdOrdrTot';

    /**
     * the column name for the OehdCostTot field
     */
    const COL_OEHDCOSTTOT = 'SO_HEADER.OehdCostTot';

    /**
     * the column name for the OehdSpCommLock field
     */
    const COL_OEHDSPCOMMLOCK = 'SO_HEADER.OehdSpCommLock';

    /**
     * the column name for the OehdTakenDate field
     */
    const COL_OEHDTAKENDATE = 'SO_HEADER.OehdTakenDate';

    /**
     * the column name for the OehdTakenTime field
     */
    const COL_OEHDTAKENTIME = 'SO_HEADER.OehdTakenTime';

    /**
     * the column name for the OehdPickDate field
     */
    const COL_OEHDPICKDATE = 'SO_HEADER.OehdPickDate';

    /**
     * the column name for the OehdPickTime field
     */
    const COL_OEHDPICKTIME = 'SO_HEADER.OehdPickTime';

    /**
     * the column name for the OehdPackDate field
     */
    const COL_OEHDPACKDATE = 'SO_HEADER.OehdPackDate';

    /**
     * the column name for the OehdPackTime field
     */
    const COL_OEHDPACKTIME = 'SO_HEADER.OehdPackTime';

    /**
     * the column name for the OehdVerifyDate field
     */
    const COL_OEHDVERIFYDATE = 'SO_HEADER.OehdVerifyDate';

    /**
     * the column name for the OehdVerifyTime field
     */
    const COL_OEHDVERIFYTIME = 'SO_HEADER.OehdVerifyTime';

    /**
     * the column name for the OehdCreditMemo field
     */
    const COL_OEHDCREDITMEMO = 'SO_HEADER.OehdCreditMemo';

    /**
     * the column name for the OehdBookedYn field
     */
    const COL_OEHDBOOKEDYN = 'SO_HEADER.OehdBookedYn';

    /**
     * the column name for the IntbWhseOrig field
     */
    const COL_INTBWHSEORIG = 'SO_HEADER.IntbWhseOrig';

    /**
     * the column name for the OehdBtStat field
     */
    const COL_OEHDBTSTAT = 'SO_HEADER.OehdBtStat';

    /**
     * the column name for the OehdShipComp field
     */
    const COL_OEHDSHIPCOMP = 'SO_HEADER.OehdShipComp';

    /**
     * the column name for the OehdCwoFlag field
     */
    const COL_OEHDCWOFLAG = 'SO_HEADER.OehdCwoFlag';

    /**
     * the column name for the OehdDivision field
     */
    const COL_OEHDDIVISION = 'SO_HEADER.OehdDivision';

    /**
     * the column name for the OehdTakenCode field
     */
    const COL_OEHDTAKENCODE = 'SO_HEADER.OehdTakenCode';

    /**
     * the column name for the OehdPickCode field
     */
    const COL_OEHDPICKCODE = 'SO_HEADER.OehdPickCode';

    /**
     * the column name for the OehdPackCode field
     */
    const COL_OEHDPACKCODE = 'SO_HEADER.OehdPackCode';

    /**
     * the column name for the OehdVerifyCode field
     */
    const COL_OEHDVERIFYCODE = 'SO_HEADER.OehdVerifyCode';

    /**
     * the column name for the OehdTotDisc field
     */
    const COL_OEHDTOTDISC = 'SO_HEADER.OehdTotDisc';

    /**
     * the column name for the OehdEdiRefNbrQual field
     */
    const COL_OEHDEDIREFNBRQUAL = 'SO_HEADER.OehdEdiRefNbrQual';

    /**
     * the column name for the OehdUserCode1 field
     */
    const COL_OEHDUSERCODE1 = 'SO_HEADER.OehdUserCode1';

    /**
     * the column name for the OehdUserCode2 field
     */
    const COL_OEHDUSERCODE2 = 'SO_HEADER.OehdUserCode2';

    /**
     * the column name for the OehdUserCode3 field
     */
    const COL_OEHDUSERCODE3 = 'SO_HEADER.OehdUserCode3';

    /**
     * the column name for the OehdUserCode4 field
     */
    const COL_OEHDUSERCODE4 = 'SO_HEADER.OehdUserCode4';

    /**
     * the column name for the OehdExchCtry field
     */
    const COL_OEHDEXCHCTRY = 'SO_HEADER.OehdExchCtry';

    /**
     * the column name for the OehdExchRate field
     */
    const COL_OEHDEXCHRATE = 'SO_HEADER.OehdExchRate';

    /**
     * the column name for the OehdWght field
     */
    const COL_OEHDWGHT = 'SO_HEADER.OehdWght';

    /**
     * the column name for the OehdQbPacker field
     */
    const COL_OEHDQBPACKER = 'SO_HEADER.OehdQbPacker';

    /**
     * the column name for the OehdQbLabeler1 field
     */
    const COL_OEHDQBLABELER1 = 'SO_HEADER.OehdQbLabeler1';

    /**
     * the column name for the OehdQbLabeler2 field
     */
    const COL_OEHDQBLABELER2 = 'SO_HEADER.OehdQbLabeler2';

    /**
     * the column name for the OehdBoxCount field
     */
    const COL_OEHDBOXCOUNT = 'SO_HEADER.OehdBoxCount';

    /**
     * the column name for the OehdRqstDate field
     */
    const COL_OEHDRQSTDATE = 'SO_HEADER.OehdRqstDate';

    /**
     * the column name for the OehdCancDate field
     */
    const COL_OEHDCANCDATE = 'SO_HEADER.OehdCancDate';

    /**
     * the column name for the OehdCrntUser field
     */
    const COL_OEHDCRNTUSER = 'SO_HEADER.OehdCrntUser';

    /**
     * the column name for the OehdReleaseNbr field
     */
    const COL_OEHDRELEASENBR = 'SO_HEADER.OehdReleaseNbr';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'SO_HEADER.IntbWhse';

    /**
     * the column name for the OehdBordBuildDate field
     */
    const COL_OEHDBORDBUILDDATE = 'SO_HEADER.OehdBordBuildDate';

    /**
     * the column name for the OehdDeptCode field
     */
    const COL_OEHDDEPTCODE = 'SO_HEADER.OehdDeptCode';

    /**
     * the column name for the OehdFrtInEntered field
     */
    const COL_OEHDFRTINENTERED = 'SO_HEADER.OehdFrtInEntered';

    /**
     * the column name for the DropShipEntered field
     */
    const COL_DROPSHIPENTERED = 'SO_HEADER.DropShipEntered';

    /**
     * the column name for the OehdErFlag field
     */
    const COL_OEHDERFLAG = 'SO_HEADER.OehdErFlag';

    /**
     * the column name for the OehdFrtIn field
     */
    const COL_OEHDFRTIN = 'SO_HEADER.OehdFrtIn';

    /**
     * the column name for the OehdDropShip field
     */
    const COL_OEHDDROPSHIP = 'SO_HEADER.OehdDropShip';

    /**
     * the column name for the OehdMinOrder field
     */
    const COL_OEHDMINORDER = 'SO_HEADER.OehdMinOrder';

    /**
     * the column name for the OehdContractTerms field
     */
    const COL_OEHDCONTRACTTERMS = 'SO_HEADER.OehdContractTerms';

    /**
     * the column name for the OehdDiscDate1 field
     */
    const COL_OEHDDISCDATE1 = 'SO_HEADER.OehdDiscDate1';

    /**
     * the column name for the OehdDiscPct1 field
     */
    const COL_OEHDDISCPCT1 = 'SO_HEADER.OehdDiscPct1';

    /**
     * the column name for the OehdDueDate1 field
     */
    const COL_OEHDDUEDATE1 = 'SO_HEADER.OehdDueDate1';

    /**
     * the column name for the OehdDueAmt1 field
     */
    const COL_OEHDDUEAMT1 = 'SO_HEADER.OehdDueAmt1';

    /**
     * the column name for the OehdDuePct1 field
     */
    const COL_OEHDDUEPCT1 = 'SO_HEADER.OehdDuePct1';

    /**
     * the column name for the OehdDiscDate2 field
     */
    const COL_OEHDDISCDATE2 = 'SO_HEADER.OehdDiscDate2';

    /**
     * the column name for the OehdDiscPct2 field
     */
    const COL_OEHDDISCPCT2 = 'SO_HEADER.OehdDiscPct2';

    /**
     * the column name for the OehdDueDate2 field
     */
    const COL_OEHDDUEDATE2 = 'SO_HEADER.OehdDueDate2';

    /**
     * the column name for the OehdDueAmt2 field
     */
    const COL_OEHDDUEAMT2 = 'SO_HEADER.OehdDueAmt2';

    /**
     * the column name for the OehdDuePct2 field
     */
    const COL_OEHDDUEPCT2 = 'SO_HEADER.OehdDuePct2';

    /**
     * the column name for the OehdDiscDate3 field
     */
    const COL_OEHDDISCDATE3 = 'SO_HEADER.OehdDiscDate3';

    /**
     * the column name for the OehdDiscPct3 field
     */
    const COL_OEHDDISCPCT3 = 'SO_HEADER.OehdDiscPct3';

    /**
     * the column name for the OehdDueDate3 field
     */
    const COL_OEHDDUEDATE3 = 'SO_HEADER.OehdDueDate3';

    /**
     * the column name for the OehdDueAmt3 field
     */
    const COL_OEHDDUEAMT3 = 'SO_HEADER.OehdDueAmt3';

    /**
     * the column name for the OehdDuePct3 field
     */
    const COL_OEHDDUEPCT3 = 'SO_HEADER.OehdDuePct3';

    /**
     * the column name for the OehdDiscDate4 field
     */
    const COL_OEHDDISCDATE4 = 'SO_HEADER.OehdDiscDate4';

    /**
     * the column name for the OehdDiscPct4 field
     */
    const COL_OEHDDISCPCT4 = 'SO_HEADER.OehdDiscPct4';

    /**
     * the column name for the OehdDueDate4 field
     */
    const COL_OEHDDUEDATE4 = 'SO_HEADER.OehdDueDate4';

    /**
     * the column name for the OehdDueAmt4 field
     */
    const COL_OEHDDUEAMT4 = 'SO_HEADER.OehdDueAmt4';

    /**
     * the column name for the OehdDuePct4 field
     */
    const COL_OEHDDUEPCT4 = 'SO_HEADER.OehdDuePct4';

    /**
     * the column name for the OehdDiscDate5 field
     */
    const COL_OEHDDISCDATE5 = 'SO_HEADER.OehdDiscDate5';

    /**
     * the column name for the OehdDiscPct5 field
     */
    const COL_OEHDDISCPCT5 = 'SO_HEADER.OehdDiscPct5';

    /**
     * the column name for the OehdDueDate5 field
     */
    const COL_OEHDDUEDATE5 = 'SO_HEADER.OehdDueDate5';

    /**
     * the column name for the OehdDueAmt5 field
     */
    const COL_OEHDDUEAMT5 = 'SO_HEADER.OehdDueAmt5';

    /**
     * the column name for the OehdDuePct5 field
     */
    const COL_OEHDDUEPCT5 = 'SO_HEADER.OehdDuePct5';

    /**
     * the column name for the OehdDropShipBilled field
     */
    const COL_OEHDDROPSHIPBILLED = 'SO_HEADER.OehdDropShipBilled';

    /**
     * the column name for the OehdOrdTyp field
     */
    const COL_OEHDORDTYP = 'SO_HEADER.OehdOrdTyp';

    /**
     * the column name for the OehdTrackNbr field
     */
    const COL_OEHDTRACKNBR = 'SO_HEADER.OehdTrackNbr';

    /**
     * the column name for the OehdSource field
     */
    const COL_OEHDSOURCE = 'SO_HEADER.OehdSource';

    /**
     * the column name for the OehdCcAprv field
     */
    const COL_OEHDCCAPRV = 'SO_HEADER.OehdCcAprv';

    /**
     * the column name for the OehdPickFmatType field
     */
    const COL_OEHDPICKFMATTYPE = 'SO_HEADER.OehdPickFmatType';

    /**
     * the column name for the OehdInvcFmatType field
     */
    const COL_OEHDINVCFMATTYPE = 'SO_HEADER.OehdInvcFmatType';

    /**
     * the column name for the OehdCashAmt field
     */
    const COL_OEHDCASHAMT = 'SO_HEADER.OehdCashAmt';

    /**
     * the column name for the OehdCheckAmt field
     */
    const COL_OEHDCHECKAMT = 'SO_HEADER.OehdCheckAmt';

    /**
     * the column name for the OehdCheckNbr field
     */
    const COL_OEHDCHECKNBR = 'SO_HEADER.OehdCheckNbr';

    /**
     * the column name for the OehdDepositAmt field
     */
    const COL_OEHDDEPOSITAMT = 'SO_HEADER.OehdDepositAmt';

    /**
     * the column name for the OehdDepositNbr field
     */
    const COL_OEHDDEPOSITNBR = 'SO_HEADER.OehdDepositNbr';

    /**
     * the column name for the OehdCcAmt field
     */
    const COL_OEHDCCAMT = 'SO_HEADER.OehdCcAmt';

    /**
     * the column name for the OehdOTaxSub field
     */
    const COL_OEHDOTAXSUB = 'SO_HEADER.OehdOTaxSub';

    /**
     * the column name for the OehdONonTaxSub field
     */
    const COL_OEHDONONTAXSUB = 'SO_HEADER.OehdONonTaxSub';

    /**
     * the column name for the OehdOTaxTot field
     */
    const COL_OEHDOTAXTOT = 'SO_HEADER.OehdOTaxTot';

    /**
     * the column name for the OehdOOrdrTot field
     */
    const COL_OEHDOORDRTOT = 'SO_HEADER.OehdOOrdrTot';

    /**
     * the column name for the OehdPickPrintDate field
     */
    const COL_OEHDPICKPRINTDATE = 'SO_HEADER.OehdPickPrintDate';

    /**
     * the column name for the OehdPickPrintTime field
     */
    const COL_OEHDPICKPRINTTIME = 'SO_HEADER.OehdPickPrintTime';

    /**
     * the column name for the OehdCont field
     */
    const COL_OEHDCONT = 'SO_HEADER.OehdCont';

    /**
     * the column name for the OehdContTeleIntl field
     */
    const COL_OEHDCONTTELEINTL = 'SO_HEADER.OehdContTeleIntl';

    /**
     * the column name for the OehdContTeleNbr field
     */
    const COL_OEHDCONTTELENBR = 'SO_HEADER.OehdContTeleNbr';

    /**
     * the column name for the OehdContTeleExt field
     */
    const COL_OEHDCONTTELEEXT = 'SO_HEADER.OehdContTeleExt';

    /**
     * the column name for the OehdContFaxIntl field
     */
    const COL_OEHDCONTFAXINTL = 'SO_HEADER.OehdContFaxIntl';

    /**
     * the column name for the OehdContFaxNbr field
     */
    const COL_OEHDCONTFAXNBR = 'SO_HEADER.OehdContFaxNbr';

    /**
     * the column name for the OehdMailId field
     */
    const COL_OEHDMAILID = 'SO_HEADER.OehdMailId';

    /**
     * the column name for the OehdChgDue field
     */
    const COL_OEHDCHGDUE = 'SO_HEADER.OehdChgDue';

    /**
     * the column name for the OehdAddlPricDisc field
     */
    const COL_OEHDADDLPRICDISC = 'SO_HEADER.OehdAddlPricDisc';

    /**
     * the column name for the OehdAllShip field
     */
    const COL_OEHDALLSHIP = 'SO_HEADER.OehdAllShip';

    /**
     * the column name for the OehdQtyOrderAmt field
     */
    const COL_OEHDQTYORDERAMT = 'SO_HEADER.OehdQtyOrderAmt';

    /**
     * the column name for the OehdQtyTaxTot field
     */
    const COL_OEHDQTYTAXTOT = 'SO_HEADER.OehdQtyTaxTot';

    /**
     * the column name for the OehdQtyFrtIn field
     */
    const COL_OEHDQTYFRTIN = 'SO_HEADER.OehdQtyFrtIn';

    /**
     * the column name for the OehdOrideShipComp field
     */
    const COL_OEHDORIDESHIPCOMP = 'SO_HEADER.OehdOrideShipComp';

    /**
     * the column name for the OehdContEmail field
     */
    const COL_OEHDCONTEMAIL = 'SO_HEADER.OehdContEmail';

    /**
     * the column name for the OehdManualFrt field
     */
    const COL_OEHDMANUALFRT = 'SO_HEADER.OehdManualFrt';

    /**
     * the column name for the OehdInternalFrt field
     */
    const COL_OEHDINTERNALFRT = 'SO_HEADER.OehdInternalFrt';

    /**
     * the column name for the OehdFrtCost field
     */
    const COL_OEHDFRTCOST = 'SO_HEADER.OehdFrtCost';

    /**
     * the column name for the OehdRoute field
     */
    const COL_OEHDROUTE = 'SO_HEADER.OehdRoute';

    /**
     * the column name for the OehdRouteSeq field
     */
    const COL_OEHDROUTESEQ = 'SO_HEADER.OehdRouteSeq';

    /**
     * the column name for the OehdFrtTaxCode1 field
     */
    const COL_OEHDFRTTAXCODE1 = 'SO_HEADER.OehdFrtTaxCode1';

    /**
     * the column name for the OehdFrtTaxAmt1 field
     */
    const COL_OEHDFRTTAXAMT1 = 'SO_HEADER.OehdFrtTaxAmt1';

    /**
     * the column name for the OehdFrtTaxCode2 field
     */
    const COL_OEHDFRTTAXCODE2 = 'SO_HEADER.OehdFrtTaxCode2';

    /**
     * the column name for the OehdFrtTaxAmt2 field
     */
    const COL_OEHDFRTTAXAMT2 = 'SO_HEADER.OehdFrtTaxAmt2';

    /**
     * the column name for the OehdFrtTaxCode3 field
     */
    const COL_OEHDFRTTAXCODE3 = 'SO_HEADER.OehdFrtTaxCode3';

    /**
     * the column name for the OehdFrtTaxAmt3 field
     */
    const COL_OEHDFRTTAXAMT3 = 'SO_HEADER.OehdFrtTaxAmt3';

    /**
     * the column name for the OehdFrtTaxCode4 field
     */
    const COL_OEHDFRTTAXCODE4 = 'SO_HEADER.OehdFrtTaxCode4';

    /**
     * the column name for the OehdFrtTaxAmt4 field
     */
    const COL_OEHDFRTTAXAMT4 = 'SO_HEADER.OehdFrtTaxAmt4';

    /**
     * the column name for the OehdFrtTaxCode5 field
     */
    const COL_OEHDFRTTAXCODE5 = 'SO_HEADER.OehdFrtTaxCode5';

    /**
     * the column name for the OehdFrtTaxAmt5 field
     */
    const COL_OEHDFRTTAXAMT5 = 'SO_HEADER.OehdFrtTaxAmt5';

    /**
     * the column name for the OehdEdi855Sent field
     */
    const COL_OEHDEDI855SENT = 'SO_HEADER.OehdEdi855Sent';

    /**
     * the column name for the OehdFrt3rdParty field
     */
    const COL_OEHDFRT3RDPARTY = 'SO_HEADER.OehdFrt3rdParty';

    /**
     * the column name for the OehdFob field
     */
    const COL_OEHDFOB = 'SO_HEADER.OehdFob';

    /**
     * the column name for the OehdConfirmImagYn field
     */
    const COL_OEHDCONFIRMIMAGYN = 'SO_HEADER.OehdConfirmImagYn';

    /**
     * the column name for the OehdCstkConsign field
     */
    const COL_OEHDCSTKCONSIGN = 'SO_HEADER.OehdCstkConsign';

    /**
     * the column name for the OehdStoreId field
     */
    const COL_OEHDSTOREID = 'SO_HEADER.OehdStoreId';

    /**
     * the column name for the OehdPickQueue field
     */
    const COL_OEHDPICKQUEUE = 'SO_HEADER.OehdPickQueue';

    /**
     * the column name for the OehdArrvDate field
     */
    const COL_OEHDARRVDATE = 'SO_HEADER.OehdArrvDate';

    /**
     * the column name for the OehdSurchgStat field
     */
    const COL_OEHDSURCHGSTAT = 'SO_HEADER.OehdSurchgStat';

    /**
     * the column name for the OehdFrtGrup field
     */
    const COL_OEHDFRTGRUP = 'SO_HEADER.OehdFrtGrup';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'SO_HEADER.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'SO_HEADER.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'SO_HEADER.dummy';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Oehdnbr', 'Oehdstat', 'Oehdhold', 'Arcucustid', 'Arstshipid', 'Oehdstlastname', 'Oehdstfirstname', 'Oehdstadr1', 'Oehdstadr2', 'Oehdstadr3', 'Oehdstctry', 'Oehdstcity', 'Oehdststat', 'Oehdstzipcode', 'Oehdcustpo', 'Oehdordrdate', 'Artmtermcd', 'Artbshipvia', 'Arininvnbr', 'Oehdinvdate', 'Oehdglpd', 'Arspsaleper1', 'Oehdsp1pct', 'Arspsaleper2', 'Oehdsp2pct', 'Arspsaleper3', 'Oehdsp3pct', 'Oehdcntrnbr', 'Oehddroprelhold', 'Oehdtaxsub', 'Oehdnontaxsub', 'Oehdtaxtot', 'Oehdfrttot', 'Oehdmisctot', 'Oehdordrtot', 'Oehdcosttot', 'Oehdspcommlock', 'Oehdtakendate', 'Oehdtakentime', 'Oehdpickdate', 'Oehdpicktime', 'Oehdpackdate', 'Oehdpacktime', 'Oehdverifydate', 'Oehdverifytime', 'Oehdcreditmemo', 'Oehdbookedyn', 'Intbwhseorig', 'Oehdbtstat', 'Oehdshipcomp', 'Oehdcwoflag', 'Oehddivision', 'Oehdtakencode', 'Oehdpickcode', 'Oehdpackcode', 'Oehdverifycode', 'Oehdtotdisc', 'Oehdedirefnbrqual', 'Oehdusercode1', 'Oehdusercode2', 'Oehdusercode3', 'Oehdusercode4', 'Oehdexchctry', 'Oehdexchrate', 'Oehdwght', 'Oehdqbpacker', 'Oehdqblabeler1', 'Oehdqblabeler2', 'Oehdboxcount', 'Oehdrqstdate', 'Oehdcancdate', 'Oehdcrntuser', 'Oehdreleasenbr', 'Intbwhse', 'Oehdbordbuilddate', 'Oehddeptcode', 'Oehdfrtinentered', 'Dropshipentered', 'Oehderflag', 'Oehdfrtin', 'Oehddropship', 'Oehdminorder', 'Oehdcontractterms', 'Oehddiscdate1', 'Oehddiscpct1', 'Oehdduedate1', 'Oehddueamt1', 'Oehdduepct1', 'Oehddiscdate2', 'Oehddiscpct2', 'Oehdduedate2', 'Oehddueamt2', 'Oehdduepct2', 'Oehddiscdate3', 'Oehddiscpct3', 'Oehdduedate3', 'Oehddueamt3', 'Oehdduepct3', 'Oehddiscdate4', 'Oehddiscpct4', 'Oehdduedate4', 'Oehddueamt4', 'Oehdduepct4', 'Oehddiscdate5', 'Oehddiscpct5', 'Oehdduedate5', 'Oehddueamt5', 'Oehdduepct5', 'Oehddropshipbilled', 'Oehdordtyp', 'Oehdtracknbr', 'Oehdsource', 'Oehdccaprv', 'Oehdpickfmattype', 'Oehdinvcfmattype', 'Oehdcashamt', 'Oehdcheckamt', 'Oehdchecknbr', 'Oehddepositamt', 'Oehddepositnbr', 'Oehdccamt', 'Oehdotaxsub', 'Oehdonontaxsub', 'Oehdotaxtot', 'Oehdoordrtot', 'Oehdpickprintdate', 'Oehdpickprinttime', 'Oehdcont', 'Oehdcontteleintl', 'Oehdconttelenbr', 'Oehdcontteleext', 'Oehdcontfaxintl', 'Oehdcontfaxnbr', 'Oehdmailid', 'Oehdchgdue', 'Oehdaddlpricdisc', 'Oehdallship', 'Oehdqtyorderamt', 'Oehdqtytaxtot', 'Oehdqtyfrtin', 'Oehdorideshipcomp', 'Oehdcontemail', 'Oehdmanualfrt', 'Oehdinternalfrt', 'Oehdfrtcost', 'Oehdroute', 'Oehdrouteseq', 'Oehdfrttaxcode1', 'Oehdfrttaxamt1', 'Oehdfrttaxcode2', 'Oehdfrttaxamt2', 'Oehdfrttaxcode3', 'Oehdfrttaxamt3', 'Oehdfrttaxcode4', 'Oehdfrttaxamt4', 'Oehdfrttaxcode5', 'Oehdfrttaxamt5', 'Oehdedi855sent', 'Oehdfrt3rdparty', 'Oehdfob', 'Oehdconfirmimagyn', 'Oehdcstkconsign', 'Oehdstoreid', 'Oehdpickqueue', 'Oehdarrvdate', 'Oehdsurchgstat', 'Oehdfrtgrup', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('oehdnbr', 'oehdstat', 'oehdhold', 'arcucustid', 'arstshipid', 'oehdstlastname', 'oehdstfirstname', 'oehdstadr1', 'oehdstadr2', 'oehdstadr3', 'oehdstctry', 'oehdstcity', 'oehdststat', 'oehdstzipcode', 'oehdcustpo', 'oehdordrdate', 'artmtermcd', 'artbshipvia', 'arininvnbr', 'oehdinvdate', 'oehdglpd', 'arspsaleper1', 'oehdsp1pct', 'arspsaleper2', 'oehdsp2pct', 'arspsaleper3', 'oehdsp3pct', 'oehdcntrnbr', 'oehddroprelhold', 'oehdtaxsub', 'oehdnontaxsub', 'oehdtaxtot', 'oehdfrttot', 'oehdmisctot', 'oehdordrtot', 'oehdcosttot', 'oehdspcommlock', 'oehdtakendate', 'oehdtakentime', 'oehdpickdate', 'oehdpicktime', 'oehdpackdate', 'oehdpacktime', 'oehdverifydate', 'oehdverifytime', 'oehdcreditmemo', 'oehdbookedyn', 'intbwhseorig', 'oehdbtstat', 'oehdshipcomp', 'oehdcwoflag', 'oehddivision', 'oehdtakencode', 'oehdpickcode', 'oehdpackcode', 'oehdverifycode', 'oehdtotdisc', 'oehdedirefnbrqual', 'oehdusercode1', 'oehdusercode2', 'oehdusercode3', 'oehdusercode4', 'oehdexchctry', 'oehdexchrate', 'oehdwght', 'oehdqbpacker', 'oehdqblabeler1', 'oehdqblabeler2', 'oehdboxcount', 'oehdrqstdate', 'oehdcancdate', 'oehdcrntuser', 'oehdreleasenbr', 'intbwhse', 'oehdbordbuilddate', 'oehddeptcode', 'oehdfrtinentered', 'dropshipentered', 'oehderflag', 'oehdfrtin', 'oehddropship', 'oehdminorder', 'oehdcontractterms', 'oehddiscdate1', 'oehddiscpct1', 'oehdduedate1', 'oehddueamt1', 'oehdduepct1', 'oehddiscdate2', 'oehddiscpct2', 'oehdduedate2', 'oehddueamt2', 'oehdduepct2', 'oehddiscdate3', 'oehddiscpct3', 'oehdduedate3', 'oehddueamt3', 'oehdduepct3', 'oehddiscdate4', 'oehddiscpct4', 'oehdduedate4', 'oehddueamt4', 'oehdduepct4', 'oehddiscdate5', 'oehddiscpct5', 'oehdduedate5', 'oehddueamt5', 'oehdduepct5', 'oehddropshipbilled', 'oehdordtyp', 'oehdtracknbr', 'oehdsource', 'oehdccaprv', 'oehdpickfmattype', 'oehdinvcfmattype', 'oehdcashamt', 'oehdcheckamt', 'oehdchecknbr', 'oehddepositamt', 'oehddepositnbr', 'oehdccamt', 'oehdotaxsub', 'oehdonontaxsub', 'oehdotaxtot', 'oehdoordrtot', 'oehdpickprintdate', 'oehdpickprinttime', 'oehdcont', 'oehdcontteleintl', 'oehdconttelenbr', 'oehdcontteleext', 'oehdcontfaxintl', 'oehdcontfaxnbr', 'oehdmailid', 'oehdchgdue', 'oehdaddlpricdisc', 'oehdallship', 'oehdqtyorderamt', 'oehdqtytaxtot', 'oehdqtyfrtin', 'oehdorideshipcomp', 'oehdcontemail', 'oehdmanualfrt', 'oehdinternalfrt', 'oehdfrtcost', 'oehdroute', 'oehdrouteseq', 'oehdfrttaxcode1', 'oehdfrttaxamt1', 'oehdfrttaxcode2', 'oehdfrttaxamt2', 'oehdfrttaxcode3', 'oehdfrttaxamt3', 'oehdfrttaxcode4', 'oehdfrttaxamt4', 'oehdfrttaxcode5', 'oehdfrttaxamt5', 'oehdedi855sent', 'oehdfrt3rdparty', 'oehdfob', 'oehdconfirmimagyn', 'oehdcstkconsign', 'oehdstoreid', 'oehdpickqueue', 'oehdarrvdate', 'oehdsurchgstat', 'oehdfrtgrup', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(SoHeaderTableMap::COL_OEHDNBR, SoHeaderTableMap::COL_OEHDSTAT, SoHeaderTableMap::COL_OEHDHOLD, SoHeaderTableMap::COL_ARCUCUSTID, SoHeaderTableMap::COL_ARSTSHIPID, SoHeaderTableMap::COL_OEHDSTLASTNAME, SoHeaderTableMap::COL_OEHDSTFIRSTNAME, SoHeaderTableMap::COL_OEHDSTADR1, SoHeaderTableMap::COL_OEHDSTADR2, SoHeaderTableMap::COL_OEHDSTADR3, SoHeaderTableMap::COL_OEHDSTCTRY, SoHeaderTableMap::COL_OEHDSTCITY, SoHeaderTableMap::COL_OEHDSTSTAT, SoHeaderTableMap::COL_OEHDSTZIPCODE, SoHeaderTableMap::COL_OEHDCUSTPO, SoHeaderTableMap::COL_OEHDORDRDATE, SoHeaderTableMap::COL_ARTMTERMCD, SoHeaderTableMap::COL_ARTBSHIPVIA, SoHeaderTableMap::COL_ARININVNBR, SoHeaderTableMap::COL_OEHDINVDATE, SoHeaderTableMap::COL_OEHDGLPD, SoHeaderTableMap::COL_ARSPSALEPER1, SoHeaderTableMap::COL_OEHDSP1PCT, SoHeaderTableMap::COL_ARSPSALEPER2, SoHeaderTableMap::COL_OEHDSP2PCT, SoHeaderTableMap::COL_ARSPSALEPER3, SoHeaderTableMap::COL_OEHDSP3PCT, SoHeaderTableMap::COL_OEHDCNTRNBR, SoHeaderTableMap::COL_OEHDDROPRELHOLD, SoHeaderTableMap::COL_OEHDTAXSUB, SoHeaderTableMap::COL_OEHDNONTAXSUB, SoHeaderTableMap::COL_OEHDTAXTOT, SoHeaderTableMap::COL_OEHDFRTTOT, SoHeaderTableMap::COL_OEHDMISCTOT, SoHeaderTableMap::COL_OEHDORDRTOT, SoHeaderTableMap::COL_OEHDCOSTTOT, SoHeaderTableMap::COL_OEHDSPCOMMLOCK, SoHeaderTableMap::COL_OEHDTAKENDATE, SoHeaderTableMap::COL_OEHDTAKENTIME, SoHeaderTableMap::COL_OEHDPICKDATE, SoHeaderTableMap::COL_OEHDPICKTIME, SoHeaderTableMap::COL_OEHDPACKDATE, SoHeaderTableMap::COL_OEHDPACKTIME, SoHeaderTableMap::COL_OEHDVERIFYDATE, SoHeaderTableMap::COL_OEHDVERIFYTIME, SoHeaderTableMap::COL_OEHDCREDITMEMO, SoHeaderTableMap::COL_OEHDBOOKEDYN, SoHeaderTableMap::COL_INTBWHSEORIG, SoHeaderTableMap::COL_OEHDBTSTAT, SoHeaderTableMap::COL_OEHDSHIPCOMP, SoHeaderTableMap::COL_OEHDCWOFLAG, SoHeaderTableMap::COL_OEHDDIVISION, SoHeaderTableMap::COL_OEHDTAKENCODE, SoHeaderTableMap::COL_OEHDPICKCODE, SoHeaderTableMap::COL_OEHDPACKCODE, SoHeaderTableMap::COL_OEHDVERIFYCODE, SoHeaderTableMap::COL_OEHDTOTDISC, SoHeaderTableMap::COL_OEHDEDIREFNBRQUAL, SoHeaderTableMap::COL_OEHDUSERCODE1, SoHeaderTableMap::COL_OEHDUSERCODE2, SoHeaderTableMap::COL_OEHDUSERCODE3, SoHeaderTableMap::COL_OEHDUSERCODE4, SoHeaderTableMap::COL_OEHDEXCHCTRY, SoHeaderTableMap::COL_OEHDEXCHRATE, SoHeaderTableMap::COL_OEHDWGHT, SoHeaderTableMap::COL_OEHDQBPACKER, SoHeaderTableMap::COL_OEHDQBLABELER1, SoHeaderTableMap::COL_OEHDQBLABELER2, SoHeaderTableMap::COL_OEHDBOXCOUNT, SoHeaderTableMap::COL_OEHDRQSTDATE, SoHeaderTableMap::COL_OEHDCANCDATE, SoHeaderTableMap::COL_OEHDCRNTUSER, SoHeaderTableMap::COL_OEHDRELEASENBR, SoHeaderTableMap::COL_INTBWHSE, SoHeaderTableMap::COL_OEHDBORDBUILDDATE, SoHeaderTableMap::COL_OEHDDEPTCODE, SoHeaderTableMap::COL_OEHDFRTINENTERED, SoHeaderTableMap::COL_DROPSHIPENTERED, SoHeaderTableMap::COL_OEHDERFLAG, SoHeaderTableMap::COL_OEHDFRTIN, SoHeaderTableMap::COL_OEHDDROPSHIP, SoHeaderTableMap::COL_OEHDMINORDER, SoHeaderTableMap::COL_OEHDCONTRACTTERMS, SoHeaderTableMap::COL_OEHDDISCDATE1, SoHeaderTableMap::COL_OEHDDISCPCT1, SoHeaderTableMap::COL_OEHDDUEDATE1, SoHeaderTableMap::COL_OEHDDUEAMT1, SoHeaderTableMap::COL_OEHDDUEPCT1, SoHeaderTableMap::COL_OEHDDISCDATE2, SoHeaderTableMap::COL_OEHDDISCPCT2, SoHeaderTableMap::COL_OEHDDUEDATE2, SoHeaderTableMap::COL_OEHDDUEAMT2, SoHeaderTableMap::COL_OEHDDUEPCT2, SoHeaderTableMap::COL_OEHDDISCDATE3, SoHeaderTableMap::COL_OEHDDISCPCT3, SoHeaderTableMap::COL_OEHDDUEDATE3, SoHeaderTableMap::COL_OEHDDUEAMT3, SoHeaderTableMap::COL_OEHDDUEPCT3, SoHeaderTableMap::COL_OEHDDISCDATE4, SoHeaderTableMap::COL_OEHDDISCPCT4, SoHeaderTableMap::COL_OEHDDUEDATE4, SoHeaderTableMap::COL_OEHDDUEAMT4, SoHeaderTableMap::COL_OEHDDUEPCT4, SoHeaderTableMap::COL_OEHDDISCDATE5, SoHeaderTableMap::COL_OEHDDISCPCT5, SoHeaderTableMap::COL_OEHDDUEDATE5, SoHeaderTableMap::COL_OEHDDUEAMT5, SoHeaderTableMap::COL_OEHDDUEPCT5, SoHeaderTableMap::COL_OEHDDROPSHIPBILLED, SoHeaderTableMap::COL_OEHDORDTYP, SoHeaderTableMap::COL_OEHDTRACKNBR, SoHeaderTableMap::COL_OEHDSOURCE, SoHeaderTableMap::COL_OEHDCCAPRV, SoHeaderTableMap::COL_OEHDPICKFMATTYPE, SoHeaderTableMap::COL_OEHDINVCFMATTYPE, SoHeaderTableMap::COL_OEHDCASHAMT, SoHeaderTableMap::COL_OEHDCHECKAMT, SoHeaderTableMap::COL_OEHDCHECKNBR, SoHeaderTableMap::COL_OEHDDEPOSITAMT, SoHeaderTableMap::COL_OEHDDEPOSITNBR, SoHeaderTableMap::COL_OEHDCCAMT, SoHeaderTableMap::COL_OEHDOTAXSUB, SoHeaderTableMap::COL_OEHDONONTAXSUB, SoHeaderTableMap::COL_OEHDOTAXTOT, SoHeaderTableMap::COL_OEHDOORDRTOT, SoHeaderTableMap::COL_OEHDPICKPRINTDATE, SoHeaderTableMap::COL_OEHDPICKPRINTTIME, SoHeaderTableMap::COL_OEHDCONT, SoHeaderTableMap::COL_OEHDCONTTELEINTL, SoHeaderTableMap::COL_OEHDCONTTELENBR, SoHeaderTableMap::COL_OEHDCONTTELEEXT, SoHeaderTableMap::COL_OEHDCONTFAXINTL, SoHeaderTableMap::COL_OEHDCONTFAXNBR, SoHeaderTableMap::COL_OEHDMAILID, SoHeaderTableMap::COL_OEHDCHGDUE, SoHeaderTableMap::COL_OEHDADDLPRICDISC, SoHeaderTableMap::COL_OEHDALLSHIP, SoHeaderTableMap::COL_OEHDQTYORDERAMT, SoHeaderTableMap::COL_OEHDQTYTAXTOT, SoHeaderTableMap::COL_OEHDQTYFRTIN, SoHeaderTableMap::COL_OEHDORIDESHIPCOMP, SoHeaderTableMap::COL_OEHDCONTEMAIL, SoHeaderTableMap::COL_OEHDMANUALFRT, SoHeaderTableMap::COL_OEHDINTERNALFRT, SoHeaderTableMap::COL_OEHDFRTCOST, SoHeaderTableMap::COL_OEHDROUTE, SoHeaderTableMap::COL_OEHDROUTESEQ, SoHeaderTableMap::COL_OEHDFRTTAXCODE1, SoHeaderTableMap::COL_OEHDFRTTAXAMT1, SoHeaderTableMap::COL_OEHDFRTTAXCODE2, SoHeaderTableMap::COL_OEHDFRTTAXAMT2, SoHeaderTableMap::COL_OEHDFRTTAXCODE3, SoHeaderTableMap::COL_OEHDFRTTAXAMT3, SoHeaderTableMap::COL_OEHDFRTTAXCODE4, SoHeaderTableMap::COL_OEHDFRTTAXAMT4, SoHeaderTableMap::COL_OEHDFRTTAXCODE5, SoHeaderTableMap::COL_OEHDFRTTAXAMT5, SoHeaderTableMap::COL_OEHDEDI855SENT, SoHeaderTableMap::COL_OEHDFRT3RDPARTY, SoHeaderTableMap::COL_OEHDFOB, SoHeaderTableMap::COL_OEHDCONFIRMIMAGYN, SoHeaderTableMap::COL_OEHDCSTKCONSIGN, SoHeaderTableMap::COL_OEHDSTOREID, SoHeaderTableMap::COL_OEHDPICKQUEUE, SoHeaderTableMap::COL_OEHDARRVDATE, SoHeaderTableMap::COL_OEHDSURCHGSTAT, SoHeaderTableMap::COL_OEHDFRTGRUP, SoHeaderTableMap::COL_DATEUPDTD, SoHeaderTableMap::COL_TIMEUPDTD, SoHeaderTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('OehdNbr', 'OehdStat', 'OehdHold', 'ArcuCustId', 'ArstShipId', 'OehdStLastName', 'OehdStFirstName', 'OehdStAdr1', 'OehdStAdr2', 'OehdStAdr3', 'OehdStCtry', 'OehdStCity', 'OehdStStat', 'OehdStZipCode', 'OehdCustPo', 'OehdOrdrDate', 'ArtmTermCd', 'ArtbShipVia', 'ArinInvNbr', 'OehdInvDate', 'OehdGLPd', 'ArspSalePer1', 'OehdSp1Pct', 'ArspSalePer2', 'OehdSp2Pct', 'ArspSalePer3', 'OehdSp3Pct', 'OehdCntrNbr', 'OehdDropRelHold', 'OehdTaxSub', 'OehdNonTaxSub', 'OehdTaxTot', 'OehdFrtTot', 'OehdMiscTot', 'OehdOrdrTot', 'OehdCostTot', 'OehdSpCommLock', 'OehdTakenDate', 'OehdTakenTime', 'OehdPickDate', 'OehdPickTime', 'OehdPackDate', 'OehdPackTime', 'OehdVerifyDate', 'OehdVerifyTime', 'OehdCreditMemo', 'OehdBookedYn', 'IntbWhseOrig', 'OehdBtStat', 'OehdShipComp', 'OehdCwoFlag', 'OehdDivision', 'OehdTakenCode', 'OehdPickCode', 'OehdPackCode', 'OehdVerifyCode', 'OehdTotDisc', 'OehdEdiRefNbrQual', 'OehdUserCode1', 'OehdUserCode2', 'OehdUserCode3', 'OehdUserCode4', 'OehdExchCtry', 'OehdExchRate', 'OehdWght', 'OehdQbPacker', 'OehdQbLabeler1', 'OehdQbLabeler2', 'OehdBoxCount', 'OehdRqstDate', 'OehdCancDate', 'OehdCrntUser', 'OehdReleaseNbr', 'IntbWhse', 'OehdBordBuildDate', 'OehdDeptCode', 'OehdFrtInEntered', 'DropShipEntered', 'OehdErFlag', 'OehdFrtIn', 'OehdDropShip', 'OehdMinOrder', 'OehdContractTerms', 'OehdDiscDate1', 'OehdDiscPct1', 'OehdDueDate1', 'OehdDueAmt1', 'OehdDuePct1', 'OehdDiscDate2', 'OehdDiscPct2', 'OehdDueDate2', 'OehdDueAmt2', 'OehdDuePct2', 'OehdDiscDate3', 'OehdDiscPct3', 'OehdDueDate3', 'OehdDueAmt3', 'OehdDuePct3', 'OehdDiscDate4', 'OehdDiscPct4', 'OehdDueDate4', 'OehdDueAmt4', 'OehdDuePct4', 'OehdDiscDate5', 'OehdDiscPct5', 'OehdDueDate5', 'OehdDueAmt5', 'OehdDuePct5', 'OehdDropShipBilled', 'OehdOrdTyp', 'OehdTrackNbr', 'OehdSource', 'OehdCcAprv', 'OehdPickFmatType', 'OehdInvcFmatType', 'OehdCashAmt', 'OehdCheckAmt', 'OehdCheckNbr', 'OehdDepositAmt', 'OehdDepositNbr', 'OehdCcAmt', 'OehdOTaxSub', 'OehdONonTaxSub', 'OehdOTaxTot', 'OehdOOrdrTot', 'OehdPickPrintDate', 'OehdPickPrintTime', 'OehdCont', 'OehdContTeleIntl', 'OehdContTeleNbr', 'OehdContTeleExt', 'OehdContFaxIntl', 'OehdContFaxNbr', 'OehdMailId', 'OehdChgDue', 'OehdAddlPricDisc', 'OehdAllShip', 'OehdQtyOrderAmt', 'OehdQtyTaxTot', 'OehdQtyFrtIn', 'OehdOrideShipComp', 'OehdContEmail', 'OehdManualFrt', 'OehdInternalFrt', 'OehdFrtCost', 'OehdRoute', 'OehdRouteSeq', 'OehdFrtTaxCode1', 'OehdFrtTaxAmt1', 'OehdFrtTaxCode2', 'OehdFrtTaxAmt2', 'OehdFrtTaxCode3', 'OehdFrtTaxAmt3', 'OehdFrtTaxCode4', 'OehdFrtTaxAmt4', 'OehdFrtTaxCode5', 'OehdFrtTaxAmt5', 'OehdEdi855Sent', 'OehdFrt3rdParty', 'OehdFob', 'OehdConfirmImagYn', 'OehdCstkConsign', 'OehdStoreId', 'OehdPickQueue', 'OehdArrvDate', 'OehdSurchgStat', 'OehdFrtGrup', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Oehdnbr' => 0, 'Oehdstat' => 1, 'Oehdhold' => 2, 'Arcucustid' => 3, 'Arstshipid' => 4, 'Oehdstlastname' => 5, 'Oehdstfirstname' => 6, 'Oehdstadr1' => 7, 'Oehdstadr2' => 8, 'Oehdstadr3' => 9, 'Oehdstctry' => 10, 'Oehdstcity' => 11, 'Oehdststat' => 12, 'Oehdstzipcode' => 13, 'Oehdcustpo' => 14, 'Oehdordrdate' => 15, 'Artmtermcd' => 16, 'Artbshipvia' => 17, 'Arininvnbr' => 18, 'Oehdinvdate' => 19, 'Oehdglpd' => 20, 'Arspsaleper1' => 21, 'Oehdsp1pct' => 22, 'Arspsaleper2' => 23, 'Oehdsp2pct' => 24, 'Arspsaleper3' => 25, 'Oehdsp3pct' => 26, 'Oehdcntrnbr' => 27, 'Oehddroprelhold' => 28, 'Oehdtaxsub' => 29, 'Oehdnontaxsub' => 30, 'Oehdtaxtot' => 31, 'Oehdfrttot' => 32, 'Oehdmisctot' => 33, 'Oehdordrtot' => 34, 'Oehdcosttot' => 35, 'Oehdspcommlock' => 36, 'Oehdtakendate' => 37, 'Oehdtakentime' => 38, 'Oehdpickdate' => 39, 'Oehdpicktime' => 40, 'Oehdpackdate' => 41, 'Oehdpacktime' => 42, 'Oehdverifydate' => 43, 'Oehdverifytime' => 44, 'Oehdcreditmemo' => 45, 'Oehdbookedyn' => 46, 'Intbwhseorig' => 47, 'Oehdbtstat' => 48, 'Oehdshipcomp' => 49, 'Oehdcwoflag' => 50, 'Oehddivision' => 51, 'Oehdtakencode' => 52, 'Oehdpickcode' => 53, 'Oehdpackcode' => 54, 'Oehdverifycode' => 55, 'Oehdtotdisc' => 56, 'Oehdedirefnbrqual' => 57, 'Oehdusercode1' => 58, 'Oehdusercode2' => 59, 'Oehdusercode3' => 60, 'Oehdusercode4' => 61, 'Oehdexchctry' => 62, 'Oehdexchrate' => 63, 'Oehdwght' => 64, 'Oehdqbpacker' => 65, 'Oehdqblabeler1' => 66, 'Oehdqblabeler2' => 67, 'Oehdboxcount' => 68, 'Oehdrqstdate' => 69, 'Oehdcancdate' => 70, 'Oehdcrntuser' => 71, 'Oehdreleasenbr' => 72, 'Intbwhse' => 73, 'Oehdbordbuilddate' => 74, 'Oehddeptcode' => 75, 'Oehdfrtinentered' => 76, 'Dropshipentered' => 77, 'Oehderflag' => 78, 'Oehdfrtin' => 79, 'Oehddropship' => 80, 'Oehdminorder' => 81, 'Oehdcontractterms' => 82, 'Oehddiscdate1' => 83, 'Oehddiscpct1' => 84, 'Oehdduedate1' => 85, 'Oehddueamt1' => 86, 'Oehdduepct1' => 87, 'Oehddiscdate2' => 88, 'Oehddiscpct2' => 89, 'Oehdduedate2' => 90, 'Oehddueamt2' => 91, 'Oehdduepct2' => 92, 'Oehddiscdate3' => 93, 'Oehddiscpct3' => 94, 'Oehdduedate3' => 95, 'Oehddueamt3' => 96, 'Oehdduepct3' => 97, 'Oehddiscdate4' => 98, 'Oehddiscpct4' => 99, 'Oehdduedate4' => 100, 'Oehddueamt4' => 101, 'Oehdduepct4' => 102, 'Oehddiscdate5' => 103, 'Oehddiscpct5' => 104, 'Oehdduedate5' => 105, 'Oehddueamt5' => 106, 'Oehdduepct5' => 107, 'Oehddropshipbilled' => 108, 'Oehdordtyp' => 109, 'Oehdtracknbr' => 110, 'Oehdsource' => 111, 'Oehdccaprv' => 112, 'Oehdpickfmattype' => 113, 'Oehdinvcfmattype' => 114, 'Oehdcashamt' => 115, 'Oehdcheckamt' => 116, 'Oehdchecknbr' => 117, 'Oehddepositamt' => 118, 'Oehddepositnbr' => 119, 'Oehdccamt' => 120, 'Oehdotaxsub' => 121, 'Oehdonontaxsub' => 122, 'Oehdotaxtot' => 123, 'Oehdoordrtot' => 124, 'Oehdpickprintdate' => 125, 'Oehdpickprinttime' => 126, 'Oehdcont' => 127, 'Oehdcontteleintl' => 128, 'Oehdconttelenbr' => 129, 'Oehdcontteleext' => 130, 'Oehdcontfaxintl' => 131, 'Oehdcontfaxnbr' => 132, 'Oehdmailid' => 133, 'Oehdchgdue' => 134, 'Oehdaddlpricdisc' => 135, 'Oehdallship' => 136, 'Oehdqtyorderamt' => 137, 'Oehdqtytaxtot' => 138, 'Oehdqtyfrtin' => 139, 'Oehdorideshipcomp' => 140, 'Oehdcontemail' => 141, 'Oehdmanualfrt' => 142, 'Oehdinternalfrt' => 143, 'Oehdfrtcost' => 144, 'Oehdroute' => 145, 'Oehdrouteseq' => 146, 'Oehdfrttaxcode1' => 147, 'Oehdfrttaxamt1' => 148, 'Oehdfrttaxcode2' => 149, 'Oehdfrttaxamt2' => 150, 'Oehdfrttaxcode3' => 151, 'Oehdfrttaxamt3' => 152, 'Oehdfrttaxcode4' => 153, 'Oehdfrttaxamt4' => 154, 'Oehdfrttaxcode5' => 155, 'Oehdfrttaxamt5' => 156, 'Oehdedi855sent' => 157, 'Oehdfrt3rdparty' => 158, 'Oehdfob' => 159, 'Oehdconfirmimagyn' => 160, 'Oehdcstkconsign' => 161, 'Oehdstoreid' => 162, 'Oehdpickqueue' => 163, 'Oehdarrvdate' => 164, 'Oehdsurchgstat' => 165, 'Oehdfrtgrup' => 166, 'Dateupdtd' => 167, 'Timeupdtd' => 168, 'Dummy' => 169, ),
        self::TYPE_CAMELNAME     => array('oehdnbr' => 0, 'oehdstat' => 1, 'oehdhold' => 2, 'arcucustid' => 3, 'arstshipid' => 4, 'oehdstlastname' => 5, 'oehdstfirstname' => 6, 'oehdstadr1' => 7, 'oehdstadr2' => 8, 'oehdstadr3' => 9, 'oehdstctry' => 10, 'oehdstcity' => 11, 'oehdststat' => 12, 'oehdstzipcode' => 13, 'oehdcustpo' => 14, 'oehdordrdate' => 15, 'artmtermcd' => 16, 'artbshipvia' => 17, 'arininvnbr' => 18, 'oehdinvdate' => 19, 'oehdglpd' => 20, 'arspsaleper1' => 21, 'oehdsp1pct' => 22, 'arspsaleper2' => 23, 'oehdsp2pct' => 24, 'arspsaleper3' => 25, 'oehdsp3pct' => 26, 'oehdcntrnbr' => 27, 'oehddroprelhold' => 28, 'oehdtaxsub' => 29, 'oehdnontaxsub' => 30, 'oehdtaxtot' => 31, 'oehdfrttot' => 32, 'oehdmisctot' => 33, 'oehdordrtot' => 34, 'oehdcosttot' => 35, 'oehdspcommlock' => 36, 'oehdtakendate' => 37, 'oehdtakentime' => 38, 'oehdpickdate' => 39, 'oehdpicktime' => 40, 'oehdpackdate' => 41, 'oehdpacktime' => 42, 'oehdverifydate' => 43, 'oehdverifytime' => 44, 'oehdcreditmemo' => 45, 'oehdbookedyn' => 46, 'intbwhseorig' => 47, 'oehdbtstat' => 48, 'oehdshipcomp' => 49, 'oehdcwoflag' => 50, 'oehddivision' => 51, 'oehdtakencode' => 52, 'oehdpickcode' => 53, 'oehdpackcode' => 54, 'oehdverifycode' => 55, 'oehdtotdisc' => 56, 'oehdedirefnbrqual' => 57, 'oehdusercode1' => 58, 'oehdusercode2' => 59, 'oehdusercode3' => 60, 'oehdusercode4' => 61, 'oehdexchctry' => 62, 'oehdexchrate' => 63, 'oehdwght' => 64, 'oehdqbpacker' => 65, 'oehdqblabeler1' => 66, 'oehdqblabeler2' => 67, 'oehdboxcount' => 68, 'oehdrqstdate' => 69, 'oehdcancdate' => 70, 'oehdcrntuser' => 71, 'oehdreleasenbr' => 72, 'intbwhse' => 73, 'oehdbordbuilddate' => 74, 'oehddeptcode' => 75, 'oehdfrtinentered' => 76, 'dropshipentered' => 77, 'oehderflag' => 78, 'oehdfrtin' => 79, 'oehddropship' => 80, 'oehdminorder' => 81, 'oehdcontractterms' => 82, 'oehddiscdate1' => 83, 'oehddiscpct1' => 84, 'oehdduedate1' => 85, 'oehddueamt1' => 86, 'oehdduepct1' => 87, 'oehddiscdate2' => 88, 'oehddiscpct2' => 89, 'oehdduedate2' => 90, 'oehddueamt2' => 91, 'oehdduepct2' => 92, 'oehddiscdate3' => 93, 'oehddiscpct3' => 94, 'oehdduedate3' => 95, 'oehddueamt3' => 96, 'oehdduepct3' => 97, 'oehddiscdate4' => 98, 'oehddiscpct4' => 99, 'oehdduedate4' => 100, 'oehddueamt4' => 101, 'oehdduepct4' => 102, 'oehddiscdate5' => 103, 'oehddiscpct5' => 104, 'oehdduedate5' => 105, 'oehddueamt5' => 106, 'oehdduepct5' => 107, 'oehddropshipbilled' => 108, 'oehdordtyp' => 109, 'oehdtracknbr' => 110, 'oehdsource' => 111, 'oehdccaprv' => 112, 'oehdpickfmattype' => 113, 'oehdinvcfmattype' => 114, 'oehdcashamt' => 115, 'oehdcheckamt' => 116, 'oehdchecknbr' => 117, 'oehddepositamt' => 118, 'oehddepositnbr' => 119, 'oehdccamt' => 120, 'oehdotaxsub' => 121, 'oehdonontaxsub' => 122, 'oehdotaxtot' => 123, 'oehdoordrtot' => 124, 'oehdpickprintdate' => 125, 'oehdpickprinttime' => 126, 'oehdcont' => 127, 'oehdcontteleintl' => 128, 'oehdconttelenbr' => 129, 'oehdcontteleext' => 130, 'oehdcontfaxintl' => 131, 'oehdcontfaxnbr' => 132, 'oehdmailid' => 133, 'oehdchgdue' => 134, 'oehdaddlpricdisc' => 135, 'oehdallship' => 136, 'oehdqtyorderamt' => 137, 'oehdqtytaxtot' => 138, 'oehdqtyfrtin' => 139, 'oehdorideshipcomp' => 140, 'oehdcontemail' => 141, 'oehdmanualfrt' => 142, 'oehdinternalfrt' => 143, 'oehdfrtcost' => 144, 'oehdroute' => 145, 'oehdrouteseq' => 146, 'oehdfrttaxcode1' => 147, 'oehdfrttaxamt1' => 148, 'oehdfrttaxcode2' => 149, 'oehdfrttaxamt2' => 150, 'oehdfrttaxcode3' => 151, 'oehdfrttaxamt3' => 152, 'oehdfrttaxcode4' => 153, 'oehdfrttaxamt4' => 154, 'oehdfrttaxcode5' => 155, 'oehdfrttaxamt5' => 156, 'oehdedi855sent' => 157, 'oehdfrt3rdparty' => 158, 'oehdfob' => 159, 'oehdconfirmimagyn' => 160, 'oehdcstkconsign' => 161, 'oehdstoreid' => 162, 'oehdpickqueue' => 163, 'oehdarrvdate' => 164, 'oehdsurchgstat' => 165, 'oehdfrtgrup' => 166, 'dateupdtd' => 167, 'timeupdtd' => 168, 'dummy' => 169, ),
        self::TYPE_COLNAME       => array(SoHeaderTableMap::COL_OEHDNBR => 0, SoHeaderTableMap::COL_OEHDSTAT => 1, SoHeaderTableMap::COL_OEHDHOLD => 2, SoHeaderTableMap::COL_ARCUCUSTID => 3, SoHeaderTableMap::COL_ARSTSHIPID => 4, SoHeaderTableMap::COL_OEHDSTLASTNAME => 5, SoHeaderTableMap::COL_OEHDSTFIRSTNAME => 6, SoHeaderTableMap::COL_OEHDSTADR1 => 7, SoHeaderTableMap::COL_OEHDSTADR2 => 8, SoHeaderTableMap::COL_OEHDSTADR3 => 9, SoHeaderTableMap::COL_OEHDSTCTRY => 10, SoHeaderTableMap::COL_OEHDSTCITY => 11, SoHeaderTableMap::COL_OEHDSTSTAT => 12, SoHeaderTableMap::COL_OEHDSTZIPCODE => 13, SoHeaderTableMap::COL_OEHDCUSTPO => 14, SoHeaderTableMap::COL_OEHDORDRDATE => 15, SoHeaderTableMap::COL_ARTMTERMCD => 16, SoHeaderTableMap::COL_ARTBSHIPVIA => 17, SoHeaderTableMap::COL_ARININVNBR => 18, SoHeaderTableMap::COL_OEHDINVDATE => 19, SoHeaderTableMap::COL_OEHDGLPD => 20, SoHeaderTableMap::COL_ARSPSALEPER1 => 21, SoHeaderTableMap::COL_OEHDSP1PCT => 22, SoHeaderTableMap::COL_ARSPSALEPER2 => 23, SoHeaderTableMap::COL_OEHDSP2PCT => 24, SoHeaderTableMap::COL_ARSPSALEPER3 => 25, SoHeaderTableMap::COL_OEHDSP3PCT => 26, SoHeaderTableMap::COL_OEHDCNTRNBR => 27, SoHeaderTableMap::COL_OEHDDROPRELHOLD => 28, SoHeaderTableMap::COL_OEHDTAXSUB => 29, SoHeaderTableMap::COL_OEHDNONTAXSUB => 30, SoHeaderTableMap::COL_OEHDTAXTOT => 31, SoHeaderTableMap::COL_OEHDFRTTOT => 32, SoHeaderTableMap::COL_OEHDMISCTOT => 33, SoHeaderTableMap::COL_OEHDORDRTOT => 34, SoHeaderTableMap::COL_OEHDCOSTTOT => 35, SoHeaderTableMap::COL_OEHDSPCOMMLOCK => 36, SoHeaderTableMap::COL_OEHDTAKENDATE => 37, SoHeaderTableMap::COL_OEHDTAKENTIME => 38, SoHeaderTableMap::COL_OEHDPICKDATE => 39, SoHeaderTableMap::COL_OEHDPICKTIME => 40, SoHeaderTableMap::COL_OEHDPACKDATE => 41, SoHeaderTableMap::COL_OEHDPACKTIME => 42, SoHeaderTableMap::COL_OEHDVERIFYDATE => 43, SoHeaderTableMap::COL_OEHDVERIFYTIME => 44, SoHeaderTableMap::COL_OEHDCREDITMEMO => 45, SoHeaderTableMap::COL_OEHDBOOKEDYN => 46, SoHeaderTableMap::COL_INTBWHSEORIG => 47, SoHeaderTableMap::COL_OEHDBTSTAT => 48, SoHeaderTableMap::COL_OEHDSHIPCOMP => 49, SoHeaderTableMap::COL_OEHDCWOFLAG => 50, SoHeaderTableMap::COL_OEHDDIVISION => 51, SoHeaderTableMap::COL_OEHDTAKENCODE => 52, SoHeaderTableMap::COL_OEHDPICKCODE => 53, SoHeaderTableMap::COL_OEHDPACKCODE => 54, SoHeaderTableMap::COL_OEHDVERIFYCODE => 55, SoHeaderTableMap::COL_OEHDTOTDISC => 56, SoHeaderTableMap::COL_OEHDEDIREFNBRQUAL => 57, SoHeaderTableMap::COL_OEHDUSERCODE1 => 58, SoHeaderTableMap::COL_OEHDUSERCODE2 => 59, SoHeaderTableMap::COL_OEHDUSERCODE3 => 60, SoHeaderTableMap::COL_OEHDUSERCODE4 => 61, SoHeaderTableMap::COL_OEHDEXCHCTRY => 62, SoHeaderTableMap::COL_OEHDEXCHRATE => 63, SoHeaderTableMap::COL_OEHDWGHT => 64, SoHeaderTableMap::COL_OEHDQBPACKER => 65, SoHeaderTableMap::COL_OEHDQBLABELER1 => 66, SoHeaderTableMap::COL_OEHDQBLABELER2 => 67, SoHeaderTableMap::COL_OEHDBOXCOUNT => 68, SoHeaderTableMap::COL_OEHDRQSTDATE => 69, SoHeaderTableMap::COL_OEHDCANCDATE => 70, SoHeaderTableMap::COL_OEHDCRNTUSER => 71, SoHeaderTableMap::COL_OEHDRELEASENBR => 72, SoHeaderTableMap::COL_INTBWHSE => 73, SoHeaderTableMap::COL_OEHDBORDBUILDDATE => 74, SoHeaderTableMap::COL_OEHDDEPTCODE => 75, SoHeaderTableMap::COL_OEHDFRTINENTERED => 76, SoHeaderTableMap::COL_DROPSHIPENTERED => 77, SoHeaderTableMap::COL_OEHDERFLAG => 78, SoHeaderTableMap::COL_OEHDFRTIN => 79, SoHeaderTableMap::COL_OEHDDROPSHIP => 80, SoHeaderTableMap::COL_OEHDMINORDER => 81, SoHeaderTableMap::COL_OEHDCONTRACTTERMS => 82, SoHeaderTableMap::COL_OEHDDISCDATE1 => 83, SoHeaderTableMap::COL_OEHDDISCPCT1 => 84, SoHeaderTableMap::COL_OEHDDUEDATE1 => 85, SoHeaderTableMap::COL_OEHDDUEAMT1 => 86, SoHeaderTableMap::COL_OEHDDUEPCT1 => 87, SoHeaderTableMap::COL_OEHDDISCDATE2 => 88, SoHeaderTableMap::COL_OEHDDISCPCT2 => 89, SoHeaderTableMap::COL_OEHDDUEDATE2 => 90, SoHeaderTableMap::COL_OEHDDUEAMT2 => 91, SoHeaderTableMap::COL_OEHDDUEPCT2 => 92, SoHeaderTableMap::COL_OEHDDISCDATE3 => 93, SoHeaderTableMap::COL_OEHDDISCPCT3 => 94, SoHeaderTableMap::COL_OEHDDUEDATE3 => 95, SoHeaderTableMap::COL_OEHDDUEAMT3 => 96, SoHeaderTableMap::COL_OEHDDUEPCT3 => 97, SoHeaderTableMap::COL_OEHDDISCDATE4 => 98, SoHeaderTableMap::COL_OEHDDISCPCT4 => 99, SoHeaderTableMap::COL_OEHDDUEDATE4 => 100, SoHeaderTableMap::COL_OEHDDUEAMT4 => 101, SoHeaderTableMap::COL_OEHDDUEPCT4 => 102, SoHeaderTableMap::COL_OEHDDISCDATE5 => 103, SoHeaderTableMap::COL_OEHDDISCPCT5 => 104, SoHeaderTableMap::COL_OEHDDUEDATE5 => 105, SoHeaderTableMap::COL_OEHDDUEAMT5 => 106, SoHeaderTableMap::COL_OEHDDUEPCT5 => 107, SoHeaderTableMap::COL_OEHDDROPSHIPBILLED => 108, SoHeaderTableMap::COL_OEHDORDTYP => 109, SoHeaderTableMap::COL_OEHDTRACKNBR => 110, SoHeaderTableMap::COL_OEHDSOURCE => 111, SoHeaderTableMap::COL_OEHDCCAPRV => 112, SoHeaderTableMap::COL_OEHDPICKFMATTYPE => 113, SoHeaderTableMap::COL_OEHDINVCFMATTYPE => 114, SoHeaderTableMap::COL_OEHDCASHAMT => 115, SoHeaderTableMap::COL_OEHDCHECKAMT => 116, SoHeaderTableMap::COL_OEHDCHECKNBR => 117, SoHeaderTableMap::COL_OEHDDEPOSITAMT => 118, SoHeaderTableMap::COL_OEHDDEPOSITNBR => 119, SoHeaderTableMap::COL_OEHDCCAMT => 120, SoHeaderTableMap::COL_OEHDOTAXSUB => 121, SoHeaderTableMap::COL_OEHDONONTAXSUB => 122, SoHeaderTableMap::COL_OEHDOTAXTOT => 123, SoHeaderTableMap::COL_OEHDOORDRTOT => 124, SoHeaderTableMap::COL_OEHDPICKPRINTDATE => 125, SoHeaderTableMap::COL_OEHDPICKPRINTTIME => 126, SoHeaderTableMap::COL_OEHDCONT => 127, SoHeaderTableMap::COL_OEHDCONTTELEINTL => 128, SoHeaderTableMap::COL_OEHDCONTTELENBR => 129, SoHeaderTableMap::COL_OEHDCONTTELEEXT => 130, SoHeaderTableMap::COL_OEHDCONTFAXINTL => 131, SoHeaderTableMap::COL_OEHDCONTFAXNBR => 132, SoHeaderTableMap::COL_OEHDMAILID => 133, SoHeaderTableMap::COL_OEHDCHGDUE => 134, SoHeaderTableMap::COL_OEHDADDLPRICDISC => 135, SoHeaderTableMap::COL_OEHDALLSHIP => 136, SoHeaderTableMap::COL_OEHDQTYORDERAMT => 137, SoHeaderTableMap::COL_OEHDQTYTAXTOT => 138, SoHeaderTableMap::COL_OEHDQTYFRTIN => 139, SoHeaderTableMap::COL_OEHDORIDESHIPCOMP => 140, SoHeaderTableMap::COL_OEHDCONTEMAIL => 141, SoHeaderTableMap::COL_OEHDMANUALFRT => 142, SoHeaderTableMap::COL_OEHDINTERNALFRT => 143, SoHeaderTableMap::COL_OEHDFRTCOST => 144, SoHeaderTableMap::COL_OEHDROUTE => 145, SoHeaderTableMap::COL_OEHDROUTESEQ => 146, SoHeaderTableMap::COL_OEHDFRTTAXCODE1 => 147, SoHeaderTableMap::COL_OEHDFRTTAXAMT1 => 148, SoHeaderTableMap::COL_OEHDFRTTAXCODE2 => 149, SoHeaderTableMap::COL_OEHDFRTTAXAMT2 => 150, SoHeaderTableMap::COL_OEHDFRTTAXCODE3 => 151, SoHeaderTableMap::COL_OEHDFRTTAXAMT3 => 152, SoHeaderTableMap::COL_OEHDFRTTAXCODE4 => 153, SoHeaderTableMap::COL_OEHDFRTTAXAMT4 => 154, SoHeaderTableMap::COL_OEHDFRTTAXCODE5 => 155, SoHeaderTableMap::COL_OEHDFRTTAXAMT5 => 156, SoHeaderTableMap::COL_OEHDEDI855SENT => 157, SoHeaderTableMap::COL_OEHDFRT3RDPARTY => 158, SoHeaderTableMap::COL_OEHDFOB => 159, SoHeaderTableMap::COL_OEHDCONFIRMIMAGYN => 160, SoHeaderTableMap::COL_OEHDCSTKCONSIGN => 161, SoHeaderTableMap::COL_OEHDSTOREID => 162, SoHeaderTableMap::COL_OEHDPICKQUEUE => 163, SoHeaderTableMap::COL_OEHDARRVDATE => 164, SoHeaderTableMap::COL_OEHDSURCHGSTAT => 165, SoHeaderTableMap::COL_OEHDFRTGRUP => 166, SoHeaderTableMap::COL_DATEUPDTD => 167, SoHeaderTableMap::COL_TIMEUPDTD => 168, SoHeaderTableMap::COL_DUMMY => 169, ),
        self::TYPE_FIELDNAME     => array('OehdNbr' => 0, 'OehdStat' => 1, 'OehdHold' => 2, 'ArcuCustId' => 3, 'ArstShipId' => 4, 'OehdStLastName' => 5, 'OehdStFirstName' => 6, 'OehdStAdr1' => 7, 'OehdStAdr2' => 8, 'OehdStAdr3' => 9, 'OehdStCtry' => 10, 'OehdStCity' => 11, 'OehdStStat' => 12, 'OehdStZipCode' => 13, 'OehdCustPo' => 14, 'OehdOrdrDate' => 15, 'ArtmTermCd' => 16, 'ArtbShipVia' => 17, 'ArinInvNbr' => 18, 'OehdInvDate' => 19, 'OehdGLPd' => 20, 'ArspSalePer1' => 21, 'OehdSp1Pct' => 22, 'ArspSalePer2' => 23, 'OehdSp2Pct' => 24, 'ArspSalePer3' => 25, 'OehdSp3Pct' => 26, 'OehdCntrNbr' => 27, 'OehdDropRelHold' => 28, 'OehdTaxSub' => 29, 'OehdNonTaxSub' => 30, 'OehdTaxTot' => 31, 'OehdFrtTot' => 32, 'OehdMiscTot' => 33, 'OehdOrdrTot' => 34, 'OehdCostTot' => 35, 'OehdSpCommLock' => 36, 'OehdTakenDate' => 37, 'OehdTakenTime' => 38, 'OehdPickDate' => 39, 'OehdPickTime' => 40, 'OehdPackDate' => 41, 'OehdPackTime' => 42, 'OehdVerifyDate' => 43, 'OehdVerifyTime' => 44, 'OehdCreditMemo' => 45, 'OehdBookedYn' => 46, 'IntbWhseOrig' => 47, 'OehdBtStat' => 48, 'OehdShipComp' => 49, 'OehdCwoFlag' => 50, 'OehdDivision' => 51, 'OehdTakenCode' => 52, 'OehdPickCode' => 53, 'OehdPackCode' => 54, 'OehdVerifyCode' => 55, 'OehdTotDisc' => 56, 'OehdEdiRefNbrQual' => 57, 'OehdUserCode1' => 58, 'OehdUserCode2' => 59, 'OehdUserCode3' => 60, 'OehdUserCode4' => 61, 'OehdExchCtry' => 62, 'OehdExchRate' => 63, 'OehdWght' => 64, 'OehdQbPacker' => 65, 'OehdQbLabeler1' => 66, 'OehdQbLabeler2' => 67, 'OehdBoxCount' => 68, 'OehdRqstDate' => 69, 'OehdCancDate' => 70, 'OehdCrntUser' => 71, 'OehdReleaseNbr' => 72, 'IntbWhse' => 73, 'OehdBordBuildDate' => 74, 'OehdDeptCode' => 75, 'OehdFrtInEntered' => 76, 'DropShipEntered' => 77, 'OehdErFlag' => 78, 'OehdFrtIn' => 79, 'OehdDropShip' => 80, 'OehdMinOrder' => 81, 'OehdContractTerms' => 82, 'OehdDiscDate1' => 83, 'OehdDiscPct1' => 84, 'OehdDueDate1' => 85, 'OehdDueAmt1' => 86, 'OehdDuePct1' => 87, 'OehdDiscDate2' => 88, 'OehdDiscPct2' => 89, 'OehdDueDate2' => 90, 'OehdDueAmt2' => 91, 'OehdDuePct2' => 92, 'OehdDiscDate3' => 93, 'OehdDiscPct3' => 94, 'OehdDueDate3' => 95, 'OehdDueAmt3' => 96, 'OehdDuePct3' => 97, 'OehdDiscDate4' => 98, 'OehdDiscPct4' => 99, 'OehdDueDate4' => 100, 'OehdDueAmt4' => 101, 'OehdDuePct4' => 102, 'OehdDiscDate5' => 103, 'OehdDiscPct5' => 104, 'OehdDueDate5' => 105, 'OehdDueAmt5' => 106, 'OehdDuePct5' => 107, 'OehdDropShipBilled' => 108, 'OehdOrdTyp' => 109, 'OehdTrackNbr' => 110, 'OehdSource' => 111, 'OehdCcAprv' => 112, 'OehdPickFmatType' => 113, 'OehdInvcFmatType' => 114, 'OehdCashAmt' => 115, 'OehdCheckAmt' => 116, 'OehdCheckNbr' => 117, 'OehdDepositAmt' => 118, 'OehdDepositNbr' => 119, 'OehdCcAmt' => 120, 'OehdOTaxSub' => 121, 'OehdONonTaxSub' => 122, 'OehdOTaxTot' => 123, 'OehdOOrdrTot' => 124, 'OehdPickPrintDate' => 125, 'OehdPickPrintTime' => 126, 'OehdCont' => 127, 'OehdContTeleIntl' => 128, 'OehdContTeleNbr' => 129, 'OehdContTeleExt' => 130, 'OehdContFaxIntl' => 131, 'OehdContFaxNbr' => 132, 'OehdMailId' => 133, 'OehdChgDue' => 134, 'OehdAddlPricDisc' => 135, 'OehdAllShip' => 136, 'OehdQtyOrderAmt' => 137, 'OehdQtyTaxTot' => 138, 'OehdQtyFrtIn' => 139, 'OehdOrideShipComp' => 140, 'OehdContEmail' => 141, 'OehdManualFrt' => 142, 'OehdInternalFrt' => 143, 'OehdFrtCost' => 144, 'OehdRoute' => 145, 'OehdRouteSeq' => 146, 'OehdFrtTaxCode1' => 147, 'OehdFrtTaxAmt1' => 148, 'OehdFrtTaxCode2' => 149, 'OehdFrtTaxAmt2' => 150, 'OehdFrtTaxCode3' => 151, 'OehdFrtTaxAmt3' => 152, 'OehdFrtTaxCode4' => 153, 'OehdFrtTaxAmt4' => 154, 'OehdFrtTaxCode5' => 155, 'OehdFrtTaxAmt5' => 156, 'OehdEdi855Sent' => 157, 'OehdFrt3rdParty' => 158, 'OehdFob' => 159, 'OehdConfirmImagYn' => 160, 'OehdCstkConsign' => 161, 'OehdStoreId' => 162, 'OehdPickQueue' => 163, 'OehdArrvDate' => 164, 'OehdSurchgStat' => 165, 'OehdFrtGrup' => 166, 'DateUpdtd' => 167, 'TimeUpdtd' => 168, 'dummy' => 169, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('SO_HEADER');
        $this->setPhpName('SoHeader');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SoHeader');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('OehdNbr', 'Oehdnbr', 'INTEGER', true, 10, 0);
        $this->addColumn('OehdStat', 'Oehdstat', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdHold', 'Oehdhold', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuCustId', 'Arcucustid', 'VARCHAR', false, 6, null);
        $this->addColumn('ArstShipId', 'Arstshipid', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdStLastName', 'Oehdstlastname', 'VARCHAR', false, 15, null);
        $this->addColumn('OehdStFirstName', 'Oehdstfirstname', 'VARCHAR', false, 14, null);
        $this->addColumn('OehdStAdr1', 'Oehdstadr1', 'VARCHAR', false, 45, null);
        $this->addColumn('OehdStAdr2', 'Oehdstadr2', 'VARCHAR', false, 30, null);
        $this->addColumn('OehdStAdr3', 'Oehdstadr3', 'VARCHAR', false, 30, null);
        $this->addColumn('OehdStCtry', 'Oehdstctry', 'VARCHAR', false, 4, null);
        $this->addColumn('OehdStCity', 'Oehdstcity', 'VARCHAR', false, 16, null);
        $this->addColumn('OehdStStat', 'Oehdststat', 'VARCHAR', false, 2, null);
        $this->addColumn('OehdStZipCode', 'Oehdstzipcode', 'VARCHAR', false, 10, null);
        $this->addColumn('OehdCustPo', 'Oehdcustpo', 'VARCHAR', false, 20, null);
        $this->addColumn('OehdOrdrDate', 'Oehdordrdate', 'INTEGER', false, 8, null);
        $this->addColumn('ArtmTermCd', 'Artmtermcd', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtbShipVia', 'Artbshipvia', 'VARCHAR', false, 4, null);
        $this->addColumn('ArinInvNbr', 'Arininvnbr', 'INTEGER', false, 10, null);
        $this->addColumn('OehdInvDate', 'Oehdinvdate', 'INTEGER', false, 8, null);
        $this->addColumn('OehdGLPd', 'Oehdglpd', 'INTEGER', false, 2, null);
        $this->addColumn('ArspSalePer1', 'Arspsaleper1', 'VARCHAR', false, 4, null);
        $this->addColumn('OehdSp1Pct', 'Oehdsp1pct', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspSalePer2', 'Arspsaleper2', 'VARCHAR', false, 4, null);
        $this->addColumn('OehdSp2Pct', 'Oehdsp2pct', 'DECIMAL', false, 20, null);
        $this->addColumn('ArspSalePer3', 'Arspsaleper3', 'VARCHAR', false, 4, null);
        $this->addColumn('OehdSp3Pct', 'Oehdsp3pct', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdCntrNbr', 'Oehdcntrnbr', 'INTEGER', false, 8, null);
        $this->addColumn('OehdDropRelHold', 'Oehddroprelhold', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdTaxSub', 'Oehdtaxsub', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdNonTaxSub', 'Oehdnontaxsub', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdTaxTot', 'Oehdtaxtot', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdFrtTot', 'Oehdfrttot', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdMiscTot', 'Oehdmisctot', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdOrdrTot', 'Oehdordrtot', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdCostTot', 'Oehdcosttot', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdSpCommLock', 'Oehdspcommlock', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdTakenDate', 'Oehdtakendate', 'INTEGER', false, 8, null);
        $this->addColumn('OehdTakenTime', 'Oehdtakentime', 'INTEGER', false, 4, null);
        $this->addColumn('OehdPickDate', 'Oehdpickdate', 'INTEGER', false, 8, null);
        $this->addColumn('OehdPickTime', 'Oehdpicktime', 'INTEGER', false, 4, null);
        $this->addColumn('OehdPackDate', 'Oehdpackdate', 'INTEGER', false, 8, null);
        $this->addColumn('OehdPackTime', 'Oehdpacktime', 'INTEGER', false, 4, null);
        $this->addColumn('OehdVerifyDate', 'Oehdverifydate', 'INTEGER', false, 8, null);
        $this->addColumn('OehdVerifyTime', 'Oehdverifytime', 'INTEGER', false, 4, null);
        $this->addColumn('OehdCreditMemo', 'Oehdcreditmemo', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdBookedYn', 'Oehdbookedyn', 'VARCHAR', false, 1, null);
        $this->addColumn('IntbWhseOrig', 'Intbwhseorig', 'VARCHAR', false, 2, null);
        $this->addColumn('OehdBtStat', 'Oehdbtstat', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdShipComp', 'Oehdshipcomp', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdCwoFlag', 'Oehdcwoflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdDivision', 'Oehddivision', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdTakenCode', 'Oehdtakencode', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdPickCode', 'Oehdpickcode', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdPackCode', 'Oehdpackcode', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdVerifyCode', 'Oehdverifycode', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdTotDisc', 'Oehdtotdisc', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdEdiRefNbrQual', 'Oehdedirefnbrqual', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdUserCode1', 'Oehdusercode1', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdUserCode2', 'Oehdusercode2', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdUserCode3', 'Oehdusercode3', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdUserCode4', 'Oehdusercode4', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdExchCtry', 'Oehdexchctry', 'VARCHAR', false, 4, null);
        $this->addColumn('OehdExchRate', 'Oehdexchrate', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdWght', 'Oehdwght', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdQbPacker', 'Oehdqbpacker', 'VARCHAR', false, 4, null);
        $this->addColumn('OehdQbLabeler1', 'Oehdqblabeler1', 'VARCHAR', false, 4, null);
        $this->addColumn('OehdQbLabeler2', 'Oehdqblabeler2', 'VARCHAR', false, 4, null);
        $this->addColumn('OehdBoxCount', 'Oehdboxcount', 'INTEGER', false, 5, null);
        $this->addColumn('OehdRqstDate', 'Oehdrqstdate', 'INTEGER', false, 8, null);
        $this->addColumn('OehdCancDate', 'Oehdcancdate', 'INTEGER', false, 8, null);
        $this->addColumn('OehdCrntUser', 'Oehdcrntuser', 'VARCHAR', false, 12, null);
        $this->addColumn('OehdReleaseNbr', 'Oehdreleasenbr', 'VARCHAR', false, 20, null);
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('OehdBordBuildDate', 'Oehdbordbuilddate', 'INTEGER', false, 8, null);
        $this->addColumn('OehdDeptCode', 'Oehddeptcode', 'VARCHAR', false, 12, null);
        $this->addColumn('OehdFrtInEntered', 'Oehdfrtinentered', 'VARCHAR', false, 1, null);
        $this->addColumn('DropShipEntered', 'Dropshipentered', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdErFlag', 'Oehderflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdFrtIn', 'Oehdfrtin', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDropShip', 'Oehddropship', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdMinOrder', 'Oehdminorder', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdContractTerms', 'Oehdcontractterms', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdDiscDate1', 'Oehddiscdate1', 'INTEGER', false, 8, null);
        $this->addColumn('OehdDiscPct1', 'Oehddiscpct1', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDueDate1', 'Oehdduedate1', 'INTEGER', false, 8, null);
        $this->addColumn('OehdDueAmt1', 'Oehddueamt1', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDuePct1', 'Oehdduepct1', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDiscDate2', 'Oehddiscdate2', 'INTEGER', false, 8, null);
        $this->addColumn('OehdDiscPct2', 'Oehddiscpct2', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDueDate2', 'Oehdduedate2', 'INTEGER', false, 8, null);
        $this->addColumn('OehdDueAmt2', 'Oehddueamt2', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDuePct2', 'Oehdduepct2', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDiscDate3', 'Oehddiscdate3', 'INTEGER', false, 8, null);
        $this->addColumn('OehdDiscPct3', 'Oehddiscpct3', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDueDate3', 'Oehdduedate3', 'INTEGER', false, 8, null);
        $this->addColumn('OehdDueAmt3', 'Oehddueamt3', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDuePct3', 'Oehdduepct3', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDiscDate4', 'Oehddiscdate4', 'INTEGER', false, 8, null);
        $this->addColumn('OehdDiscPct4', 'Oehddiscpct4', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDueDate4', 'Oehdduedate4', 'INTEGER', false, 8, null);
        $this->addColumn('OehdDueAmt4', 'Oehddueamt4', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDuePct4', 'Oehdduepct4', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDiscDate5', 'Oehddiscdate5', 'INTEGER', false, 8, null);
        $this->addColumn('OehdDiscPct5', 'Oehddiscpct5', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDueDate5', 'Oehdduedate5', 'INTEGER', false, 8, null);
        $this->addColumn('OehdDueAmt5', 'Oehddueamt5', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDuePct5', 'Oehdduepct5', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDropShipBilled', 'Oehddropshipbilled', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdOrdTyp', 'Oehdordtyp', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdTrackNbr', 'Oehdtracknbr', 'VARCHAR', false, 15, null);
        $this->addColumn('OehdSource', 'Oehdsource', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdCcAprv', 'Oehdccaprv', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdPickFmatType', 'Oehdpickfmattype', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdInvcFmatType', 'Oehdinvcfmattype', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdCashAmt', 'Oehdcashamt', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdCheckAmt', 'Oehdcheckamt', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdCheckNbr', 'Oehdchecknbr', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdDepositAmt', 'Oehddepositamt', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdDepositNbr', 'Oehddepositnbr', 'VARCHAR', false, 8, null);
        $this->addColumn('OehdCcAmt', 'Oehdccamt', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdOTaxSub', 'Oehdotaxsub', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdONonTaxSub', 'Oehdonontaxsub', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdOTaxTot', 'Oehdotaxtot', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdOOrdrTot', 'Oehdoordrtot', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdPickPrintDate', 'Oehdpickprintdate', 'INTEGER', false, 8, null);
        $this->addColumn('OehdPickPrintTime', 'Oehdpickprinttime', 'INTEGER', false, 4, null);
        $this->addColumn('OehdCont', 'Oehdcont', 'VARCHAR', false, 20, null);
        $this->addColumn('OehdContTeleIntl', 'Oehdcontteleintl', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdContTeleNbr', 'Oehdconttelenbr', 'VARCHAR', false, 10, null);
        $this->addColumn('OehdContTeleExt', 'Oehdcontteleext', 'VARCHAR', false, 7, null);
        $this->addColumn('OehdContFaxIntl', 'Oehdcontfaxintl', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdContFaxNbr', 'Oehdcontfaxnbr', 'INTEGER', false, 22, null);
        $this->addColumn('OehdMailId', 'Oehdmailid', 'VARCHAR', false, 10, null);
        $this->addColumn('OehdChgDue', 'Oehdchgdue', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdAddlPricDisc', 'Oehdaddlpricdisc', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdAllShip', 'Oehdallship', 'VARCHAR', false, 10, null);
        $this->addColumn('OehdQtyOrderAmt', 'Oehdqtyorderamt', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdQtyTaxTot', 'Oehdqtytaxtot', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdQtyFrtIn', 'Oehdqtyfrtin', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdOrideShipComp', 'Oehdorideshipcomp', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdContEmail', 'Oehdcontemail', 'VARCHAR', false, 50, null);
        $this->addColumn('OehdManualFrt', 'Oehdmanualfrt', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdInternalFrt', 'Oehdinternalfrt', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdFrtCost', 'Oehdfrtcost', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdRoute', 'Oehdroute', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdRouteSeq', 'Oehdrouteseq', 'INTEGER', false, 4, null);
        $this->addColumn('OehdFrtTaxCode1', 'Oehdfrttaxcode1', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdFrtTaxAmt1', 'Oehdfrttaxamt1', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdFrtTaxCode2', 'Oehdfrttaxcode2', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdFrtTaxAmt2', 'Oehdfrttaxamt2', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdFrtTaxCode3', 'Oehdfrttaxcode3', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdFrtTaxAmt3', 'Oehdfrttaxamt3', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdFrtTaxCode4', 'Oehdfrttaxcode4', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdFrtTaxAmt4', 'Oehdfrttaxamt4', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdFrtTaxCode5', 'Oehdfrttaxcode5', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdFrtTaxAmt5', 'Oehdfrttaxamt5', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdEdi855Sent', 'Oehdedi855sent', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdFrt3rdParty', 'Oehdfrt3rdparty', 'DECIMAL', false, 20, null);
        $this->addColumn('OehdFob', 'Oehdfob', 'VARCHAR', false, 15, null);
        $this->addColumn('OehdConfirmImagYn', 'Oehdconfirmimagyn', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdCstkConsign', 'Oehdcstkconsign', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdStoreId', 'Oehdstoreid', 'VARCHAR', false, 6, null);
        $this->addColumn('OehdPickQueue', 'Oehdpickqueue', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdArrvDate', 'Oehdarrvdate', 'INTEGER', false, 8, null);
        $this->addColumn('OehdSurchgStat', 'Oehdsurchgstat', 'VARCHAR', false, 1, null);
        $this->addColumn('OehdFrtGrup', 'Oehdfrtgrup', 'VARCHAR', false, 2, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'INTEGER', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'INTEGER', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SoDetail', '\\SoDetail', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':OehdNbr',
    1 => ':OehdNbr',
  ),
), null, null, 'SoDetails', false);
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? SoHeaderTableMap::CLASS_DEFAULT : SoHeaderTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (SoHeader object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SoHeaderTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SoHeaderTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SoHeaderTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SoHeaderTableMap::OM_CLASS;
            /** @var SoHeader $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SoHeaderTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = SoHeaderTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SoHeaderTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SoHeader $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SoHeaderTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDNBR);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTAT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDHOLD);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_ARSTSHIPID);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTLASTNAME);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTFIRSTNAME);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTADR1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTADR2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTADR3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTCTRY);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTCITY);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTSTAT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTZIPCODE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCUSTPO);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDORDRDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_ARTMTERMCD);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_ARTBSHIPVIA);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_ARININVNBR);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDINVDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDGLPD);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_ARSPSALEPER1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSP1PCT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_ARSPSALEPER2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSP2PCT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_ARSPSALEPER3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSP3PCT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCNTRNBR);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDROPRELHOLD);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDTAXSUB);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDNONTAXSUB);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDTAXTOT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTOT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDMISCTOT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDORDRTOT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCOSTTOT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSPCOMMLOCK);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDTAKENDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDTAKENTIME);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPICKDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPICKTIME);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPACKDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPACKTIME);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDVERIFYDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDVERIFYTIME);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCREDITMEMO);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDBOOKEDYN);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_INTBWHSEORIG);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDBTSTAT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSHIPCOMP);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCWOFLAG);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDIVISION);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDTAKENCODE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPICKCODE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPACKCODE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDVERIFYCODE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDTOTDISC);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDEDIREFNBRQUAL);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDUSERCODE1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDUSERCODE2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDUSERCODE3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDUSERCODE4);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDEXCHCTRY);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDEXCHRATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDWGHT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDQBPACKER);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDQBLABELER1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDQBLABELER2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDBOXCOUNT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDRQSTDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCANCDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCRNTUSER);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDRELEASENBR);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDBORDBUILDDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDEPTCODE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTINENTERED);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_DROPSHIPENTERED);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDERFLAG);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTIN);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDROPSHIP);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDMINORDER);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCONTRACTTERMS);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCDATE1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCPCT1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEDATE1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEAMT1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEPCT1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCDATE2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCPCT2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEDATE2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEAMT2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEPCT2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCDATE3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCPCT3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEDATE3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEAMT3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEPCT3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCDATE4);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCPCT4);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEDATE4);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEAMT4);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEPCT4);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCDATE5);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDISCPCT5);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEDATE5);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEAMT5);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDUEPCT5);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDROPSHIPBILLED);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDORDTYP);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDTRACKNBR);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSOURCE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCCAPRV);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPICKFMATTYPE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDINVCFMATTYPE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCASHAMT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCHECKAMT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCHECKNBR);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDEPOSITAMT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDDEPOSITNBR);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCCAMT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDOTAXSUB);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDONONTAXSUB);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDOTAXTOT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDOORDRTOT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPICKPRINTDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPICKPRINTTIME);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCONT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCONTTELEINTL);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCONTTELENBR);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCONTTELEEXT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCONTFAXINTL);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCONTFAXNBR);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDMAILID);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCHGDUE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDADDLPRICDISC);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDALLSHIP);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDQTYORDERAMT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDQTYTAXTOT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDQTYFRTIN);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDORIDESHIPCOMP);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCONTEMAIL);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDMANUALFRT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDINTERNALFRT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTCOST);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDROUTE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDROUTESEQ);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXCODE1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXAMT1);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXCODE2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXAMT2);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXCODE3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXAMT3);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXCODE4);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXAMT4);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXCODE5);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTTAXAMT5);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDEDI855SENT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRT3RDPARTY);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFOB);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCONFIRMIMAGYN);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDCSTKCONSIGN);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSTOREID);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDPICKQUEUE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDARRVDATE);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDSURCHGSTAT);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_OEHDFRTGRUP);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SoHeaderTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.OehdNbr');
            $criteria->addSelectColumn($alias . '.OehdStat');
            $criteria->addSelectColumn($alias . '.OehdHold');
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArstShipId');
            $criteria->addSelectColumn($alias . '.OehdStLastName');
            $criteria->addSelectColumn($alias . '.OehdStFirstName');
            $criteria->addSelectColumn($alias . '.OehdStAdr1');
            $criteria->addSelectColumn($alias . '.OehdStAdr2');
            $criteria->addSelectColumn($alias . '.OehdStAdr3');
            $criteria->addSelectColumn($alias . '.OehdStCtry');
            $criteria->addSelectColumn($alias . '.OehdStCity');
            $criteria->addSelectColumn($alias . '.OehdStStat');
            $criteria->addSelectColumn($alias . '.OehdStZipCode');
            $criteria->addSelectColumn($alias . '.OehdCustPo');
            $criteria->addSelectColumn($alias . '.OehdOrdrDate');
            $criteria->addSelectColumn($alias . '.ArtmTermCd');
            $criteria->addSelectColumn($alias . '.ArtbShipVia');
            $criteria->addSelectColumn($alias . '.ArinInvNbr');
            $criteria->addSelectColumn($alias . '.OehdInvDate');
            $criteria->addSelectColumn($alias . '.OehdGLPd');
            $criteria->addSelectColumn($alias . '.ArspSalePer1');
            $criteria->addSelectColumn($alias . '.OehdSp1Pct');
            $criteria->addSelectColumn($alias . '.ArspSalePer2');
            $criteria->addSelectColumn($alias . '.OehdSp2Pct');
            $criteria->addSelectColumn($alias . '.ArspSalePer3');
            $criteria->addSelectColumn($alias . '.OehdSp3Pct');
            $criteria->addSelectColumn($alias . '.OehdCntrNbr');
            $criteria->addSelectColumn($alias . '.OehdDropRelHold');
            $criteria->addSelectColumn($alias . '.OehdTaxSub');
            $criteria->addSelectColumn($alias . '.OehdNonTaxSub');
            $criteria->addSelectColumn($alias . '.OehdTaxTot');
            $criteria->addSelectColumn($alias . '.OehdFrtTot');
            $criteria->addSelectColumn($alias . '.OehdMiscTot');
            $criteria->addSelectColumn($alias . '.OehdOrdrTot');
            $criteria->addSelectColumn($alias . '.OehdCostTot');
            $criteria->addSelectColumn($alias . '.OehdSpCommLock');
            $criteria->addSelectColumn($alias . '.OehdTakenDate');
            $criteria->addSelectColumn($alias . '.OehdTakenTime');
            $criteria->addSelectColumn($alias . '.OehdPickDate');
            $criteria->addSelectColumn($alias . '.OehdPickTime');
            $criteria->addSelectColumn($alias . '.OehdPackDate');
            $criteria->addSelectColumn($alias . '.OehdPackTime');
            $criteria->addSelectColumn($alias . '.OehdVerifyDate');
            $criteria->addSelectColumn($alias . '.OehdVerifyTime');
            $criteria->addSelectColumn($alias . '.OehdCreditMemo');
            $criteria->addSelectColumn($alias . '.OehdBookedYn');
            $criteria->addSelectColumn($alias . '.IntbWhseOrig');
            $criteria->addSelectColumn($alias . '.OehdBtStat');
            $criteria->addSelectColumn($alias . '.OehdShipComp');
            $criteria->addSelectColumn($alias . '.OehdCwoFlag');
            $criteria->addSelectColumn($alias . '.OehdDivision');
            $criteria->addSelectColumn($alias . '.OehdTakenCode');
            $criteria->addSelectColumn($alias . '.OehdPickCode');
            $criteria->addSelectColumn($alias . '.OehdPackCode');
            $criteria->addSelectColumn($alias . '.OehdVerifyCode');
            $criteria->addSelectColumn($alias . '.OehdTotDisc');
            $criteria->addSelectColumn($alias . '.OehdEdiRefNbrQual');
            $criteria->addSelectColumn($alias . '.OehdUserCode1');
            $criteria->addSelectColumn($alias . '.OehdUserCode2');
            $criteria->addSelectColumn($alias . '.OehdUserCode3');
            $criteria->addSelectColumn($alias . '.OehdUserCode4');
            $criteria->addSelectColumn($alias . '.OehdExchCtry');
            $criteria->addSelectColumn($alias . '.OehdExchRate');
            $criteria->addSelectColumn($alias . '.OehdWght');
            $criteria->addSelectColumn($alias . '.OehdQbPacker');
            $criteria->addSelectColumn($alias . '.OehdQbLabeler1');
            $criteria->addSelectColumn($alias . '.OehdQbLabeler2');
            $criteria->addSelectColumn($alias . '.OehdBoxCount');
            $criteria->addSelectColumn($alias . '.OehdRqstDate');
            $criteria->addSelectColumn($alias . '.OehdCancDate');
            $criteria->addSelectColumn($alias . '.OehdCrntUser');
            $criteria->addSelectColumn($alias . '.OehdReleaseNbr');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.OehdBordBuildDate');
            $criteria->addSelectColumn($alias . '.OehdDeptCode');
            $criteria->addSelectColumn($alias . '.OehdFrtInEntered');
            $criteria->addSelectColumn($alias . '.DropShipEntered');
            $criteria->addSelectColumn($alias . '.OehdErFlag');
            $criteria->addSelectColumn($alias . '.OehdFrtIn');
            $criteria->addSelectColumn($alias . '.OehdDropShip');
            $criteria->addSelectColumn($alias . '.OehdMinOrder');
            $criteria->addSelectColumn($alias . '.OehdContractTerms');
            $criteria->addSelectColumn($alias . '.OehdDiscDate1');
            $criteria->addSelectColumn($alias . '.OehdDiscPct1');
            $criteria->addSelectColumn($alias . '.OehdDueDate1');
            $criteria->addSelectColumn($alias . '.OehdDueAmt1');
            $criteria->addSelectColumn($alias . '.OehdDuePct1');
            $criteria->addSelectColumn($alias . '.OehdDiscDate2');
            $criteria->addSelectColumn($alias . '.OehdDiscPct2');
            $criteria->addSelectColumn($alias . '.OehdDueDate2');
            $criteria->addSelectColumn($alias . '.OehdDueAmt2');
            $criteria->addSelectColumn($alias . '.OehdDuePct2');
            $criteria->addSelectColumn($alias . '.OehdDiscDate3');
            $criteria->addSelectColumn($alias . '.OehdDiscPct3');
            $criteria->addSelectColumn($alias . '.OehdDueDate3');
            $criteria->addSelectColumn($alias . '.OehdDueAmt3');
            $criteria->addSelectColumn($alias . '.OehdDuePct3');
            $criteria->addSelectColumn($alias . '.OehdDiscDate4');
            $criteria->addSelectColumn($alias . '.OehdDiscPct4');
            $criteria->addSelectColumn($alias . '.OehdDueDate4');
            $criteria->addSelectColumn($alias . '.OehdDueAmt4');
            $criteria->addSelectColumn($alias . '.OehdDuePct4');
            $criteria->addSelectColumn($alias . '.OehdDiscDate5');
            $criteria->addSelectColumn($alias . '.OehdDiscPct5');
            $criteria->addSelectColumn($alias . '.OehdDueDate5');
            $criteria->addSelectColumn($alias . '.OehdDueAmt5');
            $criteria->addSelectColumn($alias . '.OehdDuePct5');
            $criteria->addSelectColumn($alias . '.OehdDropShipBilled');
            $criteria->addSelectColumn($alias . '.OehdOrdTyp');
            $criteria->addSelectColumn($alias . '.OehdTrackNbr');
            $criteria->addSelectColumn($alias . '.OehdSource');
            $criteria->addSelectColumn($alias . '.OehdCcAprv');
            $criteria->addSelectColumn($alias . '.OehdPickFmatType');
            $criteria->addSelectColumn($alias . '.OehdInvcFmatType');
            $criteria->addSelectColumn($alias . '.OehdCashAmt');
            $criteria->addSelectColumn($alias . '.OehdCheckAmt');
            $criteria->addSelectColumn($alias . '.OehdCheckNbr');
            $criteria->addSelectColumn($alias . '.OehdDepositAmt');
            $criteria->addSelectColumn($alias . '.OehdDepositNbr');
            $criteria->addSelectColumn($alias . '.OehdCcAmt');
            $criteria->addSelectColumn($alias . '.OehdOTaxSub');
            $criteria->addSelectColumn($alias . '.OehdONonTaxSub');
            $criteria->addSelectColumn($alias . '.OehdOTaxTot');
            $criteria->addSelectColumn($alias . '.OehdOOrdrTot');
            $criteria->addSelectColumn($alias . '.OehdPickPrintDate');
            $criteria->addSelectColumn($alias . '.OehdPickPrintTime');
            $criteria->addSelectColumn($alias . '.OehdCont');
            $criteria->addSelectColumn($alias . '.OehdContTeleIntl');
            $criteria->addSelectColumn($alias . '.OehdContTeleNbr');
            $criteria->addSelectColumn($alias . '.OehdContTeleExt');
            $criteria->addSelectColumn($alias . '.OehdContFaxIntl');
            $criteria->addSelectColumn($alias . '.OehdContFaxNbr');
            $criteria->addSelectColumn($alias . '.OehdMailId');
            $criteria->addSelectColumn($alias . '.OehdChgDue');
            $criteria->addSelectColumn($alias . '.OehdAddlPricDisc');
            $criteria->addSelectColumn($alias . '.OehdAllShip');
            $criteria->addSelectColumn($alias . '.OehdQtyOrderAmt');
            $criteria->addSelectColumn($alias . '.OehdQtyTaxTot');
            $criteria->addSelectColumn($alias . '.OehdQtyFrtIn');
            $criteria->addSelectColumn($alias . '.OehdOrideShipComp');
            $criteria->addSelectColumn($alias . '.OehdContEmail');
            $criteria->addSelectColumn($alias . '.OehdManualFrt');
            $criteria->addSelectColumn($alias . '.OehdInternalFrt');
            $criteria->addSelectColumn($alias . '.OehdFrtCost');
            $criteria->addSelectColumn($alias . '.OehdRoute');
            $criteria->addSelectColumn($alias . '.OehdRouteSeq');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxCode1');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxAmt1');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxCode2');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxAmt2');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxCode3');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxAmt3');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxCode4');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxAmt4');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxCode5');
            $criteria->addSelectColumn($alias . '.OehdFrtTaxAmt5');
            $criteria->addSelectColumn($alias . '.OehdEdi855Sent');
            $criteria->addSelectColumn($alias . '.OehdFrt3rdParty');
            $criteria->addSelectColumn($alias . '.OehdFob');
            $criteria->addSelectColumn($alias . '.OehdConfirmImagYn');
            $criteria->addSelectColumn($alias . '.OehdCstkConsign');
            $criteria->addSelectColumn($alias . '.OehdStoreId');
            $criteria->addSelectColumn($alias . '.OehdPickQueue');
            $criteria->addSelectColumn($alias . '.OehdArrvDate');
            $criteria->addSelectColumn($alias . '.OehdSurchgStat');
            $criteria->addSelectColumn($alias . '.OehdFrtGrup');
            $criteria->addSelectColumn($alias . '.DateUpdtd');
            $criteria->addSelectColumn($alias . '.TimeUpdtd');
            $criteria->addSelectColumn($alias . '.dummy');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(SoHeaderTableMap::DATABASE_NAME)->getTable(SoHeaderTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SoHeaderTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SoHeaderTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SoHeaderTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SoHeader or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SoHeader object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoHeaderTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SoHeader) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SoHeaderTableMap::DATABASE_NAME);
            $criteria->add(SoHeaderTableMap::COL_OEHDNBR, (array) $values, Criteria::IN);
        }

        $query = SoHeaderQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SoHeaderTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SoHeaderTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the SO_HEADER table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SoHeaderQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SoHeader or Criteria object.
     *
     * @param mixed               $criteria Criteria or SoHeader object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoHeaderTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SoHeader object
        }


        // Set the correct dbName
        $query = SoHeaderQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SoHeaderTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SoHeaderTableMap::buildTableMap();
