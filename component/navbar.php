<nav class="main-header navbar navbar-expand navbar-light navbar-white">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="?page=pages/inputform/about" class="nav-link">About</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
            <!-- <a class="breadcrumb-item"><a href="login.php">Logout/
                <i class="breadcrumb-item active">Keluar</i>
            </a> -->

            <a onclick="logout()" class="btn btn-primary"><i class="fa fa-sign-out-alt"></i> Logout</a>

        </li>
    </ul>
</nav>

<script>
    function logout() {
        Swal.fire({
            title: 'Konfirmasi logout ?',
            icon: 'warning',
            iconColor: 'orange',
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonColor: 'rgb(255, 0, 0)',
            cancelButtonText: 'Tidak',
            confirmButtonColor: 'rgb(42, 89, 227)',
            allowEnterKey: false,
            allowEscapeKey: false,
            allowOutsideClick: false,
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    width: '35%',
                    position: 'center',
                    icon: 'success',
                    iconColor: 'rgb(27, 199, 133)',
                    title: 'Berhasil logout !',
                    text: 'Tunggu sebentar...',
                    showConfirmButton: false,
                    allowEnterKey: false,
                    allowEscapeKey: false,
                    allowOutsideClick: false,
                });
                setTimeout(function() {
                    window.location.href = 'logout.php';
                }, 1500);
            }
        })
    }
</script>