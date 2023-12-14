<?php
/**
 * Copyright 2023 UCloud Technology Co., Ltd.
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
namespace UCloud\UGN\Models;

use UCloud\Core\Response\Response;

class SimpleBwPackage extends Response
{
    

    /**
     * PackageID:
     *
     * @return string|null
     */
    public function getPackageID()
    {
        return $this->get("PackageID");
    }

    /**
     * PackageID:
     *
     * @param string $packageID
     */
    public function setPackageID($packageID)
    {
        $this->set("PackageID", $packageID);
    }

    /**
     * UGNID:
     *
     * @return string|null
     */
    public function getUGNID()
    {
        return $this->get("UGNID");
    }

    /**
     * UGNID:
     *
     * @param string $ugnid
     */
    public function setUGNID($ugnid)
    {
        $this->set("UGNID", $ugnid);
    }

    /**
     * PayMode: 计费模式 FixedBw:固定带宽｜Peak95:经典95｜Max5:第五峰值｜Traffic:流量计费
     *
     * @return string|null
     */
    public function getPayMode()
    {
        return $this->get("PayMode");
    }

    /**
     * PayMode: 计费模式 FixedBw:固定带宽｜Peak95:经典95｜Max5:第五峰值｜Traffic:流量计费
     *
     * @param string $payMode
     */
    public function setPayMode($payMode)
    {
        $this->set("PayMode", $payMode);
    }

    /**
     * RegionA: 地域A名称
     *
     * @return string|null
     */
    public function getRegionA()
    {
        return $this->get("RegionA");
    }

    /**
     * RegionA: 地域A名称
     *
     * @param string $regionA
     */
    public function setRegionA($regionA)
    {
        $this->set("RegionA", $regionA);
    }

    /**
     * RegionB: 地域B名称
     *
     * @return string|null
     */
    public function getRegionB()
    {
        return $this->get("RegionB");
    }

    /**
     * RegionB: 地域B名称
     *
     * @param string $regionB
     */
    public function setRegionB($regionB)
    {
        $this->set("RegionB", $regionB);
    }

    /**
     * BandWidth: 带宽值
     *
     * @return float|null
     */
    public function getBandWidth()
    {
        return $this->get("BandWidth");
    }

    /**
     * BandWidth: 带宽值
     *
     * @param float $bandWidth
     */
    public function setBandWidth($bandWidth)
    {
        $this->set("BandWidth", $bandWidth);
    }

    /**
     * Qos: 服务质量Diamond:钻石｜Platinum:铂金｜Gold:黄金
     *
     * @return string|null
     */
    public function getQos()
    {
        return $this->get("Qos");
    }

    /**
     * Qos: 服务质量Diamond:钻石｜Platinum:铂金｜Gold:黄金
     *
     * @param string $qos
     */
    public function setQos($qos)
    {
        $this->set("Qos", $qos);
    }

    /**
     * Path: 智能路径Delay:最低时延｜IGP:普通线路｜TCO:最低成本
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->get("Path");
    }

    /**
     * Path: 智能路径Delay:最低时延｜IGP:普通线路｜TCO:最低成本
     *
     * @param string $path
     */
    public function setPath($path)
    {
        $this->set("Path", $path);
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
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * Name:
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name:
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Remark:
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark:
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * ExpireTime: 过期时间
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 过期时间
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * ChangeStatus: 带宽包切换状态
     *
     * @return integer|null
     */
    public function getChangeStatus()
    {
        return $this->get("ChangeStatus");
    }

    /**
     * ChangeStatus: 带宽包切换状态
     *
     * @param int $changeStatus
     */
    public function setChangeStatus($changeStatus)
    {
        $this->set("ChangeStatus", $changeStatus);
    }

    /**
     * ChangeTime: 带宽包切换时间
     *
     * @return integer|null
     */
    public function getChangeTime()
    {
        return $this->get("ChangeTime");
    }

    /**
     * ChangeTime: 带宽包切换时间
     *
     * @param int $changeTime
     */
    public function setChangeTime($changeTime)
    {
        $this->set("ChangeTime", $changeTime);
    }

    /**
     * ChangePayMode: 带宽包切换计费类型
     *
     * @return string|null
     */
    public function getChangePayMode()
    {
        return $this->get("ChangePayMode");
    }

    /**
     * ChangePayMode: 带宽包切换计费类型
     *
     * @param string $changePayMode
     */
    public function setChangePayMode($changePayMode)
    {
        $this->set("ChangePayMode", $changePayMode);
    }
}
