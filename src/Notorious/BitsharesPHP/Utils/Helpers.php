<?php

namespace Notorious\BitsharesPHP\Bitshares\Utils;

class Helpers {

    public static function generateJSONRequest($type_id, $method, $params, $id)
    {
        return '{"jsonrpc": "'.$type_id.'", "method": "'.$method.'", "params": ['.$params.'], "id": '.$id.'}';
    }

}

?>
