<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\CrossOriginAttr\CrossOriginTrait;
    use DOMAssembly\HTML\Attr\HrefAttr\HrefTrait;
    use DOMAssembly\HTML\Attr\HrefLangAttr\HrefLangTrait;
    use DOMAssembly\HTML\Attr\IntegrityAttr\IntegrityTrait;
    use DOMAssembly\HTML\Attr\MediaAttr\MediaTrait;
    use DOMAssembly\HTML\Attr\PreFetchAttr\PreFetchTrait;
    use DOMAssembly\HTML\Attr\ReferrerPolicyAttr\ReferrerPolicyTrait;
    use DOMAssembly\HTML\Attr\RelAttr\RelCanonicalTrait;
    use DOMAssembly\HTML\Attr\RelAttr\RelCommonTrait;
    use DOMAssembly\HTML\Attr\RelAttr\RelDNSPreFetchTrait;
    use DOMAssembly\HTML\Attr\RelAttr\RelIconTrait;
    use DOMAssembly\HTML\Attr\RelAttr\RelManifestTrait;
    use DOMAssembly\HTML\Attr\RelAttr\RelPingbackTrait;
    use DOMAssembly\HTML\Attr\RelAttr\RelPreConnectTrait;
    use DOMAssembly\HTML\Attr\RelAttr\RelPreLoadTrait;
    use DOMAssembly\HTML\Attr\RelAttr\RelPreRenderTrait;
    use DOMAssembly\HTML\Attr\RelAttr\RelStyleSheetTrait;
    use DOMAssembly\HTML\Attr\RelAttr\RelTrait;
    use DOMAssembly\HTML\Attr\SizesAttr\SizesTrait;
    use DOMAssembly\HTML\Attr\TypeAttr\TypeTrait;

    class LinkTag
        extends VoidTag
    {
        use CrossOriginTrait;
        use HrefTrait;
        use HrefLangTrait;
        use IntegrityTrait;
        use MediaTrait;
        use PreFetchTrait;
        use ReferrerPolicyTrait;
        use RelTrait;
        use RelCanonicalTrait;
        use RelCommonTrait;
        use RelDNSPreFetchTrait;
        use RelIconTrait;
        use RelManifestTrait;
        use RelPingbackTrait;
        use RelPreConnectTrait;
        use RelPreLoadTrait;
        use RelPreRenderTrait;
        use RelStyleSheetTrait;
        use SizesTrait;
        use TypeTrait;

        const NAME = 'link';
    }
}