

<?php
echo hello;
$name=$_POST['name'];
$date_m=$_POST['month'];
$date_y=$_POST['d_year'];
$section=$_POST['section'];
$street=$_POST['street'];
$city=$_POST['city'];

$zip=$_POST['zip'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$current_school=$_POST['current_school'];

$year=$_POST['year'];
$major=$_POST['major'];
$gpa=$_POST['gpa'];

$honors=$_POST['honors'];

$r_name1=$_POST['r_name1'];
$r_name2=$_POST['r_name2'];
$r_name3=$_POST['r_name3'];

$r_major1=$_POST['r_major1'];
$r_major2=$_POST['r_major2'];
$r_major3=$_POST['r_major3'];

$r_phone1=$_POST['r_phone1'];
$r_phone2=$_POST['r_phone2'];
$r_phone3=$_POST['r_phone3'];

$goals1=$_POST['goals1'];
$goals2=$_POST['goals2'];

$message="Name: ".$name."\n\nDate of hire: ".$date_m.'/'.$date_y."\nSection: ".$section."\n\nPermanent Address\nStreet: ".$street."\nCity: ".$city."\nZip Code: ".$zip."\nPhone: ".$phone."\nE-mail: ".$email."\nCurrent school attending: ".$current_school."\nYear: ".$year."\nMajor/Program: ".$major."\nCurrent GPA: ".$gpa."\nHonors and Extracurricular Activities: \n".$honors."\n\n\nList three references: \n\nName:".$r_name1."\nTitle/Relationship:".$r_major1."\nPhone:".$r_phone1."\n\nName:".$r_name2."\nTitle/Relationship:".$r_major2."\nPhone:".$r_phone2."\n\nName:".$r_name3."\nTitle/Relationship:".$r_major3."\nPhone:".$r_phone3."\n\n\nFuture educational goals:\n".$goals1."\n\nCareer goals:\n".$goals2;

mail('sebastian@garcia5.com', 'The Professional Lifeguard Foundation  - Application', $message);
mail('shotaguy419@yahoo.com', 'The Professional Lifeguard Foundation  - Application', $message);
mail('hulapie9@gmail.com', 'The Professional Lifeguard Foundation  - Application', $message);
mail('paul.silka@gmail.com', 'The Professional Lifeguard Foundation  - Application', $message);
mail('prolifeguardfoundation@gmail.com', 'The Professional Lifeguard Foundation  - Application', $message);
mail('nordink@gmail.com', 'The Professional Lifeguard Foundation  - Application', $message);
mail('admin@3dr.org', 'The Professional Lifeguard Foundation  - Application', $message);

$filename = "mail_content.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);

mail($email, 'Thank you for your application to the Professional Lifeguard Foundation.', $contents);



header("Location: thankyou.html");

?>




