<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?page=onkunde" method="POST">    
    <h2>Onkunde</h2>
    <label class="label" for="input1">Wat zou je graag willen kunnen?</label>
    <input class="input" name="input1" type="text" placeholder="vul hier in..." required>        
    
    <label class="label" for="input2">Met welke persoon kun je goed opschieten?</label>
    <input class="input" name="input2" type="text" placeholder="vul hier in..." required>

    <label for="input3">Wat is je favoriete getal?</label>
    <input class="input" name="input3"type="text" placeholder="vul hier in..." required>
        
    <label for="input4">Wat heb je altijd bij je als je op vakantie gaat?</label>
    <input class="input" name="input4"type="text" placeholder="vul hier in..." required>
    
    <label for="input5">Wat is je beste persoonlijke eigenschap?</label>
    <input class="input" name="input5"type="text" placeholder="vul hier in..." required>
    
    <label for="input6">Wat is je slechtste persoonlijke eigenschap?</label>
    <input class="input" name="input6"type="text" placeholder="vul hier in..." required>
        
    <label for="input7">Wat is het slechtste wat je kan overkomen?</label>
    <input class="input" name="input7"type="text" placeholder="vul hier in..." required> 

    <input type="submit" value="submit" name="submit" class="button">

    <?php
    foreach ($error as $name_input => $error) {
        echo "<li>". $error."</li>";
    }
    ?>
</form>


