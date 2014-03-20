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
 * Spaceship API's Snippets Model Class
 *
 * This class provides access to the "ssapi_snippets" table
 *
 */
class Snippets_model extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = 'ssapi_snippets';
	}

	public function get_snippets($order_by = 'snippet_id ASC')
	{
		return $this->search(NULL, $order_by);
	}

	public function get_factoids($order_by = 'snippet_id ASC')
	{
		$where['is_factoid'] = 1;
		return $this->search($where, $order_by);
	}

	public function get_plots($order_by = 'snippet_id ASC')
	{
		$where['is_plot'] = 1;
		return $this->search($where, $order_by);
	}

	public function get_timelines($order_by = 'snippet_id ASC')
	{
		$where['is_timeline'] = 1;
		return $this->search($where, $order_by);
	}

	public function get_quotes($order_by = 'snippet_id ASC')
	{
		$where['is_quote'] = 1;
		return $this->search($where, $order_by);
	}

	public function get_movie_titles($order_by = 'snippet_id ASC')
	{
		$where['is_movie_title'] = 1;
		return $this->search($where, $order_by);
	}
}

/* End of file snippets_model.php */
/* Location: ./application/models/snippets_model.php */