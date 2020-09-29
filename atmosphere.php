<?php
$output = shell_exec('TegraRcmSmash.exe "fusee-primary.bin"');
echo "<html>\n";
echo "<style>\n";
echo "html {\n";
echo "  background-color: #2d2d2d;\n";
echo "  color: #ffffff;\n";
echo "  text-decoration: none;\n";
echo "}\n";
echo ".inner {\n";
echo "  display: inline-block;\n";
echo "}\n";
echo ".right {\n";
echo "  float: right;\n";
echo "}\n";
echo "</style>\n";
echo "<div>\n";
echo "<a class=\"inner\" href=\"index.html\"><img src=\"saturnNX-dark_icon.png\" width=\"100px\"></a>\n";
echo "<a class=\"inner right\"><img src=\"icon_atmosphere-alt.png\" width=\"100px\"></a>\n";
echo "<br>";
echo "<pre>$output</pre>";
?>