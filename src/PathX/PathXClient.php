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
namespace UCloud\PathX;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\PathX\Apis\BindPathXSSLRequest;
use UCloud\PathX\Apis\BindPathXSSLResponse;
use UCloud\PathX\Apis\CreateGlobalSSHInstanceRequest;
use UCloud\PathX\Apis\CreateGlobalSSHInstanceResponse;
use UCloud\PathX\Apis\CreatePathXSSLRequest;
use UCloud\PathX\Apis\CreatePathXSSLResponse;
use UCloud\PathX\Apis\CreateUGA3InstanceRequest;
use UCloud\PathX\Apis\CreateUGA3InstanceResponse;
use UCloud\PathX\Apis\CreateUGA3PortRequest;
use UCloud\PathX\Apis\CreateUGA3PortResponse;
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
use UCloud\PathX\Apis\DeleteUGA3InstanceRequest;
use UCloud\PathX\Apis\DeleteUGA3InstanceResponse;
use UCloud\PathX\Apis\DeleteUGA3PortRequest;
use UCloud\PathX\Apis\DeleteUGA3PortResponse;
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
use UCloud\PathX\Apis\DescribeUGA3AreaRequest;
use UCloud\PathX\Apis\DescribeUGA3AreaResponse;
use UCloud\PathX\Apis\DescribeUGA3InstanceRequest;
use UCloud\PathX\Apis\DescribeUGA3InstanceResponse;
use UCloud\PathX\Apis\DescribeUGA3OptimizationRequest;
use UCloud\PathX\Apis\DescribeUGA3OptimizationResponse;
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
use UCloud\PathX\Apis\GetUGA3MetricRequest;
use UCloud\PathX\Apis\GetUGA3MetricResponse;
use UCloud\PathX\Apis\GetUGA3PriceRequest;
use UCloud\PathX\Apis\GetUGA3PriceResponse;
use UCloud\PathX\Apis\GetUGA3UpdatePriceRequest;
use UCloud\PathX\Apis\GetUGA3UpdatePriceResponse;
use UCloud\PathX\Apis\ModifyGlobalSSHPortRequest;
use UCloud\PathX\Apis\ModifyGlobalSSHPortResponse;
use UCloud\PathX\Apis\ModifyGlobalSSHRemarkRequest;
use UCloud\PathX\Apis\ModifyGlobalSSHRemarkResponse;
use UCloud\PathX\Apis\ModifyGlobalSSHTypeRequest;
use UCloud\PathX\Apis\ModifyGlobalSSHTypeResponse;
use UCloud\PathX\Apis\ModifyUGA3BandwidthRequest;
use UCloud\PathX\Apis\ModifyUGA3BandwidthResponse;
use UCloud\PathX\Apis\ModifyUGA3InstanceRequest;
use UCloud\PathX\Apis\ModifyUGA3InstanceResponse;
use UCloud\PathX\Apis\ModifyUGA3OriginInfoRequest;
use UCloud\PathX\Apis\ModifyUGA3OriginInfoResponse;
use UCloud\PathX\Apis\ModifyUGA3PortRequest;
use UCloud\PathX\Apis\ModifyUGA3PortResponse;
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
use UCloud\PathX\Apis\UpdatePathXWhitelistRequest;
use UCloud\PathX\Apis\UpdatePathXWhitelistResponse;

/**
 * This client is used to call actions of **PathX** service
 */
class PathXClient extends Client
{

    /**
     * BindPathXSSL - 绑定PathX SSL证书
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/bind_path_xssl
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
     * @return BindPathXSSLResponse
     * @throws UCloudException
     */
    public function bindPathXSSL(BindPathXSSLRequest $request = null) {
        $resp = $this->invoke($request);
        return new BindPathXSSLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateGlobalSSHInstance - 创建GlobalSSH实例
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/create_global_ssh_instance
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID,如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Area" => (string) 填写支持SSH访问IP的地区名称，如“洛杉矶”，“新加坡”，“香港”，“东京”，“华盛顿”，“法兰克福”，“首尔”。Area和AreaCode两者必填一个
     *     "TargetIP" => (string) 被SSH访问的源站IP，仅支持IPv4地址。
     *     "Port" => (integer) 源站服务器监听的SSH端口，可取范围[1-65535]，不能使用80，443,  65123端口。如果InstanceType=Free，取值范围缩小为[22,3389],linux系统选择22，windows系统自动选3389。
     *     "AreaCode" => (string) AreaCode, 区域航空港国际通用代码。Area和AreaCode两者必填一个
     *     "Remark" => (string) 备注信息
     *     "ChargeType" => (string) 支付方式，如按月：Month、 按年：Year、按时：Dynamic
     *     "Quantity" => (integer) 购买数量按月购买至月底请传0
     *     "InstanceType" => (string) 枚举值：["Ultimate","Enterprise","Basic","Primary"], 分别代表旗舰版，企业版，基础版，入门版
     *     "BandwidthPackage" => (integer) Ultimate版本带宽包大小,枚举值：[0,20,40]。单位MB
     *     "ForwardRegion" => (string) InstanceType等于Basic时可以在["cn-bj2","cn-sh2","cn-gd"]中选择1个作为转发机房，其他付费版默认配置三个转发机房
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
     * @return CreateGlobalSSHInstanceResponse
     * @throws UCloudException
     */
    public function createGlobalSSHInstance(CreateGlobalSSHInstanceRequest $request = null) {
        $resp = $this->invoke($request);
        return new CreateGlobalSSHInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreatePathXSSL - 创建SSL证书，可以把整个 Pem 证书内容传到SSLContent，或者把证书、私钥、CA证书分别传过来
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/create_path_xssl
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
     * @return CreatePathXSSLResponse
     * @throws UCloudException
     */
    public function createPathXSSL(CreatePathXSSLRequest $request = null) {
        $resp = $this->invoke($request);
        return new CreatePathXSSLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUGA3Instance - 创建全球统一接入加速配置项
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/create_uga3_instance
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID,如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Bandwidth" => (integer) 实例的共享带宽大小，单位Mbps
     *     "Name" => (string) 加速配置实例名称,默认PathX
     *     "AreaCode" => (string) 非必填,如果不填，会根据Domain 和IPList 去选一个最近的源站区域BKK表示AreaCode;曼谷表示Area["BKK":"曼谷","DXB":"迪拜","FRA":"法兰克福","SGN":"胡志明市","HKG":"香港",CGK":"雅加达","LOS":"拉各斯","LHR":"伦敦","LAX":"洛杉矶","MNL":"马尼拉","DME":"莫斯科","BOM":"孟买","MSP":"圣保罗","ICN":"首尔","PVG":"上海","SIN":"新加坡","NRT":"东京","IAD":"华盛顿","TPE": "台北"]
     *     "Remark" => (string) 备注项
     *     "ChargeType" => (string) 支付方式，如按月、按年、按时[Year,Month,Dynamic]
     *     "Quantity" => (integer) 购买周期
     *     "AccelerationArea" => (string) 加速大区,默认Global,[    "Global":"全球",    "AP":"亚太",    "EU":"欧洲",    "ME":"中东",    "OA":"大洋洲",    "AF":"非洲",    "NA":"北美洲",    "SA":"南美洲"]
     *     "OriginIPList" => (string) 加速源IP，多个IP用英文半角逗号(,)隔开；IPList和Domain二选一必填
     *     "OriginDomain" => (string) 加速源域名，IPList和Domain二选一必填
     *     "CouponId" => (string) 使用代金券可冲抵部分费用，仅全地域可用的代金券
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "InstanceId" => (string) 加速配置ID
     *     "CName" => (string) 加速域名 用户可把业务域名CName到此域名上
     * ]
     *
     * @return CreateUGA3InstanceResponse
     * @throws UCloudException
     */
    public function createUGA3Instance(CreateUGA3InstanceRequest $request = null) {
        $resp = $this->invoke($request);
        return new CreateUGA3InstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUGA3Port - 创建统一接入加速实例端口，目前仅支持四层TCP端口
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/create_uga3_port
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 加速配置实例ID
     *     "TCP" => (array<integer>) TCP接入端口，禁用65123端口
     *     "TCPRS" => (array<integer>) TCP回源端口
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return CreateUGA3PortResponse
     * @throws UCloudException
     */
    public function createUGA3Port(CreateUGA3PortRequest $request = null) {
        $resp = $this->invoke($request);
        return new CreateUGA3PortResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUGAForwarder - 创建加速实例转发器，支持HTTPS接入HTTPS回源、HTTPS接入HTTP回源、HTTP接入HTTP回源、TCP接入TCP回源、UDP接入UDP回源、 支持WSS接入WSS回源、WSS接入WS回源、WS接入WS回源
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/create_uga_forwarder
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UGAId" => (string) 加速配置实例ID
     *     "HTTPHTTP" => (array<integer>) HTTP接入HTTP回源转发，接入端口。禁用65123端口
     *     "HTTPHTTPRS" => (array<integer>) HTTP接入HTTP回源转发，源站监听端口
     *     "HTTPSHTTP" => (array<integer>) HTTPS接入HTTP回源转发，接入端口。禁用65123端口
     *     "HTTPSHTTPRS" => (array<integer>) HTTPS接入HTTP回源转发，回源端口
     *     "HTTPSHTTPS" => (array<integer>) HTTPS接入HTTPS回源转发，接入端口。禁用65123端口
     *     "HTTPSHTTPSRS" => (array<integer>) HTTPS接入HTTPS回源转发，源站监听端口
     *     "TCP" => (array<integer>) TCP接入端口，禁用65123端口
     *     "TCPRS" => (array<integer>) TCP回源端口
     *     "UDP" => (array<integer>) UDP接入端口，禁用65123端口
     *     "UDPRS" => (array<integer>) UDP回源端口
     *     "WSWS" => (array<integer>) WebSocket接入WebSocket回源转发，接入端口。禁用65123。
     *     "WSWSRS" => (array<integer>) WebSocket接入WebSocket回源转发，源站监听端口
     *     "WSSWSS" => (array<integer>) WebSocketS接入WebSocketS回源转发，接入端口。禁用65123。
     *     "WSSWSSRS" => (array<integer>) WebSocketS接入WebSocketS回源转发，源站监听端口。
     *     "WSSWS" => (array<integer>) WebSocketS接入WebSocket回源转发，接入端口。禁用65123。
     *     "WSSWSRS" => (array<integer>) WebSocketS接入WebSocket回源转发，源站监听端口。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return CreateUGAForwarderResponse
     * @throws UCloudException
     */
    public function createUGAForwarder(CreateUGAForwarderRequest $request = null) {
        $resp = $this->invoke($request);
        return new CreateUGAForwarderResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUGAInstance - 创建全球加速配置项
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/create_uga_instance
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
     * @return CreateUGAInstanceResponse
     * @throws UCloudException
     */
    public function createUGAInstance(CreateUGAInstanceRequest $request = null) {
        $resp = $this->invoke($request);
        return new CreateUGAInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUPath - 创建UPath
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/create_upath
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID,如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) 名字，便于记忆区分
     *     "LineId" => (string) 选择的线路，由DescribePathXLineConfig接口提供
     *     "Bandwidth" => (integer) 当PostPaid为false时，该值为预付费固定带宽；当PostPaid为true时，该值为后付费保底带宽，保底带宽越大可用的上限带宽越大。最小1Mbps,最大带宽由 DescribePathXLineConfig 接口获得。可联系产品团队咨询最大带宽。
     *     "ChargeType" => (string) 计费模式，默认为Month 按月收费,可选范围['Month','Year','Dynamic']
     *     "Quantity" => (integer) 购买周期，ChargeType为Month时，Quantity默认为0代表购买到月底，按时和按年付费该参数必须大于0
     *     "PostPaid" => (boolean) 是否开启后付费, 默认为false ，不开启后付费。当ChargeType为Dynamic时不能开启后付费。
     *     "PathType" => (string) private:专线线路；public:海外SD-WAN。默认为private。
     *     "CouponId" => (string) 代金券Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PathId" => (string) 加速线路实例Id
     * ]
     *
     * @return CreateUPathResponse
     * @throws UCloudException
     */
    public function createUPath(CreateUPathRequest $request = null) {
        $resp = $this->invoke($request);
        return new CreateUPathResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteGlobalSSHInstance - 删除GlobalSSH实例
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/delete_global_ssh_instance
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
     * @return DeleteGlobalSSHInstanceResponse
     * @throws UCloudException
     */
    public function deleteGlobalSSHInstance(DeleteGlobalSSHInstanceRequest $request = null) {
        $resp = $this->invoke($request);
        return new DeleteGlobalSSHInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeletePathXSSL - 删除PathX SSL证书
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/delete_path_xssl
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
     * @return DeletePathXSSLResponse
     * @throws UCloudException
     */
    public function deletePathXSSL(DeletePathXSSLRequest $request = null) {
        $resp = $this->invoke($request);
        return new DeletePathXSSLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUGA3Instance - 删除全球统一接入转发实例
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/delete_uga3_instance
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
     * @return DeleteUGA3InstanceResponse
     * @throws UCloudException
     */
    public function deleteUGA3Instance(DeleteUGA3InstanceRequest $request = null) {
        $resp = $this->invoke($request);
        return new DeleteUGA3InstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUGA3Port - 删除统一接入加速实例转发器 按接入端口删除
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/delete_uga3_port
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 加速配置实例ID
     *     "TCP" => (array<integer>) TCP接入端口
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUGA3PortResponse
     * @throws UCloudException
     */
    public function deleteUGA3Port(DeleteUGA3PortRequest $request = null) {
        $resp = $this->invoke($request);
        return new DeleteUGA3PortResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUGAForwarder - 删除加速实例转发器 按接入端口删除
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/delete_uga_forwarder
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UGAId" => (string) 加速配置实例ID
     *     "HTTPHTTP" => (array<integer>) HTTP接入HTTP回源，接入端口。禁用65123端口
     *     "HTTPSHTTP" => (array<integer>) HTTPS接入HTTP回源， 接入端口。禁用65123端口
     *     "HTTPSHTTPS" => (array<integer>) HTTPS接入HTTPS回源， 接入端口。禁用65123端口
     *     "WSSWSS" => (array<integer>) WebSocketS接入WebSocketS回源， 接入端口。禁用65123端口
     *     "WSWS" => (array<integer>) WebSocket接入WebSocket回源， 接入端口。禁用65123端口
     *     "WSSWS" => (array<integer>) WebSocketS接入WebSocket回源， 接入端口。禁用65123端口。
     *     "TCP" => (array<integer>) TCP接入端口
     *     "UDP" => (array<integer>) UDP接入端口
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUGAForwarderResponse
     * @throws UCloudException
     */
    public function deleteUGAForwarder(DeleteUGAForwarderRequest $request = null) {
        $resp = $this->invoke($request);
        return new DeleteUGAForwarderResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUGAInstance - 删除全球加速服务加速配置
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/delete_uga_instance
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
     * @return DeleteUGAInstanceResponse
     * @throws UCloudException
     */
    public function deleteUGAInstance(DeleteUGAInstanceRequest $request = null) {
        $resp = $this->invoke($request);
        return new DeleteUGAInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUPath - 删除UPath
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/delete_upath
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
     * @return DeleteUPathResponse
     * @throws UCloudException
     */
    public function deleteUPath(DeleteUPathRequest $request = null) {
        $resp = $this->invoke($request);
        return new DeleteUPathResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeGlobalSSHInstance - 获取GlobalSSH实例列表（传实例ID获取单个实例信息，不传获取项目下全部实例）
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/describe_global_ssh_instance
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
     * @return DescribeGlobalSSHInstanceResponse
     * @throws UCloudException
     */
    public function describeGlobalSSHInstance(DescribeGlobalSSHInstanceRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeGlobalSSHInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribePathXLineConfig - 获取全球加速线路信息
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/describe_path_x_line_config
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
     * @return DescribePathXLineConfigResponse
     * @throws UCloudException
     */
    public function describePathXLineConfig(DescribePathXLineConfigRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribePathXLineConfigResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribePathXSSL - 获取SSL证书信息,支持分页，支持按证书名称 证书域名模糊搜索
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/describe_path_xssl
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
     * @return DescribePathXSSLResponse
     * @throws UCloudException
     */
    public function describePathXSSL(DescribePathXSSLRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribePathXSSLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUGA3Area - 获取全球接入源站可选列表
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/describe_uga3_area
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID,如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "IPList" => (string) IP集合，非必填。如果填IP或者域名，会推荐一个地域在返回列表的第一个，源站IP集合，以逗号分隔[127.0.0.1,127.0.0.2]
     *     "Domain" => (string) 域名，非必填。如果填IP或者域名，会推荐一个地域在返回列表的第一个
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "AreaSet" => (array<object>) 支持源站的地区,比如：AreaSet[{            "Area": "首尔",            "AreaCode": "ICN",            "CountryCode": "CN",            "ContinentCode": "CN"        }]ContinentCode:["CN","NA","OT"];"CN":表示国内，"NA":表示美洲，“OT"：表示欧洲等其他地区[
     *         [
     *             "AreaCode" => (string) 源站区域代码
     *             "Area" => (string) 源站区域中文
     *             "CountryCode" => (string) 国家代码
     *             "FlagUnicode" => (string) 国旗unicode
     *             "FlagEmoji" => (string) 国旗 emoji
     *             "ContinentCode" => (string) 大陆代码
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUGA3AreaResponse
     * @throws UCloudException
     */
    public function describeUGA3Area(DescribeUGA3AreaRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeUGA3AreaResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUGA3Instance - 获取全球统一接入加速服务加速配置信息，指定实例ID返回单个实例。未指定实例ID时 指定分页参数 则按创建时间降序 返回记录
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/describe_uga3_instance
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 加速配置实例ID，如果传了实例ID 则返回匹配实例ID的记录；如果没传则返回 ProjectId 下全部实例且符合分页要求
     *     "Limit" => (integer) 返回的最大条数，默认为100，最大值400
     *     "Offset" => (integer) 偏移量，默认为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ForwardInstanceInfos" => (array<object>) 全球加速实例信息列表[
     *         [
     *             "InstanceId" => (string) 加速配置ID
     *             "CName" => (string) 加速域名
     *             "Name" => (string) 加速实例名称
     *             "AccelerationArea" => (string) 加速大区代码
     *             "AccelerationAreaName" => (string) 加速大区名称
     *             "AccelerationAreaInfos" => (array<object>) 加速节点列表[
     *                 [
     *                     "AccelerationArea" => (string) 加速区code
     *                     "AccelerationNodes" => (array<object>) 加速节点信息[
     *                         [
     *                             "AreaCode" => (string) AreaCode ,城市机场代码
     *                             "Area" => (string) AreaCode对应城市名
     *                             "FlagEmoji" => (string) 国旗Emoji
     *                             "FlagUnicode" => (string) 国旗Unicode
     *                         ]
     *                     ]
     *                 ]
     *             ]
     *             "EgressIpList" => (array<object>) 回源出口IP地址[
     *                 [
     *                     "IP" => (string)  线路回源节点EIP
     *                     "Area" => (string) 线路回源节点机房代号
     *                 ]
     *             ]
     *             "Bandwidth" => (integer) 购买的带宽值
     *             "OriginArea" => (string) 源站中文名
     *             "OriginAreaCode" => (string) 源站AreaCode
     *             "CreateTime" => (integer) 资源创建时间
     *             "ExpireTime" => (integer) 资源过期时间
     *             "ChargeType" => (string) 计费方式
     *             "Remark" => (string) 备注
     *             "PortSets" => (array<object>) 端口列表[
     *                 [
     *                     "Protocol" => (string) 转发协议，枚举值["TCP"，"UDP"，"HTTPHTTP"，"HTTPSHTTP"，"HTTPSHTTPS"，"WSWS"，"WSSWS"，"WSSWSS"]。TCP和UDP代表四层转发，其余为七层转发。
     *                     "RSPort" => (integer) 源站服务器监听的端口号
     *                     "Port" => (integer) 加速端口
     *                 ]
     *             ]
     *             "IPList" => (array<string>) 源站IP列表，多个值由半角英文逗号相隔
     *             "Domain" => (string) 源站域名
     *         ]
     *     ]
     *     "TotalCount" => (integer) 符合条件的总数
     * ]
     *
     * @return DescribeUGA3InstanceResponse
     * @throws UCloudException
     */
    public function describeUGA3Instance(DescribeUGA3InstanceRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeUGA3InstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUGA3Optimization - 获取全球接入UGA3线路加速化情况
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/describe_uga3_optimization
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID,如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "AreaCode" => (string) 源站AreaCode
     *     "TimeRange" => (string) 默认一天 ，枚举类型["Hour","Day","Week"]
     *     "AccelerationArea" => (string) 加速大区,默认Global,[    "Global":"全球",    "AP":"亚太",    "EU":"欧洲",    "ME":"中东",    "OA":"大洋洲",    "AF":"非洲",    "NA":"北美洲",    "SA":"南美洲"]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "AccelerationInfos" => (array<object>) 加速详情[
     *         [
     *             "AccelerationArea" => (string) 加速大区代码
     *             "AccelerationName" => (string) 加速大区名称
     *             "NodeInfo" => (array<object>) 加速提升情况[
     *                 [
     *                     "Area" => (string) 加速区域
     *                     "AreaCode" => (string) 加速区域Code
     *                     "CountryCode" => (string) 国家代码
     *                     "FlagUnicode" => (string) 国旗Code
     *                     "FlagEmoji" => (string) 国旗Emoji
     *                     "Latency" => (number) 加速延迟
     *                     "LatencyInternet" => (number) 公网延迟
     *                     "LatencyOptimization" => (number) 加速提升比例
     *                     "Loss" => (number) 加速后丢包率
     *                     "LossInternet" => (number) 原始丢包率
     *                     "LossOptimization" => (number) 丢包下降比例
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUGA3OptimizationResponse
     * @throws UCloudException
     */
    public function describeUGA3Optimization(DescribeUGA3OptimizationRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeUGA3OptimizationResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUGAInstance - 获取全球加速服务加速配置信息，指定实例ID返回单个实例。未指定实例ID时 指定分页参数 则按创建时间降序 返回记录
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/describe_uga_instance
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
     *                     "IP" => (string)  线路回源节点EIP
     *                     "Area" => (string) 线路回源节点机房代号
     *                 ]
     *             ]
     *         ]
     *     ]
     *     "TotalCount" => (integer) 符合条件的总数
     * ]
     *
     * @return DescribeUGAInstanceResponse
     * @throws UCloudException
     */
    public function describeUGAInstance(DescribeUGAInstanceRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeUGAInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUPath - 获取加速线路信息
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/describe_upath
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
     *                     "IP" => (string)  线路回源节点EIP
     *                     "Area" => (string) 线路回源节点机房代号
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUPathResponse
     * @throws UCloudException
     */
    public function describeUPath(DescribeUPathRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeUPathResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUPathTemplate - 查询UPath的监控模板
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/describe_upath_template
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
     * @return DescribeUPathTemplateResponse
     * @throws UCloudException
     */
    public function describeUPathTemplate(DescribeUPathTemplateRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeUPathTemplateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetGlobalSSHPrice - 获取GlobalSSH价格
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/get_global_ssh_price
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
     * @return GetGlobalSSHPriceResponse
     * @throws UCloudException
     */
    public function getGlobalSSHPrice(GetGlobalSSHPriceRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetGlobalSSHPriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetGlobalSSHUpdatePrice - 获取GlobalSSH升级价格
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/get_global_ssh_update_price
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
     * @return GetGlobalSSHUpdatePriceResponse
     * @throws UCloudException
     */
    public function getGlobalSSHUpdatePrice(GetGlobalSSHUpdatePriceRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetGlobalSSHUpdatePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetPathXMetric - 获取全球加速监控信息
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/get_path_x_metric
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
     * @return GetPathXMetricResponse
     * @throws UCloudException
     */
    public function getPathXMetric(GetPathXMetricRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetPathXMetricResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUGA3Metric - 获取全地域加速监控信息
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/get_uga3_metric
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 资源ID
     *     "BeginTime" => (integer) 查询起始时间，10位长度时间戳
     *     "EndTime" => (integer) 查询结束时间，10位长度时间戳
     *     "MetricName" => (array<string>) 查询监控的指标项。可不传	NetworkOut:出口总带宽	NetworkIn：入口总带宽	NetworkOutUsage：出口带宽使用率	NetworkInUsage：入口总带宽使用率	NetworkOutSubline ：子线路出口带宽	NetworkInSubline：子线路入口带宽	Delay：线路平均延迟	DelaySubline：子线路延迟	ConnectCount：当前连接数	ConnectCountSubline：子线路当前连接数	DelayPromote：延迟提升	DelayPromoteSubline：子线路延迟提升
     *     "IsSubline" => (boolean) 是否为子线路。为了简化查询,true 会返回所有子线路监控项可以，false:返回所有汇总的监控数据
     *     "AreaCode" => (string) 子线路AreaCode ,子线路的时候传，不是子线路可以不传
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
     *         "NetworkOutSubline" => (array<object>) 子线路出口带宽[
     *             [
     *                 "Timestamp" => (integer) 时间戳 
     *                 "Value" => (integer) 监控点数值
     *             ]
     *         ]
     *         "NetworkInSubline" => (array<object>) 子线路入口带宽[
     *             [
     *                 "Timestamp" => (integer) 时间戳 
     *                 "Value" => (integer) 监控点数值
     *             ]
     *         ]
     *         "Delay" => (array<object>) 线路平均延迟[
     *             [
     *                 "Timestamp" => (integer) 时间戳 
     *                 "Value" => (integer) 监控点数值
     *             ]
     *         ]
     *         "DelaySubline" => (array<object>) 子线路延迟[
     *             [
     *                 "Timestamp" => (integer) 时间戳 
     *                 "Value" => (integer) 监控点数值
     *             ]
     *         ]
     *         "DelayPromote" => (array<object>) 延迟提升[
     *             [
     *                 "Timestamp" => (integer) 时间戳 
     *                 "Value" => (integer) 监控点数值
     *             ]
     *         ]
     *         "DelayPromoteSubline" => (array<object>) 子线路延迟提升[
     *             [
     *                 "Timestamp" => (integer) 时间戳 
     *                 "Value" => (integer) 监控点数值
     *             ]
     *         ]
     *         "ConnectCount" => (array<object>) 当前连接数[
     *             [
     *                 "Timestamp" => (integer) 时间戳 
     *                 "Value" => (integer) 监控点数值
     *             ]
     *         ]
     *         "ConnectCountSubline" => (array<object>) 子线路当前连接数[
     *             [
     *                 "Timestamp" => (integer) 时间戳 
     *                 "Value" => (integer) 监控点数值
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return GetUGA3MetricResponse
     * @throws UCloudException
     */
    public function getUGA3Metric(GetUGA3MetricRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetUGA3MetricResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUGA3Price - 获取全球统一接入转发实例价格
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/get_uga3_price
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Bandwidth" => (integer) 共享带宽大小
     *     "AreaCode" => (string) 源站区域
     *     "Quantity" => (integer) 购买时间数量，当ChargeType为Month时 Quantity默认为0，代表购买至月底。按年按小时必须为大于0
     *     "ChargeType" => (string) 计费方式，默认按月支付。Month: 按月; Year: 按年; Dynamic: 按小时收
     *     "AccelerationArea" => (string) 加速大区,默认返回所有加速大区价格
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UGA3Price" => (array<object>) 加速大区对应价格[
     *         [
     *             "AccelerationArea" => (string) 加速大区代码
     *             "AccelerationAreaName" => (string) 加速大区名称
     *             "AccelerationForwarderPrice" => (number) 转发配置价格
     *             "AccelerationBandwidthPrice" => (number) 加速配置带宽价格
     *         ]
     *     ]
     * ]
     *
     * @return GetUGA3PriceResponse
     * @throws UCloudException
     */
    public function getUGA3Price(GetUGA3PriceRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetUGA3PriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUGA3UpdatePrice - 全球统一接入获取实例更新价格（增加、删退）
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/get_uga3_update_price
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 资源ID
     *     "Bandwidth" => (integer) 只有升级带宽的时候有价格变化
     *     "AccelerationArea" => (string) 暂未支持，加速大区，在更换加速大区的时候使用
     *     "AreaCode" => (string) 暂未支持，源站区域
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (number) 价格 元。大于0需付费，小于0则退费。
     * ]
     *
     * @return GetUGA3UpdatePriceResponse
     * @throws UCloudException
     */
    public function getUGA3UpdatePrice(GetUGA3UpdatePriceRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetUGA3UpdatePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyGlobalSSHPort - 修改GlobalSSH端口
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/modify_global_ssh_port
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
     * @return ModifyGlobalSSHPortResponse
     * @throws UCloudException
     */
    public function modifyGlobalSSHPort(ModifyGlobalSSHPortRequest $request = null) {
        $resp = $this->invoke($request);
        return new ModifyGlobalSSHPortResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyGlobalSSHRemark - 修改GlobalSSH备注
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/modify_global_ssh_remark
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID，如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 实例ID,资源唯一标识
     *     "Remark" => (string) 备注信息，不填默认为空字符串
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyGlobalSSHRemarkResponse
     * @throws UCloudException
     */
    public function modifyGlobalSSHRemark(ModifyGlobalSSHRemarkRequest $request = null) {
        $resp = $this->invoke($request);
        return new ModifyGlobalSSHRemarkResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyGlobalSSHType - 修改GlobalSSH实例类型，仅支持低版本升级到高版本，不支持高版本降级到低版本
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/modify_global_ssh_type
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
     * @return ModifyGlobalSSHTypeResponse
     * @throws UCloudException
     */
    public function modifyGlobalSSHType(ModifyGlobalSSHTypeRequest $request = null) {
        $resp = $this->invoke($request);
        return new ModifyGlobalSSHTypeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUGA3Bandwidth - 修改统一接入加速配置带宽
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/modify_uga3_bandwidth
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 加速配置实例ID，格式uga3-xxxx
     *     "Bandwidth" => (integer) 带宽大小，范围[1,100]，不传则不更新
     *     "CouponId" => (string) 需要全地域可用的代金券
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyUGA3BandwidthResponse
     * @throws UCloudException
     */
    public function modifyUGA3Bandwidth(ModifyUGA3BandwidthRequest $request = null) {
        $resp = $this->invoke($request);
        return new ModifyUGA3BandwidthResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUGA3Instance - 修改统一接入加速配置属性，如Name，ReMark
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/modify_uga3_instance
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 加速配置实例ID，格式uga-xxxx。不支持GlobalSSH实例。
     *     "Name" => (string) 加速配置实例名称，不填或空字符串则不更新
     *     "Remark" => (string) 备注信息，暂时前端为使用
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyUGA3InstanceResponse
     * @throws UCloudException
     */
    public function modifyUGA3Instance(ModifyUGA3InstanceRequest $request = null) {
        $resp = $this->invoke($request);
        return new ModifyUGA3InstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUGA3OriginInfo - Domain， IPList注意：修改Domain或IPList时， 请确保源站服务端口已经开启且外网防火墙允许pathx出口ip访问。
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/modify_uga3_origin_info
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 加速配置实例ID，格式uga3-xxxx。
     *     "OriginDomain" => (string) 加速源域名，仅支持1个域名。修改源站时 OriginIPList和OriginDomain至少填一个。OriginIPList和OriginDomain都填时 以Domain为准,如果两个都不填，不修改
     *     "OriginIPList" => (string) ，加速源IP，多个IP用英文半角逗号(,)隔开。修改源站时 ，OriginIPList和OriginDomain至少填一个。OriginIPList和OriginDomain都填时 以OriginDomain为准。如果两个都不填，不修改
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyUGA3OriginInfoResponse
     * @throws UCloudException
     */
    public function modifyUGA3OriginInfo(ModifyUGA3OriginInfoRequest $request = null) {
        $resp = $this->invoke($request);
        return new ModifyUGA3OriginInfoResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUGA3Port - 修改统一接入加速实例端口,目前仅支持四层TCP端口
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/modify_uga3_port
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) 加速配置实例ID
     *     "TCP" => (array<integer>) TCP接入端口，禁用65123端口
     *     "TCPRS" => (array<integer>) TCP回源端口
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyUGA3PortResponse
     * @throws UCloudException
     */
    public function modifyUGA3Port(ModifyUGA3PortRequest $request = null) {
        $resp = $this->invoke($request);
        return new ModifyUGA3PortResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUPathBandwidth - 修改加速线路带宽
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/modify_upath_bandwidth
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
     * @return ModifyUPathBandwidthResponse
     * @throws UCloudException
     */
    public function modifyUPathBandwidth(ModifyUPathBandwidthRequest $request = null) {
        $resp = $this->invoke($request);
        return new ModifyUPathBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUPathTemplate - 修改UPath监控告警项
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/modify_upath_template
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
     * @return ModifyUPathTemplateResponse
     * @throws UCloudException
     */
    public function modifyUPathTemplate(ModifyUPathTemplateRequest $request = null) {
        $resp = $this->invoke($request);
        return new ModifyUPathTemplateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UGABindUPath - UGA绑定UPath
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/uga_bind_upath
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
     * @return UGABindUPathResponse
     * @throws UCloudException
     */
    public function ugaBindUPath(UGABindUPathRequest $request = null) {
        $resp = $this->invoke($request);
        return new UGABindUPathResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UGAUnBindUPath - UGA与UPath解绑
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/uga_un_bind_upath
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
     * @return UGAUnBindUPathResponse
     * @throws UCloudException
     */
    public function ugaUnBindUPath(UGAUnBindUPathRequest $request = null) {
        $resp = $this->invoke($request);
        return new UGAUnBindUPathResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UnBindPathXSSL - 解绑PathX SSL 证书
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/un_bind_path_xssl
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
     * @return UnBindPathXSSLResponse
     * @throws UCloudException
     */
    public function unBindPathXSSL(UnBindPathXSSLRequest $request = null) {
        $resp = $this->invoke($request);
        return new UnBindPathXSSLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdatePathXWhitelist - 更新入口白名单,仅限GlobalSSH 实例使用。其他uga-实例不生效
     *
     * See also: https://docs.ucloud.cn/api/pathx-api/update_path_x_whitelist
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID,如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string) GlobalSSH实例ID，资源唯一标识
     *     "Whitelist" => (array<string>) 白名单规则,例如 "Whitelist.0": "192.168.1.1/24|tcp|22"，"Whitelist.1": "192.168.1.2|tcp|8080:8090"，第一个参数为ip或ip段，第二个参数代表协议（tcp/udp），第三个参数代表端口号或端口范围（使用 ':' 隔开）；可以添加多条规则（递增Whitelist.n字段内的n值）；此接口需要列出全部规则，例如不填则为清空白名单规则，如若需要增量添加，使用InsertPathXWhitelist接口,globalssh 没有端口范围：端口设置成加速端口，协议设置成tcp:ip|tcp|加速端口
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdatePathXWhitelistResponse
     * @throws UCloudException
     */
    public function updatePathXWhitelist(UpdatePathXWhitelistRequest $request = null) {
        $resp = $this->invoke($request);
        return new UpdatePathXWhitelistResponse($resp->toArray(), $resp->getRequestId());
    }
}
