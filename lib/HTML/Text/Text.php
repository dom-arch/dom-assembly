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

    class Text
        extends Assembly
        implements EmbeddableInterface, PhrasingInterface, TranslatableInterface
    {
        use TranslatableNodeTrait;

        /**
         * @var DOM\Text
         */
        protected $node;

        protected $sprintfParams;

        /**
         * Text constructor.
         * @param Document $document
         * @param $value
         * @param array|null $sprintf_params
         */
        protected function __construct(
            Document $document,
            $value,
            array $sprintf_params = null
        ) {
            $node = DOM\Text::create($this, $document->getNode(), $value);
            $this->setNode($node);
            $this->sprintfParams = $sprintf_params;
        }

        /**
         * @return Document
         */
        public function getDocument()
        {
            $node = $this->getNode();

            return $node->ownerDocument->getAssembly();
        }

        /**
         * @return DOM\Text
         */
        public function getNode(): DOM\Text
        {
            return $this->node;
        }

        /**
         * @param DOM\Text $node
         * @return $this
         */
        public function setNode(
            DOM\Text $node
        ) {
            $this->node = $node;

            return $this;
        }

        /**
         * @return Tag|null
         */
        public function getParent()
        {
            $node = $this->getNode();

            /**
             * @var DOM\Element|null $parent
             */
            $parent = $node->parentNode;

            if ($parent) {
                return $parent->getAssembly();
            }

            return null;
        }

        /**
         * @return Tag|Text|null
         */
        public function nextNode()
        {
            $node = $this->getNode();
            $next = $node->nextSibling;

            if ($next) {
                return $next->getAssembly();
            }

            return null;
        }

        /**
         * @return Tag|Text|null
         */
        public function previousNode()
        {
            $node = $this->getNode();
            $previous = $node->previousSibling;

            if ($previous) {
                return $previous->getAssembly();
            }

            return null;
        }

        /**
         * @return $this
         */
        public function remove()
        {
            $parent = $this->getParent();

            if (!$parent) {
                return $this;
            }

            $node = $this->getNode();
            $parent->getNode()->removeChild($node);

            return $this;
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
        ) : TranslatableInterface
        {
            $this->getDocument()->translate($translator, $this);

            return $this;
        }

        /**
         * @return string
         */
        public function toString() : string
        {
            $node = $this->getNode();

            return $node->nodeValue;
        }
    }
}