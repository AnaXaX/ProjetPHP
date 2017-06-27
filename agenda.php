<?php
    require("navbar.php");

    if(isset($_SESSION['user'])){

        if($_SESSION['user']=='etudiant'){

        }
        else if($_SESSION['user']=='parent'){

        }
        else{

        }
    }    
?>




    <script>
        var d = document.getElementById('agenda');
        d.className='active';
    </script>
<?php
    require("footer.php");
?>
