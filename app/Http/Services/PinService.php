<?php

namespace App\Http\Services;

class PinService
{
    public function generate()
    {
        $rejectedPins = [
            2222,
            3333,
            4444,
            5555,
            6666,
            7777,
            8888
        ];

        $pin = mt_rand(1112, 9998);

        while (in_array($pin, $rejectedPins)) {
            $pin = mt_rand(1112, 9998);
        }

        return $pin;
    }
}
