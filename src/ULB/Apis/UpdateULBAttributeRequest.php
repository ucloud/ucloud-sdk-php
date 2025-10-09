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
namespace UCloud\ULB\Apis;

use UCloud\Core\Request\Request;

class UpdateULBAttributeRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateULBAttribute"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("ULBId");
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
     * ULBId: CLB资源ID
     *
     * @return string|null
     */
    public function getULBId()
    {
        return $this->get("ULBId");
    }

    /**
     * ULBId: CLB资源ID
     *
     * @param string $ulbId
     */
    public function setULBId($ulbId)
    {
        $this->set("ULBId", $ulbId);
    }

    /**
     * Name: 名字，不传则默认不修改
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 名字，不传则默认不修改
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Tag: 业务，不传则默认不修改
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务，不传则默认不修改
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Remark: 备注，不传则默认不修改
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注，不传则默认不修改
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * EnableLog: 日志开关，1代表开启日志，0代表关闭日志，传1时必须同时传BucketName，TokenName与TokenId二选一
     *
     * @return integer|null
     */
    public function getEnableLog()
    {
        return $this->get("EnableLog");
    }

    /**
     * EnableLog: 日志开关，1代表开启日志，0代表关闭日志，传1时必须同时传BucketName，TokenName与TokenId二选一
     *
     * @param int $enableLog
     */
    public function setEnableLog($enableLog)
    {
        $this->set("EnableLog", $enableLog);
    }

    /**
     * BucketName: 设置用于存储ulb日志的bucket
     *
     * @return string|null
     */
    public function getBucketName()
    {
        return $this->get("BucketName");
    }

    /**
     * BucketName: 设置用于存储ulb日志的bucket
     *
     * @param string $bucketName
     */
    public function setBucketName($bucketName)
    {
        $this->set("BucketName", $bucketName);
    }

    /**
     * TokenName: 用于指定上传到bucket所需的token，与TokenId选填其一即可
     *
     * @return string|null
     */
    public function getTokenName()
    {
        return $this->get("TokenName");
    }

    /**
     * TokenName: 用于指定上传到bucket所需的token，与TokenId选填其一即可
     *
     * @param string $tokenName
     */
    public function setTokenName($tokenName)
    {
        $this->set("TokenName", $tokenName);
    }

    /**
     * TokenId: 用于指定上传到bucket所需的token，与TokenName选填其一即可
     *
     * @return string|null
     */
    public function getTokenId()
    {
        return $this->get("TokenId");
    }

    /**
     * TokenId: 用于指定上传到bucket所需的token，与TokenName选填其一即可
     *
     * @param string $tokenId
     */
    public function setTokenId($tokenId)
    {
        $this->set("TokenId", $tokenId);
    }

    /**
     * IsWAFOn: 是否开启WAF。枚举类型：Yes，No，默认值为No
     *
     * @return string|null
     */
    public function getIsWAFOn()
    {
        return $this->get("IsWAFOn");
    }

    /**
     * IsWAFOn: 是否开启WAF。枚举类型：Yes，No，默认值为No
     *
     * @param string $isWAFOn
     */
    public function setIsWAFOn($isWAFOn)
    {
        $this->set("IsWAFOn", $isWAFOn);
    }
}
