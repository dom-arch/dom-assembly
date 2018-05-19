<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\DownloadAttr\DownloadTrait;
    use DOMAssembly\HTML\Attr\HrefAttr\HrefTrait;
    use DOMAssembly\HTML\Attr\HrefLangAttr\HrefLangTrait;
    use DOMAssembly\HTML\Attr\PingAttr\PingTrait;
    use DOMAssembly\HTML\Attr\ReferrerPolicyAttr\ReferrerPolicyTrait;
    use DOMAssembly\HTML\Attr\RelAttr\RelClickableTrait;
    use DOMAssembly\HTML\Attr\TargetAttr\TargetTrait;
    use DOMAssembly\HTML\Attr\TypeAttr\TypeTrait;

    class ATag
        extends InlineContainerTag
    {
        use DownloadTrait;
        use HrefTrait;
        use HrefLangTrait;
        use PingTrait;
        use ReferrerPolicyTrait;
        use RelClickableTrait;
        use TargetTrait;
        use TypeTrait;

        const NAME = 'a';
    }
}