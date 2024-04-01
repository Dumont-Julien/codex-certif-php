<?php
declare(strict_types=1);

namespace php01\ex05;

class oop {

    public function __construct(
        private string $modele,
        private string $jante,
        private string $vitesse,
        private string $type
    ) {}

    public function getJante() : string {
        return $this->jante;
    }

    /**
     * @param string $jante
     */
    public function setJante(string $jante) : void {
        $this->jante = $jante;
    }

    /**
     * @return string
     */
    public function getModele() : string {
        return $this->modele;
    }

    /**
     * @param string $modele
     */
    public function setModele(string $modele) : void {
        $this->modele = $modele;
    }

    /**
     * @return string
     */
    public function getType() : string {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type) : void {
        $this->type = $type;
    }

    /**
     * @param string $vitesse
     */
    public function setVitesse(string $vitesse) : void {
        $this->vitesse = $vitesse;
    }

    /**
     * @return string
     */
    public function getVitesse() : string {
        return $this->vitesse;
    }

}