<?php
include "Templates/header.php"; ?>

<?php
include "Templates/navbar.php"; ?>

<?php
include "Templates/sidebar.php"; ?>

<style>
    .content {
        margin-left: 240px;
        gap: 100px;
    }

    img {
        width: 120px;
        height: 120px;
        object-fit: cover;
    }

    .founders-container {
        max-width: 1400px;
        padding: 0 2rem;
        margin-left: 370px;
        align-items: center;
        display: flex;
        justify-content: center;
        }

    .founders-header {
        text-align: center;
        margin-bottom: 4rem;
    }

    .founders-title {
        font-size: 4rem;
        font-weight: 700;
        background: linear-gradient(45deg, #2B3A67, #638BBE, #4ecdc4, #45b7d1, #96ceb4);
        background-size: 300% 300%;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: gradientShift 8s ease-in-out infinite;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 1rem;
        filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.57));
    }

    .founders-subtitle {
        font-size: 1.2rem;
        color: rgba(17, 17, 17, 0.8);
        font-weight: 300;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
        filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.25));
    }

    .founders-grid {
        display: grid;
        grid-template-columns: repeat(5, 2fr);
        gap: 3.5rem;
        margin-top: 3rem;
        max-width: 1400px;
        margin-left: auto;
        margin-right: auto;
    }

    .founder-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        border-radius: 24px;
        padding: 2rem 1.5rem;
        text-align: center;
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        position: relative;
        overflow: hidden;
        min-width: 0;
        max-width: 300px;
        /* define largura máxima */
        flex: 1 1 300px;
        /* permite crescer e encolher mantendo base de 300px */
        margin: 1rem;
    }

    .founder-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
        transition: left 0.6s;
    }

    .founder-card:hover::before {
        left: 100%;
    }

    .founder-card:hover {
        transform: translateY(-12px) scale(1.02);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        border-color: rgba(255, 255, 255, 0.4);
    }

    .founder-image {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        object-fit: cover;
        margin: 0 auto 1.5rem;
        border: 4px solid rgba(255, 255, 255, 0.3);
        transition: all 0.4s ease;
        position: relative;
        z-index: 2;
    }

    .founder-card:hover .founder-image {
        border-color: rgba(255, 255, 255, 0.8);
        transform: scale(1.1);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
    }

    .founder-name {
        font-size: 1.5rem;
        font-weight: 600;
        color: rgba(0, 0, 0, 0.75);
        margin-bottom: 0.5rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .founder-role {
        font-size: 1rem;
        color: rgba(0, 0, 0, 0.75);
        font-weight: 300;
        text-transform: lowercase;
        font-style: italic;
    }

    .founder-card:nth-child(1) .founder-image {
        border-color: #638BBE;
    }


    @keyframes gradientShift {

        0%,
        100% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .founder-card:nth-child(odd) {
        animation: float 6s ease-in-out infinite;
    }

    .founder-card:nth-child(even) {
        animation: float 6s ease-in-out infinite 3s;
    }

    @media (max-width: 1200px) {
        .founders-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }
    }

    @media (max-width: 768px) {
        .founders-title {
            font-size: 2.5rem;
        }

        .founders-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .founder-card {
            padding: 2rem 1.5rem;
        }

        .founder-image {
            width: 120px;
            height: 120px;
        }
    }

    .founders-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:
            radial-gradient(2px 2px at 20px 30px, rgba(255, 255, 255, 0.3), transparent),
            radial-gradient(2px 2px at 40px 70px, rgba(255, 255, 255, 0.2), transparent),
            radial-gradient(1px 1px at 90px 40px, rgba(255, 255, 255, 0.4), transparent),
            radial-gradient(1px 1px at 130px 80px, rgba(255, 255, 255, 0.3), transparent);
        background-repeat: repeat;
        background-size: 200px 200px;
        animation: sparkle 20s linear infinite;
        pointer-events: none;
    }

    @keyframes sparkle {
        0% {
            transform: translateY(0px);
        }

        100% {
            transform: translateY(-200px);
        }
    }

    /* Placeholder para imagens */
    .placeholder-image {
        background: linear-gradient(45deg, #667eea, #764ba2);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        font-weight: 600;
        color: white;
    }
</style>

<Br>

<div class="founders-container ">
   
        <div class="founder-card ">
            <img src="IMG/me.jpg" class="founder-image" alt="Pedro Lenhares">
            <h5 class="founder-name">Name</h5>
            <p class="founder-role">This is your profile in the page!</p>
</div>
</div>

<?php
include "Templates/footer.php"; ?>