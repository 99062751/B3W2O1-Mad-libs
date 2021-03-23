<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?page=paniek" method="POST">  
<?php
    foreach ($error as $name_input => $error) {
        $errormsg= "<p class='error'>". $error. "</p>";
    }
    ?>

    <h2>Er heerst paniek...</h2>
    <label class="label" for="input8">Welk dier zou je nooit als huisdier willen hebben?</label>
    <input class="input" name="input8" type="text" placeholder="vul hier in..." >
    <?php echo $errormsg?>

    <label class="label" for="input9">Wie is de belangrijkste persoon in je leven?</label>
    <input class="input" name="input9" type="text" placeholder="vul hier in..." > 
    <?php echo $errormsg?>

    <label class="label" for="input10">In welk land zou je graag willen wonen?</label>
    <input class="input" name="input10"type="text" placeholder="vul hier in..." > 
    <?php echo $errormsg?>

    <label class="label" for="input11">Wat doe je als je je verveelt?</label>
    <input class="input" name="input11"type="text" placeholder="vul hier in..." > 
    <?php echo $errormsg?>

    <label class="label" for="input12">Met welk speelgoed speelde je als kind het meest?</label>
    <input class="input" name="input12"type="text" placeholder="vul hier in..." > 
    <?php echo $errormsg?>

    <label class="label" for="input13">Bij welke docent spijbel je het liefst?</label>
    <input class="input" name="input13"type="text" placeholder="vul hier in..." > 
    <?php echo $errormsg?>

    <label class="label" for="input14">Als je €100.000,- had wat zou je dan kopen?</label>
    <input class="input" name="input14"type="text" placeholder="vul hier in..." > 
    <?php echo $errormsg?>

    <label class="label" for="input15">Wat is je favoriete bezigheid?</label>
    <input class="input" name="input15"type="text" placeholder="vul hier in..." > 
    <?php echo $errormsg?>

    <input type="submit" value="submit" class="button">

</form>