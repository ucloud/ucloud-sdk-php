<?php

namespace UCloud\Tests;

use PHPUnit\Framework\TestCase;
use UCloud\Core\Credential\Credential;

/**
 * Check that credential package is worked.
 */
class CredentialTest extends TestCase
{
    /**
     * Check, that signature algorithm is correct for example
     */
    public function testExample()
    {
        $cred = new Credential([
            "publicKey" => "ucloudsomeone@example.com1296235120854146120",
            "privateKey" => "46f09bb9fab4f12dfc160dae12273d5332b5debe",
        ]);

        $args = [
            "Action" => "DescribeUHostInstance",
            "Region" => "cn-bj2",
            "Limit" => 10,
        ];

        $this->assertEquals(
            'cba5cf5ec4d4233d206b1b54951e3787350a642f',
            $cred->verifyAc($args)
        );
    }
}
