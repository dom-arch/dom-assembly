<?php

namespace DOMAssembly\HTML\Attr\LoopAttr {

    use DOMAssembly\HTML\Attr\LoopAttr;

    trait LoopTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setLoop(
            bool $value = true
        )
        {
            if ($value) {
                $document = $this->getDocument();
                $attr = LoopAttr::of($document, LoopAttr::VALUE_DEFAULT);

                return $this->set($attr);
            }

            return $this->del(LoopAttr::NAME);
        }
    }
}