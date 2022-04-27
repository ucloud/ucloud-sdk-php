<?php

/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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

namespace UCloud\UCDN\Apis;

use UCloud\Core\Request\Request;

class RefreshNewUcdnDomainCacheRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "RefreshNewUcdnDomainCache"]);
        $this->markRequired("Type");
        $this->markRequired("UrlList");
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
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }
    /**
     * Type: 刷新类型，file代表文件刷新，dir 代表路径刷新，m3u8带表m3u8刷新
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 刷新类型，file代表文件刷新，dir 代表路径刷新，m3u8带表m3u8刷新
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->set("Type", $type);
    }
    /**
     * UrlList: 需要刷新的URL，n 从自然数0开始，刷新多个URL列表时，一次最多提交30个。必须以”http://域名/”开始。目录要以”/”结尾， 如刷新目录a下所有文件，格式为：http://abc.ucloud.cn/a/；如刷新文件目录a下面img.png文件， 格式为http://abc.ucloud.cn/a/img.png。请正确提交需要刷新的域名
     *
     * @return string[]|null
     */
    public function getUrlList()
    {
        return $this->get("UrlList");
    }

    /**
     * UrlList: 需要刷新的URL，n 从自然数0开始，刷新多个URL列表时，一次最多提交30个。必须以”http://域名/”开始。目录要以”/”结尾， 如刷新目录a下所有文件，格式为：http://abc.ucloud.cn/a/；如刷新文件目录a下面img.png文件， 格式为http://abc.ucloud.cn/a/img.png。请正确提交需要刷新的域名
     *
     * @param string[] $urlList
     */
    public function setUrlList(array $urlList)
    {
        $this->set("UrlList", $urlList);
    }
}
