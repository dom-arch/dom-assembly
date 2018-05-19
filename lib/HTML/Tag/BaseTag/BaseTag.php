<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\HrefAttr\HrefTrait;
    use DOMAssembly\HTML\Attr\TargetAttr\TargetTrait;

    class BaseTag
        extends VoidTag
    {
        use HrefTrait;
        use TargetTrait;

        const NAME = 'base';
    }
}