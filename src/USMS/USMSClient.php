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
namespace UCloud\USMS;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\USMS\Apis\CreateUSMSSignatureRequest;
use UCloud\USMS\Apis\CreateUSMSSignatureResponse;
        
        
        
use UCloud\USMS\Apis\CreateUSMSTemplateRequest;
use UCloud\USMS\Apis\CreateUSMSTemplateResponse;
        
        
        
use UCloud\USMS\Apis\DeleteUSMSSignatureRequest;
use UCloud\USMS\Apis\DeleteUSMSSignatureResponse;
        
        
        
use UCloud\USMS\Apis\DeleteUSMSTemplateRequest;
use UCloud\USMS\Apis\DeleteUSMSTemplateResponse;
        
        
        
use UCloud\USMS\Apis\GetUSMSSendReceiptRequest;
use UCloud\USMS\Apis\GetUSMSSendReceiptResponse;
        
        
        
use UCloud\USMS\Apis\QueryUSMSSignatureRequest;
use UCloud\USMS\Apis\QueryUSMSSignatureResponse;
        
        
        
use UCloud\USMS\Apis\QueryUSMSTemplateRequest;
use UCloud\USMS\Apis\QueryUSMSTemplateResponse;
        
        
        
use UCloud\USMS\Apis\SendBatchUSMSMessageRequest;
use UCloud\USMS\Apis\SendBatchUSMSMessageResponse;
        
        
        
use UCloud\USMS\Apis\SendUSMSMessageRequest;
use UCloud\USMS\Apis\SendUSMSMessageResponse;
        
        
        
use UCloud\USMS\Apis\UpdateUSMSSignatureRequest;
use UCloud\USMS\Apis\UpdateUSMSSignatureResponse;
        
        
        
use UCloud\USMS\Apis\UpdateUSMSTemplateRequest;
use UCloud\USMS\Apis\UpdateUSMSTemplateResponse;

/**
 * This client is used to call actions of **USMS** service
 */
class USMSClient extends Client
{
        
        
        
        
    /**
     * CreateUSMSSignature - 调用接口CreateUSMSSignature申请短信签名
     *
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
     * @throws UCloudException
     */
    public function deleteUSMSSignature(DeleteUSMSSignatureRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUSMSSignatureResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUSMSTemplate - 调用接口DeleteUSMSTemplate删除短信模板
     *
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
     * @throws UCloudException
     */
    public function getUSMSSendReceipt(GetUSMSSendReceiptRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUSMSSendReceiptResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * QueryUSMSSignature - 调用接口QueryUSMSSignature查询短信签名申请状态
     *
     * @throws UCloudException
     */
    public function queryUSMSSignature(QueryUSMSSignatureRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new QueryUSMSSignatureResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * QueryUSMSTemplate - 调用接口QueryUSMSTemplate查询短信模板申请状态
     *
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
     * @throws UCloudException
     */
    public function updateUSMSSignature(UpdateUSMSSignatureRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUSMSSignatureResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateUSMSTemplate - 调用接口UpdateUSMSTemplate修改未通过审核的短信模板，并重新提交审核
     *
     * @throws UCloudException
     */
    public function updateUSMSTemplate(UpdateUSMSTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUSMSTemplateResponse($resp->toArray(), $resp->getRequestId());
    }
}
