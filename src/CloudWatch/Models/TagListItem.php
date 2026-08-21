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

class TagListItem extends Response
{
    

    /**
     * Tag: 标签名
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 标签名
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * TagValue: 标签值
     *
     * @return string|null
     */
    public function getTagValue()
    {
        return $this->get("TagValue");
    }

    /**
     * TagValue: 标签值
     *
     * @param string $tagValue
     */
    public function setTagValue($tagValue)
    {
        $this->set("TagValue", $tagValue);
    }
}
