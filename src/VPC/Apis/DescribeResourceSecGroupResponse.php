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
namespace UCloud\VPC\Apis;

use UCloud\Core\Response\Response;
use UCloud\VPC\Models\ResourceSecgroupInfoEx;
use UCloud\VPC\Models\BindingSecGroupInfo;
use UCloud\VPC\Models\ResourceExInfo;
use UCloud\VPC\Models\ResourceSecgroupInfo;
use UCloud\VPC\Models\SecGroupSimpleInfo;

class DescribeResourceSecGroupResponse extends Response
{
    

    /**
     * TotalCount: 资源总数量。传入 ResourceId 时，为传入资源中的有效资源数量。
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 资源总数量。传入 ResourceId 时，为传入资源中的有效资源数量。
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * DataSet: 资源绑定的安全组信息
     *
     * @return ResourceSecgroupInfoEx[]|null
     */
    public function getDataSet()
    {
        $items = $this->get("DataSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ResourceSecgroupInfoEx($item));
        }
        return $result;
    }

    /**
     * DataSet: 资源绑定的安全组信息
     *
     * @param ResourceSecgroupInfoEx[] $dataSet
     */
    public function setDataSet(array $dataSet)
    {
        $result = [];
        foreach ($dataSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
