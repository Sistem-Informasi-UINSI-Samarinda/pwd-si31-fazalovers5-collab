 <?php include 'includes/meta.php';?>
    <?php include 'includes/header.php';?>
    
    <?php 
        $json = file_get_contents ('https://gist.githubusercontent.com/ihgoyarp/9327fcd326756747e042bdc499ceef01/raw/235202678a029d072369806a9781b89f36707ab9/SI32_PWD_2025');
        $data = json_decode ($json, TRUE);
    ?>
    <section>
        <table>
            <tr>
                <th>no</th>
                <th>nim</th>
                <th>nama</th>
            </tr>
            <?php foreach ($data as $key => $value); ?>
            <tr>
                <td><?php echo $value['no']?></td>
                <td><?php echo $value['nim']?></td>
                <td><?php echo $value['nama']?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
    
    <?php include 'includes/footer.php';?>
    