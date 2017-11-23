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
			I am a Software Engineer that likes solving interesting problems and all things technology.

			I’ve worked in many levels of the software production flow, taking systems from specification to deployment, and have produced many successful solutions on a wide variety of platforms. 

			Throughout my education and career I’ve developed skills in a diverse range of fields. I thoroughly enjoy learning new things and will often be found looking through new books, courses, and publications wherever possible to further these skills. I welcome a challenge and I am currently looking for a new venture that I hope will give rise to new challenges that i can overcome to better myself as a computer scientist and engineer. 

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
				<li>Various data-structures and their trade offs and augmentations</li>
			</ul>
			<button class="read-more">Read More</button>
			<p class="mt-3 detail-section text-justify">
				I have a good understanding of the world of algorithms and data structures and the tradeoffs between particular choices (with regards to space and time complexity). Furthermore I understand how they can be usefully augmented and tuned for particular problems; how many problems can be reduced to others, and how to deduce the complexity of any particular algorithm. I have experiences with a great deal of algorithmic techniques including divide and conquer, dynamic programming, linear programming, backtracking, and greedy algorithms to name a few. 
			     </br></br>
				I understand where each algorithmic technique has it’s benefits and pitfalls. For example, how greedy algorithms may often not produce a global optimal solution for many intractable problems, but can provide a satisfiable solution with non-exponential time complexity; or similarly, how any problem with a optimal substructure could potentially lead itself to divide and conquer/DP approach. I have the knowledge and resources needed to find the right algorithm/data structure for a problem, and the capability to work with much more advanced data structures and algorithms in the future.
			</p>
			</div>
	</div>
</div>

<div style="background: #4F6367; color: white;">
	<div class="container pt-3 pb-3" >
		<div class="skill-section col-xs-12 padding-sm-xl">
		<h1 class="text-sm-left text-center">Computer Systems</h1>
			<ul class="mt-3 summList mx-0 pl-3">
				<li>Knowledge of how computers work from a very low level</li>
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
			<div class="mt-3 detail-section text-justify">
				<p>
				Algorithms are all well and good but at the end of the day code must also run on a physical machine. Quicksort runs faster than Mergesort in practise despite having the same asymptotic O(n.lg(n)) bounds. This is easy to see when you look at how the algorithm actually behaves on a real system and this is where an understanding of computer systems comes into play. 
				</br> </br>
				I recently bought a copy of <a href="#https://www.amazon.co.uk/Computer-Systems-Programmers-Perspective-Global/dp/1292101768/ref=pd_lpo_sbs_14_t_0?_encoding=UTF8&psc=1&refRID=QENW0BK0P4H3B1FMWW5G">Computer Systems: A Programmer's Perspective</a> and read it front to back in my spare time. It was an eye opening read and dramatically improved my understanding of the underlying system.
				</br> </br>
				Knowledge of how code is taken from some arbitrary high level language and how it will eventually run within an Operating System on top of physical hardware allows me to maximise performance when it matters and allows me to debug a program at the lowest levels.
				</br> </br>
				Knowledge of how a program executes within its own virtual resources managed by the OS (virtual memory, context switching, paging etc.), and how it interacts with the OS allows me to see where things can fall apart or where bottlenecks have formed.  Understanding how everything runs helps avoid errors that can seem sporadic and mysterious - enabling me to trace them down and understand why they occurred (e.g. overflows, race hazards, deadlocks etc).
				</br> </br>
				Knowledge of the hardware design, memory hierarchy, how the operating system works, and so on, is crucial in understanding where performance can suffer. Many caveats will prevent programs from running efficiently:
				</br> </br>
				From a processor perspective, the number of cores, functional units and design of the processor will directly determine the degree of instruction level parallelism and efficiency a CPU can hope to achieve. Compilers optimize code the best they can when transforming code into assembly, however many critical paths and bottlenecks can remain (e.g. instruction dependencies, inefficient memory accesses etc). So, it often becomes important to aid in this optimization.
				</br> </br>
				Various techniques will help in squeezing extra performance:
				</p>
				<ul>
					<li>Ensuring good memory locality (keeping an eye on store/load operations, keeping needed data close to the CPU)</li>
					<li>Avoiding the penalties of branch misprediction</li>
					<li>Enhancing instruction level parallelism through loop unrolling, reducing critical data paths, and through reassociation transformations</li>
				</ul> 
				<p>
				There are also many other penalties and costs that occur in a system that become factors in a program's performance: overheads of procedure calls, thread context switches, inter process communications, and cache misses etc. Being aware of these allows me to code with them in mind and track down why a particular program might be running slowly.
				</br> </br>
				The importance of understanding the operating system and hardware you are programming on goes way beyond performance. Understanding how everything works gives me confidence in what I write, and the beauty and design of how these underlying systems are abstractly integrated together is enlightening from a system design and problem solving perspective. 
				</p>
			</div>
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
			<ul class="mt-3 text-left mx-0 pl-3">
				<li>Readable and maintainable by other developers</li>
				<li>Accepting to change and extendability</li>
				<li>Reusable and interchangeable</li>
				<li>Self documenting</li>
				<li>Easy to debug, test, build, and deploy</li>
				<li>Free from any other 'Smells'</li>
			</ul>
			<button class="read-more">Read More</button>
			<p class="mt-3 detail-section text-justify">
				I have worked in the industry for over 3 years and understand that readable, maintainable and testable code is highly important. Upon joining my first full-time software development role in 2014 the first book I was handed ‘Clean Code' by Robert C. Martin. Since then I have strived to write code that follows the principles and rules laid out by that book, ensuring I use all of the ‘good smells’ such as well named variables, loose coupling, high cohesion, non repeating code, single responsibility classes and so on. In doing so I prevent many of the ‘bad smells’ that lead projects into buggy unextendable messes.</p>
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
				I have taken courses in the design of databases throughout my education and most recently took Stanfords freely available course on SQL databases. This, combined with my experience of actually implementing databases in real production environments has given me a great deal of knowledge on what works well. I understand the importance of normalization when designing the database but also how the design will affect query performances in a live environment. I’ve designed and maintained many databases for a wide range of projects; for both TSQL and MYSQL, and used them with a wide variety of stacks, from PHP REST API’s, to thick clients in conjunction with Hibernate. 
				</br></br>
				I have had some very unique projects that varied from writing complicated stored procedures, to writing very large migration codes that transformed several unnormalized legacy databases into a single clean normalized database.
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
			I have spent a large amount of time building applications for both iOS and Android, often building universal apps for both iOS and Android simultaneously, whilst also designing and implementing the MySQL database and REST API backends they talk to. I have a great deal of experience with the frameworks and native controls available for both iOS and Android, as well as the development process involved in transforming an idea and specification into a working application ready for deployment to the app store.
			</br></br>
			I am well versed in the gotcha’s of app development, to name a few:

		</p>

		<ul class="mt-3 text-left mx-0 pl-3">
			<li>Compatibility and auto-sizing issues across a broad range of devices</li>
			<li>Handling connectivity issues and data integrity across physical devices and backend databases</li>
			<li>Managing push notifications</li>
			<li>Working within the sandboxed constraints of the OS</li>
			<li>Managing authentication tokens</li>
			<li>The handling of in app purchases</li>
		</ul>
			<p>
				Example recent project:
			</br>
				The client required an application that was akin to a personal assistant combined with a messenger, requiring the following core functionalities:
			</p>
			<ul class="mt-3 text-left mx-0 pl-3">
				<li>Users can add and remove each other as friends and then communicate with each other</li>
				<li>Users can send and receive media as well as send each other messages, all media and messages that have been downloaded should be available for offline viewing</li>
				<li>Push notifications should fire for all incoming media</li>
				<li>Media sent by a user while not online should be scheduled for sending as soon as connectivity is reestablished</li>
				<li>Users can create recurring diary events that alarms users with reminders when the event is about to occur. They can also be sent events by other users, which could then be rejected or accepted.</li>
				<li>Users can view media sent by friends, as well as group them into galleries that allow media to be viewed within a slide show</li>
				<li>Users can create groups of friends and send messages to those groups in bulk, as well as navigate between groups, and groups within groups</li>
			</ul>
				<p>

				Development spanned over many months and the process loosely went as follows:
				</br></br>
				<u>The Persistence Layer</u>
				</br>
				I created a MySQL database that fulfilled all the needed data requirements, from user data and credentials, JWT tokens for authentication, filenames for files stored on the server and so on...

				</br></br>
				<u>The REST API</u>
				</br>

				I then created an accompanying REST API written in PHP (using codeIgniter as a framework). This provided all the essential end points needed to manipulate resources, as well a variety of other functionalities including file compression and push notifications.
			
				</br></br>
				<u>The Native Application</u>
				</br>
				 I then thoroughly tested the API with Postman, wrote some unit tests that could be repeated and began development of the iOS application.
				 </br></br>
				<u>Device storage and Parsing</u>
				</br>
				I created the entities and relationships needed in Core Data (Apple's persistence framework), as well as the necessary code to handle the parsing between JSON objects returned by the API and the respective Core Data entities. 
				  </br></br>
				<u>Writing Synchronization Services</u>
				</br>
				 I then began writing the required service classes needed to send and receive the latest resources to and from the server. Handling a variety of situations along the way including: token refreshal, synchronizing device tokens for push notifications, ensuring data integrity and synchronicity between local devices and the back-end, reattempting failed requests, and checking for connectivity to synchronize un-pushed resources.
				</br></br>
				<u>Build Front-End</u>
				</br>
				Once the complications of manipulating and synchronizing resources between the application and server was done, I just needed to build the front-end. Following the visual designs to the pixel, I built the Interface, wired in the view controllers, and connected them to the services i'd created earlier.
				</br></br>
				The application was then ready to be tested by our QA team, so I moved onto the Android version - following a very similar development process.
			    </br>
				After both had been tested, I moved the API to a production server provided by AWS, tested them again, and then went through the process of submitting them to their respective app stores.
				</br></br>
				Looking back I'd prefered to have used some form of cross-platform solution to avoid process redundancies.
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
				<li>Experience building ASP.Net websites</li>
			</ul>
			<button class="read-more">Read More</button>
			<div class="mt-3 detail-section text-justify">
			<p>
			I have built several large WPF thick clients for clients in the past. Most recently I took on a project that involved transforming three existing legacy applications (no source code) into a single WPF application.
			</br>
			 This turned out to be a fairly long project because I had to migrate 3 incompatible, unnormalized databases, into a single datasource that the thick client could connect to; as well as produce a seemingly endless sea of screens and reports, that involved many complicated queries and algorithms. 
			</br>
			 The development process looked like this:
			</p>
			<ul class="infoList">
				<li>I derived  and wrote the specification from the old applications, as well as through talks with the clients</li>
				<li>Created new screen designs for the application in Photoshop</li>
				<li>Wrote large scripts that would migrate hundreds of thousands of records from the 3 data sources into our SQL database</li>
				<li>Created the responsive thick client in WPF, using Hibernate as the bridge between my C# classes and the SQL database.</li>
				<li>Created many complicated reports using RDLC (the devil)</li>
				<li>Wrote various algorithms to reproduce the existing system</li>
				<li>Made sure it looked pretty :)</li>
				<li>Weeks and weeks of testing</li>
			</ul>
			
			<p>
			Finally after around 9 months of development and testing, I deployed the back-end to their servers and migrated the live data. All that was left to do was give the clients an installer for the thick client.
			</br></br>
			I have also worked on many other WPF projects for clients, as well as a few ASP.NET websites; including a project centered around producing reliable OCR scanning using the Tesseract Engine and some custom pre-processing code. 
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
			As mentioned in my previous skills i have taken on numerous projects that required work in all levels of the application stack:
			<ul class="mt-3 text-left mx-0 pl-3">
				<li>Creating and designing persistence stores (MySQL databases, NoSQL MongoDB databases)</li>
				<li>Working with various web application technologies - WildFly, Express etc.</li>
				<li>Creating API’s that intermediate between applications and persistence stores </li>
				<li>Setting up the servers that will host these persistence stores and APIs (typically provided by AWS)</li>
				<li>Performing Sys-Admin duties on many projects at once</li>
				<li>Writing DLLs</li>
				<li>...and many more</li>
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
				<li>Experienced with content management systems like Wordpress and Joomla</li>
				<li>Experienced writing Javascript and familiarity with many JS libraries/frameworks (JQuery, D3.js, MEAN Stack)</li>
				<li>Experience with many other popular web toolkits (SASS, Bootstrap, Grunt)</li>
				<li>Experience building many aesthetically pleasing mobile applications, and some beautiful graph libraries for iOS</li>
			</ul>
			<button class="read-more">Read More</button>
			<p class="mt-3 detail-section text-justify">
				I have built many websites, thick clients, and responsive mobile applications using a wide range of technologies for a multitude of clients. I have always enjoyed graphic design and I believe that greatly assists me in creating intuitive and aesthetically pleasing front-end interfaces.
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
			<button class="read-more">Read More</button>
			<p class="mt-3 detail-section text-justify">
			I have experience creating many digital assets for clients including: Application screen designs, flow layouts, icons, logos, business cards, business websites, digital paintings, and many other promotional visuals.	
			</br>
		A gallery of non-commercial examples will be posted soon. </br>**This website and everything in it stands as one itself**
			</p>
			</div>
	</div>
</div>

<div style="background: #4F6367; color: white;">
	<div class="container pt-3 pb-3" >
		<div class="skill-section col-xs-12 padding-sm-xl">
		<h1 class="text-sm-left text-center">Non-Technical Skills</h1>
		<p class="mt-3">Skills that are not technical but i feel are important assets of mine</p>
		<ul class="mt-3 summList mx-0 pl-3">
				<li>I'm not perfect</li>
				<li>Self learner</li>
				<li>Hard working</li>
				<li>Adaptable</li>
				<li>Good communication and time management</li>
			</ul>
		<button class="read-more">Read More</button>
			<div class="mt-3 detail-section text-justify">
			<p>
			<strong>I’m not perfect</strong> - Obviously nobody's perfect, we all make mistakes, and many times during a project something has gone wrong. Whether this was simple coding errors, making incorrect assumptions, or much bigger problems that at first, leave you stumped on page 10 of google wondering if there’s a god.
			</br>
 			The important thing is that i’ve never been unable to find an answer to the problem in front of me. I’ve always persevered and worked through the problem. Whether that meant taking a step back and thinking of the problem in another way, looking to other sources for guidance, or simply brute forcing every solution under the sun. I understand that projects encounter problems, and understand that it is just apart of the process. Most importantly whenever a mistake or assumption i’ve made has lead to a problem I've made sure to learn from it.
			</br></br>
			<strong>Self learner</strong> - I have always been a strong self learner, not afraid to dive into unknown domains. I love learning new subjects and always jump at the opportunity to expand my experiences. In the past 6 months alone I have read and completed the following books and courses:
			</p>
			<ul class="mt-3 text-left mx-0 pl-3">
			<li>Computer Systems: A Programmer's Perspective -Randal E. Bryant,‎ David R. O'Hallaron</li>
			<li>The Algorithm Design Manual - Skiena</li>
			<li>6.042J Mathematics for Computer Science - MIT Opencourseware</li>
			<li>6.006 Introduction to Algorithms  - MIT Opencourseware</li>
			<li>6.046J Design and Analysis of Algorithms  - MIT Opencourseware</li>
			<li>CS75 Building Dynamic Websites - Harvard</li>
			<li>CS50 - Harvard</li>
			<li>Introduction to Databases - Stanford Lagunita</li>
			</ul>
			<p>
			Each covered an in-depth amount of information that i self studied in my own time, not for any qualification but for the pure satisfaction of attaining knowledge. 
			</br></br>
			<strong>Hard working</strong> - I am an extremely hard working individual both academically and physically, proving myself numerous times. During my time at Kent University I proved myself academically by achieving an 82%+ average across all 24 courses taken over the 3 years; in addition to this I proved myself physically last summer by finally achieving my goals of benching 140kgx5 and hitting 10% body fat.
			</br>
			I know how to push myself past my limits and through onerous tasks.
			</br></br>
			<strong>Experience writing specifications</strong> - Meeting clients to understand their requirements, translating these into unambiguous specifications, and ensuring technological terms are conveyed in an understandable way.
			</br></br>
			<strong>Adaptable</strong> - I work on several unrelated projects simultaneously each with their own varying stacks, requiring me to simultaneously interchange between a multitude of platforms, languages, and domains, demanding a flexible mindset and good memory. To add to this it is quite often a necessity to pick up new languages quickly to meet deadlines, pushing me to become an efficient learner.
			</br></br>
			<strong>Good communication and time management</strong> - I’m used to working within a team across several projects. Communicating design choices, API functionalities, system progress, and avoiding code conflicts during development, whilst also managing and prioritising the timelines of each project.

			</p>
			</div>
			</div>
	</div>
</div>


<div style="background: #7A9E9F; color: white;">
	<div class="container pt-3 pb-3" >
		<div class="skill-section col-xs-12 padding-sm-xl">
		<h1 class="text-sm-left text-center">Personal Interests</h1>
		<p class="mt-3">Interests and things I do in my spare time</p>
		<button class="read-more">Read More</button>
			<div class="mt-3 detail-section text-justify">
			<p>
			When i’m not coding I can usually be found chillin with friends and doing the things that I enjoy:
		    </p>
		    <ul class="mt-3 text-left mx-0 pl-3">
		    	<li><strong>Sports -</strong> I’ve played sports all my life growing up and I still play Cricket, Golf, and Football in local leagues on the weekends with my friends</li>
			<li><strong>Films/TV -</strong> I’ve always loved watching stuff and there's not many good films/shows that I haven’t seen!</li>
			<li><strong>Music -</strong> Motown, Reggae, Dance, Hip-Hop, you name it, I'm listening to it.</li>
			<li><strong>Travelling</strong></li>
			<li><strong>Reading -</strong> Manga, Comics etc</li>
			<li><strong>Bodybuilding and Powerlifting -</strong> I regularly train and will often PT friends</li>
			<li><strong>Eating! -</strong> My love for eating should not be underestimated! Pizza <i class="fa fa-heart" aria-hidden="true"></i></li>
			</ul>
			</div>
		</div>
	</div>
</div>


<div>
	<div class="container pt-3 pb-3" >
		<div class="skill-section col-xs-12 padding-sm-xl">
		<h1 class="text-sm-left text-center">Contact me</h1>
			<p class="mt-3 text-justify">
				I am looking for a venture that is going to present me with the challenges that will take me to the next level as a software engineer and computer scientist. There are a broad range of fields I am interested in including Machine Learning, Distributed Systems, Software Architecture, and many more.</br> If you believe you’re the company that has the challenges I’m looking for I’d love to hear from you! 

			</br></br>
			My cv and email can be found below. Thanks for reading this far!!
			</br></br>
			-Storm
			</p>
			</div>
	</div>
</div>


<?php
get_footer();
