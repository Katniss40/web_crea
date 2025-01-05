import Route from "./Route.js";

//constructor(url, title, pathHtml, pathJS = "")

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.html"),
    new Route("/administrative", "administrative", "/pages/administrative.html"),
    new Route("/informatique", "informatique", "/pages/informatique.html"),
    new Route("/tarifs", "tarifs", "/pages/tarifs.html"),
    new Route("/confiance", "confiance", "/pages/confiance.html"),
    new Route("/connexion", "connexion", "/pages/connexion.html"),
<<<<<<< HEAD
    new Route("/rdv", "rdv", "/pages/rendez_vous.html"),
=======
>>>>>>> 4a62d8f13b3241af275554d6d08613be3346b052
    
];
    
//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Web Crea 2.0";