 /**
 * @author Tamara Jean (TJ) Fredrikson http://www.tfredrikson.com
 * @copyright Copyright (C) 2013 TJ Fredrikson
 * @license http://creativecommons.org/licenses/by-sa/3.0/ Attribution-ShareAlike 3.0
 *
 * The Spaceship API uses the CodeIgnitor Framework  
 * Copyright (c) 2008 - 2011, EllisLab, Inc. All rights reserved.
 *
 */

// no direct access
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Spaceship API's People Model Class
 *
 * This class provides access to the "ssapi_people" table
 *
 */
class People_model extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = 'ssapi_people';
	}

	public function get_people($order_by = 'people_id ASC')
	{
		return $this->search(NULL, $order_by);
	}

}

/* End of file pages_model.php */
/* Location: ./application/models/pages_model.php */