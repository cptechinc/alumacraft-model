<?php

namespace Base;

use \ArCustMast as ChildArCustMast;
use \ArCustMastQuery as ChildArCustMastQuery;
use \Exception;
use \PDO;
use Map\ArCustMastTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'AR_CUST_MAST' table.
 *
 *
 *
 * @method     ChildArCustMastQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildArCustMastQuery orderByArcuname($order = Criteria::ASC) Order by the ArcuName column
 * @method     ChildArCustMastQuery orderByArcuadr1($order = Criteria::ASC) Order by the ArcuAdr1 column
 * @method     ChildArCustMastQuery orderByArcuadr2($order = Criteria::ASC) Order by the ArcuAdr2 column
 * @method     ChildArCustMastQuery orderByArcuadr3($order = Criteria::ASC) Order by the ArcuAdr3 column
 * @method     ChildArCustMastQuery orderByArcuctry($order = Criteria::ASC) Order by the ArcuCtry column
 * @method     ChildArCustMastQuery orderByArcucity($order = Criteria::ASC) Order by the ArcuCity column
 * @method     ChildArCustMastQuery orderByArcustat($order = Criteria::ASC) Order by the ArcuStat column
 * @method     ChildArCustMastQuery orderByArcuzipcode5($order = Criteria::ASC) Order by the ArcuZipCode5 column
 * @method     ChildArCustMastQuery orderByArcuzipcode4($order = Criteria::ASC) Order by the ArcuZipCode4 column
 * @method     ChildArCustMastQuery orderByArcuzipcode10($order = Criteria::ASC) Order by the ArcuZipCode10 column
 * @method     ChildArCustMastQuery orderByArspsaleper1($order = Criteria::ASC) Order by the ArspSalePer1 column
 * @method     ChildArCustMastQuery orderByArspsaleper2($order = Criteria::ASC) Order by the ArspSalePer2 column
 * @method     ChildArCustMastQuery orderByArspsaleper3($order = Criteria::ASC) Order by the ArspSalePer3 column
 * @method     ChildArCustMastQuery orderByArtbmtaxcode($order = Criteria::ASC) Order by the ArtbMtaxCode column
 * @method     ChildArCustMastQuery orderByArcutaxexemnbr($order = Criteria::ASC) Order by the ArcuTaxExemNbr column
 * @method     ChildArCustMastQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildArCustMastQuery orderByArcupriclvl($order = Criteria::ASC) Order by the ArcuPricLvl column
 * @method     ChildArCustMastQuery orderByArcushipcomp($order = Criteria::ASC) Order by the ArcuShipComp column
 * @method     ChildArCustMastQuery orderByArcutxbl($order = Criteria::ASC) Order by the ArcuTxbl column
 * @method     ChildArCustMastQuery orderByArcupostal($order = Criteria::ASC) Order by the ArcuPostal column
 * @method     ChildArCustMastQuery orderByArtbshipvia($order = Criteria::ASC) Order by the ArtbShipVia column
 * @method     ChildArCustMastQuery orderByArcubord($order = Criteria::ASC) Order by the ArcuBord column
 * @method     ChildArCustMastQuery orderByArtbtypecode($order = Criteria::ASC) Order by the ArtbTypeCode column
 * @method     ChildArCustMastQuery orderByArtbpriccode($order = Criteria::ASC) Order by the ArtbPricCode column
 * @method     ChildArCustMastQuery orderByArtbcommcode($order = Criteria::ASC) Order by the ArtbCommCode column
 * @method     ChildArCustMastQuery orderByArtmtermcd($order = Criteria::ASC) Order by the ArtmTermCd column
 * @method     ChildArCustMastQuery orderByArcucredlmt($order = Criteria::ASC) Order by the ArcuCredLmt column
 * @method     ChildArCustMastQuery orderByArcustmtcode($order = Criteria::ASC) Order by the ArcuStmtCode column
 * @method     ChildArCustMastQuery orderByArcucredhold($order = Criteria::ASC) Order by the ArcuCredHold column
 * @method     ChildArCustMastQuery orderByArcufinchrg($order = Criteria::ASC) Order by the ArcuFinChrg column
 * @method     ChildArCustMastQuery orderByArcuusercode($order = Criteria::ASC) Order by the ArcuUserCode column
 * @method     ChildArCustMastQuery orderByArcunewfc($order = Criteria::ASC) Order by the ArcuNewFc column
 * @method     ChildArCustMastQuery orderByArcuunpdfc($order = Criteria::ASC) Order by the ArcuUnpdFc column
 * @method     ChildArCustMastQuery orderByArcucurbal($order = Criteria::ASC) Order by the ArcuCurBal column
 * @method     ChildArCustMastQuery orderByArcubalodue1($order = Criteria::ASC) Order by the ArcuBalOdue1 column
 * @method     ChildArCustMastQuery orderByArcubalodue2($order = Criteria::ASC) Order by the ArcuBalOdue2 column
 * @method     ChildArCustMastQuery orderByArcubalodue3($order = Criteria::ASC) Order by the ArcuBalOdue3 column
 * @method     ChildArCustMastQuery orderByArcusalemtd($order = Criteria::ASC) Order by the ArcuSaleMtd column
 * @method     ChildArCustMastQuery orderByArcuinvmtd($order = Criteria::ASC) Order by the ArcuInvMtd column
 * @method     ChildArCustMastQuery orderByArcudateopen($order = Criteria::ASC) Order by the ArcuDateOpen column
 * @method     ChildArCustMastQuery orderByArculastsaledate($order = Criteria::ASC) Order by the ArcuLastSaleDate column
 * @method     ChildArCustMastQuery orderByArcuhighbal($order = Criteria::ASC) Order by the ArcuHighBal column
 * @method     ChildArCustMastQuery orderByArcubigsalemo($order = Criteria::ASC) Order by the ArcuBigSaleMo column
 * @method     ChildArCustMastQuery orderByArculastpaydate($order = Criteria::ASC) Order by the ArcuLastPayDate column
 * @method     ChildArCustMastQuery orderByArcuavgpaydays($order = Criteria::ASC) Order by the ArcuAvgPayDays column
 * @method     ChildArCustMastQuery orderByArcuupszone($order = Criteria::ASC) Order by the ArcuUpsZone column
 * @method     ChildArCustMastQuery orderByArcuhighbaldate($order = Criteria::ASC) Order by the ArcuHighBalDate column
 * @method     ChildArCustMastQuery orderByArcusale24mo1($order = Criteria::ASC) Order by the ArcuSale24mo1 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo1($order = Criteria::ASC) Order by the ArcuInv24mo1 column
 * @method     ChildArCustMastQuery orderByArcusale24mo2($order = Criteria::ASC) Order by the ArcuSale24mo2 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo2($order = Criteria::ASC) Order by the ArcuInv24mo2 column
 * @method     ChildArCustMastQuery orderByArcusale24mo3($order = Criteria::ASC) Order by the ArcuSale24mo3 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo3($order = Criteria::ASC) Order by the ArcuInv24mo3 column
 * @method     ChildArCustMastQuery orderByArcusale24mo4($order = Criteria::ASC) Order by the ArcuSale24mo4 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo4($order = Criteria::ASC) Order by the ArcuInv24mo4 column
 * @method     ChildArCustMastQuery orderByArcusale24mo5($order = Criteria::ASC) Order by the ArcuSale24mo5 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo5($order = Criteria::ASC) Order by the ArcuInv24mo5 column
 * @method     ChildArCustMastQuery orderByArcusale24mo6($order = Criteria::ASC) Order by the ArcuSale24mo6 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo6($order = Criteria::ASC) Order by the ArcuInv24mo6 column
 * @method     ChildArCustMastQuery orderByArcusale24mo7($order = Criteria::ASC) Order by the ArcuSale24mo7 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo7($order = Criteria::ASC) Order by the ArcuInv24mo7 column
 * @method     ChildArCustMastQuery orderByArcusale24mo8($order = Criteria::ASC) Order by the ArcuSale24mo8 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo8($order = Criteria::ASC) Order by the ArcuInv24mo8 column
 * @method     ChildArCustMastQuery orderByArcusale24mo9($order = Criteria::ASC) Order by the ArcuSale24mo9 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo9($order = Criteria::ASC) Order by the ArcuInv24mo9 column
 * @method     ChildArCustMastQuery orderByArcusale24mo10($order = Criteria::ASC) Order by the ArcuSale24mo10 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo10($order = Criteria::ASC) Order by the ArcuInv24mo10 column
 * @method     ChildArCustMastQuery orderByArcusale24mo11($order = Criteria::ASC) Order by the ArcuSale24mo11 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo11($order = Criteria::ASC) Order by the ArcuInv24mo11 column
 * @method     ChildArCustMastQuery orderByArcusale24mo12($order = Criteria::ASC) Order by the ArcuSale24mo12 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo12($order = Criteria::ASC) Order by the ArcuInv24mo12 column
 * @method     ChildArCustMastQuery orderByArcusale24mo13($order = Criteria::ASC) Order by the ArcuSale24mo13 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo13($order = Criteria::ASC) Order by the ArcuInv24mo13 column
 * @method     ChildArCustMastQuery orderByArcusale24mo14($order = Criteria::ASC) Order by the ArcuSale24mo14 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo14($order = Criteria::ASC) Order by the ArcuInv24mo14 column
 * @method     ChildArCustMastQuery orderByArcusale24mo15($order = Criteria::ASC) Order by the ArcuSale24mo15 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo15($order = Criteria::ASC) Order by the ArcuInv24mo15 column
 * @method     ChildArCustMastQuery orderByArcusale24mo16($order = Criteria::ASC) Order by the ArcuSale24mo16 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo16($order = Criteria::ASC) Order by the ArcuInv24mo16 column
 * @method     ChildArCustMastQuery orderByArcusale24mo17($order = Criteria::ASC) Order by the ArcuSale24mo17 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo17($order = Criteria::ASC) Order by the ArcuInv24mo17 column
 * @method     ChildArCustMastQuery orderByArcusale24mo18($order = Criteria::ASC) Order by the ArcuSale24mo18 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo18($order = Criteria::ASC) Order by the ArcuInv24mo18 column
 * @method     ChildArCustMastQuery orderByArcusale24mo19($order = Criteria::ASC) Order by the ArcuSale24mo19 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo19($order = Criteria::ASC) Order by the ArcuInv24mo19 column
 * @method     ChildArCustMastQuery orderByArcusale24mo20($order = Criteria::ASC) Order by the ArcuSale24mo20 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo20($order = Criteria::ASC) Order by the ArcuInv24mo20 column
 * @method     ChildArCustMastQuery orderByArcusale24mo21($order = Criteria::ASC) Order by the ArcuSale24mo21 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo21($order = Criteria::ASC) Order by the ArcuInv24mo21 column
 * @method     ChildArCustMastQuery orderByArcusale24mo22($order = Criteria::ASC) Order by the ArcuSale24mo22 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo22($order = Criteria::ASC) Order by the ArcuInv24mo22 column
 * @method     ChildArCustMastQuery orderByArcusale24mo23($order = Criteria::ASC) Order by the ArcuSale24mo23 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo23($order = Criteria::ASC) Order by the ArcuInv24mo23 column
 * @method     ChildArCustMastQuery orderByArcusale24mo24($order = Criteria::ASC) Order by the ArcuSale24mo24 column
 * @method     ChildArCustMastQuery orderByArcuinv24mo24($order = Criteria::ASC) Order by the ArcuInv24mo24 column
 * @method     ChildArCustMastQuery orderByArculastpayamt($order = Criteria::ASC) Order by the ArcuLastPayAmt column
 * @method     ChildArCustMastQuery orderByArcuordrtot($order = Criteria::ASC) Order by the ArcuOrdrTot column
 * @method     ChildArCustMastQuery orderByArcuusefrtin($order = Criteria::ASC) Order by the ArcuUseFrtIn column
 * @method     ChildArCustMastQuery orderByArcumyvendid($order = Criteria::ASC) Order by the ArcuMyVendId column
 * @method     ChildArCustMastQuery orderByArcuaddlpricdisc($order = Criteria::ASC) Order by the ArcuAddlPricDisc column
 * @method     ChildArCustMastQuery orderByArcuchrgfrt($order = Criteria::ASC) Order by the ArcuChrgFrt column
 * @method     ChildArCustMastQuery orderByArcucorexdays($order = Criteria::ASC) Order by the ArcuCoreXDays column
 * @method     ChildArCustMastQuery orderByArcucontractnbr($order = Criteria::ASC) Order by the ArcuContractNbr column
 * @method     ChildArCustMastQuery orderByArcucorelf($order = Criteria::ASC) Order by the ArcuCoreLF column
 * @method     ChildArCustMastQuery orderByArcucorebankid($order = Criteria::ASC) Order by the ArcuCoreBankId column
 * @method     ChildArCustMastQuery orderByArcudunsnbr($order = Criteria::ASC) Order by the ArcuDunsNbr column
 * @method     ChildArCustMastQuery orderByArcurfmlvalu($order = Criteria::ASC) Order by the ArcuRfmlValu column
 * @method     ChildArCustMastQuery orderByArcuforcecustpo($order = Criteria::ASC) Order by the ArcuForceCustPo column
 * @method     ChildArCustMastQuery orderByArcuagelevel($order = Criteria::ASC) Order by the ArcuAgeLevel column
 * @method     ChildArCustMastQuery orderByArtbroute($order = Criteria::ASC) Order by the ArtbRoute column
 * @method     ChildArCustMastQuery orderByArcuwgtaxcode($order = Criteria::ASC) Order by the ArcuWgTaxCode column
 * @method     ChildArCustMastQuery orderByArcuacptsupercede($order = Criteria::ASC) Order by the ArcuAcptSupercede column
 * @method     ChildArCustMastQuery orderByArcumstrcustid($order = Criteria::ASC) Order by the ArcuMstrCustId column
 * @method     ChildArCustMastQuery orderByArcusurchgpct($order = Criteria::ASC) Order by the ArcuSurchgPct column
 * @method     ChildArCustMastQuery orderByArcufrgtsplit($order = Criteria::ASC) Order by the ArcuFrgtSplit column
 * @method     ChildArCustMastQuery orderByArculinemin($order = Criteria::ASC) Order by the ArcuLineMin column
 * @method     ChildArCustMastQuery orderByArcuordrmin($order = Criteria::ASC) Order by the ArcuOrdrMin column
 * @method     ChildArCustMastQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArCustMastQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArCustMastQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArCustMastQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildArCustMastQuery groupByArcuname() Group by the ArcuName column
 * @method     ChildArCustMastQuery groupByArcuadr1() Group by the ArcuAdr1 column
 * @method     ChildArCustMastQuery groupByArcuadr2() Group by the ArcuAdr2 column
 * @method     ChildArCustMastQuery groupByArcuadr3() Group by the ArcuAdr3 column
 * @method     ChildArCustMastQuery groupByArcuctry() Group by the ArcuCtry column
 * @method     ChildArCustMastQuery groupByArcucity() Group by the ArcuCity column
 * @method     ChildArCustMastQuery groupByArcustat() Group by the ArcuStat column
 * @method     ChildArCustMastQuery groupByArcuzipcode5() Group by the ArcuZipCode5 column
 * @method     ChildArCustMastQuery groupByArcuzipcode4() Group by the ArcuZipCode4 column
 * @method     ChildArCustMastQuery groupByArcuzipcode10() Group by the ArcuZipCode10 column
 * @method     ChildArCustMastQuery groupByArspsaleper1() Group by the ArspSalePer1 column
 * @method     ChildArCustMastQuery groupByArspsaleper2() Group by the ArspSalePer2 column
 * @method     ChildArCustMastQuery groupByArspsaleper3() Group by the ArspSalePer3 column
 * @method     ChildArCustMastQuery groupByArtbmtaxcode() Group by the ArtbMtaxCode column
 * @method     ChildArCustMastQuery groupByArcutaxexemnbr() Group by the ArcuTaxExemNbr column
 * @method     ChildArCustMastQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildArCustMastQuery groupByArcupriclvl() Group by the ArcuPricLvl column
 * @method     ChildArCustMastQuery groupByArcushipcomp() Group by the ArcuShipComp column
 * @method     ChildArCustMastQuery groupByArcutxbl() Group by the ArcuTxbl column
 * @method     ChildArCustMastQuery groupByArcupostal() Group by the ArcuPostal column
 * @method     ChildArCustMastQuery groupByArtbshipvia() Group by the ArtbShipVia column
 * @method     ChildArCustMastQuery groupByArcubord() Group by the ArcuBord column
 * @method     ChildArCustMastQuery groupByArtbtypecode() Group by the ArtbTypeCode column
 * @method     ChildArCustMastQuery groupByArtbpriccode() Group by the ArtbPricCode column
 * @method     ChildArCustMastQuery groupByArtbcommcode() Group by the ArtbCommCode column
 * @method     ChildArCustMastQuery groupByArtmtermcd() Group by the ArtmTermCd column
 * @method     ChildArCustMastQuery groupByArcucredlmt() Group by the ArcuCredLmt column
 * @method     ChildArCustMastQuery groupByArcustmtcode() Group by the ArcuStmtCode column
 * @method     ChildArCustMastQuery groupByArcucredhold() Group by the ArcuCredHold column
 * @method     ChildArCustMastQuery groupByArcufinchrg() Group by the ArcuFinChrg column
 * @method     ChildArCustMastQuery groupByArcuusercode() Group by the ArcuUserCode column
 * @method     ChildArCustMastQuery groupByArcunewfc() Group by the ArcuNewFc column
 * @method     ChildArCustMastQuery groupByArcuunpdfc() Group by the ArcuUnpdFc column
 * @method     ChildArCustMastQuery groupByArcucurbal() Group by the ArcuCurBal column
 * @method     ChildArCustMastQuery groupByArcubalodue1() Group by the ArcuBalOdue1 column
 * @method     ChildArCustMastQuery groupByArcubalodue2() Group by the ArcuBalOdue2 column
 * @method     ChildArCustMastQuery groupByArcubalodue3() Group by the ArcuBalOdue3 column
 * @method     ChildArCustMastQuery groupByArcusalemtd() Group by the ArcuSaleMtd column
 * @method     ChildArCustMastQuery groupByArcuinvmtd() Group by the ArcuInvMtd column
 * @method     ChildArCustMastQuery groupByArcudateopen() Group by the ArcuDateOpen column
 * @method     ChildArCustMastQuery groupByArculastsaledate() Group by the ArcuLastSaleDate column
 * @method     ChildArCustMastQuery groupByArcuhighbal() Group by the ArcuHighBal column
 * @method     ChildArCustMastQuery groupByArcubigsalemo() Group by the ArcuBigSaleMo column
 * @method     ChildArCustMastQuery groupByArculastpaydate() Group by the ArcuLastPayDate column
 * @method     ChildArCustMastQuery groupByArcuavgpaydays() Group by the ArcuAvgPayDays column
 * @method     ChildArCustMastQuery groupByArcuupszone() Group by the ArcuUpsZone column
 * @method     ChildArCustMastQuery groupByArcuhighbaldate() Group by the ArcuHighBalDate column
 * @method     ChildArCustMastQuery groupByArcusale24mo1() Group by the ArcuSale24mo1 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo1() Group by the ArcuInv24mo1 column
 * @method     ChildArCustMastQuery groupByArcusale24mo2() Group by the ArcuSale24mo2 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo2() Group by the ArcuInv24mo2 column
 * @method     ChildArCustMastQuery groupByArcusale24mo3() Group by the ArcuSale24mo3 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo3() Group by the ArcuInv24mo3 column
 * @method     ChildArCustMastQuery groupByArcusale24mo4() Group by the ArcuSale24mo4 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo4() Group by the ArcuInv24mo4 column
 * @method     ChildArCustMastQuery groupByArcusale24mo5() Group by the ArcuSale24mo5 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo5() Group by the ArcuInv24mo5 column
 * @method     ChildArCustMastQuery groupByArcusale24mo6() Group by the ArcuSale24mo6 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo6() Group by the ArcuInv24mo6 column
 * @method     ChildArCustMastQuery groupByArcusale24mo7() Group by the ArcuSale24mo7 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo7() Group by the ArcuInv24mo7 column
 * @method     ChildArCustMastQuery groupByArcusale24mo8() Group by the ArcuSale24mo8 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo8() Group by the ArcuInv24mo8 column
 * @method     ChildArCustMastQuery groupByArcusale24mo9() Group by the ArcuSale24mo9 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo9() Group by the ArcuInv24mo9 column
 * @method     ChildArCustMastQuery groupByArcusale24mo10() Group by the ArcuSale24mo10 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo10() Group by the ArcuInv24mo10 column
 * @method     ChildArCustMastQuery groupByArcusale24mo11() Group by the ArcuSale24mo11 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo11() Group by the ArcuInv24mo11 column
 * @method     ChildArCustMastQuery groupByArcusale24mo12() Group by the ArcuSale24mo12 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo12() Group by the ArcuInv24mo12 column
 * @method     ChildArCustMastQuery groupByArcusale24mo13() Group by the ArcuSale24mo13 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo13() Group by the ArcuInv24mo13 column
 * @method     ChildArCustMastQuery groupByArcusale24mo14() Group by the ArcuSale24mo14 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo14() Group by the ArcuInv24mo14 column
 * @method     ChildArCustMastQuery groupByArcusale24mo15() Group by the ArcuSale24mo15 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo15() Group by the ArcuInv24mo15 column
 * @method     ChildArCustMastQuery groupByArcusale24mo16() Group by the ArcuSale24mo16 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo16() Group by the ArcuInv24mo16 column
 * @method     ChildArCustMastQuery groupByArcusale24mo17() Group by the ArcuSale24mo17 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo17() Group by the ArcuInv24mo17 column
 * @method     ChildArCustMastQuery groupByArcusale24mo18() Group by the ArcuSale24mo18 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo18() Group by the ArcuInv24mo18 column
 * @method     ChildArCustMastQuery groupByArcusale24mo19() Group by the ArcuSale24mo19 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo19() Group by the ArcuInv24mo19 column
 * @method     ChildArCustMastQuery groupByArcusale24mo20() Group by the ArcuSale24mo20 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo20() Group by the ArcuInv24mo20 column
 * @method     ChildArCustMastQuery groupByArcusale24mo21() Group by the ArcuSale24mo21 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo21() Group by the ArcuInv24mo21 column
 * @method     ChildArCustMastQuery groupByArcusale24mo22() Group by the ArcuSale24mo22 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo22() Group by the ArcuInv24mo22 column
 * @method     ChildArCustMastQuery groupByArcusale24mo23() Group by the ArcuSale24mo23 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo23() Group by the ArcuInv24mo23 column
 * @method     ChildArCustMastQuery groupByArcusale24mo24() Group by the ArcuSale24mo24 column
 * @method     ChildArCustMastQuery groupByArcuinv24mo24() Group by the ArcuInv24mo24 column
 * @method     ChildArCustMastQuery groupByArculastpayamt() Group by the ArcuLastPayAmt column
 * @method     ChildArCustMastQuery groupByArcuordrtot() Group by the ArcuOrdrTot column
 * @method     ChildArCustMastQuery groupByArcuusefrtin() Group by the ArcuUseFrtIn column
 * @method     ChildArCustMastQuery groupByArcumyvendid() Group by the ArcuMyVendId column
 * @method     ChildArCustMastQuery groupByArcuaddlpricdisc() Group by the ArcuAddlPricDisc column
 * @method     ChildArCustMastQuery groupByArcuchrgfrt() Group by the ArcuChrgFrt column
 * @method     ChildArCustMastQuery groupByArcucorexdays() Group by the ArcuCoreXDays column
 * @method     ChildArCustMastQuery groupByArcucontractnbr() Group by the ArcuContractNbr column
 * @method     ChildArCustMastQuery groupByArcucorelf() Group by the ArcuCoreLF column
 * @method     ChildArCustMastQuery groupByArcucorebankid() Group by the ArcuCoreBankId column
 * @method     ChildArCustMastQuery groupByArcudunsnbr() Group by the ArcuDunsNbr column
 * @method     ChildArCustMastQuery groupByArcurfmlvalu() Group by the ArcuRfmlValu column
 * @method     ChildArCustMastQuery groupByArcuforcecustpo() Group by the ArcuForceCustPo column
 * @method     ChildArCustMastQuery groupByArcuagelevel() Group by the ArcuAgeLevel column
 * @method     ChildArCustMastQuery groupByArtbroute() Group by the ArtbRoute column
 * @method     ChildArCustMastQuery groupByArcuwgtaxcode() Group by the ArcuWgTaxCode column
 * @method     ChildArCustMastQuery groupByArcuacptsupercede() Group by the ArcuAcptSupercede column
 * @method     ChildArCustMastQuery groupByArcumstrcustid() Group by the ArcuMstrCustId column
 * @method     ChildArCustMastQuery groupByArcusurchgpct() Group by the ArcuSurchgPct column
 * @method     ChildArCustMastQuery groupByArcufrgtsplit() Group by the ArcuFrgtSplit column
 * @method     ChildArCustMastQuery groupByArculinemin() Group by the ArcuLineMin column
 * @method     ChildArCustMastQuery groupByArcuordrmin() Group by the ArcuOrdrMin column
 * @method     ChildArCustMastQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArCustMastQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArCustMastQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArCustMastQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArCustMastQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArCustMastQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArCustMastQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArCustMastQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArCustMastQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArCustMast findOne(ConnectionInterface $con = null) Return the first ChildArCustMast matching the query
 * @method     ChildArCustMast findOneOrCreate(ConnectionInterface $con = null) Return the first ChildArCustMast matching the query, or a new ChildArCustMast object populated from the query conditions when no match is found
 *
 * @method     ChildArCustMast findOneByArcucustid(string $ArcuCustId) Return the first ChildArCustMast filtered by the ArcuCustId column
 * @method     ChildArCustMast findOneByArcuname(string $ArcuName) Return the first ChildArCustMast filtered by the ArcuName column
 * @method     ChildArCustMast findOneByArcuadr1(string $ArcuAdr1) Return the first ChildArCustMast filtered by the ArcuAdr1 column
 * @method     ChildArCustMast findOneByArcuadr2(string $ArcuAdr2) Return the first ChildArCustMast filtered by the ArcuAdr2 column
 * @method     ChildArCustMast findOneByArcuadr3(string $ArcuAdr3) Return the first ChildArCustMast filtered by the ArcuAdr3 column
 * @method     ChildArCustMast findOneByArcuctry(string $ArcuCtry) Return the first ChildArCustMast filtered by the ArcuCtry column
 * @method     ChildArCustMast findOneByArcucity(string $ArcuCity) Return the first ChildArCustMast filtered by the ArcuCity column
 * @method     ChildArCustMast findOneByArcustat(string $ArcuStat) Return the first ChildArCustMast filtered by the ArcuStat column
 * @method     ChildArCustMast findOneByArcuzipcode5(string $ArcuZipCode5) Return the first ChildArCustMast filtered by the ArcuZipCode5 column
 * @method     ChildArCustMast findOneByArcuzipcode4(string $ArcuZipCode4) Return the first ChildArCustMast filtered by the ArcuZipCode4 column
 * @method     ChildArCustMast findOneByArcuzipcode10(string $ArcuZipCode10) Return the first ChildArCustMast filtered by the ArcuZipCode10 column
 * @method     ChildArCustMast findOneByArspsaleper1(string $ArspSalePer1) Return the first ChildArCustMast filtered by the ArspSalePer1 column
 * @method     ChildArCustMast findOneByArspsaleper2(string $ArspSalePer2) Return the first ChildArCustMast filtered by the ArspSalePer2 column
 * @method     ChildArCustMast findOneByArspsaleper3(string $ArspSalePer3) Return the first ChildArCustMast filtered by the ArspSalePer3 column
 * @method     ChildArCustMast findOneByArtbmtaxcode(string $ArtbMtaxCode) Return the first ChildArCustMast filtered by the ArtbMtaxCode column
 * @method     ChildArCustMast findOneByArcutaxexemnbr(string $ArcuTaxExemNbr) Return the first ChildArCustMast filtered by the ArcuTaxExemNbr column
 * @method     ChildArCustMast findOneByIntbwhse(string $IntbWhse) Return the first ChildArCustMast filtered by the IntbWhse column
 * @method     ChildArCustMast findOneByArcupriclvl(string $ArcuPricLvl) Return the first ChildArCustMast filtered by the ArcuPricLvl column
 * @method     ChildArCustMast findOneByArcushipcomp(string $ArcuShipComp) Return the first ChildArCustMast filtered by the ArcuShipComp column
 * @method     ChildArCustMast findOneByArcutxbl(string $ArcuTxbl) Return the first ChildArCustMast filtered by the ArcuTxbl column
 * @method     ChildArCustMast findOneByArcupostal(string $ArcuPostal) Return the first ChildArCustMast filtered by the ArcuPostal column
 * @method     ChildArCustMast findOneByArtbshipvia(string $ArtbShipVia) Return the first ChildArCustMast filtered by the ArtbShipVia column
 * @method     ChildArCustMast findOneByArcubord(string $ArcuBord) Return the first ChildArCustMast filtered by the ArcuBord column
 * @method     ChildArCustMast findOneByArtbtypecode(string $ArtbTypeCode) Return the first ChildArCustMast filtered by the ArtbTypeCode column
 * @method     ChildArCustMast findOneByArtbpriccode(string $ArtbPricCode) Return the first ChildArCustMast filtered by the ArtbPricCode column
 * @method     ChildArCustMast findOneByArtbcommcode(string $ArtbCommCode) Return the first ChildArCustMast filtered by the ArtbCommCode column
 * @method     ChildArCustMast findOneByArtmtermcd(string $ArtmTermCd) Return the first ChildArCustMast filtered by the ArtmTermCd column
 * @method     ChildArCustMast findOneByArcucredlmt(string $ArcuCredLmt) Return the first ChildArCustMast filtered by the ArcuCredLmt column
 * @method     ChildArCustMast findOneByArcustmtcode(string $ArcuStmtCode) Return the first ChildArCustMast filtered by the ArcuStmtCode column
 * @method     ChildArCustMast findOneByArcucredhold(string $ArcuCredHold) Return the first ChildArCustMast filtered by the ArcuCredHold column
 * @method     ChildArCustMast findOneByArcufinchrg(string $ArcuFinChrg) Return the first ChildArCustMast filtered by the ArcuFinChrg column
 * @method     ChildArCustMast findOneByArcuusercode(string $ArcuUserCode) Return the first ChildArCustMast filtered by the ArcuUserCode column
 * @method     ChildArCustMast findOneByArcunewfc(string $ArcuNewFc) Return the first ChildArCustMast filtered by the ArcuNewFc column
 * @method     ChildArCustMast findOneByArcuunpdfc(string $ArcuUnpdFc) Return the first ChildArCustMast filtered by the ArcuUnpdFc column
 * @method     ChildArCustMast findOneByArcucurbal(string $ArcuCurBal) Return the first ChildArCustMast filtered by the ArcuCurBal column
 * @method     ChildArCustMast findOneByArcubalodue1(string $ArcuBalOdue1) Return the first ChildArCustMast filtered by the ArcuBalOdue1 column
 * @method     ChildArCustMast findOneByArcubalodue2(string $ArcuBalOdue2) Return the first ChildArCustMast filtered by the ArcuBalOdue2 column
 * @method     ChildArCustMast findOneByArcubalodue3(string $ArcuBalOdue3) Return the first ChildArCustMast filtered by the ArcuBalOdue3 column
 * @method     ChildArCustMast findOneByArcusalemtd(string $ArcuSaleMtd) Return the first ChildArCustMast filtered by the ArcuSaleMtd column
 * @method     ChildArCustMast findOneByArcuinvmtd(int $ArcuInvMtd) Return the first ChildArCustMast filtered by the ArcuInvMtd column
 * @method     ChildArCustMast findOneByArcudateopen(int $ArcuDateOpen) Return the first ChildArCustMast filtered by the ArcuDateOpen column
 * @method     ChildArCustMast findOneByArculastsaledate(int $ArcuLastSaleDate) Return the first ChildArCustMast filtered by the ArcuLastSaleDate column
 * @method     ChildArCustMast findOneByArcuhighbal(string $ArcuHighBal) Return the first ChildArCustMast filtered by the ArcuHighBal column
 * @method     ChildArCustMast findOneByArcubigsalemo(string $ArcuBigSaleMo) Return the first ChildArCustMast filtered by the ArcuBigSaleMo column
 * @method     ChildArCustMast findOneByArculastpaydate(int $ArcuLastPayDate) Return the first ChildArCustMast filtered by the ArcuLastPayDate column
 * @method     ChildArCustMast findOneByArcuavgpaydays(int $ArcuAvgPayDays) Return the first ChildArCustMast filtered by the ArcuAvgPayDays column
 * @method     ChildArCustMast findOneByArcuupszone(string $ArcuUpsZone) Return the first ChildArCustMast filtered by the ArcuUpsZone column
 * @method     ChildArCustMast findOneByArcuhighbaldate(int $ArcuHighBalDate) Return the first ChildArCustMast filtered by the ArcuHighBalDate column
 * @method     ChildArCustMast findOneByArcusale24mo1(string $ArcuSale24mo1) Return the first ChildArCustMast filtered by the ArcuSale24mo1 column
 * @method     ChildArCustMast findOneByArcuinv24mo1(int $ArcuInv24mo1) Return the first ChildArCustMast filtered by the ArcuInv24mo1 column
 * @method     ChildArCustMast findOneByArcusale24mo2(string $ArcuSale24mo2) Return the first ChildArCustMast filtered by the ArcuSale24mo2 column
 * @method     ChildArCustMast findOneByArcuinv24mo2(int $ArcuInv24mo2) Return the first ChildArCustMast filtered by the ArcuInv24mo2 column
 * @method     ChildArCustMast findOneByArcusale24mo3(string $ArcuSale24mo3) Return the first ChildArCustMast filtered by the ArcuSale24mo3 column
 * @method     ChildArCustMast findOneByArcuinv24mo3(int $ArcuInv24mo3) Return the first ChildArCustMast filtered by the ArcuInv24mo3 column
 * @method     ChildArCustMast findOneByArcusale24mo4(string $ArcuSale24mo4) Return the first ChildArCustMast filtered by the ArcuSale24mo4 column
 * @method     ChildArCustMast findOneByArcuinv24mo4(int $ArcuInv24mo4) Return the first ChildArCustMast filtered by the ArcuInv24mo4 column
 * @method     ChildArCustMast findOneByArcusale24mo5(string $ArcuSale24mo5) Return the first ChildArCustMast filtered by the ArcuSale24mo5 column
 * @method     ChildArCustMast findOneByArcuinv24mo5(int $ArcuInv24mo5) Return the first ChildArCustMast filtered by the ArcuInv24mo5 column
 * @method     ChildArCustMast findOneByArcusale24mo6(string $ArcuSale24mo6) Return the first ChildArCustMast filtered by the ArcuSale24mo6 column
 * @method     ChildArCustMast findOneByArcuinv24mo6(int $ArcuInv24mo6) Return the first ChildArCustMast filtered by the ArcuInv24mo6 column
 * @method     ChildArCustMast findOneByArcusale24mo7(string $ArcuSale24mo7) Return the first ChildArCustMast filtered by the ArcuSale24mo7 column
 * @method     ChildArCustMast findOneByArcuinv24mo7(int $ArcuInv24mo7) Return the first ChildArCustMast filtered by the ArcuInv24mo7 column
 * @method     ChildArCustMast findOneByArcusale24mo8(string $ArcuSale24mo8) Return the first ChildArCustMast filtered by the ArcuSale24mo8 column
 * @method     ChildArCustMast findOneByArcuinv24mo8(int $ArcuInv24mo8) Return the first ChildArCustMast filtered by the ArcuInv24mo8 column
 * @method     ChildArCustMast findOneByArcusale24mo9(string $ArcuSale24mo9) Return the first ChildArCustMast filtered by the ArcuSale24mo9 column
 * @method     ChildArCustMast findOneByArcuinv24mo9(int $ArcuInv24mo9) Return the first ChildArCustMast filtered by the ArcuInv24mo9 column
 * @method     ChildArCustMast findOneByArcusale24mo10(string $ArcuSale24mo10) Return the first ChildArCustMast filtered by the ArcuSale24mo10 column
 * @method     ChildArCustMast findOneByArcuinv24mo10(int $ArcuInv24mo10) Return the first ChildArCustMast filtered by the ArcuInv24mo10 column
 * @method     ChildArCustMast findOneByArcusale24mo11(string $ArcuSale24mo11) Return the first ChildArCustMast filtered by the ArcuSale24mo11 column
 * @method     ChildArCustMast findOneByArcuinv24mo11(int $ArcuInv24mo11) Return the first ChildArCustMast filtered by the ArcuInv24mo11 column
 * @method     ChildArCustMast findOneByArcusale24mo12(string $ArcuSale24mo12) Return the first ChildArCustMast filtered by the ArcuSale24mo12 column
 * @method     ChildArCustMast findOneByArcuinv24mo12(int $ArcuInv24mo12) Return the first ChildArCustMast filtered by the ArcuInv24mo12 column
 * @method     ChildArCustMast findOneByArcusale24mo13(string $ArcuSale24mo13) Return the first ChildArCustMast filtered by the ArcuSale24mo13 column
 * @method     ChildArCustMast findOneByArcuinv24mo13(int $ArcuInv24mo13) Return the first ChildArCustMast filtered by the ArcuInv24mo13 column
 * @method     ChildArCustMast findOneByArcusale24mo14(string $ArcuSale24mo14) Return the first ChildArCustMast filtered by the ArcuSale24mo14 column
 * @method     ChildArCustMast findOneByArcuinv24mo14(int $ArcuInv24mo14) Return the first ChildArCustMast filtered by the ArcuInv24mo14 column
 * @method     ChildArCustMast findOneByArcusale24mo15(string $ArcuSale24mo15) Return the first ChildArCustMast filtered by the ArcuSale24mo15 column
 * @method     ChildArCustMast findOneByArcuinv24mo15(int $ArcuInv24mo15) Return the first ChildArCustMast filtered by the ArcuInv24mo15 column
 * @method     ChildArCustMast findOneByArcusale24mo16(string $ArcuSale24mo16) Return the first ChildArCustMast filtered by the ArcuSale24mo16 column
 * @method     ChildArCustMast findOneByArcuinv24mo16(int $ArcuInv24mo16) Return the first ChildArCustMast filtered by the ArcuInv24mo16 column
 * @method     ChildArCustMast findOneByArcusale24mo17(string $ArcuSale24mo17) Return the first ChildArCustMast filtered by the ArcuSale24mo17 column
 * @method     ChildArCustMast findOneByArcuinv24mo17(int $ArcuInv24mo17) Return the first ChildArCustMast filtered by the ArcuInv24mo17 column
 * @method     ChildArCustMast findOneByArcusale24mo18(string $ArcuSale24mo18) Return the first ChildArCustMast filtered by the ArcuSale24mo18 column
 * @method     ChildArCustMast findOneByArcuinv24mo18(int $ArcuInv24mo18) Return the first ChildArCustMast filtered by the ArcuInv24mo18 column
 * @method     ChildArCustMast findOneByArcusale24mo19(string $ArcuSale24mo19) Return the first ChildArCustMast filtered by the ArcuSale24mo19 column
 * @method     ChildArCustMast findOneByArcuinv24mo19(int $ArcuInv24mo19) Return the first ChildArCustMast filtered by the ArcuInv24mo19 column
 * @method     ChildArCustMast findOneByArcusale24mo20(string $ArcuSale24mo20) Return the first ChildArCustMast filtered by the ArcuSale24mo20 column
 * @method     ChildArCustMast findOneByArcuinv24mo20(int $ArcuInv24mo20) Return the first ChildArCustMast filtered by the ArcuInv24mo20 column
 * @method     ChildArCustMast findOneByArcusale24mo21(string $ArcuSale24mo21) Return the first ChildArCustMast filtered by the ArcuSale24mo21 column
 * @method     ChildArCustMast findOneByArcuinv24mo21(int $ArcuInv24mo21) Return the first ChildArCustMast filtered by the ArcuInv24mo21 column
 * @method     ChildArCustMast findOneByArcusale24mo22(string $ArcuSale24mo22) Return the first ChildArCustMast filtered by the ArcuSale24mo22 column
 * @method     ChildArCustMast findOneByArcuinv24mo22(int $ArcuInv24mo22) Return the first ChildArCustMast filtered by the ArcuInv24mo22 column
 * @method     ChildArCustMast findOneByArcusale24mo23(string $ArcuSale24mo23) Return the first ChildArCustMast filtered by the ArcuSale24mo23 column
 * @method     ChildArCustMast findOneByArcuinv24mo23(int $ArcuInv24mo23) Return the first ChildArCustMast filtered by the ArcuInv24mo23 column
 * @method     ChildArCustMast findOneByArcusale24mo24(string $ArcuSale24mo24) Return the first ChildArCustMast filtered by the ArcuSale24mo24 column
 * @method     ChildArCustMast findOneByArcuinv24mo24(int $ArcuInv24mo24) Return the first ChildArCustMast filtered by the ArcuInv24mo24 column
 * @method     ChildArCustMast findOneByArculastpayamt(string $ArcuLastPayAmt) Return the first ChildArCustMast filtered by the ArcuLastPayAmt column
 * @method     ChildArCustMast findOneByArcuordrtot(string $ArcuOrdrTot) Return the first ChildArCustMast filtered by the ArcuOrdrTot column
 * @method     ChildArCustMast findOneByArcuusefrtin(string $ArcuUseFrtIn) Return the first ChildArCustMast filtered by the ArcuUseFrtIn column
 * @method     ChildArCustMast findOneByArcumyvendid(string $ArcuMyVendId) Return the first ChildArCustMast filtered by the ArcuMyVendId column
 * @method     ChildArCustMast findOneByArcuaddlpricdisc(string $ArcuAddlPricDisc) Return the first ChildArCustMast filtered by the ArcuAddlPricDisc column
 * @method     ChildArCustMast findOneByArcuchrgfrt(string $ArcuChrgFrt) Return the first ChildArCustMast filtered by the ArcuChrgFrt column
 * @method     ChildArCustMast findOneByArcucorexdays(int $ArcuCoreXDays) Return the first ChildArCustMast filtered by the ArcuCoreXDays column
 * @method     ChildArCustMast findOneByArcucontractnbr(string $ArcuContractNbr) Return the first ChildArCustMast filtered by the ArcuContractNbr column
 * @method     ChildArCustMast findOneByArcucorelf(string $ArcuCoreLF) Return the first ChildArCustMast filtered by the ArcuCoreLF column
 * @method     ChildArCustMast findOneByArcucorebankid(string $ArcuCoreBankId) Return the first ChildArCustMast filtered by the ArcuCoreBankId column
 * @method     ChildArCustMast findOneByArcudunsnbr(string $ArcuDunsNbr) Return the first ChildArCustMast filtered by the ArcuDunsNbr column
 * @method     ChildArCustMast findOneByArcurfmlvalu(int $ArcuRfmlValu) Return the first ChildArCustMast filtered by the ArcuRfmlValu column
 * @method     ChildArCustMast findOneByArcuforcecustpo(string $ArcuForceCustPo) Return the first ChildArCustMast filtered by the ArcuForceCustPo column
 * @method     ChildArCustMast findOneByArcuagelevel(int $ArcuAgeLevel) Return the first ChildArCustMast filtered by the ArcuAgeLevel column
 * @method     ChildArCustMast findOneByArtbroute(string $ArtbRoute) Return the first ChildArCustMast filtered by the ArtbRoute column
 * @method     ChildArCustMast findOneByArcuwgtaxcode(string $ArcuWgTaxCode) Return the first ChildArCustMast filtered by the ArcuWgTaxCode column
 * @method     ChildArCustMast findOneByArcuacptsupercede(string $ArcuAcptSupercede) Return the first ChildArCustMast filtered by the ArcuAcptSupercede column
 * @method     ChildArCustMast findOneByArcumstrcustid(string $ArcuMstrCustId) Return the first ChildArCustMast filtered by the ArcuMstrCustId column
 * @method     ChildArCustMast findOneByArcusurchgpct(string $ArcuSurchgPct) Return the first ChildArCustMast filtered by the ArcuSurchgPct column
 * @method     ChildArCustMast findOneByArcufrgtsplit(string $ArcuFrgtSplit) Return the first ChildArCustMast filtered by the ArcuFrgtSplit column
 * @method     ChildArCustMast findOneByArculinemin(string $ArcuLineMin) Return the first ChildArCustMast filtered by the ArcuLineMin column
 * @method     ChildArCustMast findOneByArcuordrmin(string $ArcuOrdrMin) Return the first ChildArCustMast filtered by the ArcuOrdrMin column
 * @method     ChildArCustMast findOneByDateupdtd(int $DateUpdtd) Return the first ChildArCustMast filtered by the DateUpdtd column
 * @method     ChildArCustMast findOneByTimeupdtd(int $TimeUpdtd) Return the first ChildArCustMast filtered by the TimeUpdtd column
 * @method     ChildArCustMast findOneByDummy(string $dummy) Return the first ChildArCustMast filtered by the dummy column *

 * @method     ChildArCustMast requirePk($key, ConnectionInterface $con = null) Return the ChildArCustMast by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOne(ConnectionInterface $con = null) Return the first ChildArCustMast matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArCustMast requireOneByArcucustid(string $ArcuCustId) Return the first ChildArCustMast filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuname(string $ArcuName) Return the first ChildArCustMast filtered by the ArcuName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuadr1(string $ArcuAdr1) Return the first ChildArCustMast filtered by the ArcuAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuadr2(string $ArcuAdr2) Return the first ChildArCustMast filtered by the ArcuAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuadr3(string $ArcuAdr3) Return the first ChildArCustMast filtered by the ArcuAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuctry(string $ArcuCtry) Return the first ChildArCustMast filtered by the ArcuCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcucity(string $ArcuCity) Return the first ChildArCustMast filtered by the ArcuCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcustat(string $ArcuStat) Return the first ChildArCustMast filtered by the ArcuStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuzipcode5(string $ArcuZipCode5) Return the first ChildArCustMast filtered by the ArcuZipCode5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuzipcode4(string $ArcuZipCode4) Return the first ChildArCustMast filtered by the ArcuZipCode4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuzipcode10(string $ArcuZipCode10) Return the first ChildArCustMast filtered by the ArcuZipCode10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArspsaleper1(string $ArspSalePer1) Return the first ChildArCustMast filtered by the ArspSalePer1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArspsaleper2(string $ArspSalePer2) Return the first ChildArCustMast filtered by the ArspSalePer2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArspsaleper3(string $ArspSalePer3) Return the first ChildArCustMast filtered by the ArspSalePer3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArtbmtaxcode(string $ArtbMtaxCode) Return the first ChildArCustMast filtered by the ArtbMtaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcutaxexemnbr(string $ArcuTaxExemNbr) Return the first ChildArCustMast filtered by the ArcuTaxExemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByIntbwhse(string $IntbWhse) Return the first ChildArCustMast filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcupriclvl(string $ArcuPricLvl) Return the first ChildArCustMast filtered by the ArcuPricLvl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcushipcomp(string $ArcuShipComp) Return the first ChildArCustMast filtered by the ArcuShipComp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcutxbl(string $ArcuTxbl) Return the first ChildArCustMast filtered by the ArcuTxbl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcupostal(string $ArcuPostal) Return the first ChildArCustMast filtered by the ArcuPostal column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArtbshipvia(string $ArtbShipVia) Return the first ChildArCustMast filtered by the ArtbShipVia column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcubord(string $ArcuBord) Return the first ChildArCustMast filtered by the ArcuBord column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArtbtypecode(string $ArtbTypeCode) Return the first ChildArCustMast filtered by the ArtbTypeCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArtbpriccode(string $ArtbPricCode) Return the first ChildArCustMast filtered by the ArtbPricCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArtbcommcode(string $ArtbCommCode) Return the first ChildArCustMast filtered by the ArtbCommCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArtmtermcd(string $ArtmTermCd) Return the first ChildArCustMast filtered by the ArtmTermCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcucredlmt(string $ArcuCredLmt) Return the first ChildArCustMast filtered by the ArcuCredLmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcustmtcode(string $ArcuStmtCode) Return the first ChildArCustMast filtered by the ArcuStmtCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcucredhold(string $ArcuCredHold) Return the first ChildArCustMast filtered by the ArcuCredHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcufinchrg(string $ArcuFinChrg) Return the first ChildArCustMast filtered by the ArcuFinChrg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuusercode(string $ArcuUserCode) Return the first ChildArCustMast filtered by the ArcuUserCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcunewfc(string $ArcuNewFc) Return the first ChildArCustMast filtered by the ArcuNewFc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuunpdfc(string $ArcuUnpdFc) Return the first ChildArCustMast filtered by the ArcuUnpdFc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcucurbal(string $ArcuCurBal) Return the first ChildArCustMast filtered by the ArcuCurBal column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcubalodue1(string $ArcuBalOdue1) Return the first ChildArCustMast filtered by the ArcuBalOdue1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcubalodue2(string $ArcuBalOdue2) Return the first ChildArCustMast filtered by the ArcuBalOdue2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcubalodue3(string $ArcuBalOdue3) Return the first ChildArCustMast filtered by the ArcuBalOdue3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusalemtd(string $ArcuSaleMtd) Return the first ChildArCustMast filtered by the ArcuSaleMtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinvmtd(int $ArcuInvMtd) Return the first ChildArCustMast filtered by the ArcuInvMtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcudateopen(int $ArcuDateOpen) Return the first ChildArCustMast filtered by the ArcuDateOpen column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArculastsaledate(int $ArcuLastSaleDate) Return the first ChildArCustMast filtered by the ArcuLastSaleDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuhighbal(string $ArcuHighBal) Return the first ChildArCustMast filtered by the ArcuHighBal column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcubigsalemo(string $ArcuBigSaleMo) Return the first ChildArCustMast filtered by the ArcuBigSaleMo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArculastpaydate(int $ArcuLastPayDate) Return the first ChildArCustMast filtered by the ArcuLastPayDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuavgpaydays(int $ArcuAvgPayDays) Return the first ChildArCustMast filtered by the ArcuAvgPayDays column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuupszone(string $ArcuUpsZone) Return the first ChildArCustMast filtered by the ArcuUpsZone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuhighbaldate(int $ArcuHighBalDate) Return the first ChildArCustMast filtered by the ArcuHighBalDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo1(string $ArcuSale24mo1) Return the first ChildArCustMast filtered by the ArcuSale24mo1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo1(int $ArcuInv24mo1) Return the first ChildArCustMast filtered by the ArcuInv24mo1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo2(string $ArcuSale24mo2) Return the first ChildArCustMast filtered by the ArcuSale24mo2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo2(int $ArcuInv24mo2) Return the first ChildArCustMast filtered by the ArcuInv24mo2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo3(string $ArcuSale24mo3) Return the first ChildArCustMast filtered by the ArcuSale24mo3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo3(int $ArcuInv24mo3) Return the first ChildArCustMast filtered by the ArcuInv24mo3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo4(string $ArcuSale24mo4) Return the first ChildArCustMast filtered by the ArcuSale24mo4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo4(int $ArcuInv24mo4) Return the first ChildArCustMast filtered by the ArcuInv24mo4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo5(string $ArcuSale24mo5) Return the first ChildArCustMast filtered by the ArcuSale24mo5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo5(int $ArcuInv24mo5) Return the first ChildArCustMast filtered by the ArcuInv24mo5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo6(string $ArcuSale24mo6) Return the first ChildArCustMast filtered by the ArcuSale24mo6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo6(int $ArcuInv24mo6) Return the first ChildArCustMast filtered by the ArcuInv24mo6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo7(string $ArcuSale24mo7) Return the first ChildArCustMast filtered by the ArcuSale24mo7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo7(int $ArcuInv24mo7) Return the first ChildArCustMast filtered by the ArcuInv24mo7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo8(string $ArcuSale24mo8) Return the first ChildArCustMast filtered by the ArcuSale24mo8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo8(int $ArcuInv24mo8) Return the first ChildArCustMast filtered by the ArcuInv24mo8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo9(string $ArcuSale24mo9) Return the first ChildArCustMast filtered by the ArcuSale24mo9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo9(int $ArcuInv24mo9) Return the first ChildArCustMast filtered by the ArcuInv24mo9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo10(string $ArcuSale24mo10) Return the first ChildArCustMast filtered by the ArcuSale24mo10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo10(int $ArcuInv24mo10) Return the first ChildArCustMast filtered by the ArcuInv24mo10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo11(string $ArcuSale24mo11) Return the first ChildArCustMast filtered by the ArcuSale24mo11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo11(int $ArcuInv24mo11) Return the first ChildArCustMast filtered by the ArcuInv24mo11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo12(string $ArcuSale24mo12) Return the first ChildArCustMast filtered by the ArcuSale24mo12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo12(int $ArcuInv24mo12) Return the first ChildArCustMast filtered by the ArcuInv24mo12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo13(string $ArcuSale24mo13) Return the first ChildArCustMast filtered by the ArcuSale24mo13 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo13(int $ArcuInv24mo13) Return the first ChildArCustMast filtered by the ArcuInv24mo13 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo14(string $ArcuSale24mo14) Return the first ChildArCustMast filtered by the ArcuSale24mo14 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo14(int $ArcuInv24mo14) Return the first ChildArCustMast filtered by the ArcuInv24mo14 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo15(string $ArcuSale24mo15) Return the first ChildArCustMast filtered by the ArcuSale24mo15 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo15(int $ArcuInv24mo15) Return the first ChildArCustMast filtered by the ArcuInv24mo15 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo16(string $ArcuSale24mo16) Return the first ChildArCustMast filtered by the ArcuSale24mo16 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo16(int $ArcuInv24mo16) Return the first ChildArCustMast filtered by the ArcuInv24mo16 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo17(string $ArcuSale24mo17) Return the first ChildArCustMast filtered by the ArcuSale24mo17 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo17(int $ArcuInv24mo17) Return the first ChildArCustMast filtered by the ArcuInv24mo17 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo18(string $ArcuSale24mo18) Return the first ChildArCustMast filtered by the ArcuSale24mo18 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo18(int $ArcuInv24mo18) Return the first ChildArCustMast filtered by the ArcuInv24mo18 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo19(string $ArcuSale24mo19) Return the first ChildArCustMast filtered by the ArcuSale24mo19 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo19(int $ArcuInv24mo19) Return the first ChildArCustMast filtered by the ArcuInv24mo19 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo20(string $ArcuSale24mo20) Return the first ChildArCustMast filtered by the ArcuSale24mo20 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo20(int $ArcuInv24mo20) Return the first ChildArCustMast filtered by the ArcuInv24mo20 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo21(string $ArcuSale24mo21) Return the first ChildArCustMast filtered by the ArcuSale24mo21 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo21(int $ArcuInv24mo21) Return the first ChildArCustMast filtered by the ArcuInv24mo21 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo22(string $ArcuSale24mo22) Return the first ChildArCustMast filtered by the ArcuSale24mo22 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo22(int $ArcuInv24mo22) Return the first ChildArCustMast filtered by the ArcuInv24mo22 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo23(string $ArcuSale24mo23) Return the first ChildArCustMast filtered by the ArcuSale24mo23 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo23(int $ArcuInv24mo23) Return the first ChildArCustMast filtered by the ArcuInv24mo23 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusale24mo24(string $ArcuSale24mo24) Return the first ChildArCustMast filtered by the ArcuSale24mo24 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuinv24mo24(int $ArcuInv24mo24) Return the first ChildArCustMast filtered by the ArcuInv24mo24 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArculastpayamt(string $ArcuLastPayAmt) Return the first ChildArCustMast filtered by the ArcuLastPayAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuordrtot(string $ArcuOrdrTot) Return the first ChildArCustMast filtered by the ArcuOrdrTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuusefrtin(string $ArcuUseFrtIn) Return the first ChildArCustMast filtered by the ArcuUseFrtIn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcumyvendid(string $ArcuMyVendId) Return the first ChildArCustMast filtered by the ArcuMyVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuaddlpricdisc(string $ArcuAddlPricDisc) Return the first ChildArCustMast filtered by the ArcuAddlPricDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuchrgfrt(string $ArcuChrgFrt) Return the first ChildArCustMast filtered by the ArcuChrgFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcucorexdays(int $ArcuCoreXDays) Return the first ChildArCustMast filtered by the ArcuCoreXDays column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcucontractnbr(string $ArcuContractNbr) Return the first ChildArCustMast filtered by the ArcuContractNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcucorelf(string $ArcuCoreLF) Return the first ChildArCustMast filtered by the ArcuCoreLF column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcucorebankid(string $ArcuCoreBankId) Return the first ChildArCustMast filtered by the ArcuCoreBankId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcudunsnbr(string $ArcuDunsNbr) Return the first ChildArCustMast filtered by the ArcuDunsNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcurfmlvalu(int $ArcuRfmlValu) Return the first ChildArCustMast filtered by the ArcuRfmlValu column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuforcecustpo(string $ArcuForceCustPo) Return the first ChildArCustMast filtered by the ArcuForceCustPo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuagelevel(int $ArcuAgeLevel) Return the first ChildArCustMast filtered by the ArcuAgeLevel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArtbroute(string $ArtbRoute) Return the first ChildArCustMast filtered by the ArtbRoute column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuwgtaxcode(string $ArcuWgTaxCode) Return the first ChildArCustMast filtered by the ArcuWgTaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuacptsupercede(string $ArcuAcptSupercede) Return the first ChildArCustMast filtered by the ArcuAcptSupercede column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcumstrcustid(string $ArcuMstrCustId) Return the first ChildArCustMast filtered by the ArcuMstrCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcusurchgpct(string $ArcuSurchgPct) Return the first ChildArCustMast filtered by the ArcuSurchgPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcufrgtsplit(string $ArcuFrgtSplit) Return the first ChildArCustMast filtered by the ArcuFrgtSplit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArculinemin(string $ArcuLineMin) Return the first ChildArCustMast filtered by the ArcuLineMin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByArcuordrmin(string $ArcuOrdrMin) Return the first ChildArCustMast filtered by the ArcuOrdrMin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByDateupdtd(int $DateUpdtd) Return the first ChildArCustMast filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByTimeupdtd(int $TimeUpdtd) Return the first ChildArCustMast filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustMast requireOneByDummy(string $dummy) Return the first ChildArCustMast filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArCustMast[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildArCustMast objects based on current ModelCriteria
 * @method     ChildArCustMast[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildArCustMast objects filtered by the ArcuCustId column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuname(string $ArcuName) Return ChildArCustMast objects filtered by the ArcuName column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuadr1(string $ArcuAdr1) Return ChildArCustMast objects filtered by the ArcuAdr1 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuadr2(string $ArcuAdr2) Return ChildArCustMast objects filtered by the ArcuAdr2 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuadr3(string $ArcuAdr3) Return ChildArCustMast objects filtered by the ArcuAdr3 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuctry(string $ArcuCtry) Return ChildArCustMast objects filtered by the ArcuCtry column
 * @method     ChildArCustMast[]|ObjectCollection findByArcucity(string $ArcuCity) Return ChildArCustMast objects filtered by the ArcuCity column
 * @method     ChildArCustMast[]|ObjectCollection findByArcustat(string $ArcuStat) Return ChildArCustMast objects filtered by the ArcuStat column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuzipcode5(string $ArcuZipCode5) Return ChildArCustMast objects filtered by the ArcuZipCode5 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuzipcode4(string $ArcuZipCode4) Return ChildArCustMast objects filtered by the ArcuZipCode4 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuzipcode10(string $ArcuZipCode10) Return ChildArCustMast objects filtered by the ArcuZipCode10 column
 * @method     ChildArCustMast[]|ObjectCollection findByArspsaleper1(string $ArspSalePer1) Return ChildArCustMast objects filtered by the ArspSalePer1 column
 * @method     ChildArCustMast[]|ObjectCollection findByArspsaleper2(string $ArspSalePer2) Return ChildArCustMast objects filtered by the ArspSalePer2 column
 * @method     ChildArCustMast[]|ObjectCollection findByArspsaleper3(string $ArspSalePer3) Return ChildArCustMast objects filtered by the ArspSalePer3 column
 * @method     ChildArCustMast[]|ObjectCollection findByArtbmtaxcode(string $ArtbMtaxCode) Return ChildArCustMast objects filtered by the ArtbMtaxCode column
 * @method     ChildArCustMast[]|ObjectCollection findByArcutaxexemnbr(string $ArcuTaxExemNbr) Return ChildArCustMast objects filtered by the ArcuTaxExemNbr column
 * @method     ChildArCustMast[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildArCustMast objects filtered by the IntbWhse column
 * @method     ChildArCustMast[]|ObjectCollection findByArcupriclvl(string $ArcuPricLvl) Return ChildArCustMast objects filtered by the ArcuPricLvl column
 * @method     ChildArCustMast[]|ObjectCollection findByArcushipcomp(string $ArcuShipComp) Return ChildArCustMast objects filtered by the ArcuShipComp column
 * @method     ChildArCustMast[]|ObjectCollection findByArcutxbl(string $ArcuTxbl) Return ChildArCustMast objects filtered by the ArcuTxbl column
 * @method     ChildArCustMast[]|ObjectCollection findByArcupostal(string $ArcuPostal) Return ChildArCustMast objects filtered by the ArcuPostal column
 * @method     ChildArCustMast[]|ObjectCollection findByArtbshipvia(string $ArtbShipVia) Return ChildArCustMast objects filtered by the ArtbShipVia column
 * @method     ChildArCustMast[]|ObjectCollection findByArcubord(string $ArcuBord) Return ChildArCustMast objects filtered by the ArcuBord column
 * @method     ChildArCustMast[]|ObjectCollection findByArtbtypecode(string $ArtbTypeCode) Return ChildArCustMast objects filtered by the ArtbTypeCode column
 * @method     ChildArCustMast[]|ObjectCollection findByArtbpriccode(string $ArtbPricCode) Return ChildArCustMast objects filtered by the ArtbPricCode column
 * @method     ChildArCustMast[]|ObjectCollection findByArtbcommcode(string $ArtbCommCode) Return ChildArCustMast objects filtered by the ArtbCommCode column
 * @method     ChildArCustMast[]|ObjectCollection findByArtmtermcd(string $ArtmTermCd) Return ChildArCustMast objects filtered by the ArtmTermCd column
 * @method     ChildArCustMast[]|ObjectCollection findByArcucredlmt(string $ArcuCredLmt) Return ChildArCustMast objects filtered by the ArcuCredLmt column
 * @method     ChildArCustMast[]|ObjectCollection findByArcustmtcode(string $ArcuStmtCode) Return ChildArCustMast objects filtered by the ArcuStmtCode column
 * @method     ChildArCustMast[]|ObjectCollection findByArcucredhold(string $ArcuCredHold) Return ChildArCustMast objects filtered by the ArcuCredHold column
 * @method     ChildArCustMast[]|ObjectCollection findByArcufinchrg(string $ArcuFinChrg) Return ChildArCustMast objects filtered by the ArcuFinChrg column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuusercode(string $ArcuUserCode) Return ChildArCustMast objects filtered by the ArcuUserCode column
 * @method     ChildArCustMast[]|ObjectCollection findByArcunewfc(string $ArcuNewFc) Return ChildArCustMast objects filtered by the ArcuNewFc column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuunpdfc(string $ArcuUnpdFc) Return ChildArCustMast objects filtered by the ArcuUnpdFc column
 * @method     ChildArCustMast[]|ObjectCollection findByArcucurbal(string $ArcuCurBal) Return ChildArCustMast objects filtered by the ArcuCurBal column
 * @method     ChildArCustMast[]|ObjectCollection findByArcubalodue1(string $ArcuBalOdue1) Return ChildArCustMast objects filtered by the ArcuBalOdue1 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcubalodue2(string $ArcuBalOdue2) Return ChildArCustMast objects filtered by the ArcuBalOdue2 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcubalodue3(string $ArcuBalOdue3) Return ChildArCustMast objects filtered by the ArcuBalOdue3 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusalemtd(string $ArcuSaleMtd) Return ChildArCustMast objects filtered by the ArcuSaleMtd column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinvmtd(int $ArcuInvMtd) Return ChildArCustMast objects filtered by the ArcuInvMtd column
 * @method     ChildArCustMast[]|ObjectCollection findByArcudateopen(int $ArcuDateOpen) Return ChildArCustMast objects filtered by the ArcuDateOpen column
 * @method     ChildArCustMast[]|ObjectCollection findByArculastsaledate(int $ArcuLastSaleDate) Return ChildArCustMast objects filtered by the ArcuLastSaleDate column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuhighbal(string $ArcuHighBal) Return ChildArCustMast objects filtered by the ArcuHighBal column
 * @method     ChildArCustMast[]|ObjectCollection findByArcubigsalemo(string $ArcuBigSaleMo) Return ChildArCustMast objects filtered by the ArcuBigSaleMo column
 * @method     ChildArCustMast[]|ObjectCollection findByArculastpaydate(int $ArcuLastPayDate) Return ChildArCustMast objects filtered by the ArcuLastPayDate column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuavgpaydays(int $ArcuAvgPayDays) Return ChildArCustMast objects filtered by the ArcuAvgPayDays column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuupszone(string $ArcuUpsZone) Return ChildArCustMast objects filtered by the ArcuUpsZone column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuhighbaldate(int $ArcuHighBalDate) Return ChildArCustMast objects filtered by the ArcuHighBalDate column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo1(string $ArcuSale24mo1) Return ChildArCustMast objects filtered by the ArcuSale24mo1 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo1(int $ArcuInv24mo1) Return ChildArCustMast objects filtered by the ArcuInv24mo1 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo2(string $ArcuSale24mo2) Return ChildArCustMast objects filtered by the ArcuSale24mo2 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo2(int $ArcuInv24mo2) Return ChildArCustMast objects filtered by the ArcuInv24mo2 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo3(string $ArcuSale24mo3) Return ChildArCustMast objects filtered by the ArcuSale24mo3 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo3(int $ArcuInv24mo3) Return ChildArCustMast objects filtered by the ArcuInv24mo3 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo4(string $ArcuSale24mo4) Return ChildArCustMast objects filtered by the ArcuSale24mo4 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo4(int $ArcuInv24mo4) Return ChildArCustMast objects filtered by the ArcuInv24mo4 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo5(string $ArcuSale24mo5) Return ChildArCustMast objects filtered by the ArcuSale24mo5 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo5(int $ArcuInv24mo5) Return ChildArCustMast objects filtered by the ArcuInv24mo5 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo6(string $ArcuSale24mo6) Return ChildArCustMast objects filtered by the ArcuSale24mo6 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo6(int $ArcuInv24mo6) Return ChildArCustMast objects filtered by the ArcuInv24mo6 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo7(string $ArcuSale24mo7) Return ChildArCustMast objects filtered by the ArcuSale24mo7 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo7(int $ArcuInv24mo7) Return ChildArCustMast objects filtered by the ArcuInv24mo7 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo8(string $ArcuSale24mo8) Return ChildArCustMast objects filtered by the ArcuSale24mo8 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo8(int $ArcuInv24mo8) Return ChildArCustMast objects filtered by the ArcuInv24mo8 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo9(string $ArcuSale24mo9) Return ChildArCustMast objects filtered by the ArcuSale24mo9 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo9(int $ArcuInv24mo9) Return ChildArCustMast objects filtered by the ArcuInv24mo9 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo10(string $ArcuSale24mo10) Return ChildArCustMast objects filtered by the ArcuSale24mo10 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo10(int $ArcuInv24mo10) Return ChildArCustMast objects filtered by the ArcuInv24mo10 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo11(string $ArcuSale24mo11) Return ChildArCustMast objects filtered by the ArcuSale24mo11 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo11(int $ArcuInv24mo11) Return ChildArCustMast objects filtered by the ArcuInv24mo11 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo12(string $ArcuSale24mo12) Return ChildArCustMast objects filtered by the ArcuSale24mo12 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo12(int $ArcuInv24mo12) Return ChildArCustMast objects filtered by the ArcuInv24mo12 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo13(string $ArcuSale24mo13) Return ChildArCustMast objects filtered by the ArcuSale24mo13 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo13(int $ArcuInv24mo13) Return ChildArCustMast objects filtered by the ArcuInv24mo13 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo14(string $ArcuSale24mo14) Return ChildArCustMast objects filtered by the ArcuSale24mo14 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo14(int $ArcuInv24mo14) Return ChildArCustMast objects filtered by the ArcuInv24mo14 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo15(string $ArcuSale24mo15) Return ChildArCustMast objects filtered by the ArcuSale24mo15 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo15(int $ArcuInv24mo15) Return ChildArCustMast objects filtered by the ArcuInv24mo15 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo16(string $ArcuSale24mo16) Return ChildArCustMast objects filtered by the ArcuSale24mo16 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo16(int $ArcuInv24mo16) Return ChildArCustMast objects filtered by the ArcuInv24mo16 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo17(string $ArcuSale24mo17) Return ChildArCustMast objects filtered by the ArcuSale24mo17 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo17(int $ArcuInv24mo17) Return ChildArCustMast objects filtered by the ArcuInv24mo17 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo18(string $ArcuSale24mo18) Return ChildArCustMast objects filtered by the ArcuSale24mo18 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo18(int $ArcuInv24mo18) Return ChildArCustMast objects filtered by the ArcuInv24mo18 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo19(string $ArcuSale24mo19) Return ChildArCustMast objects filtered by the ArcuSale24mo19 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo19(int $ArcuInv24mo19) Return ChildArCustMast objects filtered by the ArcuInv24mo19 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo20(string $ArcuSale24mo20) Return ChildArCustMast objects filtered by the ArcuSale24mo20 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo20(int $ArcuInv24mo20) Return ChildArCustMast objects filtered by the ArcuInv24mo20 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo21(string $ArcuSale24mo21) Return ChildArCustMast objects filtered by the ArcuSale24mo21 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo21(int $ArcuInv24mo21) Return ChildArCustMast objects filtered by the ArcuInv24mo21 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo22(string $ArcuSale24mo22) Return ChildArCustMast objects filtered by the ArcuSale24mo22 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo22(int $ArcuInv24mo22) Return ChildArCustMast objects filtered by the ArcuInv24mo22 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo23(string $ArcuSale24mo23) Return ChildArCustMast objects filtered by the ArcuSale24mo23 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo23(int $ArcuInv24mo23) Return ChildArCustMast objects filtered by the ArcuInv24mo23 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusale24mo24(string $ArcuSale24mo24) Return ChildArCustMast objects filtered by the ArcuSale24mo24 column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuinv24mo24(int $ArcuInv24mo24) Return ChildArCustMast objects filtered by the ArcuInv24mo24 column
 * @method     ChildArCustMast[]|ObjectCollection findByArculastpayamt(string $ArcuLastPayAmt) Return ChildArCustMast objects filtered by the ArcuLastPayAmt column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuordrtot(string $ArcuOrdrTot) Return ChildArCustMast objects filtered by the ArcuOrdrTot column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuusefrtin(string $ArcuUseFrtIn) Return ChildArCustMast objects filtered by the ArcuUseFrtIn column
 * @method     ChildArCustMast[]|ObjectCollection findByArcumyvendid(string $ArcuMyVendId) Return ChildArCustMast objects filtered by the ArcuMyVendId column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuaddlpricdisc(string $ArcuAddlPricDisc) Return ChildArCustMast objects filtered by the ArcuAddlPricDisc column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuchrgfrt(string $ArcuChrgFrt) Return ChildArCustMast objects filtered by the ArcuChrgFrt column
 * @method     ChildArCustMast[]|ObjectCollection findByArcucorexdays(int $ArcuCoreXDays) Return ChildArCustMast objects filtered by the ArcuCoreXDays column
 * @method     ChildArCustMast[]|ObjectCollection findByArcucontractnbr(string $ArcuContractNbr) Return ChildArCustMast objects filtered by the ArcuContractNbr column
 * @method     ChildArCustMast[]|ObjectCollection findByArcucorelf(string $ArcuCoreLF) Return ChildArCustMast objects filtered by the ArcuCoreLF column
 * @method     ChildArCustMast[]|ObjectCollection findByArcucorebankid(string $ArcuCoreBankId) Return ChildArCustMast objects filtered by the ArcuCoreBankId column
 * @method     ChildArCustMast[]|ObjectCollection findByArcudunsnbr(string $ArcuDunsNbr) Return ChildArCustMast objects filtered by the ArcuDunsNbr column
 * @method     ChildArCustMast[]|ObjectCollection findByArcurfmlvalu(int $ArcuRfmlValu) Return ChildArCustMast objects filtered by the ArcuRfmlValu column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuforcecustpo(string $ArcuForceCustPo) Return ChildArCustMast objects filtered by the ArcuForceCustPo column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuagelevel(int $ArcuAgeLevel) Return ChildArCustMast objects filtered by the ArcuAgeLevel column
 * @method     ChildArCustMast[]|ObjectCollection findByArtbroute(string $ArtbRoute) Return ChildArCustMast objects filtered by the ArtbRoute column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuwgtaxcode(string $ArcuWgTaxCode) Return ChildArCustMast objects filtered by the ArcuWgTaxCode column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuacptsupercede(string $ArcuAcptSupercede) Return ChildArCustMast objects filtered by the ArcuAcptSupercede column
 * @method     ChildArCustMast[]|ObjectCollection findByArcumstrcustid(string $ArcuMstrCustId) Return ChildArCustMast objects filtered by the ArcuMstrCustId column
 * @method     ChildArCustMast[]|ObjectCollection findByArcusurchgpct(string $ArcuSurchgPct) Return ChildArCustMast objects filtered by the ArcuSurchgPct column
 * @method     ChildArCustMast[]|ObjectCollection findByArcufrgtsplit(string $ArcuFrgtSplit) Return ChildArCustMast objects filtered by the ArcuFrgtSplit column
 * @method     ChildArCustMast[]|ObjectCollection findByArculinemin(string $ArcuLineMin) Return ChildArCustMast objects filtered by the ArcuLineMin column
 * @method     ChildArCustMast[]|ObjectCollection findByArcuordrmin(string $ArcuOrdrMin) Return ChildArCustMast objects filtered by the ArcuOrdrMin column
 * @method     ChildArCustMast[]|ObjectCollection findByDateupdtd(int $DateUpdtd) Return ChildArCustMast objects filtered by the DateUpdtd column
 * @method     ChildArCustMast[]|ObjectCollection findByTimeupdtd(int $TimeUpdtd) Return ChildArCustMast objects filtered by the TimeUpdtd column
 * @method     ChildArCustMast[]|ObjectCollection findByDummy(string $dummy) Return ChildArCustMast objects filtered by the dummy column
 * @method     ChildArCustMast[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ArCustMastQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArCustMastQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArCustMast', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArCustMastQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArCustMastQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildArCustMastQuery) {
            return $criteria;
        }
        $query = new ChildArCustMastQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildArCustMast|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArCustMastTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArCustMastTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildArCustMast A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArcuCustId, ArcuName, ArcuAdr1, ArcuAdr2, ArcuAdr3, ArcuCtry, ArcuCity, ArcuStat, ArcuZipCode5, ArcuZipCode4, ArcuZipCode10, ArspSalePer1, ArspSalePer2, ArspSalePer3, ArtbMtaxCode, ArcuTaxExemNbr, IntbWhse, ArcuPricLvl, ArcuShipComp, ArcuTxbl, ArcuPostal, ArtbShipVia, ArcuBord, ArtbTypeCode, ArtbPricCode, ArtbCommCode, ArtmTermCd, ArcuCredLmt, ArcuStmtCode, ArcuCredHold, ArcuFinChrg, ArcuUserCode, ArcuNewFc, ArcuUnpdFc, ArcuCurBal, ArcuBalOdue1, ArcuBalOdue2, ArcuBalOdue3, ArcuSaleMtd, ArcuInvMtd, ArcuDateOpen, ArcuLastSaleDate, ArcuHighBal, ArcuBigSaleMo, ArcuLastPayDate, ArcuAvgPayDays, ArcuUpsZone, ArcuHighBalDate, ArcuSale24mo1, ArcuInv24mo1, ArcuSale24mo2, ArcuInv24mo2, ArcuSale24mo3, ArcuInv24mo3, ArcuSale24mo4, ArcuInv24mo4, ArcuSale24mo5, ArcuInv24mo5, ArcuSale24mo6, ArcuInv24mo6, ArcuSale24mo7, ArcuInv24mo7, ArcuSale24mo8, ArcuInv24mo8, ArcuSale24mo9, ArcuInv24mo9, ArcuSale24mo10, ArcuInv24mo10, ArcuSale24mo11, ArcuInv24mo11, ArcuSale24mo12, ArcuInv24mo12, ArcuSale24mo13, ArcuInv24mo13, ArcuSale24mo14, ArcuInv24mo14, ArcuSale24mo15, ArcuInv24mo15, ArcuSale24mo16, ArcuInv24mo16, ArcuSale24mo17, ArcuInv24mo17, ArcuSale24mo18, ArcuInv24mo18, ArcuSale24mo19, ArcuInv24mo19, ArcuSale24mo20, ArcuInv24mo20, ArcuSale24mo21, ArcuInv24mo21, ArcuSale24mo22, ArcuInv24mo22, ArcuSale24mo23, ArcuInv24mo23, ArcuSale24mo24, ArcuInv24mo24, ArcuLastPayAmt, ArcuOrdrTot, ArcuUseFrtIn, ArcuMyVendId, ArcuAddlPricDisc, ArcuChrgFrt, ArcuCoreXDays, ArcuContractNbr, ArcuCoreLF, ArcuCoreBankId, ArcuDunsNbr, ArcuRfmlValu, ArcuForceCustPo, ArcuAgeLevel, ArtbRoute, ArcuWgTaxCode, ArcuAcptSupercede, ArcuMstrCustId, ArcuSurchgPct, ArcuFrgtSplit, ArcuLineMin, ArcuOrdrMin, DateUpdtd, TimeUpdtd, dummy FROM AR_CUST_MAST WHERE ArcuCustId = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildArCustMast $obj */
            $obj = new ChildArCustMast();
            $obj->hydrate($row);
            ArCustMastTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildArCustMast|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCUSTID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCUSTID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ArcuCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucustid('fooValue');   // WHERE ArcuCustId = 'fooValue'
     * $query->filterByArcucustid('%fooValue%', Criteria::LIKE); // WHERE ArcuCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the ArcuName column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuname('fooValue');   // WHERE ArcuName = 'fooValue'
     * $query->filterByArcuname('%fooValue%', Criteria::LIKE); // WHERE ArcuName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuname($arcuname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUNAME, $arcuname, $comparison);
    }

    /**
     * Filter the query on the ArcuAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuadr1('fooValue');   // WHERE ArcuAdr1 = 'fooValue'
     * $query->filterByArcuadr1('%fooValue%', Criteria::LIKE); // WHERE ArcuAdr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuadr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuadr1($arcuadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUADR1, $arcuadr1, $comparison);
    }

    /**
     * Filter the query on the ArcuAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuadr2('fooValue');   // WHERE ArcuAdr2 = 'fooValue'
     * $query->filterByArcuadr2('%fooValue%', Criteria::LIKE); // WHERE ArcuAdr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuadr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuadr2($arcuadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUADR2, $arcuadr2, $comparison);
    }

    /**
     * Filter the query on the ArcuAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuadr3('fooValue');   // WHERE ArcuAdr3 = 'fooValue'
     * $query->filterByArcuadr3('%fooValue%', Criteria::LIKE); // WHERE ArcuAdr3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuadr3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuadr3($arcuadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUADR3, $arcuadr3, $comparison);
    }

    /**
     * Filter the query on the ArcuCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuctry('fooValue');   // WHERE ArcuCtry = 'fooValue'
     * $query->filterByArcuctry('%fooValue%', Criteria::LIKE); // WHERE ArcuCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuctry($arcuctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCTRY, $arcuctry, $comparison);
    }

    /**
     * Filter the query on the ArcuCity column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucity('fooValue');   // WHERE ArcuCity = 'fooValue'
     * $query->filterByArcucity('%fooValue%', Criteria::LIKE); // WHERE ArcuCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcucity($arcucity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCITY, $arcucity, $comparison);
    }

    /**
     * Filter the query on the ArcuStat column
     *
     * Example usage:
     * <code>
     * $query->filterByArcustat('fooValue');   // WHERE ArcuStat = 'fooValue'
     * $query->filterByArcustat('%fooValue%', Criteria::LIKE); // WHERE ArcuStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcustat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcustat($arcustat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcustat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSTAT, $arcustat, $comparison);
    }

    /**
     * Filter the query on the ArcuZipCode5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuzipcode5('fooValue');   // WHERE ArcuZipCode5 = 'fooValue'
     * $query->filterByArcuzipcode5('%fooValue%', Criteria::LIKE); // WHERE ArcuZipCode5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuzipcode5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuzipcode5($arcuzipcode5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuzipcode5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUZIPCODE5, $arcuzipcode5, $comparison);
    }

    /**
     * Filter the query on the ArcuZipCode4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuzipcode4('fooValue');   // WHERE ArcuZipCode4 = 'fooValue'
     * $query->filterByArcuzipcode4('%fooValue%', Criteria::LIKE); // WHERE ArcuZipCode4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuzipcode4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuzipcode4($arcuzipcode4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuzipcode4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUZIPCODE4, $arcuzipcode4, $comparison);
    }

    /**
     * Filter the query on the ArcuZipCode10 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuzipcode10('fooValue');   // WHERE ArcuZipCode10 = 'fooValue'
     * $query->filterByArcuzipcode10('%fooValue%', Criteria::LIKE); // WHERE ArcuZipCode10 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuzipcode10 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuzipcode10($arcuzipcode10 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuzipcode10)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUZIPCODE10, $arcuzipcode10, $comparison);
    }

    /**
     * Filter the query on the ArspSalePer1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper1('fooValue');   // WHERE ArspSalePer1 = 'fooValue'
     * $query->filterByArspsaleper1('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArspsaleper1($arspsaleper1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARSPSALEPER1, $arspsaleper1, $comparison);
    }

    /**
     * Filter the query on the ArspSalePer2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper2('fooValue');   // WHERE ArspSalePer2 = 'fooValue'
     * $query->filterByArspsaleper2('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArspsaleper2($arspsaleper2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARSPSALEPER2, $arspsaleper2, $comparison);
    }

    /**
     * Filter the query on the ArspSalePer3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper3('fooValue');   // WHERE ArspSalePer3 = 'fooValue'
     * $query->filterByArspsaleper3('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArspsaleper3($arspsaleper3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARSPSALEPER3, $arspsaleper3, $comparison);
    }

    /**
     * Filter the query on the ArtbMtaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbmtaxcode('fooValue');   // WHERE ArtbMtaxCode = 'fooValue'
     * $query->filterByArtbmtaxcode('%fooValue%', Criteria::LIKE); // WHERE ArtbMtaxCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbmtaxcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArtbmtaxcode($artbmtaxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbmtaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARTBMTAXCODE, $artbmtaxcode, $comparison);
    }

    /**
     * Filter the query on the ArcuTaxExemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArcutaxexemnbr('fooValue');   // WHERE ArcuTaxExemNbr = 'fooValue'
     * $query->filterByArcutaxexemnbr('%fooValue%', Criteria::LIKE); // WHERE ArcuTaxExemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcutaxexemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcutaxexemnbr($arcutaxexemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcutaxexemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUTAXEXEMNBR, $arcutaxexemnbr, $comparison);
    }

    /**
     * Filter the query on the IntbWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhse('fooValue');   // WHERE IntbWhse = 'fooValue'
     * $query->filterByIntbwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the ArcuPricLvl column
     *
     * Example usage:
     * <code>
     * $query->filterByArcupriclvl('fooValue');   // WHERE ArcuPricLvl = 'fooValue'
     * $query->filterByArcupriclvl('%fooValue%', Criteria::LIKE); // WHERE ArcuPricLvl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcupriclvl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcupriclvl($arcupriclvl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcupriclvl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUPRICLVL, $arcupriclvl, $comparison);
    }

    /**
     * Filter the query on the ArcuShipComp column
     *
     * Example usage:
     * <code>
     * $query->filterByArcushipcomp('fooValue');   // WHERE ArcuShipComp = 'fooValue'
     * $query->filterByArcushipcomp('%fooValue%', Criteria::LIKE); // WHERE ArcuShipComp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcushipcomp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcushipcomp($arcushipcomp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcushipcomp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSHIPCOMP, $arcushipcomp, $comparison);
    }

    /**
     * Filter the query on the ArcuTxbl column
     *
     * Example usage:
     * <code>
     * $query->filterByArcutxbl('fooValue');   // WHERE ArcuTxbl = 'fooValue'
     * $query->filterByArcutxbl('%fooValue%', Criteria::LIKE); // WHERE ArcuTxbl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcutxbl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcutxbl($arcutxbl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcutxbl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUTXBL, $arcutxbl, $comparison);
    }

    /**
     * Filter the query on the ArcuPostal column
     *
     * Example usage:
     * <code>
     * $query->filterByArcupostal('fooValue');   // WHERE ArcuPostal = 'fooValue'
     * $query->filterByArcupostal('%fooValue%', Criteria::LIKE); // WHERE ArcuPostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcupostal The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcupostal($arcupostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcupostal)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUPOSTAL, $arcupostal, $comparison);
    }

    /**
     * Filter the query on the ArtbShipVia column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbshipvia('fooValue');   // WHERE ArtbShipVia = 'fooValue'
     * $query->filterByArtbshipvia('%fooValue%', Criteria::LIKE); // WHERE ArtbShipVia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbshipvia The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArtbshipvia($artbshipvia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbshipvia)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARTBSHIPVIA, $artbshipvia, $comparison);
    }

    /**
     * Filter the query on the ArcuBord column
     *
     * Example usage:
     * <code>
     * $query->filterByArcubord('fooValue');   // WHERE ArcuBord = 'fooValue'
     * $query->filterByArcubord('%fooValue%', Criteria::LIKE); // WHERE ArcuBord LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcubord The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcubord($arcubord = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcubord)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUBORD, $arcubord, $comparison);
    }

    /**
     * Filter the query on the ArtbTypeCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbtypecode('fooValue');   // WHERE ArtbTypeCode = 'fooValue'
     * $query->filterByArtbtypecode('%fooValue%', Criteria::LIKE); // WHERE ArtbTypeCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbtypecode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArtbtypecode($artbtypecode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbtypecode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARTBTYPECODE, $artbtypecode, $comparison);
    }

    /**
     * Filter the query on the ArtbPricCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbpriccode('fooValue');   // WHERE ArtbPricCode = 'fooValue'
     * $query->filterByArtbpriccode('%fooValue%', Criteria::LIKE); // WHERE ArtbPricCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbpriccode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArtbpriccode($artbpriccode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbpriccode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARTBPRICCODE, $artbpriccode, $comparison);
    }

    /**
     * Filter the query on the ArtbCommCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcommcode('fooValue');   // WHERE ArtbCommCode = 'fooValue'
     * $query->filterByArtbcommcode('%fooValue%', Criteria::LIKE); // WHERE ArtbCommCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcommcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArtbcommcode($artbcommcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcommcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARTBCOMMCODE, $artbcommcode, $comparison);
    }

    /**
     * Filter the query on the ArtmTermCd column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmtermcd('fooValue');   // WHERE ArtmTermCd = 'fooValue'
     * $query->filterByArtmtermcd('%fooValue%', Criteria::LIKE); // WHERE ArtmTermCd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmtermcd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArtmtermcd($artmtermcd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmtermcd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARTMTERMCD, $artmtermcd, $comparison);
    }

    /**
     * Filter the query on the ArcuCredLmt column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucredlmt(1234); // WHERE ArcuCredLmt = 1234
     * $query->filterByArcucredlmt(array(12, 34)); // WHERE ArcuCredLmt IN (12, 34)
     * $query->filterByArcucredlmt(array('min' => 12)); // WHERE ArcuCredLmt > 12
     * </code>
     *
     * @param     mixed $arcucredlmt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcucredlmt($arcucredlmt = null, $comparison = null)
    {
        if (is_array($arcucredlmt)) {
            $useMinMax = false;
            if (isset($arcucredlmt['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCREDLMT, $arcucredlmt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcucredlmt['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCREDLMT, $arcucredlmt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCREDLMT, $arcucredlmt, $comparison);
    }

    /**
     * Filter the query on the ArcuStmtCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArcustmtcode('fooValue');   // WHERE ArcuStmtCode = 'fooValue'
     * $query->filterByArcustmtcode('%fooValue%', Criteria::LIKE); // WHERE ArcuStmtCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcustmtcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcustmtcode($arcustmtcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcustmtcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSTMTCODE, $arcustmtcode, $comparison);
    }

    /**
     * Filter the query on the ArcuCredHold column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucredhold('fooValue');   // WHERE ArcuCredHold = 'fooValue'
     * $query->filterByArcucredhold('%fooValue%', Criteria::LIKE); // WHERE ArcuCredHold LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucredhold The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcucredhold($arcucredhold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucredhold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCREDHOLD, $arcucredhold, $comparison);
    }

    /**
     * Filter the query on the ArcuFinChrg column
     *
     * Example usage:
     * <code>
     * $query->filterByArcufinchrg('fooValue');   // WHERE ArcuFinChrg = 'fooValue'
     * $query->filterByArcufinchrg('%fooValue%', Criteria::LIKE); // WHERE ArcuFinChrg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcufinchrg The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcufinchrg($arcufinchrg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcufinchrg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUFINCHRG, $arcufinchrg, $comparison);
    }

    /**
     * Filter the query on the ArcuUserCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuusercode('fooValue');   // WHERE ArcuUserCode = 'fooValue'
     * $query->filterByArcuusercode('%fooValue%', Criteria::LIKE); // WHERE ArcuUserCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuusercode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuusercode($arcuusercode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuusercode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUUSERCODE, $arcuusercode, $comparison);
    }

    /**
     * Filter the query on the ArcuNewFc column
     *
     * Example usage:
     * <code>
     * $query->filterByArcunewfc(1234); // WHERE ArcuNewFc = 1234
     * $query->filterByArcunewfc(array(12, 34)); // WHERE ArcuNewFc IN (12, 34)
     * $query->filterByArcunewfc(array('min' => 12)); // WHERE ArcuNewFc > 12
     * </code>
     *
     * @param     mixed $arcunewfc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcunewfc($arcunewfc = null, $comparison = null)
    {
        if (is_array($arcunewfc)) {
            $useMinMax = false;
            if (isset($arcunewfc['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUNEWFC, $arcunewfc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcunewfc['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUNEWFC, $arcunewfc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUNEWFC, $arcunewfc, $comparison);
    }

    /**
     * Filter the query on the ArcuUnpdFc column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuunpdfc(1234); // WHERE ArcuUnpdFc = 1234
     * $query->filterByArcuunpdfc(array(12, 34)); // WHERE ArcuUnpdFc IN (12, 34)
     * $query->filterByArcuunpdfc(array('min' => 12)); // WHERE ArcuUnpdFc > 12
     * </code>
     *
     * @param     mixed $arcuunpdfc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuunpdfc($arcuunpdfc = null, $comparison = null)
    {
        if (is_array($arcuunpdfc)) {
            $useMinMax = false;
            if (isset($arcuunpdfc['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUUNPDFC, $arcuunpdfc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuunpdfc['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUUNPDFC, $arcuunpdfc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUUNPDFC, $arcuunpdfc, $comparison);
    }

    /**
     * Filter the query on the ArcuCurBal column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucurbal(1234); // WHERE ArcuCurBal = 1234
     * $query->filterByArcucurbal(array(12, 34)); // WHERE ArcuCurBal IN (12, 34)
     * $query->filterByArcucurbal(array('min' => 12)); // WHERE ArcuCurBal > 12
     * </code>
     *
     * @param     mixed $arcucurbal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcucurbal($arcucurbal = null, $comparison = null)
    {
        if (is_array($arcucurbal)) {
            $useMinMax = false;
            if (isset($arcucurbal['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCURBAL, $arcucurbal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcucurbal['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCURBAL, $arcucurbal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCURBAL, $arcucurbal, $comparison);
    }

    /**
     * Filter the query on the ArcuBalOdue1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcubalodue1(1234); // WHERE ArcuBalOdue1 = 1234
     * $query->filterByArcubalodue1(array(12, 34)); // WHERE ArcuBalOdue1 IN (12, 34)
     * $query->filterByArcubalodue1(array('min' => 12)); // WHERE ArcuBalOdue1 > 12
     * </code>
     *
     * @param     mixed $arcubalodue1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcubalodue1($arcubalodue1 = null, $comparison = null)
    {
        if (is_array($arcubalodue1)) {
            $useMinMax = false;
            if (isset($arcubalodue1['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUBALODUE1, $arcubalodue1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcubalodue1['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUBALODUE1, $arcubalodue1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUBALODUE1, $arcubalodue1, $comparison);
    }

    /**
     * Filter the query on the ArcuBalOdue2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcubalodue2(1234); // WHERE ArcuBalOdue2 = 1234
     * $query->filterByArcubalodue2(array(12, 34)); // WHERE ArcuBalOdue2 IN (12, 34)
     * $query->filterByArcubalodue2(array('min' => 12)); // WHERE ArcuBalOdue2 > 12
     * </code>
     *
     * @param     mixed $arcubalodue2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcubalodue2($arcubalodue2 = null, $comparison = null)
    {
        if (is_array($arcubalodue2)) {
            $useMinMax = false;
            if (isset($arcubalodue2['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUBALODUE2, $arcubalodue2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcubalodue2['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUBALODUE2, $arcubalodue2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUBALODUE2, $arcubalodue2, $comparison);
    }

    /**
     * Filter the query on the ArcuBalOdue3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcubalodue3(1234); // WHERE ArcuBalOdue3 = 1234
     * $query->filterByArcubalodue3(array(12, 34)); // WHERE ArcuBalOdue3 IN (12, 34)
     * $query->filterByArcubalodue3(array('min' => 12)); // WHERE ArcuBalOdue3 > 12
     * </code>
     *
     * @param     mixed $arcubalodue3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcubalodue3($arcubalodue3 = null, $comparison = null)
    {
        if (is_array($arcubalodue3)) {
            $useMinMax = false;
            if (isset($arcubalodue3['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUBALODUE3, $arcubalodue3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcubalodue3['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUBALODUE3, $arcubalodue3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUBALODUE3, $arcubalodue3, $comparison);
    }

    /**
     * Filter the query on the ArcuSaleMtd column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusalemtd(1234); // WHERE ArcuSaleMtd = 1234
     * $query->filterByArcusalemtd(array(12, 34)); // WHERE ArcuSaleMtd IN (12, 34)
     * $query->filterByArcusalemtd(array('min' => 12)); // WHERE ArcuSaleMtd > 12
     * </code>
     *
     * @param     mixed $arcusalemtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusalemtd($arcusalemtd = null, $comparison = null)
    {
        if (is_array($arcusalemtd)) {
            $useMinMax = false;
            if (isset($arcusalemtd['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALEMTD, $arcusalemtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusalemtd['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALEMTD, $arcusalemtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALEMTD, $arcusalemtd, $comparison);
    }

    /**
     * Filter the query on the ArcuInvMtd column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinvmtd(1234); // WHERE ArcuInvMtd = 1234
     * $query->filterByArcuinvmtd(array(12, 34)); // WHERE ArcuInvMtd IN (12, 34)
     * $query->filterByArcuinvmtd(array('min' => 12)); // WHERE ArcuInvMtd > 12
     * </code>
     *
     * @param     mixed $arcuinvmtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinvmtd($arcuinvmtd = null, $comparison = null)
    {
        if (is_array($arcuinvmtd)) {
            $useMinMax = false;
            if (isset($arcuinvmtd['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINVMTD, $arcuinvmtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinvmtd['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINVMTD, $arcuinvmtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINVMTD, $arcuinvmtd, $comparison);
    }

    /**
     * Filter the query on the ArcuDateOpen column
     *
     * Example usage:
     * <code>
     * $query->filterByArcudateopen(1234); // WHERE ArcuDateOpen = 1234
     * $query->filterByArcudateopen(array(12, 34)); // WHERE ArcuDateOpen IN (12, 34)
     * $query->filterByArcudateopen(array('min' => 12)); // WHERE ArcuDateOpen > 12
     * </code>
     *
     * @param     mixed $arcudateopen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcudateopen($arcudateopen = null, $comparison = null)
    {
        if (is_array($arcudateopen)) {
            $useMinMax = false;
            if (isset($arcudateopen['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUDATEOPEN, $arcudateopen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcudateopen['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUDATEOPEN, $arcudateopen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUDATEOPEN, $arcudateopen, $comparison);
    }

    /**
     * Filter the query on the ArcuLastSaleDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArculastsaledate(1234); // WHERE ArcuLastSaleDate = 1234
     * $query->filterByArculastsaledate(array(12, 34)); // WHERE ArcuLastSaleDate IN (12, 34)
     * $query->filterByArculastsaledate(array('min' => 12)); // WHERE ArcuLastSaleDate > 12
     * </code>
     *
     * @param     mixed $arculastsaledate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArculastsaledate($arculastsaledate = null, $comparison = null)
    {
        if (is_array($arculastsaledate)) {
            $useMinMax = false;
            if (isset($arculastsaledate['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCULASTSALEDATE, $arculastsaledate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arculastsaledate['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCULASTSALEDATE, $arculastsaledate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCULASTSALEDATE, $arculastsaledate, $comparison);
    }

    /**
     * Filter the query on the ArcuHighBal column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuhighbal(1234); // WHERE ArcuHighBal = 1234
     * $query->filterByArcuhighbal(array(12, 34)); // WHERE ArcuHighBal IN (12, 34)
     * $query->filterByArcuhighbal(array('min' => 12)); // WHERE ArcuHighBal > 12
     * </code>
     *
     * @param     mixed $arcuhighbal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuhighbal($arcuhighbal = null, $comparison = null)
    {
        if (is_array($arcuhighbal)) {
            $useMinMax = false;
            if (isset($arcuhighbal['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUHIGHBAL, $arcuhighbal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuhighbal['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUHIGHBAL, $arcuhighbal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUHIGHBAL, $arcuhighbal, $comparison);
    }

    /**
     * Filter the query on the ArcuBigSaleMo column
     *
     * Example usage:
     * <code>
     * $query->filterByArcubigsalemo(1234); // WHERE ArcuBigSaleMo = 1234
     * $query->filterByArcubigsalemo(array(12, 34)); // WHERE ArcuBigSaleMo IN (12, 34)
     * $query->filterByArcubigsalemo(array('min' => 12)); // WHERE ArcuBigSaleMo > 12
     * </code>
     *
     * @param     mixed $arcubigsalemo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcubigsalemo($arcubigsalemo = null, $comparison = null)
    {
        if (is_array($arcubigsalemo)) {
            $useMinMax = false;
            if (isset($arcubigsalemo['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUBIGSALEMO, $arcubigsalemo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcubigsalemo['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUBIGSALEMO, $arcubigsalemo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUBIGSALEMO, $arcubigsalemo, $comparison);
    }

    /**
     * Filter the query on the ArcuLastPayDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArculastpaydate(1234); // WHERE ArcuLastPayDate = 1234
     * $query->filterByArculastpaydate(array(12, 34)); // WHERE ArcuLastPayDate IN (12, 34)
     * $query->filterByArculastpaydate(array('min' => 12)); // WHERE ArcuLastPayDate > 12
     * </code>
     *
     * @param     mixed $arculastpaydate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArculastpaydate($arculastpaydate = null, $comparison = null)
    {
        if (is_array($arculastpaydate)) {
            $useMinMax = false;
            if (isset($arculastpaydate['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCULASTPAYDATE, $arculastpaydate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arculastpaydate['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCULASTPAYDATE, $arculastpaydate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCULASTPAYDATE, $arculastpaydate, $comparison);
    }

    /**
     * Filter the query on the ArcuAvgPayDays column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuavgpaydays(1234); // WHERE ArcuAvgPayDays = 1234
     * $query->filterByArcuavgpaydays(array(12, 34)); // WHERE ArcuAvgPayDays IN (12, 34)
     * $query->filterByArcuavgpaydays(array('min' => 12)); // WHERE ArcuAvgPayDays > 12
     * </code>
     *
     * @param     mixed $arcuavgpaydays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuavgpaydays($arcuavgpaydays = null, $comparison = null)
    {
        if (is_array($arcuavgpaydays)) {
            $useMinMax = false;
            if (isset($arcuavgpaydays['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUAVGPAYDAYS, $arcuavgpaydays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuavgpaydays['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUAVGPAYDAYS, $arcuavgpaydays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUAVGPAYDAYS, $arcuavgpaydays, $comparison);
    }

    /**
     * Filter the query on the ArcuUpsZone column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuupszone('fooValue');   // WHERE ArcuUpsZone = 'fooValue'
     * $query->filterByArcuupszone('%fooValue%', Criteria::LIKE); // WHERE ArcuUpsZone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuupszone The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuupszone($arcuupszone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuupszone)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUUPSZONE, $arcuupszone, $comparison);
    }

    /**
     * Filter the query on the ArcuHighBalDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuhighbaldate(1234); // WHERE ArcuHighBalDate = 1234
     * $query->filterByArcuhighbaldate(array(12, 34)); // WHERE ArcuHighBalDate IN (12, 34)
     * $query->filterByArcuhighbaldate(array('min' => 12)); // WHERE ArcuHighBalDate > 12
     * </code>
     *
     * @param     mixed $arcuhighbaldate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuhighbaldate($arcuhighbaldate = null, $comparison = null)
    {
        if (is_array($arcuhighbaldate)) {
            $useMinMax = false;
            if (isset($arcuhighbaldate['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUHIGHBALDATE, $arcuhighbaldate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuhighbaldate['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUHIGHBALDATE, $arcuhighbaldate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUHIGHBALDATE, $arcuhighbaldate, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo1(1234); // WHERE ArcuSale24mo1 = 1234
     * $query->filterByArcusale24mo1(array(12, 34)); // WHERE ArcuSale24mo1 IN (12, 34)
     * $query->filterByArcusale24mo1(array('min' => 12)); // WHERE ArcuSale24mo1 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo1($arcusale24mo1 = null, $comparison = null)
    {
        if (is_array($arcusale24mo1)) {
            $useMinMax = false;
            if (isset($arcusale24mo1['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO1, $arcusale24mo1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo1['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO1, $arcusale24mo1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO1, $arcusale24mo1, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo1(1234); // WHERE ArcuInv24mo1 = 1234
     * $query->filterByArcuinv24mo1(array(12, 34)); // WHERE ArcuInv24mo1 IN (12, 34)
     * $query->filterByArcuinv24mo1(array('min' => 12)); // WHERE ArcuInv24mo1 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo1($arcuinv24mo1 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo1)) {
            $useMinMax = false;
            if (isset($arcuinv24mo1['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO1, $arcuinv24mo1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo1['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO1, $arcuinv24mo1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO1, $arcuinv24mo1, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo2(1234); // WHERE ArcuSale24mo2 = 1234
     * $query->filterByArcusale24mo2(array(12, 34)); // WHERE ArcuSale24mo2 IN (12, 34)
     * $query->filterByArcusale24mo2(array('min' => 12)); // WHERE ArcuSale24mo2 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo2($arcusale24mo2 = null, $comparison = null)
    {
        if (is_array($arcusale24mo2)) {
            $useMinMax = false;
            if (isset($arcusale24mo2['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO2, $arcusale24mo2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo2['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO2, $arcusale24mo2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO2, $arcusale24mo2, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo2(1234); // WHERE ArcuInv24mo2 = 1234
     * $query->filterByArcuinv24mo2(array(12, 34)); // WHERE ArcuInv24mo2 IN (12, 34)
     * $query->filterByArcuinv24mo2(array('min' => 12)); // WHERE ArcuInv24mo2 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo2($arcuinv24mo2 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo2)) {
            $useMinMax = false;
            if (isset($arcuinv24mo2['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO2, $arcuinv24mo2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo2['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO2, $arcuinv24mo2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO2, $arcuinv24mo2, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo3(1234); // WHERE ArcuSale24mo3 = 1234
     * $query->filterByArcusale24mo3(array(12, 34)); // WHERE ArcuSale24mo3 IN (12, 34)
     * $query->filterByArcusale24mo3(array('min' => 12)); // WHERE ArcuSale24mo3 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo3($arcusale24mo3 = null, $comparison = null)
    {
        if (is_array($arcusale24mo3)) {
            $useMinMax = false;
            if (isset($arcusale24mo3['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO3, $arcusale24mo3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo3['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO3, $arcusale24mo3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO3, $arcusale24mo3, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo3(1234); // WHERE ArcuInv24mo3 = 1234
     * $query->filterByArcuinv24mo3(array(12, 34)); // WHERE ArcuInv24mo3 IN (12, 34)
     * $query->filterByArcuinv24mo3(array('min' => 12)); // WHERE ArcuInv24mo3 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo3($arcuinv24mo3 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo3)) {
            $useMinMax = false;
            if (isset($arcuinv24mo3['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO3, $arcuinv24mo3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo3['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO3, $arcuinv24mo3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO3, $arcuinv24mo3, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo4(1234); // WHERE ArcuSale24mo4 = 1234
     * $query->filterByArcusale24mo4(array(12, 34)); // WHERE ArcuSale24mo4 IN (12, 34)
     * $query->filterByArcusale24mo4(array('min' => 12)); // WHERE ArcuSale24mo4 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo4($arcusale24mo4 = null, $comparison = null)
    {
        if (is_array($arcusale24mo4)) {
            $useMinMax = false;
            if (isset($arcusale24mo4['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO4, $arcusale24mo4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo4['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO4, $arcusale24mo4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO4, $arcusale24mo4, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo4(1234); // WHERE ArcuInv24mo4 = 1234
     * $query->filterByArcuinv24mo4(array(12, 34)); // WHERE ArcuInv24mo4 IN (12, 34)
     * $query->filterByArcuinv24mo4(array('min' => 12)); // WHERE ArcuInv24mo4 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo4($arcuinv24mo4 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo4)) {
            $useMinMax = false;
            if (isset($arcuinv24mo4['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO4, $arcuinv24mo4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo4['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO4, $arcuinv24mo4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO4, $arcuinv24mo4, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo5(1234); // WHERE ArcuSale24mo5 = 1234
     * $query->filterByArcusale24mo5(array(12, 34)); // WHERE ArcuSale24mo5 IN (12, 34)
     * $query->filterByArcusale24mo5(array('min' => 12)); // WHERE ArcuSale24mo5 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo5($arcusale24mo5 = null, $comparison = null)
    {
        if (is_array($arcusale24mo5)) {
            $useMinMax = false;
            if (isset($arcusale24mo5['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO5, $arcusale24mo5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo5['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO5, $arcusale24mo5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO5, $arcusale24mo5, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo5(1234); // WHERE ArcuInv24mo5 = 1234
     * $query->filterByArcuinv24mo5(array(12, 34)); // WHERE ArcuInv24mo5 IN (12, 34)
     * $query->filterByArcuinv24mo5(array('min' => 12)); // WHERE ArcuInv24mo5 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo5($arcuinv24mo5 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo5)) {
            $useMinMax = false;
            if (isset($arcuinv24mo5['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO5, $arcuinv24mo5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo5['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO5, $arcuinv24mo5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO5, $arcuinv24mo5, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo6(1234); // WHERE ArcuSale24mo6 = 1234
     * $query->filterByArcusale24mo6(array(12, 34)); // WHERE ArcuSale24mo6 IN (12, 34)
     * $query->filterByArcusale24mo6(array('min' => 12)); // WHERE ArcuSale24mo6 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo6($arcusale24mo6 = null, $comparison = null)
    {
        if (is_array($arcusale24mo6)) {
            $useMinMax = false;
            if (isset($arcusale24mo6['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO6, $arcusale24mo6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo6['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO6, $arcusale24mo6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO6, $arcusale24mo6, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo6(1234); // WHERE ArcuInv24mo6 = 1234
     * $query->filterByArcuinv24mo6(array(12, 34)); // WHERE ArcuInv24mo6 IN (12, 34)
     * $query->filterByArcuinv24mo6(array('min' => 12)); // WHERE ArcuInv24mo6 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo6($arcuinv24mo6 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo6)) {
            $useMinMax = false;
            if (isset($arcuinv24mo6['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO6, $arcuinv24mo6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo6['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO6, $arcuinv24mo6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO6, $arcuinv24mo6, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo7 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo7(1234); // WHERE ArcuSale24mo7 = 1234
     * $query->filterByArcusale24mo7(array(12, 34)); // WHERE ArcuSale24mo7 IN (12, 34)
     * $query->filterByArcusale24mo7(array('min' => 12)); // WHERE ArcuSale24mo7 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo7($arcusale24mo7 = null, $comparison = null)
    {
        if (is_array($arcusale24mo7)) {
            $useMinMax = false;
            if (isset($arcusale24mo7['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO7, $arcusale24mo7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo7['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO7, $arcusale24mo7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO7, $arcusale24mo7, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo7 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo7(1234); // WHERE ArcuInv24mo7 = 1234
     * $query->filterByArcuinv24mo7(array(12, 34)); // WHERE ArcuInv24mo7 IN (12, 34)
     * $query->filterByArcuinv24mo7(array('min' => 12)); // WHERE ArcuInv24mo7 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo7($arcuinv24mo7 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo7)) {
            $useMinMax = false;
            if (isset($arcuinv24mo7['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO7, $arcuinv24mo7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo7['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO7, $arcuinv24mo7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO7, $arcuinv24mo7, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo8 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo8(1234); // WHERE ArcuSale24mo8 = 1234
     * $query->filterByArcusale24mo8(array(12, 34)); // WHERE ArcuSale24mo8 IN (12, 34)
     * $query->filterByArcusale24mo8(array('min' => 12)); // WHERE ArcuSale24mo8 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo8($arcusale24mo8 = null, $comparison = null)
    {
        if (is_array($arcusale24mo8)) {
            $useMinMax = false;
            if (isset($arcusale24mo8['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO8, $arcusale24mo8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo8['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO8, $arcusale24mo8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO8, $arcusale24mo8, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo8 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo8(1234); // WHERE ArcuInv24mo8 = 1234
     * $query->filterByArcuinv24mo8(array(12, 34)); // WHERE ArcuInv24mo8 IN (12, 34)
     * $query->filterByArcuinv24mo8(array('min' => 12)); // WHERE ArcuInv24mo8 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo8($arcuinv24mo8 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo8)) {
            $useMinMax = false;
            if (isset($arcuinv24mo8['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO8, $arcuinv24mo8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo8['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO8, $arcuinv24mo8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO8, $arcuinv24mo8, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo9 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo9(1234); // WHERE ArcuSale24mo9 = 1234
     * $query->filterByArcusale24mo9(array(12, 34)); // WHERE ArcuSale24mo9 IN (12, 34)
     * $query->filterByArcusale24mo9(array('min' => 12)); // WHERE ArcuSale24mo9 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo9($arcusale24mo9 = null, $comparison = null)
    {
        if (is_array($arcusale24mo9)) {
            $useMinMax = false;
            if (isset($arcusale24mo9['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO9, $arcusale24mo9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo9['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO9, $arcusale24mo9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO9, $arcusale24mo9, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo9 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo9(1234); // WHERE ArcuInv24mo9 = 1234
     * $query->filterByArcuinv24mo9(array(12, 34)); // WHERE ArcuInv24mo9 IN (12, 34)
     * $query->filterByArcuinv24mo9(array('min' => 12)); // WHERE ArcuInv24mo9 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo9($arcuinv24mo9 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo9)) {
            $useMinMax = false;
            if (isset($arcuinv24mo9['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO9, $arcuinv24mo9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo9['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO9, $arcuinv24mo9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO9, $arcuinv24mo9, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo10 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo10(1234); // WHERE ArcuSale24mo10 = 1234
     * $query->filterByArcusale24mo10(array(12, 34)); // WHERE ArcuSale24mo10 IN (12, 34)
     * $query->filterByArcusale24mo10(array('min' => 12)); // WHERE ArcuSale24mo10 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo10($arcusale24mo10 = null, $comparison = null)
    {
        if (is_array($arcusale24mo10)) {
            $useMinMax = false;
            if (isset($arcusale24mo10['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO10, $arcusale24mo10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo10['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO10, $arcusale24mo10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO10, $arcusale24mo10, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo10 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo10(1234); // WHERE ArcuInv24mo10 = 1234
     * $query->filterByArcuinv24mo10(array(12, 34)); // WHERE ArcuInv24mo10 IN (12, 34)
     * $query->filterByArcuinv24mo10(array('min' => 12)); // WHERE ArcuInv24mo10 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo10($arcuinv24mo10 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo10)) {
            $useMinMax = false;
            if (isset($arcuinv24mo10['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO10, $arcuinv24mo10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo10['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO10, $arcuinv24mo10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO10, $arcuinv24mo10, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo11 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo11(1234); // WHERE ArcuSale24mo11 = 1234
     * $query->filterByArcusale24mo11(array(12, 34)); // WHERE ArcuSale24mo11 IN (12, 34)
     * $query->filterByArcusale24mo11(array('min' => 12)); // WHERE ArcuSale24mo11 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo11 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo11($arcusale24mo11 = null, $comparison = null)
    {
        if (is_array($arcusale24mo11)) {
            $useMinMax = false;
            if (isset($arcusale24mo11['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO11, $arcusale24mo11['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo11['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO11, $arcusale24mo11['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO11, $arcusale24mo11, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo11 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo11(1234); // WHERE ArcuInv24mo11 = 1234
     * $query->filterByArcuinv24mo11(array(12, 34)); // WHERE ArcuInv24mo11 IN (12, 34)
     * $query->filterByArcuinv24mo11(array('min' => 12)); // WHERE ArcuInv24mo11 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo11 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo11($arcuinv24mo11 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo11)) {
            $useMinMax = false;
            if (isset($arcuinv24mo11['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO11, $arcuinv24mo11['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo11['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO11, $arcuinv24mo11['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO11, $arcuinv24mo11, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo12 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo12(1234); // WHERE ArcuSale24mo12 = 1234
     * $query->filterByArcusale24mo12(array(12, 34)); // WHERE ArcuSale24mo12 IN (12, 34)
     * $query->filterByArcusale24mo12(array('min' => 12)); // WHERE ArcuSale24mo12 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo12 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo12($arcusale24mo12 = null, $comparison = null)
    {
        if (is_array($arcusale24mo12)) {
            $useMinMax = false;
            if (isset($arcusale24mo12['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO12, $arcusale24mo12['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo12['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO12, $arcusale24mo12['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO12, $arcusale24mo12, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo12 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo12(1234); // WHERE ArcuInv24mo12 = 1234
     * $query->filterByArcuinv24mo12(array(12, 34)); // WHERE ArcuInv24mo12 IN (12, 34)
     * $query->filterByArcuinv24mo12(array('min' => 12)); // WHERE ArcuInv24mo12 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo12 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo12($arcuinv24mo12 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo12)) {
            $useMinMax = false;
            if (isset($arcuinv24mo12['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO12, $arcuinv24mo12['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo12['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO12, $arcuinv24mo12['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO12, $arcuinv24mo12, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo13 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo13(1234); // WHERE ArcuSale24mo13 = 1234
     * $query->filterByArcusale24mo13(array(12, 34)); // WHERE ArcuSale24mo13 IN (12, 34)
     * $query->filterByArcusale24mo13(array('min' => 12)); // WHERE ArcuSale24mo13 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo13 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo13($arcusale24mo13 = null, $comparison = null)
    {
        if (is_array($arcusale24mo13)) {
            $useMinMax = false;
            if (isset($arcusale24mo13['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO13, $arcusale24mo13['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo13['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO13, $arcusale24mo13['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO13, $arcusale24mo13, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo13 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo13(1234); // WHERE ArcuInv24mo13 = 1234
     * $query->filterByArcuinv24mo13(array(12, 34)); // WHERE ArcuInv24mo13 IN (12, 34)
     * $query->filterByArcuinv24mo13(array('min' => 12)); // WHERE ArcuInv24mo13 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo13 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo13($arcuinv24mo13 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo13)) {
            $useMinMax = false;
            if (isset($arcuinv24mo13['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO13, $arcuinv24mo13['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo13['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO13, $arcuinv24mo13['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO13, $arcuinv24mo13, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo14 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo14(1234); // WHERE ArcuSale24mo14 = 1234
     * $query->filterByArcusale24mo14(array(12, 34)); // WHERE ArcuSale24mo14 IN (12, 34)
     * $query->filterByArcusale24mo14(array('min' => 12)); // WHERE ArcuSale24mo14 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo14 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo14($arcusale24mo14 = null, $comparison = null)
    {
        if (is_array($arcusale24mo14)) {
            $useMinMax = false;
            if (isset($arcusale24mo14['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO14, $arcusale24mo14['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo14['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO14, $arcusale24mo14['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO14, $arcusale24mo14, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo14 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo14(1234); // WHERE ArcuInv24mo14 = 1234
     * $query->filterByArcuinv24mo14(array(12, 34)); // WHERE ArcuInv24mo14 IN (12, 34)
     * $query->filterByArcuinv24mo14(array('min' => 12)); // WHERE ArcuInv24mo14 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo14 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo14($arcuinv24mo14 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo14)) {
            $useMinMax = false;
            if (isset($arcuinv24mo14['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO14, $arcuinv24mo14['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo14['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO14, $arcuinv24mo14['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO14, $arcuinv24mo14, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo15 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo15(1234); // WHERE ArcuSale24mo15 = 1234
     * $query->filterByArcusale24mo15(array(12, 34)); // WHERE ArcuSale24mo15 IN (12, 34)
     * $query->filterByArcusale24mo15(array('min' => 12)); // WHERE ArcuSale24mo15 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo15 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo15($arcusale24mo15 = null, $comparison = null)
    {
        if (is_array($arcusale24mo15)) {
            $useMinMax = false;
            if (isset($arcusale24mo15['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO15, $arcusale24mo15['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo15['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO15, $arcusale24mo15['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO15, $arcusale24mo15, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo15 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo15(1234); // WHERE ArcuInv24mo15 = 1234
     * $query->filterByArcuinv24mo15(array(12, 34)); // WHERE ArcuInv24mo15 IN (12, 34)
     * $query->filterByArcuinv24mo15(array('min' => 12)); // WHERE ArcuInv24mo15 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo15 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo15($arcuinv24mo15 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo15)) {
            $useMinMax = false;
            if (isset($arcuinv24mo15['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO15, $arcuinv24mo15['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo15['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO15, $arcuinv24mo15['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO15, $arcuinv24mo15, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo16 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo16(1234); // WHERE ArcuSale24mo16 = 1234
     * $query->filterByArcusale24mo16(array(12, 34)); // WHERE ArcuSale24mo16 IN (12, 34)
     * $query->filterByArcusale24mo16(array('min' => 12)); // WHERE ArcuSale24mo16 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo16 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo16($arcusale24mo16 = null, $comparison = null)
    {
        if (is_array($arcusale24mo16)) {
            $useMinMax = false;
            if (isset($arcusale24mo16['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO16, $arcusale24mo16['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo16['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO16, $arcusale24mo16['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO16, $arcusale24mo16, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo16 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo16(1234); // WHERE ArcuInv24mo16 = 1234
     * $query->filterByArcuinv24mo16(array(12, 34)); // WHERE ArcuInv24mo16 IN (12, 34)
     * $query->filterByArcuinv24mo16(array('min' => 12)); // WHERE ArcuInv24mo16 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo16 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo16($arcuinv24mo16 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo16)) {
            $useMinMax = false;
            if (isset($arcuinv24mo16['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO16, $arcuinv24mo16['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo16['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO16, $arcuinv24mo16['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO16, $arcuinv24mo16, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo17 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo17(1234); // WHERE ArcuSale24mo17 = 1234
     * $query->filterByArcusale24mo17(array(12, 34)); // WHERE ArcuSale24mo17 IN (12, 34)
     * $query->filterByArcusale24mo17(array('min' => 12)); // WHERE ArcuSale24mo17 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo17 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo17($arcusale24mo17 = null, $comparison = null)
    {
        if (is_array($arcusale24mo17)) {
            $useMinMax = false;
            if (isset($arcusale24mo17['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO17, $arcusale24mo17['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo17['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO17, $arcusale24mo17['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO17, $arcusale24mo17, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo17 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo17(1234); // WHERE ArcuInv24mo17 = 1234
     * $query->filterByArcuinv24mo17(array(12, 34)); // WHERE ArcuInv24mo17 IN (12, 34)
     * $query->filterByArcuinv24mo17(array('min' => 12)); // WHERE ArcuInv24mo17 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo17 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo17($arcuinv24mo17 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo17)) {
            $useMinMax = false;
            if (isset($arcuinv24mo17['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO17, $arcuinv24mo17['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo17['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO17, $arcuinv24mo17['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO17, $arcuinv24mo17, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo18 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo18(1234); // WHERE ArcuSale24mo18 = 1234
     * $query->filterByArcusale24mo18(array(12, 34)); // WHERE ArcuSale24mo18 IN (12, 34)
     * $query->filterByArcusale24mo18(array('min' => 12)); // WHERE ArcuSale24mo18 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo18 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo18($arcusale24mo18 = null, $comparison = null)
    {
        if (is_array($arcusale24mo18)) {
            $useMinMax = false;
            if (isset($arcusale24mo18['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO18, $arcusale24mo18['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo18['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO18, $arcusale24mo18['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO18, $arcusale24mo18, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo18 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo18(1234); // WHERE ArcuInv24mo18 = 1234
     * $query->filterByArcuinv24mo18(array(12, 34)); // WHERE ArcuInv24mo18 IN (12, 34)
     * $query->filterByArcuinv24mo18(array('min' => 12)); // WHERE ArcuInv24mo18 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo18 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo18($arcuinv24mo18 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo18)) {
            $useMinMax = false;
            if (isset($arcuinv24mo18['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO18, $arcuinv24mo18['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo18['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO18, $arcuinv24mo18['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO18, $arcuinv24mo18, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo19 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo19(1234); // WHERE ArcuSale24mo19 = 1234
     * $query->filterByArcusale24mo19(array(12, 34)); // WHERE ArcuSale24mo19 IN (12, 34)
     * $query->filterByArcusale24mo19(array('min' => 12)); // WHERE ArcuSale24mo19 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo19 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo19($arcusale24mo19 = null, $comparison = null)
    {
        if (is_array($arcusale24mo19)) {
            $useMinMax = false;
            if (isset($arcusale24mo19['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO19, $arcusale24mo19['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo19['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO19, $arcusale24mo19['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO19, $arcusale24mo19, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo19 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo19(1234); // WHERE ArcuInv24mo19 = 1234
     * $query->filterByArcuinv24mo19(array(12, 34)); // WHERE ArcuInv24mo19 IN (12, 34)
     * $query->filterByArcuinv24mo19(array('min' => 12)); // WHERE ArcuInv24mo19 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo19 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo19($arcuinv24mo19 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo19)) {
            $useMinMax = false;
            if (isset($arcuinv24mo19['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO19, $arcuinv24mo19['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo19['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO19, $arcuinv24mo19['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO19, $arcuinv24mo19, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo20 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo20(1234); // WHERE ArcuSale24mo20 = 1234
     * $query->filterByArcusale24mo20(array(12, 34)); // WHERE ArcuSale24mo20 IN (12, 34)
     * $query->filterByArcusale24mo20(array('min' => 12)); // WHERE ArcuSale24mo20 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo20 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo20($arcusale24mo20 = null, $comparison = null)
    {
        if (is_array($arcusale24mo20)) {
            $useMinMax = false;
            if (isset($arcusale24mo20['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO20, $arcusale24mo20['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo20['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO20, $arcusale24mo20['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO20, $arcusale24mo20, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo20 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo20(1234); // WHERE ArcuInv24mo20 = 1234
     * $query->filterByArcuinv24mo20(array(12, 34)); // WHERE ArcuInv24mo20 IN (12, 34)
     * $query->filterByArcuinv24mo20(array('min' => 12)); // WHERE ArcuInv24mo20 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo20 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo20($arcuinv24mo20 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo20)) {
            $useMinMax = false;
            if (isset($arcuinv24mo20['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO20, $arcuinv24mo20['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo20['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO20, $arcuinv24mo20['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO20, $arcuinv24mo20, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo21 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo21(1234); // WHERE ArcuSale24mo21 = 1234
     * $query->filterByArcusale24mo21(array(12, 34)); // WHERE ArcuSale24mo21 IN (12, 34)
     * $query->filterByArcusale24mo21(array('min' => 12)); // WHERE ArcuSale24mo21 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo21 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo21($arcusale24mo21 = null, $comparison = null)
    {
        if (is_array($arcusale24mo21)) {
            $useMinMax = false;
            if (isset($arcusale24mo21['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO21, $arcusale24mo21['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo21['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO21, $arcusale24mo21['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO21, $arcusale24mo21, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo21 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo21(1234); // WHERE ArcuInv24mo21 = 1234
     * $query->filterByArcuinv24mo21(array(12, 34)); // WHERE ArcuInv24mo21 IN (12, 34)
     * $query->filterByArcuinv24mo21(array('min' => 12)); // WHERE ArcuInv24mo21 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo21 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo21($arcuinv24mo21 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo21)) {
            $useMinMax = false;
            if (isset($arcuinv24mo21['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO21, $arcuinv24mo21['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo21['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO21, $arcuinv24mo21['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO21, $arcuinv24mo21, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo22 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo22(1234); // WHERE ArcuSale24mo22 = 1234
     * $query->filterByArcusale24mo22(array(12, 34)); // WHERE ArcuSale24mo22 IN (12, 34)
     * $query->filterByArcusale24mo22(array('min' => 12)); // WHERE ArcuSale24mo22 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo22 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo22($arcusale24mo22 = null, $comparison = null)
    {
        if (is_array($arcusale24mo22)) {
            $useMinMax = false;
            if (isset($arcusale24mo22['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO22, $arcusale24mo22['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo22['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO22, $arcusale24mo22['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO22, $arcusale24mo22, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo22 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo22(1234); // WHERE ArcuInv24mo22 = 1234
     * $query->filterByArcuinv24mo22(array(12, 34)); // WHERE ArcuInv24mo22 IN (12, 34)
     * $query->filterByArcuinv24mo22(array('min' => 12)); // WHERE ArcuInv24mo22 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo22 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo22($arcuinv24mo22 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo22)) {
            $useMinMax = false;
            if (isset($arcuinv24mo22['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO22, $arcuinv24mo22['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo22['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO22, $arcuinv24mo22['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO22, $arcuinv24mo22, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo23 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo23(1234); // WHERE ArcuSale24mo23 = 1234
     * $query->filterByArcusale24mo23(array(12, 34)); // WHERE ArcuSale24mo23 IN (12, 34)
     * $query->filterByArcusale24mo23(array('min' => 12)); // WHERE ArcuSale24mo23 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo23 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo23($arcusale24mo23 = null, $comparison = null)
    {
        if (is_array($arcusale24mo23)) {
            $useMinMax = false;
            if (isset($arcusale24mo23['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO23, $arcusale24mo23['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo23['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO23, $arcusale24mo23['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO23, $arcusale24mo23, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo23 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo23(1234); // WHERE ArcuInv24mo23 = 1234
     * $query->filterByArcuinv24mo23(array(12, 34)); // WHERE ArcuInv24mo23 IN (12, 34)
     * $query->filterByArcuinv24mo23(array('min' => 12)); // WHERE ArcuInv24mo23 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo23 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo23($arcuinv24mo23 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo23)) {
            $useMinMax = false;
            if (isset($arcuinv24mo23['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO23, $arcuinv24mo23['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo23['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO23, $arcuinv24mo23['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO23, $arcuinv24mo23, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo24 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo24(1234); // WHERE ArcuSale24mo24 = 1234
     * $query->filterByArcusale24mo24(array(12, 34)); // WHERE ArcuSale24mo24 IN (12, 34)
     * $query->filterByArcusale24mo24(array('min' => 12)); // WHERE ArcuSale24mo24 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo24 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo24($arcusale24mo24 = null, $comparison = null)
    {
        if (is_array($arcusale24mo24)) {
            $useMinMax = false;
            if (isset($arcusale24mo24['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO24, $arcusale24mo24['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo24['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO24, $arcusale24mo24['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSALE24MO24, $arcusale24mo24, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo24 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo24(1234); // WHERE ArcuInv24mo24 = 1234
     * $query->filterByArcuinv24mo24(array(12, 34)); // WHERE ArcuInv24mo24 IN (12, 34)
     * $query->filterByArcuinv24mo24(array('min' => 12)); // WHERE ArcuInv24mo24 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo24 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo24($arcuinv24mo24 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo24)) {
            $useMinMax = false;
            if (isset($arcuinv24mo24['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO24, $arcuinv24mo24['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo24['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO24, $arcuinv24mo24['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUINV24MO24, $arcuinv24mo24, $comparison);
    }

    /**
     * Filter the query on the ArcuLastPayAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByArculastpayamt(1234); // WHERE ArcuLastPayAmt = 1234
     * $query->filterByArculastpayamt(array(12, 34)); // WHERE ArcuLastPayAmt IN (12, 34)
     * $query->filterByArculastpayamt(array('min' => 12)); // WHERE ArcuLastPayAmt > 12
     * </code>
     *
     * @param     mixed $arculastpayamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArculastpayamt($arculastpayamt = null, $comparison = null)
    {
        if (is_array($arculastpayamt)) {
            $useMinMax = false;
            if (isset($arculastpayamt['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCULASTPAYAMT, $arculastpayamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arculastpayamt['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCULASTPAYAMT, $arculastpayamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCULASTPAYAMT, $arculastpayamt, $comparison);
    }

    /**
     * Filter the query on the ArcuOrdrTot column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuordrtot(1234); // WHERE ArcuOrdrTot = 1234
     * $query->filterByArcuordrtot(array(12, 34)); // WHERE ArcuOrdrTot IN (12, 34)
     * $query->filterByArcuordrtot(array('min' => 12)); // WHERE ArcuOrdrTot > 12
     * </code>
     *
     * @param     mixed $arcuordrtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuordrtot($arcuordrtot = null, $comparison = null)
    {
        if (is_array($arcuordrtot)) {
            $useMinMax = false;
            if (isset($arcuordrtot['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUORDRTOT, $arcuordrtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuordrtot['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUORDRTOT, $arcuordrtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUORDRTOT, $arcuordrtot, $comparison);
    }

    /**
     * Filter the query on the ArcuUseFrtIn column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuusefrtin('fooValue');   // WHERE ArcuUseFrtIn = 'fooValue'
     * $query->filterByArcuusefrtin('%fooValue%', Criteria::LIKE); // WHERE ArcuUseFrtIn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuusefrtin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuusefrtin($arcuusefrtin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuusefrtin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUUSEFRTIN, $arcuusefrtin, $comparison);
    }

    /**
     * Filter the query on the ArcuMyVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcumyvendid('fooValue');   // WHERE ArcuMyVendId = 'fooValue'
     * $query->filterByArcumyvendid('%fooValue%', Criteria::LIKE); // WHERE ArcuMyVendId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcumyvendid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcumyvendid($arcumyvendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcumyvendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUMYVENDID, $arcumyvendid, $comparison);
    }

    /**
     * Filter the query on the ArcuAddlPricDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuaddlpricdisc(1234); // WHERE ArcuAddlPricDisc = 1234
     * $query->filterByArcuaddlpricdisc(array(12, 34)); // WHERE ArcuAddlPricDisc IN (12, 34)
     * $query->filterByArcuaddlpricdisc(array('min' => 12)); // WHERE ArcuAddlPricDisc > 12
     * </code>
     *
     * @param     mixed $arcuaddlpricdisc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuaddlpricdisc($arcuaddlpricdisc = null, $comparison = null)
    {
        if (is_array($arcuaddlpricdisc)) {
            $useMinMax = false;
            if (isset($arcuaddlpricdisc['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUADDLPRICDISC, $arcuaddlpricdisc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuaddlpricdisc['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUADDLPRICDISC, $arcuaddlpricdisc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUADDLPRICDISC, $arcuaddlpricdisc, $comparison);
    }

    /**
     * Filter the query on the ArcuChrgFrt column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuchrgfrt('fooValue');   // WHERE ArcuChrgFrt = 'fooValue'
     * $query->filterByArcuchrgfrt('%fooValue%', Criteria::LIKE); // WHERE ArcuChrgFrt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuchrgfrt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuchrgfrt($arcuchrgfrt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuchrgfrt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCHRGFRT, $arcuchrgfrt, $comparison);
    }

    /**
     * Filter the query on the ArcuCoreXDays column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucorexdays(1234); // WHERE ArcuCoreXDays = 1234
     * $query->filterByArcucorexdays(array(12, 34)); // WHERE ArcuCoreXDays IN (12, 34)
     * $query->filterByArcucorexdays(array('min' => 12)); // WHERE ArcuCoreXDays > 12
     * </code>
     *
     * @param     mixed $arcucorexdays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcucorexdays($arcucorexdays = null, $comparison = null)
    {
        if (is_array($arcucorexdays)) {
            $useMinMax = false;
            if (isset($arcucorexdays['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCOREXDAYS, $arcucorexdays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcucorexdays['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCOREXDAYS, $arcucorexdays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCOREXDAYS, $arcucorexdays, $comparison);
    }

    /**
     * Filter the query on the ArcuContractNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucontractnbr('fooValue');   // WHERE ArcuContractNbr = 'fooValue'
     * $query->filterByArcucontractnbr('%fooValue%', Criteria::LIKE); // WHERE ArcuContractNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucontractnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcucontractnbr($arcucontractnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucontractnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCONTRACTNBR, $arcucontractnbr, $comparison);
    }

    /**
     * Filter the query on the ArcuCoreLF column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucorelf('fooValue');   // WHERE ArcuCoreLF = 'fooValue'
     * $query->filterByArcucorelf('%fooValue%', Criteria::LIKE); // WHERE ArcuCoreLF LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucorelf The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcucorelf($arcucorelf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucorelf)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCORELF, $arcucorelf, $comparison);
    }

    /**
     * Filter the query on the ArcuCoreBankId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucorebankid('fooValue');   // WHERE ArcuCoreBankId = 'fooValue'
     * $query->filterByArcucorebankid('%fooValue%', Criteria::LIKE); // WHERE ArcuCoreBankId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucorebankid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcucorebankid($arcucorebankid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucorebankid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCOREBANKID, $arcucorebankid, $comparison);
    }

    /**
     * Filter the query on the ArcuDunsNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArcudunsnbr('fooValue');   // WHERE ArcuDunsNbr = 'fooValue'
     * $query->filterByArcudunsnbr('%fooValue%', Criteria::LIKE); // WHERE ArcuDunsNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcudunsnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcudunsnbr($arcudunsnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcudunsnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUDUNSNBR, $arcudunsnbr, $comparison);
    }

    /**
     * Filter the query on the ArcuRfmlValu column
     *
     * Example usage:
     * <code>
     * $query->filterByArcurfmlvalu(1234); // WHERE ArcuRfmlValu = 1234
     * $query->filterByArcurfmlvalu(array(12, 34)); // WHERE ArcuRfmlValu IN (12, 34)
     * $query->filterByArcurfmlvalu(array('min' => 12)); // WHERE ArcuRfmlValu > 12
     * </code>
     *
     * @param     mixed $arcurfmlvalu The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcurfmlvalu($arcurfmlvalu = null, $comparison = null)
    {
        if (is_array($arcurfmlvalu)) {
            $useMinMax = false;
            if (isset($arcurfmlvalu['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCURFMLVALU, $arcurfmlvalu['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcurfmlvalu['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCURFMLVALU, $arcurfmlvalu['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCURFMLVALU, $arcurfmlvalu, $comparison);
    }

    /**
     * Filter the query on the ArcuForceCustPo column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuforcecustpo('fooValue');   // WHERE ArcuForceCustPo = 'fooValue'
     * $query->filterByArcuforcecustpo('%fooValue%', Criteria::LIKE); // WHERE ArcuForceCustPo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuforcecustpo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuforcecustpo($arcuforcecustpo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuforcecustpo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUFORCECUSTPO, $arcuforcecustpo, $comparison);
    }

    /**
     * Filter the query on the ArcuAgeLevel column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuagelevel(1234); // WHERE ArcuAgeLevel = 1234
     * $query->filterByArcuagelevel(array(12, 34)); // WHERE ArcuAgeLevel IN (12, 34)
     * $query->filterByArcuagelevel(array('min' => 12)); // WHERE ArcuAgeLevel > 12
     * </code>
     *
     * @param     mixed $arcuagelevel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuagelevel($arcuagelevel = null, $comparison = null)
    {
        if (is_array($arcuagelevel)) {
            $useMinMax = false;
            if (isset($arcuagelevel['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUAGELEVEL, $arcuagelevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuagelevel['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUAGELEVEL, $arcuagelevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUAGELEVEL, $arcuagelevel, $comparison);
    }

    /**
     * Filter the query on the ArtbRoute column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbroute('fooValue');   // WHERE ArtbRoute = 'fooValue'
     * $query->filterByArtbroute('%fooValue%', Criteria::LIKE); // WHERE ArtbRoute LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbroute The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArtbroute($artbroute = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbroute)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARTBROUTE, $artbroute, $comparison);
    }

    /**
     * Filter the query on the ArcuWgTaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuwgtaxcode('fooValue');   // WHERE ArcuWgTaxCode = 'fooValue'
     * $query->filterByArcuwgtaxcode('%fooValue%', Criteria::LIKE); // WHERE ArcuWgTaxCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuwgtaxcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuwgtaxcode($arcuwgtaxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuwgtaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUWGTAXCODE, $arcuwgtaxcode, $comparison);
    }

    /**
     * Filter the query on the ArcuAcptSupercede column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuacptsupercede('fooValue');   // WHERE ArcuAcptSupercede = 'fooValue'
     * $query->filterByArcuacptsupercede('%fooValue%', Criteria::LIKE); // WHERE ArcuAcptSupercede LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuacptsupercede The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuacptsupercede($arcuacptsupercede = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuacptsupercede)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUACPTSUPERCEDE, $arcuacptsupercede, $comparison);
    }

    /**
     * Filter the query on the ArcuMstrCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcumstrcustid('fooValue');   // WHERE ArcuMstrCustId = 'fooValue'
     * $query->filterByArcumstrcustid('%fooValue%', Criteria::LIKE); // WHERE ArcuMstrCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcumstrcustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcumstrcustid($arcumstrcustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcumstrcustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUMSTRCUSTID, $arcumstrcustid, $comparison);
    }

    /**
     * Filter the query on the ArcuSurchgPct column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusurchgpct(1234); // WHERE ArcuSurchgPct = 1234
     * $query->filterByArcusurchgpct(array(12, 34)); // WHERE ArcuSurchgPct IN (12, 34)
     * $query->filterByArcusurchgpct(array('min' => 12)); // WHERE ArcuSurchgPct > 12
     * </code>
     *
     * @param     mixed $arcusurchgpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcusurchgpct($arcusurchgpct = null, $comparison = null)
    {
        if (is_array($arcusurchgpct)) {
            $useMinMax = false;
            if (isset($arcusurchgpct['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSURCHGPCT, $arcusurchgpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusurchgpct['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSURCHGPCT, $arcusurchgpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUSURCHGPCT, $arcusurchgpct, $comparison);
    }

    /**
     * Filter the query on the ArcuFrgtSplit column
     *
     * Example usage:
     * <code>
     * $query->filterByArcufrgtsplit('fooValue');   // WHERE ArcuFrgtSplit = 'fooValue'
     * $query->filterByArcufrgtsplit('%fooValue%', Criteria::LIKE); // WHERE ArcuFrgtSplit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcufrgtsplit The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcufrgtsplit($arcufrgtsplit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcufrgtsplit)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUFRGTSPLIT, $arcufrgtsplit, $comparison);
    }

    /**
     * Filter the query on the ArcuLineMin column
     *
     * Example usage:
     * <code>
     * $query->filterByArculinemin(1234); // WHERE ArcuLineMin = 1234
     * $query->filterByArculinemin(array(12, 34)); // WHERE ArcuLineMin IN (12, 34)
     * $query->filterByArculinemin(array('min' => 12)); // WHERE ArcuLineMin > 12
     * </code>
     *
     * @param     mixed $arculinemin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArculinemin($arculinemin = null, $comparison = null)
    {
        if (is_array($arculinemin)) {
            $useMinMax = false;
            if (isset($arculinemin['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCULINEMIN, $arculinemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arculinemin['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCULINEMIN, $arculinemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCULINEMIN, $arculinemin, $comparison);
    }

    /**
     * Filter the query on the ArcuOrdrMin column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuordrmin(1234); // WHERE ArcuOrdrMin = 1234
     * $query->filterByArcuordrmin(array(12, 34)); // WHERE ArcuOrdrMin IN (12, 34)
     * $query->filterByArcuordrmin(array('min' => 12)); // WHERE ArcuOrdrMin > 12
     * </code>
     *
     * @param     mixed $arcuordrmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByArcuordrmin($arcuordrmin = null, $comparison = null)
    {
        if (is_array($arcuordrmin)) {
            $useMinMax = false;
            if (isset($arcuordrmin['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUORDRMIN, $arcuordrmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuordrmin['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_ARCUORDRMIN, $arcuordrmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_ARCUORDRMIN, $arcuordrmin, $comparison);
    }

    /**
     * Filter the query on the DateUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByDateupdtd(1234); // WHERE DateUpdtd = 1234
     * $query->filterByDateupdtd(array(12, 34)); // WHERE DateUpdtd IN (12, 34)
     * $query->filterByDateupdtd(array('min' => 12)); // WHERE DateUpdtd > 12
     * </code>
     *
     * @param     mixed $dateupdtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (is_array($dateupdtd)) {
            $useMinMax = false;
            if (isset($dateupdtd['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_DATEUPDTD, $dateupdtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateupdtd['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_DATEUPDTD, $dateupdtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
    }

    /**
     * Filter the query on the TimeUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeupdtd(1234); // WHERE TimeUpdtd = 1234
     * $query->filterByTimeupdtd(array(12, 34)); // WHERE TimeUpdtd IN (12, 34)
     * $query->filterByTimeupdtd(array('min' => 12)); // WHERE TimeUpdtd > 12
     * </code>
     *
     * @param     mixed $timeupdtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (is_array($timeupdtd)) {
            $useMinMax = false;
            if (isset($timeupdtd['min'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_TIMEUPDTD, $timeupdtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timeupdtd['max'])) {
                $this->addUsingAlias(ArCustMastTableMap::COL_TIMEUPDTD, $timeupdtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
    }

    /**
     * Filter the query on the dummy column
     *
     * Example usage:
     * <code>
     * $query->filterByDummy('fooValue');   // WHERE dummy = 'fooValue'
     * $query->filterByDummy('%fooValue%', Criteria::LIKE); // WHERE dummy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dummy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCustMastTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildArCustMast $arCustMast Object to remove from the list of results
     *
     * @return $this|ChildArCustMastQuery The current query, for fluid interface
     */
    public function prune($arCustMast = null)
    {
        if ($arCustMast) {
            $this->addUsingAlias(ArCustMastTableMap::COL_ARCUCUSTID, $arCustMast->getArcucustid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the AR_CUST_MAST table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArCustMastTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArCustMastTableMap::clearInstancePool();
            ArCustMastTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArCustMastTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArCustMastTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArCustMastTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArCustMastTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ArCustMastQuery
