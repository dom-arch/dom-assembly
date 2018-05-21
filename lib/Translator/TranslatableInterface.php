<?php

namespace DOMAssembly\Translator {

    interface TranslatableInterface
    {
        /**
         * @return array|null
         */
        public function getSprintfParams();

        /**
         * @param TranslatorInterface $translator
         * @return $this
         */
        public function translate(
            TranslatorInterface $translator
        );

        /**
         * @return string
         */
        public function toString();
    }
}