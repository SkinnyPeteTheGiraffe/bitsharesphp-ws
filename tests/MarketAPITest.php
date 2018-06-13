<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Notorious\BitsharesPHP\BitshareClient;

final class MarketAPITest extends TestCase
{
    public function testGetLatest(): void
    {
		$client = new BitshareClient();
        $this->assertGreaterThan(
			0.0,
            $client->getMarketAPI()->getLatest("BRIDGE.HASH", "BRIDGE.BTC")
        );
		unset($client);
    }

	// TODO Write more tests
}
