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
namespace UCloud\UFile;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UFile\Apis\CreateBucketRequest;
use UCloud\UFile\Apis\CreateBucketResponse;
use UCloud\UFile\Apis\CreateUFileLifeCycleRequest;
use UCloud\UFile\Apis\CreateUFileLifeCycleResponse;
use UCloud\UFile\Apis\CreateUFileTokenRequest;
use UCloud\UFile\Apis\CreateUFileTokenResponse;
use UCloud\UFile\Apis\DeleteBucketRequest;
use UCloud\UFile\Apis\DeleteBucketResponse;
use UCloud\UFile\Apis\DeleteUFileLifeCycleRequest;
use UCloud\UFile\Apis\DeleteUFileLifeCycleResponse;
use UCloud\UFile\Apis\DeleteUFileTokenRequest;
use UCloud\UFile\Apis\DeleteUFileTokenResponse;
use UCloud\UFile\Apis\DescribeBucketRequest;
use UCloud\UFile\Apis\DescribeBucketResponse;
use UCloud\UFile\Apis\DescribeUFileLifeCycleRequest;
use UCloud\UFile\Apis\DescribeUFileLifeCycleResponse;
use UCloud\UFile\Apis\DescribeUFileTokenRequest;
use UCloud\UFile\Apis\DescribeUFileTokenResponse;
use UCloud\UFile\Apis\GetUFileDailyReportRequest;
use UCloud\UFile\Apis\GetUFileDailyReportResponse;
use UCloud\UFile\Apis\GetUFileQuotaRequest;
use UCloud\UFile\Apis\GetUFileQuotaResponse;
use UCloud\UFile\Apis\GetUFileQuotaInfoRequest;
use UCloud\UFile\Apis\GetUFileQuotaInfoResponse;
use UCloud\UFile\Apis\GetUFileQuotaPriceRequest;
use UCloud\UFile\Apis\GetUFileQuotaPriceResponse;
use UCloud\UFile\Apis\GetUFileReportRequest;
use UCloud\UFile\Apis\GetUFileReportResponse;
use UCloud\UFile\Apis\SetUFileRefererRequest;
use UCloud\UFile\Apis\SetUFileRefererResponse;
use UCloud\UFile\Apis\UpdateBucketRequest;
use UCloud\UFile\Apis\UpdateBucketResponse;
use UCloud\UFile\Apis\UpdateUFileLifeCycleRequest;
use UCloud\UFile\Apis\UpdateUFileLifeCycleResponse;
use UCloud\UFile\Apis\UpdateUFileTokenRequest;
use UCloud\UFile\Apis\UpdateUFileTokenResponse;

/**
 * This client is used to call actions of **UFile** service
 */
class UFileClient extends Client
{

    /**
     * CreateBucket - 创建Bucket
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/create_bucket
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "BucketName" => (string) 待创建Bucket的名称，具有全局唯一性
     *     "Type" => (string) Bucket访问类型，public或private; 默认为private
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BucketName" => (string) 已创建Bucket的名称
     *     "BucketId" => (string) 已创建Bucket的ID
     * ]
     *
     * @return CreateBucketResponse
     * @throws UCloudException
     */
    public function createBucket(CreateBucketRequest $request = null) {
        $resp = $this->invoke($request);
        return new CreateBucketResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUFileLifeCycle - 创建生命周期管理
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/create_ufile_life_cycle
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LifeCycleName" => (string) 生命周期名称
     *     "Prefix" => (string) 生命周期所适用的前缀；*为整个存储空间文件；一条规则只支持一个文件前缀；
     *     "Status" => (string) Enabled -- 启用，Disabled -- 不启用
     *     "BucketName" => (string) 存储空间名称
     *     "Days" => (integer) 指定一个过期天数N，文件会在其最近更新时间点的N天后过期，自动删除；参数范围：[7,36500]，0代表不启用
     *     "ArchivalDays" => (integer) 指定一个过期天数N，文件会在其最近更新时间点的N天后，自动变为归档存储类型；参数范围：[7,36500]，0代表不启用
     *     "IADays" => (integer) 指定一个过期天数N，文件会在其最近更新时间点的N天后，自动变为低频存储类型；参数范围：[7,36500]，0代表不启用
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "LifeCycleId" => (string) 生命周期Id
     * ]
     *
     * @return CreateUFileLifeCycleResponse
     * @throws UCloudException
     */
    public function createUFileLifeCycle(CreateUFileLifeCycleRequest $request = null) {
        $resp = $this->invoke($request);
        return new CreateUFileLifeCycleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUFileToken - 创建US3令牌
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/create_ufile_token
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "TokenName" => (string) 令牌名称
     *     "AllowedOps" => (array<string>) 令牌允许执行的操作，[ TOKEN_ALLOW_NONE , TOKEN_ALLOW_READ , TOKEN_ALLOW_WRITE , TOKEN_ALLOW_DELETE , TOKEN_ALLOW_LIST, TOKEN_ALLOW_IOP , TOKEN_ALLOW_DP  ]。默认TOKEN_ALLOW_NONE
     *     "AllowedPrefixes" => (array<string>) 令牌允许操作的key前缀，默认*表示全部
     *     "AllowedBuckets" => (array<string>) 令牌允许操作的bucket，默认*表示全部
     *     "ExpireTime" => (integer) Unix 时间戳，精确到秒，为令牌过期时间点。默认过期时间为一天（即当前Unix时间戳+86400）；注意：过期时间不能超过 4102416000
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TokenId" => (string) 创建令牌的token_id
     * ]
     *
     * @return CreateUFileTokenResponse
     * @throws UCloudException
     */
    public function createUFileToken(CreateUFileTokenRequest $request = null) {
        $resp = $this->invoke($request);
        return new CreateUFileTokenResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteBucket - 删除Bucket
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/delete_bucket
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "BucketName" => (string) 待删除Bucket的名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BucketName" => (string) Bucket的名称
     *     "BucketId" => (string) Bucket的ID
     * ]
     *
     * @return DeleteBucketResponse
     * @throws UCloudException
     */
    public function deleteBucket(DeleteBucketRequest $request = null) {
        $resp = $this->invoke($request);
        return new DeleteBucketResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUFileLifeCycle - 删除生命周期管理
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/delete_ufile_life_cycle
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LifeCycleId" => (string) 生命周期Id
     *     "BucketName" => (string) 存储空间名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUFileLifeCycleResponse
     * @throws UCloudException
     */
    public function deleteUFileLifeCycle(DeleteUFileLifeCycleRequest $request = null) {
        $resp = $this->invoke($request);
        return new DeleteUFileLifeCycleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUFileToken - 删除令牌
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/delete_ufile_token
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "TokenId" => (string) 令牌ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUFileTokenResponse
     * @throws UCloudException
     */
    public function deleteUFileToken(DeleteUFileTokenRequest $request = null) {
        $resp = $this->invoke($request);
        return new DeleteUFileTokenResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeBucket - 获取Bucket的描述信息
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/describe_bucket
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 如果提供此参数，则获取相应地域下所有空间的空间名称(只返回空间名称信息)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "BucketName" => (string) 待获取Bucket的名称，若不提供，则获取所有Bucket
     *     "Offset" => (integer) 获取所有Bucket列表的偏移数目，默认为0
     *     "Limit" => (integer) 获取所有Bucket列表的限制数目，默认为20
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) Bucket的描述信息 参数见 UFileBucketSet[
     *         [
     *             "Region" => (string) Bucket所属地域
     *             "BucketName" => (string) Bucket名称
     *             "BucketId" => (string) Bucket的ID
     *             "Domain" => (object) Bucket的域名集合 参数见 UFileDomainSet[
     *                 "Src" => (array<string>) 源站域名
     *                 "Cdn" => (array<string>) UCDN加速域名
     *                 "CustomSrc" => (array<string>) 用户自定义源站域名
     *                 "CustomCdn" => (array<string>) 用户自定义CDN加速域名
     *             ]
     *             "CdnDomainId" => (array<string>) 与Bucket关联的CND加速域名的ID列表
     *             "Type" => (string) Bucket访问类型
     *             "CreateTime" => (integer) Bucket的创建时间
     *             "ModifyTime" => (integer) Bucket的修改时间
     *             "Biz" => (string) Bucket所属业务, general或vod或udb general: 普通业务； vod: 视频云业务; udb: 云数据库业务
     *             "Tag" => (string) 所属业务组
     *             "HasUserDomain" => (integer) 是否存在自定义域名。0不存在，1存在，2错误
     *         ]
     *     ]
     * ]
     *
     * @return DescribeBucketResponse
     * @throws UCloudException
     */
    public function describeBucket(DescribeBucketRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeBucketResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUFileLifeCycle - 获取生命周期信息
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/describe_ufile_life_cycle
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BucketName" => (string) 存储空间名称
     *     "LifeCycleId" => (string) 生命周期Id；不传递此参数拉取存储空间下面的所有生命周期信息
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DateSet" => (array<object>) 生命周期信息[
     *         [
     *             "LifeCycleId" => (string) 生命周期Id
     *             "LifeCycleName" => (string) 生命周期名称
     *             "Prefix" => (string) 生命周期所适用的前缀；*为整个存储空间文件；
     *             "Days" => (integer) 指定一个过期天数N，文件会在其最近更新时间点的N天后过期，自动删除，0代表不启用；
     *             "Status" => (string) Enabled -- 启用，Disabled -- 不启用
     *             "BucketName" => (string) 存储空间名称
     *             "ArchivalDays" => (integer) 指定一个过期天数N，文件会在其最近更新时间点的N天后过期，自动转换为归档存储类型，0代表不启用；
     *             "IADays" => (integer) 指定一个过期天数N，文件会在其最近更新时间点的N天后过期，自动转换为低频存储类型，0代表不启用；
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUFileLifeCycleResponse
     * @throws UCloudException
     */
    public function describeUFileLifeCycle(DescribeUFileLifeCycleRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeUFileLifeCycleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUFileToken - 获取令牌信息
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/describe_ufile_token
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "TokenId" => (string) 令牌ID，只返回指定ID信息，否则拉取所有令牌
     *     "TokenName" => (string) 令牌名称，只返回指定令牌名称信息，否则拉取所有令牌
     *     "Display" => (integer) 0表示显示部分token信息；不传递和其他情况表示显示全部token信息
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 令牌描述信息[
     *         [
     *             "TokenId" => (string) 令牌ID
     *             "TokenName" => (string) 令牌名称
     *             "PublicKey" => (string) 令牌公钥
     *             "PrivateKey" => (string) 令牌私钥
     *             "AllowedOps" => (array<string>) 令牌允许执行的操作，[ TOKEN_ALLOW_NONE , TOKEN_ALLOW_READ , TOKEN_ALLOW_WRITE , TOKEN_ALLOW_DELETE , TOKEN_ALLOW_LIST, TOKEN_ALLOW_IOP , TOKEN_ALLOW_DP ]
     *             "AllowedPrefixes" => (array<string>) 令牌允许操作的key前缀
     *             "AllowedBuckets" => (array<string>) 令牌允许操作的bucket
     *             "ExpireTime" => (integer) 令牌的超时时间点
     *             "CreateTime" => (integer) 创建时间
     *             "ModifyTime" => (integer) 修改时间
     *             "Region" => (string) 所属地区
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUFileTokenResponse
     * @throws UCloudException
     */
    public function describeUFileToken(DescribeUFileTokenRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeUFileTokenResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUFileDailyReport - 查看日消费报表
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/get_ufile_daily_report
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "StartTime" => (integer) 查询开始时间;unix时间戳，单位s
     *     "EndTime" => (integer) 查询结束时间;unix时间戳,单位s
     *     "BucketName" => (string) 空间名称。此字段不为空，返回此Bucket日使用量；否则，返回这个项目的日使用量
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 消费情况[
     *         [
     *             "Total" => (array<object>) 总消费情况[
     *                 [
     *                     "Flow" => (number) 下载流量：单位byte；国内无此字段
     *                     "IdleFlow" => (number) 闲时流量；单位byte；海外无此字段
     *                     "BusyFlow" => (number) 忙时流量；单位byte；海外无此字段
     *                     "CdnFlow" => (number) cdn回源流量;单位byte
     *                     "ApiTimes" => (number) API请求次数（万次）
     *                 ]
     *             ]
     *             "Daily" => (array<object>) 日消费情况[
     *                 [
     *                     "Storage" => (number) 标准存储量；单位byte
     *                     "IaStorage" => (number) 低频存储量；单位byte
     *                     "AcStorage" => (number) 冷存（归档）存储量；单位byte
     *                     "IaGetSize" => (number) 低频数据取回量；单位byte
     *                     "AcRestore" => (number) 冷存激活量，即归档数据取回量；单位byte
     *                     "BusyFlow" => (number) 忙时流量；单位byte；海外无此字段
     *                     "IdleFlow" => (number) 闲时流量；单位byte；海外无此字段
     *                     "CdnFlow" => (number) cdn回源流量;单位byte
     *                     "Flow" => (number) 下载流量：单位byte；国内无此字段
     *                     "Date" => (integer) 配额消费时间，unix时间戳（单位s），精确到日期
     *                     "ApiTimes" => (number) API请求次数（万次）
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return GetUFileDailyReportResponse
     * @throws UCloudException
     */
    public function getUFileDailyReport(GetUFileDailyReportRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetUFileDailyReportResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUFileQuota - 查看配额状态
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/get_ufile_quota
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "QuotaType" => (string) 配额类型，取值为storage-volume, download-traffic或request-count
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "LeftQuota" => (number) 剩余的配额数值
     * ]
     *
     * @return GetUFileQuotaResponse
     * @throws UCloudException
     */
    public function getUFileQuota(GetUFileQuotaRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetUFileQuotaResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUFileQuotaInfo - 获取配额信息
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/get_ufile_quota_info
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "QuotaType" => (array<string>) 配额类型，取值为storage-volume, download-traffic或request-count
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 配额信息数据集[
     *         [
     *             "Region" => (string) 可用地域
     *             "Owe" => (integer) 是否欠费：1表示欠费；0表示未欠费
     *             "Storage" => (object) 剩余存储容量[
     *                 "Left" => (number) 配额剩余量
     *             ]
     *             "DownloadFlow" => (object) 剩余下载流量[
     *                 "Left" => (number) 配额剩余量
     *             ]
     *             "RequestCnt" => (object) 剩余请求次数[
     *                 "Left" => (number) 配额剩余量
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return GetUFileQuotaInfoResponse
     * @throws UCloudException
     */
    public function getUFileQuotaInfo(GetUFileQuotaInfoRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetUFileQuotaInfoResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUFileQuotaPrice - 根据US3的购买配额，查询需要支付的价格。
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/get_ufile_quota_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "StorageVolume" => (integer) 存储容量，单位: GB*天，范围: [0, 30 000 000]，步长：100GB*天
     *     "DownloadTraffic" => (integer) 下载流量，单位: GB，范围: [0, 60 000]，步长：1GB
     *     "RequestCount" => (integer) 请求次数，单位：万次，范围：[0, 1 000 000]，步长：1万次
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (number) 待支付价格，单位：分
     * ]
     *
     * @return GetUFileQuotaPriceResponse
     * @throws UCloudException
     */
    public function getUFileQuotaPrice(GetUFileQuotaPriceRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetUFileQuotaPriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUFileReport - 查看配额使用报表
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/get_ufile_report
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "StartTime" => (integer) 查询开始时间
     *     "EndTime" => (integer) 查询结束时间
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 报表内容 参数见 UFileReportSet[
     *         [
     *             "Time" => (integer) 配额消费时间，unix时间戳，精确到日期
     *             "StorageVolume" => (number) 配额消费当日使用的存储容量，单位：GB*天
     *             "DownloadTraffic" => (number) 配额消费当日使用的下载流量，单位：GB
     *             "RequestCount" => (number) 配额消费当日使用的请求次数，单位：万次
     *         ]
     *     ]
     * ]
     *
     * @return GetUFileReportResponse
     * @throws UCloudException
     */
    public function getUFileReport(GetUFileReportRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetUFileReportResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SetUFileReferer - 设置对象存储防盗链
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/set_ufile_referer
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BucketName" => (string) 存储空间名称
     *     "RefererStatus" => (string) 开启关闭referer防盗链;关闭防盗链会清空防盗链参数设置，开启防盗链必须指定 RefererType、Referers；开启：on， 关闭：off;
     *     "RefererAllowNull" => (boolean) RefererType为白名单时，RefererAllowNull为false代表不允许空referer访问，为true代表允许空referer访问;此参数默认为 true; 
     *     "RefererType" => (integer) 防盗链Referer类型，支持两种类型，黑名单和白名单; 1黑名单，2白名单；RefererStatus为"on"时此参数必填；
     *     "Referers" => (array<string>) 防盗链Referer规则，支持正则表达式（不支持符号';')
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return SetUFileRefererResponse
     * @throws UCloudException
     */
    public function setUFileReferer(SetUFileRefererRequest $request = null) {
        $resp = $this->invoke($request);
        return new SetUFileRefererResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateBucket - 更改Bucket的属性
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/update_bucket
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "BucketName" => (string) 待修改Bucket的名称
     *     "Type" => (string) Bucket访问类型;public或private
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BucketName" => (string) Bucket的名称
     *     "BucketId" => (string) Bucket的ID
     * ]
     *
     * @return UpdateBucketResponse
     * @throws UCloudException
     */
    public function updateBucket(UpdateBucketRequest $request = null) {
        $resp = $this->invoke($request);
        return new UpdateBucketResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateUFileLifeCycle - 更新生命周期管理
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/update_ufile_life_cycle
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "LifeCycleId" => (string) 生命周期Id
     *     "LifeCycleName" => (string) 生命周期名称
     *     "Prefix" => (string) 生命周期所适用的前缀；*为整个存储空间文件；一条规则只支持一个文件前缀；
     *     "Status" => (string) Enabled -- 启用，Disabled -- 不启用
     *     "BucketName" => (string) 存储空间名称
     *     "Days" => (integer) 指定一个过期天数N，文件会在其最近更新时间点的N天后过期,自动删除；范围： [7,36500]
     *     "ArchivalDays" => (integer) 指定一个过期天数N，文件会在其最近更新时间点的N天后过期，自动转换为归档存储类型；范围： [7,36500]，0代表不启用
     *     "IADays" => (integer) 指定一个过期天数N，文件会在其最近更新时间点的N天后过期，自动转换为低频存储类型；范围： [7,36500]，0代表不启用
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateUFileLifeCycleResponse
     * @throws UCloudException
     */
    public function updateUFileLifeCycle(UpdateUFileLifeCycleRequest $request = null) {
        $resp = $this->invoke($request);
        return new UpdateUFileLifeCycleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateUFileToken - 更新令牌的操作权限，可操作key的前缀，可操作bucket和令牌超时时间点
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/update_ufile_token
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "TokenId" => (string) 令牌ID
     *     "TokenName" => (string) 令牌名称
     *     "AllowedOps" => (array<string>) 令牌允许执行的操作，[ TOKEN_ALLOW_NONE , TOKEN_ALLOW_READ , TOKEN_ALLOW_WRITE , TOKEN_ALLOW_DELETE , TOKEN_ALLOW_LIST, TOKEN_ALLOW_IOP , TOKEN_ALLOW_DP ]
     *     "AllowedPrefixes" => (array<string>) 令牌允许操作的key前缀
     *     "AllowedBuckets" => (array<string>) 令牌允许操作的bucket
     *     "ExpireTime" => (integer) 令牌的超时时间点（时间戳）;注意：过期时间不能超过 4102416000
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateUFileTokenResponse
     * @throws UCloudException
     */
    public function updateUFileToken(UpdateUFileTokenRequest $request = null) {
        $resp = $this->invoke($request);
        return new UpdateUFileTokenResponse($resp->toArray(), $resp->getRequestId());
    }
}
