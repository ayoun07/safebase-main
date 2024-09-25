<?php

namespace Safebase\entity;

use Safebase\Controller\CntrlAppli;
use Safebase\dao\DaoAppli;
use Safebase\dao\Requete;

class Type extends DaoAppli
{
    private int $id;
    private ?string $name;

    public function __construct(?int $id,
        ?string $name,
        )
         {
        $this->id = $id;
        $this->name = $name;
         }
    
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getListType(){
        $requete = Requete::SEL_TYPE_BASE;
        $statement = $this->db->query($requete); 
        $data=$statement->fetchAll();
        return $data; 
    }
}
