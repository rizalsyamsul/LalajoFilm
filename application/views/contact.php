<style>
    body {
        background-color: white;
    }

    /* ---------------------header-------------------- */

    .img {
        margin-top: 0px;
        /* margin-left: 500px; */
        /* margin-bottom: -50px; */
    }

    .header {
        background-color: aquamarine;
        height: 300px;
    }

    .header h1 {
        align-items: center;
        justify-content: space-between;
        text-align: center;
        font-size: 2cm;
        padding-top: 100px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin-top: 0px;
    }

    .header p {
        align-items: center;
        justify-content: space-between;
        text-align: center;
        padding-top: 30px;
        font-size: 30px;
        margin-top: 0px;
    }

    /* ------------------------BODY--------------------------- */

    .hp {
        padding-top: 50px;
        padding-left: 400px;
        font-size: 20px;
    }

    .hp h1 {
        font-family: "MS Sans Serif", Geneva, sans-serif;
        font-size: 25px;
        width: 60%;
        align-items: center;
        justify-content: space-between;
    }

    .hp p {
        font-family: "MS Sans Serif", Geneva, sans-serif;
        font-size: 28px;
        width: 55%;
        align-items: center;
        text-align: center;
        justify-content: space-between;
    }

    .alamat {
        padding-top: 30px;
        padding-left: 150px;
    }

    .alamat p {
        font-family: "MS Sans Serif", Geneva, sans-serif;
        font-size: 28px;
        width: 60%;
        align-items: flex-start;
        justify-content: space-between;
    }

    .alamat h1 {
        font-family: "MS Sans Serif", Geneva, sans-serif;
        font-size: 30px;
        width: 40%;
        align-items: center;
        text-align: center;
        justify-content: space-between;
    }

    .gambar {
        align-items: center;
        text-align: center;
        justify-content: space-between;
    }

    /* --------------------------------BOTTOM-------------------------- */
    .bottom {
        background-color: black;
        height: 130px;
        margin-top: 100px;
        color: white;
    }

    .customer h1 {
        font-size: 20px;
        padding-left: 400px;
        padding-top: 10px;
        width: 100%;
        align-items: center;
        text-align: center;
        justify-content: space-between;
    }

    .customer p {
        font-size: 15px;
        padding-left: 400px;
        width: 100%;
        align-items: center;
        text-align: center;
        justify-content: space-between;
    }

    .follow p {
        font-size: 20px;
        padding-left: 350px;
        width: 100%;
        align-items: center;
        text-align: center;
        justify-content: space-between;
    }

    .ig {
        padding-left: 240px;
    }

    .x {
        padding-left: 430px;
        padding-right: 120px;
        font-size: 20px;
    }
</style>
<div class="contact">
    <div class="header">
        <h1><b> Contact Us</b></h1>
        <p><i>"Always laugh when you can. It is cheap medicine"</i></p>
    </div>
    <div class="img">
        <!-- <img src="https://cdn.pixabay.com/photo/2017/10/31/23/26/panorama-2906782__340.jpg" width="70%" height="100%"> -->
        <img src="<?= base_url() . 'gambar/1.jpg' ?>" width="100%%">
    </div>
    <div class="body">
        <table class="table">
            <tr>
                <td>
                    <div class="hp">
                        <div class="form-group">
                            <h1> <span class="glyphicon glyphicon-phone"><b> 021-82222222</b></span></h1>
                            <p>Monday - Friday
                                08:00 AM - 22:00 PM
                            </p>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="alamat">
                        <h1 for="alamat">Address</h1>
                        <p> Jl. Telekomunikasi Jl. Terusan Buah Batu, Sukapura,<br> Kec. Dayeuhkolot, Bandung, Jawa Barat 40257</p>
                    </div>
                </td>
            </tr>
        </table>
        <div class="gambar">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.298822307253!2d107.62834001477327!3d-6.974027994961787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6285c5b7da517%3A0x864485f26a388f95!2sTelkom%20University!5e0!3m2!1sen!2sid!4v1587362419881!5m2!1sen!2sid" width="500" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <div class="bottom">
        <table id="table">
            <tr>
                <td class="customer">
                    <h1>CUSTOMER SUPPORT</h1>
                    <p>Let Us Help Find You're Looking For</p>
                </td>
                <td class="follow">
                    <p>FOLLOW US</p>
                </td>
            </tr>
            <tr>
                <table>
                    <tr>
                        <td class="x">
                            <table>
                                <tr>
                                    <p>HELP FAQ CONTACT</p>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <div class="ig">
                                <img src="<?= base_url() . 'gambar/ig.png' ?>" width="28px">
                                <img src="<?= base_url() . 'gambar/fb.png' ?>" width="28px">
                                <img src="<?= base_url() . 'gambar/twitter.png' ?>" width="38px">
                                <img src="<?= base_url() . 'gambar/yt.png' ?>" width="38px">
                            </div>
                        </td>
                    </tr>
                </table>
            </tr>
        </table>
    </div>
</div>