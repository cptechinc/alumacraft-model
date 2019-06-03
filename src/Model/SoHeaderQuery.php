<?php

use Base\SoHeaderQuery as BaseSoHeaderQuery;

/**
 * Skeleton subclass for performing query and update operations on the 'SO_HEADER' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class SoHeaderQuery extends BaseSoHeaderQuery {

	/**
     * Filter the query on the Approved (OehdUserCode3) column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdusercode3('fooValue');   // WHERE OehdUserCode3 = 'fooValue'
     * $query->filterByOehdusercode3('%fooValue%', Criteria::LIKE); // WHERE Oehdusercode3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $approved   The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoHeaderQuery The current query, for fluid interface
     */
	public function filterByApproved($approved, $comparison = null) {
		return $this->filterByOehdusercode3($approved, $comparison);
     }

     /**
      * Return the first oHeader filtered by the OehdNbr column
      *
      * @param  string $ordernumber Sales Order Number
      * @return SoHeader
      */
     public function findOneByOrdernumber($ordernumber) {
          return $this->findOneByOehdnbr($ordernumber);
     }

     /**
      * Return the first oHeader filtered by the OehdNbr column
      *
      * @param  string $ordernumber Sales Order Number
      * @return SoHeader
      */
      public function filterByOrdernumber($ordernumber) {
          return $this->filterByOehdnbr($ordernumber);
     }
}
