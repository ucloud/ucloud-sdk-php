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
namespace UCloud\PathX\Models;

use UCloud\Core\Response\Response;

class UPathInfo extends Response
{
    

    /**
     * PostPaid: 是否为后付费实例
     *
     * @return boolean|null
     */
    public function getPostPaid()
    {
        return $this->get("PostPaid");
    }

    /**
     * PostPaid: 是否为后付费实例
     *
     * @param boolean $postPaid
     */
    public function setPostPaid($postPaid)
    {
        $this->set("PostPaid", $postPaid);
    }

    /**
     * ChargeType: 计费模式，默认为Month 按月收费,可选范围['Month','Year','Dynamic']
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式，默认为Month 按月收费,可选范围['Month','Year','Dynamic']
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Name: UPath实例名字
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: UPath实例名字
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * UPathId: UPath加速线路实例ID
     *
     * @return string|null
     */
    public function getUPathId()
    {
        return $this->get("UPathId");
    }

    /**
     * UPathId: UPath加速线路实例ID
     *
     * @param string $uPathId
     */
    public function setUPathId($uPathId)
    {
        $this->set("UPathId", $uPathId);
    }

    /**
     * Bandwidth: 带宽，单位Mbps
     *
     * @return int|null
     */
    public function getBandwidth()
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 带宽，单位Mbps
     *
     * @param int $bandwidth
     */
    public function setBandwidth($bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * LineId: 选择的线路
     *
     * @return string|null
     */
    public function getLineId()
    {
        return $this->get("LineId");
    }

    /**
     * LineId: 选择的线路
     *
     * @param string $lineId
     */
    public function setLineId($lineId)
    {
        $this->set("LineId", $lineId);
    }

    /**
     * UGAList: 与该UPath绑定的UGA列表
     *
     * @return PathXUGAInfo[]|null
     */
    public function getUGAList()
    {
        $items = $this->get("UGAList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new PathXUGAInfo($item));
        }
        return $result;
    }

    /**
     * UGAList: 与该UPath绑定的UGA列表
     *
     * @param PathXUGAInfo[] $ugaList
     */
    public function setUGAList(array $ugaList)
    {
        $result = [];
        foreach ($ugaList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * CreateTime: UPath创建的时间，10位时间戳
     *
     * @return int|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: UPath创建的时间，10位时间戳
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpireTime: UPath的过期时间，10位时间戳
     *
     * @return int|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: UPath的过期时间，10位时间戳
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * LineFromName: 线路入口名称
     *
     * @return string|null
     */
    public function getLineFromName()
    {
        return $this->get("LineFromName");
    }

    /**
     * LineFromName: 线路入口名称
     *
     * @param string $lineFromName
     */
    public function setLineFromName($lineFromName)
    {
        $this->set("LineFromName", $lineFromName);
    }

    /**
     * LineToName: 线路出口名称
     *
     * @return string|null
     */
    public function getLineToName()
    {
        return $this->get("LineToName");
    }

    /**
     * LineToName: 线路出口名称
     *
     * @param string $lineToName
     */
    public function setLineToName($lineToName)
    {
        $this->set("LineToName", $lineToName);
    }

    /**
     * OutPublicIpList: 线路出口IP数组
     *
     * @return OutPublicIpInfo[]|null
     */
    public function getOutPublicIpList()
    {
        $items = $this->get("OutPublicIpList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new OutPublicIpInfo($item));
        }
        return $result;
    }

    /**
     * OutPublicIpList: 线路出口IP数组
     *
     * @param OutPublicIpInfo[] $outPublicIpList
     */
    public function setOutPublicIpList(array $outPublicIpList)
    {
        $result = [];
        foreach ($outPublicIpList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }


}
