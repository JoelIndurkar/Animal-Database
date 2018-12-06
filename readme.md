Animal

Figured we might as well use the readme as a checklist of what we need to do at this point, add, remove, or change anything as need/as-we-progress.

Immediate Needs:
-Connect php script to either c9 or mysql
-connect mysql and c9

Issues:
-Figure out why the database isn't showing up in c9 when command SHOW DATABASES; is input (shows other databases on the computer but project_db is not showing up)//POSSIBLE FIX IS COPYING MYSQL COMMANDS ONTO C9
    - $ mysql-ctl start
    - [code from mysql project_db]
    - $ mysql-ctl end
-when the website is opened up, a blank page with the change background (not working) button is displayed rather than the website displayed as seen in jsfiddle.
-1st entry of the db (panda, id:1) is displayed twice in mysql
-git does not work on shreyas' pc//POSSIBLE FIX COULD BE ERROR IN COMMAND
    - $ git init
    - $ git add remote origin https://github.com/JoelIndurkar/Animal-Database.git
    - $ git pull --all
    - from this point on changes should be able to be added, committed, pushed, and pulled to/from the repository

Long term goals:
-website shows mainpage; clicking on the animals takes the user to a separate page that displays information stored in the db; there should be a clear button to take the user back to the main page
-website should be clear and easy to view.
-modern look so it looks professional instead of dated
-sharing the website

Also Shreyas if you haven't already I recommend that you download git bash and atom on your home laptop/pc so that you can work on the project from home if you have time. While we may not be too time pressed at the moment, I wouldn't be surprised if due dates and real checklists are added soon. This way, if he adds an in-class due date, we can work on it for longer to get better quality and to meet each requirement in its entirety. While we may be ahead of many other of our classmates, it's better to be prepared so I just suggest you regularly pull changes to your home device atleast. 
