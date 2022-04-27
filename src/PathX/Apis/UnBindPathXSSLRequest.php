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

namespace UCloud\PathX\Apis;

use UCloud\Core\Request\Request;

class UnBindPathXSSLRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UnBindPathXSSL"]);
        $this->markRequired("ProjectId");
        $this->markRequired("UGAId");
        $this->markRequired("SSLId");
        $this->markRequired("Port");
    }


    /**
     * ProjectId: 项目ID。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }
    /**
     * UGAId: UGA实例ID。
     *
     * @return string|null
     */
    public function getUGAId()
    {
        return $this->get("UGAId");
    }

    /**
     * UGAId: UGA实例ID。
     *
     * @param string $ugaId
     */
    public function setUGAId(string $ugaId)
    {
        $this->set("UGAId", $ugaId);
    }
    /**
     * SSLId: SSL证书ID。
     *
     * @return string|null
     */
    public function getSSLId()
    {
        return $this->get("SSLId");
    }

    /**
     * SSLId: SSL证书ID。
     *
     * @param string $sslId
     */
    public function setSSLId(string $sslId)
    {
        $this->set("SSLId", $sslId);
    }
    /**
     * Port: 解绑SSL证书的HTTPS端口。Port.0 Port.1格式 端口错误则解绑失败。
     *
     * @return int[]|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: 解绑SSL证书的HTTPS端口。Port.0 Port.1格式 端口错误则解绑失败。
     *
     * @param int[] $port
     */
    public function setPort(array $port)
    {
        $this->set("Port", $port);
    }
}
