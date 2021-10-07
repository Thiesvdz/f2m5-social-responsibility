<?php $this->layout('layouts::website');?>

<h3>Inschrijven</h3>

<p>Schijf u in om gebruik te maken van alle features</p>

<form action="" method="POST">

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" value="" class="form-control" id="email">
        <small id="emailHelp" class="form-text text-muted"></small> 
    </div>

    <div class="form-group">
        <label for="wachtwoord">Wachtwoord</label>
        <input type="password" name="wachtwoord" value="" class="form-control" id="wachtwoord">
    </div>

    <button type="submit" class="btn btn-primary">Aanmelden</button>

</form>