<?php


namespace UCloud\Tests;

use PHPUnit\Framework\TestCase;
use UCloud\Core\Exception\UCloudException;
use UCloud\Core\Logger\DefaultLogger;
use UCloud\Core\Request\Request;
use UCloud\Core\Response\Response;


class ObjectTest extends TestCase
{
    public function testRequest()
    {
        $args = [
            "Name" => "foo",
            "CPU" => 1,
            "Size" => 42.0,
            "UHostIds" => ["uhost-xxx", "uhost-yyy"],
            "Led" => [
                "Enabled" => true,
            ],
            "NetworkInterface" => [
                [
                    "Bandwidth" => 42,
                ],
            ]
        ];

        $req = new Request($args);

        try {
            $req->validate();
        } catch (UCloudException $e) {
            $this->assertEmpty($e, "must no exception at here");
        }

        $req->markRequired("Region");
        $req->markRequired("Name");
        try {
            $req->validate();
        } catch (UCloudException $e) {
            $this->assertNotEmpty($e);
        }

        $this->assertEquals($args, $req->getAll());
        $this->assertEquals([
            "Name" => "foo",
            "CPU" => 1,
            "Size" => 42.0,
            "UHostIds.0" => "uhost-xxx",
            "UHostIds.1" => "uhost-yyy",
            "Led.Enabled" => true,
            "NetworkInterface.0.Bandwidth" => 42,
        ], $req->toArray());

        $req->set("foo", "bar");
        $this->assertEquals("bar", $req->get("foo"));
    }

    public function testResponse() {
        $resp = new Response([]);
        $resp->set("foo", 42);
        $this->assertEquals(42, $resp->get("foo"));
    }

    public function testLogger()
    {
        $logger = new DefaultLogger();
        $logger->info("foo");
        $logger->info("bar", ["foo" => "bar"]);
        $this->assertNotEmpty($logger);
    }
}
