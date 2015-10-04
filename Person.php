<?php

class Person {

	protected $name;
	protected $age;


	public function __construct($name, $age){
			$this->name = $name;
			$this->age = $age;	
	}


    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
    protected function setName($name)
    {
        return $this->name = $name;
    }
}