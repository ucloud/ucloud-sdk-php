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
namespace UCloud\UAIModelverse\Models;

use UCloud\Core\Response\Response;

class TokenUsage extends Response
{
    

    /**
     * Total: 总token量
     *
     * @return integer|null
     */
    public function getTotal()
    {
        return $this->get("Total");
    }

    /**
     * Total: 总token量
     *
     * @param int $total
     */
    public function setTotal($total)
    {
        $this->set("Total", $total);
    }

    /**
     * InTotal: 输出总token
     *
     * @return integer|null
     */
    public function getInTotal()
    {
        return $this->get("InTotal");
    }

    /**
     * InTotal: 输出总token
     *
     * @param int $inTotal
     */
    public function setInTotal($inTotal)
    {
        $this->set("InTotal", $inTotal);
    }

    /**
     * OutTotal: 输出总token
     *
     * @return integer|null
     */
    public function getOutTotal()
    {
        return $this->get("OutTotal");
    }

    /**
     * OutTotal: 输出总token
     *
     * @param int $outTotal
     */
    public function setOutTotal($outTotal)
    {
        $this->set("OutTotal", $outTotal);
    }

    /**
     * ImageGenerationNum: 生图总张数
     *
     * @return integer|null
     */
    public function getImageGenerationNum()
    {
        return $this->get("ImageGenerationNum");
    }

    /**
     * ImageGenerationNum: 生图总张数
     *
     * @param int $imageGenerationNum
     */
    public function setImageGenerationNum($imageGenerationNum)
    {
        $this->set("ImageGenerationNum", $imageGenerationNum);
    }

    /**
     * RequestTotal: 请求总次数
     *
     * @return integer|null
     */
    public function getRequestTotal()
    {
        return $this->get("RequestTotal");
    }

    /**
     * RequestTotal: 请求总次数
     *
     * @param int $requestTotal
     */
    public function setRequestTotal($requestTotal)
    {
        $this->set("RequestTotal", $requestTotal);
    }

    /**
     * Usages: 每个时间戳的token使用量
     *
     * @return TokenUsageTimestamp[]|null
     */
    public function getUsages()
    {
        $items = $this->get("Usages");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new TokenUsageTimestamp($item));
        }
        return $result;
    }

    /**
     * Usages: 每个时间戳的token使用量
     *
     * @param TokenUsageTimestamp[] $usages
     */
    public function setUsages(array $usages)
    {
        $result = [];
        foreach ($usages as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
