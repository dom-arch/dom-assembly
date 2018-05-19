<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\DisabledAttr\DisabledTrait;
    use DOMAssembly\HTML\Attr\FormAttr\FormTrait;
    use DOMAssembly\HTML\Attr\NameAttr\NameTrait;

    class FieldsetTag
        extends BlockContainerTag
    {
        use DisabledTrait;
        use FormTrait;
        use NameTrait;

        const NAME = 'fieldset';
    }
}