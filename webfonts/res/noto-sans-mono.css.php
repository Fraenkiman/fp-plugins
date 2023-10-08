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
$host = (empty ($_SERVER ['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]";
$hostupper = strtoupper($host);
$path = rtrim(dirname($_SERVER ['PHP_SELF']), '/\\');
$url = '' . $host . $path . '/';
?>

/*
 * ===================
 * Font Noto Sans Mono
 * ===================
 *
 * Name: Font Noto Sans
 * Module: moto-sans-nomo.css
 * Designer Name:
 * Author URI: https://fonts.google.com/noto/specimen/Noto+Sans+Mono
 * Description: This file defines the font
 * Last change: 05.09.2023
 * License: The font of Google "Noto Sans Mono" is under SIL Open Font-License (OFL)
 */

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 100;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Thin-normal-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans-mono/cyrillic-ext-100-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 100;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Thin-normal-cyrillic'),
  url('<?php echo $url;?>noto-sans-mono/cyrillic-100-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 100;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Thin-normal-greek-ext'),
  url('<?php echo $url;?>noto-sans-mono/greek-ext-100-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 100;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Thin-normal-greek'),
  url('<?php echo $url;?>noto-sans-mono/greek-100-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 100;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Thin-normal-vietnamese'),
  url('<?php echo $url;?>noto-sans-mono/vietnamese-100-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 100;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Thin-normal-latin-ext'),
  url('<?php echo $url;?>noto-sans-mono/latin-ext-100-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 100;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Thin-normal-latin'),
  url('<?php echo $url;?>noto-sans-mono/latin-100-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 200;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-ExtraLight-normal-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans-mono/cyrillic-ext-200-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 200;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-ExtraLight-normal-cyrillic'),
  url('<?php echo $url;?>noto-sans-mono/cyrillic-200-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 200;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-ExtraLight-normal-greek-ext'),
  url('<?php echo $url;?>noto-sans-mono/greek-ext-200-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 200;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-ExtraLight-normal-greek'),
  url('<?php echo $url;?>noto-sans-mono/greek-200-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 200;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-ExtraLight-normal-vietnamese'),
  url('<?php echo $url;?>noto-sans-mono/vietnamese-200-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 200;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-ExtraLight-normal-latin-ext'),
  url('<?php echo $url;?>noto-sans-mono/latin-ext-200-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 200;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-ExtraLight-normal-latin'),
  url('<?php echo $url;?>noto-sans-mono/latin-200-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Light-normal-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans-mono/cyrillic-ext-300-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Light-normal-cyrillic'),
  url('<?php echo $url;?>noto-sans-mono/cyrillic-300-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Light-normal-greek-ext'),
  url('<?php echo $url;?>noto-sans-mono/greek-ext-300-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Light-normal-greek'),
  url('<?php echo $url;?>noto-sans-mono/greek-300-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Light-normal-vietnamese'),
  url('<?php echo $url;?>noto-sans-mono/vietnamese-300-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Light-normal-latin-ext'),
  url('<?php echo $url;?>noto-sans-mono/latin-ext-300-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Light-normal-latin'),
  url('<?php echo $url;?>noto-sans-mono/latin-300-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Regular-normal-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans-mono/cyrillic-ext-400-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Regular-normal-cyrillic'),
  url('<?php echo $url;?>noto-sans-mono/cyrillic-400-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Regular-normal-greek-ext'),
  url('<?php echo $url;?>noto-sans-mono/greek-ext-400-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Regular-normal-greek'),
  url('<?php echo $url;?>noto-sans-mono/greek-400-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Regular-normal-vietnamese'),
  url('<?php echo $url;?>noto-sans-mono/vietnamese-400-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Regular-normal-latin-ext'),
  url('<?php echo $url;?>noto-sans-mono/latin-ext-400-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Regular-normal-latin'),
  url('<?php echo $url;?>noto-sans-mono/latin-400-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Medium-normal-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans-mono/cyrillic-ext-500-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Medium-normal-cyrillic'),
  url('<?php echo $url;?>noto-sans-mono/cyrillic-500-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Medium-normal-greek-ext'),
  url('<?php echo $url;?>noto-sans-mono/greek-ext-500-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Medium-normal-greek'),
  url('<?php echo $url;?>noto-sans-mono/greek-500-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Medium-normal-vietnamese'),
  url('<?php echo $url;?>noto-sans-mono/vietnamese-500-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Medium-normal-latin-ext'),
  url('<?php echo $url;?>noto-sans-mono/latin-ext-500-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Medium-normal-latin'),
  url('<?php echo $url;?>noto-sans-mono/latin-500-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-SemiBold-normal-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans-mono/cyrillic-ext-600-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-SemiBold-normal-cyrillic'),
  url('<?php echo $url;?>noto-sans-mono/cyrillic-600-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-SemiBold-normal-greek-ext'),
  url('<?php echo $url;?>noto-sans-mono/greek-ext-600-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-SemiBold-normal-greek'),
  url('<?php echo $url;?>noto-sans-mono/greek-600-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-SemiBold-normal-vietnamese'),
  url('<?php echo $url;?>noto-sans-mono/vietnamese-600-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-SemiBold-normal-latin-ext'),
  url('<?php echo $url;?>noto-sans-mono/latin-ext-600-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-SemiBold-normal-latin'),
  url('<?php echo $url;?>noto-sans-mono/latin-600-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Bold-normal-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans-mono/cyrillic-ext-700-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Bold-normal-cyrillic'),
  url('<?php echo $url;?>noto-sans-mono/cyrillic-700-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Bold-normal-greek-ext'),
  url('<?php echo $url;?>noto-sans-mono/greek-ext-700-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Bold-normal-greek'),
  url('<?php echo $url;?>noto-sans-mono/greek-700-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Bold-normal-vietnamese'),
  url('<?php echo $url;?>noto-sans-mono/vietnamese-700-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Bold-normal-latin-ext'),
  url('<?php echo $url;?>noto-sans-mono/latin-ext-700-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Bold-normal-latin'),
  url('<?php echo $url;?>noto-sans-mono/latin-700-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-ExtraBold-normal-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans-mono/cyrillic-ext-800-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-ExtraBold-normal-cyrillic'),
  url('<?php echo $url;?>noto-sans-mono/cyrillic-800-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-ExtraBold-normal-greek-ext'),
  url('<?php echo $url;?>noto-sans-mono/greek-ext-800-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-ExtraBold-normal-greek'),
  url('<?php echo $url;?>noto-sans-mono/greek-800-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-ExtraBold-normal-vietnamese'),
  url('<?php echo $url;?>noto-sans-mono/vietnamese-800-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-ExtraBold-normal-latin-ext'),
  url('<?php echo $url;?>noto-sans-mono/latin-ext-800-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-ExtraBold-normal-latin'),
  url('<?php echo $url;?>noto-sans-mono/latin-800-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 900;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Black-normal-cyrillic-ext'),
  url('<?php echo $url;?>noto-sans-mono/cyrillic-ext-900-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 900;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Black-normal-cyrillic'),
  url('<?php echo $url;?>noto-sans-mono/cyrillic-900-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 900;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Black-normal-greek-ext'),
  url('<?php echo $url;?>noto-sans-mono/greek-ext-900-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 900;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Black-normal-greek'),
  url('<?php echo $url;?>noto-sans-mono/greek-900-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* vietnamese */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 900;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Black-normal-vietnamese'),
  url('<?php echo $url;?>noto-sans-mono/vietnamese-900-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 900;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Black-normal-latin-ext'),
  url('<?php echo $url;?>noto-sans-mono/latin-ext-900-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Noto Sans Mono';
  font-style: normal;
  font-weight: 900;
  font-stretch: 100%;
  font-display: swap;
  src: local('NotoSansMono-Black-normal-latin'),
  url('<?php echo $url;?>noto-sans-mono/latin-900-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
