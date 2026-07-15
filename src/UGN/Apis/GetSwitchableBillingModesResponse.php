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
namespace UCloud\UGN\Apis;

use UCloud\Core\Response\Response;

class GetSwitchableBillingModesResponse extends Response
{
    

    /**
     * PayModes: 支持的计费类型。FixedBw：固定带宽，Traffic：流量计费，Max5：第五峰值。
     *
     * @return string[]|null
     */
    public function getPayModes()
    {
        return $this->get("PayModes");
    }

    /**
     * PayModes: 支持的计费类型。FixedBw：固定带宽，Traffic：流量计费，Max5：第五峰值。
     *
     * @param string[] $payModes
     */
    public function setPayModes(array $payModes)
    {
        $this->set("PayModes", $payModes);
    }
}
