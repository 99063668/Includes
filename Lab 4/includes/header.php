<!-- <div class="container">
    <nav>
        <ul>
            <li><a href="index.php?pages=Call_of_Duty">Call of Duty</a></li>
            <li><a href="index.php?pages=God_of_War">God of War</a></li>
            <li><a href="index.php?pages=Beat_Saber">Beat Saber</a></li>
            <li><a href="index.php?pages=Tekken_7">Tekken 7</a></li>
        </ul>
    </nav>
</div> -->

<div class="container">
    <nav>
        <ul>
            <?php
                foreach ($result as $array) {
                    echo '<li><a href="index.php?pages='.$array["id"].'">'.$array["name"].'</a></li>';
                }
            ?>
        </ul>
    </nav>
</div>
