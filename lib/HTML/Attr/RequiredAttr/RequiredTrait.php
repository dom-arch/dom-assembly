<?php

namespace DOMAssembly\HTML\Attr\RequiredAttr {

    use DOMAssembly\HTML\Attr\RequiredAttr;

    trait RequiredTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setRequired(
            bool $value = true
        )
        {
            if ($value) {
                $document = $this->getDocument();
                $attr = RequiredAttr::of($document, RequiredAttr::VALUE_DEFAULT);

                return $this->set($attr);
            }

            return $this->del(RequiredAttr::NAME);
        }
    }
}