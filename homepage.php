<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AI Creative Platform</title>
<link rel="shortcut icon" href="logonam.png" type="image/x-icon">

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
    }

    body {
    background: #0f0f0f;
    color: white;
    }

    header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 60px;
    }

    .logo {
    font-weight: bold;
    font-size: 20px;
    }

    nav a {
    margin: 0 15px;
    color: #ccc;
    text-decoration: none;
    }

    nav a:hover {
    color: white;
    }

    .auth a {
    margin-left: 10px;
    padding: 8px 16px;
    border-radius: 20px;
    border: none;
    cursor: pointer;
    }

    .login {
    background: transparent;
    color: white;
    }

    .signup {
    background: white;
    color: black;
    }

    .hero {
    display: flex;
    justify-content: space-between;
    padding: 80px 60px;
    }

    .hero-left {
    max-width: 55%;
    }

    .hero-left h1 {
    font-size: 60px;
    line-height: 1.1;
    }

    .hero-left p {
    margin-top: 20px;
    color: #aaa;
    }

    .buttons {
    margin-top: 30px;
    }

    .buttons button {
    padding: 12px 24px;
    border-radius: 25px;
    border: none;
    margin-right: 10px;
    cursor: pointer;
    }

    .primary {
    background: white;
    color: black;
    }

    .secondary {
    background: #1f1f1f;
    color: white;
    }

    .hero-right {
    max-width: 35%;
    color: #ccc;
    line-height: 1.6;
    }

    .cards {
    display: flex;
    gap: 20px;
    padding: 40px 60px;
    }

    .card {
      flex: 1;
      height: 200px;
      background: #1c1c1c;
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #888;
    }

 .golo {
    display: flex;
    justify-content: center;
  }

  img {
    width: 40px;
    height: 40px;
  }

  /* NAV FIX */
  nav {
    display: flex;
    gap: 20px;
  }

  /* NAV ITEM */
  .nav-item {
    position: relative;
  }

  /* MEGA MENU */
  .mega-menu {
    position: absolute;
    top: 40px;
    left: 0;
    width: 700px;
    background: #1a1a1a;
    padding: 20px;
    border-radius: 12px;
    display: flex;
    gap: 40px;

    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    transition: 0.3s ease;
    z-index: 100;
  }

  /* SHOW ON HOVER */
  .nav-item:hover .mega-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }

  /* COLUMNS */
  .column {
    flex: 1;
  }

  .column h4 {
    margin-bottom: 10px;
    color: #aaa;
    font-size: 14px;
  }

  .column p {
    margin: 8px 0;
    font-size: 13px;
    color: #ccc;
    cursor: pointer;
    transition: 0.2s;
  }

  .column p:hover {
    color: white;
    transform: translateX(5px);
  }

  nav {
    display: flex;
    gap: 20px;
    position: relative;
  }

  .nav-item {
    position: relative;
  }

  /* make dropdown align nicely per item */
  .mega-menu {
    position: absolute;
    top: 40px;
    left: 0;
    min-width: 300px;
  }
  .nav-item {
    padding-bottom: 10px;
  }
</style>
</head>
<body>

<header>
  <div class="golo">
    <img src="logonam.png"/>
    <h2>Kevin Angel's</h2>
  </div>

  <nav>

  <!-- ITEM 1 -->
  <div class="nav-item">
    <a href="#">ElevenCreative</a>
    <div class="mega-menu">
      <div class="column">
        <h4>Products</h4>
        <p>Overview</p>
        <p>Studio</p>
        <p>Voice Library</p>
      </div>
      <div class="column">
        <h4>Create</h4>
        <p>Text to Speech</p>
        <p>Voice Cloning</p>
      </div>
    </div>
  </div>

  <!-- ITEM 2 -->
  <div class="nav-item">
    <a href="#">ElevenAgents</a>
    <div class="mega-menu">
      <div class="column">
        <h4>Agents</h4>
        <p>AI Agents</p>
        <p>Automation</p>
      </div>
      <div class="column">
        <h4>Tools</h4>
        <p>Chatbot</p>
        <p>Assistant API</p>
      </div>
    </div>
  </div>

  <!-- ITEM 3 -->
  <div class="nav-item">
    <a href="#">ElevenAPI</a>
    <div class="mega-menu">
      <div class="column">
        <h4>API</h4>
        <p>Docs</p>
        <p>Authentication</p>
      </div>
      <div class="column">
        <h4>Developers</h4>
        <p>SDKs</p>
        <p>Examples</p>
      </div>
    </div>
  </div>

  <!-- ITEM 4 -->
  <div class="nav-item">
    <a href="#">Resources</a>
    <div class="mega-menu">
      <div class="column">
        <h4>Learn</h4>
        <p>Blog</p>
        <p>Tutorials</p>
      </div>
    </div>
  </div>

  <!-- ITEM 5 -->
  <div class="nav-item">
    <a href="#">Enterprise</a>
    <div class="mega-menu">
      <div class="column">
        <h4>Business</h4>
        <p>Solutions</p>
        <p>Security</p>
      </div>
    </div>
  </div>

  <!-- ITEM 6 -->
  <div class="nav-item">
    <a href="#">Pricing</a>
    <div class="mega-menu">
      <div class="column">
        <h4>Plans</h4>
        <p>Free</p>
        <p>Pro</p>
        <p>Enterprise</p>
      </div>
    </div>
  </div>

</nav>
 
  <div class="auth">
    <a href="loginform.php">Login</a>
    <a href="registrationform.php">Sign-up</a>
  </div>
</header>

<section class="hero">
  <div class="hero-left">
    <h1>The AI creative platform to bring your content to life</h1>

    <div class="buttons">
      <button class="primary">Sign up</button>
      <button class="secondary">Contact sales</button>
    </div>
  </div>

  <div class="hero-right">
    ElevenCreative is a single platform to generate, edit, and localize premium audio and video in minutes. Powering millions of creators, marketing teams, and media companies worldwide.
  </div>
</section>

<section class="cards">
  <div class="card">Preview 1</div>
  <div class="card">Preview 2</div>
  <div class="card">Preview 3</div>
</section>

</body>
</html>
