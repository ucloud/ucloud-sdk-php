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
namespace UCloud\PathX;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\PathX\Apis\BindPathXSSLRequest;
use UCloud\PathX\Apis\BindPathXSSLResponse;
use UCloud\PathX\Apis\CreateGlobalSSHInstanceRequest;
use UCloud\PathX\Apis\CreateGlobalSSHInstanceResponse;
use UCloud\PathX\Apis\CreatePathXSSLRequest;
use UCloud\PathX\Apis\CreatePathXSSLResponse;
use UCloud\PathX\Apis\CreateUGAForwarderRequest;
use UCloud\PathX\Apis\CreateUGAForwarderResponse;
use UCloud\PathX\Apis\CreateUGAInstanceRequest;
use UCloud\PathX\Apis\CreateUGAInstanceResponse;
use UCloud\PathX\Apis\CreateUPathRequest;
use UCloud\PathX\Apis\CreateUPathResponse;
use UCloud\PathX\Apis\DeleteGlobalSSHInstanceRequest;
use UCloud\PathX\Apis\DeleteGlobalSSHInstanceResponse;
use UCloud\PathX\Apis\DeletePathXSSLRequest;
use UCloud\PathX\Apis\DeletePathXSSLResponse;
use UCloud\PathX\Apis\DeleteUGAForwarderRequest;
use UCloud\PathX\Apis\DeleteUGAForwarderResponse;
use UCloud\PathX\Apis\DeleteUGAInstanceRequest;
use UCloud\PathX\Apis\DeleteUGAInstanceResponse;
use UCloud\PathX\Apis\DeleteUPathRequest;
use UCloud\PathX\Apis\DeleteUPathResponse;
use UCloud\PathX\Apis\DescribeGlobalSSHInstanceRequest;
use UCloud\PathX\Apis\DescribeGlobalSSHInstanceResponse;
use UCloud\PathX\Apis\DescribePathXLineConfigRequest;
use UCloud\PathX\Apis\DescribePathXLineConfigResponse;
use UCloud\PathX\Apis\DescribePathXSSLRequest;
use UCloud\PathX\Apis\DescribePathXSSLResponse;
use UCloud\PathX\Apis\DescribeUGAInstanceRequest;
use UCloud\PathX\Apis\DescribeUGAInstanceResponse;
use UCloud\PathX\Apis\DescribeUPathRequest;
use UCloud\PathX\Apis\DescribeUPathResponse;
use UCloud\PathX\Apis\DescribeUPathTemplateRequest;
use UCloud\PathX\Apis\DescribeUPathTemplateResponse;
use UCloud\PathX\Apis\GetGlobalSSHPriceRequest;
use UCloud\PathX\Apis\GetGlobalSSHPriceResponse;
use UCloud\PathX\Apis\GetGlobalSSHUpdatePriceRequest;
use UCloud\PathX\Apis\GetGlobalSSHUpdatePriceResponse;
use UCloud\PathX\Apis\GetPathXMetricRequest;
use UCloud\PathX\Apis\GetPathXMetricResponse;
use UCloud\PathX\Apis\ModifyGlobalSSHPortRequest;
use UCloud\PathX\Apis\ModifyGlobalSSHPortResponse;
use UCloud\PathX\Apis\ModifyGlobalSSHTypeRequest;
use UCloud\PathX\Apis\ModifyGlobalSSHTypeResponse;
use UCloud\PathX\Apis\ModifyUPathBandwidthRequest;
use UCloud\PathX\Apis\ModifyUPathBandwidthResponse;
use UCloud\PathX\Apis\ModifyUPathTemplateRequest;
use UCloud\PathX\Apis\ModifyUPathTemplateResponse;
use UCloud\PathX\Apis\UGABindUPathRequest;
use UCloud\PathX\Apis\UGABindUPathResponse;
use UCloud\PathX\Apis\UGAUnBindUPathRequest;
use UCloud\PathX\Apis\UGAUnBindUPathResponse;
use UCloud\PathX\Apis\UnBindPathXSSLRequest;
use UCloud\PathX\Apis\UnBindPathXSSLResponse;

/**
 * This client is used to call actions of **PathX** service
 */
class PathXClient extends Client
{

    /**
     * BindPathXSSL - 绑定PathX SSL证书
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/bind_path_xssl
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "SSLId" => (string) 证书ID，如果没有指定证书ID也没有申请免费证书，HTTPS接入无法正常工作
     *     "UGAId" => (string) UGA实例ID
     *     "Port" => (array<integer>) 绑定SSL证书的HTTPS端口。Port.0 Port.1对应多个Port。如果Port不存在则不会绑定
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function bindPathXSSL(BindPathXSSLRequest $request = null): BindPathXSSLResponse
    {
        $resp = $this->invoke($request);
        return new BindPathXSSLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateGlobalSSHInstance - 创建GlobalSSH实例
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/create_global_ssh_instance
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID,如org-xxxx。请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Area" => (string) 填写支持SSH访问IP的地区名称，如“洛杉矶”，“新加坡”，“香港”，“东京”，“华盛顿”，“法兰克福”。Area和AreaCode两者必填一个
     *     "TargetIP" => (string) 被SSH访问的源站IP，仅支持IPv4地址。
     *     "Port" => (integer) 源站服务器监听的SSH端口，可取范围[1-65535]，不能使用80，443,  65123端口。如果InstanceType=Free，取值范围缩小为[22,3389],linux系统选择22，windows系统自动选3389。
     *     "AreaCode" => (string) AreaCode, 区域航空港国际通用代码。Area和AreaCode两者必填一个
     *     "Remark" => (string) 备注信息
     *     "ChargeType" => (string) 支付方式，如按月、按年、按时
     *     "Quantity" => (integer) 购买数量
     *     "InstanceType" => (string) 枚举值：["Enterprise","Basic","Free"], 分别代表企业版，基础版，免费版
     *     "BandwidthPackage" => (integer) Ultimate版本带宽包大小,枚举值：[0,20,40]。单位MB
     *     "ForwardRegion" => (string) InstanceType等于Basic时可以在["cn-bj2","cn-sh2","cn-gd"]中选择1个作为转发机房，Free版本固定为cn-bj2,其他付费版默认配置三个转发机房
     *     "CouponId" => (string) 使用代金券可冲抵部分费用
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "InstanceId" => (string) 实例ID，资源唯一标识
     *     "AcceleratingDomain" => (string) 加速域名，访问该域名可就近接入
     * ]
     *
     * @throws UCloudException
     */
    public function createGlobalSSHInstance(CreateGlobalSSHInstanceRequest $request = null): CreateGlobalSSHInstanceResponse
    {
        $resp = $this->invoke($request);
        return new CreateGlobalSSHInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreatePathXSSL - 创建SSL证书，可以把整个 Pem 证书内容传到SSLContent，或者把证书、私钥、CA证书分别传过来
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/create_path_xssl
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID org-xxx格式。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "SSLName" => (string) SSL证书的名字
     *     "SSLType" => (string) 所添加的SSL证书类型，目前只支持Pem格式
     *     "SSLContent" => (string) SSL证书的完整内容，私钥不可使用密码，包括加密证书的私钥、用户证书或CA证书等
     *     "UserCert" => (string) 用户自签证书内容
     *     "PrivateKey" => (string) 加密证书的私钥，不可使用密码保护，开启密码保护后，重启服务需要输入密码
     *     "CACert" => (string) CA颁发证书内容
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SSLId" => (string) SSL证书的Id
     * ]
     *
     * @throws UCloudException
     */
    public function createPathXSSL(CreatePathXSSLRequest $request = null): CreatePathXSSLResponse
    {
        $resp = $this->invoke($request);
        return new CreatePathXSSLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUGAForwarder - 创建加速实例转发器，支持HTTPS接入HTTPS回源、HTTPS接入HTTP回源、HTTP接入HTTP回源、TCP接入TCP回源、UDP接入UDP回源、 支持WSS接入WSS回源、WSS接入WS回源、WS接入WS回源
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/create_uga_forwarder
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UGAId" => (string) 加速配置实例ID
     *     "HTTPHTTP" => (array<integer>) HTTP接入HTTP回源转发，接入端口。禁用65123端口
     *     "HTTPHTTPRS" => (array<integer>) HTTP接入HTTP回源转发，源站监听端口
     *     "HTTPSHTTP" => (array<integer>) HTTPS接入HTTP回源转发，接入端口。禁用65123端口
     *     "HTTPSHTTPRS" => (array<integer>) HTTPS接入HTTP回源转发，回源端口
     *     "HTTPSHTTPS" => (array<integer>) HTTPS接入HTTPS回源转发，接入端口。禁用65123端口
     *     "HTTPSHTTPSRS" => (array<integer>) HTTPS接入HTTPS回源转发，源站监听端口
     *     "TCP" => (array<integer>) TCP接入端口
     *     "TCPRS" => (array<integer>) TCP回源端口
     *     "UDP" => (array<integer>) UDP接入端口
     *     "UDPRS" => (array<integer>) UDP回源端口
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function createUGAForwarder(CreateUGAForwarderRequest $request = null): CreateUGAForwarderResponse
    {
        $resp = $this->invoke($request);
        return new CreateUGAForwarderResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUGAInstance - 创建全球加速配置项
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/create_uga_instance
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID,如org-xxxx。请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Name" => (string) 加速配置实例名称
     *     "IPList" => (string) 加速源IP，多个IP用英文半角逗号(,)隔开；IPList和Domain二选一必填
     *     "Domain" => (string) 加速源域名，IPList和Domain二选一必填
     *     "TCP" => (array<string>) TCP端口号，已废弃。请使用 CreateUGAForwarder API 创建端口
     *     "UDP" => (array<string>) UDP端口号，已废弃。请使用 CreateUGAForwarder API 创建端口
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UGAId" => (string) 加速配置ID
     *     "CName" => (string) 加速域名 用户可把业务域名CName到此域名上。注意：未绑定线路情况时 加速域名解析不出IP。
     * ]
     *
     * @throws UCloudException
     */
    public function createUGAInstance(CreateUGAInstanceRequest $request = null): CreateUGAInstanceResponse
    {
        $resp = $this->invoke($request);
        return new CreateUGAInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUPath - 创建UPath
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/create_upath
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID,如org-xxxx。请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Name" => (string) UPath名字
     *     "LineId" => (string) 选择的线路
     *     "Bandwidth" => (integer) 线路带宽，最小1Mbps,最大带宽由 DescribePathXLineConfig 接口获得。如需更大带宽，请联系产品团队。
     *     "ChargeType" => (string) 计费模式，默认为Month 按月收费,可选范围['Month','Year','Dynamic']
     *     "Quantity" => (integer) 购买周期，ChargeType为Month时，Quantity默认为0代表购买到月底，按时和按年付费该参数必须大于0
     *     "PostPaid" => (boolean) 是否开启后付费, 默认为false
     *     "CouponId" => (string) 代金券Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UPathId" => (string) 加速线路实例Id
     * ]
     *
     * @throws UCloudException
     */
    public function createUPath(CreateUPathRequest $request = null): CreateUPathResponse
    {
        $resp = $this->invoke($request);
        return new CreateUPathResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteGlobalSSHInstance - 删除GlobalSSH实例
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/delete_global_ssh_instance
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID,如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 实例Id,资源的唯一标识
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function deleteGlobalSSHInstance(DeleteGlobalSSHInstanceRequest $request = null): DeleteGlobalSSHInstanceResponse
    {
        $resp = $this->invoke($request);
        return new DeleteGlobalSSHInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeletePathXSSL - 删除PathX SSL证书
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/delete_path_xssl
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "SSLId" => (string) SSL证书的ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function deletePathXSSL(DeletePathXSSLRequest $request = null): DeletePathXSSLResponse
    {
        $resp = $this->invoke($request);
        return new DeletePathXSSLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUGAForwarder - 删除加速实例转发器 按接入端口删除
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/delete_uga_forwarder
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UGAId" => (string) 加速配置实例ID
     *     "HTTPHTTP" => (array<integer>) HTTP接入HTTP回源，接入端口。禁用65123端口
     *     "HTTPSHTTP" => (array<integer>) HTTPS接入HTTP回源， 接入端口。禁用65123端口
     *     "HTTPSHTTPS" => (array<integer>) HTTPS接入HTTPS回源， 接入端口。禁用65123端口
     *     "TCP" => (array<integer>) TCP接入端口
     *     "UDP" => (array<integer>) UDP接入端口
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function deleteUGAForwarder(DeleteUGAForwarderRequest $request = null): DeleteUGAForwarderResponse
    {
        $resp = $this->invoke($request);
        return new DeleteUGAForwarderResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUGAInstance - 删除全球加速服务加速配置
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/delete_uga_instance
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID,如org-xxxx。请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UGAId" => (string) 加速配置实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function deleteUGAInstance(DeleteUGAInstanceRequest $request = null): DeleteUGAInstanceResponse
    {
        $resp = $this->invoke($request);
        return new DeleteUGAInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUPath - 删除UPath
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/delete_upath
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UPathId" => (string) 加速线路实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function deleteUPath(DeleteUPathRequest $request = null): DeleteUPathResponse
    {
        $resp = $this->invoke($request);
        return new DeleteUPathResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeGlobalSSHInstance - 获取GlobalSSH实例列表（传实例ID获取单个实例信息，不传获取项目下全部实例）
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/describe_global_ssh_instance
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID，如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 实例ID，资源唯一标识
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "InstanceSet" => (array<object>) GlobalSSH实例列表，实例的属性参考GlobalSSHInfo模型[
     *         [
     *             "InstanceId" => (string) 实例ID，资源唯一标识
     *             "InstanceType" => (string) 枚举值：["Enterprise","Basic","Free","Welfare"], 分别代表企业版，基础版本，免费版本，较早的公测免费版
     *             "AcceleratingDomain" => (string) GlobalSSH分配的加速域名。
     *             "Area" => (string) 被SSH访问的IP所在地区
     *             "TargetIP" => (string) 被SSH访问的源站 IPv4地址。
     *             "Remark" => (string) 备注信息
     *             "Port" => (integer) 源站服务器监听的SSH端口，windows系统为RDP端口
     *             "GlobalSSHPort" => (integer) InstanceType等于Free时，由系统自动分配，不等于源站Port值。InstanceType不等于Free时，与源站Port值相同。
     *             "ChargeType" => (string) 支付周期，如Month,Year,Dynamic等
     *             "CreateTime" => (integer) 资源创建时间戳
     *             "ExpireTime" => (integer) 资源过期时间戳
     *             "Expire" => (boolean) 是否过期
     *             "BandwidthPackage" => (integer) globalssh Ultimate带宽包大小
     *             "ForwardRegion" => (string) InstanceType为Basic版本时，需要展示具体分配的转发机房
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describeGlobalSSHInstance(DescribeGlobalSSHInstanceRequest $request = null): DescribeGlobalSSHInstanceResponse
    {
        $resp = $this->invoke($request);
        return new DescribeGlobalSSHInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribePathXLineConfig - 获取全球加速线路信息
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/describe_path_x_line_config
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID,如org-xxxx。请参考[GetProjectList接口](../summary/get_project_list.html)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "LineSet" => (array<object>) UGAA线路列表,参考UGAALine字段定义[
     *         [
     *             "LineFrom" => (string) 线路源
     *             "LineTo" => (string) 线路目的
     *             "LineFromName" => (string) 线路源中文名称
     *             "LineToName" => (string) 线路目的中文名称
     *             "MaxBandwidth" => (integer) 线路可售最大带宽
     *             "LineId" => (string) 线路计费Id
     *             "LineDetail" => (array<object>) 子线路信息[
     *                 [
     *                     "LineFrom" => (string) 线路源
     *                     "LineTo" => (string) 线路目的
     *                     "LineId" => (string) 线路计费Id
     *                     "LineFromName" => (string) 线路源中文名称
     *                     "LineToName" => (string) 线路目的中文名称
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describePathXLineConfig(DescribePathXLineConfigRequest $request = null): DescribePathXLineConfigResponse
    {
        $resp = $this->invoke($request);
        return new DescribePathXLineConfigResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribePathXSSL - 获取SSL证书信息,支持分页，支持按证书名称 证书域名模糊搜索
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/describe_path_xssl
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "SSLId" => (string) SSL证书的Id，不传分页获取证书列表
     *     "SearchValue" => (string) 不为空则按证书名称、证书域名模糊搜索 分页返回结果
     *     "Limit" => (integer) 最大返回条数，默认100，最大400
     *     "Offset" => (integer) 偏移值 默认为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) SSL证书详细信息，具体结构见 PathXSSLSet[
     *         [
     *             "SSLId" => (string) SSL证书的Id
     *             "SSLName" => (string) SSL证书的名字
     *             "SubjectName" => (string) 证书域名
     *             "ExpireTime" => (integer) 证书过期时间 时间戳
     *             "SourceType" => (integer) 证书来源，0：用户上传 1: 免费颁发
     *             "SSLMD5" => (string) SSL证书（用户证书、私钥、ca证书合并）内容md5值
     *             "CreateTime" => (integer) SSL证书的创建时间 时间戳
     *             "SSLBindedTargetSet" => (array<object>) SSL证书绑定的对象[
     *                 [
     *                     "ResourceId" => (string) SSL证书绑定到的实例ID
     *                     "ResourceName" => (string) SSL证书绑定到的实例名称
     *                 ]
     *             ]
     *             "SSLContent" => (string) SSL证书内容
     *         ]
     *     ]
     *     "TotalCount" => (integer) 符合条件的证书总数
     * ]
     *
     * @throws UCloudException
     */
    public function describePathXSSL(DescribePathXSSLRequest $request = null): DescribePathXSSLResponse
    {
        $resp = $this->invoke($request);
        return new DescribePathXSSLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUGAInstance - 获取全球加速服务加速配置信息，指定实例ID返回单个实例。未指定实例ID时 指定分页参数 则按创建时间降序 返回记录
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/describe_uga_instance
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UGAId" => (string) 加速配置实例ID，如果传了实例ID 则返回匹配实例ID的记录；如果没传则返回 ProjectId 下全部实例且符合分页要求
     *     "Limit" => (integer) 返回的最大条数，默认为100，最大值400
     *     "Offset" => (integer) 偏移量，默认为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UGAList" => (array<object>) 全球加速实例信息列表[
     *         [
     *             "UGAId" => (string) 加速配置实例ID
     *             "CName" => (string) 加速域名，请在加速区域配置您的业务域名的CName记录值为加速域名
     *             "UGAName" => (string) 加速配置名称
     *             "IPList" => (array<string>) 源站IP列表，多个值由半角英文逗号相隔
     *             "Domain" => (string) 源站域名
     *             "Location" => (string) 源站所在区域，加速实例在绑定线路后会自动设置该值。console页面上通过该值过滤加速实例可以绑定的upath实例。注意：缺少该值会导致在console上无法修改线路
     *             "UPathSet" => (array<object>) 绑定的加速线路[
     *                 [
     *                     "UPathName" => (string) UPath名字
     *                     "UPathId" => (string) UPath 实例ID
     *                     "Bandwidth" => (integer) 带宽 Mbps, 1~800Mbps
     *                     "LineId" => (string) 线路ID
     *                     "LineFromName" => (string) 线路起点中文名字，加速区域
     *                     "LineToName" => (string) 线路对端中文名字，源站区域
     *                     "LineFrom" => (string) 线路起点英文代号，加速区域
     *                     "LineTo" => (string) 线路对端英文代号，源站区域
     *                 ]
     *             ]
     *             "TaskSet" => (array<object>) 端口配置信息（不再维护，建议使用ForwarderSet）[
     *                 [
     *                     "Port" => (integer) 接入端口
     *                     "Protocol" => (string) 转发协议，枚举值["TCP"，"UDP"，"HTTPHTTP"，"HTTPSHTTP"，"HTTPSHTTPS"]。TCP和UDP代表四层转发，其余为七层转发
     *                 ]
     *             ]
     *             "L4ForwarderSet" => (array<object>) UGA 4层转发器配置，记录接入或回源端口，接入或回源协议信息[
     *                 [
     *                     "Port" => (integer) 接入端口
     *                     "Protocol" => (string) 转发协议，枚举值["TCP"，"UDP"，"HTTPHTTP"，"HTTPSHTTP"，"HTTPSHTTPS"]。TCP和UDP代表四层转发，其余为七层转发
     *                     "RSPort" => (integer) RSPort，源站监听端口
     *                 ]
     *             ]
     *             "L7ForwarderSet" => (array<object>) UGA 7层转发器配置，记录接入或回源端口，接入或回源协议信息 如绑定证书会返回证书ID[
     *                 [
     *                     "Port" => (integer) 接入端口
     *                     "Protocol" => (string) 转发协议，枚举值["TCP"，"UDP"，"HTTPHTTP"，"HTTPSHTTP"，"HTTPSHTTPS"]。TCP和UDP代表四层转发，其余为七层转发
     *                     "RSPort" => (integer) RSPort，源站监听端口
     *                     "SSLId" => (string) 证书ID
     *                     "SSLName" => (string) 证书名称
     *                 ]
     *             ]
     *             "OutPublicIpList" => (array<object>) 线路出口IP地址[
     *                 [
     *                     "IP" => (string)  线路出口EIP
     *                     "Area" => (string) 线路出口机房代号
     *                 ]
     *             ]
     *         ]
     *     ]
     *     "TotalCount" => (integer) 符合条件的总数
     * ]
     *
     * @throws UCloudException
     */
    public function describeUGAInstance(DescribeUGAInstanceRequest $request = null): DescribeUGAInstanceResponse
    {
        $resp = $this->invoke($request);
        return new DescribeUGAInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUPath - 获取加速线路信息
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/describe_upath
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UPathId" => (string) 如果不填参数 返回 ProjectId 下所有的线路资源，填此参数则返回upath实例ID匹配的线路
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UPathSet" => (array<object>) 线路信息数组[
     *         [
     *             "PostPaid" => (boolean) 是否为后付费实例
     *             "ChargeType" => (string) 计费模式，默认为Month 按月收费,可选范围['Month','Year','Dynamic']
     *             "Name" => (string) UPath实例名字
     *             "UPathId" => (string) UPath加速线路实例ID
     *             "Bandwidth" => (integer) 带宽，单位Mbps
     *             "LineId" => (string) 选择的线路
     *             "UGAList" => (array<object>) 与该UPath绑定的UGA列表[
     *                 [
     *                     "UGAId" => (string) 加速配置ID
     *                     "IPList" => (array<string>) 源站IP列表，多个值由半角英文逗号相隔
     *                     "Domain" => (string) 源站域名
     *                 ]
     *             ]
     *             "CreateTime" => (integer) UPath创建的时间，10位时间戳
     *             "ExpireTime" => (integer) UPath的过期时间，10位时间戳
     *             "LineFromName" => (string) 线路入口名称
     *             "LineToName" => (string) 线路出口名称
     *             "OutPublicIpList" => (array<object>) 线路出口IP数组[
     *                 [
     *                     "IP" => (string)  线路出口EIP
     *                     "Area" => (string) 线路出口机房代号
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describeUPath(DescribeUPathRequest $request = null): DescribeUPathResponse
    {
        $resp = $this->invoke($request);
        return new DescribeUPathResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUPathTemplate - 查询UPath的监控模板
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/describe_upath_template
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UPathId" => (string) 加速线路实例ID,格式 upath-xxxx
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 监控模板详情[
     *         [
     *             "AlarmStrategy" => (string) 收敛策略，可选范围 ['Exponential','Continuous','Once']，分别对应指数递增、连续告警、单次告警
     *             "AlarmFrequency" => (integer) 告警探测周期，单位秒
     *             "Compare" => (string) 比较策略，可选 ['GE','LE']  分别代表不小于和不大于
     *             "ContactGroupId" => (integer) 联系组ID
     *             "MetricName" => (string) 告警指标名称, 所有n的个数必须一致。目前仅允许以下四项：UpathNetworkOut:出向带宽，UpathNetworkIn:入向带宽，UpathNetworkOutUsage:出向带宽使用率，UpathNetworkInUsage:入向带宽使用率
     *             "Threshold" => (integer) 告警阈值，带宽使用率的阈值范围是[50,100]的正整数，带宽告警阈值为1000000的倍数, 如大于2Mbps则告警 阈值应该传 2000000
     *             "TriggerCount" => (integer) 告警触发周期（次数）
     *             "AlarmTemplateRuleId" => (integer) 告警模板策略ID
     *             "ResourceType" => (string) 资源类型
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describeUPathTemplate(DescribeUPathTemplateRequest $request = null): DescribeUPathTemplateResponse
    {
        $resp = $this->invoke($request);
        return new DescribeUPathTemplateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetGlobalSSHPrice - 获取GlobalSSH价格
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/get_global_ssh_price
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID,如org-xxxx。请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Quantity" => (integer) 购买周期，如果ChargeType为Month，Quantity默认为0；其他情况必须为大于0的整数
     *     "ChargeType" => (string) 计费类型：Dynamic，Month，Year
     *     "InstanceType" => (string) 版本类型。枚举值，Enterprise:企业版；Basic:基础版。可不填，默认为Basic。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (number) 价格,返回单位为元
     * ]
     *
     * @throws UCloudException
     */
    public function getGlobalSSHPrice(GetGlobalSSHPriceRequest $request = null): GetGlobalSSHPriceResponse
    {
        $resp = $this->invoke($request);
        return new GetGlobalSSHPriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetGlobalSSHUpdatePrice - 获取GlobalSSH升级价格
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/get_global_ssh_update_price
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID,如org-xxxx。请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "InstanceType" => (string) 升级后的实例类型。枚举值，Enterprise:企业版；Basic:基础版。
     *     "InstanceId" => (string) 实例ID，唯一资源标识。从免费版升级到付费版可不填，其他情况必填。
     *     "Quantity" => (integer) 购买周期，如果ChargeType为Month，Quantity可以不填默认为0；其他情况必须为正整数。
     *     "ChargeType" => (string) 计费类型：Dynamic，Month，Year。从免费版升级到付费版必须传，其他情况不需要传
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (number) 价格,返回单位为元。正数表示付费升级，负数表示降级退费。
     * ]
     *
     * @throws UCloudException
     */
    public function getGlobalSSHUpdatePrice(GetGlobalSSHUpdatePriceRequest $request = null): GetGlobalSSHUpdatePriceResponse
    {
        $resp = $this->invoke($request);
        return new GetGlobalSSHUpdatePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetPathXMetric - 获取全球加速监控信息
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/get_path_x_metric
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ResourceId" => (string) ResourceId，如upath ID  和 uga ID
     *     "BeginTime" => (integer) 查询起始时间，10位长度时间戳
     *     "EndTime" => (integer) 查询结束时间，10位长度时间戳
     *     "MetricName" => (array<string>) 查询监控的指标项。目前仅允许以下四项：NetworkOut:出向带宽，NetworkIn:入向带宽，NetworkOutUsage:出向带宽使用率，NetworkInUsage:入向带宽使用率
     *     "ResourceType" => (string) upath:加速线路,uga:加速实例
     *     "LineId" => (string) 具体线路id，调用DescribePathXLineConfig接口获取线路列表
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (object) 监控数据结果集[
     *         "NetworkOut" => (array<object>) 出向带宽[
     *             [
     *                 "Timestamp" => (integer) 时间戳
     *                 "Value" => (integer) 监控点数值
     *             ]
     *         ]
     *         "NetworkIn" => (array<object>) 入向带宽[
     *             [
     *                 "Timestamp" => (integer) 时间戳
     *                 "Value" => (integer) 监控点数值
     *             ]
     *         ]
     *         "NetworkOutUsage" => (array<object>) 出向带宽使用率[
     *             [
     *                 "Timestamp" => (integer) 时间戳
     *                 "Value" => (integer) 监控点数值
     *             ]
     *         ]
     *         "NetworkInUsage" => (array<object>) 入向带宽使用率[
     *             [
     *                 "Timestamp" => (integer) 时间戳
     *                 "Value" => (integer) 监控点数值
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getPathXMetric(GetPathXMetricRequest $request = null): GetPathXMetricResponse
    {
        $resp = $this->invoke($request);
        return new GetPathXMetricResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyGlobalSSHPort - 修改GlobalSSH端口
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/modify_global_ssh_port
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID，如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 实例ID,资源唯一标识。当前仅收费版GlobalSSH实例可以修改端口。
     *     "Port" => (integer) 源站服务器监听的SSH端口号。收费版本端口范围[1,65535]且不能为80，443，65123端口。免费版不支持修改端口。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function modifyGlobalSSHPort(ModifyGlobalSSHPortRequest $request = null): ModifyGlobalSSHPortResponse
    {
        $resp = $this->invoke($request);
        return new ModifyGlobalSSHPortResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyGlobalSSHType - 修改GlobalSSH实例类型，仅支持低版本升级到高版本，不支持高版本降级到低版本
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/modify_global_ssh_type
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID，如org-xxxx。请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "InstanceId" => (string) 实例ID,资源唯一标识
     *     "InstanceType" => (string) 取值范围["Enterprise","Basic"]，分别对应企业版和基础版，表示升级后的实例类型。比如从Free版本升级为Basic版或Enterprise版，不可从收费版降级为免费版，或从企业版降级为基础版
     *     "ChargeType" => (string) 支付方式，如按月、按年、按时
     *     "Quantity" => (string) 购买时间，当ChargeType为Month，Quantity为0代表购买到月底
     *     "CouponId" => (string) 可抵扣费用的券，通常不使用
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function modifyGlobalSSHType(ModifyGlobalSSHTypeRequest $request = null): ModifyGlobalSSHTypeResponse
    {
        $resp = $this->invoke($request);
        return new ModifyGlobalSSHTypeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUPathBandwidth - 修改加速线路带宽
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/modify_upath_bandwidth
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UPathId" => (string) UPath 加速线路实例Id
     *     "Bandwidth" => (integer) 线路带宽，单位Mbps。最小1Mbps,最大带宽由 DescribePathXLineConfig 接口获得。如需更大带宽，请联系产品团队。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function modifyUPathBandwidth(ModifyUPathBandwidthRequest $request = null): ModifyUPathBandwidthResponse
    {
        $resp = $this->invoke($request);
        return new ModifyUPathBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUPathTemplate - 修改UPath监控告警项
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/modify_upath_template
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UPathId" => (string) 加速线路实例ID
     *     "MetricName" => (array<string>) 告警指标名称, 所有n的个数必须一致。目前仅允许以下四项：UpathNetworkOut:出向带宽，UpathNetworkIn:入向带宽，UpathNetworkOutUsage:出向带宽使用率，UpathNetworkInUsage:入向带宽使用率
     *     "Threshold" => (array<integer>) 告警阈值，带宽使用率的阈值范围是[50,100]的正整数，带宽告警阈值为1000000的倍数, 如大于2Mbps则告警 阈值应该传 2000000
     *     "AlarmFrequency" => (array<integer>) 告警探测周期，单位：秒
     *     "ContactGroupId" => (array<integer>) 告警组id
     *     "Compare" => (array<string>) 比较策略，可选 ['GE','LE']  分别代表不小于和不大于
     *     "AlarmStrategy" => (array<string>) 收敛策略，可选范围 ['Exponential','Continuous','Once']，分别对应指数递增、连续告警、单次告警
     *     "TriggerCount" => (array<integer>) 告警触发周期（次数）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function modifyUPathTemplate(ModifyUPathTemplateRequest $request = null): ModifyUPathTemplateResponse
    {
        $resp = $this->invoke($request);
        return new ModifyUPathTemplateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UGABindUPath - UGA绑定UPath
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/uga_bind_upath
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UGAId" => (string) 加速配置实例ID，格式uga-xxxx
     *     "UPathId" => (string) 加速线路实例ID，格式upath-xxx
     *     "CouponId" => (string) 代金券
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function ugaBindUPath(UGABindUPathRequest $request = null): UGABindUPathResponse
    {
        $resp = $this->invoke($request);
        return new UGABindUPathResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UGAUnBindUPath - UGA与UPath解绑
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/uga_un_bind_upath
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UGAId" => (string) 加速配置实例ID 格式uga-xxx
     *     "UPathId" => (string) 加速线路实例ID 格式upath-xxx
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function ugaUnBindUPath(UGAUnBindUPathRequest $request = null): UGAUnBindUPathResponse
    {
        $resp = $this->invoke($request);
        return new UGAUnBindUPathResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UnBindPathXSSL - 解绑PathX SSL 证书
     *
     * See also: https://docs.ucloud.cn/api/PathX-api/un_bind_path_xssl
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UGAId" => (string) UGA实例ID。
     *     "SSLId" => (string) SSL证书ID。
     *     "Port" => (array<integer>) 解绑SSL证书的HTTPS端口。Port.0 Port.1格式 端口错误则解绑失败。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function unBindPathXSSL(UnBindPathXSSLRequest $request = null): UnBindPathXSSLResponse
    {
        $resp = $this->invoke($request);
        return new UnBindPathXSSLResponse($resp->toArray(), $resp->getRequestId());
    }
}
