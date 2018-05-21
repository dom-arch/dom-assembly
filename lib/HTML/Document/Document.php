<?php
/*
Copyright 2015 Lcf.vs
 -
Released under the MIT license
 -
https://github.com/Lcfvs/DOMArch
*/
namespace DOMAssembly\HTML {

    use DOMAssembly\Assembly;
    use DOMAssembly\DOM;
    use DOMAssembly\HTML\Attr\HrefAttr;
    use DOMAssembly\HTML\Attr\HrefLangAttr;
    use DOMAssembly\HTML\Attr\LangAttr;
    use DOMAssembly\HTML\Attr\SrcLangAttr;
    use DOMAssembly\Translator\TranslatorInterface;

    class Document
        extends Assembly
        implements NonVoidInterface
    {
        /**
         * @var DOM\Document
         */
        protected $node;

        /**
         * @var \DOMXPath
         */
        protected $xpath;

        /**
         * @return $this
         */
        public static function create()
        {
            $assembly = new static();
            $node = DOM\Document::create($assembly);
            $node->loadHTML('<!DOCTYPE html>');
            $assembly->setNode($node);
            $assembly->setXpath(new \DOMXpath($node));

            return $assembly;
        }

        /**
         * @param EmbeddableInterface $node
         * @return $this
         */
        public function append(
            EmbeddableInterface $node
        ) {
            $child = $node->getNode();
            $document = $this->getNode();
            $document->appendChild($child);

            return $this;
        }

        /**
         * @param EmbeddableInterface $node
         * @param EmbeddableInterface $ref_node
         * @return $this
         */
        public function insert(
            EmbeddableInterface $node,
            EmbeddableInterface $ref_node
        ) {
            $child = $node->getNode();
            $ref_child = $ref_node->getNode();
            $this->getNode()->insertBefore($child, $ref_child);

            return $this;
        }

        /**
         * @param DOM\Document $node
         * @return $this
         */
        protected function setNode(
            DOM\Document $node
        ) {
            $this->node = $node;

            return $this;
        }

        /**
         * @return DOM\Document
         */
        public function getNode()
        {
            return $this->node;
        }

        /**
         * @param \DOMXPath $xpath
         * @return $this
         */
        private function setXpath(
            \DOMXPath $xpath
        ) {
            $this->xpath = $xpath;

            return $this;
        }

        /**
         * @return \DOMXPath
         */
        public function getXpath(): \DOMXPath
        {
            return $this->xpath;
        }

        /**
         * @param TranslatorInterface $translator
         * @param Assembly|null $assembly
         * @return $this
         */
        public function translate(
            TranslatorInterface $translator,
            Assembly $assembly = null
        ) {
            if (!$assembly) {
                $assembly = $this;
            }

            $i = 0;
            $node = $assembly->getNode();
            $items = $this->getXpath()->query('//text()|//@*', $node);

            /**
             * @var DOM\Text|DOM\Attribute $item
             */
            while ($item = $items->item($i)) {
                $current_assembly = $item->getAssembly();
                $parent = $current_assembly->getParent();

                $is_lang = $current_assembly instanceof LangAttr
                    || $current_assembly instanceof HrefLangAttr
                    || $current_assembly instanceof SrcLangAttr;

                if (!$is_lang) {
                    $locale = ($current_assembly instanceof HrefAttr && $parent->get(HrefLangAttr::NAME))
                        ?: ($current_assembly instanceof SrcLangAttr && $parent->get(SrcLangAttr::NAME));

                    while (!$locale && $parent) {
                        $locale = $parent->get(LangAttr::NAME);
                        $parent = $parent->getParent();
                    }

                    if (is_array($current_assembly->getSprintfParams())) {
                        $translation = $translator->translate($current_assembly, $locale);

                        if ($current_assembly instanceof Text) {
                            $current_assembly->getNode()->nodeValue = $translation;
                        } else {
                            $current_assembly->getNode()->value = $translation;
                        }
                    }
                }

                $i += 1;
            }

            return $this;
        }

        /**
         * @param bool $beautify
         * @return string
         */
        public function toString(
            bool $beautify = false
        ) {
            $node = $this->getNode();

            if ($beautify) {
                $node->preserveWhiteSpace = true;
                $node->formatOutput = true;
                $html = preg_replace('/^.+\n/', '', $node->saveXML());
            } else {
                $html = $node->saveHTML();
            }

            return substr($html, 0, -1);
        }
    }
}