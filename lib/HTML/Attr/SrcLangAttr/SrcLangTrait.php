<?php

namespace DOMAssembly\HTML\Attr\SrcLangAttr {

    use DOMAssembly\HTML\Attr\SrcLangAttr;

    trait SrcLangTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setSrcLang(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = SrcLangAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}