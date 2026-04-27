<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace Spryker\Zed\SecurityOauthUserExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ResourceOwnerTransfer;
use Generated\Shared\Transfer\UserTransfer;

/**
 * Use this plugin to provide custom user resolution strategies for OAuth authentication.
 * Implement this interface to resolve a Backoffice user based on the OAuth resource owner data.
 */
interface OauthUserAuthenticationStrategyPluginInterface
{
    /**
     * Specification:
     * - Returns true if this plugin can handle the given resource owner.
     * - Typically checks that required fields (e.g. provider, external ID) are present.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ResourceOwnerTransfer $resourceOwnerTransfer
     *
     * @return bool
     */
    public function isApplicable(ResourceOwnerTransfer $resourceOwnerTransfer): bool;

    /**
     * Specification:
     * - Resolves a Backoffice user based on the OAuth resource owner data.
     * - Returns null when no matching user is found.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ResourceOwnerTransfer $resourceOwnerTransfer
     *
     * @return \Generated\Shared\Transfer\UserTransfer|null
     */
    public function resolveOauthUser(ResourceOwnerTransfer $resourceOwnerTransfer): ?UserTransfer;
}
