
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="EcoLink: conectando representantes de condomínios e catadores para organizar a coleta seletiva.">

    <title>EcoLink — Conectando pessoas por um mundo mais sustentável</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
    @verbatim

        :root {
            --eco-green: #006047;
            --eco-green-dark: #003f30;
            --eco-green-light: #7bc82d;
            --eco-green-pale: #edf6e8;
            --eco-text: #18372e;
            --eco-muted: #66766e;
            --eco-background: #f8faf6;
            --eco-border: #e5ece3;
            --eco-shadow: 0 18px 55px rgba(0, 65, 47, .09);
        }

        * {
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background: var(--eco-background);
            color: var(--eco-text);
            font-family: 'DM Sans', sans-serif;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Manrope', sans-serif;
        }

        img {
            display: block;
            max-width: 100%;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button {
            font: inherit;
        }

        .eco-container {
            width: min(1160px, calc(100% - 48px));
            margin: 0 auto;
        }

        .eco-section {
            padding: 100px 0;
        }

        .eco-eyebrow {
            display: inline-block;
            margin-bottom: 15px;
            color: var(--eco-green);
            font-size: .76rem;
            font-weight: 800;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .eco-section-title {
            max-width: 720px;
            margin: 0;
            color: var(--eco-green-dark);
            font-size: clamp(2rem, 4vw, 3.15rem);
            font-weight: 800;
            line-height: 1.14;
            letter-spacing: -.045em;
        }

        .eco-section-description {
            max-width: 680px;
            margin: 20px 0 0;
            color: var(--eco-muted);
            font-size: 1.04rem;
            line-height: 1.8;
        }

        /* NAVBAR */

        .eco-header {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(255, 255, 255, .96);
            border-bottom: 1px solid rgba(0, 70, 49, .08);
            backdrop-filter: blur(16px);
        }

        .eco-nav {
            min-height: 86px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .eco-brand {
            display: flex;
            align-items: center;
            flex-shrink: 0;
        }

        .eco-logo {
            width: 190px;
            height: auto;
            object-fit: contain;
            background: transparent;
        }

        .eco-brand-fallback {
            display: none;
            color: var(--eco-green);
            font-family: 'Manrope', sans-serif;
            font-size: 1.8rem;
            font-weight: 800;
        }

        .eco-nav-links {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .eco-nav-links a {
            color: #52665c;
            font-size: .88rem;
            font-weight: 700;
            transition: color .2s;
        }

        .eco-nav-links a:hover {
            color: var(--eco-green-light);
        }

        .eco-nav-button {
            padding: 13px 20px;
            border-radius: 999px;
            background: var(--eco-green);
            color: white;
            font-size: .87rem;
            font-weight: 800;
            transition: .2s;
        }

        .eco-nav-button:hover {
            background: var(--eco-green-dark);
            transform: translateY(-2px);
        }

        .eco-menu-button {
            display: none;
            width: 44px;
            height: 44px;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--eco-border);
            border-radius: 12px;
            background: white;
            color: var(--eco-green);
            font-size: 1.5rem;
            cursor: pointer;
        }

        .eco-mobile-menu {
            display: none;
        }

        /* HERO */

        .eco-hero {
            position: relative;
            overflow: hidden;
            padding: 95px 0 105px;
            background:
                radial-gradient(circle at 82% 18%, rgba(139, 208, 69, .22), transparent 29%),
                linear-gradient(125deg, #003e30 0%, #006047 60%, #168052 100%);
            color: white;
        }

        .eco-hero::before {
            position: absolute;
            right: -140px;
            bottom: -260px;
            width: 550px;
            height: 550px;
            border: 1px solid rgba(255,255,255,.12);
            border-radius: 50%;
            content: "";
        }

        .eco-hero::after {
            position: absolute;
            right: -65px;
            bottom: -180px;
            width: 400px;
            height: 400px;
            border: 1px solid rgba(255,255,255,.1);
            border-radius: 50%;
            content: "";
        }

        .eco-hero-grid {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            align-items: center;
            gap: 65px;
        }

        .eco-hero-label {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 9px 15px;
            border: 1px solid rgba(255,255,255,.2);
            border-radius: 999px;
            background: rgba(255,255,255,.09);
            color: white;
            font-size: .76rem;
            font-weight: 800;
            letter-spacing: .09em;
            text-transform: uppercase;
        }

        .eco-hero-label span {
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background: var(--eco-green-light);
        }

        .eco-hero h1 {
            max-width: 660px;
            margin: 27px 0 22px;
            color: white;
            font-size: clamp(2.7rem, 5.5vw, 4.7rem);
            font-weight: 800;
            line-height: 1.06;
            letter-spacing: -.055em;
        }

        .eco-hero h1 strong {
            color: #a5e65b;
        }

        .eco-hero-text {
            max-width: 570px;
            color: rgba(255,255,255,.83);
            font-size: 1.09rem;
            line-height: 1.85;
        }

        .eco-hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 13px;
            margin-top: 32px;
        }

        .eco-button {
            display: inline-flex;
            min-height: 52px;
            align-items: center;
            justify-content: center;
            padding: 14px 23px;
            border-radius: 999px;
            font-size: .9rem;
            font-weight: 800;
            transition: .2s;
        }

        .eco-button-primary {
            background: #a5e65b;
            color: var(--eco-green-dark);
        }

        .eco-button-primary:hover {
            background: #b9f27c;
            transform: translateY(-3px);
        }

        .eco-button-outline {
            border: 1px solid rgba(255,255,255,.38);
            color: white;
        }

        .eco-button-outline:hover {
            background: rgba(255,255,255,.12);
        }

        .eco-hero-note {
            margin-top: 32px;
            color: rgba(255,255,255,.72);
            font-size: .86rem;
        }

        .eco-hero-note span {
            color: #a5e65b;
            font-weight: 800;
        }

        .eco-hero-visual {
            position: relative;
            display: flex;
            min-height: 390px;
            align-items: center;
            justify-content: center;
        }

        .eco-visual-card {
            width: min(100%, 440px);
            padding: 30px;
            border: 1px solid rgba(255,255,255,.22);
            border-radius: 28px;
            background: rgba(255,255,255,.12);
            box-shadow: 0 30px 80px rgba(0,0,0,.16);
            backdrop-filter: blur(13px);
        }

        .eco-visual-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
        }

        .eco-visual-top small {
            color: rgba(255,255,255,.7);
            font-size: .75rem;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        .eco-visual-icon {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            background: #a5e65b;
            color: var(--eco-green-dark);
            font-size: 1.5rem;
        }

        .eco-visual-card h2 {
            margin: 0 0 24px;
            color: white;
            font-size: 1.5rem;
        }

        .eco-flow-item {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-top: 12px;
            padding: 16px;
            border: 1px solid rgba(255,255,255,.12);
            border-radius: 17px;
            background: rgba(255,255,255,.09);
        }

        .eco-flow-number {
            width: 36px;
            height: 36px;
            display: grid;
            flex-shrink: 0;
            place-items: center;
            border-radius: 12px;
            background: rgba(165,230,91,.18);
            color: #b9f27c;
            font-weight: 800;
        }

        .eco-flow-item strong {
            display: block;
            color: white;
            font-size: .91rem;
        }

        .eco-flow-item small {
            display: block;
            margin-top: 3px;
            color: rgba(255,255,255,.68);
            font-size: .77rem;
        }

        /* SOBRE */

        .eco-about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 70px;
        }

        .eco-about-highlight {
            padding: 38px;
            border: 1px solid var(--eco-border);
            border-radius: 26px;
            background: white;
            box-shadow: var(--eco-shadow);
        }

        .eco-about-highlight .eco-symbol {
            width: 56px;
            height: 56px;
            display: grid;
            place-items: center;
            border-radius: 18px;
            background: var(--eco-green-pale);
            color: var(--eco-green);
            font-size: 1.65rem;
        }

        .eco-about-highlight h3 {
            margin: 22px 0 10px;
            color: var(--eco-green-dark);
            font-size: 1.4rem;
        }

        .eco-about-highlight p {
            margin: 0;
            color: var(--eco-muted);
            line-height: 1.8;
        }

        .eco-about-points {
            display: grid;
            gap: 15px;
            margin-top: 27px;
        }

        .eco-about-point {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            color: #53675c;
            font-size: .95rem;
            line-height: 1.65;
        }

        .eco-check {
            width: 25px;
            height: 25px;
            display: grid;
            flex-shrink: 0;
            place-items: center;
            border-radius: 50%;
            background: #e5f5d9;
            color: var(--eco-green);
            font-size: .78rem;
            font-weight: 900;
        }

        /* PROBLEMA */

        .eco-problem {
            background: #eff5ec;
        }

        .eco-problem-grid {
            display: grid;
            grid-template-columns: .85fr 1.15fr;
            align-items: center;
            gap: 75px;
        }

        .eco-problem-card {
            padding: 35px;
            border-radius: 26px;
            background: white;
            box-shadow: var(--eco-shadow);
        }

        .eco-problem-card h3 {
            margin: 0 0 20px;
            color: var(--eco-green-dark);
            font-size: 1.35rem;
        }

        .eco-problem-item {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 16px 0;
            border-bottom: 1px solid var(--eco-border);
            color: var(--eco-muted);
            line-height: 1.6;
        }

        .eco-problem-item:last-child {
            border-bottom: 0;
        }

        .eco-problem-item span {
            font-size: 1.25rem;
        }

        /* FUNCIONAMENTO */

        .eco-steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 19px;
            margin-top: 48px;
        }

        .eco-step {
            min-height: 245px;
            padding: 27px 23px;
            border: 1px solid var(--eco-border);
            border-radius: 23px;
            background: white;
            transition: .25s;
        }

        .eco-step:hover {
            transform: translateY(-5px);
            box-shadow: var(--eco-shadow);
        }

        .eco-step-number {
            width: 43px;
            height: 43px;
            display: grid;
            place-items: center;
            border-radius: 14px;
            background: var(--eco-green-pale);
            color: var(--eco-green);
            font-weight: 900;
        }

        .eco-step h3 {
            margin: 23px 0 10px;
            color: var(--eco-green-dark);
            font-size: 1.07rem;
        }

        .eco-step p {
            margin: 0;
            color: var(--eco-muted);
            font-size: .9rem;
            line-height: 1.75;
        }

        /* PLATAFORMAS */

        .eco-platforms {
            background: white;
        }

        .eco-platform-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 27px;
            margin-top: 48px;
        }

        .eco-platform-card {
            overflow: hidden;
            border: 1px solid var(--eco-border);
            border-radius: 26px;
            background: var(--eco-background);
        }

        .eco-platform-content {
            padding: 28px;
        }

        .eco-platform-label {
            color: var(--eco-green);
            font-size: .75rem;
            font-weight: 800;
            letter-spacing: .13em;
            text-transform: uppercase;
        }

        .eco-platform-card h3 {
            margin: 10px 0;
            color: var(--eco-green-dark);
            font-size: 1.5rem;
        }

        .eco-platform-card p {
            margin: 0;
            color: var(--eco-muted);
            line-height: 1.7;
        }

        /* ESPAÇOS PARA AS CAPTURAS DO SISTEMA */

        .eco-media-placeholder {
            min-height: 330px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
            background:
                radial-gradient(circle at 80% 15%, rgba(123,200,45,.15), transparent 35%),
                #eaf1e7;
        }

        .eco-mobile-frame {
            width: 175px;
            min-height: 260px;
            padding: 12px;
            border: 5px solid #204b3b;
            border-radius: 27px;
            background: white;
            box-shadow: 0 18px 40px rgba(0,60,40,.13);
        }

        .eco-mobile-screen {
            min-height: 228px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 15px;
            border-radius: 15px;
            background: #f5f9f1;
            color: var(--eco-green);
            text-align: center;
        }

        .eco-mobile-screen span {
            font-size: 2rem;
        }

        .eco-mobile-screen strong {
            margin-top: 13px;
            font-size: .85rem;
        }

        .eco-mobile-screen small {
            margin-top: 7px;
            color: var(--eco-muted);
            font-size: .68rem;
            line-height: 1.5;
        }

        .eco-web-frame {
            width: min(100%, 410px);
            overflow: hidden;
            border: 1px solid #dce5d9;
            border-radius: 14px;
            background: white;
            box-shadow: 0 18px 40px rgba(0,60,40,.1);
        }

        .eco-browser-bar {
            height: 30px;
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 0 12px;
            border-bottom: 1px solid #e8eee5;
            background: #f8faf6;
        }

        .eco-browser-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #b6c6b7;
        }

        .eco-web-screen {
            min-height: 190px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 25px;
            color: var(--eco-green);
            text-align: center;
        }

        .eco-web-screen span {
            font-size: 2.4rem;
        }

        .eco-web-screen strong {
            margin-top: 12px;
            font-size: .95rem;
        }

        .eco-web-screen small {
            margin-top: 7px;
            color: var(--eco-muted);
            font-size: .75rem;
            line-height: 1.6;
        }

        .eco-placeholder-note {
            margin-top: 12px !important;
            color: #829186 !important;
            font-size: .75rem !important;
            font-style: italic;
        }

        /* TECNOLOGIAS */

        .eco-tech-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-top: 45px;
        }

        .eco-tech-card {
            padding: 25px 22px;
            border: 1px solid var(--eco-border);
            border-radius: 21px;
            background: white;
        }

        .eco-tech-icon {
            width: 48px;
            height: 48px;
            display: grid;
            place-items: center;
            border-radius: 15px;
            background: var(--eco-green-pale);
            font-size: 1.35rem;
        }

        .eco-tech-card h3 {
            margin: 19px 0 7px;
            color: var(--eco-green-dark);
            font-size: 1.05rem;
        }

        .eco-tech-card strong {
            color: var(--eco-green);
            font-size: .88rem;
        }

        .eco-tech-card p {
            margin: 11px 0 0;
            color: var(--eco-muted);
            font-size: .86rem;
            line-height: 1.7;
        }

        /* EQUIPE */

        .eco-team {
            background: #eff5ec;
        }

        .eco-team-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 23px;
            margin-top: 45px;
        }

        .eco-person-card {
            overflow: hidden;
            border: 1px solid var(--eco-border);
            border-radius: 23px;
            background: white;
            text-align: center;
        }

        .eco-person-photo {
            position: relative;
            min-height: 260px;
            display: grid;
            place-items: center;
            overflow: hidden;
            background:
                radial-gradient(circle at 50% 40%, rgba(123,200,45,.19), transparent 55%),
                #e8f1e4;
            color: var(--eco-green);
        }

        .eco-person-photo img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center 30%;
        }

        .eco-person-photo span {
            color: #668070;
            font-size: .8rem;
            font-weight: 700;
        }

        .eco-person-info {
            padding: 22px 16px 25px;
        }

        .eco-person-info h3 {
            margin: 0;
            color: var(--eco-green-dark);
            font-size: 1.05rem;
        }

        .eco-person-info p {
            margin: 8px 0 0;
            color: var(--eco-muted);
            font-size: .85rem;
        }

        .eco-advisor {
            margin-top: 30px;
            color: var(--eco-muted);
            font-size: .9rem;
            text-align: center;
        }

        .eco-advisor strong {
            color: var(--eco-green);
        }

        /* ENCERRAMENTO */

        .eco-final {
            padding: 88px 0;
            background: var(--eco-green-dark);
            color: white;
            text-align: center;
        }

        .eco-final h2 {
            max-width: 760px;
            margin: 0 auto;
            color: white;
            font-size: clamp(2rem, 4.5vw, 3.3rem);
            line-height: 1.15;
            letter-spacing: -.04em;
        }

        .eco-final p {
            max-width: 650px;
            margin: 20px auto 0;
            color: rgba(255,255,255,.76);
            font-size: 1rem;
            line-height: 1.8;
        }

        .eco-final .eco-button {
            margin-top: 30px;
        }

        .eco-disclaimer {
            margin-top: 28px !important;
            font-size: .78rem !important;
            color: rgba(255,255,255,.55) !important;
        }

        /* RODAPÉ */

        .eco-footer {
            padding: 30px 0;
            background: #002d22;
            color: rgba(255,255,255,.75);
        }

        .eco-footer-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
        }

        .eco-footer-brand {
            color: white;
            font-family: 'Manrope', sans-serif;
            font-size: 1.35rem;
            font-weight: 800;
        }

        .eco-footer-brand span {
            color: var(--eco-green-light);
        }

        .eco-footer p {
            margin: 0;
            font-size: .82rem;
            line-height: 1.6;
        }

        .eco-back-top {
            color: #b5ea7b;
            font-size: .85rem;
            font-weight: 800;
        }

        /* RESPONSIVIDADE */

        @media (max-width: 1000px) {
            .eco-nav-links {
                gap: 17px;
            }

            .eco-nav-links a {
                font-size: .8rem;
            }

            .eco-hero-grid {
                gap: 35px;
            }

            .eco-steps {
                grid-template-columns: repeat(2, 1fr);
            }

            .eco-tech-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .eco-about-grid,
            .eco-problem-grid {
                gap: 40px;
            }
        }

        @media (max-width: 760px) {
            .eco-container {
                width: min(100% - 36px, 600px);
            }

            .eco-section {
                padding: 70px 0;
            }

            .eco-nav {
                min-height: 72px;
            }

            .eco-logo {
                width: 155px;
            }

            .eco-nav-links,
            .eco-nav-button {
                display: none;
            }

            .eco-menu-button {
                display: flex;
            }

            .eco-mobile-menu {
                display: flex;
                flex-direction: column;
                gap: 0;
                padding: 5px 18px 17px;
                border-top: 1px solid var(--eco-border);
                background: white;
            }

            .eco-mobile-menu[hidden] {
                display: none;
            }

            .eco-mobile-menu a {
                padding: 13px 5px;
                border-bottom: 1px solid #eff2ec;
                color: var(--eco-green-dark);
                font-size: .92rem;
                font-weight: 700;
            }

            .eco-hero {
                padding: 70px 0 75px;
            }

            .eco-hero-grid,
            .eco-about-grid,
            .eco-problem-grid {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .eco-hero h1 {
                font-size: clamp(2.5rem, 10vw, 3.7rem);
            }

            .eco-hero-text {
                font-size: 1rem;
            }

            .eco-hero-visual {
                min-height: auto;
            }

            .eco-visual-card {
                padding: 23px;
            }

            .eco-about-highlight,
            .eco-problem-card {
                padding: 27px;
            }

            .eco-steps {
                grid-template-columns: 1fr;
                gap: 14px;
                margin-top: 32px;
            }

            .eco-step {
                min-height: auto;
            }

            .eco-platform-grid {
                grid-template-columns: 1fr;
                gap: 20px;
                margin-top: 32px;
            }

            .eco-media-placeholder {
                min-height: 285px;
            }

            .eco-tech-grid {
                grid-template-columns: 1fr 1fr;
                gap: 13px;
            }

            .eco-tech-card {
                padding: 19px 16px;
            }

            .eco-team-grid {
                grid-template-columns: 1fr;
                max-width: 390px;
                margin-right: auto;
                margin-left: auto;
            }

            .eco-person-photo {
                min-height: 280px;
            }

            .eco-footer-content {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 420px) {
            .eco-container {
                width: calc(100% - 30px);
            }

            .eco-logo {
                width: 140px;
            }

            .eco-hero-actions {
                flex-direction: column;
            }

            .eco-button {
                width: 100%;
            }

            .eco-tech-grid {
                grid-template-columns: 1fr;
            }

            .eco-visual-card {
                padding: 18px;
            }

            .eco-flow-item {
                padding: 13px;
            }

            .eco-section-title {
                font-size: 2rem;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition-duration: .01ms !important;
                animation-duration: .01ms !important;
            }
        }

    @endverbatim
    </style>
</head>

<body id="top">

    <!-- CABEÇALHO -->
    <header class="eco-header">
        <div class="eco-container eco-nav">

            <a href="#top" class="eco-brand" aria-label="EcoLink - Página inicial">

                <img
                    src="{{ asset('images/ecolink-logo-transparente.png') }}"
                    alt="EcoLink"
                    class="eco-logo"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='inline-flex';"
                >

                <span class="eco-brand-fallback">EcoLink</span>
            </a>

            <nav class="eco-nav-links" aria-label="Navegação principal">
                <a href="#sobre">O projeto</a>
                <a href="#desafio">O desafio</a>
                <a href="#funcionamento">Como funciona</a>
                <a href="#plataformas">Plataformas</a>
                <a href="#equipe">Equipe</a>
            </nav>

            <a href="#sobre" class="eco-nav-button">
                Conheça o EcoLink
            </a>

            <button
                class="eco-menu-button"
                id="eco-menu-button"
                type="button"
                aria-label="Abrir menu"
                aria-expanded="false"
                aria-controls="eco-mobile-menu"
            >
                ☰
            </button>

        </div>

        <nav
            class="eco-mobile-menu"
            id="eco-mobile-menu"
            aria-label="Navegação mobile"
            hidden
        >
            <a href="#sobre">O projeto</a>
            <a href="#desafio">O desafio</a>
            <a href="#funcionamento">Como funciona</a>
            <a href="#plataformas">Plataformas</a>
            <a href="#tecnologias">Tecnologias</a>
            <a href="#equipe">Nossa equipe</a>
        </nav>
    </header>

    <main>

        <!-- APRESENTAÇÃO PRINCIPAL -->
        <section class="eco-hero">
            <div class="eco-container eco-hero-grid">

                <div>
                    <div class="eco-hero-label">
                        <span></span>
                        Tecnologia e sustentabilidade
                    </div>

                    <h1>
                        Conectando pessoas por um mundo
                        <strong>mais sustentável.</strong>
                    </h1>

                    <p class="eco-hero-text">
                        O EcoLink é um sistema desenvolvido para organizar
                        as solicitações de coleta seletiva em condomínios
                        e aproximar seus representantes dos catadores
                        de materiais recicláveis.
                    </p>

                    <div class="eco-hero-actions">
                        <a href="#sobre" class="eco-button eco-button-primary">
                            Conheça nosso projeto →
                        </a>

                        <a href="#funcionamento" class="eco-button eco-button-outline">
                            Como funciona?
                        </a>
                    </div>

                    <p class="eco-hero-note">
                        <span>EcoLink</span> — Conectando pessoas,
                        facilitando conexões e organizando a coleta seletiva.
                    </p>
                </div>

                <div class="eco-hero-visual">
                    <div class="eco-visual-card">

                        <div class="eco-visual-top">
                            <div>
                                <small>Conheça o processo</small>
                            </div>

                            <div class="eco-visual-icon">♻</div>
                        </div>

                        <h2>Da solicitação à coleta concluída.</h2>

                        <div class="eco-flow-item">
                            <span class="eco-flow-number">01</span>
                            <div>
                                <strong>Solicitação registrada</strong>
                                <small>
                                    O condomínio informa os materiais disponíveis.
                                </small>
                            </div>
                        </div>

                        <div class="eco-flow-item">
                            <span class="eco-flow-number">02</span>
                            <div>
                                <strong>Coleta aceita</strong>
                                <small>
                                    O catador consulta e aceita a solicitação.
                                </small>
                            </div>
                        </div>

                        <div class="eco-flow-item">
                            <span class="eco-flow-number">03</span>
                            <div>
                                <strong>Atendimento confirmado</strong>
                                <small>
                                    As duas partes confirmam a realização da coleta.
                                </small>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- SOBRE O PROJETO -->
        <section class="eco-section" id="sobre">
            <div class="eco-container eco-about-grid">

                <div>
                    <span class="eco-eyebrow">Conheça o EcoLink</span>

                    <h2 class="eco-section-title">
                        Uma conexão que aproxima quem disponibiliza e quem coleta.
                    </h2>

                    <p class="eco-section-description">
                        O EcoLink surgiu com o propósito de facilitar
                        a organização da coleta seletiva em condomínios
                        por meio da tecnologia. A proposta é aproximar
                        representantes de condomínios e catadores em
                        um ambiente digital, reunindo informações
                        importantes para o acompanhamento das solicitações.
                    </p>

                    <div class="eco-about-points">

                        <div class="eco-about-point">
                            <span class="eco-check">✓</span>
                            <span>
                                Organização das informações sobre materiais
                                e quantidades disponíveis.
                            </span>
                        </div>

                        <div class="eco-about-point">
                            <span class="eco-check">✓</span>
                            <span>
                                Comunicação entre representantes de
                                condomínios e catadores.
                            </span>
                        </div>

                        <div class="eco-about-point">
                            <span class="eco-check">✓</span>
                            <span>
                                Acompanhamento das etapas de atendimento
                                das solicitações.
                            </span>
                        </div>

                    </div>
                </div>

                <div class="eco-about-highlight">
                    <div class="eco-symbol">🌱</div>

                    <h3>Nosso propósito</h3>

                    <p>
                        Utilizar a tecnologia como ferramenta de apoio
                        à organização da coleta seletiva, tornando as
                        informações mais acessíveis e aproximando os
                        participantes envolvidos nesse processo.
                    </p>
                </div>

            </div>
        </section>

        <!-- O DESAFIO -->
        <section class="eco-section eco-problem" id="desafio">
            <div class="eco-container eco-problem-grid">

                <div>
                    <span class="eco-eyebrow">O problema</span>

                    <h2 class="eco-section-title">
                        Organizar a coleta seletiva também é um desafio
                        de comunicação.
                    </h2>

                    <p class="eco-section-description">
                        A destinação adequada dos materiais recicláveis
                        depende da participação de diferentes agentes.
                        Nos condomínios, a organização das informações
                        e o contato entre quem disponibiliza os materiais
                        e quem realiza a retirada são partes importantes
                        desse processo.
                    </p>
                </div>

                <div class="eco-problem-card">
                    <h3>Desafios que motivaram o projeto</h3>

                    <div class="eco-problem-item">
                        <span>↔</span>
                        <div>
                            <strong>Comunicação descentralizada</strong><br>
                            Dificuldade para reunir as informações
                            necessárias sobre as coletas.
                        </div>
                    </div>

                    <div class="eco-problem-item">
                        <span>📦</span>
                        <div>
                            <strong>Informações sobre os materiais</strong><br>
                            Necessidade de identificar os materiais
                            disponíveis, suas quantidades e as condições
                            para retirada.
                        </div>
                    </div>

                    <div class="eco-problem-item">
                        <span>📍</span>
                        <div>
                            <strong>Organização das retiradas</strong><br>
                            Importância de informar os locais e as
                            instruções para o atendimento das solicitações.
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- COMO FUNCIONA -->
        <section class="eco-section" id="funcionamento">
            <div class="eco-container">

                <span class="eco-eyebrow">A solução na prática</span>

                <h2 class="eco-section-title">
                    Um processo organizado em etapas.
                </h2>

                <p class="eco-section-description">
                    O EcoLink estabelece um fluxo de solicitação
                    e acompanhamento da coleta, conectando o
                    representante do condomínio ao catador.
                </p>

                <div class="eco-steps">

                    <article class="eco-step">
                        <div class="eco-step-number">01</div>

                        <h3>Criação da solicitação</h3>

                        <p>
                            O representante informa os materiais
                            disponíveis, as quantidades estimadas
                            e as instruções para a retirada.
                        </p>
                    </article>

                    <article class="eco-step">
                        <div class="eco-step-number">02</div>

                        <h3>Consulta e aceite</h3>

                        <p>
                            O catador consulta as solicitações
                            disponíveis e pode aceitar uma coleta
                            para realizar o atendimento.
                        </p>
                    </article>

                    <article class="eco-step">
                        <div class="eco-step-number">03</div>

                        <h3>Confirmação do catador</h3>

                        <p>
                            Após realizar a retirada dos materiais,
                            o catador registra no sistema que
                            a coleta foi efetuada.
                        </p>
                    </article>

                    <article class="eco-step">
                        <div class="eco-step-number">04</div>

                        <h3>Confirmação do condomínio</h3>

                        <p>
                            O representante também confirma a coleta.
                            O atendimento é concluído após as
                            duas confirmações.
                        </p>
                    </article>

                </div>
            </div>
        </section>

        <!-- APLICATIVO E SITE -->
        <section class="eco-section eco-platforms" id="plataformas">
            <div class="eco-container">

                <span class="eco-eyebrow">Conheça as plataformas</span>

                <h2 class="eco-section-title">
                    O EcoLink na palma da mão e na web.
                </h2>

                <p class="eco-section-description">
                    O projeto conta com uma aplicação móvel e uma
                    interface web, integradas a uma API compartilhada
                    e a um banco de dados. Cada plataforma atende às
                    necessidades dos participantes do processo
                    de coleta seletiva.
                </p>

                <div class="eco-platform-grid">

                    <!-- APLICATIVO -->
                    <article class="eco-platform-card">

                        <div class="eco-media-placeholder">
                            <div class="eco-mobile-frame">
                                <div class="eco-mobile-screen">
                                    <span>📱</span>

                                    <strong>Aplicativo EcoLink</strong>

                                    <small>
                                        Espaço reservado para as capturas
                                        reais do aplicativo.
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="eco-platform-content">
                            <span class="eco-platform-label">
                                Aplicativo móvel
                            </span>

                            <h3>EcoLink Mobile</h3>

                            <p>
                                Permite que os participantes acessem
                                as funcionalidades do sistema pelo
                                celular, incluindo a consulta e o
                                acompanhamento das solicitações de coleta.
                            </p>

                            <p class="eco-placeholder-note">
                                As telas reais do aplicativo serão
                                inseridas nesta seção.
                            </p>
                        </div>

                    </article>

                    <!-- SITE WEB -->
                    <article class="eco-platform-card">

                        <div class="eco-media-placeholder">
                            <div class="eco-web-frame">

                                <div class="eco-browser-bar">
                                    <span class="eco-browser-dot"></span>
                                    <span class="eco-browser-dot"></span>
                                    <span class="eco-browser-dot"></span>
                                </div>

                                <div class="eco-web-screen">
                                    <span>💻</span>

                                    <strong>Sistema Web EcoLink</strong>

                                    <small>
                                        Espaço reservado para as capturas
                                        reais da plataforma web.
                                    </small>
                                </div>

                            </div>
                        </div>

                        <div class="eco-platform-content">
                            <span class="eco-platform-label">
                                Plataforma web
                            </span>

                            <h3>EcoLink Web</h3>

                            <p>
                                Oferece uma interface para o representante
                                do condomínio registrar solicitações
                                e acompanhar o andamento dos atendimentos.
                            </p>

                            <p class="eco-placeholder-note">
                                As telas reais do sistema web serão
                                inseridas nesta seção.
                            </p>
                        </div>

                    </article>

                </div>
            </div>
        </section>

        <!-- TECNOLOGIAS -->
        <section class="eco-section" id="tecnologias">
            <div class="eco-container">

                <span class="eco-eyebrow">
                    Desenvolvimento do projeto
                </span>

                <h2 class="eco-section-title">
                    Tecnologia trabalhando em conjunto.
                </h2>

                <p class="eco-section-description">
                    A arquitetura do EcoLink reúne diferentes
                    componentes integrados para disponibilizar
                    as funcionalidades do sistema.
                </p>

                <div class="eco-tech-grid">

                    <article class="eco-tech-card">
                        <div class="eco-tech-icon">🌐</div>

                        <h3>Aplicação web</h3>

                        <strong>Next.js + TypeScript</strong>

                        <p>
                            Interface web para acesso às
                            funcionalidades do sistema.
                        </p>
                    </article>

                    <article class="eco-tech-card">
                        <div class="eco-tech-icon">📱</div>

                        <h3>Aplicativo móvel</h3>

                        <strong>React Native + TypeScript</strong>

                        <p>
                            Aplicação desenvolvida para
                            dispositivos móveis.
                        </p>
                    </article>

                    <article class="eco-tech-card">
                        <div class="eco-tech-icon">🔗</div>

                        <h3>Integração</h3>

                        <strong>API compartilhada</strong>

                        <p>
                            Centraliza as operações e integra
                            as interfaces do sistema.
                        </p>
                    </article>

                    <article class="eco-tech-card">
                        <div class="eco-tech-icon">🗄️</div>

                        <h3>Banco de dados</h3>

                        <strong>MySQL</strong>

                        <p>
                            Armazena as informações utilizadas
                            pelos componentes do EcoLink.
                        </p>
                    </article>

                </div>
            </div>
        </section>

        <!-- EQUIPE -->
        <section class="eco-section eco-team" id="equipe">
            <div class="eco-container">

                <div style="text-align: center;">

                    <span class="eco-eyebrow">
                        Quem está por trás
                    </span>

                    <h2
                        class="eco-section-title"
                        style="margin-left:auto; margin-right:auto;"
                    >
                        Conheça nossa equipe.
                    </h2>

                    <p
                        class="eco-section-description"
                        style="margin-left:auto; margin-right:auto;"
                    >
                        O EcoLink é resultado de um trabalho de
                        pesquisa, planejamento e desenvolvimento
                        realizado em equipe.
                    </p>

                </div>

                <div class="eco-team-grid">

                    <!-- PEDRO -->
                    <article class="eco-person-card">

                        <div class="eco-person-photo">
                            <span>Foto de Pedro</span>

                            <img
                                src="{{ asset('images/pedro.jpg') }}"
                                alt="Pedro Tersi Gomes de Souza"
                                loading="lazy"
                                onload="this.previousElementSibling.style.display='none';"
                                onerror="this.style.display='none';"
                            >
                        </div>

                        <div class="eco-person-info">
                            <h3>Pedro Tersi Gomes de Souza</h3>
                            <p>Integrante do projeto</p>
                        </div>

                    </article>

                    <!-- RENAN -->
                    <article class="eco-person-card">

                        <div class="eco-person-photo">
                            <span>Foto de Renan</span>

                            <img
                                src="{{ asset('images/renan.jpg') }}"
                                alt="Renan Pereira Rezaghi"
                                loading="lazy"
                                onload="this.previousElementSibling.style.display='none';"
                                onerror="this.style.display='none';"
                            >
                        </div>

                        <div class="eco-person-info">
                            <h3>Renan Pereira Rezaghi</h3>
                            <p>Integrante do projeto</p>
                        </div>

                    </article>

                    <!-- RODRIGO -->
                    <article class="eco-person-card">

                        <div class="eco-person-photo">
                            <span>Foto de Rodrigo</span>

                            <img
                                src="{{ asset('images/rodrigo.jpg') }}"
                                alt="Rodrigo Rocha Silva"
                                loading="lazy"
                                onload="this.previousElementSibling.style.display='none';"
                                onerror="this.style.display='none';"
                            >
                        </div>

                        <div class="eco-person-info">
                            <h3>Rodrigo Rocha Silva</h3>
                            <p>Integrante do projeto</p>
                        </div>

                    </article>

                </div>

                <p class="eco-advisor">
                    Orientador do projeto:
                    <strong>Jeferson Roberto de Lima</strong>
                </p>

            </div>
        </section>

        <!-- ENCERRAMENTO -->
        <section class="eco-final">
            <div class="eco-container">

                <span class="eco-eyebrow" style="color:#a5e65b;">
                    EcoLink
                </span>

                <h2>
                    Conectando pessoas por um mundo mais sustentável.
                </h2>

                <p>
                    Acreditamos que a tecnologia pode aproximar
                    pessoas, organizar processos e apoiar iniciativas
                    voltadas à coleta seletiva.
                </p>

                <a href="#top" class="eco-button eco-button-primary">
                    Voltar ao início ↑
                </a>

                <p class="eco-disclaimer">
                    Projeto desenvolvido e verificado funcionalmente
                    com contas de teste. Avaliações com usuários em
                    situações reais e mensuração de impacto
                    socioambiental são etapas futuras.
                </p>

            </div>
        </section>

    </main>

    <!-- RODAPÉ -->
    <footer class="eco-footer">
        <div class="eco-container eco-footer-content">

            <div class="eco-footer-brand">
                EcoLink<span>.</span>
            </div>

            <p>
                Conectando pessoas por um mundo mais sustentável.<br>
                © 2026 EcoLink.
            </p>

            <a href="#top" class="eco-back-top">
                Voltar ao topo ↑
            </a>

        </div>
    </footer>

    <!-- MENU MOBILE -->
    <script>
        const menuButton = document.getElementById('eco-menu-button');
        const mobileMenu = document.getElementById('eco-mobile-menu');

        menuButton.addEventListener('click', function () {
            const isExpanded =
                menuButton.getAttribute('aria-expanded') === 'true';

            menuButton.setAttribute(
                'aria-expanded',
                String(!isExpanded)
            );

            menuButton.setAttribute(
                'aria-label',
                isExpanded ? 'Abrir menu' : 'Fechar menu'
            );

            mobileMenu.hidden = isExpanded;

            menuButton.textContent = isExpanded ? '☰' : '✕';
        });

        mobileMenu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                mobileMenu.hidden = true;

                menuButton.setAttribute('aria-expanded', 'false');
                menuButton.setAttribute('aria-label', 'Abrir menu');

                menuButton.textContent = '☰';
            });
        });
    </script>

</body>
</html>
