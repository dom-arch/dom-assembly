<?php

namespace DOMAssembly\HTML\Attr\DisabledAttr {

    use DOMAssembly\HTML\Attr\DisabledAttr;

    trait DisabledTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setDisabled(
            bool $value = true
        )
        {
            if ($value) {
                $document = $this->getDocument();
                $attr = DisabledAttr::of($document, DisabledAttr::VALUE_DEFAULT);

                return $this->set($attr);
            }

            return $this->del(DisabledAttr::NAME);
        }
    }
}