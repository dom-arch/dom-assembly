<?php

namespace DOMAssembly\HTML\Attr\ItemPropAttr {

    use DOMAssembly\HTML\Attr\ItemPropAttr;

    trait ItemPropTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setItemProp(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = ItemPropAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}