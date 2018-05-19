<?php

namespace DOMAssembly\HTML\Attr\ReadonlyAttr {

    use DOMAssembly\HTML\Attr\ReadonlyAttr;

    trait ReadonlyTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setReadonly(
            bool $value = true
        )
        {
            if ($value) {
                $document = $this->getDocument();
                $attr = ReadonlyAttr::of($document, ReadonlyAttr::VALUE_DEFAULT);

                return $this->set($attr);
            }

            return $this->del(ReadonlyAttr::NAME);
        }
    }
}