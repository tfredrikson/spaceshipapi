 /**
 * @author Tamara Jean (TJ) Fredrikson http://www.tfredrikson.com
 * @copyright Copyright (C) 2013 TJ Fredrikson
 * @license http://creativecommons.org/licenses/by-sa/3.0/ Attribution-ShareAlike 3.0
 *
 * This model was adapted by TJF on 2013-07-25 from:
 * http://thephpcode.com/blog/codeigniter/a-smart-codeigniter-model
 *
 * The Spaceship API uses the CodeIgnitor Framework  
 * Copyright (c) 2008 - 2011, EllisLab, Inc. All rights reserved.
 *
 */

// no direct access
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Spaceship API's Base Model Class
 *
 * This class provides database functions used by all of the child Model files:
 *
 *    search($where = NULL, $order_by = NULL, $tablename = "", $limit = NULL, $offset = NULL)
 *    save($data, $tablename = "")
 *	      determines if insert or update is necessary and responds accordingly
 *    insert($data, $tablename = "")
 *	  update($data, $where, $tablename = "")
 *	  delete($where, $tablename = "")
 *
 * For possible datatypes used in the above methods (for $data, $where, etc.)
 * see: http://ellislab.com/codeigniter/user-guide/database/active_record.html
 *
 */
class MY_Model extends CI_Model {
 
        var $table = "";
 
        function __construct()
        {
                parent::__construct();
                $this->load->database();
        }
 
		function search($where = NULL, $order_by = NULL, $tablename = "", $limit = NULL, $offset = NULL)
		{
			if($tablename == "")
			{
				$tablename = $this->table;
			}
			if($where != NULL)
				$this->db->where($where);

			if($order_by != NULL)
				$this->db->order_by($order_by);

			$query = $this->db->get($tablename, $limit, $offset);
			return $query->result_array();
		}

		public function save($data, $tablename = "")
		{
			if($tablename == "")
			{
				$tablename = $this->table;
			}
			$op = 'update';
			$keyExists = FALSE;
			$fields = $this->db->field_data($tablename);
			foreach ($fields as $field)
			{
				if($field->primary_key == 1)
				{
					$keyExists = TRUE;
					if(isset($data[$field->name]))
					{
						$this->db->where($field->name, $data[$field->name]);
					}
					else
					{
						$op = 'insert';
					}
				}
			}

			if($keyExists && $op=='update')
			{
				$this->db->set($data);
				$this->db->update($tablename);
				if($this->db->affected_rows() == 1)
				{
					return $this->db->affected_rows();
				}
			}

			$this->db->insert($tablename, $data);

			return $this->db->affected_rows();
		}

 
        function insert($data, $tablename = "")
		{
			if($tablename == "")
				$tablename = $this->table;
			$this->db->insert($tablename,$data);
			return $this->db->affected_rows();
		}

		function update($data, $where, $tablename = "")
		{
			if($tablename == "")
				$tablename = $this->table;
			$this->db->where($where);
			$this->db->update($tablename, $data);
			return $this->db->affected_rows();
		}

		function delete($where, $tablename = "")
		{
			if($tablename == "")
				$tablename = $this->table;
			$this->db->where($where);
			$this->db->delete($tablename);
			return $this->db->affected_rows();
		}
}
 
/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */