<?php

class Dragon extends Personnages implements Monstres {
    private ?string $type;

    public function __construct() {
        $this->setType("dragon");
        $this->setHp(100);
        $this->setAtt(40);
        $this->setDef(30);
        $this->setVit(30);
    }
    
    public function attaque(Heros $hero) {
        $atk = round(($this->getAtt()-(($this->getAtt()/100)*$hero->defense())));
        if ($atk > $hero->getHp()) {
            $hero->setHp(0);
        } else {
        $hero->setHp(($hero->getHp() - $atk)); }
        echo "Attaque réussie de ".$this->getType();
        echo "<br/><br/>";
        echo "Dégats portés : ".$atk;
        echo "<br/><br/>";
        echo "La vie de ".$hero->getNom()." : ".$hero->getHp();
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}