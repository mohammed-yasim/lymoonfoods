<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lymoon extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$password = 'admin1';
		if (empty($_COOKIE['password']) || $_COOKIE['password'] !== $password) {
			$password = 'admin1';
			$redirect_after_login = '/';
			$remember_password = strtotime('+30 days');
			if (isset($_POST['password']) && $_POST['password'] == $password) {
				setcookie("password", $password, $remember_password);
				header('Location: ' . $redirect_after_login);
				exit;
			}
			echo('<!DOCTYPE html><html><head><title>Password protected</title></head><body><div style="text-align:center;margin-top:50px;">You must enter the password to view this content.<form method="POST"><input type="password" name="password"></form></div></body></html>');
			exit;
		}
	}

	public function index()
	{
		$this->load->view('lymoon/main');
	}
	public function products($name="all")
	{
		$this->load->view('lymoon/products');
	}
	public function career()
	{
		$this->load->view('lymoon/career');
	}
}
