# CSCI E-71 Final Project

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
This web application will be used by users as a task organizer. Users will be able to create and manage categories for all aspects of their life (Grocery List, House Projects, Event Planning, Work tasks, etc.) and seamlessly create entries into each of these categories. With a unified location for all things to do, TaskrMastr will become your personal assistant, keeping track of all your tasks and notifying you as deadlines arrive. 

##### **Stakeholders :**
Students, Employers, Event organizers

##### **Slack Channel :**
https://agilesoftwaredev.slack.com/messages/sprinttasktic/team/


## **Product Backlog**

### **SPRINT 1 :**
#### *(Total points: 20)*
---
##### **Story Title: Support registration**
**Estimate :** 3  
As Nancy the homekeeper, I want to be able to register with TaskrMastr so that I can log in with my stored login information and use the application.

**Acceptance Criteria :**
* The system verifies that my email is unique and sends an error message if not.
* The system stores my username, password, email, and optional phone number. 
* The system generates a hash of my password and stores it in a secure manner so no intruder will be able to obtain my password from the database.
* After I successfully register, I am redirected to the home page. 

---
##### **Story Title: Support login**
 **Estimate :** 1  
As Mike the Tech Inc. employer, I want to be able to log in to TaskrMastr so that I can use the system.

**Acceptance Criteria :**
* I can log in as a unique user. 
* I am redirected from the login page to the home page. 
* A cookie is set on the web browser to keep session active.

---
##### **Story Title: Support account recovery**
**Estimate :** 3  
As Don the Harvard student, I want to be able to recover my password so that I can gain access to the system if I forget my password.

**Acceptance Criteria :** 
* The system sends an error message when I try to log in with the wrong password. 
* With the error message, the system includes a link (forgot password) that I can click on, which leads to a page that allows me to enter my unique email and be emailed a link directing me to a page where I can reset my password. 
* The system stores my new login information. 

---

##### **Story Title: Create categories**
 **Estimate :** 3  
 As Sarah the Big Splash event organizer, I want to be able to create categories of list items and associate my list items with their respective categories so that I can view and work with them in aggregate.

**Acceptance Criteria :** 
* The system includes a “Create Categories” link that leads to category options. 
* The system presents a (pre-created) list of typical categories from which I can make a selection and also allows me to enter my own categories. 
* The system stores the categories I select and create. 
* The system allows me to add list items into my created categories. 
* The system allows me to delete categories I created and all tasks within that category.
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
---

### **SPRINT 2 :**
#### *(Total Points : 22)*
---
##### **Story Title: Create list items**
**Estimate :** 10  
As Nancy the homekeeper, I want to create new list items along with metadata about those items including date, comments, priority, status, unique identifier, owner, title, % complete, watch list, owner phone number, and email so that I can store and later refer to those items.

**Acceptance Criteria :**
* The system includes a “Create List” link that leads to list item options. 
* The system presents a (pre-created) list of typical items from which I can make a selection and also allows me to enter my own list items. 
* The system stores the list items I select and create.  
* The system allows me to delete list items.
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
---
### **SPRINT 3 :**
#### *(Total Points : 23)*
---
##### **Story Title: Create burndown chart visualizations / analytics**
**Estimate :** 10  
As Don the Harvard student, I want to be able to create visualizations that show list and task status for selected categories and list items assigned to me or my team members so that I know which specific list items are complete as well as what percentage of list items are complete/incomplete.

**Acceptance Criteria :**
* Any required graph tools are imported to the system. 
* A visual is dynamically generated based on my supplied information to the application to present information about tasks completed v.s. in progress v.s. open.
* A help menu explaining what information the visuals represent.
---
##### **Story Title: Create email reminders for each item**
**Estimate :**  5  
As Sarah the Big Splash event organizer, I want to be able to send email reminders to myself and/or other members of my team whenever a list item is created or is near a due or suspense date so that I can be aware of items and deadlines when I am not logged in to the system.

**Acceptance Criteria :**
* System automatically generates email alerts based on preset list item criteria. 
* By default system sends reminder 1 day, 6 hours, and 1 hour before task is due to the person responsible for the task.
* Email alerts preferences can be updated in the user profile/preferences page.
---
##### **Story Title: Create search tool for use on all metadata items**
**Estimate :** 5  
As Mike the Tech Inc. employer, I want to be able to find tasks with particular values in task metadata fields so that I can quickly view only those tasks in my selected field that I want to see based on my search context.

**Acceptance Criteria :**
* System allows me to select any metadata field and run a search for specific tasks. 
* System allows me to search for any value and returns accurate results. 
---
##### **Story Title: Assign list items to users**
**Estimate :** 3  
As Sarah the Big Splash event organizer, I want to be able to assign list items to myself and my team members so that every person with appropriate permissions can work on those items.

**Acceptance Criteria :**
* System allows me to grant permissions to specific users to work on list items. 
* System allows me to select other users and assign my own list items to them. 
* Other users see a view of tasks I’ve assigned to them. 
---
---
### **SPRINT 4 :**
#### *(Total Points : 25)*
---
##### **Story Title: Create individual calendar visual**
**Estiamte :** 10  
As Nancy the homekeeper, I want to be able to see a visual calendar of all list items and tasks that I’ve created so that I can see the entire scope and timeline of my goals.

**Acceptance Criteria :**
* Calendar visual large enough to present days of the month.
* Days should include task name. 
 ---
##### **Story Title: Create Text reminders for each item**
**Estimate :** 5  
As Sarah the Big Splash event organizer, I want to be able to send text reminders to myself and/or other assigned users on my team whenever a list item is assigned or is near a due or suspense date so that I can be aware of items and deadlines via mobile phone.

**Acceptance Criteria :**
* System generates a “no phone number on file” error if I attempt to set preference to send text messages to a user who has not included a phone number in his/her profile.
* System automatically generates text messages based on preset list item criteria. 
* By default, system sends reminder one day before task is due to the person responsible for the task.
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
#### *(Total Points : 23)*
---
##### **Story Title: Share categories with other users**
 **Estimate :** 3  
As Mike the Tech Inc. employer, I want to be able to share entire categories with other users, including all list items associated with those categories, so that other users will be able to see these categories. 

**Acceptance Criteria :**
* I can select specific users and share categories (and their respective list items) with those users.
* Selected users can view and edit those categories and items. 
---
##### **Story Title: Create team calendar visual**
**Estiamte :** 10  
As Sarah the Big Splash event organizer, I want to be able to see a calendar visual of all list items and tasks assigned to any team I belong to so that I can see the entire scope and timeline of my goals.

**Acceptance Criteria :**
* Calendar visual large enough to present days of the month.
* Days should include task name and person to whom the task is assigned. 
---
##### **Story Title: Create option to make a task private**
**Estimate :** 10  
As Mike the Tech Inc. employer, I want to be able to mark a task as private (for myself or for a selected group of users or team) so that I can share the task or list item with only a select team or individual(s).

**Acceptance Criteria :**
* Tasks marked as private are not viewable by anyone except the specified users. 
---
---
### **ADDITIONAL BACKLOG ITEMS FOR FUTURE SPRINTS:**
#### *(Total Points : 100)*
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
##### **Story Title: Remind me when I am at (Geofencing)**
**Estimate :** 10  
As Mike the Tech Inc. employer, I want to be able to view list items and reminders in the context of my geo-location so that the items I see are only those appropriate for my location.

**Acceptance Criteria :**
* The system includes “assign geolocation” as a preference option for list items. 
* The system includes “assign geolocation” as a preference option for user profile.
* The system generates appropriate list views and reminders based on my preset preferences. 
---
##### **Story Title: iOS and Android application support**
**Estimate :** 20  
As Mike the Tech Inc. employer, I want to be able to interact with the system via mobile device so that I can work with and benefit from the system while I am on the go.

**Acceptance Criteria :**
* System is implemented with responsive design (or includes mobile download option).
* System is scaled to support mobile design restrictions. 
---
