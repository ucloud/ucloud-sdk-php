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
namespace UCloud\UGN\Models;

use UCloud\Core\Response\Response;

class UgnRegion extends Response
{
    

    /**
     * Region: 地域名称
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域名称
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * RegIonId: 地域ID
     *
     * @return integer|null
     */
    public function getRegIonId()
    {
        return $this->get("RegIonId");
    }

    /**
     * RegIonId: 地域ID
     *
     * @param int $regIonId
     */
    public function setRegIonId($regIonId)
    {
        $this->set("RegIonId", $regIonId);
    }

    /**
     * IsOverseas: 是否为海外地域
     *
     * @return boolean|null
     */
    public function getIsOverseas()
    {
        return $this->get("IsOverseas");
    }

    /**
     * IsOverseas: 是否为海外地域
     *
     * @param boolean $isOverseas
     */
    public function setIsOverseas($isOverseas)
    {
        $this->set("IsOverseas", $isOverseas);
    }

    /**
     * IsOnline: 是否上线
     *
     * @return boolean|null
     */
    public function getIsOnline()
    {
        return $this->get("IsOnline");
    }

    /**
     * IsOnline: 是否上线
     *
     * @param boolean $isOnline
     */
    public function setIsOnline($isOnline)
    {
        $this->set("IsOnline", $isOnline);
    }

    /**
     * Needs: 添加region需要做的校验
     *
     * @return string[]|null
     */
    public function getNeeds()
    {
        return $this->get("Needs");
    }

    /**
     * Needs: 添加region需要做的校验
     *
     * @param string[] $needs
     */
    public function setNeeds(array $needs)
    {
        $this->set("Needs", $needs);
    }
}
