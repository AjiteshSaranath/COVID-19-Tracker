				   COVID-19 TRACKER WEBSITE

//    Login Credentials to Enter the Website  //

Username : Ajitesh (In Database)
Password : abc123 (In Database)

NOTE: In the feedbackform.php file you need to add your won address where you need the mail to be sent once a feedback is given.(Have mentioned where you have to add your mail in it).

//    Sample Mail Credentials    //

Mail ID : ajiteshiwptest@gmail.com
Password : iwpproject

//    Flow of Execution of Pages    //
		

		login.php--->register.php(new account)--->server.php(to update DB)
		   | 
		   |
		   V
		server.php(verify credentials)
		   |
		   |
		   V
		index.php--->countries.js & app.js (extract values and country names)
		   |
		   |
		   V
		errors.php(check for errors)--->(To Logout by pressing Logout button)
		   |						|
		   |						|
		   V						V
		feedbackform.php			    login.php										

NOTE: Preferred Tool to view the coding would be Visual Studio Code.		



