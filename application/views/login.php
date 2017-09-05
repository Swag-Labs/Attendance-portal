<style>
    @import url("https://fonts.googleapis.com/css?family=Roboto:100");
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        width: 390px;
        height: 549px;
        background: #000;
        margin-left: auto;
        margin-right: auto;
        margin-top: 11px;
        -webkit-box-shadow: 0px 0px 114px 2px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 0px 114px 2px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 0px 114px 2px rgba(0, 0, 0, 0.75);
    }
    .container svg {
        position: absolute;
    }

    .rect1 {
        z-index: 1;
        stroke-dasharray: 197 509;
        stroke-dashoffset: -729;
        transition: stroke-width 1s, stroke-dashoffset 1s, stroke-dasharray 1s;
        transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    }

    .rect2 {
        z-index: 1;
        stroke-dasharray: 197 509;
        stroke-dashoffset: -1058;
        transition: stroke-width 1s, stroke-dashoffset 1s, stroke-dasharray 1s;
        transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    }

    .email {
        position: absolute;
        margin-top: 254px;
        border: none;
        background: #000;
        margin-left: 101px;
        color: gray;
        width: 196px;
        height: 44px;
        padding-left: 3px;
        z-index: 100;
        font-family: 'Roboto', sans-serif;
        padding-top: 21px;
        transition: all 600ms cubic-bezier(0.895, 0.03, 0.685, 0.22);
    }
    .email:focus {
        outline-width: 0;
        font-size: 16px;
    }

    .pass {
        position: absolute;
        margin-top: 305px;
        border: none;
        background: #000;
        margin-left: 101px;
        color: gray;
        width: 196px;
        height: 44px;
        padding-left: 3px;
        z-index: 100;
        font-family: 'Roboto', sans-serif;
        padding-top: 21px;
        transition: all 600ms cubic-bezier(0.895, 0.03, 0.685, 0.22);
    }
    .pass:focus {
        outline-width: 0;
        font-size: 16px;
    }

    button {
        position: absolute;
        z-index: 100;
        width: 149px;
        height: 43px;
        border: 1px solid #fff;
        background: #000;
        font-family: 'Roboto', sans-serif;
        color: #fff;
        font-size: 16px;
        border-radius: 22px;
        margin-top: 421px;
        margin-left: 120.5px;
        transition: 0.5s;
        cursor: pointer;
    }
    button:hover {
        color: #000;
        background: #fff;
    }
    button:focus {
        outline-width: 0;
    }

    .header {
        position: absolute;
        text-align: center;
        font-family: 'Roboto', sans-serif;
        color: #fff;
        font-size: 48px;
        margin-left: 128px;
        margin-top: 81px;
    }

    .info {
        position: absolute;
        text-align: center;
        font-family: 'Roboto', sans-serif;
        color: #BDFFBD;
        font-size: 14px;
        margin-left: 125px;
        margin-top: 181px;
    }
</style>





<div class="al" style="margin-top: 50px"></div>
<div class="container">
    <div class="header">Sign In</div>
    <div class='info'>*Click on the input boxes</div>
    <form action="<?=site_url('admin/login_user')?>" method="post">
        <input id='username' class='email' class='inc2' type="email" name="email" placeholder='Email*'  value="">
        <input id='password' class='pass'  class='inc1' type="password" name="password" placeholder='Password*' value="">
        <button >Sign In</button>
    </form>
    <svg width="390" height="549" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <rect id='rect' class='rect1'   x="45px"  y="300px"   rx="27" ry="27" width="300px" height="50px" style="stroke: #fff; stroke-width: 1px; fill: #000" />
    </svg>
</div>