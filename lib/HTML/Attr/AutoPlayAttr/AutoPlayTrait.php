<?php

namespace DOMAssembly\HTML\Attr\AutoPlayAttr {

    use DOMAssembly\HTML\Attr\AutoPlayAttr;

    trait AutoPlayTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setAutoPlay(
            bool $value = true
        )
        {
            if ($value) {
                $document = $this->getDocument();
                $attr = AutoPlayAttr::of($document, AutoPlayAttr::VALUE_DEFAULT);

                return $this->set($attr);
            }

            return $this->del(AutoPlayAttr::NAME);
        }
    }
}