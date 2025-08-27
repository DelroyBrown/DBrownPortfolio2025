<?php
return [
    [
        "slug" => "gazetteer",
        "title" => "Dynamic Gazetteer",
        "thumb" => "assets/img/gazetteer.png",
        "tech" => ["Leaflet.js", "JQuery", "Bootstrap 5", "PHP", "OpenWeather", "Unsplash", "exchangerate.host"],
        "summary" => "An interactive gazetteer web app built with Leaflet.js, jQuery, and PHP. It lets users explore countries through maps, markers, and real-time data including weather, news, images, and currency, with geolocation support and seamless, database-free integration.",
        "detail-summary" => "Interactive gazetteer to search countries and view details such as airport locations.",
        "body" => "<p>A dynamic gazetteer that loads borders via GeoJSON, detects user country, and displays modals for weather, news, currency exchange, images, and timezone. Features clustering, base map switching, and clean Bootstrap-only UI.</p>",
        "images" => ["assets/img/gazetteer_detail.png", "assets/img/gazetteer-detail_2.png"],
        "links" => [
            ["label" => "GitHub", "href" => "https://github.com/DelroyBrown/delroyBrown/tree/main/project1"],
            ["label" => "Project", "href" => "https://delroybrown.ct.ws/project1/?i=1"]
        ]
    ],
    [
        "slug" => "company-directory",
        "title" => "Company Directory",
        "thumb" => "assets/img/company-directory.png",
        "tech" => ["PHP", "JQuery", "MySQL", "AJAX", "Bootstrap"],
        "summary" => "A dynamic web app for managing personnel, departments, and locations with full CRUD functionality. Built using HTML, Bootstrap, jQuery, and PHP, it features AJAX for seamless updates and safeguards to maintain data integrity across relationships.",
        "detail-summary" => "Company directory with full CRUD functionality for managing personnel, departments, and locations.",
        "body" => "<p>Full CRUD with AJAX, validation rules to prevent unsafe deletes, and modals for add/edit flows. Clean separation of concerns and robust error handling.</p>",
        "images" => ["assets/img/company_directory_detail.png"],
        "links" => [
            ["label" => "GitHub", "href" => "https://github.com/DelroyBrown/CompanyDirectory"],
            ["label" => "Project", "href" => "https://delroybrown.ct.ws/CompanyDirectory/"],
        ]
    ]
];
