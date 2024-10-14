<style>
    .section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        margin: 0;
        padding: 0;
        position: relative;
        background-color: white;
    }

    .section-left, .section-right {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
        box-sizing: border-box;
        width: 50%;
        height: 300px;
    }

    .section-left {
        text-align: left;
        z-index: 1;
    }

    .section-right {
        text-align: center;
        z-index: 1;
    }

    .section-right img {
        max-width: 46%;
        height: auto;
        object-fit: contain;
    }

    .down-text {
        background-color: #00a7c1;
        color: white;
        text-align: center;
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        z-index: 1;
    }

    .section::before, .section::after {
        content: '';
        position: absolute;
        top: 0;
        width: 100px;
        height: 100px;
        background-color: #00a7c1;
        z-index: 0;
    }

    .section::before {
        clip-path: polygon(0 0, 100% 0, 0 100%);
        left: 0;
    }

    .section::after {
        clip-path: polygon(100% 0, 0 0, 100% 100%);
        right: 0;
    }

    .products-container {
        margin-top: 20px; /* Espacio entre la sección y el contenido de productos */
        width: 100%;
        display: flex;
        justify-content: center;
    }
</style>

<div class="section">
    <div class="section-left">
        <h2>PRODUCTOS</h2>
        <p>Tú escoges, ellos trabajan</p>
    </div>
    <div class="section-right">
        <img src="img/Calentadores-rheem.png" alt="Productos">
    </div>
</div>
<div class="down-text">
    Todos nuestros trabajos cuentan con garantía asegurada.
</div>
