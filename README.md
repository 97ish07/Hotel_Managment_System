About the project
Shereen Chalet hotel is a newly established holiday resort in Kalpitiya with limited facilities yet. This hotel specializes in providing facilities like room reservations and managing events for its clients.

Currently, this hotel consists of only a few employees. It had been exhausting for our client to manage rooms, bookings, inventories, events, menus, employees, maintenance activities, and finances all this time even with limited several employees and services.

Up until now, our client has managed the hotel manually with ledgers and physical documentations due to the hotel’s scale and now they wish to renovate and upgrade the premises.

Therefore, they have realized that functionalities in the hotel will be much more productive and efficient if they upgrade their manual system to a web-based system

Tools and Technologies used
Front end framework - Bootstrap


Back end framework - Laravel version 8


DBMS - phpmyadmin
Database - mySQL
To run the application
Prerequisities
Following servers and packages should be installed prior to the the application installation
xammp server with php version 8
latest version of composer
mySQL server
Installation
Following commands can be followed to run the application successfully
Create a new folder, go inside the folder and open git bash from it
Clone the project
git clone https://github.com/TharinduAB/Hotel-Management-System-for-the-Shereen-Chalet.git
Go inside the cloned project folder using CD command
Install composer packages
composer install
Open the cloned project from VS code IDE
Change the database name in the .env.example with the relevant DB name and Rename the .env.example file as .env
Create a new Database inside MySQL DBMS with the DB name given in the .env file
Generate keys
php artisan key:generate
Do the table migrations
php artisan migrate
Run the server
php artisan serve
Run the application by using the suggested URL in a prefered web browser
Contributing
cmd to create a new feature branch in the repo
git checkout -b newFeatureBranchName
git push origin newFeatureBranchName (now check whether it's created in github)

cmd to checkout to a branch which is already created
git checkout featureBranchName

When working in your branch,
if multiple files created, add them all at once:
git add .

After doing any modification to the code in your branch,
commit it:
git commit -m "commitName"

push it to the featureBranch in github
git push origin featureBranchName

When your featureBranch is ready to merged with the Master branch,
pull the latest updates in github master to local master
git checkout master
git pull

Now your featureBranch can be merged to local master
git merge featureBranchName

If everything works(run) perfect, push the updates in local master to github master:
git push

Acknowledgment


This is a group project done for ITP module in second year, SLIIT

Contributors
IT19977980– Abeynayake T.C-TharinduAB
IT19987026– Abeysinha A.M.V.A-vihangaAshvinda
IT19985350– Rathnahewage T.V-Thusil99
IT19974910– Hapugala H.A.V.V-VenuraHapugala
IT19975764– Bandara M.B.D.N-dilendranishadhi
IT19987644– Ranodya M.J.C-CharmieRanodya
IT19986036– Amarakoon A.V.G.H.S-HeliSahanya
IT19961422– Uyanahewa M.I.R-MadhaviImashi
