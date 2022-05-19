<?php 
require_once "Form.class.php";
class Form2 extends Form{
private $formulaireEtendu;

    public function __construct()
    {
        parent::__construct();
    }


    public function setRadio(){
        $radioString = '<input type="radio" id="html" name="fav_language" value="HTML">
        <label for="html">HTML</label><br>
        <input type="radio" id="css" name="fav_language" value="CSS">
        <label for="css">CSS</label><br>
        <input type="radio" id="javascript" name="fav_language" value="JavaScript">
        <label for="javascript">JavaScript</label>' ;
        $this->formulaire = Form2::getForm();
        $this->formulaire.=$radioString;
        return $this->formulaire;
    }

}
