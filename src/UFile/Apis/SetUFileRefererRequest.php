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

class SetUFileRefererRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "SetUFileReferer"]);
        $this->markRequired("BucketName");
        $this->markRequired("RefererStatus");
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
     * RefererStatus: 开启关闭referer防盗链;关闭防盗链会清空防盗链参数设置，开启防盗链必须指定 RefererType、Referers；开启：on， 关闭：off;
     *
     * @return string|null
     */
    public function getRefererStatus()
    {
        return $this->get("RefererStatus");
    }

    /**
     * RefererStatus: 开启关闭referer防盗链;关闭防盗链会清空防盗链参数设置，开启防盗链必须指定 RefererType、Referers；开启：on， 关闭：off;
     *
     * @param string $refererStatus
     */
    public function setRefererStatus($refererStatus)
    {
        $this->set("RefererStatus", $refererStatus);
    }

    /**
     * RefererAllowNull: RefererType为白名单时，RefererAllowNull为false代表不允许空referer访问，为true代表允许空referer访问;此参数默认为 true;
     *
     * @return boolean|null
     */
    public function getRefererAllowNull()
    {
        return $this->get("RefererAllowNull");
    }

    /**
     * RefererAllowNull: RefererType为白名单时，RefererAllowNull为false代表不允许空referer访问，为true代表允许空referer访问;此参数默认为 true;
     *
     * @param boolean $refererAllowNull
     */
    public function setRefererAllowNull($refererAllowNull)
    {
        $this->set("RefererAllowNull", $refererAllowNull);
    }

    /**
     * RefererType: 防盗链Referer类型，支持三种类型，1代表设置黑名单、2代表设置白名单，3代表同时设置黑白名单; （其中1和2是为了向前兼容，后续调用只应该传递类型3）RefererStatus为"on"时此参数必填；
     *
     * @return integer|null
     */
    public function getRefererType()
    {
        return $this->get("RefererType");
    }

    /**
     * RefererType: 防盗链Referer类型，支持三种类型，1代表设置黑名单、2代表设置白名单，3代表同时设置黑白名单; （其中1和2是为了向前兼容，后续调用只应该传递类型3）RefererStatus为"on"时此参数必填；
     *
     * @param int $refererType
     */
    public function setRefererType($refererType)
    {
        $this->set("RefererType", $refererType);
    }

    /**
     * Referers: 防盗链Referer规则，支持正则表达式（不支持符号';')，该字段已弃用，请使用WhiteList.n或BlackList.n
     *
     * @return string[]|null
     */
    public function getReferers()
    {
        return $this->get("Referers");
    }

    /**
     * Referers: 防盗链Referer规则，支持正则表达式（不支持符号';')，该字段已弃用，请使用WhiteList.n或BlackList.n
     *
     * @param string[] $referers
     */
    public function setReferers(array $referers)
    {
        $this->set("Referers", $referers);
    }

    /**
     * WhiteList: 白名单列表中的一项
     *
     * @return string[]|null
     */
    public function getWhiteList()
    {
        return $this->get("WhiteList");
    }

    /**
     * WhiteList: 白名单列表中的一项
     *
     * @param string[] $whiteList
     */
    public function setWhiteList(array $whiteList)
    {
        $this->set("WhiteList", $whiteList);
    }

    /**
     * BlackList: 黑名单列表中的一项
     *
     * @return string[]|null
     */
    public function getBlackList()
    {
        return $this->get("BlackList");
    }

    /**
     * BlackList: 黑名单列表中的一项
     *
     * @param string[] $blackList
     */
    public function setBlackList(array $blackList)
    {
        $this->set("BlackList", $blackList);
    }
}
