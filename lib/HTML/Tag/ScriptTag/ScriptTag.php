<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\AsyncAttr\AsyncTrait;
    use DOMAssembly\HTML\Attr\CrossOriginAttr\CrossOriginTrait;
    use DOMAssembly\HTML\Attr\DeferAttr\DeferTrait;
    use DOMAssembly\HTML\Attr\IntegrityAttr\IntegrityTrait;
    use DOMAssembly\HTML\Attr\NoModuleAttr\NoModuleTrait;
    use DOMAssembly\HTML\Attr\NonceAttr\NonceTrait;
    use DOMAssembly\HTML\Attr\SrcAttr\SrcTrait;
    use DOMAssembly\HTML\Attr\TypeAttr\TypeTrait;

    class ScriptTag
        extends TextContainerTag
    {
        use AsyncTrait;
        use CrossOriginTrait;
        use DeferTrait;
        use IntegrityTrait;
        use NonceTrait;
        use NoModuleTrait;
        use SrcTrait;
        use TypeTrait;

        const NAME = 'script',
        TYPE_MODULE = 'module';

        /**
         * @return $this
         */
        public function setTypeModule()
        {
            return $this->setType(static::TYPE_MODULE);
        }
    }
}