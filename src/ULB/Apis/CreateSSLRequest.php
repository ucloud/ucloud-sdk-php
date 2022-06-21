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
namespace UCloud\ULB\Apis;

use UCloud\Core\Request\Request;

class CreateSSLRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateSSL"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("SSLName");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
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
     * SSLName: SSL证书的名字，默认值不为空
     *
     * @return string|null
     */
    public function getSSLName()
    {
        return $this->get("SSLName");
    }

    /**
     * SSLName: SSL证书的名字，默认值不为空
     *
     * @param string $sslName
     */
    public function setSSLName($sslName)
    {
        $this->set("SSLName", $sslName);
    }

    /**
     * SSLType: 所添加的SSL证书类型，目前只支持Pem格式
     *
     * @return string|null
     */
    public function getSSLType()
    {
        return $this->get("SSLType");
    }

    /**
     * SSLType: 所添加的SSL证书类型，目前只支持Pem格式
     *
     * @param string $sslType
     */
    public function setSSLType($sslType)
    {
        $this->set("SSLType", $sslType);
    }

    /**
     * SSLContent: SSL证书的完整内容，包括用户证书、加密证书的私钥、CA证书
     *
     * @return string|null
     */
    public function getSSLContent()
    {
        return $this->get("SSLContent");
    }

    /**
     * SSLContent: SSL证书的完整内容，包括用户证书、加密证书的私钥、CA证书
     *
     * @param string $sslContent
     */
    public function setSSLContent($sslContent)
    {
        $this->set("SSLContent", $sslContent);
    }

    /**
     * UserCert: 用户的证书
     *
     * @return string|null
     */
    public function getUserCert()
    {
        return $this->get("UserCert");
    }

    /**
     * UserCert: 用户的证书
     *
     * @param string $userCert
     */
    public function setUserCert($userCert)
    {
        $this->set("UserCert", $userCert);
    }

    /**
     * PrivateKey: 加密证书的私钥
     *
     * @return string|null
     */
    public function getPrivateKey()
    {
        return $this->get("PrivateKey");
    }

    /**
     * PrivateKey: 加密证书的私钥
     *
     * @param string $privateKey
     */
    public function setPrivateKey($privateKey)
    {
        $this->set("PrivateKey", $privateKey);
    }

    /**
     * CaCert: CA证书
     *
     * @return string|null
     */
    public function getCaCert()
    {
        return $this->get("CaCert");
    }

    /**
     * CaCert: CA证书
     *
     * @param string $caCert
     */
    public function setCaCert($caCert)
    {
        $this->set("CaCert", $caCert);
    }
}
