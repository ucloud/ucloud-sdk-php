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
namespace UCloud\CloudWatch\Models;

use UCloud\Core\Response\Response;

class QueryMetricDataResp extends Response
{
    

    /**
     * InvalidResourceIds: 无效或无权限资源的 ID 列表
     *
     * @return string[]|null
     */
    public function getInvalidResourceIds()
    {
        return $this->get("InvalidResourceIds");
    }

    /**
     * InvalidResourceIds: 无效或无权限资源的 ID 列表
     *
     * @param string[] $invalidResourceIds
     */
    public function setInvalidResourceIds(array $invalidResourceIds)
    {
        $this->set("InvalidResourceIds", $invalidResourceIds);
    }

    /**
     * List: 查询的结果集
     *
     * @return QueryMetricDataRespItem[]|null
     */
    public function getList()
    {
        $items = $this->get("List");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new QueryMetricDataRespItem($item));
        }
        return $result;
    }

    /**
     * List: 查询的结果集
     *
     * @param QueryMetricDataRespItem[] $list
     */
    public function setList(array $list)
    {
        $result = [];
        foreach ($list as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
