<?php

require_once('voicerss_tts.php');

if(isset($_POST['submit'])){
$gettext = $_POST['text'];

$tts = new VoiceRSS;
$voice = $tts->speech([
    'key' => '4587f18b69224d4f9e3e11d4e2615d85',
    'hl' => 'en-us',
    'v' => 'Linda',
    'src' => $gettext,
    'r' => '0',
    'c' => 'mp3',
    'f' => '44khz_16bit_stereo',
    'ssml' => 'false',
    'b64' => 'true'
]);

echo '<audio controls src="' . $voice['response'] . '" autoplay="autoplay"></audio>';
}

?>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="asset/css/main20.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="asset/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="asset/js/jquery-ui-1.12.1/jquery-ui.min.css" />

</head>
<body>
<div style="width: 500px; height: auto; position: relative; top: 100px; margin: 0px auto" class="forms">
    <form action="#" method="post">
        <input style="width: 300px" type="text" name="text" id="" class="form-control">
        <br>
        <input name = "submit" type="submit" value="Submit" class="btn btn-secondary btn-lg">
    </form>
</div>
</body>


