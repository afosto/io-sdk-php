<?php

namespace Afosto\Sdk\Model;

class IamJwk
{
    /**
     * 
     *
     * @var string
     */
    protected $alg;
    /**
     * 
     *
     * @var string
     */
    protected $kty;
    /**
     * 
     *
     * @var string
     */
    protected $use;
    /**
     * 
     *
     * @var string[]
     */
    protected $x5c;
    /**
     * 
     *
     * @var string
     */
    protected $;
    /**
     * 
     *
     * @var string
     */
    protected $e;
    /**
     * 
     *
     * @var string
     */
    protected $kid;
    /**
     * 
     *
     * @var string
     */
    protected $x5t;
    /**
     * 
     *
     * @return string|null
     */
    public function getAlg() : ?string
    {
        return $this->alg;
    }
    /**
     * 
     *
     * @param string|null $alg
     *
     * @return self
     */
    public function setAlg(?string $alg) : self
    {
        $this->alg = $alg;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getKty() : ?string
    {
        return $this->kty;
    }
    /**
     * 
     *
     * @param string|null $kty
     *
     * @return self
     */
    public function setKty(?string $kty) : self
    {
        $this->kty = $kty;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUse() : ?string
    {
        return $this->use;
    }
    /**
     * 
     *
     * @param string|null $use
     *
     * @return self
     */
    public function setUse(?string $use) : self
    {
        $this->use = $use;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getX5c() : ?array
    {
        return $this->x5c;
    }
    /**
     * 
     *
     * @param string[]|null $x5c
     *
     * @return self
     */
    public function setX5c(?array $x5c) : self
    {
        $this->x5c = $x5c;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function get() : ?string
    {
        return $this->;
    }
    /**
     * 
     *
     * @param string|null $
     *
     * @return self
     */
    public function set(?string $) : self
    {
        $this-> = $;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getE() : ?string
    {
        return $this->e;
    }
    /**
     * 
     *
     * @param string|null $e
     *
     * @return self
     */
    public function setE(?string $e) : self
    {
        $this->e = $e;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getKid() : ?string
    {
        return $this->kid;
    }
    /**
     * 
     *
     * @param string|null $kid
     *
     * @return self
     */
    public function setKid(?string $kid) : self
    {
        $this->kid = $kid;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getX5t() : ?string
    {
        return $this->x5t;
    }
    /**
     * 
     *
     * @param string|null $x5t
     *
     * @return self
     */
    public function setX5t(?string $x5t) : self
    {
        $this->x5t = $x5t;
        return $this;
    }
}