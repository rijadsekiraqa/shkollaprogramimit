<?php
namespace Admin\Lib;

use PDO;



class Description extends Database
{
    
    protected static $db_table = "description";
    protected static $db_tables_fields = array('title','paragraph');

    protected $id;
    protected $title;
    protected $paragraph;
    
    public function getId()
    {
        return $this->id;
    }

    
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getParagraph()
    {
        return $this->paragraph;
    }

    public function setParagraph($paragraph)
    {
        $this->paragraph = $paragraph;
    }
    
   
    


   



}


?>