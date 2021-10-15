<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\UAccount;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UAccount\Apis\AddMemberToProjectRequest;
use UCloud\UAccount\Apis\AddMemberToProjectResponse;
use UCloud\UAccount\Apis\FreezeMemberRequest;
use UCloud\UAccount\Apis\FreezeMemberResponse;
use UCloud\UAccount\Apis\GetNetworkMaskRequest;
use UCloud\UAccount\Apis\GetNetworkMaskResponse;
use UCloud\UAccount\Apis\GetProjectListRequest;
use UCloud\UAccount\Apis\GetProjectListResponse;
use UCloud\UAccount\Apis\GetRegionRequest;
use UCloud\UAccount\Apis\GetRegionResponse;
use UCloud\UAccount\Apis\InviteSubaccountRequest;
use UCloud\UAccount\Apis\InviteSubaccountResponse;
use UCloud\UAccount\Apis\RemoveMemberFromProjectRequest;
use UCloud\UAccount\Apis\RemoveMemberFromProjectResponse;
use UCloud\UAccount\Apis\SetNetworkMaskRequest;
use UCloud\UAccount\Apis\SetNetworkMaskResponse;

/**
 * This client is used to call actions of **UAccount** service
 */
class UAccountClient extends Client
{

    /**
     * AddMemberToProject - 添加成员到项目
     *
     * See also: https://docs.ucloud.cn/api/uaccount-api/add_member_to_project
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID，请参考[GetProjectList接口](../summary/get_project_list.html)的描述。不填写为创建时间最早的项目。
     *     "MemberEmail" => (string) 被加入成员Email
     *     "CharacterId" => (string) 被加入成员归属角色ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AddMemberToProjectResponse
     * @throws UCloudException
     */
    public function addMemberToProject(AddMemberToProjectRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddMemberToProjectResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * FreezeMember - 冻结成员
     *
     * See also: https://docs.ucloud.cn/api/uaccount-api/freeze_member
     *
     * Arguments:
     *
     * $args = [
     *     "MemberEmail" => (string) 需要被冻结的成员Email
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return FreezeMemberResponse
     * @throws UCloudException
     */
    public function freezeMember(FreezeMemberRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new FreezeMemberResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetNetworkMask - 查询登录与API调用的网络掩码
     *
     * See also: https://docs.ucloud.cn/api/uaccount-api/get_network_mask
     *
     * Arguments:
     *
     * $args = [
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 接口返回数据[
     *         "APINetworkMask" => (string) API调用网络掩码，默认空字符串，不限制登录IP，多个IP以英文逗号分隔。
     *         "LoginNetworkMask" => (string) 登录网络掩码，默认空字符串，不限制登录IP，多个IP以英文逗号分隔。
     *     ]
     * ]
     *
     * @return GetNetworkMaskResponse
     * @throws UCloudException
     */
    public function getNetworkMask(GetNetworkMaskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetNetworkMaskResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetProjectList - 获取项目列表
     *
     * See also: https://docs.ucloud.cn/api/uaccount-api/get_project_list
     *
     * Arguments:
     *
     * $args = [
     *     "IsFinance" => (string) 是否是财务账号（Yes：是，No：否）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ProjectCount" => (integer) 项目总数
     *     "ProjectSet" => (array<object>) JSON格式的项目列表实例[
     *         [
     *             "ProjectId" => (string) 项目ID
     *             "ProjectName" => (string) 项目名称
     *             "CreateTime" => (integer) 创建时间(Unix时间戳)
     *             "IsDefault" => (boolean) 是否为默认项目
     *             "ResourceCount" => (integer) 项目下资源数量（已废弃，不建议使用）
     *             "MemberCount" => (integer) 项目下成员数量
     *             "ParentId" => (string) 父项目ID（已废弃）
     *             "ParentName" => (string) 父项目名称（已废弃）
     *         ]
     *     ]
     * ]
     *
     * @return GetProjectListResponse
     * @throws UCloudException
     */
    public function getProjectList(GetProjectListRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetProjectListResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetRegion - 获取用户在各数据中心的权限等信息
     *
     * See also: https://docs.ucloud.cn/api/uaccount-api/get_region
     *
     * Arguments:
     *
     * $args = [
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Regions" => (array<object>) 各数据中心信息[
     *         [
     *             "RegionId" => (integer) 数据中心ID
     *             "RegionName" => (string) 数据中心名称
     *             "IsDefault" => (boolean) 是否用户当前默认数据中心
     *             "BitMaps" => (string) 用户在此数据中心的权限位
     *             "Region" => (string) 地域名字，如cn-bj
     *             "Zone" => (string) 可用区名字，如cn-bj-01
     *         ]
     *     ]
     * ]
     *
     * @return GetRegionResponse
     * @throws UCloudException
     */
    public function getRegion(GetRegionRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetRegionResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * InviteSubaccount - 邀请子帐号成员
     *
     * See also: https://docs.ucloud.cn/api/uaccount-api/invite_subaccount
     *
     * Arguments:
     *
     * $args = [
     *     "UserEmail" => (string) 受邀成员邮箱地址，不得重复
     *     "UserPhone" => (string) 受邀成员手机号码
     *     "UserName" => (string) 受邀成员姓名
     *     "IsFinance" => (string) 是否有财务权限(true:是,false:否,默认为否)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return InviteSubaccountResponse
     * @throws UCloudException
     */
    public function inviteSubaccount(InviteSubaccountRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new InviteSubaccountResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RemoveMemberFromProject - 从项目中移除成员
     *
     * See also: https://docs.ucloud.cn/api/uaccount-api/remove_member_from_project
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID，请参考[GetProjectList接口](../summary/get_project_list.html)的描述。不填写为默认项目，子帐号必须填写。
     *     "MemberEmail" => (string) 需要被移除成员Email
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RemoveMemberFromProjectResponse
     * @throws UCloudException
     */
    public function removeMemberFromProject(RemoveMemberFromProjectRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RemoveMemberFromProjectResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SetNetworkMask - 设置登录与API调用的网络掩码
     *
     * See also: https://docs.ucloud.cn/api/uaccount-api/set_network_mask
     *
     * Arguments:
     *
     * $args = [
     *     "Code" => (string) 短信验证码
     *     "APINetworkMask" => (string) API调用网络掩码，多个IP以英文逗号分隔。默认空字符串，不限制登录IP。
     *     "LoginNetworkMask" => (string) 登录网络掩码，多个IP以英文逗号分隔。默认空字符串，不限制登录IP。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return SetNetworkMaskResponse
     * @throws UCloudException
     */
    public function setNetworkMask(SetNetworkMaskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SetNetworkMaskResponse($resp->toArray(), $resp->getRequestId());
    }
}
