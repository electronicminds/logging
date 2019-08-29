<?php

namespace Minds\Monolog;

use Monolog\Formatter\LineFormatter;

/**
 * @codeCoverageIgnore
 */
class UidFormatter extends LineFormatter
{
    const FORMAT = "[%datetime%] [%extra.uid%] %channel%.%level_name%: %message% %context% %extra%\n";

    /**
     * UidFormatter constructor.
     *
     * @param null $dateFormat
     * @param bool $allowInlineLineBreaks
     * @param bool $ignoreEmptyContextAndExtra
     */
    public function __construct($dateFormat = null, $allowInlineLineBreaks = false, $ignoreEmptyContextAndExtra = false)
    {
        parent::__construct(self::FORMAT, $dateFormat, $allowInlineLineBreaks, $ignoreEmptyContextAndExtra);
    }
}