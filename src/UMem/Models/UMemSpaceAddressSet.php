<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *  http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace UCloud\UMem\Models;

use UCloud\Core\Response\Response;

class UMemSpaceAddressSet extends Response
{
    

    /**
     * IP: UMem实例访问IP
     *
     * @return string|null
     */
    public function getIP(): string
    {
        return $this->get("IP");
    }

    /**
     * IP: UMem实例访问IP
     *
     * @param string $ip
     */
    public function setIP(string $ip)
    {
        $this->set("IP", $ip);
    }

    /**
     * Port: UMem实例访问Port
     *
     * @return integer|null
     */
    public function getPort(): int
    {
        return $this->get("Port");
    }

    /**
     * Port: UMem实例访问Port
     *
     * @param int $port
     */
    public function setPort(int $port)
    {
        $this->set("Port", $port);
    }
}
