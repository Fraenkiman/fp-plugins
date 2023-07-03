<?php header('Content-Type: text/css; charset=utf-8'); ?>
@charset "UTF-8";

<?php
// Turn off all error reporting
error_reporting(0);

// PHP4.1.0 or later supported
if (phpversion() >= "4.1.0") {
  extract($_GET);
}

// Generate the URL of the CSS file
$host = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]";
$hostupper = strtoupper($host);
$path = rtrim(dirname($_SERVER ['PHP_SELF']), '/\\');
$url = '' . $host . $path . '/';
?>

/*
 * ==============
 * Font Noto Sans
 * ==============
 *
 * Name: Font Noto Sans
 * Module: moto-sans.css
 * Designer Name:
 * Author URI: https://fonts.google.com/noto/specimen/Noto+Sans
 * Description: This file defines the font
 * Last change: 02.07.2023
 * License: The font of Google "Noto Sans" is under SIL Open Font-License (OFL)
 */

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 100;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-ext-100-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 100;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-100-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 100;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/devanagari-100-italic.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 100;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-ext-100-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 100;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-100-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 100;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/vietnamese-100-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 100;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-ext-100-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 100;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-100-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 200;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-ext-200-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 200;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-200-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 200;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/devanagari-200-italic.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 200;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-ext-200-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 200;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-200-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 200;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/vietnamese-200-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 200;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-ext-200-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 200;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-200-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 300;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-ext-300-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 300;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-300-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 300;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/devanagari-300-italic.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 300;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-ext-300-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 300;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-300-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 300;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/vietnamese-300-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 300;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-ext-300-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 300;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-300-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-ext-400-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-400-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/devanagari-400-italic.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-ext-400-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-400-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/vietnamese-400-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-ext-400-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-400-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 500;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-ext-500-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 500;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-500-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 500;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/devanagari-500-italic.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 500;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-ext-500-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 500;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-500-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 500;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/vietnamese-500-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 500;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-ext-500-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 500;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-500-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 600;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-ext-600-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 600;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-600-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 600;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/devanagari-600-italic.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 600;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-ext-600-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 600;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-600-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 600;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/vietnamese-600-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 600;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-ext-600-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 600;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-600-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-ext-700-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-700-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/devanagari-700-italic.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-ext-700-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-700-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/vietnamese-700-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-ext-700-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-700-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 800;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-ext-800-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 800;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-800-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 800;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/devanagari-800-italic.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 800;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-ext-800-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 800;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-800-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 800;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/vietnamese-800-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 800;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-ext-800-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 800;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-800-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 900;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-ext-900-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 900;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-900-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 900;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/devanagari-900-italic.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 900;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-ext-900-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 900;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-900-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 900;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/vietnamese-900-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 900;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-ext-900-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 900;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-900-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-ext-100-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-100-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/devanagari-100-normal.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-ext-100-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-100-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/vietnamese-100-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-ext-100-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-100-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-ext-200-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-200-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/devanagari-200-normal.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-ext-200-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-200-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/vietnamese-200-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-ext-200-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-200-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-ext-300-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-300-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/devanagari-300-normal.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-ext-300-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-300-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/vietnamese-300-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-ext-300-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-300-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-ext-400-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-400-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/devanagari-400-normal.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-ext-400-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-400-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/vietnamese-400-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-ext-400-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-400-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-ext-500-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-500-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/devanagari-500-normal.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-ext-500-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-500-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/vietnamese-500-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-ext-500-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-500-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-ext-600-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-600-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/devanagari-600-normal.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-ext-600-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-600-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/vietnamese-600-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-ext-600-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-600-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-ext-700-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-700-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/devanagari-700-normal.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-ext-700-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-700-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/vietnamese-700-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-ext-700-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-700-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 800;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-ext-800-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 800;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-800-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 800;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/devanagari-800-normal.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 800;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-ext-800-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 800;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-800-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 800;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/vietnamese-800-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 800;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-ext-800-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 800;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-800-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-ext-900-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/cyrillic-900-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/devanagari-900-normal.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-ext-900-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/greek-900-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/vietnamese-900-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-ext-900-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: url('<?php echo $url;?>noto-sans/latin-900-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
