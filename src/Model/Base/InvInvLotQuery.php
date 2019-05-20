<?php

namespace Base;

use \InvInvLot as ChildInvInvLot;
use \InvInvLotQuery as ChildInvInvLotQuery;
use \Exception;
use \PDO;
use Map\InvInvLotTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'INV_INV_LOT' table.
 *
 *
 *
 * @method     ChildInvInvLotQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildInvInvLotQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildInvInvLotQuery orderByInltlotser($order = Criteria::ASC) Order by the InltLotSer column
 * @method     ChildInvInvLotQuery orderByInltbin($order = Criteria::ASC) Order by the InltBin column
 * @method     ChildInvInvLotQuery orderByInltdate($order = Criteria::ASC) Order by the InltDate column
 * @method     ChildInvInvLotQuery orderByInltdatewrit($order = Criteria::ASC) Order by the InltDateWrit column
 * @method     ChildInvInvLotQuery orderByInltcost($order = Criteria::ASC) Order by the InltCost column
 * @method     ChildInvInvLotQuery orderByInltonhand($order = Criteria::ASC) Order by the InltOnHand column
 * @method     ChildInvInvLotQuery orderByInltresv($order = Criteria::ASC) Order by the InltResv column
 * @method     ChildInvInvLotQuery orderByInltship($order = Criteria::ASC) Order by the InltShip column
 * @method     ChildInvInvLotQuery orderByInltallo($order = Criteria::ASC) Order by the InltAllo column
 * @method     ChildInvInvLotQuery orderByInltfaballo($order = Criteria::ASC) Order by the InltFabAllo column
 * @method     ChildInvInvLotQuery orderByInltintran($order = Criteria::ASC) Order by the InltInTran column
 * @method     ChildInvInvLotQuery orderByInltinship($order = Criteria::ASC) Order by the InltInShip column
 * @method     ChildInvInvLotQuery orderByInltlotref($order = Criteria::ASC) Order by the InltLotRef column
 * @method     ChildInvInvLotQuery orderByInltlandcost1($order = Criteria::ASC) Order by the InltLandCost1 column
 * @method     ChildInvInvLotQuery orderByInltlandcost2($order = Criteria::ASC) Order by the InltLandCost2 column
 * @method     ChildInvInvLotQuery orderByInltlandcost3($order = Criteria::ASC) Order by the InltLandCost3 column
 * @method     ChildInvInvLotQuery orderByInltlandcost4($order = Criteria::ASC) Order by the InltLandCost4 column
 * @method     ChildInvInvLotQuery orderByInltlandcost5($order = Criteria::ASC) Order by the InltLandCost5 column
 * @method     ChildInvInvLotQuery orderByInltlandcost6($order = Criteria::ASC) Order by the InltLandCost6 column
 * @method     ChildInvInvLotQuery orderByInltctry($order = Criteria::ASC) Order by the InltCtry column
 * @method     ChildInvInvLotQuery orderByInltrvalorigcost($order = Criteria::ASC) Order by the InltRvalOrigCost column
 * @method     ChildInvInvLotQuery orderByInltrvalpct($order = Criteria::ASC) Order by the InltRvalPct column
 * @method     ChildInvInvLotQuery orderByInltunitwght($order = Criteria::ASC) Order by the InltUnitWght column
 * @method     ChildInvInvLotQuery orderByInltdestwhse($order = Criteria::ASC) Order by the InltDestWhse column
 * @method     ChildInvInvLotQuery orderByInltcntrqty($order = Criteria::ASC) Order by the InltCntrQty column
 * @method     ChildInvInvLotQuery orderByInlttarewght($order = Criteria::ASC) Order by the InltTareWght column
 * @method     ChildInvInvLotQuery orderByInltfrozen($order = Criteria::ASC) Order by the InltFrozen column
 * @method     ChildInvInvLotQuery orderByInltcert($order = Criteria::ASC) Order by the InltCert column
 * @method     ChildInvInvLotQuery orderByInltcuredate($order = Criteria::ASC) Order by the InltCureDate column
 * @method     ChildInvInvLotQuery orderByInltorigbin($order = Criteria::ASC) Order by the InltOrigBin column
 * @method     ChildInvInvLotQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvInvLotQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvInvLotQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvInvLotQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildInvInvLotQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildInvInvLotQuery groupByInltlotser() Group by the InltLotSer column
 * @method     ChildInvInvLotQuery groupByInltbin() Group by the InltBin column
 * @method     ChildInvInvLotQuery groupByInltdate() Group by the InltDate column
 * @method     ChildInvInvLotQuery groupByInltdatewrit() Group by the InltDateWrit column
 * @method     ChildInvInvLotQuery groupByInltcost() Group by the InltCost column
 * @method     ChildInvInvLotQuery groupByInltonhand() Group by the InltOnHand column
 * @method     ChildInvInvLotQuery groupByInltresv() Group by the InltResv column
 * @method     ChildInvInvLotQuery groupByInltship() Group by the InltShip column
 * @method     ChildInvInvLotQuery groupByInltallo() Group by the InltAllo column
 * @method     ChildInvInvLotQuery groupByInltfaballo() Group by the InltFabAllo column
 * @method     ChildInvInvLotQuery groupByInltintran() Group by the InltInTran column
 * @method     ChildInvInvLotQuery groupByInltinship() Group by the InltInShip column
 * @method     ChildInvInvLotQuery groupByInltlotref() Group by the InltLotRef column
 * @method     ChildInvInvLotQuery groupByInltlandcost1() Group by the InltLandCost1 column
 * @method     ChildInvInvLotQuery groupByInltlandcost2() Group by the InltLandCost2 column
 * @method     ChildInvInvLotQuery groupByInltlandcost3() Group by the InltLandCost3 column
 * @method     ChildInvInvLotQuery groupByInltlandcost4() Group by the InltLandCost4 column
 * @method     ChildInvInvLotQuery groupByInltlandcost5() Group by the InltLandCost5 column
 * @method     ChildInvInvLotQuery groupByInltlandcost6() Group by the InltLandCost6 column
 * @method     ChildInvInvLotQuery groupByInltctry() Group by the InltCtry column
 * @method     ChildInvInvLotQuery groupByInltrvalorigcost() Group by the InltRvalOrigCost column
 * @method     ChildInvInvLotQuery groupByInltrvalpct() Group by the InltRvalPct column
 * @method     ChildInvInvLotQuery groupByInltunitwght() Group by the InltUnitWght column
 * @method     ChildInvInvLotQuery groupByInltdestwhse() Group by the InltDestWhse column
 * @method     ChildInvInvLotQuery groupByInltcntrqty() Group by the InltCntrQty column
 * @method     ChildInvInvLotQuery groupByInlttarewght() Group by the InltTareWght column
 * @method     ChildInvInvLotQuery groupByInltfrozen() Group by the InltFrozen column
 * @method     ChildInvInvLotQuery groupByInltcert() Group by the InltCert column
 * @method     ChildInvInvLotQuery groupByInltcuredate() Group by the InltCureDate column
 * @method     ChildInvInvLotQuery groupByInltorigbin() Group by the InltOrigBin column
 * @method     ChildInvInvLotQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvInvLotQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvInvLotQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvInvLotQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvInvLotQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvInvLotQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvInvLotQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvInvLotQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvInvLotQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvInvLot findOne(ConnectionInterface $con = null) Return the first ChildInvInvLot matching the query
 * @method     ChildInvInvLot findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvInvLot matching the query, or a new ChildInvInvLot object populated from the query conditions when no match is found
 *
 * @method     ChildInvInvLot findOneByInititemnbr(string $InitItemNbr) Return the first ChildInvInvLot filtered by the InitItemNbr column
 * @method     ChildInvInvLot findOneByIntbwhse(string $IntbWhse) Return the first ChildInvInvLot filtered by the IntbWhse column
 * @method     ChildInvInvLot findOneByInltlotser(string $InltLotSer) Return the first ChildInvInvLot filtered by the InltLotSer column
 * @method     ChildInvInvLot findOneByInltbin(string $InltBin) Return the first ChildInvInvLot filtered by the InltBin column
 * @method     ChildInvInvLot findOneByInltdate(int $InltDate) Return the first ChildInvInvLot filtered by the InltDate column
 * @method     ChildInvInvLot findOneByInltdatewrit(int $InltDateWrit) Return the first ChildInvInvLot filtered by the InltDateWrit column
 * @method     ChildInvInvLot findOneByInltcost(string $InltCost) Return the first ChildInvInvLot filtered by the InltCost column
 * @method     ChildInvInvLot findOneByInltonhand(string $InltOnHand) Return the first ChildInvInvLot filtered by the InltOnHand column
 * @method     ChildInvInvLot findOneByInltresv(string $InltResv) Return the first ChildInvInvLot filtered by the InltResv column
 * @method     ChildInvInvLot findOneByInltship(string $InltShip) Return the first ChildInvInvLot filtered by the InltShip column
 * @method     ChildInvInvLot findOneByInltallo(string $InltAllo) Return the first ChildInvInvLot filtered by the InltAllo column
 * @method     ChildInvInvLot findOneByInltfaballo(string $InltFabAllo) Return the first ChildInvInvLot filtered by the InltFabAllo column
 * @method     ChildInvInvLot findOneByInltintran(string $InltInTran) Return the first ChildInvInvLot filtered by the InltInTran column
 * @method     ChildInvInvLot findOneByInltinship(string $InltInShip) Return the first ChildInvInvLot filtered by the InltInShip column
 * @method     ChildInvInvLot findOneByInltlotref(string $InltLotRef) Return the first ChildInvInvLot filtered by the InltLotRef column
 * @method     ChildInvInvLot findOneByInltlandcost1(string $InltLandCost1) Return the first ChildInvInvLot filtered by the InltLandCost1 column
 * @method     ChildInvInvLot findOneByInltlandcost2(string $InltLandCost2) Return the first ChildInvInvLot filtered by the InltLandCost2 column
 * @method     ChildInvInvLot findOneByInltlandcost3(string $InltLandCost3) Return the first ChildInvInvLot filtered by the InltLandCost3 column
 * @method     ChildInvInvLot findOneByInltlandcost4(string $InltLandCost4) Return the first ChildInvInvLot filtered by the InltLandCost4 column
 * @method     ChildInvInvLot findOneByInltlandcost5(string $InltLandCost5) Return the first ChildInvInvLot filtered by the InltLandCost5 column
 * @method     ChildInvInvLot findOneByInltlandcost6(string $InltLandCost6) Return the first ChildInvInvLot filtered by the InltLandCost6 column
 * @method     ChildInvInvLot findOneByInltctry(string $InltCtry) Return the first ChildInvInvLot filtered by the InltCtry column
 * @method     ChildInvInvLot findOneByInltrvalorigcost(string $InltRvalOrigCost) Return the first ChildInvInvLot filtered by the InltRvalOrigCost column
 * @method     ChildInvInvLot findOneByInltrvalpct(string $InltRvalPct) Return the first ChildInvInvLot filtered by the InltRvalPct column
 * @method     ChildInvInvLot findOneByInltunitwght(string $InltUnitWght) Return the first ChildInvInvLot filtered by the InltUnitWght column
 * @method     ChildInvInvLot findOneByInltdestwhse(string $InltDestWhse) Return the first ChildInvInvLot filtered by the InltDestWhse column
 * @method     ChildInvInvLot findOneByInltcntrqty(int $InltCntrQty) Return the first ChildInvInvLot filtered by the InltCntrQty column
 * @method     ChildInvInvLot findOneByInlttarewght(string $InltTareWght) Return the first ChildInvInvLot filtered by the InltTareWght column
 * @method     ChildInvInvLot findOneByInltfrozen(string $InltFrozen) Return the first ChildInvInvLot filtered by the InltFrozen column
 * @method     ChildInvInvLot findOneByInltcert(string $InltCert) Return the first ChildInvInvLot filtered by the InltCert column
 * @method     ChildInvInvLot findOneByInltcuredate(string $InltCureDate) Return the first ChildInvInvLot filtered by the InltCureDate column
 * @method     ChildInvInvLot findOneByInltorigbin(string $InltOrigBin) Return the first ChildInvInvLot filtered by the InltOrigBin column
 * @method     ChildInvInvLot findOneByDateupdtd(int $DateUpdtd) Return the first ChildInvInvLot filtered by the DateUpdtd column
 * @method     ChildInvInvLot findOneByTimeupdtd(int $TimeUpdtd) Return the first ChildInvInvLot filtered by the TimeUpdtd column
 * @method     ChildInvInvLot findOneByDummy(string $dummy) Return the first ChildInvInvLot filtered by the dummy column *

 * @method     ChildInvInvLot requirePk($key, ConnectionInterface $con = null) Return the ChildInvInvLot by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOne(ConnectionInterface $con = null) Return the first ChildInvInvLot matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvInvLot requireOneByInititemnbr(string $InitItemNbr) Return the first ChildInvInvLot filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByIntbwhse(string $IntbWhse) Return the first ChildInvInvLot filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltlotser(string $InltLotSer) Return the first ChildInvInvLot filtered by the InltLotSer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltbin(string $InltBin) Return the first ChildInvInvLot filtered by the InltBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltdate(int $InltDate) Return the first ChildInvInvLot filtered by the InltDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltdatewrit(int $InltDateWrit) Return the first ChildInvInvLot filtered by the InltDateWrit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltcost(string $InltCost) Return the first ChildInvInvLot filtered by the InltCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltonhand(string $InltOnHand) Return the first ChildInvInvLot filtered by the InltOnHand column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltresv(string $InltResv) Return the first ChildInvInvLot filtered by the InltResv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltship(string $InltShip) Return the first ChildInvInvLot filtered by the InltShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltallo(string $InltAllo) Return the first ChildInvInvLot filtered by the InltAllo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltfaballo(string $InltFabAllo) Return the first ChildInvInvLot filtered by the InltFabAllo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltintran(string $InltInTran) Return the first ChildInvInvLot filtered by the InltInTran column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltinship(string $InltInShip) Return the first ChildInvInvLot filtered by the InltInShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltlotref(string $InltLotRef) Return the first ChildInvInvLot filtered by the InltLotRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltlandcost1(string $InltLandCost1) Return the first ChildInvInvLot filtered by the InltLandCost1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltlandcost2(string $InltLandCost2) Return the first ChildInvInvLot filtered by the InltLandCost2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltlandcost3(string $InltLandCost3) Return the first ChildInvInvLot filtered by the InltLandCost3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltlandcost4(string $InltLandCost4) Return the first ChildInvInvLot filtered by the InltLandCost4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltlandcost5(string $InltLandCost5) Return the first ChildInvInvLot filtered by the InltLandCost5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltlandcost6(string $InltLandCost6) Return the first ChildInvInvLot filtered by the InltLandCost6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltctry(string $InltCtry) Return the first ChildInvInvLot filtered by the InltCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltrvalorigcost(string $InltRvalOrigCost) Return the first ChildInvInvLot filtered by the InltRvalOrigCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltrvalpct(string $InltRvalPct) Return the first ChildInvInvLot filtered by the InltRvalPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltunitwght(string $InltUnitWght) Return the first ChildInvInvLot filtered by the InltUnitWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltdestwhse(string $InltDestWhse) Return the first ChildInvInvLot filtered by the InltDestWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltcntrqty(int $InltCntrQty) Return the first ChildInvInvLot filtered by the InltCntrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInlttarewght(string $InltTareWght) Return the first ChildInvInvLot filtered by the InltTareWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltfrozen(string $InltFrozen) Return the first ChildInvInvLot filtered by the InltFrozen column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltcert(string $InltCert) Return the first ChildInvInvLot filtered by the InltCert column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltcuredate(string $InltCureDate) Return the first ChildInvInvLot filtered by the InltCureDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByInltorigbin(string $InltOrigBin) Return the first ChildInvInvLot filtered by the InltOrigBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByDateupdtd(int $DateUpdtd) Return the first ChildInvInvLot filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByTimeupdtd(int $TimeUpdtd) Return the first ChildInvInvLot filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvInvLot requireOneByDummy(string $dummy) Return the first ChildInvInvLot filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvInvLot[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvInvLot objects based on current ModelCriteria
 * @method     ChildInvInvLot[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildInvInvLot objects filtered by the InitItemNbr column
 * @method     ChildInvInvLot[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildInvInvLot objects filtered by the IntbWhse column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltlotser(string $InltLotSer) Return ChildInvInvLot objects filtered by the InltLotSer column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltbin(string $InltBin) Return ChildInvInvLot objects filtered by the InltBin column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltdate(int $InltDate) Return ChildInvInvLot objects filtered by the InltDate column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltdatewrit(int $InltDateWrit) Return ChildInvInvLot objects filtered by the InltDateWrit column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltcost(string $InltCost) Return ChildInvInvLot objects filtered by the InltCost column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltonhand(string $InltOnHand) Return ChildInvInvLot objects filtered by the InltOnHand column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltresv(string $InltResv) Return ChildInvInvLot objects filtered by the InltResv column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltship(string $InltShip) Return ChildInvInvLot objects filtered by the InltShip column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltallo(string $InltAllo) Return ChildInvInvLot objects filtered by the InltAllo column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltfaballo(string $InltFabAllo) Return ChildInvInvLot objects filtered by the InltFabAllo column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltintran(string $InltInTran) Return ChildInvInvLot objects filtered by the InltInTran column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltinship(string $InltInShip) Return ChildInvInvLot objects filtered by the InltInShip column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltlotref(string $InltLotRef) Return ChildInvInvLot objects filtered by the InltLotRef column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltlandcost1(string $InltLandCost1) Return ChildInvInvLot objects filtered by the InltLandCost1 column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltlandcost2(string $InltLandCost2) Return ChildInvInvLot objects filtered by the InltLandCost2 column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltlandcost3(string $InltLandCost3) Return ChildInvInvLot objects filtered by the InltLandCost3 column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltlandcost4(string $InltLandCost4) Return ChildInvInvLot objects filtered by the InltLandCost4 column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltlandcost5(string $InltLandCost5) Return ChildInvInvLot objects filtered by the InltLandCost5 column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltlandcost6(string $InltLandCost6) Return ChildInvInvLot objects filtered by the InltLandCost6 column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltctry(string $InltCtry) Return ChildInvInvLot objects filtered by the InltCtry column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltrvalorigcost(string $InltRvalOrigCost) Return ChildInvInvLot objects filtered by the InltRvalOrigCost column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltrvalpct(string $InltRvalPct) Return ChildInvInvLot objects filtered by the InltRvalPct column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltunitwght(string $InltUnitWght) Return ChildInvInvLot objects filtered by the InltUnitWght column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltdestwhse(string $InltDestWhse) Return ChildInvInvLot objects filtered by the InltDestWhse column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltcntrqty(int $InltCntrQty) Return ChildInvInvLot objects filtered by the InltCntrQty column
 * @method     ChildInvInvLot[]|ObjectCollection findByInlttarewght(string $InltTareWght) Return ChildInvInvLot objects filtered by the InltTareWght column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltfrozen(string $InltFrozen) Return ChildInvInvLot objects filtered by the InltFrozen column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltcert(string $InltCert) Return ChildInvInvLot objects filtered by the InltCert column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltcuredate(string $InltCureDate) Return ChildInvInvLot objects filtered by the InltCureDate column
 * @method     ChildInvInvLot[]|ObjectCollection findByInltorigbin(string $InltOrigBin) Return ChildInvInvLot objects filtered by the InltOrigBin column
 * @method     ChildInvInvLot[]|ObjectCollection findByDateupdtd(int $DateUpdtd) Return ChildInvInvLot objects filtered by the DateUpdtd column
 * @method     ChildInvInvLot[]|ObjectCollection findByTimeupdtd(int $TimeUpdtd) Return ChildInvInvLot objects filtered by the TimeUpdtd column
 * @method     ChildInvInvLot[]|ObjectCollection findByDummy(string $dummy) Return ChildInvInvLot objects filtered by the dummy column
 * @method     ChildInvInvLot[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvInvLotQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvInvLotQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvInvLot', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvInvLotQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvInvLotQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvInvLotQuery) {
            return $criteria;
        }
        $query = new ChildInvInvLotQuery();
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
     * $obj = $c->findPk(array(12, 34, 56, 78), $con);
     * </code>
     *
     * @param array[$InitItemNbr, $IntbWhse, $InltLotSer, $InltBin] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvInvLot|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvInvLotTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvInvLotTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildInvInvLot A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, IntbWhse, InltLotSer, InltBin, InltDate, InltDateWrit, InltCost, InltOnHand, InltResv, InltShip, InltAllo, InltFabAllo, InltInTran, InltInShip, InltLotRef, InltLandCost1, InltLandCost2, InltLandCost3, InltLandCost4, InltLandCost5, InltLandCost6, InltCtry, InltRvalOrigCost, InltRvalPct, InltUnitWght, InltDestWhse, InltCntrQty, InltTareWght, InltFrozen, InltCert, InltCureDate, InltOrigBin, DateUpdtd, TimeUpdtd, dummy FROM INV_INV_LOT WHERE InitItemNbr = :p0 AND IntbWhse = :p1 AND InltLotSer = :p2 AND InltBin = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildInvInvLot $obj */
            $obj = new ChildInvInvLot();
            $obj->hydrate($row);
            InvInvLotTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildInvInvLot|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(InvInvLotTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvInvLotTableMap::COL_INTBWHSE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(InvInvLotTableMap::COL_INLTLOTSER, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(InvInvLotTableMap::COL_INLTBIN, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(InvInvLotTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvInvLotTableMap::COL_INTBWHSE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(InvInvLotTableMap::COL_INLTLOTSER, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(InvInvLotTableMap::COL_INLTBIN, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the InitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInititemnbr('fooValue');   // WHERE InitItemNbr = 'fooValue'
     * $query->filterByInititemnbr('%fooValue%', Criteria::LIKE); // WHERE InitItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inititemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
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
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the InltLotSer column
     *
     * Example usage:
     * <code>
     * $query->filterByInltlotser('fooValue');   // WHERE InltLotSer = 'fooValue'
     * $query->filterByInltlotser('%fooValue%', Criteria::LIKE); // WHERE InltLotSer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltlotser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltlotser($inltlotser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltlotser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTLOTSER, $inltlotser, $comparison);
    }

    /**
     * Filter the query on the InltBin column
     *
     * Example usage:
     * <code>
     * $query->filterByInltbin('fooValue');   // WHERE InltBin = 'fooValue'
     * $query->filterByInltbin('%fooValue%', Criteria::LIKE); // WHERE InltBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltbin($inltbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTBIN, $inltbin, $comparison);
    }

    /**
     * Filter the query on the InltDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInltdate(1234); // WHERE InltDate = 1234
     * $query->filterByInltdate(array(12, 34)); // WHERE InltDate IN (12, 34)
     * $query->filterByInltdate(array('min' => 12)); // WHERE InltDate > 12
     * </code>
     *
     * @param     mixed $inltdate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltdate($inltdate = null, $comparison = null)
    {
        if (is_array($inltdate)) {
            $useMinMax = false;
            if (isset($inltdate['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTDATE, $inltdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltdate['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTDATE, $inltdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTDATE, $inltdate, $comparison);
    }

    /**
     * Filter the query on the InltDateWrit column
     *
     * Example usage:
     * <code>
     * $query->filterByInltdatewrit(1234); // WHERE InltDateWrit = 1234
     * $query->filterByInltdatewrit(array(12, 34)); // WHERE InltDateWrit IN (12, 34)
     * $query->filterByInltdatewrit(array('min' => 12)); // WHERE InltDateWrit > 12
     * </code>
     *
     * @param     mixed $inltdatewrit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltdatewrit($inltdatewrit = null, $comparison = null)
    {
        if (is_array($inltdatewrit)) {
            $useMinMax = false;
            if (isset($inltdatewrit['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTDATEWRIT, $inltdatewrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltdatewrit['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTDATEWRIT, $inltdatewrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTDATEWRIT, $inltdatewrit, $comparison);
    }

    /**
     * Filter the query on the InltCost column
     *
     * Example usage:
     * <code>
     * $query->filterByInltcost(1234); // WHERE InltCost = 1234
     * $query->filterByInltcost(array(12, 34)); // WHERE InltCost IN (12, 34)
     * $query->filterByInltcost(array('min' => 12)); // WHERE InltCost > 12
     * </code>
     *
     * @param     mixed $inltcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltcost($inltcost = null, $comparison = null)
    {
        if (is_array($inltcost)) {
            $useMinMax = false;
            if (isset($inltcost['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTCOST, $inltcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltcost['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTCOST, $inltcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTCOST, $inltcost, $comparison);
    }

    /**
     * Filter the query on the InltOnHand column
     *
     * Example usage:
     * <code>
     * $query->filterByInltonhand(1234); // WHERE InltOnHand = 1234
     * $query->filterByInltonhand(array(12, 34)); // WHERE InltOnHand IN (12, 34)
     * $query->filterByInltonhand(array('min' => 12)); // WHERE InltOnHand > 12
     * </code>
     *
     * @param     mixed $inltonhand The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltonhand($inltonhand = null, $comparison = null)
    {
        if (is_array($inltonhand)) {
            $useMinMax = false;
            if (isset($inltonhand['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTONHAND, $inltonhand['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltonhand['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTONHAND, $inltonhand['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTONHAND, $inltonhand, $comparison);
    }

    /**
     * Filter the query on the InltResv column
     *
     * Example usage:
     * <code>
     * $query->filterByInltresv(1234); // WHERE InltResv = 1234
     * $query->filterByInltresv(array(12, 34)); // WHERE InltResv IN (12, 34)
     * $query->filterByInltresv(array('min' => 12)); // WHERE InltResv > 12
     * </code>
     *
     * @param     mixed $inltresv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltresv($inltresv = null, $comparison = null)
    {
        if (is_array($inltresv)) {
            $useMinMax = false;
            if (isset($inltresv['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTRESV, $inltresv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltresv['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTRESV, $inltresv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTRESV, $inltresv, $comparison);
    }

    /**
     * Filter the query on the InltShip column
     *
     * Example usage:
     * <code>
     * $query->filterByInltship(1234); // WHERE InltShip = 1234
     * $query->filterByInltship(array(12, 34)); // WHERE InltShip IN (12, 34)
     * $query->filterByInltship(array('min' => 12)); // WHERE InltShip > 12
     * </code>
     *
     * @param     mixed $inltship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltship($inltship = null, $comparison = null)
    {
        if (is_array($inltship)) {
            $useMinMax = false;
            if (isset($inltship['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTSHIP, $inltship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltship['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTSHIP, $inltship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTSHIP, $inltship, $comparison);
    }

    /**
     * Filter the query on the InltAllo column
     *
     * Example usage:
     * <code>
     * $query->filterByInltallo(1234); // WHERE InltAllo = 1234
     * $query->filterByInltallo(array(12, 34)); // WHERE InltAllo IN (12, 34)
     * $query->filterByInltallo(array('min' => 12)); // WHERE InltAllo > 12
     * </code>
     *
     * @param     mixed $inltallo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltallo($inltallo = null, $comparison = null)
    {
        if (is_array($inltallo)) {
            $useMinMax = false;
            if (isset($inltallo['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTALLO, $inltallo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltallo['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTALLO, $inltallo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTALLO, $inltallo, $comparison);
    }

    /**
     * Filter the query on the InltFabAllo column
     *
     * Example usage:
     * <code>
     * $query->filterByInltfaballo(1234); // WHERE InltFabAllo = 1234
     * $query->filterByInltfaballo(array(12, 34)); // WHERE InltFabAllo IN (12, 34)
     * $query->filterByInltfaballo(array('min' => 12)); // WHERE InltFabAllo > 12
     * </code>
     *
     * @param     mixed $inltfaballo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltfaballo($inltfaballo = null, $comparison = null)
    {
        if (is_array($inltfaballo)) {
            $useMinMax = false;
            if (isset($inltfaballo['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTFABALLO, $inltfaballo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltfaballo['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTFABALLO, $inltfaballo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTFABALLO, $inltfaballo, $comparison);
    }

    /**
     * Filter the query on the InltInTran column
     *
     * Example usage:
     * <code>
     * $query->filterByInltintran(1234); // WHERE InltInTran = 1234
     * $query->filterByInltintran(array(12, 34)); // WHERE InltInTran IN (12, 34)
     * $query->filterByInltintran(array('min' => 12)); // WHERE InltInTran > 12
     * </code>
     *
     * @param     mixed $inltintran The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltintran($inltintran = null, $comparison = null)
    {
        if (is_array($inltintran)) {
            $useMinMax = false;
            if (isset($inltintran['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTINTRAN, $inltintran['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltintran['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTINTRAN, $inltintran['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTINTRAN, $inltintran, $comparison);
    }

    /**
     * Filter the query on the InltInShip column
     *
     * Example usage:
     * <code>
     * $query->filterByInltinship(1234); // WHERE InltInShip = 1234
     * $query->filterByInltinship(array(12, 34)); // WHERE InltInShip IN (12, 34)
     * $query->filterByInltinship(array('min' => 12)); // WHERE InltInShip > 12
     * </code>
     *
     * @param     mixed $inltinship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltinship($inltinship = null, $comparison = null)
    {
        if (is_array($inltinship)) {
            $useMinMax = false;
            if (isset($inltinship['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTINSHIP, $inltinship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltinship['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTINSHIP, $inltinship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTINSHIP, $inltinship, $comparison);
    }

    /**
     * Filter the query on the InltLotRef column
     *
     * Example usage:
     * <code>
     * $query->filterByInltlotref('fooValue');   // WHERE InltLotRef = 'fooValue'
     * $query->filterByInltlotref('%fooValue%', Criteria::LIKE); // WHERE InltLotRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltlotref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltlotref($inltlotref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltlotref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTLOTREF, $inltlotref, $comparison);
    }

    /**
     * Filter the query on the InltLandCost1 column
     *
     * Example usage:
     * <code>
     * $query->filterByInltlandcost1(1234); // WHERE InltLandCost1 = 1234
     * $query->filterByInltlandcost1(array(12, 34)); // WHERE InltLandCost1 IN (12, 34)
     * $query->filterByInltlandcost1(array('min' => 12)); // WHERE InltLandCost1 > 12
     * </code>
     *
     * @param     mixed $inltlandcost1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltlandcost1($inltlandcost1 = null, $comparison = null)
    {
        if (is_array($inltlandcost1)) {
            $useMinMax = false;
            if (isset($inltlandcost1['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTLANDCOST1, $inltlandcost1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltlandcost1['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTLANDCOST1, $inltlandcost1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTLANDCOST1, $inltlandcost1, $comparison);
    }

    /**
     * Filter the query on the InltLandCost2 column
     *
     * Example usage:
     * <code>
     * $query->filterByInltlandcost2(1234); // WHERE InltLandCost2 = 1234
     * $query->filterByInltlandcost2(array(12, 34)); // WHERE InltLandCost2 IN (12, 34)
     * $query->filterByInltlandcost2(array('min' => 12)); // WHERE InltLandCost2 > 12
     * </code>
     *
     * @param     mixed $inltlandcost2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltlandcost2($inltlandcost2 = null, $comparison = null)
    {
        if (is_array($inltlandcost2)) {
            $useMinMax = false;
            if (isset($inltlandcost2['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTLANDCOST2, $inltlandcost2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltlandcost2['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTLANDCOST2, $inltlandcost2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTLANDCOST2, $inltlandcost2, $comparison);
    }

    /**
     * Filter the query on the InltLandCost3 column
     *
     * Example usage:
     * <code>
     * $query->filterByInltlandcost3(1234); // WHERE InltLandCost3 = 1234
     * $query->filterByInltlandcost3(array(12, 34)); // WHERE InltLandCost3 IN (12, 34)
     * $query->filterByInltlandcost3(array('min' => 12)); // WHERE InltLandCost3 > 12
     * </code>
     *
     * @param     mixed $inltlandcost3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltlandcost3($inltlandcost3 = null, $comparison = null)
    {
        if (is_array($inltlandcost3)) {
            $useMinMax = false;
            if (isset($inltlandcost3['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTLANDCOST3, $inltlandcost3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltlandcost3['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTLANDCOST3, $inltlandcost3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTLANDCOST3, $inltlandcost3, $comparison);
    }

    /**
     * Filter the query on the InltLandCost4 column
     *
     * Example usage:
     * <code>
     * $query->filterByInltlandcost4(1234); // WHERE InltLandCost4 = 1234
     * $query->filterByInltlandcost4(array(12, 34)); // WHERE InltLandCost4 IN (12, 34)
     * $query->filterByInltlandcost4(array('min' => 12)); // WHERE InltLandCost4 > 12
     * </code>
     *
     * @param     mixed $inltlandcost4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltlandcost4($inltlandcost4 = null, $comparison = null)
    {
        if (is_array($inltlandcost4)) {
            $useMinMax = false;
            if (isset($inltlandcost4['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTLANDCOST4, $inltlandcost4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltlandcost4['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTLANDCOST4, $inltlandcost4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTLANDCOST4, $inltlandcost4, $comparison);
    }

    /**
     * Filter the query on the InltLandCost5 column
     *
     * Example usage:
     * <code>
     * $query->filterByInltlandcost5(1234); // WHERE InltLandCost5 = 1234
     * $query->filterByInltlandcost5(array(12, 34)); // WHERE InltLandCost5 IN (12, 34)
     * $query->filterByInltlandcost5(array('min' => 12)); // WHERE InltLandCost5 > 12
     * </code>
     *
     * @param     mixed $inltlandcost5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltlandcost5($inltlandcost5 = null, $comparison = null)
    {
        if (is_array($inltlandcost5)) {
            $useMinMax = false;
            if (isset($inltlandcost5['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTLANDCOST5, $inltlandcost5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltlandcost5['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTLANDCOST5, $inltlandcost5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTLANDCOST5, $inltlandcost5, $comparison);
    }

    /**
     * Filter the query on the InltLandCost6 column
     *
     * Example usage:
     * <code>
     * $query->filterByInltlandcost6(1234); // WHERE InltLandCost6 = 1234
     * $query->filterByInltlandcost6(array(12, 34)); // WHERE InltLandCost6 IN (12, 34)
     * $query->filterByInltlandcost6(array('min' => 12)); // WHERE InltLandCost6 > 12
     * </code>
     *
     * @param     mixed $inltlandcost6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltlandcost6($inltlandcost6 = null, $comparison = null)
    {
        if (is_array($inltlandcost6)) {
            $useMinMax = false;
            if (isset($inltlandcost6['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTLANDCOST6, $inltlandcost6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltlandcost6['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTLANDCOST6, $inltlandcost6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTLANDCOST6, $inltlandcost6, $comparison);
    }

    /**
     * Filter the query on the InltCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByInltctry('fooValue');   // WHERE InltCtry = 'fooValue'
     * $query->filterByInltctry('%fooValue%', Criteria::LIKE); // WHERE InltCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltctry($inltctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTCTRY, $inltctry, $comparison);
    }

    /**
     * Filter the query on the InltRvalOrigCost column
     *
     * Example usage:
     * <code>
     * $query->filterByInltrvalorigcost(1234); // WHERE InltRvalOrigCost = 1234
     * $query->filterByInltrvalorigcost(array(12, 34)); // WHERE InltRvalOrigCost IN (12, 34)
     * $query->filterByInltrvalorigcost(array('min' => 12)); // WHERE InltRvalOrigCost > 12
     * </code>
     *
     * @param     mixed $inltrvalorigcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltrvalorigcost($inltrvalorigcost = null, $comparison = null)
    {
        if (is_array($inltrvalorigcost)) {
            $useMinMax = false;
            if (isset($inltrvalorigcost['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTRVALORIGCOST, $inltrvalorigcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltrvalorigcost['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTRVALORIGCOST, $inltrvalorigcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTRVALORIGCOST, $inltrvalorigcost, $comparison);
    }

    /**
     * Filter the query on the InltRvalPct column
     *
     * Example usage:
     * <code>
     * $query->filterByInltrvalpct(1234); // WHERE InltRvalPct = 1234
     * $query->filterByInltrvalpct(array(12, 34)); // WHERE InltRvalPct IN (12, 34)
     * $query->filterByInltrvalpct(array('min' => 12)); // WHERE InltRvalPct > 12
     * </code>
     *
     * @param     mixed $inltrvalpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltrvalpct($inltrvalpct = null, $comparison = null)
    {
        if (is_array($inltrvalpct)) {
            $useMinMax = false;
            if (isset($inltrvalpct['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTRVALPCT, $inltrvalpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltrvalpct['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTRVALPCT, $inltrvalpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTRVALPCT, $inltrvalpct, $comparison);
    }

    /**
     * Filter the query on the InltUnitWght column
     *
     * Example usage:
     * <code>
     * $query->filterByInltunitwght(1234); // WHERE InltUnitWght = 1234
     * $query->filterByInltunitwght(array(12, 34)); // WHERE InltUnitWght IN (12, 34)
     * $query->filterByInltunitwght(array('min' => 12)); // WHERE InltUnitWght > 12
     * </code>
     *
     * @param     mixed $inltunitwght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltunitwght($inltunitwght = null, $comparison = null)
    {
        if (is_array($inltunitwght)) {
            $useMinMax = false;
            if (isset($inltunitwght['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTUNITWGHT, $inltunitwght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltunitwght['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTUNITWGHT, $inltunitwght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTUNITWGHT, $inltunitwght, $comparison);
    }

    /**
     * Filter the query on the InltDestWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByInltdestwhse('fooValue');   // WHERE InltDestWhse = 'fooValue'
     * $query->filterByInltdestwhse('%fooValue%', Criteria::LIKE); // WHERE InltDestWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltdestwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltdestwhse($inltdestwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltdestwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTDESTWHSE, $inltdestwhse, $comparison);
    }

    /**
     * Filter the query on the InltCntrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByInltcntrqty(1234); // WHERE InltCntrQty = 1234
     * $query->filterByInltcntrqty(array(12, 34)); // WHERE InltCntrQty IN (12, 34)
     * $query->filterByInltcntrqty(array('min' => 12)); // WHERE InltCntrQty > 12
     * </code>
     *
     * @param     mixed $inltcntrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltcntrqty($inltcntrqty = null, $comparison = null)
    {
        if (is_array($inltcntrqty)) {
            $useMinMax = false;
            if (isset($inltcntrqty['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTCNTRQTY, $inltcntrqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltcntrqty['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTCNTRQTY, $inltcntrqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTCNTRQTY, $inltcntrqty, $comparison);
    }

    /**
     * Filter the query on the InltTareWght column
     *
     * Example usage:
     * <code>
     * $query->filterByInlttarewght(1234); // WHERE InltTareWght = 1234
     * $query->filterByInlttarewght(array(12, 34)); // WHERE InltTareWght IN (12, 34)
     * $query->filterByInlttarewght(array('min' => 12)); // WHERE InltTareWght > 12
     * </code>
     *
     * @param     mixed $inlttarewght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInlttarewght($inlttarewght = null, $comparison = null)
    {
        if (is_array($inlttarewght)) {
            $useMinMax = false;
            if (isset($inlttarewght['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTTAREWGHT, $inlttarewght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inlttarewght['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_INLTTAREWGHT, $inlttarewght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTTAREWGHT, $inlttarewght, $comparison);
    }

    /**
     * Filter the query on the InltFrozen column
     *
     * Example usage:
     * <code>
     * $query->filterByInltfrozen('fooValue');   // WHERE InltFrozen = 'fooValue'
     * $query->filterByInltfrozen('%fooValue%', Criteria::LIKE); // WHERE InltFrozen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltfrozen The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltfrozen($inltfrozen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltfrozen)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTFROZEN, $inltfrozen, $comparison);
    }

    /**
     * Filter the query on the InltCert column
     *
     * Example usage:
     * <code>
     * $query->filterByInltcert('fooValue');   // WHERE InltCert = 'fooValue'
     * $query->filterByInltcert('%fooValue%', Criteria::LIKE); // WHERE InltCert LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltcert The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltcert($inltcert = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltcert)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTCERT, $inltcert, $comparison);
    }

    /**
     * Filter the query on the InltCureDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInltcuredate('fooValue');   // WHERE InltCureDate = 'fooValue'
     * $query->filterByInltcuredate('%fooValue%', Criteria::LIKE); // WHERE InltCureDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltcuredate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltcuredate($inltcuredate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltcuredate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTCUREDATE, $inltcuredate, $comparison);
    }

    /**
     * Filter the query on the InltOrigBin column
     *
     * Example usage:
     * <code>
     * $query->filterByInltorigbin('fooValue');   // WHERE InltOrigBin = 'fooValue'
     * $query->filterByInltorigbin('%fooValue%', Criteria::LIKE); // WHERE InltOrigBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltorigbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByInltorigbin($inltorigbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltorigbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_INLTORIGBIN, $inltorigbin, $comparison);
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
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (is_array($dateupdtd)) {
            $useMinMax = false;
            if (isset($dateupdtd['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_DATEUPDTD, $dateupdtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateupdtd['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_DATEUPDTD, $dateupdtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (is_array($timeupdtd)) {
            $useMinMax = false;
            if (isset($timeupdtd['min'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_TIMEUPDTD, $timeupdtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timeupdtd['max'])) {
                $this->addUsingAlias(InvInvLotTableMap::COL_TIMEUPDTD, $timeupdtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvInvLotTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildInvInvLot $invInvLot Object to remove from the list of results
     *
     * @return $this|ChildInvInvLotQuery The current query, for fluid interface
     */
    public function prune($invInvLot = null)
    {
        if ($invInvLot) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvInvLotTableMap::COL_INITITEMNBR), $invInvLot->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvInvLotTableMap::COL_INTBWHSE), $invInvLot->getIntbwhse(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(InvInvLotTableMap::COL_INLTLOTSER), $invInvLot->getInltlotser(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(InvInvLotTableMap::COL_INLTBIN), $invInvLot->getInltbin(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the INV_INV_LOT table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvInvLotTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvInvLotTableMap::clearInstancePool();
            InvInvLotTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvInvLotTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvInvLotTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvInvLotTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvInvLotTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvInvLotQuery
