<?php

namespace DOMAssembly\HTML\Attr\PlaysInlineAttr {

    use DOMAssembly\HTML\Attr\PlaysInlineAttr;

    trait PlaysInlineTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setPlaysInline(
            bool $value = true
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = PlaysInlineAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}