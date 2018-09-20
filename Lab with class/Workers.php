<?php
/**
 * Created by PhpStorm.
 * User: napal
 * Date: 09.09.2018
 * Time: 21:05
 */

class Workers
{
    private $name;
    private $age;
    private $salary;


    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }


//    public function showWorkerInfo($name, $age , $salary)
//    {
//        $this->name = $name;
//        $this->age = $age;
//        $this->salary = $salary;
//        echo $name;
//    }

    public function salarySummary($name, $age , $salary)
    {
        return $salary;
    }

    public function ageSalaryMult()
    {
        return $this->getSalary() * $this->getAge();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Workers
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     * @return Workers
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     * @return Workers
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
        return $this;
    }

}