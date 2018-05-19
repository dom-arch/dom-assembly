<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class SandboxAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'sandbox',
            VALUE_ALLOW_FORMS = 'allow-forms',
            VALUE_ALLOW_MODALS = 'allow-modals',
            VALUE_ALLOW_ORIENTATION_LOCK = 'allow-orientation-lock',
            VALUE_ALLOW_POINTER_LOCK = 'allow-pointer-lock',
            VALUE_ALLOW_POPUPS = 'allow-popups',
            VALUE_ALLOW_POPUPS_TO_ESCAPE = 'allow-popups-to-escape-sandbox',
            VALUE_ALLOW_PRESENTATION = 'allow-presentation',
            VALUE_ALLOW_SAME_ORIGIN = 'allow-same-origin',
            VALUE_ALLOW_SCRIPTS = 'allow-scripts',
            VALUE_ALLOW_TOP_NAVIGATION = 'allow-top-navigation',
            VALUE_ALLOW_TOP_NAVIGATION_BY_USER = 'allow-top-navigation-by-user-activation';
    }
}