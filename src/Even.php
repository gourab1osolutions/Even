<?php


namespace Evenodd;

class Even
{
    public function evenOdd(int $num)
    {
        if ($num%2==0) {
            return 1;
        } else {
            return 0;
        }
    }
}
