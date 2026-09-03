<!DOCTYPE html>
<html>
    <body>
        <p><a href="index.php" title="К списку">К списку</a></p>
        <h1>Книги</h1>
        <table>
            <?php
            $books = array();
            
            $books['1120911472.conf2005.pdf'] = "Программа XV ежегодной богословской конференции";
            $books['1130093166.fch_conf_05_thes.pdf'] = "Научная и исследовательская работа на кафедре реставрации икон ПСТГУ.";
            $books['1142068195.platonov'] = "Сергей Федорович Платонов. Полный курс лекций по русской истории";
            $books['1142069415.tzipin_xx'] = "Прот. Владислав Цыпин. История Русской Православной Церкви 1917 - 1990";
            $books['1142071314.ouspensky'] = "БОГОСЛОВИЕ ИКОНЫ ПРАВОСЛАВНОЙ ЦЕРКВИ. Леонид Александрович Успенский.";
            $books['1142194541.chetveroevangelie_averky.pdf'] = "Руководство к изучению Священного Писания Нового Завета Четвероевангелие Архиепископ  Аверкий";
            $books['1142194824.rannee_hristianstvo_ep_kassian'] = "Христос и первое христианское Поколение. Епископ Кассиан";
            $books['1144918896.russian_history_talberg_2.pdf'] = "История Русской Церкви 1801-1908 гг. Н. Д. Тальберг";
            
            $dirPath = 'books';
            $files = scandir($dirPath);
            
            foreach ($files as $file):
            ?>
            <tr>
                <td><a href="books/<?=$file ?>" title="<?=$file ?>" target="_blank"><?=$file ?></a></td>
                <td><?= isset($books[$file]) ? $books[$file] : '' ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <hr />
        <p><a href="index.php" title="К списку">К списку</a></p>
    </body>
</html>