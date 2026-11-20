import Route from "./Route.js";

//constructor(url, title, pathHtml, pathJS = "")

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.html"),
    new Route("/prestations", "Prestations & Tarifs", "/pages/prestations.html"),
    new Route("/administrative", "Administrative", "/pages/administrative.html"),
    new Route("/informatique", "Informatique", "/pages/informatique.html"),
    new Route("/tarifs", "Tarifs", "/pages/tarifs.html"),
    new Route("/confiance", "Confiance", "/pages/confiance.html"),
    new Route("/rdv", "Rdv-Tel", "/pages/rendez_vous.html"),
    new Route("/sites", "Sites", "/pages/sites.html"),
    new Route("/rdvDom", "Rdv-Dom", "/pages/rdv_dep.html"),
    new Route("/formulaire", "Formulaire", "/pages/php/contact.html"),
   // new Route("/requete", "Formulaire", "/pages/php/formulaire.php"),
    new Route("/meteo", "Meteo", "/pages/meteo.html")
    
];
    
//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Web Crea 2.0";