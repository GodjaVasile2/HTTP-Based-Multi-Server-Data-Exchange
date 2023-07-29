# Multiserver Data Transfer using HTTP

This project demonstrates the ability to transfer data among various servers in multiple formats using the HTTP mechanism. A series of data transfers is implemented and showcased through a rudimentary front-end interface in a browser.

Data sources include web scraping from a chosen site, Json, and a RDF4J Server.

Key Features:
1. The project initiates with a simple HTML page containing buttons for triggering data transfers sequentially.
2. The first button triggers web scraping from a site of the student's choice and displays the obtained data in a table.
3. The second button retrieves a record from an HTML form on the page, adds it to the previously obtained data, inserts the complete data set on Server 1, and displays all data from Server 1 in a new table.
4. The third button retrieves the displayed data from the previous step, inserts it onto the JSON Server, and displays all data from the JSON Server in a new table.
5. The fourth button allows the deletion of a record from either server (1 or 2), based on a field (other than ID) obtained from the page.
