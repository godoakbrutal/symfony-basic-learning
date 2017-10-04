<?php

namespace Toro\RegisterBundle\Model;

use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;

interface EventInterface extends ResourceInterface, TimestampableInterface
{
    /**
     * @return string
     */
    public function getName(): ?string;

    /**
     * @param string $name
     */
    public function setName(?string $name);

    /**
     * @return string
     */
    public function getLocation(): ?string;

    /**
     * @param string $location
     */
    public function setLocation(?string $location);

    /**
     * @return \DateTime
     */
    public function getStartTime(): ?\DateTime;

    /**
     * @param \DateTime $startTime
     */
    public function setStartTime(?\DateTime $startTime);

    /**
     * @return \DateTime
     */
    public function getEndTime(): ?\DateTime;

    /**
     * @param \DateTime $endTime
     */
    public function setEndTime(?\DateTime $endTime);
}
