<?php
include_once('Templates/header.php');
?>

<section style="width:100%;height:102vh;background:url('Sources/Images/Index-Banner.png') no-repeat center center;background-size:cover;background-color:none;padding-top:50px">
    <div class="container">
        <div class="row" style="height:150px">

        </div>
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 text-left">
            <h1  class="title texto-laranja " >Lendas nunca morrem!</h1>
            <h2  class="sub-title texto-laranja">Seja parte de nossa história, seja parte da lenda!</h2>
            <p class="text-white">Bem vindos ao site das lendas! Aqui você poderá se aproximar de nós e ver que nossos jogadores são gente, como a gente. </p>

                <button type="button" class="btn btn-info radiuss" name="twitter"><i class="fab fa-twitter "></i></button>

                <button type="button" class="btn radiuss btn-blue"  name="facebook">.<i class="fab fa-facebook-f"></i></button>

                <button type="button" class="btn radiuss btn-danger"  name="instagram"><i class="fab fa-instagram"></i></button>


        </div>


    </div>
    </div>


</section>
<div class="bg-secondary text-center" style="height: 80px;padding:15px;">

</div>
<div style="background: #c1c1c1;padding:5px;">


    <section class="container" style="margin-top: 10px;background:">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Últimos jogos</h2>
            </div>
        </div>

        <div class="row">


            <h3 class="text-center"><img src="https://img.icons8.com/wired/30/000000/hearthstone.png"> Hearthstone</h3>
            <div class="card col-12 text-dark bg-green" style="padding:5px">
                <div class="row">
                    <div class="col-4 text-right">
                        <img src="Sources/Images/logo.svg" height="90px" alt="">
                        <b style="font-size:30px">2</b>
                    </div>
                    <div class="col-4 text-center">
                        <strong>LAU X LAU</strong>
                    </div>
                    <div class="col-4 text-left">
                        <b style="font-size:30px">0</b>
                        <img src="Sources/Images/logo.svg" height="90px" alt="">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <h3 class="text-center"><img src="https://img.icons8.com/wired/30/000000/hearthstone.png"> Hearthstone</h3>
            <div class="card col-12 bg-danger" style="padding:5px">

                <div class="row">
                    <div class="col-4 text-right">
                        <img src="Sources/Images/logo.svg" height="90px" alt="">
                        <b style="font-size:30px">1</b>
                    </div>
                    <div class="col-4 text-center">
                        <strong>LAU X LAU</strong>
                    </div>
                    <div class="col-4 text-left">
                        <b style="font-size:30px">2</b>
                        <img src="Sources/Images/logo.svg" height="90px" alt="">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <h3 class="text-center"><img src="https://img.icons8.com/ios/30/000000/league-of-legends.png"> League of Legends</h3>
            <div class="card col-12 bg-danger" style="padding:5px">
                <div class="row">
                    <div class="col-4 text-right">
                        <img src="Sources/Images/logo.svg" height="90px" alt="">
                        <b style="font-size:30px">2</b>
                    </div>
                    <div class="col-4 text-center">
                        <strong>LAU X LAU</strong>
                    </div>
                    <div class="col-4 text-left">
                        <b style="font-size:30px">3</b>
                        <img src="Sources/Images/logo.svg" height="90px" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="height:50px">

        </div>

    </section>


</div>
<div style="height:80px" class="col-12 bg-secondary">

</div>

<section  class="container" id="Contato">
    <div class="row">
        <div class="col-12">
            <h2 class="title text-secondary text-right">Fale conosco</h2>
        </div>
    </div>
    <div class="row">
        <div class=" col-lg-6">
            <div class="">
                <form class="form" method="post">
                    <div class="form-group">
                        <input class="input" placeholder="Nome" type="text" name="nome">
                    </div>
                    <div class="form-group">
                        <input class="input" placeholder="E-mail" type="email" name="nome">
                    </div>
            </div>

    </div>
    <div class="col-lg-5 offset-lg-1">
        <div class="form-group">
            <textarea class="input" name="Mensagem" placeholder="Mensagem" style="resize:none;width:100%;height:187px"></textarea>
        </div>

    </div>
    <div class="col-12">
            <div class="form-group">
                <button class="btn btn-block btn-lg btn-success text-dark" style="font-family: 'Patua One';height:80px;border-radius:2px" type="submit" name="enviar">Enviar  </button>
            </div>
            </form>
    </div>
</section>




<?php
include_once('Templates/footer.php');
?>
