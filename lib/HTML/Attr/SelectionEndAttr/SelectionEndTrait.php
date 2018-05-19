<?php

namespace DOMAssembly\HTML\Attr\SelectionEndAttr {

    use DOMAssembly\HTML\Attr\SelectionEndAttr;

    trait SelectionEndTrait
    {
        /**
         * @param int $value
         * @return $this
         */
        public function setSelectionEnd(
            int $value
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = SelectionEndAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}