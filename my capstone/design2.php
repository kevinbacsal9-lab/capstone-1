<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Meeting Dashboard</title>
<link rel="shortcut icon" href="logonam.png" type="image/x-icon">
<script src="https://unpkg.com/lucide@latest"></script>

<style>
    :root {
        --bg: #0f1117;
        --sidebar: #151823;
        --card: #1c1f2b;
        --text: #ffffff;
        --muted: #8b90a0;
        --purple: #7c5cff;
        --border: #262a38;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', sans-serif;
    }

    body {
        display: flex;
        background: var(--bg);
        color: var(--text);
        height: 100vh;
    }
    

    /* Sidebar */
    .sidebar {
        width: 250px;
        background: var(--sidebar);
        padding: 20px;
        border-right: 1px solid var(--border);
    }

    .sidebar h2 {
        margin-bottom: 30px;
    }

    .menu-item {
        padding: 12px;
        margin-bottom: 8px;
        border-radius: 8px;
        color: white;
        cursor: pointer;
        transition: 0.2s;

    }

    .menu-item,
    .create-channel {
        text-decoration: none;
        display: block;
    }

    .menu-item:hover {
        background-color: var(--purple);
        color: black;
    }

    .create-channel {
        margin-top: 30px;
        border: 1px dashed var(--border);
        padding: 10px;
        text-align: center;
        border-radius: 8px;
        cursor: pointer;
        color: var(--muted);
    }

    /* Main Content */
    .main {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .topbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 25px;
        border-bottom: 1px solid var(--border);
    }

    .search {
        background: var(--card);
        border: 1px solid var(--border);
        padding: 8px 15px;
        border-radius: 8px;
        color: white;
        width: 300px;
    }

    .btn {
        background: var(--purple);
        border: none;
        padding: 10px 18px;
        border-radius: 8px;
        color: white;
        cursor: pointer;
        font-weight: 500;
        transition: 0.2s;
    }

    .logos {
            display: flex;
            justify-content: center;
            gap: 8px;
        }

        .logos h2{
            font-size:25px;
            margin-top: 10px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .logos img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
            transition: 0.3s;
        }
    #transcript{
            margin-top:20px;
            background:#0b1220;
            padding:20px;
            border-radius:6px;
            min-height:250px;
            max-width:60%;
        }
    
        .container{
            max-width:100%;
            height: 100%;
            background:#1e293b;
            padding:30px;
            border-radius:12px;
            box-shadow:0 0 20px rgba(0,0,0,0.3);
            
        }

        .container h2{
            margin-bottom:20px;
        }
        .container button{
            padding:12px 20px;
            margin-right:10px;
            cursor:pointer;
            border:none;
            border-radius:6px;
        }
    #start{
            background:#2563eb;
            color:white;
        }
    /*menu item*/
    .menu-item {
    display: flex;
    align-items: center;
    gap: 12px;
    }

    .menu-item i {
        width: 18px;
        height: 18px;
    }

</style>
</head>

<body>
         <!-- Sidebar -->
    <div class="sidebar">
        <div class="logos">
            <img src="logonam.png"/>
            <h2>Kevin Angel's</h2>
        </div>

        <a href="homepage2.php" class="menu-item">
            <i data-lucide="house"></i>
            Home
        </a>

        <a href="design1.php" class="menu-item">
            <i data-lucide="mic"></i>
            Voice to Text
        </a>

        <a href="design2.php" class="menu-item">
            <i data-lucide="volume-2"></i>
            Text to Voice
        </a>

        <a href="design3.php" class="menu-item">
            <i data-lucide="headphones"></i>
            Audio to Text
        </a>

        <a href="create-channel.html" class="menu-item">
            <i data-lucide="file-audio"></i>
            Text to Audio
        </a>

        <div class="create-channel">+ Create Channel</div>
    </div>
    </div>

    <!-- Main Content -->
    <div class="main">
        
        <div class="topbar">
            <input type="text" class="search" placeholder="Search by title or keyword">
            <button class="btn">+ Capture</button>
        </div>
        <div class="container">    
            <div id="transcript">Transcript will appear here...</div>
            <button id="start">Generate Speech</button>
            <div class="">try</div>
        </div>

    </div>
     <script>
lucide.createIcons();
</script>
    

</body>
</html>