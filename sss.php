<?php

?>

<!DOCTYPE html>
<html lang ="ja">
    <head>
        <meta charset="utf-8">
        <title>Calender</title>
    </head>
    <body>
        <table>
            <thead>  <!-- ヘッダー部分の書き込み-->
            <tr>
                <!-- &laquo,&laquo文字マーク, colspanは幅,hrefで
                リンク飛ぶ-->
                <th><a href="">&laquo;</a></th>
                <th colspan="5">August 2015</th>
                <th><a href="">&raquo;</a></th>
            </tr>
            </thead>
            <tbody>
                <tr>
                <td>Sun</td>
                <td>Mon</td>
                <td>Tue</td>
                <td>Wed</td>
                <td>Thu</td>
                <td>Fri</td>
                <td>Sta</td>
                </tr>
                <tr>
                <td class="youbi_0">1</td>
                <td class="youbi_1">2</td>
                <td class="youbi_2">3</td>
                <td class="youbi_3">4</td>
                <td class="youbi_4 today">5</td>
                <td class="youbi_5">6</td>
                <td class="youbi_6">7</td>
                </tr>
                <tr>
                <td class="youbi_0">30</td>
                <td class="youbi_1">31</td>
                <td class="gray">1</td>
                <td class="gray">2</td>
                <td class="gray">3</td>
                <td class="gray">4</td>
                <td class="gray">5</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="7"><a href="">Today</a></th>
                </tr>
            </tfoot>
        </table>
    </body>
</html>
