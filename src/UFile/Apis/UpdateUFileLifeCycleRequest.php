<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\UFile\Apis;

use UCloud\Core\Request\Request;

class UpdateUFileLifeCycleRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateUFileLifeCycle"]);
        $this->markRequired("LifeCycleId");
        $this->markRequired("LifeCycleName");
        $this->markRequired("Prefix");
        $this->markRequired("Status");
        $this->markRequired("BucketName");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * LifeCycleId: 生命周期Id
     *
     * @return string|null
     */
    public function getLifeCycleId()
    {
        return $this->get("LifeCycleId");
    }

    /**
     * LifeCycleId: 生命周期Id
     *
     * @param string $lifeCycleId
     */
    public function setLifeCycleId($lifeCycleId)
    {
        $this->set("LifeCycleId", $lifeCycleId);
    }

    /**
     * LifeCycleName: 生命周期名称
     *
     * @return string|null
     */
    public function getLifeCycleName()
    {
        return $this->get("LifeCycleName");
    }

    /**
     * LifeCycleName: 生命周期名称
     *
     * @param string $lifeCycleName
     */
    public function setLifeCycleName($lifeCycleName)
    {
        $this->set("LifeCycleName", $lifeCycleName);
    }

    /**
     * Prefix: 生命周期所适用的前缀；*为整个存储空间文件；一条规则只支持一个文件前缀；
     *
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->get("Prefix");
    }

    /**
     * Prefix: 生命周期所适用的前缀；*为整个存储空间文件；一条规则只支持一个文件前缀；
     *
     * @param string $prefix
     */
    public function setPrefix($prefix)
    {
        $this->set("Prefix", $prefix);
    }

    /**
     * Status: Enabled -- 启用，Disabled -- 不启用
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: Enabled -- 启用，Disabled -- 不启用
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * BucketName: 存储空间名称
     *
     * @return string|null
     */
    public function getBucketName()
    {
        return $this->get("BucketName");
    }

    /**
     * BucketName: 存储空间名称
     *
     * @param string $bucketName
     */
    public function setBucketName($bucketName)
    {
        $this->set("BucketName", $bucketName);
    }

    /**
     * Days: 指定一个过期天数N，文件会在其最近更新时间点的N天后过期,自动删除；范围： [7,36500]
     *
     * @return integer|null
     */
    public function getDays()
    {
        return $this->get("Days");
    }

    /**
     * Days: 指定一个过期天数N，文件会在其最近更新时间点的N天后过期,自动删除；范围： [7,36500]
     *
     * @param int $days
     */
    public function setDays($days)
    {
        $this->set("Days", $days);
    }

    /**
     * ArchivalDays: 指定一个过期天数N，文件会在其最近更新时间点的N天后过期，自动转换为归档存储类型；范围： [7,36500]，0代表不启用
     *
     * @return integer|null
     */
    public function getArchivalDays()
    {
        return $this->get("ArchivalDays");
    }

    /**
     * ArchivalDays: 指定一个过期天数N，文件会在其最近更新时间点的N天后过期，自动转换为归档存储类型；范围： [7,36500]，0代表不启用
     *
     * @param int $archivalDays
     */
    public function setArchivalDays($archivalDays)
    {
        $this->set("ArchivalDays", $archivalDays);
    }

    /**
     * IADays: 指定一个过期天数N，文件会在其最近更新时间点的N天后过期，自动转换为低频存储类型；范围： [7,36500]，0代表不启用
     *
     * @return integer|null
     */
    public function getIADays()
    {
        return $this->get("IADays");
    }

    /**
     * IADays: 指定一个过期天数N，文件会在其最近更新时间点的N天后过期，自动转换为低频存储类型；范围： [7,36500]，0代表不启用
     *
     * @param int $iaDays
     */
    public function setIADays($iaDays)
    {
        $this->set("IADays", $iaDays);
    }

    /**
     * Tags: Tag，参数格式"k1=v1&k2=v2"，key的最大长度为128， value最大长度为256byte，单个object的tag的最大数量为10
     *
     * @return string|null
     */
    public function getTags()
    {
        return $this->get("Tags");
    }

    /**
     * Tags: Tag，参数格式"k1=v1&k2=v2"，key的最大长度为128， value最大长度为256byte，单个object的tag的最大数量为10
     *
     * @param string $tags
     */
    public function setTags($tags)
    {
        $this->set("Tags", $tags);
    }
}
