# CSCI_3308-Android-Army

Repository for Team Android Army's software development group project

Team Name: Android Army 

Team Members: Ashley Kim, Adam Ten Hoeve, Neil Nguyen, Remy Dahlke, James Mahon, Emily Childers

Project Description: 
  Our project will be a web application designed to increase information regarding Android version distribution (software updates) for the two billion Android users around the world. Essentially, the site will allow users to search by specific phone models, manufacturers such as Samsung, and/or by update version, as well as potentially many other identifiers.  The site will crowd-source much of this information via a submission page that allows any user to provide information on their own device and which update version they are on without having to create and log-in to an account.  The submission form will also include a section that users can use to track noticeable changes that have occurred to their phone following installing the update. Our database will be comprised of such user submissions, and we will sort and display it based on the aforementioned identifiers. 
  
  A user who is looking for a new Android phone could use our site to help inform their buying decision; How often do certain Android models need to be updated, how well updates work with the model's hardware, and whether there are complications or issues with current software.  Current Android consumers will also find our site incredibly helpful in referencing performance of different updates and helping them find what the most recent updates are. Our website will allow Android users to find information about updates conglemerated into one location, rather than having to search for it across numerous websites.
  
  Vision Statement:
    We strive to create a clear, concise, and user-friendly website that allows Android users as well as companies looking to gain user information to weigh pros-and-cons of updates and see how it will affect their phone. 
	
 Motivation:
  Our team member James was searching for a new Android phone and was frustrated with how difficult it was to find how different manufacturers updated their phones.  By creating this website, we allow potential Android users to weigh the pros and cons of the updating process for the numerous different Android manufacturers, as well as see how exactly the updating processes work for each. 
  
  Risks:
    All of us are beginners in programming who have never created functional applications before. We also don't have much experience in creating a functional application as a team. We also don't have an established user-base to jump-start our site and data base. 
	
  Risk-Mitigation Plan:
    For the lack of established user-base, we will manually input some information about updates ourselves as well as solicit peers with Androids to submit their own forms.  As for project management inexperience, we will adhere to a strict Agile development strategy to insure that we have all made significant technical progress by each milestone. Although we are all beginners in programming, the best way to alleviate this is to start by making this application. If we have coding questions, we will refer to the expertise of our Professor, TA's and CA's.
	
Version Control:
We will use GitHub and will commit heavily and often. We will also meet in person frequently to decide what we actually push. 

Development Method:
We will use the Agile development method so we can better keep track of our progress, pace ourselves and plan ahead, and make sure we have concrete work to show for it. We will meet in preson no less than once a week and establish plans for ahead.

Collaboration Tools: In additon to our weekly in-person meetings, we will have a Slack channel to facilitate open communication as well as for any question.

Proposed Architecture:
The web app will be powered using HTML and CSS on the front end, mySQL on the backend to store phone version information, and PHP as an inbetween to display what users have reported, and input data from the form.

Repo organization: 
Our repository is organized such that it contains all HTML and CSS files (the page they correspond to is indicated by the _<name>.file format, i.e. AndroidArmy_Submit.html is the html for our submit page).  To build and run, take the database.sql file, create a database with the corresponding tables and information, and then go to all php files to input your database name, MySQL IP address, username, and password in order to allow the PHP files to connect to the database. After you've finished this step, simply open the AndroidArmy.html page (homepage file) in your browser and feel free to click through the pages on the menu. You can submit, send us an email, or simply browse the database. To test if your submission has gone through, just check the phones page to see if shows up!
