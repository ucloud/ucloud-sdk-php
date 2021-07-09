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
namespace UCloud\VPC\Apis;

use UCloud\Core\Response\Response;
use UCloud\VPC\Models\AclEntryInfo;
use UCloud\VPC\Models\TargetResourceInfo;

class DescribeNetworkAclEntryResponse extends Response
{
    

    /**
     * EntryList: 所有的规则信息
     *
     * @return AclEntryInfo[]|null
     */
    public function getEntryList(): array
    {
        $items = $this->get("EntryList") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AclEntryInfo($item));
        }
        return $result;
    }

    /**
     * EntryList: 所有的规则信息
     *
     * @param AclEntryInfo[] $entryList
     */
    public function setEntryList(array $entryList)
    {
        $result = [];
        foreach ($entryList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
