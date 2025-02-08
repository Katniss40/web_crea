// URL de l'API que vous souhaitez interroger
const url = 'https://api.exemple.com/data';

// Utiliser fetch pour faire une requête GET
fetch(url)
  .then(response => {
    // Vérifier si la réponse est réussie
    if (!response.ok) {
      throw new Error('Erreur réseau : ' + response.statusText);
    }
    // Convertir la réponse en JSON
    return response.json();
  })
  .then(data => {
    // Traiter les données ici
    console.log(data);
  })
  .catch(error => {
    // Gérer les erreurs ici
    console.error('Erreur lors de la requête :', error);
  });
