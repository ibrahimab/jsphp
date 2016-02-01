<?php

namespace Jsphp;

/**
 * @author  Ibrahim Abdullah <ibrahim@ingeniousdev.nl>
 */
class Jsphp
{
    const VERSION = '@package_version';

    public function toJson()
    {
        return json_encode([], true);
    }
}
