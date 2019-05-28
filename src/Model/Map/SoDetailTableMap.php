<?php

namespace Map;

use \SoDetail;
use \SoDetailQuery;
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
 * This class defines the structure of the 'SO_DETAIL' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class SoDetailTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SoDetailTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'SO_DETAIL';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\SoDetail';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SoDetail';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 95;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 95;

    /**
     * the column name for the OehdNbr field
     */
    const COL_OEHDNBR = 'SO_DETAIL.OehdNbr';

    /**
     * the column name for the OedtLine field
     */
    const COL_OEDTLINE = 'SO_DETAIL.OedtLine';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'SO_DETAIL.InitItemNbr';

    /**
     * the column name for the OedtDesc field
     */
    const COL_OEDTDESC = 'SO_DETAIL.OedtDesc';

    /**
     * the column name for the OedtDesc2 field
     */
    const COL_OEDTDESC2 = 'SO_DETAIL.OedtDesc2';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'SO_DETAIL.IntbWhse';

    /**
     * the column name for the OedtRqstDate field
     */
    const COL_OEDTRQSTDATE = 'SO_DETAIL.OedtRqstDate';

    /**
     * the column name for the OedtCancDate field
     */
    const COL_OEDTCANCDATE = 'SO_DETAIL.OedtCancDate';

    /**
     * the column name for the OedtShipDate field
     */
    const COL_OEDTSHIPDATE = 'SO_DETAIL.OedtShipDate';

    /**
     * the column name for the OedtSpecOrdr field
     */
    const COL_OEDTSPECORDR = 'SO_DETAIL.OedtSpecOrdr';

    /**
     * the column name for the ArtbMTaxCode field
     */
    const COL_ARTBMTAXCODE = 'SO_DETAIL.ArtbMTaxCode';

    /**
     * the column name for the OedtQtyOrd field
     */
    const COL_OEDTQTYORD = 'SO_DETAIL.OedtQtyOrd';

    /**
     * the column name for the OedtQtyShip field
     */
    const COL_OEDTQTYSHIP = 'SO_DETAIL.OedtQtyShip';

    /**
     * the column name for the OedtQtyShipTot field
     */
    const COL_OEDTQTYSHIPTOT = 'SO_DETAIL.OedtQtyShipTot';

    /**
     * the column name for the OedtQtyBord field
     */
    const COL_OEDTQTYBORD = 'SO_DETAIL.OedtQtyBord';

    /**
     * the column name for the OedtPric field
     */
    const COL_OEDTPRIC = 'SO_DETAIL.OedtPric';

    /**
     * the column name for the OedtCost field
     */
    const COL_OEDTCOST = 'SO_DETAIL.OedtCost';

    /**
     * the column name for the OedtTaxPctTot field
     */
    const COL_OEDTTAXPCTTOT = 'SO_DETAIL.OedtTaxPctTot';

    /**
     * the column name for the OedtPricTot field
     */
    const COL_OEDTPRICTOT = 'SO_DETAIL.OedtPricTot';

    /**
     * the column name for the OedtCostTot field
     */
    const COL_OEDTCOSTTOT = 'SO_DETAIL.OedtCostTot';

    /**
     * the column name for the OedtBrknCaseQty field
     */
    const COL_OEDTBRKNCASEQTY = 'SO_DETAIL.OedtBrknCaseQty';

    /**
     * the column name for the OedtBin field
     */
    const COL_OEDTBIN = 'SO_DETAIL.OedtBin';

    /**
     * the column name for the OedtPersonalCd field
     */
    const COL_OEDTPERSONALCD = 'SO_DETAIL.OedtPersonalCd';

    /**
     * the column name for the OedtCorePric field
     */
    const COL_OEDTCOREPRIC = 'SO_DETAIL.OedtCorePric';

    /**
     * the column name for the OedtAsstCode field
     */
    const COL_OEDTASSTCODE = 'SO_DETAIL.OedtAsstCode';

    /**
     * the column name for the OedtAsstQty field
     */
    const COL_OEDTASSTQTY = 'SO_DETAIL.OedtAsstQty';

    /**
     * the column name for the OedtListPric field
     */
    const COL_OEDTLISTPRIC = 'SO_DETAIL.OedtListPric';

    /**
     * the column name for the OedtStanCost field
     */
    const COL_OEDTSTANCOST = 'SO_DETAIL.OedtStanCost';

    /**
     * the column name for the OedtVendItemJob field
     */
    const COL_OEDTVENDITEMJOB = 'SO_DETAIL.OedtVendItemJob';

    /**
     * the column name for the ApveVendId field
     */
    const COL_APVEVENDID = 'SO_DETAIL.ApveVendId';

    /**
     * the column name for the OedtNsItemGrup field
     */
    const COL_OEDTNSITEMGRUP = 'SO_DETAIL.OedtNsItemGrup';

    /**
     * the column name for the OedtUseCode field
     */
    const COL_OEDTUSECODE = 'SO_DETAIL.OedtUseCode';

    /**
     * the column name for the OedtNsShipFromId field
     */
    const COL_OEDTNSSHIPFROMID = 'SO_DETAIL.OedtNsShipFromId';

    /**
     * the column name for the OedtAsstOvrd field
     */
    const COL_OEDTASSTOVRD = 'SO_DETAIL.OedtAsstOvrd';

    /**
     * the column name for the OedtDealFlag field
     */
    const COL_OEDTDEALFLAG = 'SO_DETAIL.OedtDealFlag';

    /**
     * the column name for the OedtPickFlag field
     */
    const COL_OEDTPICKFLAG = 'SO_DETAIL.OedtPickFlag';

    /**
     * the column name for the OedtMstrTaxCode1 field
     */
    const COL_OEDTMSTRTAXCODE1 = 'SO_DETAIL.OedtMstrTaxCode1';

    /**
     * the column name for the OedtMstrTaxPct1 field
     */
    const COL_OEDTMSTRTAXPCT1 = 'SO_DETAIL.OedtMstrTaxPct1';

    /**
     * the column name for the OedtMstrTaxCode2 field
     */
    const COL_OEDTMSTRTAXCODE2 = 'SO_DETAIL.OedtMstrTaxCode2';

    /**
     * the column name for the OedtMstrTaxPct2 field
     */
    const COL_OEDTMSTRTAXPCT2 = 'SO_DETAIL.OedtMstrTaxPct2';

    /**
     * the column name for the OedtMstrTaxCode3 field
     */
    const COL_OEDTMSTRTAXCODE3 = 'SO_DETAIL.OedtMstrTaxCode3';

    /**
     * the column name for the OedtMstrTaxPct3 field
     */
    const COL_OEDTMSTRTAXPCT3 = 'SO_DETAIL.OedtMstrTaxPct3';

    /**
     * the column name for the OedtMstrTaxCode4 field
     */
    const COL_OEDTMSTRTAXCODE4 = 'SO_DETAIL.OedtMstrTaxCode4';

    /**
     * the column name for the OedtMstrTaxPct4 field
     */
    const COL_OEDTMSTRTAXPCT4 = 'SO_DETAIL.OedtMstrTaxPct4';

    /**
     * the column name for the OedtMstrTaxCode5 field
     */
    const COL_OEDTMSTRTAXCODE5 = 'SO_DETAIL.OedtMstrTaxCode5';

    /**
     * the column name for the OedtMstrTaxPct5 field
     */
    const COL_OEDTMSTRTAXPCT5 = 'SO_DETAIL.OedtMstrTaxPct5';

    /**
     * the column name for the OedtMstrTaxCode6 field
     */
    const COL_OEDTMSTRTAXCODE6 = 'SO_DETAIL.OedtMstrTaxCode6';

    /**
     * the column name for the OedtMstrTaxPct6 field
     */
    const COL_OEDTMSTRTAXPCT6 = 'SO_DETAIL.OedtMstrTaxPct6';

    /**
     * the column name for the OedtMstrTaxCode7 field
     */
    const COL_OEDTMSTRTAXCODE7 = 'SO_DETAIL.OedtMstrTaxCode7';

    /**
     * the column name for the OedtMstrTaxPct7 field
     */
    const COL_OEDTMSTRTAXPCT7 = 'SO_DETAIL.OedtMstrTaxPct7';

    /**
     * the column name for the OedtMstrTaxCode8 field
     */
    const COL_OEDTMSTRTAXCODE8 = 'SO_DETAIL.OedtMstrTaxCode8';

    /**
     * the column name for the OedtMstrTaxPct8 field
     */
    const COL_OEDTMSTRTAXPCT8 = 'SO_DETAIL.OedtMstrTaxPct8';

    /**
     * the column name for the OedtMstrTaxCode9 field
     */
    const COL_OEDTMSTRTAXCODE9 = 'SO_DETAIL.OedtMstrTaxCode9';

    /**
     * the column name for the OedtMstrTaxPct9 field
     */
    const COL_OEDTMSTRTAXPCT9 = 'SO_DETAIL.OedtMstrTaxPct9';

    /**
     * the column name for the OedtBinArea field
     */
    const COL_OEDTBINAREA = 'SO_DETAIL.OedtBinArea';

    /**
     * the column name for the OedtSplitLine field
     */
    const COL_OEDTSPLITLINE = 'SO_DETAIL.OedtSplitLine';

    /**
     * the column name for the OedtOrigLine field
     */
    const COL_OEDTORIGLINE = 'SO_DETAIL.OedtOrigLine';

    /**
     * the column name for the OedtCustCrssRef field
     */
    const COL_OEDTCUSTCRSSREF = 'SO_DETAIL.OedtCustCrssRef';

    /**
     * the column name for the IntbUomSale field
     */
    const COL_INTBUOMSALE = 'SO_DETAIL.IntbUomSale';

    /**
     * the column name for the OedtShipFlag field
     */
    const COL_OEDTSHIPFLAG = 'SO_DETAIL.OedtShipFlag';

    /**
     * the column name for the OedtKitFlag field
     */
    const COL_OEDTKITFLAG = 'SO_DETAIL.OedtKitFlag';

    /**
     * the column name for the OedtKitItemNbr field
     */
    const COL_OEDTKITITEMNBR = 'SO_DETAIL.OedtKitItemNbr';

    /**
     * the column name for the OedtBfCost field
     */
    const COL_OEDTBFCOST = 'SO_DETAIL.OedtBfCost';

    /**
     * the column name for the OedtBfMsgCode field
     */
    const COL_OEDTBFMSGCODE = 'SO_DETAIL.OedtBfMsgCode';

    /**
     * the column name for the OedtBfCostTot field
     */
    const COL_OEDTBFCOSTTOT = 'SO_DETAIL.OedtBfCostTot';

    /**
     * the column name for the OedtWght field
     */
    const COL_OEDTWGHT = 'SO_DETAIL.OedtWght';

    /**
     * the column name for the OedtQbPicker field
     */
    const COL_OEDTQBPICKER = 'SO_DETAIL.OedtQbPicker';

    /**
     * the column name for the OedtPoDetLineNbr field
     */
    const COL_OEDTPODETLINENBR = 'SO_DETAIL.OedtPoDetLineNbr';

    /**
     * the column name for the OedtQtyToShip field
     */
    const COL_OEDTQTYTOSHIP = 'SO_DETAIL.OedtQtyToShip';

    /**
     * the column name for the OedtPoNbr field
     */
    const COL_OEDTPONBR = 'SO_DETAIL.OedtPoNbr';

    /**
     * the column name for the OedtPoRef field
     */
    const COL_OEDTPOREF = 'SO_DETAIL.OedtPoRef';

    /**
     * the column name for the OedtFrtIn field
     */
    const COL_OEDTFRTIN = 'SO_DETAIL.OedtFrtIn';

    /**
     * the column name for the OedtFrtInEntered field
     */
    const COL_OEDTFRTINENTERED = 'SO_DETAIL.OedtFrtInEntered';

    /**
     * the column name for the OedtProdCmplt field
     */
    const COL_OEDTPRODCMPLT = 'SO_DETAIL.OedtProdCmplt';

    /**
     * the column name for the OedtErFlag field
     */
    const COL_OEDTERFLAG = 'SO_DETAIL.OedtErFlag';

    /**
     * the column name for the OedtOrigItem field
     */
    const COL_OEDTORIGITEM = 'SO_DETAIL.OedtOrigItem';

    /**
     * the column name for the OedtSubFlag field
     */
    const COL_OEDTSUBFLAG = 'SO_DETAIL.OedtSubFlag';

    /**
     * the column name for the OedtEdiIncomingSeq field
     */
    const COL_OEDTEDIINCOMINGSEQ = 'SO_DETAIL.OedtEdiIncomingSeq';

    /**
     * the column name for the OedtSpordPoLine field
     */
    const COL_OEDTSPORDPOLINE = 'SO_DETAIL.OedtSpordPoLine';

    /**
     * the column name for the OedtCatlgId field
     */
    const COL_OEDTCATLGID = 'SO_DETAIL.OedtCatlgId';

    /**
     * the column name for the OedtDiscPct field
     */
    const COL_OEDTDISCPCT = 'SO_DETAIL.OedtDiscPct';

    /**
     * the column name for the OedtDealPush field
     */
    const COL_OEDTDEALPUSH = 'SO_DETAIL.OedtDealPush';

    /**
     * the column name for the OedtCoreFlag field
     */
    const COL_OEDTCOREFLAG = 'SO_DETAIL.OedtCoreFlag';

    /**
     * the column name for the OedtNsSalesAcct field
     */
    const COL_OEDTNSSALESACCT = 'SO_DETAIL.OedtNsSalesAcct';

    /**
     * the column name for the OedtCertReqd field
     */
    const COL_OEDTCERTREQD = 'SO_DETAIL.OedtCertReqd';

    /**
     * the column name for the OedtAddOnSales field
     */
    const COL_OEDTADDONSALES = 'SO_DETAIL.OedtAddOnSales';

    /**
     * the column name for the OedtBordFlag field
     */
    const COL_OEDTBORDFLAG = 'SO_DETAIL.OedtBordFlag';

    /**
     * the column name for the OedtItemRef field
     */
    const COL_OEDTITEMREF = 'SO_DETAIL.OedtItemRef';

    /**
     * the column name for the OedtWgTaxCode field
     */
    const COL_OEDTWGTAXCODE = 'SO_DETAIL.OedtWgTaxCode';

    /**
     * the column name for the OedtWgPrice field
     */
    const COL_OEDTWGPRICE = 'SO_DETAIL.OedtWgPrice';

    /**
     * the column name for the OedtWgTot field
     */
    const COL_OEDTWGTOT = 'SO_DETAIL.OedtWgTot';

    /**
     * the column name for the OedtCntrQty field
     */
    const COL_OEDTCNTRQTY = 'SO_DETAIL.OedtCntrQty';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'SO_DETAIL.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'SO_DETAIL.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'SO_DETAIL.dummy';

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
        self::TYPE_PHPNAME       => array('Oehdnbr', 'Oedtline', 'Inititemnbr', 'Oedtdesc', 'Oedtdesc2', 'Intbwhse', 'Oedtrqstdate', 'Oedtcancdate', 'Oedtshipdate', 'Oedtspecordr', 'Artbmtaxcode', 'Oedtqtyord', 'Oedtqtyship', 'Oedtqtyshiptot', 'Oedtqtybord', 'Oedtpric', 'Oedtcost', 'Oedttaxpcttot', 'Oedtprictot', 'Oedtcosttot', 'Oedtbrkncaseqty', 'Oedtbin', 'Oedtpersonalcd', 'Oedtcorepric', 'Oedtasstcode', 'Oedtasstqty', 'Oedtlistpric', 'Oedtstancost', 'Oedtvenditemjob', 'Apvevendid', 'Oedtnsitemgrup', 'Oedtusecode', 'Oedtnsshipfromid', 'Oedtasstovrd', 'Oedtdealflag', 'Oedtpickflag', 'Oedtmstrtaxcode1', 'Oedtmstrtaxpct1', 'Oedtmstrtaxcode2', 'Oedtmstrtaxpct2', 'Oedtmstrtaxcode3', 'Oedtmstrtaxpct3', 'Oedtmstrtaxcode4', 'Oedtmstrtaxpct4', 'Oedtmstrtaxcode5', 'Oedtmstrtaxpct5', 'Oedtmstrtaxcode6', 'Oedtmstrtaxpct6', 'Oedtmstrtaxcode7', 'Oedtmstrtaxpct7', 'Oedtmstrtaxcode8', 'Oedtmstrtaxpct8', 'Oedtmstrtaxcode9', 'Oedtmstrtaxpct9', 'Oedtbinarea', 'Oedtsplitline', 'Oedtorigline', 'Oedtcustcrssref', 'Intbuomsale', 'Oedtshipflag', 'Oedtkitflag', 'Oedtkititemnbr', 'Oedtbfcost', 'Oedtbfmsgcode', 'Oedtbfcosttot', 'Oedtwght', 'Oedtqbpicker', 'Oedtpodetlinenbr', 'Oedtqtytoship', 'Oedtponbr', 'Oedtporef', 'Oedtfrtin', 'Oedtfrtinentered', 'Oedtprodcmplt', 'Oedterflag', 'Oedtorigitem', 'Oedtsubflag', 'Oedtediincomingseq', 'Oedtspordpoline', 'Oedtcatlgid', 'Oedtdiscpct', 'Oedtdealpush', 'Oedtcoreflag', 'Oedtnssalesacct', 'Oedtcertreqd', 'Oedtaddonsales', 'Oedtbordflag', 'Oedtitemref', 'Oedtwgtaxcode', 'Oedtwgprice', 'Oedtwgtot', 'Oedtcntrqty', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('oehdnbr', 'oedtline', 'inititemnbr', 'oedtdesc', 'oedtdesc2', 'intbwhse', 'oedtrqstdate', 'oedtcancdate', 'oedtshipdate', 'oedtspecordr', 'artbmtaxcode', 'oedtqtyord', 'oedtqtyship', 'oedtqtyshiptot', 'oedtqtybord', 'oedtpric', 'oedtcost', 'oedttaxpcttot', 'oedtprictot', 'oedtcosttot', 'oedtbrkncaseqty', 'oedtbin', 'oedtpersonalcd', 'oedtcorepric', 'oedtasstcode', 'oedtasstqty', 'oedtlistpric', 'oedtstancost', 'oedtvenditemjob', 'apvevendid', 'oedtnsitemgrup', 'oedtusecode', 'oedtnsshipfromid', 'oedtasstovrd', 'oedtdealflag', 'oedtpickflag', 'oedtmstrtaxcode1', 'oedtmstrtaxpct1', 'oedtmstrtaxcode2', 'oedtmstrtaxpct2', 'oedtmstrtaxcode3', 'oedtmstrtaxpct3', 'oedtmstrtaxcode4', 'oedtmstrtaxpct4', 'oedtmstrtaxcode5', 'oedtmstrtaxpct5', 'oedtmstrtaxcode6', 'oedtmstrtaxpct6', 'oedtmstrtaxcode7', 'oedtmstrtaxpct7', 'oedtmstrtaxcode8', 'oedtmstrtaxpct8', 'oedtmstrtaxcode9', 'oedtmstrtaxpct9', 'oedtbinarea', 'oedtsplitline', 'oedtorigline', 'oedtcustcrssref', 'intbuomsale', 'oedtshipflag', 'oedtkitflag', 'oedtkititemnbr', 'oedtbfcost', 'oedtbfmsgcode', 'oedtbfcosttot', 'oedtwght', 'oedtqbpicker', 'oedtpodetlinenbr', 'oedtqtytoship', 'oedtponbr', 'oedtporef', 'oedtfrtin', 'oedtfrtinentered', 'oedtprodcmplt', 'oedterflag', 'oedtorigitem', 'oedtsubflag', 'oedtediincomingseq', 'oedtspordpoline', 'oedtcatlgid', 'oedtdiscpct', 'oedtdealpush', 'oedtcoreflag', 'oedtnssalesacct', 'oedtcertreqd', 'oedtaddonsales', 'oedtbordflag', 'oedtitemref', 'oedtwgtaxcode', 'oedtwgprice', 'oedtwgtot', 'oedtcntrqty', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(SoDetailTableMap::COL_OEHDNBR, SoDetailTableMap::COL_OEDTLINE, SoDetailTableMap::COL_INITITEMNBR, SoDetailTableMap::COL_OEDTDESC, SoDetailTableMap::COL_OEDTDESC2, SoDetailTableMap::COL_INTBWHSE, SoDetailTableMap::COL_OEDTRQSTDATE, SoDetailTableMap::COL_OEDTCANCDATE, SoDetailTableMap::COL_OEDTSHIPDATE, SoDetailTableMap::COL_OEDTSPECORDR, SoDetailTableMap::COL_ARTBMTAXCODE, SoDetailTableMap::COL_OEDTQTYORD, SoDetailTableMap::COL_OEDTQTYSHIP, SoDetailTableMap::COL_OEDTQTYSHIPTOT, SoDetailTableMap::COL_OEDTQTYBORD, SoDetailTableMap::COL_OEDTPRIC, SoDetailTableMap::COL_OEDTCOST, SoDetailTableMap::COL_OEDTTAXPCTTOT, SoDetailTableMap::COL_OEDTPRICTOT, SoDetailTableMap::COL_OEDTCOSTTOT, SoDetailTableMap::COL_OEDTBRKNCASEQTY, SoDetailTableMap::COL_OEDTBIN, SoDetailTableMap::COL_OEDTPERSONALCD, SoDetailTableMap::COL_OEDTCOREPRIC, SoDetailTableMap::COL_OEDTASSTCODE, SoDetailTableMap::COL_OEDTASSTQTY, SoDetailTableMap::COL_OEDTLISTPRIC, SoDetailTableMap::COL_OEDTSTANCOST, SoDetailTableMap::COL_OEDTVENDITEMJOB, SoDetailTableMap::COL_APVEVENDID, SoDetailTableMap::COL_OEDTNSITEMGRUP, SoDetailTableMap::COL_OEDTUSECODE, SoDetailTableMap::COL_OEDTNSSHIPFROMID, SoDetailTableMap::COL_OEDTASSTOVRD, SoDetailTableMap::COL_OEDTDEALFLAG, SoDetailTableMap::COL_OEDTPICKFLAG, SoDetailTableMap::COL_OEDTMSTRTAXCODE1, SoDetailTableMap::COL_OEDTMSTRTAXPCT1, SoDetailTableMap::COL_OEDTMSTRTAXCODE2, SoDetailTableMap::COL_OEDTMSTRTAXPCT2, SoDetailTableMap::COL_OEDTMSTRTAXCODE3, SoDetailTableMap::COL_OEDTMSTRTAXPCT3, SoDetailTableMap::COL_OEDTMSTRTAXCODE4, SoDetailTableMap::COL_OEDTMSTRTAXPCT4, SoDetailTableMap::COL_OEDTMSTRTAXCODE5, SoDetailTableMap::COL_OEDTMSTRTAXPCT5, SoDetailTableMap::COL_OEDTMSTRTAXCODE6, SoDetailTableMap::COL_OEDTMSTRTAXPCT6, SoDetailTableMap::COL_OEDTMSTRTAXCODE7, SoDetailTableMap::COL_OEDTMSTRTAXPCT7, SoDetailTableMap::COL_OEDTMSTRTAXCODE8, SoDetailTableMap::COL_OEDTMSTRTAXPCT8, SoDetailTableMap::COL_OEDTMSTRTAXCODE9, SoDetailTableMap::COL_OEDTMSTRTAXPCT9, SoDetailTableMap::COL_OEDTBINAREA, SoDetailTableMap::COL_OEDTSPLITLINE, SoDetailTableMap::COL_OEDTORIGLINE, SoDetailTableMap::COL_OEDTCUSTCRSSREF, SoDetailTableMap::COL_INTBUOMSALE, SoDetailTableMap::COL_OEDTSHIPFLAG, SoDetailTableMap::COL_OEDTKITFLAG, SoDetailTableMap::COL_OEDTKITITEMNBR, SoDetailTableMap::COL_OEDTBFCOST, SoDetailTableMap::COL_OEDTBFMSGCODE, SoDetailTableMap::COL_OEDTBFCOSTTOT, SoDetailTableMap::COL_OEDTWGHT, SoDetailTableMap::COL_OEDTQBPICKER, SoDetailTableMap::COL_OEDTPODETLINENBR, SoDetailTableMap::COL_OEDTQTYTOSHIP, SoDetailTableMap::COL_OEDTPONBR, SoDetailTableMap::COL_OEDTPOREF, SoDetailTableMap::COL_OEDTFRTIN, SoDetailTableMap::COL_OEDTFRTINENTERED, SoDetailTableMap::COL_OEDTPRODCMPLT, SoDetailTableMap::COL_OEDTERFLAG, SoDetailTableMap::COL_OEDTORIGITEM, SoDetailTableMap::COL_OEDTSUBFLAG, SoDetailTableMap::COL_OEDTEDIINCOMINGSEQ, SoDetailTableMap::COL_OEDTSPORDPOLINE, SoDetailTableMap::COL_OEDTCATLGID, SoDetailTableMap::COL_OEDTDISCPCT, SoDetailTableMap::COL_OEDTDEALPUSH, SoDetailTableMap::COL_OEDTCOREFLAG, SoDetailTableMap::COL_OEDTNSSALESACCT, SoDetailTableMap::COL_OEDTCERTREQD, SoDetailTableMap::COL_OEDTADDONSALES, SoDetailTableMap::COL_OEDTBORDFLAG, SoDetailTableMap::COL_OEDTITEMREF, SoDetailTableMap::COL_OEDTWGTAXCODE, SoDetailTableMap::COL_OEDTWGPRICE, SoDetailTableMap::COL_OEDTWGTOT, SoDetailTableMap::COL_OEDTCNTRQTY, SoDetailTableMap::COL_DATEUPDTD, SoDetailTableMap::COL_TIMEUPDTD, SoDetailTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('OehdNbr', 'OedtLine', 'InitItemNbr', 'OedtDesc', 'OedtDesc2', 'IntbWhse', 'OedtRqstDate', 'OedtCancDate', 'OedtShipDate', 'OedtSpecOrdr', 'ArtbMTaxCode', 'OedtQtyOrd', 'OedtQtyShip', 'OedtQtyShipTot', 'OedtQtyBord', 'OedtPric', 'OedtCost', 'OedtTaxPctTot', 'OedtPricTot', 'OedtCostTot', 'OedtBrknCaseQty', 'OedtBin', 'OedtPersonalCd', 'OedtCorePric', 'OedtAsstCode', 'OedtAsstQty', 'OedtListPric', 'OedtStanCost', 'OedtVendItemJob', 'ApveVendId', 'OedtNsItemGrup', 'OedtUseCode', 'OedtNsShipFromId', 'OedtAsstOvrd', 'OedtDealFlag', 'OedtPickFlag', 'OedtMstrTaxCode1', 'OedtMstrTaxPct1', 'OedtMstrTaxCode2', 'OedtMstrTaxPct2', 'OedtMstrTaxCode3', 'OedtMstrTaxPct3', 'OedtMstrTaxCode4', 'OedtMstrTaxPct4', 'OedtMstrTaxCode5', 'OedtMstrTaxPct5', 'OedtMstrTaxCode6', 'OedtMstrTaxPct6', 'OedtMstrTaxCode7', 'OedtMstrTaxPct7', 'OedtMstrTaxCode8', 'OedtMstrTaxPct8', 'OedtMstrTaxCode9', 'OedtMstrTaxPct9', 'OedtBinArea', 'OedtSplitLine', 'OedtOrigLine', 'OedtCustCrssRef', 'IntbUomSale', 'OedtShipFlag', 'OedtKitFlag', 'OedtKitItemNbr', 'OedtBfCost', 'OedtBfMsgCode', 'OedtBfCostTot', 'OedtWght', 'OedtQbPicker', 'OedtPoDetLineNbr', 'OedtQtyToShip', 'OedtPoNbr', 'OedtPoRef', 'OedtFrtIn', 'OedtFrtInEntered', 'OedtProdCmplt', 'OedtErFlag', 'OedtOrigItem', 'OedtSubFlag', 'OedtEdiIncomingSeq', 'OedtSpordPoLine', 'OedtCatlgId', 'OedtDiscPct', 'OedtDealPush', 'OedtCoreFlag', 'OedtNsSalesAcct', 'OedtCertReqd', 'OedtAddOnSales', 'OedtBordFlag', 'OedtItemRef', 'OedtWgTaxCode', 'OedtWgPrice', 'OedtWgTot', 'OedtCntrQty', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Oehdnbr' => 0, 'Oedtline' => 1, 'Inititemnbr' => 2, 'Oedtdesc' => 3, 'Oedtdesc2' => 4, 'Intbwhse' => 5, 'Oedtrqstdate' => 6, 'Oedtcancdate' => 7, 'Oedtshipdate' => 8, 'Oedtspecordr' => 9, 'Artbmtaxcode' => 10, 'Oedtqtyord' => 11, 'Oedtqtyship' => 12, 'Oedtqtyshiptot' => 13, 'Oedtqtybord' => 14, 'Oedtpric' => 15, 'Oedtcost' => 16, 'Oedttaxpcttot' => 17, 'Oedtprictot' => 18, 'Oedtcosttot' => 19, 'Oedtbrkncaseqty' => 20, 'Oedtbin' => 21, 'Oedtpersonalcd' => 22, 'Oedtcorepric' => 23, 'Oedtasstcode' => 24, 'Oedtasstqty' => 25, 'Oedtlistpric' => 26, 'Oedtstancost' => 27, 'Oedtvenditemjob' => 28, 'Apvevendid' => 29, 'Oedtnsitemgrup' => 30, 'Oedtusecode' => 31, 'Oedtnsshipfromid' => 32, 'Oedtasstovrd' => 33, 'Oedtdealflag' => 34, 'Oedtpickflag' => 35, 'Oedtmstrtaxcode1' => 36, 'Oedtmstrtaxpct1' => 37, 'Oedtmstrtaxcode2' => 38, 'Oedtmstrtaxpct2' => 39, 'Oedtmstrtaxcode3' => 40, 'Oedtmstrtaxpct3' => 41, 'Oedtmstrtaxcode4' => 42, 'Oedtmstrtaxpct4' => 43, 'Oedtmstrtaxcode5' => 44, 'Oedtmstrtaxpct5' => 45, 'Oedtmstrtaxcode6' => 46, 'Oedtmstrtaxpct6' => 47, 'Oedtmstrtaxcode7' => 48, 'Oedtmstrtaxpct7' => 49, 'Oedtmstrtaxcode8' => 50, 'Oedtmstrtaxpct8' => 51, 'Oedtmstrtaxcode9' => 52, 'Oedtmstrtaxpct9' => 53, 'Oedtbinarea' => 54, 'Oedtsplitline' => 55, 'Oedtorigline' => 56, 'Oedtcustcrssref' => 57, 'Intbuomsale' => 58, 'Oedtshipflag' => 59, 'Oedtkitflag' => 60, 'Oedtkititemnbr' => 61, 'Oedtbfcost' => 62, 'Oedtbfmsgcode' => 63, 'Oedtbfcosttot' => 64, 'Oedtwght' => 65, 'Oedtqbpicker' => 66, 'Oedtpodetlinenbr' => 67, 'Oedtqtytoship' => 68, 'Oedtponbr' => 69, 'Oedtporef' => 70, 'Oedtfrtin' => 71, 'Oedtfrtinentered' => 72, 'Oedtprodcmplt' => 73, 'Oedterflag' => 74, 'Oedtorigitem' => 75, 'Oedtsubflag' => 76, 'Oedtediincomingseq' => 77, 'Oedtspordpoline' => 78, 'Oedtcatlgid' => 79, 'Oedtdiscpct' => 80, 'Oedtdealpush' => 81, 'Oedtcoreflag' => 82, 'Oedtnssalesacct' => 83, 'Oedtcertreqd' => 84, 'Oedtaddonsales' => 85, 'Oedtbordflag' => 86, 'Oedtitemref' => 87, 'Oedtwgtaxcode' => 88, 'Oedtwgprice' => 89, 'Oedtwgtot' => 90, 'Oedtcntrqty' => 91, 'Dateupdtd' => 92, 'Timeupdtd' => 93, 'Dummy' => 94, ),
        self::TYPE_CAMELNAME     => array('oehdnbr' => 0, 'oedtline' => 1, 'inititemnbr' => 2, 'oedtdesc' => 3, 'oedtdesc2' => 4, 'intbwhse' => 5, 'oedtrqstdate' => 6, 'oedtcancdate' => 7, 'oedtshipdate' => 8, 'oedtspecordr' => 9, 'artbmtaxcode' => 10, 'oedtqtyord' => 11, 'oedtqtyship' => 12, 'oedtqtyshiptot' => 13, 'oedtqtybord' => 14, 'oedtpric' => 15, 'oedtcost' => 16, 'oedttaxpcttot' => 17, 'oedtprictot' => 18, 'oedtcosttot' => 19, 'oedtbrkncaseqty' => 20, 'oedtbin' => 21, 'oedtpersonalcd' => 22, 'oedtcorepric' => 23, 'oedtasstcode' => 24, 'oedtasstqty' => 25, 'oedtlistpric' => 26, 'oedtstancost' => 27, 'oedtvenditemjob' => 28, 'apvevendid' => 29, 'oedtnsitemgrup' => 30, 'oedtusecode' => 31, 'oedtnsshipfromid' => 32, 'oedtasstovrd' => 33, 'oedtdealflag' => 34, 'oedtpickflag' => 35, 'oedtmstrtaxcode1' => 36, 'oedtmstrtaxpct1' => 37, 'oedtmstrtaxcode2' => 38, 'oedtmstrtaxpct2' => 39, 'oedtmstrtaxcode3' => 40, 'oedtmstrtaxpct3' => 41, 'oedtmstrtaxcode4' => 42, 'oedtmstrtaxpct4' => 43, 'oedtmstrtaxcode5' => 44, 'oedtmstrtaxpct5' => 45, 'oedtmstrtaxcode6' => 46, 'oedtmstrtaxpct6' => 47, 'oedtmstrtaxcode7' => 48, 'oedtmstrtaxpct7' => 49, 'oedtmstrtaxcode8' => 50, 'oedtmstrtaxpct8' => 51, 'oedtmstrtaxcode9' => 52, 'oedtmstrtaxpct9' => 53, 'oedtbinarea' => 54, 'oedtsplitline' => 55, 'oedtorigline' => 56, 'oedtcustcrssref' => 57, 'intbuomsale' => 58, 'oedtshipflag' => 59, 'oedtkitflag' => 60, 'oedtkititemnbr' => 61, 'oedtbfcost' => 62, 'oedtbfmsgcode' => 63, 'oedtbfcosttot' => 64, 'oedtwght' => 65, 'oedtqbpicker' => 66, 'oedtpodetlinenbr' => 67, 'oedtqtytoship' => 68, 'oedtponbr' => 69, 'oedtporef' => 70, 'oedtfrtin' => 71, 'oedtfrtinentered' => 72, 'oedtprodcmplt' => 73, 'oedterflag' => 74, 'oedtorigitem' => 75, 'oedtsubflag' => 76, 'oedtediincomingseq' => 77, 'oedtspordpoline' => 78, 'oedtcatlgid' => 79, 'oedtdiscpct' => 80, 'oedtdealpush' => 81, 'oedtcoreflag' => 82, 'oedtnssalesacct' => 83, 'oedtcertreqd' => 84, 'oedtaddonsales' => 85, 'oedtbordflag' => 86, 'oedtitemref' => 87, 'oedtwgtaxcode' => 88, 'oedtwgprice' => 89, 'oedtwgtot' => 90, 'oedtcntrqty' => 91, 'dateupdtd' => 92, 'timeupdtd' => 93, 'dummy' => 94, ),
        self::TYPE_COLNAME       => array(SoDetailTableMap::COL_OEHDNBR => 0, SoDetailTableMap::COL_OEDTLINE => 1, SoDetailTableMap::COL_INITITEMNBR => 2, SoDetailTableMap::COL_OEDTDESC => 3, SoDetailTableMap::COL_OEDTDESC2 => 4, SoDetailTableMap::COL_INTBWHSE => 5, SoDetailTableMap::COL_OEDTRQSTDATE => 6, SoDetailTableMap::COL_OEDTCANCDATE => 7, SoDetailTableMap::COL_OEDTSHIPDATE => 8, SoDetailTableMap::COL_OEDTSPECORDR => 9, SoDetailTableMap::COL_ARTBMTAXCODE => 10, SoDetailTableMap::COL_OEDTQTYORD => 11, SoDetailTableMap::COL_OEDTQTYSHIP => 12, SoDetailTableMap::COL_OEDTQTYSHIPTOT => 13, SoDetailTableMap::COL_OEDTQTYBORD => 14, SoDetailTableMap::COL_OEDTPRIC => 15, SoDetailTableMap::COL_OEDTCOST => 16, SoDetailTableMap::COL_OEDTTAXPCTTOT => 17, SoDetailTableMap::COL_OEDTPRICTOT => 18, SoDetailTableMap::COL_OEDTCOSTTOT => 19, SoDetailTableMap::COL_OEDTBRKNCASEQTY => 20, SoDetailTableMap::COL_OEDTBIN => 21, SoDetailTableMap::COL_OEDTPERSONALCD => 22, SoDetailTableMap::COL_OEDTCOREPRIC => 23, SoDetailTableMap::COL_OEDTASSTCODE => 24, SoDetailTableMap::COL_OEDTASSTQTY => 25, SoDetailTableMap::COL_OEDTLISTPRIC => 26, SoDetailTableMap::COL_OEDTSTANCOST => 27, SoDetailTableMap::COL_OEDTVENDITEMJOB => 28, SoDetailTableMap::COL_APVEVENDID => 29, SoDetailTableMap::COL_OEDTNSITEMGRUP => 30, SoDetailTableMap::COL_OEDTUSECODE => 31, SoDetailTableMap::COL_OEDTNSSHIPFROMID => 32, SoDetailTableMap::COL_OEDTASSTOVRD => 33, SoDetailTableMap::COL_OEDTDEALFLAG => 34, SoDetailTableMap::COL_OEDTPICKFLAG => 35, SoDetailTableMap::COL_OEDTMSTRTAXCODE1 => 36, SoDetailTableMap::COL_OEDTMSTRTAXPCT1 => 37, SoDetailTableMap::COL_OEDTMSTRTAXCODE2 => 38, SoDetailTableMap::COL_OEDTMSTRTAXPCT2 => 39, SoDetailTableMap::COL_OEDTMSTRTAXCODE3 => 40, SoDetailTableMap::COL_OEDTMSTRTAXPCT3 => 41, SoDetailTableMap::COL_OEDTMSTRTAXCODE4 => 42, SoDetailTableMap::COL_OEDTMSTRTAXPCT4 => 43, SoDetailTableMap::COL_OEDTMSTRTAXCODE5 => 44, SoDetailTableMap::COL_OEDTMSTRTAXPCT5 => 45, SoDetailTableMap::COL_OEDTMSTRTAXCODE6 => 46, SoDetailTableMap::COL_OEDTMSTRTAXPCT6 => 47, SoDetailTableMap::COL_OEDTMSTRTAXCODE7 => 48, SoDetailTableMap::COL_OEDTMSTRTAXPCT7 => 49, SoDetailTableMap::COL_OEDTMSTRTAXCODE8 => 50, SoDetailTableMap::COL_OEDTMSTRTAXPCT8 => 51, SoDetailTableMap::COL_OEDTMSTRTAXCODE9 => 52, SoDetailTableMap::COL_OEDTMSTRTAXPCT9 => 53, SoDetailTableMap::COL_OEDTBINAREA => 54, SoDetailTableMap::COL_OEDTSPLITLINE => 55, SoDetailTableMap::COL_OEDTORIGLINE => 56, SoDetailTableMap::COL_OEDTCUSTCRSSREF => 57, SoDetailTableMap::COL_INTBUOMSALE => 58, SoDetailTableMap::COL_OEDTSHIPFLAG => 59, SoDetailTableMap::COL_OEDTKITFLAG => 60, SoDetailTableMap::COL_OEDTKITITEMNBR => 61, SoDetailTableMap::COL_OEDTBFCOST => 62, SoDetailTableMap::COL_OEDTBFMSGCODE => 63, SoDetailTableMap::COL_OEDTBFCOSTTOT => 64, SoDetailTableMap::COL_OEDTWGHT => 65, SoDetailTableMap::COL_OEDTQBPICKER => 66, SoDetailTableMap::COL_OEDTPODETLINENBR => 67, SoDetailTableMap::COL_OEDTQTYTOSHIP => 68, SoDetailTableMap::COL_OEDTPONBR => 69, SoDetailTableMap::COL_OEDTPOREF => 70, SoDetailTableMap::COL_OEDTFRTIN => 71, SoDetailTableMap::COL_OEDTFRTINENTERED => 72, SoDetailTableMap::COL_OEDTPRODCMPLT => 73, SoDetailTableMap::COL_OEDTERFLAG => 74, SoDetailTableMap::COL_OEDTORIGITEM => 75, SoDetailTableMap::COL_OEDTSUBFLAG => 76, SoDetailTableMap::COL_OEDTEDIINCOMINGSEQ => 77, SoDetailTableMap::COL_OEDTSPORDPOLINE => 78, SoDetailTableMap::COL_OEDTCATLGID => 79, SoDetailTableMap::COL_OEDTDISCPCT => 80, SoDetailTableMap::COL_OEDTDEALPUSH => 81, SoDetailTableMap::COL_OEDTCOREFLAG => 82, SoDetailTableMap::COL_OEDTNSSALESACCT => 83, SoDetailTableMap::COL_OEDTCERTREQD => 84, SoDetailTableMap::COL_OEDTADDONSALES => 85, SoDetailTableMap::COL_OEDTBORDFLAG => 86, SoDetailTableMap::COL_OEDTITEMREF => 87, SoDetailTableMap::COL_OEDTWGTAXCODE => 88, SoDetailTableMap::COL_OEDTWGPRICE => 89, SoDetailTableMap::COL_OEDTWGTOT => 90, SoDetailTableMap::COL_OEDTCNTRQTY => 91, SoDetailTableMap::COL_DATEUPDTD => 92, SoDetailTableMap::COL_TIMEUPDTD => 93, SoDetailTableMap::COL_DUMMY => 94, ),
        self::TYPE_FIELDNAME     => array('OehdNbr' => 0, 'OedtLine' => 1, 'InitItemNbr' => 2, 'OedtDesc' => 3, 'OedtDesc2' => 4, 'IntbWhse' => 5, 'OedtRqstDate' => 6, 'OedtCancDate' => 7, 'OedtShipDate' => 8, 'OedtSpecOrdr' => 9, 'ArtbMTaxCode' => 10, 'OedtQtyOrd' => 11, 'OedtQtyShip' => 12, 'OedtQtyShipTot' => 13, 'OedtQtyBord' => 14, 'OedtPric' => 15, 'OedtCost' => 16, 'OedtTaxPctTot' => 17, 'OedtPricTot' => 18, 'OedtCostTot' => 19, 'OedtBrknCaseQty' => 20, 'OedtBin' => 21, 'OedtPersonalCd' => 22, 'OedtCorePric' => 23, 'OedtAsstCode' => 24, 'OedtAsstQty' => 25, 'OedtListPric' => 26, 'OedtStanCost' => 27, 'OedtVendItemJob' => 28, 'ApveVendId' => 29, 'OedtNsItemGrup' => 30, 'OedtUseCode' => 31, 'OedtNsShipFromId' => 32, 'OedtAsstOvrd' => 33, 'OedtDealFlag' => 34, 'OedtPickFlag' => 35, 'OedtMstrTaxCode1' => 36, 'OedtMstrTaxPct1' => 37, 'OedtMstrTaxCode2' => 38, 'OedtMstrTaxPct2' => 39, 'OedtMstrTaxCode3' => 40, 'OedtMstrTaxPct3' => 41, 'OedtMstrTaxCode4' => 42, 'OedtMstrTaxPct4' => 43, 'OedtMstrTaxCode5' => 44, 'OedtMstrTaxPct5' => 45, 'OedtMstrTaxCode6' => 46, 'OedtMstrTaxPct6' => 47, 'OedtMstrTaxCode7' => 48, 'OedtMstrTaxPct7' => 49, 'OedtMstrTaxCode8' => 50, 'OedtMstrTaxPct8' => 51, 'OedtMstrTaxCode9' => 52, 'OedtMstrTaxPct9' => 53, 'OedtBinArea' => 54, 'OedtSplitLine' => 55, 'OedtOrigLine' => 56, 'OedtCustCrssRef' => 57, 'IntbUomSale' => 58, 'OedtShipFlag' => 59, 'OedtKitFlag' => 60, 'OedtKitItemNbr' => 61, 'OedtBfCost' => 62, 'OedtBfMsgCode' => 63, 'OedtBfCostTot' => 64, 'OedtWght' => 65, 'OedtQbPicker' => 66, 'OedtPoDetLineNbr' => 67, 'OedtQtyToShip' => 68, 'OedtPoNbr' => 69, 'OedtPoRef' => 70, 'OedtFrtIn' => 71, 'OedtFrtInEntered' => 72, 'OedtProdCmplt' => 73, 'OedtErFlag' => 74, 'OedtOrigItem' => 75, 'OedtSubFlag' => 76, 'OedtEdiIncomingSeq' => 77, 'OedtSpordPoLine' => 78, 'OedtCatlgId' => 79, 'OedtDiscPct' => 80, 'OedtDealPush' => 81, 'OedtCoreFlag' => 82, 'OedtNsSalesAcct' => 83, 'OedtCertReqd' => 84, 'OedtAddOnSales' => 85, 'OedtBordFlag' => 86, 'OedtItemRef' => 87, 'OedtWgTaxCode' => 88, 'OedtWgPrice' => 89, 'OedtWgTot' => 90, 'OedtCntrQty' => 91, 'DateUpdtd' => 92, 'TimeUpdtd' => 93, 'dummy' => 94, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, )
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
        $this->setName('SO_DETAIL');
        $this->setPhpName('SoDetail');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SoDetail');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('OehdNbr', 'Oehdnbr', 'INTEGER' , 'SO_HEADER', 'OehdNbr', true, 10, 0);
        $this->addPrimaryKey('OedtLine', 'Oedtline', 'INTEGER', true, 4, 0);
        $this->addForeignKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', 'boat_master', 'ItemNbr', false, 30, null);
        $this->addColumn('OedtDesc', 'Oedtdesc', 'VARCHAR', false, 35, null);
        $this->addColumn('OedtDesc2', 'Oedtdesc2', 'VARCHAR', false, 35, null);
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('OedtRqstDate', 'Oedtrqstdate', 'INTEGER', false, 8, null);
        $this->addColumn('OedtCancDate', 'Oedtcancdate', 'INTEGER', false, 8, null);
        $this->addColumn('OedtShipDate', 'Oedtshipdate', 'INTEGER', false, 8, null);
        $this->addColumn('OedtSpecOrdr', 'Oedtspecordr', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbMTaxCode', 'Artbmtaxcode', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtQtyOrd', 'Oedtqtyord', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtQtyShip', 'Oedtqtyship', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtQtyShipTot', 'Oedtqtyshiptot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtQtyBord', 'Oedtqtybord', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtPric', 'Oedtpric', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtCost', 'Oedtcost', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtTaxPctTot', 'Oedttaxpcttot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtPricTot', 'Oedtprictot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtCostTot', 'Oedtcosttot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtBrknCaseQty', 'Oedtbrkncaseqty', 'INTEGER', false, 5, null);
        $this->addColumn('OedtBin', 'Oedtbin', 'VARCHAR', false, 8, null);
        $this->addColumn('OedtPersonalCd', 'Oedtpersonalcd', 'VARCHAR', false, 8, null);
        $this->addColumn('OedtCorePric', 'Oedtcorepric', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtAsstCode', 'Oedtasstcode', 'VARCHAR', false, 3, null);
        $this->addColumn('OedtAsstQty', 'Oedtasstqty', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtListPric', 'Oedtlistpric', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtStanCost', 'Oedtstancost', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtVendItemJob', 'Oedtvenditemjob', 'VARCHAR', false, 30, null);
        $this->addColumn('ApveVendId', 'Apvevendid', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtNsItemGrup', 'Oedtnsitemgrup', 'VARCHAR', false, 4, null);
        $this->addColumn('OedtUseCode', 'Oedtusecode', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtNsShipFromId', 'Oedtnsshipfromid', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtAsstOvrd', 'Oedtasstovrd', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtDealFlag', 'Oedtdealflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtPickFlag', 'Oedtpickflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtMstrTaxCode1', 'Oedtmstrtaxcode1', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtMstrTaxPct1', 'Oedtmstrtaxpct1', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtMstrTaxCode2', 'Oedtmstrtaxcode2', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtMstrTaxPct2', 'Oedtmstrtaxpct2', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtMstrTaxCode3', 'Oedtmstrtaxcode3', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtMstrTaxPct3', 'Oedtmstrtaxpct3', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtMstrTaxCode4', 'Oedtmstrtaxcode4', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtMstrTaxPct4', 'Oedtmstrtaxpct4', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtMstrTaxCode5', 'Oedtmstrtaxcode5', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtMstrTaxPct5', 'Oedtmstrtaxpct5', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtMstrTaxCode6', 'Oedtmstrtaxcode6', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtMstrTaxPct6', 'Oedtmstrtaxpct6', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtMstrTaxCode7', 'Oedtmstrtaxcode7', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtMstrTaxPct7', 'Oedtmstrtaxpct7', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtMstrTaxCode8', 'Oedtmstrtaxcode8', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtMstrTaxPct8', 'Oedtmstrtaxpct8', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtMstrTaxCode9', 'Oedtmstrtaxcode9', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtMstrTaxPct9', 'Oedtmstrtaxpct9', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtBinArea', 'Oedtbinarea', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtSplitLine', 'Oedtsplitline', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtOrigLine', 'Oedtorigline', 'INTEGER', false, 5, null);
        $this->addColumn('OedtCustCrssRef', 'Oedtcustcrssref', 'VARCHAR', false, 30, null);
        $this->addColumn('IntbUomSale', 'Intbuomsale', 'VARCHAR', false, 4, null);
        $this->addColumn('OedtShipFlag', 'Oedtshipflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtKitFlag', 'Oedtkitflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtKitItemNbr', 'Oedtkititemnbr', 'VARCHAR', false, 30, null);
        $this->addColumn('OedtBfCost', 'Oedtbfcost', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtBfMsgCode', 'Oedtbfmsgcode', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtBfCostTot', 'Oedtbfcosttot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtWght', 'Oedtwght', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtQbPicker', 'Oedtqbpicker', 'VARCHAR', false, 4, null);
        $this->addColumn('OedtPoDetLineNbr', 'Oedtpodetlinenbr', 'INTEGER', false, 6, null);
        $this->addColumn('OedtQtyToShip', 'Oedtqtytoship', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtPoNbr', 'Oedtponbr', 'INTEGER', false, 8, null);
        $this->addColumn('OedtPoRef', 'Oedtporef', 'VARCHAR', false, 15, null);
        $this->addColumn('OedtFrtIn', 'Oedtfrtin', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtFrtInEntered', 'Oedtfrtinentered', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtProdCmplt', 'Oedtprodcmplt', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtErFlag', 'Oedterflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtOrigItem', 'Oedtorigitem', 'VARCHAR', false, 30, null);
        $this->addColumn('OedtSubFlag', 'Oedtsubflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtEdiIncomingSeq', 'Oedtediincomingseq', 'INTEGER', false, 3, null);
        $this->addColumn('OedtSpordPoLine', 'Oedtspordpoline', 'INTEGER', false, 4, null);
        $this->addColumn('OedtCatlgId', 'Oedtcatlgid', 'VARCHAR', false, 8, null);
        $this->addColumn('OedtDiscPct', 'Oedtdiscpct', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtDealPush', 'Oedtdealpush', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtCoreFlag', 'Oedtcoreflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtNsSalesAcct', 'Oedtnssalesacct', 'VARCHAR', false, 9, null);
        $this->addColumn('OedtCertReqd', 'Oedtcertreqd', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtAddOnSales', 'Oedtaddonsales', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtBordFlag', 'Oedtbordflag', 'VARCHAR', false, 1, null);
        $this->addColumn('OedtItemRef', 'Oedtitemref', 'VARCHAR', false, 8, null);
        $this->addColumn('OedtWgTaxCode', 'Oedtwgtaxcode', 'VARCHAR', false, 6, null);
        $this->addColumn('OedtWgPrice', 'Oedtwgprice', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtWgTot', 'Oedtwgtot', 'DECIMAL', false, 20, null);
        $this->addColumn('OedtCntrQty', 'Oedtcntrqty', 'INTEGER', false, 6, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'INTEGER', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'INTEGER', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SoHeader', '\\SoHeader', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':OehdNbr',
    1 => ':OehdNbr',
  ),
), null, null, null, false);
        $this->addRelation('BoatMaster', '\\BoatMaster', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':ItemNbr',
  ),
), null, null, null, false);
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \SoDetail $obj A \SoDetail object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getOehdnbr() || is_scalar($obj->getOehdnbr()) || is_callable([$obj->getOehdnbr(), '__toString']) ? (string) $obj->getOehdnbr() : $obj->getOehdnbr()), (null === $obj->getOedtline() || is_scalar($obj->getOedtline()) || is_callable([$obj->getOedtline(), '__toString']) ? (string) $obj->getOedtline() : $obj->getOedtline())]);
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param mixed $value A \SoDetail object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \SoDetail) {
                $key = serialize([(null === $value->getOehdnbr() || is_scalar($value->getOehdnbr()) || is_callable([$value->getOehdnbr(), '__toString']) ? (string) $value->getOehdnbr() : $value->getOehdnbr()), (null === $value->getOedtline() || is_scalar($value->getOedtline()) || is_callable([$value->getOedtline(), '__toString']) ? (string) $value->getOedtline() : $value->getOedtline())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \SoDetail object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
    }

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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)])]);
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
            $pks = [];

        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Oedtline', TableMap::TYPE_PHPNAME, $indexType)
        ];

        return $pks;
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
        return $withPrefix ? SoDetailTableMap::CLASS_DEFAULT : SoDetailTableMap::OM_CLASS;
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
     * @return array           (SoDetail object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SoDetailTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SoDetailTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SoDetailTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SoDetailTableMap::OM_CLASS;
            /** @var SoDetail $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SoDetailTableMap::addInstanceToPool($obj, $key);
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
            $key = SoDetailTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SoDetailTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SoDetail $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SoDetailTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEHDNBR);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTLINE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTDESC);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTDESC2);
            $criteria->addSelectColumn(SoDetailTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTRQSTDATE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCANCDATE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTSHIPDATE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTSPECORDR);
            $criteria->addSelectColumn(SoDetailTableMap::COL_ARTBMTAXCODE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTQTYORD);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTQTYSHIP);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTQTYSHIPTOT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTQTYBORD);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTPRIC);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCOST);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTTAXPCTTOT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTPRICTOT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCOSTTOT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTBRKNCASEQTY);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTBIN);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTPERSONALCD);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCOREPRIC);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTASSTCODE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTASSTQTY);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTLISTPRIC);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTSTANCOST);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTVENDITEMJOB);
            $criteria->addSelectColumn(SoDetailTableMap::COL_APVEVENDID);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTNSITEMGRUP);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTUSECODE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTNSSHIPFROMID);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTASSTOVRD);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTDEALFLAG);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTPICKFLAG);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXCODE1);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXPCT1);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXCODE2);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXPCT2);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXCODE3);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXPCT3);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXCODE4);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXPCT4);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXCODE5);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXPCT5);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXCODE6);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXPCT6);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXCODE7);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXPCT7);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXCODE8);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXPCT8);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXCODE9);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTMSTRTAXPCT9);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTBINAREA);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTSPLITLINE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTORIGLINE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCUSTCRSSREF);
            $criteria->addSelectColumn(SoDetailTableMap::COL_INTBUOMSALE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTSHIPFLAG);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTKITFLAG);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTKITITEMNBR);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTBFCOST);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTBFMSGCODE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTBFCOSTTOT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTWGHT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTQBPICKER);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTPODETLINENBR);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTQTYTOSHIP);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTPONBR);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTPOREF);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTFRTIN);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTFRTINENTERED);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTPRODCMPLT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTERFLAG);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTORIGITEM);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTSUBFLAG);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTEDIINCOMINGSEQ);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTSPORDPOLINE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCATLGID);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTDISCPCT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTDEALPUSH);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCOREFLAG);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTNSSALESACCT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCERTREQD);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTADDONSALES);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTBORDFLAG);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTITEMREF);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTWGTAXCODE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTWGPRICE);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTWGTOT);
            $criteria->addSelectColumn(SoDetailTableMap::COL_OEDTCNTRQTY);
            $criteria->addSelectColumn(SoDetailTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(SoDetailTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(SoDetailTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.OehdNbr');
            $criteria->addSelectColumn($alias . '.OedtLine');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.OedtDesc');
            $criteria->addSelectColumn($alias . '.OedtDesc2');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.OedtRqstDate');
            $criteria->addSelectColumn($alias . '.OedtCancDate');
            $criteria->addSelectColumn($alias . '.OedtShipDate');
            $criteria->addSelectColumn($alias . '.OedtSpecOrdr');
            $criteria->addSelectColumn($alias . '.ArtbMTaxCode');
            $criteria->addSelectColumn($alias . '.OedtQtyOrd');
            $criteria->addSelectColumn($alias . '.OedtQtyShip');
            $criteria->addSelectColumn($alias . '.OedtQtyShipTot');
            $criteria->addSelectColumn($alias . '.OedtQtyBord');
            $criteria->addSelectColumn($alias . '.OedtPric');
            $criteria->addSelectColumn($alias . '.OedtCost');
            $criteria->addSelectColumn($alias . '.OedtTaxPctTot');
            $criteria->addSelectColumn($alias . '.OedtPricTot');
            $criteria->addSelectColumn($alias . '.OedtCostTot');
            $criteria->addSelectColumn($alias . '.OedtBrknCaseQty');
            $criteria->addSelectColumn($alias . '.OedtBin');
            $criteria->addSelectColumn($alias . '.OedtPersonalCd');
            $criteria->addSelectColumn($alias . '.OedtCorePric');
            $criteria->addSelectColumn($alias . '.OedtAsstCode');
            $criteria->addSelectColumn($alias . '.OedtAsstQty');
            $criteria->addSelectColumn($alias . '.OedtListPric');
            $criteria->addSelectColumn($alias . '.OedtStanCost');
            $criteria->addSelectColumn($alias . '.OedtVendItemJob');
            $criteria->addSelectColumn($alias . '.ApveVendId');
            $criteria->addSelectColumn($alias . '.OedtNsItemGrup');
            $criteria->addSelectColumn($alias . '.OedtUseCode');
            $criteria->addSelectColumn($alias . '.OedtNsShipFromId');
            $criteria->addSelectColumn($alias . '.OedtAsstOvrd');
            $criteria->addSelectColumn($alias . '.OedtDealFlag');
            $criteria->addSelectColumn($alias . '.OedtPickFlag');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxCode1');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxPct1');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxCode2');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxPct2');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxCode3');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxPct3');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxCode4');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxPct4');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxCode5');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxPct5');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxCode6');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxPct6');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxCode7');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxPct7');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxCode8');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxPct8');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxCode9');
            $criteria->addSelectColumn($alias . '.OedtMstrTaxPct9');
            $criteria->addSelectColumn($alias . '.OedtBinArea');
            $criteria->addSelectColumn($alias . '.OedtSplitLine');
            $criteria->addSelectColumn($alias . '.OedtOrigLine');
            $criteria->addSelectColumn($alias . '.OedtCustCrssRef');
            $criteria->addSelectColumn($alias . '.IntbUomSale');
            $criteria->addSelectColumn($alias . '.OedtShipFlag');
            $criteria->addSelectColumn($alias . '.OedtKitFlag');
            $criteria->addSelectColumn($alias . '.OedtKitItemNbr');
            $criteria->addSelectColumn($alias . '.OedtBfCost');
            $criteria->addSelectColumn($alias . '.OedtBfMsgCode');
            $criteria->addSelectColumn($alias . '.OedtBfCostTot');
            $criteria->addSelectColumn($alias . '.OedtWght');
            $criteria->addSelectColumn($alias . '.OedtQbPicker');
            $criteria->addSelectColumn($alias . '.OedtPoDetLineNbr');
            $criteria->addSelectColumn($alias . '.OedtQtyToShip');
            $criteria->addSelectColumn($alias . '.OedtPoNbr');
            $criteria->addSelectColumn($alias . '.OedtPoRef');
            $criteria->addSelectColumn($alias . '.OedtFrtIn');
            $criteria->addSelectColumn($alias . '.OedtFrtInEntered');
            $criteria->addSelectColumn($alias . '.OedtProdCmplt');
            $criteria->addSelectColumn($alias . '.OedtErFlag');
            $criteria->addSelectColumn($alias . '.OedtOrigItem');
            $criteria->addSelectColumn($alias . '.OedtSubFlag');
            $criteria->addSelectColumn($alias . '.OedtEdiIncomingSeq');
            $criteria->addSelectColumn($alias . '.OedtSpordPoLine');
            $criteria->addSelectColumn($alias . '.OedtCatlgId');
            $criteria->addSelectColumn($alias . '.OedtDiscPct');
            $criteria->addSelectColumn($alias . '.OedtDealPush');
            $criteria->addSelectColumn($alias . '.OedtCoreFlag');
            $criteria->addSelectColumn($alias . '.OedtNsSalesAcct');
            $criteria->addSelectColumn($alias . '.OedtCertReqd');
            $criteria->addSelectColumn($alias . '.OedtAddOnSales');
            $criteria->addSelectColumn($alias . '.OedtBordFlag');
            $criteria->addSelectColumn($alias . '.OedtItemRef');
            $criteria->addSelectColumn($alias . '.OedtWgTaxCode');
            $criteria->addSelectColumn($alias . '.OedtWgPrice');
            $criteria->addSelectColumn($alias . '.OedtWgTot');
            $criteria->addSelectColumn($alias . '.OedtCntrQty');
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
        return Propel::getServiceContainer()->getDatabaseMap(SoDetailTableMap::DATABASE_NAME)->getTable(SoDetailTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SoDetailTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SoDetailTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SoDetailTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SoDetail or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SoDetail object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SoDetailTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SoDetail) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SoDetailTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SoDetailTableMap::COL_OEHDNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SoDetailTableMap::COL_OEDTLINE, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = SoDetailQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SoDetailTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SoDetailTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the SO_DETAIL table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SoDetailQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SoDetail or Criteria object.
     *
     * @param mixed               $criteria Criteria or SoDetail object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoDetailTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SoDetail object
        }


        // Set the correct dbName
        $query = SoDetailQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SoDetailTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SoDetailTableMap::buildTableMap();
