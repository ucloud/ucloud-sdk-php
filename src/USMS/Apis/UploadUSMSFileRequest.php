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
namespace UCloud\USMS\Apis;

use UCloud\Core\Request\Request;

class UploadUSMSFileRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UploadUSMSFile"]);
        $this->markRequired("ProjectId");
        $this->markRequired("FileName");
        $this->markRequired("FileContent");
        $this->markRequired("Source");
    }

    

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * FileName: 文件名称，携带文件后缀
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->get("FileName");
    }

    /**
     * FileName: 文件名称，携带文件后缀
     *
     * @param string $fileName
     */
    public function setFileName($fileName)
    {
        $this->set("FileName", $fileName);
    }

    /**
     * FileContent: 文件内容，base64编码
     *
     * @return string|null
     */
    public function getFileContent()
    {
        return $this->get("FileContent");
    }

    /**
     * FileContent: 文件内容，base64编码
     *
     * @param string $fileContent
     */
    public function setFileContent($fileContent)
    {
        $this->set("FileContent", $fileContent);
    }

    /**
     * Source: 文件来源，0-签名资质
     *
     * @return integer|null
     */
    public function getSource()
    {
        return $this->get("Source");
    }

    /**
     * Source: 文件来源，0-签名资质
     *
     * @param int $source
     */
    public function setSource($source)
    {
        $this->set("Source", $source);
    }

    /**
     * FileType: 文件类型，mime格式
     *
     * @return string|null
     */
    public function getFileType()
    {
        return $this->get("FileType");
    }

    /**
     * FileType: 文件类型，mime格式
     *
     * @param string $fileType
     */
    public function setFileType($fileType)
    {
        $this->set("FileType", $fileType);
    }
}
