<?php

namespace classes {
    class Spliter
    {
        public static function SplitList(array $list, int $n): array
        {
            $result = [];
            $pos = 0;
            $length = count($list);
            $rem = $length % $n;
            $count = $n < $length ? (int)($length / $n) : 1;
            $num = $n <= $length ? $n : $length;
            for ($i = 0; $i < $num; $i++) {
                $len = 0;
                if ($rem > 0) {
                    $len = $count + 1;
                    $rem--;
                } else {
                    $len = $count;
                }
                $result[$i] = array_slice($list, $pos, $len);
                $pos += $len;
            }
            return $result;
        }
    }
}