

<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "BITM_Mini_Project" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "startup.php");

use App\BITM\SEIP107348\Phonebook\Phonebook;
use App\BITM\SEIP107348\Utility\Utility;

$view = new Phonebook();
$views = $view->index();
$trs = "";
?>



<?php
$sl = 1;
foreach ($views as $user) {
    $sl ++;
    $trs .= "<tr>";
    $trs .= "<td>$sl;</td>";
    $trs .= "<td>".$user['name']."</td>";
    $trs .= "<td>".$user['email']."</td>";
    $trs .= "<td>".$user['password']."</td>";
    $trs .= "<td>".$user['birthday']."</td>";
    $trs .= "<td>".$user['file']."</td>";
    $trs .= "<td>".$user['operator']."</td>";
    $trs .= "<td>".$user['mobile']."</td>";
    $trs .= "<td>".$user['gender']."</td>";
    $trs .= "<td>".$user['hobbies']."</td>";
    $trs .= "<td>".$user['textarea']."</td>";
    $trs .= "</tr>";

}
?>  







<?php
//$trs = "<tr><td>hiinfsfofsjfj</td></tr>";
$html = <<<BITM
        
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../../../Asset/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../Asset/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../Asset/css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <section class="project_list">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-">

                        <!------------------------ body-section--------------->
                        <div class="col-md-12 body_table_part">
                            <div class="co">
                                <div class="table_part">
                                    <!----------------------end-table-head-------------->

                                    <!--==========table=========-->
                                    <div class="table_main_part">              
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Birthday</th>
                                                    <th>File</th>
                                                    <th>Operator</th>
                                                    <th>Mobile</th>
                                                    <th>Gender</th>
                                                    <th>Hobbies</th>
                                                    <th>Textarea</th>
                                                </tr>
                                            </thead>
                                            <tbody>
        
        

                                            echo $trs;


                                             </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
        
        
BITM;
?>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'BITM_Mini_Project' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'mpdf' . DIRECTORY_SEPARATOR . 'mpdf' . DIRECTORY_SEPARATOR . 'mpdf.php';


$mpdf = new mPDF('c');
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>
