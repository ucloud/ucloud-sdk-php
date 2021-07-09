<?php

namespace UCloud\Core\Credential;

class Credential implements CredentialInterface
{
    /**
     * Public key
     *
     * @var string
     */
    private string $publicKey;

    /**
     * Private key
     *
     * @var string
     */
    private string $privateKey;

    /**
     * Credential constructor.
     *
     * @param array $args arguments
     */
    public function __construct(array $args)
    {
        $this->setPrivateKey($args["privateKey"]);
        $this->setPublicKey($args["publicKey"]);
    }

    /**
     * Generate signature string from an array
     *
     * @param array $args arguments to generate signature
     * @return string the signature
     */
    public function verifyAc(array $args): string
    {
        $args['PublicKey'] = $this->getPublicKey();
        ksort($args);
        $s = "";
        foreach ($args as $key => $value) {
            $s .= $key;
            $s .= $value;
        }
        $s .= $this->getPrivateKey();
        return sha1($s);
    }

    /**
     * Attach signature and additional key fields to an array
     *
     * @param array $args arguments to by attached
     * @return array array with signature and keys
     */
    public function sign(array $args): array
    {
        $args['Signature'] = $this->verifyAc($args);
        $args['PublicKey'] = $this->getPublicKey();
        return $args;
    }

    /**
     * Get public key
     *
     * @return string
     */
    public function getPublicKey(): string
    {
        return $this->publicKey;
    }

    /**
     * Set public key
     *
     * @param string $publicKey Public key
     */
    public function setPublicKey(string $publicKey): void
    {
        $this->publicKey = $publicKey;
    }

    /**
     * Get private key
     *
     * @return string
     */
    public function getPrivateKey(): string
    {
        return $this->privateKey;
    }

    /**
     * Set private key
     *
     * @param string $privateKey Private key
     */
    public function setPrivateKey(string $privateKey): void
    {
        $this->privateKey = $privateKey;
    }
}
