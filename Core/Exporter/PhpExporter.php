<?php

namespace Propel\TranslationBundle\Core\Exporter;

/**
 * Export translations to a PHP file.
 *
 * @author Cédric Girard <c.girard@lexik.fr>
 */
class PhpExporter implements ExporterInterface
{
    /**
     * (non-PHPdoc)
     * @see Lexik\Bundle\TranslationBundle\Translation\Exporter.ExporterInterface::export()
     */
    public function export($file, $translations)
    {
        $phpContent = sprintf("<?php\nreturn %s;", var_export($translations, true));

        $bytes = file_put_contents($file, $phpContent);

        return ($bytes !== false);
    }
}