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
namespace UCloud\SES\Params;

use UCloud\Core\Request\Request;

class SendSESEmailParamAttachments extends Request
{
    

    /**
     * Filename: 附件文件名
     *
     * @return string|null
     */
    public function getFilename()
    {
        return $this->get("Filename");
    }

    /**
     * Filename: 附件文件名
     *
     * @param string $filename
     */
    public function setFilename($filename)
    {
        $this->set("Filename", $filename);
    }

    /**
     * ContentType: MIME 类型，如： application/pdf
     *
     * @return string|null
     */
    public function getContentType()
    {
        return $this->get("ContentType");
    }

    /**
     * ContentType: MIME 类型，如： application/pdf
     *
     * @param string $contentType
     */
    public function setContentType($contentType)
    {
        $this->set("ContentType", $contentType);
    }

    /**
     * Data: 附件内容（Base64 编码），单次请求最多 10 个附件；总大小不超过 10MB
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->get("Data");
    }

    /**
     * Data: 附件内容（Base64 编码），单次请求最多 10 个附件；总大小不超过 10MB
     *
     * @param string $data
     */
    public function setData($data)
    {
        $this->set("Data", $data);
    }
}
