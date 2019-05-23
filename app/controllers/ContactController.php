<?php

use Phalcon\Mvc\Controller;

class ContactController extends Controller
{
	public function indexAction()
	{
	}

	public function submitAction()
	{
		$Username = $this->request->get('Username');
		$Birth= $this->request->get('Birth');
		$Biography = $this->request->get('Biography');
		$Interests = $this->request->get('Interests');

		$this->view->Username = $Username;
		$this->view->Birth = $Birth;
		$this->view->Biography = $Biography;
		$this->view->Interests = $Interests;
	}
}