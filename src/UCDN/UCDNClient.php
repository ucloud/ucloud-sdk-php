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
namespace UCloud\UCDN;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UCDN\Apis\AddCertificateRequest;
use UCloud\UCDN\Apis\AddCertificateResponse;
use UCloud\UCDN\Apis\ControlUcdnDomainCacheAccessRequest;
use UCloud\UCDN\Apis\ControlUcdnDomainCacheAccessResponse;
use UCloud\UCDN\Apis\DeleteCertificateRequest;
use UCloud\UCDN\Apis\DeleteCertificateResponse;
use UCloud\UCDN\Apis\DescribeNewUcdnPrefetchCacheTaskRequest;
use UCloud\UCDN\Apis\DescribeNewUcdnPrefetchCacheTaskResponse;
use UCloud\UCDN\Apis\DescribeNewUcdnRefreshCacheTaskRequest;
use UCloud\UCDN\Apis\DescribeNewUcdnRefreshCacheTaskResponse;
use UCloud\UCDN\Apis\GetCertificateV2Request;
use UCloud\UCDN\Apis\GetCertificateV2Response;
use UCloud\UCDN\Apis\GetNewUcdnDomainHitRateRequest;
use UCloud\UCDN\Apis\GetNewUcdnDomainHitRateResponse;
use UCloud\UCDN\Apis\GetNewUcdnLogRefererStatisticsRequest;
use UCloud\UCDN\Apis\GetNewUcdnLogRefererStatisticsResponse;
use UCloud\UCDN\Apis\GetNewUcdnLogUrlStatisticsRequest;
use UCloud\UCDN\Apis\GetNewUcdnLogUrlStatisticsResponse;
use UCloud\UCDN\Apis\GetUcdnDomain95BandwidthV2Request;
use UCloud\UCDN\Apis\GetUcdnDomain95BandwidthV2Response;
use UCloud\UCDN\Apis\GetUcdnDomainBandwidthV2Request;
use UCloud\UCDN\Apis\GetUcdnDomainBandwidthV2Response;
use UCloud\UCDN\Apis\GetUcdnDomainConfigRequest;
use UCloud\UCDN\Apis\GetUcdnDomainConfigResponse;
use UCloud\UCDN\Apis\GetUcdnDomainHitRateRequest;
use UCloud\UCDN\Apis\GetUcdnDomainHitRateResponse;
use UCloud\UCDN\Apis\GetUcdnDomainHttpCodeV2Request;
use UCloud\UCDN\Apis\GetUcdnDomainHttpCodeV2Response;
use UCloud\UCDN\Apis\GetUcdnDomainInfoListRequest;
use UCloud\UCDN\Apis\GetUcdnDomainInfoListResponse;
use UCloud\UCDN\Apis\GetUcdnDomainLogRequest;
use UCloud\UCDN\Apis\GetUcdnDomainLogResponse;
use UCloud\UCDN\Apis\GetUcdnDomainLogV2Request;
use UCloud\UCDN\Apis\GetUcdnDomainLogV2Response;
use UCloud\UCDN\Apis\GetUcdnDomainOriginHttpCodeRequest;
use UCloud\UCDN\Apis\GetUcdnDomainOriginHttpCodeResponse;
use UCloud\UCDN\Apis\GetUcdnDomainOriginHttpCodeDetailRequest;
use UCloud\UCDN\Apis\GetUcdnDomainOriginHttpCodeDetailResponse;
use UCloud\UCDN\Apis\GetUcdnDomainOriginRequestNumRequest;
use UCloud\UCDN\Apis\GetUcdnDomainOriginRequestNumResponse;
use UCloud\UCDN\Apis\GetUcdnDomainPrefetchEnableRequest;
use UCloud\UCDN\Apis\GetUcdnDomainPrefetchEnableResponse;
use UCloud\UCDN\Apis\GetUcdnDomainRequestNumV3Request;
use UCloud\UCDN\Apis\GetUcdnDomainRequestNumV3Response;
use UCloud\UCDN\Apis\GetUcdnPassBandwidthV2Request;
use UCloud\UCDN\Apis\GetUcdnPassBandwidthV2Response;
use UCloud\UCDN\Apis\GetUcdnProIspBandwidthV2Request;
use UCloud\UCDN\Apis\GetUcdnProIspBandwidthV2Response;
use UCloud\UCDN\Apis\GetUcdnProIspRequestNumV2Request;
use UCloud\UCDN\Apis\GetUcdnProIspRequestNumV2Response;
use UCloud\UCDN\Apis\GetUcdnTrafficV2Request;
use UCloud\UCDN\Apis\GetUcdnTrafficV2Response;
use UCloud\UCDN\Apis\PrefetchNewUcdnDomainCacheRequest;
use UCloud\UCDN\Apis\PrefetchNewUcdnDomainCacheResponse;
use UCloud\UCDN\Apis\QueryIpLocationRequest;
use UCloud\UCDN\Apis\QueryIpLocationResponse;
use UCloud\UCDN\Apis\RefreshNewUcdnDomainCacheRequest;
use UCloud\UCDN\Apis\RefreshNewUcdnDomainCacheResponse;
use UCloud\UCDN\Apis\SwitchUcdnChargeTypeRequest;
use UCloud\UCDN\Apis\SwitchUcdnChargeTypeResponse;

/**
 * This client is used to call actions of **UCDN** service
 */
class UCDNClient extends Client
{

    /**
     * AddCertificate - 添加证书
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/add_certificate
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CertName" => (string) 证书名称
     *     "UserCert" => (string) 用户证书
     *     "PrivateKey" => (string) 用户私钥
     *     "CaCert" => (string) Ca证书，默认为空
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function addCertificate(AddCertificateRequest $request = null): AddCertificateResponse
    {
        $resp = $this->invoke($request);
        return new AddCertificateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ControlUcdnDomainCacheAccess - 封禁解封缓存访问
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/control_ucdn_domain_cache_access
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UrlList" => (array<string>) 待封禁的Url，一次封禁多个Url时最多一次30条，只能对表示文件的Url进行操作
     *     "Type" => (string) forbid=封禁   unforbid=解封  其他值非法
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function controlUcdnDomainCacheAccess(ControlUcdnDomainCacheAccessRequest $request = null): ControlUcdnDomainCacheAccessResponse
    {
        $resp = $this->invoke($request);
        return new ControlUcdnDomainCacheAccessResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteCertificate - 删除证书
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/delete_certificate
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CertName" => (string) 证书名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function deleteCertificate(DeleteCertificateRequest $request = null): DeleteCertificateResponse
    {
        $resp = $this->invoke($request);
        return new DeleteCertificateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeNewUcdnPrefetchCacheTask - 获取预取任务状态
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/describe_new_ucdn_prefetch_cache_task
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TaskId" => (array<string>) 提交任务时返回的任务ID
     *     "BeginTime" => (integer) 查询的起始时间，格式为Unix Timestamp。如果有EndTime，BeginTime必须赋值
     *     "EndTime" => (integer) 查询的结束时间，格式为Unix Timestamp。EndTime默认为当前时间，BeginTime默认为当前时间前一天时间。
     *     "Status" => (string) 需要获取的内容预热的状态，枚举值：success：成功；wait：等待处理；process：正在处理；failure：失败； unknow：未知，默认选择所有状态
     *     "Offset" => (integer) 数据偏移量，默认为0，自然数
     *     "Limit" => (integer) 返回数据长度,默认全部，自然数
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 预热任务的总数
     *     "TaskList" => (array<object>) 预热任务信息，参考TaskInfo[
     *         [
     *             "TaskId" => (string) 提交任务时返回的任务ID
     *             "UrlLists" => (array<object>) 任务url的信息列表，参考UrlProgressInfo[
     *                 [
     *                     "Url" => (string) 刷新的单条url
     *                     "CreateTime" => (integer) 刷新任务创建的时间。格式为Unix Timestamp
     *                     "FinishTime" => (integer) 任务完成时间。格式为Unix Timestamp
     *                     "Status" => (string) 刷新任务的当前状态，枚举值：success：成功；wait：排队中；process：处理中；failure：失败； unknow：未知
     *                     "Progress" => (integer) 刷新进度，单位%
     *                 ]
     *             ]
     *             "CreateTime" => (integer) 刷新任务创建的时间。格式为Unix Timestamp
     *             "Status" => (string) 刷新任务的当前状态，枚举值：success：成功；wait：排队中；process：处理中；failure：失败； unknow：未知
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describeNewUcdnPrefetchCacheTask(DescribeNewUcdnPrefetchCacheTaskRequest $request = null): DescribeNewUcdnPrefetchCacheTaskResponse
    {
        $resp = $this->invoke($request);
        return new DescribeNewUcdnPrefetchCacheTaskResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeNewUcdnRefreshCacheTask - 获取域名刷新任务状态
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/describe_new_ucdn_refresh_cache_task
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TaskId" => (array<string>) 提交任务时返回的任务ID
     *     "BeginTime" => (integer) 查询的起始时间，格式为Unix Timestamp。如果有EndTime，BeginTime必须赋值
     *     "EndTime" => (integer) 查询的结束时间，格式为Unix Timestamp。EndTime默认为当前时间，BeginTime默认为当前时间前一天时间。
     *     "Status" => (string) 需要获取的内容刷新的状态，枚举值：success：成功；wait：等待处理；process：正在处理；failure：失败； unknow：未知，默认选择所有状态
     *     "Offset" => (integer) 数据偏移量，默认为0，自然数
     *     "Limit" => (integer) 返回数据长度,默认全部，自然数
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 刷新任务的总数
     *     "TaskList" => (array<object>) 刷新任务信息，参考TaskInfo[
     *         [
     *             "TaskId" => (string) 提交任务时返回的任务ID
     *             "UrlLists" => (array<object>) 任务url的信息列表，参考UrlProgressInfo[
     *                 [
     *                     "Url" => (string) 刷新的单条url
     *                     "CreateTime" => (integer) 刷新任务创建的时间。格式为Unix Timestamp
     *                     "FinishTime" => (integer) 任务完成时间。格式为Unix Timestamp
     *                     "Status" => (string) 刷新任务的当前状态，枚举值：success：成功；wait：排队中；process：处理中；failure：失败； unknow：未知
     *                     "Progress" => (integer) 刷新进度，单位%
     *                 ]
     *             ]
     *             "CreateTime" => (integer) 刷新任务创建的时间。格式为Unix Timestamp
     *             "Status" => (string) 刷新任务的当前状态，枚举值：success：成功；wait：排队中；process：处理中；failure：失败； unknow：未知
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describeNewUcdnRefreshCacheTask(DescribeNewUcdnRefreshCacheTaskRequest $request = null): DescribeNewUcdnRefreshCacheTaskResponse
    {
        $resp = $this->invoke($request);
        return new DescribeNewUcdnRefreshCacheTaskResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetCertificateV2 - 获取证书列表(新)
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_certificate_v2
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Offset" => (integer) 偏移，默认为0，非负整数
     *     "Limit" => (integer) 长度，默认为全部，非负整数
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 证书数量
     *     "CertList" => (array<object>) 证书信息列表[
     *         [
     *             "CertName" => (string) 证书名
     *             "CommonName" => (string) 通用名
     *             "DnsName" => (string) dns名称
     *             "BeginTime" => (integer) 证书开始时间
     *             "EndTime" => (integer) 证书获取时间
     *             "DomainCount" => (integer) 已配置域名个数
     *             "UserCert" => (string) 证书内容
     *             "CaCert" => (string) ca证内容
     *             "Domains" => (array<string>) 已配置的域名列表
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getCertificateV2(GetCertificateV2Request $request = null): GetCertificateV2Response
    {
        $resp = $this->invoke($request);
        return new GetCertificateV2Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetNewUcdnDomainHitRate - 获取域名命中率
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_new_ucdn_domain_hit_rate
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Type" => (integer) 时间粒度（0表示按照5分钟粒度，1表示按照1小时粒度，2表示按照一天的粒度）默认5分钟
     *     "DomainId" => (array<string>) 域名id，创建域名时生成的id。默认全部域名
     *     "Areacode" => (string) 查询带宽区域 cn代表国内 abroad代表海外，只支持国内
     *     "BeginTime" => (integer) 查询的起始时间，格式为Unix Timestamp。如果有EndTime，BeginTime必须赋值。如没有赋值，则返回缺少参 数错误，如果没有EndTime，BeginTime也可以不赋值，EndTime默认当前时间，BeginTime 默认前一天的当前时间。
     *     "EndTime" => (integer) 查询的结束时间，格式为Unix Timestamp。EndTime默认为当前时间，BeginTime默认为当前时间前一天时间。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "HitRateList" => (array<object>) 请求数实例表。[
     *         [
     *             "Time" => (integer) 带宽获取的时间点。格式：时间戳
     *             "FlowHitRate" => (number) 总流量命中率，单位%
     *             "RequestHitRate" => (number) 请求数命中率，单位%
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getNewUcdnDomainHitRate(GetNewUcdnDomainHitRateRequest $request = null): GetNewUcdnDomainHitRateResponse
    {
        $resp = $this->invoke($request);
        return new GetNewUcdnDomainHitRateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetNewUcdnLogRefererStatistics - 获取热点referer统计
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_new_ucdn_log_referer_statistics
     *
     * Arguments:
     *
     * $args = [
     *     "DomainId" => (string) 域名id，创建域名时生成的id
     *     "Areacode" => (string) 查询带宽区域 cn代表国内 abroad代表海外 ；目前只支持国内
     *     "BeginTime" => (integer) 查询带宽的起始时间，格式：时间戳
     *     "EndTime" => (integer) 查询统计日志的结束时间，格式：时间戳。最大时间间隔30天
     *     "OrderBy" => (integer) 0表示按流量降序排列，1表示按照下载次数降序排列，默认为0
     *     "Limit" => (integer) 返回的结果数量限制，默认1000
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RefererStatistics" => (array<object>) 按天统计实例[
     *         [
     *             "Date" => (string) 日期
     *             "RefererList" => (array<object>) Referer实例表[
     *                 [
     *                     "Referer" => (string) 客户端请求的referer
     *                     "RequestTimes" => (integer) 次数
     *                     "Percent" => (number) 次数占比，单位%
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getNewUcdnLogRefererStatistics(GetNewUcdnLogRefererStatisticsRequest $request = null): GetNewUcdnLogRefererStatisticsResponse
    {
        $resp = $this->invoke($request);
        return new GetNewUcdnLogRefererStatisticsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetNewUcdnLogUrlStatistics - 获取日志url统计
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_new_ucdn_log_url_statistics
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DomainId" => (string) 域名Id
     *     "Areacode" => (string) 查询带宽区域 cn代表国内 abroad代表海外 只支持国内
     *     "BeginTime" => (integer) 查询带宽的起始时间，格式：时间戳。BeginTime和EndTime必须同时赋值
     *     "EndTime" => (integer) 查询统计日志的结束时间，格式：时间戳,最多可拉取30天
     *     "OrderBy" => (integer) 0表示按流量降序排列，1表示按照下载次数降序排列，默认为0
     *     "Limit" => (integer) 返回的结果数量限制，默认1000
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UrlStatisticsList" => (array<object>) 按天统计实例。[
     *         [
     *             "UrlList" => (array<object>) [
     *                 [
     *                     "Url" => (string) 下载链接的url
     *                     "Traffic" => (number) 流量（单位为G）
     *                     "DownloadTimes" => (integer) 下载次数
     *                     "Percent" => (number) 流量占比，单位%
     *                 ]
     *             ]
     *             "Date" => (string) 日期
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getNewUcdnLogUrlStatistics(GetNewUcdnLogUrlStatisticsRequest $request = null): GetNewUcdnLogUrlStatisticsResponse
    {
        $resp = $this->invoke($request);
        return new GetNewUcdnLogUrlStatisticsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUcdnDomain95BandwidthV2 - 获取域名九五峰值带宽数据
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_ucdn_domain95_bandwidth_v2
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BeginTime" => (integer) 查询的起始日期，格式为Unix Timestamp
     *     "EndTime" => (integer) 查询的结束日期，格式为Unix Timestamp
     *     "DomainId" => (array<string>) 域名id，创建域名时生成的id。默认全部域名
     *     "Areacode" => (string) 查询带宽区域 cn代表国内 abroad代表海外 不填默认为全部区域
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Time" => (integer) 查询时间期间的95带宽时间点  Unix时间戳
     *     "CdnBandwidth" => (number) 查询期间的CDN的95带宽值，单位Mbps
     * ]
     *
     * @throws UCloudException
     */
    public function getUcdnDomain95BandwidthV2(GetUcdnDomain95BandwidthV2Request $request = null): GetUcdnDomain95BandwidthV2Response
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomain95BandwidthV2Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUcdnDomainBandwidthV2 - 获取域名带宽数据(新)
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_ucdn_domain_bandwidth_v2
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Type" => (integer) 时间粒度（0表示按照5分钟粒度，1表示按照1小时粒度，2表示按照一天的粒度，3表示按照1分钟粒度）
     *     "DomainId" => (array<string>) 域名id，创建域名时生成的id。默认全部域名
     *     "Areacode" => (string) 查询带宽区域 cn代表国内 abroad代表海外 不填默认为全部区域
     *     "BeginTime" => (integer) 查询的起始时间，格式为Unix Timestamp。如果有EndTime，BeginTime必须赋值。如没有赋值，则返回缺少参 数错误，如果没有EndTime，BeginTime也可以不赋值，EndTime默认当前时间，BeginTime 默认前一天的当前时间。
     *     "EndTime" => (integer) 查询的结束时间，格式为Unix Timestamp。EndTime默认为当前时间，BeginTime默认为当前时间前一天时间。
     *     "Protocol" => (string) 协议，http、https  不传则查所有协议的带宽
     *     "Primeval" => (integer) 原始带宽，不为0则获取原始带宽，默认为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BandwidthTrafficList" => (array<object>) 带宽信息列表，参见BandwidthTrafficInfo[
     *         [
     *             "Time" => (integer) 带宽获取的时间点。格式：时间戳
     *             "CdnBandwidth" => (number) 返回值返回指定时间区间内CDN的带宽峰值，单位Mbps（如果请求参数Type为0，则Value是五分钟粒度的带宽值，如果Type为1，则Value是1小时的带宽峰值，如果Type为2，则Value是一天内的带宽峰值）
     *             "Traffic" => (number) 对应时间粒度的流量，单位字节
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getUcdnDomainBandwidthV2(GetUcdnDomainBandwidthV2Request $request = null): GetUcdnDomainBandwidthV2Response
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainBandwidthV2Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUcdnDomainConfig - 批量获取加速域名配置
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_ucdn_domain_config
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Offset" => (integer) 数据偏移量，默认0，非负整数
     *     "Limit" => (integer) 返回数据长度， 默认全部，非负整数
     *     "DomainId" => (array<string>) 域名id，创建域名时生成的id。默认获取账号下的所有域名信息,n为自然数,从DomainId.0开始。
     *     "ChannelType" => (string) 产品类型ucdn，可不填，默认为ucdn
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DomainList" => (array<object>) 获取的域名信息，具体参考下面DomainConfig[
     *         [
     *             "AreaCode" => (string) 查询带宽区域 cn代表国内 abroad代表海外 all表示全部区域
     *             "CdnType" => (string) 加速域名的业务类型，web代表网站，stream代表视频 ，download 代表下载
     *             "Status" => (string) 创建的加速域名的当前的状态。check代表审核中，checkSuccess代表审核通过，checkFail代表审核失败，enable代表加速中，disable代表停止加速，delete代表删除加速enableing代表正在开启加速，disableing代表正在停止加速中，deleteing代表删除中
     *             "Cname" => (string) cdn域名。创建加速域名生成的cdn域名，用于设置CNAME记录
     *             "CreateTime" => (integer) 域名创建的时间。格式：时间戳
     *             "TestUrl" => (string) 测试url。用于域名创建加速时的测试
     *             "HttpsStatusCn" => (string) 国内https状态 enableing-开启中 fail-开启失败 enable-启用 disable-未启用
     *             "HttpsStatusAbroad" => (string) 国外https状态 enableing-开启中  fail-开启失败 enable-启用 disable-未启用
     *             "CertNameCn" => (string) 国内证书名称
     *             "CertNameAbroad" => (string) 国外证书名称
     *             "Tag" => (string) 业务组：Default
     *             "DomainId" => (string) 域名Id
     *             "Domain" => (string) 域名
     *             "OriginConf" => (object) 源站配置 参考OriginConf[
     *                 "OriginIpList" => (array<string>) 源站ip即cdn服务器回源访问的ip地址。多个源站ip，可以这样表述，如：["1.1.1.1","2.2.2.2"]
     *                 "OriginHost" => (string) 回源Http请求头部Host，默认是加速域名
     *                 "OriginPort" => (integer) 回源端口
     *                 "BackupOriginEnable" => (boolean) 1如果为false表示BackupOriginIp为空，表示没有备份源站，忽略BackupOriginIp，BackupOriginHost字段2如果为true表示BackupOriginIp.n必须至少有一个备份源站地址
     *                 "BackupOriginIpList" => (array<string>) 备份源站ip即cdn服务器回源访问的ip地址。多个源站ip，可以这样表述，如：["1.1.1.1","2.2.2.2"]
     *                 "BackupOriginHost" => (string) 备份回源Http请求头部Host，默认是加速域名
     *                 "OriginErrorCode" => (string) 主源响应的回源错误码（如：404|500），默认空字符串
     *                 "OriginErrorNum" => (integer) 回主源的回源失败数，默认1
     *                 "OriginProtocol" => (string) 源站协议http，http|https   默认http
     *                 "OriginFollow301" => (integer) 跟随301跳转  0=不跟随 1=跟随
     *             ]
     *             "AccessControlConf" => (object) 访问控制配置 参考AccessControlConf[
     *                 "IpBlackList" => (array<string>) ip黑名单，多个ip，可表示为：IpBlackList.0=1.1.1.1，IpBlackList.1=2.2.2.2
     *                 "ReferConf" => (object) refer配置[
     *                     "ReferType" => (integer) Refer防盗链配置  0白名单，1黑名单
     *                     "NullRefer" => (integer) ReferType为白名单时（删除），NullRefer为0代表不允许NULL refer访问，为1代表允许Null refer访问
     *                     "ReferList" => (array<string>) Refer防盗链规则列表，支持正则表达式
     *                 ]
     *             ]
     *             "CacheConf" => (object) 缓存配置 参考CacheAllConfig[
     *                 "CacheHost" => (string) 缓存Host，不同的域名可以配置为同一个CacheHost来实现缓存共享，默认为加速域名
     *                 "CacheList" => (array<object>) 缓存配置列表，参见CacheConf[
     *                     [
     *                         "PathPattern" => (string) 路径模式，支持正则
     *                         "CacheTTL" => (integer) 缓存时间
     *                         "CacheUnit" => (string) 缓存时间的单位。sec（秒），min（分钟），hour（小时），day（天）。上限1年。
     *                         "CacheBehavior" => (boolean) 是否缓存，true为缓存，flase为不缓存。为flase的情况下，CacheTTL和CacheUnit强制不生效
     *                         "HttpCodePattern" => (string) 状态码模式，非200，206状态码，多个状态码用竖线(|)分隔，该属性仅仅在状态码缓存配置列表中返回
     *                         "Description" => (string) 缓存规则描述
     *                         "FollowOriginRule" => (boolean) 是否优先遵循源站头部缓存策略，false为不优先遵循源站，true为优先遵循源站缓存头部。默认为0
     *                     ]
     *                 ]
     *                 "HttpCodeCacheList" => (array<object>) 状态码缓存配置列表，参见CacheConf[
     *                     [
     *                         "PathPattern" => (string) 路径模式，支持正则
     *                         "CacheTTL" => (integer) 缓存时间
     *                         "CacheUnit" => (string) 缓存时间的单位。sec（秒），min（分钟），hour（小时），day（天）。上限1年。
     *                         "CacheBehavior" => (boolean) 是否缓存，true为缓存，flase为不缓存。为flase的情况下，CacheTTL和CacheUnit强制不生效
     *                         "HttpCodePattern" => (string) 状态码模式，非200，206状态码，多个状态码用竖线(|)分隔，该属性仅仅在状态码缓存配置列表中返回
     *                         "Description" => (string) 缓存规则描述
     *                         "FollowOriginRule" => (boolean) 是否优先遵循源站头部缓存策略，false为不优先遵循源站，true为优先遵循源站缓存头部。默认为0
     *                     ]
     *                 ]
     *                 "CacheKeyList" => (array<object>) 忽略参数缓存配置列表，参见CacheKeyInfo[
     *                     [
     *                         "Ignore" => (boolean) 是否忽略
     *                         "PathPattern" => (string) 路径模式，支持正则
     *                         "QueryString" => (string) 自定义变量,以$符号开头，多个变量用加号(+)连接，$querystring表示所有变量
     *                     ]
     *                 ]
     *             ]
     *             "AdvancedConf" => (object) 高级配置 参考AdvancedConf[
     *                 "HttpClientHeader" => (array<string>) 客户端响应http头列表
     *                 "HttpOriginHeader" => (array<string>) 源站http头列表
     *                 "Http2Https" => (boolean) http转https回源 true是，false否
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getUcdnDomainConfig(GetUcdnDomainConfigRequest $request = null): GetUcdnDomainConfigResponse
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainConfigResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUcdnDomainHitRate - 获取域名命中率
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_ucdn_domain_hit_rate
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Type" => (integer) 时间粒度（0表示按照5分钟粒度，1表示按照1小时粒度，2表示按照一天的粒度，3表示按照一分钟的粒度）默认5分钟
     *     "DomainId" => (array<string>) 域名id，创建域名时生成的id。默认全部域名
     *     "Areacode" => (string) 查询带宽区域 cn代表国内 abroad代表海外，只支持国内
     *     "BeginTime" => (integer) 查询的起始时间，格式为Unix Timestamp。如果有EndTime，BeginTime必须赋值。如没有赋值，则返回缺少参 数错误，如果没有EndTime，BeginTime也可以不赋值，EndTime默认当前时间，BeginTime 默认前一天的当前时间。
     *     "EndTime" => (integer) 查询的结束时间，格式为Unix Timestamp。EndTime默认为当前时间，BeginTime默认为当前时间前一天时间。
     *     "HitType" => (integer) 命中类型：0=整体命中  1=边缘命中  默认是0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "HitRateList" => (array<object>) 请求数实例表。[
     *         [
     *             "Time" => (integer) 带宽获取的时间点。格式：时间戳
     *             "FlowHitRate" => (number) 总流量命中率，单位%
     *             "RequestHitRate" => (number) 请求数命中率，单位%
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getUcdnDomainHitRate(GetUcdnDomainHitRateRequest $request = null): GetUcdnDomainHitRateResponse
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainHitRateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUcdnDomainHttpCodeV2 - 获取域名状态码信息
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_ucdn_domain_http_code_v2
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Type" => (integer) 时间粒度（0表示按照5分钟粒度，1表示按照1小时粒度，2表示按照一天的粒度，3表示1分钟粒度）
     *     "DomainId" => (array<string>) 域名id，创建域名时生成的id。默认全部域名
     *     "Areacode" => (string) 查询带宽区域 cn代表国内 abroad代表海外，只支持国内
     *     "BeginTime" => (integer) 查询的起始时间，格式为Unix Timestamp。如果有EndTime，BeginTime必须赋值。如没有赋值，则返回缺少参 数错误，如果没有EndTime，BeginTime也可以不赋值，EndTime默认当前时间，BeginTime 默认前一天的当前时间。
     *     "EndTime" => (integer) 查询的结束时间，格式为Unix Timestamp。EndTime默认为当前时间，BeginTime默认为当前时间前一天时间。
     *     "Layer" => (string) 指定获取的状态码是边缘还是上层    edge 表示边缘  layer 表示上层
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "HttpCodeDetail" => (array<object>) 状态码实例表。详细见HttpCodeInfoV2[
     *         [
     *             "Time" => (integer) 带宽获取的时间点。格式：时间戳
     *             "Http1XX" => (object) 1xx信息，参考HttpCodeV2Detail结构[
     *                 "Time" => (integer) 时间
     *                 "Total" => (integer) 当前分组的总状态码数
     *                 "Http100" => (integer) http100数量
     *                 "Http101" => (integer) http101数量
     *                 "Http102" => (integer) http102数量
     *                 "Http200" => (integer) http200数量
     *                 "Http201" => (integer) http201数量
     *                 "Http202" => (integer) http202数量
     *                 "Http203" => (integer) http203数量
     *                 "Http204" => (integer) http204数量
     *                 "Http205" => (integer) http205数量
     *                 "Http206" => (integer) http206数量
     *                 "Http207" => (integer) http207数量
     *                 "Http300" => (integer) http300数量
     *                 "Http301" => (integer) http301数量
     *                 "Http302" => (integer) http302数量
     *                 "Http303" => (integer) http303数量
     *                 "Http304" => (integer) http304数量
     *                 "Http305" => (integer) http305数量
     *                 "Http306" => (integer) http306数量
     *                 "Http307" => (integer) http307数量
     *                 "Http400" => (integer) http400数量
     *                 "Http401" => (integer) http401数量
     *                 "Http402" => (integer) http402数量
     *                 "Http403" => (integer) http403数量
     *                 "Http404" => (integer) http404数量
     *                 "Http405" => (integer) http405数量
     *                 "Http406" => (integer) http406数量
     *                 "Http407" => (integer) http407数量
     *                 "Http408" => (integer) http408数量
     *                 "Http409" => (integer) http409数量
     *                 "Http410" => (integer) http410数量
     *                 "Http411" => (integer) http411数量
     *                 "Http412" => (integer) http412数量
     *                 "Http413" => (integer) http413数量
     *                 "Http414" => (integer) http414数量
     *                 "Http415" => (integer) http415数量
     *                 "Http416" => (integer) http416数量
     *                 "Http417" => (integer) http417数量
     *                 "Http418" => (integer) http418数量
     *                 "Http421" => (integer) http421数量
     *                 "Http422" => (integer) http422数量
     *                 "Http423" => (integer) http423数量
     *                 "Http424" => (integer) http424数量
     *                 "Http425" => (integer) http425数量
     *                 "Http426" => (integer) http426数量
     *                 "Http449" => (integer) http449数量
     *                 "Http451" => (integer) http451数量
     *                 "Http500" => (integer) http500数量
     *                 "Http501" => (integer) http501数量
     *                 "Http502" => (integer) http502数量
     *                 "Http503" => (integer) http503数量
     *                 "Http504" => (integer) http504数量
     *                 "Http505" => (integer) http505数量
     *                 "Http506" => (integer) http506数量
     *                 "Http507" => (integer) http507数量
     *                 "Http509" => (integer) http509数量
     *                 "Http510" => (integer) http510数量
     *             ]
     *             "Http2XX" => (object) 2xx信息，参考HttpCodeV2Detail结构[
     *                 "Time" => (integer) 时间
     *                 "Total" => (integer) 当前分组的总状态码数
     *                 "Http100" => (integer) http100数量
     *                 "Http101" => (integer) http101数量
     *                 "Http102" => (integer) http102数量
     *                 "Http200" => (integer) http200数量
     *                 "Http201" => (integer) http201数量
     *                 "Http202" => (integer) http202数量
     *                 "Http203" => (integer) http203数量
     *                 "Http204" => (integer) http204数量
     *                 "Http205" => (integer) http205数量
     *                 "Http206" => (integer) http206数量
     *                 "Http207" => (integer) http207数量
     *                 "Http300" => (integer) http300数量
     *                 "Http301" => (integer) http301数量
     *                 "Http302" => (integer) http302数量
     *                 "Http303" => (integer) http303数量
     *                 "Http304" => (integer) http304数量
     *                 "Http305" => (integer) http305数量
     *                 "Http306" => (integer) http306数量
     *                 "Http307" => (integer) http307数量
     *                 "Http400" => (integer) http400数量
     *                 "Http401" => (integer) http401数量
     *                 "Http402" => (integer) http402数量
     *                 "Http403" => (integer) http403数量
     *                 "Http404" => (integer) http404数量
     *                 "Http405" => (integer) http405数量
     *                 "Http406" => (integer) http406数量
     *                 "Http407" => (integer) http407数量
     *                 "Http408" => (integer) http408数量
     *                 "Http409" => (integer) http409数量
     *                 "Http410" => (integer) http410数量
     *                 "Http411" => (integer) http411数量
     *                 "Http412" => (integer) http412数量
     *                 "Http413" => (integer) http413数量
     *                 "Http414" => (integer) http414数量
     *                 "Http415" => (integer) http415数量
     *                 "Http416" => (integer) http416数量
     *                 "Http417" => (integer) http417数量
     *                 "Http418" => (integer) http418数量
     *                 "Http421" => (integer) http421数量
     *                 "Http422" => (integer) http422数量
     *                 "Http423" => (integer) http423数量
     *                 "Http424" => (integer) http424数量
     *                 "Http425" => (integer) http425数量
     *                 "Http426" => (integer) http426数量
     *                 "Http449" => (integer) http449数量
     *                 "Http451" => (integer) http451数量
     *                 "Http500" => (integer) http500数量
     *                 "Http501" => (integer) http501数量
     *                 "Http502" => (integer) http502数量
     *                 "Http503" => (integer) http503数量
     *                 "Http504" => (integer) http504数量
     *                 "Http505" => (integer) http505数量
     *                 "Http506" => (integer) http506数量
     *                 "Http507" => (integer) http507数量
     *                 "Http509" => (integer) http509数量
     *                 "Http510" => (integer) http510数量
     *             ]
     *             "Http3XX" => (object) 3xx信息，参考HttpCodeV2Detail结构[
     *                 "Time" => (integer) 时间
     *                 "Total" => (integer) 当前分组的总状态码数
     *                 "Http100" => (integer) http100数量
     *                 "Http101" => (integer) http101数量
     *                 "Http102" => (integer) http102数量
     *                 "Http200" => (integer) http200数量
     *                 "Http201" => (integer) http201数量
     *                 "Http202" => (integer) http202数量
     *                 "Http203" => (integer) http203数量
     *                 "Http204" => (integer) http204数量
     *                 "Http205" => (integer) http205数量
     *                 "Http206" => (integer) http206数量
     *                 "Http207" => (integer) http207数量
     *                 "Http300" => (integer) http300数量
     *                 "Http301" => (integer) http301数量
     *                 "Http302" => (integer) http302数量
     *                 "Http303" => (integer) http303数量
     *                 "Http304" => (integer) http304数量
     *                 "Http305" => (integer) http305数量
     *                 "Http306" => (integer) http306数量
     *                 "Http307" => (integer) http307数量
     *                 "Http400" => (integer) http400数量
     *                 "Http401" => (integer) http401数量
     *                 "Http402" => (integer) http402数量
     *                 "Http403" => (integer) http403数量
     *                 "Http404" => (integer) http404数量
     *                 "Http405" => (integer) http405数量
     *                 "Http406" => (integer) http406数量
     *                 "Http407" => (integer) http407数量
     *                 "Http408" => (integer) http408数量
     *                 "Http409" => (integer) http409数量
     *                 "Http410" => (integer) http410数量
     *                 "Http411" => (integer) http411数量
     *                 "Http412" => (integer) http412数量
     *                 "Http413" => (integer) http413数量
     *                 "Http414" => (integer) http414数量
     *                 "Http415" => (integer) http415数量
     *                 "Http416" => (integer) http416数量
     *                 "Http417" => (integer) http417数量
     *                 "Http418" => (integer) http418数量
     *                 "Http421" => (integer) http421数量
     *                 "Http422" => (integer) http422数量
     *                 "Http423" => (integer) http423数量
     *                 "Http424" => (integer) http424数量
     *                 "Http425" => (integer) http425数量
     *                 "Http426" => (integer) http426数量
     *                 "Http449" => (integer) http449数量
     *                 "Http451" => (integer) http451数量
     *                 "Http500" => (integer) http500数量
     *                 "Http501" => (integer) http501数量
     *                 "Http502" => (integer) http502数量
     *                 "Http503" => (integer) http503数量
     *                 "Http504" => (integer) http504数量
     *                 "Http505" => (integer) http505数量
     *                 "Http506" => (integer) http506数量
     *                 "Http507" => (integer) http507数量
     *                 "Http509" => (integer) http509数量
     *                 "Http510" => (integer) http510数量
     *             ]
     *             "Http4XX" => (object) 4xx信息，参考HttpCodeV2Detail结构[
     *                 "Time" => (integer) 时间
     *                 "Total" => (integer) 当前分组的总状态码数
     *                 "Http100" => (integer) http100数量
     *                 "Http101" => (integer) http101数量
     *                 "Http102" => (integer) http102数量
     *                 "Http200" => (integer) http200数量
     *                 "Http201" => (integer) http201数量
     *                 "Http202" => (integer) http202数量
     *                 "Http203" => (integer) http203数量
     *                 "Http204" => (integer) http204数量
     *                 "Http205" => (integer) http205数量
     *                 "Http206" => (integer) http206数量
     *                 "Http207" => (integer) http207数量
     *                 "Http300" => (integer) http300数量
     *                 "Http301" => (integer) http301数量
     *                 "Http302" => (integer) http302数量
     *                 "Http303" => (integer) http303数量
     *                 "Http304" => (integer) http304数量
     *                 "Http305" => (integer) http305数量
     *                 "Http306" => (integer) http306数量
     *                 "Http307" => (integer) http307数量
     *                 "Http400" => (integer) http400数量
     *                 "Http401" => (integer) http401数量
     *                 "Http402" => (integer) http402数量
     *                 "Http403" => (integer) http403数量
     *                 "Http404" => (integer) http404数量
     *                 "Http405" => (integer) http405数量
     *                 "Http406" => (integer) http406数量
     *                 "Http407" => (integer) http407数量
     *                 "Http408" => (integer) http408数量
     *                 "Http409" => (integer) http409数量
     *                 "Http410" => (integer) http410数量
     *                 "Http411" => (integer) http411数量
     *                 "Http412" => (integer) http412数量
     *                 "Http413" => (integer) http413数量
     *                 "Http414" => (integer) http414数量
     *                 "Http415" => (integer) http415数量
     *                 "Http416" => (integer) http416数量
     *                 "Http417" => (integer) http417数量
     *                 "Http418" => (integer) http418数量
     *                 "Http421" => (integer) http421数量
     *                 "Http422" => (integer) http422数量
     *                 "Http423" => (integer) http423数量
     *                 "Http424" => (integer) http424数量
     *                 "Http425" => (integer) http425数量
     *                 "Http426" => (integer) http426数量
     *                 "Http449" => (integer) http449数量
     *                 "Http451" => (integer) http451数量
     *                 "Http500" => (integer) http500数量
     *                 "Http501" => (integer) http501数量
     *                 "Http502" => (integer) http502数量
     *                 "Http503" => (integer) http503数量
     *                 "Http504" => (integer) http504数量
     *                 "Http505" => (integer) http505数量
     *                 "Http506" => (integer) http506数量
     *                 "Http507" => (integer) http507数量
     *                 "Http509" => (integer) http509数量
     *                 "Http510" => (integer) http510数量
     *             ]
     *             "Http5XX" => (object) 5xx信息，参考HttpCodeV2Detail结构[
     *                 "Time" => (integer) 时间
     *                 "Total" => (integer) 当前分组的总状态码数
     *                 "Http100" => (integer) http100数量
     *                 "Http101" => (integer) http101数量
     *                 "Http102" => (integer) http102数量
     *                 "Http200" => (integer) http200数量
     *                 "Http201" => (integer) http201数量
     *                 "Http202" => (integer) http202数量
     *                 "Http203" => (integer) http203数量
     *                 "Http204" => (integer) http204数量
     *                 "Http205" => (integer) http205数量
     *                 "Http206" => (integer) http206数量
     *                 "Http207" => (integer) http207数量
     *                 "Http300" => (integer) http300数量
     *                 "Http301" => (integer) http301数量
     *                 "Http302" => (integer) http302数量
     *                 "Http303" => (integer) http303数量
     *                 "Http304" => (integer) http304数量
     *                 "Http305" => (integer) http305数量
     *                 "Http306" => (integer) http306数量
     *                 "Http307" => (integer) http307数量
     *                 "Http400" => (integer) http400数量
     *                 "Http401" => (integer) http401数量
     *                 "Http402" => (integer) http402数量
     *                 "Http403" => (integer) http403数量
     *                 "Http404" => (integer) http404数量
     *                 "Http405" => (integer) http405数量
     *                 "Http406" => (integer) http406数量
     *                 "Http407" => (integer) http407数量
     *                 "Http408" => (integer) http408数量
     *                 "Http409" => (integer) http409数量
     *                 "Http410" => (integer) http410数量
     *                 "Http411" => (integer) http411数量
     *                 "Http412" => (integer) http412数量
     *                 "Http413" => (integer) http413数量
     *                 "Http414" => (integer) http414数量
     *                 "Http415" => (integer) http415数量
     *                 "Http416" => (integer) http416数量
     *                 "Http417" => (integer) http417数量
     *                 "Http418" => (integer) http418数量
     *                 "Http421" => (integer) http421数量
     *                 "Http422" => (integer) http422数量
     *                 "Http423" => (integer) http423数量
     *                 "Http424" => (integer) http424数量
     *                 "Http425" => (integer) http425数量
     *                 "Http426" => (integer) http426数量
     *                 "Http449" => (integer) http449数量
     *                 "Http451" => (integer) http451数量
     *                 "Http500" => (integer) http500数量
     *                 "Http501" => (integer) http501数量
     *                 "Http502" => (integer) http502数量
     *                 "Http503" => (integer) http503数量
     *                 "Http504" => (integer) http504数量
     *                 "Http505" => (integer) http505数量
     *                 "Http506" => (integer) http506数量
     *                 "Http507" => (integer) http507数量
     *                 "Http509" => (integer) http509数量
     *                 "Http510" => (integer) http510数量
     *             ]
     *             "Http6XX" => (object) 6xx信息，参考HttpCodeV2Detail结构[
     *                 "Time" => (integer) 时间
     *                 "Total" => (integer) 当前分组的总状态码数
     *                 "Http100" => (integer) http100数量
     *                 "Http101" => (integer) http101数量
     *                 "Http102" => (integer) http102数量
     *                 "Http200" => (integer) http200数量
     *                 "Http201" => (integer) http201数量
     *                 "Http202" => (integer) http202数量
     *                 "Http203" => (integer) http203数量
     *                 "Http204" => (integer) http204数量
     *                 "Http205" => (integer) http205数量
     *                 "Http206" => (integer) http206数量
     *                 "Http207" => (integer) http207数量
     *                 "Http300" => (integer) http300数量
     *                 "Http301" => (integer) http301数量
     *                 "Http302" => (integer) http302数量
     *                 "Http303" => (integer) http303数量
     *                 "Http304" => (integer) http304数量
     *                 "Http305" => (integer) http305数量
     *                 "Http306" => (integer) http306数量
     *                 "Http307" => (integer) http307数量
     *                 "Http400" => (integer) http400数量
     *                 "Http401" => (integer) http401数量
     *                 "Http402" => (integer) http402数量
     *                 "Http403" => (integer) http403数量
     *                 "Http404" => (integer) http404数量
     *                 "Http405" => (integer) http405数量
     *                 "Http406" => (integer) http406数量
     *                 "Http407" => (integer) http407数量
     *                 "Http408" => (integer) http408数量
     *                 "Http409" => (integer) http409数量
     *                 "Http410" => (integer) http410数量
     *                 "Http411" => (integer) http411数量
     *                 "Http412" => (integer) http412数量
     *                 "Http413" => (integer) http413数量
     *                 "Http414" => (integer) http414数量
     *                 "Http415" => (integer) http415数量
     *                 "Http416" => (integer) http416数量
     *                 "Http417" => (integer) http417数量
     *                 "Http418" => (integer) http418数量
     *                 "Http421" => (integer) http421数量
     *                 "Http422" => (integer) http422数量
     *                 "Http423" => (integer) http423数量
     *                 "Http424" => (integer) http424数量
     *                 "Http425" => (integer) http425数量
     *                 "Http426" => (integer) http426数量
     *                 "Http449" => (integer) http449数量
     *                 "Http451" => (integer) http451数量
     *                 "Http500" => (integer) http500数量
     *                 "Http501" => (integer) http501数量
     *                 "Http502" => (integer) http502数量
     *                 "Http503" => (integer) http503数量
     *                 "Http504" => (integer) http504数量
     *                 "Http505" => (integer) http505数量
     *                 "Http506" => (integer) http506数量
     *                 "Http507" => (integer) http507数量
     *                 "Http509" => (integer) http509数量
     *                 "Http510" => (integer) http510数量
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getUcdnDomainHttpCodeV2(GetUcdnDomainHttpCodeV2Request $request = null): GetUcdnDomainHttpCodeV2Response
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainHttpCodeV2Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUcdnDomainInfoList - 获取域名基本信息
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_ucdn_domain_info_list
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "PageSize" => (integer) 分页的大小，不填默认每页20个
     *     "PageIndex" => (integer) 返回第几页，不填默认是第1页
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 账户下域名总个数
     *     "DomainInfoList" => (array<object>) 域名基本信息[
     *         [
     *             "Domain" => (string) 域名
     *             "DomainId" => (string) 域名的资源id
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getUcdnDomainInfoList(GetUcdnDomainInfoListRequest $request = null): GetUcdnDomainInfoListResponse
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainInfoListResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUcdnDomainLog - 获取加速域名原始日志
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_ucdn_domain_log
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DomainId" => (array<string>) 域名ID，创建加速域名时生成。默认全部域名
     *     "BeginTime" => (integer) 查询的起始时间，格式为Unix Timestamp。如果有EndTime，BeginTime必须赋值。
     *     "EndTime" => (integer) 查询的结束时间，格式为Unix Timestamp。EndTime默认为当前时间，BeginTime默认为当前时间前一天时间。
     *     "Type" => (integer) 查询粒度  0=default(没有粒度) 1=按小时  2=按天
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "LogSet" => (array<object>) 获取日志的连接地址。具体参考下面LogSetList[
     *         [
     *             "Domain" => (string) 域名
     *             "Logs" => (array<object>) 域名信息列表，参考LogSetInfo[
     *                 [
     *                     "Time" => (integer) 日志时间UnixTime
     *                     "CnLog" => (array<string>) 国内日志url列表
     *                     "AbroadLog" => (array<string>) 国外日志url列表
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getUcdnDomainLog(GetUcdnDomainLogRequest $request = null): GetUcdnDomainLogResponse
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainLogResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUcdnDomainLogV2 - 获取域名5分钟日志
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_ucdn_domain_log_v2
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BeginTime" => (integer) 查询的起始时间，格式为Unix Timestamp
     *     "EndTime" => (integer) 查询的结束时间，格式为Unix Timestamp
     *     "DomainId" => (array<string>) 域名id，创建域名时生成的id。默认全部域名
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DomainLogSet" => (array<object>) [
     *         [
     *             "Domain" => (string) 域名
     *             "LogList" => (array<object>) 日志信息列表[
     *                 [
     *                     "LogTime" => (integer) Unix时间戳
     *                     "LogUrl" => (string) 日志url地址
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getUcdnDomainLogV2(GetUcdnDomainLogV2Request $request = null): GetUcdnDomainLogV2Response
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainLogV2Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUcdnDomainOriginHttpCode - 获取域名源站状态码监控
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_ucdn_domain_origin_http_code
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Type" => (integer) 时间粒度（0表示按照5分钟粒度，1表示按照1小时粒度，2表示按照一天的粒度，3表示按照1分钟粒度）
     *     "DomainId" => (array<string>) 域名id，创建域名时生成的id。默认全部域名
     *     "Areacode" => (string) 查询带宽区域 cn代表国内 abroad代表海外，只支持国内
     *     "BeginTime" => (integer) 查询的起始时间，格式为Unix Timestamp。如果有EndTime，BeginTime必须赋值。如没有赋值，则返回缺少参 数错误，如果没有EndTime，BeginTime也可以不赋值，EndTime默认当前时间，BeginTime 默认前一天的当前时间。
     *     "EndTime" => (integer) 查询的结束时间，格式为Unix Timestamp。EndTime默认为当前时间，BeginTime默认为当前时间前一天时间。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "HttpCodeDetail" => (array<object>) 状态码实例表。详细见HttpCodeInfo[
     *         [
     *             "Time" => (integer) 带宽获取的时间点。格式：时间戳
     *             "HttpOneXX" => (integer) 1xx数量
     *             "HttpTwoXX" => (integer) 2xx数量
     *             "HttpThreeXX" => (integer) 3xx数量
     *             "HttpFourXX" => (integer) 4xx数量
     *             "HttpFiveXX" => (integer) 5xx数量
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getUcdnDomainOriginHttpCode(GetUcdnDomainOriginHttpCodeRequest $request = null): GetUcdnDomainOriginHttpCodeResponse
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainOriginHttpCodeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUcdnDomainOriginHttpCodeDetail - 获取域名源站详细状态码监控
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_ucdn_domain_origin_http_code_detail
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Type" => (integer) 时间粒度（0表示按照5分钟粒度，1表示按照1小时粒度，2表示按照一天粒度，3表示按照一分钟粒度）
     *     "BeginTime" => (integer) 查询的起始时间，格式为Unix Timestamp。
     *     "EndTime" => (integer) 查询的结束时间，格式为Unix Timestamp。
     *     "DomainId" => (array<string>) 域名id，创建域名时生成的id。默认全部域名
     *     "Areacode" => (string) 查询带宽区域 cn代表国内 abroad代表海外，只支持国内
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "HttpCodeV2Detail" => (array<object>) 状态码详情[
     *         [
     *             "Time" => (integer) 时间
     *             "Total" => (integer) 当前分组的总状态码数
     *             "Http100" => (integer) http100数量
     *             "Http101" => (integer) http101数量
     *             "Http102" => (integer) http102数量
     *             "Http200" => (integer) http200数量
     *             "Http201" => (integer) http201数量
     *             "Http202" => (integer) http202数量
     *             "Http203" => (integer) http203数量
     *             "Http204" => (integer) http204数量
     *             "Http205" => (integer) http205数量
     *             "Http206" => (integer) http206数量
     *             "Http207" => (integer) http207数量
     *             "Http300" => (integer) http300数量
     *             "Http301" => (integer) http301数量
     *             "Http302" => (integer) http302数量
     *             "Http303" => (integer) http303数量
     *             "Http304" => (integer) http304数量
     *             "Http305" => (integer) http305数量
     *             "Http306" => (integer) http306数量
     *             "Http307" => (integer) http307数量
     *             "Http400" => (integer) http400数量
     *             "Http401" => (integer) http401数量
     *             "Http402" => (integer) http402数量
     *             "Http403" => (integer) http403数量
     *             "Http404" => (integer) http404数量
     *             "Http405" => (integer) http405数量
     *             "Http406" => (integer) http406数量
     *             "Http407" => (integer) http407数量
     *             "Http408" => (integer) http408数量
     *             "Http409" => (integer) http409数量
     *             "Http410" => (integer) http410数量
     *             "Http411" => (integer) http411数量
     *             "Http412" => (integer) http412数量
     *             "Http413" => (integer) http413数量
     *             "Http414" => (integer) http414数量
     *             "Http415" => (integer) http415数量
     *             "Http416" => (integer) http416数量
     *             "Http417" => (integer) http417数量
     *             "Http418" => (integer) http418数量
     *             "Http421" => (integer) http421数量
     *             "Http422" => (integer) http422数量
     *             "Http423" => (integer) http423数量
     *             "Http424" => (integer) http424数量
     *             "Http425" => (integer) http425数量
     *             "Http426" => (integer) http426数量
     *             "Http449" => (integer) http449数量
     *             "Http451" => (integer) http451数量
     *             "Http500" => (integer) http500数量
     *             "Http501" => (integer) http501数量
     *             "Http502" => (integer) http502数量
     *             "Http503" => (integer) http503数量
     *             "Http504" => (integer) http504数量
     *             "Http505" => (integer) http505数量
     *             "Http506" => (integer) http506数量
     *             "Http507" => (integer) http507数量
     *             "Http509" => (integer) http509数量
     *             "Http510" => (integer) http510数量
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getUcdnDomainOriginHttpCodeDetail(GetUcdnDomainOriginHttpCodeDetailRequest $request = null): GetUcdnDomainOriginHttpCodeDetailResponse
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainOriginHttpCodeDetailResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUcdnDomainOriginRequestNum - 获取域名回源请求数
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_ucdn_domain_origin_request_num
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Type" => (integer) 时间粒度（0表示按照5分钟粒度，1表示按照1小时粒度，2表示按照一天的粒度, 3=按1分钟）
     *     "BeginTime" => (integer) 查询的起始时间，格式为Unix Timestamp
     *     "EndTime" => (integer) 查询的结束时间，格式为Unix Timestamp
     *     "DomainId" => (array<string>) 域名id，创建域名时生成的id。默认全部域名
     *     "Areacode" => (string) 查询区域 cn代表国内 abroad代表海外，只支持国内
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RequestList" => (array<object>) 请求数实例表。[
     *         [
     *             "Time" => (integer) 带宽获取的时间点。格式：时间戳
     *             "CdnRequest" => (number) 返回值返回指定时间区间内的cdn收到的请求次数之和
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getUcdnDomainOriginRequestNum(GetUcdnDomainOriginRequestNumRequest $request = null): GetUcdnDomainOriginRequestNumResponse
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainOriginRequestNumResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUcdnDomainPrefetchEnable - 获取域名预取开启状态
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_ucdn_domain_prefetch_enable
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DomainId" => (string) 域名ID，创建加速域名时生成。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Enable" => (integer) 0表示该域名未开启预取，1表示该域名已开启预取
     * ]
     *
     * @throws UCloudException
     */
    public function getUcdnDomainPrefetchEnable(GetUcdnDomainPrefetchEnableRequest $request = null): GetUcdnDomainPrefetchEnableResponse
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainPrefetchEnableResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUcdnDomainRequestNumV3 - 获取域名请求数
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_ucdn_domain_request_num_v3
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Type" => (integer) 时间粒度（0表示按照5分钟粒度，1表示按照1小时粒度，2表示按照一天的粒度, 3=按1分钟）
     *     "BeginTime" => (integer) 查询的起始时间，格式为Unix Timestamp
     *     "EndTime" => (integer) 查询的结束时间，格式为Unix Timestamp
     *     "DomainId" => (array<string>) 域名id，创建域名时生成的id。默认全部域名
     *     "Areacode" => (string) 查询区域 cn代表国内 abroad代表海外，只支持国内
     *     "Protocol" => (string) 协议，http、https 不传则查所有协议的带宽
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RequestList" => (array<object>) 请求数实例表。[
     *         [
     *             "Time" => (integer) 带宽获取的时间点。格式：时间戳
     *             "CdnRequest" => (number) 返回值返回指定时间区间内的cdn收到的请求次数之和
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getUcdnDomainRequestNumV3(GetUcdnDomainRequestNumV3Request $request = null): GetUcdnDomainRequestNumV3Response
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainRequestNumV3Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUcdnPassBandwidthV2 - 获取回源带宽数据（cdn回客户源站部分）
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_ucdn_pass_bandwidth_v2
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Type" => (integer) 时间粒度（0表示按照5分钟粒度，1表示按照1小时粒度，2表示按照一天的粒度，3表示按照1分钟粒度）
     *     "DomainId" => (array<string>) 域名id，创建域名时生成的id。默认全部域名
     *     "Areacode" => (string) 查询带宽区域 cn代表国内 abroad代表海外，只支持国内
     *     "BeginTime" => (integer) 查询的起始时间，格式为Unix Timestamp。如果有EndTime，BeginTime必须赋值。如没有赋值，则返回缺少参 数错误，如果没有EndTime，BeginTime也可以不赋值，EndTime默认当前时间，BeginTime 默认前一天的当前时间。
     *     "EndTime" => (integer) 查询的结束时间，格式为Unix Timestamp。EndTime默认为当前时间，BeginTime默认为当前时间前一天时间。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BandwidthList" => (array<object>) 回源带宽数据[
     *         [
     *             "Time" => (integer) 宽获取的时间点。格式：时间戳
     *             "Bandwidth" => (number) 返回值带宽值数据。
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getUcdnPassBandwidthV2(GetUcdnPassBandwidthV2Request $request = null): GetUcdnPassBandwidthV2Response
    {
        $resp = $this->invoke($request);
        return new GetUcdnPassBandwidthV2Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUcdnProIspBandwidthV2 - 按省份运营商获取域名带宽数据
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_ucdn_pro_isp_bandwidth_v2
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BeginTime" => (integer) 查询的起始日期，格式为Unix Timestamp
     *     "EndTime" => (integer) 查询的结束日期，格式为Unix Timestamp
     *     "Type" => (integer) 时间粒度0 (按5分钟粒度)1 (按小时粒度)2(按天粒度)3(按分钟粒度）
     *     "DomainId" => (array<string>) 域名id，创建域名时生成的id。默认全部域名
     *     "Province" => (array<string>) 省份代码（省份拼音），可以传多个，不传则查询所有省份
     *     "Isp" => (string) 运营商代码（运营商拼音），一次只能查询一个运营商，不传递默认取所有运营商
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BandwidthSet" => (array<object>) 按省份的带宽流量实例表。具体参考下面BandwidthSet[
     *         [
     *             "Province" => (string) 省份代码
     *             "BandwidthTrafficList" => (array<object>) 省份带宽流量实例表[
     *                 [
     *                     "Time" => (integer) 带宽获取的时间点。格式：时间戳
     *                     "CdnBandwidth" => (number) 返回值返回指定时间区间内CDN的带宽峰值，单位Mbps
     *                     "Traffic" => (number) 对应时间粒度的流量，单位字节
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getUcdnProIspBandwidthV2(GetUcdnProIspBandwidthV2Request $request = null): GetUcdnProIspBandwidthV2Response
    {
        $resp = $this->invoke($request);
        return new GetUcdnProIspBandwidthV2Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUcdnProIspRequestNumV2 - 按省份运营商获取域名请求数
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_ucdn_pro_isp_request_num_v2
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BeginTime" => (integer) 查询的起始日期，格式为Unix Timestamp  忽略时间部分
     *     "EndTime" => (integer) 查询的结束日期，格式为Unix Timestamp  忽略时间部分
     *     "DomainId" => (array<string>) 域名id，创建域名时生成的id。默认全部域名
     *     "Province" => (array<string>) 省份代码，可以传多个，不传则查询所有省份
     *     "Isp" => (string) 运营商代码，一次只能查询一个运营商，不传递默认取所有运营商
     *     "Type" => (integer) 时间粒度（0表示按照5分钟粒度，1表示按照1小时粒度，2表示按照一天粒度，3表示按照一分钟粒度）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RequestNumSet" => (array<object>) 按省份的请求数实例表。具体参考下面RequestList[
     *         [
     *             "Province" => (string) 省份代码
     *             "RequestList" => (array<object>) 省份请求数实例表 ProIspRequestListV2[
     *                 [
     *                     "Time" => (integer) 带宽获取的时间点。格式：时间戳
     *                     "CdnRequest" => (number) 返回值返回指定时间区间内的请求数
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getUcdnProIspRequestNumV2(GetUcdnProIspRequestNumV2Request $request = null): GetUcdnProIspRequestNumV2Response
    {
        $resp = $this->invoke($request);
        return new GetUcdnProIspRequestNumV2Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUcdnTrafficV2 - 获取流量信息
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/get_ucdn_traffic_v2
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TrafficSet" => (array<object>) 用户不同区域的流量信息, 具体结构参见TrafficSet部分[
     *         [
     *             "Areacode" => (string) 购买流量的区域, cn: 国内; abroad: 国外
     *             "TrafficTotal" => (number) Areacode区域内总购买流量, 单位GB
     *             "TrafficLeft" => (number) Areacode区域内总剩余流量, 单位GB
     *             "TrafficUsed" => (number) Areacode区域内总使用流量, 单位GB
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getUcdnTrafficV2(GetUcdnTrafficV2Request $request = null): GetUcdnTrafficV2Response
    {
        $resp = $this->invoke($request);
        return new GetUcdnTrafficV2Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * PrefetchNewUcdnDomainCache - 提交预取任务
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/prefetch_new_ucdn_domain_cache
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UrlList" => (array<string>) 预热URL列表，n从自然数0开始。UrlList.n字段必须以”http://域名/”开始。如刷新文件目录a下面img.png文件， 格式为http://abc.ucloud.cn/a/img.png。请正确提交需要刷新的域名
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TaskId" => (string) 本次提交url对应的任务id
     * ]
     *
     * @throws UCloudException
     */
    public function prefetchNewUcdnDomainCache(PrefetchNewUcdnDomainCacheRequest $request = null): PrefetchNewUcdnDomainCacheResponse
    {
        $resp = $this->invoke($request);
        return new PrefetchNewUcdnDomainCacheResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * QueryIpLocation - 查询IP信息
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/query_ip_location
     *
     * Arguments:
     *
     * $args = [
     *     "Ip" => (array<string>) ip列表
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (array<object>) IP信息列表[
     *         [
     *             "Ip" => (string) 客户端请求的ip
     *             "Area" => (string) 地区
     *             "Isp" => (string) 运营商
     *             "City" => (string) 城市
     *             "Exist" => (boolean) ip是否存在
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function queryIpLocation(QueryIpLocationRequest $request = null): QueryIpLocationResponse
    {
        $resp = $this->invoke($request);
        return new QueryIpLocationResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RefreshNewUcdnDomainCache - 刷新缓存
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/refresh_new_ucdn_domain_cache
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Type" => (string) 刷新类型，file代表文件刷新，dir 代表路径刷新，m3u8带表m3u8刷新
     *     "UrlList" => (array<string>) 需要刷新的URL，n 从自然数0开始，刷新多个URL列表时，一次最多提交30个。必须以”http://域名/”开始。目录要以”/”结尾， 如刷新目录a下所有文件，格式为：http://abc.ucloud.cn/a/；如刷新文件目录a下面img.png文件， 格式为http://abc.ucloud.cn/a/img.png。请正确提交需要刷新的域名
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TaskId" => (string) 本次提交url对应的任务id
     * ]
     *
     * @throws UCloudException
     */
    public function refreshNewUcdnDomainCache(RefreshNewUcdnDomainCacheRequest $request = null): RefreshNewUcdnDomainCacheResponse
    {
        $resp = $this->invoke($request);
        return new RefreshNewUcdnDomainCacheResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SwitchUcdnChargeType - 切换账号计费方式
     *
     * See also: https://docs.ucloud.cn/api/ucdn-api/switch_ucdn_charge_type
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "ChargeType" => (string) 计费方式。traffic代表按流量包计费，bandwidth按带宽付费
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function switchUcdnChargeType(SwitchUcdnChargeTypeRequest $request = null): SwitchUcdnChargeTypeResponse
    {
        $resp = $this->invoke($request);
        return new SwitchUcdnChargeTypeResponse($resp->toArray(), $resp->getRequestId());
    }
}
