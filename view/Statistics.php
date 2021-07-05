<!DOCTYPE HTML>
<html>
<?php include('../layout/head.php') ?>
<body >
<div class="container-fluid" style="padding:0px"  >
    <img src='../images/coronanav.png' width="100%" height="400px">
    <?php include('../layout/nav.php') ?>

    <div class="row" style="width: 100%;margin-right: 20%;margin-left: 20%">
        <div class="col-8">

            <h2 style="text-align:center; color:blue"><b>These are the latest statistics related to the Corona virus,
                    infected people and those recovering from it around the world.</b></h2>
        </div>
    </div>
    <br/>
    <div class="row" id="Statistics" style="margin-right: 20px;margin-left: 10px;"><h3>Statistics</h3></div>
    <div  style="margin-right: 20px;margin-left: 10px;">

        <div class="row">
            <div class="col-6" >
                <iframe class="card bg-light text-dark" src="https://public.domo.com/cards/dJ45D" width="100%" height="400"
                        marginheight="0" marginwidth="0" frameborder="0" ></iframe>
            </div>

            <div class="col-6">
                <iframe class="card bg-light text-dark" src="https://public.domo.com/cards/bWxVg" width="100%" height="400"
                        marginheight="0" marginwidth="0" frameborder="0"></iframe>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-6" >

                <iframe class="card bg-light text-dark" src="https://public.domo.com/cards/31O7r" width="100%" height="400"
                        marginheight="0" marginwidth="0" frameborder="0"></iframe>

            </div>
            <div class="col-6">

                <iframe class="card bg-light text-dark" src="https://public.domo.com/cards/2kO6J" width="100%" height="400"
                        marginheight="0" marginwidth="0" frameborder="0"></iframe>

            </div>
        </div>
    </div>

</div>
</body>
</html>
