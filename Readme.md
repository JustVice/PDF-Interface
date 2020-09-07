[![N|Solid](https://dl.dropboxusercontent.com/s/4rkbkdirpmjdc81/viceReadmeMDImage.png?dl=0)](https://justvice.github.io)
[![MIT license](https://img.shields.io/badge/License-MIT-blue.svg)](https://lbesson.mit-license.org/)
[![No Maintenance Intended](http://unmaintained.tech/badge.svg)](http://unmaintained.tech/)
# Description
Visualize PDF files stored in a directory on a website. Access your PDF files by writing the webserver IP. 
# Technical specs
Movies Interface needs a web server host software to run. It has been developed as running on Apache2. Therefore Apache2 software should be used to ensure correct functionality.
# Setup
### Web Server setup
- Go to XAMPP oficial website and download XAMPP at <https://www.apachefriends.org/>
- Select at least Apache service to be installed.
- Go to the folder where XAMPP was installed and locate "htdocs" folder.
- Delete all contents inside this page and place PDF Interface's files inside (not a folder called PDF Interface with the files. Copy the PDF Interface's files themselves inside "htdocs").
- Open XAMPP and start Apache service by pressing the "Start" button.
- If everything was ok, you should now see PDF Interface's user interface by typing "localhost" on your web browser.
### PDF Interface setup
To configure PDF Interface open the file "config.php" with any text editor.
![alt text](https://dl.dropboxusercontent.com/s/pn8rixy3qxdwrfh/pdf-interface-config-img.png?dl=0)
You will find the following editable code lines to:
```
[ENVIROMENT]
$pdfs_folder_path = "./pdfs"; // Path were PDFs files are stored.
$password_set = "NO PASSWORD"; // Password to enter the list of PDFs.
// Set password_set variable as "NO PASSWORD"
// if you don't want to set any password.
```
PDFs folder must be reached by navigating from the project root path.
Example of $pdfs_folder_path route:
```
$pdfs_folder_path = '../../Documents/books/'
```
Happy lecture!

