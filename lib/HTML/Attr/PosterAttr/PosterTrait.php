<?php

namespace DOMAssembly\HTML\Attr\PosterAttr {

    use DOMAssembly\HTML\Attr\PosterAttr;

    trait PosterTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setPoster(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = PosterAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}