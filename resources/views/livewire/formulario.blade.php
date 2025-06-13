<div>
    <div class="bg-white text-primary rounded-xl shadow-xl p-8 {{ $hiddenFormulario }}">
        <form method="POST" wire:submit="guardarSolicitud" class="space-y-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block mb-2 font-medium">Tipo de seguro</label>
                    <select wire:model="plan" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                        <option>Selecciona un plan</option>
                        <option>Plan Mundial</option>
                        <option>Europa Low Cost</option>
                        <option>Plan Local</option>
                    </select>
                    @error("plan")
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror

                </div>
    
                <div>
                    <label class="block mb-2 font-medium">Destino</label>
                    <select wire:model="destino" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                        <option>Selecciona destino</option>
                        <option>América del Norte</option>
                        <option>América del Sur</option>
                        <option>Europa</option>
                        <option>Asia</option>
                        <option>África</option>
                        <option>Oceanía</option>
                    </select>
                </div>
            </div>
    
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block mb-2 font-medium">Fecha de salida</label>
                    <input wire:model="fecha_salida" type="date" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                </div>
    
                <div>
                    <label class="block mb-2 font-medium">Fecha de regreso</label>
                    <input wire:model="fecha_retorno" type="date" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                </div>
            </div>
    
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="block mb-2 font-medium">Adultos</label>
                    <select wire:model="adultos" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                        <option>0</option>
                        <option selected>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4+</option>
                    </select>
                </div>
    
                <div>
                    <label class="block mb-2 font-medium">Menores (0-17)</label>
                    <select wire:model="menores" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                        <option selected>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4+</option>
                    </select>
                </div>
    
                <div>
                    <label class="block mb-2 font-medium">Mayores (65+)</label>
                    <select wire:model="mayores" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                        <option selected>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
            </div>
    
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="block mb-2 font-medium">Nombre completo</label>
                    <input wire:model="nombre_completo" type="text" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                </div>
    
                <div>
                    <label class="block mb-2 font-medium">Correo electrónico</label>
                    <input wire:model="email" type="email" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                </div>
                <div>
                    <label class="block mb-2 font-medium">Teléfono</label>
                    <input wire:model="telefono" type="text" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                </div>

            </div>
    
            {{-- <div>
                <label class="flex items-center">
                    <input type="checkbox" class="rounded text-tertiary focus:ring-tertiary">
                    <span class="ml-2">Acepto recibir información sobre promociones y servicios</span>
                </label>
            </div> --}}
    
            <button type="submit" class="w-full bg-tertiary hover:bg-secondary text-white font-bold py-4 px-6 rounded-lg text-lg transition duration-300">
                Solicitar cotización
            </button>
        </form>
    </div>
    
    <div class="e-card playing {{ $hiddenNotificacion }}">


        <div class="image"></div>
    
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    
        <div class="infotop flex flex-col justify-center items-center text-sm">
            <img src="{{ asset('images/logo_3.png') }}" class="w-[180px]" alt="Viaja protegido con nuestro seguro médico global">
            <p class="mt-5">Solicitud</p>
            <p>Enviada con Éxito!</p>
            <p>Nro.{{ date('Y') }}-{{ rand(1000, 9999) }}</p>
        </div>
    </div>
</div>


