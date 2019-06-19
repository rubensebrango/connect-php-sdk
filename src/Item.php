<?php

/**
 * This file is part of the Ingram Micro Cloud Blue Connect SDK.
 *
 * @copyright (c) 2019. Ingram Micro. All Rights Reserved.
 */

namespace Connect;

/**
 * Class Item
 * @package Connect
 */
class Item extends Model
{
    /**
     * @var string
     */
    public $display_name;
    /**
     * @var string
     */
    public $global_id;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $item_type;
    /**
     * @var string
     */
    public $mpn;
    /**
     * @var string
     */
    public $period;
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var int
     */
    public $old_quantity;

    /**
     * @var Renewal
     */
    public $renewal;
}
