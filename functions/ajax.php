<?php
require_once('../config/connect.php');
require_once('functions.php');
//die;

switch ($_POST) {
    case (isset($_POST['page'])):
        switch ($_POST['page']) {
            case ('#student_search'):
                require_once('../pages/student_search.php');
                break;
            case ('#student_info'):
                //if the required attributes arent set, dont go to this page.
                if (isset($_POST['first_name']) || isset($_POST['last_name']) || isset($_POST['middle_name'])) {
                    require_once('../pages/student_info.php');
                } else {
                    require_once('../pages/student_search.php');
                }
                break;
            case ('#test'):
                require_once('../functions/testAjax.php');
                break;
            case ('active'):
                require_once('../includes/dashboard-investments.php');
                break;
            case ('invest'):
                require_once('../includes/dashboard-invest.php');
                break;
            case ('history'):
                require_once('../includes/dashboard-latest-investments.php');
                break;
            case ('withdraw'):
                require_once('../includes/dashboard-withdraw.php');
                break;
            case ('notifications'):
                require_once('../includes/dashboard-notifications.php');
                break;
            case ('messages'):
                require_once('../includes/dashboard-messages.php');
                break;
            case ('message-detail'):
                require_once('../includes/dashboard-message-details.php');
                break;
            case ('payment'):
                // if(isset($_POST['calculator-amount']) && isset($_POST['investment-currency']) && isset($_POST['agree'])){
                require_once('../includes/dashboard-payment.php');
                // }else{
                //print json_encode([['error' => 'Incomplete request']]);
                //$_SESSION['alert'] = 'failure';
                //require_once('../includes/dashboard-summary.php');
                //}
                break;
            default:
                require_once('../pages/home.php');
                break;
        }

        break;
    case (isset($_POST['keyword'])):
        if (!empty($_POST['keyword'])) {

            //if (!empty($category)) {

            $wordsAry = explode(" ", $_POST['keyword']);
            $wordsCount = count($wordsAry);
            for ($i = 0; $i < $wordsCount; $i++) {

                $queryCondition = "WHERE reg_no LIKE '%" . $wordsAry[$i] . "%' OR reg_no LIKE '%" . $wordsAry[$i] . "%' ";

                if ($i != $wordsCount - 1) {
                    $queryCondition .= " OR ";
                }
            }
            //  }






            $orderby = " ORDER BY id desc";
            //echo $queryCondition;
            $query = "SELECT * FROM students " . $queryCondition . $orderby . " LIMIT 0,6";
            $result = $db_handle->runQuery($query);
            if (!empty($result)) { ?>
                <!-- <ul id="student-list"> -->
                <?php
                foreach ($result as $student) {
                    $fullName = $student['first_name'] . " " . $student['last_name'] . " " . $student['middle_name'];
                    //array_push($student, ["page"=>"test"]);
                    $student['page'] = '#student_info';
                ?>
                    <li onclick='loadNewPage("pages/student_info.php", <?= json_encode($student); ?>)' class="student_item"><?php echo $student["reg_no"]; ?></li>
                <?php } ?>
                <!-- </ul> -->
<?php }
        }
        // else {
        //     $wordsAry = explode(" ", $_POST['keyword']);
        //     $wordsCount = count($wordsAry);
        //     for ($i = 0; $i < $wordsCount; $i++) {

        //         $queryCondition = "WHERE reg_no LIKE '%" . $wordsAry[$i] . "%' OR reg_no LIKE '%" . $wordsAry[$i] . "%' ";

        //         if ($i != $wordsCount - 1) {
        //             $queryCondition .= " OR ";
        //         }
        //     }
        // }




        break;
    default:
        # code...
        print json_encode([['error' => 'Invalid Action']]);
        break;
}
