<?php

namespace DOMAssembly\HTML\Attr\SpellCheckAttr {

    use DOMAssembly\HTML\Attr\SpellCheckAttr;

    trait SpellCheckTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setSpellCheck(
            bool $value
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = SpellCheckAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}