<?php
 include_once('include/DBconnection.php');
class Slider extends dbconnection{

    public $image1_slider;
    public $image2_slider;
    public $image3_slider;
    public $image4_slider;


    

    public function updateSlider()
    {
       $query ="update slider set image1_slider	='$this->image1_slider',
                                  image2_slider	='$this->image2_slider',
                                  image3_slider	='$this->image3_slider',
                                  image4_slider	='$this->image4_slider'
                                  WHERE id_slider= 1 ";
                                           
        $this->performQuery($query);


    } 

    public function showSlider()
    {
        $query  ="select * from slider";
        $result = $this->performQuery($query);
        return $this->fetchAll($result);
    }


}