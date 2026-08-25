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
namespace UCloud\Sandbox;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\Sandbox\Apis\CheckSandboxCustomDomainRequest;
use UCloud\Sandbox\Apis\CheckSandboxCustomDomainResponse;
use UCloud\Sandbox\Apis\CreateSandboxSiteRequest;
use UCloud\Sandbox\Apis\CreateSandboxSiteResponse;
use UCloud\Sandbox\Apis\DeleteSandboxSiteRequest;
use UCloud\Sandbox\Apis\DeleteSandboxSiteResponse;
use UCloud\Sandbox\Apis\GetSandboxSiteRequest;
use UCloud\Sandbox\Apis\GetSandboxSiteResponse;
use UCloud\Sandbox\Apis\ListSandboxSitesRequest;
use UCloud\Sandbox\Apis\ListSandboxSitesResponse;
use UCloud\Sandbox\Apis\UpdateSandboxSiteRequest;
use UCloud\Sandbox\Apis\UpdateSandboxSiteResponse;
use UCloud\Sandbox\Apis\UpdateSandboxSiteCustomDomainRequest;
use UCloud\Sandbox\Apis\UpdateSandboxSiteCustomDomainResponse;

/**
 * This client is used to call actions of **Sandbox** service
 */
class SandboxClient extends Client
{

    /**
     * CheckSandboxCustomDomain - 检查自定义域名
     *
     * See also: https://docs.ucloud.cn/api/sandbox-api/check_sandbox_custom_domain
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CustomDomain" => (string) 自定义域名
     *     "TargetDomain" => (string) 目标域名
     *     "Get" => (boolean) 如果为true，则表示获取检查结果
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Status" => (string) 检查结果Unknown:未知Checking：检查中Success：成功Timeout：超时Error：检查失败
     * ]
     *
     * @return CheckSandboxCustomDomainResponse
     * @throws UCloudException
     */
    public function checkSandboxCustomDomain(CheckSandboxCustomDomainRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CheckSandboxCustomDomainResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateSandboxSite - 创建站点空间
     *
     * See also: https://docs.ucloud.cn/api/sandbox-api/create_sandbox_site
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) 站点空间名称
     *     "APIKey" => (string) 密钥
     *     "KeyID" => (string) 密钥ID
     *     "AccessCode" => (string) 访问码
     *     "Envs" => (string) 环境变量，格式：["key=value"]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return CreateSandboxSiteResponse
     * @throws UCloudException
     */
    public function createSandboxSite(CreateSandboxSiteRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateSandboxSiteResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteSandboxSite - 删除站点空间
     *
     * See also: https://docs.ucloud.cn/api/sandbox-api/delete_sandbox_site
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SandboxID" => (string) 站点沙箱ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteSandboxSiteResponse
     * @throws UCloudException
     */
    public function deleteSandboxSite(DeleteSandboxSiteRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteSandboxSiteResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetSandboxSite - 获取沙箱站点
     *
     * See also: https://docs.ucloud.cn/api/sandbox-api/get_sandbox_site
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SandboxID" => (string) 沙箱ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Site" => (object) 站点[
     *         "Name" => (string) 名称
     *         "Ready" => (boolean) 是否就绪
     *         "ID" => (string) 站点ID
     *         "SandboxID" => (string) 沙箱ID
     *         "Host" => (string) 站点访问地址
     *         "KeyID" => (string) 站点Key ID
     *         "UpdateTime" => (integer) 更新时间
     *         "AccessCode" => (string) 访问码
     *         "ConnectKey" => (string) 连接密钥
     *         "Envs" => (array<string>) 站点环境变量。格式：["key=value"]
     *         "CustomDomain" => (string) 自定义域名
     *         "CustomDomainStatus" => (string) 自定义域名签发状态
     *         "CustomDomainError" => (string) 自定义域名签发错误信息
     *         "IPAccess" => (object) IP限制[
     *             "IPList" => (array<string>) IP 列表
     *             "Mode" => (string) IP限制模式"":不限制IP“allow”:自定义白名单“deny”:自定义黑名单
     *         ]
     *     ]
     * ]
     *
     * @return GetSandboxSiteResponse
     * @throws UCloudException
     */
    public function getSandboxSite(GetSandboxSiteRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetSandboxSiteResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListSandboxSites - 列出站点空间
     *
     * See also: https://docs.ucloud.cn/api/sandbox-api/list_sandbox_sites
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Sites" => (array<object>) 站点空间列表[
     *         [
     *             "Name" => (string) 名称
     *             "Ready" => (boolean) 是否就绪
     *             "ID" => (string) 站点ID
     *             "SandboxID" => (string) 沙箱ID
     *             "Host" => (string) 站点访问地址
     *             "KeyID" => (string) 站点Key ID
     *             "UpdateTime" => (integer) 更新时间
     *             "AccessCode" => (string) 访问码
     *             "ConnectKey" => (string) 连接密钥
     *             "Envs" => (array<string>) 站点环境变量。格式：["key=value"]
     *             "CustomDomain" => (string) 自定义域名
     *             "CustomDomainStatus" => (string) 自定义域名签发状态
     *             "CustomDomainError" => (string) 自定义域名签发错误信息
     *             "IPAccess" => (object) IP限制[
     *                 "IPList" => (array<string>) IP 列表
     *                 "Mode" => (string) IP限制模式"":不限制IP“allow”:自定义白名单“deny”:自定义黑名单
     *             ]
     *         ]
     *     ]
     *     "CustomTargetDomain" => (string) 目标域名地址
     * ]
     *
     * @return ListSandboxSitesResponse
     * @throws UCloudException
     */
    public function listSandboxSites(ListSandboxSitesRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListSandboxSitesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateSandboxSite - 更新站点空间
     *
     * See also: https://docs.ucloud.cn/api/sandbox-api/update_sandbox_site
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SandboxID" => (string) 站点沙箱ID
     *     "Name" => (string) 更新站点空间名称
     *     "APIKey" => (string) 更新站点空间API Key
     *     "KeyID" => (string) 更新站点空间Key ID（需要和APIKey一起传）
     *     "Envs" => (string) 更新站点空间环境变量，格式为["Key=Value"]
     *     "AccessCode" => (string) 访问码
     *     "IPAccess" => (object) [
     *         "IPList" => (string) 访问限制IP，格式["192.168.1.2","192.168.1.3"]
     *         "Mode" => (string) 访问模式，- ""：无IP限制- "allow":白名单模式- "deny":黑名单
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateSandboxSiteResponse
     * @throws UCloudException
     */
    public function updateSandboxSite(UpdateSandboxSiteRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateSandboxSiteResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateSandboxSiteCustomDomain - 更新沙箱站点自定义域名
     *
     * See also: https://docs.ucloud.cn/api/sandbox-api/update_sandbox_site_custom_domain
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SandboxID" => (string) 沙箱ID
     *     "CustomDomain" => (string) 自定义域名
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateSandboxSiteCustomDomainResponse
     * @throws UCloudException
     */
    public function updateSandboxSiteCustomDomain(UpdateSandboxSiteCustomDomainRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateSandboxSiteCustomDomainResponse($resp->toArray(), $resp->getRequestId());
    }
}
