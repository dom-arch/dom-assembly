<?php

namespace DOMAssembly\HTML\Attr\TypeAttr {

    use DOMAssembly\HTML\Attr\TypeAttr;

    trait TypeTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setType(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = TypeAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}