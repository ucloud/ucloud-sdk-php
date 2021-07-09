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
namespace UCloud\UDDB\Apis;

use UCloud\Core\Response\Response;
use UCloud\UDDB\Models\PriceDetailInfo;

class DescribeUDDBInstancePriceResponse extends Response {
    

    /**
     * PriceInfo: 价格明细, 参考PriceDetailInfo对象定义
     *
     * @return PriceDetailInfo|null
     */
    public function getPriceInfo(): PriceDetailInfo {
        return new PriceDetailInfo($this->get("PriceInfo"));
    }

    /**
     * PriceInfo: 价格明细, 参考PriceDetailInfo对象定义
     *
     * @param PriceDetailInfo $priceInfo
     */
    public function setPriceInfo(PriceDetailInfo $priceInfo) {
        $this->set("PriceInfo", $priceInfo->getAll());
    }


}
