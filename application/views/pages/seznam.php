
<!doctype html>
<html lang="en">
    <style>
        /* unvisited link */
        a:link {
        color: white;
        }

        /* mouse over link */
        a:hover {
        color: red;
        }

        /* visited link */
        a:visited {
        color: gray;
        }

        /* selected link */
        a:active {
        color: red;
        }
      .navbar-marg
      {
        margin-bottom: 25px;
      }
      .nadpis
      {
        text-align: center;
      }
    </style>

    <body>
        <div class= "container">
        <h1 class="nadpis">Seznam knih</h1>
        <table class= "table table-bordered table-dark table-striped nadpis">
            <tr>
            <th>Název</th>
            <th>Autor</th>
            <th>Období</th>
            <th>Anotace</th>
            </tr>

            <?php foreach ($seznam as $s) { ?>   
            <tr>
              <td><?= $s->nazev_knihy?></td>
              <td><?= $s->autor?></td>
              <td><?= $s->obdobi_idobdobi?></td>
              <td class="text-center"><a href="<?php echo base_url('Controller/anotace/'.$s->id_knihy) ?>"><?= $s->nazev_knihy; ?></a></td>
            </tr>
        <?php } ?>
        </table>
        <a style="color: red" href="Dokumentace_cetba.pdf" download="Dokumentace_cetba">
         <p>DOKUMENTACE</p>
        </a>
        </div>
    </body>
</html>