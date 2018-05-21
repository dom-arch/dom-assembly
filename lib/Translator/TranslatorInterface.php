<?php

namespace DOMAssembly\Translator {

    interface TranslatorInterface
    {
        /**
         * @param TranslatableInterface $node
         * @return $this
         */
        public function translate(
            TranslatableInterface $node
        );
    }
}