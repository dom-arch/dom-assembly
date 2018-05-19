<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class RelAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'rel',
            VALUE_ALTERNATE = 'alternate',
            VALUE_AUTHOR = 'author',
            VALUE_BOOKMARK = 'bookmark',
            VALUE_CANONICAL = 'canonical',
            VALUE_DNS_PRE_FETCH = 'dns-prefetch',
            VALUE_EXTERNAL = 'external',
            VALUE_HELP = 'help',
            VALUE_ICON = 'icon',
            VALUE_IMPORT = 'import',
            VALUE_LICENSE = 'license',
            VALUE_MANIFEST = 'manifest',
            VALUE_NEXT = 'next',
            VALUE_NO_FOLLOW = 'nofollow',
            VALUE_NO_OPENER = 'noopener',
            VALUE_NO_REFERRER = 'noreferrer',
            VALUE_PINGBACK = 'pingback',
            VALUE_PRE_CONNECT = 'preconnect',
            VALUE_PRE_FETCH = 'prefetch',
            VALUE_PRE_LOAD = 'preload',
            VALUE_PRE_RENDER = 'preload',
            VALUE_PREV = 'prev',
            VALUE_SEARCH = 'search',
            VALUE_STYLE_SHEET = 'stylesheet',
            VALUE_TAG = 'tag';
    }
}