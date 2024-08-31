<?php

declare(strict_types=1);

namespace WEM\CitiesDbBundle\Model;

use Contao\Model;

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
