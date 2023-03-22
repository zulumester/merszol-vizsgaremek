<?php

class Image
{

    public $id;
    public $imageSource;
    public $imageTitle;
    public $imageAlt;
    public $imageDescription;

    public function __construct($id, $imageSource, $imageTitle, $imageAlt, $imageDescription)
    {
        $this->id = $id;
        $this->imageSource = $imageSource;
        $this->imageTitle = $imageTitle;
        $this->imageAlt = $imageAlt;
        $this->imageDescription = $imageDescription;
    }
}
