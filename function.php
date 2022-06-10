<?php

session_start();

function check_login($con)
{
    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM info 
        JOIN user_type ON info.role = user_type.user_id
        WHERE user_id = '$id' limit 1";

        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
}

function access($con)
{
    if($user_data = check_login($con)){
        if($user_data['role'] == 3){
            ?>
                <script>
                    alert("You don't have access to this page");
                    window.location.href='../index.php';
                </script>
            <?php
        }
        if($user_data['role'] == 2){
            ?>
                <script>
                    alert("You need to be quality control to access this page");
                    window.location.href='../service';
                </script>
            <?php
        }
    }
    else if(!isset($_SESSION['user_id'])){
        ?>
            <script>
                alert("You don't have access to this page");
                window.location.href='../log In.php';
            </script>
        <?php
    }
}