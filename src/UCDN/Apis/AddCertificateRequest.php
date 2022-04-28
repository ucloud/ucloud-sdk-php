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

class AddCertificateRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "AddCertificate"]);
        $this->markRequired("CertName");
        $this->markRequired("UserCert");
        $this->markRequired("PrivateKey");
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
     * CertName: 证书名称
     *
     * @return string|null
     */
    public function getCertName()
    {
        return $this->get("CertName");
    }

    /**
     * CertName: 证书名称
     *
     * @param string $certName
     */
    public function setCertName($certName)
    {
        $this->set("CertName", $certName);
    }

    /**
     * UserCert: 用户证书
     *
     * @return string|null
     */
    public function getUserCert()
    {
        return $this->get("UserCert");
    }

    /**
     * UserCert: 用户证书
     *
     * @param string $userCert
     */
    public function setUserCert($userCert)
    {
        $this->set("UserCert", $userCert);
    }

    /**
     * PrivateKey: 用户私钥
     *
     * @return string|null
     */
    public function getPrivateKey()
    {
        return $this->get("PrivateKey");
    }

    /**
     * PrivateKey: 用户私钥
     *
     * @param string $privateKey
     */
    public function setPrivateKey($privateKey)
    {
        $this->set("PrivateKey", $privateKey);
    }

    /**
     * CaCert: Ca证书，默认为空
     *
     * @return string|null
     */
    public function getCaCert()
    {
        return $this->get("CaCert");
    }

    /**
     * CaCert: Ca证书，默认为空
     *
     * @param string $caCert
     */
    public function setCaCert($caCert)
    {
        $this->set("CaCert", $caCert);
    }
}
