<?php

namespace DOMAssembly\HTML\Attr\NonceAttr {

    use DOMAssembly\HTML\Attr\NonceAttr;

    trait NonceTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setNonce(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = NonceAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}