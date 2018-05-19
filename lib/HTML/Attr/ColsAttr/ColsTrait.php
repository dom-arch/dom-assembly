<?php

namespace DOMAssembly\HTML\Attr\ColsAttr {

    use DOMAssembly\HTML\Attr\ColsAttr;

    trait ColsTrait
    {
        /**
         * @param int $value
         * @return $this
         */
        public function setCols(
            int $value
        )
        {
            $document = $this->getDocument();
            $attr = ColsAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}