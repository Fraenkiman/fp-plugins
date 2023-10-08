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
 * ==============
 * Font Open Sans
 * ==============
 *
 * Name: Font Open Sans
 * Module: open-sans.css
 * Designer Name: Steve Matteson
 * Author URI: https://fonts.google.com/specimen/Open+Sans
 * Description: This file defines the font
 * Last change: 05.09.2023
 * License: The font of Google "Open Sans" is under SIL Open Font-License (OFL)
 */
 
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Light-italic-cyrillic-ext'),
  url('<?php echo $url;?>open-sans/cyrillic-ext-300-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Light-italic-cyrillic'),
  url('<?php echo $url;?>open-sans/cyrillic-300-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Light-italic-greek-ext'),
  url('<?php echo $url;?>open-sans/greek-ext-300-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Light-italic-greek'),
  url('<?php echo $url;?>open-sans/greek-300-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* hebrew */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Light-italic-hebrew'),
  url('<?php echo $url;?>open-sans/hebrew-300-italic.woff2') format('woff2');
  unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
}

/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Light-italic-vietnamese'),
  url('<?php echo $url;?>open-sans/vietnamese-300-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Light-italic-latin-ext'),
  url('<?php echo $url;?>open-sans/latin-ext-300-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Light-italic-latin'),
  url('<?php echo $url;?>open-sans/latin-300-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Regular-italic-cyrillic-ext'),
  url('<?php echo $url;?>open-sans/cyrillic-ext-400-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Regular-italic-cyrillic'),
  url('<?php echo $url;?>open-sans/cyrillic-400-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Regular-italic-greek-ext'),
  url('<?php echo $url;?>open-sans/greek-ext-400-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Regular-italic-greek'),
  url('<?php echo $url;?>open-sans/greek-400-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* hebrew */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Regular-italic-hebrew'),
  url('<?php echo $url;?>open-sans/hebrew-400-italic.woff2') format('woff2');
  unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
}

/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Regular-italic-vietnamese'),
  url('<?php echo $url;?>open-sans/vietnamese-400-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Regular-italic-latin-ext'),
  url('<?php echo $url;?>open-sans/latin-ext-400-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Regular-italic-latin'),
  url('<?php echo $url;?>open-sans/latin-400-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Medium-italic-cyrillic-ext'),
  url('<?php echo $url;?>open-sans/cyrillic-ext-500-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Medium-italic-cyrillic'),
  url('<?php echo $url;?>open-sans/cyrillic-500-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Medium-italic-greek-ext'),
  url('<?php echo $url;?>open-sans/greek-ext-500-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Medium-italic-greek'),
  url('<?php echo $url;?>open-sans/greek-500-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* hebrew */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Medium-italic-hebrew'),
  url('<?php echo $url;?>open-sans/hebrew-500-italic.woff2') format('woff2');
  unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
}

/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Medium-italic-vietnamese'),
  url('<?php echo $url;?>open-sans/vietnamese-500-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Medium-italic-latin-ext'),
  url('<?php echo $url;?>open-sans/latin-ext-500-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Medium-italic-latin'),
  url('<?php echo $url;?>open-sans/latin-500-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-SemiBold-italic-cyrillic-ext'),
  url('<?php echo $url;?>open-sans/cyrillic-ext-600-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-SemiBold-italic-cyrillic'),
  url('<?php echo $url;?>open-sans/cyrillic-600-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-SemiBold-italic-greek-ext'),
  url('<?php echo $url;?>open-sans/greek-ext-600-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-SemiBold-italic-greek'),
  url('<?php echo $url;?>open-sans/greek-600-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* hebrew */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-SemiBold-italic-hebrew'),
  url('<?php echo $url;?>open-sans/hebrew-600-italic.woff2') format('woff2');
  unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
}

/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-SemiBold-italic-vietnamese'),
  url('<?php echo $url;?>open-sans/vietnamese-600-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-SemiBold-italic-latin-ext'),
  url('<?php echo $url;?>open-sans/latin-ext-600-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-SemiBold-italic-latin'),
  url('<?php echo $url;?>open-sans/latin-600-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Bold-italic-cyrillic-ext'),
  url('<?php echo $url;?>open-sans/cyrillic-ext-700-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Bold-italic-cyrillic'),
  url('<?php echo $url;?>open-sans/cyrillic-700-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Bold-italic-greek-ext'),
  url('<?php echo $url;?>open-sans/greek-ext-700-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Bold-italic-greek'),
  url('<?php echo $url;?>open-sans/greek-700-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* hebrew */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Bold-italic-hebrew'),
  url('<?php echo $url;?>open-sans/hebrew-700-italic.woff2') format('woff2');
  unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
}

/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Bold-italic-vietnamese'),
  url('<?php echo $url;?>open-sans/vietnamese-700-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Bold-italic-latin-ext'),
  url('<?php echo $url;?>open-sans/latin-ext-700-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Bold-italic-latin'),
  url('<?php echo $url;?>open-sans/latin-700-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-ExtraBold-italic-cyrillic-ext'),
  url('<?php echo $url;?>open-sans/cyrillic-ext-800-italic.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-ExtraBold-italic-cyrillic'),
  url('<?php echo $url;?>open-sans/cyrillic-800-italic.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-ExtraBold-italic-greek-ext'),
  url('<?php echo $url;?>open-sans/greek-ext-800-italic.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-ExtraBold-italic-greek'),
  url('<?php echo $url;?>open-sans/greek-800-italic.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* hebrew */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-ExtraBold-italic-hebrew'),
  url('<?php echo $url;?>open-sans/hebrew-800-italic.woff2') format('woff2');
  unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
}

/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-ExtraBold-italic-vietnamese'),
  url('<?php echo $url;?>open-sans/vietnamese-800-italic.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-ExtraBold-italic-latin-ext'),
  url('<?php echo $url;?>open-sans/latin-ext-800-italic.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-ExtraBold-italic-latin-ext'),
  url('<?php echo $url;?>open-sans/latin-800-italic.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Light-normal-cyrillic-ext'),
  url('<?php echo $url;?>open-sans/cyrillic-ext-300-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Light-normal-cyrillic'),
  url('<?php echo $url;?>open-sans/cyrillic-300-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Light-normal-greek-ext'),
  url('<?php echo $url;?>open-sans/greek-ext-300-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Light-normal-greek'),
  url('<?php echo $url;?>open-sans/greek-300-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* hebrew */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Light-normal-hebrew'),
  url('<?php echo $url;?>open-sans/hebrew-300-normal.woff2') format('woff2');
  unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
}

/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Light-normal-vietnamese'),
  url('<?php echo $url;?>open-sans/vietnamese-300-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Light-normal-latin-ext'),
  url('<?php echo $url;?>open-sans/latin-ext-300-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Light-normal-latin'),
  url('<?php echo $url;?>open-sans/latin-300-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Regular-normal-cyrillic-ext'),
  url('<?php echo $url;?>open-sans/cyrillic-ext-400-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Regular-normal-cyrillic'),
  url('<?php echo $url;?>open-sans/cyrillic-400-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Regular-normal-greek-ext'),
  url('<?php echo $url;?>open-sans/greek-ext-400-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Regular-normal-greek'),
  url('<?php echo $url;?>open-sans/greek-400-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* hebrew */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Regular-normal-hebrew'),
  url('<?php echo $url;?>open-sans/hebrew-400-normal.woff2') format('woff2');
  unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
}

/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Regular-normal-vietnamese'),
  url('<?php echo $url;?>open-sans/vietnamese-400-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Regular-normal-latin-ext'),
  url('<?php echo $url;?>open-sans/latin-ext-400-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Regular-normal-latin'),
  url('<?php echo $url;?>open-sans/latin-400-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Medium-normal-cyrillic-ext'),
  url('<?php echo $url;?>open-sans/cyrillic-ext-500-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Medium-normal-cyrillic'),
  url('<?php echo $url;?>open-sans/cyrillic-500-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Medium-normal-greek-ext'),
  url('<?php echo $url;?>open-sans/greek-ext-500-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Medium-normal-greek'),
  url('<?php echo $url;?>open-sans/greek-500-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* hebrew */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Medium-normal-hebrew'),
  url('<?php echo $url;?>open-sans/hebrew-500-normal.woff2') format('woff2');
  unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
}

/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Medium-normal-vietnamese'),
  url('<?php echo $url;?>open-sans/vietnamese-500-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Medium-normal-latin-ext'),
  url('<?php echo $url;?>open-sans/latin-ext-500-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 500;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Medium-normal-latin'),
  url('<?php echo $url;?>open-sans/latin-500-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-SemiBold-normal-cyrillic-ext'),
  url('<?php echo $url;?>open-sans/cyrillic-ext-600-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-SemiBold-normal-cyrillic'),
  url('<?php echo $url;?>open-sans/cyrillic-600-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-SemiBold-normal-greek-ext'),
  url('<?php echo $url;?>open-sans/greek-ext-600-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-SemiBold-normal-greek'),
  url('<?php echo $url;?>open-sans/greek-600-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* hebrew */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-SemiBold-normal-hebrew'),
  url('<?php echo $url;?>open-sans/hebrew-600-normal.woff2') format('woff2');
  unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
}

/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-SemiBold-normal-vietnamese'),
  url('<?php echo $url;?>open-sans/vietnamese-600-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-SemiBold-normal-latin-ext'),
  url('<?php echo $url;?>open-sans/latin-ext-600-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-SemiBold-normal-latin'),
  url('<?php echo $url;?>open-sans/latin-600-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Bold-normal-cyrillic-ext'),
  url('<?php echo $url;?>open-sans/cyrillic-ext-700-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Bold-normal-cyrillic'),
  url('<?php echo $url;?>open-sans/cyrillic-700-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Bold-normal-greek-ext'),
  url('<?php echo $url;?>open-sans/greek-ext-700-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Bold-normal-greek'),
  url('<?php echo $url;?>open-sans/greek-700-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* hebrew */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Bold-normal-hebrew'),
  url('<?php echo $url;?>open-sans/hebrew-700-normal.woff2') format('woff2');
  unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
}

/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Bold-normal-vietnamese'),
  url('<?php echo $url;?>open-sans/vietnamese-700-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Bold-normal-latin-ext'),
  url('<?php echo $url;?>open-sans/latin-ext-700-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-Bold-normal-latin'),
  url('<?php echo $url;?>open-sans/latin-700-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-ExtraBold-normal-cyrillic-ext'),
  url('<?php echo $url;?>open-sans/cyrillic-ext-800-normal.woff2') format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-ExtraBold-normal-cyrillic'),
  url('<?php echo $url;?>open-sans/cyrillic-800-normal.woff2') format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-ExtraBold-normal-greek-ext'),
  url('<?php echo $url;?>open-sans/greek-ext-800-normal.woff2') format('woff2');
  unicode-range: U+1F00-1FFF;
}

/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-ExtraBold-normal-greek'),
  url('<?php echo $url;?>open-sans/greek-800-normal.woff2') format('woff2');
  unicode-range: U+0370-03FF;
}

/* hebrew */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-ExtraBold-normal-hebrew'),
  url('<?php echo $url;?>open-sans/hebrew-800-normal.woff2') format('woff2');
  unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
}

/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-ExtraBold-normal-vietnamese'),
  url('<?php echo $url;?>open-sans/vietnamese-800-normal.woff2') format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-ExtraBold-normal-latin-ext'),
  url('<?php echo $url;?>open-sans/latin-ext-800-normal.woff2') format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}

/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  font-stretch: 100%;
  font-display: swap;
  src: local('OpenSans-ExtraBold-normal-latin'),
  url('<?php echo $url;?>open-sans/latin-800-normal.woff2') format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
