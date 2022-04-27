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
namespace UCloud\UFile\Models;

use UCloud\Core\Response\Response;

class LifeCycleItem extends Response
{
    

    /**
     * LifeCycleId: 生命周期Id
     *
     * @return string|null
     */
    public function getLifeCycleId(): string
    {
        return $this->get("LifeCycleId");
    }

    /**
     * LifeCycleId: 生命周期Id
     *
     * @param string $lifeCycleId
     */
    public function setLifeCycleId(string $lifeCycleId)
    {
        $this->set("LifeCycleId", $lifeCycleId);
    }

    /**
     * LifeCycleName: 生命周期名称
     *
     * @return string|null
     */
    public function getLifeCycleName(): string
    {
        return $this->get("LifeCycleName");
    }

    /**
     * LifeCycleName: 生命周期名称
     *
     * @param string $lifeCycleName
     */
    public function setLifeCycleName(string $lifeCycleName)
    {
        $this->set("LifeCycleName", $lifeCycleName);
    }

    /**
     * Prefix: 生命周期所适用的前缀；*为整个存储空间文件；
     *
     * @return string|null
     */
    public function getPrefix(): string
    {
        return $this->get("Prefix");
    }

    /**
     * Prefix: 生命周期所适用的前缀；*为整个存储空间文件；
     *
     * @param string $prefix
     */
    public function setPrefix(string $prefix)
    {
        $this->set("Prefix", $prefix);
    }

    /**
     * Days: 指定一个过期天数N，文件会在其最近更新时间点的N天后过期，自动删除，0代表不启用；
     *
     * @return integer|null
     */
    public function getDays(): int
    {
        return $this->get("Days");
    }

    /**
     * Days: 指定一个过期天数N，文件会在其最近更新时间点的N天后过期，自动删除，0代表不启用；
     *
     * @param int $days
     */
    public function setDays(int $days)
    {
        $this->set("Days", $days);
    }

    /**
     * Status: Enabled -- 启用，Disabled -- 不启用
     *
     * @return string|null
     */
    public function getStatus(): string
    {
        return $this->get("Status");
    }

    /**
     * Status: Enabled -- 启用，Disabled -- 不启用
     *
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->set("Status", $status);
    }

    /**
     * BucketName: 存储空间名称
     *
     * @return string|null
     */
    public function getBucketName(): string
    {
        return $this->get("BucketName");
    }

    /**
     * BucketName: 存储空间名称
     *
     * @param string $bucketName
     */
    public function setBucketName(string $bucketName)
    {
        $this->set("BucketName", $bucketName);
    }

    /**
     * ArchivalDays: 指定一个过期天数N，文件会在其最近更新时间点的N天后过期，自动转换为归档存储类型，0代表不启用；
     *
     * @return integer|null
     */
    public function getArchivalDays(): int
    {
        return $this->get("ArchivalDays");
    }

    /**
     * ArchivalDays: 指定一个过期天数N，文件会在其最近更新时间点的N天后过期，自动转换为归档存储类型，0代表不启用；
     *
     * @param int $archivalDays
     */
    public function setArchivalDays(int $archivalDays)
    {
        $this->set("ArchivalDays", $archivalDays);
    }

    /**
     * IADays: 指定一个过期天数N，文件会在其最近更新时间点的N天后过期，自动转换为低频存储类型，0代表不启用；
     *
     * @return integer|null
     */
    public function getIADays(): int
    {
        return $this->get("IADays");
    }

    /**
     * IADays: 指定一个过期天数N，文件会在其最近更新时间点的N天后过期，自动转换为低频存储类型，0代表不启用；
     *
     * @param int $iaDays
     */
    public function setIADays(int $iaDays)
    {
        $this->set("IADays", $iaDays);
    }
}
