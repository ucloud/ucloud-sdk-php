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

class TagEntry extends Response
{
    

    /**
     * TagName: 标签名称
     *
     * @return string|null
     */
    public function getTagName()
    {
        return $this->get("TagName");
    }

    /**
     * TagName: 标签名称
     *
     * @param string $tagName
     */
    public function setTagName($tagName)
    {
        $this->set("TagName", $tagName);
    }

    /**
     * KeyList: 标签候选值列表
     *
     * @return string[]|null
     */
    public function getKeyList()
    {
        return $this->get("KeyList");
    }

    /**
     * KeyList: 标签候选值列表
     *
     * @param string[] $keyList
     */
    public function setKeyList(array $keyList)
    {
        $this->set("KeyList", $keyList);
    }
}
