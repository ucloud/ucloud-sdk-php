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

use UCloud\Core\Response\Response;

class GetKeyRotationStatusResponse extends Response
{
    

    /**
     * KeyRotationEnabled: 是否开启自动轮转。取值：true、false。
     *
     * @return boolean|null
     */
    public function getKeyRotationEnabled()
    {
        return $this->get("KeyRotationEnabled");
    }

    /**
     * KeyRotationEnabled: 是否开启自动轮转。取值：true、false。
     *
     * @param boolean $keyRotationEnabled
     */
    public function setKeyRotationEnabled($keyRotationEnabled)
    {
        $this->set("KeyRotationEnabled", $keyRotationEnabled);
    }

    /**
     * KeyId: 密钥资源长 ID。
     *
     * @return string|null
     */
    public function getKeyId()
    {
        return $this->get("KeyId");
    }

    /**
     * KeyId: 密钥资源长 ID。
     *
     * @param string $keyId
     */
    public function setKeyId($keyId)
    {
        $this->set("KeyId", $keyId);
    }

    /**
     * RotationPeriodInDays: 轮转周期，单位天；未开启时返回 0。
     *
     * @return integer|null
     */
    public function getRotationPeriodInDays()
    {
        return $this->get("RotationPeriodInDays");
    }

    /**
     * RotationPeriodInDays: 轮转周期，单位天；未开启时返回 0。
     *
     * @param int $rotationPeriodInDays
     */
    public function setRotationPeriodInDays($rotationPeriodInDays)
    {
        $this->set("RotationPeriodInDays", $rotationPeriodInDays);
    }

    /**
     * NextRotationDate: 下次轮转时间，Unix 时间戳。
     *
     * @return integer|null
     */
    public function getNextRotationDate()
    {
        return $this->get("NextRotationDate");
    }

    /**
     * NextRotationDate: 下次轮转时间，Unix 时间戳。
     *
     * @param int $nextRotationDate
     */
    public function setNextRotationDate($nextRotationDate)
    {
        $this->set("NextRotationDate", $nextRotationDate);
    }

    /**
     * OnDemandRotationStartDate: 按需轮转开始时间，Unix 时间戳。
     *
     * @return integer|null
     */
    public function getOnDemandRotationStartDate()
    {
        return $this->get("OnDemandRotationStartDate");
    }

    /**
     * OnDemandRotationStartDate: 按需轮转开始时间，Unix 时间戳。
     *
     * @param int $onDemandRotationStartDate
     */
    public function setOnDemandRotationStartDate($onDemandRotationStartDate)
    {
        $this->set("OnDemandRotationStartDate", $onDemandRotationStartDate);
    }
}
