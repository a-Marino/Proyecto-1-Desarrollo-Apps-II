<div class="centrado">
<div class="flex items-center justify-center py-8 px-10 sm:px-6 lg:px-10 border-2 border-blue-600 rounded-xl shadow-lg">
    <div class="max-w-md w-full space-y-8 p-10">

        <?php echo '<h1 class="text-4xl font-semibold mb-2">Hola ' . $apelnom . '!<h1>'; ?>

        <select name="vacunatorio" class="border border-gray-400 block py-2 px-4 rounded w-full shadow-md outline-none hover:border-blue-700" required>
            <option value=''>Seleccione Vacunatorio</option>
            <?php
            while ($registro = $resultado->fetch()) {
                $Id_vac = $registro['Id_vacunatorio'];
                echo "<option value=$Id_vac >  Vacunatorio N° $Id_vac  </option>";
            }

            ?>
        </select>

        <div class="botones-registro mt-5">
            <button type="submit" name="boton" value="sele_centro" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" id="btn-sele-centro">Seleccionar</button>
            <button type="submit" name="boton" value="logout" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" id="btn-salir">Salir</button>
        </div>

    </div>
</div>