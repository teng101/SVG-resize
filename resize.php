$svg = new EasySVG();
$svg->setFontSVG($svgFont->filename);
$svg->setFontSize(100);
$svg->setFontColor('#000000');
$svg->setLineHeight(0);
$svg->setUseKerning(true);
$svg->addText($demoText);

// Get the dimensions of the text in the SVG
list($textWidth, $textHeight) = $svg->textDimensions($demoText);

// Set the viewbox attribute to match the dimensions of the text
$svg->addAttribute("viewbox", "0 0 $textWidth $textHeight");

// Remove the width and height attributes to allow the SVG to resize to fit the text
$svg->removeAttribute("width");
$svg->removeAttribute("height");
