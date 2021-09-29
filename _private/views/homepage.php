<?php $this->layout('layouts::website');?>

<?php $this->start('sidebar')?>
<!-- Door sections toe te voegen aan je layout kun je deze per pagina aanpassen -->
<div class="top-10">
	<h3>Meer weten over...</h3>
	<ol>
        <li><a href="https://www.transformers.community/" target="_blank">Transformers Community</a></li>
        <li><a href="https://www.nji.nl/depressie" target="_blank">Depressie</a></li>
        <li><a href="http://www.kenniscentrum-kjp.nl/ouders-jongeren/angst/" target="_blank">Angststoornissen</a></li>
        <li><a href="http://www.kenniscentrum-kjp.nl/ouders-jongeren/gedragsstoornissen-odd-cd/" target="_blank">Gedragsstoornissen</a></li>
        <li><a href="http://www.trimbos.nl/" target="_blank">Verslaving</a></li>
	</ol>
</div>
<?php $this->stop()?>

<h1 class="middenstuk">Welkom</h1>

<p>Dit is de start van jullie project website!</p> 
<ul>
    <li>
        <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>
        <a href="<?php echo url( 'admin' ) ?>"<?php if ( current_route_is( 'index' ) ): ?> class="active"<?php endif ?>>Aanmelden</a>

    </li>
</ul>



