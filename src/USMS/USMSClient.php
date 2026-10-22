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
namespace UCloud\USMS;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\USMS\Apis\AddBackfillRequest;
use UCloud\USMS\Apis\AddBackfillResponse;
use UCloud\USMS\Apis\AddUSMSSignatureQualificationRequest;
use UCloud\USMS\Apis\AddUSMSSignatureQualificationResponse;
use UCloud\USMS\Apis\CreateUSMSSignatureRequest;
use UCloud\USMS\Apis\CreateUSMSSignatureResponse;
use UCloud\USMS\Apis\CreateUSMSTemplateRequest;
use UCloud\USMS\Apis\CreateUSMSTemplateResponse;
use UCloud\USMS\Apis\DeleteUSMSSignatureRequest;
use UCloud\USMS\Apis\DeleteUSMSSignatureResponse;
use UCloud\USMS\Apis\DeleteUSMSSignatureQualificationRequest;
use UCloud\USMS\Apis\DeleteUSMSSignatureQualificationResponse;
use UCloud\USMS\Apis\DeleteUSMSTemplateRequest;
use UCloud\USMS\Apis\DeleteUSMSTemplateResponse;
use UCloud\USMS\Apis\GetUSMSSendReceiptRequest;
use UCloud\USMS\Apis\GetUSMSSendReceiptResponse;
use UCloud\USMS\Apis\GetUSMSSendStatisticsRequest;
use UCloud\USMS\Apis\GetUSMSSendStatisticsResponse;
use UCloud\USMS\Apis\GetUSMSSignatureQualificationRequest;
use UCloud\USMS\Apis\GetUSMSSignatureQualificationResponse;
use UCloud\USMS\Apis\GetUSMSTemplateSendStatisticsRequest;
use UCloud\USMS\Apis\GetUSMSTemplateSendStatisticsResponse;
use UCloud\USMS\Apis\QueryUSMSSignatureRequest;
use UCloud\USMS\Apis\QueryUSMSSignatureResponse;
use UCloud\USMS\Apis\QueryUSMSSignatureQualificationRequest;
use UCloud\USMS\Apis\QueryUSMSSignatureQualificationResponse;
use UCloud\USMS\Apis\QueryUSMSTemplateRequest;
use UCloud\USMS\Apis\QueryUSMSTemplateResponse;
use UCloud\USMS\Apis\SendBatchUSMSMessageRequest;
use UCloud\USMS\Apis\SendBatchUSMSMessageResponse;
use UCloud\USMS\Apis\SendUSMSMessageRequest;
use UCloud\USMS\Apis\SendUSMSMessageResponse;
use UCloud\USMS\Apis\UpdateUSMSSignatureRequest;
use UCloud\USMS\Apis\UpdateUSMSSignatureResponse;
use UCloud\USMS\Apis\UpdateUSMSSignatureQualificationRequest;
use UCloud\USMS\Apis\UpdateUSMSSignatureQualificationResponse;
use UCloud\USMS\Apis\UpdateUSMSTemplateRequest;
use UCloud\USMS\Apis\UpdateUSMSTemplateResponse;
use UCloud\USMS\Apis\UploadUSMSFileRequest;
use UCloud\USMS\Apis\UploadUSMSFileResponse;

/**
 * This client is used to call actions of **USMS** service
 */
class USMSClient extends Client
{

    /**
     * AddBackfill - 用户通过接口发送消息，当消息在终端被消费，调用该接口，进行记录。
     *
     * See also: https://docs.ucloud.cn/api/usms-api/add_backfill
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SendNo" => (string) 发送Number，记录一次发送请求的唯一性
     *     "Target" => (string) 短信的接收目标,手机号需要添加国家码，比如(1)231xxxx
     *     "BackfillTime" => (integer) 回填时间，秒级别时间戳
     *     "Content" => (string) 回填内容
     *     "SendTime" => (integer) 发送请求的时间，秒级别时间戳
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AddBackfillResponse
     * @throws UCloudException
     */
    public function addBackfill(AddBackfillRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddBackfillResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AddUSMSSignatureQualification - 添加短信签名资质申请记录
     *
     * See also: https://docs.ucloud.cn/api/usms-api/add_usms_signature_qualification
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) 资质名称
     *     "Attr" => (integer) 资质属性，0-自用 1-他用
     *     "Status" => (integer) 状态：0-草稿，1-提交审核
     *     "HandlerPhone" => (string) 经办人手机号
     *     "CompanyName" => (string) 公司名称，长度限制100
     *     "CompanyCreditCode" => (string) 公司统一社会信用代码
     *     "CompanyCertificateFileId" => (string) 公司证件文件FileId
     *     "CompanyWorkScenePhotosFileId" => (string) 公司工作现场照片FileId
     *     "HandlerName" => (string) 经办人姓名
     *     "HandlerIDNumber" => (string) 经办人身份证号码
     *     "HandlerIDCardFrontImageFileId" => (string) 经办人身份证人像面图片FileId
     *     "HandlerIDCardBackImageFileId" => (string) 经办人身份证国徽面图片FileId
     *     "HandlerHandHeldImageFileId" => (string) 经办人手持身份证图片FileId
     *     "ManagerName" => (string) 法人姓名
     *     "ManagerPhone" => (string) 法人手机号
     *     "ManagerIDNumber" => (string) 法人身份证号码
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "QualificationId" => (string) 资质Id
     * ]
     *
     * @return AddUSMSSignatureQualificationResponse
     * @throws UCloudException
     */
    public function addUSMSSignatureQualification(AddUSMSSignatureQualificationRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddUSMSSignatureQualificationResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUSMSSignature - 调用接口CreateUSMSSignature申请短信签名
     *
     * See also: https://docs.ucloud.cn/api/usms-api/create_usms_signature
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID，不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SigContent" => (string) 签名内容
     *     "SigType" => (integer) 签名类型，说明如下：0-公司或企业的全称或简称；1-App应用的全称或简称；2-工信部备案网站的全称或简称；3-公众号或小程序的全称或简称；4-商标名的全称或简称；5-政府/机关事业单位/其他单位的全称或简称；
     *     "SigPurpose" => (integer) 签名用途，0-自用，1-他用；
     *     "CertificateType" => (integer) 签名的资质证明文件类型，需与签名类型保持一致，说明如下：0-三证合一/企业营业执照/组织机构代码证书/社会信用代码证书；1-应用商店后台开发者管理截图；2-备案服务商的备案成功截图(含域名，网站名称，备案号)；3-公众号或小程序的管理界面截图；4-商标注册证书；5-组织机构代码证书、社会信用代码证书；
     *     "Description" => (string) 短信签名申请原因
     *     "File" => (string) 短信签名的资质证明文件，需先进行base64编码格式转换，此处填写转换后的字符串。文件大小不超过4 MB
     *     "International" => (boolean) 国内/国际短信。true:国际短信，false:国内短信，若不传值则默认该值为false
     *     "ProxyFile" => (string) 短信签名授权委托文件，需先进行base64编码格式转换，此处填写转换后的字符串。文件大小不超过4 MB；当您是代理并使用第三方的签名时（也即SigPurpose为1-他用），该项为必填项；
     *     "QualificationId" => (string) 资质ID
     *     "SceneDesc" => (string) 短信签名对应的场景说明
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SigId" => (string) 短信签名ID（短信签名申请时的工单ID）
     * ]
     *
     * @return CreateUSMSSignatureResponse
     * @throws UCloudException
     */
    public function createUSMSSignature(CreateUSMSSignatureRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUSMSSignatureResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUSMSTemplate - 调用接口CreateUSMSTemplate申请短信模板
     *
     * See also: https://docs.ucloud.cn/api/usms-api/create_usms_template
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID，不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Purpose" => (integer) 短信模板用途类型：1-验证码类短信模板；2-系统通知类短信模板；3-会员推广类短信模板；
     *     "TemplateName" => (string) 短信模板名称，不超过32个字符，每个中文、符号、英文、数字等都计为1个字。
     *     "Template" => (string) 短信模板内容，说明如下：字数不超过500，每个中文、符号、英文、数组等都计为一个字；模板中的变量填写格式：{N}，其中N为大于1的整数，有多个参数时，建议N从1开始顺次，例如：{1}、{2}等；短信模板禁止仅包括变量的情况；
     *     "International" => (boolean) 标记是否为国际短信。true:国际短信，false:国内短信，若不传值则默认该值为false
     *     "Remark" => (string) 短信模板申请原因说明，字数不超过128，每个中文、符号、英文、数字等都计为1个字。
     *     "UnsubscribeInfo" => (string) 当Purpose=3并且International=false时，也即国内会员推广类短信模板，该项必填。枚举值：【拒收请回复R】
     *     "Instruction" => (string) 模板变量属性说明
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TemplateId" => (string) 短信模板ID（短信模板申请时的工单ID）
     * ]
     *
     * @return CreateUSMSTemplateResponse
     * @throws UCloudException
     */
    public function createUSMSTemplate(CreateUSMSTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUSMSTemplateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUSMSSignature - 调用接口DeleteUSMSSignature删除短信签名
     *
     * See also: https://docs.ucloud.cn/api/usms-api/delete_usms_signature
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID，不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "SigIds" => (array<string>) 签名ID（也即短信签名申请时的工单ID），支持以数组的方式，举例，以SigIds.0、SigIds.1...SigIds.N方式传入
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUSMSSignatureResponse
     * @throws UCloudException
     */
    public function deleteUSMSSignature(DeleteUSMSSignatureRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUSMSSignatureResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUSMSSignatureQualification - 删除短信签名资质申请记录
     *
     * See also: https://docs.ucloud.cn/api/usms-api/delete_usms_signature_qualification
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "QualificationIds" => (array<string>) 签名资质Id，支持以数组的方式，举例，以QualificationIds.0、QualificationIds.1...QualificationIds.N方式传入
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUSMSSignatureQualificationResponse
     * @throws UCloudException
     */
    public function deleteUSMSSignatureQualification(DeleteUSMSSignatureQualificationRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUSMSSignatureQualificationResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUSMSTemplate - 调用接口DeleteUSMSTemplate删除短信模板
     *
     * See also: https://docs.ucloud.cn/api/usms-api/delete_usms_template
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "TemplateIds" => (array<string>) 模板ID（也即短信模板申请时的工单ID），支持以数组的方式，举例，以TemplateIds.0、TemplateIds.1...TemplateIds.N方式传入
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUSMSTemplateResponse
     * @throws UCloudException
     */
    public function deleteUSMSTemplate(DeleteUSMSTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUSMSTemplateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUSMSSendReceipt - 调用接口GetUSMSSendReceipt短信发送状态信息
     *
     * See also: https://docs.ucloud.cn/api/usms-api/get_usms_send_receipt
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SessionNoSet" => (array<string>) 发送短信时返回的SessionNo集合，SessionNoSet.0,SessionNoSet.1....格式，单次调用集合数需控制在100个以内
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (array<object>) 回执信息集合[
     *         [
     *             "SessionNo" => (string) 发送短信时返回的SessionNo
     *             "ReceiptSet" => (array<object>) 每个手机号的短信回执信息集合[
     *                 [
     *                     "Phone" => (string) 手机号码
     *                     "CostCount" => (integer) 消耗短信条数
     *                     "ReceiptResult" => (string) 回执结果，枚举值：\\ > 发送成功: 代表成功 \\ > Success: 代表成功 \\ > 发送失败: 代表失败 \\ > Fail: 代表失败 \\ > 状态未知: 代表未知 \\ > Unknow: 代表未知
     *                     "ReceiptCode" => (string) 状态报告编码
     *                     "ReceiptDesc" => (string) 回执结果描述
     *                     "ReceiptTime" => (integer) 回执返回时间
     *                     "UserId" => (string) 自定义的业务标识ID，字符串
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return GetUSMSSendReceiptResponse
     * @throws UCloudException
     */
    public function getUSMSSendReceipt(GetUSMSSendReceiptRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUSMSSendReceiptResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUSMSSendStatistics - 获取发送统计数据
     *
     * See also: https://docs.ucloud.cn/api/usms-api/get_usms_send_statistics
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID，不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Page" => (integer) 页编号，从0开始
     *     "NumPerPage" => (integer) 每页记录个数
     *     "OrderBy" => (string) 排序字段，如BrevityCode表示按照BrevityCode排列，配合OrderType使用。目前支持SendDate、BrevityCode
     *     "OrderType" => (string) 排序方式，asc-正序 desc-倒序
     *     "StartDate" => (string) 开始日期，格式为YYYY-MM-DD
     *     "EndDate" => (string) 结束日期，格式为YYYY-MM-DD
     *     "Domestic" => (integer) 国内标记，0-国际短信 1-国内短信
     *     "BrevityCode" => (string) 国际简码，如CN表示中国，当需要查询多个国家时，使用-分割，如CN-ID。
     *     "Purpose" => (integer) 短信类型，1-验证码 2-通知类 3-营销类
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Total" => (integer) 返回记录数
     *     "StatisticsData" => (object) 符合查询条件的发送数据统计求和集，具体字段信息见StatisticsData模型[
     *         "UnknownCount" => (integer) 状态未知数（提交条数）
     *         "SuccessCount" => (integer) 发送成功数（提交条数）
     *         "SendCostCount" => (integer) 发送总数（拆分条数）
     *         "FailCount" => (integer) 发送失败数（提交条数）
     *         "SendCount" => (integer) 发送总数（提交条数）
     *         "SuccessCostCount" => (integer) 发送成功数（拆分条数）
     *         "FailCostCount" => (integer) 发送失败数（拆分条数）
     *         "UnknownCostCount" => (integer) 状态未知数（拆分条数）
     *         "SubmitFailCount" => (integer) 提交失败数（提交条数）
     *         "SubmitFailCostCount" => (integer) 提交失败数（拆分条数）
     *     ]
     *     "Data" => (array<object>) 以天为统计维度的发送数据统计集合，每天的统计数据字段详见StatisticsDataInfo模型[
     *         [
     *             "Count" => (integer) 发送总数（提交条数）
     *             "FailedCostCount" => (integer) 发送失败数（拆分条数）
     *             "BrevityCode" => (string) 国际/地区标识码
     *             "CostCount" => (integer) 发送总数（拆分条数）
     *             "SendDate" => (string) 发送时间
     *             "FailedCount" => (integer) 发送失败数（提交条数）
     *             "SuccessRate" => (number) 发送成功率
     *             "SuccessCount" => (integer) 发送成功数（提交条数）
     *             "UnknownCount" => (integer) 状态未知数（提交条数）
     *             "SuccessCostCount" => (integer) 发送成功数（拆分条数）
     *             "UnknownCostCount" => (integer) 状态未知数（拆分条数）
     *             "UserId" => (string) UserId
     *             "SubmitFailedCount" => (integer) 提交失败数（提交条数）
     *             "SubmitFailedCostCount" => (integer) 提交失败数（拆分条数）
     *         ]
     *     ]
     * ]
     *
     * @return GetUSMSSendStatisticsResponse
     * @throws UCloudException
     */
    public function getUSMSSendStatistics(GetUSMSSendStatisticsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUSMSSendStatisticsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUSMSSignatureQualification - 获取短信签名资质申请记录列表
     *
     * See also: https://docs.ucloud.cn/api/usms-api/get_usms_signature_qualification
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Page" => (integer) 页索引
     *     "NumPerPage" => (integer) 每页个数
     *     "OrderBy" => (string) 排序字段，QualificationId/CreateTime
     *     "OrderType" => (string) 排序类型: desc、asc
     *     "QualificationAttr" => (integer) 签名资质属性: 0-自用，1-他用
     *     "Status" => (integer) 签名资质状态: 0-草稿 1-审核中 2-审核通过 3-审核未通过 4-人工禁用
     *     "InAccountIds" => (array<string>) 项目ID列表
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Total" => (integer) 签名资质总个数
     *     "Data" => (array<object>) 签名资质结果集合[
     *         [
     *             "QualificationId" => (string) 资质Id
     *             "AccountId" => (integer) 项目Id
     *             "Name" => (string) 资质名称
     *             "Attr" => (integer) 资质属性: 0-自用 1-他用
     *             "CompanyName" => (string) 公司名称
     *             "ManagerName" => (string) 负责人姓名
     *             "HandlerName" => (string) 经办人姓名
     *             "Status" => (integer) 状态:0-草稿 1-审核中 2-审核通过 3-审核未通过 4-人工禁用
     *             "ErrCode" => (integer) 审核未通过错误码
     *             "ErrDesc" => (string) 审核未通过错误原因
     *             "CreateTime" => (integer) 创建时间戳
     *             "ModifyTime" => (integer) 修改时间戳
     *             "ReviewStartTime" => (integer) 审核开始时间戳
     *             "ReviewEndTime" => (integer) 审核完成时间戳
     *         ]
     *     ]
     * ]
     *
     * @return GetUSMSSignatureQualificationResponse
     * @throws UCloudException
     */
    public function getUSMSSignatureQualification(GetUSMSSignatureQualificationRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUSMSSignatureQualificationResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUSMSTemplateSendStatistics - 获取模板发送统计数据
     *
     * See also: https://docs.ucloud.cn/api/usms-api/get_usms_template_send_statistics
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Page" => (integer) 页编号，从0开始
     *     "NumPerPage" => (integer) 每页记录个数
     *     "OrderBy" => (string) 排序字段，如BrevityCode表示按照BrevityCode排列，配合OrderType使用。目前支持SendDate、BrevityCode
     *     "OrderType" => (string) 排序方式，asc-正序 desc-倒序
     *     "StartDate" => (string) 开始日期，格式为YYYY-MM-DD
     *     "EndDate" => (string) 结束日期，格式为YYYY-MM-DD
     *     "Domestic" => (integer) 国内标记，0-国际短信 1-国内短信
     *     "BrevityCode" => (string) 国际简码，如CN表示中国，当需要查询多个国家时，使用-分割，如CN-ID。
     *     "TemplateId" => (string) 短信模板ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Total" => (integer) 返回记录数
     *     "StatisticsData" => (object) 符合查询条件的发送数据统计求和集，具体字段信息见StatisticsData模型[
     *         "UnknownCount" => (integer) 状态未知数（提交条数）
     *         "SuccessCount" => (integer) 发送成功数（提交条数）
     *         "SendCostCount" => (integer) 发送总数（拆分条数）
     *         "FailCount" => (integer) 发送失败数（提交条数）
     *         "SendCount" => (integer) 发送总数（提交条数）
     *         "SuccessCostCount" => (integer) 发送成功数（拆分条数）
     *         "FailCostCount" => (integer) 发送失败数（拆分条数）
     *         "UnknownCostCount" => (integer) 状态未知数（拆分条数）
     *         "SubmitFailCount" => (integer) 提交失败数（提交条数）
     *         "SubmitFailCostCount" => (integer) 提交失败数（拆分条数）
     *     ]
     *     "Data" => (array<object>) 以天为统计维度的发送数据统计集合，每天的统计数据字段详见TemplateStatisticsDataInfo模型[
     *         [
     *             "SendDate" => (string) 发送时间
     *             "BrevityCode" => (string) 国际/地区标识码
     *             "TemplateId" => (string) 短信模板ID
     *             "Count" => (integer) 发送总数（提交条数）
     *             "CostCount" => (integer) 发送总数（拆分条数）
     *             "SuccessCount" => (integer) 发送成功数（提交条数）
     *             "SuccessCostCount" => (integer) 发送成功数（拆分条数）
     *             "FailedCount" => (integer) 发送失败数（提交条数）
     *             "FailedCostCount" => (integer) 发送失败数（拆分条数）
     *             "UnknownCount" => (integer) 状态未知数（提交条数）
     *             "UnknownCostCount" => (integer) 状态未知数（拆分条数）
     *             "SubmitFailedCount" => (integer) 提交失败数（提交条数）
     *             "SubmitFailedCostCount" => (integer) 提交失败数（拆分条数）
     *         ]
     *     ]
     * ]
     *
     * @return GetUSMSTemplateSendStatisticsResponse
     * @throws UCloudException
     */
    public function getUSMSTemplateSendStatistics(GetUSMSTemplateSendStatisticsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUSMSTemplateSendStatisticsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * QueryUSMSSignature - 调用接口QueryUSMSSignature查询短信签名申请状态
     *
     * See also: https://docs.ucloud.cn/api/usms-api/query_usms_signature
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "SigId" => (string) 已申请的短信签名ID（短信签名申请时的工单ID）；签名ID和签名至少需填写1项；
     *     "SigContent" => (string) 签名内容；签名ID和签名至少需填写1项；
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 签名信息[
     *         "SigId" => (string) 签名ID
     *         "SigContent" => (string) 签名内容
     *         "Status" => (integer) 签名状态。0-待审核 1-审核中 2-审核通过 3-审核未通过 4-被禁用
     *         "ErrDesc" => (string) 签名审核失败原因
     *     ]
     * ]
     *
     * @return QueryUSMSSignatureResponse
     * @throws UCloudException
     */
    public function queryUSMSSignature(QueryUSMSSignatureRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new QueryUSMSSignatureResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * QueryUSMSSignatureQualification - 获取短信签名资质申请记录详情
     *
     * See also: https://docs.ucloud.cn/api/usms-api/query_usms_signature_qualification
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "QualificationId" => (string) 签名资质Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 签名资质详细信息[
     *         "QualificationId" => (string) 资质Id
     *         "Name" => (string) 资质名称
     *         "Attr" => (integer) 资质属性：0-自用，1-他用
     *         "CompanyName" => (string) 公司名称
     *         "CompanyCreditCode" => (string) 统一社会信用代码
     *         "CompanyCertificateFile" => (string) 公司证件文件链接
     *         "ManagerName" => (string) 负责人姓名
     *         "ManagerPhone" => (string) 负责人手机号
     *         "ManagerIDNumber" => (string) 负责人证件号码
     *         "HandlerName" => (string) 经办人姓名
     *         "HandlerPhone" => (string) 经办人手机号
     *         "HandlerIDNumber" => (string) 经办人证件号码
     *         "HandlerIDCardFrontImage" => (string) 经办人身份证人像面图片链接
     *         "HandlerIDCardBackImage" => (string) 经办人身份证国徽面图片链接
     *         "HandlerHandHeldImage" => (string) 经办人手持身份证图片链接
     *         "CompanyWorkScenePhotos" => (string) 工作现场照片链接
     *         "PowerOfAttorney" => (string) 授权委托书文件链接
     *         "Status" => (integer) 状态:0-草稿 1-审核中 2-审核通过 3-审核未通过 4-人工禁用
     *         "ErrCode" => (integer) 审核未通过错误码
     *         "ErrDesc" => (string) 审核未通过错误原因
     *         "CreateTime" => (integer) 创建时间戳
     *         "ModifyTime" => (integer) 修改时间戳
     *         "ReviewStartTime" => (integer) 审核开始时间戳
     *         "ReviewEndTime" => (integer) 审核完成时间戳
     *     ]
     * ]
     *
     * @return QueryUSMSSignatureQualificationResponse
     * @throws UCloudException
     */
    public function queryUSMSSignatureQualification(QueryUSMSSignatureQualificationRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new QueryUSMSSignatureQualificationResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * QueryUSMSTemplate - 调用接口QueryUSMSTemplate查询短信模板申请状态
     *
     * See also: https://docs.ucloud.cn/api/usms-api/query_usms_template
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TemplateId" => (string) 模板ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (object) 短信模板明细信息，各字段说明详见OutTemplate[
     *         "TemplateId" => (string) 短信模板ID
     *         "Purpose" => (integer) 模板类型，选项：1-验证码类 2-通知类 3-会员推广类
     *         "TemplateName" => (string) 短信模板名称
     *         "Template" => (string) 短信模板内容
     *         "UnsubscribeInfo" => (string) 退订信息；一般填写方式“回T退订”，当purpose为3（也即会员推广类）时，为必填项
     *         "Status" => (integer) 短信模板状态；状态说明：0-待审核，1-审核中，2-审核通过，3-审核未通过，4-被禁用
     *         "Remark" => (string) 模板说明
     *         "ErrDesc" => (string) 审核失败原因
     *         "CreateTime" => (integer) 创建时间
     *         "Instruction" => (string) 模板变量属性说明
     *     ]
     * ]
     *
     * @return QueryUSMSTemplateResponse
     * @throws UCloudException
     */
    public function queryUSMSTemplate(QueryUSMSTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new QueryUSMSTemplateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SendBatchUSMSMessage - 调用SendBatchUSMSMessage接口批量发送短信
     *
     * See also: https://docs.ucloud.cn/api/usms-api/send_batch_usms_message
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TaskContent" => (string) 批量发送内容，该参数是json数组的base64编码结果。发送内容json数组中，每个“模板+签名”组合作为一个子项，每个子项内支持多个号码，示例：发送内容json数组（base64编码前）：[{"TemplateId": "UTA20212831C85C", "SigContent": "UCloud", "Target": [{"TemplateParams": ["123456"], "Phone": "18500000123", "ExtendCode": "123", "UserId": "456"} ] } ]   。json数组中各参数的定义："TemplateId":模板ID，"SigContent"短信签名内容，"Target"具体到号码粒度的发送内容。"Target"中的具体字段有："TemplateParams"实际发送的模板参数（若使用的是无参数模板，该参数不能传值），"Phone"手机号码, "ExtendCode"短信扩展码, "UserId"自定义业务标识ID。其中必传参数为"TemplateId", "SigContent", "Target"（"Target"中必传参数为"Phone"）。实际调用本接口时TaskContent传值（发送内容base64编码后）为：W3siVGVtcGxhdGVJZCI6ICJVVEEyMDIxMjgzMUM4NUMiLCAiU2lnQ29udGVudCI6ICJVQ2xvdWQiLCAiVGFyZ2V0IjogW3siVGVtcGxhdGVQYXJhbXMiOiBbIjEyMzQ1NiJdLCAiUGhvbmUiOiAiMTg1MDAwMDAxMjMiLCAiRXh0ZW5kQ29kZSI6ICIxMjMiLCAiVXNlcklkIjogIjQ1NiJ9IF0gfSBdIA==
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SessionNo" => (string) 本次提交发送任务的唯一ID，可根据该值查询本次发送的短信列表。注：成功提交短信数大于0时，才返回该字段
     *     "ReqUuid" => (string) 本次请求Uuid
     *     "SuccessCount" => (integer) 成功提交短信（未拆分）条数
     *     "FailContent" => (array<object>) 未发送成功的详情，返回码非0时该字段有效，可根据该字段数据重发[
     *         [
     *             "TemplateId" => (string) 模板ID
     *             "SigContent" => (string) 签名
     *             "Target" => (array<object>) 具体号码信息[
     *                 [
     *                     "TemplateParams" => (array<string>) 模板参数
     *                     "Phone" => (string) 手机号
     *                     "ExtendCode" => (string) 扩展号码
     *                     "UserId" => (string) 用户自定义ID
     *                     "FailureDetails" => (string) 发送失败原因。注：若模板/签名校验失败，该字段为空
     *                 ]
     *             ]
     *             "FailureDetails" => (string) 未能成功发送的详情。注：模板/签名检验失败时，该字段有效
     *         ]
     *     ]
     * ]
     *
     * @return SendBatchUSMSMessageResponse
     * @throws UCloudException
     */
    public function sendBatchUSMSMessage(SendBatchUSMSMessageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SendBatchUSMSMessageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SendUSMSMessage - 调用接口SendUSMSMessage发送短信
     *
     * See also: https://docs.ucloud.cn/api/usms-api/send_usms_message
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "PhoneNumbers" => (array<string>) 电话号码数组，电话号码格式为(60)1xxxxxxxx，()中为国际长途区号(如中国为86或0086，两种格式都支持)，后面为电话号码.若不传入国际区号，如1851623xxxx，则默认为国内手机号
     *     "TemplateId" => (string) 模板ID（也即短信模板申请时的工单ID），请到[USMS控制台](https://console.ucloud.cn/usms)的模板管理页面查看；使用的短信模板必须是已申请并通过审核；
     *     "SigContent" => (string) 短信签名内容，请到[USMS控制台](https://console.ucloud.cn/usms)的签名管理页面查看；使用的短信签名必须是已申请并且通过审核；（注：国内短信为必选参数、国际短信为可选参数）
     *     "TemplateParams" => (array<string>) 模板可变参数，以数组的方式填写，举例，TemplateParams.0，TemplateParams.1，... 若模板中无可变参数，则该项可不填写；若模板中有可变参数，则该项为必填项，参数个数需与变量个数保持一致，否则无法发送；
     *     "ExtendCode" => (string) 短信扩展码，格式为阿拉伯数字串，默认不开通，如需开通请联系 UCloud技术支持
     *     "UserId" => (string) 自定义的业务标识ID，字符串（ 长度不能超过32 位），不支持 单引号、表情包符号等特殊字符
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SessionNo" => (string) 本次提交发送的短信的唯一ID，可根据该值查询本次发送的短信列表
     *     "UserId" => (string) 本次提交的自定义业务标识ID，仅当发送时传入有效的UserId，才返回该字段。
     * ]
     *
     * @return SendUSMSMessageResponse
     * @throws UCloudException
     */
    public function sendUSMSMessage(SendUSMSMessageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SendUSMSMessageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateUSMSSignature - 调用接口UpdateUSMSSignature修改未通过审核的短信签名，并重新提交审核
     *
     * See also: https://docs.ucloud.cn/api/usms-api/update_usms_signature
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID，不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SigId" => (string) 签名ID（也即短信签名申请时的工单ID），支持以数组的方式，举例，以SigIds.0、SigIds.1...SigIds.N方式传入
     *     "SigContent" => (string) 新的短信签名内容；长度为2-12个字符, 可包含中文、数字和符号；无需填写【】或[]，系统会自动添加
     *     "SigType" => (integer) 签名类型，说明如下：0-公司或企业的全称或简称；1-App应用的全称或简称；2-工信部备案网站的全称或简称；3-公众号或小程序的全称或简称；4-商标名的全称或简称；5-政府/机关事业单位/其他单位的全称或简称；
     *     "SigPurpose" => (integer) 签名用途，0-自用，1-他用；
     *     "File" => (string) 短信签名的资质证明文件内容，需先进行base64编码格式转换，此处填写转换后的字符串。文件大小不超过4 MB。内容格式如下: [file type];[code type],[base64]  如：image/jpeg;base64,5YaF5a65
     *     "CertificateType" => (integer) 签名的资质证明文件类型，需与签名类型保持一致，说明如下：0-三证合一/企业营业执照/组织机构代码证书/社会信用代码证书；1-应用商店后台开发者管理截图；2-备案服务商的备案成功截图(含域名，网站名称，备案号)；3-公众号或小程序的管理界面截图；4-商标注册证书；5-组织机构代码证书、社会信用代码证书；
     *     "ProxyFile" => (string) 短信签名授权委托文件内容，需先进行base64编码格式转换，此处填写转换后的字符串。文件大小不超过4 MB；当您是代理并使用第三方的签名时（也即SigPurpose为1-他用），该项为必填项；格式和File类似。
     *     "Document" => (string) 短信签名的资质证明文件URL，若未更改审核材料，则该处使用已上传审核材料的URL链接，否则使用File参数
     *     "ProxyDoc" => (string) 短信签名授权委托文件URL，若未更改授权委托文件，则该处填写已上传的授权委托文件的URL链接，否则使用ProxyFile参数
     *     "SceneDesc" => (string) 短信签名对应的场景说明
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateUSMSSignatureResponse
     * @throws UCloudException
     */
    public function updateUSMSSignature(UpdateUSMSSignatureRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUSMSSignatureResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateUSMSSignatureQualification - 修改短信签名资质申请记录
     *
     * See also: https://docs.ucloud.cn/api/usms-api/update_usms_signature_qualification
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "QualificationId" => (string) 资质Id
     *     "Status" => (integer) 状态：0-草稿，1-提交审核
     *     "Name" => (string) 资质名称
     *     "Attr" => (integer) 资质属性，0-自用 1-他用
     *     "CompanyName" => (string) 公司名称，长度限制100
     *     "CompanyCreditCode" => (string) 公司统一社会信用代码
     *     "CompanyCertificateFileId" => (string) 公司证件文件FileId
     *     "CompanyWorkScenePhotosFileId" => (string) 公司工作现场照片FileId
     *     "HandlerName" => (string) 经办人姓名
     *     "HandlerPhone" => (string) 经办人手机号
     *     "HandlerIDNumber" => (string) 经办人身份证号码
     *     "HandlerIDCardFrontImageFileId" => (string) 经办人身份证人像面图片FileId
     *     "HandlerIDCardBackImageFileId" => (string) 经办人身份证国徽面图片FileId
     *     "HandlerHandHeldImageFileId" => (string) 经办人手持身份证图片FileId
     *     "ManagerName" => (string) 法人姓名
     *     "ManagerPhone" => (string) 法人手机号
     *     "ManagerIDNumber" => (string) 法人身份证号码
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "QualificationId" => (string) 资质Id
     * ]
     *
     * @return UpdateUSMSSignatureQualificationResponse
     * @throws UCloudException
     */
    public function updateUSMSSignatureQualification(UpdateUSMSSignatureQualificationRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUSMSSignatureQualificationResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateUSMSTemplate - 调用接口UpdateUSMSTemplate修改未通过审核的短信模板，并重新提交审核
     *
     * See also: https://docs.ucloud.cn/api/usms-api/update_usms_template
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TemplateId" => (string) 短信模板ID
     *     "Template" => (string) 新的模板内容。模板名称和模板内容必须提供一个，否则会报错。小于等于600个字
     *     "TemplateName" => (string) 新的模板名称。小于等于32个字，每个中文、英文、数组、符合都计为一个字
     *     "Remark" => (string) 短信模板申请原因说明，字数不超过128，每个中文、符号、英文、数字等都计为1个字。
     *     "Instruction" => (string) 模板变量属性说明
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateUSMSTemplateResponse
     * @throws UCloudException
     */
    public function updateUSMSTemplate(UpdateUSMSTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUSMSTemplateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UploadUSMSFile - 上传文件
     *
     * See also: https://docs.ucloud.cn/api/usms-api/upload_usms_file
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "FileName" => (string) 文件名称，携带文件后缀
     *     "FileContent" => (string) 文件内容，base64编码
     *     "Source" => (integer) 文件来源，0-签名资质
     *     "FileType" => (string) 文件类型，mime格式
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "FileId" => (string) 文件FileId
     * ]
     *
     * @return UploadUSMSFileResponse
     * @throws UCloudException
     */
    public function uploadUSMSFile(UploadUSMSFileRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UploadUSMSFileResponse($resp->toArray(), $resp->getRequestId());
    }
}
