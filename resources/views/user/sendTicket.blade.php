<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/basic.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/basic.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    @toastr_css
    <title>تیکت</title>
</head>
<style>
    body {
        direction: rtl;
        text-align: right;
        font-family: 'Vazir', sans-serif;
        overflow-x: hidden;
    }

    .select2-container--default .select2-selection--single {
        background-color: #fff;
        border-radius: 3px;
        height: 37px;
        border: 2px solid orange;
        border-left-style: none;
        border-right-style: none;
        border-top-style: none;
        font-size: 14px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 30px;
        position: absolute;
        top: 3px;
        left: 1px;
        width: 20px;
        float: left;
    }

    .back-to-top {
        cursor: pointer;
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
    }

    #button {
        display: inline-block;
        background-color: #FF9800;
        width: 50px;
        height: 50px;
        text-align: center;
        border-radius: 4px;
        position: fixed;
        bottom: 30px;
        right: 30px;
        transition: background-color .3s, opacity .5s, visibility .5s;
        opacity: 0;
        visibility: hidden;
        z-index: 1000;
    }

    #button::after {
        content: "\f077";
        font-family: FontAwesome;
        font-weight: normal;
        font-style: normal;
        font-size: 2em;
        line-height: 50px;
        color: #fff;
    }

    #button:hover {
        cursor: pointer;
        background-color: #333;
    }

    #button:active {
        background-color: #555;
    }

    #button.show {
        opacity: 1;
        visibility: visible;
    }
    /* Styles for the content section */

    .content {
        width: 77%;
        margin: 50px auto;
        font-family: 'Merriweather', serif;
        font-size: 17px;
        color: #6c767a;
        line-height: 1.9;
    }

    @media (min-width: 500px) {
        .content {
            width: 43%;
        }
        #button {
            margin: 30px;
        }
    }

    .content h1 {
        margin-bottom: -10px;
        color: #03a9f4;
        line-height: 1.5;
    }

    .content h3 {
        font-style: italic;
        color: #96a2a7;
    }

    /***** منو *****/

    .dropdown-toggle::after {
        margin-right: 2px !important;
    }

    .drpitm {
        margin-top: 3px;
        /*margin-bottom: 2px;*/
        padding-right: 5px;
        border-bottom: 1px solid #cbcbcb
    }

    .dropp {
        width: auto;
        margin-top: 8px;
    }

    @media (max-width: 768px) {
        .dropp {
            width: 145px;
            margin-top: 10px;
        }
    }
    /*@media (max-width: 400px){*/
    /*    .dropp{*/
    /*        width: 50px;*/
    /*        margin-top: 10px;*/
    /*    }*/
    /*}*/

    .dropdown1 a:hover {
        background-color: inherit;
        color: inherit;
    }

    .docme {
        font-size: 31px;
        color: rgb(87, 87, 87)
    }

    .dropdown-menu {
        width: 100%;
        background-color: #f0f0f0;
        border: none;
        text-align: right;
        font-size: 13px;
    }
    /*.dropdown-item {*/
    /*    border-bottom: 1px dashed rgb(182, 182, 182);*/
    /*}*/

    .navb {
        color: black;
        margin-right: 0;
    }

    .cnav {
        background-color: #ffaa0f;
    }

    .navb:hover {
        color: rgb(126, 126, 126);
    }

    .menubala {
        background-color: #E1E1E1;
        position: relative;
        border-bottom: 1px solid #e1e1e1;
        box-shadow: 0 3px 4px 0 rgb(0 0 0 / 28%);
        position: fixed;
        z-index: 10000;
        top: 0;
        /*margin-bottom: 80px !important;*/
    }

    .navmenulog {
        width: 75px;
        height: 60px;
    }
    /* .vorod {
    margin-top: 9%;
}

@media (min-width:768px) {

    .vorod {
        margin-bottom: 20%;
    }
} */

    .icovord12 {
        font-size: 11px;
        color: rgb(0, 0, 0);
        padding: 0px;
    }

    @media (min-width:768px) {
        .navbar-nav .nav-link {
            font-size: 11px;
        }
        /*.navmenulog {*/
        /*    width: 145px;*/
        /*    height: auto;*/
        /*    margin-right: 25px;*/
        /*}*/
        .nav-item {
            display: flex;
        }
        .nav-link {
            display: flex;
            align-items: center;
            white-space: nowrap;
            text-overflow: ellipsis;
            cursor: pointer;
        }
        .icovord {
            font-size: 13px;
            color: rgb(0, 0, 0);
            padding: 0px;
        }
        .icovords {
            font-size: 11px;
            color: rgb(0, 0, 0);
            padding: 0px;
        }
        .vorod {
            font-size: 10px;
            padding: 0px;
        }
    }

    @media (min-width:992px) {
        .navbar-nav .nav-link {
            font-size: 14px;
        }
        /*.navmenulog {*/
        /*    width: 190px;*/
        /*    height: auto;*/
        /*}*/
        .vorod {
            font-size: 13px;
            padding-right: 5px;
        }
        .nav-item {
            display: flex;
        }
        .nav-link {
            display: flex;
            align-items: center;
            white-space: nowrap;
            text-overflow: ellipsis;
            cursor: pointer;
        }
        .icovord {
            font-size: 16px;
            color: rgb(0, 0, 0);
            padding: 5px;
        }
        .icovords {
            font-size: 14px;
            color: rgb(0, 0, 0);
            padding: 5px;
        }
    }

    @media (min-width:1200px) {
        .navbar-nav .nav-link {
            font-size: 14px;
        }
        /*.navmenulog {*/
        /*    width: 70px;*/
        /*    height: 55px;*/
        /*}*/
        .vorod {
            font-size: 14px;
            padding-right: 10px;
        }
        .nav-item {
            display: flex;
        }
        .nav-link {
            display: flex;
            align-items: center;
            white-space: nowrap;
            text-overflow: ellipsis;
            cursor: pointer;
        }
        .icovord {
            font-size: 18px;
            color: rgb(0, 0, 0);
            padding: 10px;
        }
        .icovords {
            font-size: 16px;
            color: rgb(0, 0, 0);
            padding: 10px;
        }
    }

    @media (max-width:767px) {
        .menubala {
            background-color: #E1E1E1;
            position: relative;
            border-bottom: 1px solid #e1e1e1;
            box-shadow: 0 3px 4px 0 rgb(0 0 0 / 28%);
            position: fixed;
            z-index: 10000;
        }
        .navbar-nav .nav-link {
            font-size: 12px;
        }
        .menubala .nav-item {
            border-bottom: 1px solid rgb(182, 182, 182)
        }
        /*.navmenulog {*/
        /*    width: 150px;*/
        /*    height: auto;*/
        /*}*/
        .docme {
            font-size: 20px;
            color: rgb(87, 87, 87)
        }
        .vorod {
            font-size: 12px;
            padding-right: 10px;
        }
        .icovord {
            font-size: 16px;
            color: rgb(0, 0, 0);
            padding: 10px;
        }
        .icovords {
            font-size: 14px;
            color: rgb(0, 0, 0);
            padding: 10px;
        }
        /* .btn-log {
        box-shadow: 1px 3px 5px #888888;
        background-color: rgb(255, 182, 45);
        border-radius: 5px;
    } */
    }

    @media (max-width:700px) {
        .navbar-nav .nav-link {
            font-size: 10px;
        }
        .menubala .nav-item {
            border-bottom: 1px solid rgb(182, 182, 182)
        }
        /*.navmenulog {*/
        /*    width: 110px;*/
        /*    height: auto;*/
        /*}*/
        .docme {
            font-size: 18px;
            color: rgb(87, 87, 87)
        }
        .vorod {
            font-size: 10px;
        }
        .icovord {
            font-size: 13px;
            color: rgb(0, 0, 0);
        }
        .icovords {
            font-size: 11px;
            color: rgb(0, 0, 0);
        }
    }

    @media (max-width:620px) {
        .navbar-nav .nav-link {
            font-size: 10px;
        }
        .menubala .nav-item {
            border-bottom: 1px solid rgb(182, 182, 182)
        }
        .navmenulog {
            width: 66px;
            height: 51px;
        }
        .docme {
            font-size: 18px;
            color: rgb(87, 87, 87)
        }
        .vorod {
            font-size: 10px;
        }
        .icovord {
            font-size: 13px;
            color: rgb(0, 0, 0);
        }
        .icovords {
            font-size: 11px;
            color: rgb(0, 0, 0);
        }
    }

    @media (max-width:480px) {
        .navbar-nav .nav-link {
            font-size: 10px;
        }
        .menubala .nav-item {
            border-bottom: 1px solid rgb(182, 182, 182)
        }
        .navmenulog {
            width: 60px;
            height: 40px;
        }
        .docme {
            font-size: 18px;
            color: rgb(87, 87, 87)
        }
        .vorod {
            font-size: 10px;
            padding-right: 0;
        }
        .icovord {
            font-size: 13px;
            color: rgb(0, 0, 0);
            padding: 0;
        }
        .icovords {
            font-size: 11px;
            color: rgb(0, 0, 0);
            padding: 0;
        }
    }

    @media (max-width:410px) {
        .navbar-nav .nav-link {
            font-size: 9px;
        }
        .menubala .nav-item {
            border-bottom: 1px solid rgb(182, 182, 182);
        }
        .navmenulog {
            width: 55px;
            height: 40px;
        }
        .docme {
            font-size: 17px;
            color: rgb(87, 87, 87)
        }
        .vorod {
            font-size: 9px;
        }
        .icovord {
            font-size: 13px;
            color: rgb(0, 0, 0);
        }
        .icovords {
            font-size: 11px;
            color: rgb(0, 0, 0);
        }
    }

    @media (max-width:377px) {
        .navbar-nav .nav-link {
            font-size: 8px;
        }
        .menubala .nav-item {
            border-bottom: 1px solid rgb(182, 182, 182);
            /* background-color: #007BFF;
        width:100px; */
        }
        /*.navmenulog {*/
        /*    width: 81px;*/
        /*    height: auto;*/
        /*}*/
        .docme {
            font-size: 16px;
            color: rgb(87, 87, 87)
        }
        .vorod {
            font-size: 8px;
        }
        .dropdown-menu {
            /*font-size: 8px;*/
        }
        .icovord {
            font-size: 13px;
            color: rgb(0, 0, 0);
        }
        .icovords {
            font-size: 11px;
            color: rgb(0, 0, 0);
        }
    }

    /************ سایدبار**********/

    .row1 {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: 0;
        margin-left: 0;
    }

    .btnslide {
        position: relative;
        /*top: 1px;*/
        right: 14px;
        height: 33px;
        width: 33px;
        background: #ffAA0f;
        border-radius: 3px;
        cursor: pointer;
        /*transition: right 0.4s ease;*/
        z-index: 100;
        bottom: 4px;
    }

    .btnslide.click {
        right: 14px;
    }

    .btnslide span {
        color: white;
        font-size: 16px;
        line-height: 34px;
        margin-right: 8px;
    }

    .btnslide.click span:before {
        /*content: '\f00d'*/
    }

    @media (max-width: 576px) {
        .btnslide {
            position: relative;
            /*top: 1px;*/
            right: 14px;
            height: 21px;
            width: 21px;
            background: #ffAA0f;
            border-radius: 3px;
            cursor: pointer;
            /*transition: right 0.4s ease;*/
            z-index: 100;
            /*bottom: 10px;*/
        }
        .btnslide span {
            color: white;
            font-size: 12px;
            line-height: 21px;
            margin-right: 4px;
        }
    }

    @media (max-width: 1200px) {
        .btnslide {
            position: relative;
            /*top: 1px;*/
            right: 14px;
            height: 30px;
            width: 30px;
            background: #ffAA0f;
            border-radius: 3px;
            cursor: pointer;
            /*transition: right 0.4s ease;*/
            z-index: 100;
            /*bottom: 10px;*/
        }
        .btnslide span {
            color: white;
            font-size: 15px;
            line-height: 31px;
            margin-right: 7px;
        }
    }

    .sidebar {
        position: absolute;
        width: 250px;
        height: 700px;
        right: -250px;
        background: #f4f4f4;
        transition: right 0.4s ease-in-out;
        border-radius: 4px;
        box-shadow: 0px 1px 5px rgba(116, 116, 116, 0.404);
        z-index: 100;
        margin-bottom: 10px;
        /*top: 130px;*/
    }

    .panheigh {
        height: 1000px !important;
    }

    .sidebar.show {
        right: 0px
    }

    .sidebar .text1 {
        color: white;
        font-size: 19px;
        font-weight: 600;
        line-height: 65px;
        text-align: center;
        background: #B96B00;
        letter-spacing: 1px
    }

    .feat-show {
        transition: all 0.5s
    }

    .contentslide {
        position: relative;
        top: 44%;
        left: 45%;
        transform: translate(-50%, -50%);
        color: #202020;
        z-index: 1;
    }

    .ftntbltara {
        font-size: 19px;
        font-weight: 600;
    }

    .padtbltara {}

    @media (max-width: 1200px) {
        .padtbltara {
            padding-left: 0;
            padding-right: 0;
        }
        .contentslide {
            position: relative;
            top: 47%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #202020;
            z-index: 1;
            overflow-x: hidden;
        }
    }

    @media (max-width: 1200px) {
        .contentslide {
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #202020;
            z-index: 1;
            overflow-x: hidden;
        }
    }

    @media (max-width: 768px) {
        .panheigh {
            height: 1000px;
        }
        .contentslide {
            left: 48%;
        }
    }

    @media (max-width: 576px) {
        .ftntbltara {
            font-size: 15px;
            font-weight: 600;
        }
        .sidebar {
            position: absolute;
            width: 100%;
            height: 1000px;
            right: -230px;
            border-radius: 4px;
            box-shadow: 0px 1px 5px rgba(116, 116, 116, 0.404);
            top: 56px;
        }
        .btnslide.click {
            right: 4px;
        }
        .btnslide {
            right: 4px;
        }
        .contentslide {
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #202020;
            z-index: 1;
            overflow-x: hidden;
        }
    }

    .sidebar a,
    .dropdown-btn,
    .btn100 {
        padding: 8px 6px 9px 11px;
        text-decoration: none;
        font-size: 13px;
        color: rgb(0, 0, 0);
        display: block;
        border-bottom: solid 1px rgb(208, 208, 208);
        background: none;
        border-top: hidden;
        border-left: hidden;
        border-right: hidden;
        width: 100%;
        text-align: right;
        cursor: pointer;
        outline: none;
    }

    .dropdown-btn:focus {
        outline: 0;
    }

    .btn100:focus {
        outline: 0;
    }

    .sidebar a:hover,
    .dropdown-btn:hover {
        color: gray;
        background-color: #e2e2e2;
    }

    .sidebar a.active {
        color: red;
    }

    .dropdown-btn.active {
        color: red;
    }

    .active {
        background-color: #d9d8d8;
        color: gray;
        border: none;
    }

    .dropdown-container {
        display: none;
        background-color: rgb(234, 234, 234);
        font-size: 11px !important;
        padding: 7px 5px 8px 10px;
    }
    /*
    .fa-caret-down {
        float: left;
        padding-left: 15px;
        padding-top: 4px;
    } */

    .sideleft {
        margin-left: 0;
        padding: 1px 16px;
        height: 1000px;
        background-color: #F5E6CA;
        overflow-y: scroll;
    }

    .proindex {
        margin-top: 5%;
        border-radius: 1rem;
        height: 84%;
        width: 90%;
        background-color: #ffffff;
        justify-content: center;
        margin-right: 6%;
        margin-bottom: 5%;
    }

    .is {
        font-size: 16px;
        color: rgbrgb(231, 231, 231);
    }

    .is2 {
        color: black;
    }

    .is2 :hover {
        background-color: #e2e2e2;
        color: gray;
    }

    @media (max-width: 576px) {
        .imguser {
            margin-left: 10px;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            border: 1px solid #c4c4c4;
        }
        .imguser1 {
            width: 35px;
            height: 35px;
            border-radius: 50%;
        }
        .imguser2 {
            width: 19px;
            height: 19px;
            border-radius: 50%;
        }
        .sidenav a,
        .dropdown-btn {
            font-size: 13px;
            padding: 7px 4px 8px 10px;
        }
    }

    @media (min-width: 576px) {
        .sidenav a,
        .dropdown-btn {
            font-size: 11px;
        }
        .imguser {
            width: 22px;
            height: 22px;
            border-radius: 50%;
        }
        .imguser1 {
            width: 17px;
            height: 17px;
            border-radius: 50%;
        }
        .imguser2 {
            width: 21px;
            height: 21px;
            border-radius: 50%;
        }
        /* .fa-caret-down {
            float: left;
            padding-left: 18px;
            padding-top: 5px;
        } */
        .is {
            font-size: 14px;
        }
    }

    @media (min-width: 768px) {
        .is {
            font-size: 18px;
            color: rgbrgb(231, 231, 231);
        }
        /* .fa-caret-down {
            float: left;
            padding-left: 15px;
            padding-top: 4px;
        } */
        .imguser {
            width: 45px;
            height: 45px;
            border-radius: 50%;
        }
        .imguser1 {
            width: 35px;
            height: 35px;
            border-radius: 50%;
        }
        .imguser2 {
            width: 28px;
            height: 28px;
            border-radius: 50%;
        }
        .sidenav a,
        .dropdown-btn {
            font-size: 16px;
        }
    }
    /* @media screen and (max-height: 450px) {
.sidebar {
    padding-top: 14px;
}

.sidebar a {
    font-size: 18px;
}
} */
    /*

.proindex1 {
    background-color: #F9B208;
    width: 100%;
    height: 100%;
}

.ptext {
    font-size: 19px;
    text-align: center;
    margin-top: 4px;
    margin-bottom: 3px;
}

.puser {
    margin-right: 7px;
    display: inline;
}

.imguser {
    width: 45px;
    height: 45px;
    border-radius: 50%;
}

.icondaste {
    width: 40px;
    height: 50px;
    padding: 5px;

}

.sidenav {
    direction: rtl;
    width: 100%;
    z-index: 1;
    top: 0;
    background-color: #ffcd70;
    overflow-x: hidden;
    overflow-y: hidden;
    float: right;
    font-weight: 300;
    height: 1000px;
    box-shadow: -1px 4px 8px #ffb62e;
}


.sidenav a,
.dropdown-btn {
    padding: 15px 10px 15px 16px;
    text-decoration: none;
    font-size: 17px;
    color: rgb(0, 0, 0);
    display: block;
    border: solid 1px rgb(136, 136, 136);
    background: none;
    border-top: hidden;
    border-left: hidden;
    border-right: hidden;
    width: 100%;
    text-align: right;
    cursor: pointer;
    outline: none;
}


.sidenav a:hover,
.dropdown-btn:hover {
    color: #f1f1f1;
    background-color: #ffc456;

}


.active {
    background-color: #ff9d15;
    color: white;
    border: none;
}

.dropdown-container {
    display: none;
    background-color: rgb(246, 211, 146);
    padding-right: 5px;
}


.fa-caret-down {
    float: left;
    padding-left: 15px;
    padding-top: 10px;
}


@media screen and (max-height: 450px) {
    .sidenav {
        padding-top: 14px;
    }

    .sidenav a {
        font-size: 18px;
    }
}

.sideleft {
    margin-left: 0;
    padding: 1px 16px;
    height: 1000px;
    background-color: #F5E6CA;
    overflow-y: scroll;
}

.proindex {
    margin-top: 5%;
    border-radius: 1rem;
    height: 84%;
    width: 90%;
    background-color: #ffffff;
    justify-content: center;
    margin-right: 6%;
    margin-bottom: 5%;
}

.is {
    font-size: 26px;
    color: rgbrgb(231, 231, 231);
}

@media (min-width: 576px) {

    .sidenav a,
    .dropdown-btn {
        font-size: 11px;

    }

    .imguser {
        width: 22px;
        height: 22px;
        border-radius: 50%;
    }

    .fa-caret-down {
        float: left;
        padding-left: 18px;
        padding-top: 11px;
    }

    .is {
        font-size: 21px;
    }
}

@media (min-width: 768px) {
    .is {
        font-size: 26px;
        color: rgbrgb(231, 231, 231);
    }

    .fa-caret-down {
        float: left;
        padding-left: 15px;
        padding-top: 10px;
    }

    .imguser {
        width: 45px;
        height: 45px;
        border-radius: 50%;
    }

    .sidenav a,
    .dropdown-btn {
        font-size: 16px;

    }
}

@media (max-width: 576px) {
    .imguser {
        margin-left: 10px;
    }

    .is {
        margin-right: 18%;
    }

    .sidenav a,
    .dropdown-btn {
        font-size: 13px;

    }
} */
    /**
  @media (max-width: 767.98px) {
    .sidenav {

      font-size: 36px;


    }
  }

  @media (max-width: 991.98px) {
    .sidenav {
      font-size: 63px;
    }
  }

  @media (min-width: 1100.98px) {
    .sidenav{
      font-size: 36px;

    }
  }
  **/
    /**
  @media (min-width: 575.98px) {
    .sidenav {

      display: block;
      height: 100%;
      overflow-x: auto;


    }
  }

  @media (max-width: 767.98px) {
    .sidenav {

      display: block;
      height: 100%;
      overflow-x: auto;


    }
  }

  @media (max-width: 991.98px) {
    .sidenav {
      display: block;
      height: 100%;
      overflow-x: auto;

    }
  }

  @media (min-width: 1100.98px) {
    .sidenav{
      display: block;
      height: 900px;
      overflow-x: auto;

    }
  }**/
    /* @media (max-width: 576px) {
    .sidenav {
        margin-right: 2%;
        margin-left: 2%;
        width: 98%;

    }
} */
    /***پنل کاربری***/

    .mnu {
        word-wrap: normal;
        white-space: nowrap;
    }

    .wrapper {
        min-height: 100%;
        overflow-x: hidden;
    }

    .wrapper {
        position: relative;
    }

    .layout-boxed .wrapper {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .layout-boxed .wrapper,
    .layout-boxed .wrapper:before {
        margin: 0 auto;
        max-width: 1250px;
    }

    @media (min-width: 768px) {
        .content-wrapper,
        .main-footer,
        .main-header {
            transition: margin-left 0.3s ease-in-out;
            margin-left: 250px;
            z-index: 3000;
        }
    }

    @media screen and (min-width: 768px) and (prefers-reduced-motion: reduce) {
        .content-wrapper,
        .main-footer,
        .main-header {
            transition: none;
        }
    }

    @media (min-width: 768px) {
        .sidebar-collapse .content-wrapper,
        .sidebar-collapse .main-footer,
        .sidebar-collapse .main-header {
            margin-left: 0;
        }
    }

    @media (max-width: 991.98px) {
        .content-wrapper,
        .content-wrapper:before,
        .main-footer,
        .main-footer:before,
        .main-header,
        .main-header:before {
            margin-left: 0;
        }
    }

    .content-wrapper {
        background: #f4f6f9;
    }

    .content-wrapper>.content {
        padding: 0 0.5rem;
    }
    /*.main-sidebar {*/
    /*    position: fixed;*/
    /*    top: 0;*/
    /*    left: 0;*/
    /*    bottom: 0;*/
    /*}*/

    .main-sidebar,
    .main-sidebar:before {
        /*transition: margin-left 0.3s ease-in-out, width 0.3s ease-in-out;*/
        width: 250px;
    }

    @media screen and (prefers-reduced-motion: reduce) {
        .main-sidebar,
        .main-sidebar:before {
            transition: none;
        }
    }

    .sidebar-collapse .main-sidebar,
    .sidebar-collapse .main-sidebar:before {
        margin-left: -250px;
    }

    @media (max-width: 991.98px) {
        .main-sidebar,
        .main-sidebar:before {
            box-shadow: none !important;
            margin-left: -250px;
        }
        .sidebar-open .main-sidebar,
        .sidebar-open .main-sidebar:before {
            margin-left: 0;
            width: 250px;
            /*top:56px;*/
        }
    }

    @media (max-width: 768px) {
        .main-sidebar,
        .main-sidebar:before {
            box-shadow: none !important;
            margin-left: -250px;
        }
        .sidebar-open .main-sidebar,
        .sidebar-open .main-sidebar:before {
            margin-left: 0;
            width: 100%;
            top: 56px
        }
    }

    .main-footer {
        padding: 15px;
        color: #555;
        border-top: 1px solid #dee2e6;
        background: #ffffff;
    }

    .content-header {
        padding: 15px 0.5rem;
    }

    .content-header h1 {
        font-size: 1.8rem;
        margin: 0;
    }

    .content-header .breadcrumb {
        margin-bottom: 0;
        padding: 0;
        background: transparent;
        line-height: 1.8rem;
    }

    .hold-transition .content-wrapper,
    .hold-transition .main-header,
    .hold-transition .main-footer {
        transition: none !important;
    }
    /*
 * Component: Main Header
 * ----------------------
 */

    .main-header {
        z-index: 1000;
    }

    .main-header .navbar-nav .nav-item {
        margin: 0;
    }

    .main-header .nav-link {
        position: relative;
        height: 2.5rem;
    }

    .main-header .navbar-nav[class*="-right"] .dropdown-menu {
        margin-top: -3px;
        right: 0;
        left: auto;
    }

    @media (max-width: 575.98px) {
        .main-header .navbar-nav[class*="-right"] .dropdown-menu {
            left: 0;
            right: auto;
        }
    }

    .navbar-img {
        height: 1.25rem;
        width: auto;
    }

    .navbar-badge {
        position: absolute;
        top: 9px;
        right: 5px;
        font-size: .6rem;
        font-weight: 300;
        padding: 2px 4px;
    }

    .btn-navbar {
        border-left-width: 0;
        background-color: transparent;
    }

    .form-control-navbar {
        border-right-width: 0;
    }

    .form-control-navbar+.input-group-append {
        margin-left: 0;
    }

    .form-control-navbar,
    .btn-navbar {
        transition: none;
    }

    .navbar-light .form-control-navbar,
    .navbar-light .btn-navbar {
        background-color: #f2f4f6;
        border: 0;
    }

    .navbar-light .form-control-navbar::placeholder,
    .navbar-light .form-control-navbar+.input-group-append>.btn-navbar {
        color: rgba(0, 0, 0, 0.6);
    }

    .navbar-light .form-control-navbar :-moz-placeholder {
        color: rgba(0, 0, 0, 0.6);
    }

    .navbar-light .form-control-navbar ::-moz-placeholder {
        color: rgba(0, 0, 0, 0.6);
    }

    .navbar-light .form-control-navbar :-ms-input-placeholder {
        color: rgba(0, 0, 0, 0.6);
    }

    .navbar-light .form-control-navbar:focus,
    .navbar-light .form-control-navbar:focus+.input-group-append .btn-navbar {
        border: 0 !important;
        background-color: #e9ecef;
        color: #343a40;
    }

    .brand-link {
        padding: 0.8125rem 0.5rem;
        font-size: 1.25rem;
        display: block;
        line-height: 1.5;
        white-space: nowrap;
    }

    .brand-link:hover {
        color: #ffffff;
        text-decoration: none;
    }

    [class*="sidebar-dark"] .brand-link {
        color: rgba(255, 255, 255, 0.8);
        border-bottom: 1px solid #4b545c;
    }

    [class*="sidebar-light"] .brand-link {
        color: rgba(0, 0, 0, 0.8);
        border-bottom: 1px solid #dee2e6;
    }

    .brand-image {
        float: left;
        line-height: .8;
        max-height: 34px;
        width: auto;
        margin-left: .8rem;
        margin-right: .5rem;
        margin-top: -3px;
    }
    /**
 * Component: Sidebar
 * ------------------
 */
    /*.main-sidebar {*/
    /*    z-index: 1100;*/
    /*    height: 100vh;*/
    /*    overflow-y: hidden;*/
    /*}*/
    /*.sidebar {*/
    /*    padding-bottom: 0;*/
    /*    padding-top: 0;*/
    /*    padding-left: 0.5rem;*/
    /*    padding-right: 0.5rem;*/
    /*    overflow-y:auto;*/
    /*    !*height: calc(100% - 1rem);*!*/
    /*    height:100%;*/
    /*}*/

    .user-panel {
        position: relative;
    }

    [class*="sidebar-dark"] .user-panel {
        border-bottom: 1px solid #4f5962;
    }

    [class*="sidebar-light"] .user-panel {
        border-bottom: 1px solid #dee2e6;
    }

    .user-panel,
    .user-panel .info {
        overflow: hidden;
        white-space: nowrap;
    }

    .user-panel .image {
        padding-left: 0.8rem;
        display: inline-block;
    }

    .user-panel img {
        width: 2.1rem;
        height: auto;
    }

    .user-panel .info {
        display: inline-block;
        padding: 5px 5px 5px 10px;
    }

    .user-panel .status,
    .user-panel .dropdown-menu {
        font-size: 0.875rem;
    }

    .nav-sidebar .nav-item>.nav-link {
        margin-bottom: 0.2rem;
    }

    .nav-sidebar .nav-item>.nav-link .right {
        transition: transform ease-in-out 0.3s;
    }

    @media screen and (prefers-reduced-motion: reduce) {
        .nav-sidebar .nav-item>.nav-link .right {
            transition: none;
        }
    }

    .nav-sidebar .nav-link>p>.right {
        position: absolute;
        right: 1rem;
        top: 12px;
    }

    .nav-sidebar .menu-open>.nav-treeview {
        display: block;
    }

    .nav-sidebar .menu-open>.nav-link .right {
        -ms-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .nav-sidebar>.nav-item {
        margin-bottom: 0;
    }

    .nav-sidebar>.nav-item .nav-icon {
        text-align: center;
        width: 1.6rem;
        font-size: 1.2rem;
        margin-right: .2rem;
    }

    .nav-sidebar>.nav-item .float-right {
        margin-top: 3px;
    }

    .nav-sidebar .nav-treeview {
        display: none;
        list-style: none;
        padding: 0;
    }

    .nav-sidebar .nav-treeview>.nav-item>.nav-link>.nav-icon {
        width: 1.6rem;
    }

    .nav-sidebar .nav-header {
        font-size: .9rem;
        padding: 0.5rem;
    }

    .nav-sidebar .nav-header:not(:first-of-type) {
        padding: 1.7rem 1rem .5rem 1rem;
    }

    .nav-sidebar .nav-link p {
        display: inline-block;
        margin: 0;
    }

    #sidebar-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: none;
        background-color: rgba(0, 0, 0, 0.1);
        z-index: 1099;
    }

    @media (max-width: 991.98px) {
        .sidebar-open #sidebar-overlay {
            display: block;
        }
    }

    .sidebar-dark-primary {
        background-color: #343a40;
    }

    .sidebar-dark-primary .user-panel a:hover {
        color: #ffffff;
    }

    .sidebar-dark-primary .user-panel .status {
        color: #C2C7D0;
        background: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-primary .user-panel .status:hover,
    .sidebar-dark-primary .user-panel .status:focus,
    .sidebar-dark-primary .user-panel .status:active {
        color: #ffffff;
        background: rgba(247, 247, 247, 0.1);
    }

    .sidebar-dark-primary .user-panel .dropdown-menu {
        border-color: rgba(242, 242, 242, 0.1);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }

    .sidebar-dark-primary .user-panel .dropdown-item {
        color: #212529;
    }

    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link:active,
    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link:focus {
        color: #C2C7D0;
    }

    .sidebar-dark-primary .nav-sidebar>.nav-item.menu-open>.nav-link,
    .sidebar-dark-primary .nav-sidebar>.nav-item:hover>.nav-link {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active {
        color: #ffffff;
        background-color: #007bff;
    }

    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-treeview {
        background: transparent;
    }

    .sidebar-dark-primary .nav-header {
        color: #d0d4db;
        background: inherit;
    }

    .sidebar-dark-primary .sidebar a {
        color: #C2C7D0;
    }

    .sidebar-dark-primary .sidebar a:hover {
        text-decoration: none;
    }

    .sidebar-dark-primary .nav-treeview>.nav-item>.nav-link {
        color: #C2C7D0;
    }

    .sidebar-dark-primary .nav-treeview>.nav-item>.nav-link:hover {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-primary .nav-treeview>.nav-item>.nav-link.active,
    .sidebar-dark-primary .nav-treeview>.nav-item>.nav-link.active:hover {
        color: #343a40;
        background-color: rgba(255, 255, 255, 0.9);
    }

    .sidebar-light-primary {
        background-color: #ffffff;
    }

    .sidebar-light-primary .user-panel a:hover {
        color: #212529;
    }

    .sidebar-light-primary .user-panel .status {
        color: #343a40;
        background: #f4f4f5;
    }

    .sidebar-light-primary .user-panel .status:hover,
    .sidebar-light-primary .user-panel .status:focus,
    .sidebar-light-primary .user-panel .status:active {
        color: #212529;
        background: #ececed;
    }

    .sidebar-light-primary .user-panel .dropdown-menu {
        border-color: #e7e7e8;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }

    .sidebar-light-primary .user-panel .dropdown-item {
        color: #212529;
    }

    .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link:active,
    .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link:focus {
        color: #343a40;
    }

    .sidebar-light-primary .nav-sidebar>.nav-item.menu-open>.nav-link,
    .sidebar-light-primary .nav-sidebar>.nav-item:hover>.nav-link {
        color: #212529;
        background-color: #f4f4f5;
    }

    .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
        color: #ffffff;
        background-color: #007bff;
    }

    .sidebar-light-primary .nav-sidebar>.nav-item>.nav-treeview {
        background: transparent;
    }

    .sidebar-light-primary .nav-header {
        color: #292d32;
        background: inherit;
    }

    .sidebar-light-primary .sidebar a {
        color: #343a40;
    }

    .sidebar-light-primary .sidebar a:hover {
        text-decoration: none;
    }

    .sidebar-light-primary .nav-treeview>.nav-item>.nav-link {
        color: #777;
    }

    .sidebar-light-primary .nav-treeview>.nav-item>.nav-link.active,
    .sidebar-light-primary .nav-treeview>.nav-item>.nav-link.active:hover {
        color: #212529;
        background-color: #f4f4f5;
    }

    .sidebar-light-primary .nav-treeview>.nav-item>.nav-link:hover {
        background-color: #f4f4f5;
    }

    .sidebar-dark-secondary {
        background-color: #343a40;
    }

    .sidebar-dark-secondary .user-panel a:hover {
        color: #ffffff;
    }

    .sidebar-dark-secondary .user-panel .status {
        color: #C2C7D0;
        background: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-secondary .user-panel .status:hover,
    .sidebar-dark-secondary .user-panel .status:focus,
    .sidebar-dark-secondary .user-panel .status:active {
        color: #ffffff;
        background: rgba(247, 247, 247, 0.1);
    }

    .sidebar-dark-secondary .user-panel .dropdown-menu {
        border-color: rgba(242, 242, 242, 0.1);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }

    .sidebar-dark-secondary .user-panel .dropdown-item {
        color: #212529;
    }

    .sidebar-dark-secondary .nav-sidebar>.nav-item>.nav-link:active,
    .sidebar-dark-secondary .nav-sidebar>.nav-item>.nav-link:focus {
        color: #C2C7D0;
    }

    .sidebar-dark-secondary .nav-sidebar>.nav-item.menu-open>.nav-link,
    .sidebar-dark-secondary .nav-sidebar>.nav-item:hover>.nav-link {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-secondary .nav-sidebar>.nav-item>.nav-link.active {
        color: #ffffff;
        background-color: #6c757d;
    }

    .sidebar-dark-secondary .nav-sidebar>.nav-item>.nav-treeview {
        background: transparent;
    }

    .sidebar-dark-secondary .nav-header {
        color: #d0d4db;
        background: inherit;
    }

    .sidebar-dark-secondary .sidebar a {
        color: #C2C7D0;
    }

    .sidebar-dark-secondary .sidebar a:hover {
        text-decoration: none;
    }

    .sidebar-dark-secondary .nav-treeview>.nav-item>.nav-link {
        color: #C2C7D0;
    }

    .sidebar-dark-secondary .nav-treeview>.nav-item>.nav-link:hover {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-secondary .nav-treeview>.nav-item>.nav-link.active,
    .sidebar-dark-secondary .nav-treeview>.nav-item>.nav-link.active:hover {
        color: #343a40;
        background-color: rgba(255, 255, 255, 0.9);
    }

    .sidebar-light-secondary {
        background-color: #ffffff;
    }

    .sidebar-light-secondary .user-panel a:hover {
        color: #212529;
    }

    .sidebar-light-secondary .user-panel .status {
        color: #343a40;
        background: #f4f4f5;
    }

    .sidebar-light-secondary .user-panel .status:hover,
    .sidebar-light-secondary .user-panel .status:focus,
    .sidebar-light-secondary .user-panel .status:active {
        color: #212529;
        background: #ececed;
    }

    .sidebar-light-secondary .user-panel .dropdown-menu {
        border-color: #e7e7e8;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }

    .sidebar-light-secondary .user-panel .dropdown-item {
        color: #212529;
    }

    .sidebar-light-secondary .nav-sidebar>.nav-item>.nav-link:active,
    .sidebar-light-secondary .nav-sidebar>.nav-item>.nav-link:focus {
        color: #343a40;
    }

    .sidebar-light-secondary .nav-sidebar>.nav-item.menu-open>.nav-link,
    .sidebar-light-secondary .nav-sidebar>.nav-item:hover>.nav-link {
        color: #212529;
        background-color: #f4f4f5;
    }

    .sidebar-light-secondary .nav-sidebar>.nav-item>.nav-link.active {
        color: #ffffff;
        background-color: #6c757d;
    }

    .sidebar-light-secondary .nav-sidebar>.nav-item>.nav-treeview {
        background: transparent;
    }

    .sidebar-light-secondary .nav-header {
        color: #292d32;
        background: inherit;
    }

    .sidebar-light-secondary .sidebar a {
        color: #343a40;
    }

    .sidebar-light-secondary .sidebar a:hover {
        text-decoration: none;
    }

    .sidebar-light-secondary .nav-treeview>.nav-item>.nav-link {
        color: #777;
    }

    .sidebar-light-secondary .nav-treeview>.nav-item>.nav-link.active,
    .sidebar-light-secondary .nav-treeview>.nav-item>.nav-link.active:hover {
        color: #212529;
        background-color: #f4f4f5;
    }

    .sidebar-light-secondary .nav-treeview>.nav-item>.nav-link:hover {
        background-color: #f4f4f5;
    }

    .sidebar-dark-success {
        background-color: #343a40;
    }

    .sidebar-dark-success .user-panel a:hover {
        color: #ffffff;
    }

    .sidebar-dark-success .user-panel .status {
        color: #C2C7D0;
        background: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-success .user-panel .status:hover,
    .sidebar-dark-success .user-panel .status:focus,
    .sidebar-dark-success .user-panel .status:active {
        color: #ffffff;
        background: rgba(247, 247, 247, 0.1);
    }

    .sidebar-dark-success .user-panel .dropdown-menu {
        border-color: rgba(242, 242, 242, 0.1);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }

    .sidebar-dark-success .user-panel .dropdown-item {
        color: #212529;
    }

    .sidebar-dark-success .nav-sidebar>.nav-item>.nav-link:active,
    .sidebar-dark-success .nav-sidebar>.nav-item>.nav-link:focus {
        color: #C2C7D0;
    }

    .sidebar-dark-success .nav-sidebar>.nav-item.menu-open>.nav-link,
    .sidebar-dark-success .nav-sidebar>.nav-item:hover>.nav-link {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-success .nav-sidebar>.nav-item>.nav-link.active {
        color: #ffffff;
        background-color: #28a745;
    }

    .sidebar-dark-success .nav-sidebar>.nav-item>.nav-treeview {
        background: transparent;
    }

    .sidebar-dark-success .nav-header {
        color: #d0d4db;
        background: inherit;
    }

    .sidebar-dark-success .sidebar a {
        color: #C2C7D0;
    }

    .sidebar-dark-success .sidebar a:hover {
        text-decoration: none;
    }

    .sidebar-dark-success .nav-treeview>.nav-item>.nav-link {
        color: #C2C7D0;
    }

    .sidebar-dark-success .nav-treeview>.nav-item>.nav-link:hover {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-success .nav-treeview>.nav-item>.nav-link.active,
    .sidebar-dark-success .nav-treeview>.nav-item>.nav-link.active:hover {
        color: #343a40;
        background-color: rgba(255, 255, 255, 0.9);
    }

    .sidebar-light-success {
        background-color: #ffffff;
    }

    .sidebar-light-success .user-panel a:hover {
        color: #212529;
    }

    .sidebar-light-success .user-panel .status {
        color: #343a40;
        background: #f4f4f5;
    }

    .sidebar-light-success .user-panel .status:hover,
    .sidebar-light-success .user-panel .status:focus,
    .sidebar-light-success .user-panel .status:active {
        color: #212529;
        background: #ececed;
    }

    .sidebar-light-success .user-panel .dropdown-menu {
        border-color: #e7e7e8;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }

    .sidebar-light-success .user-panel .dropdown-item {
        color: #212529;
    }

    .sidebar-light-success .nav-sidebar>.nav-item>.nav-link:active,
    .sidebar-light-success .nav-sidebar>.nav-item>.nav-link:focus {
        color: #343a40;
    }

    .sidebar-light-success .nav-sidebar>.nav-item.menu-open>.nav-link,
    .sidebar-light-success .nav-sidebar>.nav-item:hover>.nav-link {
        color: #212529;
        background-color: #f4f4f5;
    }

    .sidebar-light-success .nav-sidebar>.nav-item>.nav-link.active {
        color: #ffffff;
        background-color: #28a745;
    }

    .sidebar-light-success .nav-sidebar>.nav-item>.nav-treeview {
        background: transparent;
    }

    .sidebar-light-success .nav-header {
        color: #292d32;
        background: inherit;
    }

    .sidebar-light-success .sidebar a {
        color: #343a40;
    }

    .sidebar-light-success .sidebar a:hover {
        text-decoration: none;
    }

    .sidebar-light-success .nav-treeview>.nav-item>.nav-link {
        color: #777;
    }

    .sidebar-light-success .nav-treeview>.nav-item>.nav-link.active,
    .sidebar-light-success .nav-treeview>.nav-item>.nav-link.active:hover {
        color: #212529;
        background-color: #f4f4f5;
    }

    .sidebar-light-success .nav-treeview>.nav-item>.nav-link:hover {
        background-color: #f4f4f5;
    }

    .sidebar-dark-info {
        background-color: #343a40;
    }

    .sidebar-dark-info .user-panel a:hover {
        color: #ffffff;
    }

    .sidebar-dark-info .user-panel .status {
        color: #C2C7D0;
        background: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-info .user-panel .status:hover,
    .sidebar-dark-info .user-panel .status:focus,
    .sidebar-dark-info .user-panel .status:active {
        color: #ffffff;
        background: rgba(247, 247, 247, 0.1);
    }

    .sidebar-dark-info .user-panel .dropdown-menu {
        border-color: rgba(242, 242, 242, 0.1);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }

    .sidebar-dark-info .user-panel .dropdown-item {
        color: #212529;
    }

    .sidebar-dark-info .nav-sidebar>.nav-item>.nav-link:active,
    .sidebar-dark-info .nav-sidebar>.nav-item>.nav-link:focus {
        color: #C2C7D0;
    }

    .sidebar-dark-info .nav-sidebar>.nav-item.menu-open>.nav-link,
    .sidebar-dark-info .nav-sidebar>.nav-item:hover>.nav-link {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-info .nav-sidebar>.nav-item>.nav-link.active {
        color: #ffffff;
        background-color: #17a2b8;
    }

    .sidebar-dark-info .nav-sidebar>.nav-item>.nav-treeview {
        background: transparent;
    }

    .sidebar-dark-info .nav-header {
        color: #d0d4db;
        background: inherit;
    }

    .sidebar-dark-info .sidebar a {
        color: #C2C7D0;
    }

    .sidebar-dark-info .sidebar a:hover {
        text-decoration: none;
    }

    .sidebar-dark-info .nav-treeview>.nav-item>.nav-link {
        color: #C2C7D0;
    }

    .sidebar-dark-info .nav-treeview>.nav-item>.nav-link:hover {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-info .nav-treeview>.nav-item>.nav-link.active,
    .sidebar-dark-info .nav-treeview>.nav-item>.nav-link.active:hover {
        color: #343a40;
        background-color: rgba(255, 255, 255, 0.9);
    }

    .sidebar-light-info {
        background-color: #ffffff;
    }

    .sidebar-light-info .user-panel a:hover {
        color: #212529;
    }

    .sidebar-light-info .user-panel .status {
        color: #343a40;
        background: #f4f4f5;
    }

    .sidebar-light-info .user-panel .status:hover,
    .sidebar-light-info .user-panel .status:focus,
    .sidebar-light-info .user-panel .status:active {
        color: #212529;
        background: #ececed;
    }

    .sidebar-light-info .user-panel .dropdown-menu {
        border-color: #e7e7e8;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }

    .sidebar-light-info .user-panel .dropdown-item {
        color: #212529;
    }

    .sidebar-light-info .nav-sidebar>.nav-item>.nav-link:active,
    .sidebar-light-info .nav-sidebar>.nav-item>.nav-link:focus {
        color: #343a40;
    }

    .sidebar-light-info .nav-sidebar>.nav-item.menu-open>.nav-link,
    .sidebar-light-info .nav-sidebar>.nav-item:hover>.nav-link {
        color: #212529;
        background-color: #f4f4f5;
    }

    .sidebar-light-info .nav-sidebar>.nav-item>.nav-link.active {
        color: #ffffff;
        background-color: #17a2b8;
    }

    .sidebar-light-info .nav-sidebar>.nav-item>.nav-treeview {
        background: transparent;
    }

    .sidebar-light-info .nav-header {
        color: #292d32;
        background: inherit;
    }

    .sidebar-light-info .sidebar a {
        color: #343a40;
    }

    .sidebar-light-info .sidebar a:hover {
        text-decoration: none;
    }

    .sidebar-light-info .nav-treeview>.nav-item>.nav-link {
        color: #777;
    }

    .sidebar-light-info .nav-treeview>.nav-item>.nav-link.active,
    .sidebar-light-info .nav-treeview>.nav-item>.nav-link.active:hover {
        color: #212529;
        background-color: #f4f4f5;
    }

    .sidebar-light-info .nav-treeview>.nav-item>.nav-link:hover {
        background-color: #f4f4f5;
    }

    .sidebar-dark-warning {
        background-color: #343a40;
    }

    .sidebar-dark-warning .user-panel a:hover {
        color: #ffffff;
    }

    .sidebar-dark-warning .user-panel .status {
        color: #C2C7D0;
        background: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-warning .user-panel .status:hover,
    .sidebar-dark-warning .user-panel .status:focus,
    .sidebar-dark-warning .user-panel .status:active {
        color: #ffffff;
        background: rgba(247, 247, 247, 0.1);
    }

    .sidebar-dark-warning .user-panel .dropdown-menu {
        border-color: rgba(242, 242, 242, 0.1);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }

    .sidebar-dark-warning .user-panel .dropdown-item {
        color: #212529;
    }

    .sidebar-dark-warning .nav-sidebar>.nav-item>.nav-link:active,
    .sidebar-dark-warning .nav-sidebar>.nav-item>.nav-link:focus {
        color: #C2C7D0;
    }

    .sidebar-dark-warning .nav-sidebar>.nav-item.menu-open>.nav-link,
    .sidebar-dark-warning .nav-sidebar>.nav-item:hover>.nav-link {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-warning .nav-sidebar>.nav-item>.nav-link.active {
        color: #ffffff;
        background-color: #ffc107;
    }

    .sidebar-dark-warning .nav-sidebar>.nav-item>.nav-treeview {
        background: transparent;
    }

    .sidebar-dark-warning .nav-header {
        color: #d0d4db;
        background: inherit;
    }

    .sidebar-dark-warning .sidebar a {
        color: #C2C7D0;
    }

    .sidebar-dark-warning .sidebar a:hover {
        text-decoration: none;
    }

    .sidebar-dark-warning .nav-treeview>.nav-item>.nav-link {
        color: #C2C7D0;
    }

    .sidebar-dark-warning .nav-treeview>.nav-item>.nav-link:hover {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-warning .nav-treeview>.nav-item>.nav-link.active,
    .sidebar-dark-warning .nav-treeview>.nav-item>.nav-link.active:hover {
        color: #343a40;
        background-color: rgba(255, 255, 255, 0.9);
    }

    .sidebar-light-warning {
        background-color: #ffffff;
    }

    .sidebar-light-warning .user-panel a:hover {
        color: #212529;
    }

    .sidebar-light-warning .user-panel .status {
        color: #343a40;
        background: #f4f4f5;
    }

    .sidebar-light-warning .user-panel .status:hover,
    .sidebar-light-warning .user-panel .status:focus,
    .sidebar-light-warning .user-panel .status:active {
        color: #212529;
        background: #ececed;
    }

    .sidebar-light-warning .user-panel .dropdown-menu {
        border-color: #e7e7e8;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }

    .sidebar-light-warning .user-panel .dropdown-item {
        color: #212529;
    }

    .sidebar-light-warning .nav-sidebar>.nav-item>.nav-link:active,
    .sidebar-light-warning .nav-sidebar>.nav-item>.nav-link:focus {
        color: #343a40;
    }

    .sidebar-light-warning .nav-sidebar>.nav-item.menu-open>.nav-link,
    .sidebar-light-warning .nav-sidebar>.nav-item:hover>.nav-link {
        color: #212529;
        background-color: #f4f4f5;
    }

    .sidebar-light-warning .nav-sidebar>.nav-item>.nav-link.active {
        color: #ffffff;
        background-color: #ffc107;
    }

    .sidebar-light-warning .nav-sidebar>.nav-item>.nav-treeview {
        background: transparent;
    }

    .sidebar-light-warning .nav-header {
        color: #292d32;
        background: inherit;
    }

    .sidebar-light-warning .sidebar a {
        color: #343a40;
    }

    .sidebar-light-warning .sidebar a:hover {
        text-decoration: none;
    }

    .sidebar-light-warning .nav-treeview>.nav-item>.nav-link {
        color: #777;
    }

    .sidebar-light-warning .nav-treeview>.nav-item>.nav-link.active,
    .sidebar-light-warning .nav-treeview>.nav-item>.nav-link.active:hover {
        color: #212529;
        background-color: #f4f4f5;
    }

    .sidebar-light-warning .nav-treeview>.nav-item>.nav-link:hover {
        background-color: #f4f4f5;
    }

    .sidebar-dark-danger {
        background-color: #343a40;
    }

    .sidebar-dark-danger .user-panel a:hover {
        color: #ffffff;
    }

    .sidebar-dark-danger .user-panel .status {
        color: #C2C7D0;
        background: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-danger .user-panel .status:hover,
    .sidebar-dark-danger .user-panel .status:focus,
    .sidebar-dark-danger .user-panel .status:active {
        color: #ffffff;
        background: rgba(247, 247, 247, 0.1);
    }

    .sidebar-dark-danger .user-panel .dropdown-menu {
        border-color: rgba(242, 242, 242, 0.1);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }

    .sidebar-dark-danger .user-panel .dropdown-item {
        color: #212529;
    }

    .sidebar-dark-danger .nav-sidebar>.nav-item>.nav-link:active,
    .sidebar-dark-danger .nav-sidebar>.nav-item>.nav-link:focus {
        color: #C2C7D0;
    }

    .sidebar-dark-danger .nav-sidebar>.nav-item.menu-open>.nav-link,
    .sidebar-dark-danger .nav-sidebar>.nav-item:hover>.nav-link {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-danger .nav-sidebar>.nav-item>.nav-link.active {
        color: #ffffff;
        background-color: #dc3545;
    }

    .sidebar-dark-danger .nav-sidebar>.nav-item>.nav-treeview {
        background: transparent;
    }

    .sidebar-dark-danger .nav-header {
        color: #d0d4db;
        background: inherit;
    }

    .sidebar-dark-danger .sidebar a {
        color: #C2C7D0;
    }

    .sidebar-dark-danger .sidebar a:hover {
        text-decoration: none;
    }

    .sidebar-dark-danger .nav-treeview>.nav-item>.nav-link {
        color: #C2C7D0;
    }

    .sidebar-dark-danger .nav-treeview>.nav-item>.nav-link:hover {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-danger .nav-treeview>.nav-item>.nav-link.active,
    .sidebar-dark-danger .nav-treeview>.nav-item>.nav-link.active:hover {
        color: #343a40;
        background-color: rgba(255, 255, 255, 0.9);
    }

    .sidebar-light-danger {
        background-color: #ffffff;
    }

    .sidebar-light-danger .user-panel a:hover {
        color: #212529;
    }

    .sidebar-light-danger .user-panel .status {
        color: #343a40;
        background: #f4f4f5;
    }

    .sidebar-light-danger .user-panel .status:hover,
    .sidebar-light-danger .user-panel .status:focus,
    .sidebar-light-danger .user-panel .status:active {
        color: #212529;
        background: #ececed;
    }

    .sidebar-light-danger .user-panel .dropdown-menu {
        border-color: #e7e7e8;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }

    .sidebar-light-danger .user-panel .dropdown-item {
        color: #212529;
    }

    .sidebar-light-danger .nav-sidebar>.nav-item>.nav-link:active,
    .sidebar-light-danger .nav-sidebar>.nav-item>.nav-link:focus {
        color: #343a40;
    }

    .sidebar-light-danger .nav-sidebar>.nav-item.menu-open>.nav-link,
    .sidebar-light-danger .nav-sidebar>.nav-item:hover>.nav-link {
        color: #212529;
        background-color: #f4f4f5;
    }

    .sidebar-light-danger .nav-sidebar>.nav-item>.nav-link.active {
        color: #ffffff;
        /*background-color: #dc3545;*/
    }

    .sidebar-light-danger .nav-sidebar>.nav-item>.nav-treeview {
        background: transparent;
    }

    .sidebar-light-danger .nav-header {
        color: #292d32;
        background: inherit;
    }

    .sidebar-light-danger .sidebar a {
        color: #343a40;
    }

    .sidebar-light-danger .sidebar a:hover {
        text-decoration: none;
    }

    .sidebar-light-danger .nav-treeview>.nav-item>.nav-link {
        color: #777;
    }

    .sidebar-light-danger .nav-treeview>.nav-item>.nav-link.active,
    .sidebar-light-danger .nav-treeview>.nav-item>.nav-link.active:hover {
        color: #212529;
        background-color: #f4f4f5;
    }

    .sidebar-light-danger .nav-treeview>.nav-item>.nav-link:hover {
        background-color: #f4f4f5;
    }

    .sidebar-dark-light {
        background-color: #343a40;
    }

    .sidebar-dark-light .user-panel a:hover {
        color: #ffffff;
    }

    .sidebar-dark-light .user-panel .status {
        color: #C2C7D0;
        background: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-light .user-panel .status:hover,
    .sidebar-dark-light .user-panel .status:focus,
    .sidebar-dark-light .user-panel .status:active {
        color: #ffffff;
        background: rgba(247, 247, 247, 0.1);
    }

    .sidebar-dark-light .user-panel .dropdown-menu {
        border-color: rgba(242, 242, 242, 0.1);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }

    .sidebar-dark-light .user-panel .dropdown-item {
        color: #212529;
    }

    .sidebar-dark-light .nav-sidebar>.nav-item>.nav-link:active,
    .sidebar-dark-light .nav-sidebar>.nav-item>.nav-link:focus {
        color: #C2C7D0;
    }

    .sidebar-dark-light .nav-sidebar>.nav-item.menu-open>.nav-link,
    .sidebar-dark-light .nav-sidebar>.nav-item:hover>.nav-link {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-light .nav-sidebar>.nav-item>.nav-link.active {
        color: #ffffff;
        background-color: #f8f9fa;
    }

    .sidebar-dark-light .nav-sidebar>.nav-item>.nav-treeview {
        background: transparent;
    }

    .sidebar-dark-light .nav-header {
        color: #d0d4db;
        background: inherit;
    }

    .sidebar-dark-light .sidebar a {
        color: #C2C7D0;
    }

    .sidebar-dark-light .sidebar a:hover {
        text-decoration: none;
    }

    .sidebar-dark-light .nav-treeview>.nav-item>.nav-link {
        color: #C2C7D0;
    }

    .sidebar-dark-light .nav-treeview>.nav-item>.nav-link:hover {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-light .nav-treeview>.nav-item>.nav-link.active,
    .sidebar-dark-light .nav-treeview>.nav-item>.nav-link.active:hover {
        color: #343a40;
        background-color: rgba(255, 255, 255, 0.9);
    }

    .sidebar-light-light {
        background-color: #ffffff;
    }

    .sidebar-light-light .user-panel a:hover {
        color: #212529;
    }

    .sidebar-light-light .user-panel .status {
        color: #343a40;
        background: #f4f4f5;
    }

    .sidebar-light-light .user-panel .status:hover,
    .sidebar-light-light .user-panel .status:focus,
    .sidebar-light-light .user-panel .status:active {
        color: #212529;
        background: #ececed;
    }

    .sidebar-light-light .user-panel .dropdown-menu {
        border-color: #e7e7e8;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }

    .sidebar-light-light .user-panel .dropdown-item {
        color: #212529;
    }

    .sidebar-light-light .nav-sidebar>.nav-item>.nav-link:active,
    .sidebar-light-light .nav-sidebar>.nav-item>.nav-link:focus {
        color: #343a40;
    }

    .sidebar-light-light .nav-sidebar>.nav-item.menu-open>.nav-link,
    .sidebar-light-light .nav-sidebar>.nav-item:hover>.nav-link {
        color: #212529;
        background-color: #f4f4f5;
    }

    .sidebar-light-light .nav-sidebar>.nav-item>.nav-link.active {
        color: #ffffff;
        background-color: #f8f9fa;
    }

    .sidebar-light-light .nav-sidebar>.nav-item>.nav-treeview {
        background: transparent;
    }

    .sidebar-light-light .nav-header {
        color: #292d32;
        background: inherit;
    }

    .sidebar-light-light .sidebar a {
        color: #343a40;
    }

    .sidebar-light-light .sidebar a:hover {
        text-decoration: none;
    }

    .sidebar-light-light .nav-treeview>.nav-item>.nav-link {
        color: #777;
    }

    .sidebar-light-light .nav-treeview>.nav-item>.nav-link.active,
    .sidebar-light-light .nav-treeview>.nav-item>.nav-link.active:hover {
        color: #212529;
        background-color: #f4f4f5;
    }

    .sidebar-light-light .nav-treeview>.nav-item>.nav-link:hover {
        background-color: #f4f4f5;
    }

    .sidebar-dark-dark {
        background-color: #343a40;
    }

    .sidebar-dark-dark .user-panel a:hover {
        color: #ffffff;
    }

    .sidebar-dark-dark .user-panel .status {
        color: #C2C7D0;
        background: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-dark .user-panel .status:hover,
    .sidebar-dark-dark .user-panel .status:focus,
    .sidebar-dark-dark .user-panel .status:active {
        color: #ffffff;
        background: rgba(247, 247, 247, 0.1);
    }

    .sidebar-dark-dark .user-panel .dropdown-menu {
        border-color: rgba(242, 242, 242, 0.1);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }

    .sidebar-dark-dark .user-panel .dropdown-item {
        color: #212529;
    }

    .sidebar-dark-dark .nav-sidebar>.nav-item>.nav-link:active,
    .sidebar-dark-dark .nav-sidebar>.nav-item>.nav-link:focus {
        color: #C2C7D0;
    }

    .sidebar-dark-dark .nav-sidebar>.nav-item.menu-open>.nav-link,
    .sidebar-dark-dark .nav-sidebar>.nav-item:hover>.nav-link {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-dark .nav-sidebar>.nav-item>.nav-link.active {
        color: #ffffff;
        background-color: #343a40;
    }

    .sidebar-dark-dark .nav-sidebar>.nav-item>.nav-treeview {
        background: transparent;
    }

    .sidebar-dark-dark .nav-header {
        color: #d0d4db;
        background: inherit;
    }

    .sidebar-dark-dark .sidebar a {
        color: #C2C7D0;
    }

    .sidebar-dark-dark .sidebar a:hover {
        text-decoration: none;
    }

    .sidebar-dark-dark .nav-treeview>.nav-item>.nav-link {
        color: #C2C7D0;
    }

    .sidebar-dark-dark .nav-treeview>.nav-item>.nav-link:hover {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-dark .nav-treeview>.nav-item>.nav-link.active,
    .sidebar-dark-dark .nav-treeview>.nav-item>.nav-link.active:hover {
        color: #343a40;
        background-color: rgba(255, 255, 255, 0.9);
    }

    .sidebar-light-dark {
        background-color: #ffffff;
    }

    .sidebar-light-dark .user-panel a:hover {
        color: #212529;
    }

    .sidebar-light-dark .user-panel .status {
        color: #343a40;
        background: #f4f4f5;
    }

    .sidebar-light-dark .user-panel .status:hover,
    .sidebar-light-dark .user-panel .status:focus,
    .sidebar-light-dark .user-panel .status:active {
        color: #212529;
        background: #ececed;
    }

    .sidebar-light-dark .user-panel .dropdown-menu {
        border-color: #e7e7e8;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }

    .sidebar-light-dark .user-panel .dropdown-item {
        color: #212529;
    }

    .sidebar-light-dark .nav-sidebar>.nav-item>.nav-link:active,
    .sidebar-light-dark .nav-sidebar>.nav-item>.nav-link:focus {
        color: #343a40;
    }

    .sidebar-light-dark .nav-sidebar>.nav-item.menu-open>.nav-link,
    .sidebar-light-dark .nav-sidebar>.nav-item:hover>.nav-link {
        color: #212529;
        background-color: #f4f4f5;
    }

    .sidebar-light-dark .nav-sidebar>.nav-item>.nav-link.active {
        color: #ffffff;
        background-color: #343a40;
    }

    .sidebar-light-dark .nav-sidebar>.nav-item>.nav-treeview {
        background: transparent;
    }

    .sidebar-light-dark .nav-header {
        color: #292d32;
        background: inherit;
    }

    .sidebar-light-dark .sidebar a {
        color: #343a40;
    }

    .sidebar-light-dark .sidebar a:hover {
        text-decoration: none;
    }

    .sidebar-light-dark .nav-treeview>.nav-item>.nav-link {
        color: #777;
    }

    .sidebar-light-dark .nav-treeview>.nav-item>.nav-link.active,
    .sidebar-light-dark .nav-treeview>.nav-item>.nav-link.active:hover {
        color: #212529;
        background-color: #f4f4f5;
    }

    .sidebar-light-dark .nav-treeview>.nav-item>.nav-link:hover {
        background-color: #f4f4f5;
    }
    /*
 * Component: Sidebar Mini
 */

    @media (min-width: 992px) {
        .sidebar-mini .nav-sidebar,
        .sidebar-mini .nav-sidebar>.nav-header,
        .sidebar-mini .nav-sidebar .nav-link {
            white-space: nowrap;
            overflow: hidden;
        }
        .sidebar-mini.sidebar-collapse .d-hidden-mini {
            display: none;
        }
        .sidebar-mini.sidebar-collapse .content-wrapper,
        .sidebar-mini.sidebar-collapse .main-footer,
        .sidebar-mini.sidebar-collapse .main-header {
            margin-left: 4.6rem !important;
        }
        .sidebar-mini.sidebar-collapse .nav-sidebar .nav-header {
            display: none;
        }
        .sidebar-mini.sidebar-collapse .sidebar .user-panel>.info,
        .sidebar-mini.sidebar-collapse .nav-sidebar .nav-link p,
        .sidebar-mini.sidebar-collapse .brand-text {
            opacity: 0;
            margin-left: -10px;
        }
        .sidebar-mini.sidebar-collapse .main-sidebar,
        .sidebar-mini.sidebar-collapse .main-sidebar:before {
            margin-left: 0;
            width: 4.6rem;
        }
        .sidebar-mini.sidebar-collapse .main-sidebar .user-panel .image {
            float: none;
        }
        .sidebar-mini.sidebar-collapse .main-sidebar:hover {
            width: 250px;
        }
        .sidebar-mini.sidebar-collapse .main-sidebar:hover .user-panel {
            text-align: left;
        }
        .sidebar-mini.sidebar-collapse .main-sidebar:hover .user-panel .image {
            float: left;
        }
        .sidebar-mini.sidebar-collapse .main-sidebar:hover .user-panel>.info,
        .sidebar-mini.sidebar-collapse .main-sidebar:hover .nav-sidebar .nav-link p,
        .sidebar-mini.sidebar-collapse .main-sidebar:hover .brand-text {
            opacity: 1;
            margin-left: 0;
            display: inline-block;
        }
        .sidebar-mini.sidebar-collapse .main-sidebar:hover .brand-image {
            margin-right: .5rem;
        }
        .sidebar-mini.sidebar-collapse .main-sidebar:hover .sidebar-form,
        .sidebar-mini.sidebar-collapse .main-sidebar:hover .user-panel>.info {
            display: block !important;
            -webkit-transform: translateZ(0);
        }
        .sidebar-mini.sidebar-collapse .main-sidebar:hover .nav-sidebar>.nav-item>.nav-link>span {
            display: inline-block !important;
        }
        .sidebar-mini.sidebar-collapse .visible-sidebar-mini {
            display: block !important;
        }
    }

    .nav-sidebar {
        position: relative;
    }

    .nav-sidebar:hover {
        overflow: visible;
    }

    .sidebar-form,
    .nav-sidebar>.nav-header {
        overflow: hidden;
        text-overflow: clip;
    }

    .nav-sidebar .nav-item>.nav-link {
        position: relative;
    }

    .nav-sidebar .nav-item>.nav-link>.float-right {
        position: absolute;
        right: 10px;
        top: 50%;
        margin-top: -7px;
    }

    .sidebar .nav-link p,
    .main-sidebar .brand-text,
    .sidebar .user-panel .info {
        transition: margin-left 0.3s linear, opacity 0.5s ease;
    }

    @media screen and (prefers-reduced-motion: reduce) {
        .sidebar .nav-link p,
        .main-sidebar .brand-text,
        .sidebar .user-panel .info {
            transition: none;
        }
    }

    .img-sm,
    .card-comments .card-comment img,
    .user-block.user-block-sm img {
        width: 30px !important;
        height: 30px !important;
    }

    .img-sm+.img-push,
    .card-comments .card-comment img+.img-push,
    .user-block.user-block-sm img+.img-push {
        margin-left: 40px;
    }

    .img-md {
        width: 60px;
        height: 60px;
    }

    .img-md+.img-push {
        margin-left: 70px;
    }

    .img-lg {
        width: 100px;
        height: 100px;
    }

    .img-lg+.img-push {
        margin-left: 110px;
    }

    .img-bordered {
        border: 3px solid #adb5bd;
        padding: 3px;
    }

    .img-bordered-sm {
        border: 2px solid #adb5bd;
        padding: 2px;
    }

    .img-rounded {
        border-radius: 0.25rem;
    }

    .img-circle {
        border-radius: 50%;
    }

    .elevation-5 {
        box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.22);
    }

    .contacts-list-img {
        float: right;
    }

    .contacts-list-info {
        margin-right: 45px;
        margin-left: 0;
    }
    /*.sidebar {*/
    /*    direction: ltr;*/
    /*}*/

    .sidebar>div:first-child {
        direction: rtl;
    }

    .control-sidebar,
    .control-sidebar:before {
        left: -250px;
        right: auto;
        transition: left .3s ease-in-out;
    }

    .control-sidebar-slide-open .control-sidebar,
    .control-sidebar-slide-open .control-sidebar:before {
        left: 0;
        right: auto;
    }

    .small-box .icon {
        right: auto;
        left: 10px;
    }

    .nav-sidebar .nav-link>p>.right {
        left: 1rem;
        right: auto;
    }

    .nav-sidebar>.nav-item .nav-icon {
        margin-right: 0;
        margin-left: .2rem;
    }

    @media (min-width: 992px) {
        .sidebar-mini.sidebar-collapse .content-wrapper,
        sidebar p,
        .sidebar-mini.sidebar-collapse .main-footer,
        .sidebar-mini.sidebar-collapse .main-header {
            margin-right: 4.6rem;
            margin-left: 0;
            display: none;
        }
    }

    @media (min-width: 768px) {
        .sidebar-mini.sidebar-collapse .content-wrapper,
        .sidebar-mini.sidebar-collapse .main-footer,
        .sidebar-mini.sidebar-collapse .main-header {
            margin-left: 0rem !important;
            margin-right: 4.6rem !important;
            z-index: 100;
        }
        .sidebar-mini.sidebar-collapse .main-sidebar,
        .sidebar-mini.sidebar-collapse .main-sidebar:before {
            margin-right: 0;
            width: 3.8rem;
        }
        .sidebar-mini.sidebar-collapse .main-sidebar .mnui,
        .sidebar-mini.sidebar-collapse .main-sidebar .mnui:before {
            margin-left: 1px;
            font-size: 23px;
            margin-right: 6px;
        }
        .sidebar-mini.sidebar-collapse .main-sidebar .mnuii,
        .sidebar-mini.sidebar-collapse .main-sidebar .mnuii:before {
            margin-left: 5px;
        }
        .sidebar-mini.sidebar-collapse .main-sidebar .mnut {
            opacity: 0;
        }
        /*.sidebar-mini.sidebar-collapse .main-sidebar .mnut:hover*/
        /*{*/
        /*    color: black;*/
        /*    opacity: 1;*/
        /*    margin-left: 0;*/
        /*    display: inline-block;*/
        /*}*/
        .sidebar-mini.sidebar-collapse .main-sidebar .mnutt {
            display: none;
        }
        .sidebar-mini.sidebar-collapse .main-sidebar:hover .sidebar>.mnut,
        .sidebar-mini.sidebar-collapse .main-sidebar:hover .nav-sidebar .nav-link p,
        .sidebar-mini.sidebar-collapse .main-sidebar:hover .mnut {
            opacity: 1;
            margin-left: 0;
            display: inline-block;
        }
        .sidebar-mini.sidebar-collapse .main-sidebar:hover .sidebar>.mnutt,
        .sidebar-mini.sidebar-collapse .main-sidebar:hover .nav-sidebar .nav-link p,
        .sidebar-mini.sidebar-collapse .main-sidebar:hover .mnutt {
            display: inline;
        }
        /*.sidebar-mini.sidebar-collapse .main-sidebar ,.sidebar a, .dropdown-btn {*/
        /*    padding: 6px 6px 6px 11px;*/
        /*}*/
    }
    /*@media (min-width: 992px){*/
    /*    .sidebar-mini.sidebar-collapse .main-sidebar .mnut:hover .user-panel > .info, .sidebar-mini.sidebar-collapse .main-sidebar .mnut:hover .nav-sidebar .nav-link p, .sidebar-mini.sidebar-collapse .main-sidebar .mnut:hover .brand-text {*/
    /*        opacity: 1;*/
    /*        margin-left: 0;*/
    /*        display: inline-block;*/
    /*    }*/
    /*}*/

    @media (min-width: 768px) {
        .main-header {
            transition: margin-right .3s ease-in-out;
            margin-right: 1px;
            margin-left: 0;
            z-index: 3000;
        }
    }

    @media (min-width: 768px) {
        .content-wrapper,
        .main-footer {
            transition: margin-right .3s ease-in-out;
            margin-right: 250px;
            margin-left: 0;
            z-index: 3000;
        }
    }

    @media (max-width: 768px) {
        .main-sidebar,
        .main-sidebar:before {
            box-shadow: none!important;
            margin-right: -250px;
            margin-left: 0;
        }
        .content-wrapper,
        .content-wrapper:before,
        .main-footer,
        .main-footer:before,
        .main-header,
        .main-header:before {
            margin-right: 0;
        }
        .sidebar-open .main-sidebar,
        .sidebar-open .main-sidebar:before {
            margin-right: 0;
            z-index: 4000;
        }
    }

    .sidebar-collapse .main-sidebar,
    .sidebar-collapse .main-sidebar:before {
        margin-right: -250px;
    }

    .main-sidebar {
        left: auto;
        right: 0;
    }

    .nav {
        padding-inline-start: 0px !important;
    }

    @media (max-width: 576px) {
        .sidebar-open .main-sidebar {
            margin-right: 0;
            z-index: 4000;
            width: 100%;
        }
    }

    .txtsbmnu {
        font-size: 13px;
        height: 28px;
        word-wrap: normal;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .txtsbmnu1 {
        font-size: 12px;
        word-wrap: normal;
        white-space: nowrap;
        text-overflow: ellipsis;
        line-height: 0;
    }

    .txtsbmnu2 {
        font-size: 13px;
        word-wrap: normal;
        white-space: nowrap;
        text-overflow: ellipsis;
        color: #0581ff;
        text-align: left;
    }

    .txtafza:hover {
        text-shadow: 0 0 3px #1388ff;
    }

    @media (max-width:1200px) {
        .txtsbmnu {
            font-size: 10px;
        }
        .txtsbmnu2 {
            font-size: 12px;
        }
        .txtsbmnu1 {
            font-size: 12px;
        }
    }

    @media (max-width:992px) {
        .txtsbmnu {
            font-size: 8px;
            height: 15px;
        }
        .txtsbmnu2 {
            font-size: 12px;
            /*margin-right:35px;*/
        }
        .txtsbmnu1 {
            font-size: 10px;
        }
    }

    @media (max-width:768px) {
        .txtsbmnu2 {
            font-size: 11px;
            /*margin-right:58px;*/
        }
    }

    @media (max-width:576px) {
        .txtsbmnu {
            font-size: 9px;
            height: 15px;
        }
        .txtsbmnu2 {
            font-size: 11px;
            /*margin-right:48px;*/
        }
        .txtsbmnu1 {
            font-size: 10px;
        }
    }

    @media (max-width:480px) {
        .txtsbmnu {
            font-size: 8px;
            height: 15px;
        }
        .txtsbmnu2 {
            font-size: 10px;
            /*margin-right:35px;*/
        }
        /*.txtsbmnu1 {*/
        /*    font-size:9px;*/
        /*}*/
    }
    /*@media (max-width:410px){*/
    /*    .txtsbmnu{*/
    /*        font-size:7px;*/
    /*    }*/
    /*    .txtsbmnu2 {*/
    /*        font-size:9px;*/
    /*    }*/
    /*    .txtsbmnu1 {*/
    /*        font-size:9px;*/
    /*    }*/
    /*}*/

    @media (max-width:377px) {
        .txtsbmnu {
            font-size: 8px !important;
            height: 15px;
        }
        .txtsbmnu2 {
            font-size: 10px !important;
            /*margin-right:35px;*/
        }
        /*.txtsbmnu1 {*/
        /*    font-size:9px;*/
        /*}*/
    }

    .dropbtn {
        /*background-color: #04AA6D;*/
        /*color: white;*/
        /*padding: 16px;*/
        /*font-size: 16px;*/
        /*border: none;*/
        background-color: inherit;
        border-radius: 5px;
        border: none;
    }

    .dropdown1 {
        position: relative;
        display: inline-block;
        box-shadow: 1px 3px 5px #888888;
        background-color: rgb(255, 182, 45);
        border-radius: 5px;
        border: none;
    }
</style>
<style>
    .card-counter {
        box-shadow: 2px 2px 10px #DADADA;
        margin: 5px;
        padding: 20px 10px;
        background-color: #fff;
        height: 100px;
        border-radius: 5px;
        transition: .3s linear all;
    }

    .card-counter:hover {
        box-shadow: 4px 4px 20px #DADADA;
        transition: .3s linear all;
    }

    .card-counter.primary {
        background-color: #007bff;
        color: #FFF;
    }

    .card-counter.danger {
        background-color: #ef5350;
        color: #FFF;
    }

    .card-counter.success {
        background-color: #66bb6a;
        color: #FFF;
    }

    .card-counter.info {
        background-color: #26c6da;
        color: #FFF;
    }

    .card-counter i {
        font-size: 55px;
        opacity: 0.2;
        float: left;
    }

    .card-counter .count-numbers {
        position: absolute;
        right: 35px;
        top: 20px;
        font-size: 32px;
        display: block;
    }

    .card-counter .count-name {
        position: absolute;
        right: 35px;
        top: 65px;
        text-transform: capitalize;
        opacity: 0.5;
        display: block;
        font-size: 18px;
    }

    @media (max-width:550px) {
        .card-counter i {
            font-size: 40px;
            opacity: 0.2;
            float: left;
        }
        .card-counter .count-numbers {
            position: absolute;
            right: 30px;
            top: 20px;
            font-size: 26px;
            display: block;
        }
        .card-counter .count-name {
            position: absolute;
            right: 35px;
            top: 65px;
            text-transform: capitalize;
            opacity: 0.5;
            display: block;
            font-size: 13px;
        }
    }
    .colorhed{
        background: linear-gradient(135deg, #77FFD2 0%, #6297DB 48%, #1EECFF 100%);
        font-size: 21px;
        font-weight: 800;
        color: #01013d;
    }
    label{
        font-weight: 700 !important;
        color: #0202b3;
        font-size: 18px;
    }
</style>
<style type="text/css">
    .dropzone {
        border: 2px dashed #999999;
        border-radius: 10px;
    }

    .dropzone .dz-default.dz-message {
        height: 171px;
        background-size: 132px 132px;
        margin-top: -101.5px;
        background-position-x: center;


    }

    .dropzone .dz-default.dz-message span {
        display: block;
        margin-top: 145px;
        font-size: 20px;
        text-align: center;
    }
</style>
<body class="hold-transition sidebar-mini">
<!--منو-->
<div class="container-fluid menubala mb-3">
    <div class="row">
        <div class="col-6 col-sm-7 col-md-9 d-inline  mb-0 mr-0 ml-0 p-0">
            <nav class="navbar navbar-expand-md navmenu">
                <a href="/profile" class="btnslide" type="button" data-toggle="collapse" data-widget="pushmenu" data-widget="pushmenu">
                    <!-- <i class="fa fa-bars docme"></i> -->
                    <span class="fa fa-align-justify"></span>
                </a>
                <a class="navbar-brand p-0" href="/">
                </a>
            </nav>
        </div>
    </div>
</div>

<nav class="sidebar main-sidebar " >
    <a href="{{route('dashboard.member')}}" class="is btn100">
        <div class="mnu d-inline">
            <i class="mnui fa fa-dashboard is  "></i>
            <p class="mnut d-inline mr-2">داشبورد</p>
        </div>
    </a>


    <form action="{{route('member.logout')}}" method="post">
        @csrf
        <button class="is btn100 ">
            <div class="mnu d-inline ">
                <i class="mnui fa fa-sign-out is "></i>
                <p class="mnut puser d-inline ">خروج</p>
            </div>
        </button>
    </form>

</nav>
@php
    use Illuminate\Support\Facades\Auth;

@endphp
<div class="container"  style="margin-top: 90px;">
    <div class="card mt-3" >
        <div class="card-header colorhed">
ارسال تیکت
        </div>
        <div class="card-body">
            <form method="post" action="{{route('ticket.send')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="member_id" value="{{Auth::guard('member')->id()}}">
                <input type="hidden" name="user" value="{{Auth::guard('member')->id()}}">
                <div class="row">
                    <div class="col-12 col-md-6 my-3">
                        <label class="input-group">نام کاربری : </label>
                        <input type="text" class="form-control" value="{{Auth::guard('member')->user()->user_name}}" disabled>
                    </div>
                    <div class="col-12 col-md-6 my-3">
                        <label class="input-group">ایمیل : </label>
                        <input type="email" class="form-control" value="{{Auth::guard('member')->user()->email}}" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 my-3">
                        <label class="input-group">عنوان : </label>
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 my-3">
                        <label for="sel1">اولویت :</label>
                        <select class="form-control" id="priority" name="priority">
                            <option value="بالا">بالا</option>
                            <option value="متوسط">متوسط</option>
                            <option value="پایین">پایین</option>
                        </select>
                    </div>
                    <div class="col-6 my-3">
                    <label for="sel1">بخش :</label>
                    <select class="form-control" id="section" name="section">
                        <option value="امور مالی و فروش">امور مالی و فروش</option>
                        <option value="پشتیبانی فنی">پشتیبانی فنی</option>
                        <option value="سایر">سایر</option>
                    </select>
                </div>
                </div>
                <div class="row">
                    <div class="col-12 my-3">
                        <label class="input-group">پیام : </label>
                        <textarea id="editor12" name="description" rows="5" style="width: 100%"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 my-3">
                        <label class="input-group">ضمیمه ها : </label>
                        <div class="needsclick dropzone" style="height: 165px" id="document-dropzone"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 my-3 d-inline">
                        <button class="btn btn-primary  mt-3 btn-block" type="submit">ثبت</button>
                    </div>
                    <div class="col-6 my-3 d-inline">
                        <a href="{{url()->previous()}}" class="btn btn-light btn-block mt-3">انصراف</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
<script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js "></script>
<script type="text/javascript " src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js "></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>


    <script type="text/javascript">
        var uploadedDocumentMap = {}
        Dropzone.options.documentDropzone = {
        url: '{{ route('dropzone.images.store') }}',
        maxFilesize: 10, // MB
        addRemoveLinks: false,
        headers: {
        'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
        success: function (file, response) {
        $('form').append('<input type="hidden" name="tiket_files[]" value="' + response.name + '">')
        uploadedDocumentMap[file.name] = response.name
    },
        removedfile: function (file) {
        var name = uploadedDocumentMap[file.name];
        var token = $('[name=_token]').val();
        var dir = $('[name=dir]').val();
        console.log(dir);


        $.ajax({
        type: 'post',
        headers: {'X-CSRF-Token': token},
        url: 'dropzone/image/delete',
        data: {name: name, dir: dir},
        dataType: 'html'
    });

        var _ref;
        return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
        availableImages = availableImages + 1;
    },
        // init: function () {
        //     @if(isset($project) && $project->document)
        //     var files =
        //             {!! json_encode($project->document) !!}
        //             for (var i in files) {
        //         var file = files[i]
        //         this.options.addedfile.call(this, file)
        //         file.previewElement.classList.add('dz-complete')
        //         $('form').append('<input type="hidden" name="images[]" value="' + file.file_name + '">')
        //     }
        //     @endif
        // }
    };

</script>
@toastr_js
@toastr_render
<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }

    $('.btnslide').click(function() {
        $(this).toggleClass("click");
        $('.sidebar').toggleClass("show");
    });
    $('.sidebar ul li a').click(function() {
        var id = $(this).attr('id');
        $('nav ul li ul.item-show-' + id).toggleClass("show");
        $('nav ul li #' + id + ' span').toggleClass("rotate");

    });
    $('nav ul li').click(function() {
        $(this).addClass("active").siblings().removeClass("active");
    });
</script>
<script>
    (function(global, factory) {
        typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
            typeof define === 'function' && define.amd ? define(['exports'], factory) :
                (factory((global.adminlte = {})));
    }(this, (function(exports) {
        'use strict';

        var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function(obj) {
            return typeof obj;
        } : function(obj) {
            return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
        };
        var classCallCheck = function(instance, Constructor) {
            if (!(instance instanceof Constructor)) {
                throw new TypeError("Cannot call a class as a function");
            }
        };
        var ControlSidebar = function($) {
            var NAME = 'ControlSidebar';
            var DATA_KEY = 'lte.control.sidebar';
            var JQUERY_NO_CONFLICT = $.fn[NAME];
            var Selector = {
                CONTROL_SIDEBAR: '.control-sidebar',
                DATA_TOGGLE: '[data-widget="control-sidebar"]',
                MAIN_HEADER: '.main-header'
            };

            var ClassName = {
                CONTROL_SIDEBAR_OPEN: 'control-sidebar-open',
                CONTROL_SIDEBAR_SLIDE: 'control-sidebar-slide-open'
            };

            var Default = {
                slide: true

            };
            var ControlSidebar = function() {
                function ControlSidebar(element, config) {
                    classCallCheck(this, ControlSidebar);

                    this._element = element;
                    this._config = this._getConfig(config);
                }

                // Public

                ControlSidebar.prototype.show = function show() {
                    // Show the control sidebar
                    if (this._config.slide) {
                        $('body').removeClass(ClassName.CONTROL_SIDEBAR_SLIDE);
                    } else {
                        $('body').removeClass(ClassName.CONTROL_SIDEBAR_OPEN);
                    }
                };

                ControlSidebar.prototype.collapse = function collapse() {
                    // Collapse the control sidebar
                    if (this._config.slide) {
                        $('body').addClass(ClassName.CONTROL_SIDEBAR_SLIDE);
                    } else {
                        $('body').addClass(ClassName.CONTROL_SIDEBAR_OPEN);
                    }
                };

                ControlSidebar.prototype.toggle = function toggle() {
                    this._setMargin();

                    var shouldOpen = $('body').hasClass(ClassName.CONTROL_SIDEBAR_OPEN) || $('body').hasClass(ClassName.CONTROL_SIDEBAR_SLIDE);
                    if (shouldOpen) {
                        // Open the control sidebar
                        this.show();
                    } else {
                        // Close the control sidebar
                        this.collapse();
                    }
                };

                // Private

                ControlSidebar.prototype._getConfig = function _getConfig(config) {
                    return $.extend({}, Default, config);
                };

                ControlSidebar.prototype._setMargin = function _setMargin() {
                    $(Selector.CONTROL_SIDEBAR).css({
                        top: $(Selector.MAIN_HEADER).outerHeight()
                    });
                };

                // Static

                ControlSidebar._jQueryInterface = function _jQueryInterface(operation) {
                    return this.each(function() {
                        var data = $(this).data(DATA_KEY);

                        if (!data) {
                            data = new ControlSidebar(this, $(this).data());
                            $(this).data(DATA_KEY, data);
                        }

                        if (data[operation] === 'undefined') {
                            throw new Error(operation + ' is not a function');
                        }

                        data[operation]();
                    });
                };

                return ControlSidebar;
            }();


            $(document).on('click', Selector.DATA_TOGGLE, function(event) {
                event.preventDefault();

                ControlSidebar._jQueryInterface.call($(this), 'toggle');
            });

            $.fn[NAME] = ControlSidebar._jQueryInterface;
            $.fn[NAME].Constructor = ControlSidebar;
            $.fn[NAME].noConflict = function() {
                $.fn[NAME] = JQUERY_NO_CONFLICT;
                return ControlSidebar._jQueryInterface;
            };

            return ControlSidebar;
        }(jQuery);



        var Layout = function($) {


            var NAME = 'Layout';
            var DATA_KEY = 'lte.layout';
            var JQUERY_NO_CONFLICT = $.fn[NAME];

            var Selector = {
                SIDEBAR: '.main-sidebar',
                HEADER: '.main-header',
                CONTENT: '.content-wrapper',
                CONTENT_HEADER: '.content-header',
                WRAPPER: '.wrapper',
                CONTROL_SIDEBAR: '.control-sidebar',
                LAYOUT_FIXED: '.layout-fixed',
                FOOTER: '.main-footer'
            };

            var ClassName = {
                HOLD: 'hold-transition',
                SIDEBAR: 'main-sidebar',
                LAYOUT_FIXED: 'layout-fixed'



            };
            var Layout = function() {
                function Layout(element) {
                    classCallCheck(this, Layout);

                    this._element = element;

                    this._init();
                }

                // Public

                Layout.prototype.fixLayoutHeight = function fixLayoutHeight() {
                    var heights = {
                        window: $(window).height(),
                        header: $(Selector.HEADER).outerHeight(),
                        footer: $(Selector.FOOTER).outerHeight(),
                        sidebar: $(Selector.SIDEBAR).height()
                    };
                    var max = this._max(heights);

                    $(Selector.CONTENT).css('min-height', max - heights.header);
                    $(Selector.SIDEBAR).css('min-height', max - heights.header);
                };

                // Private

                Layout.prototype._init = function _init() {
                    var _this = this;

                    // Enable transitions
                    $('body').removeClass(ClassName.HOLD);

                    // Activate layout height watcher
                    this.fixLayoutHeight();
                    $(Selector.SIDEBAR).on('collapsed.lte.treeview expanded.lte.treeview collapsed.lte.pushmenu expanded.lte.pushmenu', function() {
                        _this.fixLayoutHeight();
                    });

                    $(window).resize(function() {
                        _this.fixLayoutHeight();
                    });

                    $('body, html').css('height', 'auto');
                };

                Layout.prototype._max = function _max(numbers) {
                    // Calculate the maximum number in a list
                    var max = 0;

                    Object.keys(numbers).forEach(function(key) {
                        if (numbers[key] > max) {
                            max = numbers[key];
                        }
                    });

                    return max;
                };

                // Static

                Layout._jQueryInterface = function _jQueryInterface(operation) {
                    return this.each(function() {
                        var data = $(this).data(DATA_KEY);

                        if (!data) {
                            data = new Layout(this);
                            $(this).data(DATA_KEY, data);
                        }

                        if (operation) {
                            data[operation]();
                        }
                    });
                };

                return Layout;
            }();




            $(window).on('load', function() {
                Layout._jQueryInterface.call($('body'));
            });



            $.fn[NAME] = Layout._jQueryInterface;
            $.fn[NAME].Constructor = Layout;
            $.fn[NAME].noConflict = function() {
                $.fn[NAME] = JQUERY_NO_CONFLICT;
                return Layout._jQueryInterface;
            };

            return Layout;
        }(jQuery);



        var PushMenu = function($) {


            var NAME = 'PushMenu';
            var DATA_KEY = 'lte.pushmenu';
            var EVENT_KEY = '.' + DATA_KEY;
            var JQUERY_NO_CONFLICT = $.fn[NAME];

            var Event = {
                COLLAPSED: 'collapsed' + EVENT_KEY,
                SHOWN: 'shown' + EVENT_KEY
            };

            var Default = {
                screenCollapseSize: 768
            };

            var Selector = {
                TOGGLE_BUTTON: '[data-widget="pushmenu"]',
                SIDEBAR_MINI: '.sidebar-mini',
                SIDEBAR_COLLAPSED: '.sidebar-collapse',
                BODY: 'body',
                OVERLAY: '#sidebar-overlay',
                WRAPPER: '.wrapper'
            };

            var ClassName = {
                SIDEBAR_OPEN: 'sidebar-open',
                COLLAPSED: 'sidebar-collapse',
                OPEN: 'sidebar-open',
                SIDEBAR_MINI: 'sidebar-mini'



            };
            var PushMenu = function() {
                function PushMenu(element, options) {
                    classCallCheck(this, PushMenu);

                    this._element = element;
                    this._options = $.extend({}, Default, options);

                    if (!$(Selector.OVERLAY).length) {
                        this._addOverlay();
                    }
                }

                // Public

                PushMenu.prototype.show = function show() {
                    $(Selector.BODY).addClass(ClassName.OPEN).removeClass(ClassName.COLLAPSED);

                    var shownEvent = $.Event(Event.SHOWN);
                    $(this._element).trigger(shownEvent);
                };

                PushMenu.prototype.collapse = function collapse() {
                    $(Selector.BODY).removeClass(ClassName.OPEN).addClass(ClassName.COLLAPSED);

                    var collapsedEvent = $.Event(Event.COLLAPSED);
                    $(this._element).trigger(collapsedEvent);
                };

                PushMenu.prototype.toggle = function toggle() {
                    var isShown = void 0;
                    if ($(window).width() >= this._options.screenCollapseSize) {
                        isShown = !$(Selector.BODY).hasClass(ClassName.COLLAPSED);
                    } else {
                        isShown = $(Selector.BODY).hasClass(ClassName.OPEN);
                    }

                    if (isShown) {
                        this.collapse();
                    } else {
                        this.show();
                    }
                };

                // Private


                PushMenu.prototype._addOverlay = function _addOverlay() {
                    var _this = this;

                    var overlay = $('<div />', {
                        id: 'sidebar-overlay'
                    });

                    overlay.on('click', function() {
                        _this.collapse();
                    });

                    $(Selector.WRAPPER).append(overlay);
                };

                // Static

                PushMenu._jQueryInterface = function _jQueryInterface(operation) {
                    return this.each(function() {
                        var data = $(this).data(DATA_KEY);

                        if (!data) {
                            data = new PushMenu(this);
                            $(this).data(DATA_KEY, data);
                        }

                        if (operation) {
                            data[operation]();
                        }
                    });
                };

                return PushMenu;
            }();



            $(document).on('click', Selector.TOGGLE_BUTTON, function(event) {
                event.preventDefault();

                var button = event.currentTarget;

                if ($(button).data('widget') !== 'pushmenu') {
                    button = $(button).closest(Selector.TOGGLE_BUTTON);
                }

                PushMenu._jQueryInterface.call($(button), 'toggle');
            });



            $.fn[NAME] = PushMenu._jQueryInterface;
            $.fn[NAME].Constructor = PushMenu;
            $.fn[NAME].noConflict = function() {
                $.fn[NAME] = JQUERY_NO_CONFLICT;
                return PushMenu._jQueryInterface;
            };

            return PushMenu;
        }(jQuery);


        var Treeview = function($) {


            var NAME = 'Treeview';
            var DATA_KEY = 'lte.treeview';
            var EVENT_KEY = '.' + DATA_KEY;
            var JQUERY_NO_CONFLICT = $.fn[NAME];

            var Event = {
                SELECTED: 'selected' + EVENT_KEY,
                EXPANDED: 'expanded' + EVENT_KEY,
                COLLAPSED: 'collapsed' + EVENT_KEY,
                LOAD_DATA_API: 'load' + EVENT_KEY
            };

            var Selector = {
                LI: '.nav-item',
                LINK: '.nav-link',
                TREEVIEW_MENU: '.nav-treeview',
                OPEN: '.menu-open',
                DATA_WIDGET: '[data-widget="treeview"]'
            };

            var ClassName = {
                LI: 'nav-item',
                LINK: 'nav-link',
                TREEVIEW_MENU: 'nav-treeview',
                OPEN: 'menu-open'
            };

            var Default = {
                trigger: Selector.DATA_WIDGET + ' ' + Selector.LINK,
                animationSpeed: 300,
                accordion: true


            };
            var Treeview = function() {
                function Treeview(element, config) {
                    classCallCheck(this, Treeview);

                    this._config = config;
                    this._element = element;
                }

                // Public

                Treeview.prototype.init = function init() {
                    this._setupListeners();
                };

                Treeview.prototype.expand = function expand(treeviewMenu, parentLi) {
                    var _this = this;

                    var expandedEvent = $.Event(Event.EXPANDED);

                    if (this._config.accordion) {
                        var openMenuLi = parentLi.siblings(Selector.OPEN).first();
                        var openTreeview = openMenuLi.find(Selector.TREEVIEW_MENU).first();
                        this.collapse(openTreeview, openMenuLi);
                    }

                    treeviewMenu.slideDown(this._config.animationSpeed, function() {
                        parentLi.addClass(ClassName.OPEN);
                        $(_this._element).trigger(expandedEvent);
                    });
                };

                Treeview.prototype.collapse = function collapse(treeviewMenu, parentLi) {
                    var _this2 = this;

                    var collapsedEvent = $.Event(Event.COLLAPSED);

                    treeviewMenu.slideUp(this._config.animationSpeed, function() {
                        parentLi.removeClass(ClassName.OPEN);
                        $(_this2._element).trigger(collapsedEvent);
                        treeviewMenu.find(Selector.OPEN + ' > ' + Selector.TREEVIEW_MENU).slideUp();
                        treeviewMenu.find(Selector.OPEN).removeClass(ClassName.OPEN);
                    });
                };

                Treeview.prototype.toggle = function toggle(event) {
                    var $relativeTarget = $(event.currentTarget);
                    var treeviewMenu = $relativeTarget.next();

                    if (!treeviewMenu.is(Selector.TREEVIEW_MENU)) {
                        return;
                    }

                    event.preventDefault();

                    var parentLi = $relativeTarget.parents(Selector.LI).first();
                    var isOpen = parentLi.hasClass(ClassName.OPEN);

                    if (isOpen) {
                        this.collapse($(treeviewMenu), parentLi);
                    } else {
                        this.expand($(treeviewMenu), parentLi);
                    }
                };

                // Private

                Treeview.prototype._setupListeners = function _setupListeners() {
                    var _this3 = this;

                    $(document).on('click', this._config.trigger, function(event) {
                        _this3.toggle(event);
                    });
                };

                // Static

                Treeview._jQueryInterface = function _jQueryInterface(config) {
                    return this.each(function() {
                        var data = $(this).data(DATA_KEY);
                        var _config = $.extend({}, Default, $(this).data());

                        if (!data) {
                            data = new Treeview($(this), _config);
                            $(this).data(DATA_KEY, data);
                        }

                        if (config === 'init') {
                            data[config]();
                        }
                    });
                };

                return Treeview;
            }();



            $(window).on(Event.LOAD_DATA_API, function() {
                $(Selector.DATA_WIDGET).each(function() {
                    Treeview._jQueryInterface.call($(this), 'init');
                });
            });



            $.fn[NAME] = Treeview._jQueryInterface;
            $.fn[NAME].Constructor = Treeview;
            $.fn[NAME].noConflict = function() {
                $.fn[NAME] = JQUERY_NO_CONFLICT;
                return Treeview._jQueryInterface;
            };

            return Treeview;
        }(jQuery);


        var Widget = function($) {


            var NAME = 'Widget';
            var DATA_KEY = 'lte.widget';
            var EVENT_KEY = '.' + DATA_KEY;
            var JQUERY_NO_CONFLICT = $.fn[NAME];

            var Event = {
                EXPANDED: 'expanded' + EVENT_KEY,
                COLLAPSED: 'collapsed' + EVENT_KEY,
                REMOVED: 'removed' + EVENT_KEY
            };

            var Selector = {
                DATA_REMOVE: '[data-widget="remove"]',
                DATA_COLLAPSE: '[data-widget="collapse"]',
                CARD: '.card',
                CARD_HEADER: '.card-header',
                CARD_BODY: '.card-body',
                CARD_FOOTER: '.card-footer',
                COLLAPSED: '.collapsed-card'
            };

            var ClassName = {
                COLLAPSED: 'collapsed-card'
            };

            var Default = {
                animationSpeed: 'normal',
                collapseTrigger: Selector.DATA_COLLAPSE,
                removeTrigger: Selector.DATA_REMOVE
            };

            var Widget = function() {
                function Widget(element, settings) {
                    classCallCheck(this, Widget);

                    this._element = element;
                    this._parent = element.parents(Selector.CARD).first();
                    this._settings = $.extend({}, Default, settings);
                }

                Widget.prototype.collapse = function collapse() {
                    var _this = this;

                    this._parent.children(Selector.CARD_BODY + ', ' + Selector.CARD_FOOTER).slideUp(this._settings.animationSpeed, function() {
                        _this._parent.addClass(ClassName.COLLAPSED);
                    });

                    var collapsed = $.Event(Event.COLLAPSED);

                    this._element.trigger(collapsed, this._parent);
                };

                Widget.prototype.expand = function expand() {
                    var _this2 = this;

                    this._parent.children(Selector.CARD_BODY + ', ' + Selector.CARD_FOOTER).slideDown(this._settings.animationSpeed, function() {
                        _this2._parent.removeClass(ClassName.COLLAPSED);
                    });

                    var expanded = $.Event(Event.EXPANDED);

                    this._element.trigger(expanded, this._parent);
                };

                Widget.prototype.remove = function remove() {
                    this._parent.slideUp();

                    var removed = $.Event(Event.REMOVED);

                    this._element.trigger(removed, this._parent);
                };

                Widget.prototype.toggle = function toggle() {
                    if (this._parent.hasClass(ClassName.COLLAPSED)) {
                        this.expand();
                        return;
                    }

                    this.collapse();
                };

                // Private

                Widget.prototype._init = function _init(card) {
                    var _this3 = this;

                    this._parent = card;

                    $(this).find(this._settings.collapseTrigger).click(function() {
                        _this3.toggle();
                    });

                    $(this).find(this._settings.removeTrigger).click(function() {
                        _this3.remove();
                    });
                };

                // Static

                Widget._jQueryInterface = function _jQueryInterface(config) {
                    return this.each(function() {
                        var data = $(this).data(DATA_KEY);

                        if (!data) {
                            data = new Widget($(this), data);
                            $(this).data(DATA_KEY, typeof config === 'string' ? data : config);
                        }

                        if (typeof config === 'string' && config.match(/remove|toggle/)) {
                            data[config]();
                        } else if ((typeof config === 'undefined' ? 'undefined' : _typeof(config)) === 'object') {
                            data._init($(this));
                        }
                    });
                };

                return Widget;
            }();



            $.fn[NAME] = Widget._jQueryInterface;
            $.fn[NAME].Constructor = Widget;
            $.fn[NAME].noConflict = function() {
                $.fn[NAME] = JQUERY_NO_CONFLICT;
                return Widget._jQueryInterface;
            };

            return Widget;
        }(jQuery);

        exports.ControlSidebar = ControlSidebar;
        exports.Layout = Layout;
        exports.PushMenu = PushMenu;
        exports.Treeview = Treeview;
        exports.Widget = Widget;

        Object.defineProperty(exports, '__esModule', {
            value: true
        });

    })));
    //# sourceMappingURL=adminlte.js.map
</script>

</body>

</html>
<script>
    import Index from "../../../public/plugins/datatables/extensions/FixedColumns/examples/index.html";
    export default {
        components: {Index}
    }
</script>
