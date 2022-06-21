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
namespace UCloud\VPC\Apis;

use UCloud\Core\Response\Response;
use UCloud\VPC\Models\TargetResourceInfo;

class GetNetworkAclTargetResourceResponse extends Response
{
    

    /**
     * TargetResourceList: ACL规则应用目标资源列表，具体结构见下方TargetResourceInfo
     *
     * @return TargetResourceInfo[]|null
     */
    public function getTargetResourceList()
    {
        $items = $this->get("TargetResourceList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new TargetResourceInfo($item));
        }
        return $result;
    }

    /**
     * TargetResourceList: ACL规则应用目标资源列表，具体结构见下方TargetResourceInfo
     *
     * @param TargetResourceInfo[] $targetResourceList
     */
    public function setTargetResourceList(array $targetResourceList)
    {
        $result = [];
        foreach ($targetResourceList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * TotalCount: ACL规则应用目标资源总数
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: ACL规则应用目标资源总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }


}
