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

namespace UCloud\UAccount\Apis;

use UCloud\Core\Response\Response;

use UCloud\UAccount\Models\ProjectListInfo;

class GetProjectListResponse extends Response
{

    /**
     * ProjectCount: 项目总数
     *
     * @return integer|null
     */
    public function getProjectCount()
    {
        return $this->get("ProjectCount");
    }

    /**
     * ProjectCount: 项目总数
     *
     * @param int $projectCount
     */
    public function setProjectCount(int $projectCount)
    {
        $this->set("ProjectCount", $projectCount);
    }
    /**
     * ProjectSet: JSON格式的项目列表实例
     *
     * @return ProjectListInfoModel[]|null
     */
    public function getProjectSet()
    {
        $items = $this->get("ProjectSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ProjectListInfoModel($item));
        }
        return $result;
    }

    /**
     * ProjectSet: JSON格式的项目列表实例
     *
     * @param ProjectListInfoModel[] $projectSet
     */
    public function setProjectSet(array $projectSet)
    {
        $result = [];
        foreach ($projectSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
