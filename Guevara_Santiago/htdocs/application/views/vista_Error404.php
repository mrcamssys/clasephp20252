<div class="container">
    <div class="css_midisenio">
        <h1>🚫 Error 404</h1>
        <p>La página que buscas no existe o definitivamente esta desactualizada.</p>
        <a href="index.php" class="btn">Volver al inicio</a>
    </div>
</div>

<style>
    /* ==== Estilos generales ==== */
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f4f6f9;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* ==== Caja del mensaje ==== */
    .css_midisenio {
        text-align: center;
        background: linear-gradient(135deg, #835bceff, #8bb124ff);
        color: white;
        padding: 50px;
        border-radius: 15px;
        box-shadow: 0px 6px 20px rgba(0,0,0,0.2);
        width: 60%;
        max-width: 600px;
        animation: fadeIn 1s ease-in-out;
    }

    .css_midisenio h1 {
        font-size: 3rem;
        margin-bottom: 10px;
    }

    .css_midisenio p {
        font-size: 1.2rem;
        margin-bottom: 20px;
    }

    /* ==== Botón ==== */
    .btn {
        display: inline-block;
        text-decoration: none;
        background: #fff;
        color: #3498db;
        padding: 12px 20px;
        border-radius: 8px;
        font-weight: bold;
        transition: 0.3s;
    }

    .btn:hover {
        background: #2ecc71;
        color: white;
    }

    /* ==== Animación ==== */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
