<?php

namespace DOMAssembly\HTML\Attr\ForAttr {

    use DOMAssembly\HTML\Attr\ForAttr;

    trait ForTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setFor(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = ForAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}