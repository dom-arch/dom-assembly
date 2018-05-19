<?php

namespace DOMAssembly\HTML\Attr\SandboxAttr {

    use DOMAssembly\HTML\Attr\SandboxAttr;

    trait SandboxTrait
    {
        /**
         * @param $value
         * @return $this
         */
        public function addSandbox(
            string $value
        )
        {
            $sandbox = $this->get(SandboxAttr::NAME) ?? '';
            $sandboxes = explode(' ', $sandbox);

            if (!in_array($value, $sandboxes)) {
                $sandboxes[] = $value;
                $sandbox = implode(' ', $sandboxes);
            }

            $document = $this->getDocument();
            $attr = SandboxAttr::of($document, $sandbox);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function addSandboxAllowForms()
        {
            return $this->addSandbox(SandboxAttr::VALUE_ALLOW_FORMS);
        }

        /**
         * @return $this
         */
        public function addSandboxAllowModals()
        {
            return $this->addSandbox(SandboxAttr::VALUE_ALLOW_MODALS);
        }

        /**
         * @return $this
         */
        public function addSandboxAllowOrientationLock()
        {
            return $this->addSandbox(SandboxAttr::VALUE_ALLOW_ORIENTATION_LOCK);
        }

        /**
         * @return $this
         */
        public function addSandboxAllowPointerLock()
        {
            return $this->addSandbox(SandboxAttr::VALUE_ALLOW_POINTER_LOCK);
        }

        /**
         * @return $this
         */
        public function addSandboxAllowPopups()
        {
            return $this->addSandbox(SandboxAttr::VALUE_ALLOW_POPUPS);
        }

        /**
         * @return $this
         */
        public function addSandboxAllowPopupsToEscape()
        {
            return $this->addSandbox(SandboxAttr::VALUE_ALLOW_POPUPS_TO_ESCAPE);
        }

        /**
         * @return $this
         */
        public function addSandboxAllowPresentation()
        {
            return $this->addSandbox(SandboxAttr::VALUE_ALLOW_PRESENTATION);
        }

        /**
         * @return $this
         */
        public function addSandboxAllowSameOrigin()
        {
            return $this->addSandbox(SandboxAttr::VALUE_ALLOW_SAME_ORIGIN);
        }

        /**
         * @return $this
         */
        public function addSandboxAllowScripts()
        {
            return $this->addSandbox(SandboxAttr::VALUE_ALLOW_SCRIPTS);
        }

        /**
         * @return $this
         */
        public function addSandboxAllowTopNavigation()
        {
            return $this->addSandbox(SandboxAttr::VALUE_ALLOW_TOP_NAVIGATION);
        }

        /**
         * @return $this
         */
        public function addSandboxAllowTopNavigationByUser()
        {
            return $this->addSandbox(SandboxAttr::VALUE_ALLOW_TOP_NAVIGATION_BY_USER);
        }
    }
}