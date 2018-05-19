<?php

namespace DOMAssembly\Translator {

    use DOMAssembly\Assembly;

    interface TranslatorInterface
    {
        /**
         * @param Assembly $node
         * @return $this
         */
        public function translate(
            Assembly $node
        );
    }
}