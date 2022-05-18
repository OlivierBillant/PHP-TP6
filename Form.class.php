<?php

class Form
{
    //On utilise .= pour concaténer une string avec un nouveau texte.
    private $formulaire;

    public function __construct()
    {
        // echo '<form action=""> <fieldset>';
        $this->formulaire = '<form action=""> <fieldset>';
        //echo $this->formulaire;
    }

    /**
     * Set the value of submit
     *
     * @return  self
     */
    public function setSubmit()
    {
        // echo '<br><button type="submit" name="submit" class="log-form-btn"><span>Login</span></button>';
        $this->formulaire.='<br><button type="submit" name="submit" class="log-form-btn"><span>Login</span></button>';
        return $this->formulaire;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */
    public function setText()
    {
        // echo '<textarea id="textArea" name="textArea" rows="3" cols="50"></textarea>';
        $this->formulaire.='<textarea id="textArea" name="textArea" rows="3" cols="50"></textarea>';
        return $this->formulaire;
    }

    public function getForm(){
        return $this->formulaire;
    }
}
