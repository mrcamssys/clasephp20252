<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

  body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
  }

  .container {
    max-width: 480px;
    padding: 40px 20px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    box-shadow: 0 8px 32px 0 rgba(0,0,0,0.37);
  }

  h1 {
    font-size: 8rem;
    margin: 0;
    font-weight: 700;
    letter-spacing: 10px;
    color: #ff4757;
  }

  h2 {
    font-weight: 700;
    font-size: 2rem;
    margin: 15px 0;
  }

  p {
    font-weight: 400;
    font-size: 1.1rem;
    margin: 20px 0 30px;
  }

  a {
    display: inline-block;
    padding: 12px 30px;
    font-weight: 700;
    color: #2575fc;
    background: #fff;
    border-radius: 50px;
    text-decoration: none;
    transition: background 0.3s ease, color 0.3s ease;
  }

  a:hover {
    background: #ff4757;
    color: #fff;
  }
</style>
</head>
<body>
  <div class="container">
    <h1>404</h1>
    <h2>Oops! Página no encontrada</h2>
    <p>La página que buscas no existe o ha sido movida.</p>
    <a href="welcome">Volver al inicio</a>
  </div>