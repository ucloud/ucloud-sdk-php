<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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
use UCloud\UNet\Models\UnetAllocateEIPSet;
use UCloud\UNet\Models\UnetEIPAddrSet;

class AllocateEIPResponse extends Response
{
    

    /**
     * EIPSet: 申请到的EIP资源详情 参见 UnetAllocateEIPSet
     *
     * @return UnetAllocateEIPSet[]|null
     */
    public function getEIPSet(): array
    {
        $items = $this->get("EIPSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UnetAllocateEIPSet($item));
        }
        return $result;
    }

    /**
     * EIPSet: 申请到的EIP资源详情 参见 UnetAllocateEIPSet
     *
     * @param UnetAllocateEIPSet[] $eipSet
     */
    public function setEIPSet(array $eipSet)
    {
        $result = [];
        foreach ($eipSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
