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

class VIPSet extends Response
{
    

    /**
     * VIP: 虚拟ip
     *
     * @return string|null
     */
    public function getVIP()
    {
        return $this->get("VIP");
    }

    /**
     * VIP: 虚拟ip
     *
     * @param string $vip
     */
    public function setVIP($vip)
    {
        $this->set("VIP", $vip);
    }

    /**
     * VIPId: 虚拟ip id
     *
     * @return string|null
     */
    public function getVIPId()
    {
        return $this->get("VIPId");
    }

    /**
     * VIPId: 虚拟ip id
     *
     * @param string $vipId
     */
    public function setVIPId($vipId)
    {
        $this->set("VIPId", $vipId);
    }

    /**
     * VPCId: VPC id
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPC id
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }


}
