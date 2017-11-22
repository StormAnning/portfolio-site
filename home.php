<?php
/*
Template Name: Home Page
*/

get_header();
?>

<div class="container pt-3 pb-3">
	<div class="row padding-sm-xl">
		<div class="col-lg-6 order-lg-2 padding-xs-xl">
			<div style="max-width: 600px; margin: auto;">
			<div class="circle" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/portfolio/images/face.png')">
			</div>
			</div>
		</div>
		<div class="col-lg-6 order-lg-1">	
			<h1 class="text-sm-left text-center">About Me</h1>
			<p class="text-justify">
			I am a Software Engineer that loves solving problems and all things that are technology.

			I’ve worked in many levels of the software production flow, taking systems from specification to deployment, and have produced many successful solutions on a wide variety of platforms. 

			Throughout my education and career I’ve developed skills in a diverse range of fields. I thoroughly enjoy learning new things and will often be found looking through new books, courses, and publications wherever possible to further these skills. I welcome a challenge and am currently looking for a new venture that I hope will give rise to new challenges that i can overcome to better myself as a computer scientist and engineer. 

			The rest of the site will detail a handful of the skills at my disposal, from core CS skills through to industry experience. 
		</p>
		</div>
	
	</div>
</div>

<div style="background: #FE5F55; color: white;">
	<div class="container pt-3 pb-3" >
		<div class="skill-section col-xs-12 padding-sm-xl">
		<h1 class="text-sm-left text-center">Algorithms & Data Structures</h1>
			<ul class="mt-3 summList mx-0 pl-3">
				<li>Analysing time & space complexities</li>
				<li>Wide knowledge of algorithmic techniques (Divide & Conquer, DP, Greedy, LP, Randomized...)</li>
				<li>Various data-structures and their trade offs and augmentations.</li>
			</ul>
			<button class="read-more">Read More</button>
			<p class="mt-3 detail-section text-justify">
				I have a good understanding of the world of algorithms and data structures, understanding the importance of using the correct data structures and algorithms for the job and the tradeoffs (space and time complexity for particular operations) between them. Furthermore I understand how they can be usefully augmented and tuned for particular problems; how many problems can be reduce to others, and how to deduce the complexity of any particular algorithm. I have experiences with a great deal of algorithmic techniques, from divide and conquer, dynamic programming, linear programming, backtracking, and greedy algorithms to name a few. 
			     </br></br>
				Understanding where each algorithmic technique has it’s benefits and pitfalls’ e.g. how greedy algorithms may often not produce a global optimal solution, but for many intractable problems can provide a good enough solution with satisfiable non-exponential time complexities; or how any problem with a optimal substructure could potentially lead itself to divide and conquer/ DP approach. My point being is that I have all the knowledge and resources needed to find the right algorithm/data structure for a problem, and have built a solid base to work with much more advanced data structures and algorithms in the future.
			</p>
			</div>
	</div>
</div>

<div style="background: #4F6367; color: white;">
	<div class="container pt-3 pb-3" >
		<div class="skill-section col-xs-12 padding-sm-xl">
		<h1 class="text-sm-left text-center">Computer Systems</h1>
			<ul class="mt-3 summList mx-0 pl-3">
				<li>Knowledge of how computers work from a very low level.</li>
				<li>How operating systems manage resources and how programs run within an OS (virtual memory, paging, context switching)</li>
				<li>How to maximise performance from code:
					<ul>
						<li>Loop unrolling</li>
						<li>Memory locality - avoiding cache misses</li>
						<li>Reassociation transformations</li>
						<li>Avoiding branch misprediction penalties</li>
						<li>Maximising instruction level parallelism by removing critical data paths</li>
					</ul>
				</li>
				<li>Understanding where things can go wrong (race hazards, deadlocks, overflows) and how to debug at a very low level</li>
			</ul>
			<button class="read-more">Read More</button>
			<p class="mt-3 detail-section text-justify">
				Algorithms are all well and good but at the end of the day code must also run on a physical machine. Quicksort runs faster than Mergesort in practise despite having the same asymptotic O(n.lg(n)) bounds. This is easy to see when you look at how the algorithm actually behaves on a real system and this is where an understanding of computer systems comes into play. 
				</br> </br>
				I recently bought a copy of <a href="#https://www.amazon.co.uk/Computer-Systems-Programmers-Perspective-Global/dp/1292101768/ref=pd_lpo_sbs_14_t_0?_encoding=UTF8&psc=1&refRID=QENW0BK0P4H3B1FMWW5G">Computer Systems: A Programmer's Perspective</a> and read it front to back in my spare time. It was an eye opening read and dramatically improved my understanding of the underlying system.
				</br> </br>
				Knowledge of how code is taken from some arbitrary high level language and how it will eventually run within an Operating System on top of physical hardware allows me to maximising performance when it matters and allows me debug a program at the lowest levels.
				</br> </br>
				Knowledge of how your program executes within its own virtual resources (virtual memory, context switching, paging etc.) managed by the OS, and how it interacts with the OS allows me to see where things can fall apart or where bottlenecks have formed.  Understanding how everything runs helps avoid errors that can seem sporadic and mysterious - allowing me to trace them down and understand why they occurred (e.g. overflows, race hazards, deadlocks etc).
				</br> </br>
				Knowledge of the hardware design, memory hierarchy, how the operating system works, and so on, is crucial in understanding where performance can suffer. Many caveats will prevent programs from running efficiently. 
				</br> </br>
				From a processor perspective, the number of cores, functional units and design of the processor will directly determine the level of instruction level parallelism and efficiency a CPU can hope to achieve. Compilers optimize code the best they can when transforming code into assembly, however many critical paths and bottlenecks can remain (e.g. instruction dependencies, inefficient memory accesses etc) and so it often becomes important to aid in this optimization.
				</br> </br>
				Various techniques will help in squeezing extra performance, a few examples are listed below: 
				ensuring good memory locality (keeping an eye on store/load operations, keeping needed data close to the CPU)
				avoiding the penalties of branch misprediction
				enhancing instruction level parallelism through loop unrolling, reducing critical data paths, and through reassociation transformations.
				</br> </br>
				There are also many other penalties and costs that occur in a system that become factors in a program's performance, from the overheads of procedure calls, thread context switches, inter process communications, and cache misses etc. Being aware of these allows me to code with them in mind and track down why a particular program might be running slowly.
				</br> </br>
				The importance of understanding the operating system and hardware you are programming on goes way beyond performance. Understanding how everything works gives me confidence in what I write, and the beauty and design of how these underlying systems are abstractly integrated together is enlightening from a system design and problem solving perspective. 
				</p>
			</div>
	</div>
</div>


<div style="background: #7A9E9F; color: white;">
	<div class="container pt-3 pb-3" >
		<div class="skill-section col-xs-12 padding-sm-xl">
		<h1 class="text-sm-left text-center">Clean Code</h1>
			<p class="mt-3 text-justify">
				I have experience writing clean code and following the principles of ‘Clean Code - Robert Martin’ to ensure my code is:
			</p>
			<ul class="mt-3  mx-0 pl-3">
				<li>Readable and maintainable by other developers</li>
				<li>Accepting to change and extendability</li>
				<li>Reusable and interchangeable</li>
				<li>Self documenting</li>
				<li>Easy to debug, test, build, and deploy</li>
				<li>Free from any other 'Smells'</li>
			</ul>
			<button class="read-more">Read More</button>
			<p class="mt-3 detail-section text-justify">
				While i have the skills to squeeze performance i have also worked in the industry for 3 years and understand that readable, maintainable and testable code is highly important. Upon joining my first full-time software development role in 2014 the first book I was handed was ‘Clean Code by Robert C. Martin’. Since then I have strived to write code that follows the principles and rules laid out by that book, ensuring I use all of the ‘good smells’ such as well named variables, loose coupling, high cohesion, non repeating code, single responsibility classes and so on. In doing so I prevent many of the ‘bad smells’ that lead projects into buggy unextendable messes.</p>
			</div>
			</div>
	</div>
</div>

<div>
	<div class="container pt-3 pb-3" >
		<div class="skill-section col-xs-12 padding-sm-xl">
		<h1 class="text-sm-left text-center">Databases</h1>
			<ul class="mt-3 summList mx-0 pl-3">
				<li>Experiences designing ER diagrams and the schemas of many databases</li>
				<li>Writing complicated stored procedures and SQL queries</li>
				<li>Experience with both SQL databases and NoSQL databases</li>
				<li>Migrating data from existing legacy systems</li>
			</ul>
			<button class="read-more">Read More</button>
			<p class="mt-3 detail-section hidden text-justify">
				I have taken courses in the design of databases throughout my education and most recently took Stanfords freely available course on SQL databases. This combined with my experience of actually implementing databases in real production environments has given me a great deal of knowledge on what works well. I understand the importance of normalization when designing the database but also how the design will affect query performances in a live environment. I’ve designed and maintained many databases for a wide range of projects, for both TSQL and MYSQL, and used them with a wide variety of stacks, from PHP REST API’s, to thick clients in conjunction with Hibernate. 
				</br></br>
				I have had some very unique projects that varied from writing complicated stored procedures, to writing very large migration codes to transform several unnormalized legacy databases into one clean normalized database.
				</br></br>
				I have also had some experience with NoSQL using MongoDB with the MEAN stack. In one personal project i built a slack bot that responded according to a database of regular expressions maintained by an Angular application hosted on Heroku.
			</p>
			</div>
	</div>
</div>

<div style="background: #FE5F55; color: white;">
	<div class="container pt-3 pb-3" >
		<div class="skill-section col-xs-12 padding-sm-xl">
		<h1 class="text-sm-left text-center">Mobile Development</h1>
			<ul class="mt-3 summList mx-0 pl-3">
				<li>iOS Development</li>
				<li>Android Development</li>
				<li>Experience working on both platforms simultaneously, whilst also building the backend REST services they connect to (PHP + Node)</li>
			</ul>
			<button class="read-more">Read More</button>
			<div class="mt-3 detail-section text-justify">
			<p>
			I have built a great number of large applications for both iOS and Android. Many involving me building a universal app for both iOS and Android simultaneously, whilst also designing and implementing the MySQL database and REST API backends they talk to. I have a great deal of experience with the frameworks and native controls available for both iOS and Android, and the development process involved in transforming an idea and specification into a working application, that is ready to be deployed to the app store (and the contingencies that come with that also).
			</br></br>
			I have spent countless months in xCode and Android Studio during my time as a developer and consider myself highly proficient at producing beautiful applications on both platforms. I am well versed in the gotcha’s of app development, whether it be: compatibility and auto-sizing issues across a broad range of devices, handling connectivity issues and data integrity across physical devices and backend databases, managing push notifications, working within the constraints of the OS, managing authentication tokens, the handling of IAP, and all the other issues that arise!
			</p>
			<p>
				Example recent project:
				I had a recent project that required an application that was akin to a PA/messenger and it had the following core functionality.
			</p>
			<ul class="mt-3 text-left mx-0 pl-3">
				<li>Users can add and remove each other as friends and then communicate with each other</li>
				<li>Users can send and receive media as well as send each other messages, all media and messages that have been downloaded should be available for offline viewing</li>
				<li>Push notifications should fire for all incoming media</li>
				<li>Media sent by a user while not online should be schedule for sending as soon as connectivity is re-established</li>
				<li>Users can create diary events (may be repeating) that should alarm the users with reminders when the event is about to occur, and can also be sent events by other users (which could be rejected or accepted)</li>
				<li>Users can view media sent my friends and group them into galleries that allow media to be viewed into a slide show</li>
				<li>Users can create groups of friends and send messages to those groups in bulk, and navigate between groups and groups within groups</li>
				<li>Users can create photo libraries</li>
			</ul>
				<p>

				The application spanned over for many months, but the completion of it basically went as follows:
				</br></br>
				<u>The Persistence Later</u>
				</br>
				I created a MySQL database that fulfilled all the functionality we needed to store user data, from a user's friends, JWT tokens for authentication, the user's credentials, filenames for files stored on the server and so on...

				</br></br>
				<u>The REST API</u>
				</br>

				Then i created an accompanying REST API written in PHP (used codeIgniter as a framework, liked it!) that provided all the essential PUT, GET, POST end points for the various resources along with some endpoints for file uploading etc. The backend also had to manage compression of files, as well as sending push notifications to any relevant devices where necessary along with a variety of other functionalities.
			
				</br></br>
				<u>The Native Application</u>
				</br>
				After building some persistence and an API to work with the persistence layer, I thoroughly tested it through Postman, wrote some unit tests that could be repeated and then began the development of the iOS application.
				</br></br>
				 In the past i’d written a lot of my code from scratch using only the system libraries available to me (which gave me great control over network connections/retry attempts etc). This time however I’d decided to make use of existing libraries to speed up development time, using Cocoapods as my dependency manager I installed a range of useful libraries, FontAwesome for icons in the app, RestKit for managing the parsing between my Objective C objects and their JSON representation and vice-versa, and AFNetworking for making network requests.

				 </br></br>
				<u>Parsing & Initial Set-up</u>
				</br>

				I then created all my entities and their relationships in Core Data (Apple's persistence framework) and wrote the relevant mappings so that Reskit could handle the translation of my Core Data objects into JSON that could be sent to the API, and vice versa the other way around.
				  </br></br>
				<u>Writing Syncronisation Services</u>
				</br>
				After establishing that I could reliably send and receive http requests between the application and my API. I began writing all the service classes the app would need to pull data down from the server, and to push data back. Handling all the situations that come up along the way including: token refreshal, sending device tokens to the server for push notifications, ensuring data integrity and synchronicity between the local device and the back-end, reattempting failed requests, marking data as dirty for syncing, and so on.
				</br></br>
				<u>Build Front-End</u>
				</br>
				Once all the complications of handling the synchronization of data between the application and the REST API was done, it was simply a case of building the UI and utilizing the services i’d written earlier in their ViewControllers, following the visual designs to the pixel.
				</br></br>
				Once the application was ready to be tested I moved over to the Android version and pretty much followed the same steps as for the iOS, albeit using different frameworks but a very similar pattern. 
			    </br>
				After both were completed we simply moved over to production server setup on AWS and pointed both apps to it, gave them a thorough test and went through the process of submitting them to the app store!
				</br></br>
				Looking back I wish the company had let me use some form of cross-platform solutions for this as it  was the 3rd application I had built of this size, both of which required me to repeat the process for iOS and Android.
				</br></br>
				Anyway that was the general process of building the product with a hell of a lot of detail left out.


			</p>
			</div>
			</div>
	</div>
</div>

<div style="background: #4F6367; color: white;">
	<div class="container pt-3 pb-3" >
		<div class="skill-section col-xs-12 padding-sm-xl">
		<h1 class="text-sm-left text-center">.Net Thick Clients</h1>
			<ul class="mt-3 summList mx-0 pl-3">
				<li>Experience building several WPF applications</li>
				<li>Experience bulding ASP.Net websites</li>
			</ul>
			<button class="read-more">Read More</button>
			<div class="mt-3 detail-section text-justify">
			<p>
			I have built several WPF applications for businesses, mostly recently i took on a project that involved taking three existing VB6 legacy applications (didn’t have the code) with three separate incompatible databases, and transforming those into a single WPF thick client that provided all the functionality of the three existing systems combined. This turned out to be a fairly long project because I had to migrate 3 incompatible unnormalized databases into a single datasource that the thick client could connect to, and then produce a seemingly endless sea of complicated company reports, and screens, involving many painful queries and algorithms. The flow of the project looked like this:
			</p>
			<ul class="mt-3 text-left mx-0 pl-3">
				<li>I derived the specs from the old applications and through talks with the clients.</li>
				<li>Created new UI visuals in Photoshop and got the clients to sign off on the designs.</li>
				<li>Migrated all the data with large SQL migration scripts i’d written by hand to transform the three unnormalized data sources into a single normalized SQL database i’d created (these scripts had to be pristine because they would be needed come the time we needed to go LIVE for real and would need to migrate hundreds of thousands of important customer records) </li>
				<li>Created the responsive thick client in WPF, using Hibernate as the bridge between my C# classes and the TSQL database.</li>
				<li>Created many complicated reports using RDLC(the devil)</li>
				<li>Wrote various algorithms to reproduce the existing system and produce large data sets of customer records</li>
				<li>Made sure it looked pretty :) and was responsive and quick</li>
				<li>Weeks and weeks of testing</li>
			</ul>
			
			<p>
			Finally after around 9 months of development and testing I deployed the back-end to their servers and migrated the latest data, and gave them a one click installer for the thick client.

			I have also built much smaller WPF projects for clients, as well as a few ASP.NET websites. Including a project centered around producing reliable OCR scanning using the Tesseract Engine and some custom pre-processing code on scanned client documents. 
			</p>
			</div>
			</div>
	</div>
</div>



<div style="background: #7A9E9F; color: white;">
	<div class="container pt-3 pb-3" >
		<div class="skill-section col-xs-12 padding-sm-xl">
		<h1 class="text-sm-left text-center">Back-End Development</h1>
			<ul class="mt-3 summList mx-0 pl-3">
				<li>Creating REST API’s with both PHP and Node.js </li>
				<li>Managing backend databases and writing server application code in both Java and C# (JSF/ASP.NET)</li>
			</ul>
			<button class="read-more">Read More</button>
			<div class="mt-3 detail-section text-justify">
			<p>
			As mentioned in my previous skills i have undergone numerous projects that required work in all levels of the application stack:
			<ul class="mt-3 text-left mx-0 pl-3">
				<li>Creating and designing persistence stores (MySQL databases, NoSQL MongoDB databases)</li>
				<li>Working with various web application technologies - WildFly, Express etc.</li>
				<li>Creating API’s that intermediate between applications and the persistence stores </li>
				<li>Setting up the servers that will host these persistence stores and APIs (typically provided by AWS)</li>
				<li>Performing Sys-Admin duties on many projects are once</li>
				<li>Writing DLLs</li>
				<li>See the sections above for more intricate details</li>
			</ul>
			</p>
			</div>
			</div>
	</div>
</div>

<div>
	<div class="container pt-3 pb-3" >
		<div class="skill-section col-xs-12 padding-sm-xl">
		<h1 class="text-sm-left text-center">Front-End Development</h1>
			<ul class="mt-3 summList mx-0 pl-3">
				<li>Experience designing, creating, and deploying many responsive websites</li>
				<li>Experienced with content managment systems like Wordpress & Joomla</li>
				<li>Experienced writting Javascript and am familiar with many JS libaries/frameworks (JQuery, D3.js, MEAN Stack)</li>
				<li>Experience with many other popular web toolkits (SASS, Bootstrap, Grunt)</li>
				<li>Experience building many great looking mobile applications, and some beautiful graph libraries for iOS</li>
			</ul>
			<button class="read-more">Read More</button>
			<p class="mt-3 detail-section text-justify">
				I have built many websites for many clients and used a wide range of technologies to do so. I have always enjoyed graphic design and I believe that greatly helps me be enthusiastic about creating frontend UI’s that look and feel great. I have also built many thick clients in WPF and ASP.NET, many UI’s and responsive applications for iOS and Android, and have played with a vast number of other frameworks.
			</p>
			</div>
	</div>
</div>


<div style="background: #FE5F55; color: white;">
	<div class="container pt-3 pb-3" >
		<div class="skill-section col-xs-12 padding-sm-xl">
		<h1 class="text-sm-left text-center">Graphic Design</h1>
			<ul class="mt-3 summList mx-0 pl-3">
				<li>UX design for apps, thick clients and websites</li>
				<li>Logo Design</li>
				<li>Digital asset creation</li>
				<li>Digital painting</li>
				<li>3D modelling</li>
			</ul>
			<p class="mt-3 text-justify">
			I have experience creating many digital assets for clients including: Producing application screen designs, flow layouts, icons, logos, business cards, business websites, digital paintings, and many other promotional visuals.	
			</br>
		A gallery of non-commerical examples will be posted soon. </br>**This website and everything in it stands as one itself**
			</p>
			</div>
	</div>
</div>

<div style="background: #4F6367; color: white;">
	<div class="container pt-3 pb-3" >
		<div class="skill-section col-xs-12 padding-sm-xl">
		<h1 class="text-sm-left text-center">Non-Technical Skills & Experience</h1>
		<p class="mt-3">Below are skills that while not technical in nature i've listed</p>
		<button class="read-more">Read More</button>
			<div class="mt-3 detail-section text-justify">
			<p>
			As mentioned in my previous skills i have undergone numerous projects that required work in all levels of the application stack:
			<ul class="mt-3 text-left mx-0 pl-3">
				<li>Creating and designing persistence stores (MySQL databases, NoSQL MongoDB databases)</li>
				<li>Working with various web application technologies - WildFly, Express etc.</li>
				<li>Creating API’s that intermediate between applications and the persistence stores </li>
				<li>Setting up the servers that will host these persistence stores and APIs (typically provided by AWS)</li>
				<li>Performing Sys-Admin duties on many projects are once</li>
				<li>Writing DLLs</li>
				<li>See the sections above for more intricate details</li>
			</ul>
			</p>
			</div>
			</div>
	</div>
</div>


<div style="background: #7A9E9F; color: white;">
	<div class="container pt-3 pb-3" >
		<div class="skill-section col-xs-12 padding-sm-xl">
		<h1 class="text-sm-left text-center">Personal Interests</h1>
		<p class="mt-3">Below are skills that while not technical in nature i've listed</p>
		<button class="read-more">Read More</button>
			<div class="mt-3 detail-section text-justify">
			<p>
			As mentioned in my previous skills i have undergone numerous projects that required work in all levels of the application stack:
			<ul class="mt-3 text-left mx-0 pl-3">
				<li>Creating and designing persistence stores (MySQL databases, NoSQL MongoDB databases)</li>
				<li>Working with various web application technologies - WildFly, Express etc.</li>
				<li>Creating API’s that intermediate between applications and the persistence stores </li>
				<li>Setting up the servers that will host these persistence stores and APIs (typically provided by AWS)</li>
				<li>Performing Sys-Admin duties on many projects are once</li>
				<li>Writing DLLs</li>
				<li>See the sections above for more intricate details</li>
			</ul>
			</p>
			</div>
		</div>
	</div>
</div>


<div>
	<div class="container pt-3 pb-3" >
		<div class="skill-section col-xs-12 padding-sm-xl">
		<h1 class="text-sm-left text-center">Contact me</h1>
			<p class="mt-3 text-justify">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at dapibus sapien, vitae lobortis nunc. Cras sed ligula eget lectus imperdiet eleifend vel in turpis. Donec a rutrum turpis. Nullam tempus purus ac lorem porta, quis sagittis purus fermentum. Praesent faucibus metus ac tempor laoreet. Aenean id elementum ante. Cras egestas a justo non hendrerit. Cras bibendum consectetur facilisis. Proin interdum nibh a odio auctor, in luctus felis ullamcorper. Vivamus placerat lacus odio, eget vehicula sapien ultricies id. Sed tincidunt magna orci. Integer eget elementum nulla. Duis pulvinar at lorem at porta. Proin ultrices pellentesque velit elementum ullamcorper. Integer vestibulum nulla nec feugiat condimentum. Etiam sit amet pretium metus, a tincidunt felis.</p>
			</div>
	</div>
</div>


<?php
get_footer();
