<?php

namespace DOMAssembly {

    class Util
    {
        const
            CAMEL_CASE_PATTERN = '/(?<=[a-z])(?=[A-Z])|(?<=[A-Z])(?=[A-Z][a-z])/';

        protected $data = [];

        /**
         * Util constructor.
         * @param array $data
         */
        final private function __construct(
            array $data
        ) {
            $this->data = $data;
        }

        /**
         * @param array $arguments
         * @return array
         */
        public static function parseStringArguments(
            array $arguments
        ) {
            $results = [];

            foreach ($arguments as $argument) {
                $results = $results + (array)$argument;
            }

            return $results;
        }

        /**
         * @param array $arguments
         * @return array
         */
        public static function parseArrayArguments(
            array $arguments
        ) {
            $results = [];

            foreach ($arguments as $key => $argument) {
                if (!is_array($argument)) {
                    $results[$key] = $argument;

                    continue;
                }

                foreach ($argument as $name => $value) {
                    $results[$name] = $value;
                }
            }

            return $results;
        }

        /**
         * @param string $str
         * @return static
         */
        public static function fromUTF8(
            string $str
        ) {
            $entity_pattern = '/&(?:(?:([A-za-z])'
                . '(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml))|(?:([A-za-z]{2})(?:lig))'
                . '|([^;]+));/';

            $str = htmlentities($str, ENT_NOQUOTES, 'UTF-8');
            $str = preg_replace($entity_pattern, '\1\2', $str);
            $str = preg_replace('/[^a-zA-Z\d]/', '-', $str);
            $str = preg_replace('/(^-)|(-(?=-))|(-$)/', '', $str);

            return static::fromKebabCase($str);
        }

        /**
         * @param string $name
         * @return static
         */
        public static function fromPascalCase(
            string $name
        ) {
            return new static(preg_split(static::CAMEL_CASE_PATTERN, $name));
        }

        /**
         * @param string $name
         * @return static
         */
        public static function fromCamelCase(
            string $name
        ) {
            return new static(preg_split(static::CAMEL_CASE_PATTERN, $name));
        }

        /**
         * @param string $name
         * @return static
         */
        public static function fromSnakeCase(
            string $name
        ) {
            return new static(explode('_', $name));
        }

        /**
         * @param string $name
         * @return static
         */
        public static function fromKebabCase(
            string $name
        ) {
            return new static(explode('-', $name));
        }

        /**
         * @return string
         */
        public function toSnakeCase()
        {
            return strtolower(implode('_', $this->data));
        }

        /**
         * @return string
         */
        public function toPascalCase()
        {
            $names = (array)$this->data;

            foreach ($names as $key => $part) {
                $names[$key] = ucfirst($part);
            }

            return implode('', $names);
        }

        /**
         * @return string
         */
        public function toCamelCase()
        {
            $names = (array)$this->data;

            foreach ($names as $key => $part) {
                if ($key) {
                    $names[$key] = ucfirst($part);
                } else {
                    $names[$key] = strtolower($part);
                }
            }

            return implode('', $names);
        }

        /**
         * @return string
         */
        public function toKebabCase()
        {
            return strtolower(implode('-', $this->data));
        }
    }
}