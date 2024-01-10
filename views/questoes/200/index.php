<?php
    include("../../../../componentes/head.php");
    $p = $_GET['p'];
    echo "<form method='POST' id='form' action='cq$p.php'>";
    include("q$p.html");
    echo "</form>
    </body>
</html>";
?>