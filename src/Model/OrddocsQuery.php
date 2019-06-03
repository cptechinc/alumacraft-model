<?php

use Base\OrddocsQuery as BaseOrddocsQuery;

/**
 * Skeleton subclass for performing query and update operations on the 'orddocs' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class OrddocsQuery extends BaseOrddocsQuery {
	/**
     * Filter the query on the orderno column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdernumber('fooValue');   // WHERE orderno = 'fooValue'
     * $query->filterByOrdernumber('%fooValue%', Criteria::LIKE); // WHERE orderno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ordernumber The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|OrddocsQuery The current query, for fluid interface
     */
    public function filterByOrdernumber($ordernumber, $comparison = null) {
		$this->filterByOrderno($ordernumber, $comparison);
	}
	
	/**
     * Filter the query on the sessionid, orderno, title columns
     *
     * Example usage:
     * <code>
     * $query->filterByOrdernumber('fooValue');   // WHERE orderno = 'fooValue'
     * $query->filterByOrdernumber('%fooValue%', Criteria::LIKE); // WHERE orderno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ordernumber The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|OrddocsQuery The current query, for fluid interface
     */
	public function filterBySessionidOrdernumberAcknowledgements($sessionID, $ordernumber) {
		$this->filterBySessionid($sessionID);
		$this->filterByOrdernumber($ordernumber);
		$this->filterByTitle('Sales Order Acknowledgements');
		return $this;
	}
}
