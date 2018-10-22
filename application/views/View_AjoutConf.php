<p>
    <form>
        <div class="conf">Numéro de la conférence</div><input type='textarea' name='num'>numéro de la conférence</textarea><p>    </p>
        <div class="conf">Titre de la conférence</div><input type='textarea' name='titre'>Titre de votre conférence</textarea><br>
        <div class="conf">Numéro de la conférence</div><input type='textarea' name='contenu'>contenu de la conférence</textarea><p>    </p>
        <div class="conf">Choix de la difficulté</div>
        <select name="difficulte">
        <?php
    foreach ($lesConf as $uneConf)
    {
?>
    <option value ='<?php echo $uneConf->IDNIVEAU ?>'><?php echo "<p>".$uneConf->NIVEAU."</p>"; ?></option>
<?php
    }
?>
        </select><br>
        <div class="conf">Choix du thème</div>
        <select name="theme">
        <?php
    foreach ($lesConf as $uneConf)
    {
?>
    <option value ='<?php echo $uneConf->IDTHEME ?>'><?php echo "<p>".$uneConf->LIBELLETHEME."</p>"; ?></option>
<?php
    }
?><br>
    <div class="conf">Choix des technologies</div>
    <select name="techno">
    <?php
        foreach($lesConf as $uneConf){  
                echo "<div class='techno'><input type='checkbox' name='techno[]' value='".$uneConf->IDTECHNO."'>".$uneConf->NOMTECHNO."</input></div>"; 
        }
    ?>
        <br>
        <?php
        echo "<button type='submit' value='ValiderConference' onclick='ValiderlesPresences'></input>"
        ?>
    </select>
    </form>
</p>