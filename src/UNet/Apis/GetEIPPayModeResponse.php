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
use UCloud\UNet\Models\EIPPayModeSet;

class GetEIPPayModeResponse extends Response {
    

    /**
     * EIPPayMode: EIP的计费模式, 参见 EIPPayModeSet
     *
     * @return EIPPayModeSet[]|null
     */
    public function getEIPPayMode(): array {
        $items = $this->get("EIPPayMode") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new EIPPayModeSet($item));
        }
        return $result;
    }

    /**
     * EIPPayMode: EIP的计费模式, 参见 EIPPayModeSet
     *
     * @param EIPPayModeSet[] $eipPayMode
     */
    public function setEIPPayMode(array $eipPayMode) {
        $result = [];
        foreach ($eipPayMode as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }


}
