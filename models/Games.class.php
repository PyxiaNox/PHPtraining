<?php
class Games{
    private $id;
    private $title;
    private $illustration;
    private $type;
    private $year;
    private $platform;

    public function __construct($id, $title, $illustration, $type, $year, $platform)
    {
        $this->id = $id;
        $this->title = $title;
        $this->illustration = $illustration;
        $this->type = $type;
        $this->year = $year;
        $this->platform = $platform;
    }

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

    public function getIllustration()
    {
        return $this->illustration;
    }
    public function setIllustration($illustration)
    {
        $this->illustration = $illustration;
    }

    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getYear()
    {
        return $this->year;
    }
    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getPlatform()
    {
        return $this->platform;
    }
    public function setPlatform($platform)
    {
        $this->platform = $platform;
    }
}