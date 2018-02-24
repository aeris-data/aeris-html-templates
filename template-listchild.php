<?php include ('layout/head.php');?>

<body class="page-template-template-listchild" data-color="#4765a0" data-secondary-color="#f39c12" data-text-color="" data-link-hover-color="">

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
            <span class="current">Template list child element</span>
        </nav>		
        <h1 rel="bookmark">
			Template list child element
        </h1>
	</div>
</div>

<div id="content-area" class="wrapper default">
    <main id="main" class="site-main" role="main">
        <section role="listChild">
            <article id="post-523" class="item-child">
                <header>
                    <h2>
                        <a href="#" title="Principe">
                            <span class="fa fa-link"></span> 
                            Principe
                        </a>
                    </h2>
                </header> 
                <p>Objectif Utiliser les composants et la structure de base du catalogue pour maintenir une harmonie entre les différents sites Aeris en développant des composants spécifiques au besoin.
                <a class="more-link" href="#">Continue Reading <span class="icon-angle-right"></span></a></p>
            </article>
            <article id="post-436" class="item-child">
                <header>
                    <h2>
                        <a href="#" title="Critère de recherche spécifique">
                            <span class="fa fa-link"></span> 
                            Critère de recherche spécifique            
                        </a>
                    </h2>
                </header> 
                <p>Objectif Ajouter un critère de recherche propre aux données d&rsquo;une collection/campagne. Mode d&#8217;emploi Créer deux composants : « xx-search-criteria.vue » « xx-search-criteria-content.vue » où xx est le type de critère qui sera proposé. Composant principal &lt;xx-search-criteria&gt; &lt;xx-search-criteria&gt; est le container qui permet d&rsquo;afficher l&rsquo;entête de la « boite » de critères : aeris-catalog-search-box et le contenu :&#8230; <a class="more-link" href="#e-recherche-specifiques/">Continue Reading <span class="icon-angle-right"></span></a></p>
            </article>
            <article id="post-450" class="item-child">
                <header>
                    <h2>
                        <a href="#" title="Summary spécifique">
                            <span class="fa fa-link"></span> 
                            Summary spécifique
                        </a>
                    </h2>
                </header> 
                <p>Objectif Définir un format de summary spécifique à un type de données. Mode d&#8217;emploi Créer un composant de type xx-summary où xx est le type renseigné dans les fiches de métadonnées pour lequel on personnalise le résumé. Par exemple pour créer un résumé spécifique au data series GMOS, on définit&#8230; <a class="more-link" href="#ecifique/">Continue Reading <span class="icon-angle-right"></span></a></p>
            </article>
        </section>
        <!-- #post-## -->
    </main><!-- #main -->
</div><!-- #content-area -->

<?php include ('layout/footer.php');?>