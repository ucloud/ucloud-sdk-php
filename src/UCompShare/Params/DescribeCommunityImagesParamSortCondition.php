<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\UCompShare\Params;

use UCloud\Core\Request\Request;

class DescribeCommunityImagesParamSortCondition extends Request
{
    

    /**
     * Field: 排序条件。- Favor：按热度排序，获取热点镜像；- PubTime：按发布时间排序，获取最新社区镜像；- Price 按价格排序；- CreatedCount 按使用量排序；默认："PubTime"
     *
     * @return string|null
     */
    public function getField()
    {
        return $this->get("Field");
    }

    /**
     * Field: 排序条件。- Favor：按热度排序，获取热点镜像；- PubTime：按发布时间排序，获取最新社区镜像；- Price 按价格排序；- CreatedCount 按使用量排序；默认："PubTime"
     *
     * @param string $field
     */
    public function setField($field)
    {
        $this->set("Field", $field);
    }

    /**
     * ASC: 是否升序排列
     *
     * @return string|null
     */
    public function getASC()
    {
        return $this->get("ASC");
    }

    /**
     * ASC: 是否升序排列
     *
     * @param string $asc
     */
    public function setASC($asc)
    {
        $this->set("ASC", $asc);
    }
}
