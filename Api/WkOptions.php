<?php
namespace Staempfli\Pdf\Api;

use \ArrayObject;

/**
 * Constants are provided for convenience. For a full list of options, see
 * http://wkhtmltopdf.org/usage/wkhtmltopdf.txt
 */
final class WkOptions extends ArrayObject implements Options
{
    // global options
    const KEY_BINARY = 'binary';
    const KEY_VERSION9 = 'version9';
    const KEY_TMP_DIR = 'tmpDir';
    const KEY_CLI_OPTIONS = 'commandOptions';
    const KEY_IGNORE_WARNINGS = 'ignoreWarnings';
    const KEY_TITLE = 'title';
    const KEY_PAGE_SIZE = 'page-size';
    const KEY_PAGE_HEIGHT = 'page-height';
    const KEY_PAGE_WIDTH = 'page-width';
    const KEY_ORIENTATION = 'orientation';
    const KEY_MARGIN_BOTTOM = 'margin-bottom';
    const KEY_MARGIN_LEFT = 'margin-left';
    const KEY_MARGIN_RIGHT = 'margin-right';
    const KEY_MARGIN_TOP = 'margin-top';
    const KEY_HEADER_HTML = 'header-html';
    const KEY_HEADER_TEXT_LEFT = 'header-left';
    const KEY_HEADER_TEXT_RIGHT = 'header-right';
    const KEY_HEADER_SPACING = 'header-spacing';
    const FLAG_HEADER_LINE = 'header-line';
    const KEY_FOOTER_HTML = 'footer-html';
    const KEY_FOOTER_TEXT_LEFT = 'footer-left';
    const KEY_FOOTER_TEXT_RIGHT = 'footer-right';
    const KEY_FOOTER_SPACING = 'footer-spacing';
    const FLAG_FOOTER_LINE = 'footer-line';
    const KEY_HEADER_FOOTER_REPLACE_MAP = 'replace';

    // page options
    const KEY_RUN_SCRIPTS = 'run-script';
    const KEY_COOKIES = 'cookie';
    const KEY_ENCODING = 'encoding';
    const FLAG_NO_OUTLINE = 'no-outline';

    // option values
    const PAGE_SIZE_DIN_A4 = 'A4';
    const PAGE_SIZE_LETTER = 'letter';
    const ORIENTATION_PORTRAIT = 'Portrait';
    const ORIENTATION_LANDSCAPE = 'Landscape';
    const ENCODING_UTF_8 = 'UTF-8';

    /**
     * @param Options $newOptions
     * @return WkOptions
     */
    public function merge(Options $newOptions)
    {
        $merged = clone $this;
        foreach ($newOptions as $key => $value) {
            $merged[$key] = $value;
        }
        return $merged;
    }

}