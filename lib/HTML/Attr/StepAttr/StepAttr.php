<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class StepAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'step';
    }
}