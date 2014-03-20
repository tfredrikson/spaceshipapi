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
 * Spaceship API Pages Controller
 *
 * This class controls the pages available throughout the Empire
 *
 */
class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pages_model');
	}


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/pages
	 *	- or -  
	 * 		http://example.com/index.php/pages/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/pages/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// get secret
		$secret = $this->input->get('secret');
		$result_array = $this->pages_model->get_page($secret);
		if(empty($result_array))
		{
			show_404();
		}

		// now load the data for the view
		$data['pages'] = array_shift($result_array);

		$data['site_domain'] = 'spaceshipapi.com'; // initialized
		$data['uri_of_this_page'] = ''; // initialized
		$data['display_first_gen'] = false; // initialized

		// do some processing based on which site it is
		if(isset($data['pages']['folder']))
		{
			// snippets page
			$data['snippets'] = Array();  // initialized
			switch( $data['pages']['folder'] )
			{
				case 'wewihapahe/snippets':
					$this->load->model('snippets_model');
					$data['snippets'] = $this->snippets_model->get_snippets();
					$data['snippets_title'] = "The list of Snippets currently tracked by the Empire";
					break;
				case 'wewihapahe/factoids':
					$this->load->model('snippets_model');
					$data['snippets'] = $this->snippets_model->get_factoids();
					$data['snippets_title'] = "The list of Factoids currently tracked by the Empire";
					break;
				case 'wewihapahe/timeline':
					$this->load->model('snippets_model');
					$data['snippets'] = $this->snippets_model->get_timelines();
					$data['snippets_title'] = "The list of Timeline Snippets currently tracked by the Empire";
					break;
				case 'wewihapahe/quotes':
					$this->load->model('snippets_model');
					$data['snippets'] = $this->snippets_model->get_quotes();
					$data['snippets_title'] = "The list of Quotes currently tracked by the Empire";
					break;
				case 'wewihapahe/plot':
					$this->load->model('snippets_model');
					$data['snippets'] = $this->snippets_model->get_plots();
					$data['snippets_title'] = "The list of Plot Snippets currently tracked by the Empire";
					break;
				case 'wewihapahe/trilogies':
					$this->load->model('snippets_model');
					$data['snippets'] = $this->snippets_model->get_movie_titles();
					$data['snippets_title'] = "The list of Movie Titles currently tracked by the Empire";
					break;
				case 'wewihapahe/people':
					$this->load->model('people_model');
					$data['snippets'] = $this->people_model->get_people();
					$data['snippets_title'] = "The list of People currently tracked by the Empire";
					break;
			}

			// get URL info and determine whether to show 1st gen link
			if( strstr( $data['pages']['folder'], "/", true ) !== FALSE )
			{
				$data['site_domain'] = strstr( $data['pages']['folder'], "/", true ) . ".com";
				$data['uri_of_this_page'] = substr( $data['pages']['folder'], strpos( $data['pages']['folder'], '/' ) ); // initialized
				$data['display_first_gen'] = false;
			}
			else
			{
				// only 1 site is not ".com"
				if( $data['pages']['folder'] == 'testingapparatus' )
				{
					$data['site_domain'] = $data['pages']['folder'] . ".org";
				}
				else
				{
					$data['site_domain'] = $data['pages']['folder'] . ".com";
				}
				$data['display_first_gen'] = true;
			}
		}

		// build URL for files outside of the api folder
		$URL_to_site_files = str_replace( '/api', '', $this->config->base_url() );
		if(substr($URL_to_site_files, -1) != '/')
			$URL_to_site_files .= '/';
		$data['URL_to_site_files'] = $URL_to_site_files;

		// load helpers
		$this->load->helper('url');

		// get sub views
		$data['production'] = $this->load->view('templates/production', '', true);
		$data['copyright'] = $this->load->view('templates/copyright', '', true);
		$data['mailchimp'] = $this->load->view('templates/mailchimp', $data, true);
		$data['google_analytics'] = $this->load->view('templates/google_analytics', $data, true);

		// load the links with and without the divider
		$data['divider'] = true;
		$data['saga_links_divider'] = $this->load->view('templates/saga_links', $data, true);
		$data['divider'] = false;
		$data['saga_links'] = $this->load->view('templates/saga_links', $data, true);

		// now load the top level view
		$this->load->view('pages_empire', $data);
	}


	/**
	 * First Generation Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/pages/first_generation
	 *	- or -  
	 * 		http://example.com/index.php/pages/first_generation
	 *	- or -
	 */
	public function first_generation()
	{
		// get secret
		$secret = $this->input->get('secret');
		$result_array = $this->pages_model->get_page($secret);
		if(empty($result_array))
		{
			show_404();
		}

		// now load the data for the view
		$data['pages'] = array_shift($result_array);

		// get wordle url
		$wordle_filename = 'wordle.jpg';
		$wordle_folder = 'spaceshipapi'; // initialized

		// and get style.css url
		$style_filename = 'style.css';
		$style_folder = 'api/includes'; // initialized

		$data['site_domain'] = 'spaceshipapi.com'; // initialized

		// do some processing based on which site it is
		if(isset($data['pages']['folder']))
		{
			$path_to_wordle = '../images/'.$data['pages']['folder'] . "/" . $wordle_filename;
			if(file_exists($path_to_wordle))
				$wordle_folder = $data['pages']['folder'];

			$path_to_style = '../images/'.$data['pages']['folder'] . "/" . $style_filename;
			if(file_exists($path_to_style))
				$style_folder = 'images/'. $data['pages']['folder'];

			if( strstr( $data['pages']['folder'], "/", true ) !== FALSE )
				$data['site_domain'] = strstr( $data['pages']['folder'], "/", true ) . ".com";
			else
				$data['site_domain'] = $data['pages']['folder'] . ".com";
		}

		// build URL for files outside of the api folder
		$URL_to_site_files = str_replace( '/api', '', $this->config->base_url() );
		if(substr($URL_to_site_files, -1) != '/')
			$URL_to_site_files .= '/';

		$data['wordle_url'] = $URL_to_site_files.'images/'. $wordle_folder . "/" . $wordle_filename;
		$data['style_url'] =  $URL_to_site_files. $style_folder . "/" . $style_filename;
		$data['wordle_html'] = str_replace( ',', '<br /> ', $data['pages']['keywords'] );

		// load helpers
		$this->load->helper('url');

		// get sub views
		$data['production'] = $this->load->view('templates/production', '', true);
		$data['copyright'] = $this->load->view('templates/copyright', '', true);
		$data['the_links'] = $this->load->view('templates/the_links', '', true);
		$data['w3c_tests'] = $this->load->view('templates/w3c_tests', $data, true);
		$data['mailchimp'] = $this->load->view('templates/mailchimp', $data, true);
		$data['google_analytics'] = $this->load->view('templates/google_analytics', $data, true);

		// now load the top level view
		$this->load->view('first_generation', $data);
	}



}
/* End of file pages.php */
/* Location: ./application/controllers/pages.php */