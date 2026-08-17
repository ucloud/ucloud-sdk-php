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
namespace UCloud\UKMS;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UKMS\Apis\CancelKeyDeletionRequest;
use UCloud\UKMS\Apis\CancelKeyDeletionResponse;
use UCloud\UKMS\Apis\CreateAliasRequest;
use UCloud\UKMS\Apis\CreateAliasResponse;
use UCloud\UKMS\Apis\CreateKeyRequest;
use UCloud\UKMS\Apis\CreateKeyResponse;
use UCloud\UKMS\Apis\DecryptRequest;
use UCloud\UKMS\Apis\DecryptResponse;
use UCloud\UKMS\Apis\DeleteAliasRequest;
use UCloud\UKMS\Apis\DeleteAliasResponse;
use UCloud\UKMS\Apis\DescribeKeyRequest;
use UCloud\UKMS\Apis\DescribeKeyResponse;
use UCloud\UKMS\Apis\DisableKeyRequest;
use UCloud\UKMS\Apis\DisableKeyResponse;
use UCloud\UKMS\Apis\DisableKeyRotationRequest;
use UCloud\UKMS\Apis\DisableKeyRotationResponse;
use UCloud\UKMS\Apis\EnableKeyRequest;
use UCloud\UKMS\Apis\EnableKeyResponse;
use UCloud\UKMS\Apis\EnableKeyRotationRequest;
use UCloud\UKMS\Apis\EnableKeyRotationResponse;
use UCloud\UKMS\Apis\EncryptRequest;
use UCloud\UKMS\Apis\EncryptResponse;
use UCloud\UKMS\Apis\GenerateDataKeyRequest;
use UCloud\UKMS\Apis\GenerateDataKeyResponse;
use UCloud\UKMS\Apis\GenerateDataKeyPairRequest;
use UCloud\UKMS\Apis\GenerateDataKeyPairResponse;
use UCloud\UKMS\Apis\GenerateDataKeyPairWithoutPlaintextRequest;
use UCloud\UKMS\Apis\GenerateDataKeyPairWithoutPlaintextResponse;
use UCloud\UKMS\Apis\GenerateDataKeyWithoutPlaintextRequest;
use UCloud\UKMS\Apis\GenerateDataKeyWithoutPlaintextResponse;
use UCloud\UKMS\Apis\GenerateMacRequest;
use UCloud\UKMS\Apis\GenerateMacResponse;
use UCloud\UKMS\Apis\GenerateRandomRequest;
use UCloud\UKMS\Apis\GenerateRandomResponse;
use UCloud\UKMS\Apis\GetKeyRotationStatusRequest;
use UCloud\UKMS\Apis\GetKeyRotationStatusResponse;
use UCloud\UKMS\Apis\GetPublicKeyRequest;
use UCloud\UKMS\Apis\GetPublicKeyResponse;
use UCloud\UKMS\Apis\ListAliasesRequest;
use UCloud\UKMS\Apis\ListAliasesResponse;
use UCloud\UKMS\Apis\ListKeysRequest;
use UCloud\UKMS\Apis\ListKeysResponse;
use UCloud\UKMS\Apis\ListScheduleDeletionKeysRequest;
use UCloud\UKMS\Apis\ListScheduleDeletionKeysResponse;
use UCloud\UKMS\Apis\RotateKeyOnDemandRequest;
use UCloud\UKMS\Apis\RotateKeyOnDemandResponse;
use UCloud\UKMS\Apis\ScheduleKeyDeletionRequest;
use UCloud\UKMS\Apis\ScheduleKeyDeletionResponse;
use UCloud\UKMS\Apis\SignRequest;
use UCloud\UKMS\Apis\SignResponse;
use UCloud\UKMS\Apis\UpdateAliasRequest;
use UCloud\UKMS\Apis\UpdateAliasResponse;
use UCloud\UKMS\Apis\UpdateKeyDescriptionRequest;
use UCloud\UKMS\Apis\UpdateKeyDescriptionResponse;
use UCloud\UKMS\Apis\VerifyRequest;
use UCloud\UKMS\Apis\VerifyResponse;
use UCloud\UKMS\Apis\VerifyMacRequest;
use UCloud\UKMS\Apis\VerifyMacResponse;

/**
 * This client is used to call actions of **UKMS** service
 */
class UKMSClient extends Client
{

    /**
     * CancelKeyDeletion - 取消计划删除中的密钥。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/cancel_key_deletion
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "KeyId" => (string) 密钥  ID。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return CancelKeyDeletionResponse
     * @throws UCloudException
     */
    public function cancelKeyDeletion(CancelKeyDeletionRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CancelKeyDeletionResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateAlias - 为密钥创建别名。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/create_alias
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "AliasName" => (string) 密钥别名，格式为 alias/name。
     *     "KeyId" => (string) 密钥 ID、ARN 或别名。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return CreateAliasResponse
     * @throws UCloudException
     */
    public function createAlias(CreateAliasRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateAliasResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateKey - 创建密钥。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/create_key
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     *     "Description" => (string) 密钥描述，最多 8192 字符。
     *     "Alias" => (string) 可选密钥别名，格式为 alias/name。
     *     "KeySpec" => (string) 密钥规格，默认 SYMMETRIC_DEFAULT（AES_256）。可选值：SYMMETRIC_DEFAULT(AES_256)、RSA_2048、RSA_3072、RSA_4096、ECC_NIST_P256、ECC_NIST_P384、ECC_NIST_P521、HMAC_256、HMAC_384、HMAC_512。
     *     "KeyUsage" => (string) 密钥用途
     *     "Origin" => (string) 密钥材料来源，默认 UCLOUD_KMS。当前仅支持 UCLOUD_KMS；EXTERNAL 为 BYOK 规划值，当前传入会返回 100660。
     *     "DeletionProtection" => (string) 是否开启删除保护。可选值：true、false；默认 false。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "KeyId" => (string) 密钥 ID。
     * ]
     *
     * @return CreateKeyResponse
     * @throws UCloudException
     */
    public function createKey(CreateKeyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateKeyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * Decrypt - 您可以使用此操作解密使用对称加密 KMS 密钥或非对称加密 KMS 密钥加密的密文。当 KMS 密钥为非对称密钥时，您必须指定用于加密密文的 KMS 密钥和加密算法。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/decrypt
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "CiphertextBlob" => (string) 待解密密文。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     *     "KeyId" => (string) 主密钥 KeyId；对称密钥可空，从 CiphertextBlob 自动识别；非对称必填。
     *     "EncryptionContext" => (string) 加密上下文，JSON Object。该参数内容会记录在日志中，请勿传入密码、密钥、令牌等敏感信息。
     *     "EncryptionAlgorithm" => (string) 解密算法。可选值：SYMMETRIC_DEFAULT、RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256；非对称密钥解密时必填或使用默认 RSAES_OAEP_SHA_256。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Plaintext" => (string) 解密后的明文，Base64 编码。
     *     "KeyId" => (string) 密钥资源长 ID。
     *     "EncryptionAlgorithm" => (string) 实际使用的解密算法。取值：SYMMETRIC_DEFAULT、RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256。
     * ]
     *
     * @return DecryptResponse
     * @throws UCloudException
     */
    public function decrypt(DecryptRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DecryptResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteAlias - 删除密钥别名。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/delete_alias
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "AliasName" => (string) 密钥别名，格式为 alias/name。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteAliasResponse
     * @throws UCloudException
     */
    public function deleteAlias(DeleteAliasRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteAliasResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeKey - 查看指定密钥的元数据。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/describe_key
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "KeyId" => (string) 密钥资源长 ID、ARN 或别名。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "KeyMetadata" => (object) 密钥元数据。[
     *         "ProjectId" => (string) 密钥所属项目的对外别名，格式为 org-xxx。该值由项目数字 ID 解析得到，可能因项目别名查询失败而为空。
     *         "KeyId" => (string) 密钥资源长 ID。
     *         "CreationDate" => (integer) 创建时间，Unix 时间戳。
     *         "Enabled" => (string) 是否启用。取值：true、false。
     *         "KeyUsage" => (array<string>) 密钥用途。取值：ENCRYPT_DECRYPT、SIGN_VERIFY、GENERATE_VERIFY_MAC、KEY_AGREEMENT。
     *         "KeyState" => (string) 密钥对外状态。取值：Enabled、Disabled、PendingDeletion、PendingImport、Unavailable。
     *         "Origin" => (string) 密钥材料来源。取值：UCLOUD_KMS、EXTERNAL；当前 CreateKey 仅支持 UCLOUD_KMS。
     *         "KeySpec" => (string) 密钥规格。取值：SYMMETRIC_DEFAULT、RSA_2048、RSA_3072、RSA_4096、ECC_NIST_P256、ECC_NIST_P384、ECC_NIST_P521、HMAC_256、HMAC_384、HMAC_512。
     *         "DeletionProtection" => (boolean) 是否开启删除保护。取值：true、false。
     *         "KeyVersion" => (integer) 当前密钥版本。
     *         "ResourceId" => (string) 密钥所属的 UKMS 实例资源 ID。
     *         "Description" => (string) 密钥描述。
     *         "DeletionDate" => (integer) 计划删除时间，Unix 时间戳。
     *         "OrganizationId" => (integer) 密钥所属组织的数字 ID，来源于密钥关联的资源交易记录。
     *     ]
     * ]
     *
     * @return DescribeKeyResponse
     * @throws UCloudException
     */
    public function describeKey(DescribeKeyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeKeyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DisableKey - 禁用指定密钥。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/disable_key
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "KeyId" => (string) 密钥 DB 数字 ID。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DisableKeyResponse
     * @throws UCloudException
     */
    public function disableKey(DisableKeyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DisableKeyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DisableKeyRotation - 关闭密钥自动轮转。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/disable_key_rotation
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "KeyId" => (string) 密钥 ID、ARN 或别名。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DisableKeyRotationResponse
     * @throws UCloudException
     */
    public function disableKeyRotation(DisableKeyRotationRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DisableKeyRotationResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * EnableKey - 启用指定密钥。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/enable_key
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "KeyId" => (string) 密钥 DB 数字 ID。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return EnableKeyResponse
     * @throws UCloudException
     */
    public function enableKey(EnableKeyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new EnableKeyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * EnableKeyRotation - 开启对称密钥自动轮转。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/enable_key_rotation
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     *     "KeyId" => (string) 密钥 ID、ARN 或别名。
     *     "RotationPeriodInDays" => (integer) 轮转周期，单位天。取值范围 1~2560，默认 365。仅 SYMMETRIC_DEFAULT 且 Origin=UCLOUD_KMS 的密钥支持轮转。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return EnableKeyRotationResponse
     * @throws UCloudException
     */
    public function enableKeyRotation(EnableKeyRotationRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new EnableKeyRotationResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * Encrypt - 使用指定密钥加密明文数据。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/encrypt
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "KeyId" => (string) 密钥资源长 ID、ARN 或别名。
     *     "Plaintext" => (string) 待加密明文，Base64 编码。
     *     "EncryptionContext" => (string) 加密上下文，JSON Object。该参数内容会记录在日志中，请勿传入密码、密钥、令牌等敏感信息。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     *     "EncryptionAlgorithm" => (string) 加密算法。可选值：SYMMETRIC_DEFAULT、RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256；对称密钥默认 SYMMETRIC_DEFAULT，RSA 默认 RSAES_OAEP_SHA_256。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "CiphertextBlob" => (string) 加密后的密文。
     *     "KeyId" => (string) 密钥资源长 ID。
     *     "EncryptionAlgorithm" => (string) 实际使用的加密算法。取值：SYMMETRIC_DEFAULT、RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256。
     * ]
     *
     * @return EncryptResponse
     * @throws UCloudException
     */
    public function encrypt(EncryptRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new EncryptResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GenerateDataKey - 生成数据密钥，返回明文和密文。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/generate_data_key
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "KeyId" => (string) 密钥资源长 ID、ARN 或别名。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     *     "KeySpec" => (string) 数据密钥规格。可选值：AES_256、AES_128；默认 AES_256。与 NumberOfBytes 二选一，同时填写时 NumberOfBytes 优先。
     *     "NumberOfBytes" => (integer) 生成数据密钥的字节长度，取值范围 1~1024。与 KeySpec 二选一，同时填写时本字段优先。
     *     "EncryptionContext" => (string) 加密上下文，JSON Object。该参数内容会记录在日志中，请勿传入密码、密钥、令牌等敏感信息。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Plaintext" => (string) 数据密钥明文，Base64 编码。
     *     "CiphertextBlob" => (string) 加密后的数据密钥。
     *     "KeyId" => (string) 加密该数据密钥的密钥资源长 ID。
     * ]
     *
     * @return GenerateDataKeyResponse
     * @throws UCloudException
     */
    public function generateDataKey(GenerateDataKeyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GenerateDataKeyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GenerateDataKeyPair - 创建数据密钥对
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/generate_data_key_pair
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "KeyId" => (string) 密钥ID
     *     "KeyPairSpec" => (string) 密钥类型
     *     "EncryptionContext" => (string) 加密上下文
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return GenerateDataKeyPairResponse
     * @throws UCloudException
     */
    public function generateDataKeyPair(GenerateDataKeyPairRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GenerateDataKeyPairResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GenerateDataKeyPairWithoutPlaintext - 创建数据密钥对（无明文返回）
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/generate_data_key_pair_without_plaintext
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "KeyId" => (string) 密钥ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return GenerateDataKeyPairWithoutPlaintextResponse
     * @throws UCloudException
     */
    public function generateDataKeyPairWithoutPlaintext(GenerateDataKeyPairWithoutPlaintextRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GenerateDataKeyPairWithoutPlaintextResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GenerateDataKeyWithoutPlaintext - 创建数据密钥（无明文），仅返回加密后的数据密钥。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/generate_data_key_without_plaintext
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "KeyId" => (string) 密钥资源长 ID、ARN 或别名。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     *     "KeySpec" => (string) 数据密钥规格。可选值：AES_256、AES_128；默认 AES_256。与 NumberOfBytes 二选一，同时填写时 NumberOfBytes 优先。
     *     "NumberOfBytes" => (integer) 生成数据密钥的字节长度，取值范围 1~1024。与 KeySpec 二选一，同时填写时本字段优先。
     *     "EncryptionContext" => (string) 加密上下文，JSON Object。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "CiphertextBlob" => (string) 加密后的数据密钥。
     *     "KeyId" => (string) 加密该数据密钥的密钥资源长 ID。
     * ]
     *
     * @return GenerateDataKeyWithoutPlaintextResponse
     * @throws UCloudException
     */
    public function generateDataKeyWithoutPlaintext(GenerateDataKeyWithoutPlaintextRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GenerateDataKeyWithoutPlaintextResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GenerateMac - 使用HMAC密钥管理服务（KMS）密钥和该密钥支持的MAC算法，为消息生成基于哈希的消息认证码（HMAC）。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/generate_mac
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "KeyId" => (string) 密钥ID
     *     "MacMessage" => (string) 待哈希的消息。
     *     "MacAlgorithm" => (string) 用于生成消息认证码的 MAC 算法。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return GenerateMacResponse
     * @throws UCloudException
     */
    public function generateMac(GenerateMacRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GenerateMacResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GenerateRandom - 生成随机数
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/generate_random
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NumberOfBytes" => (integer) 随机数长度，最大1024
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return GenerateRandomResponse
     * @throws UCloudException
     */
    public function generateRandom(GenerateRandomRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GenerateRandomResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetKeyRotationStatus - 查询密钥自动轮转状态。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/get_key_rotation_status
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "KeyId" => (string) 密钥资源长 ID、ARN 或别名。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "KeyRotationEnabled" => (boolean) 是否开启自动轮转。取值：true、false。
     *     "KeyId" => (string) 密钥资源长 ID。
     *     "RotationPeriodInDays" => (integer) 轮转周期，单位天；未开启时返回 0。
     *     "NextRotationDate" => (integer) 下次轮转时间，Unix 时间戳。
     *     "OnDemandRotationStartDate" => (integer) 按需轮转开始时间，Unix 时间戳。
     * ]
     *
     * @return GetKeyRotationStatusResponse
     * @throws UCloudException
     */
    public function getKeyRotationStatus(GetKeyRotationStatusRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetKeyRotationStatusResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetPublicKey - 获取非对称密钥的公钥。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/get_public_key
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "KeyId" => (string) 密钥 ID、ARN 或别名。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "KeyId" => (string) 密钥 ID。
     *     "KmsPublicKey" => (string) PEM 或 DER 编码的公钥。
     *     "KeySpec" => (string) 密钥规格。取值：SYMMETRIC_DEFAULT、RSA_2048、RSA_3072、RSA_4096、ECC_NIST_P256、ECC_NIST_P384、ECC_NIST_P521、HMAC_256、HMAC_384、HMAC_512。
     *     "KeyUsage" => (array<string>) 密钥用途。取值：ENCRYPT_DECRYPT、SIGN_VERIFY、GENERATE_VERIFY_MAC、KEY_AGREEMENT。
     *     "SigningAlgorithms" => (array<string>) 支持的签名算法列表。取值范围：RSASSA_PSS_SHA_256、RSASSA_PSS_SHA_384、RSASSA_PSS_SHA_512、RSASSA_PKCS1_V1_5_SHA_256、RSASSA_PKCS1_V1_5_SHA_384、RSASSA_PKCS1_V1_5_SHA_512、ECDSA_SHA_256、ECDSA_SHA_384、ECDSA_SHA_512。
     *     "EncryptionAlgorithms" => (array<string>) 支持的加密算法列表。取值范围：RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256。
     * ]
     *
     * @return GetPublicKeyResponse
     * @throws UCloudException
     */
    public function getPublicKey(GetPublicKeyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetPublicKeyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListAliases - 获取 UKMS 实例下的别名列表。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/list_aliases
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     *     "KeyId" => (string) 可选：筛选指定密钥资源长 ID 的别名。
     *     "Offset" => (integer) 列表起始位置偏移量。
     *     "Limit" => (integer) 返回数据长度。
     *     "Alias" => (string) 按完整别名（含 alias/ 前缀）进行子串模糊匹配
     *     "OrderBy" => (string) 排序字段
     *     "Sort" => (string) 排序方向，默认 desc
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 别名总数。
     *     "Aliases" => (array<object>) 别名列表，每项为 AliasInfo。[
     *         [
     *             "AliasName" => (string) 别名，含 alias/ 前缀。
     *             "TargetKeyId" => (string) 别名指向的密钥资源长 ID。
     *             "CreationDate" => (integer) 创建时间，Unix 时间戳。
     *             "LastUpdatedDate" => (integer) 最后更新时间，Unix 时间戳。
     *         ]
     *     ]
     * ]
     *
     * @return ListAliasesResponse
     * @throws UCloudException
     */
    public function listAliases(ListAliasesRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListAliasesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListKeys - 查询用户的主密钥信息列表。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/list_keys
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     *     "Alias" => (string) 按密钥 ID 或别名模糊过滤。
     *     "Offset" => (integer) 列表起始位置偏移量。
     *     "Limit" => (integer) 返回数据长度。最大1000
     *     "Status" => (string) 状态筛选：Active、Deactivated、PendingDeletion
     *     "OrderBy" => (string) 排序字段
     *     "Sort" => (string) 排序方向，默认 desc
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (array<object>) 密钥信息数组，每项为 DEK/ListKeys item。[
     *         [
     *             "ProjectId" => (string) 密钥所属项目的对外别名，格式为 org-xxx。该值由项目数字 ID 解析得到，可能因项目别名查询失败而为空。
     *             "KeyId" => (string) 对外主密钥 ID（ukms_key_info.key_id）。
     *             "KeySpec" => (string) 密钥规格。取值：SYMMETRIC_DEFAULT、RSA_2048、RSA_3072、RSA_4096、ECC_NIST_P256、ECC_NIST_P384、ECC_NIST_P521、HMAC_256、HMAC_384、HMAC_512。
     *             "KeyUsage" => (array<string>) 按 KeySpec 派生的密钥用途。取值：ENCRYPT_DECRYPT、SIGN_VERIFY、GENERATE_VERIFY_MAC、KEY_AGREEMENT。
     *             "Origin" => (string) 密钥来源，由 Origin 派生。取值：ucloud、import。当前 CreateKey 仅支持 ucloud。
     *             "Status" => (string) 数据库密钥状态。常见取值：Active、Deactivated、PendingDeletion。
     *             "CreatedTime" => (integer) 创建时间，Unix 时间戳。
     *             "UpdateTime" => (integer) 更新时间，Unix 时间戳。
     *             "KeyRotationEnabled" => (boolean) 是否已开启自动轮转；未配置或已关闭均为 false
     *             "RotationPeriodInDays" => (integer) 自动轮转周期(天)；未开启时为 0
     *             "ResourceId" => (string) 密钥所属的 UKMS 实例资源 ID。
     *             "Description" => (string) 密钥描述。
     *             "PlanDeleteTime" => (integer) 计划删除时间，Unix 时间戳。
     *             "NextRotationDate" => (integer) 下次自动轮转时间（Unix 时间戳，秒）；仅在已开启自动轮转时返回。
     *             "OrganizationId" => (integer) 密钥所属组织的数字 ID，来源于密钥关联的资源交易记录。
     *         ]
     *     ]
     *     "TotalCount" => (integer) 符合条件的总数，不同于 Limit。
     * ]
     *
     * @return ListKeysResponse
     * @throws UCloudException
     */
    public function listKeys(ListKeysRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListKeysResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListScheduleDeletionKeys - 获取计划删除密钥列表，调用ScheduleKeyDeletion命令后进入此列表， 默认30天后正式删除。正式删除前可调用CancelScheduleKeyDeletion恢复
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/list_schedule_deletion_keys
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Offset" => (integer) 输出列表起始位置，默认从0开始
     *     "Limit" => (integer) 输出列表数量，默认返回200个
     *     "OrderBy" => (string) 列表排序方式, 可选项: "-created_time", "created_time","plan_delete_time","-plan_delete_time";默认按-plan_delete_time 计划删除时间升序返回
     *     "Alias" => (string) 按密钥 ID 或别名模糊过滤
     *     "ResourceId" => (string) UKMS 实例资源 ID
     *     "Sort" => (string) 排序方向，默认 desc
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Objects" => (array<object>) 主密钥信息组成的列表[
     *         [
     *             "KeyId" => (string) CMK 的唯一标识符
     *             "KeyType" => (string) 密钥类型，如RSA、EC、DES
     *             "CreatedTime" => (integer) 创建时间
     *             "Alias" => (string) 别名，与CMK一一对应
     *             "Status" => (string) 密钥状态 "Pre-Active", "Active", "Deactivated", "Compromised", "Destroyed", "Destroyed Compromised"
     *             "UpdateTime" => (integer) 更新时间
     *             "Description" => (string) 对密钥的描述说明
     *             "PlanDeleteTime" => (integer) 计划删除时间 时间戳
     *         ]
     *     ]
     *     "Status" => (string) 操作结果
     *     "RequestUuid" => (string) 请求唯一标识符
     *     "TotalCount" => (integer) 符合条件的总数, 不同于Limit
     * ]
     *
     * @return ListScheduleDeletionKeysResponse
     * @throws UCloudException
     */
    public function listScheduleDeletionKeys(ListScheduleDeletionKeysRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListScheduleDeletionKeysResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RotateKeyOnDemand - 立即触发一次密钥轮转。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/rotate_key_on_demand
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "KeyId" => (string) 密钥 ID、ARN 或别名。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "KeyId" => (string) 密钥 ID。
     * ]
     *
     * @return RotateKeyOnDemandResponse
     * @throws UCloudException
     */
    public function rotateKeyOnDemand(RotateKeyOnDemandRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RotateKeyOnDemandResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ScheduleKeyDeletion - 计划删除指定密钥。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/schedule_key_deletion
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "KeyId" => (string) 密钥 DB 数字 ID。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     *     "DeleteDay" => (integer) 删除等待天数，取值范围为 7~30 天；未填写时默认为 30 天。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ScheduleKeyDeletionResponse
     * @throws UCloudException
     */
    public function scheduleKeyDeletion(ScheduleKeyDeletionRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ScheduleKeyDeletionResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * Sign - 使用非对称密钥对消息或消息摘要签名。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/sign
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "KeyId" => (string) 密钥资源长 ID、ARN 或别名。
     *     "SigningMessage" => (string) 待签名消息，Base64 编码，最大 4096 字节。
     *     "SigningAlgorithm" => (string) 签名算法。可选值：RSASSA_PSS_SHA_256、RSASSA_PSS_SHA_384、RSASSA_PSS_SHA_512、RSASSA_PKCS1_V1_5_SHA_256、RSASSA_PKCS1_V1_5_SHA_384、RSASSA_PKCS1_V1_5_SHA_512、ECDSA_SHA_256、ECDSA_SHA_384、ECDSA_SHA_512；须与密钥 KeySpec 匹配。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     *     "MessageType" => (string) 消息类型。可选值：RAW、DIGEST；默认 RAW。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SignatureResult" => (string) 签名结果，Base64 编码。
     *     "KeyId" => (string) 密钥资源长 ID。
     *     "SigningAlgorithm" => (string) 实际使用的签名算法。取值：RSASSA_PSS_SHA_256、RSASSA_PSS_SHA_384、RSASSA_PSS_SHA_512、RSASSA_PKCS1_V1_5_SHA_256、RSASSA_PKCS1_V1_5_SHA_384、RSASSA_PKCS1_V1_5_SHA_512、ECDSA_SHA_256、ECDSA_SHA_384、ECDSA_SHA_512。
     * ]
     *
     * @return SignResponse
     * @throws UCloudException
     */
    public function sign(SignRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SignResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateAlias - 将别名更新到另一个密钥。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/update_alias
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "AliasName" => (string) 密钥别名，格式为 alias/name。
     *     "KeyId" => (string) 密钥 ID、ARN 或别名。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateAliasResponse
     * @throws UCloudException
     */
    public function updateAlias(UpdateAliasRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateAliasResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateKeyDescription - 更新指定密钥的描述信息。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/update_key_description
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "KeyId" => (string) 密钥资源长 ID、ARN 或别名。
     *     "Description" => (string) 新的密钥描述，最多 8192 字符；空字符串表示清空描述。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Status" => (string) 返回状态。
     *     "RequestUuid" => (string) 此次请求唯一标识符。
     * ]
     *
     * @return UpdateKeyDescriptionResponse
     * @throws UCloudException
     */
    public function updateKeyDescription(UpdateKeyDescriptionRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateKeyDescriptionResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * Verify - 使用非对称密钥验证签名。
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/verify
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子账号必须填写。
     *     "KeyId" => (string) 密钥 ID、ARN 或别名。
     *     "SigningMessage" => (string) 待验签的消息或消息摘要，Base64 编码。
     *     "SignatureResult" => (string) 待验证的签名，Base64 编码。
     *     "SigningAlgorithm" => (string) 签名时使用的算法。可选值：RSASSA_PSS_SHA_256、RSASSA_PSS_SHA_384、RSASSA_PSS_SHA_512、RSASSA_PKCS1_V1_5_SHA_256、RSASSA_PKCS1_V1_5_SHA_384、RSASSA_PKCS1_V1_5_SHA_512、ECDSA_SHA_256、ECDSA_SHA_384、ECDSA_SHA_512；须与密钥 KeySpec 匹配。
     *     "ResourceId" => (string) UKMS 实例资源 ID。
     *     "MessageType" => (string) 消息类型。可选值：RAW、DIGEST；默认 RAW。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "KeyId" => (string) 密钥 ID。
     *     "SignatureValid" => (boolean) 签名是否有效。
     *     "SigningAlgorithm" => (string) 使用的签名算法。取值：RSASSA_PSS_SHA_256、RSASSA_PSS_SHA_384、RSASSA_PSS_SHA_512、RSASSA_PKCS1_V1_5_SHA_256、RSASSA_PKCS1_V1_5_SHA_384、RSASSA_PKCS1_V1_5_SHA_512、ECDSA_SHA_256、ECDSA_SHA_384、ECDSA_SHA_512。
     * ]
     *
     * @return VerifyResponse
     * @throws UCloudException
     */
    public function verify(VerifyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new VerifyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * VerifyMac - 验证签名
     *
     * See also: https://docs.ucloud.cn/api/ukms-api/verify_mac
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "KeyId" => (string) 密钥ID
     *     "MacMessage" => (string) 用于验证的消息。请输入与生成 HMAC 时所用消息相同的消息。
     *     "Mac" => (string) 要验证的 HMAC。请输入由 GenerateMac 操作生成的 HMAC，前提是您指定的消息、HMAC KMS 密钥和 MAC 算法与此请求中指定的值相同。
     *     "MacAlgorithm" => (string) 验证过程中将使用的 MAC 算法。请输入与计算 HMAC 时相同的 MAC 算法。此算法必须受 KeyId 参数标识的 HMAC KMS 密钥支持。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return VerifyMacResponse
     * @throws UCloudException
     */
    public function verifyMac(VerifyMacRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new VerifyMacResponse($resp->toArray(), $resp->getRequestId());
    }
}
