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
namespace UCloud\UAIModelverse\Models;

use UCloud\Core\Response\Response;

class DownloadFileData extends Response
{
    

    /**
     * DownloadURL: 文件下载链接（US3 预签名 URL，请在有效期内立即下载）
     *
     * @return string|null
     */
    public function getDownloadURL()
    {
        return $this->get("DownloadURL");
    }

    /**
     * DownloadURL: 文件下载链接（US3 预签名 URL，请在有效期内立即下载）
     *
     * @param string $downloadURL
     */
    public function setDownloadURL($downloadURL)
    {
        $this->set("DownloadURL", $downloadURL);
    }

    /**
     * FileName: 文件名
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->get("FileName");
    }

    /**
     * FileName: 文件名
     *
     * @param string $fileName
     */
    public function setFileName($fileName)
    {
        $this->set("FileName", $fileName);
    }

    /**
     * FileSize: 文件大小（字节）
     *
     * @return integer|null
     */
    public function getFileSize()
    {
        return $this->get("FileSize");
    }

    /**
     * FileSize: 文件大小（字节）
     *
     * @param int $fileSize
     */
    public function setFileSize($fileSize)
    {
        $this->set("FileSize", $fileSize);
    }
}
