<?php
/**
 * Copyright 2026 UCloud Technology Co., Ltd.
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
namespace UCloud\UWSC\Models;

use UCloud\Core\Response\Response;

class SocksInfo extends Response
{
    

    /**
     * Addr:
     *
     * @return string|null
     */
    public function getAddr()
    {
        return $this->get("Addr");
    }

    /**
     * Addr:
     *
     * @param string $addr
     */
    public function setAddr($addr)
    {
        $this->set("Addr", $addr);
    }

    /**
     * Port:
     *
     * @return integer|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port:
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->set("Port", $port);
    }

    /**
     * Account:
     *
     * @return string|null
     */
    public function getAccount()
    {
        return $this->get("Account");
    }

    /**
     * Account:
     *
     * @param string $account
     */
    public function setAccount($account)
    {
        $this->set("Account", $account);
    }
}
