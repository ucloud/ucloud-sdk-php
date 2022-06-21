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

class NodeIspList extends Response
{
    

    /**
     * Province: 省份
     *
     * @return string|null
     */
    public function getProvince()
    {
        return $this->get("Province");
    }

    /**
     * Province: 省份
     *
     * @param string $province
     */
    public function setProvince($province)
    {
        $this->set("Province", $province);
    }

    /**
     * City: 城市
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->get("City");
    }

    /**
     * City: 城市
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->set("City", $city);
    }

    /**
     * LineType: 线路类型
     *
     * @return string|null
     */
    public function getLineType()
    {
        return $this->get("LineType");
    }

    /**
     * LineType: 线路类型
     *
     * @param string $lineType
     */
    public function setLineType($lineType)
    {
        $this->set("LineType", $lineType);
    }

    /**
     * IspName: 机房运营商名称
     *
     * @return string|null
     */
    public function getIspName()
    {
        return $this->get("IspName");
    }

    /**
     * IspName: 机房运营商名称
     *
     * @param string $ispName
     */
    public function setIspName($ispName)
    {
        $this->set("IspName", $ispName);
    }

    /**
     * IdcName: 机房名称
     *
     * @return string|null
     */
    public function getIdcName()
    {
        return $this->get("IdcName");
    }

    /**
     * IdcName: 机房名称
     *
     * @param string $idcName
     */
    public function setIdcName($idcName)
    {
        $this->set("IdcName", $idcName);
    }


}
