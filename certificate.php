<?php

   $_isim=$_POST['isim']; 
      $_soyisim=$_POST['soyisim']; 
      $value=$_isim." ".$_soyisim; 

 
 $str_arr = preg_split("/\,/", $name); //Split the string to form an array of names
 
 



putenv('GDFONTPATH=' . realpath('.'));
$font = "SFMono-Bold";
 


$fontSize = 11; // Font size is in pixels.

$flag = 0;

$random= rand(1,3);
if ($random ==1) {
   $image = imagecreatefrompng('res/blank.png');
} elseif ($random ==2) {
     $image = imagecreatefrompng('res/blank2.png');
}
else {
     $image = imagecreatefrompng('res/blank3.png');
}
  
 //The template we will be using change with any pngs

$black = imagecolorallocate($image, 255, 255, 255); //color to be used with RGB values

imagettftext($image, $fontSize, 0, 40, 175, $black, $font, trim($value)); //imagettftext ( resource $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text )



$flag = imagepng($image,'cert/'.trim($value).'.png' ); //store

imagedestroy($image);







?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" type="text/css" href="slick/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css" />

  <link rel="stylesheet" type="text/css" href="main.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <div class="borderli">
    <img src="" style="width: 70px;margin-right: 10px;">
    <img src="" style="width: 200px;">
  </div>

  <div class="borderliheader" style="display: none;">
    <a href="index.html"><img src="" style="width: 70px;"></a>
  </div>

  <div class="box">
    <div class="cart-box">
      <div class="row cart">

        <div class="col-md-4" style="text-align: center;">

          <img src="<?php echo 'cert/'.trim($value).'.png' ?>" style="width: 300px;margin-top: -120px; margin-bottom: -120px">

        
        </div>
        <div class="col-md-6 cart-text sol" style="color: white; ">
          <h1 class="mobilmargin"><b>DİJİTAL BİLETİNİZ HAZIR</b></h1>
          <p> </p>
          <div>Paylaş:
            <!-- Sharingbutton Facebook -->
            <a class="resp-sharing-button__link"
              href="#" target="_blank"
              rel="noopener" aria-label="">
              <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--small">
                <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                      d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z" />
                  </svg>
                </div>
              </div>
            </a>

            <!-- Sharingbutton Twitter -->
            <a class="resp-sharing-button__link"
              href="#.&amp;url=#"
              target="_blank" rel="noopener" aria-label="">
              <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small">
                <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                      d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z" />
                  </svg>
                </div>
              </div>
            </a>
            <a style="margin-left:6px; margin-bottom: 3px" class="btn btn-info" href="<?php echo 'cert/'.trim($value).'.png' ?>" download="biletiniz"><i class="fa fa-download"></i>Bileti İndir</a>
         <div></div> <a target="_blank" href="#"><i class="fa fa-youtube-play" style="font-size:48px;color:red"></i></a> 
          </div>
        

        </div>
      </div>
    </div>
    

  


  </div>

</body>

</html>