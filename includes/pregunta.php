<?php

function pregunta($id, $pregunta)
{
    echo '
        <div class="pregunta">
            <p>' . $pregunta . '</p>

            <div class="pregunta_radio">
                <label class="noAcuerdo">No estoy de acuerdo</label>
                    <div class="opciones">
                    <input type="radio" name="' . $id . '" value="0">
                    <input type="radio" name="' . $id . '" value="0.25">
                    <input type="radio" name="' . $id . '" value="0.5" checked>
                    <input type="radio" name="' . $id . '" value="0.75">
                    <input type="radio" name="' . $id . '" value="1">
                    </div>
                <label class="acuerdo">Estoy de acuerdo</label>
            </div>
        </div>';
}
