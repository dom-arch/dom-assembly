<?php

namespace DOMAssembly\HTML\Attr\AsyncAttr {

    use DOMAssembly\HTML\Attr\AsyncAttr;

    trait AsyncTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setAsync(
            bool $value = true
        )
        {
            if ($value) {
                $document = $this->getDocument();
                $attr = AsyncAttr::of($document, AsyncAttr::VALUE_DEFAULT);

                return $this->set($attr);
            }

            return $this->del(AsyncAttr::NAME);
        }
    }
}