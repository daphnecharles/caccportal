<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Supervisor Password Change Instructions</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="passwdstyle.css" />
</head>

<body>
<!-----------Top of Page LCC Logo----------->
<table width="95%"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="http://nbcs.rutgers.edu/ccf/cac/staff/secret" class="menu"><img src="logo.png"></a></td>
    <td valign="bottom"><div align="right">
		<?php print date("l, F d, Y.  g:i a"); ?>
		</div></td>
  </tr>
</table>
</td>
  </tr>
<!-----------Black Dotted Line----------->
  <tr>
    <td colspan="3"><img src="blackDot.png" width="100%" height="2" /></td>
  </tr>

<!-----------Main Body----------->
  <tr>
				<td width="45%" height="401" valign="top">
					<h2><font size="3">Password Change instructions for Student/Faculty/Staff accounts (Eden/RCI/Toolbox).</h2>
					<h4><font size="3">Check the following before attempting a password change:</font></h4>
					

					<div id=repair list>
						<ol type=disc">
							<li>First ask the user when was the last time they successfully logged in.
							<li>Make sure they are entering their username in all lowercase.

							<li>Remind the user their password has Uppercase/Lowercase/Numbers/Characters in their password.

							<li>If the user was not associated with the University (acamedically/facult/staff) in the previous semester, then they will have to recreate their account again.

						</ol>
						<h4></h4>
						<h4>If all of the above is exhausted, then ask for a Picture ID (state/university), and proceed below.</h4>
						<ol type=1>
							<li>First open a browser window and go to netops/ldap and check to make sure they have a valid account.
							
							<br />
							<img src="passwdldap.jpg" border="1"><br />
							<br />
							
							<li>Then open 3 new browser windows/tabs.

							<li>Go to &quot;rats.rutgers.edu&quot; on all the windows/tabs.<br>
							
							<li>Select the third link "For RUCS staff support tools, go here.", on all 3 windows.
<br>
<img src="passwdstep1.jpg" border="1"><br>
<br>

<br>
<li>On the 1st window select "PeopleDB Privileged View".
<br>
<img src="passwdstep2.jpg" border="1"><br>
<br>

<br>
<li>On the 2nd window select "RATS User Support Tool".
	<ol type=a>
	<li>Login with your username.
	<li>Enter password as "save <i>enigmapassword</i>".
	</ol>
<img src="passwdstep3.jpg" border="1"><br>
<br>

<br>
<li>On the 3rd window select "User Password Changes with Staff Permissions (kerbshell)".
<br>
<img src="passwdstep4.jpg" border="1"><br>
<br>

<br>
<li>On the 1st window, login in the PDB, and look the user up with their SS#, verify their identity.
<br>
<img src="passwdstep5.jpg" border="1"><br>
<br>
<img src="passwdstep6.jpg" border="1"><br>
<br>
<img src="passwdstep7.jpg" border="1"><br>
<br>

<br>
<li>Copy their username.
<br><br>
							<li>On the 2nd window, paste the username, and select the server on the left and account type on the right.
	</li>
							
								<ol type=a>
									<li>For Students, select &quot;STUDENTDS.RUTGERS.EDU&quot; in the right list.
									<li>For Faulcity, select &quot;RCI.RUTGERS.EDU&quot; in the right list.</li>
									<li>For NBCS accounts, select&nbsp;&quot;NBCS.RUTGERS.EDU&quot; in the right list. Only managers can change passwords for these accounts.<br/>
										NOTE:&nbsp;** If information does not come up for a username, select the appropriate server on the left list.<br/>
								</ol>
<img src="usersupport1.jpg" border="1"><br />								
<br />								
							
							
							
							
							
							
								
							
<li>On the 2nd Window, you want to make sure that the user has a shell/"user account information":
	<ol type=a>
	<li>Normally you will see a csh/tcsh/bash shell.
	<li>Kerbshell: user has to change their password using the kerbshell pwdchange form. (This is a security measure).
	<li>Probshell: the user was naughty, they must speak with a manager.
	<li>No shell information available, they have to create an account.
	</ol>

<img src="usersupport2.jpg" border="1"><br>
<br>

<br>
<li>On the 2nd window, select "Allow Password Change".
<br>
<img src="usersupport3.jpg" border="1"><br>
<br>

<br>
<li>Copy the "users identification token for this password change".
<br>
<img src="usersupport4.jpg" border="1"><br>
<br>

<br>
<li>On the 3rd window, paste the identification token in the "Support Key" box.
<br>
<img src="usersupport5.jpg" border="1"><br>
<br>

<br>
<li>Have the user fill everything else out, and tell them about the password rules.
	<ol type=disc>
	<li>After submitting, if the user gets "Failed to perform kerberos password change: 4011", then they're using the old password.
	<li>Open a putty/ssh shell and have the user try their password, if it works (which it should) then they're all good to go.
	<li>Some other kind of error:
		<ol type=a>
		<li>On the 2nd window, go "back"
		<li>Select "Change Password".
		<li>Explain the password rules, and have the user change 
their password.</ol></ol>

<li> <b>Unusual Circumstances</b></li> <ol type=disc> <li> Remember that 
student alumni are allowed to have their accounts for 1 year after 
graduation, however they are not allowed to log into the CCF computer 
labs.<ol type=a><li>Check in the PDB to see if they have an active alumni 
role and/or:<li>Log into eden and type groups NetID</ol><li>On 
occasion a student who formerly worked for the university will have their RCI account closed but not deleted. You can 
generally confim this if you see an end date on a staff / student staff 
roll in the PDB.  This presents a problem in that our systems will look to 
see if someone has an RCI account before an eden.  The RCI account must be 
completely deleted.  If this is the situation an email must be sent to 
help@rci request the account be closed.</li>

		<li>Still no luck?  Send them to Helpdesk, or ask another supervisor/manager.
		</ol>
	</ol>
</ol>
						</font>
</p>
				</td>
			</tr>
</table>

<br>
<!-----------Bottom Of Page----------->
<hr>
Last Updated: <?php print date("F d, Y.  g:i a", getlastmod()); ?>
<a class="menu" title="Supervisor Only" href="http://nbcs.rutgers.edu/ccf/cac/staff/secret">*&nbsp;*</a><br>
<br>
<br>
<br>
</body>
</html>
