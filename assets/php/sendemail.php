<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'assets/phpmailer/Exception.php';
require_once 'assets/phpmailer/PHPMailer.php';
require_once 'assets/phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit']))
{
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $umur = $_POST['umur'];
  $jeniskelamin = $_POST['jeniskelamin'];
  $whatsapp = $_POST['whatsapp'];
  $questcn = $_POST['questcn'];
  $questonmic = $_POST['questonmic'];
  $screenshot = $_FILES['screenshot']['tmp_name'];


  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'carakubeiya@gmail.com'; 
    $mail->Password = 'cbikintil123'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->addAttachment($screenshot,'screenshot_KD.jpg');

    $mail->setFrom('carakubeiya@gmail.com'); 
    $mail->addAddress('carakubeiya@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'FORMULIR REGISTRASI';
    $mail->Body = "<h3>DATA DIRI : <br>Nama : $nama <br>Alamat: $alamat <br>Umur : $umur <br>Jenis Kelamin : $jeniskelamin 
    <br>Nomor Whatsapp : $whatsapp <br><br><br>QUESTION : <br>Siap CN : $questcn <br>Siap On Mic : $questonmic 
    <br><br><br><br> JANGAN LANGSUNG DI ACC YA CLEK,KOORDINASI DULU...</h3>";


    $mail->send();
    $alert = '<script>
                alert("FORMULIR TERKIRIM...")
              </script>';
  } catch (Exception $e){
    $alert = '<script>
                alert("GAGAL MENGIRIM FORMULIR...")
              </script>';
  }
}
?>
