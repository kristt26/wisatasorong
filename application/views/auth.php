<!DOCTYPE html>
<html lang="en" ng-app="auth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link rel="stylesheet" href="<?=base_url('public/css/auth.css')?>">
    <link rel="stylesheet" href="<?=base_url()?>public/plugins/sweetalert2/sweetalert2.min.css">
</head>

<body ng-controller="userLogin">
    <?php
    if ($this->session->userdata('is_login')) {
        if($this->session->userdata('role')=="Admin")
            redirect('admin/home');
        else
            redirect('welcome');
    }
    ?>
    <div class="login-page">
        <div class="form">
            <form class="register-form" ng-submit="save()">
                <h2>Registered</h2>
                <input type="text" placeholder="Nama Pengguna" ng-model="model.nama" required />
                <input type="text" placeholder="username" ng-model="model.username" required />
                <input type="password" placeholder="password" ng-model="model.password" required />
                <input type="text" placeholder="email address" ng-model="model.email" required />
                <button type="submit">create</button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
            </form>
            <form class="login-form" ng-submit="login()">
                <h2>Login User</h2>
                <input type="text" placeholder="username" ng-model="model.username" required />
                <input type="password" placeholder="password" ng-model="model.password" required />
                <button type="submit">login</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
        </div>
    </div>
    <script src="<?=base_url('public/guest/js/jquery.min.js')?>"></script>
    <script src="<?=base_url()?>public/libs/angular/angular.min.js"></script>
    <script src="<?=base_url()?>public/js/services/helper.services.js"></script>
    <script src="<?=base_url()?>public/js/services/message.services.js"></script>
    <script src="<?=base_url()?>public/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="<?=base_url()?>public/libs/swangular/swangular.js"></script>

    <script>
    angular.module('auth', ['helper.service', 'swangular',
            'message.service'
        ])
        .controller('userLogin', userLogin);

    function userLogin($scope, $http, helperServices,message) {
        $(".message a").click(function() {
            $("form").animate({
                height: "toggle",
                opacity: "toggle"
            }, "slow");
        });
        $scope.model = {};
        $scope.model.username = 'Administrator';
        $scope.model.password = 'Admin123';
        $scope.login = () => {
            $http({
                method: "post",
                url: "<?=base_url('authentication/login')?>",
                data: $scope.model
            }).then(res => {
                if (res.data.role == 'Admin')
                    document.location.href = helperServices.url + 'admin/home';
                else
                    document.location.href = helperServices.url;
            }, err => {
                alert(err.data);
            })
        }
        $scope.save = () => {
            message.dialogmessage('Anda Yakin?', 'Ya', 'Tidak').then(x => {
                $http({
                    method: "post",
                    url: "<?=base_url('admin/users/post')?>",
                    data: $scope.model
                }).then(res => {
                    if (res.data){
                        message.confirm("Berhasil Menyimpan Data", "Ok").then(x => {
                            document.location.href = helperServices.url + "authentication";
                        });
                    }
                        
                }, err => {
                    alert(err.data);
                })
            })

        }
    }
    </script>
</body>

</html>