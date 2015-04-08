<?php
/**
 * User: Rick Moreno
 * Date: 4/8/15
 * Time: 3:24 AM
 */

namespace GetFaircoin;


class Ticker {
    public function tick(){
        return json_decode(file_get_contents("https://getfaircoin.net/api/ticker"));
    }
}
