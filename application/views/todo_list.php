<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO List</title>

    <?php $this->load->view("dependencies/style"); ?>

</head>


<body class="bg-dark">
    
<div class="container">
    
    <h3 class="text-center text-light mt-4">TODO List</h3>

    <div class="row">
        <div class="col-md-12">

            <form action="<?php echo base_url("todo/insert"); ?>" method="post">
                <div class="row">
                    <div class="form-group col-md-11">
                     <input type="text" class="form-control bg-secondary text-light" name="todo_title">
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-success">KAYDET</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <table class="table table-bordered table-hover table-striped table-dark" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">

                <thead>
                    <th class="text-center text-light">Açıklama</th>
                    <th class="text-center text-light">Durum</th>
                    <th class="text-center text-light">Sil</th>
                </thead>

                <tbody>
                    <?php foreach ($todos as $todo) { ?>
                    <tr>
                        <td class="text-light"> <?php echo $todo->title; ?> </td>
                        <td class="text-center" style="width:100px;"> 
                        <input 
                            type="checkbox" 
                            data-url="<?php echo base_url("todo/iscompletedsetter/$todo->id"); ?>"
                            class="js-switch" <?php echo ($todo->isCompleted) ? "checked" : ""; ?> />  </td>
                        <td class="text-center" style="width:100px;">
                        <a href="<?php echo base_url("todo/delete/$todo->id"); ?>" class="btn btn-danger">Sil</a>
                        </td>
                    </tr>
                    <?php } ?> 
                </tbody>

            </table>
        </div>
    </div>

</div>


<?php $this->load->view("dependencies/scripts"); ?>
</body>
</html>