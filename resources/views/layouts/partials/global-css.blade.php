    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            display: flex;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #2c3e50;
            color: #ecf0f1;
            padding-top: 20px;
            position: fixed;
            left: 0;
            top: 0;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0 10px
        }

        .sidebar ul li {
            padding: 15px 20px;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: background 0.3s;
        }

        .sidebar ul li:hover {
            background-color: #34495e;
        }

        .sidebar ul li i {
            margin-right: 15px;
            font-size: 18px;
        }

        .main {
            margin-left: 250px;
            width: calc(100% - 250px);
        }

        .topbar {
            background-color: #f4f6f8;
            padding: 15px 20px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            border-bottom: 1px solid #ddd;
        }

        .topbar i {
            font-size: 22px;
            color: #2c3e50;
            margin-left: 20px;
            cursor: pointer;
            transition: color 0.2s;
        }

        .topbar i:hover {
            color: #2980b9;
        }

        .content {
            padding: 20px;
        }
    </style>
