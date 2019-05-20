<?php

namespace Map;

use \ArCustMast;
use \ArCustMastQuery;
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
 * This class defines the structure of the 'AR_CUST_MAST' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ArCustMastTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ArCustMastTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'AR_CUST_MAST';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ArCustMast';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ArCustMast';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 121;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 121;

    /**
     * the column name for the ArcuCustId field
     */
    const COL_ARCUCUSTID = 'AR_CUST_MAST.ArcuCustId';

    /**
     * the column name for the ArcuName field
     */
    const COL_ARCUNAME = 'AR_CUST_MAST.ArcuName';

    /**
     * the column name for the ArcuAdr1 field
     */
    const COL_ARCUADR1 = 'AR_CUST_MAST.ArcuAdr1';

    /**
     * the column name for the ArcuAdr2 field
     */
    const COL_ARCUADR2 = 'AR_CUST_MAST.ArcuAdr2';

    /**
     * the column name for the ArcuAdr3 field
     */
    const COL_ARCUADR3 = 'AR_CUST_MAST.ArcuAdr3';

    /**
     * the column name for the ArcuCtry field
     */
    const COL_ARCUCTRY = 'AR_CUST_MAST.ArcuCtry';

    /**
     * the column name for the ArcuCity field
     */
    const COL_ARCUCITY = 'AR_CUST_MAST.ArcuCity';

    /**
     * the column name for the ArcuStat field
     */
    const COL_ARCUSTAT = 'AR_CUST_MAST.ArcuStat';

    /**
     * the column name for the ArcuZipCode5 field
     */
    const COL_ARCUZIPCODE5 = 'AR_CUST_MAST.ArcuZipCode5';

    /**
     * the column name for the ArcuZipCode4 field
     */
    const COL_ARCUZIPCODE4 = 'AR_CUST_MAST.ArcuZipCode4';

    /**
     * the column name for the ArcuZipCode10 field
     */
    const COL_ARCUZIPCODE10 = 'AR_CUST_MAST.ArcuZipCode10';

    /**
     * the column name for the ArspSalePer1 field
     */
    const COL_ARSPSALEPER1 = 'AR_CUST_MAST.ArspSalePer1';

    /**
     * the column name for the ArspSalePer2 field
     */
    const COL_ARSPSALEPER2 = 'AR_CUST_MAST.ArspSalePer2';

    /**
     * the column name for the ArspSalePer3 field
     */
    const COL_ARSPSALEPER3 = 'AR_CUST_MAST.ArspSalePer3';

    /**
     * the column name for the ArtbMtaxCode field
     */
    const COL_ARTBMTAXCODE = 'AR_CUST_MAST.ArtbMtaxCode';

    /**
     * the column name for the ArcuTaxExemNbr field
     */
    const COL_ARCUTAXEXEMNBR = 'AR_CUST_MAST.ArcuTaxExemNbr';

    /**
     * the column name for the IntbWhse field
     */
    const COL_INTBWHSE = 'AR_CUST_MAST.IntbWhse';

    /**
     * the column name for the ArcuPricLvl field
     */
    const COL_ARCUPRICLVL = 'AR_CUST_MAST.ArcuPricLvl';

    /**
     * the column name for the ArcuShipComp field
     */
    const COL_ARCUSHIPCOMP = 'AR_CUST_MAST.ArcuShipComp';

    /**
     * the column name for the ArcuTxbl field
     */
    const COL_ARCUTXBL = 'AR_CUST_MAST.ArcuTxbl';

    /**
     * the column name for the ArcuPostal field
     */
    const COL_ARCUPOSTAL = 'AR_CUST_MAST.ArcuPostal';

    /**
     * the column name for the ArtbShipVia field
     */
    const COL_ARTBSHIPVIA = 'AR_CUST_MAST.ArtbShipVia';

    /**
     * the column name for the ArcuBord field
     */
    const COL_ARCUBORD = 'AR_CUST_MAST.ArcuBord';

    /**
     * the column name for the ArtbTypeCode field
     */
    const COL_ARTBTYPECODE = 'AR_CUST_MAST.ArtbTypeCode';

    /**
     * the column name for the ArtbPricCode field
     */
    const COL_ARTBPRICCODE = 'AR_CUST_MAST.ArtbPricCode';

    /**
     * the column name for the ArtbCommCode field
     */
    const COL_ARTBCOMMCODE = 'AR_CUST_MAST.ArtbCommCode';

    /**
     * the column name for the ArtmTermCd field
     */
    const COL_ARTMTERMCD = 'AR_CUST_MAST.ArtmTermCd';

    /**
     * the column name for the ArcuCredLmt field
     */
    const COL_ARCUCREDLMT = 'AR_CUST_MAST.ArcuCredLmt';

    /**
     * the column name for the ArcuStmtCode field
     */
    const COL_ARCUSTMTCODE = 'AR_CUST_MAST.ArcuStmtCode';

    /**
     * the column name for the ArcuCredHold field
     */
    const COL_ARCUCREDHOLD = 'AR_CUST_MAST.ArcuCredHold';

    /**
     * the column name for the ArcuFinChrg field
     */
    const COL_ARCUFINCHRG = 'AR_CUST_MAST.ArcuFinChrg';

    /**
     * the column name for the ArcuUserCode field
     */
    const COL_ARCUUSERCODE = 'AR_CUST_MAST.ArcuUserCode';

    /**
     * the column name for the ArcuNewFc field
     */
    const COL_ARCUNEWFC = 'AR_CUST_MAST.ArcuNewFc';

    /**
     * the column name for the ArcuUnpdFc field
     */
    const COL_ARCUUNPDFC = 'AR_CUST_MAST.ArcuUnpdFc';

    /**
     * the column name for the ArcuCurBal field
     */
    const COL_ARCUCURBAL = 'AR_CUST_MAST.ArcuCurBal';

    /**
     * the column name for the ArcuBalOdue1 field
     */
    const COL_ARCUBALODUE1 = 'AR_CUST_MAST.ArcuBalOdue1';

    /**
     * the column name for the ArcuBalOdue2 field
     */
    const COL_ARCUBALODUE2 = 'AR_CUST_MAST.ArcuBalOdue2';

    /**
     * the column name for the ArcuBalOdue3 field
     */
    const COL_ARCUBALODUE3 = 'AR_CUST_MAST.ArcuBalOdue3';

    /**
     * the column name for the ArcuSaleMtd field
     */
    const COL_ARCUSALEMTD = 'AR_CUST_MAST.ArcuSaleMtd';

    /**
     * the column name for the ArcuInvMtd field
     */
    const COL_ARCUINVMTD = 'AR_CUST_MAST.ArcuInvMtd';

    /**
     * the column name for the ArcuDateOpen field
     */
    const COL_ARCUDATEOPEN = 'AR_CUST_MAST.ArcuDateOpen';

    /**
     * the column name for the ArcuLastSaleDate field
     */
    const COL_ARCULASTSALEDATE = 'AR_CUST_MAST.ArcuLastSaleDate';

    /**
     * the column name for the ArcuHighBal field
     */
    const COL_ARCUHIGHBAL = 'AR_CUST_MAST.ArcuHighBal';

    /**
     * the column name for the ArcuBigSaleMo field
     */
    const COL_ARCUBIGSALEMO = 'AR_CUST_MAST.ArcuBigSaleMo';

    /**
     * the column name for the ArcuLastPayDate field
     */
    const COL_ARCULASTPAYDATE = 'AR_CUST_MAST.ArcuLastPayDate';

    /**
     * the column name for the ArcuAvgPayDays field
     */
    const COL_ARCUAVGPAYDAYS = 'AR_CUST_MAST.ArcuAvgPayDays';

    /**
     * the column name for the ArcuUpsZone field
     */
    const COL_ARCUUPSZONE = 'AR_CUST_MAST.ArcuUpsZone';

    /**
     * the column name for the ArcuHighBalDate field
     */
    const COL_ARCUHIGHBALDATE = 'AR_CUST_MAST.ArcuHighBalDate';

    /**
     * the column name for the ArcuSale24mo1 field
     */
    const COL_ARCUSALE24MO1 = 'AR_CUST_MAST.ArcuSale24mo1';

    /**
     * the column name for the ArcuInv24mo1 field
     */
    const COL_ARCUINV24MO1 = 'AR_CUST_MAST.ArcuInv24mo1';

    /**
     * the column name for the ArcuSale24mo2 field
     */
    const COL_ARCUSALE24MO2 = 'AR_CUST_MAST.ArcuSale24mo2';

    /**
     * the column name for the ArcuInv24mo2 field
     */
    const COL_ARCUINV24MO2 = 'AR_CUST_MAST.ArcuInv24mo2';

    /**
     * the column name for the ArcuSale24mo3 field
     */
    const COL_ARCUSALE24MO3 = 'AR_CUST_MAST.ArcuSale24mo3';

    /**
     * the column name for the ArcuInv24mo3 field
     */
    const COL_ARCUINV24MO3 = 'AR_CUST_MAST.ArcuInv24mo3';

    /**
     * the column name for the ArcuSale24mo4 field
     */
    const COL_ARCUSALE24MO4 = 'AR_CUST_MAST.ArcuSale24mo4';

    /**
     * the column name for the ArcuInv24mo4 field
     */
    const COL_ARCUINV24MO4 = 'AR_CUST_MAST.ArcuInv24mo4';

    /**
     * the column name for the ArcuSale24mo5 field
     */
    const COL_ARCUSALE24MO5 = 'AR_CUST_MAST.ArcuSale24mo5';

    /**
     * the column name for the ArcuInv24mo5 field
     */
    const COL_ARCUINV24MO5 = 'AR_CUST_MAST.ArcuInv24mo5';

    /**
     * the column name for the ArcuSale24mo6 field
     */
    const COL_ARCUSALE24MO6 = 'AR_CUST_MAST.ArcuSale24mo6';

    /**
     * the column name for the ArcuInv24mo6 field
     */
    const COL_ARCUINV24MO6 = 'AR_CUST_MAST.ArcuInv24mo6';

    /**
     * the column name for the ArcuSale24mo7 field
     */
    const COL_ARCUSALE24MO7 = 'AR_CUST_MAST.ArcuSale24mo7';

    /**
     * the column name for the ArcuInv24mo7 field
     */
    const COL_ARCUINV24MO7 = 'AR_CUST_MAST.ArcuInv24mo7';

    /**
     * the column name for the ArcuSale24mo8 field
     */
    const COL_ARCUSALE24MO8 = 'AR_CUST_MAST.ArcuSale24mo8';

    /**
     * the column name for the ArcuInv24mo8 field
     */
    const COL_ARCUINV24MO8 = 'AR_CUST_MAST.ArcuInv24mo8';

    /**
     * the column name for the ArcuSale24mo9 field
     */
    const COL_ARCUSALE24MO9 = 'AR_CUST_MAST.ArcuSale24mo9';

    /**
     * the column name for the ArcuInv24mo9 field
     */
    const COL_ARCUINV24MO9 = 'AR_CUST_MAST.ArcuInv24mo9';

    /**
     * the column name for the ArcuSale24mo10 field
     */
    const COL_ARCUSALE24MO10 = 'AR_CUST_MAST.ArcuSale24mo10';

    /**
     * the column name for the ArcuInv24mo10 field
     */
    const COL_ARCUINV24MO10 = 'AR_CUST_MAST.ArcuInv24mo10';

    /**
     * the column name for the ArcuSale24mo11 field
     */
    const COL_ARCUSALE24MO11 = 'AR_CUST_MAST.ArcuSale24mo11';

    /**
     * the column name for the ArcuInv24mo11 field
     */
    const COL_ARCUINV24MO11 = 'AR_CUST_MAST.ArcuInv24mo11';

    /**
     * the column name for the ArcuSale24mo12 field
     */
    const COL_ARCUSALE24MO12 = 'AR_CUST_MAST.ArcuSale24mo12';

    /**
     * the column name for the ArcuInv24mo12 field
     */
    const COL_ARCUINV24MO12 = 'AR_CUST_MAST.ArcuInv24mo12';

    /**
     * the column name for the ArcuSale24mo13 field
     */
    const COL_ARCUSALE24MO13 = 'AR_CUST_MAST.ArcuSale24mo13';

    /**
     * the column name for the ArcuInv24mo13 field
     */
    const COL_ARCUINV24MO13 = 'AR_CUST_MAST.ArcuInv24mo13';

    /**
     * the column name for the ArcuSale24mo14 field
     */
    const COL_ARCUSALE24MO14 = 'AR_CUST_MAST.ArcuSale24mo14';

    /**
     * the column name for the ArcuInv24mo14 field
     */
    const COL_ARCUINV24MO14 = 'AR_CUST_MAST.ArcuInv24mo14';

    /**
     * the column name for the ArcuSale24mo15 field
     */
    const COL_ARCUSALE24MO15 = 'AR_CUST_MAST.ArcuSale24mo15';

    /**
     * the column name for the ArcuInv24mo15 field
     */
    const COL_ARCUINV24MO15 = 'AR_CUST_MAST.ArcuInv24mo15';

    /**
     * the column name for the ArcuSale24mo16 field
     */
    const COL_ARCUSALE24MO16 = 'AR_CUST_MAST.ArcuSale24mo16';

    /**
     * the column name for the ArcuInv24mo16 field
     */
    const COL_ARCUINV24MO16 = 'AR_CUST_MAST.ArcuInv24mo16';

    /**
     * the column name for the ArcuSale24mo17 field
     */
    const COL_ARCUSALE24MO17 = 'AR_CUST_MAST.ArcuSale24mo17';

    /**
     * the column name for the ArcuInv24mo17 field
     */
    const COL_ARCUINV24MO17 = 'AR_CUST_MAST.ArcuInv24mo17';

    /**
     * the column name for the ArcuSale24mo18 field
     */
    const COL_ARCUSALE24MO18 = 'AR_CUST_MAST.ArcuSale24mo18';

    /**
     * the column name for the ArcuInv24mo18 field
     */
    const COL_ARCUINV24MO18 = 'AR_CUST_MAST.ArcuInv24mo18';

    /**
     * the column name for the ArcuSale24mo19 field
     */
    const COL_ARCUSALE24MO19 = 'AR_CUST_MAST.ArcuSale24mo19';

    /**
     * the column name for the ArcuInv24mo19 field
     */
    const COL_ARCUINV24MO19 = 'AR_CUST_MAST.ArcuInv24mo19';

    /**
     * the column name for the ArcuSale24mo20 field
     */
    const COL_ARCUSALE24MO20 = 'AR_CUST_MAST.ArcuSale24mo20';

    /**
     * the column name for the ArcuInv24mo20 field
     */
    const COL_ARCUINV24MO20 = 'AR_CUST_MAST.ArcuInv24mo20';

    /**
     * the column name for the ArcuSale24mo21 field
     */
    const COL_ARCUSALE24MO21 = 'AR_CUST_MAST.ArcuSale24mo21';

    /**
     * the column name for the ArcuInv24mo21 field
     */
    const COL_ARCUINV24MO21 = 'AR_CUST_MAST.ArcuInv24mo21';

    /**
     * the column name for the ArcuSale24mo22 field
     */
    const COL_ARCUSALE24MO22 = 'AR_CUST_MAST.ArcuSale24mo22';

    /**
     * the column name for the ArcuInv24mo22 field
     */
    const COL_ARCUINV24MO22 = 'AR_CUST_MAST.ArcuInv24mo22';

    /**
     * the column name for the ArcuSale24mo23 field
     */
    const COL_ARCUSALE24MO23 = 'AR_CUST_MAST.ArcuSale24mo23';

    /**
     * the column name for the ArcuInv24mo23 field
     */
    const COL_ARCUINV24MO23 = 'AR_CUST_MAST.ArcuInv24mo23';

    /**
     * the column name for the ArcuSale24mo24 field
     */
    const COL_ARCUSALE24MO24 = 'AR_CUST_MAST.ArcuSale24mo24';

    /**
     * the column name for the ArcuInv24mo24 field
     */
    const COL_ARCUINV24MO24 = 'AR_CUST_MAST.ArcuInv24mo24';

    /**
     * the column name for the ArcuLastPayAmt field
     */
    const COL_ARCULASTPAYAMT = 'AR_CUST_MAST.ArcuLastPayAmt';

    /**
     * the column name for the ArcuOrdrTot field
     */
    const COL_ARCUORDRTOT = 'AR_CUST_MAST.ArcuOrdrTot';

    /**
     * the column name for the ArcuUseFrtIn field
     */
    const COL_ARCUUSEFRTIN = 'AR_CUST_MAST.ArcuUseFrtIn';

    /**
     * the column name for the ArcuMyVendId field
     */
    const COL_ARCUMYVENDID = 'AR_CUST_MAST.ArcuMyVendId';

    /**
     * the column name for the ArcuAddlPricDisc field
     */
    const COL_ARCUADDLPRICDISC = 'AR_CUST_MAST.ArcuAddlPricDisc';

    /**
     * the column name for the ArcuChrgFrt field
     */
    const COL_ARCUCHRGFRT = 'AR_CUST_MAST.ArcuChrgFrt';

    /**
     * the column name for the ArcuCoreXDays field
     */
    const COL_ARCUCOREXDAYS = 'AR_CUST_MAST.ArcuCoreXDays';

    /**
     * the column name for the ArcuContractNbr field
     */
    const COL_ARCUCONTRACTNBR = 'AR_CUST_MAST.ArcuContractNbr';

    /**
     * the column name for the ArcuCoreLF field
     */
    const COL_ARCUCORELF = 'AR_CUST_MAST.ArcuCoreLF';

    /**
     * the column name for the ArcuCoreBankId field
     */
    const COL_ARCUCOREBANKID = 'AR_CUST_MAST.ArcuCoreBankId';

    /**
     * the column name for the ArcuDunsNbr field
     */
    const COL_ARCUDUNSNBR = 'AR_CUST_MAST.ArcuDunsNbr';

    /**
     * the column name for the ArcuRfmlValu field
     */
    const COL_ARCURFMLVALU = 'AR_CUST_MAST.ArcuRfmlValu';

    /**
     * the column name for the ArcuForceCustPo field
     */
    const COL_ARCUFORCECUSTPO = 'AR_CUST_MAST.ArcuForceCustPo';

    /**
     * the column name for the ArcuAgeLevel field
     */
    const COL_ARCUAGELEVEL = 'AR_CUST_MAST.ArcuAgeLevel';

    /**
     * the column name for the ArtbRoute field
     */
    const COL_ARTBROUTE = 'AR_CUST_MAST.ArtbRoute';

    /**
     * the column name for the ArcuWgTaxCode field
     */
    const COL_ARCUWGTAXCODE = 'AR_CUST_MAST.ArcuWgTaxCode';

    /**
     * the column name for the ArcuAcptSupercede field
     */
    const COL_ARCUACPTSUPERCEDE = 'AR_CUST_MAST.ArcuAcptSupercede';

    /**
     * the column name for the ArcuMstrCustId field
     */
    const COL_ARCUMSTRCUSTID = 'AR_CUST_MAST.ArcuMstrCustId';

    /**
     * the column name for the ArcuSurchgPct field
     */
    const COL_ARCUSURCHGPCT = 'AR_CUST_MAST.ArcuSurchgPct';

    /**
     * the column name for the ArcuFrgtSplit field
     */
    const COL_ARCUFRGTSPLIT = 'AR_CUST_MAST.ArcuFrgtSplit';

    /**
     * the column name for the ArcuLineMin field
     */
    const COL_ARCULINEMIN = 'AR_CUST_MAST.ArcuLineMin';

    /**
     * the column name for the ArcuOrdrMin field
     */
    const COL_ARCUORDRMIN = 'AR_CUST_MAST.ArcuOrdrMin';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'AR_CUST_MAST.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'AR_CUST_MAST.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'AR_CUST_MAST.dummy';

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
        self::TYPE_PHPNAME       => array('Arcucustid', 'Arcuname', 'Arcuadr1', 'Arcuadr2', 'Arcuadr3', 'Arcuctry', 'Arcucity', 'Arcustat', 'Arcuzipcode5', 'Arcuzipcode4', 'Arcuzipcode10', 'Arspsaleper1', 'Arspsaleper2', 'Arspsaleper3', 'Artbmtaxcode', 'Arcutaxexemnbr', 'Intbwhse', 'Arcupriclvl', 'Arcushipcomp', 'Arcutxbl', 'Arcupostal', 'Artbshipvia', 'Arcubord', 'Artbtypecode', 'Artbpriccode', 'Artbcommcode', 'Artmtermcd', 'Arcucredlmt', 'Arcustmtcode', 'Arcucredhold', 'Arcufinchrg', 'Arcuusercode', 'Arcunewfc', 'Arcuunpdfc', 'Arcucurbal', 'Arcubalodue1', 'Arcubalodue2', 'Arcubalodue3', 'Arcusalemtd', 'Arcuinvmtd', 'Arcudateopen', 'Arculastsaledate', 'Arcuhighbal', 'Arcubigsalemo', 'Arculastpaydate', 'Arcuavgpaydays', 'Arcuupszone', 'Arcuhighbaldate', 'Arcusale24mo1', 'Arcuinv24mo1', 'Arcusale24mo2', 'Arcuinv24mo2', 'Arcusale24mo3', 'Arcuinv24mo3', 'Arcusale24mo4', 'Arcuinv24mo4', 'Arcusale24mo5', 'Arcuinv24mo5', 'Arcusale24mo6', 'Arcuinv24mo6', 'Arcusale24mo7', 'Arcuinv24mo7', 'Arcusale24mo8', 'Arcuinv24mo8', 'Arcusale24mo9', 'Arcuinv24mo9', 'Arcusale24mo10', 'Arcuinv24mo10', 'Arcusale24mo11', 'Arcuinv24mo11', 'Arcusale24mo12', 'Arcuinv24mo12', 'Arcusale24mo13', 'Arcuinv24mo13', 'Arcusale24mo14', 'Arcuinv24mo14', 'Arcusale24mo15', 'Arcuinv24mo15', 'Arcusale24mo16', 'Arcuinv24mo16', 'Arcusale24mo17', 'Arcuinv24mo17', 'Arcusale24mo18', 'Arcuinv24mo18', 'Arcusale24mo19', 'Arcuinv24mo19', 'Arcusale24mo20', 'Arcuinv24mo20', 'Arcusale24mo21', 'Arcuinv24mo21', 'Arcusale24mo22', 'Arcuinv24mo22', 'Arcusale24mo23', 'Arcuinv24mo23', 'Arcusale24mo24', 'Arcuinv24mo24', 'Arculastpayamt', 'Arcuordrtot', 'Arcuusefrtin', 'Arcumyvendid', 'Arcuaddlpricdisc', 'Arcuchrgfrt', 'Arcucorexdays', 'Arcucontractnbr', 'Arcucorelf', 'Arcucorebankid', 'Arcudunsnbr', 'Arcurfmlvalu', 'Arcuforcecustpo', 'Arcuagelevel', 'Artbroute', 'Arcuwgtaxcode', 'Arcuacptsupercede', 'Arcumstrcustid', 'Arcusurchgpct', 'Arcufrgtsplit', 'Arculinemin', 'Arcuordrmin', 'Dateupdtd', 'Timeupdtd', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('arcucustid', 'arcuname', 'arcuadr1', 'arcuadr2', 'arcuadr3', 'arcuctry', 'arcucity', 'arcustat', 'arcuzipcode5', 'arcuzipcode4', 'arcuzipcode10', 'arspsaleper1', 'arspsaleper2', 'arspsaleper3', 'artbmtaxcode', 'arcutaxexemnbr', 'intbwhse', 'arcupriclvl', 'arcushipcomp', 'arcutxbl', 'arcupostal', 'artbshipvia', 'arcubord', 'artbtypecode', 'artbpriccode', 'artbcommcode', 'artmtermcd', 'arcucredlmt', 'arcustmtcode', 'arcucredhold', 'arcufinchrg', 'arcuusercode', 'arcunewfc', 'arcuunpdfc', 'arcucurbal', 'arcubalodue1', 'arcubalodue2', 'arcubalodue3', 'arcusalemtd', 'arcuinvmtd', 'arcudateopen', 'arculastsaledate', 'arcuhighbal', 'arcubigsalemo', 'arculastpaydate', 'arcuavgpaydays', 'arcuupszone', 'arcuhighbaldate', 'arcusale24mo1', 'arcuinv24mo1', 'arcusale24mo2', 'arcuinv24mo2', 'arcusale24mo3', 'arcuinv24mo3', 'arcusale24mo4', 'arcuinv24mo4', 'arcusale24mo5', 'arcuinv24mo5', 'arcusale24mo6', 'arcuinv24mo6', 'arcusale24mo7', 'arcuinv24mo7', 'arcusale24mo8', 'arcuinv24mo8', 'arcusale24mo9', 'arcuinv24mo9', 'arcusale24mo10', 'arcuinv24mo10', 'arcusale24mo11', 'arcuinv24mo11', 'arcusale24mo12', 'arcuinv24mo12', 'arcusale24mo13', 'arcuinv24mo13', 'arcusale24mo14', 'arcuinv24mo14', 'arcusale24mo15', 'arcuinv24mo15', 'arcusale24mo16', 'arcuinv24mo16', 'arcusale24mo17', 'arcuinv24mo17', 'arcusale24mo18', 'arcuinv24mo18', 'arcusale24mo19', 'arcuinv24mo19', 'arcusale24mo20', 'arcuinv24mo20', 'arcusale24mo21', 'arcuinv24mo21', 'arcusale24mo22', 'arcuinv24mo22', 'arcusale24mo23', 'arcuinv24mo23', 'arcusale24mo24', 'arcuinv24mo24', 'arculastpayamt', 'arcuordrtot', 'arcuusefrtin', 'arcumyvendid', 'arcuaddlpricdisc', 'arcuchrgfrt', 'arcucorexdays', 'arcucontractnbr', 'arcucorelf', 'arcucorebankid', 'arcudunsnbr', 'arcurfmlvalu', 'arcuforcecustpo', 'arcuagelevel', 'artbroute', 'arcuwgtaxcode', 'arcuacptsupercede', 'arcumstrcustid', 'arcusurchgpct', 'arcufrgtsplit', 'arculinemin', 'arcuordrmin', 'dateupdtd', 'timeupdtd', 'dummy', ),
        self::TYPE_COLNAME       => array(ArCustMastTableMap::COL_ARCUCUSTID, ArCustMastTableMap::COL_ARCUNAME, ArCustMastTableMap::COL_ARCUADR1, ArCustMastTableMap::COL_ARCUADR2, ArCustMastTableMap::COL_ARCUADR3, ArCustMastTableMap::COL_ARCUCTRY, ArCustMastTableMap::COL_ARCUCITY, ArCustMastTableMap::COL_ARCUSTAT, ArCustMastTableMap::COL_ARCUZIPCODE5, ArCustMastTableMap::COL_ARCUZIPCODE4, ArCustMastTableMap::COL_ARCUZIPCODE10, ArCustMastTableMap::COL_ARSPSALEPER1, ArCustMastTableMap::COL_ARSPSALEPER2, ArCustMastTableMap::COL_ARSPSALEPER3, ArCustMastTableMap::COL_ARTBMTAXCODE, ArCustMastTableMap::COL_ARCUTAXEXEMNBR, ArCustMastTableMap::COL_INTBWHSE, ArCustMastTableMap::COL_ARCUPRICLVL, ArCustMastTableMap::COL_ARCUSHIPCOMP, ArCustMastTableMap::COL_ARCUTXBL, ArCustMastTableMap::COL_ARCUPOSTAL, ArCustMastTableMap::COL_ARTBSHIPVIA, ArCustMastTableMap::COL_ARCUBORD, ArCustMastTableMap::COL_ARTBTYPECODE, ArCustMastTableMap::COL_ARTBPRICCODE, ArCustMastTableMap::COL_ARTBCOMMCODE, ArCustMastTableMap::COL_ARTMTERMCD, ArCustMastTableMap::COL_ARCUCREDLMT, ArCustMastTableMap::COL_ARCUSTMTCODE, ArCustMastTableMap::COL_ARCUCREDHOLD, ArCustMastTableMap::COL_ARCUFINCHRG, ArCustMastTableMap::COL_ARCUUSERCODE, ArCustMastTableMap::COL_ARCUNEWFC, ArCustMastTableMap::COL_ARCUUNPDFC, ArCustMastTableMap::COL_ARCUCURBAL, ArCustMastTableMap::COL_ARCUBALODUE1, ArCustMastTableMap::COL_ARCUBALODUE2, ArCustMastTableMap::COL_ARCUBALODUE3, ArCustMastTableMap::COL_ARCUSALEMTD, ArCustMastTableMap::COL_ARCUINVMTD, ArCustMastTableMap::COL_ARCUDATEOPEN, ArCustMastTableMap::COL_ARCULASTSALEDATE, ArCustMastTableMap::COL_ARCUHIGHBAL, ArCustMastTableMap::COL_ARCUBIGSALEMO, ArCustMastTableMap::COL_ARCULASTPAYDATE, ArCustMastTableMap::COL_ARCUAVGPAYDAYS, ArCustMastTableMap::COL_ARCUUPSZONE, ArCustMastTableMap::COL_ARCUHIGHBALDATE, ArCustMastTableMap::COL_ARCUSALE24MO1, ArCustMastTableMap::COL_ARCUINV24MO1, ArCustMastTableMap::COL_ARCUSALE24MO2, ArCustMastTableMap::COL_ARCUINV24MO2, ArCustMastTableMap::COL_ARCUSALE24MO3, ArCustMastTableMap::COL_ARCUINV24MO3, ArCustMastTableMap::COL_ARCUSALE24MO4, ArCustMastTableMap::COL_ARCUINV24MO4, ArCustMastTableMap::COL_ARCUSALE24MO5, ArCustMastTableMap::COL_ARCUINV24MO5, ArCustMastTableMap::COL_ARCUSALE24MO6, ArCustMastTableMap::COL_ARCUINV24MO6, ArCustMastTableMap::COL_ARCUSALE24MO7, ArCustMastTableMap::COL_ARCUINV24MO7, ArCustMastTableMap::COL_ARCUSALE24MO8, ArCustMastTableMap::COL_ARCUINV24MO8, ArCustMastTableMap::COL_ARCUSALE24MO9, ArCustMastTableMap::COL_ARCUINV24MO9, ArCustMastTableMap::COL_ARCUSALE24MO10, ArCustMastTableMap::COL_ARCUINV24MO10, ArCustMastTableMap::COL_ARCUSALE24MO11, ArCustMastTableMap::COL_ARCUINV24MO11, ArCustMastTableMap::COL_ARCUSALE24MO12, ArCustMastTableMap::COL_ARCUINV24MO12, ArCustMastTableMap::COL_ARCUSALE24MO13, ArCustMastTableMap::COL_ARCUINV24MO13, ArCustMastTableMap::COL_ARCUSALE24MO14, ArCustMastTableMap::COL_ARCUINV24MO14, ArCustMastTableMap::COL_ARCUSALE24MO15, ArCustMastTableMap::COL_ARCUINV24MO15, ArCustMastTableMap::COL_ARCUSALE24MO16, ArCustMastTableMap::COL_ARCUINV24MO16, ArCustMastTableMap::COL_ARCUSALE24MO17, ArCustMastTableMap::COL_ARCUINV24MO17, ArCustMastTableMap::COL_ARCUSALE24MO18, ArCustMastTableMap::COL_ARCUINV24MO18, ArCustMastTableMap::COL_ARCUSALE24MO19, ArCustMastTableMap::COL_ARCUINV24MO19, ArCustMastTableMap::COL_ARCUSALE24MO20, ArCustMastTableMap::COL_ARCUINV24MO20, ArCustMastTableMap::COL_ARCUSALE24MO21, ArCustMastTableMap::COL_ARCUINV24MO21, ArCustMastTableMap::COL_ARCUSALE24MO22, ArCustMastTableMap::COL_ARCUINV24MO22, ArCustMastTableMap::COL_ARCUSALE24MO23, ArCustMastTableMap::COL_ARCUINV24MO23, ArCustMastTableMap::COL_ARCUSALE24MO24, ArCustMastTableMap::COL_ARCUINV24MO24, ArCustMastTableMap::COL_ARCULASTPAYAMT, ArCustMastTableMap::COL_ARCUORDRTOT, ArCustMastTableMap::COL_ARCUUSEFRTIN, ArCustMastTableMap::COL_ARCUMYVENDID, ArCustMastTableMap::COL_ARCUADDLPRICDISC, ArCustMastTableMap::COL_ARCUCHRGFRT, ArCustMastTableMap::COL_ARCUCOREXDAYS, ArCustMastTableMap::COL_ARCUCONTRACTNBR, ArCustMastTableMap::COL_ARCUCORELF, ArCustMastTableMap::COL_ARCUCOREBANKID, ArCustMastTableMap::COL_ARCUDUNSNBR, ArCustMastTableMap::COL_ARCURFMLVALU, ArCustMastTableMap::COL_ARCUFORCECUSTPO, ArCustMastTableMap::COL_ARCUAGELEVEL, ArCustMastTableMap::COL_ARTBROUTE, ArCustMastTableMap::COL_ARCUWGTAXCODE, ArCustMastTableMap::COL_ARCUACPTSUPERCEDE, ArCustMastTableMap::COL_ARCUMSTRCUSTID, ArCustMastTableMap::COL_ARCUSURCHGPCT, ArCustMastTableMap::COL_ARCUFRGTSPLIT, ArCustMastTableMap::COL_ARCULINEMIN, ArCustMastTableMap::COL_ARCUORDRMIN, ArCustMastTableMap::COL_DATEUPDTD, ArCustMastTableMap::COL_TIMEUPDTD, ArCustMastTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId', 'ArcuName', 'ArcuAdr1', 'ArcuAdr2', 'ArcuAdr3', 'ArcuCtry', 'ArcuCity', 'ArcuStat', 'ArcuZipCode5', 'ArcuZipCode4', 'ArcuZipCode10', 'ArspSalePer1', 'ArspSalePer2', 'ArspSalePer3', 'ArtbMtaxCode', 'ArcuTaxExemNbr', 'IntbWhse', 'ArcuPricLvl', 'ArcuShipComp', 'ArcuTxbl', 'ArcuPostal', 'ArtbShipVia', 'ArcuBord', 'ArtbTypeCode', 'ArtbPricCode', 'ArtbCommCode', 'ArtmTermCd', 'ArcuCredLmt', 'ArcuStmtCode', 'ArcuCredHold', 'ArcuFinChrg', 'ArcuUserCode', 'ArcuNewFc', 'ArcuUnpdFc', 'ArcuCurBal', 'ArcuBalOdue1', 'ArcuBalOdue2', 'ArcuBalOdue3', 'ArcuSaleMtd', 'ArcuInvMtd', 'ArcuDateOpen', 'ArcuLastSaleDate', 'ArcuHighBal', 'ArcuBigSaleMo', 'ArcuLastPayDate', 'ArcuAvgPayDays', 'ArcuUpsZone', 'ArcuHighBalDate', 'ArcuSale24mo1', 'ArcuInv24mo1', 'ArcuSale24mo2', 'ArcuInv24mo2', 'ArcuSale24mo3', 'ArcuInv24mo3', 'ArcuSale24mo4', 'ArcuInv24mo4', 'ArcuSale24mo5', 'ArcuInv24mo5', 'ArcuSale24mo6', 'ArcuInv24mo6', 'ArcuSale24mo7', 'ArcuInv24mo7', 'ArcuSale24mo8', 'ArcuInv24mo8', 'ArcuSale24mo9', 'ArcuInv24mo9', 'ArcuSale24mo10', 'ArcuInv24mo10', 'ArcuSale24mo11', 'ArcuInv24mo11', 'ArcuSale24mo12', 'ArcuInv24mo12', 'ArcuSale24mo13', 'ArcuInv24mo13', 'ArcuSale24mo14', 'ArcuInv24mo14', 'ArcuSale24mo15', 'ArcuInv24mo15', 'ArcuSale24mo16', 'ArcuInv24mo16', 'ArcuSale24mo17', 'ArcuInv24mo17', 'ArcuSale24mo18', 'ArcuInv24mo18', 'ArcuSale24mo19', 'ArcuInv24mo19', 'ArcuSale24mo20', 'ArcuInv24mo20', 'ArcuSale24mo21', 'ArcuInv24mo21', 'ArcuSale24mo22', 'ArcuInv24mo22', 'ArcuSale24mo23', 'ArcuInv24mo23', 'ArcuSale24mo24', 'ArcuInv24mo24', 'ArcuLastPayAmt', 'ArcuOrdrTot', 'ArcuUseFrtIn', 'ArcuMyVendId', 'ArcuAddlPricDisc', 'ArcuChrgFrt', 'ArcuCoreXDays', 'ArcuContractNbr', 'ArcuCoreLF', 'ArcuCoreBankId', 'ArcuDunsNbr', 'ArcuRfmlValu', 'ArcuForceCustPo', 'ArcuAgeLevel', 'ArtbRoute', 'ArcuWgTaxCode', 'ArcuAcptSupercede', 'ArcuMstrCustId', 'ArcuSurchgPct', 'ArcuFrgtSplit', 'ArcuLineMin', 'ArcuOrdrMin', 'DateUpdtd', 'TimeUpdtd', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Arcucustid' => 0, 'Arcuname' => 1, 'Arcuadr1' => 2, 'Arcuadr2' => 3, 'Arcuadr3' => 4, 'Arcuctry' => 5, 'Arcucity' => 6, 'Arcustat' => 7, 'Arcuzipcode5' => 8, 'Arcuzipcode4' => 9, 'Arcuzipcode10' => 10, 'Arspsaleper1' => 11, 'Arspsaleper2' => 12, 'Arspsaleper3' => 13, 'Artbmtaxcode' => 14, 'Arcutaxexemnbr' => 15, 'Intbwhse' => 16, 'Arcupriclvl' => 17, 'Arcushipcomp' => 18, 'Arcutxbl' => 19, 'Arcupostal' => 20, 'Artbshipvia' => 21, 'Arcubord' => 22, 'Artbtypecode' => 23, 'Artbpriccode' => 24, 'Artbcommcode' => 25, 'Artmtermcd' => 26, 'Arcucredlmt' => 27, 'Arcustmtcode' => 28, 'Arcucredhold' => 29, 'Arcufinchrg' => 30, 'Arcuusercode' => 31, 'Arcunewfc' => 32, 'Arcuunpdfc' => 33, 'Arcucurbal' => 34, 'Arcubalodue1' => 35, 'Arcubalodue2' => 36, 'Arcubalodue3' => 37, 'Arcusalemtd' => 38, 'Arcuinvmtd' => 39, 'Arcudateopen' => 40, 'Arculastsaledate' => 41, 'Arcuhighbal' => 42, 'Arcubigsalemo' => 43, 'Arculastpaydate' => 44, 'Arcuavgpaydays' => 45, 'Arcuupszone' => 46, 'Arcuhighbaldate' => 47, 'Arcusale24mo1' => 48, 'Arcuinv24mo1' => 49, 'Arcusale24mo2' => 50, 'Arcuinv24mo2' => 51, 'Arcusale24mo3' => 52, 'Arcuinv24mo3' => 53, 'Arcusale24mo4' => 54, 'Arcuinv24mo4' => 55, 'Arcusale24mo5' => 56, 'Arcuinv24mo5' => 57, 'Arcusale24mo6' => 58, 'Arcuinv24mo6' => 59, 'Arcusale24mo7' => 60, 'Arcuinv24mo7' => 61, 'Arcusale24mo8' => 62, 'Arcuinv24mo8' => 63, 'Arcusale24mo9' => 64, 'Arcuinv24mo9' => 65, 'Arcusale24mo10' => 66, 'Arcuinv24mo10' => 67, 'Arcusale24mo11' => 68, 'Arcuinv24mo11' => 69, 'Arcusale24mo12' => 70, 'Arcuinv24mo12' => 71, 'Arcusale24mo13' => 72, 'Arcuinv24mo13' => 73, 'Arcusale24mo14' => 74, 'Arcuinv24mo14' => 75, 'Arcusale24mo15' => 76, 'Arcuinv24mo15' => 77, 'Arcusale24mo16' => 78, 'Arcuinv24mo16' => 79, 'Arcusale24mo17' => 80, 'Arcuinv24mo17' => 81, 'Arcusale24mo18' => 82, 'Arcuinv24mo18' => 83, 'Arcusale24mo19' => 84, 'Arcuinv24mo19' => 85, 'Arcusale24mo20' => 86, 'Arcuinv24mo20' => 87, 'Arcusale24mo21' => 88, 'Arcuinv24mo21' => 89, 'Arcusale24mo22' => 90, 'Arcuinv24mo22' => 91, 'Arcusale24mo23' => 92, 'Arcuinv24mo23' => 93, 'Arcusale24mo24' => 94, 'Arcuinv24mo24' => 95, 'Arculastpayamt' => 96, 'Arcuordrtot' => 97, 'Arcuusefrtin' => 98, 'Arcumyvendid' => 99, 'Arcuaddlpricdisc' => 100, 'Arcuchrgfrt' => 101, 'Arcucorexdays' => 102, 'Arcucontractnbr' => 103, 'Arcucorelf' => 104, 'Arcucorebankid' => 105, 'Arcudunsnbr' => 106, 'Arcurfmlvalu' => 107, 'Arcuforcecustpo' => 108, 'Arcuagelevel' => 109, 'Artbroute' => 110, 'Arcuwgtaxcode' => 111, 'Arcuacptsupercede' => 112, 'Arcumstrcustid' => 113, 'Arcusurchgpct' => 114, 'Arcufrgtsplit' => 115, 'Arculinemin' => 116, 'Arcuordrmin' => 117, 'Dateupdtd' => 118, 'Timeupdtd' => 119, 'Dummy' => 120, ),
        self::TYPE_CAMELNAME     => array('arcucustid' => 0, 'arcuname' => 1, 'arcuadr1' => 2, 'arcuadr2' => 3, 'arcuadr3' => 4, 'arcuctry' => 5, 'arcucity' => 6, 'arcustat' => 7, 'arcuzipcode5' => 8, 'arcuzipcode4' => 9, 'arcuzipcode10' => 10, 'arspsaleper1' => 11, 'arspsaleper2' => 12, 'arspsaleper3' => 13, 'artbmtaxcode' => 14, 'arcutaxexemnbr' => 15, 'intbwhse' => 16, 'arcupriclvl' => 17, 'arcushipcomp' => 18, 'arcutxbl' => 19, 'arcupostal' => 20, 'artbshipvia' => 21, 'arcubord' => 22, 'artbtypecode' => 23, 'artbpriccode' => 24, 'artbcommcode' => 25, 'artmtermcd' => 26, 'arcucredlmt' => 27, 'arcustmtcode' => 28, 'arcucredhold' => 29, 'arcufinchrg' => 30, 'arcuusercode' => 31, 'arcunewfc' => 32, 'arcuunpdfc' => 33, 'arcucurbal' => 34, 'arcubalodue1' => 35, 'arcubalodue2' => 36, 'arcubalodue3' => 37, 'arcusalemtd' => 38, 'arcuinvmtd' => 39, 'arcudateopen' => 40, 'arculastsaledate' => 41, 'arcuhighbal' => 42, 'arcubigsalemo' => 43, 'arculastpaydate' => 44, 'arcuavgpaydays' => 45, 'arcuupszone' => 46, 'arcuhighbaldate' => 47, 'arcusale24mo1' => 48, 'arcuinv24mo1' => 49, 'arcusale24mo2' => 50, 'arcuinv24mo2' => 51, 'arcusale24mo3' => 52, 'arcuinv24mo3' => 53, 'arcusale24mo4' => 54, 'arcuinv24mo4' => 55, 'arcusale24mo5' => 56, 'arcuinv24mo5' => 57, 'arcusale24mo6' => 58, 'arcuinv24mo6' => 59, 'arcusale24mo7' => 60, 'arcuinv24mo7' => 61, 'arcusale24mo8' => 62, 'arcuinv24mo8' => 63, 'arcusale24mo9' => 64, 'arcuinv24mo9' => 65, 'arcusale24mo10' => 66, 'arcuinv24mo10' => 67, 'arcusale24mo11' => 68, 'arcuinv24mo11' => 69, 'arcusale24mo12' => 70, 'arcuinv24mo12' => 71, 'arcusale24mo13' => 72, 'arcuinv24mo13' => 73, 'arcusale24mo14' => 74, 'arcuinv24mo14' => 75, 'arcusale24mo15' => 76, 'arcuinv24mo15' => 77, 'arcusale24mo16' => 78, 'arcuinv24mo16' => 79, 'arcusale24mo17' => 80, 'arcuinv24mo17' => 81, 'arcusale24mo18' => 82, 'arcuinv24mo18' => 83, 'arcusale24mo19' => 84, 'arcuinv24mo19' => 85, 'arcusale24mo20' => 86, 'arcuinv24mo20' => 87, 'arcusale24mo21' => 88, 'arcuinv24mo21' => 89, 'arcusale24mo22' => 90, 'arcuinv24mo22' => 91, 'arcusale24mo23' => 92, 'arcuinv24mo23' => 93, 'arcusale24mo24' => 94, 'arcuinv24mo24' => 95, 'arculastpayamt' => 96, 'arcuordrtot' => 97, 'arcuusefrtin' => 98, 'arcumyvendid' => 99, 'arcuaddlpricdisc' => 100, 'arcuchrgfrt' => 101, 'arcucorexdays' => 102, 'arcucontractnbr' => 103, 'arcucorelf' => 104, 'arcucorebankid' => 105, 'arcudunsnbr' => 106, 'arcurfmlvalu' => 107, 'arcuforcecustpo' => 108, 'arcuagelevel' => 109, 'artbroute' => 110, 'arcuwgtaxcode' => 111, 'arcuacptsupercede' => 112, 'arcumstrcustid' => 113, 'arcusurchgpct' => 114, 'arcufrgtsplit' => 115, 'arculinemin' => 116, 'arcuordrmin' => 117, 'dateupdtd' => 118, 'timeupdtd' => 119, 'dummy' => 120, ),
        self::TYPE_COLNAME       => array(ArCustMastTableMap::COL_ARCUCUSTID => 0, ArCustMastTableMap::COL_ARCUNAME => 1, ArCustMastTableMap::COL_ARCUADR1 => 2, ArCustMastTableMap::COL_ARCUADR2 => 3, ArCustMastTableMap::COL_ARCUADR3 => 4, ArCustMastTableMap::COL_ARCUCTRY => 5, ArCustMastTableMap::COL_ARCUCITY => 6, ArCustMastTableMap::COL_ARCUSTAT => 7, ArCustMastTableMap::COL_ARCUZIPCODE5 => 8, ArCustMastTableMap::COL_ARCUZIPCODE4 => 9, ArCustMastTableMap::COL_ARCUZIPCODE10 => 10, ArCustMastTableMap::COL_ARSPSALEPER1 => 11, ArCustMastTableMap::COL_ARSPSALEPER2 => 12, ArCustMastTableMap::COL_ARSPSALEPER3 => 13, ArCustMastTableMap::COL_ARTBMTAXCODE => 14, ArCustMastTableMap::COL_ARCUTAXEXEMNBR => 15, ArCustMastTableMap::COL_INTBWHSE => 16, ArCustMastTableMap::COL_ARCUPRICLVL => 17, ArCustMastTableMap::COL_ARCUSHIPCOMP => 18, ArCustMastTableMap::COL_ARCUTXBL => 19, ArCustMastTableMap::COL_ARCUPOSTAL => 20, ArCustMastTableMap::COL_ARTBSHIPVIA => 21, ArCustMastTableMap::COL_ARCUBORD => 22, ArCustMastTableMap::COL_ARTBTYPECODE => 23, ArCustMastTableMap::COL_ARTBPRICCODE => 24, ArCustMastTableMap::COL_ARTBCOMMCODE => 25, ArCustMastTableMap::COL_ARTMTERMCD => 26, ArCustMastTableMap::COL_ARCUCREDLMT => 27, ArCustMastTableMap::COL_ARCUSTMTCODE => 28, ArCustMastTableMap::COL_ARCUCREDHOLD => 29, ArCustMastTableMap::COL_ARCUFINCHRG => 30, ArCustMastTableMap::COL_ARCUUSERCODE => 31, ArCustMastTableMap::COL_ARCUNEWFC => 32, ArCustMastTableMap::COL_ARCUUNPDFC => 33, ArCustMastTableMap::COL_ARCUCURBAL => 34, ArCustMastTableMap::COL_ARCUBALODUE1 => 35, ArCustMastTableMap::COL_ARCUBALODUE2 => 36, ArCustMastTableMap::COL_ARCUBALODUE3 => 37, ArCustMastTableMap::COL_ARCUSALEMTD => 38, ArCustMastTableMap::COL_ARCUINVMTD => 39, ArCustMastTableMap::COL_ARCUDATEOPEN => 40, ArCustMastTableMap::COL_ARCULASTSALEDATE => 41, ArCustMastTableMap::COL_ARCUHIGHBAL => 42, ArCustMastTableMap::COL_ARCUBIGSALEMO => 43, ArCustMastTableMap::COL_ARCULASTPAYDATE => 44, ArCustMastTableMap::COL_ARCUAVGPAYDAYS => 45, ArCustMastTableMap::COL_ARCUUPSZONE => 46, ArCustMastTableMap::COL_ARCUHIGHBALDATE => 47, ArCustMastTableMap::COL_ARCUSALE24MO1 => 48, ArCustMastTableMap::COL_ARCUINV24MO1 => 49, ArCustMastTableMap::COL_ARCUSALE24MO2 => 50, ArCustMastTableMap::COL_ARCUINV24MO2 => 51, ArCustMastTableMap::COL_ARCUSALE24MO3 => 52, ArCustMastTableMap::COL_ARCUINV24MO3 => 53, ArCustMastTableMap::COL_ARCUSALE24MO4 => 54, ArCustMastTableMap::COL_ARCUINV24MO4 => 55, ArCustMastTableMap::COL_ARCUSALE24MO5 => 56, ArCustMastTableMap::COL_ARCUINV24MO5 => 57, ArCustMastTableMap::COL_ARCUSALE24MO6 => 58, ArCustMastTableMap::COL_ARCUINV24MO6 => 59, ArCustMastTableMap::COL_ARCUSALE24MO7 => 60, ArCustMastTableMap::COL_ARCUINV24MO7 => 61, ArCustMastTableMap::COL_ARCUSALE24MO8 => 62, ArCustMastTableMap::COL_ARCUINV24MO8 => 63, ArCustMastTableMap::COL_ARCUSALE24MO9 => 64, ArCustMastTableMap::COL_ARCUINV24MO9 => 65, ArCustMastTableMap::COL_ARCUSALE24MO10 => 66, ArCustMastTableMap::COL_ARCUINV24MO10 => 67, ArCustMastTableMap::COL_ARCUSALE24MO11 => 68, ArCustMastTableMap::COL_ARCUINV24MO11 => 69, ArCustMastTableMap::COL_ARCUSALE24MO12 => 70, ArCustMastTableMap::COL_ARCUINV24MO12 => 71, ArCustMastTableMap::COL_ARCUSALE24MO13 => 72, ArCustMastTableMap::COL_ARCUINV24MO13 => 73, ArCustMastTableMap::COL_ARCUSALE24MO14 => 74, ArCustMastTableMap::COL_ARCUINV24MO14 => 75, ArCustMastTableMap::COL_ARCUSALE24MO15 => 76, ArCustMastTableMap::COL_ARCUINV24MO15 => 77, ArCustMastTableMap::COL_ARCUSALE24MO16 => 78, ArCustMastTableMap::COL_ARCUINV24MO16 => 79, ArCustMastTableMap::COL_ARCUSALE24MO17 => 80, ArCustMastTableMap::COL_ARCUINV24MO17 => 81, ArCustMastTableMap::COL_ARCUSALE24MO18 => 82, ArCustMastTableMap::COL_ARCUINV24MO18 => 83, ArCustMastTableMap::COL_ARCUSALE24MO19 => 84, ArCustMastTableMap::COL_ARCUINV24MO19 => 85, ArCustMastTableMap::COL_ARCUSALE24MO20 => 86, ArCustMastTableMap::COL_ARCUINV24MO20 => 87, ArCustMastTableMap::COL_ARCUSALE24MO21 => 88, ArCustMastTableMap::COL_ARCUINV24MO21 => 89, ArCustMastTableMap::COL_ARCUSALE24MO22 => 90, ArCustMastTableMap::COL_ARCUINV24MO22 => 91, ArCustMastTableMap::COL_ARCUSALE24MO23 => 92, ArCustMastTableMap::COL_ARCUINV24MO23 => 93, ArCustMastTableMap::COL_ARCUSALE24MO24 => 94, ArCustMastTableMap::COL_ARCUINV24MO24 => 95, ArCustMastTableMap::COL_ARCULASTPAYAMT => 96, ArCustMastTableMap::COL_ARCUORDRTOT => 97, ArCustMastTableMap::COL_ARCUUSEFRTIN => 98, ArCustMastTableMap::COL_ARCUMYVENDID => 99, ArCustMastTableMap::COL_ARCUADDLPRICDISC => 100, ArCustMastTableMap::COL_ARCUCHRGFRT => 101, ArCustMastTableMap::COL_ARCUCOREXDAYS => 102, ArCustMastTableMap::COL_ARCUCONTRACTNBR => 103, ArCustMastTableMap::COL_ARCUCORELF => 104, ArCustMastTableMap::COL_ARCUCOREBANKID => 105, ArCustMastTableMap::COL_ARCUDUNSNBR => 106, ArCustMastTableMap::COL_ARCURFMLVALU => 107, ArCustMastTableMap::COL_ARCUFORCECUSTPO => 108, ArCustMastTableMap::COL_ARCUAGELEVEL => 109, ArCustMastTableMap::COL_ARTBROUTE => 110, ArCustMastTableMap::COL_ARCUWGTAXCODE => 111, ArCustMastTableMap::COL_ARCUACPTSUPERCEDE => 112, ArCustMastTableMap::COL_ARCUMSTRCUSTID => 113, ArCustMastTableMap::COL_ARCUSURCHGPCT => 114, ArCustMastTableMap::COL_ARCUFRGTSPLIT => 115, ArCustMastTableMap::COL_ARCULINEMIN => 116, ArCustMastTableMap::COL_ARCUORDRMIN => 117, ArCustMastTableMap::COL_DATEUPDTD => 118, ArCustMastTableMap::COL_TIMEUPDTD => 119, ArCustMastTableMap::COL_DUMMY => 120, ),
        self::TYPE_FIELDNAME     => array('ArcuCustId' => 0, 'ArcuName' => 1, 'ArcuAdr1' => 2, 'ArcuAdr2' => 3, 'ArcuAdr3' => 4, 'ArcuCtry' => 5, 'ArcuCity' => 6, 'ArcuStat' => 7, 'ArcuZipCode5' => 8, 'ArcuZipCode4' => 9, 'ArcuZipCode10' => 10, 'ArspSalePer1' => 11, 'ArspSalePer2' => 12, 'ArspSalePer3' => 13, 'ArtbMtaxCode' => 14, 'ArcuTaxExemNbr' => 15, 'IntbWhse' => 16, 'ArcuPricLvl' => 17, 'ArcuShipComp' => 18, 'ArcuTxbl' => 19, 'ArcuPostal' => 20, 'ArtbShipVia' => 21, 'ArcuBord' => 22, 'ArtbTypeCode' => 23, 'ArtbPricCode' => 24, 'ArtbCommCode' => 25, 'ArtmTermCd' => 26, 'ArcuCredLmt' => 27, 'ArcuStmtCode' => 28, 'ArcuCredHold' => 29, 'ArcuFinChrg' => 30, 'ArcuUserCode' => 31, 'ArcuNewFc' => 32, 'ArcuUnpdFc' => 33, 'ArcuCurBal' => 34, 'ArcuBalOdue1' => 35, 'ArcuBalOdue2' => 36, 'ArcuBalOdue3' => 37, 'ArcuSaleMtd' => 38, 'ArcuInvMtd' => 39, 'ArcuDateOpen' => 40, 'ArcuLastSaleDate' => 41, 'ArcuHighBal' => 42, 'ArcuBigSaleMo' => 43, 'ArcuLastPayDate' => 44, 'ArcuAvgPayDays' => 45, 'ArcuUpsZone' => 46, 'ArcuHighBalDate' => 47, 'ArcuSale24mo1' => 48, 'ArcuInv24mo1' => 49, 'ArcuSale24mo2' => 50, 'ArcuInv24mo2' => 51, 'ArcuSale24mo3' => 52, 'ArcuInv24mo3' => 53, 'ArcuSale24mo4' => 54, 'ArcuInv24mo4' => 55, 'ArcuSale24mo5' => 56, 'ArcuInv24mo5' => 57, 'ArcuSale24mo6' => 58, 'ArcuInv24mo6' => 59, 'ArcuSale24mo7' => 60, 'ArcuInv24mo7' => 61, 'ArcuSale24mo8' => 62, 'ArcuInv24mo8' => 63, 'ArcuSale24mo9' => 64, 'ArcuInv24mo9' => 65, 'ArcuSale24mo10' => 66, 'ArcuInv24mo10' => 67, 'ArcuSale24mo11' => 68, 'ArcuInv24mo11' => 69, 'ArcuSale24mo12' => 70, 'ArcuInv24mo12' => 71, 'ArcuSale24mo13' => 72, 'ArcuInv24mo13' => 73, 'ArcuSale24mo14' => 74, 'ArcuInv24mo14' => 75, 'ArcuSale24mo15' => 76, 'ArcuInv24mo15' => 77, 'ArcuSale24mo16' => 78, 'ArcuInv24mo16' => 79, 'ArcuSale24mo17' => 80, 'ArcuInv24mo17' => 81, 'ArcuSale24mo18' => 82, 'ArcuInv24mo18' => 83, 'ArcuSale24mo19' => 84, 'ArcuInv24mo19' => 85, 'ArcuSale24mo20' => 86, 'ArcuInv24mo20' => 87, 'ArcuSale24mo21' => 88, 'ArcuInv24mo21' => 89, 'ArcuSale24mo22' => 90, 'ArcuInv24mo22' => 91, 'ArcuSale24mo23' => 92, 'ArcuInv24mo23' => 93, 'ArcuSale24mo24' => 94, 'ArcuInv24mo24' => 95, 'ArcuLastPayAmt' => 96, 'ArcuOrdrTot' => 97, 'ArcuUseFrtIn' => 98, 'ArcuMyVendId' => 99, 'ArcuAddlPricDisc' => 100, 'ArcuChrgFrt' => 101, 'ArcuCoreXDays' => 102, 'ArcuContractNbr' => 103, 'ArcuCoreLF' => 104, 'ArcuCoreBankId' => 105, 'ArcuDunsNbr' => 106, 'ArcuRfmlValu' => 107, 'ArcuForceCustPo' => 108, 'ArcuAgeLevel' => 109, 'ArtbRoute' => 110, 'ArcuWgTaxCode' => 111, 'ArcuAcptSupercede' => 112, 'ArcuMstrCustId' => 113, 'ArcuSurchgPct' => 114, 'ArcuFrgtSplit' => 115, 'ArcuLineMin' => 116, 'ArcuOrdrMin' => 117, 'DateUpdtd' => 118, 'TimeUpdtd' => 119, 'dummy' => 120, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, )
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
        $this->setName('AR_CUST_MAST');
        $this->setPhpName('ArCustMast');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ArCustMast');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ArcuCustId', 'Arcucustid', 'VARCHAR', true, 6, '');
        $this->addColumn('ArcuName', 'Arcuname', 'VARCHAR', false, 30, null);
        $this->addColumn('ArcuAdr1', 'Arcuadr1', 'VARCHAR', false, 30, null);
        $this->addColumn('ArcuAdr2', 'Arcuadr2', 'VARCHAR', false, 30, null);
        $this->addColumn('ArcuAdr3', 'Arcuadr3', 'VARCHAR', false, 30, null);
        $this->addColumn('ArcuCtry', 'Arcuctry', 'VARCHAR', false, 4, null);
        $this->addColumn('ArcuCity', 'Arcucity', 'VARCHAR', false, 16, null);
        $this->addColumn('ArcuStat', 'Arcustat', 'VARCHAR', false, 2, null);
        $this->addColumn('ArcuZipCode5', 'Arcuzipcode5', 'VARCHAR', false, 5, null);
        $this->addColumn('ArcuZipCode4', 'Arcuzipcode4', 'VARCHAR', false, 4, null);
        $this->addColumn('ArcuZipCode10', 'Arcuzipcode10', 'VARCHAR', false, 10, null);
        $this->addColumn('ArspSalePer1', 'Arspsaleper1', 'VARCHAR', false, 6, null);
        $this->addColumn('ArspSalePer2', 'Arspsaleper2', 'VARCHAR', false, 6, null);
        $this->addColumn('ArspSalePer3', 'Arspsaleper3', 'VARCHAR', false, 6, null);
        $this->addColumn('ArtbMtaxCode', 'Artbmtaxcode', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcuTaxExemNbr', 'Arcutaxexemnbr', 'VARCHAR', false, 20, null);
        $this->addColumn('IntbWhse', 'Intbwhse', 'VARCHAR', false, 2, null);
        $this->addColumn('ArcuPricLvl', 'Arcupriclvl', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuShipComp', 'Arcushipcomp', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuTxbl', 'Arcutxbl', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuPostal', 'Arcupostal', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbShipVia', 'Artbshipvia', 'VARCHAR', false, 4, null);
        $this->addColumn('ArcuBord', 'Arcubord', 'VARCHAR', false, 1, null);
        $this->addColumn('ArtbTypeCode', 'Artbtypecode', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtbPricCode', 'Artbpriccode', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtbCommCode', 'Artbcommcode', 'VARCHAR', false, 4, null);
        $this->addColumn('ArtmTermCd', 'Artmtermcd', 'VARCHAR', false, 4, null);
        $this->addColumn('ArcuCredLmt', 'Arcucredlmt', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuStmtCode', 'Arcustmtcode', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuCredHold', 'Arcucredhold', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuFinChrg', 'Arcufinchrg', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuUserCode', 'Arcuusercode', 'VARCHAR', false, 4, null);
        $this->addColumn('ArcuNewFc', 'Arcunewfc', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuUnpdFc', 'Arcuunpdfc', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuCurBal', 'Arcucurbal', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuBalOdue1', 'Arcubalodue1', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuBalOdue2', 'Arcubalodue2', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuBalOdue3', 'Arcubalodue3', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuSaleMtd', 'Arcusalemtd', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInvMtd', 'Arcuinvmtd', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuDateOpen', 'Arcudateopen', 'INTEGER', false, 8, null);
        $this->addColumn('ArcuLastSaleDate', 'Arculastsaledate', 'INTEGER', false, 8, null);
        $this->addColumn('ArcuHighBal', 'Arcuhighbal', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuBigSaleMo', 'Arcubigsalemo', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuLastPayDate', 'Arculastpaydate', 'INTEGER', false, 8, null);
        $this->addColumn('ArcuAvgPayDays', 'Arcuavgpaydays', 'INTEGER', false, 8, null);
        $this->addColumn('ArcuUpsZone', 'Arcuupszone', 'VARCHAR', false, 4, null);
        $this->addColumn('ArcuHighBalDate', 'Arcuhighbaldate', 'INTEGER', false, 8, null);
        $this->addColumn('ArcuSale24mo1', 'Arcusale24mo1', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo1', 'Arcuinv24mo1', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo2', 'Arcusale24mo2', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo2', 'Arcuinv24mo2', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo3', 'Arcusale24mo3', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo3', 'Arcuinv24mo3', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo4', 'Arcusale24mo4', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo4', 'Arcuinv24mo4', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo5', 'Arcusale24mo5', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo5', 'Arcuinv24mo5', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo6', 'Arcusale24mo6', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo6', 'Arcuinv24mo6', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo7', 'Arcusale24mo7', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo7', 'Arcuinv24mo7', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo8', 'Arcusale24mo8', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo8', 'Arcuinv24mo8', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo9', 'Arcusale24mo9', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo9', 'Arcuinv24mo9', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo10', 'Arcusale24mo10', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo10', 'Arcuinv24mo10', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo11', 'Arcusale24mo11', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo11', 'Arcuinv24mo11', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo12', 'Arcusale24mo12', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo12', 'Arcuinv24mo12', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo13', 'Arcusale24mo13', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo13', 'Arcuinv24mo13', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo14', 'Arcusale24mo14', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo14', 'Arcuinv24mo14', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo15', 'Arcusale24mo15', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo15', 'Arcuinv24mo15', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo16', 'Arcusale24mo16', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo16', 'Arcuinv24mo16', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo17', 'Arcusale24mo17', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo17', 'Arcuinv24mo17', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo18', 'Arcusale24mo18', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo18', 'Arcuinv24mo18', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo19', 'Arcusale24mo19', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo19', 'Arcuinv24mo19', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo20', 'Arcusale24mo20', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo20', 'Arcuinv24mo20', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo21', 'Arcusale24mo21', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo21', 'Arcuinv24mo21', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo22', 'Arcusale24mo22', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo22', 'Arcuinv24mo22', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo23', 'Arcusale24mo23', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo23', 'Arcuinv24mo23', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuSale24mo24', 'Arcusale24mo24', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuInv24mo24', 'Arcuinv24mo24', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuLastPayAmt', 'Arculastpayamt', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuOrdrTot', 'Arcuordrtot', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuUseFrtIn', 'Arcuusefrtin', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuMyVendId', 'Arcumyvendid', 'VARCHAR', false, 12, null);
        $this->addColumn('ArcuAddlPricDisc', 'Arcuaddlpricdisc', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuChrgFrt', 'Arcuchrgfrt', 'VARCHAR', false, 12, null);
        $this->addColumn('ArcuCoreXDays', 'Arcucorexdays', 'INTEGER', false, 4, null);
        $this->addColumn('ArcuContractNbr', 'Arcucontractnbr', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcuCoreLF', 'Arcucorelf', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuCoreBankId', 'Arcucorebankid', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcuDunsNbr', 'Arcudunsnbr', 'VARCHAR', false, 20, null);
        $this->addColumn('ArcuRfmlValu', 'Arcurfmlvalu', 'INTEGER', false, 3, null);
        $this->addColumn('ArcuForceCustPo', 'Arcuforcecustpo', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuAgeLevel', 'Arcuagelevel', 'INTEGER', false, 3, null);
        $this->addColumn('ArtbRoute', 'Artbroute', 'VARCHAR', false, 4, null);
        $this->addColumn('ArcuWgTaxCode', 'Arcuwgtaxcode', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcuAcptSupercede', 'Arcuacptsupercede', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuMstrCustId', 'Arcumstrcustid', 'VARCHAR', false, 6, null);
        $this->addColumn('ArcuSurchgPct', 'Arcusurchgpct', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuFrgtSplit', 'Arcufrgtsplit', 'VARCHAR', false, 1, null);
        $this->addColumn('ArcuLineMin', 'Arculinemin', 'DECIMAL', false, 20, null);
        $this->addColumn('ArcuOrdrMin', 'Arcuordrmin', 'DECIMAL', false, 20, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'INTEGER', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'INTEGER', false, 8, null);
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
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
        return (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ArCustMastTableMap::CLASS_DEFAULT : ArCustMastTableMap::OM_CLASS;
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
     * @return array           (ArCustMast object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ArCustMastTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ArCustMastTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ArCustMastTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ArCustMastTableMap::OM_CLASS;
            /** @var ArCustMast $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ArCustMastTableMap::addInstanceToPool($obj, $key);
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
            $key = ArCustMastTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ArCustMastTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ArCustMast $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ArCustMastTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUCUSTID);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUNAME);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUADR1);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUADR2);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUADR3);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUCTRY);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUCITY);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSTAT);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUZIPCODE5);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUZIPCODE4);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUZIPCODE10);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARSPSALEPER1);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARSPSALEPER2);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARSPSALEPER3);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARTBMTAXCODE);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUTAXEXEMNBR);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_INTBWHSE);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUPRICLVL);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSHIPCOMP);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUTXBL);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUPOSTAL);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARTBSHIPVIA);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUBORD);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARTBTYPECODE);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARTBPRICCODE);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARTBCOMMCODE);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARTMTERMCD);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUCREDLMT);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSTMTCODE);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUCREDHOLD);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUFINCHRG);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUUSERCODE);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUNEWFC);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUUNPDFC);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUCURBAL);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUBALODUE1);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUBALODUE2);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUBALODUE3);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALEMTD);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINVMTD);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUDATEOPEN);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCULASTSALEDATE);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUHIGHBAL);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUBIGSALEMO);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCULASTPAYDATE);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUAVGPAYDAYS);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUUPSZONE);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUHIGHBALDATE);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO1);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO1);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO2);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO2);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO3);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO3);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO4);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO4);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO5);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO5);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO6);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO6);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO7);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO7);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO8);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO8);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO9);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO9);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO10);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO10);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO11);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO11);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO12);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO12);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO13);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO13);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO14);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO14);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO15);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO15);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO16);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO16);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO17);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO17);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO18);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO18);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO19);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO19);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO20);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO20);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO21);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO21);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO22);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO22);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO23);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO23);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSALE24MO24);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUINV24MO24);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCULASTPAYAMT);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUORDRTOT);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUUSEFRTIN);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUMYVENDID);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUADDLPRICDISC);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUCHRGFRT);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUCOREXDAYS);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUCONTRACTNBR);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUCORELF);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUCOREBANKID);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUDUNSNBR);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCURFMLVALU);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUFORCECUSTPO);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUAGELEVEL);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARTBROUTE);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUWGTAXCODE);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUACPTSUPERCEDE);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUMSTRCUSTID);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUSURCHGPCT);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUFRGTSPLIT);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCULINEMIN);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_ARCUORDRMIN);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(ArCustMastTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.ArcuCustId');
            $criteria->addSelectColumn($alias . '.ArcuName');
            $criteria->addSelectColumn($alias . '.ArcuAdr1');
            $criteria->addSelectColumn($alias . '.ArcuAdr2');
            $criteria->addSelectColumn($alias . '.ArcuAdr3');
            $criteria->addSelectColumn($alias . '.ArcuCtry');
            $criteria->addSelectColumn($alias . '.ArcuCity');
            $criteria->addSelectColumn($alias . '.ArcuStat');
            $criteria->addSelectColumn($alias . '.ArcuZipCode5');
            $criteria->addSelectColumn($alias . '.ArcuZipCode4');
            $criteria->addSelectColumn($alias . '.ArcuZipCode10');
            $criteria->addSelectColumn($alias . '.ArspSalePer1');
            $criteria->addSelectColumn($alias . '.ArspSalePer2');
            $criteria->addSelectColumn($alias . '.ArspSalePer3');
            $criteria->addSelectColumn($alias . '.ArtbMtaxCode');
            $criteria->addSelectColumn($alias . '.ArcuTaxExemNbr');
            $criteria->addSelectColumn($alias . '.IntbWhse');
            $criteria->addSelectColumn($alias . '.ArcuPricLvl');
            $criteria->addSelectColumn($alias . '.ArcuShipComp');
            $criteria->addSelectColumn($alias . '.ArcuTxbl');
            $criteria->addSelectColumn($alias . '.ArcuPostal');
            $criteria->addSelectColumn($alias . '.ArtbShipVia');
            $criteria->addSelectColumn($alias . '.ArcuBord');
            $criteria->addSelectColumn($alias . '.ArtbTypeCode');
            $criteria->addSelectColumn($alias . '.ArtbPricCode');
            $criteria->addSelectColumn($alias . '.ArtbCommCode');
            $criteria->addSelectColumn($alias . '.ArtmTermCd');
            $criteria->addSelectColumn($alias . '.ArcuCredLmt');
            $criteria->addSelectColumn($alias . '.ArcuStmtCode');
            $criteria->addSelectColumn($alias . '.ArcuCredHold');
            $criteria->addSelectColumn($alias . '.ArcuFinChrg');
            $criteria->addSelectColumn($alias . '.ArcuUserCode');
            $criteria->addSelectColumn($alias . '.ArcuNewFc');
            $criteria->addSelectColumn($alias . '.ArcuUnpdFc');
            $criteria->addSelectColumn($alias . '.ArcuCurBal');
            $criteria->addSelectColumn($alias . '.ArcuBalOdue1');
            $criteria->addSelectColumn($alias . '.ArcuBalOdue2');
            $criteria->addSelectColumn($alias . '.ArcuBalOdue3');
            $criteria->addSelectColumn($alias . '.ArcuSaleMtd');
            $criteria->addSelectColumn($alias . '.ArcuInvMtd');
            $criteria->addSelectColumn($alias . '.ArcuDateOpen');
            $criteria->addSelectColumn($alias . '.ArcuLastSaleDate');
            $criteria->addSelectColumn($alias . '.ArcuHighBal');
            $criteria->addSelectColumn($alias . '.ArcuBigSaleMo');
            $criteria->addSelectColumn($alias . '.ArcuLastPayDate');
            $criteria->addSelectColumn($alias . '.ArcuAvgPayDays');
            $criteria->addSelectColumn($alias . '.ArcuUpsZone');
            $criteria->addSelectColumn($alias . '.ArcuHighBalDate');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo1');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo1');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo2');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo2');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo3');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo3');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo4');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo4');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo5');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo5');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo6');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo6');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo7');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo7');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo8');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo8');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo9');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo9');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo10');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo10');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo11');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo11');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo12');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo12');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo13');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo13');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo14');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo14');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo15');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo15');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo16');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo16');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo17');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo17');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo18');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo18');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo19');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo19');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo20');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo20');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo21');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo21');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo22');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo22');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo23');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo23');
            $criteria->addSelectColumn($alias . '.ArcuSale24mo24');
            $criteria->addSelectColumn($alias . '.ArcuInv24mo24');
            $criteria->addSelectColumn($alias . '.ArcuLastPayAmt');
            $criteria->addSelectColumn($alias . '.ArcuOrdrTot');
            $criteria->addSelectColumn($alias . '.ArcuUseFrtIn');
            $criteria->addSelectColumn($alias . '.ArcuMyVendId');
            $criteria->addSelectColumn($alias . '.ArcuAddlPricDisc');
            $criteria->addSelectColumn($alias . '.ArcuChrgFrt');
            $criteria->addSelectColumn($alias . '.ArcuCoreXDays');
            $criteria->addSelectColumn($alias . '.ArcuContractNbr');
            $criteria->addSelectColumn($alias . '.ArcuCoreLF');
            $criteria->addSelectColumn($alias . '.ArcuCoreBankId');
            $criteria->addSelectColumn($alias . '.ArcuDunsNbr');
            $criteria->addSelectColumn($alias . '.ArcuRfmlValu');
            $criteria->addSelectColumn($alias . '.ArcuForceCustPo');
            $criteria->addSelectColumn($alias . '.ArcuAgeLevel');
            $criteria->addSelectColumn($alias . '.ArtbRoute');
            $criteria->addSelectColumn($alias . '.ArcuWgTaxCode');
            $criteria->addSelectColumn($alias . '.ArcuAcptSupercede');
            $criteria->addSelectColumn($alias . '.ArcuMstrCustId');
            $criteria->addSelectColumn($alias . '.ArcuSurchgPct');
            $criteria->addSelectColumn($alias . '.ArcuFrgtSplit');
            $criteria->addSelectColumn($alias . '.ArcuLineMin');
            $criteria->addSelectColumn($alias . '.ArcuOrdrMin');
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
        return Propel::getServiceContainer()->getDatabaseMap(ArCustMastTableMap::DATABASE_NAME)->getTable(ArCustMastTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ArCustMastTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ArCustMastTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ArCustMastTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ArCustMast or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ArCustMast object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArCustMastTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ArCustMast) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ArCustMastTableMap::DATABASE_NAME);
            $criteria->add(ArCustMastTableMap::COL_ARCUCUSTID, (array) $values, Criteria::IN);
        }

        $query = ArCustMastQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ArCustMastTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ArCustMastTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the AR_CUST_MAST table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ArCustMastQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ArCustMast or Criteria object.
     *
     * @param mixed               $criteria Criteria or ArCustMast object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArCustMastTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ArCustMast object
        }


        // Set the correct dbName
        $query = ArCustMastQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ArCustMastTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ArCustMastTableMap::buildTableMap();
