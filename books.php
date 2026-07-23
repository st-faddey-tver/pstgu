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
    </body>
</html>