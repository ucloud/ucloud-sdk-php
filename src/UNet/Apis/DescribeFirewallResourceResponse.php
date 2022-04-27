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
use UCloud\UNet\Models\ResourceSet;

class DescribeFirewallResourceResponse extends Response
{
    

    /**
     * ResourceSet: 资源列表，见 ResourceSet
     *
     * @return ResourceSet[]|null
     */
    public function getResourceSet(): array
    {
        $items = $this->get("ResourceSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ResourceSet($item));
        }
        return $result;
    }

    /**
     * ResourceSet: 资源列表，见 ResourceSet
     *
     * @param ResourceSet[] $resourceSet
     */
    public function setResourceSet(array $resourceSet)
    {
        $result = [];
        foreach ($resourceSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * TotalCount: 绑定资源总数
     *
     * @return integer|null
     */
    public function getTotalCount(): int
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 绑定资源总数
     *
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
