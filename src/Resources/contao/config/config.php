<?php

declare(strict_types=1);

// Backend modules
array_insert(
    $GLOBALS['BE_MOD']['settings'],
    2,
    [
        'wem-cities-db' => [
            'tables' => ['tl_wem_city'],
        ],
    ]
);

// Models
$GLOBALS['TL_MODELS'][WEM\CitiesDbBundle\Model\City::getTable()] = WEM\CitiesDbBundle\Model\City::class;