<?php

namespace Toro\RegisterBundle\Model;

use Sylius\Component\Resource\Model\TimestampableTrait;

class Event implements EventInterface
{
    use TimestampableTrait;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $location;

    /**
     * @var \DateTime
     */
    protected $startTime;

    /**
     * @var \DateTime
     */
    protected $endTime;

    /**
     * {@inheritdoc}
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * {@inheritdoc}
     */
    public function setLocation(?string $location)
    {
        $this->location = $location;
    }

    /**
     * {@inheritdoc}
     */
    public function getStartTime(): ?\DateTime
    {
        return $this->startTime;
    }

    /**
     * {@inheritdoc}
     */
    public function setStartTime(?\DateTime $startTime)
    {
        $this->startTime = $startTime;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndTime(): ?\DateTime
    {
        return $this->endTime;
    }

    /**
     * {@inheritdoc}
     */
    public function setEndTime(?\DateTime $endTime)
    {
        $this->endTime = $endTime;
    }
}
