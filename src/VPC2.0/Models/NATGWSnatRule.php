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

namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

use UCloud\VPC\Models\DescribeSnatRuleResponse;

class NATGWSnatRule extends Response
{

    /**
     * SnatIp: EIP地址，如106.76.xx.xx
     *
     * @return string|null
     */
    public function getSnatIp()
    {
        return $this->get("SnatIp");
    }

    /**
     * SnatIp: EIP地址，如106.76.xx.xx
     *
     * @param string $snatIp
     */
    public function setSnatIp(string $snatIp)
    {
        $this->set("SnatIp", $snatIp);
    }
    /**
     * SourceIp: 资源的内网IP地址
     *
     * @return string|null
     */
    public function getSourceIp()
    {
        return $this->get("SourceIp");
    }

    /**
     * SourceIp: 资源的内网IP地址
     *
     * @param string $sourceIp
     */
    public function setSourceIp(string $sourceIp)
    {
        $this->set("SourceIp", $sourceIp);
    }
    /**
     * SubnetworkId: SourceIp所属的子网id
     *
     * @return string|null
     */
    public function getSubnetworkId()
    {
        return $this->get("SubnetworkId");
    }

    /**
     * SubnetworkId: SourceIp所属的子网id
     *
     * @param string $subnetworkId
     */
    public function setSubnetworkId(string $subnetworkId)
    {
        $this->set("SubnetworkId", $subnetworkId);
    }
    /**
     * Name: snat规则名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: snat规则名称
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }
}
