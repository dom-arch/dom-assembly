<?php

namespace DOMAssembly\HTML\Attr\LangAttr {

    use DOMAssembly\HTML\Attr\LangAttr;

    trait LangTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setLang(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = LangAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}