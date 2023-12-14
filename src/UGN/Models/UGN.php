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

class UGN extends Response
{
    

    /**
     * UGNID: 云联网资源 ID
     *
     * @return string|null
     */
    public function getUGNID()
    {
        return $this->get("UGNID");
    }

    /**
     * UGNID: 云联网资源 ID
     *
     * @param string $ugnid
     */
    public function setUGNID($ugnid)
    {
        $this->set("UGNID", $ugnid);
    }

    /**
     * Name: 云联网名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 云联网名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Remark: 云联网备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 云联网备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * CreateTime: 云联网创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 云联网创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * NetworkCount: 关联网络实例数量
     *
     * @return integer|null
     */
    public function getNetworkCount()
    {
        return $this->get("NetworkCount");
    }

    /**
     * NetworkCount: 关联网络实例数量
     *
     * @param int $networkCount
     */
    public function setNetworkCount($networkCount)
    {
        $this->set("NetworkCount", $networkCount);
    }

    /**
     * BwPackageCount: 绑定带宽包数量
     *
     * @return integer|null
     */
    public function getBwPackageCount()
    {
        return $this->get("BwPackageCount");
    }

    /**
     * BwPackageCount: 绑定带宽包数量
     *
     * @param int $bwPackageCount
     */
    public function setBwPackageCount($bwPackageCount)
    {
        $this->set("BwPackageCount", $bwPackageCount);
    }
}
