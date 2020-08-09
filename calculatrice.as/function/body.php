<?php
?>



<div class="container">
    <div class="monForm">
        <div class="titreForm">Le jeu de multiplication</div>
        <form id="mon_form">
            <input id="id" type="hidden" name="id">
            <div class="form-group">
                <h1>Voici votre défi du jour</h1>
                <div>
                    <label for="">nombre</label>
                    <input type="text">
                </div>
                <br>
                <div>
                    <label for=""></label>
                    <select name="" id="">
                        <option value="">+</option>
                        <option value="">*</option>
                        <option value="">/</option>
                        <option value="">-</option>

                    </select>
                </div>
                <br>
                <div>
                    <label for="">nombre deux</label>
                    <input type="text">
                </div>
            </div>
            <div class="form-group">
                <label for="number"></label>
                <input type="number" class="form-control" id="number" required
                       placeholder="Inscrivez votre réponse ici" name="number">
            </div>

            <button id="submit_ajouter" type="submit" class="btn btn-primary">Valider</button>

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
