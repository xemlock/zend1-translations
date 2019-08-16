<?php

class Zend1Translations_Bootstrap extends Zend_Application_Module_Bootstrap
{
    protected function _initTranslations()
    {
        $bootstrap = $this->getApplication();

        if (!$bootstrap instanceof Zend_Application_Bootstrap_BootstrapAbstract) {
            return;
        }

        if (!$bootstrap->hasPluginResource('Translate') && !is_callable($bootstrap, '_initTranslate')) {
            return;
        }

        $bootstrap->bootstrap('Translate');

        /** @var Zend_Translate_Adapter $translate */
        $translate = $bootstrap->getResource('Translate')->getAdapter();

        $localeDirectory = dirname(__FILE__) . '/languages/' . $translate->getLocale();
        if (is_dir($localeDirectory)) {
            $options = array(
                'locale'  => $translate->getLocale(),
                'content' => $localeDirectory,
                'scan'    => Zend_Translate::LOCALE_DIRECTORY,
            );
            if (($cache = $translate->getCache()) !== null) {
                $options['cache'] = $cache;
            }

            $translate->addTranslation(new Zend_Translate_Adapter_Array($options));
        }
    }
}
