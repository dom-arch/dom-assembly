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

    abstract class Tag
        extends Assembly
        implements EmbeddableInterface
    {
        use Attr\CommonTrait;

        /**
         * @var DOM\Element $node
         */
        protected $node;

        /**
         * Tag constructor.
         * @param Document $document
         * @param string $name
         */
        protected function __construct(
            Document $document,
            string $name
        )
        {
            $node = DOM\Element::create($this, $document->getNode(), $name);
            $this->setNode($node);
        }

        /**
         * @param Document $document
         * @return static
         */
        public static function of(
            Document $document
        )
        {
            return new static($document, static::NAME);
        }

        /**
         * @return DOM\Element
         */
        public function getNode(): DOM\Element
        {
            return $this->node;
        }

        /**
         * @param DOM\Element $element
         * @return $this
         */
        public function setNode(
            DOM\Element $element
        )
        {
            $this->node = $element;

            return $this;
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
         * @param Attr $attribute
         * @return $this
         */
        public function set(
            Attr $attribute
        )
        {
            $this->getNode()->setAttributeNode($attribute->getNode());

            return $this;
        }

        /**
         * @param string $name
         * @return string|null
         */
        public function get(
            string $name
        )
        {
            $attribute = $this->getNode()->getAttributeNode($name);

            if ($attribute) {
                return $attribute->getAssembly()->getValue();
            }

            return null;
        }

        /**
         * @param string $name
         * @return $this
         */
        public function del(
            string $name
        )
        {
            $this->getNode()->removeAttribute($name);

            return $this;
        }

        /**
         * @return Document|null
         */
        public function getDocument()
        {
            $node = $this->getNode();
            $document_node = $node->ownerDocument;

            if ($document_node) {
                return $document_node->getAssembly();
            }

            return null;
        }

        /**
         * @return EmbeddableInterface|null
         */
        public function getParent()
        {
            $node = $this->getNode();

            /**
             * @var DOM\Element|DOM\Document $parent
             */
            $parent = $node->parentNode;

            if ($parent) {
                return $parent->getAssembly();
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
         * @param bool $beautify
         * @return string
         */
        public function toString(
            bool $beautify = false
        )
        {
            $node = $this->getNode();
            $document = $node->ownerDocument;

            if ($beautify) {
                $preserve = $document->preserveWhiteSpace;
                $format = $document->formatOutput;
                $document->preserveWhiteSpace = true;
                $document->formatOutput = true;
                $html = preg_replace('/^.+\n/', '', $document->saveXML($node));
                $document->preserveWhiteSpace = $preserve;
                $document->formatOutput = $format;
            } else {
                $html = $document->saveHTML($node);
            }

            return $html;
        }
    }
}