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
namespace UCloud\UBill;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\UBill\Apis\GetBalanceRequest;
use UCloud\UBill\Apis\GetBalanceResponse;
        
        
        
use UCloud\UBill\Apis\GetBillDataFileUrlRequest;
use UCloud\UBill\Apis\GetBillDataFileUrlResponse;
        
        
        
use UCloud\UBill\Apis\ListUBillDetailRequest;
use UCloud\UBill\Apis\ListUBillDetailResponse;
        
        
        
use UCloud\UBill\Apis\ListUBillOverviewRequest;
use UCloud\UBill\Apis\ListUBillOverviewResponse;

/**
 * This client is used to call actions of **UBill** service
 */
class UBillClient extends Client
{
        
        
        
        
    /**
     * GetBalance - 获取账户余额
     *
     * @throws UCloudException
     */
    public function getBalance(GetBalanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetBalanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetBillDataFileUrl - 生成账单数据文件下载的 url
     *
     * @throws UCloudException
     */
    public function getBillDataFileUrl(GetBillDataFileUrlRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetBillDataFileUrlResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ListUBillDetail - 获取某个账期内的所有消费。
     *
     * @throws UCloudException
     */
    public function listUBillDetail(ListUBillDetailRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUBillDetailResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ListUBillOverview - 账单总览。可按产品/项目/用户纬度获取某个账期内账单总览信息。
     *
     * @throws UCloudException
     */
    public function listUBillOverview(ListUBillOverviewRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUBillOverviewResponse($resp->toArray(), $resp->getRequestId());
    }
}
