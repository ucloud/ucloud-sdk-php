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
namespace UCloud\UDPN\Apis;

use UCloud\Core\Request\Request;

class ModifyUDPNBandwidthRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ModifyUDPNBandwidth"]);
        $this->markRequired("UDPNId");
        $this->markRequired("Bandwidth");
    }

    

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * UDPNId: UDPN Id
     *
     * @return string|null
     */
    public function getUDPNId()
    {
        return $this->get("UDPNId");
    }

    /**
     * UDPNId: UDPN Id
     *
     * @param string $udpnId
     */
    public function setUDPNId($udpnId)
    {
        $this->set("UDPNId", $udpnId);
    }

    /**
     * Bandwidth: 调整后专线带宽, 单位为Mbps，取值范围为大于等于2且小于等于1000([2-1000])的整数
     *
     * @return int|null
     */
    public function getBandwidth()
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 调整后专线带宽, 单位为Mbps，取值范围为大于等于2且小于等于1000([2-1000])的整数
     *
     * @param int $bandwidth
     */
    public function setBandwidth($bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * CouponId: 代金劵 ID
     *
     * @return string|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 代金劵 ID
     *
     * @param string $couponId
     */
    public function setCouponId($couponId)
    {
        $this->set("CouponId", $couponId);
    }


}
