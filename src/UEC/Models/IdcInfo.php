<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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

class IdcInfo extends Response
{
    

    /**
     * IdcId: 机房ID
     *
     * @return string|null
     */
    public function getIdcId(): string
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
     * Name: 机房名称
     *
     * @return string|null
     */
    public function getName(): string
    {
        return $this->get("Name");
    }

    /**
     * Name: 机房名称
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }

    /**
     * Isp: 运营商
     *
     * @return string|null
     */
    public function getIsp(): string
    {
        return $this->get("Isp");
    }

    /**
     * Isp: 运营商
     *
     * @param string $isp
     */
    public function setIsp(string $isp)
    {
        $this->set("Isp", $isp);
    }

    /**
     * Province: 省份
     *
     * @return string|null
     */
    public function getProvince(): string
    {
        return $this->get("Province");
    }

    /**
     * Province: 省份
     *
     * @param string $province
     */
    public function setProvince(string $province)
    {
        $this->set("Province", $province);
    }

    /**
     * City: 城市
     *
     * @return string|null
     */
    public function getCity(): string
    {
        return $this->get("City");
    }

    /**
     * City: 城市
     *
     * @param string $city
     */
    public function setCity(string $city)
    {
        $this->set("City", $city);
    }

    /**
     * Type: 运营商类型：0-其它, 1-一线城市单线,2-二线城市单线, 3-全国教育网, 4-全国三通
     *
     * @return integer|null
     */
    public function getType(): int
    {
        return $this->get("Type");
    }

    /**
     * Type: 运营商类型：0-其它, 1-一线城市单线,2-二线城市单线, 3-全国教育网, 4-全国三通
     *
     * @param int $type
     */
    public function setType(int $type)
    {
        $this->set("Type", $type);
    }

    /**
     * MaxNodeCnt: 机房可创建节点最大数量
     *
     * @return integer|null
     */
    public function getMaxNodeCnt(): int
    {
        return $this->get("MaxNodeCnt");
    }

    /**
     * MaxNodeCnt: 机房可创建节点最大数量
     *
     * @param int $maxNodeCnt
     */
    public function setMaxNodeCnt(int $maxNodeCnt)
    {
        $this->set("MaxNodeCnt", $maxNodeCnt);
    }
}
