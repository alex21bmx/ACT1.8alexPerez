<?php
$gestor = @fopen("CurriculumCCFF.txt", "r");
if ($gestor) {
    while (($búfer = fgets($gestor, 4096)) !== false) {
        echo $búfer."<br>";
    }
    if (!feof($gestor)) {
        echo "Error: fallo inesperado de fgets()\n";
    }
    fclose($gestor);
}
?>