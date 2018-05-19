<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\NameAttr\NameTrait;

    class SlotTag
        extends BlockContainerTag
    {
        use NameTrait;

        const NAME = 'slot';
    }
}