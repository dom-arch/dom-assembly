<?php

namespace DOMAssembly\HTML\Attr\ItemScopeAttr {

    use DOMAssembly\HTML\Attr\ItemScopeAttr;

    trait ItemScopeTrait
    {
        /**
         * @return $this
         */
        public function setItemScope()
        {
            $document = $this->getDocument();
            $attr = ItemScopeAttr::of($document, ItemScopeAttr::NAME);

            return $this->set($attr);
        }
    }
}