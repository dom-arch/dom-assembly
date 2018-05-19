<?php

namespace DOMAssembly\HTML\Attr\SizeAttr {

    use DOMAssembly\HTML\Attr\SizeAttr;

    trait SizeTrait
    {
        /**
         * @param int $value
         * @return $this
         */
        public function setSize(
            int $value
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = SizeAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}