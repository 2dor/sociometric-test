<html>
     <head>
        <title> Test sociometric </title>
        <link rel="stylesheet" href="style3.css" type="text/css">
    </head>
</html>

<?php
    $user = "dummy";
    echo "<div class='container'>\n";
    echo "  <p style='color: white;'> Utilizator: $user </p>\n";
    echo "</div>\n";
?>

<html>

    <script type="text/javascript">
        function load_stuff(page)
        {
            //alert(window.location.protocol);
            //alert(window.location.host);
            //alert(window.location.pathname);
            var my_pathway = window.location.protocol + "//" + window.location.host + window.location.pathname;
            window.location.href = my_pathway + "?stuff=" + page;
            //window.location.href = "http://localhost/meniu_page.php?stuff=" + page;
        }
    </script>

    <body>

        <div class="header">
            <h1 class="title"> Test Sociometric </h1>
        </div>

        <div class="sidebar" align="center">
            <table class="sidetable">
                <tr> <td onclick="load_stuff('new_class.php');"> <b>Creare colectiv nou</b> </td> </tr>
                <tr> <td onclick="load_stuff('load_table.php');"> <b>Importare colectiv</b> </td> </tr>
                <tr> <td onclick="load_stuff('copy_table.php');"> <b>Copiere colectiv</b> </td> </tr>
                <tr> <td onclick="load_stuff('insert_table.php');"> <b>Introducere elevi</b> </td> </tr>
                <tr> <td onclick="load_stuff('delete_student.php');"> <b>Stergere elevi</b> </td> </tr>
                <tr> <td onclick="load_stuff('change_data.php');"> <b>Modificare date personale</b> </td> </tr>
                <tr> <td onclick="load_stuff('insert_preferences.php');"> <b>Modificare preferinte</b> </td> </tr>
                <tr> <td onclick="load_stuff('print_table.php');"> <b>Afisare colectiv</b> </td> </tr>
                <tr> <td onclick="load_stuff('print_matrix.php');"> <b>Afisare matrice sociometrica</b> </td> </tr>
                <tr> <td onclick="load_stuff('print_standings.php');"> <b>Afisare clasament popularitate</b> </td> </tr>
                <tr> <td onclick="load_stuff('sociometric_target2.php');"> <b>Afisare tinta sociometrica</b> </td> </tr>
                <tr> <td onclick="load_stuff('geometric_scr.php');"> <b>Simulator</b> </td> </tr>
                <tr> <td onclick="load_stuff('detectGroups.php');"> <b>Detectare grupuri</b> </td> </tr>
            </table>
        </div>

        <?php

        if ( isset($_GET['stuff']) )
            $now = $_GET['stuff'];
        else
            $now = "welcome.php";

        echo "<div class=\"content\">";
        echo "<iframe src=\"$now\" class=\"frame\" width=1140 height=840> </iframe>";
        echo "</div>";

        ?>

        <div class="footer">
            <p class="ftext"> Soft realizat de Ciurca Tudor si Dan Alexandru. Contact: dan.alex97@yahoo.com </p>
        </div>

    </body>

</html>
