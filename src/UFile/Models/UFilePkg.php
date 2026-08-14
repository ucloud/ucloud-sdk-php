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
namespace UCloud\UFile\Models;

use UCloud\Core\Response\Response;

class UFilePkg extends Response
{
    

    /**
     * Region: 资源包地域
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 资源包地域
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * ResourceId: 资源包ID
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 资源包ID
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * PkgName: 资源包名称
     *
     * @return string|null
     */
    public function getPkgName()
    {
        return $this->get("PkgName");
    }

    /**
     * PkgName: 资源包名称
     *
     * @param string $pkgName
     */
    public function setPkgName($pkgName)
    {
        $this->set("PkgName", $pkgName);
    }

    /**
     * PkgType: 资源包类型ID
     *
     * @return integer|null
     */
    public function getPkgType()
    {
        return $this->get("PkgType");
    }

    /**
     * PkgType: 资源包类型ID
     *
     * @param int $pkgType
     */
    public function setPkgType($pkgType)
    {
        $this->set("PkgType", $pkgType);
    }

    /**
     * Amount: 资源包容量
     *
     * @return integer|null
     */
    public function getAmount()
    {
        return $this->get("Amount");
    }

    /**
     * Amount: 资源包容量
     *
     * @param int $amount
     */
    public function setAmount($amount)
    {
        $this->set("Amount", $amount);
    }

    /**
     * RemainAmount: 资源包剩余容量（仅支持流量包）
     *
     * @return string|null
     */
    public function getRemainAmount()
    {
        return $this->get("RemainAmount");
    }

    /**
     * RemainAmount: 资源包剩余容量（仅支持流量包）
     *
     * @param string $remainAmount
     */
    public function setRemainAmount($remainAmount)
    {
        $this->set("RemainAmount", $remainAmount);
    }

    /**
     * CreateTime: 资源包创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 资源包创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpiredTime: 资源包失效时间
     *
     * @return integer|null
     */
    public function getExpiredTime()
    {
        return $this->get("ExpiredTime");
    }

    /**
     * ExpiredTime: 资源包失效时间
     *
     * @param int $expiredTime
     */
    public function setExpiredTime($expiredTime)
    {
        $this->set("ExpiredTime", $expiredTime);
    }
}
