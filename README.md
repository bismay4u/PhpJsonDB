PhpJsonDB :: LightWeight,Portable And Simple Database
-----------------------------------------------------
<br/>
PhpJsonDB is a JSON database system for PHP. A lightweight database for php apps. It allows you to store data in 
portable files so as you can simply copy and paste to move the total data from one place to another (oops no headche...)

###Why PhpJsonDB?
>Sometimes SQLServers are just overkills. Lets say i want to quickly prototype a project, or just create a simple
data centric website or application or just like a small web or desktop project, creating and maintaining complicated 
databases schemas, figuring out indexes, and writing ugly embedded SQL queries can really slow down the pace.

>Hosting Provider (I can produce a long list), gives a limited set of database tables (Mysql,etc.). Consuming 
them for standard or large projects are good, but for small projects, its more than one can ask for. You can
use SQLite, but then that tends to be positivily painstaking.


###Features
+ Small file-centric, Least Requirments (PHP only).
+ Easy migrating data between places (Simply copy the files).
+ Pure JSON data makes easy translating between tabular data and objects in JavaScript.
+ Ability to combine query expressions, conditional expressions and xpath type expressions in any order.
+ Single execution context helps makes it lightning fast to perform queries and updates.
+ High configurabilty, Light weight, and small code base.
+ Simple and no schema, no indexes, no complicated SQL. Just objects/arrays.
+ Inbuilt AJAX Support helps you reduce your work load in wrtting up extra ajax code for pulling data.
+ No strict table schema as such allows more flexible data storage and retrival.

###InPlans
+ Rest API support.
+ Parrallel Data Transaction Support.
+ Implement SQL subset for more SQL compatibilty.
+ Implment Data Export/Import Functionalities.
+ AJAX Authentification and permissions.


###Requirments
- PHP5.2+ (Apache) to work.

###Notes
* The database files are stored in .json files. They are JSON data files.<br/>
* The dataDir usedup on constructor is used as single datasource.
* PhpJsonDB is made for web servers. If you want to try it on your local computer, you will need to set up Apache. 
I recommend XAMPP/WAMP for this.

Thank You,<br/>
Bismay