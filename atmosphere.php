<?php
$output = shell_exec('TegraRcmSmash.exe "fusee-primary.bin"');
echo "<html>\n";
echo "<style>\n";
echo "html {\n";
echo "  background-color: #000b45;\n";
echo "  color: #ffffff;\n";
echo "  text-decoration: none;\n";
echo "}\n";
echo "</style>\n";
echo "<a style=\"font-family: Arial;color: #ffffff;text-decoration: none;\"href=\"index.html\">Back to payloads</a>";
echo "<pre>$output</pre>";
?>