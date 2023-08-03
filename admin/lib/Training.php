<?php
namespace Admin\Lib;

use PDO;



class Training extends Database
{
    use UploadPhoto;
    protected static $db_table = "trainings";
    protected static $db_tables_fields = array('title','paragraph','review','price','photo','dataefillimit');

    protected $id;
    protected $title;
    protected $paragraph;
    protected $review;
    protected $price;
    protected $photo;
    protected $photoImage;
    protected $dataefillimit;

   
    
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
        $this->title=$title;
    }

    public function getParagraph()
    {
        return $this->paragraph;
    }

    public function setParagraph($paragraph)
    {
        $this->paragraph = $paragraph;
    }
    
    public function getReview(){
        return $this->review;
    }

    public function setReview($review){
        $this->review=$review;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPhoto(){
        return $this->photo;
    }

    public function setPhoto($photo){
        $this->photo=$photo;
    }

    public function getPhotoImage()
    {
        return $this->photoImage;
    }

    public function setPhotoImage($photoImage)
    {
        $this->photoImage = $photoImage;
    }

    public function getDataefillimit()
    {
        return $this->dataefillimit;
    }

    public function setDataefillimit($dataefillimit)
    {
        $this->dataefillimit = $dataefillimit;
    }

    
    


    public function create()
    {
        try 
        {
            $this->startupLoad($this->photoImage);
            $this->photo = $this->filename;
            $uploadFile = $this->uploadFile();
            if ($uploadFile) {
                if (parent::create()) {
                    return true;
                }
            } else {
                foreach ($this->errors as $error) {
                    echo $error . "<br>";
                }
            }
        } catch (Exception $e) {
            echo "Post " . $e->getMessage();
        }
    }

    public function update()
    {
        try 
        {
            if (isset($this->photoImage)) {
                $this->uploadfile = $this->src . $this->photo;
                unlink($this->uploadfile);
                $this->startupLoad($this->photoImage);
                $this->photo = $this->filename;
                $uploadFile = $this->uploadFile();
                if ($uploadFile) {
                    if (parent::update()) {
                        return true;
                    }
                } else {
                    foreach ($this->errors as $error) {
                        echo $error . "<br>";
                    }
                }
            }else{
                if (parent::update()) {
                    return true;
                }
            }
        } catch (Exception $e) {
            echo "Post " . $e->getMessage();
        }
    }

    public function delete()
    {
        try 
        {
            if (parent::delete()) {
                $this->uploadfile = $this->src . $this->photo;
                unlink($this->uploadfile);
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Post " . $e->getMessage();
        }
    }




}


?>