<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\PhrasingInterface;

    class BrTag
        extends VoidTag
        implements PhrasingInterface
    {
        const NAME = 'br';
    }
}