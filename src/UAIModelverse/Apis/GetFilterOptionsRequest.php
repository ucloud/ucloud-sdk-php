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
namespace UCloud\UAIModelverse\Apis;

use UCloud\Core\Request\Request;

class GetFilterOptionsRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetFilterOptions"]);
    }

    

    /**
     * ProductCode: 产品类型（单选，可选），枚举值：`modelverse`、`sandbox`；为空时返回所有产品下的选项
     *
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->get("ProductCode");
    }

    /**
     * ProductCode: 产品类型（单选，可选），枚举值：`modelverse`、`sandbox`；为空时返回所有产品下的选项
     *
     * @param string $productCode
     */
    public function setProductCode($productCode)
    {
        $this->set("ProductCode", $productCode);
    }
}
