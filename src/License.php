<?php declare(strict_types = 1);


namespace Dominikb\ComposerLicenseChecker;


use DateTimeInterface;

class License
{
    /** @var string */
    protected $shortName;
    /** @var string[] */
    protected $can;
    /** @var string[] */
    protected $cannot;
    /** @var string[] */
    protected $must;
    /** @var string */
    protected $source;
    /** @var DateTimeInterface */
    protected $createdAt;

    /**
     * @return string
     */
    public function getShortName(): string
    {
        return $this->shortName;
    }

    /**
     * @param string $shortName
     *
     * @return License
     */
    public function setShortName(string $shortName): License
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getCan(): array
    {
        return $this->can;
    }

    /**
     * @param string[] $can
     *
     * @return License
     */
    public function setCan(array $can): License
    {
        $this->can = $can;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getCannot(): array
    {
        return $this->cannot;
    }

    /**
     * @param string[] $cannot
     *
     * @return License
     */
    public function setCannot(array $cannot): License
    {
        $this->cannot = $cannot;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getMust(): array
    {
        return $this->must;
    }

    /**
     * @param string[] $must
     *
     * @return License
     */
    public function setMust(array $must): License
    {
        $this->must = $must;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     *
     * @return License
     */
    public function setSource(string $source): License
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param DateTimeInterface $createdAt
     *
     * @return License
     */
    public function setCreatedAt(DateTimeInterface $createdAt): License
    {
        $this->createdAt = $createdAt;

        return $this;
    }

}
