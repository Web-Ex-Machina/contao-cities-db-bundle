<?php

declare(strict_types=1);

/**
 * Contao Offers for Contao Open Source CMS
 * Copyright (c) 2018-2024 Web ex Machina.
 *
 * @category ContaoBundle
 *
 * @author   Web ex Machina <contact@webexmachina.fr>
 *
 * @see     https://github.com/Web-Ex-Machina/contao-offers/
 */

namespace WEM\CitiesDbBundle\Model;

use Contao\Model\Registry;

/**
 * Reads and writes items.
 */
class City extends Model
{
    /**
     * Table name.
     *
     * @var string
     */
    protected static $strTable = 'tl_wem_city';
}
