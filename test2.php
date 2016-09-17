<?php
/**
 * Написать функцию которая из этого массива
 */
$data1 = [
    'parent.child.field' => 1,
    'parent.child.field2' => 2,
    'parent2.child.name' => 'test',
    'parent2.child2.name' => 'test',
    'parent2.child2.position' => 10,
    'parent3.child3.position' => 10,
];

function test2($data1){
    $result_array = array();
    foreach($data1 as $key => $val){

        $arr_key = explode(".", $key);
        $array_data = arr($arr_key,array(), $val);
        $result_array = array_merge_recursive($result_array, $array_data);
    }
    return $result_array;
}

function arr($arr_key, $arr, $val){
    if($arr_key){
        $pop_arr = array_shift($arr_key);
        $arr[$pop_arr] = arr($arr_key, $arr, $val);
    }
    else {
        $arr=$val;
    }
    return $arr;
}


var_dump(test2($data1));

//сделает такой и наоборот
$data = [
    'parent' => [
        'child' => [
            'field' => 1,
            'field2' => 2,
        ]
    ],
    'parent2' => [
        'child' => [
            'name' => 'test'
        ],
        'child2' => [
            'name' => 'test',
            'position' => 10
        ]
    ],
    'parent3' => [
        'child3' => [
            'position' => 10
        ]
    ],
];

