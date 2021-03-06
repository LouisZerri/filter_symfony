<?php

namespace App\Data;

use App\Entity\Category;

class SearchData
{
    /**
     * @var string
     */
    public $q = '';

    /**
     * @var Category[]
     */
    public $categories = [];

    /**
     * @var null|integer
     */
    public $max;

    /**
     * @var null|integer
     */
    public $min;

    /**
     * @var boolean
     */
    public $promo = false;

    /**
     * @var int
     */
    public $page = 1;




}