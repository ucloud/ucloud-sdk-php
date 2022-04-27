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
namespace UCloud\UCDN\Apis;

use UCloud\Core\Response\Response;
use UCloud\UCDN\Models\CertList;

class GetCertificateV2Response extends Response
{
    

    /**
     * TotalCount: 证书数量
     *
     * @return integer|null
     */
    public function getTotalCount(): int
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 证书数量
     *
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * CertList: 证书信息列表
     *
     * @return CertList[]|null
     */
    public function getCertList(): array
    {
        $items = $this->get("CertList") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CertList($item));
        }
        return $result;
    }

    /**
     * CertList: 证书信息列表
     *
     * @param CertList[] $certList
     */
    public function setCertList(array $certList)
    {
        $result = [];
        foreach ($certList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
