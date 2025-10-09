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
namespace UCloud\ULB\Models;

use UCloud\Core\Response\Response;

class AccessLogConfigSet extends Response
{
    

    /**
     * Enabled: （应用型专用）是否开启访问日志记录功能
     *
     * @return boolean|null
     */
    public function getEnabled()
    {
        return $this->get("Enabled");
    }

    /**
     * Enabled: （应用型专用）是否开启访问日志记录功能
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->set("Enabled", $enabled);
    }

    /**
     * US3BucketName: （应用型专用）用于存储访问日志的bucket
     *
     * @return string|null
     */
    public function getUS3BucketName()
    {
        return $this->get("US3BucketName");
    }

    /**
     * US3BucketName: （应用型专用）用于存储访问日志的bucket
     *
     * @param string $us3BucketName
     */
    public function setUS3BucketName($us3BucketName)
    {
        $this->set("US3BucketName", $us3BucketName);
    }

    /**
     * US3TokenId: （应用型专用）上传访问日志到bucket所需的token
     *
     * @return string|null
     */
    public function getUS3TokenId()
    {
        return $this->get("US3TokenId");
    }

    /**
     * US3TokenId: （应用型专用）上传访问日志到bucket所需的token
     *
     * @param string $us3TokenId
     */
    public function setUS3TokenId($us3TokenId)
    {
        $this->set("US3TokenId", $us3TokenId);
    }
}
