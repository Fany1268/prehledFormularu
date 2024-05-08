<?php

$price = 100;

$cas = Time();

$datum = new DateTime();

$kolikatyDen = new DateTime();



//phpinfo()

?>

<!DOCTYPE html>
<html lang="cs-cz">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css" type="text/css" />
    <title>Document</title>
</head>
<body>
<header>
    <h1>Přehled formulářů</h1>
</header>


<main>


    <section>

        <P>Přidání formuláře je pomocí tagu FORM. Obsah vkládáme pomocí inputů. Odesílací tlačítko vytvoříme buď pomocí input typu submit nebo tagu button.</P>
        <h1>Formulář</h1>
        <form>
            <input type="text" name="first_name" placeholder="Křestní jméno"><br>
            <input type="text" name="second_name" placeholder="Příjmení"><br>
            <input type="password" name="password" placeholder="Heslo"><br>
            <input type="email" name="email" placeholder="E-mail"><br>
            <input type="date" name="date"><br>
            <!-- <input type="submit" value="Registrovat"> -->
            <button>Odeslat</button>
        </form>

        </br>
        </br>

        <p>V kódu máme uvedený skrytý input. Ten se používá v případě, že chcete s formulářem poslat nějakou skrytou informaci, která se vám propíše např. do emailu.
            Další je textarea pro zadání většího množství textu než do klasického inputu typu text.
        </p>
        <form>
            <input type="text" name="first_name" placeholder="Křestní jméno"><br>
            <input type="text" name="second_name" placeholder="Příjmení"><br>
            <input type="password" name="password" placeholder="Heslo"><br>
            <input type="email" name="email" placeholder="E-mail"><br>
            <input type="date" name="date"><br>
            <input type="hidden" name="form-type" value="kontakt">
            <textarea name="message" placeholder="Vaše zpráva"></textarea><br>
            <!-- <input type="submit" value="Registrovat"> -->
            <button>Odeslat</button>
        </form>

        </br>
        </br>

        <p>Další možností ve formuláři je roletka.</p>
        <select name="color[]" multiple>
            <option value="red">Červená</option>
            <option value="green">Zelená</option>
            <option value="yellow">Žlutá</option>
        </select><br>

        <p>Webová stránka - pokud multiple z kódu výše smažeme</p>
        <select name="color[]">
            <option value="red">Červená</option>
            <option value="green">Zelená</option>
            <option value="yellow">Žlutá</option>
        </select><br>


        <br>


        <p>Pokud potřebujete složitější výběr z roletky, tak můžete použít optgroup na “ohraničení” a pojmenování skupiny možností.
            Možnost selected udává, která hodnota bude ve výchozím načtení formuláře vybrána jako výchozí.
        </p>

        <select name="color[]">
            <optgroup label="hlavní barva">
                <option value="red">Červená</option>
                <option value="green">Zelená</option>
                <option value="yellow" selected>Žlutá</option>
            </optgroup>
            <optgroup label="barva okraje">
                <option value="red2">Červená</option>
                <option value="green2">Zelená</option>
                <option value="yellow2">Žlutá</option>
            </optgroup>
        </select><br>

        <br>

            <p>Do formuláře může přidat i radio buttony. Pokud mají stejné name, tak je možné zvolit jen jeden z nich.</p>
            <input type="radio" name="country" value="cr">ČR <br>
            <input type="radio" name="country" value="germany">Německo <br>
            <input type="radio" name="country" vaelu="portugal">Portugalsko <br>



            <p>
                Další možností jsou tzv. checkboxy pro výběr více možností najednou.
            </p>
            <input type="checkbox" value="tricko">Tričko zdarma <br>
            <input type="checkbox" value="zalozka">Záložka do knížky <br>
            <input type="checkbox" value="el-kniha">Elektronická kniha <br>
            <br>

       <br>

        <p>readonly - můžeme jen číst, nemůžeme měnit<br>
                autofocus - nastaví se kurzor po načtení stránky<br>
                disabled - není možné s elementem pracovat (ale je vidět)<br>
                required - povinné políčko
            </p>
        <form>
            <!-- readonly, autofocus, disabled, required -->
            <input type="text" name="first_name" placeholder="Křestní jméno" value="text" readonly><br>

            <input type="text" name="second_name" placeholder="Příjmení" autofocus><br>

            <input type="password" name="password" placeholder="Heslo" required><br>

            <input type="email" name="email" placeholder="E-mail"><br>

            <input type="date" name="date"><br>

            <input type="hidden" name="form-type" value="kontakt">

            <textarea name="message" placeholder="Vaše zpráva" required></textarea><br>

            <input type="checkbox" value="tricko" disabled>Tričko zdarma <br>
            <input type="checkbox" value="zalozka">Záložka do knížky <br>


            <p>
                Label znamená popisek. Můžeme ho použít místo placeholder. Propojení labelu a inputu děláme pomocí for a id.
            </p>
            <label for="firstName">Křestní jméno</label>
            <input type="text" name="first_name" id="firstName"><br>

            <p>
                Další dva typy inputů jsou typ number (kam můžeme zadávat pouze číslo a můžeme hodnoty omezit minimem a maximem) a url (kam je zapotřebí vždy zadat URL adresu).
            </p>
            <input type="number" name="weight" min="10" max="15"><br>
            <input type="url" value="https://www."><br>



    </section>

    </br>
    </br>

    <h2>Ceník</h2>
    <h2>Výpis v PHP do odstavce</h2>
    <p>Cena našich služeb je <?php echo $price; ?> Kč.</p>

    <p>Čas v sekundách od 1.1.1970 je <?php echo $cas; ?> sec.</p>

    <p>Dnešní datum je <?php echo($datum->format("d-m-Y H:i:s")); ?></p>

    <p>Dnes je <?php echo($kolikatyDen->format("w")); ?> den v týdnu</p>

    </br>
    </br>


    <section>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/TmV5kdlsBRo?si=ErZ38u-h0Bls8sLU"
            title="YouTube video player" frameborder="0" allow="accelerometer;
            autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    </section>


    </br>
    </br>


            <section>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3155.1
            425543334194!2d14.450991776897109!3d50.007993619122395!2m3!1f0!2f0!3f0!3m2
            !1i1024!2i768!4f13.1!3m3!1m2!1s0x470b916befaa126b%3A0x8f156fdb975517c0!2zUGF
            ww61ybsOta292YQ!5e1!3m2!1scs!2scz!4v1715152408380!5m2!1scs!2scz" width="400"
            height="300" style="border:0;" allowfullscreen=""
            loading="lazy" referrerpoli

            </section>
</main>


<footer></footer>
</body>
</html>
rpolicy="no-referrer-when-downgrade"></iframe>