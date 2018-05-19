<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr\AccessKeyAttr\AccessKeyTrait;
    use DOMAssembly\HTML\Attr\AltAttr\AltTrait;
    use DOMAssembly\HTML\Attr\ClassAttr\ClassTrait;
    use DOMAssembly\HTML\Attr\ContentEditableAttr\ContentEditableTrait;
    use DOMAssembly\HTML\Attr\DataSetAttr\DataSetTrait;
    use DOMAssembly\HTML\Attr\DirAttr\DirTrait;
    use DOMAssembly\HTML\Attr\DraggableAttr\DraggableTrait;
    use DOMAssembly\HTML\Attr\HiddenAttr\HiddenTrait;
    use DOMAssembly\HTML\Attr\IdAttr\IdTrait;
    use DOMAssembly\HTML\Attr\ItemIdAttr\ItemIdTrait;
    use DOMAssembly\HTML\Attr\ItemPropAttr\ItemPropTrait;
    use DOMAssembly\HTML\Attr\ItemRefAttr\ItemRefTrait;
    use DOMAssembly\HTML\Attr\ItemScopeAttr\ItemScopeTrait;
    use DOMAssembly\HTML\Attr\ItemTypeAttr\ItemTypeTrait;
    use DOMAssembly\HTML\Attr\LangAttr\LangTrait;
    use DOMAssembly\HTML\Attr\SpellCheckAttr\SpellCheckTrait;
    use DOMAssembly\HTML\Attr\TabIndexAttr\TabIndexTrait;
    use DOMAssembly\HTML\Attr\TitleAttr\TitleTrait;
    use DOMAssembly\HTML\Attr\TranslateAttr\TranslateTrait;

    trait CommonTrait
    {
        use AccessKeyTrait;
        use AltTrait;
        use ClassTrait;
        use ContentEditableTrait;
        use DataSetTrait;
        use DirTrait;
        use DraggableTrait;
        use HiddenTrait;
        use IdTrait;
        use ItemIdTrait;
        use ItemPropTrait;
        use ItemRefTrait;
        use ItemScopeTrait;
        use ItemTypeTrait;
        use LangTrait;
        use SpellCheckTrait;
        use TabIndexTrait;
        use TitleTrait;
        use TranslateTrait;
    }
}