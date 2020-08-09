<?php
?>



<div class="container">
    <div class="monForm">
        <div class="titreForm">Le jeu de multiplication</div>
        <form id="mon_form">
            <input id="id" type="hidden" name="id">
            <div class="form-group">
                <h1>Voici votre défi du jour</h1>


                <div class="ligne">
                    valeur 1 : <input type="number" id="v1">
                </div>
                <br>
                <div class="ligne">
                    valeur 2 : <input type="number" id="v2">
                </div>
                <br>
                <div class="ligne">
                    résultat : <input type="number" id="resultat">
                </div>
                <br>
                <div class="ligne">


                    <button type="button" id="bouton-multiplication">multiplication</button>


                </div>
                <script>
                    document.getElementById('bouton-multiplication').onclick = function () {
                        v1 = document.getElementById('v1').value;
                        v2 = document.getElementById('v2').value;
                        resultat = parseFloat(v1) * parseFloat(v2);
                        document.getElementById('resultat').value = resultat;
                    };

                </script>

        </form>

    </div>
    <p>

    </p>
    <div class="calculatrice">
        <table class="table table-hover">
            <thead class=" text-center">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Multiplication</th>
                <th scope="col">Reponse</th>
                <th scope="col">Correct</th>
            </tr>
            </thead>
            <tbody id="calculatrice-body"></tbody>
        </table>
    </div>
</div>


