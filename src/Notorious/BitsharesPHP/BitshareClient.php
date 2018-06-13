<?php

namespace Notorious\BitsharesPHP\Bitshares;

use WebSocket\Client;
use Notorious\BitsharesPHP\Bitshares\API\MarketAPI;
use Notorious\BitsharesPHP\Bitshares\Utils\Helpers;


class BitshareClient {

    const BIT_SHARE_WS = "wss://bitshares.openledger.info/ws";

    private $client;
    private $market_api;

    function __construct() {
        $this->client = new Client(self::BIT_SHARE_WS);
        $this->market_api = new MarketAPI($this);
    }

    public function request($type_id, $method, $params, $id) {
        $this->client->send(Helpers::generateJSONRequest($type_id, $method, $params, $id));
        return $this->client->receive();
    }

    public function getMarketAPI() {
        return $this->market_api;
    }
}

?>
