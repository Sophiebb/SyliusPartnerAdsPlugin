<?php

declare(strict_types=1);

namespace Setono\SyliusPartnerAdsPlugin\Notifier;

interface NotifierInterface
{
    /**
     * @param string $orderId
     * @param string $orderTotal In US format, i.e. 19381 should be '193.81'
     * @param string $partnerId
     * @param string $ip
     */
    public function notify(string $orderId, string $orderTotal, string $partnerId, string $ip): void;
}