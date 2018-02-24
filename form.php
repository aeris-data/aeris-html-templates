<?php include ('layout/head.php');?>

<body class="home page-template-template-homepage" data-color="#4765a0" data-secondary-color="#f39c12" data-text-color="" data-link-hover-color="">

<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content">Aller au contenu</a>

<?php include ('layout/header.php');?>

<div id="breadcrumbs">
	<div class="wrapper">
		<nav aria-label="Fil d'Ariane / breadcrumbs" role="breadcrumbs">
            <a href="index.php" title="Homepage">Homepage</a>
            <span class="delimiter"> / </span>
            <a class="bread-parent bread-parent-1019" href="#" title="Templates">Path</a>
            <span class="delimiter"> / </span>
            <a class="bread-parent bread-parent-1019" href="#" title="Templates">To</a>
            <span class="delimiter"> / </span>
            <span class="current">Formulaires - forms</span>
        </nav>		
        <h1 rel="bookmark">
			Formulaires / forms
        </h1>
	</div>
</div>

<div id="content-area" class="wrapper default">
    <main id="main" class="site-main" role="main">
        <article>
            <figure>
                <img width="1024" height="500" src="https://www7.obs-mip.fr/wp-content-aeris/uploads/sites/29/2018/02/DSC7632-1024x500.jpg" class="wp-post-image" alt="" />    
            </figure>
                <div class="wrapper-content">
                    <h1>titre niveau 1 / heading level 1</h1>
                    <h1>Les formulaires</h1>
                    <p data-height="265" data-theme-id="0" data-slug-hash="xYjrQE" data-default-tab="html" data-user="pvert" data-embed-version="2" data-pen-title="Formulaires" class="codepen">See the Pen <a href="https://codepen.io/pvert/pen/xYjrQE/">Formulaires</a> by pV (<a href="https://codepen.io/pvert">@pvert</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                    
                    <form>
                        <label for="input1">
                            Text Input
                            <input id="input1" type="text">
                        </label>
                        <p class="help-block">Example block-level help text here.</p>

                        <label for="input2">
                            Text Input with Placeholder
                            <input id="input2" type="text" placeholder="Enter text">
                        </label>

                        <label for="input3">
                            File input
                            <input id="input3" type="file">
                        </label>

                        <label for="input4">
                            Text area
                            <textarea id="input4" rows="3"></textarea>
                        </label>

                        <h3>Checkboxes</h3>
                        <div class="checkbox-block">
                            <label for="input5">
                                <input id="input5" type="checkbox" value="">Checkbox 1
                            </label>
                            <label for="input6">
                                <input id="input6" type="checkbox" value="">Checkbox 2
                            </label>
                            <label for="input7">
                                <input id="input7" type="checkbox" value="">Checkbox 3
                            </label>
                        </div>
                        <h3 for="input1">Inline Checkboxes</h3>
                        <div class="checkbox-inline">
                                
                            <label for="input8" class="checkbox-inline">
                                <input id="input8" type="checkbox">1
                            </label>
                            <label for="input9" class="checkbox-inline">
                                <input id="input9" type="checkbox">2
                            </label>
                            <label for="input10" class="checkbox-inline">
                                <input id="input10" type="checkbox">3
                            </label>
                        </div>
                        <h3>Radio Buttons</h3>
                        <div class="radio-block">
                            <label for="input11">
                                <input type="radio" name="optionsRadios" id="input11" value="option1" checked>Radio 1
                            </label>
                            <label for="input12">
                                <input type="radio" name="optionsRadios" id="input12" value="option2">Radio 2
                            </label>
                            <label for="input13">
                                <input type="radio" name="optionsRadios" id="input13" value="option3">Radio 3
                            </label>
                        </div>

                        <h3>Inline Radio Buttons</h3>
                        <div class="radio-inline">
                            <label for="input14">
                                <input type="radio" name="optionsRadiosInline" id="input14" value="option1" checked>1
                            </label>
                            <label for="input1">
                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                            </label>
                            <label for="input1">
                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                            </label>
                        </div>
                        <!-- 
                            ICII **************************************** 
                        -->
                            <label for="input1">Selects</label>
                            <select>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <label for="input1">Multiple Selects</label>
                            <select multiple>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>

                        <button type="submit" class="btn btn-default">Submit Button</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>
                    </form>

                    <h1>Disabled Form States</h1>
                    <form role="form">
                        <fieldset disabled>

                                <label for="disabledSelect">Disabled input</label>
                                <input id="disabledInput" type="text" placeholder="Disabled input" disabled>

                                <label for="disabledSelect">Disabled select menu</label>
                                <select id="disabledSelect">
                                    <option>Disabled select</option>
                                </select>
                                <label>
                                    <input type="checkbox">Disabled Checkbox
                                </label>
                            <button type="submit" class="btn btn-primary">Disabled Button</button>
                        </fieldset>
                    </form>
                    <h1>Form Validation States</h1>
                    <form role="form">

                            <label class="control-label" for="inputSuccess">Input with success</label>
                            <input type="text" id="inputSuccess">
                        <div class="form-group has-warning">
                            <label class="control-label" for="inputWarning">Input with warning</label>
                            <input type="text" id="inputWarning">
                        <div class="form-group has-error">
                            <label class="control-label" for="inputError">Input with error</label>
                            <input type="text" id="inputError">
                    </form>
                    
                    <form method="post" action="" role="form">   
                        <fieldset>
                            <legend>1er fieldset : Champs ligne de texte</legend>
                            <label for="nomID">
                                input type=text <small>(obligatoire avec l'attribut "required")</small>
                                <input type="text" name="nom" id="nomID" placeholder="Saisissez votre nom" required>
                            </label>
                            
                            <label for="motDePasseID">input type=password
                                <input type="password" name="motDePasse" id="motDePasseID" placeholder="*$`34rrfFS" required>
                            </label>

                            <label for="mailID">input type=email <small>(pré-contrôle de saisie sur l'adresse mail)</small></label>
                            <input type="email" name="mail" id="mailID" placeholder="Saisissez votre email" required>
                        </fieldset> 
                        <fieldset>
                                <legend>2eme fieldset : les sélections</legend>
                                <h2>input type=checkbox</h2>
                                <label for="checkHTML">HTML</label>
                                <input type="checkbox" name="checkbox" value="html" id="checkHTML">
                                <label for="checkCSS">CSS</label>
                                <input type="checkbox" name="checkbox" value="css" id="checkCSS" checked>
                                
                                <h2>input type=radio</h2>
                                <label for="radioOUI">Oui</label>
                                <input type="radio" name="radio" value="oui" id="radioOUI">
                                <label for="radioNON">Non</label>
                                <input type="radio" name="radio" value="non" id="radioNON">

                                <h2>élément select</h2>
                                <label for="selectID">Votre choix</label>
                                <select name="option" id="selectID">
                                        <option value="option1">option1</option>
                                        <option value="option2">option2</option>
                                        <option value="option3">option3</option>
                                        <option value="option4">option4</option>
                                        <option value="option5">option5</option>
                                </select>
                            </fieldset>
                            <fieldset>
                                <legend>3eme fieldset : le champs de texte multiligne</legend>
                                <label for="messageID">élément textarea</label>
                                <textarea name="message" id="messageID" cols="30" rows="10" value="" placeholder="lorem ipsum blabla"></textarea>
                            </fieldset>
                            <button type="submit">Valider</button>
                    </form>

            </div>
        </article><!-- #post-## -->
</main><!-- #main -->
</div><!-- #content-area -->

<?php include ('layout/footer.php');?>