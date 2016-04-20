<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$user = new Entities\User;
		$user->setUserName('Joel');
		$user->setName('Verhagen');
		$user->setPassword(md5('12345678'));
		$user->setEmailAdress('joel@joelverhagen.com');
		$user->setPhone('0123456789');

		// standard way in CodeIgniter to access a library in a controller: $this->library_name->member->memberFunction()
		// save the object to database, so that it can obtain its ID
		$this->doctrine->em->persist($user);
		$this->doctrine->em->flush();
		var_dump($user->getUserId());
		$this->load->view('welcome_message');
	}
}
