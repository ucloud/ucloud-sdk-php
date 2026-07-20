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

use UCloud\Core\Response\Response;
use UCloud\UAIModelverse\Models\SquareModel;
use UCloud\UAIModelverse\Models\Pricing;
use UCloud\UAIModelverse\Models\PriceTier;
use UCloud\UAIModelverse\Models\PriceRate;

class GetUFSquareModelDetailResponse extends Response
{
    

    /**
     * SquareModel: 模型
     *
     * @return SquareModel|null
     */
    public function getSquareModel()
    {
        return new SquareModel($this->get("SquareModel"));
    }

    /**
     * SquareModel: 模型
     *
     * @param SquareModel $squareModel
     */
    public function setSquareModel(array $squareModel)
    {
        $this->set("SquareModel", $squareModel->getAll());
    }
}
