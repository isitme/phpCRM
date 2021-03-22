<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Blank Page
                <small>Subheading</small>
            </h1>
            <?php

                // echo User::$user_id;
                // echo "<hr>";
                // echo User::$username;
                // echo "<hr>";
                // echo User::$user_password;
                // echo "<hr>";
                // echo User::$user_firstname;
                // echo "<hr>";
                // echo User::$user_lastname;
                // echo "<hr";
                
                $keys = User::find_all_user();
                // print_r( $keys);
                // foreach ($keys as $key) {
                //     # code...
                //     echo $key;
                // }
                // echo $keys;
                // print_r($keys);
                
                $hello = User::instantation($keys);
                // foreach ($keys as $key => $value) {
                //     # code...
                //     print_r($key);
                // }
                print_r($hello);

                // print_r($hello);
                // echo $hello;



                        ?>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->