<?php

class Person {

	protected $name;
    protected $color;


	public function __construct($name, $color){
		$this->name = $name;
        $this->color = $color;
	}

    public function getName()
    {
        return $this->name;
    }

    protected function setName($name)
    {
        return $this->name = $name;
    }

    public function getColor()
    {
        return $this->color;
    }
}