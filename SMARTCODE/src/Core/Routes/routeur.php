<?php  

    $router = new AltoRouter();
	
	//ADMINISTRATEUR
    $router->map('GET|POST', '/installation', '../src/App/Home/installation', 'installation');
    $router->map('GET|POST', '/login', '../src/App/Home/login', 'login');
    $router->map('GET|POST', '/deconnexion', '../src/App/Home/deconnexion', 'deconnexion');
    $router->map('GET|POST', '/', '../src/App/Home/home', 'home');
    $router->map('GET|POST', '/search-[*:objet]', '../src/App/Home/search', 'search');
    $router->map('GET|POST', '/delete-[*:objet]-[i:id]', '../src/App/Home/delete', 'delete');
    $router->map('GET|POST', '/change-[*:objet]-[i:id]', '../src/App/Home/change', 'change');

    //CONTACTS
    $router->map('GET|POST', '/contacts', '../src/App/Contact/contacts');
    $router->map('GET|POST', '/contact-[i:id]', '../src/App/Contact/contact');
    $router->map('GET|POST', '/contact-[i:id]-[i:e]', '../src/App/Contact/contact');
    $router->map('GET|POST', '/favoris', '../src/App/Contact/favoris');
    $router->map('GET|POST', '/groupes', '../src/App/Contact/groupes', 'groupes');
    $router->map('GET|POST', '/groupe-[i:id]', '../src/App/Contact/groupe', 'groupe');

    //PROJETS
    $router->map('GET|POST', '/projets', '../src/App/Projet/projets', 'projets');
    $router->map('GET|POST', '/projet-[i:id]', '../src/App/Projet/projet', 'projet');
    $router->map('GET|POST', '/projet-[i:id]-[i:m]', '../src/App/Projet/projet', 'projet-m');
    $router->map('GET|POST', '/tache-[i:id]-[i:th]', '../src/App/Projet/tache');
    $router->map('GET|POST', '/tache-[i:id]-[i:th]-[i:i]-[*:m]', '../src/App/Projet/tache');

    //AGENDA
    $router->map('GET|POST', '/agenda', '../src/App/Agenda/agenda', 'agenda');
    $router->map('GET|POST', '/agenda-[i:j]-[*:m]-[i:a]', '../src/App/Agenda/evenement', 'evenement');
    $router->map('GET|POST', '/calendrier-[i:mois]-[i:annee]', '../src/App/Agenda/calendrier', 'calendrier');
    $router->map('GET|POST', '/evenements', '../src/App/Agenda/evenements', 'evenements');
    $router->map('GET|POST', '/event-[i:id]', '../src/App/Agenda/event', 'event');
    $router->map('GET|POST', '/notifications', '../src/App/Agenda/notifications', 'notifications');

    //AGENDA
    $router->map('GET|POST', '/maison', '../src/App/Maison/maison', 'maison');

    //NOTES
    $router->map('GET|POST', '/notes', '../src/App/Note/notes', 'notes');
    $router->map('GET|POST', '/note-[i:id]', '../src/App/Note/note', 'note');
    $router->map('GET|POST', '/notecategories', '../src/App/Note/notecategories', 'notecategories');
    $router->map('GET|POST', '/notecategorie-[i:id]', '../src/App/Note/notecategorie', 'notecategorie');

    //DOCUMENTS
    $router->map('GET|POST', '/documents', '../src/App/Document/documents', 'documents');
    $router->map('GET|POST', '/categories-de-documents', '../src/App/Document/categories', 'categories-D');
    $router->map('GET|POST', '/categorie-[i:id]-documents', '../src/App/Document/categorie', 'categorie-D');

    //FRAIS
    $router->map('GET|POST', '/frais', '../src/App/Frais/frais');
    $router->map('GET|POST', '/categories-de-frais', '../src/App/Frais/categories');
    $router->map('GET|POST', '/categorie-[i:id]-frais', '../src/App/Frais/categorie');

    //FRAIS
    $router->map('GET|POST', '/parametres', '../src/App/Home/parametres');
?>