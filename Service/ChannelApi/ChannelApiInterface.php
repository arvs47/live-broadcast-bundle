<?php
declare(strict_types=1);

/**
 * This file is part of martin1982/livebroadcastbundle which is released under MIT.
 * See https://opensource.org/licenses/MIT for full license details.
 */
namespace Martin1982\LiveBroadcastBundle\Service\ChannelApi;

use Martin1982\LiveBroadcastBundle\Entity\Channel\AbstractChannel;
use Martin1982\LiveBroadcastBundle\Entity\Channel\PlanableChannelInterface;
use Martin1982\LiveBroadcastBundle\Entity\LiveBroadcast;
use Martin1982\LiveBroadcastBundle\Exception\LiveBroadcastOutputException;

/**
 * Interface ChannelApiInterface
 */
interface ChannelApiInterface
{
    /**
     * @param LiveBroadcast   $broadcast
     * @param AbstractChannel $channel
     */
    public function createLiveEvent(LiveBroadcast $broadcast, AbstractChannel $channel);

    /**
     * @param LiveBroadcast   $broadcast
     * @param AbstractChannel $channel
     */
    public function updateLiveEvent(LiveBroadcast $broadcast, AbstractChannel $channel);

    /**
     * @param LiveBroadcast   $broadcast
     * @param AbstractChannel $channel
     *
     * @throws LiveBroadcastOutputException
     */
    public function removeLiveEvent(LiveBroadcast $broadcast, AbstractChannel $channel);

    /**
     * @param PlanableChannelInterface $channel
     * @param string|int               $externalId
     */
    public function sendEndSignal(PlanableChannelInterface $channel, $externalId);
}
