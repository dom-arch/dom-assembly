<?php

namespace DOMAssembly\HTML\Attr\IsMapAttr {

    use DOMAssembly\HTML\Attr\IsMapAttr;

    trait IsMapTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setIsMap(
            bool $value = true
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = IsMapAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}