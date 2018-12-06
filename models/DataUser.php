<?php
namespace Projet5\models;

class DataUser
{
	protected $_id;
	protected $_Nom;
	protected $_Prenom;
	protected $_Hematie;
    protected $_Hemoglob;
    protected $_Hemato;
    protected $_PN;
    protected $_PE;
    protected $_PB;
    protected $_Lympho;
    protected $_Monocy;
    protected $_Plaquette;

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

		if(isset($data['Nom']))
		{
			$this->setNom($data['Nom']);
		}

		if(isset($data['Prenom']))
		{
			$this->setPrenom($data['Prenom']);
		}

		if(isset($data['Hematie']))
		{
			$this->setHematie($data['Hematie']);
		}

		if(isset($data['Hemoglob']))
		{
			$this->setHemoglob($data['Hemoglob']);
        }
        
        if(isset($data['Hemato']))
		{
			$this->setHemato($data['Hemato']);
        }

        if(isset($data['PN']))
		{
			$this->setPN($data['PN']);
        }
        if(isset($data['PE']))
		{
			$this->setPE($data['PE']);
        }
        
        if(isset($data['PB']))
		{
			$this->setPB($data['PB']);
        }
        if(isset($data['Lympho']))
		{
			$this->setLympho($data['Lympho']);
        }
        if(isset($data['Monocy']))
		{
			$this->setMonocy($data['Monocy']);
        }
        if(isset($data['Plaquette']))
		{
			$this->setPlaquette($data['Plaquette']);
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

	public function setNom($Nom)
	{
		if(is_string($Nom))
		{
			$this->_Nom = $Nom;
		}
	}

	public function setPrenom($Prenom)
	{
		if(is_string($Prenom))
		{
			$this->_Prenom = $Prenom;
		}
	}

	public function setHematie($Hematie)
	{
		
        $this->_Hematie = $Hematie;
		
	}

	public function setHemoglob($Hemoglob)
	{
		$this->_Hemoglob = $Hemoglob;
    }
    
    public function setHemato($Hemato)
	{
        $this->_Hemato = $Hemato;
    }

    public function setPN($PN)
	{
        $this->_PN = $PN;
    }

    public function setPE($PE)
	{
        $this->_PE = $PE;
    }

    public function setPB($PB)
	{
        $this->_PB = $PB;
    }

    public function setLympho($Lympho)
	{
        $this->_Lympho = $Lympho;
    }

    public function setMonocy($Monocy)
	{
        $this->_Monocy = $Monocy;
    }

    public function setPlaquette($Plaquette)
	{
        $this->_Plaquette = $Plaquette;
    }
    
    
	

	/*GETTER*/
	public function id()
	{
		return $this->_id;
	}

	public function Nom()
	{
		return $this->_Nom;
	}

	public function Prenom()
	{
		return $this->_Prenom;
	}

	public function Hematie()
	{
		return $this->_Hematie;
    }
    
    public function Hemoglob()
	{
		return $this->_Hemoglob;
    }
    
	public function Hemato()
	{
		return $this->_Hemato;
    }
    
    public function PN()
	{
		return $this->_PN;
    }
    
    public function PE()
	{
		return $this->_PE;
    }
    
    public function PB()
	{
		return $this->_PB;
    }
    
    public function Lympho()
	{
		return $this->_Lympho;
    }
    
    public function Monocy()
	{
		return $this->_Monocy;
    }
    
    public function Plaquette()
	{
		return $this->_Plaquette;
	}

}