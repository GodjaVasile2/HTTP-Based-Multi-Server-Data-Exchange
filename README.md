# DataTransferBetweenServers


Nu exista componente majore lipsa conform slide 8 (nu stiu daca faptul ca nu verificam autenticitatea URI se pune ca si componenta lipsa)

Bonusurile care s-sau implementat:

*Folosesc libraria Requests dezvoltata de catre WordPress ca altrenativa la Guzzle in (insertJson.php si interogateJson.php) Comanda: composer require rmccue/requests
*Am adaugat un camp folosit de catre functia afiseazaDataLd() care face scrapind pentru ld+json astfel trebuie doar introdus url-ul filmului din imdb iar scrapingul colecteaza anumite date despre orice film in (functia afiseazaDataLd)
