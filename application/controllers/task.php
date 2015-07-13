<?php

class Task extends CI_Controller {

  public function message($to = 'World')
	{
		$this->cli->write('Hello ' . $to);
    echo "Hello there\n";
	}
}
