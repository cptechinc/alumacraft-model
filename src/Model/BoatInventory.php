<?php

use Base\BoatInventory as BaseBoatInventory;

/**
 * Skeleton subclass for representing a row from the 'boat_inventory' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class BoatInventory extends BaseBoatInventory {
	const REGISTERED_TRUE  = 'Y';
	const REGISTERED_FALSE = 'N';
	const REGISTERED_SOLD  = 'S';

	const REGISTERED_ALLOWED = array('Y', 'N', 'S');
}
