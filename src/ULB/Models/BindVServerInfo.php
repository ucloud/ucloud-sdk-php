<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\ULB\Models;

use UCloud\Core\Response\Response;

class BindVServerInfo extends Response
{
    

    /**
     * VServerId: 绑定的VServerId
     *
     * @return string|null
     */
    public function getVServerId()
    {
        return $this->get("VServerId");
    }

    /**
     * VServerId: 绑定的VServerId
     *
     * @param string $vServerId
     */
    public function setVServerId($vServerId)
    {
        $this->set("VServerId", $vServerId);
    }

    /**
     * VServerName: 绑定的VServer名称
     *
     * @return string|null
     */
    public function getVServerName()
    {
        return $this->get("VServerName");
    }

    /**
     * VServerName: 绑定的VServer名称
     *
     * @param string $vServerName
     */
    public function setVServerName($vServerName)
    {
        $this->set("VServerName", $vServerName);
    }

    /**
     * Port: VServer端口
     *
     * @return integer|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: VServer端口
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->set("Port", $port);
    }

    /**
     * ULBId: ULB的ID
     *
     * @return string|null
     */
    public function getULBId()
    {
        return $this->get("ULBId");
    }

    /**
     * ULBId: ULB的ID
     *
     * @param string $ulbId
     */
    public function setULBId($ulbId)
    {
        $this->set("ULBId", $ulbId);
    }
}
