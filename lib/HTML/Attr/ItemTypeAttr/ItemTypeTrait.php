<?php

namespace DOMAssembly\HTML\Attr\ItemTypeAttr {

    use DOMAssembly\HTML\Attr\ItemTypeAttr;

    trait ItemTypeTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setItemType(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = ItemTypeAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}