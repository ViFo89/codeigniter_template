<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$data['main_content'] = "site_view";

		$this->load->view('includes/template', $data);
	}

}

/* End of file site.php */
/* Location: ./application/controllers/site.php */