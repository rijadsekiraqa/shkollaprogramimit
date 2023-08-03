<?php
namespace Admin\Lib;

use PDO;



class Statistic extends Database
{
    protected static $db_table = "statistics";
    protected static $db_tables_fields = array('number','paragraph','icon');
    
    protected $id;
    protected $number;
    protected $paragraph;
    protected $icon;


    //emri i tabelës
    

    
    public function getId()
    {
        return $this->id;
    }

   
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getParagraph()
    {
        return $this->paragraph;
    }

    public function setParagraph($paragraph)
    {
        $this->paragraph = $paragraph;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;
    }


}





















?>