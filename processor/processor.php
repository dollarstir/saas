<?php

require '../loader/autoloader.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'welcome':

            function psd($url, $data)
            {
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query([$data]));
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($curl);
                curl_close($curl);

                return $response;
            }
            extract($_POST);
            // $fields = ['email' => $usermail];

            //url-ify the data for the POST
            // $dd = http_build_query($fields);
            $usermail = str_replace('.com', 'dotcom', $usermail);
            $usermail = str_replace('@', 'yolk', $usermail);
            $rep = file_get_contents('http://phpyolk.com/newuser/'.$usermail);
            // echo 'helllo';
            $rr = json_decode($rep);
            if ($rr == 'success') {
                $user = 'user';
                $value = 'success';
                setcookie($user, $value, 86400 * 30000, '/');
                echo 'success';
            }

            break;
        case 'adminlogin':

            extract($_POST);
            $response = loginauth('supper', 'admin', [['email', '=', $email], ['password', '=', md5($password)],
            ], 'AND');
            if ($response == 'success') {
                echo 'loginsuccess';
            } else {
                echo $response;
            }
                break;

        case 'adminlogout':
            $r = logout('admin');
            if ($r == 'success') {
                echo 'logout';
            }
                break;

        case 'addslide':
            extract($_POST);
            echo  $res = insert('homeslide',
            [
                'slidetitle' => $slidetitle,
                'slidesubtitle' => $slidesubtitle,
                'btntitle' => $btntitle,
                'btnlink' => $btnlink,
                'status' => $status,
            ], $_FILES, '../yolkassets/upload/');
            break;

        case 'question':
                extract($_POST);
                $dd = date('jS F, Y');

            echo $res = insert('messages', [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'subject' => $subject,
                'message' => $message,
                'datesent' => $dd,
            ]);
            break;

        case 'newsletter':
                extract($_POST);

                echo $res = insert('newsletter', ['email' => $email]);
            break;

        case 'addadmin':
                extract($_POST);
                echo  $res = insert('supper',
                [
                    'name' => $name,
                    'email' => $email,
                    'password' => md5($password),
                ], $_FILES, '../yolkassets/upload/');
            break;

        case 'contactsetting':
                extract($_POST);
                echo  $res = update('contact',
                [
                    'address' => $address,
                    'email' => $email,
                    'phone' => $phone,
                    'telephone' => $telephone,
                ]);
            break;

        case 'addattorney':
                extract($_POST);
                echo  $res = insert('attorney',
                [
                    'name' => $name,
                    'position' => $position,
                    'bio' => $bio,
                    'facebook' => $facebook,
                    'twitter' => $twitter,
                    'linkedin' => $linkedin,
                    'skype' => $skype,
                ], $_FILES, '../yolkassets/upload/');
            break;

        case 'delete':
            $table = $_GET['table'];
            $id = $_GET['id'];
            echo $res = delete($table, [['id', '=', $id]]);
            break;

        default:

        break;
    }
}
