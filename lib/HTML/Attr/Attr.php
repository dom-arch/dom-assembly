<?php
/*
Copyright 2015 Lcf.vs
 -
Released under the MIT license
 -
https://github.com/Lcfvs/PHPDOM
*/
namespace DOMAssembly\HTML {

    use DOMAssembly\Assembly;
    use DOMAssembly\DOM;
    use DOMAssembly\Translator\TranslatableInterface;
    use DOMAssembly\Translator\TranslatorInterface;

    abstract class Attr
        extends Assembly
        implements TranslatableInterface
    {
        /**
         * @var DOM\Attribute $node
         */
        protected $node;

        protected $sprintfParams;

        /**
         * Attribute constructor.
         * @param Document $document
         * @param string $name
         * @param $value
         * @param array|null $sprintf_params
         */
        protected function __construct(
            Document $document,
            string $name,
            $value,
            array $sprintf_params = null
        ) {
            $node = DOM\Attribute::create($this, $document->getNode(), $name, $value);
            $this->setNode($node);
            $this->sprintfParams = $sprintf_params;
        }

        /**
         * @return string
         */
        public function getName()
        {
            return $this->getNode()->name;
        }

        /**
         * @param DOM\Attribute $node
         * @return $this
         */
        protected function setNode(
            DOM\Attribute $node
        ) {
            $this->node = $node;

            return $this;
        }

        /**
         * @return DOM\Attribute
         */
        public function getNode()
        {
            return $this->node;
        }

        /**
         * @return Tag|null
         */
        public function getParent()
        {
            $node = $this->getNode();

            /**
             * @var DOM\Element|null $element
             */
            $element = $node->ownerElement;

            if ($element) {
                return $element->getAssembly();
            }

            return null;
        }

        /**
         * @return $this
         */
        public function remove()
        {
            /**
             * @var DOM\Element|null $element
             */
            $element = $this->getParent();

            if (!$element) {
                return $this;
            }

            $node = $this->getNode();
            $element->getNode()->removeChild($node);

            return $this;
        }

        /**
         * @return string
         */
        public function getValue()
        {
            $node = $this->getNode();

            return $node->value;
        }

        /**
         * @return array|null
         */
        public function getSprintfParams()
        {
            return $this->sprintfParams;
        }

        /**
         * @param TranslatorInterface $translator
         * @return $this
         */
        public function translate(
            TranslatorInterface $translator
        ) {
            $params = $this->sprintfParams;

            if (is_null($params)) {
                return $this;
            }

            $translator->translate($this);

            return $this;
        }

        /**
         * @return string
         */
        public function toString()
        {
            $node = $this->getNode();

            return $node->value;
        }
    }
}