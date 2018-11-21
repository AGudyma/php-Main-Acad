<?php
/**
 * Created by PhpStorm.
 * User: napal
 * Date: 22.09.2018
 * Time: 20:44
 */

class Tag
{
    public $tag;
    public $text;
    public $attr1;
    public $attr2;


    public function show()
    {
        //Выведет <a href="index.html">ссылка</a>
        print '<a ' .$this->getAttr1().'="'.$this->getAttr2().  '">'.$this->getText().'</a>'  ;

    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getAttr1()
    {
        return $this->attr1;
    }

    /**
     * @param mixed $attr1
     */
    public function setAttr1($attr1)
    {
        $this->attr1 = $attr1;

    }

    /**
     * @return mixed
     */
    public function getAttr2()
    {
        return $this->attr2;
    }

    /**
     * @param mixed $attr2
     */
    public function setAttr2($attr2)
    {
        $this->attr2 = $attr2;
    }








}