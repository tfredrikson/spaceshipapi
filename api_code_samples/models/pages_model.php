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
 * Spaceship API's Pages Model Class
 *
 * This class provides access to the "ssapi_pages" table
 *
 */
 class Pages_model extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = 'ssapi_pages';
	}

	public function get_page($secret = FALSE)
	{
		if($secret == FALSE)
		{
			// load default page
			$where['folder'] = 'spaceshipapi';
		}
		else
		{
			$where['secret'] = $secret;
		}
		return $this->search($where);
	}

}

/* End of file pages_model.php */
/* Location: ./application/models/pages_model.php */