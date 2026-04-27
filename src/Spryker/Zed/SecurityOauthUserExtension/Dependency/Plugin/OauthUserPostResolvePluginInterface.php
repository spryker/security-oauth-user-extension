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
 * Use this plugin to execute side effects after a Backoffice user has been resolved via OAuth.
 * Typical use cases: persisting the identity link between the OAuth provider and the local user.
 */
interface OauthUserPostResolvePluginInterface
{
    /**
     * Specification:
     * - Executed after a Backoffice user has been successfully resolved via OAuth.
     * - Receives the resolved user and the raw resource owner data from the OAuth provider.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
     * @param \Generated\Shared\Transfer\ResourceOwnerTransfer $resourceOwnerTransfer
     *
     * @return void
     */
    public function postResolve(UserTransfer $userTransfer, ResourceOwnerTransfer $resourceOwnerTransfer): void;
}
