<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\NameAttr\NameTrait;
    use DOMAssembly\HTML\Attr\ValueAttr\ValueTrait;

    class ParamTag
        extends VoidTag
    {
        use NameTrait;
        use ValueTrait;

        const NAME = 'param';
    }
}