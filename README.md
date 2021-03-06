
# CSCI E-71 Final Project

### December 13 Update
-- URL of working product increment : http://taskrmastr.ddns.net  

-- Code Coverage of working product increment : http://taskrmastr.ddns.net:81/coverage  

-- Jenkins Automated Continuous Integration : http://taskrmastr.ddns.net:8080  

Description of an automated CI/CD process:
-	Jenkins server is hosted on an Amazon AWS public Windows server.
-	The Jenkins automated build (CSCI_E-71_TaskrMastr_test) is triggered whenever code is pushed to the GitHub repository. This is implemented with the help of the Jenkins GitHub plugin.
-	Downloads code from remote repository on Github, and places it in a local on the Jenkins server repository.
-	Run tests:
  - Generates test report in Jenkins 
  - Generates coverage report 
-	When tests are successful, another Jenkins job is available (CSCI_E-71_TaskrMastr_deploy) to actually deploy the changes. When triggered, the application will be deployed to the webserver, and hence publically available. 


### November 30 Update
URL of working product increment video : https://www.youtube.com/watch?v=3tTyOG_bu-s&feature=youtu.be

Code Coverage : 
![alt tag](https://github.com/yashspatel23/csci71-FinalProject/blob/3fefd942d062ab982806527db289841e52c7ffee/Screen%20Shot%20Sprint%202%20-%204.png)
![alt tag](https://github.com/yashspatel23/csci71-FinalProject/blob/1533e7b869653fb3ca551fc9b61bc790671ce6f4/Screen%20Shot%20Sprint%202%20-%205.png)
![alt tag](https://github.com/yashspatel23/csci71-FinalProject/blob/3fefd942d062ab982806527db289841e52c7ffee/Screen%20Shot%20Sprint%202%20-%203.png)


Unit Tests Result : 
![alt tag](https://github.com/yashspatel23/csci71-FinalProject/blob/3fefd942d062ab982806527db289841e52c7ffee/Screen%20Shot%20Sprint%202%20-%201.png)
![alt tag](https://github.com/yashspatel23/csci71-FinalProject/blob/3fefd942d062ab982806527db289841e52c7ffee/Screen%20Shot%20Sprint%202%20-%202.png)


### November 16 Update
URL of working product increment video : https://www.youtube.com/watch?v=yA-L5F2J2Wg&feature=youtu.be

Code Coverage : ![alt tag](https://github.com/yashspatel23/csci71-FinalProject/blob/master/Overall%20Coverage.PNG)
![alt tag](https://github.com/yashspatel23/csci71-FinalProject/blob/master/Controllers%20Coverage.PNG)


Unit Tests Result : ![alt tag](https://github.com/yashspatel23/csci71-FinalProject/blob/master/Unit%20Tests%20and%20Build%20Results.PNG)

--- 
---
---

##### **GitHub URL :**
https://github.com/yashspatel23/csci71-FinalProject/

##### **Team Name :** 
SprintTasktic

##### **Team Members :**
* Yash Patel **(Scrum Master)**
* Lori Higham **(Product Owner)**
* Joey White (Developer)
* Tomasz Skiba (Developer)
* Rich Burgess (Developer)


##### **Product Name :**
TaskrMastr

##### **Product Vision :**
Every task easily managed through one user-friendly application.


##### **Definition of Ready :**
* Is immediately actionable by the team
* Has been talked through by the team and the product owner (Before sprint planning)
* Business requirements for the user stories going into increment are fully understood
* Every item has value
* Every item is testable
* User stories are divided into tasks and estimated by the development team
* Is properly sized for the team
* User stories are defined and written
* Acceptance criteria for increment user stories are defined
* Dependencies are identified
* The stakeholders for user stories are identified
* The team agrees on user stories going into increment and understands how to demo them


##### **Definition of Done :**
* Successful integration into the build
* No code smells
* User experience tested
* Every iteration is ready for production
* Product requirements are fully implemented
* Meets technical requirements
* Meets acceptance criteria
* Product passes integration, performance, and acceptance testing
* Code coverage is above 90% 
* Nothing more needs to be completed for an increment to be taken into production
* Product owner signs off

 
##### **Stakeholders :**
* Nancy is a homekeeper with three children who runs a small Kids' Crafts home business. 
* Don is a Harvard student majoring in Web Design and juggles work and school. 
* Mike is the CEO of Tech Inc. and oversees twenty-five employees. 
* Big Splash owner Sarah is an event organizer who typically manages at least four events simultaneously.


##### **Slack Channel :**
https://agilesoftwaredev.slack.com/messages/sprinttasktic/team/


## **Prioritized Product Backlog :**
An organized priority list is available in the **Final-PBI_Ordered_List.xlsx** https://docs.google.com/spreadsheets/d/1SxqpCZJJ2mdRCbhx-IwGykm5TIK4RhIz_SXyDaZuqKg/edit#gid=43969123

## **HW1 Presentation:**
**Sprinttasktic1_Intro_11_2_2015.pptx.pdf** file (Link: https://github.com/yashspatel23/csci71-FinalProject/blob/d03d5edd075338fa4c79e908a3b762c562eb2d5d/Sprinttasktic1_Intro_11_2_2015.pptx.pdf)

## **Feedback from Users after Sprint 1:**
Some stakeholders don't care about having a calendar or about sharing tasks/making tasks private. However, all say it is essential to be able to push to their mobile devices. This feedback changed our product backlog in that we've reprioritized mobile notifications, bumping that item from Sprint 4 to Sprint 3. 

Other feedback is that they would like integration with Jira and would like to have the option of video conferencing within the application. Slack integration is included as a future backlog item, so we've now also included Jira integration as a user story. Both Slack and Jira will likely fall outside the scope of what we can do in the next 4 weeks, but it is good to know for future reference. Video conferencing is a great idea, and we've added it to our user stories for future development, but it, too, falls outside the scope of what we can accomplish in the next two sprints. 

*Note that our evening meeting Monday, November 16 after class will be our sprint planning session for the next two weeks. Because setting up everyone's IDEs and PHPUnit testing took so long, we will need to revamp our product backlog for the next two sprint sessions based on what we accomplished in Sprint 1. We will also likely update our product backlog for Sprints 4 and 5 (even though we will not actually get to them) and move at least one item out to future sprints. 

## **Feedback from Users after Sprint 2:**
-- CEO Brian K. added that the one core functionality he doesn't see as "essential" (among those that we included in our first three sprints) is the analytics tools. 

-- CEO Jeremy M. does see this functionality as essential, and it might be a selling point for him because as far as he knows, he does not have an application that includes it. However, he added that he "pays other people to do this stuff for him," so we would need to meet with his software developers. 

-- Homekeeper Karen H. said that she doesn't see a need for extensive profile options; her primary interest would be an application that enables her to create categories, create tasks within those categories, and edit and delete those categories. In addition, she wants to receive notification via both email and text. 

-- The other stakeholders said their feedback remains as it was after the first sprint, so these are the only new updates. 

The ways this new information impacted our PBIs is that we've moved the analytics tools a little farther down the list, and we've affirmed that text notifications indeed needs to remain in Sprint 3 because all stakeholders consider it essential. We also bumped "Set User Profile & Preferences" farther down the list because not all stakeholders consider this a necessary functionality. 

*Note that either "Set user preferences" or "Sort list items" will be moved to Sprint 4 (hence the discrepancy in points allotted to that sprint versus actual points in user stories). We are meeting after class on Nov. 30 for our Sprint planning session and will decide as a team how best to proceed. 

## **Feedback from Users after Sprint 3:**
-- Analytics burndown tool: The stakeholders like the idea of our analytics tool; two of them have now viewed the visual on our application. They would like to see it after all features are working, but they like the concept as we've explained it. 

-- Calendar: One stakeholder in particular, Karen Harris, had previously stated that she really had no use for a calendar, but she had assumed she'd have to manually update the calendar and found that idea wearisome. Now that she's seen it, however, she is really happy that tasks, given start and end dates, can appear automatically on the calendar. We did note a bug that needs fixed in our calendar, and that remains for next sprint. 

-- Web conferencing
One CEO friend really wants this feature and was the one to suggest it. This sprint I've spent time interviewing some of our other stakeholders as well, and they also think it is a cool idea. One stakeholder, Don the Harvard student (Greg Gerrein) feels it would be cool but would entail a lot of development. 

-- At this point, we are not changing our product backlog except to prioritize debugging the calendar. The feedback we've received confirms that we're headed in the right direction. We had our notiications nearly completed but needed to stop that and work on hosting our app and other issues, so we weren't able to push either email or text notifications. Those, along with profile and preferences setup, would be pushed to sprint 4. We would, ideally, meet after class today to plan our next sprint. That's what we've been doing each sprint. 

## **Product Backlog**

### **SPRINT 1 :**
#### *(Total points: 15)*
---
##### **Story Title: Support registration**
**Estimate :** 10  
As Nancy the homekeeper, I want to be able to register with TaskrMastr so that I can log in with my stored login information and use the application.

**Acceptance Criteria :**
* The system verifies that my email is unique and sends an error message if not.
* The system stores my username, password, email, and optional phone number. 
* The system generates a hash of my password and stores it in a secure manner so no intruder will be able to obtain my password from the database.
* After I successfully register, I am redirected to the home page. 

---
##### **Story Title: Support login**
 **Estimate :** 5  
As Mike the Tech Inc. employer, I want to be able to log in to TaskrMastr so that I can use the system.

**Acceptance Criteria :**
* I can log in as a unique user. 
* I am redirected from the login page to the home page. 
* A cookie is set on the web browser to keep session active.

##### **Note that setting up IDEs and PHPUnit was part of this sprint, so we assigned extra points to these two items. Coordinating dependencies and setting up took even longer than expected, but we should be good now.**
---
---

### **SPRINT 2 :**
#### *(Total Points : 22)*
---
##### **Story Title: Create categories**
 **Estimate :** 10  
 As Sarah the Big Splash event organizer, I want to be able to create categories of list items and associate my list items with their respective categories so that I can view and work with them in aggregate.

**Acceptance Criteria :** 
* The system includes a “Create Categories” link that leads to category options. 
* The system presents a (pre-created) list of typical categories from which I can make a selection and also allows me to enter my own categories. 
* The system stores the categories I select and create. 
* The system allows me to add list items into my created categories. 
* The system allows me to edit the categories I created.
* The system allows me to delete the categories I created and all tasks within that category.

---
##### **Story Title: Mark items as done**
**Estimate :** 1  
As Don the Harvard student, I want to be able to mark list items as done when applicable so that the completed list items can be removed from to-do and similar lists and inserted into a tasks done page. 

**Acceptance Criteria :** 
* Applicable reports and screens show that the list item is done.
* When marked as done, the list item is removed from to-do and similar lists. 
* When marked as done, the list item is moved to a tasks done page. 

---
##### **Story Title: Automatically increment task number when a new task is created**
**Estimate :**  1  
As Mike the Tech Inc. employer, I want the system to automatically generate a new unique task number whenever a new task is created so that new tasks are automatically assigned the next available number and can be identified without any redundancies.

**Acceptance Criteria :**
* Every task should be referenced using a unique identifier.
* As a user, I should be able to search for tasks based on this identifier.

---
##### **Story Title: Create list items (tasks within Categories)**
**Estimate :** 10  
As Nancy the homekeeper, I want to create new list items along with metadata about those items including date, comments, priority, status, unique identifier, owner, title, % complete, watch list, owner phone number, and email so that I can store and later refer to those items.

**Acceptance Criteria :**
* The system includes a “Create Task” link. 
* The system requires a slug (for identification) and throws an exception if I do not enter one.
* The system stores the list items I select and create.  
* The system allows me to edit list items.
* The system allows me to delete list items.
* The system allows me to mark list items (tasks) as completed.

---
---
### **SPRINT 3 :**
#### *(Total Points : 38)*
---
##### **Story Title: Support account recovery**
**Estimate :** 3  
As Don the Harvard student, I want to be able to recover my password so that I can gain access to the system if I forget my password.

**Acceptance Criteria :** 
* The system sends an error message when I try to log in with the wrong password. 
* With the error message, the system includes a link (forgot password) that I can click on, which leads to a page that allows me to enter my unique email and be emailed a link directing me to a page where I can reset my password. 
* The system stores my new login information. 

---
##### **Story Title: Set user profile/preferences**
**Estimate :** 10  
As Don the Harvard student, I want to set up a complete user profile so that I can specify when to send notifications to myself regarding tasks nearing deadlines and what options I want to include in list item preferences. 

**Acceptance Criteria :**
* The system offers a “Set up your user preferences” link, which leads to a page of options 
* Set prefered method of contact when receiving alerts about upcoming due dates.
* Associate email / phone number with tasks assigned to me.
* Allow user information to be added/updated. Information includes name, email, phone number, photo, password.

---
##### **Story Title: Create email reminders for each item**
**Estimate :**  5  
As Sarah the Big Splash event organizer, I want to be able to send email reminders to myself and/or other members of my team whenever a list item is created or is near a due or suspense date so that I can be aware of items and deadlines when I am not logged in to the system.

**Acceptance Criteria :**
* System automatically generates email alerts based on preset list item criteria. 
* By default system sends reminder 1 day, 6 hours, and 1 hour before task is due to the person responsible for the task.
* Email alerts preferences can be updated in the user profile/preferences page.

---
##### **Story Title: Create burndown chart visualizations / analytics**
**Estimate :** 10  
As Don the Harvard student, I want to be able to create visualizations that show list and task status for selected categories and list items assigned to me or my team members so that I know which specific list items are complete as well as what percentage of list items are complete/incomplete.

**Acceptance Criteria :**
* Any required graph tools are imported to the system. 
* A visual is dynamically generated based on my supplied information to the application to present information about tasks completed v.s. in progress v.s. open.
* A help menu explaining what information the visuals represent.

---
##### **Story Title: Create individual calendar visual**
**Estimate :** 10  
As Nancy the homekeeper, I want to be able to see a visual calendar of all list items and tasks that I’ve created so that I can see the entire scope and timeline of my goals.

**Acceptance Criteria :**
* Calendar visual large enough to present days of the month.
* Days should include task name. 

---
---
### **SPRINT 4 :**
#### *(Total Points : 30)*
---
##### **Story Title: Create Text reminders for each item**
**Estimate :** 5  
As Sarah the Big Splash event organizer, I want to be able to send text reminders to myself and/or other assigned users on my team whenever a list item is assigned or is near a due or suspense date so that I can be aware of items and deadlines via mobile phone.

**Acceptance Criteria :**
* System generates a “no phone number on file” error if I attempt to set preference to send text messages to a user who has not included a phone number in his/her profile.
* System automatically generates text messages based on preset list item criteria. 
* By default, system sends reminder one day before task is due to the person responsible for the task.

---
##### **Story Title: Sort list items (set item preferences)**
**Estimate:** 10  
As Sarah the Big Splash event organizer, I want to be able to sort items in the list so that I can see the items ordered according to my preferences.

**Acceptance Criteria :**
* System generates options for level of effort required (numerical value), priority (sprint #), and target date at item creation. 
* I can order by priority. 
* I can order alphabetically.
* I can order by target date.
The system can compute the numerical value of each task in relation to that of the overall sprint as a percentage of the total effort required. 

---
##### **Story Title: Create search tool for use on all metadata items**
**Estimate :** 5  
As Mike the Tech Inc. employer, I want to be able to find tasks with particular values in task metadata fields so that I can quickly view only those tasks in my selected field that I want to see based on my search context.

**Acceptance Criteria :**
* System allows me to select any metadata field and run a search for specific tasks. 
* System allows me to search for any value and returns accurate results. 

---
##### **Story Title: Export to Excel**
**Estimate :** 10  
As Don the Harvard student, I want to be able to export lists and reports to Microsoft Excel from the user interface so that I can work with the information using Microsoft Office tools.

**Acceptance Criteria :**
* System properly formats lists and reports in both table and text form. 
* System converts lists and reports from one format to the other without corrupting the document. 

---
---
### **SPRINT 5 :**
#### *(Total Points : 36)*
---
##### **Story Title: Share categories with other users**
 **Estimate :** 3  
As Mike the Tech Inc. employer, I want to be able to share entire categories with other users, including all list items associated with those categories, so that other users will be able to see these categories. 

**Acceptance Criteria :**
* I can select specific users and share categories (and their respective list items) with those users.
* Selected users can view and edit those categories and items. 

---
##### **Story Title: Assign list items to other users**
**Estimate :** 3  
As Sarah the Big Splash event organizer, I want to be able to assign list items to myself and my team members so that every person with appropriate permissions can work on those items.

**Acceptance Criteria :**
* System allows me to grant permissions to specific users to work on list items. 
* System allows me to select other users and assign my own list items to them. 
* Other users see a view of tasks I’ve assigned to them. 

---
##### **Story Title: Create team calendar visual**
**Estimate :** 10  
As Sarah the Big Splash event organizer, I want to be able to see a calendar visual of all list items and tasks assigned to any team I belong to so that I can see the entire scope and timeline of my goals.

**Acceptance Criteria :**
* Calendar visual large enough to present days of the month.
* Days should include task name and person to whom the task is assigned. 

---
##### **Story Title: Support Slack integration**
**Estimate :** 10  
As Mike the Tech Inc. employer, I want to be able to set up my jira account as a communication channel for list and task creation and notifications so that I can work with a project team using one integrated collaboration tool with one interface.

**Acceptance Criteria :**
* System allows linking of external communication channels.
* Creation of new elements in TaskrMastr automatically generates updates in Jira. 

---
##### **Story Title: Remind me when I am at (Geofencing)**
**Estimate :** 10  
As Mike the Tech Inc. employer, I want to be able to view list items and reminders in the context of my geo-location so that the items I see are only those appropriate for my location.

**Acceptance Criteria :**
* System includes “assign geolocation” as a preference option for list items. 
* System includes “assign geolocation” as a preference option for user profile.
* System generates appropriate list views and reminders based on my preset preferences. 


---
---
### **ADDITIONAL BACKLOG ITEMS FOR FUTURE SPRINTS:**
#### *(Total Points : 140)*
---
##### **Story Title: Create option to make a task private**
**Estimate :** 10  
As Mike the Tech Inc. employer, I want to be able to mark a task as private (for myself or for a selected group of users or team) so that I can share the task or list item with only a select team or individual(s).

**Acceptance Criteria :**
* Tasks marked as private are not viewable by anyone except the specified users. 

---
##### **Story Title: Assign various levels of access control (admin, manager, etc.)**
**Estimate :** 20  
As Mike the Tech Inc. employer, I want to be able to assign users varying levels of access control so that I can control what functions a user can perform.

**Acceptance Criteria :**
* I can assign an employee as a regular user
* I can promote an employee (manager) to administrator, allowing that employee the following permissions: 
* Can remove employees from the system
* Can alter employee permissions within the system
* Can change global system settings that affect all employees

---
##### **Story Title: Create global preferences for turning on/off ALL email and text reminders**
**Estimate :** 5  
As Mike the Tech Inc. employer, I want to be able to set preferences regarding the sending of email and text reminders so that I can globally turn off them off when I want to.

**Acceptance Criteria :**
* System does not send out email or text reminders when send preferences are set to “off.”

---
##### **Story Title: Create option to add myself to watch list if task is not private**
**Estimate :** 5  
As Mike the Tech Inc. employer, for non-private tasks, I want to be able to add any assigned tasks to my watch list so that I can be notified via text/email when the list item changes or has a status update. 

**Acceptance Criteria :**
* System generates error message if I attempt to add a private task of which I am not a member to my watch list. 
* System sends me reminders and notifications about the tasks I’ve added to my watch list. 

---
##### **Story Title: Support two-factor authentication**
**Estimate :** 10  
As Mike the Tech Inc. employer, I want to ensure that the system sends an access code to each employee via an alternate communication channel immediately after a log-in attempt and before granting successful log-in so that the system is more secure and less susceptible to hacking and break-ins.

**Acceptance Criteria :**
* System generates and sends an access code as noted above. 
* Login page include textbox for code access entry. 
* Entry of access code completes the log-in process and allows the user into the system. 

---
##### **Story Title: Support items changing color / flashing when deadline is approaching**
**Estimate :** 10  
As Mike the Tech Inc. employer, I want to be able to see a visual indication of which list items have impending deadlines so that I know which items require immediate attention.

**Acceptance Criteria :**
* Items approaching deadlines change text color (or flash) based on preset preferences. 

---
##### **Story Title: Support Slack integration**
**Estimate :** 20  
As Mike the Tech Inc. employer, I want to be able to set up my slack account as a communication channel for list and task creation and notifications so that I can work with a project team using one integrated collaboration tool with one interface.

**Acceptance Criteria :**
* System allows linking of external communication channels.
* Creation of new elements in TaskrMastr automatically generates updates in Slack. 

---
##### **Story Title: iOS and Android application support**
**Estimate :** 20  
As Mike the Tech Inc. employer, I want to be able to interact with the system via mobile device so that I can work with and benefit from the system while I am on the go.

**Acceptance Criteria :**
* System is implemented with responsive design (or includes mobile download option).
* System is scaled to support mobile design restrictions. 

---
##### **Story Title: Video conferencing from within the application**
**Estimate :** 40  
As Don the Harvard student, I want to be able to use TaskrMastr for my videoconferencing needs so that not only my task notifications but also my communication can be easily managed from within one application. 

**Acceptance Criteria :**
* Where appropriate, the system includes a link for video conferencing along with the relevant task item.
* System is scaled to support video connection. 
* Participants of a video conference meeting can be automatically notified of a meeting, along with a link. 
