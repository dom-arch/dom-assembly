<?php

namespace DOMAssembly\HTML\Attr\HrefLangAttr {

    use DOMAssembly\HTML\Attr\HrefLangAttr;

    trait HrefLangTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setHrefLang(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = HrefLangAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}