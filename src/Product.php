<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/5/16
 * Time: 13:57
 */
// src/Product.php
class Product
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}