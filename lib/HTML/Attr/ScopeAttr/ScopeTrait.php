<?php

namespace DOMAssembly\HTML\Attr\ScopeAttr {

    use DOMAssembly\HTML\Attr\ScopeAttr;

    trait ScopeTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setScope(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = ScopeAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}