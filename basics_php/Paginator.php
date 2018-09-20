<?php

class Paginator{

    const DEFAULT_PER_PAGE = 10;

   private $totalItem;
//    var $per_page = Paginator::DEFAULT_PER_PAGE; self is analog sense
    private $per_page = self::DEFAULT_PER_PAGE;
    private $current = 2;
    private $link_template;
    private $pageIndex;

    /**
     * Paginator constructor.
     * @param $totalItem
     * @param int $per_page
     * @param int $current
     * @param $link_template
     * @param $pageIndex
     */
    public function __construct($totalItem, int $per_page, int $current, $link_template, $pageIndex)
    {
        $this->totalItem = $totalItem;
        $this->per_page = $per_page;
        $this->current = $current;
        $this->link_template = $link_template;
        $this->pageIndex = $pageIndex;
    }

    function draw(){
        for ($i =1 ; $i <= $this->getPageCount();$i++) {


            if ($this->current == $i) {
                echo "<b> $i </b>";
            }
            else {echo "<a href=".$this->link_template.'?page='.$i.'>'.$i.'</a>'.PHP_EOL;}

        }

    }

    function getPageCount (){
        return ceil($this->totalItem/$this->per_page);
    }

    /**
     * @return mixed
     */
    public function getTotalItem()
    {
        return $this->totalItem;
    }

    /**
     * @param mixed $totalItem
     * @return Paginator
     */
    public function setTotalItem($totalItem)
    {
        $this->totalItem = $totalItem;
        return $this;
    }

    /**
     * @return int
     */
    public function getPerPage(): int
    {
        return $this->per_page;
    }

    /**
     * @param int $per_page
     * @return Paginator
     */
    public function setPerPage(int $per_page): Paginator
    {
        $this->per_page = $per_page;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrent(): int
    {
        return $this->current;
    }

    /**
     * @param int $current
     * @return Paginator
     */
    public function setCurrent(int $current): Paginator
    {
        $this->current = $current;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLinkTemplate()
    {
        return $this->link_template;
    }

    /**
     * @param mixed $link_template
     * @return Paginator
     */
    public function setLinkTemplate($link_template)
    {
        $this->link_template = $link_template;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param mixed $pageIndex
     * @return Paginator
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex = $pageIndex;
        return $this;
    }


}


/**
 * Created by PhpStorm.
 * User: napal
 * Date: 03.09.2018
 * Time: 19:31
 */