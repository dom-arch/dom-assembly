<?php

namespace DOMAssembly\HTML\Attr\TranslateAttr {

    use DOMAssembly\HTML\Attr\TranslateAttr;

    trait TranslateTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setTranslate(
            bool $value
        )
        {
            $value = $value ? 'yes' : 'no';
            $document = $this->getDocument();
            $attr = TranslateAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}