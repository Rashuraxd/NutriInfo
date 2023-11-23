<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Checkout example · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
/* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */




header{
  color: #2d2785;
}


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 32rem;
}

body {
  color: rgb(var(--bs-tertiary-color-rgb));
}

.btn-primary {
    --bs-btn-color: #fff;
    --bs-btn-bg: #13dfb2;
    --bs-btn-border-color: #13dfb2;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #13dfb2;
    --bs-btn-hover-border-color: #13dfb2;
    --bs-btn-focus-shadow-rgb: 49,132,253;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #13dfb2;
    --bs-btn-active-border-color: #13dfb2;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #13dfb2;
    --bs-btn-disabled-border-color: #13dfb2;
}

.btn-secondary {
  --bs-btn-color: #fff;
  --bs-btn-bg: #13dfb2;
  --bs-btn-border-color: #ffffff;
  --bs-btn-hover-color: #13dfb2;
  --bs-btn-hover-bg: #ffffff;
  --bs-btn-hover-border-color: #13dfb2;
  --bs-btn-focus-shadow-rgb: 130,138,145;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #13dfb2;
  --bs-btn-active-border-color: #13dfb2;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #6c757d;
  --bs-btn-disabled-border-color: #6c757d;
}

.btn-outline-primary {
  --bs-btn-color: #13dfb2;
  --bs-btn-border-color: #13dfb2;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #13dfb2;
  --bs-btn-hover-border-color: #13dfb2;
  --bs-btn-focus-shadow-rgb: 13,110,253;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #13dfb2;
  --bs-btn-active-border-color: #13dfb2;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #13dfb2;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #13dfb2;
  --bs-gradient: none;
}

.text-bg-primary {
  color: #fff!important;
  background-color: RGBA(45,39,133,var(--bs-bg-opacity,1))!important;
}
.btn-outline-success {
  --bs-btn-color: #ffffff;
  --bs-btn-border-color: #ffffff;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #13dfb2;
  --bs-btn-hover-border-color: #FFDD00;
  --bs-btn-focus-shadow-rgb: 25,135,84;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #FFDD00;
  --bs-btn-active-border-color: #FFDD00;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #FFDD00;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #FFDD00;
  --bs-gradient: none;
}


.container-fluid {
  padding: 10px;
  display: flex;
  flex-wrap: inherit;
  background-color:#13dfb2;
}
.container{
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  width: 100%;
  padding-right: calc(var(--bs-gutter-x) * .5);
  padding-left: calc(var(--bs-gutter-x) * .5);
  margin-right: auto;
  margin-left: auto;
}

.container-breadcrumb{
  padding-left:0.5rem;
  padding-top:0.5rem;
  padding-bottom: 0.5rem;
}

.navbar {
  --bs-navbar-padding-x: 0;
  --bs-navbar-padding-y: 0.5rem;
  --bs-navbar-color: rgba(var(--bs-emphasis-color-rgb), 0.65);
  --bs-navbar-hover-color: rgba(var(--bs-emphasis-color-rgb), 0.8);
  --bs-navbar-disabled-color: rgba(var(--bs-emphasis-color-rgb), 0.3);
  --bs-navbar-active-color: rgba(var(--bs-emphasis-color-rgb), 1);
  --bs-navbar-brand-padding-y: 0.3125rem;
  --bs-navbar-brand-margin-end: 1rem;
  --bs-navbar-brand-font-size: 1.25rem;
  --bs-navbar-brand-color: rgba(var(--bs-emphasis-color-rgb), 1);
  --bs-navbar-brand-hover-color: rgba(var(--bs-emphasis-color-rgb), 1);
  --bs-navbar-nav-link-padding-x: 0.5rem;
  --bs-navbar-toggler-padding-y: 0.25rem;
  --bs-navbar-toggler-padding-x: 0.75rem;
  --bs-navbar-toggler-font-size: 1.25rem;
  --bs-navbar-toggler-icon-bg: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e);
  --bs-navbar-toggler-border-color: rgba(var(--bs-emphasis-color-rgb), 0.15);
  --bs-navbar-toggler-border-radius: var(--bs-border-radius);
  --bs-navbar-toggler-focus-width: 0.25rem;
  --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding:0;
}
.form-control {
  display: block;
  width: 100%;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: var(--bs-body-color);
  background-color: #13dfb2;
  background-clip: padding-box;
  border: var(--bs-border-width) solid var(--bs-border-color);
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border-radius: var(--bs-border-radius);
  transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

[data-bs-theme=dark] {
  color-scheme: dark;
  --bs-body-color: #adb5bd;
  --bs-body-color-rgb: 173,181,189;
  --bs-body-bg: #fff;
  --bs-body-bg-rgb: 33,37,41;
  --bs-emphasis-color: #fff;
  --bs-emphasis-color-rgb: 255,255,255;
  --bs-secondary-color: rgba(173, 181, 189, 0.75);
  --bs-secondary-color-rgb: 173,181,189;
  --bs-secondary-bg: #343a40;
  --bs-secondary-bg-rgb: 52,58,64;
  --bs-tertiary-color: rgba(173, 181, 189, 0.5);
  --bs-tertiary-color-rgb: 173,181,189;
  --bs-tertiary-bg: #2b3035;
  --bs-tertiary-bg-rgb: 43,48,53;
  --bs-primary-text-emphasis: #6ea8fe;
  --bs-secondary-text-emphasis: #a7acb1;
  --bs-success-text-emphasis: #75b798;
  --bs-info-text-emphasis: #6edff6;
  --bs-warning-text-emphasis: #ffda6a;
  --bs-danger-text-emphasis: #ea868f;
  --bs-light-text-emphasis: #f8f9fa;
  --bs-dark-text-emphasis: #dee2e6;
  --bs-primary-bg-subtle: #031633;
  --bs-secondary-bg-subtle: #161719;
  --bs-success-bg-subtle: #051b11;
  --bs-info-bg-subtle: #032830;
  --bs-warning-bg-subtle: #332701;
  --bs-danger-bg-subtle: #2c0b0e;
  --bs-light-bg-subtle: #343a40;
  --bs-dark-bg-subtle: #1a1d20;
  --bs-primary-border-subtle: #084298;
  --bs-secondary-border-subtle: #41464b;
  --bs-success-border-subtle: #0f5132;
  --bs-info-border-subtle: #087990;
  --bs-warning-border-subtle: #997404;
  --bs-danger-border-subtle: #842029;
  --bs-light-border-subtle: #495057;
  --bs-dark-border-subtle: #343a40;
  --bs-link-color: #6ea8fe;
  --bs-link-hover-color: #8bb9fe;
  --bs-link-color-rgb: 110,168,254;
  --bs-link-hover-color-rgb: 139,185,254;
  --bs-code-color: #e685b5;
  --bs-border-color: #ffffff;
  --bs-border-color-translucent: rgba(255, 255, 255, 0.15);
  --bs-form-valid-color: #75b798;
  --bs-form-valid-border-color: #75b798;
  --bs-form-invalid-color: #ea868f;
  --bs-form-invalid-border-color: #ea868f;
}


.n

/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
/* rtl:begin:ignore */
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}
/* rtl:end:ignore */


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
/* rtl:begin:remove */
.featurette-heading {
  letter-spacing: -.05rem;
}

/* rtl:end:remove */

/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}

.form-check-input:checked {
  background-color: #2d2785;
  border-color: #2d2785;
}

:root, [data-bs-theme=light] {
  --bs-blue: #0d6efd;
  --bs-indigo: #6610f2;
  --bs-purple: #6f42c1;
  --bs-pink: #d63384;
  --bs-red: #dc3545;
  --bs-orange: #fd7e14;
  --bs-yellow: #ffc107;
  --bs-green: #198754;
  --bs-teal: #20c997;
  --bs-cyan: #0dcaf0;
  --bs-black: #000;
  --bs-white: #fff;
  --bs-gray: #6c757d;
  --bs-gray-dark: #343a40;
  --bs-gray-100: #f8f9fa;
  --bs-gray-200: #e9ecef;
  --bs-gray-300: #dee2e6;
  --bs-gray-400: #ced4da;
  --bs-gray-500: #adb5bd;
  --bs-gray-600: #6c757d;
  --bs-gray-700: #495057;
  --bs-gray-800: #343a40;
  --bs-gray-900: #212529;
  --bs-primary: #0d6efd;
  --bs-secondary: #6c757d;
  --bs-success: #198754;
  --bs-info: #0dcaf0;
  --bs-warning: #ffc107;
  --bs-danger: #dc3545;
  --bs-light: #f8f9fa;
  --bs-dark: #212529;
  --bs-primary-rgb: 45,39,133;
  --bs-secondary-rgb: 108,117,125;
  --bs-success-rgb: 25,135,84;
  --bs-info-rgb: 13,202,240;
  --bs-warning-rgb: 255,193,7;
  --bs-danger-rgb: 220,53,69;
  --bs-light-rgb: 248,249,250;
  --bs-dark-rgb: 33,37,41;
  --bs-primary-text-emphasis: #052c65;
  --bs-secondary-text-emphasis: #2b2f32;
  --bs-success-text-emphasis: #0a3622;
  --bs-info-text-emphasis: #055160;
  --bs-warning-text-emphasis: #664d03;
  --bs-danger-text-emphasis: #58151c;
  --bs-light-text-emphasis: #495057;
  --bs-dark-text-emphasis: #495057;
  --bs-primary-bg-subtle: #cfe2ff;
  --bs-secondary-bg-subtle: #e2e3e5;
  --bs-success-bg-subtle: #d1e7dd;

}

.dropdown-item {
  display: block;
  width: 100%;
  padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
  clear: both;
  font-weight: 400;
  color: #13dfb2;
  text-align: inherit;
  text-decoration: none;
  white-space: nowrap;
  background-color: transparent;
  border: #13dfb2;
  border-radius: var(--bs-dropdown-item-border-radius,0);
}

.dropdown-item:active {
  color: var(--bs-dropdown-link-active-color);
  text-decoration: none;
  background-color: #13dfb2;
}

.dropdown-menu {
  --bs-dropdown-zindex: 1000;
  --bs-dropdown-min-width: 10rem;
  --bs-dropdown-padding-x: 0;
  --bs-dropdown-padding-y: 0.5rem;
  --bs-dropdown-spacer: 0.125rem;
  --bs-dropdown-font-size: 1rem;
  --bs-dropdown-color: var(--bs-body-color);
  --bs-dropdown-bg: var(--bs-body-bg);
  --bs-dropdown-border-color: #13dfb2;
  --bs-dropdown-border-radius: var(--bs-border-radius);
  --bs-dropdown-border-width: var(--bs-border-width);
  --bs-dropdown-inner-border-radius: calc(var(--bs-border-radius) - var(--bs-border-width));
  --bs-dropdown-divider-bg: var(--bs-border-color-translucent);
  --bs-dropdown-divider-margin-y: 0.5rem;
  --bs-dropdown-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  --bs-dropdown-link-color: var(--bs-body-color);
  --bs-dropdown-link-hover-color: #ffffff;;
  --bs-dropdown-link-hover-bg: #13dfb2;
  --bs-dropdown-link-active-color: #fff;
  --bs-dropdown-link-active-bg: #13dfb2;
  --bs-dropdown-link-disabled-color: var(--bs-tertiary-color);
  --bs-dropdown-item-padding-x: 1rem;
  --bs-dropdown-item-padding-y: 0.25rem;
  --bs-dropdown-header-color: #6c757d;
  --bs-dropdown-header-padding-x: 1rem;
  --bs-dropdown-header-padding-y: 0.5rem;
  position: absolute;
  z-index: var(--bs-dropdown-zindex);
  display: none;
  min-width: var(--bs-dropdown-min-width);
  padding: var(--bs-dropdown-padding-y) var(--bs-dropdown-padding-x);
  margin: 0;
  font-size: var(--bs-dropdown-font-size);
  color: var(--bs-dropdown-color);
  text-align: left;
  list-style: none;
  background-color: var(--bs-dropdown-bg);
  background-clip: padding-box;
  border: var(--bs-dropdown-border-width) solid var(--bs-dropdown-border-color);
  border-radius: var(--bs-dropdown-border-radius);
}

.btn-outline-success {
  --bs-btn-color: #ffffff;
  --bs-btn-border-color: #ffffff;
  --bs-btn-hover-color: #2d2785;
  --bs-btn-hover-bg: #ffffff;
  --bs-btn-hover-border-color: #ffffff;
  --bs-btn-focus-shadow-rgb: 25,135,84;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #2d2785;
  --bs-btn-active-border-color: #2d2785;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #FFDD00;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #FFDD00;
  --bs-gradient: none;
}

.form-control {
  display: block;
  width: 100%;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #13dfb2;
  background-color: #ffffff;
  background-clip: padding-box;
  border: var(--bs-border-width) solid var(--bs-border-color);
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border-radius: var(--bs-border-radius);
  transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

[data-bs-theme=dark] {
  /* color-scheme: dark; */
  /* --bs-body-color: #adb5bd; */
  /* --bs-body-color-rgb: 173,181,189; */
  --bs-body-bg: #fff;
  --bs-body-bg-rgb: 33,37,41;
  --bs-emphasis-color: #fff;
  --bs-emphasis-color-rgb: 255,255,255;
  --bs-secondary-color: #fff;
  --bs-secondary-color-rgb: 173,181,189;
  --bs-secondary-bg: #343a40;
  --bs-secondary-bg-rgb: 52,58,64;
  --bs-tertiary-color: rgba(173, 181, 189, 0.5);
  --bs-tertiary-color-rgb: 173,181,189;
  --bs-tertiary-bg: #2b3035;
  --bs-tertiary-bg-rgb: 43,48,53;
  --bs-primary-text-emphasis: #6ea8fe;
  --bs-secondary-text-emphasis: #a7acb1;
  --bs-success-text-emphasis: #75b798;
  --bs-info-text-emphasis: #6edff6;
  --bs-warning-text-emphasis: #ffda6a;
  --bs-danger-text-emphasis: #ea868f;
  --bs-light-text-emphasis: #f8f9fa;
  --bs-dark-text-emphasis: #dee2e6;
  --bs-primary-bg-subtle: #031633;
  --bs-secondary-bg-subtle: #161719;
  --bs-success-bg-subtle: #051b11;
  --bs-info-bg-subtle: #032830;
  --bs-warning-bg-subtle: #332701;
  --bs-danger-bg-subtle: #2c0b0e;
  --bs-light-bg-subtle: #343a40;
  --bs-dark-bg-subtle: #1a1d20;
  --bs-primary-border-subtle: #084298;
  --bs-secondary-border-subtle: #41464b;
  --bs-success-border-subtle: #0f5132;
  --bs-info-border-subtle: #087990;
  --bs-warning-border-subtle: #997404;
  --bs-danger-border-subtle: #842029;
  --bs-light-border-subtle: #495057;
  --bs-dark-border-subtle: #343a40;
  --bs-link-color: #6ea8fe;
  --bs-link-hover-color: #8bb9fe;
  --bs-link-color-rgb: 110,168,254;
  --bs-link-hover-color-rgb: 139,185,254;
  --bs-code-color: #e685b5;
  --bs-border-color: #ffffff;
  --bs-border-color-translucent: rgba(255, 255, 255, 0.15);
  --bs-form-valid-color: #75b798;
  --bs-form-valid-border-color: #75b798;
  --bs-form-invalid-color: #ea868f;
  --bs-form-invalid-border-color: #ea868f;
}

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-primary {
      --bs-btn-color: #000000;
      --bs-btn-bg: #13dfb2;
      --bs-btn-border-color: ##13dfb2;
      --bs-btn-hover-color: #000000;
      --bs-btn-hover-bg: #13c7a0;
      --bs-btn-hover-border-color: #0a58ca;
      --bs-btn-focus-shadow-rgb: 49,132,253;
      --bs-btn-active-color: #fff;
      --bs-btn-active-bg: #0a58ca;
      --bs-btn-active-border-color: #0a53be;
      --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
      --bs-btn-disabled-color: #fff;
      --bs-btn-disabled-bg: #0d6efd;
      --bs-btn-disabled-border-color: #0d6efd;
      }

      .w-100 {
    width: 20%!important;
    }   

      .btn-secondary {
    --bs-btn-color: #000000;
    --bs-btn-bg: #fff;
    --bs-btn-border-color: #6c757d;
    --bs-btn-hover-color: #000000;
    --bs-btn-hover-bg: #13c7a0;
    --bs-btn-hover-border-color: #565e64;
    --bs-btn-focus-shadow-rgb: 130,138,145;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #565e64;
    --bs-btn-active-border-color: #51585e;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #6c757d;
    --bs-btn-disabled-border-color: #6c757d;
    }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }


      .botoes{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

      .conteudo{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
      }

      .arquivos{
        display: flex;
        align-items: center;
        flex-direction: column;
        padding: 5%;
      }

      .titulo{
        align-items: center;
        justify-content: center;
      }

      .conteudo{
        margin-top: 10%;
        display: flex;
        border: #000000 solid;
        padding: 5%;

      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
  </head>
  <body class="bg-body-tertiary">
  <header data-bs-theme="dark">
        <nav class="navbar navbar-expand-md fixed-top">
          <div class="container-fluid align-items-center">
            <a class="navbar-brand" href="">
              <img class="d-block mb-6" src="" alt="" width="100" height="50">
            </a>
          <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Menu
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="">Clientes</a>
                  <a class="dropdown-item" href="">Privacidade</a>
              </div>
          </div>
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
               
            </li>
        </ul>
            <form class="d-flex mx-auto" role="search">
              <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" style="width: 800px;">
              <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
            <div class="d-flex align-items-center">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
      
              <div class="d-flex align-items-center">
      
                  <ul class="navbar-nav me-auto mb-2 mb-md-0">
                      <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="">
                              <img src="usuario_branco.png" alt="Ícone de Login" width="40" height="40" >
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      
        </nav>
        
      </header>
<div class="container">
  <main>
    <div class="conteudo">
      <div>
        <h4 class="mb-3 titulo">Cadastro Cliente</h4>
        <form class="needs-validation" name="cadastroUAN" action="cadastraruan.php" method="POST" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nome Fantasia<span class="text-body-secondary">*</span></label>
              <input type="text" class="form-control" name="nomeFantasiaUAN" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Inserir Nome Fantasia.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Razão social<span class="text-body-secondary">*</span></label>
              <input type="text" class="form-control" name="razaoSocialUAN" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Inserir Razão Social.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">CNPJ</label><span class="text-body-secondary">*</span></label>
              <input type="text" class="form-control" name="CNPJUAN" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Inserir CNPJ.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="lastName" class="form-label">Telefone<span class="text-body-secondary">*</span></label>
              <input type="text" class="form-control" name="telefoneUAN" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Inserir telefone.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Endereço<span class="text-body-secondary">*</span></label>
              <input type="text" class="form-control" name="enderecoUAN" id="address" placeholder="Rua, numero" required>
              <div class="invalid-feedback">
                Inserir endereço.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Bairro<span class="text-body-secondary">*</span></label>
              <input type="text" class="form-control" name="bairroUAN" id="address2" placeholder="">
              <div class="invalid-feedback">
                Inserir Bairro.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Cidade</label><span class="text-body-secondary">*</span></label>
              <input type="text" class="form-control" name="cidadeUAN" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Inserir cidade.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="lastName" class="form-label">Estado<span class="text-body-secondary">*</span></label>
              <input type="text" class="form-control" name="estadoUAN" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Inserir estado.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">E-mail<span class="text-body-secondary">*</span></label>
              <input type="text" class="form-control" name="emailUAN" id="address" placeholder="" required>
              <div class="invalid-feedback">
                Inserir e-mail.
              </div>
            </div>
        </form>
      </div>
    </div>
    <div class="arquivos">
      <form>
      <div>
        <h4 class="mb-3">Cardapio</h4>
        <input type="file">
        <div class="col-sm-6">
          <label for="lastName" class="form-label">Data</label></label>
          <input type="text" class="form-control" name="dataCardapioUAN" id="lastName" placeholder="" value="">
        </div>
      </div>
      <div>
        <h4 class="mb-3">Protocolo</h4>
        <input type="file">
        <div class="col-sm-6">
          <label for="lastName" class="form-label">Data</label></label>
          <input type="text" class="form-control" name="dataProtocoloUAN" id="lastName" placeholder="" value="">
        </div>
      </div>
      <a href=""><button type="button" class="w-100 btn btn-lg btn-outline-primary " name = "enviar" value = "Envia">Concluir</button></a>
      </form>
    </div>
    
  </div>
  
  </main>
  <footer class="my-5 pt-5 text-body-secondary text-center text-small">
<p class="mb-1">&copy; 2023 Nutrinfo</p>
<ul class="list-inline">
  <li class="list-inline-item"><a href="../telaPrivacidade/privacidadeatt.html" style="color: #13dfb2 ;">Privacidade</a></li>
  <li class="list-inline-item"><a href="../telaPrivacidade/privacidadeatt.html" style="color: #13dfb2 ;">Termos</a></li>
  <li class="list-inline-item"><a href="../telaPrivacidade/privacidadeatt.html" style="color: #13dfb2 ;">Suporte</a></li>
</ul>
</footer>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="checkout.js"></script></body>
</html>
