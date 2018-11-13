<?php

class User
{
	protected $_id;
	protected $_nom;
	protected $_prenom;
	protected $_email;
	protected $_dateBirth;

	public function __construct($data = [])
	{
		if(!empty($data))
		{
			$this->hydrate($data);
		}
		
	}

	public function hydrate($data = [])
	{
		if(isset($data['id']))
		{
			$this->setId($data['id']);
		}

		if(isset($data['nom']))
		{
			$this->setNom($data['nom']);
		}

		if(isset($data['prenom']))
		{
			$this->setPrenom($data['prenom']);
		}

		if(isset($data['email']))
		{
			$this->setEmail($data['email']);
		}

		if(isset($data['dateBirth']))
		{
			$this->setDateBirth($data['dateBirth']);
		}
	}

	/*SETTER*/
	public function setId($id)
	{
		$id = (int) $id;
		if(is_int($id))
		{
			$this->_id = $id;
		}
	}

	public function setNom($nom)
	{
		if(is_string($nom))
		{
			$this->_nom = $nom;
		}
	}

	public function setPrenom($prenom)
	{
		if(is_string($prenom))
		{
			$this->_prenom = $prenom;
		}
	}

	public function setEmail($email)
	{
		if(is_string($email))
		{
			$this->_email = $email;
		}
	}

	public function setDateBirth($dateBirth)
	{
		$this->_dateBirth = $dateBirth;
	}

	/*GETTER*/
	public function id()
	{
		return $this->_id;
	}

	public function nom()
	{
		return $this->_nom;
	}

	public function prenom()
	{
		return $this->_prenom;
	}

	public function email()
	{
		return $this->_email;
	}

	public function dateBirth()
	{
		return $this->_dateBirth;
	}

}