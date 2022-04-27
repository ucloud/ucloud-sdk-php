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

namespace UCloud\UEC\Models;

use UCloud\Core\Response\Response;

use UCloud\UEC\Models\DescribeUEcSubnetResponse;

class SubnetInfo extends Response
{

    /**
     * SubnetId: 子网ID
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网ID
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }
    /**
     * SubnetName: 子网名称
     *
     * @return string|null
     */
    public function getSubnetName()
    {
        return $this->get("SubnetName");
    }

    /**
     * SubnetName: 子网名称
     *
     * @param string $subnetName
     */
    public function setSubnetName(string $subnetName)
    {
        $this->set("SubnetName", $subnetName);
    }
    /**
     * IdcId: 机房ID
     *
     * @return string|null
     */
    public function getIdcId()
    {
        return $this->get("IdcId");
    }

    /**
     * IdcId: 机房ID
     *
     * @param string $idcId
     */
    public function setIdcId(string $idcId)
    {
        $this->set("IdcId", $idcId);
    }
    /**
     * CIDR: 子网cidr
     *
     * @return string|null
     */
    public function getCIDR()
    {
        return $this->get("CIDR");
    }

    /**
     * CIDR: 子网cidr
     *
     * @param string $cidr
     */
    public function setCIDR(string $cidr)
    {
        $this->set("CIDR", $cidr);
    }
    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }
    /**
     * Comment: 备注
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->get("Comment");
    }

    /**
     * Comment: 备注
     *
     * @param string $comment
     */
    public function setComment(string $comment)
    {
        $this->set("Comment", $comment);
    }
    /**
     * TotalIpCnt: 总ip数
     *
     * @return integer|null
     */
    public function getTotalIpCnt()
    {
        return $this->get("TotalIpCnt");
    }

    /**
     * TotalIpCnt: 总ip数
     *
     * @param int $totalIpCnt
     */
    public function setTotalIpCnt(int $totalIpCnt)
    {
        $this->set("TotalIpCnt", $totalIpCnt);
    }
    /**
     * AvailableIPCnt: 可用ip数
     *
     * @return integer|null
     */
    public function getAvailableIPCnt()
    {
        return $this->get("AvailableIPCnt");
    }

    /**
     * AvailableIPCnt: 可用ip数
     *
     * @param int $availableIPCnt
     */
    public function setAvailableIPCnt(int $availableIPCnt)
    {
        $this->set("AvailableIPCnt", $availableIPCnt);
    }
}
