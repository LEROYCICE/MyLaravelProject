@extends('layouts.layout') 

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>  Apprendre la mathématique et l'informatique</h1>
          <h2>Je suis un jeune étudiant en Mathématiques passionné par
             la programmation informatique et le developpement web &amp mobile</h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">



    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>A propos de moi</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>

              Je suis un jeune étudiant en Mathématiques très motivé par la programmation et le dévéloppement
              web &amp mobile et qui pourra répondre à vos besoins que ce soit dans l'encadrement de vos enfants en Mathématiques - Physiques 
              ou dans la création de vos sites web de e-commerce ou de boutiques en ligne.. 

            </p>
            
        </div>

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Nous vous offrons plusieurs services qui sont accèssible à distance
            comme en présentiel <br>Voici quelques uns de nos services : </p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-triangle"></i></div>
              <h4>REPETITION en MATHS et en PHYSIQUES</h4>
              <p>Pour des questions d'encadrement des enfants dans les matières scientifiques du 
                niveau secondaire jusqu'à la licence ; nous sommes prêts à vous servir.
                <img src="assets/img/mth.jpg" class="img-fluid animated" >
              </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4>DEVELOPPEMENT WEB</h4>
              <p>Nous vous servirons dans la création des sites vitrines ; des sites de e-commerce ; des sites de boutiques en ligne.
                <img src="assets/img/dev.png" class="img-fluid animated" > </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"> <i class="bi bi-pencil-fill"></i></div>
              <h4>GRAPHISME</h4>
              <p>Nous sommes prêts à vous faire la conception de vos différentes affiches publicitaires.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-graph-up-arrow"></i></i></div>
              <h4>TRADING DES CRYPTOMONNAIES</h4>
              <p>Avez-vous bésoins d'une formation de qualité sur le trading des <span style="font-style: oblique; font-weight : bold; font-size : 15px">  cryptomonnaies </span>
                ou sur le fonctionnement de la nouvelle technologie <span style="font-style: oblique; font-weight : bold; font-size : 15px"> la blockchain</span> en général ?  <br>
                
                Nous sommes prêts à vous servir convenablement.
                <img src="assets/img/cryp.png" class="img-fluid animated" >
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contactez-nous par nos différents adresses ci-dessous:</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Localisation:</h4>
                <p>Klikamé,Lomé,TOGO</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>kokoukpomblawou@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Tél:</h4>
                <p>+228 79802867</p>
              </div>

            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{route('contact.store')}}" method="post" >
              @csrf
              @method('POST')

              @if (Session::has('Bien'))
                  <h3 style="color: green">{{Session::get('Bien')}}</h3>
              @endif
              @if (Session::has('Echec'))
              <h3 style="color: green">{{Session::get('Echec')}}</h3>
              @endif
            
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Votre Nom</label>
                  <input type="text" name="nom" class="form-control" id="name" required>
                  @error('nom') 
                    <h3 style="color: rgb(208, 40, 40)">{{ $message }}</h3>
                      
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Votre Email</label>
                  <input type="email" class="form-control" name="mail" id="email" required>
                  @error('mail') 
                    <h3 style="color: rgb(208, 40, 40)">{{ $message }}</h3>
                      
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="name">Sujet</label>
                <input type="text" class="form-control" name="sujet" id="subject" required>
                @error('sujet') 
                    <h3 style="color: rgb(208, 40, 40)">{{ $message }}</h3>
                      
                  @enderror
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
                @error('message') 
                    <h3 style="color: rgb(208, 40, 40)">{{ $message }}</h3>
                      
                  @enderror
              </div>
              <br> <br>

              <div class="text-center"><button type="submit" >Envoyer un message</button></div>

            </form>


          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->