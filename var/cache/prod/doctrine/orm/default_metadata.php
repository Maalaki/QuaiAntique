<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'App__Entity__Booking__CLASSMETADATA__' => 0,
'App__Entity__Formula__CLASSMETADATA__' => 1,
'App__Entity__Hours__CLASSMETADATA__' => 2,
'App__Entity__Menu__CLASSMETADATA__' => 3,
'App__Entity__User__CLASSMETADATA__' => 4,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Booking',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Booking',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\BookingRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'customersNb' => [
                            'fieldName' => 'customersNb',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'customers_nb',
                        ],
                        'date' => [
                            'fieldName' => 'date',
                            'type' => 'date',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'date',
                        ],
                        'arrivalTime' => [
                            'fieldName' => 'arrivalTime',
                            'type' => 'time',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'arrival_time',
                        ],
                        'allergy' => [
                            'fieldName' => 'allergy',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'allergy',
                        ],
                        'name' => [
                            'fieldName' => 'name',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'name',
                        ],
                        'email' => [
                            'fieldName' => 'email',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'email',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'customers_nb' => 'customersNb',
                        'date' => 'date',
                        'arrival_time' => 'arrivalTime',
                        'allergy' => 'allergy',
                        'name' => 'name',
                        'email' => 'email',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'customersNb' => 'customers_nb',
                        'date' => 'date',
                        'arrivalTime' => 'arrival_time',
                        'allergy' => 'allergy',
                        'name' => 'name',
                        'email' => 'email',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'booking',
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
1 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Formula',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Formula',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\FormulaRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'title' => [
                            'fieldName' => 'title',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 50,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'title',
                        ],
                        'formulaType' => [
                            'fieldName' => 'formulaType',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 50,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'formula_type',
                        ],
                        'description' => [
                            'fieldName' => 'description',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'description',
                        ],
                        'price' => [
                            'fieldName' => 'price',
                            'type' => 'float',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'price',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'title' => 'title',
                        'formula_type' => 'formulaType',
                        'description' => 'description',
                        'price' => 'price',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'title' => 'title',
                        'formulaType' => 'formula_type',
                        'description' => 'description',
                        'price' => 'price',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'formula',
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
2 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Hours',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Hours',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\HoursRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'day' => [
                            'fieldName' => 'day',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 50,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'day',
                        ],
                        'time' => [
                            'fieldName' => 'time',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 50,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'time',
                        ],
                        'afternoon' => [
                            'fieldName' => 'afternoon',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 50,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'afternoon',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'day' => 'day',
                        'time' => 'time',
                        'afternoon' => 'afternoon',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'day' => 'day',
                        'time' => 'time',
                        'afternoon' => 'afternoon',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'hours',
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
3 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Menu',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Menu',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\MenuRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'category' => [
                            'fieldName' => 'category',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 50,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'category',
                        ],
                        'title' => [
                            'fieldName' => 'title',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'title',
                        ],
                        'description' => [
                            'fieldName' => 'description',
                            'type' => 'text',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'description',
                        ],
                        'price' => [
                            'fieldName' => 'price',
                            'type' => 'float',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'price',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'category' => 'category',
                        'title' => 'title',
                        'description' => 'description',
                        'price' => 'price',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'category' => 'category',
                        'title' => 'title',
                        'description' => 'description',
                        'price' => 'price',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'menu',
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
4 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\User',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\User',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\UserRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'email' => [
                            'fieldName' => 'email',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 180,
                            'unique' => true,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'email',
                        ],
                        'roles' => [
                            'fieldName' => 'roles',
                            'type' => 'json',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'roles',
                        ],
                        'password' => [
                            'fieldName' => 'password',
                            'type' => 'string',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'password',
                        ],
                        'customersNb' => [
                            'fieldName' => 'customersNb',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'customers_nb',
                        ],
                        'allergy' => [
                            'fieldName' => 'allergy',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'allergy',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'email' => 'email',
                        'roles' => 'roles',
                        'password' => 'password',
                        'customers_nb' => 'customersNb',
                        'allergy' => 'allergy',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'email' => 'email',
                        'roles' => 'roles',
                        'password' => 'password',
                        'customersNb' => 'customers_nb',
                        'allergy' => 'allergy',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'user',
                    ],
                ],
                'entityListeners' => [
                    [
                        'prePersist' => [
                            [
                                'class' => 'App\\EntityListener\\UserListener',
                                'method' => 'prePersist',
                            ],
                        ],
                        'preUpdate' => [
                            [
                                'class' => 'App\\EntityListener\\UserListener',
                                'method' => 'preUpdate',
                            ],
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];
