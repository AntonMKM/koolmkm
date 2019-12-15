<?php

class Member
{

	private $id;
	private $login;
	private $pass;
	private $email;
	private $status;
	// private $sexe;

	function __construct(array $data = null)
	{
		if ($data) {
			$this->hydrate($data);
		}
	}

	function hydrate(array $data)
	{
		foreach ($data as $key => $value) {
			$method = 'set' . ucFirst($key);
			if (method_exists($this, $method)) {
				$this->$method($value);
			}
		}
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getLogin()
	{
		return $this->login;
	}

	public function setLogin($login)
	{
		$this->login = $login;
	}

	public function getPass()
	{
		return $this->pass;
	}

	public function setPass($pass)
	{
		$this->pass = $pass;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($status)
	{
		$this->status = $status;
	}
}
