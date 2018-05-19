<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class ReferrerPolicyAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'referrerpolicy',
            VALUE_NO_REFERRER = 'no-referrer',
            VALUE_NO_REFERRER_WHEN_DOWNGRADE = 'no-referrer-when-downgrade',
            VALUE_ORIGIN = 'origin',
            VALUE_ORIGIN_WHEN_CROSS_ORIGIN = 'origin-when-cross-origin',
            VALUE_UNSAFE_URL = 'unsafe-url',
            VALUE_DEFAULT = ReferrerPolicyAttr::VALUE_NO_REFERRER_WHEN_DOWNGRADE;
    }
}