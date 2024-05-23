<?php

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2024, Bits Americas S.A.S
 * @date 5/13/2024
 * @version 1.0.0
 */
class ArrayFlattener {

    public static function flatten(array $array): array {

        $flatten = [];

        $test_print = function($item, $key) use (&$flatten)  {
            $flatten[$key] = $item;
        };

        array_walk_recursive($array, $test_print, $flatten);

        return $flatten;
    }

    public static function customFlatten(array $array): array {

        static
        $flatten = [];

        foreach ($array as $key => $item) {

            if (is_array($item)) {
                return self::customFlatten($item);
            }

            $flatten[$key] = $item;
        }

        return $flatten;
    }

}

$array = [
    'keyOne' => 1,
    'keyTwo' => 2,
    'nested_array' => [
        'keyThree' => 3,
        'keyFour' => 4,
        'sub' => [
            'keyFive' => 5,
        ],
    ],
];


var_dump(ArrayFlattener::customFlatten($array));
