<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>Front End Web Development</title>

		<meta name="description" content="Course Materials">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

		<link rel="stylesheet" href="/reveal.js/css/reveal.css">
		<link rel="stylesheet" href="/reveal.js/css/theme/black.css" id="theme">

		<!-- Code syntax highlighting -->
		<link rel="stylesheet" href="/reveal.js/lib/css/zenburn.css">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? '/reveal.js/css/print/pdf.css' : 'css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">
                <?php
                    $path_only = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
                    
                ?>
                <section data-markdown data-separator="---">
                      <?php 
                        include_once($_SERVER["DOCUMENT_ROOT"].$path_only);
                    ?>
               </section>

				

			

			</div>

		</div>

		<script src="/reveal.js/lib/js/head.min.js"></script>
		<script src="/reveal.js/js/reveal.js"></script>

		<script>

			// Full list of configuration options available at:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
				center: true,

				transition: 'slide', // none/fade/slide/convex/concave/zoom

				// Optional reveal.js plugins
				dependencies: [
					{ src: '/reveal.js/lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: '/reveal.js/plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: '/reveal.js/plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: '/reveal.js/plugin/highlight/highlight.js', async: true, condition: function() { return !!document.querySelector( 'pre code' ); }, callback: function() { hljs.initHighlightingOnLoad(); } },
					{ src: '/reveal.js/plugin/zoom-js/zoom.js', async: true },
					{ src: '/reveal.js/plugin/notes/notes.js', async: true }
				]
			});

		</script>

	</body>
</html>
