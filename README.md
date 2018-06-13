BitsharesPHP-WS
=========================

A very basic implementation of [bitsharesjs-ws](https://github.com/bitshares/bitsharesjs-ws) written in pure PHP. Which _"can be used to easily connect to and obtain data from the Bitshares blockchain via public apis or local nodes"_.

Installation
--------
Download the package using [Composer](https://getcomposer.org/)
```dos
composer require notorious/bitsharesphp-ws
```

Usage
--------
### Market API
_app\BitsharesPHP\Example.php_
```php
<?php

namespace App\BitsharesPHP;

// Import the BitsharesClient class
use Notorious\BitsharesPHP\BitshareClient;

class Example {
  // Create local variable (Optional)
  private $client;
  
  function __construct() {
    // Instantiate the BitshareClient class instance 
    $this->client = new BitshareClient();
  }
  
  // Using CryptoBridge pairs, b-hash (HASH) and Bitcoin (BTC)
  public function echoMarketAPI() {
    //Grab the MarketAPI class instance from the client
    $market_api = $this->client->getMarketAPI();
    // Get Ticker Data
    echo $market_api->getTicker("BRIDGE.BTC", "BRIDGE.HASH");
    // Get Base Asset  => BRIDGE.BTC
    echo $market_api->getBase("BRIDGE.BTC", "BRIDGE.HASH");
    // Get Quote Asset => BRIDGE.HASH
    echo $market_api->getQuote("BRIDGE.BTC", "BRIDGE.HASH");
    // Get Lastest Price
    echo $market_api->getLatest("BRIDGE.BTC", "BRIDGE.HASH");
     // Get Current Lowest Bid
    echo $market_api->getLowestBid("BRIDGE.BTC", "BRIDGE.HASH");
     // Get Current Highest Bid
    echo $market_api->getHighestBid("BRIDGE.BTC", "BRIDGE.HASH");
     // Get Price Percent Change
    echo $market_api->getPercentChanged("BRIDGE.BTC", "BRIDGE.HASH");
     // Get Base Asset Volume
    echo $market_api->getBaseVolume("BRIDGE.BTC", "BRIDGE.HASH");
     // Get Quote Asset Volume
    echo $market_api->getQuoteVolume("BRIDGE.BTC", "BRIDGE.HASH");
  }
}
```

### Assets
```php
Coming Soon
```

Donations
--------
Like the project? Well, I like coffee! So consider buying me a cup if this project helps you out!
* BTC: `38DDHuLiRc2qLsksvEqujR7rBspBLwteSG`
* BCH: `qp0xagl3cfxpjk26mxqvhkca4s6ws5a8cswg3kwyu9`
* ETH: `0xa8C90EF48D725fC17B53C7bFf952375eaD12A445`
* LTC: `MQwhSbrY92nDyQAS9qobbTYYxh43n9nfNd`


# bitsharesphp-ws
