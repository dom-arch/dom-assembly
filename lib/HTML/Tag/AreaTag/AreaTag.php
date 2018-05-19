<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\AcceptAttr\AcceptTrait;
    use DOMAssembly\HTML\Attr\CoordsAttr\CoordsTrait;
    use DOMAssembly\HTML\Attr\DownloadAttr\DownloadTrait;
    use DOMAssembly\HTML\Attr\HrefAttr\HrefTrait;
    use DOMAssembly\HTML\Attr\HrefLangAttr\HrefLangTrait;
    use DOMAssembly\HTML\Attr\MediaAttr\MediaTrait;
    use DOMAssembly\HTML\Attr\ReferrerPolicyAttr\ReferrerPolicyTrait;
    use DOMAssembly\HTML\Attr\RelAttr\RelClickableTrait;
    use DOMAssembly\HTML\Attr\TargetAttr\TargetTrait;

    class AreaTag
        extends VoidTag
    {
        use AcceptTrait;
        use CoordsTrait;
        use DownloadTrait;
        use HrefTrait;
        use HrefLangTrait;
        use MediaTrait;
        use ReferrerPolicyTrait;
        use RelClickableTrait;
        use TargetTrait;

        const NAME = 'area';
    }
}