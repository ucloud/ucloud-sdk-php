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

namespace UCloud\USMS\Apis;

use UCloud\Core\Request\Request;

class QueryUSMSSignatureRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "QueryUSMSSignature"]);
    }


    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }
    /**
     * SigId: 已申请的短信签名ID（短信签名申请时的工单ID）；签名ID和签名至少需填写1项；
     *
     * @return string|null
     */
    public function getSigId()
    {
        return $this->get("SigId");
    }

    /**
     * SigId: 已申请的短信签名ID（短信签名申请时的工单ID）；签名ID和签名至少需填写1项；
     *
     * @param string $sigId
     */
    public function setSigId(string $sigId)
    {
        $this->set("SigId", $sigId);
    }
    /**
     * SigContent: 签名内容；签名ID和签名至少需填写1项；
     *
     * @return string|null
     */
    public function getSigContent()
    {
        return $this->get("SigContent");
    }

    /**
     * SigContent: 签名内容；签名ID和签名至少需填写1项；
     *
     * @param string $sigContent
     */
    public function setSigContent(string $sigContent)
    {
        $this->set("SigContent", $sigContent);
    }
}
