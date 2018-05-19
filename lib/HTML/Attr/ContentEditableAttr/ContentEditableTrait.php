<?php

namespace DOMAssembly\HTML\Attr\ContentEditableAttr {

    use DOMAssembly\HTML\Attr\ContentEditableAttr;

    trait ContentEditableTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setContentEditable(
            bool $value = true
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = ContentEditableAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}