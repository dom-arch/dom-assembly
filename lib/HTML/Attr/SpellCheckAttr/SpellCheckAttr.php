<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class SpellCheckAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'spellcheck';
    }
}