<?php
namespace Admin\Lib;

use PDO;



class Slider extends Database
{
    use UploadPhoto;
    protected static $db_table = "sliders";
    protected static $db_tables_fields = array('h5','p','photo');

    protected $id;
    protected $h5;
    protected $p;
    protected $photo;
    protected $photoImage;

   
    
    public function getId()
    {
        return $this->id;
    }

    
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getH5()
    {
        return $this->h5;
    }

    public function setH5($h5)
    {
        $this->h5 = $h5;
    }

    public function getP()
    {
        return $this->p;
    }

    public function setP($p)
    {
        $this->p = $p;
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