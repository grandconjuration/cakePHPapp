<?php // views/elements/errors.ctp
if (!empty($errors)) { ?>
<div class="errors" style="color: #F62817;">
    <h2>Er zat(en) <?php echo count($errors); ?> fout(en) in de aanvraag:</h2>
    
    <ul>
        <?php foreach ($errors as $error) { 
        		foreach($error as $field => $error) {?>
        			<li><?php echo $error; ?></li>
        <?php } } ?>
    </ul>
</div>
<?php } ?>