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
use UCloud\VPC\Models\AssociationInfo;

class DescribeNetworkAclAssociationResponse extends Response
{
    

    /**
     * AssociationList: 绑定信息列表
     *
     * @return AssociationInfo[]|null
     */
    public function getAssociationList()
    {
        $items = $this->get("AssociationList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AssociationInfo($item));
        }
        return $result;
    }

    /**
     * AssociationList: 绑定信息列表
     *
     * @param AssociationInfo[] $associationList
     */
    public function setAssociationList(array $associationList)
    {
        $result = [];
        foreach ($associationList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
