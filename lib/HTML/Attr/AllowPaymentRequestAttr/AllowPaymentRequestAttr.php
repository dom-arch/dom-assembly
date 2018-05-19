<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class AllowPaymentRequestAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'allowpaymentrequest',
            VALUE_DEFAULT = 'false';
    }
}