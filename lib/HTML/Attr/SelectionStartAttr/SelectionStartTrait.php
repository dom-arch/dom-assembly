<?php

namespace DOMAssembly\HTML\Attr\SelectionStartAttr {

    use DOMAssembly\HTML\Attr\SelectionStartAttr;

    trait SelectionStartTrait
    {
        /**
         * @param int $value
         * @return $this
         */
        public function setSelectionStart(
            int $value
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = SelectionStartAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}