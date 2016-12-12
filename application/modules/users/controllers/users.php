<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->view('users_view');
	}
}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */
