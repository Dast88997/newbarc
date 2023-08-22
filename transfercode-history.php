<?php 
include_once('./side_menu.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link type="text/css" href="./css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="./css/dashboard.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Amaranth:ital@1&family=Asap+Condensed:ital@1&family=Barlow+Semi+Condensed:wght@300&family=Big+Shoulders+Display:wght@300&family=DM+Sans:ital,wght@1,500&family=Dosis:wght@300;500&family=EB+Garamond:ital@1&family=Economica&family=Fauna+One&family=Italianno&family=Niconne&family=Smooch+Sans&family=Thasadith:ital@1&family=Yanone+Kaffeesatz&display=swap"
            rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet" />
</head>
<script>
$('table').DataTable();
</script>
<style>
body {
    font-size: 40%;
}

h6 {
    text-align: center;
    padding: 10px 0;
}

table caption {
    padding: .5em 0;
}

table.dataTable th,
table.dataTable td {
    white-space: nowrap;
}

.p {
    text-align: center;
    padding-top: 30px;
    font-size: 14px;
}
</style>

<body>


    <section class="sticky-top" style="margin:0;box-shadow: 0 1px 2px rgb(0 0 0 / 15%);background:#FFA943;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="margin:0;">
                    <?=mynavbar()?>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1" style="padding:0;background:#EBEAEA;">
                    <?=side_menu()?>
                </div>

                <div class="col-md-11">
                    <div class="row">
                        <?php
include 'connection.php';
$SQL="select * from mins";
$row=$conn->query($SQL);

if($row->num_rows>0)
{
	
	while($data=$row->fetch_assoc())
	{
		
		?>


                        <div class="col-md-12" style="padding-top:30px;padding-bottom:30px;">
                            <div class="container">
                                <div class="col-xs-12">
                                    <table
                                        summary="This table shows how to create responsive tables using Datatables' extended functionality"
                                        class="table table-bordered table-hover dt-responsive">

                                        <thead>
                                            <tr>
                                               
                                                <th style="width:100px"><span style="font-size:12px">Name</span></th>
                                                <th style="width:100px"><span style="font-size:12px">Name Of Bank</span>
                                                </th>
                                                <th style="width:100px"><span style="font-size:12px">Account
                                                        Number</span></th>
                                                <th style="width:100px"><span style="font-size:12px">Bank Branch</span>
                                                </th>
                                                <th style="width:100px"><span style="font-size:12px">Swift Code</span>
                                                </th>
                                                <th style="width:100px"><span style="font-size:12px">Pan Number</span>
                                                </th>                                               
                                                <th style="width:100px"><span style="font-size:12px">Email</span></th>
                                             
                                                <th style="width:100px"><span style="font-size:12px">Currency</span>
                                                </th>
                                                <th style="width:100px"><span style="font-size:12px">Amount</span></th>
                                                <th style="width:100px"><span style="font-size:12px">Comment</span>
                                                </th>
                                                <th style="width:100px"><span style="font-size:12px">Last Login</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               
                                                <td><span style="font-size:12px"> <?=$data ['name']?></span></td>
                                                <td><span style="font-size:12px"> <?=$data ['bank']?></span></td>
                                                <td><span style="font-size:12px"> <?=$data ['number']?></span></td>
                                                <td><span style="font-size:12px"> <?=$data ['branch']?></span></td>
                                                <td><span style="font-size:12px"> <?=$data ['code']?></span></td>
                                                <td><span style="font-size:12px"> <?=$data ['iban']?></span></td>                                               
                                                <td><span style="font-size:12px"> <?=$data ['email']?></span></td>                                                
                                                <td><span style="font-size:12px"> <?=$data ['current']?></span></td>
                                                <td><span style="font-size:12px"> <?=$data ['amount']?></span></td>
                                                <td><span style="font-size:12px"> <?=$data ['comment']?></span></td>
                                                <td><span style="font-size:12px"> <?=$data ['date'] ?></span></td>
                                                <td><a
                                                        href="transfercode-history.php?delete=<?php echo $data['Trans_ID'];?>"><button>DELETE</button></a>
                                                </td>
                                            </tr>

                                        </tbody>
                                        <?php
	
}
}
?>
                                        <?php

if(isset($_GET['delete']))
{
$id=$_GET['delete'];
$sql="delete from mins where Trans_ID=$id";
if($conn->query($sql))
{
echo "deleted successfully";

}

}







?>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    document.getElementsByClassName('list-group-item')[4].style.backgroundColor = "#046469";
    document.getElementsByClassName('menu-list')[4].style.color = "#fff";
    </script>


</body>