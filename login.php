    <!-- INICIO DE SESION !-->
    <div id="inicio-sesion">
        <p class="mt-20 text-center text-4xl font-bold tracking-wide text-gray-900">
            Bienvenido a la Secretaría
        </p>
        <p class="text-center text-4xl font-bold text-gray-900">
            de Salud de Coronel Suárez
        </p>
        <p class="text-center tracking-wide text-gray-900">
            Para ver la información sobre la vacunación inicie sesión
        </p>

    </div>
    <div class="flex items-center justify-center py-4 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">

            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="dni" class="sr-only">DNI</label>
                    <input id="dni" name="dni" type="number" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="DNI" autocomplete="off">
                </div>
                <div>
                    <label for="clave" class="sr-only">clave</label>
                    <input id="clave" name="clave" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blue-400 focus:border-blue-400 focus:z-10 sm:text-sm mb-2" placeholder="Contraseña" autocomplete="off">
                </div>

                <!-- Mensaje de error -------------------------------------------------------------->
                <div class="flex items-center bg-red-500 text-white text-sm font-bold px-4 py-3 <?php if ($mensaje_error == '') {
                                                                                                    echo 'invisible';
                                                                                                } ?>">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                    </svg>
                    <p><?php echo $mensaje_error; ?></p>
                </div>
            

                <br>
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2" id='btn-login' name="boton" value="login">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-white group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    Inicia Sesión
                </button>
            </div>
        </div>
    </div>
    </div>