<?php

namespace Hack\Utility;

use Hack\Utility\Tools;

class Mail 
{
    public function send($fields)
    {
        // multiple recipients
        $to  = Tools::CleanVars($fields, 'first_name', '', 'string') . '  ' . Tools::CleanVars($fields, 'last_name', '', 'string') . '  <' . Tools::CleanVars($fields, 'email', '', 'mail') . '>';
        // subject
        $subject = 'نتیجه اسکن فایل توسط آنتی ویروس';
        // message
        $message = self::message($fields['result']);
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        // Additional headers
        //$headers .= 'To: ' . Tools::CleanVars($fields, 'first_name', '', 'string') . '  ' . Tools::CleanVars($fields, 'last_name', '', 'string') . '  <' . Tools::CleanVars($fields, 'email', '', 'mail') . '>' . "\r\n";
        $headers .= 'From: Hack.IR <antivirus@hack.ir>' . "\r\n";
        // Mail it
        mail($to, $subject, $message, $headers);

        return array($to, $subject, $message, $headers);
    }

    public function message($result)
    {
        $result = json_decode($result, true);

        $countSuccess = 0 ;
        $countDanger = 0 ;
        $count = 0 ;
        foreach ($result as $key => $value) {
            $count++;
            if ($value['detected']) {
                $countDanger++;
            } else {
                $countSuccess++;
            }
        }
        $style = ($countDanger > 0) ? 'padding: 10px; background: #ff8a80; width: 700px;  border: 1px solid  #ff5252;' : 'padding: 10px; background: #ccff90; width: 700px; border: 1px solid  #b2ff59;';

        $message = '';
        $message .= '<html><head><title>نتیجه اسکن فایل توسط آنتی ویروس</title></head><body><table style="direction: rtl" width="700"><tr><td colspan="4" style="' . $style . '">فایل ارسالی شما مجموعا توسط ' . $count . '  آنتی ویروس بررسی شد ، از این تعداد  ' . $countSuccess . '   مورد فایل شما را سالم و ' . $countDanger . '  مورد فایل شما را آلوده تشخیص داده اند</td></tr>';
        foreach ($result as $key => $value) {
            if ($value['detected']) {
                $row = '<tr><td width="100" style="padding: 10px; background: #fafafa; border: 1px solid #e0e0e0;"><img src="http://av.hack.ir/image/logo/%s.png" width="90" height="90"></td><td width="150" style="padding: 10px; background: #fafafa; border: 1px solid #e0e0e0;">فایل آلوده است</td><td width="150" style="padding: 10px; background: #fafafa; border: 1px solid #e0e0e0;">%s</td><td style="padding: 10px; background: #fafafa; border: 1px solid #e0e0e0;">%s</td></tr>';
                $message .= sprintf($row, $key, $key, $value['result']);
            } else {
                $row = '<tr><td width="100" style="padding: 10px; background: #fafafa; border: 1px solid #e0e0e0;"><img src="http://av.hack.ir/image/logo/%s.png" width="90" height="90"></td><td width="150" style="padding: 10px; background: #fafafa; border: 1px solid #e0e0e0;">فایل سالم است</td><td width="150" style="padding: 10px; background: #fafafa; border: 1px solid #e0e0e0;">%s</td><td style="padding: 10px; background: #fafafa; border: 1px solid #e0e0e0;"> - </td></tr>';
                $message .= sprintf($row, $key, $key, $value['result']);
            }
        }
        $message .= '</table></body></html>';
        return $message;
    }
}