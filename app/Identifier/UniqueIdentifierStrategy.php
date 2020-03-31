<?php

namespace MediasService\Identifier;

use Ramsey\Uuid\Uuid;

/**
 * Class UniqueIdentifierStrategy.
 *
 * @package MediasService\Identifier
 * @author Maxime Malgorn <maxime.malgorn@laposte.net>
 * @since 1.0.0
 */
class UniqueIdentifierStrategy implements IdentifierStrategy
{
    /**
     * @inheritDoc
     */
    public function generate()
    {
        return Uuid::uuid4()->toString();
    }

    /**
     * @inheritDoc
     */
    public function validate($identifier)
    {
        return Uuid::isValid($identifier);
    }
}
