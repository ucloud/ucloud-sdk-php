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
namespace UCloud\UKafka\Apis;

use UCloud\Core\Response\Response;
use UCloud\UKafka\Models\Version;

class ListUKafkaFrameworkVersionResponse extends Response
{
    

    /**
     * FrameworkVersions: kafka版本
     *
     * @return Version[]|null
     */
    public function getFrameworkVersions()
    {
        $items = $this->get("FrameworkVersions");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Version($item));
        }
        return $result;
    }

    /**
     * FrameworkVersions: kafka版本
     *
     * @param Version[] $frameworkVersions
     */
    public function setFrameworkVersions(array $frameworkVersions)
    {
        $result = [];
        foreach ($frameworkVersions as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
