<style>
    .products-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding-left: 3%;
        padding-right: 3%;
    }

    .card-owl {
        position: relative;
        width: 300px;
        height: 200px;
        background-color: #f2f2f2;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        perspective: 1000px;
        box-shadow: 0 0 0 5px #ffffff80;
        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        flex: 0 1 calc(33.333% - 20px);
    }

    .card-owl svg {
        width: 48px;
        fill: #333;
        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .card-owl:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(255, 255, 255, 0.2);
    }

    .card__content-owl {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 20px;
        box-sizing: border-box;
        background-color: #f2f2f2;
        transform: rotateX(-90deg);
        transform-origin: bottom;
        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .card-owl:hover .card__content-owl {
        transform: rotateX(0deg);
    }

    .card__title-owl {
        margin: 0;
        font-size: 24px;
        color: #333;
        font-weight: 700;
    }

    .card-owl:hover svg {
        scale: 0;
    }

    .card__description-owl {
        margin: 10px 0 0;
        font-size: 14px;
        color: #777;
        line-height: 1.4;
    }
</style>

<div class="products-container">
    <div class="card-owl">
        <img src="img/Logo.jpeg" class="img-fluid rounded-start h-100" alt="...">
        <div class="card__content-owl">
            <p class="card__title-owl">Card Title</p>
            <p class="card__description-owl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
    </div>
    <div class="card-owl">
        <img src="img/Logo.jpeg" class="img-fluid rounded-start h-100" alt="...">
        <div class="card__content-owl">
            <p class="card__title-owl">Card Title</p>
            <p class="card__description-owl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
    </div>
    <div class="card-owl">
        <img src="img/Logo.jpeg" class="img-fluid rounded-start h-100" alt="...">
        <div class="card__content-owl">
            <p class="card__title-owl">Card Title</p>
            <p class="card__description-owl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
    </div>
    <div class="card-owl">
        <img src="img/Logo.jpeg" class="img-fluid rounded-start h-100" alt="...">
        <div class="card__content-owl">
            <p class="card__title-owl">Card Title</p>
            <p class="card__description-owl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
    </div>
    <div class="card-owl">
        <img src="img/Logo.jpeg" class="img-fluid rounded-start h-100" alt="...">
        <div class="card__content-owl">
            <p class="card__title-owl">Card Title</p>
            <p class="card__description-owl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
    </div>
    <div class="card-owl">
        <img src="img/Logo.jpeg" class="img-fluid rounded-start h-100" alt="...">
        <div class="card__content-owl">
            <p class="card__title-owl">Card Title</p>
            <p class="card__description-owl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
    </div>
</div>
