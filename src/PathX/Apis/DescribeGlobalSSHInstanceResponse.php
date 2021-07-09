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
namespace UCloud\PathX\Apis;

use UCloud\Core\Response\Response;
use UCloud\PathX\Models\GlobalSSHInfo;

class DescribeGlobalSSHInstanceResponse extends Response {
    

    /**
     * InstanceSet: GlobalSSH实例列表，实例的属性参考GlobalSSHInfo模型
     *
     * @return GlobalSSHInfo[]|null
     */
    public function getInstanceSet(): array {
        $items = $this->get("InstanceSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new GlobalSSHInfo($item));
        }
        return $result;
    }

    /**
     * InstanceSet: GlobalSSH实例列表，实例的属性参考GlobalSSHInfo模型
     *
     * @param GlobalSSHInfo[] $instanceSet
     */
    public function setInstanceSet(array $instanceSet) {
        $result = [];
        foreach ($instanceSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }


}
