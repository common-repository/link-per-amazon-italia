<div class="wrap">
<p style="background-color:#252525;width:100%;"><a href="https://www.wpefficaceclub.it"><img src="<?php echo plugins_url( 'wp.png', __FILE__ ); ?>"  /></a></p>
    <h1>Link Offerte a Amazon Italia</h1>
    <form method="post" action="options.php"> 
        <?php @settings_fields($PLUGINMATRIX_NAME); ?>
        <?php @do_settings_fields($PLUGINMATRIX_NAME); ?>
	
        <h3>Testo Bottone</h3>
		<input style="width:100%" type="text" name="<?php echo $PLUGINMATRIX_NAME?>InputField1" id="<?php echo $PLUGINMATRIX_NAME?>InputField1" value="<?php echo get_option($PLUGINMATRIX_NAME."InputField1");?>" placeholder="esempio: Trova Offerte" />
		
		<h3>Affiliate ID</h3>
		<input style="width:100%" type="text" name="<?php echo $PLUGINMATRIX_NAME?>InputField2" id="<?php echo $PLUGINMATRIX_NAME?>InputField2" value="<?php echo get_option($PLUGINMATRIX_NAME."InputField2");?>" placeholder="esempio: wpefficaceclub-21"/>
		
		<h3>Colore Bottone</h3>
		<input style="width:100%" type="text" name="<?php echo $PLUGINMATRIX_NAME?>InputField3" id="<?php echo $PLUGINMATRIX_NAME?>InputField3" value="<?php echo get_option($PLUGINMATRIX_NAME."InputField3");?>" placeholder="esempio: #000000"/>
		
        <?php @submit_button(); ?>
    </form>
		<p>Scopri altri plugin per <strong>migliorare il tuo sito</strong> su <a href="https://www.wpefficaceclub.it">WPefficace CLUB.it ></a></p>
	
	<p>Usa questo shortcode [Link_Amazon] per mostrare il bottone alle offerte nel tuo template o in post o pagine specifiche. </p>
	<p>Ricorda di aggiungere al post un "Campo Personalizzato" con NOME "prodotto" e per VALORE il nome del prodotto che vuoi promuovere.</p>
	

	
	</div>