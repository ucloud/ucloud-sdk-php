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
namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

class IPv6NetworkInfo extends Response
{
    

    /**
     * IPv6Network: IPv6网段
     *
     * @return string|null
     */
    public function getIPv6Network()
    {
        return $this->get("IPv6Network");
    }

    /**
     * IPv6Network: IPv6网段
     *
     * @param string $iPv6Network
     */
    public function setIPv6Network($iPv6Network)
    {
        $this->set("IPv6Network", $iPv6Network);
    }

    /**
     * OperatorName: 类型
     *
     * @return string|null
     */
    public function getOperatorName()
    {
        return $this->get("OperatorName");
    }

    /**
     * OperatorName: 类型
     *
     * @param string $operatorName
     */
    public function setOperatorName($operatorName)
    {
        $this->set("OperatorName", $operatorName);
    }

    /**
     * IPv6SubnetCount: IPv6子网数量
     *
     * @return integer|null
     */
    public function getIPv6SubnetCount()
    {
        return $this->get("IPv6SubnetCount");
    }

    /**
     * IPv6SubnetCount: IPv6子网数量
     *
     * @param int $iPv6SubnetCount
     */
    public function setIPv6SubnetCount($iPv6SubnetCount)
    {
        $this->set("IPv6SubnetCount", $iPv6SubnetCount);
    }
}
