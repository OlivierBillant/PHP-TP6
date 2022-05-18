<?php

class Form{

    public function __construct(){
        echo '<form action=""> <fieldset>';
    }

/**
 * Set the value of submit
 *
 * @return  self
 */ 
public function setSubmit()
{
echo '<br><button type="submit" name="submit" class="log-form-btn"><span>Login</span></button>';

return $this;
}

/**
 * Set the value of text
 *
 * @return  self
 */ 
public function setText()
{
echo '<textarea id="textArea" name="textArea" rows="3" cols="50"></textarea>';

return $this;
}

public function getForm(){
 $formContent = readfile("http://localhost/TP6/TP6-Form.php");
var_dump($formContent);
echo $formContent;
}
}
