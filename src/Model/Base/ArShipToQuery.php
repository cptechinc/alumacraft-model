<?php

namespace Base;

use \ArShipTo as ChildArShipTo;
use \ArShipToQuery as ChildArShipToQuery;
use \Exception;
use \PDO;
use Map\ArShipToTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'AR_SHIP_TO' table.
 *
 *
 *
 * @method     ChildArShipToQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildArShipToQuery orderByArstshipid($order = Criteria::ASC) Order by the ArstShipId column
 * @method     ChildArShipToQuery orderByArstname($order = Criteria::ASC) Order by the ArstName column
 * @method     ChildArShipToQuery orderByArstadr1($order = Criteria::ASC) Order by the ArstAdr1 column
 * @method     ChildArShipToQuery orderByArstadr2($order = Criteria::ASC) Order by the ArstAdr2 column
 * @method     ChildArShipToQuery orderByArstadr3($order = Criteria::ASC) Order by the ArstAdr3 column
 * @method     ChildArShipToQuery orderByArstadr4($order = Criteria::ASC) Order by the ArstAdr4 column
 * @method     ChildArShipToQuery orderByArstctry($order = Criteria::ASC) Order by the ArstCtry column
 * @method     ChildArShipToQuery orderByArstadr5($order = Criteria::ASC) Order by the ArstAdr5 column
 * @method     ChildArShipToQuery orderByArstcity($order = Criteria::ASC) Order by the ArstCity column
 * @method     ChildArShipToQuery orderByArststat($order = Criteria::ASC) Order by the ArstStat column
 * @method     ChildArShipToQuery orderByArstzipcode($order = Criteria::ASC) Order by the ArstZipCode column
 * @method     ChildArShipToQuery orderByArstcont1($order = Criteria::ASC) Order by the ArstCont1 column
 * @method     ChildArShipToQuery orderByArstcont2($order = Criteria::ASC) Order by the ArstCont2 column
 * @method     ChildArShipToQuery orderByArspsaleper1($order = Criteria::ASC) Order by the Arspsaleper1 column
 * @method     ChildArShipToQuery orderByArspsaleper2($order = Criteria::ASC) Order by the Arspsaleper2 column
 * @method     ChildArShipToQuery orderByArspsaleper3($order = Criteria::ASC) Order by the Arspsaleper3 column
 * @method     ChildArShipToQuery orderByArtbmtaxcode($order = Criteria::ASC) Order by the ArtbMtaxCode column
 * @method     ChildArShipToQuery orderByArsttaxexemnbr($order = Criteria::ASC) Order by the ArstTaxExemNbr column
 * @method     ChildArShipToQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildArShipToQuery orderByArtbshipvia($order = Criteria::ASC) Order by the ArtbShipVia column
 * @method     ChildArShipToQuery orderByArstbord($order = Criteria::ASC) Order by the ArstBord column
 * @method     ChildArShipToQuery orderByArstcredhold($order = Criteria::ASC) Order by the ArstCredHold column
 * @method     ChildArShipToQuery orderByArstusercode($order = Criteria::ASC) Order by the ArstUserCode column
 * @method     ChildArShipToQuery orderByArstpriclvl($order = Criteria::ASC) Order by the ArstPricLvl column
 * @method     ChildArShipToQuery orderByArstshipcomp($order = Criteria::ASC) Order by the ArstShipComp column
 * @method     ChildArShipToQuery orderByArsttxbl($order = Criteria::ASC) Order by the ArstTxbl column
 * @method     ChildArShipToQuery orderByArstpostal($order = Criteria::ASC) Order by the ArstPostal column
 * @method     ChildArShipToQuery orderByArstsalemtd($order = Criteria::ASC) Order by the ArstSaleMtd column
 * @method     ChildArShipToQuery orderByArstinvmtd($order = Criteria::ASC) Order by the ArstInvMtd column
 * @method     ChildArShipToQuery orderByArstdateopen($order = Criteria::ASC) Order by the ArstDateOpen column
 * @method     ChildArShipToQuery orderByArstlastsaledate($order = Criteria::ASC) Order by the ArstLastSaleDate column
 * @method     ChildArShipToQuery orderByArstprimshipid($order = Criteria::ASC) Order by the ArstPrimShipId column
 * @method     ChildArShipToQuery orderByArstmyvendid($order = Criteria::ASC) Order by the ArstMyVendId column
 * @method     ChildArShipToQuery orderByArstaddlpricdisc($order = Criteria::ASC) Order by the ArstAddlPricDisc column
 * @method     ChildArShipToQuery orderByArstediinvc($order = Criteria::ASC) Order by the ArstEdiInvc column
 * @method     ChildArShipToQuery orderByArstchrgfrt($order = Criteria::ASC) Order by the ArstChrgFrt column
 * @method     ChildArShipToQuery orderByArstdistcntr($order = Criteria::ASC) Order by the ArstDistCntr column
 * @method     ChildArShipToQuery orderByArstdunsnbr($order = Criteria::ASC) Order by the ArstDunsNbr column
 * @method     ChildArShipToQuery orderByArstrfmlvalu($order = Criteria::ASC) Order by the ArstRfmlValu column
 * @method     ChildArShipToQuery orderByArstforcepo($order = Criteria::ASC) Order by the ArstForcePo column
 * @method     ChildArShipToQuery orderByArtbroutcode($order = Criteria::ASC) Order by the ArtbRoutCode column
 * @method     ChildArShipToQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArShipToQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArShipToQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArShipToQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildArShipToQuery groupByArstshipid() Group by the ArstShipId column
 * @method     ChildArShipToQuery groupByArstname() Group by the ArstName column
 * @method     ChildArShipToQuery groupByArstadr1() Group by the ArstAdr1 column
 * @method     ChildArShipToQuery groupByArstadr2() Group by the ArstAdr2 column
 * @method     ChildArShipToQuery groupByArstadr3() Group by the ArstAdr3 column
 * @method     ChildArShipToQuery groupByArstadr4() Group by the ArstAdr4 column
 * @method     ChildArShipToQuery groupByArstctry() Group by the ArstCtry column
 * @method     ChildArShipToQuery groupByArstadr5() Group by the ArstAdr5 column
 * @method     ChildArShipToQuery groupByArstcity() Group by the ArstCity column
 * @method     ChildArShipToQuery groupByArststat() Group by the ArstStat column
 * @method     ChildArShipToQuery groupByArstzipcode() Group by the ArstZipCode column
 * @method     ChildArShipToQuery groupByArstcont1() Group by the ArstCont1 column
 * @method     ChildArShipToQuery groupByArstcont2() Group by the ArstCont2 column
 * @method     ChildArShipToQuery groupByArspsaleper1() Group by the Arspsaleper1 column
 * @method     ChildArShipToQuery groupByArspsaleper2() Group by the Arspsaleper2 column
 * @method     ChildArShipToQuery groupByArspsaleper3() Group by the Arspsaleper3 column
 * @method     ChildArShipToQuery groupByArtbmtaxcode() Group by the ArtbMtaxCode column
 * @method     ChildArShipToQuery groupByArsttaxexemnbr() Group by the ArstTaxExemNbr column
 * @method     ChildArShipToQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildArShipToQuery groupByArtbshipvia() Group by the ArtbShipVia column
 * @method     ChildArShipToQuery groupByArstbord() Group by the ArstBord column
 * @method     ChildArShipToQuery groupByArstcredhold() Group by the ArstCredHold column
 * @method     ChildArShipToQuery groupByArstusercode() Group by the ArstUserCode column
 * @method     ChildArShipToQuery groupByArstpriclvl() Group by the ArstPricLvl column
 * @method     ChildArShipToQuery groupByArstshipcomp() Group by the ArstShipComp column
 * @method     ChildArShipToQuery groupByArsttxbl() Group by the ArstTxbl column
 * @method     ChildArShipToQuery groupByArstpostal() Group by the ArstPostal column
 * @method     ChildArShipToQuery groupByArstsalemtd() Group by the ArstSaleMtd column
 * @method     ChildArShipToQuery groupByArstinvmtd() Group by the ArstInvMtd column
 * @method     ChildArShipToQuery groupByArstdateopen() Group by the ArstDateOpen column
 * @method     ChildArShipToQuery groupByArstlastsaledate() Group by the ArstLastSaleDate column
 * @method     ChildArShipToQuery groupByArstprimshipid() Group by the ArstPrimShipId column
 * @method     ChildArShipToQuery groupByArstmyvendid() Group by the ArstMyVendId column
 * @method     ChildArShipToQuery groupByArstaddlpricdisc() Group by the ArstAddlPricDisc column
 * @method     ChildArShipToQuery groupByArstediinvc() Group by the ArstEdiInvc column
 * @method     ChildArShipToQuery groupByArstchrgfrt() Group by the ArstChrgFrt column
 * @method     ChildArShipToQuery groupByArstdistcntr() Group by the ArstDistCntr column
 * @method     ChildArShipToQuery groupByArstdunsnbr() Group by the ArstDunsNbr column
 * @method     ChildArShipToQuery groupByArstrfmlvalu() Group by the ArstRfmlValu column
 * @method     ChildArShipToQuery groupByArstforcepo() Group by the ArstForcePo column
 * @method     ChildArShipToQuery groupByArtbroutcode() Group by the ArtbRoutCode column
 * @method     ChildArShipToQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArShipToQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArShipToQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArShipToQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArShipToQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArShipToQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArShipToQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArShipToQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArShipToQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArShipTo findOne(ConnectionInterface $con = null) Return the first ChildArShipTo matching the query
 * @method     ChildArShipTo findOneOrCreate(ConnectionInterface $con = null) Return the first ChildArShipTo matching the query, or a new ChildArShipTo object populated from the query conditions when no match is found
 *
 * @method     ChildArShipTo findOneByArcucustid(string $ArcuCustId) Return the first ChildArShipTo filtered by the ArcuCustId column
 * @method     ChildArShipTo findOneByArstshipid(string $ArstShipId) Return the first ChildArShipTo filtered by the ArstShipId column
 * @method     ChildArShipTo findOneByArstname(string $ArstName) Return the first ChildArShipTo filtered by the ArstName column
 * @method     ChildArShipTo findOneByArstadr1(string $ArstAdr1) Return the first ChildArShipTo filtered by the ArstAdr1 column
 * @method     ChildArShipTo findOneByArstadr2(string $ArstAdr2) Return the first ChildArShipTo filtered by the ArstAdr2 column
 * @method     ChildArShipTo findOneByArstadr3(string $ArstAdr3) Return the first ChildArShipTo filtered by the ArstAdr3 column
 * @method     ChildArShipTo findOneByArstadr4(string $ArstAdr4) Return the first ChildArShipTo filtered by the ArstAdr4 column
 * @method     ChildArShipTo findOneByArstctry(string $ArstCtry) Return the first ChildArShipTo filtered by the ArstCtry column
 * @method     ChildArShipTo findOneByArstadr5(string $ArstAdr5) Return the first ChildArShipTo filtered by the ArstAdr5 column
 * @method     ChildArShipTo findOneByArstcity(string $ArstCity) Return the first ChildArShipTo filtered by the ArstCity column
 * @method     ChildArShipTo findOneByArststat(string $ArstStat) Return the first ChildArShipTo filtered by the ArstStat column
 * @method     ChildArShipTo findOneByArstzipcode(string $ArstZipCode) Return the first ChildArShipTo filtered by the ArstZipCode column
 * @method     ChildArShipTo findOneByArstcont1(string $ArstCont1) Return the first ChildArShipTo filtered by the ArstCont1 column
 * @method     ChildArShipTo findOneByArstcont2(string $ArstCont2) Return the first ChildArShipTo filtered by the ArstCont2 column
 * @method     ChildArShipTo findOneByArspsaleper1(string $Arspsaleper1) Return the first ChildArShipTo filtered by the Arspsaleper1 column
 * @method     ChildArShipTo findOneByArspsaleper2(string $Arspsaleper2) Return the first ChildArShipTo filtered by the Arspsaleper2 column
 * @method     ChildArShipTo findOneByArspsaleper3(string $Arspsaleper3) Return the first ChildArShipTo filtered by the Arspsaleper3 column
 * @method     ChildArShipTo findOneByArtbmtaxcode(string $ArtbMtaxCode) Return the first ChildArShipTo filtered by the ArtbMtaxCode column
 * @method     ChildArShipTo findOneByArsttaxexemnbr(string $ArstTaxExemNbr) Return the first ChildArShipTo filtered by the ArstTaxExemNbr column
 * @method     ChildArShipTo findOneByIntbwhse(string $IntbWhse) Return the first ChildArShipTo filtered by the IntbWhse column
 * @method     ChildArShipTo findOneByArtbshipvia(string $ArtbShipVia) Return the first ChildArShipTo filtered by the ArtbShipVia column
 * @method     ChildArShipTo findOneByArstbord(string $ArstBord) Return the first ChildArShipTo filtered by the ArstBord column
 * @method     ChildArShipTo findOneByArstcredhold(string $ArstCredHold) Return the first ChildArShipTo filtered by the ArstCredHold column
 * @method     ChildArShipTo findOneByArstusercode(string $ArstUserCode) Return the first ChildArShipTo filtered by the ArstUserCode column
 * @method     ChildArShipTo findOneByArstpriclvl(string $ArstPricLvl) Return the first ChildArShipTo filtered by the ArstPricLvl column
 * @method     ChildArShipTo findOneByArstshipcomp(string $ArstShipComp) Return the first ChildArShipTo filtered by the ArstShipComp column
 * @method     ChildArShipTo findOneByArsttxbl(string $ArstTxbl) Return the first ChildArShipTo filtered by the ArstTxbl column
 * @method     ChildArShipTo findOneByArstpostal(string $ArstPostal) Return the first ChildArShipTo filtered by the ArstPostal column
 * @method     ChildArShipTo findOneByArstsalemtd(string $ArstSaleMtd) Return the first ChildArShipTo filtered by the ArstSaleMtd column
 * @method     ChildArShipTo findOneByArstinvmtd(int $ArstInvMtd) Return the first ChildArShipTo filtered by the ArstInvMtd column
 * @method     ChildArShipTo findOneByArstdateopen(int $ArstDateOpen) Return the first ChildArShipTo filtered by the ArstDateOpen column
 * @method     ChildArShipTo findOneByArstlastsaledate(int $ArstLastSaleDate) Return the first ChildArShipTo filtered by the ArstLastSaleDate column
 * @method     ChildArShipTo findOneByArstprimshipid(string $ArstPrimShipId) Return the first ChildArShipTo filtered by the ArstPrimShipId column
 * @method     ChildArShipTo findOneByArstmyvendid(string $ArstMyVendId) Return the first ChildArShipTo filtered by the ArstMyVendId column
 * @method     ChildArShipTo findOneByArstaddlpricdisc(string $ArstAddlPricDisc) Return the first ChildArShipTo filtered by the ArstAddlPricDisc column
 * @method     ChildArShipTo findOneByArstediinvc(string $ArstEdiInvc) Return the first ChildArShipTo filtered by the ArstEdiInvc column
 * @method     ChildArShipTo findOneByArstchrgfrt(string $ArstChrgFrt) Return the first ChildArShipTo filtered by the ArstChrgFrt column
 * @method     ChildArShipTo findOneByArstdistcntr(string $ArstDistCntr) Return the first ChildArShipTo filtered by the ArstDistCntr column
 * @method     ChildArShipTo findOneByArstdunsnbr(string $ArstDunsNbr) Return the first ChildArShipTo filtered by the ArstDunsNbr column
 * @method     ChildArShipTo findOneByArstrfmlvalu(int $ArstRfmlValu) Return the first ChildArShipTo filtered by the ArstRfmlValu column
 * @method     ChildArShipTo findOneByArstforcepo(string $ArstForcePo) Return the first ChildArShipTo filtered by the ArstForcePo column
 * @method     ChildArShipTo findOneByArtbroutcode(string $ArtbRoutCode) Return the first ChildArShipTo filtered by the ArtbRoutCode column
 * @method     ChildArShipTo findOneByDateupdtd(int $DateUpdtd) Return the first ChildArShipTo filtered by the DateUpdtd column
 * @method     ChildArShipTo findOneByTimeupdtd(int $TimeUpdtd) Return the first ChildArShipTo filtered by the TimeUpdtd column
 * @method     ChildArShipTo findOneByDummy(string $dummy) Return the first ChildArShipTo filtered by the dummy column *

 * @method     ChildArShipTo requirePk($key, ConnectionInterface $con = null) Return the ChildArShipTo by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOne(ConnectionInterface $con = null) Return the first ChildArShipTo matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArShipTo requireOneByArcucustid(string $ArcuCustId) Return the first ChildArShipTo filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstshipid(string $ArstShipId) Return the first ChildArShipTo filtered by the ArstShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstname(string $ArstName) Return the first ChildArShipTo filtered by the ArstName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstadr1(string $ArstAdr1) Return the first ChildArShipTo filtered by the ArstAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstadr2(string $ArstAdr2) Return the first ChildArShipTo filtered by the ArstAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstadr3(string $ArstAdr3) Return the first ChildArShipTo filtered by the ArstAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstadr4(string $ArstAdr4) Return the first ChildArShipTo filtered by the ArstAdr4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstctry(string $ArstCtry) Return the first ChildArShipTo filtered by the ArstCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstadr5(string $ArstAdr5) Return the first ChildArShipTo filtered by the ArstAdr5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstcity(string $ArstCity) Return the first ChildArShipTo filtered by the ArstCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArststat(string $ArstStat) Return the first ChildArShipTo filtered by the ArstStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstzipcode(string $ArstZipCode) Return the first ChildArShipTo filtered by the ArstZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstcont1(string $ArstCont1) Return the first ChildArShipTo filtered by the ArstCont1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstcont2(string $ArstCont2) Return the first ChildArShipTo filtered by the ArstCont2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArspsaleper1(string $Arspsaleper1) Return the first ChildArShipTo filtered by the Arspsaleper1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArspsaleper2(string $Arspsaleper2) Return the first ChildArShipTo filtered by the Arspsaleper2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArspsaleper3(string $Arspsaleper3) Return the first ChildArShipTo filtered by the Arspsaleper3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArtbmtaxcode(string $ArtbMtaxCode) Return the first ChildArShipTo filtered by the ArtbMtaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArsttaxexemnbr(string $ArstTaxExemNbr) Return the first ChildArShipTo filtered by the ArstTaxExemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByIntbwhse(string $IntbWhse) Return the first ChildArShipTo filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArtbshipvia(string $ArtbShipVia) Return the first ChildArShipTo filtered by the ArtbShipVia column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstbord(string $ArstBord) Return the first ChildArShipTo filtered by the ArstBord column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstcredhold(string $ArstCredHold) Return the first ChildArShipTo filtered by the ArstCredHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstusercode(string $ArstUserCode) Return the first ChildArShipTo filtered by the ArstUserCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstpriclvl(string $ArstPricLvl) Return the first ChildArShipTo filtered by the ArstPricLvl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstshipcomp(string $ArstShipComp) Return the first ChildArShipTo filtered by the ArstShipComp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArsttxbl(string $ArstTxbl) Return the first ChildArShipTo filtered by the ArstTxbl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstpostal(string $ArstPostal) Return the first ChildArShipTo filtered by the ArstPostal column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstsalemtd(string $ArstSaleMtd) Return the first ChildArShipTo filtered by the ArstSaleMtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstinvmtd(int $ArstInvMtd) Return the first ChildArShipTo filtered by the ArstInvMtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstdateopen(int $ArstDateOpen) Return the first ChildArShipTo filtered by the ArstDateOpen column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstlastsaledate(int $ArstLastSaleDate) Return the first ChildArShipTo filtered by the ArstLastSaleDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstprimshipid(string $ArstPrimShipId) Return the first ChildArShipTo filtered by the ArstPrimShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstmyvendid(string $ArstMyVendId) Return the first ChildArShipTo filtered by the ArstMyVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstaddlpricdisc(string $ArstAddlPricDisc) Return the first ChildArShipTo filtered by the ArstAddlPricDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstediinvc(string $ArstEdiInvc) Return the first ChildArShipTo filtered by the ArstEdiInvc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstchrgfrt(string $ArstChrgFrt) Return the first ChildArShipTo filtered by the ArstChrgFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstdistcntr(string $ArstDistCntr) Return the first ChildArShipTo filtered by the ArstDistCntr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstdunsnbr(string $ArstDunsNbr) Return the first ChildArShipTo filtered by the ArstDunsNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstrfmlvalu(int $ArstRfmlValu) Return the first ChildArShipTo filtered by the ArstRfmlValu column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArstforcepo(string $ArstForcePo) Return the first ChildArShipTo filtered by the ArstForcePo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByArtbroutcode(string $ArtbRoutCode) Return the first ChildArShipTo filtered by the ArtbRoutCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByDateupdtd(int $DateUpdtd) Return the first ChildArShipTo filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByTimeupdtd(int $TimeUpdtd) Return the first ChildArShipTo filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShipTo requireOneByDummy(string $dummy) Return the first ChildArShipTo filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArShipTo[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildArShipTo objects based on current ModelCriteria
 * @method     ChildArShipTo[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildArShipTo objects filtered by the ArcuCustId column
 * @method     ChildArShipTo[]|ObjectCollection findByArstshipid(string $ArstShipId) Return ChildArShipTo objects filtered by the ArstShipId column
 * @method     ChildArShipTo[]|ObjectCollection findByArstname(string $ArstName) Return ChildArShipTo objects filtered by the ArstName column
 * @method     ChildArShipTo[]|ObjectCollection findByArstadr1(string $ArstAdr1) Return ChildArShipTo objects filtered by the ArstAdr1 column
 * @method     ChildArShipTo[]|ObjectCollection findByArstadr2(string $ArstAdr2) Return ChildArShipTo objects filtered by the ArstAdr2 column
 * @method     ChildArShipTo[]|ObjectCollection findByArstadr3(string $ArstAdr3) Return ChildArShipTo objects filtered by the ArstAdr3 column
 * @method     ChildArShipTo[]|ObjectCollection findByArstadr4(string $ArstAdr4) Return ChildArShipTo objects filtered by the ArstAdr4 column
 * @method     ChildArShipTo[]|ObjectCollection findByArstctry(string $ArstCtry) Return ChildArShipTo objects filtered by the ArstCtry column
 * @method     ChildArShipTo[]|ObjectCollection findByArstadr5(string $ArstAdr5) Return ChildArShipTo objects filtered by the ArstAdr5 column
 * @method     ChildArShipTo[]|ObjectCollection findByArstcity(string $ArstCity) Return ChildArShipTo objects filtered by the ArstCity column
 * @method     ChildArShipTo[]|ObjectCollection findByArststat(string $ArstStat) Return ChildArShipTo objects filtered by the ArstStat column
 * @method     ChildArShipTo[]|ObjectCollection findByArstzipcode(string $ArstZipCode) Return ChildArShipTo objects filtered by the ArstZipCode column
 * @method     ChildArShipTo[]|ObjectCollection findByArstcont1(string $ArstCont1) Return ChildArShipTo objects filtered by the ArstCont1 column
 * @method     ChildArShipTo[]|ObjectCollection findByArstcont2(string $ArstCont2) Return ChildArShipTo objects filtered by the ArstCont2 column
 * @method     ChildArShipTo[]|ObjectCollection findByArspsaleper1(string $Arspsaleper1) Return ChildArShipTo objects filtered by the Arspsaleper1 column
 * @method     ChildArShipTo[]|ObjectCollection findByArspsaleper2(string $Arspsaleper2) Return ChildArShipTo objects filtered by the Arspsaleper2 column
 * @method     ChildArShipTo[]|ObjectCollection findByArspsaleper3(string $Arspsaleper3) Return ChildArShipTo objects filtered by the Arspsaleper3 column
 * @method     ChildArShipTo[]|ObjectCollection findByArtbmtaxcode(string $ArtbMtaxCode) Return ChildArShipTo objects filtered by the ArtbMtaxCode column
 * @method     ChildArShipTo[]|ObjectCollection findByArsttaxexemnbr(string $ArstTaxExemNbr) Return ChildArShipTo objects filtered by the ArstTaxExemNbr column
 * @method     ChildArShipTo[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildArShipTo objects filtered by the IntbWhse column
 * @method     ChildArShipTo[]|ObjectCollection findByArtbshipvia(string $ArtbShipVia) Return ChildArShipTo objects filtered by the ArtbShipVia column
 * @method     ChildArShipTo[]|ObjectCollection findByArstbord(string $ArstBord) Return ChildArShipTo objects filtered by the ArstBord column
 * @method     ChildArShipTo[]|ObjectCollection findByArstcredhold(string $ArstCredHold) Return ChildArShipTo objects filtered by the ArstCredHold column
 * @method     ChildArShipTo[]|ObjectCollection findByArstusercode(string $ArstUserCode) Return ChildArShipTo objects filtered by the ArstUserCode column
 * @method     ChildArShipTo[]|ObjectCollection findByArstpriclvl(string $ArstPricLvl) Return ChildArShipTo objects filtered by the ArstPricLvl column
 * @method     ChildArShipTo[]|ObjectCollection findByArstshipcomp(string $ArstShipComp) Return ChildArShipTo objects filtered by the ArstShipComp column
 * @method     ChildArShipTo[]|ObjectCollection findByArsttxbl(string $ArstTxbl) Return ChildArShipTo objects filtered by the ArstTxbl column
 * @method     ChildArShipTo[]|ObjectCollection findByArstpostal(string $ArstPostal) Return ChildArShipTo objects filtered by the ArstPostal column
 * @method     ChildArShipTo[]|ObjectCollection findByArstsalemtd(string $ArstSaleMtd) Return ChildArShipTo objects filtered by the ArstSaleMtd column
 * @method     ChildArShipTo[]|ObjectCollection findByArstinvmtd(int $ArstInvMtd) Return ChildArShipTo objects filtered by the ArstInvMtd column
 * @method     ChildArShipTo[]|ObjectCollection findByArstdateopen(int $ArstDateOpen) Return ChildArShipTo objects filtered by the ArstDateOpen column
 * @method     ChildArShipTo[]|ObjectCollection findByArstlastsaledate(int $ArstLastSaleDate) Return ChildArShipTo objects filtered by the ArstLastSaleDate column
 * @method     ChildArShipTo[]|ObjectCollection findByArstprimshipid(string $ArstPrimShipId) Return ChildArShipTo objects filtered by the ArstPrimShipId column
 * @method     ChildArShipTo[]|ObjectCollection findByArstmyvendid(string $ArstMyVendId) Return ChildArShipTo objects filtered by the ArstMyVendId column
 * @method     ChildArShipTo[]|ObjectCollection findByArstaddlpricdisc(string $ArstAddlPricDisc) Return ChildArShipTo objects filtered by the ArstAddlPricDisc column
 * @method     ChildArShipTo[]|ObjectCollection findByArstediinvc(string $ArstEdiInvc) Return ChildArShipTo objects filtered by the ArstEdiInvc column
 * @method     ChildArShipTo[]|ObjectCollection findByArstchrgfrt(string $ArstChrgFrt) Return ChildArShipTo objects filtered by the ArstChrgFrt column
 * @method     ChildArShipTo[]|ObjectCollection findByArstdistcntr(string $ArstDistCntr) Return ChildArShipTo objects filtered by the ArstDistCntr column
 * @method     ChildArShipTo[]|ObjectCollection findByArstdunsnbr(string $ArstDunsNbr) Return ChildArShipTo objects filtered by the ArstDunsNbr column
 * @method     ChildArShipTo[]|ObjectCollection findByArstrfmlvalu(int $ArstRfmlValu) Return ChildArShipTo objects filtered by the ArstRfmlValu column
 * @method     ChildArShipTo[]|ObjectCollection findByArstforcepo(string $ArstForcePo) Return ChildArShipTo objects filtered by the ArstForcePo column
 * @method     ChildArShipTo[]|ObjectCollection findByArtbroutcode(string $ArtbRoutCode) Return ChildArShipTo objects filtered by the ArtbRoutCode column
 * @method     ChildArShipTo[]|ObjectCollection findByDateupdtd(int $DateUpdtd) Return ChildArShipTo objects filtered by the DateUpdtd column
 * @method     ChildArShipTo[]|ObjectCollection findByTimeupdtd(int $TimeUpdtd) Return ChildArShipTo objects filtered by the TimeUpdtd column
 * @method     ChildArShipTo[]|ObjectCollection findByDummy(string $dummy) Return ChildArShipTo objects filtered by the dummy column
 * @method     ChildArShipTo[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ArShipToQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArShipToQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArShipTo', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArShipToQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArShipToQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildArShipToQuery) {
            return $criteria;
        }
        $query = new ChildArShipToQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$ArcuCustId, $ArstShipId] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildArShipTo|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArShipToTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArShipToTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildArShipTo A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArcuCustId, ArstShipId, ArstName, ArstAdr1, ArstAdr2, ArstAdr3, ArstAdr4, ArstCtry, ArstAdr5, ArstCity, ArstStat, ArstZipCode, ArstCont1, ArstCont2, Arspsaleper1, Arspsaleper2, Arspsaleper3, ArtbMtaxCode, ArstTaxExemNbr, IntbWhse, ArtbShipVia, ArstBord, ArstCredHold, ArstUserCode, ArstPricLvl, ArstShipComp, ArstTxbl, ArstPostal, ArstSaleMtd, ArstInvMtd, ArstDateOpen, ArstLastSaleDate, ArstPrimShipId, ArstMyVendId, ArstAddlPricDisc, ArstEdiInvc, ArstChrgFrt, ArstDistCntr, ArstDunsNbr, ArstRfmlValu, ArstForcePo, ArtbRoutCode, DateUpdtd, TimeUpdtd, dummy FROM AR_SHIP_TO WHERE ArcuCustId = :p0 AND ArstShipId = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildArShipTo $obj */
            $obj = new ChildArShipTo();
            $obj->hydrate($row);
            ArShipToTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildArShipTo|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ArShipToTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ArShipToTableMap::COL_ARSTSHIPID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ArShipToTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ArShipToTableMap::COL_ARSTSHIPID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the ArstShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipid('fooValue');   // WHERE ArstShipId = 'fooValue'
     * $query->filterByArstshipid('%fooValue%', Criteria::LIKE); // WHERE ArstShipId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstshipid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);
    }

    /**
     * Filter the query on the ArstName column
     *
     * Example usage:
     * <code>
     * $query->filterByArstname('fooValue');   // WHERE ArstName = 'fooValue'
     * $query->filterByArstname('%fooValue%', Criteria::LIKE); // WHERE ArstName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstname($arstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTNAME, $arstname, $comparison);
    }

    /**
     * Filter the query on the ArstAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstadr1('fooValue');   // WHERE ArstAdr1 = 'fooValue'
     * $query->filterByArstadr1('%fooValue%', Criteria::LIKE); // WHERE ArstAdr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstadr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstadr1($arstadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTADR1, $arstadr1, $comparison);
    }

    /**
     * Filter the query on the ArstAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstadr2('fooValue');   // WHERE ArstAdr2 = 'fooValue'
     * $query->filterByArstadr2('%fooValue%', Criteria::LIKE); // WHERE ArstAdr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstadr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstadr2($arstadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTADR2, $arstadr2, $comparison);
    }

    /**
     * Filter the query on the ArstAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstadr3('fooValue');   // WHERE ArstAdr3 = 'fooValue'
     * $query->filterByArstadr3('%fooValue%', Criteria::LIKE); // WHERE ArstAdr3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstadr3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstadr3($arstadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTADR3, $arstadr3, $comparison);
    }

    /**
     * Filter the query on the ArstAdr4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstadr4('fooValue');   // WHERE ArstAdr4 = 'fooValue'
     * $query->filterByArstadr4('%fooValue%', Criteria::LIKE); // WHERE ArstAdr4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstadr4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstadr4($arstadr4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstadr4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTADR4, $arstadr4, $comparison);
    }

    /**
     * Filter the query on the ArstCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByArstctry('fooValue');   // WHERE ArstCtry = 'fooValue'
     * $query->filterByArstctry('%fooValue%', Criteria::LIKE); // WHERE ArstCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstctry($arstctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTCTRY, $arstctry, $comparison);
    }

    /**
     * Filter the query on the ArstAdr5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstadr5('fooValue');   // WHERE ArstAdr5 = 'fooValue'
     * $query->filterByArstadr5('%fooValue%', Criteria::LIKE); // WHERE ArstAdr5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstadr5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstadr5($arstadr5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstadr5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTADR5, $arstadr5, $comparison);
    }

    /**
     * Filter the query on the ArstCity column
     *
     * Example usage:
     * <code>
     * $query->filterByArstcity('fooValue');   // WHERE ArstCity = 'fooValue'
     * $query->filterByArstcity('%fooValue%', Criteria::LIKE); // WHERE ArstCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstcity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstcity($arstcity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstcity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTCITY, $arstcity, $comparison);
    }

    /**
     * Filter the query on the ArstStat column
     *
     * Example usage:
     * <code>
     * $query->filterByArststat('fooValue');   // WHERE ArstStat = 'fooValue'
     * $query->filterByArststat('%fooValue%', Criteria::LIKE); // WHERE ArstStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arststat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArststat($arststat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arststat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTSTAT, $arststat, $comparison);
    }

    /**
     * Filter the query on the ArstZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArstzipcode('fooValue');   // WHERE ArstZipCode = 'fooValue'
     * $query->filterByArstzipcode('%fooValue%', Criteria::LIKE); // WHERE ArstZipCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstzipcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstzipcode($arstzipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTZIPCODE, $arstzipcode, $comparison);
    }

    /**
     * Filter the query on the ArstCont1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstcont1('fooValue');   // WHERE ArstCont1 = 'fooValue'
     * $query->filterByArstcont1('%fooValue%', Criteria::LIKE); // WHERE ArstCont1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstcont1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstcont1($arstcont1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstcont1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTCONT1, $arstcont1, $comparison);
    }

    /**
     * Filter the query on the ArstCont2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstcont2('fooValue');   // WHERE ArstCont2 = 'fooValue'
     * $query->filterByArstcont2('%fooValue%', Criteria::LIKE); // WHERE ArstCont2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstcont2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstcont2($arstcont2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstcont2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTCONT2, $arstcont2, $comparison);
    }

    /**
     * Filter the query on the Arspsaleper1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper1('fooValue');   // WHERE Arspsaleper1 = 'fooValue'
     * $query->filterByArspsaleper1('%fooValue%', Criteria::LIKE); // WHERE Arspsaleper1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArspsaleper1($arspsaleper1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSPSALEPER1, $arspsaleper1, $comparison);
    }

    /**
     * Filter the query on the Arspsaleper2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper2('fooValue');   // WHERE Arspsaleper2 = 'fooValue'
     * $query->filterByArspsaleper2('%fooValue%', Criteria::LIKE); // WHERE Arspsaleper2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArspsaleper2($arspsaleper2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSPSALEPER2, $arspsaleper2, $comparison);
    }

    /**
     * Filter the query on the Arspsaleper3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper3('fooValue');   // WHERE Arspsaleper3 = 'fooValue'
     * $query->filterByArspsaleper3('%fooValue%', Criteria::LIKE); // WHERE Arspsaleper3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArspsaleper3($arspsaleper3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSPSALEPER3, $arspsaleper3, $comparison);
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
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArtbmtaxcode($artbmtaxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbmtaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARTBMTAXCODE, $artbmtaxcode, $comparison);
    }

    /**
     * Filter the query on the ArstTaxExemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArsttaxexemnbr('fooValue');   // WHERE ArstTaxExemNbr = 'fooValue'
     * $query->filterByArsttaxexemnbr('%fooValue%', Criteria::LIKE); // WHERE ArstTaxExemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arsttaxexemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArsttaxexemnbr($arsttaxexemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arsttaxexemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTTAXEXEMNBR, $arsttaxexemnbr, $comparison);
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
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_INTBWHSE, $intbwhse, $comparison);
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
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArtbshipvia($artbshipvia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbshipvia)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARTBSHIPVIA, $artbshipvia, $comparison);
    }

    /**
     * Filter the query on the ArstBord column
     *
     * Example usage:
     * <code>
     * $query->filterByArstbord('fooValue');   // WHERE ArstBord = 'fooValue'
     * $query->filterByArstbord('%fooValue%', Criteria::LIKE); // WHERE ArstBord LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstbord The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstbord($arstbord = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstbord)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTBORD, $arstbord, $comparison);
    }

    /**
     * Filter the query on the ArstCredHold column
     *
     * Example usage:
     * <code>
     * $query->filterByArstcredhold('fooValue');   // WHERE ArstCredHold = 'fooValue'
     * $query->filterByArstcredhold('%fooValue%', Criteria::LIKE); // WHERE ArstCredHold LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstcredhold The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstcredhold($arstcredhold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstcredhold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTCREDHOLD, $arstcredhold, $comparison);
    }

    /**
     * Filter the query on the ArstUserCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArstusercode('fooValue');   // WHERE ArstUserCode = 'fooValue'
     * $query->filterByArstusercode('%fooValue%', Criteria::LIKE); // WHERE ArstUserCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstusercode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstusercode($arstusercode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstusercode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTUSERCODE, $arstusercode, $comparison);
    }

    /**
     * Filter the query on the ArstPricLvl column
     *
     * Example usage:
     * <code>
     * $query->filterByArstpriclvl('fooValue');   // WHERE ArstPricLvl = 'fooValue'
     * $query->filterByArstpriclvl('%fooValue%', Criteria::LIKE); // WHERE ArstPricLvl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstpriclvl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstpriclvl($arstpriclvl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstpriclvl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTPRICLVL, $arstpriclvl, $comparison);
    }

    /**
     * Filter the query on the ArstShipComp column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipcomp('fooValue');   // WHERE ArstShipComp = 'fooValue'
     * $query->filterByArstshipcomp('%fooValue%', Criteria::LIKE); // WHERE ArstShipComp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstshipcomp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstshipcomp($arstshipcomp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipcomp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTSHIPCOMP, $arstshipcomp, $comparison);
    }

    /**
     * Filter the query on the ArstTxbl column
     *
     * Example usage:
     * <code>
     * $query->filterByArsttxbl('fooValue');   // WHERE ArstTxbl = 'fooValue'
     * $query->filterByArsttxbl('%fooValue%', Criteria::LIKE); // WHERE ArstTxbl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arsttxbl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArsttxbl($arsttxbl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arsttxbl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTTXBL, $arsttxbl, $comparison);
    }

    /**
     * Filter the query on the ArstPostal column
     *
     * Example usage:
     * <code>
     * $query->filterByArstpostal('fooValue');   // WHERE ArstPostal = 'fooValue'
     * $query->filterByArstpostal('%fooValue%', Criteria::LIKE); // WHERE ArstPostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstpostal The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstpostal($arstpostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstpostal)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTPOSTAL, $arstpostal, $comparison);
    }

    /**
     * Filter the query on the ArstSaleMtd column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsalemtd(1234); // WHERE ArstSaleMtd = 1234
     * $query->filterByArstsalemtd(array(12, 34)); // WHERE ArstSaleMtd IN (12, 34)
     * $query->filterByArstsalemtd(array('min' => 12)); // WHERE ArstSaleMtd > 12
     * </code>
     *
     * @param     mixed $arstsalemtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstsalemtd($arstsalemtd = null, $comparison = null)
    {
        if (is_array($arstsalemtd)) {
            $useMinMax = false;
            if (isset($arstsalemtd['min'])) {
                $this->addUsingAlias(ArShipToTableMap::COL_ARSTSALEMTD, $arstsalemtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsalemtd['max'])) {
                $this->addUsingAlias(ArShipToTableMap::COL_ARSTSALEMTD, $arstsalemtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTSALEMTD, $arstsalemtd, $comparison);
    }

    /**
     * Filter the query on the ArstInvMtd column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinvmtd(1234); // WHERE ArstInvMtd = 1234
     * $query->filterByArstinvmtd(array(12, 34)); // WHERE ArstInvMtd IN (12, 34)
     * $query->filterByArstinvmtd(array('min' => 12)); // WHERE ArstInvMtd > 12
     * </code>
     *
     * @param     mixed $arstinvmtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstinvmtd($arstinvmtd = null, $comparison = null)
    {
        if (is_array($arstinvmtd)) {
            $useMinMax = false;
            if (isset($arstinvmtd['min'])) {
                $this->addUsingAlias(ArShipToTableMap::COL_ARSTINVMTD, $arstinvmtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinvmtd['max'])) {
                $this->addUsingAlias(ArShipToTableMap::COL_ARSTINVMTD, $arstinvmtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTINVMTD, $arstinvmtd, $comparison);
    }

    /**
     * Filter the query on the ArstDateOpen column
     *
     * Example usage:
     * <code>
     * $query->filterByArstdateopen(1234); // WHERE ArstDateOpen = 1234
     * $query->filterByArstdateopen(array(12, 34)); // WHERE ArstDateOpen IN (12, 34)
     * $query->filterByArstdateopen(array('min' => 12)); // WHERE ArstDateOpen > 12
     * </code>
     *
     * @param     mixed $arstdateopen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstdateopen($arstdateopen = null, $comparison = null)
    {
        if (is_array($arstdateopen)) {
            $useMinMax = false;
            if (isset($arstdateopen['min'])) {
                $this->addUsingAlias(ArShipToTableMap::COL_ARSTDATEOPEN, $arstdateopen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstdateopen['max'])) {
                $this->addUsingAlias(ArShipToTableMap::COL_ARSTDATEOPEN, $arstdateopen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTDATEOPEN, $arstdateopen, $comparison);
    }

    /**
     * Filter the query on the ArstLastSaleDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArstlastsaledate(1234); // WHERE ArstLastSaleDate = 1234
     * $query->filterByArstlastsaledate(array(12, 34)); // WHERE ArstLastSaleDate IN (12, 34)
     * $query->filterByArstlastsaledate(array('min' => 12)); // WHERE ArstLastSaleDate > 12
     * </code>
     *
     * @param     mixed $arstlastsaledate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstlastsaledate($arstlastsaledate = null, $comparison = null)
    {
        if (is_array($arstlastsaledate)) {
            $useMinMax = false;
            if (isset($arstlastsaledate['min'])) {
                $this->addUsingAlias(ArShipToTableMap::COL_ARSTLASTSALEDATE, $arstlastsaledate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstlastsaledate['max'])) {
                $this->addUsingAlias(ArShipToTableMap::COL_ARSTLASTSALEDATE, $arstlastsaledate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTLASTSALEDATE, $arstlastsaledate, $comparison);
    }

    /**
     * Filter the query on the ArstPrimShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstprimshipid('fooValue');   // WHERE ArstPrimShipId = 'fooValue'
     * $query->filterByArstprimshipid('%fooValue%', Criteria::LIKE); // WHERE ArstPrimShipId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstprimshipid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstprimshipid($arstprimshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstprimshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTPRIMSHIPID, $arstprimshipid, $comparison);
    }

    /**
     * Filter the query on the ArstMyVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstmyvendid('fooValue');   // WHERE ArstMyVendId = 'fooValue'
     * $query->filterByArstmyvendid('%fooValue%', Criteria::LIKE); // WHERE ArstMyVendId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstmyvendid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstmyvendid($arstmyvendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstmyvendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTMYVENDID, $arstmyvendid, $comparison);
    }

    /**
     * Filter the query on the ArstAddlPricDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByArstaddlpricdisc(1234); // WHERE ArstAddlPricDisc = 1234
     * $query->filterByArstaddlpricdisc(array(12, 34)); // WHERE ArstAddlPricDisc IN (12, 34)
     * $query->filterByArstaddlpricdisc(array('min' => 12)); // WHERE ArstAddlPricDisc > 12
     * </code>
     *
     * @param     mixed $arstaddlpricdisc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstaddlpricdisc($arstaddlpricdisc = null, $comparison = null)
    {
        if (is_array($arstaddlpricdisc)) {
            $useMinMax = false;
            if (isset($arstaddlpricdisc['min'])) {
                $this->addUsingAlias(ArShipToTableMap::COL_ARSTADDLPRICDISC, $arstaddlpricdisc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstaddlpricdisc['max'])) {
                $this->addUsingAlias(ArShipToTableMap::COL_ARSTADDLPRICDISC, $arstaddlpricdisc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTADDLPRICDISC, $arstaddlpricdisc, $comparison);
    }

    /**
     * Filter the query on the ArstEdiInvc column
     *
     * Example usage:
     * <code>
     * $query->filterByArstediinvc('fooValue');   // WHERE ArstEdiInvc = 'fooValue'
     * $query->filterByArstediinvc('%fooValue%', Criteria::LIKE); // WHERE ArstEdiInvc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstediinvc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstediinvc($arstediinvc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstediinvc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTEDIINVC, $arstediinvc, $comparison);
    }

    /**
     * Filter the query on the ArstChrgFrt column
     *
     * Example usage:
     * <code>
     * $query->filterByArstchrgfrt('fooValue');   // WHERE ArstChrgFrt = 'fooValue'
     * $query->filterByArstchrgfrt('%fooValue%', Criteria::LIKE); // WHERE ArstChrgFrt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstchrgfrt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstchrgfrt($arstchrgfrt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstchrgfrt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTCHRGFRT, $arstchrgfrt, $comparison);
    }

    /**
     * Filter the query on the ArstDistCntr column
     *
     * Example usage:
     * <code>
     * $query->filterByArstdistcntr('fooValue');   // WHERE ArstDistCntr = 'fooValue'
     * $query->filterByArstdistcntr('%fooValue%', Criteria::LIKE); // WHERE ArstDistCntr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstdistcntr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstdistcntr($arstdistcntr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstdistcntr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTDISTCNTR, $arstdistcntr, $comparison);
    }

    /**
     * Filter the query on the ArstDunsNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArstdunsnbr('fooValue');   // WHERE ArstDunsNbr = 'fooValue'
     * $query->filterByArstdunsnbr('%fooValue%', Criteria::LIKE); // WHERE ArstDunsNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstdunsnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstdunsnbr($arstdunsnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstdunsnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTDUNSNBR, $arstdunsnbr, $comparison);
    }

    /**
     * Filter the query on the ArstRfmlValu column
     *
     * Example usage:
     * <code>
     * $query->filterByArstrfmlvalu(1234); // WHERE ArstRfmlValu = 1234
     * $query->filterByArstrfmlvalu(array(12, 34)); // WHERE ArstRfmlValu IN (12, 34)
     * $query->filterByArstrfmlvalu(array('min' => 12)); // WHERE ArstRfmlValu > 12
     * </code>
     *
     * @param     mixed $arstrfmlvalu The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstrfmlvalu($arstrfmlvalu = null, $comparison = null)
    {
        if (is_array($arstrfmlvalu)) {
            $useMinMax = false;
            if (isset($arstrfmlvalu['min'])) {
                $this->addUsingAlias(ArShipToTableMap::COL_ARSTRFMLVALU, $arstrfmlvalu['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstrfmlvalu['max'])) {
                $this->addUsingAlias(ArShipToTableMap::COL_ARSTRFMLVALU, $arstrfmlvalu['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTRFMLVALU, $arstrfmlvalu, $comparison);
    }

    /**
     * Filter the query on the ArstForcePo column
     *
     * Example usage:
     * <code>
     * $query->filterByArstforcepo('fooValue');   // WHERE ArstForcePo = 'fooValue'
     * $query->filterByArstforcepo('%fooValue%', Criteria::LIKE); // WHERE ArstForcePo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstforcepo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArstforcepo($arstforcepo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstforcepo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARSTFORCEPO, $arstforcepo, $comparison);
    }

    /**
     * Filter the query on the ArtbRoutCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbroutcode('fooValue');   // WHERE ArtbRoutCode = 'fooValue'
     * $query->filterByArtbroutcode('%fooValue%', Criteria::LIKE); // WHERE ArtbRoutCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbroutcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByArtbroutcode($artbroutcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbroutcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_ARTBROUTCODE, $artbroutcode, $comparison);
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
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (is_array($dateupdtd)) {
            $useMinMax = false;
            if (isset($dateupdtd['min'])) {
                $this->addUsingAlias(ArShipToTableMap::COL_DATEUPDTD, $dateupdtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateupdtd['max'])) {
                $this->addUsingAlias(ArShipToTableMap::COL_DATEUPDTD, $dateupdtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (is_array($timeupdtd)) {
            $useMinMax = false;
            if (isset($timeupdtd['min'])) {
                $this->addUsingAlias(ArShipToTableMap::COL_TIMEUPDTD, $timeupdtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timeupdtd['max'])) {
                $this->addUsingAlias(ArShipToTableMap::COL_TIMEUPDTD, $timeupdtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShipToTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildArShipTo $arShipTo Object to remove from the list of results
     *
     * @return $this|ChildArShipToQuery The current query, for fluid interface
     */
    public function prune($arShipTo = null)
    {
        if ($arShipTo) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ArShipToTableMap::COL_ARCUCUSTID), $arShipTo->getArcucustid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ArShipToTableMap::COL_ARSTSHIPID), $arShipTo->getArstshipid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the AR_SHIP_TO table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArShipToTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArShipToTableMap::clearInstancePool();
            ArShipToTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArShipToTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArShipToTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArShipToTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArShipToTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ArShipToQuery
