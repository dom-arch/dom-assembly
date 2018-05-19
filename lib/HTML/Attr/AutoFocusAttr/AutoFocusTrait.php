<?php

namespace DOMAssembly\HTML\Attr\AutoFocusAttr {

    use DOMAssembly\HTML\Attr\AutoFocusAttr;

    trait AutoFocusTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setAutoFocus(
            bool $value = true
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = AutoFocusAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}