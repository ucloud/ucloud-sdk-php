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
namespace UCloud\UK8S\Params;

use UCloud\Core\Request\Request;

class UpdateUK8SULSConfigParamInputDetailFilePaths extends Request
{
    

    /**
     * Path: 日志采集路径。仅适用于container_file。
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->get("Path");
    }

    /**
     * Path: 日志采集路径。仅适用于container_file。
     *
     * @param string $path
     */
    public function setPath($path)
    {
        $this->set("Path", $path);
    }

    /**
     * File: 要采集的文件名。仅适用于container_file。
     *
     * @return string|null
     */
    public function getFile()
    {
        return $this->get("File");
    }

    /**
     * File: 要采集的文件名。仅适用于container_file。
     *
     * @param string $file
     */
    public function setFile($file)
    {
        $this->set("File", $file);
    }
}
