<title>Knihy</title>    
<div class="container">
    <h1 class="text-center">Knihy</h1>
    <table class="table table-bordered table-dark table-striped text-center">
    <?php foreach ($knihy as $k) { ?>
            <tr>
                <td><?= $k->nazev_knihy; ?></td>
            </tr>
        <?php } ?>
    </table>

</div>