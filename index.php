<html>
<head>
<title>OHSNAP! SNAP APP Reminder Application Page</title>
</head>
<body>
<p>
Options:<br />
<select id="panel-select" name="Oh-Snap" onchange="window.location.href='index.php?panel=' + document.getElementById('panel-select').value;">
<option>Select a panel ...</option>
<option value="Interm Report Form">Interm Report</option>
<option value="SNAP Income Cap">SNAP Income Cap</option>
<option value="Profile">Profile</options>
</select>
</p>
<?php
    if ($_GET ['panel'] == 'Interm Report Form') {
?>
<h1>Interm Report Form</h1>
<?php
    } elseif ($_GET ['panel'] == 'SNAP Income Cap') {
?>
<h1>Income Cap Reminder</h1>
<?php
    } elseif ($_GET ['panel'] == 'Profile') {
?>
<h1>Profile</h1>
<p>
<form method="post" action="<?php echo $PHP_SELF;?>">
Fullname:<input type="text" size="12" maxlength="50" name="Fullname">:<br />
<!--add edit button to address/cell#/Case#/approval/report dates-->
Birthdate:<input type="text" size"12" maxlength"10" name="Dob">:<br />
Address:<input type="text" size="12" maxlength="50" name="Address">:<br />
Cell Phone:<input type="text" size="12" maxlength="12" name="Cphone">:<br />
Case Number:<input type="text" size"12" maxlength="10" name="Case">:<br />
SNAP Approval Date:<input type="text" size"12" maxlength="10" name="Apprdate">:<br />
Report Due Date:<input type="text" size"12" maxlength="10" name="Reportdate">:<br />
</p>
<?php
}
?>
</body>
</html>
