<?php

namespace FruitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 */
class Client
{
    /**
     * @var int
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }
}
