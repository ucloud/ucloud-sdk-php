<?php

namespace UCloud\Core\Credential;

interface CredentialInterface
{
    /**
     * Generate a signature string by arguments
     *
     * @param array $args Arguments
     * @return string Signature
     */
    public function verifyAc(array $args): string;

    /**
     * Add additional fields to arguments
     *
     * Additional fields:
     *
     * - Signature
     * - PublicKey
     *
     * @param array $args Arguments
     * @return array Arguments with signature and keys
     */
    public function sign(array $args): array;
}
