<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\NameAttr\NameTrait;

    class MapTag
        extends BlockContainerTag
    {
        use NameTrait;

        const NAME = 'map';
    }
}