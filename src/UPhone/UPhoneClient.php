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
namespace UCloud\UPhone;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UPhone\Apis\CreateUPhoneRequest;
use UCloud\UPhone\Apis\CreateUPhoneResponse;
use UCloud\UPhone\Apis\CreateUPhoneAppRequest;
use UCloud\UPhone\Apis\CreateUPhoneAppResponse;
use UCloud\UPhone\Apis\CreateUPhoneAppVersionRequest;
use UCloud\UPhone\Apis\CreateUPhoneAppVersionResponse;
use UCloud\UPhone\Apis\CreateUPhoneImageRequest;
use UCloud\UPhone\Apis\CreateUPhoneImageResponse;
use UCloud\UPhone\Apis\CreateUPhoneServerRequest;
use UCloud\UPhone\Apis\CreateUPhoneServerResponse;
use UCloud\UPhone\Apis\DeleteUPhoneRequest;
use UCloud\UPhone\Apis\DeleteUPhoneResponse;
use UCloud\UPhone\Apis\DeleteUPhoneImageRequest;
use UCloud\UPhone\Apis\DeleteUPhoneImageResponse;
use UCloud\UPhone\Apis\DeleteUPhoneServerRequest;
use UCloud\UPhone\Apis\DeleteUPhoneServerResponse;
use UCloud\UPhone\Apis\DescribeUPhoneRequest;
use UCloud\UPhone\Apis\DescribeUPhoneResponse;
use UCloud\UPhone\Apis\DescribeUPhoneAppRequest;
use UCloud\UPhone\Apis\DescribeUPhoneAppResponse;
use UCloud\UPhone\Apis\DescribeUPhoneAppVersionRequest;
use UCloud\UPhone\Apis\DescribeUPhoneAppVersionResponse;
use UCloud\UPhone\Apis\DescribeUPhoneCitiesRequest;
use UCloud\UPhone\Apis\DescribeUPhoneCitiesResponse;
use UCloud\UPhone\Apis\DescribeUPhoneDetailByAppRequest;
use UCloud\UPhone\Apis\DescribeUPhoneDetailByAppResponse;
use UCloud\UPhone\Apis\DescribeUPhoneImageRequest;
use UCloud\UPhone\Apis\DescribeUPhoneImageResponse;
use UCloud\UPhone\Apis\DescribeUPhoneIpRegionsRequest;
use UCloud\UPhone\Apis\DescribeUPhoneIpRegionsResponse;
use UCloud\UPhone\Apis\DescribeUPhoneJobRequest;
use UCloud\UPhone\Apis\DescribeUPhoneJobResponse;
use UCloud\UPhone\Apis\DescribeUPhoneModelRequest;
use UCloud\UPhone\Apis\DescribeUPhoneModelResponse;
use UCloud\UPhone\Apis\DescribeUPhoneServerRequest;
use UCloud\UPhone\Apis\DescribeUPhoneServerResponse;
use UCloud\UPhone\Apis\DescribeUPhoneServerModelRequest;
use UCloud\UPhone\Apis\DescribeUPhoneServerModelResponse;
use UCloud\UPhone\Apis\GetUPhoneAllowanceRequest;
use UCloud\UPhone\Apis\GetUPhoneAllowanceResponse;
use UCloud\UPhone\Apis\GetUPhonePriceRequest;
use UCloud\UPhone\Apis\GetUPhonePriceResponse;
use UCloud\UPhone\Apis\GetUPhoneRenewPriceRequest;
use UCloud\UPhone\Apis\GetUPhoneRenewPriceResponse;
use UCloud\UPhone\Apis\GetUPhoneScreenCaptureRequest;
use UCloud\UPhone\Apis\GetUPhoneScreenCaptureResponse;
use UCloud\UPhone\Apis\GetUPhoneServerPriceRequest;
use UCloud\UPhone\Apis\GetUPhoneServerPriceResponse;
use UCloud\UPhone\Apis\GetUPhoneServerRenewPriceRequest;
use UCloud\UPhone\Apis\GetUPhoneServerRenewPriceResponse;
use UCloud\UPhone\Apis\ImportFileRequest;
use UCloud\UPhone\Apis\ImportFileResponse;
use UCloud\UPhone\Apis\InstallUPhoneAppVersionRequest;
use UCloud\UPhone\Apis\InstallUPhoneAppVersionResponse;
use UCloud\UPhone\Apis\ModifyUPhoneNameRequest;
use UCloud\UPhone\Apis\ModifyUPhoneNameResponse;
use UCloud\UPhone\Apis\ModifyUPhoneRemarkRequest;
use UCloud\UPhone\Apis\ModifyUPhoneRemarkResponse;
use UCloud\UPhone\Apis\ModifyUPhoneServerNameRequest;
use UCloud\UPhone\Apis\ModifyUPhoneServerNameResponse;
use UCloud\UPhone\Apis\ModifyUPhoneServerRemarkRequest;
use UCloud\UPhone\Apis\ModifyUPhoneServerRemarkResponse;
use UCloud\UPhone\Apis\PoweroffUPhoneRequest;
use UCloud\UPhone\Apis\PoweroffUPhoneResponse;
use UCloud\UPhone\Apis\PoweronUPhoneRequest;
use UCloud\UPhone\Apis\PoweronUPhoneResponse;
use UCloud\UPhone\Apis\RebootUPhoneRequest;
use UCloud\UPhone\Apis\RebootUPhoneResponse;
use UCloud\UPhone\Apis\RenewUPhoneRequest;
use UCloud\UPhone\Apis\RenewUPhoneResponse;
use UCloud\UPhone\Apis\ResetUPhoneRequest;
use UCloud\UPhone\Apis\ResetUPhoneResponse;
use UCloud\UPhone\Apis\RunAsyncCommandRequest;
use UCloud\UPhone\Apis\RunAsyncCommandResponse;
use UCloud\UPhone\Apis\RunSyncCommandRequest;
use UCloud\UPhone\Apis\RunSyncCommandResponse;
use UCloud\UPhone\Apis\SetUPhoneCallbackRequest;
use UCloud\UPhone\Apis\SetUPhoneCallbackResponse;
use UCloud\UPhone\Apis\SetUPhoneConfigRequest;
use UCloud\UPhone\Apis\SetUPhoneConfigResponse;
use UCloud\UPhone\Apis\SetUPhoneGPSRequest;
use UCloud\UPhone\Apis\SetUPhoneGPSResponse;
use UCloud\UPhone\Apis\SetUPhoneManagerModeRequest;
use UCloud\UPhone\Apis\SetUPhoneManagerModeResponse;
use UCloud\UPhone\Apis\SetUPhoneRootModeRequest;
use UCloud\UPhone\Apis\SetUPhoneRootModeResponse;
use UCloud\UPhone\Apis\SetUPhoneSplashScreenRequest;
use UCloud\UPhone\Apis\SetUPhoneSplashScreenResponse;
use UCloud\UPhone\Apis\SetUPhoneTokenRequest;
use UCloud\UPhone\Apis\SetUPhoneTokenResponse;
use UCloud\UPhone\Apis\UnInstallUPhoneAppVersionRequest;
use UCloud\UPhone\Apis\UnInstallUPhoneAppVersionResponse;
use UCloud\UPhone\Apis\UpdateUPhoneImageRequest;
use UCloud\UPhone\Apis\UpdateUPhoneImageResponse;

/**
 * This client is used to call actions of **UPhone** service
 */
class UPhoneClient extends Client
{

    /**
     * CreateUPhone - 创建云手机
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/create_u_phone
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) 云手机实例名称，默认：UPhone。如果同时创建多个，则增加数字后缀，如UPhone-1
     *     "UPhoneModelName" => (string) 云手机规格名称，不超过64个字节。可通过[查询云手机规格列表]()查询支持的云手机规格。
     *     "MediaBandwidth" => (integer) 云手机画面带宽，默认2M
     *     "ImageId" => (string) 云手机镜像ID，不超过32个字节。可通过[查询手机镜像]()查询云手机规格对应的镜像ID。
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "UPhoneCount" => (integer) 创建云手机的个数
     *     "ChargeType" => (string) 计费模式。枚举值为： > 年 Year，按年付费； > Month，按月付费； > Dynamic，按小时预付费; 默认为月付
     *     "Quantity" => (string) 购买时长。默认值: 1。月付时，此参数传0，代表购买至月末。
     *     "IpDestRegion" => (string) 购买独立IP必须有此参数。绑定的目的地域。参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Tag" => (string) 业务组。默认：Default（Default即为未分组）。请遵照[[api:uhost-api:specification|字段规范]]设定业务组。
     *     "BindIp" => (boolean) 绑定独立IP
     *     "Bandwidth" => (integer) 独立IP带宽
     *     "IpProportion" => (integer) 独立IP参数。需要独立IP的比例。eg: [4:1]->4， [3:1]->3。
     *     "CouponId" => (string) 云手机代金券ID。请通过DescribeCoupon接口查询，或登录用户中心查看。注：代金券对带宽不适用，仅适用于云手机计费
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "JobId" => (string) 任务ID，用来查询创建云手机任务状态
     * ]
     *
     * @return CreateUPhoneResponse
     * @throws UCloudException
     */
    public function createUPhone(CreateUPhoneRequest $request = null) {
        $resp = $this->invoke($request);
        return new CreateUPhoneResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUPhoneApp - 一个 app 对应多个 app_version。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/create_u_phone_app
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) 应用名称。
     *     "Description" => (string) 应用描述。
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "AppId" => (string) 应用的唯一标识ID
     * ]
     *
     * @return CreateUPhoneAppResponse
     * @throws UCloudException
     */
    public function createUPhoneApp(CreateUPhoneAppRequest $request = null) {
        $resp = $this->invoke($request);
        return new CreateUPhoneAppResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUPhoneAppVersion - 创建云手机应用版本。
注：一个 app 对应多个 app_version。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/create_u_phone_app_version
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) 应用版本名称，最大字符长度为255。
     *     "AppId" => (string) 应用的唯一标识ID。
     *     "URL" => (string) 应用版本相关的Apk文件存放的公网URL地址。
     *     "Description" => (string) 应用版本描述。
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "AppVersionId" => (string) 应用版本的唯一标识ID
     * ]
     *
     * @return CreateUPhoneAppVersionResponse
     * @throws UCloudException
     */
    public function createUPhoneAppVersion(CreateUPhoneAppVersionRequest $request = null) {
        $resp = $this->invoke($request);
        return new CreateUPhoneAppVersionResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUPhoneImage - 创建云手机镜像。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/create_u_phone_image
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](https://cms-docs.ucloudadmin.com/api/uphone-api/describe_u_phone_cities)获取
     *     "UPhoneId" => (string) 手机实例的资源ID
     *     "Name" => (string) 镜像名称。长度为2~128个英文或中文字符。
     *     "Description" => (string) 镜像的描述信息。长度为2~256个英文或中文字符
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ImageId" => (string) 云手机自定义镜像资源 ID
     *     "JobId" => (string) 请求的唯一标识Id，`RetCode`为0时返回，可根据此ID查询请求的执行状态
     * ]
     *
     * @return CreateUPhoneImageResponse
     * @throws UCloudException
     */
    public function createUPhoneImage(CreateUPhoneImageRequest $request = null) {
        $resp = $this->invoke($request);
        return new CreateUPhoneImageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUPhoneServer - 创建云手机服务器
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/create_u_phone_server
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) 云手机服务器实例名称。默认：UPhone。请遵照字段规范设定实例名称。
     *     "ServerModelName" => (string) 云手机服务器规格名称，不超过64个字节。可通过[查询云手机服务器规格列表](https://docs.ucloud.cn/api/uphone-api/describe_u_phone_server_model)查询支持的云手机服务器规格。
     *     "UPhoneModelName" => (string) 云手机规格名称，不超过64个字节。可通过[查询云手机规格列表](https://docs.ucloud.cn/api/uphone-api/describe_u_phone_model)查询支持的云手机规格。
     *     "ImageId" => (string) 云手机镜像ID，不超过32个字节。可通过[查询手机镜像](https://docs.ucloud.cn/api/uphone-api/describe_u_phone_image)查询云手机规格对应的镜像ID。
     *     "CityId" => (string) 城市Id，通过[获取城市列表](https://docs.ucloud.cn/api/uphone-api/describe_u_phone_cities)获取
     *     "ChargeType" => (string) 计费模式。枚举值为：> 年 Year，按年付费；> Month，按月付费；> Dynamic，按小时预付费;默认为月付
     *     "Quantity" => (string) 购买时长。默认值: 1。月付时，此参数传0，代表购买至月末。
     *     "NetworkInterface" => (array<object>) 
     *     "IpDestRegion" => (string) 购买独立IP必须此参数。绑定的目的地域。参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ShareBandwidth" => (integer) 独立IP参数。共享带宽值大小。传此参数需要和IpProportion同时传。
     *     "IpProportion" => (integer) 独立IP参数。需要独立IP的比例。eg: [4:1]->4， [3:1]->3。
     *     "Tag" => (string) 业务组。默认：Default（Default即为未分组）。请遵照[[api:uhost-api:specification|字段规范]]设定业务组。
     *     "CouponId" => (string) 云手机服务器代金券ID。请通过DescribeCoupon接口查询，或登录用户中心查看。注：代金券对带宽不适用，仅适用于云手机服务器计费
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ServerId" => (string) 云手机服务器的实例 ID 
     * ]
     *
     * @return CreateUPhoneServerResponse
     * @throws UCloudException
     */
    public function createUPhoneServer(CreateUPhoneServerRequest $request = null) {
        $resp = $this->invoke($request);
        return new CreateUPhoneServerResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUPhone - 删除云手机
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/delete_u_phone
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "UPhoneIds" => (array<string>) 【数组】云手机实例的资源 ID，调用方式举例：UPhoneIds.0=希望获取信息的云手机 1 的 UPhoneId，UPhoneIds.1=云手机实例 2 的 UPhoneId
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "JobId" => (string) 任务ID，用来查询删除云手机任务状态
     * ]
     *
     * @return DeleteUPhoneResponse
     * @throws UCloudException
     */
    public function deleteUPhone(DeleteUPhoneRequest $request = null) {
        $resp = $this->invoke($request);
        return new DeleteUPhoneResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUPhoneImage - 删除自制云手机镜像。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/delete_u_phone_image
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ImageId" => (string) 云手机自定义镜像资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ImageId" => (string) 云手机自定义镜像资源ID
     * ]
     *
     * @return DeleteUPhoneImageResponse
     * @throws UCloudException
     */
    public function deleteUPhoneImage(DeleteUPhoneImageRequest $request = null) {
        $resp = $this->invoke($request);
        return new DeleteUPhoneImageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUPhoneServer - 删除云手机服务器。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/delete_u_phone_server
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ServerId" => (string) 云手机服务器的实例ID 可通过 [DescribeUPhoneServer]()获取
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "ReleaseEIP" => (boolean) 删除云手机服务器时是否释放绑定的EIP。默认为false。	
     *     "ReleaseUDisk" => (boolean) 删除云手机服务器时是否同时删除挂载的数据盘。默认为false。	
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUPhoneServerResponse
     * @throws UCloudException
     */
    public function deleteUPhoneServer(DeleteUPhoneServerRequest $request = null) {
        $resp = $this->invoke($request);
        return new DeleteUPhoneServerResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUPhone - 获取云手机列表信息。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/describe_u_phone
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "ServerId" => (string) 云手机服务器的资源ID。
     *     "UPhoneIds" => (array<string>) 【数组】云手机实例的资源 ID，调用方式举例：UPhoneIds.0=希望获取信息的云手机 1 的 UPhoneId，UPhoneIds.1=云手机实例 2 的 UPhoneId。如果都不传入，则返回当前 城市 所有符合条件的云手机列表。
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为200，最大200
     *     "Tag" => (string) 要查询的业务组名称
     *     "IsAll" => (boolean) 是否返回全部。如果有此参数，分页不生效。
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) UPhoneInstance总数
     *     "UPhones" => (array<object>) 云手机实例列表，每项参数可见数据模型 [UPhoneInstance](#UPhoneInstance)[
     *         [
     *             "UPhoneName" => (string) 云手机的名称，不超过65个字符。
     *             "UPhoneId" => (string) 云手机的唯一标识，不超过32个字节。
     *             "UPhoneModelName" => (string) 云手机规格名称
     *             "CPU" => (integer) 虚拟CPU核数。
     *             "Memory" => (integer) 内存大小。单位MB
     *             "DiskSize" => (integer) 磁盘大小，单位: GB
     *             "Resolution" => (string) 分辨率
     *             "Refresh" => (integer) 刷新率
     *             "ServerId" => (string) 云手机所在的服务器ID，不超过32个字节。
     *             "ImageId" => (string) 云手机镜像ID，不超过32个字节。
     *             "OsType" => (string) 云手机镜像系统，如"Android armv8"
     *             "State" => (string) 云手机状态<br />* 启动中: STARTING; <br />* 运行中: RUNNING; <br />* 关机中: STOPPING; <br />* 关机: STOPPED <br />* 重启中: REBOOTING; <br />* 重置中: RESETTING; <br />* 启动失败: START_FAILED; <br />* 关机失败: STOP_FAILED; <br />* 重启失败: REBOOT_FAILED; <br />* 重置失败: RESET_FAILED; <br />* 未知状态：UNDEFINED_STATE或""
     *             "CityId" => (string) 城市Id，eg: cn-shanghai, cn-jinan
     *             "CityName" => (string) 城市名称，eg:上海二、济南市
     *             "CreateTime" => (integer) 创建时间，格式为Unix时间戳。
     *             "Tag" => (string) 业务组名称
     *             "SplashScreen" => (string) 云手机启动图片URL链接
     *             "Callback" => (string) 云手机异步任务回调
     *             "Remark" => (string) 备注
     *             "ChargeType" => (string) 计费模式。枚举值为： > 年 Year，按年付费； > Month，按月付费； > Dynamic，按小时预付费; 默认为月付
     *             "ExpireTime" => (integer) 到期时间；格式为Unix时间戳
     *             "IpRegion" => (string) IP所属地域Id，eg: hk，th-bkk
     *             "Ip" => (string) 云手机IP地址
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUPhoneResponse
     * @throws UCloudException
     */
    public function describeUPhone(DescribeUPhoneRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeUPhoneResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUPhoneApp - 获取应用列表。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/describe_u_phone_app
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "AppIds" => (array<string>) 数组】应用的唯一标识 ID，调用方式举例：AppIds.0=希望获取应用信息的应用 1，AppIds.1=应用 2。 如果不传入，则返回当前 城市 所有符合条件的应用列表。
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20，最大100
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) AppInstance总数
     *     "Apps" => (array<object>) 云手机应用实例列表，每项参数可见数据模型 [AppInstance](#appInstance)[
     *         [
     *             "AppId" => (string) 应用的唯一标识ID
     *             "AppName" => (string) 应用名称。
     *             "CreateTime" => (integer) 创建时间，格式为Unix时间戳。
     *             "ModifyTime" => (integer) 修改时间，格式为Unix时间戳。
     *             "Description" => (string) 应用描述。
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUPhoneAppResponse
     * @throws UCloudException
     */
    public function describeUPhoneApp(DescribeUPhoneAppRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeUPhoneAppResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUPhoneAppVersion - 获取应用版本列表。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/describe_u_phone_app_version
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "AppVersionIds" => (array<string>) 【数组】应用版本的唯一标识 ID，调用方式举例：AppVersionIds.0=希望获取应用版本信息的应用版本 1，AppVersionIds.1=应用版本 2。 如果不传入，则返回当前 城市 所有符合条件的应用版本列表。
     *     "AppId" => (string) 应用的唯一标识ID
     *     "UPhoneId" => (string) 云手机Id。此参数表示查询手机上所安装的应用版本。
     *     "Limit" => (integer) 返回数据长度，默认为20，最大100
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) AppVersionInstance总数
     *     "AppVersions" => (array<object>) 云手机应用版本实例列表，每项参数可见数据模型 [AppVersionInstance](#AppVersionInstance)[
     *         [
     *             "AppId" => (string) 应用的唯一标识ID
     *             "AppVersionId" => (string) 应用版本的唯一标识ID
     *             "AppVersionName" => (string) 应用版本名。
     *             "PackageName" => (string) 应用包名。
     *             "URL" => (string) 应用版本相关的Apk文件存放的公网URL地址。
     *             "CreateTime" => (integer) 创建时间，格式为Unix时间戳。
     *             "ModifyTime" => (integer) 修改时间，格式为Unix时间戳。
     *             "Description" => (string) 应用版本描述。
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUPhoneAppVersionResponse
     * @throws UCloudException
     */
    public function describeUPhoneAppVersion(DescribeUPhoneAppVersionRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeUPhoneAppVersionResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUPhoneCities - 获取云手机提供服务的城市列表
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/describe_u_phone_cities
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UPhoneCities" => (array<object>) 云手机城市实例列表，每项参数可见数据模型 [CityInstance](#CityInstance)[
     *         [
     *             "CityId" => (string) 城市Id，eg: cn-shanghai, cn-jinan
     *             "CityName" => (string) 城市名称，eg:上海二、济南市
     *             "IsSoldOut" => (boolean) 表示该城市资源是否售罄
     *             "CityType" => (string) 城市类型。枚举值： <br /> * CENTER，中心城市  <br />* EDGE，边缘计算城市
     *             "CityAlias" => (string) 城市别名。如cn-sh2
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUPhoneCitiesResponse
     * @throws UCloudException
     */
    public function describeUPhoneCities(DescribeUPhoneCitiesRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeUPhoneCitiesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUPhoneDetailByApp - 根据AppId，查询安装该应用的云手机以及相关的应用版本信息
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/describe_u_phone_detail_by_app
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "AppId" => (string) 应用的唯一标识ID
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20，最大100
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) UPhoneWithAppVersion总数
     *     "UPhoneDetails" => (array<object>) 带有应用版本的云手机实例，具体参数见数据模型 [UPhoneDetailInstanc](#UPhoneDetailInstanc)[
     *         [
     *             "UPhoneName" => (string) 云手机的名称，不超过65个字符。
     *             "UPhoneId" => (string) 云手机的唯一标识，不超过32个字节。
     *             "UPhoneModelName" => (string) 云手机规格名称
     *             "CPU" => (integer) 虚拟CPU核数。
     *             "Memory" => (integer) 内存大小。单位MB
     *             "DiskSize" => (integer) 磁盘大小，单位: GB
     *             "Resolution" => (string) 分辨率
     *             "Refresh" => (integer) 刷新率
     *             "ServerId" => (string) 云手机所在的服务器ID，不超过32个字节。
     *             "ImageId" => (string) 云手机镜像ID，不超过32个字节。
     *             "OsType" => (string) 云手机镜像系统，如"Android armv8"
     *             "State" => (string) 云手机状态<br />* 启动中: STARTING; <br />* 运行中: RUNNING; <br />* 关机中: STOPPING; <br />* 关机: STOPPED <br />* 重启中: REBOOTING; <br />* 重置中: RESETTING; <br />* 启动失败: START_FAILED; <br />* 关机失败: STOP_FAILED; <br />* 重启失败: REBOOT_FAILED; <br />* 重置失败: RESET_FAILED; <br />* 未知状态：UNDEFINED或""
     *             "CityId" => (string) 城市Id，eg: cn-shanghai, cn-jinan
     *             "CityName" => (string) 城市名称，eg:上海二、济南市
     *             "CreateTime" => (integer) 创建时间，格式为Unix时间戳。
     *             "Remark" => (string) 备注
     *             "AppVersion" => (object) 应用版本实例，每项参数可见数据模型 [AppVersionInstance](#AppVersionInstance)[
     *                 "AppId" => (string) 应用的唯一标识ID
     *                 "AppVersionId" => (string) 应用版本的唯一标识ID
     *                 "AppVersionName" => (string) 应用版本名。
     *                 "PackageName" => (string) 应用包名。
     *                 "URL" => (string) 应用版本相关的Apk文件存放的公网URL地址。
     *                 "CreateTime" => (integer) 创建时间，格式为Unix时间戳。
     *                 "ModifyTime" => (integer) 修改时间，格式为Unix时间戳。
     *                 "Description" => (string) 应用版本描述。
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUPhoneDetailByAppResponse
     * @throws UCloudException
     */
    public function describeUPhoneDetailByApp(DescribeUPhoneDetailByAppRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeUPhoneDetailByAppResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUPhoneImage - 获取云手机镜像信息列表。  
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/describe_u_phone_image
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Type" => (string) 希望获取的镜像类型，枚举值，不传则返回全部类型的镜像： <br /> >标准镜像: BASE; <br />>自制镜像: CUSTOM;  <br />
     *     "ImageIds" => (array<string>) 【数组】云手机镜像资源 ID，调用方式举例：ImageIds.0=希望获取信息的云手机镜像 1，ImageIds.1=云手机镜像 2。 如果不传入，则返回当前 城市 所有符合条件的云手机镜像。
     *     "Offset" => (string) 列表起始位置偏移量，默认为0
     *     "Limit" => (string) 最大返回镜像数量，默认为20，最大100
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Images" => (array<object>) 云手机镜像实例列表，具体参数见 [UPhoneImageInstance](#uphoneimageinstance)[
     *         [
     *             "ImageId" => (string) 云手机镜像资源Id
     *             "ImageName" => (string) 云手机镜像名称
     *             "OsType" => (string) 云手机镜像系统
     *             "ImageType" => (string) 云手机镜像类型，枚举值：<br />> 用户自制镜像: CUSTOM;  <br />> 标准镜像: BASE;;  
     *             "CreateTime" => (integer) 创建时间，格式为Unix时间戳。
     *             "ModifyTime" => (integer) 修改时间，格式为Unix时间戳。
     *             "ImageState" => (string) 云手机镜像状态<br />* 制作中: 制作中; <br />* 可用的: CREATING; <br />* 制作失败: CREATE_FAILED; <br />* 上传中: UPLOADING <br />* 上传失败: UPLOAD_FAILED; <br />* 未知状态：UNDEFINED或""
     *             "Description" => (string) 云手机镜像描述信息
     *             "UPhoneId" => (string) 云手机镜像创建时所属云手机资源 Id
     *             "AppVersions" => (array<object>) 云手机镜像所安装的应用版本列表，具体参数见 [AppVersionInstance](#appversioninstance)[
     *                 [
     *                     "AppId" => (string) 应用的唯一标识ID
     *                     "AppVersionId" => (string) 应用版本的唯一标识ID
     *                     "AppVersionName" => (string) 应用版本名。
     *                     "PackageName" => (string) 应用包名。
     *                     "URL" => (string) 应用版本相关的Apk文件存放的公网URL地址。
     *                     "CreateTime" => (integer) 创建时间，格式为Unix时间戳。
     *                     "ModifyTime" => (integer) 修改时间，格式为Unix时间戳。
     *                     "Description" => (string) 应用版本描述。
     *                 ]
     *             ]
     *         ]
     *     ]
     *     "TotalCount" => (integer) UPhoneImageInstance总数
     * ]
     *
     * @return DescribeUPhoneImageResponse
     * @throws UCloudException
     */
    public function describeUPhoneImage(DescribeUPhoneImageRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeUPhoneImageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUPhoneIpRegions - 获取云手机所在城市支持绑定独立IP的地域列表
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/describe_u_phone_ip_regions
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](https://docs.ucloud.cn/api/uphone-api/describe_u_phone_cities)获取
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Regions" => (array<object>) 独立IP地域信息。[
     *         [
     *             "Id" => (string) 已开通地域。参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *             "StockStatus" => (string) 库存状态。枚举值：有库存：Available；无库存：SoldOut
     *         ]
     *     ]
     *     "TotalCount" => (integer) 总数量
     * ]
     *
     * @return DescribeUPhoneIpRegionsResponse
     * @throws UCloudException
     */
    public function describeUPhoneIpRegions(DescribeUPhoneIpRegionsRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeUPhoneIpRegionsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUPhoneJob - 查询Job的执行状态。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/describe_u_phone_job
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "JobIds" => (array<string>) 【数组】Job 的唯一标识 Id，调用方式举例：JobIds.0=希望查询状态的 Job1，JobIds.1=Job2。 如果不传入，则返回当前 城市 所有符合条件的 Job 。
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20，最大100
     *     "State" => (string) Job状态，枚举值：* 等待状态: PENDING;* 运行状态: RUNNING;* 成功状态: SUCCESS* 失败状态: FAILED* 部分成功状态：PARTIAL_SUCCESS
     *     "Types" => (array<string>) 【数组】Job 类型，调用方式举例：JobTypes.0=希望查询的 Job 类型 1，JobTypes.1=Job 类型 2。 如果不传入，则返回当前 城市 所有符合条件的 Job 类型。Job 类型仅支持 INSTALL_APP、UNINSTALL_APP、RUN_ASYNC_COMMAND、CREATE_SERVER_AND_UPHONE、SET_UPHONE_GPS、SET_UPHONE_CONFIG、UPLOAD_FILE、DELETE_UPHONE
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Jobs" => (array<object>) Job信息，详情见数据结构Job（如果Status为等待中，此字段为空）	[
     *         [
     *             "JobId" => (string) Job的唯一标识Id	
     *             "CreateTime" => (integer) Job创建时间，格式为Unix时间戳。	
     *             "BeginTime" => (integer) Job处理开始时间，格式为Unix时间戳。	
     *             "EndTime" => (integer) Job处理结束时间，格式为Unix时间戳。	
     *             "State" => (string) 任务状态* 等待中：PENDING* 运行中：RUNNING* 成功：SUCCESS* 部分成功：PARTIAL_SUCCESS* 失败：FAILED
     *             "JobType" => (string) Job类型，仅支持INSTALL_APP、UNINSTALL_APP、RUN_ASYNC_COMMAND。
     *             "Tasks" => (array<object>) Task信息，详情见数据结构Task（如果State为PENDING，此字段为空）	[
     *                 [
     *                     "TaskId" => (string) Task的唯一标识	
     *                     "BeginTime" => (integer) 任务处理开始时间，格式为Unix时间戳。	
     *                     "EndTime" => (integer) 任务处理结束时间，格式为Unix时间戳。	
     *                     "State" => (string) 任务状态* 等待中：PENDING* 运行中：RUNNING* 成功：SUCCESS* 失败：FAILED
     *                     "ErrorMsg" => (string) Task错误信息
     *                     "ExecuteMsg" => (string) 异步任务执行结果
     *                     "UPhoneId" => (string) 云手机的唯一标识，云手机相关任务包含此字段。	
     *                     "AppVersionId" => (string) 安装/卸载任务相关的应用版本唯一标识ID
     *                 ]
     *             ]
     *             "AppVersionId" => (string) 安装/卸载Job相关的应用版本唯一标识
     *             "UPhoneIds" => (array<string>) 此Job相关的云手机唯一标识
     *         ]
     *     ]
     *     "TotalCount" => (integer) Job总数
     * ]
     *
     * @return DescribeUPhoneJobResponse
     * @throws UCloudException
     */
    public function describeUPhoneJob(DescribeUPhoneJobRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeUPhoneJobResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUPhoneModel - 获取云手机规格列表。两种类型：uphone代表单云手机场景、uphone-server代表云手机服务器场景。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/describe_u_phone_model
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UPhoneModelNames" => (array<string>) 【数组】要获得信息的 UPhoneModel 名称。调用方式举例：UPhoneModelNames.0=希望获取信息的 UPhoneModel1，UPhoneModelNames.1=UPhoneModel2。 如果不传入，则返回当前 城市 所有符合条件的 UPhoneModel。
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20，最大100
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) UPhoneModelInstance总数
     *     "UPhoneModels" => (array<object>) UPhoneModel实例列表，具体参数可见 UPhoneModelInstance[
     *         [
     *             "UPhoneModelName" => (string) UPhoneModel名称
     *             "CPU" => (integer) 虚拟CPU核数。
     *             "Memory" => (integer) 内存大小。单位MB
     *             "DiskSize" => (integer) 磁盘大小，单位: GB
     *             "Resolution" => (string) 分辨率
     *             "Refresh" => (integer) 刷新率
     *             "Dpi" => (integer) DPI
     *             "Description" => (string) 型号描述信息
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUPhoneModelResponse
     * @throws UCloudException
     */
    public function describeUPhoneModel(DescribeUPhoneModelRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeUPhoneModelResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUPhoneServer - 获取云手机服务器列表信息。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/describe_u_phone_server
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "ServerIds" => (array<string>) 【数组】云手机服务器的资源 ID，调用方式举例：ServerIds.0=希望获取信息的服务器 1，ServerIds.1=服务器 2。 如果不传入，则返回当前 城市 所有符合条件的云手机服务器。
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20，最大100
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) ServerInstance总数
     *     "Servers" => (array<object>) 云手机服务器列表，每项参数可见数据模型 [ServerInstance](#ServerInstance)[
     *         [
     *             "ServerId" => (string) 云手机服务器的唯一标识。
     *             "ServerName" => (string) 云手机服务器名称。
     *             "ServerModel" => (object) 云服务器规格。[
     *                 "ServerModelName" => (string) ServerModel名称	
     *                 "CPU" => (integer) 虚拟CPU核数。可选参数：1-64（具体机型与CPU的对应关系参照控制台）。
     *                 "Memory" => (integer) 内存大小。单位：MB。
     *                 "DiskSet" => (array<object>) 磁盘信息见 UPhoneDiskSet	[
     *                     [
     *                         "DiskType" => (string) 磁盘类型。请参考磁盘类型。
     *                         "IsBoot" => (boolean) 是否是系统盘。枚举值：> True，是系统盘> False，是数据盘（默认）。Disks数组中有且只能有一块盘是系统盘。
     *                         "Size" => (integer) 磁盘大小，单位: GB
     *                     ]
     *                 ]
     *                 "GPUType" => (string) GPU类型	
     *                 "GPU" => (integer) GPU个数	
     *                 "UPhoneSpecs" => (array<object>) 【数组】手机说明，包含该服务器规格所能创建的手机规格名及对应手机开数。每项参数可见数据模型 [UPhoneSpec](#UPhoneSpec)	[
     *                     [
     *                         "UPhoneModelName" => (string) 手机规格名
     *                         "UPhoneCount" => (integer) 手机开数，即该服务器规格能生成对应手机规格的云手机个数
     *                     ]
     *                 ]
     *                 "ServerModelState" => (string) 表示该机型是否上线，用于前端判断是否开放给用户。枚举值：>AVAILABLE，开放>UNAVAILABLE, 不开放
     *             ]
     *             "UPhoneModelName" => (string) 云手机规格名称。
     *             "CreateTime" => (integer) 创建时间，格式为Unix时间戳。
     *             "ModifyTime" => (integer) 修改时间，格式为Unix时间戳。
     *             "ExpireTime" => (integer) 到期时间，格式为Unix时间戳。
     *             "ChargeType" => (string) 计费模式。枚举值为：<br />  *Year，按年付费；<br />*  Month，按月付费；<br />默认为月付
     *             "CityId" => (string) 城市Id，eg: cn-shanghai, cn-jinan
     *             "CityName" => (string) 城市名称，eg:上海二、济南市
     *             "Remark" => (string) 云服务器备注。
     *             "UPhoneCount" => (integer) 云手机开数。
     *             "State" => (string) 实例状态，枚举值： * 初始化: Initializing; * 云手机创建中: UPhoneCreating;* 运行中: Running; * 删除中: Deleting; * 创建失败: CreateFailed * 未知(空字符串，获取状态超时或出错)：""
     *             "IpSet" => (array<object>) 服务器IP信息[
     *                 [
     *                     "Ip" => (string) IP地址
     *                     "IpMode" => (string) ipv4或者ipv6
     *                     "IpType" => (string) 共有或私有
     *                     "Isp" => (string) 运营商
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUPhoneServerResponse
     * @throws UCloudException
     */
    public function describeUPhoneServer(DescribeUPhoneServerRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeUPhoneServerResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUPhoneServerModel - 获取ServerModel列表。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/describe_u_phone_server_model
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "ServerModelNames" => (array<string>) 【数组】要获得信息的 ServerModel 名称。调用方式举例：ServerModelNames.0=希望获取信息的 ServerModel1，ServerModelNames.1=ServerModel2。 如果不传入，则返回当前 城市 所有符合条件的 ServerModel。
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20，最大100
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) ServerModelInstance总数
     *     "Stock" => (array<object>) 服务器model的库存[
     *         [
     *             "ModelName" => (string) ServerModel名称
     *             "StockCount" => (integer) 资源余量
     *         ]
     *     ]
     *     "ServerModels" => (array<object>) ServerModel实例列表，每项参数可见数据模型 ServerModelInstance[
     *         [
     *             "ServerModelName" => (string) ServerModel名称	
     *             "CPU" => (integer) 虚拟CPU核数。可选参数：1-64（具体机型与CPU的对应关系参照控制台）。
     *             "Memory" => (integer) 内存大小。单位：MB。
     *             "DiskSet" => (array<object>) 磁盘信息见 UPhoneDiskSet	[
     *                 [
     *                     "DiskType" => (string) 磁盘类型。请参考磁盘类型。
     *                     "IsBoot" => (boolean) 是否是系统盘。枚举值：> True，是系统盘> False，是数据盘（默认）。Disks数组中有且只能有一块盘是系统盘。
     *                     "Size" => (integer) 磁盘大小，单位: GB
     *                 ]
     *             ]
     *             "GPUType" => (string) GPU类型	
     *             "GPU" => (integer) GPU个数	
     *             "UPhoneSpecs" => (array<object>) 【数组】手机说明，包含该服务器规格所能创建的手机规格名及对应手机开数。每项参数可见数据模型 [UPhoneSpec](#UPhoneSpec)	[
     *                 [
     *                     "UPhoneModelName" => (string) 手机规格名
     *                     "UPhoneCount" => (integer) 手机开数，即该服务器规格能生成对应手机规格的云手机个数
     *                 ]
     *             ]
     *             "ServerModelState" => (string) 表示该机型是否上线，用于前端判断是否开放给用户。枚举值：>AVAILABLE，开放>UNAVAILABLE, 不开放
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUPhoneServerModelResponse
     * @throws UCloudException
     */
    public function describeUPhoneServerModel(DescribeUPhoneServerModelRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeUPhoneServerModelResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUPhoneAllowance - 获取云手机创建余量
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/get_u_phone_allowance
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UPhoneAllowance" => (array<object>) 手机型号以及可创建数量[
     *         [
     *             "ModelName" => (string) 枚举值，云手机型号名称，取值：UPhone X，UPhone Plus，UPhone Pro
     *             "Allowance" => (integer) 可创建云手机个数
     *         ]
     *     ]
     * ]
     *
     * @return GetUPhoneAllowanceResponse
     * @throws UCloudException
     */
    public function getUPhoneAllowance(GetUPhoneAllowanceRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetUPhoneAllowanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUPhonePrice - 根据云手机规格名称，获取UPhone实例的价格。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/get_u_phone_price
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "UPhoneModelName" => (integer) 云手机规格名称
     *     "MediaBandwidth" => (integer) 云手机画面带宽值，画面带宽和手机强绑定关系，必须和手机数量对应。
     *     "UPhoneCount" => (integer) 云手机个数
     *     "ChargeType" => (string) 计费模式。枚举值为： > Year，按年付费； > Month，按月付费； > Dynamic，按小时预付费; 如果不传某个枚举值，默认返回年付、月付的价格组合集。
     *     "Quantity" => (integer) 购买时长。默认: 1。 月付时，此参数传0，代表了购买至月末。
     *     "IpDestRegion" => (string) 购买独立IP必须此参数。绑定的目的地域。参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "INetBandwidth" => (integer) 购买独立IP需要此参数，其中一个ip的带宽值。
     *     "IpCount" => (integer) 购买独立IP需要此参数。需要的eip数量。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PriceSet" => (array<object>) 价格列表，每项参数见UPhonePriceSet[
     *         [
     *             "ChargeType" => (string) 计费类型，枚举值：Year，Month，Dynamic
     *             "Price" => (number) 价格，单位: 元，保留小数点后两位有效数字
     *             "OriginalPrice" => (number) 限时优惠的折前原价（即列表价乘以商务折扣后的单价）
     *             "ListPrice" => (number) 产品列表价
     *         ]
     *     ]
     * ]
     *
     * @return GetUPhonePriceResponse
     * @throws UCloudException
     */
    public function getUPhonePrice(GetUPhonePriceRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetUPhonePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUPhoneRenewPrice - 获取云手机续费价格，不包括独立ip价格。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/get_u_phone_renew_price
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UPhoneId" => (string) 云手机的唯一标识，可通过[查询云手机列表]获取。
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "ChargeType" => (string) 计费模式。枚举值为： > Year，按年付费； > Month，按月付费； > Dynamic，按小时预付费; 默认返回全部计费方式对应的价格
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PriceSet" => (array<object>) 价格列表,具体参数见UPhonePriceSet[
     *         [
     *             "ChargeType" => (string) 计费类型，枚举值：Year，Month，Dynamic
     *             "Price" => (number) 价格，单位: 元，保留小数点后两位有效数字
     *             "OriginalPrice" => (number) 限时优惠的折前原价（即列表价乘以商务折扣后的单价）
     *             "ListPrice" => (number) 产品列表价
     *         ]
     *     ]
     * ]
     *
     * @return GetUPhoneRenewPriceResponse
     * @throws UCloudException
     */
    public function getUPhoneRenewPrice(GetUPhoneRenewPriceRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetUPhoneRenewPriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUPhoneScreenCapture - 云手机截屏
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/get_u_phone_screen_capture
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UPhoneID" => (string) 云手机ID
     *     "CityId" => (string) 城市Id，通过[获取城市列表](https://docs.ucloud.cn/api/uphone-api/describe_u_phone_cities)获取
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "URL" => (string) 云手机截图URL
     * ]
     *
     * @return GetUPhoneScreenCaptureResponse
     * @throws UCloudException
     */
    public function getUPhoneScreenCapture(GetUPhoneScreenCaptureRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetUPhoneScreenCaptureResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUPhoneServerPrice - 根据服务器规格名称，获取UPhoneServer实例的价格。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/get_u_phone_server_price
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "ServerModelName" => (string) 服务器规格名称
     *     "ChargeType" => (string) 计费模式。枚举值为：> Year，按年付费；> Month，按月付费；> Dynamic，按小时预付费; 如果不传某个枚举值，默认返回年付、月付的价格组合集。
     *     "Quantity" => (integer) 购买时长。默认: 1。 月付时，此参数传0，代表了购买至月末。
     *     "IpDestRegion" => (string) 购买独立IP必须此参数。绑定的目的地域。参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Bandwidth" => (integer) 购买独立IP需要此参数。共享带宽总值。
     *     "IpCount" => (integer) 购买独立IP需要此参数。需要的eip数量。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PriceSet" => (array<object>) 价格列表，每项参数见UPhoneServerPriceSet[
     *         [
     *             "ChargeType" => (string) 计费类型，枚举值：Year，Month, Dynamic
     *             "Price" => (number) 价格，单位: 元，保留小数点后两位有效数字	
     *             "OriginalPrice" => (number) 限时优惠的折前原价（即列表价乘以商务折扣后的单价）	
     *             "ListPrice" => (number) 产品列表价
     *         ]
     *     ]
     * ]
     *
     * @return GetUPhoneServerPriceResponse
     * @throws UCloudException
     */
    public function getUPhoneServerPrice(GetUPhoneServerPriceRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetUPhoneServerPriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUPhoneServerRenewPrice - 获取云手机服务器续费价格

提示信息: 须按照控制台服务器模型配置创建服务器。详情请参考控制台。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/get_u_phone_server_renew_price
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ServerId" => (string) 云手机服务器的唯一标识，可通过[查询云手机服务器列表]()获取。
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "ChargeType" => (string) 计费模式。枚举值为：> Year，按年付费；> Month，按月付费； > Dynamic，按小时预付费; 默认返回全部计费方式对应的价格
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PriceSet" => (array<object>) 价格列表,具体参数见UPhoneServerPriceSet	[
     *         [
     *             "ChargeType" => (string) 计费类型，枚举值：Year，Month, Dynamic
     *             "Price" => (number) 价格，单位: 元，保留小数点后两位有效数字	
     *             "OriginalPrice" => (number) 限时优惠的折前原价（即列表价乘以商务折扣后的单价）	
     *             "ListPrice" => (number) 产品列表价
     *         ]
     *     ]
     * ]
     *
     * @return GetUPhoneServerRenewPriceResponse
     * @throws UCloudException
     */
    public function getUPhoneServerRenewPrice(GetUPhoneServerRenewPriceRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetUPhoneServerRenewPriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ImportFile - 上传文件到云手机目录/sdcard/Download/并自动安装APK文件
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/import_file
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UPhoneIds" => (array<string>) 云手机ID
     *     "FileName" => (string) 文件名
     *     "CityId" => (string) 城市。 参见 [云手机城市列表](https://docs.ucloud.cn/api/uphone-api/describe_u_phone_cities)
     *     "URL" => (string) 文件下载链接
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "JobId" => (string) 请求的唯一标识Id，`RetCode`为0时返回，可根据此ID查询请求的执行状态
     * ]
     *
     * @return ImportFileResponse
     * @throws UCloudException
     */
    public function importFile(ImportFileRequest $request = null) {
        $resp = $this->invoke($request);
        return new ImportFileResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * InstallUPhoneAppVersion - 在云手机中安装应用版本相关的Apk文件。系统会根据AppVersionId将对应的Apk文件下载后安装到云手机中。一次只支持安装一个Apk。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/install_u_phone_app_version
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "AppVersionId" => (string) 应用版本的唯一标识ID
     *     "UPhoneIds" => (array<string>) 【数组】云手机实例的资源 ID，调用方式举例：UPhoneIds.0=希望安装应用的云手机实例 1 的 UPhoneId，UPhoneIds.1=云手机实例 2 的 UPhoneId。
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "JobId" => (string) 请求的唯一标识Id，`RetCode`为0时返回，可根据此ID查询请求的执行状态
     * ]
     *
     * @return InstallUPhoneAppVersionResponse
     * @throws UCloudException
     */
    public function installUPhoneAppVersion(InstallUPhoneAppVersionRequest $request = null) {
        $resp = $this->invoke($request);
        return new InstallUPhoneAppVersionResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUPhoneName - 修改指定云手机实例名称。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/modify_u_phone_name
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "UPhoneId" => (string) 云手机实例的资源ID
     *     "Name" => (string) 云手机实例名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UPhoneId" => (string) 云手机实例的资源ID
     * ]
     *
     * @return ModifyUPhoneNameResponse
     * @throws UCloudException
     */
    public function modifyUPhoneName(ModifyUPhoneNameRequest $request = null) {
        $resp = $this->invoke($request);
        return new ModifyUPhoneNameResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUPhoneRemark - 修改指定云手机实例备注信息。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/modify_u_phone_remark
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "UPhoneId" => (string) 云手机实例的资源ID
     *     "Remark" => (string) 备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UPhoneId" => (string) 云手机实例的资源ID
     * ]
     *
     * @return ModifyUPhoneRemarkResponse
     * @throws UCloudException
     */
    public function modifyUPhoneRemark(ModifyUPhoneRemarkRequest $request = null) {
        $resp = $this->invoke($request);
        return new ModifyUPhoneRemarkResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUPhoneServerName - 修改指定云手机服务器实例名称。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/modify_u_phone_server_name
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "ServerId" => (string) 云手机服务器的唯一标识
     *     "Name" => (string) 云手机服务器实例名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ServerId" => (string) 云手机服务器的唯一标识
     * ]
     *
     * @return ModifyUPhoneServerNameResponse
     * @throws UCloudException
     */
    public function modifyUPhoneServerName(ModifyUPhoneServerNameRequest $request = null) {
        $resp = $this->invoke($request);
        return new ModifyUPhoneServerNameResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUPhoneServerRemark - 修改指定云手机实例备注信息。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/modify_u_phone_server_remark
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "ServerId" => (string) 云手机服务器的唯一标识
     *     "Remark" => (string) 备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ServerId" => (string) 云手机服务器的唯一标识
     * ]
     *
     * @return ModifyUPhoneServerRemarkResponse
     * @throws UCloudException
     */
    public function modifyUPhoneServerRemark(ModifyUPhoneServerRemarkRequest $request = null) {
        $resp = $this->invoke($request);
        return new ModifyUPhoneServerRemarkResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * PoweroffUPhone - 关闭处于运行状态的云手机实例
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/poweroff_u_phone
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UPhoneIds" => (array<string>) 【数组】云手机实例的资源 ID，调用方式举例：UPhoneIds.0=希望关闭的云手机实例 1 的 UPhoneId，UPhoneIds.1=云手机实例 2 的 UPhoneId。
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return PoweroffUPhoneResponse
     * @throws UCloudException
     */
    public function poweroffUPhone(PoweroffUPhoneRequest $request = null) {
        $resp = $this->invoke($request);
        return new PoweroffUPhoneResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * PoweronUPhone - 启动处于关闭状态的云手机实例
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/poweron_u_phone
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "UPhoneIds" => (array<string>) 【数组】云手机实例的资源ID，调用方式举例：UPhoneIds.0=希望开启的云手机实例1的UPhoneId，UPhoneIds.1=云手机实例2的UPhoneId。
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return PoweronUPhoneResponse
     * @throws UCloudException
     */
    public function poweronUPhone(PoweronUPhoneRequest $request = null) {
        $resp = $this->invoke($request);
        return new PoweronUPhoneResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RebootUPhone - 重新启动云手机实例
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/reboot_u_phone
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UPhoneIds" => (array<string>) 【数组】云手机实例的资源 ID，调用方式举例：UPhoneIds.0=希望重启的云手机实例 1 的 UPhoneId，UPhoneIds.1=云手机实例 2 的 UPhoneId。
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "JobId" => (string) 异步请求成功后返回JobId，用以查询Job状态
     * ]
     *
     * @return RebootUPhoneResponse
     * @throws UCloudException
     */
    public function rebootUPhone(RebootUPhoneRequest $request = null) {
        $resp = $this->invoke($request);
        return new RebootUPhoneResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RenewUPhone - 修改UPhone的device_id、imei、meid 以及其他相关配置，达到一键新机的效果
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/renew_u_phone
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "UPhoneIds" => (array<string>) 【数组】云手机实例的资源 ID，调用方式举例：UPhoneIds.0=希望重启的云手机实例 1 的 UPhoneId，UPhoneIds.1=云手机实例 2 的 UPhoneId。
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     *     "Customize" => (boolean) 自定义设备参数设置的开关，true时会读取用户设置的下列设备参数信息；false时随机读取ucloud内置设备参数。默认false
     *     "Brand" => (string) 品牌
     *     "Model" => (string) 设备型号
     *     "Manufacture" => (string) 厂商
     *     "SerialNumber" => (string) 序列号
     *     "BaseBand" => (string) 基带版本
     *     "Board" => (string) 主板名
     *     "DisplayID" => (string) 显示的版本号
     *     "Device" => (string) 设备名
     *     "FingerPrint" => (string) 系统指纹
     *     "ProductName" => (string) 产品名称
     *     "BuildID" => (string) build的版本号
     *     "BuildHost" => (string) 固件编译主机
     *     "BootLoader" => (string) bootloader版本号
     *     "BuildTags" => (string) 系统标记
     *     "BuildVersionInc" => (string) 版本增加说明
     *     "IMEI" => (string) 串号
     *     "PhoneNumber" => (string) 手机号码
     *     "ICCID" => (string) SIM卡唯一标识
     *     "IMSI" => (string) 移动识别码
     *     "IMEISV" => (string) 移动设备标识码软件
     *     "RadioMac" => (string) 移动网络mac地址
     *     "WiFiName" => (string) 当前连接Wi-Fi名称
     *     "BSSID" => (string) Wi-Fi 物理地址
     *     "AndroidID" => (string) AOSP唯一标识
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RenewUPhoneResponse
     * @throws UCloudException
     */
    public function renewUPhone(RenewUPhoneRequest $request = null) {
        $resp = $this->invoke($request);
        return new RenewUPhoneResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ResetUPhone - 将云手机恢复为创建时的状态。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/reset_u_phone
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "UPhoneIds" => (array<string>) 【数组】云手机实例的资源 ID，调用方式举例：UPhoneIds.0=希望重置的云手机实例 1 的 UPhoneId，UPhoneIds.1=云手机实例 2 的 UPhoneId。
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "JobId" => (string) 异步请求成功后返回JobId，用以查询Job状态
     * ]
     *
     * @return ResetUPhoneResponse
     * @throws UCloudException
     */
    public function resetUPhone(ResetUPhoneRequest $request = null) {
        $resp = $this->invoke($request);
        return new ResetUPhoneResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RunAsyncCommand - 在云手机中执行异步shell命令。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/run_async_command
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "Content" => (string) 待执行的命令。
     *     "UPhoneIds" => (array<string>) 【数组】云手机实例的资源 ID，调用方式举例：UPhoneIds.0=希望执行命令的云手机实例 1 的 UPhoneId，UPhoneIds.1=云手机实例 2 的 UPhoneId。
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "JobId" => (string) 请求的唯一标识Id，`RetCode`为0时返回，可根据此ID查询请求的执行状态
     * ]
     *
     * @return RunAsyncCommandResponse
     * @throws UCloudException
     */
    public function runAsyncCommand(RunAsyncCommandRequest $request = null) {
        $resp = $this->invoke($request);
        return new RunAsyncCommandResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RunSyncCommand - 在云手机中执行同步shell命令。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/run_sync_command
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "Content" => (string) 待执行的命令。
     *     "UPhoneIds" => (array<string>) 【数组】云手机实例的资源 ID，调用方式举例：UPhoneIds.0=希望执行命令的云手机实例 1 的 UPhoneId，UPhoneIds.1=云手机实例 2 的 UPhoneId。
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Results" => (array<object>) 云主机实例列表，每项参数可见数据模型 [UPhoneCommandResult](#UPhoneCommandResult)[
     *         [
     *             "UPhoneId" => (string) 云手机实例的资源ID。
     *             "ExecuteMsg" => (string) 同步shell命令的执行结果。
     *         ]
     *     ]
     * ]
     *
     * @return RunSyncCommandResponse
     * @throws UCloudException
     */
    public function runSyncCommand(RunSyncCommandRequest $request = null) {
        $resp = $this->invoke($request);
        return new RunSyncCommandResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SetUPhoneCallback - 设置云手机异步操作以及状态更新回调，支持云手机重置，安装应用，卸载应用，设备占用状态回调
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/set_u_phone_callback
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市ID
     *     "UPhoneId" => (string) 云手机ID。
     *     "URL" => (string) 接收POST请求的http接口。Content-Type：application/json; charset=UTF-8，Accept：application/json。
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return SetUPhoneCallbackResponse
     * @throws UCloudException
     */
    public function setUPhoneCallback(SetUPhoneCallbackRequest $request = null) {
        $resp = $this->invoke($request);
        return new SetUPhoneCallbackResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SetUPhoneConfig - 设置云手机画面参数（分辨率、DPI、帧率、码率）
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/set_u_phone_config
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "UPhoneIds" => (array<string>) 【数组】云手机实例的资源 ID，调用方式举例：UPhoneIds.0=云手机实例 1 的 UPhoneId，UPhoneIds.1=云手机实例 2 的 UPhoneId。
     *     "Resolution" => (string) 云手机画面分辨率（宽x高） （例，1920x1080，中间是字母x）宽和高的取值范围[100,5000]
     *     "Refresh" => (string) 云手机画面刷新率，即帧率（例，30）取值范围[1,200]
     *     "Bitrate" => (string) 云手机画面传输码率（例，8000）取值范围[100,50000]
     *     "Async" => (string) 异步请求开关，只有为1的时候才是异步，不填或者其他数值为同步
     *     "Dpi" => (string) 云手机dpi，取值范围[100,1000]
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RequestId" => (string) request_uuid，唯一值，用于区分request
     *     "JobId" => (string) 异步请求成功后返回JobId，用以查询Job状态
     *     "Results" => (array<object>) 同步请求会返回命令行结果，异步请求该参数为空[
     *         [
     *             "ExecuteMsg" => (string) 
     *             "UPhoneId" => (string) 
     *         ]
     *     ]
     * ]
     *
     * @return SetUPhoneConfigResponse
     * @throws UCloudException
     */
    public function setUPhoneConfig(SetUPhoneConfigRequest $request = null) {
        $resp = $this->invoke($request);
        return new SetUPhoneConfigResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SetUPhoneGPS - 设置云手机GPS信息
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/set_u_phone_gps
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "UPhoneGPSs" => (array<object>) [
     *         [
     *             "UPhoneId" => (string) 云手机ID
     *             "Longitude" => (number) 经度：-180~180
     *             "Latitude" => (number) 纬度：-90~90
     *             "Altitude" => (number) 海拔
     *         ]
     *     ]
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "JobId" => (string) 请求的唯一标识Id，`RetCode`为0时返回，可根据此ID查询请求的执行状态
     * ]
     *
     * @return SetUPhoneGPSResponse
     * @throws UCloudException
     */
    public function setUPhoneGPS(SetUPhoneGPSRequest $request = null) {
        $resp = $this->invoke($request);
        return new SetUPhoneGPSResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SetUPhoneManagerMode - 管理员模式支持所有按键，普通用户模式禁用返回桌面
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/set_u_phone_manager_mode
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UPhoneId" => (string) 云手机实例的资源ID
     *     "Mode" => (string) 管理模式：管理员admin，普通用户user
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return SetUPhoneManagerModeResponse
     * @throws UCloudException
     */
    public function setUPhoneManagerMode(SetUPhoneManagerModeRequest $request = null) {
        $resp = $this->invoke($request);
        return new SetUPhoneManagerModeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SetUPhoneRootMode - 设置云手机Root模式
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/set_u_phone_root_mode
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "UPhoneIds" => (array<string>) 【数组】云手机实例的资源 ID，调用方式举例：UPhoneIds.0=希望重启的云手机实例 1 的 UPhoneId，UPhoneIds.1=云手机实例 2 的 UPhoneId。
     *     "Root" => (boolean) true则打开Root权限；false则关闭Root权限
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "JobId" => (string) 异步请求成功后返回JobId，用以查询Job状态
     * ]
     *
     * @return SetUPhoneRootModeResponse
     * @throws UCloudException
     */
    public function setUPhoneRootMode(SetUPhoneRootModeRequest $request = null) {
        $resp = $this->invoke($request);
        return new SetUPhoneRootModeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SetUPhoneSplashScreen - 设置云手机启动画面，通过DescribeUPhone接口可以查询该地址
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/set_u_phone_splash_screen
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "URL" => (string) 启动画面下载地址
     *     "UPhoneId" => (string) 云手机ID
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return SetUPhoneSplashScreenResponse
     * @throws UCloudException
     */
    public function setUPhoneSplashScreen(SetUPhoneSplashScreenRequest $request = null) {
        $resp = $this->invoke($request);
        return new SetUPhoneSplashScreenResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SetUPhoneToken - 设置云手机RTC连接Token提高安全性
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/set_u_phone_token
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UPhoneId" => (string) 云手机ID
     *     "CityId" => (string) 城市Id，通过[获取城市列表](https://docs.ucloud.cn/api/uphone-api/describe_u_phone_cities)获取
     *     "Token" => (string) RTC连接Token，为空表示清空Token
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return SetUPhoneTokenResponse
     * @throws UCloudException
     */
    public function setUPhoneToken(SetUPhoneTokenRequest $request = null) {
        $resp = $this->invoke($request);
        return new SetUPhoneTokenResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UnInstallUPhoneAppVersion - 传入应用版本Id，在云手机中根据应用版本的PackageName卸载相关应用。一次只支持卸载一个应用。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/un_install_u_phone_app_version
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CityId" => (string) 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *     "AppVersionId" => (string) 应用版本的唯一标识ID
     *     "UPhoneIds" => (array<string>) 【数组】云手机实例的资源 ID，调用方式举例：UPhoneIds.0=希望卸载应用的云手机实例 1 的 UPhoneId，UPhoneIds.1=云手机实例 2 的 UPhoneId。
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "JobId" => (string) 请求的唯一标识Id，`RetCode`为0时返回，可根据此ID查询请求的执行状态
     * ]
     *
     * @return UnInstallUPhoneAppVersionResponse
     * @throws UCloudException
     */
    public function unInstallUPhoneAppVersion(UnInstallUPhoneAppVersionRequest $request = null) {
        $resp = $this->invoke($request);
        return new UnInstallUPhoneAppVersionResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateUPhoneImage - 更新云手机镜像信息。
     *
     * See also: https://docs.ucloud.cn/api/uphone-api/update_u_phone_image
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ImageId" => (string) 云手机自定义镜像资源ID
     *     "Name" => (string) 镜像名称。长度为2~128个英文或中文字符。
     *     "Description" => (string) 镜像的描述信息。长度为2~256个英文或中文字符
     *     "ProductType" => (string) 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ImageId" => (string) 云手机自定义镜像资源ID
     * ]
     *
     * @return UpdateUPhoneImageResponse
     * @throws UCloudException
     */
    public function updateUPhoneImage(UpdateUPhoneImageRequest $request = null) {
        $resp = $this->invoke($request);
        return new UpdateUPhoneImageResponse($resp->toArray(), $resp->getRequestId());
    }
}
