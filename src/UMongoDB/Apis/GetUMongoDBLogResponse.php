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
namespace UCloud\UMongoDB\Apis;

use UCloud\Core\Response\Response;

class GetUMongoDBLogResponse extends Response
{
    

    /**
     * Log: 查询到的日志内容，一段纯文本
     *
     * @return string|null
     */
    public function getLog()
    {
        return $this->get("Log");
    }

    /**
     * Log: 查询到的日志内容，一段纯文本
     *
     * @param string $log
     */
    public function setLog($log)
    {
        $this->set("Log", $log);
    }

    /**
     * MaxLine: 支持的最大行数
     *
     * @return integer|null
     */
    public function getMaxLine()
    {
        return $this->get("MaxLine");
    }

    /**
     * MaxLine: 支持的最大行数
     *
     * @param int $maxLine
     */
    public function setMaxLine($maxLine)
    {
        $this->set("MaxLine", $maxLine);
    }

    /**
     * IsTruncate: 是否已被截断
     *
     * @return boolean|null
     */
    public function getIsTruncate()
    {
        return $this->get("IsTruncate");
    }

    /**
     * IsTruncate: 是否已被截断
     *
     * @param boolean $isTruncate
     */
    public function setIsTruncate($isTruncate)
    {
        $this->set("IsTruncate", $isTruncate);
    }
}
