<?php

require_once 'autoloader.php';

use Hack\Utility\Database;
use Hack\Utility\Mail;
use Hack\Utility\Tools;

$pageInfo = array(
    'title' => 'هک - امنیت اطلاعات - حریم خصوصی',
    'keywords' => 'هک - امنیت اطلاعات - حریم خصوصی',
    'description' => 'هک - امنیت اطلاعات - حریم خصوصی',
    'author' => 'هک - امنیت اطلاعات - حریم خصوصی',
    'generator' => 'هک - امنیت اطلاعات - حریم خصوصی',
    'og' => array(
        'title' => 'هک - امنیت اطلاعات - حریم خصوصی',
        'site_name' => 'هک - امنیت اطلاعات - حریم خصوصی',
        'description' => 'هک - امنیت اطلاعات - حریم خصوصی',
        'url' => '',
        'locale' => '',
        'type' => '',
        'image' => '',
    ),
    'twitter' => array(
        'card' => '',
        'site' => '',
        'creator' => '',
        'title' => 'هک - امنیت اطلاعات - حریم خصوصی',
        'description' => 'هک - امنیت اطلاعات - حریم خصوصی',
        'image' => '',
        'url' => '',
    ),
    'brand_name' => 'هک',
    'brand_url' => 'http://www.hack.ir',
    'nav' => array(
        '1' => array(
            'title' => 'عنوان منو',
            'url' => '#',
        ),
        '2' => array(
            'title' => 'عنوان منو',
            'url' => '#',
        ),
        '3' => array(
            'title' => 'عنوان منو',
            'url' => '#',
        ),
        '4' => array(
            'title' => 'عنوان منو',
            'url' => '#',
        ),
        '5' => array(
            'title' => 'عنوان منو',
            'url' => '#',
        ),
        '6' => array(
            'title' => 'عنوان منو',
            'url' => '#',
        ),
        '7' => array(
            'title' => 'درباره ما',
            'url' => '#',
        ),
        '8' => array(
            'title' => 'تماس با ما',
            'url' => '#',
        ),
    ),
    'h1_title' => 'هک - امنیت اطلاعات - حریم خصوصی',
);
?>
<!DOCTYPE HTML>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageInfo['title']; ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->

    <meta name="keywords" content="<?php echo $pageInfo['keywords']; ?>">
    <meta name="description" content="<?php echo $pageInfo['description']; ?>">
    <meta name="author" content="<?php echo $pageInfo['author']; ?>">
    <meta name="generator" content="<?php echo $pageInfo['generator']; ?>">

    <meta property="og:title" content="<?php echo $pageInfo['og']['title']; ?>">
    <meta property="og:site_name" content="<?php echo $pageInfo['og']['site_name']; ?>">
    <meta property="og:description" content="<?php echo $pageInfo['og']['description']; ?>">
    <meta property="og:url" content="<?php echo $pageInfo['og']['url']; ?>">
    <meta property="og:locale" content="<?php echo $pageInfo['og']['locale']; ?>">
    <meta property="og:type" content="<?php echo $pageInfo['og']['type']; ?>">
    <meta property="og:image" content="<?php echo $pageInfo['og']['image']; ?>">

    <meta name="twitter:card" content="<?php echo $pageInfo['twitter']['card']; ?>">
    <meta name="twitter:site" content="<?php echo $pageInfo['twitter']['site']; ?>">
    <meta name="twitter:creator" content="<?php echo $pageInfo['twitter']['creator']; ?>">
    <meta name="twitter:title" content="<?php echo $pageInfo['twitter']['title']; ?>">
    <meta name="twitter:description" content="<?php echo $pageInfo['twitter']['description']; ?>">
    <meta name="twitter:image" content="<?php echo $pageInfo['twitter']['image']; ?>">
    <meta name="twitter:url" content="<?php echo $pageInfo['twitter']['url']; ?>">

    <link href="./vendor/bootstrap/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="./vendor/font-awesome/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="./vendor/css/style.css" media="screen" rel="stylesheet" type="text/css">
    <link href="./vendor/css/locale.css" media="screen" rel="stylesheet" type="text/css">

    <link href="./vendor/image/touch-icon-iphone.png" rel="apple-touch-icon">
    <link href="./vendor/image/touch-icon-ipad.png" rel="apple-touch-icon">
    <link href="./vendor/image/touch-icon-iphone-retina.png" rel="apple-touch-icon">
    <link href="./vendor/image/touch-icon-ipad-retina.png" rel="apple-touch-icon">

    <link href="./vendor/image/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="./vendor/image/favicon.png" rel="shortcut icon" type="image/png">

    <script type="text/javascript" src="./vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="./vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]><script type="text/javascript" src="./vendor/js/html5shiv.min.js"></script><![endif]-->
    <!--[if lt IE 9]><script type="text/javascript" src="./vendor/js/respond.min.js"></script><![endif]-->

</head>
<body id="template-body" class="template-body-content template-locale-fa">
<nav class="template-navbar navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#template-navbar-main" aria-expanded="false">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?php echo $pageInfo['brand_url']; ?>"><?php echo $pageInfo['brand_name']; ?></a>
        </div>
        <div class="collapse navbar-collapse" id="template-navbar-main">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo $pageInfo['nav'][1]['url']; ?>"><?php echo $pageInfo['nav'][1]['title']; ?></a></li>
                <li><a href="<?php echo $pageInfo['nav'][1]['url']; ?>"><?php echo $pageInfo['nav'][1]['title']; ?></a></li>
                <li><a href="<?php echo $pageInfo['nav'][2]['url']; ?>"><?php echo $pageInfo['nav'][2]['title']; ?></a></li>
                <li><a href="<?php echo $pageInfo['nav'][3]['url']; ?>"><?php echo $pageInfo['nav'][3]['title']; ?></a></li>
                <li><a href="<?php echo $pageInfo['nav'][4]['url']; ?>"><?php echo $pageInfo['nav'][4]['title']; ?></a></li>
                <li><a href="<?php echo $pageInfo['nav'][5]['url']; ?>"><?php echo $pageInfo['nav'][5]['title']; ?></a></li>
                <li><a href="<?php echo $pageInfo['nav'][6]['url']; ?>"><?php echo $pageInfo['nav'][6]['title']; ?></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right pull-right">
                <li><a href="<?php echo $pageInfo['nav'][7]['url']; ?>"><?php echo $pageInfo['nav'][7]['title']; ?></a></li>
                <li><a href="<?php echo $pageInfo['nav'][8]['url']; ?>"><?php echo $pageInfo['nav'][8]['title']; ?></a></li>
            </ul>
        </div>
    </div>
</nav>
<header class="template-header clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline">
                    <li><img src="./vendor/image/logo.png" alt="<?php echo $pageInfo['h1_title']; ?>" /></li>
                    <li><h1><?php echo $pageInfo['h1_title']; ?></h1></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<section class="template-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="template-section-content clearfix">
                    <?php switch ($_GET['type']) {
                        case 'result':
                            $fields = array(
                                'resource' => Tools::CleanVars($_GET, 'scan_id', '', 'string'),
                            );
                            $url = 'https://www.virustotal.com/vtapi/v2/file/report';
                            foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
                            rtrim($fields_string, '&');
                            $ch = curl_init();
                            curl_setopt($ch,CURLOPT_URL, $url);
                            curl_setopt($ch,CURLOPT_POST, count($fields));
                            curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
                            $result = curl_exec($ch);
                            curl_close($ch);
                            echo '<pre>';
                            print_r($result);
                            echo '</pre>';
                            break;

                        default:
                        case 'send':
                    if (isset($_FILES["file"]["name"]) && !empty($_FILES["file"]["name"]) && isset($_POST["submit"])) {

                        // Setting
                        $apiKey = '19f2ab7ca76132a33559efbcca6c20d170520e4685ccd27e624a5a1f7dd596d2';
                        $uploadDir = "/home/nanoin/public_html/antivirus/upload/";
                        //$uploadDir = "/var/www/html/local/projects/hackir-virustotal/upload/";
                        $maxUpdloadSize = 50000000;
                        $mimeType = Tools::MimeType();

                        $fields = array(
                            'ip' => $_SERVER['REMOTE_ADDR'],
                            'first_name' => '',
                            'last_name' => '',
                            'email' => '',
                            'mobile' => '',
                            'file_name' => '',
                            'file_size' => '',
                            'file_hash' => '',
                            'file_status' => 1,
                            'time_request' => time(),
                            'time_result' => '',
                            'status' => '',
                            'code' => '',
                            'result' => '',
                        );

                        // Set
                        $fields['first_name'] = $_POST['first_name'];
                        $fields['last_name'] = $_POST['last_name'];
                        $fields['email'] = $_POST['email'];
                        $fields['mobile'] = $_POST['mobile'];
                        $fields['file_name'] = $_FILES["file"]["name"];
                        $fields['file_size'] = $_FILES["file"]["size"];

                        // Set file
                        $target_file = $uploadDir . basename($_FILES["file"]["name"]);
                        $uploadOk = 1;
                        $fileType = pathinfo($target_file,PATHINFO_EXTENSION);
                        // Check if file already exists
                        if (file_exists($target_file)) {
                            echo "Sorry, file already exists.";
                            $uploadOk = 0;
                        }
                        // Check file size
                        if ($_FILES["file"]["size"] > $maxUpdloadSize) {
                            echo "Sorry, your file is too large.";
                            $uploadOk = 0;
                        }
                        // Allow certain file formats
                        if(!in_array($fileType, $mimeType)) {
                            echo "Sorry, your file tpe is not allowed.";
                            $uploadOk = 0;
                        }
                        // Check if $uploadOk is set to 0 by an error
                        if ($uploadOk == 0) {
                            echo "Sorry, your file was not uploaded.";
                            // if everything is ok, try to upload file
                        } else {
                            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                                try {
                                    // PHP code for scanning files for viruses using virustotal.com API
                                    // File coded by Adrian at www.TheWebHelp.com
                                    header("Content-Type: text/plain");

                                    // get the file size in mb, we will use it to know at what url to send for scanning (it's a different URL for over 30MB)
                                    $file_size_mb = filesize($target_file)/1024/1024;

                                    // calculate a hash of this file, we will use it as an unique ID when quering about this file
                                    $fields['file_hash'] = $file_hash = hash('sha256', file_get_contents($target_file));

                                    // [PART 1] hecking if a report for this file already exists (check by providing the file hash (md5/sha1/sha256)
                                    // or by providing a scan_id that you receive when posting a new file for scanning
                                    // !!! NOTE that scan_id is the only one that indicates file is queued/pending, the others will only report once scan is completed !!!
                                    $report_url = 'https://www.virustotal.com/vtapi/v2/file/report?apikey='.$apiKey."&resource=".$file_hash;

                                    $api_reply = file_get_contents($report_url);

                                    // convert the json reply to an array of variables
                                    $api_reply_array = json_decode($api_reply, true);

                                    // your resource is queued for analysis
                                    if($api_reply_array['response_code']==-2){
                                        echo $api_reply_array['verbose_msg'];
                                    }

                                    // reply is OK (it contains an antivirus report)
                                    // use the variables from $api_reply_array to process the antivirus data
                                    if($api_reply_array['response_code']==1){
                                        $fields['result'] = json_encode($api_reply_array);
                                        // Save information
                                        Database::InsertLog($fields);

                                        echo "\nWe got an antivirus report, there were ".$api_reply_array['positives']." positives found. Here is the full data: \n\n";
                                        echo '<pre>';
                                        print_r($api_reply_array);
                                        echo '</pre>';
                                        exit;
                                    }

                                    // [PART 2] a report for this file was not found, upload file for scanning
                                    if($api_reply_array['response_code']=='0'){

                                        // default url where to post files
                                        $post_url = 'https://www.virustotal.com/vtapi/v2/file/scan';

                                        // get a special URL for uploading files larger than 32MB (up to 200MB)
                                        if($file_size_mb >= 32){
                                            $api_reply = @file_get_contents('https://www.virustotal.com/vtapi/v2/file/scan/upload_url?apikey='.$apiKey);
                                            $api_reply_array = json_decode($api_reply, true);
                                            if(isset($api_reply_array['upload_url']) and $api_reply_array['upload_url']!=''){
                                                $post_url = $api_reply_array['upload_url'];
                                            }
                                        }

                                        // send a file for checking

                                        // curl will accept an array here too:
                                        $post['apikey'] = $apiKey;
                                        $post['file'] = '@'.$target_file;

                                        $ch = curl_init();
                                        curl_setopt($ch, CURLOPT_URL,$post_url);
                                        curl_setopt($ch, CURLOPT_POST,1);
                                        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
                                        $api_reply = curl_exec ($ch);
                                        curl_close ($ch);

                                        $api_reply_array = json_decode($api_reply, true);

                                        if($api_reply_array['response_code']==1){
                                            //echo "\nfile queued OK, you can use this scan_id to check the scan progress:\n".$api_reply_array['scan_id'];
                                            //echo "\nor just keep checking using the file hash, but it will only report once it is completed (no 'PENDING/QUEUED' reply will be given).";
                                            $fields['code'] = $api_reply_array['scan_id'];
                                            echo 'Please check on this link to see result : <a href="http://netswebs.com/antivirus/index.php?type=result&scan_id=' . $api_reply_array['scan_id'] . '">http://netswebs.com/antivirus/index.php?type=result&scan_id=' . $api_reply_array['scan_id'] . '</a>';
                                        }
                                    }
                                    // Save information
                                    Database::InsertLog($fields);
                                } catch (Exception $e) {
                                    // Show error
                                    echo '<pre>';
                                    print_r(strip_tags($e->getMessage()));
                                    echo '</pre>';
                                }
                                // remove file
                                unlink($target_file);
                            } else {
                                echo "Sorry, there was an error uploading your file.";
                            }
                        }
                    } else { ?>
                        <form class="well" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group clearfix" data-name="first_name">
                                <label class="col-md-3 control-label">نام</label>
                                <div class="col-md-7 js-form-element">
                                    <input class="col-md-12" name="first_name" type="text" required>
                                    <div class="text-muted"></div>
                                </div>
                                <div class="col-md-2 help-block"></div>
                            </div>
                            <div class="form-group clearfix" data-name="last_name">
                                <label class="col-md-3 control-label">نام خانوادگی</label>
                                <div class="col-md-7 js-form-element">
                                    <input class="col-md-12" name="last_name" type="text" required>
                                    <div class="text-muted"></div>
                                </div>
                                <div class="col-md-2 help-block"></div>
                            </div>
                            <div class="form-group clearfix" data-name="email">
                                <label class="col-md-3 control-label">آدرس ایمیل</label>
                                <div class="col-md-7 js-form-element">
                                    <input class="col-md-12" name="email" type="email" required>
                                    <div class="text-muted"></div>
                                </div>
                                <div class="col-md-2 help-block"></div>
                            </div>
                            <div class="form-group clearfix" data-name="mobile">
                                <label class="col-md-3 control-label">موبایل</label>
                                <div class="col-md-7 js-form-element">
                                    <input class="col-md-12" name="mobile" type="text" required>
                                    <div class="text-muted"></div>
                                </div>
                                <div class="col-md-2 help-block"></div>
                            </div>
                            <div class="form-group clearfix" data-name="file">
                                <label class="col-md-3 control-label">بارگذاری فایل</label>
                                <div class="col-md-7 js-form-element">
                                    <input name="file" type="file">
                                    <div class="text-muted"></div>
                                </div>
                                <div class="col-md-2 help-block"></div>
                                <br />
                            </div>
                            <div class="form-group clearfix">
                                <div class="col-md-offset-3 col-md-9">
                                    <input type="submit" class="btn btn-primary" name="submit" value="بارگذاری فایل">
                                </div>
                            </div>
                        </form>
                    <?php }
                            break;
                    } ?>

                </div>
            </div>
        </div>
    </div>
</section>
<footer class="template-footer clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>استفاده از مطالب با ذکر منبع بلامانع است.</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>