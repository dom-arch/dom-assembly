<?php

namespace DOMAssembly\HTML\Attr\HiddenAttr {

    use DOMAssembly\HTML\Attr\HiddenAttr;

    trait HiddenTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setHidden(
            bool $value
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = HiddenAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}