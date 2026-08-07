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
namespace UCloud\UKMS\Apis;

use UCloud\Core\Request\Request;

class EnableKeyRotationRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "EnableKeyRotation"]);
        $this->markRequired("Region");
        $this->markRequired("ResourceId");
        $this->markRequired("KeyId");
    }

    

    /**
     * Region: 地域。参见地域和可用区列表。
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。参见地域和可用区列表。
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子账号必须填写。
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子账号必须填写。
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * ResourceId: UKMS 实例资源 ID。
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: UKMS 实例资源 ID。
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * KeyId: 密钥 ID、ARN 或别名。
     *
     * @return string|null
     */
    public function getKeyId()
    {
        return $this->get("KeyId");
    }

    /**
     * KeyId: 密钥 ID、ARN 或别名。
     *
     * @param string $keyId
     */
    public function setKeyId($keyId)
    {
        $this->set("KeyId", $keyId);
    }

    /**
     * RotationPeriodInDays: 轮转周期，单位天。取值范围 1~2560，默认 365。仅 SYMMETRIC_DEFAULT 且 Origin=UCLOUD_KMS 的密钥支持轮转。
     *
     * @return integer|null
     */
    public function getRotationPeriodInDays()
    {
        return $this->get("RotationPeriodInDays");
    }

    /**
     * RotationPeriodInDays: 轮转周期，单位天。取值范围 1~2560，默认 365。仅 SYMMETRIC_DEFAULT 且 Origin=UCLOUD_KMS 的密钥支持轮转。
     *
     * @param int $rotationPeriodInDays
     */
    public function setRotationPeriodInDays($rotationPeriodInDays)
    {
        $this->set("RotationPeriodInDays", $rotationPeriodInDays);
    }
}
