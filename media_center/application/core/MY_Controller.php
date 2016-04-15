<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

	public $title = '';
	// The template will use this to include default.css by default
	public $styles = array('default');

	function _output($content)
	{
		// Load the base template with output content available as $content
		$data['content'] = $content;
		echo($this->load->view('layout', $data, true));
	}
}
