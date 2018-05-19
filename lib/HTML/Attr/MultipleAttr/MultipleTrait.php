<?php

namespace DOMAssembly\HTML\Attr\MultipleAttr {

    use DOMAssembly\HTML\Attr\MultipleAttr;

    trait MultipleTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setMultiple(
            bool $value = true
        )
        {
            if ($value) {
                $document = $this->getDocument();
                $attr = MultipleAttr::of($document, MultipleAttr::VALUE_DEFAULT);

                return $this->set($attr);
            }

            return $this->del(MultipleAttr::NAME);
        }
    }
}