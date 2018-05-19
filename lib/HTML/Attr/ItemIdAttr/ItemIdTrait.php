<?php

namespace DOMAssembly\HTML\Attr\ItemIdAttr {

    use DOMAssembly\HTML\Attr\ItemIdAttr;

    trait ItemIdTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setItemId(
            $value
        )
        {
            if (!is_string($value)) {
                $value = var_export($value, true);
            }

            $document = $this->getDocument();
            $attr = ItemIdAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}