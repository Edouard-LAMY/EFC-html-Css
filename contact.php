<?php $page='contact'; ?>

<?php include('./php/head.php'); ?>

    <?php include('./php/nav.php'); ?>

    <main>

        <section class="contact">

            <div class="container">

                <h1 class="card-title-actualite-info text-center">Nous contacter</h1>

                <form>

                    <div class="row justify-content-center">

                        <div class="form-group col-md-5 p-4">
                            <label for="name">Votre nom</label>
                            <input type="text" class="form-control" id="name" placeholder="Entrer votre nom">
                        </div>

                        <div class="form-group col-md-5 p-4">
                            <label for="mail">Votre e-mail</label>
                            <input type="email" class="form-control" id="mail" placeholder="Entrez votre adresse e-mail">
                        </div>

                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10 p-4">
                            <label for="message" class="form-label">Tapez votre message</label>
                            <textarea class="form-control" id="message" rows="10" placeholder="Tapez votre message"></textarea>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10 p-4">
                            <div class="d-grid gap-2 d-flex justify-content-md-end justify-content-center">
                                <button type="submit" class="btn btn-contact">Envoyer<span class="bi bi-arrow-right-circle"></span></button>
                            </div>
                        </div>
                    </div>


                </form>

            </div>

        </section>

    </main>

    

    





    <?php include('./php/footer.php'); ?>

    <script src="./js/bootstrap.js"></script>

