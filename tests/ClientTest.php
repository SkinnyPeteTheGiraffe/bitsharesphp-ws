<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Notorious\BitsharesPHP\BitshareClient;

final class ClientTest extends TestCase
{
    public function testSyntaxErrors(): void
    {
		$client = new BitshareClient();
        $this->assertTrue(is_object($client));
		unset($client);
    }

	// TODO Write more tests
}
