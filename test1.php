<?php
/**
 * Нужно написать код, который из массива выведет то что приведено ниже в комментарии.
 */
$x = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];

function arr($val, $arr){
    if($val){
        $pop_arr = array_pop($val);
        $arr[$pop_arr] = arr($val, $arr);
    }
    return $arr;
}
$x = arr($x, array());
print_r($x);

/*
print_r($x) - должен выводить это:
Array
(
    [h] => Array
        (
            [g] => Array
                (
                    [f] => Array
                        (
                            [e] => Array
                                (
                                    [d] => Array
                                        (
                                            [c] => Array
                                                (
                                                    [b] => Array
                                                        (
                                                            [a] =>
                                                        )
                                                )
                                        )
                                )

                        )

                )

        )

);*/
