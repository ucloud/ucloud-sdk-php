<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\UNet\Apis;

use UCloud\Core\Response\Response;
use UCloud\UNet\Models\ThroughputDailyBillingInfo;

class GetThroughputDailyBillingInfoResponse extends Response
{
    

    /**
     * Stats: EIP流量计费信息，详见模型ThroughputDailyBillingInfo
     *
     * @return ThroughputDailyBillingInfo[]|null
     */
    public function getStats(): array
    {
        $items = $this->get("Stats") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ThroughputDailyBillingInfo($item));
        }
        return $result;
    }

    /**
     * Stats: EIP流量计费信息，详见模型ThroughputDailyBillingInfo
     *
     * @param ThroughputDailyBillingInfo[] $stats
     */
    public function setStats(array $stats)
    {
        $result = [];
        foreach ($stats as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * TotalOutMoney: 计费总金额
     *
     * @return integer|null
     */
    public function getTotalOutMoney(): int
    {
        return $this->get("TotalOutMoney");
    }

    /**
     * TotalOutMoney: 计费总金额
     *
     * @param int $totalOutMoney
     */
    public function setTotalOutMoney(int $totalOutMoney)
    {
        $this->set("TotalOutMoney", $totalOutMoney);
    }

    /**
     * TotalOutSize: 计费总流量
     *
     * @return string|null
     */
    public function getTotalOutSize(): string
    {
        return $this->get("TotalOutSize");
    }

    /**
     * TotalOutSize: 计费总流量
     *
     * @param string $totalOutSize
     */
    public function setTotalOutSize(string $totalOutSize)
    {
        $this->set("TotalOutSize", $totalOutSize);
    }
}
