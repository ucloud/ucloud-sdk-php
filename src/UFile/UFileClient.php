<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
use UCloud\UFile\Apis\AddCORSRuleRequest;
use UCloud\UFile\Apis\AddCORSRuleResponse;
use UCloud\UFile\Apis\AddUFileSSLCertRequest;
use UCloud\UFile\Apis\AddUFileSSLCertResponse;
use UCloud\UFile\Apis\BindBucketDomainRequest;
use UCloud\UFile\Apis\BindBucketDomainResponse;
use UCloud\UFile\Apis\CreateBucketRequest;
use UCloud\UFile\Apis\CreateBucketResponse;
use UCloud\UFile\Apis\CreateUFileLifeCycleRequest;
use UCloud\UFile\Apis\CreateUFileLifeCycleResponse;
use UCloud\UFile\Apis\CreateUFileTokenRequest;
use UCloud\UFile\Apis\CreateUFileTokenResponse;
use UCloud\UFile\Apis\DeleteBucketRequest;
use UCloud\UFile\Apis\DeleteBucketResponse;
use UCloud\UFile\Apis\DeleteCORSRuleRequest;
use UCloud\UFile\Apis\DeleteCORSRuleResponse;
use UCloud\UFile\Apis\DeleteUFileLifeCycleRequest;
use UCloud\UFile\Apis\DeleteUFileLifeCycleResponse;
use UCloud\UFile\Apis\DeleteUFileSSLCertRequest;
use UCloud\UFile\Apis\DeleteUFileSSLCertResponse;
use UCloud\UFile\Apis\DeleteUFileTokenRequest;
use UCloud\UFile\Apis\DeleteUFileTokenResponse;
use UCloud\UFile\Apis\DescribeBucketRequest;
use UCloud\UFile\Apis\DescribeBucketResponse;
use UCloud\UFile\Apis\DescribeCORSRuleRequest;
use UCloud\UFile\Apis\DescribeCORSRuleResponse;
use UCloud\UFile\Apis\DescribeUFileLifeCycleRequest;
use UCloud\UFile\Apis\DescribeUFileLifeCycleResponse;
use UCloud\UFile\Apis\DescribeUFileRefererRequest;
use UCloud\UFile\Apis\DescribeUFileRefererResponse;
use UCloud\UFile\Apis\DescribeUFileSSLCertRequest;
use UCloud\UFile\Apis\DescribeUFileSSLCertResponse;
use UCloud\UFile\Apis\DescribeUFileTokenRequest;
use UCloud\UFile\Apis\DescribeUFileTokenResponse;
use UCloud\UFile\Apis\GetBucketStaticPageRuleRequest;
use UCloud\UFile\Apis\GetBucketStaticPageRuleResponse;
use UCloud\UFile\Apis\GetUFileDailyBillRequest;
use UCloud\UFile\Apis\GetUFileDailyBillResponse;
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
use UCloud\UFile\Apis\UpdateBucketStaticPageRuleRequest;
use UCloud\UFile\Apis\UpdateBucketStaticPageRuleResponse;
use UCloud\UFile\Apis\UpdateCORSRuleRequest;
use UCloud\UFile\Apis\UpdateCORSRuleResponse;
use UCloud\UFile\Apis\UpdateUFileLifeCycleRequest;
use UCloud\UFile\Apis\UpdateUFileLifeCycleResponse;
use UCloud\UFile\Apis\UpdateUFileSSLCertRequest;
use UCloud\UFile\Apis\UpdateUFileSSLCertResponse;
use UCloud\UFile\Apis\UpdateUFileTokenRequest;
use UCloud\UFile\Apis\UpdateUFileTokenResponse;
use UCloud\UFile\Apis\UpdateUdsRuleRequest;
use UCloud\UFile\Apis\UpdateUdsRuleResponse;

/**
 * This client is used to call actions of **UFile** service
 */
class UFileClient extends Client
{

    /**
     * AddCORSRule - 添加跨域规则
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/add_cors_rule
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BucketName" => (string) Bucket名称
     *     "AllowedOrigin" => (string) 指定允许的跨域请求的来源，使用通配符(*)表示允许所有来源的跨域请求（多个Origin用‘,’分隔）
     *     "AllowedMethod" => (string) 指定允许的跨域请求方法。支持的方法名有：GET、PUT、POST、DELETE、HEAD、OPTIONS（多个Method用‘,’分隔）
     *     "AllowedHeader" => (string) 指定允许的跨域请求头（多个Header用‘,’分隔）
     *     "ExposeHeader" => (string) 指定允许用户从应用程序中访问的响应头（多个ExposeHeader用‘,’分隔）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "CORSId" => (string) 增加一条跨域规则的cors_id
     * ]
     *
     * @return AddCORSRuleResponse
     * @throws UCloudException
     */
    public function addCORSRule(AddCORSRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddCORSRuleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AddUFileSSLCert - 给指定域名添加证书
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/add_ufile_ssl_cert
     *
     * Arguments:
     *
     * $args = [
     *     "BucketName" => (string) 存储桶名称，全局唯一
     *     "Domain" => (string) 域名
     *     "CertificateName" => (string) SSL证书名称
     *     "Certificate" => (string) 填写SSL证书文件内容（PEM编码）。证书文件内容填写格式：如果您的业务场景仅需确保服务端证书可信，则证书文件需要包含服务器证书（①）和中间证书（②）。如果您的中间证书和服务器证书是两个文件，您可以在证书链配置项填写中间证书内容即可。
     *     "CertificateKey" => (string) 填写SSL证书私钥内容（PEM编码）。
     *     "USSLId" => (string) ussl证书的资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AddUFileSSLCertResponse
     * @throws UCloudException
     */
    public function addUFileSSLCert(AddUFileSSLCertRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddUFileSSLCertResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * BindBucketDomain - 绑定自定义域名
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/bind_bucket_domain
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BucketName" => (string) 自定义域名对应的bucket名称
     *     "Domain" => (string) 自定义域名
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BucketName" => (string) 自定义域名对应的bucket名称
     *     "BucketId" => (string) 自定义域名对应的Bucket的Id
     * ]
     *
     * @return BindBucketDomainResponse
     * @throws UCloudException
     */
    public function bindBucketDomain(BindBucketDomainRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BindBucketDomainResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateBucket - 创建Bucket
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/create_bucket
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BucketName" => (string) 待创建Bucket的名称，具有全局唯一性
     *     "Type" => (string) Bucket访问类型，public或private; 默认为private
     *     "Tag" => (string) Bucket所属业务组，默认为default
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
    public function createBucket(CreateBucketRequest $request = null)
    {
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
     *     "Tags" => (string) Tag，参数格式"k1=v1&k2=v2"，key的最大长度为128， value最大长度为256byte，单个object的tag的最大数量为10
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
    public function createUFileLifeCycle(CreateUFileLifeCycleRequest $request = null)
    {
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
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TokenName" => (string) 令牌名称
     *     "AllowedOps" => (array<string>) 令牌允许执行的操作[ TOKEN_ALLOW_NONE 没有权限, TOKEN_ALLOW_READ 下载权限 , TOKEN_ALLOW_WRITE 上传权限 , TOKEN_ALLOW_DELETE 删除权限 , TOKEN_ALLOW_LIST 列表权限, TOKEN_ALLOW_IOP 图片处理权限, TOKEN_DENY_UPDATE 禁止覆盖权限]。默认TOKEN_ALLOW_NONE
     *     "AllowedPrefixes" => (array<string>) 令牌允许操作的key前缀，默认*表示全部
     *     "AllowedBuckets" => (array<string>) 令牌允许操作的bucket，默认*表示全部
     *     "ExpireTime" => (integer) Unix 时间戳，精确到秒，为令牌过期时间点。默认过期时间为一天（即当前Unix时间戳+86400）；注意：过期时间不能超过 4102416000
     *     "BlackIPList" => (array<string>) 令牌黑名单，支持ipv4，ipv6格式。
     *     "WhiteIPList" => (array<string>) 令牌白名单，支持ipv4，ipv6格式。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TokenId" => (string) 令牌唯一ID
     *     "UFileTokenSet" => (object) 创建令牌的详细信息[
     *         "Region" => (string) 所属地区
     *         "TokenId" => (string) 令牌ID
     *         "TokenName" => (string) 令牌名称
     *         "PublicKey" => (string) 令牌公钥
     *         "PrivateKey" => (string) 令牌私钥
     *         "AllowedOps" => (array<string>) 令牌允许执行的操作，[ TOKEN_ALLOW_NONE 没有权限, TOKEN_ALLOW_READ 下载权限, TOKEN_ALLOW_WRITE 上传权限, TOKEN_ALLOW_DELETE 删除权限, TOKEN_ALLOW_LIST 列表权限, TOKEN_ALLOW_IOP 图片处理权限]
     *         "AllowedPrefixes" => (array<string>) 令牌允许操作的key前缀
     *         "AllowedBuckets" => (array<string>) 令牌允许操作的bucket
     *         "ExpireTime" => (integer) 令牌的超时时间点
     *         "CreateTime" => (integer) 创建时间
     *         "ModifyTime" => (integer) 修改时间
     *         "BlackIPList" => (array<string>) 令牌黑名单
     *         "WhiteIPList" => (array<string>) 令牌白名单
     *     ]
     * ]
     *
     * @return CreateUFileTokenResponse
     * @throws UCloudException
     */
    public function createUFileToken(CreateUFileTokenRequest $request = null)
    {
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
    public function deleteBucket(DeleteBucketRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteBucketResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteCORSRule - 删除跨域规则
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/delete_cors_rule
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BucketName" => (string) Bucket名称
     *     "CORSId" => (string) 跨域规则ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteCORSRuleResponse
     * @throws UCloudException
     */
    public function deleteCORSRule(DeleteCORSRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteCORSRuleResponse($resp->toArray(), $resp->getRequestId());
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
    public function deleteUFileLifeCycle(DeleteUFileLifeCycleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUFileLifeCycleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUFileSSLCert - 删除指定域名添加证书
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/delete_ufile_ssl_cert
     *
     * Arguments:
     *
     * $args = [
     *     "BucketName" => (string) 存储桶名称，全局唯一
     *     "Domain" => (string) 域名
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUFileSSLCertResponse
     * @throws UCloudException
     */
    public function deleteUFileSSLCert(DeleteUFileSSLCertRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUFileSSLCertResponse($resp->toArray(), $resp->getRequestId());
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
    public function deleteUFileToken(DeleteUFileTokenRequest $request = null)
    {
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
    public function describeBucket(DescribeBucketRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeBucketResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeCORSRule - 获取跨域规则信息
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/describe_cors_rule
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BucketName" => (string) Bucket名称
     *     "CORSId" => (string) 跨域规则ID，不指定则返回所有跨域规则信息
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 跨域规则信息集合[
     *         [
     *             "AllowedOrigin" => (string) 指定允许的跨域请求的来源，使用通配符(*)表示允许所有来源的跨域请求（多个Origin用‘,’分隔）
     *             "AllowedMethod" => (string) 指定允许的跨域请求方法。支持的方法名有：GET、PUT、POST、DELETE、HEAD、OPTIONS（多个Method用‘,’分隔）
     *             "CORSId" => (string) 跨域规则id
     *             "CreateTime" => (integer) 跨域规则创建时间
     *             "ModifyTime" => (integer) 跨域规则最新修改时间
     *             "AllowedHeader" => (string) 指定允许的跨域请求头（多个Header用‘,’分隔）
     *             "ExposeHeader" => (string) 指定允许用户从应用程序中访问的响应头（多个ExposeHeader用‘,’分隔）
     *         ]
     *     ]
     * ]
     *
     * @return DescribeCORSRuleResponse
     * @throws UCloudException
     */
    public function describeCORSRule(DescribeCORSRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeCORSRuleResponse($resp->toArray(), $resp->getRequestId());
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
     *     "DataSet" => (array<object>) 生命周期信息[
     *         [
     *             "MinSize" => (string) 文件的最小size
     *             "MaxSize" => (string) 文件的最大size
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
    public function describeUFileLifeCycle(DescribeUFileLifeCycleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUFileLifeCycleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUFileReferer - 对象存储防盗链列表
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/describe_ufile_referer
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BucketName" => (string) 存储空间名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RefererType" => (integer) 防盗链Referer类型，支持两种类型，1黑名单，2白名单；未开启referer时不返回此参数
     *     "RefererList" => (array<string>) 防盗链Referer规则列表；未开启referer时不返回此参数
     *     "NullRefer" => (boolean) ReferType为白名单时，NullRefer为false代表不允许NULL refer访问，为true代表允许Null refer访问; 未开启referer时不返回此参数
     *     "RefererStatus" => (string) 防盗链功能是否开启，"on"表示开启，"off"表示关闭
     *     "BlackList" => (array<string>) 黑名单列表
     *     "WhiteList" => (array<string>) 白名单列表
     * ]
     *
     * @return DescribeUFileRefererResponse
     * @throws UCloudException
     */
    public function describeUFileReferer(DescribeUFileRefererRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUFileRefererResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUFileSSLCert - 查询指定存储桶所有证书
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/describe_ufile_ssl_cert
     *
     * Arguments:
     *
     * $args = [
     *     "BucketName" => (string) 存储桶名称，全局唯一
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 证书列表[
     *         [
     *             "Domain" => (string) 域名
     *             "Certificate" => (string) SSL证书内容，和域名对应
     *             "CertificateKey" => (string) SSL证书对应的私钥
     *             "CertificateName" => (string) SSL证书名称
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUFileSSLCertResponse
     * @throws UCloudException
     */
    public function describeUFileSSLCert(DescribeUFileSSLCertRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUFileSSLCertResponse($resp->toArray(), $resp->getRequestId());
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
     *             "Region" => (string) 所属地区
     *             "TokenId" => (string) 令牌ID
     *             "TokenName" => (string) 令牌名称
     *             "PublicKey" => (string) 令牌公钥
     *             "PrivateKey" => (string) 令牌私钥
     *             "AllowedOps" => (array<string>) 令牌允许执行的操作，[ TOKEN_ALLOW_NONE 没有权限, TOKEN_ALLOW_READ 下载权限, TOKEN_ALLOW_WRITE 上传权限, TOKEN_ALLOW_DELETE 删除权限, TOKEN_ALLOW_LIST 列表权限, TOKEN_ALLOW_IOP 图片处理权限]
     *             "AllowedPrefixes" => (array<string>) 令牌允许操作的key前缀
     *             "AllowedBuckets" => (array<string>) 令牌允许操作的bucket
     *             "ExpireTime" => (integer) 令牌的超时时间点
     *             "CreateTime" => (integer) 创建时间
     *             "ModifyTime" => (integer) 修改时间
     *             "BlackIPList" => (array<string>) 令牌黑名单
     *             "WhiteIPList" => (array<string>) 令牌白名单
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUFileTokenResponse
     * @throws UCloudException
     */
    public function describeUFileToken(DescribeUFileTokenRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUFileTokenResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetBucketStaticPageRule - 获取bucket静态网页配置
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/get_bucket_static_page_rule
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Bucket" => (string) 存储桶名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Rule" => (object) 规则内容[
     *         "Status" => (string) 启用状态
     *         "DefaultIndex" => (string) 默认网页
     *         "SubDirRedirect" => (string) 子目录重定向功能的启用状态
     *         "RuleFor404" => (string) 404时的处理规则
     *         "DefaultPage404" => (string) 默认404页面在存储桶的路径
     *     ]
     * ]
     *
     * @return GetBucketStaticPageRuleResponse
     * @throws UCloudException
     */
    public function getBucketStaticPageRule(GetBucketStaticPageRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetBucketStaticPageRuleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUFileDailyBill - 获取bucket每日账单
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/get_ufile_daily_bill
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "StartTime" => (integer) 查询开始时间;unix时间戳，单位s
     *     "EndTime" => (integer) 查询结束时间;unix时间戳,单位s
     *     "BucketName" => (string) 空间名称。此字段不为空，返回此Bucket日账单,否则，返回这个项目的日账单
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 消费情况[
     *         [
     *             "BucketBills" => (array<object>) [
     *                 [
     *                     "GetCountIaBill" => (number) 下载低频存储次数费用；分
     *                     "GetCountBill" => (number) 下载标准存储次数费用；分
     *                     "PutCountAcBill" => (number) 上传归档存储次数费用；分
     *                     "PutCountIaBill" => (number) 上传低频存储次数费用；分
     *                     "PutCountBill" => (number) 上传标准存储次数费用；分
     *                     "ObjectTagCountBill" => (number) 对象标签费用: 分
     *                     "StorageBill" => (number) 标准-存储总容量费用；分
     *                     "IaStorageBill" => (number) 低频-存储总容量费用；分
     *                     "AcStorageBill" => (number) 归档-存储总容量费用；分
     *                     "IaGetSizeBill" => (number) 低频-数据取回量，即低频文件的数据取回量费用；分
     *                     "AcRestoreBill" => (number) 归档-标准解冻量，即归档文件的解冻类型为标准（Strandard）的解冻量费用； 分
     *                     "AcExpeditedRetrievalBill" => (number) 归档-高优先级解冻量，即归档文件的解冻类型为高优先级（Expedited）的解冻量费用； 分
     *                     "IaShortStorageBill" => (number) 低频-短期存储量，即补足未满最短存储期限的剩余天数的存储量费用；分
     *                     "AcShortStorageBill" => (number) 归档-短期存储量，即补足未满最短存储期限的剩余天数的存储量费用；分
     *                     "ImageHandleFlowBill" => (number) 基础图片处理量费用；分
     *                     "ImageCompressCountBill" => (number) 图片高级压缩次数费用；分
     *                     "BusyFlowBill" => (number) 忙时流量费用；分；海外无此字段
     *                     "IdleFlowBill" => (number) 闲时流量费用；分；海外无此字段
     *                     "CdnFlowBill" => (number) cdn回源流量费用;分
     *                     "FlowBill" => (number) 下载流量费用：分；国内无此字段
     *                     "Date" => (integer) 配额消费时间，unix时间戳；单位s，精确到日期
     *                     "GetCountAcBill" => (number) 下载归档存储次数费用；分
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return GetUFileDailyBillResponse
     * @throws UCloudException
     */
    public function getUFileDailyBill(GetUFileDailyBillRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUFileDailyBillResponse($resp->toArray(), $resp->getRequestId());
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
     *                     "Flow" => (number) 下载流量：单位GB；国内无此字段
     *                     "IdleFlow" => (number) 闲时流量；单位GB；海外无此字段
     *                     "BusyFlow" => (number) 忙时流量；单位GB；海外无此字段
     *                     "CdnFlow" => (number) cdn回源流量;单位GB
     *                     "ApiTimes" => (number) API请求次数（万次）
     *                 ]
     *             ]
     *             "Daily" => (array<object>) 日消费情况[
     *                 [
     *                     "Storage" => (number) 标准-存储总容量；单位GB
     *                     "IaStorage" => (number) 低频-存储总容量；单位GB
     *                     "AcStorage" => (number) 归档-存储总容量；单位GB
     *                     "IaGetSize" => (number) 低频-数据取回量，即低频文件的数据取回量；单位GB
     *                     "AcRestore" => (number) 归档-标准解冻量，即归档文件的解冻类型为标准（Strandard）的解冻量；单位GB
     *                     "AcExpeditedRetrieval" => (number) 归档-高优先级解冻量，即归档文件的解冻类型为高优先级（Expedited）的解冻量；单位GB
     *                     "IaShortStorage" => (number) 低频-短期存储量，即补足未满最短存储期限的剩余天数的存储量；单位GB
     *                     "AcShortStorage" => (number) 归档-短期存储量，即补足未满最短存储期限的剩余天数的存储量；单位GB
     *                     "ImageHandleFlow" => (number) 基础图片处理量；单位GB
     *                     "ImageCompressCount" => (number) 图片高级压缩次数；单位千次
     *                     "BusyFlow" => (number) 忙时流量；单位GB；海外无此字段
     *                     "IdleFlow" => (number) 闲时流量；单位GB；海外无此字段
     *                     "CdnFlow" => (number) cdn回源流量;单位GB
     *                     "Flow" => (number) 下载流量：单位GB；国内无此字段
     *                     "Date" => (integer) 配额消费时间，unix时间戳；单位s，精确到日期
     *                     "ApiTimes" => (number) 请求次数；单位万次
     *                     "ObjectTagCount" => (number) 对象标签个数; 单位万个
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return GetUFileDailyReportResponse
     * @throws UCloudException
     */
    public function getUFileDailyReport(GetUFileDailyReportRequest $request = null)
    {
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
    public function getUFileQuota(GetUFileQuotaRequest $request = null)
    {
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
    public function getUFileQuotaInfo(GetUFileQuotaInfoRequest $request = null)
    {
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
    public function getUFileQuotaPrice(GetUFileQuotaPriceRequest $request = null)
    {
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
    public function getUFileReport(GetUFileReportRequest $request = null)
    {
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
     *     "RefererType" => (integer) 防盗链Referer类型，支持三种类型，1代表设置黑名单、2代表设置白名单，3代表同时设置黑白名单; （其中1和2是为了向前兼容，后续调用只应该传递类型3）RefererStatus为"on"时此参数必填；
     *     "Referers" => (array<string>) 防盗链Referer规则，支持正则表达式（不支持符号';')，该字段已弃用，请使用WhiteList.n或BlackList.n
     *     "WhiteList" => (array<string>) 白名单列表中的一项
     *     "BlackList" => (array<string>) 黑名单列表中的一项
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
    public function setUFileReferer(SetUFileRefererRequest $request = null)
    {
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
    public function updateBucket(UpdateBucketRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateBucketResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateBucketStaticPageRule - 修改bucket静态网页配置
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/update_bucket_static_page_rule
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Bucket" => (string) 存储桶名称
     *     "Status" => (string) 启用状态(enable/disable,只有绑定了自定义域名才能开启)
     *     "DefaultIndex" => (string) 默认首页
     *     "SubDirRedirect" => (string) 子目录是否启用重定向
     *     "RuleFor404" => (string) 404规则
     *     "DefaultPage404" => (string) 404时的默认页面
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateBucketStaticPageRuleResponse
     * @throws UCloudException
     */
    public function updateBucketStaticPageRule(UpdateBucketStaticPageRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateBucketStaticPageRuleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateCORSRule - 更新跨域规则
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/update_cors_rule
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CORSId" => (string) 跨域规则ID
     *     "BucketName" => (string) Bucket名称
     *     "AllowedOrigin" => (string) 指定允许的跨域请求的来源，使用通配符(*)表示允许所有来源的跨域请求（多个Origin用‘,’分隔）
     *     "AllowedMethod" => (string) 指定允许的跨域请求方法。支持的方法名有：GET、PUT、POST、DELETE、HEAD、OPTIONS（多个Method用‘,’分隔）
     *     "AllowedHeader" => (string) 指定允许的跨域请求头（多个Header用‘,’分隔）
     *     "ExposeHeader" => (string) 指定允许用户从应用程序中访问的响应头（多个ExposeHeader用‘,’分隔）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateCORSRuleResponse
     * @throws UCloudException
     */
    public function updateCORSRule(UpdateCORSRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateCORSRuleResponse($resp->toArray(), $resp->getRequestId());
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
     *     "Tags" => (string) Tag，参数格式"k1=v1&k2=v2"，key的最大长度为128， value最大长度为256byte，单个object的tag的最大数量为10
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
    public function updateUFileLifeCycle(UpdateUFileLifeCycleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUFileLifeCycleResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateUFileSSLCert - 更新指定域名证书
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/update_ufile_ssl_cert
     *
     * Arguments:
     *
     * $args = [
     *     "BucketName" => (string) 存储桶名称，全局唯一
     *     "Domain" => (string) 域名
     *     "CertificateName" => (string) SSL证书名称
     *     "Certificate" => (string) 填写SSL证书文件内容（PEM编码）。 证书文件内容填写格式： 如果您的业务场景仅需确保服务端证书可信，则证书文件需要包含服务器证书（①）和中间证书（②）。如果您的中间证书和服务器证书是两个文件，您可以在证书链配置项填写中间证书内容即可。
     *     "CertificateKey" => (string) 填写SSL证书私钥内容（PEM编码）。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateUFileSSLCertResponse
     * @throws UCloudException
     */
    public function updateUFileSSLCert(UpdateUFileSSLCertRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUFileSSLCertResponse($resp->toArray(), $resp->getRequestId());
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
    public function updateUFileToken(UpdateUFileTokenRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUFileTokenResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateUdsRule - 针对对象存储的文件，进行自动触发解压。
     *
     * See also: https://docs.ucloud.cn/api/ufile-api/update_uds_rule
     *
     * Arguments:
     *
     * $args = [
     *     "RuleId" => (string) 规则的唯一Id
     *     "RuleName" => (string) 规则名称
     *     "SrcBucket" => (string) 源Bucket名字，全局唯一
     *     "SrcTokenId" => (string) 源bucket的token之一的tokenId
     *     "DstBucket" => (string) 目标Bucket名字，全局唯一
     *     "DstTokenId" => (string) 目标bucket的token之一的tokenId
     *     "DstDirectory" => (string) 解压后的目标目录
     *     "KeepUS3Name" => (boolean) 是否以压缩文件的前缀为最后一层目录
     *     "Prefixes" => (string) 触发解压缩的前缀
     *     "Ops" => (array<string>) 操作的ops数组,"Ops.0":"unzip"
     *     "Events" => (array<string>) 通知的事件数组
     *     "ContactGroupId" => (string) 联系的用户组ID
     *     "NotificationTypes" => (array<string>) 通知的类型数组
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RuleId" => (string) 返回规则的规则ID
     *     "Mesage" => (string) 该请求的消息成功或者失败的描述
     * ]
     *
     * @return UpdateUdsRuleResponse
     * @throws UCloudException
     */
    public function updateUdsRule(UpdateUdsRuleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUdsRuleResponse($resp->toArray(), $resp->getRequestId());
    }
}
