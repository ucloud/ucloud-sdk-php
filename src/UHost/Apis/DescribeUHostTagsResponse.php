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
namespace UCloud\UHost\Apis;

use UCloud\Core\Response\Response;
use UCloud\UHost\Models\UHostTagSet;

class DescribeUHostTagsResponse extends Response {
    

    /**
     * TotalCount: 已有主机的业务组总数
     *
     * @return int|null
     */
    public function getTotalCount(): int {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 已有主机的业务组总数
     *
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount) {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * TagSet: 业务组集合见 UHostTagSet
     *
     * @return UHostTagSet[]|null
     */
    public function getTagSet(): array {
        $items = $this->get("TagSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UHostTagSet($item));
        }
        return $result;
    }

    /**
     * TagSet: 业务组集合见 UHostTagSet
     *
     * @param UHostTagSet[] $tagSet
     */
    public function setTagSet(array $tagSet) {
        $result = [];
        foreach ($tagSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }


}
