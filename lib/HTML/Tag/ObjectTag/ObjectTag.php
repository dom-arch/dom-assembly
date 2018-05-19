<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\DataAttr\DataTrait;
    use DOMAssembly\HTML\Attr\FormAttr\FormTrait;
    use DOMAssembly\HTML\Attr\HeightAttr\HeightTrait;
    use DOMAssembly\HTML\Attr\NameAttr\NameTrait;
    use DOMAssembly\HTML\Attr\TypeAttr\TypeTrait;
    use DOMAssembly\HTML\Attr\TypeMustMatchAttr\TypeMustMatchTrait;
    use DOMAssembly\HTML\Attr\UseMapAttr\UseMapTrait;
    use DOMAssembly\HTML\Attr\WidthAttr\WidthTrait;

    class ObjectTag
        extends InlineContainerTag
    {
        use DataTrait;
        use FormTrait;
        use HeightTrait;
        use NameTrait;
        use TypeTrait;
        use TypeMustMatchTrait;
        use UseMapTrait;
        use WidthTrait;

        const NAME = 'object';
    }
}