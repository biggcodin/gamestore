<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .profile-header {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .profile-header img {
            border-radius: 50%;
            border: 5px solid white;
        }
        .card {
            border-radius: 15px;
        }
        .nav-item i {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <!-- Profile Header -->
    <div class="profile-header">
        <img src="https://via.placeholder.com/120" alt="Profile Picture" class="img-fluid mb-3">
        <h2>User Name</h2>
        <p>Short Bio or Status</p>
    </div>

    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                        <i class="fas fa-home"></i> Dashboard
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-shopping-cart"></i> Orders
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-wallet"></i> Wallet
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-user"></i> Profile Settings
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </div>

            <!-- Main Panel -->
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-center p-3">
                            <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
                            <h5>Earnings</h5>
                            <p>$1200</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center p-3">
                            <i class="fas fa-tasks fa-3x text-warning mb-3"></i>
                            <h5>Active Orders</h5>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center p-3">
                            <i class="fas fa-users fa-3x text-success mb-3"></i>
                            <h5>Followers</h5>
                            <p>350</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>