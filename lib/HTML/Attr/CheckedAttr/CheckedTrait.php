<?php

namespace DOMAssembly\HTML\Attr\CheckedAttr {

    use DOMAssembly\HTML\Attr\CheckedAttr;

    trait CheckedTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setChecked(
            bool $value = true
        )
        {
            if ($value) {
                $document = $this->getDocument();
                $attr = CheckedAttr::of($document, CheckedAttr::VALUE_DEFAULT);

                return $this->set($attr);
            }

            return $this->del(CheckedAttr::NAME);
        }
    }
}