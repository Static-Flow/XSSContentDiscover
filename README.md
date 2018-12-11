This is a Proof of Concept for an attack path I see often on engagements where an application hides administrative or sensitive url paths using obscurity i.e. assuming no attacker will guess the "/admin/superSecretPath" URL. Sometimes these can be found using directory brute force tools such as dirb or BurpSuite forced browsing but this PoC aims to provide another means of discovering hidden or unknown url paths through a simple stored XSS vector.



This vector uses a simple javascript one 
liner that when executed by a victim gathers all <a> tags within the page and sends their "href" attribute to an attacker controlled server for later viewing. While mileage may vary on gathering "all" links on a page, with the shift towards single page apps and modern UI's where the navigation bar is on every page you should be able to catch most of them. 

The demo included in this repo is a very simple example of a PHP app that contains a stored XSS vector accessible in both an "unathenticated" and "authenticated" context. Simply follow the instructions on home.php to capture the "hidden" admin page link.