<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_ControllerAdmin 
{
	public function index()
	{	
		$this->layout->subfolder('admin');
		$this->layout->output();
	}

	public function autenticar()
	{
		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
        $this->form_validation->set_rules('senha', 'Senha', 'required',
                array('required' => 'You must provide a %s.')
        );
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('myform');
        }
        else
        {
                $this->load->view('formsuccess');
        }
	}
}