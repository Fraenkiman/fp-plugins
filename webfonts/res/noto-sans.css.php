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
$host = (empty ($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]";
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
 * Last change: 05.09.2023
 * License: The font of Google "Noto Sans" is under SIL Open Font-License (OFL)
 */

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 100;
  font-display: swap;
  src: local('NotoSans-Thin-italic-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans/cyrillic-ext-100-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 100;
  font-display: swap;
  src: local('NotoSans-Thin-italic-cyrillic'),
  url('<?php echo $url;?>noto-sans/cyrillic-100-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 100;
  font-display: swap;
  src: local('NotoSans-Thin-italic-devanagari'),
  url('<?php echo $url;?>noto-sans/devanagari-100-italic.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 100;
  font-display: swap;
  src: local('NotoSans-Thin-italic-greek-ext'),
  url('<?php echo $url;?>noto-sans/greek-ext-100-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 100;
  font-display: swap;
  src: local('NotoSans-Thin-italic-greek'),
  url('<?php echo $url;?>noto-sans/greek-100-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 100;
  font-display: swap;
  src: local('NotoSans-Thin-italic-vietnamese'),
  url('<?php echo $url;?>noto-sans/vietnamese-100-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 100;
  font-display: swap;
  src: local('NotoSans-Thin-italic-latin-ext'),
  url('<?php echo $url;?>noto-sans/latin-ext-100-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 100;
  font-display: swap;
  src: local('NotoSans-Thin-italic-latin'),
  url('<?php echo $url;?>noto-sans/latin-100-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 200;
  font-display: swap;
  src: local('NotoSans-ExtraLight-italic-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans/cyrillic-ext-200-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 200;
  font-display: swap;
  src: local('NotoSans-ExtraLight-italic-cyrillic'),
  url('<?php echo $url;?>noto-sans/cyrillic-200-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 200;
  font-display: swap;
  src: local('NotoSans-ExtraLight-italic-devanagari'),
  url('<?php echo $url;?>noto-sans/devanagari-200-italic.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 200;
  font-display: swap;
  src: local('NotoSans-ExtraLight-italic-greek-ext'),
  url('<?php echo $url;?>noto-sans/greek-ext-200-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 200;
  font-display: swap;
  src: local('NotoSans-ExtraLight-italic-greek'),
  url('<?php echo $url;?>noto-sans/greek-200-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 200;
  font-display: swap;
  src: local('NotoSans-ExtraLight-italic-vietnamese'),
  url('<?php echo $url;?>noto-sans/vietnamese-200-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 200;
  font-display: swap;
  src: local('NotoSans-ExtraLight-italic-latin-ext'),
  url('<?php echo $url;?>noto-sans/latin-ext-200-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 200;
  font-display: swap;
  src: local('NotoSans-ExtraLight-italic-latin'),
  url('<?php echo $url;?>noto-sans/latin-200-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 300;
  font-display: swap;
  src: local('NotoSans-Light-italic-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans/cyrillic-ext-300-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 300;
  font-display: swap;
  src: local('NotoSans-Light-italic-cyrillic'),
  url('<?php echo $url;?>noto-sans/cyrillic-300-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 300;
  font-display: swap;
  src: local('NotoSans-Light-italic-devanagari'),
  url('<?php echo $url;?>noto-sans/devanagari-300-italic.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 300;
  font-display: swap;
  src: local('NotoSans-Light-italic-greek-ext'),
  url('<?php echo $url;?>noto-sans/greek-ext-300-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 300;
  font-display: swap;
  src: local('NotoSans-Light-italic-greek'),
  url('<?php echo $url;?>noto-sans/greek-300-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 300;
  font-display: swap;
  src: local('NotoSans-Light-italic-vietnamese'),
  url('<?php echo $url;?>noto-sans/vietnamese-300-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 300;
  font-display: swap;
  src: local('NotoSans-Light-italic-latin-ext'),
  url('<?php echo $url;?>noto-sans/latin-ext-300-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 300;
  font-display: swap;
  src: local('NotoSans-Light-italic-latin'),
  url('<?php echo $url;?>noto-sans/latin-300-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: local('NotoSans-Regular-italic-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans/cyrillic-ext-400-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: local('NotoSans-Regular-italic-cyrillic'),
  url('<?php echo $url;?>noto-sans/cyrillic-400-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: local('NotoSans-Regular-italic-devanagari'),
  url('<?php echo $url;?>noto-sans/devanagari-400-italic.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: local('NotoSans-Regular-italic-greek-ext'),
  url('<?php echo $url;?>noto-sans/greek-ext-400-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: local('NotoSans-Regular-italic-greek'),
  url('<?php echo $url;?>noto-sans/greek-400-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: local('NotoSans-Regular-italic-vietnamese'),
  url('<?php echo $url;?>noto-sans/vietnamese-400-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: local('NotoSans-Regular-italic-latin-ext'),
  url('<?php echo $url;?>noto-sans/latin-ext-400-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: local('NotoSans-Regular-italic-latin'),
  url('<?php echo $url;?>noto-sans/latin-400-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 500;
  font-display: swap;
  src: local('NotoSans-Medium-italic-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans/cyrillic-ext-500-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 500;
  font-display: swap;
  src: local('NotoSans-Medium-italic-cyrillic'),
  url('<?php echo $url;?>noto-sans/cyrillic-500-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 500;
  font-display: swap;
  src: local('NotoSans-Medium-italic-devanagari'),
  url('<?php echo $url;?>noto-sans/devanagari-500-italic.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 500;
  font-display: swap;
  src: local('NotoSans-Medium-italic-greek-ext'),
  url('<?php echo $url;?>noto-sans/greek-ext-500-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 500;
  font-display: swap;
  src: local('NotoSans-Medium-italic-greek'),
  url('<?php echo $url;?>noto-sans/greek-500-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 500;
  font-display: swap;
  src: local('NotoSans-Medium-italic-vietnamese'),
  url('<?php echo $url;?>noto-sans/vietnamese-500-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 500;
  font-display: swap;
  src: local('NotoSans-Medium-italic-latin-ext'),
  url('<?php echo $url;?>noto-sans/latin-ext-500-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 500;
  font-display: swap;
  src: local('NotoSans-Medium-italic-latin'),
  url('<?php echo $url;?>noto-sans/latin-500-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 600;
  font-display: swap;
  src: local('NotoSans-SemiBold-italic-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans/cyrillic-ext-600-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 600;
  font-display: swap;
  src: local('NotoSans-SemiBold-italic-cyrillic'),
  url('<?php echo $url;?>noto-sans/cyrillic-600-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 600;
  font-display: swap;
  src: local('NotoSans-SemiBold-italic-devanagari'),
  url('<?php echo $url;?>noto-sans/devanagari-600-italic.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 600;
  font-display: swap;
  src: local('NotoSans-SemiBold-italic-greek-ext'),
  url('<?php echo $url;?>noto-sans/greek-ext-600-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 600;
  font-display: swap;
  src: local('NotoSans-SemiBold-italic-greek'),
  url('<?php echo $url;?>noto-sans/greek-600-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 600;
  font-display: swap;
  src: local('NotoSans-SemiBold-italic-vietnamese'),
  url('<?php echo $url;?>noto-sans/vietnamese-600-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 600;
  font-display: swap;
  src: local('NotoSans-SemiBold-italic-latin-ext'),
  url('<?php echo $url;?>noto-sans/latin-ext-600-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 600;
  font-display: swap;
  src: local('NotoSans-SemiBold-italic-latin'),
  url('<?php echo $url;?>noto-sans/latin-600-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: local('NotoSans-Bold-italic-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans/cyrillic-ext-700-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: local('NotoSans-Bold-italic-cyrillic'),
  url('<?php echo $url;?>noto-sans/cyrillic-700-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: local('NotoSans-Bold-italic-devanagari'),
  url('<?php echo $url;?>noto-sans/devanagari-700-italic.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: local('NotoSans-Bold-italic-greek-ext'),
  url('<?php echo $url;?>noto-sans/greek-ext-700-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: local('NotoSans-Bold-italic-greek'),
  url('<?php echo $url;?>noto-sans/greek-700-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: local('NotoSans-Bold-italic-vietnamese'),
  url('<?php echo $url;?>noto-sans/vietnamese-700-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: local('NotoSans-Bold-italic-latin-ext'),
  url('<?php echo $url;?>noto-sans/latin-ext-700-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 700;
  font-display: swap;
  src: local('NotoSans-Bold-italic-latin'),
  url('<?php echo $url;?>noto-sans/latin-700-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 800;
  font-display: swap;
  src: local('NotoSans-ExtraBold-italic-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans/cyrillic-ext-800-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 800;
  font-display: swap;
  src: local('NotoSans-ExtraBold-italic-cyrillic'),
  url('<?php echo $url;?>noto-sans/cyrillic-800-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 800;
  font-display: swap;
  src: local('NotoSans-ExtraBold-italic-devanagari'),
  url('<?php echo $url;?>noto-sans/devanagari-800-italic.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 800;
  font-display: swap;
  src: local('NotoSans-ExtraBold-italic-greek-ext'),
  url('<?php echo $url;?>noto-sans/greek-ext-800-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 800;
  font-display: swap;
  src: local('NotoSans-ExtraBold-italic-greek'),
  url('<?php echo $url;?>noto-sans/greek-800-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 800;
  font-display: swap;
  src: local('NotoSans-ExtraBold-italic-vietnamese'),
  url('<?php echo $url;?>noto-sans/vietnamese-800-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 800;
  font-display: swap;
  src: local('NotoSans-ExtraBold-italic-latin-ext'),
  url('<?php echo $url;?>noto-sans/latin-ext-800-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 800;
  font-display: swap;
  src: local('NotoSans-ExtraBold-italic-latin'),
  url('<?php echo $url;?>noto-sans/latin-800-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 900;
  font-display: swap;
  src: local('NotoSans-Black-italic-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans/cyrillic-ext-900-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 900;
  font-display: swap;
  src: local('NotoSans-Black-italic-cyrillic'),
  url('<?php echo $url;?>noto-sans/cyrillic-900-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 900;
  font-display: swap;
  src: local('NotoSans-Black-italic-devanagari'),
  url('<?php echo $url;?>noto-sans/devanagari-900-italic.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 900;
  font-display: swap;
  src: local('NotoSans-Black-italic-greek-ext'),
  url('<?php echo $url;?>noto-sans/greek-ext-900-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 900;
  font-display: swap;
  src: local('NotoSans-Black-italic-greek'),
  url('<?php echo $url;?>noto-sans/greek-900-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 900;
  font-display: swap;
  src: local('NotoSans-Black-italic-vietnamese'),
  url('<?php echo $url;?>noto-sans/vietnamese-900-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 900;
  font-display: swap;
  src: local('NotoSans-Black-italic-latin-ext'),
  url('<?php echo $url;?>noto-sans/latin-ext-900-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: italic;
  font-weight: 900;
  font-display: swap;
  src: local('NotoSans-Black-italic-latin'),
  url('<?php echo $url;?>noto-sans/latin-900-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: local('NotoSans-Thin-normal-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans/cyrillic-ext-100-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: local('NotoSans-Thin-normal-cyrillic'),
  url('<?php echo $url;?>noto-sans/cyrillic-100-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: local('NotoSans-Thin-normal-devanagari'),
  url('<?php echo $url;?>noto-sans/devanagari-100-normal.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: local('NotoSans-Thin-normal-greek-ext'),
  url('<?php echo $url;?>noto-sans/greek-ext-100-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: local('NotoSans-Thin-normal-greek-ext'),
  url('<?php echo $url;?>noto-sans/greek-100-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: local('NotoSans-Thin-normal-vietnamese'),
  url('<?php echo $url;?>noto-sans/vietnamese-100-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: local('NotoSans-Thin-normal-latin-ext'),
  url('<?php echo $url;?>noto-sans/latin-ext-100-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: local('NotoSans-Thin-normal-latin'),
  url('<?php echo $url;?>noto-sans/latin-100-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: local('NotoSans-ExtraLight-normal-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans/cyrillic-ext-200-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: local('NotoSans-ExtraLight-normal-cyrillic'),
  url('<?php echo $url;?>noto-sans/cyrillic-200-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: local('NotoSans-ExtraLight-normal-devanagari'),
  url('<?php echo $url;?>noto-sans/devanagari-200-normal.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: local('NotoSans-ExtraLight-normal-greek-ext'),
  url('<?php echo $url;?>noto-sans/greek-ext-200-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: local('NotoSans-ExtraLight-normal-greek'),
  url('<?php echo $url;?>noto-sans/greek-200-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: local('NotoSans-ExtraLight-normal-vietnamese'),
  url('<?php echo $url;?>noto-sans/vietnamese-200-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: local('NotoSans-ExtraLight-normal-latin-ext'),
  url('<?php echo $url;?>noto-sans/latin-ext-200-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: local('NotoSans-ExtraLight-normal-latin'),
  url('<?php echo $url;?>noto-sans/latin-200-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local('NotoSans-Light-normal-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans/cyrillic-ext-300-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local('NotoSans-Light-normal-cyrillic'),
  url('<?php echo $url;?>noto-sans/cyrillic-300-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local('NotoSans-Light-normal-devanagari'),
  url('<?php echo $url;?>noto-sans/devanagari-300-normal.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local('NotoSans-Light-normal-greek-ext'),
  url('<?php echo $url;?>noto-sans/greek-ext-300-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local('NotoSans-Light-normal-greek'),
  url('<?php echo $url;?>noto-sans/greek-300-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local('NotoSans-Light-normal-vietnamese'),
  url('<?php echo $url;?>noto-sans/vietnamese-300-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local('NotoSans-Light-normal-latin-ext'),
  url('<?php echo $url;?>noto-sans/latin-ext-300-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local('NotoSans-Light-normal-latin'),
  url('<?php echo $url;?>noto-sans/latin-300-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('NotoSans-Regular-normal-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans/cyrillic-ext-400-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('NotoSans-Regular-normal-cyrillic'),
  url('<?php echo $url;?>noto-sans/cyrillic-400-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('NotoSans-Regular-normal-devanagari'),
  url('<?php echo $url;?>noto-sans/devanagari-400-normal.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('NotoSans-Regular-normal-greek-ext'),
  url('<?php echo $url;?>noto-sans/greek-ext-400-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('NotoSans-Regular-normal-greek'),
  url('<?php echo $url;?>noto-sans/greek-400-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('NotoSans-Regular-normal-vietnamese'),
  url('<?php echo $url;?>noto-sans/vietnamese-400-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('NotoSans-Regular-normal-latin-ext'),
  url('<?php echo $url;?>noto-sans/latin-ext-400-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('NotoSans-Regular-normal-latin'),
  url('<?php echo $url;?>noto-sans/latin-400-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: local('NotoSans-Medium-normal-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans/cyrillic-ext-500-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: local('NotoSans-Medium-normal-cyrillic'),
  url('<?php echo $url;?>noto-sans/cyrillic-500-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: local('NotoSans-Medium-normal-devanagari'),
  url('<?php echo $url;?>noto-sans/devanagari-500-normal.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: local('NotoSans-Medium-normal-greek-ext'),
  url('<?php echo $url;?>noto-sans/greek-ext-500-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: local('NotoSans-Medium-normal-greek'),
  url('<?php echo $url;?>noto-sans/greek-500-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: local('NotoSans-Medium-normal-vietnamese'),
  url('<?php echo $url;?>noto-sans/vietnamese-500-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: local('NotoSans-Medium-normal-latin-ext'),
  url('<?php echo $url;?>noto-sans/latin-ext-500-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: local('NotoSans-Medium-normal-latin'),
  url('<?php echo $url;?>noto-sans/latin-500-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local('NotoSans-SemiBold-normal-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans/cyrillic-ext-600-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local('NotoSans-SemiBold-normal-cyrillic'),
  url('<?php echo $url;?>noto-sans/cyrillic-600-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local('NotoSans-SemiBold-normal-devanagari'),
  url('<?php echo $url;?>noto-sans/devanagari-600-normal.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local('NotoSans-SemiBold-normal-greek-ext'),
  url('<?php echo $url;?>noto-sans/greek-ext-600-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local('NotoSans-SemiBold-normal-greek'),
  url('<?php echo $url;?>noto-sans/greek-600-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local('NotoSans-SemiBold-normal-vietnamese'),
  url('<?php echo $url;?>noto-sans/vietnamese-600-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local('NotoSans-SemiBold-normal-latin-ext'),
  url('<?php echo $url;?>noto-sans/latin-ext-600-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local('NotoSans-SemiBold-normal-latin'),
  url('<?php echo $url;?>noto-sans/latin-600-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('NotoSans-Bold-normal-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans/cyrillic-ext-700-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('NotoSans-Bold-normal-cyrillic'),
  url('<?php echo $url;?>noto-sans/cyrillic-700-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('NotoSans-Bold-normal-devanagari'),
  url('<?php echo $url;?>noto-sans/devanagari-700-normal.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('NotoSans-Bold-normal-greek-ext'),
  url('<?php echo $url;?>noto-sans/greek-ext-700-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('NotoSans-Bold-normal-greek'),
  url('<?php echo $url;?>noto-sans/greek-700-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('NotoSans-Bold-normal-vietnamese'),
  url('<?php echo $url;?>noto-sans/vietnamese-700-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('NotoSans-Bold-normal-latin-ext'),
  url('<?php echo $url;?>noto-sans/latin-ext-700-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('NotoSans-Bold-normal-latin'),
  url('<?php echo $url;?>noto-sans/latin-700-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 800;
  font-display: swap;
  src: local('NotoSans-ExtraBold-normal-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans/cyrillic-ext-800-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 800;
  font-display: swap;
  src: local('NotoSans-ExtraBold-normal-cyrillic'),
  url('<?php echo $url;?>noto-sans/cyrillic-800-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 800;
  font-display: swap;
  src: local('NotoSans-ExtraBold-normal-devanagari'),
  url('<?php echo $url;?>noto-sans/devanagari-800-normal.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 800;
  font-display: swap;
  src: local('NotoSans-ExtraBold-normal-greek-ext'),
  url('<?php echo $url;?>noto-sans/greek-ext-800-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 800;
  font-display: swap;
  src: local('NotoSans-ExtraBold-normal-greek'),
  url('<?php echo $url;?>noto-sans/greek-800-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 800;
  font-display: swap;
  src: local('NotoSans-ExtraBold-normal-vietnamese'),
  url('<?php echo $url;?>noto-sans/vietnamese-800-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 800;
  font-display: swap;
  src: local('NotoSans-ExtraBold-normal-latin-ext'),
  url('<?php echo $url;?>noto-sans/latin-ext-800-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 800;
  font-display: swap;
  src: local('NotoSans-ExtraBold-normal-latin'),
  url('<?php echo $url;?>noto-sans/latin-800-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: local('NotoSans-Black-normal-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans/cyrillic-ext-900-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: local('NotoSans-Black-normal-cyrillic'),
  url('<?php echo $url;?>noto-sans/cyrillic-900-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* devanagari */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: local('NotoSans-Black-normal-devanagari'),
  url('<?php echo $url;?>noto-sans/devanagari-900-normal.woff2') format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: local('NotoSans-Black-normal-greek-ext'),
  url('<?php echo $url;?>noto-sans/greek-ext-900-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: local('NotoSans-Black-normal-greek'),
  url('<?php echo $url;?>noto-sans/greek-900-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: local('NotoSans-Black-normal-vietnamese'),
  url('<?php echo $url;?>noto-sans/vietnamese-900-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: local('NotoSans-Black-normal-latin-ext'),
  url('<?php echo $url;?>noto-sans/latin-ext-900-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: local('NotoSans-Black-normal-latin'),
  url('<?php echo $url;?>noto-sans/latin-900-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
