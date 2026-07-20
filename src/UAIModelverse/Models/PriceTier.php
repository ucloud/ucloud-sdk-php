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

class PriceTier extends Response
{
    

    /**
     * Rates: 该档位下的收费列表（有序数组）
     *
     * @return PriceRate[]|null
     */
    public function getRates()
    {
        $items = $this->get("Rates");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new PriceRate($item));
        }
        return $result;
    }

    /**
     * Rates: 该档位下的收费列表（有序数组）
     *
     * @param PriceRate[] $rates
     */
    public function setRates(array $rates)
    {
        $result = [];
        foreach ($rates as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * DescriptionEn: 档位描述（例如 "标准上下文 32k"）
     *
     * @return string|null
     */
    public function getDescriptionEn()
    {
        return $this->get("DescriptionEn");
    }

    /**
     * DescriptionEn: 档位描述（例如 "标准上下文 32k"）
     *
     * @param string $descriptionEn
     */
    public function setDescriptionEn($descriptionEn)
    {
        $this->set("DescriptionEn", $descriptionEn);
    }

    /**
     * Condition: 档位/条件（例如 "32k"、"128k"）
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->get("Condition");
    }

    /**
     * Condition: 档位/条件（例如 "32k"、"128k"）
     *
     * @param string $condition
     */
    public function setCondition($condition)
    {
        $this->set("Condition", $condition);
    }

    /**
     * Description: 档位描述（例如 "标准上下文 32k"）
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 档位描述（例如 "标准上下文 32k"）
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }
}
