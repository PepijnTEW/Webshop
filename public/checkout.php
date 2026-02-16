<?php
include "./includes/header.php";
include "./includes/nav.php";
?>
<main>
    <section class="section" id="checkout">
        <div class="content_wrapper" id="checkout_inner">
            <form id="checkout_form" action="/verwerk-formulier" method="post">
                <div>
                    <div>
                        <label for="aanhef">Aanhef:</label><br>
                        <select id="aanhef" name="aanhef" required>
                            <option value="">Kies aanhef</option>
                            <option value="dhr">Dhr.</option>
                            <option value="mevr">Mevr.</option>
                            <option value="andere">Anders</option>
                        </select>
                    </div>
                    <div>
                        <label for="voornaam">Voornaam:</label><br>
                        <input type="text" id="voornaam" name="voornaam" required>
                    </div>
                    <div>
                        <label for="tussenvoegsel">Tussenvoegsel:</label><br>
                        <input type="text" id="tussenvoegsel" name="tussenvoegsel" placeholder="bijv. van der">
                    </div>
                    <div>
                        <label for="achternaam">Achternaam:</label><br>
                        <input type="text" id="achternaam" name="achternaam" required>
                    </div>
                    <div>
                        <label for="email">E-mailadres:</label><br>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="telefoon">Telefoonnummer:</label><br>
                        <input type="tel" id="telefoon" name="telefoon" required>
                    </div>
                    <div>
                        <label for="geboortedatum">Geboortedatum:</label><br>
                        <input type="date" id="geboortedatum" name="geboortedatum" required>
                    </div>
                </div>
                <div>
                    <div>
                        <label for="straatnaam">Straatnaam:</label><br>
                        <input type="text" id="straatnaam" name="straatnaam" required>
                    </div>
                    <div>
                        <label for="huisnummer">Huisnummer:</label><br>
                        <input type="text" id="huisnummer" name="huisnummer" required>
                    </div>
                    <div>
                        <label for="postcode">Postcode:</label><br>
                        <input type="text" id="postcode" name="postcode" placeholder="1234AB" required>
                    </div>
                    <div>
                        <label for="land">Land:</label><br>
                        <select id="land" name="land" required>
                            <option value="">Kies land</option>
                            <option value="NL">Nederland</option>
                            <option value="BE">België</option>
                            <option value="DE">Duitsland</option>
                            <option value="FR">Frankrijk</option>
                        </select>
                    </div>
                    <div>
                        <input type="checkbox" id="voorwaarden" name="voorwaarden" required>
                        <label for="voorwaarden">Ik ga akkoord met de algemene voorwaarden</label>
                    </div>
                    <div>
                        <button class="button" type="submit">Versturen</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
<?php include "./includes/footer.php"; ?>
