<?php

namespace src;

class Map {

    /**
     * Global settings
     */
    public $difficulty = "";
    public $theme = "";
    public $longueur = 0;
    public $largeur = 0;

    /**
     * Area settings
     */
    public $area_name = "";


    public function __construct(){}


    /**
     * Init map settings
     * @param $difficulty
     * @param $theme
     */
    function initMapSettings($difficulty, $theme, $longueur, $largeur){

        $this->setDifficulty($difficulty);
        $this->setTheme($theme);
        $this->setLargeur($largeur);
        $this->setLongueur($longueur);
    }

    /**
     * @param $difficulty_choice
     * @return string
     */
    function setDifficulty($difficulty_choice): string {
        return $this->difficulty = $difficulty_choice;
    }

    /**
     * @return string
     */
    function getDifficulty(): string{
        return $this->difficulty;
    }

    /**
     * @param $theme_choice
     */
    function setTheme($theme_choice)
    {
        $this->theme = $theme_choice;
    }

    /**
     * @return string
     */
    function getTheme():string {
        return $this->theme;
    }


    function setLongueur($longueur){
        $this->longueur = $longueur;
    }
    function getLongueur(){
        return $this->longueur;
    }

    function setLargeur($largeur){
        $this->largeur = $largeur;
    }
    function getLargeur(){
        return $this->largeur;
    }

}