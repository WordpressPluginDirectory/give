<?php

declare(strict_types=1);

namespace Give\Vendors\StellarWP\AdminNotices\Contracts;

use Give\Vendors\StellarWP\AdminNotices\AdminNotice;
use Give\Vendors\StellarWP\AdminNotices\Exceptions\NotificationCollisionException;

interface NotificationsRegistrarInterface
{
    /**
     * Adds a notice to the register and throws a NotificationCollisionException if a notice with the same ID already exists.
     *
     * @since 1.0.0
     *
     * @throws NotificationCollisionException
     */
    public function registerNotice(AdminNotice $notice): void;

    /**
     * Removes a notice from the register.
     *
     * @since 1.0.0
     */
    public function unregisterNotice(string $id): void;

    /**
     * Returns all the notices in the register.
     *
     * @since 1.0.0
     *
     * @return AdminNotice[]
     */
    public function getNotices(): array;
}
