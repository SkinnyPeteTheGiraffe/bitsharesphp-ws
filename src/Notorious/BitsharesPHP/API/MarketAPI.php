<?php

namespace App\Exchanges\API\Impl\Bitshares\API;

use Notorious\BitsharesPHP\Bitshares\BitshareClient;

class MarketAPI {

    private $client;

    function __construct(BitshareClient $client) {
        $this->client = $client;
    }

    public function getTicker($asset, $base) {
        return $this->client->request(2.0, 'get_ticker', '"'.$asset.'", "'.$base.'"', 1);
    }

    public function getTimestamp($asset, $base) {
        return json_decode($this->getTicker($asset, $base))->result->time;
    }

    public function getBase($asset, $base) {
        return json_decode($this->getTicker($asset, $base))->result->base;
    }

    public function getQuote($asset, $base) {
        return json_decode($this->getTicker($asset, $base))->result->quote;
    }

    public function getLatest($asset, $base) {
        return json_decode($this->getTicker($asset, $base))->result->latest;
    }

    public function getLowestBid($asset, $base) {
        return json_decode($this->getTicker($asset, $base))->result->lowest_ask;
    }

    public function getHighestBid($asset, $base) {
        return json_decode($this->getTicker($asset, $base))->result->highest_bid;
    }

    public function getPercentChanged($asset, $base) {
        return json_decode($this->getTicker($asset, $base))->result->percent_change;
    }

    public function getBaseVolume($asset, $base) {
        return json_decode($this->getTicker($asset, $base))->result->base_volume;
    }

    public function getQuoteVolume($asset, $base) {
        return json_decode($this->getTicker($asset, $base))->result->quote_volume;
    }
}
