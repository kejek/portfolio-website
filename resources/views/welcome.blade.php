<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Matthew Goldsworthy</title>
<meta name="title" content="Matthew Goldsworthy" />
<meta name="description"
    content="Laravel Developer • Learner Although A Software Engineer looking forward to Share and Gain knowledgeable stuff" />
<meta name="keywords"
    content="Matt Goldsworthy , Matthew Goldsworthy ,Matthew, Goldsworthy ,Software Engineer, Laravel, Database, MySQL, PostgreSQL, Livewire, RESTful API,Tailwind," />
<meta name="author" content="Pt. Prashant Tripathi" />
<meta name="language" content="English" />
<meta name="copyright" content="Pt. Prashant Tripathi © 2023 " />
<meta name="robots" content="index, follow" />
<link rel="shortcut icon" href="favicon.ico" />

<meta name="application-name" content="Matt Goldsworthy - Portfolio&nbsp;" />

<meta property="og:description"
    content="Laravel Developer • Learner Although A Software Engineer looking forward to Share and Gain knowledgeable stuff" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">

@vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js', 'resources/js/repo.js'])

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <div class="bg-struct bg-img"></div>
        <div class="mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row mdl-scroll-spy-1">
                    <a href="index.html"><span class="mdl-layout-title">Matthew Goldsworthy</span></a>
                    <div class="mdl-layout-spacer"></div>
                    <ul class="nav mdl-navigation mdl-layout--large-screen-only">
                        <li>
                            <a class="mdl-navigation__link" data-scroll href="#body">about</a>
                        </li>
                        <li>
                            <a class="mdl-navigation__link" data-scroll href="#portfolio_sec">portfolio</a>
                        </li>
                        <li>
                            <a class="mdl-navigation__link" data-scroll href="#interest_sec">interest</a>
                        </li>
                        <li>
                            <a class="mdl-navigation__link" data-scroll href="#project_sec">project</a>
                        </li>
                        <li>
                            <a class="mdl-navigation__link" data-scroll href="#contact_sec">contact</a>
                        </li>
                    </ul>
                    <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon ver-more-btn">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        data-mdl-for="demo-menu-lower-right">
                        <li class="mdl-menu__item">
                            <a
                                href="https://drive.google.com/file/d/1J79L3laKdUfjyP44nHjJ6E50oFebs5if/view?usp=drivesdk"><i
                                    class="zmdi zmdi-download font-red pr-10"></i>Download
                                Resume</a>
                        </li>
                        <li class="mdl-menu__item">
                            <a href="mailto:matt.j.goldsworthy@gmail.com"><i
                                    class="zmdi zmdi-email-open font-green pr-10"></i>Drop me
                                an Mail</a>
                        </li>
                    </ul>
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <div class="nicescroll-bar">
                    <div class="drawer-profile-wrap">
                        <div class="candidate-img-drawer mt-25 mb-20"></div>
                        <span class="candidate-name block mb-10 text-center">Matthew Goldsworthy</span>
                        <ul class="social-icons mb-30">
                            <li>
                                <a class="facebook-link" href="https://www.facebook.com/profile.php?id=100008966418246">
                                    <i id="tt11" class="zmdi zmdi-facebook"></i>
                                    <div class="mdl-tooltip" data-mdl-for="tt11">facebook</div>
                                </a>
                            </li>
                            <li>
                                <a class="linkedin-link" href="https://www.linkedin.com/in/matt-goldsworthy-69145916/">
                                    <i id="tt13" class="zmdi zmdi-linkedin"></i>
                                    <div class="mdl-tooltip" data-mdl-for="tt13">linkedin</div>
                                </a>
                            </li>
                            <li>
                                <a class="github-link" href="https://github.com/kejek">
                                    <i id="tt14" class="zmdi zmdi-github"></i>
                                    <div class="mdl-tooltip" data-mdl-for="tt14">github</div>
                                </a>
                            </li>
                            <li>
                                <a class="instagram-link" href="https://www.instagram.com/matt.j.goldsworthy/">
                                    <i id="tt15" class="zmdi zmdi-instagram"></i>
                                    <div class="mdl-tooltip" data-mdl-for="tt15">instagram</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mdl-scroll-spy-2">
                        <ul class="mdl-navigation">
                            <li>
                                <a class="mdl-navigation__link border-top-sep" data-scroll href="#body">
                                    <i class="zmdi zmdi-border-color pr-15"></i>
                                    <span class="font-capitalize">about</span>
                                </a>
                            </li>
                            <li>
                                <a class="mdl-navigation__link border-top-sep" data-scroll href="#portfolio_sec">
                                    <i class="zmdi zmdi-case pr-15"></i>
                                    <span class="font-capitalize">portfolio</span>
                                </a>
                            </li>
                            <li>
                                <a class="mdl-navigation__link border-top-sep" data-scroll href="#interest_sec">
                                    <i class="zmdi zmdi-coffee pr-15"></i>
                                    <span class="font-capitalize">interest</span>
                                </a>
                            </li>
                            <li>
                                <a class="mdl-navigation__link border-top-sep" data-scroll href="#project_sec">
                                    <i class="zmdi zmdi-code pr-15"></i>
                                    <span class="font-capitalize">projects</span>
                                </a>
                            </li>
                            <li>
                                <a class="mdl-navigation__link border-top-sep border-bottom-sep" data-scroll
                                    href="#contact_sec">
                                    <i class="zmdi zmdi-email pr-15"></i>
                                    <span class="font-capitalize">contact</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="drawer-footer mt-50 mb-30 text-center">
                        <p class="font-12 mt-10">Matthew Goldsworthy &copy; 2023.</p>
                    </div>
                </div>
            </div>
            <div class="main-content relative">
                <div class="container">
                    <section class="about-sec mt-180 mt-sm-120 mb-30">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mdl-card mdl-shadow--2dp">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-12 mb-30">
                                            <!-- add profile photo here-->
                                            <img class="candidate-img mb-35" src="" />
                                            <ul class="social-icons">
                                                <li>
                                                    <a class="facebook-link"
                                                        href="https://www.facebook.com/profile.php?id=100008966418246">
                                                        <i id="tt1" class="zmdi zmdi-facebook"></i>
                                                        <div class="mdl-tooltip" data-mdl-for="tt1">
                                                            facebook
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="linkedin-link"
                                                        href="https://www.linkedin.com/in/matt-goldsworthy-69145916/">
                                                        <i id="tt3" class="zmdi zmdi-linkedin"></i>
                                                        <div class="mdl-tooltip" data-mdl-for="tt3">
                                                            linkedin
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="instagram-link"
                                                        href="https://www.instagram.com/matt.j.goldsworthy/">
                                                        <i id="tt5" class="zmdi zmdi-instagram"></i>
                                                        <div class="mdl-tooltip" data-mdl-for="tt5">
                                                            instagram
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="github-link" href="https://github.com/kejek">
                                                        <i id="tt4" class="zmdi zmdi-github"></i>
                                                        <div class="mdl-tooltip" data-mdl-for="tt4">
                                                            github
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-7 col-xs-12">
                                            <div class="info-wrap">
                                                <h1>Matthew Goldsworthy</h1>
                                                <h5 class="mt-20 font-grey">
                                                    Laravel Developer • Learner
                                                </h5>
                                                <div class="mt-30">
                                                    <a id="download_cv"
                                                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect bg-green font-white mr-10"
                                                        href="https://drive.google.com/file/d/1Xl_qw2w7ZdO0EPtS4cTbf--Uv9LZXF46/view">download
                                                        Resume</a>
                                                    <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect bg-blue font-white"
                                                        href="#contact_sec" data-scroll>contact</a>
                                                </div>
                                            </div>
                                            <ul class="profile-wrap mt-50">
                                                <li>
                                                    <div class="profile-title">
                                                        &#128104; &#8205; &#127891; Experience Level :
                                                    </div>
                                                    10+ years
                                                </li>
                                                <li>
                                                    <div class="profile-title">
                                                        💻 I’m currently watching
                                                    </div>
                                                    One piece 🚀
                                                </li>
                                                <li>
                                                    <div class="profile-title">
                                                        &#129513; Interested in :
                                                    </div>
                                                    Technology, Astronomy, Space
                                                </li>
                                                <li>
                                                    <div class="profile-title">💡 Equipments :</div>
                                                    Sarcasm, Knowledge, Laravel, PHP, TypeScript, webdev,
                                                    Linux
                                                </li>
                                                <li>
                                                    <div class="profile-title">&#x26a1; Fun fact :</div>
                                                    Prefers dogs over cats. Have 5 currently.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--/About Sec-->
                    <section id="portfolio_sec" class="profile-sec sec-pad-top-sm">
                        <h2 class="mb-30">what i do</h2>
                        <div class="row">
                            <div class="col-md-4 col-xs-12 mb-30">
                                <div class="mdl-card mdl-shadow--2dp text-center">
                                    <i class="zmdi zmdi-code font-blue profile-icon"></i>
                                    <h4 class="mb-15">Developer</h4>
                                    <p>
                                        I am a Software Engineer with over 10 years of web and
                                        application development work experience, specializing
                                        in the design, development, and support of Laravel
                                        applications. I have a strong background in backend
                                        development and have successfully completed multiple projects
                                        involving finance, tax preparation, AI, and ecommerce.
                                        I am also highly proficient in SQL and data management principles. able
                                        to work effectively in both individual and team
                                        environments and am committed to delivering high-quality
                                        results.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 mb-30">
                                <div class="mdl-card mdl-shadow--2dp text-center">
                                    <i class="zmdi zmdi-book font-yellow profile-icon"></i>
                                    <h4 class="mb-15">Learner</h4>
                                    <p>
                                        I am constantly learning and growing in my field. I am
                                        passionate about creating innovative solutions and using
                                        technology to solve real-world problems. I have a strong
                                        foundation in programming languages such as PHP, Java,
                                        and Python, and am always eager to expand my skillset and take
                                        on new challenges. Whether I am working on a solo project
                                        or collaborating with a team, I thrive in a fast-paced and
                                        dynamic environment. I am excited to continue my career as
                                        a laravel developer and make a positive impact in the tech
                                        industry.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="interest_sec" class="interest-sec sec-pad-top-sm">
                        <h2 class="mb-30">interests</h2>
                        <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
                                <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                                    <i class="zmdi zmdi-tv"></i>
                                    <span>movie</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
                                <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                                    <i class="zmdi zmdi-radio"></i>
                                    <span>music</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
                                <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                                    <i class="zmdi zmdi-smartphone"></i>
                                    <span>gaming</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
                                <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                                    <i class="zmdi zmdi-library"></i>
                                    <span>reading</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
                                <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                                    <i class="zmdi zmdi-airplane"></i>
                                    <span>traveling</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="project_sec" class="blog-sec sec-pad-top-sm">
                        <h2 class="mb-30">Projects and Work</h2>
                        <div class="row" id="repo-card"><!--js will put data here--></div>
                    </section>
                    <section id="contact_sec" class="contact-sec sec-pad-top-sm">
                        <h2 class="mb-35">contact</h2>
                        <div class="row">
                            <div id="form_card_height" class="col-sm-12 mb-30">
                                <div class="mdl-card mdl-shadow--2dp text-center">
                                    <h4 class="mb-10 font-unsetcase">Find me on.</h4>
                                    <ul class="social-icons mt-10">
                                        <li>
                                            <a class="facebook-link"
                                                href="https://www.facebook.com/profile.php?id=100008966418246">
                                                <i id="tt6" class="zmdi zmdi-facebook" tabindex="0"></i>
                                                <div class="mdl-tooltip" data-mdl-for="tt6"
                                                    data-upgraded="MaterialTooltip"
                                                    style="left: 332px; margin-left: -34px; top: 545px">
                                                    facebook
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="linkedin-link"
                                                href="https://www.linkedin.com/in/matt-goldsworthy-69145916/">
                                                <i id="tt8" class="zmdi zmdi-linkedin" tabindex="0"></i>
                                                <div class="mdl-tooltip" data-mdl-for="tt8"
                                                    data-upgraded="MaterialTooltip"
                                                    style="
                                  left: 332px;
                                  margin-left: -30.5px;
                                  top: 568px;
                                ">
                                                    linkedin
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="instagram-link"
                                                href="https://www.instagram.com/matt.j.goldsworthy/">
                                                <i id="tt10" class="zmdi zmdi-instagram" tabindex="0"></i>
                                                <div class="mdl-tooltip" data-mdl-for="tt10"
                                                    data-upgraded="MaterialTooltip"
                                                    style="
                                  left: 454.933px;
                                  margin-left: -35px;
                                  top: 568px;
                                ">
                                                    instagram
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="github-link" href="https://www.github.com/kejek/">
                                                <i id="tt9" class="zmdi zmdi-github" tabindex="0"></i>
                                                <div class="mdl-tooltip" data-mdl-for="tt9"
                                                    data-upgraded="MaterialTooltip"
                                                    style="
                                  left: 393.467px;
                                  margin-left: -30px;
                                  top: 568px;
                                ">
                                                    github
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <footer class="footer-sec sec-pad-top-sm sec-pad-bottom text-center">
                        <h4>thank you for visiting.</h4>
                        <p class="mt-10">
                            Matthew Goldsworthy © 2023 All rights reserved.
                        </p>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="js/repo.js"></script>
</body>

</html>
