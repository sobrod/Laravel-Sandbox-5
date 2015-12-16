
<?php

class Task
{
    //Properties
    
    public $title;      //Task title
    public $description; //Task description
    public $isComplete; //Task completion flag
    
    //Constructor
    
    public function __construct($title, $desc)
    {
        //Init properties
        $this->title = $title;
        $this->description = $desc;
        $this->isComplete = false;  //Incomplete by default
    }
    
    //Methods
    
    public function complete()
    {
        $this->isComplete = true;
    }
}


?>
