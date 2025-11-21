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

class UpdateCORSRuleRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateCORSRule"]);
        $this->markRequired("CORSId");
        $this->markRequired("BucketName");
        $this->markRequired("AllowedOrigin");
        $this->markRequired("AllowedMethod");
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
     * CORSId: 跨域规则ID
     *
     * @return string|null
     */
    public function getCORSId()
    {
        return $this->get("CORSId");
    }

    /**
     * CORSId: 跨域规则ID
     *
     * @param string $corsId
     */
    public function setCORSId($corsId)
    {
        $this->set("CORSId", $corsId);
    }

    /**
     * BucketName: Bucket名称
     *
     * @return string|null
     */
    public function getBucketName()
    {
        return $this->get("BucketName");
    }

    /**
     * BucketName: Bucket名称
     *
     * @param string $bucketName
     */
    public function setBucketName($bucketName)
    {
        $this->set("BucketName", $bucketName);
    }

    /**
     * AllowedOrigin: 指定允许的跨域请求的来源，使用通配符(*)表示允许所有来源的跨域请求（多个Origin用‘,’分隔）
     *
     * @return string|null
     */
    public function getAllowedOrigin()
    {
        return $this->get("AllowedOrigin");
    }

    /**
     * AllowedOrigin: 指定允许的跨域请求的来源，使用通配符(*)表示允许所有来源的跨域请求（多个Origin用‘,’分隔）
     *
     * @param string $allowedOrigin
     */
    public function setAllowedOrigin($allowedOrigin)
    {
        $this->set("AllowedOrigin", $allowedOrigin);
    }

    /**
     * AllowedMethod: 指定允许的跨域请求方法。支持的方法名有：GET、PUT、POST、DELETE、HEAD、OPTIONS（多个Method用‘,’分隔）
     *
     * @return string|null
     */
    public function getAllowedMethod()
    {
        return $this->get("AllowedMethod");
    }

    /**
     * AllowedMethod: 指定允许的跨域请求方法。支持的方法名有：GET、PUT、POST、DELETE、HEAD、OPTIONS（多个Method用‘,’分隔）
     *
     * @param string $allowedMethod
     */
    public function setAllowedMethod($allowedMethod)
    {
        $this->set("AllowedMethod", $allowedMethod);
    }

    /**
     * AllowedHeader: 指定允许的跨域请求头（多个Header用‘,’分隔）
     *
     * @return string|null
     */
    public function getAllowedHeader()
    {
        return $this->get("AllowedHeader");
    }

    /**
     * AllowedHeader: 指定允许的跨域请求头（多个Header用‘,’分隔）
     *
     * @param string $allowedHeader
     */
    public function setAllowedHeader($allowedHeader)
    {
        $this->set("AllowedHeader", $allowedHeader);
    }

    /**
     * ExposeHeader: 指定允许用户从应用程序中访问的响应头（多个ExposeHeader用‘,’分隔）
     *
     * @return string|null
     */
    public function getExposeHeader()
    {
        return $this->get("ExposeHeader");
    }

    /**
     * ExposeHeader: 指定允许用户从应用程序中访问的响应头（多个ExposeHeader用‘,’分隔）
     *
     * @param string $exposeHeader
     */
    public function setExposeHeader($exposeHeader)
    {
        $this->set("ExposeHeader", $exposeHeader);
    }
}
