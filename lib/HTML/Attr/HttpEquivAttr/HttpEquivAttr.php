<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\TranslatableNodeTrait;

    class HttpEquivAttr
        extends Attr
    {
        use TranslatableNodeTrait;

        const
            NAME = 'http-equiv',
            VALUE_CONTENT_SECURITY_POLICY = 'content-security-policy',
            VALUE_CONTENT_TYPE = 'content-type',
            VALUE_DEFAULT_STYLE = 'default-style',
            VALUE_REFRESH = 'refresh',
            VALUE_X_UA_COMPATIBLE = 'x-ua-compatible';
    }
}