<?php

namespace DOMAssembly\HTML {

    interface EmbeddableInterface
    {
        public function getNode();

        public function nextNode();

        public function previousNode();
    }
}