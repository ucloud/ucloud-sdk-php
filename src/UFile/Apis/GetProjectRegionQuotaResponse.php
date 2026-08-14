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
namespace UCloud\UFile\Apis;

use UCloud\Core\Response\Response;

class GetProjectRegionQuotaResponse extends Response
{
    

    /**
     * Region: 地域
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * QuotaType: 配额类型
     *
     * @return string|null
     */
    public function getQuotaType()
    {
        return $this->get("QuotaType");
    }

    /**
     * QuotaType: 配额类型
     *
     * @param string $quotaType
     */
    public function setQuotaType($quotaType)
    {
        $this->set("QuotaType", $quotaType);
    }

    /**
     * QuotaLimit: 配额数目
     *
     * @return integer|null
     */
    public function getQuotaLimit()
    {
        return $this->get("QuotaLimit");
    }

    /**
     * QuotaLimit: 配额数目
     *
     * @param int $quotaLimit
     */
    public function setQuotaLimit($quotaLimit)
    {
        $this->set("QuotaLimit", $quotaLimit);
    }
}
