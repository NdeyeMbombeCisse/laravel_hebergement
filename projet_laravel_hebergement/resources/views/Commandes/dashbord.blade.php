<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>body {
        font-family: 'Arial', sans-serif;
        background: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    
    .wrapper {
        display: flex;
        align-items: stretch;
    }
    
    #sidebar {
        min-width: 250px;
        max-width: 250px;
        background:  #6dc2cc;
        color: #fff;
        transition: all 0.3s;
    }
    
    #sidebar .sidebar-header {
        padding: 20px;
        background: #6dc2cc;
    }
    
    #sidebar ul.components {
        padding: 20px 0;
        border-bottom: 1px solid #47748b;
    }
    
    #sidebar ul p {
        color: #fff;
        padding: 10px;
    }
    
    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
        color: #d3d3d3;
        transition: 0.3s;
    }
    
    #sidebar ul li a:hover {
        color: #7386D5;
        background: #fff;
    }
    
    #sidebar ul li.active > a, a[aria-expanded="true"] {
        color: #fff;
        background: #6d7fcc;
    }
    
    #content {
        width: 100%;
        padding: 20px;
        min-height: 100vh;
        transition: all 0.3s;
    }
    
    .navbar {
        padding: 15px 10px;
        background: #fff;
        border: none;
        border-radius: 0;
        margin-bottom: 40px;
        box-shadow: 1px 1px 5px rgba(0,0,0,0.1);
    }
    
    .navbar h4 {
        margin: 0;
    }
    
    .btn-info {
        background: #7386D5;
        border: none;
        color: #fff;
        padding: 10px 20px;
        cursor: pointer;
    }
    
    .main-content {
        background: #fff;
        padding: 20px;
        box-shadow: 1px 1px 5px rgba(0,0,0,0.1);
    }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Admin Dashboard</h3>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#home">Home</a>
                </li>
                <li>
                    <a href="#orders">Orders</a>
                </li>
                <li>
                    <a href="#users">Users</a>
                </li>
                <li>
                    <a href="#products">Products</a>
                </li>
                <li>
                    <a href="#settings">Settings</a>
                </li>
                <li>
                    <a href="#logout">Logout</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="content">
            <nav class="navbar">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <h4>Dashboard</h4>
                </div>
            </nav>
            <div class="main-content">
                <h2>Welcome to Admin Dashboard</h2>
                <p>This is a simple dashboard template.</p>
                <!-- Add your content here -->
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
