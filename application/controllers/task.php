<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {

  public function message($to = 'World')
	{
		$this->cli->write('Hello ' . $to);
    echo "Hello there\n";
	}
}
