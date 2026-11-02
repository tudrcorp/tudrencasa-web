<div>
    <div class="bg-white text-primary rounded-xl shadow-xl p-8 {{ $hiddenFormulario }}">
        <form wire:submit="guardarSolicitud" class="space-y-6">

            @error('formulario')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block mb-2 font-medium">Tipo de seguro</label>
                    <select wire:model="plan" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                        <option value="">Selecciona un plan</option>
                        <option value="Plan Mundial">Plan Mundial</option>
                        <option value="Europa Low Cost">Europa Low Cost</option>
                        <option value="Plan Local">Plan Local</option>
                    </select>
                    @error('plan')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-2 font-medium">Destino</label>
                    <select wire:model="destino" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                        <option value="">Selecciona destino</option>
                        <option value="América del Norte">América del Norte</option>
                        <option value="América del Sur">América del Sur</option>
                        <option value="Europa">Europa</option>
                        <option value="Asia">Asia</option>
                        <option value="África">África</option>
                        <option value="Oceanía">Oceanía</option>
                    </select>
                    @error('destino')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block mb-2 font-medium">Fecha de salida</label>
                    <input wire:model="fecha_salida" type="date" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                    @error('fecha_salida')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-2 font-medium">Fecha de regreso</label>
                    <input wire:model="fecha_retorno" type="date" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                    @error('fecha_retorno')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="block mb-2 font-medium">Adultos</label>
                    <select wire:model="adultos" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4+</option>
                    </select>
                    @error('adultos')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-2 font-medium">Menores (0-17)</label>
                    <select wire:model="menores" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4+</option>
                    </select>
                    @error('menores')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-2 font-medium">Mayores (65+)</label>
                    <select wire:model="mayores" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    @error('mayores')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="block mb-2 font-medium">Nombre completo</label>
                    <input wire:model="nombre_completo" type="text" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                    @error('nombre_completo')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-2 font-medium">Correo electrónico</label>
                    <input wire:model="email" type="email" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block mb-2 font-medium">Teléfono</label>
                    <input wire:model="telefono" type="text" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                    @error('telefono')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <button
                type="submit"
                wire:loading.attr="disabled"
                wire:target="guardarSolicitud"
                class="w-full h-14 bg-tertiary hover:bg-secondary text-white font-bold px-6 rounded-lg text-lg transition duration-300 disabled:opacity-70 disabled:cursor-not-allowed flex items-center justify-center"
            >
                <span wire:loading.remove wire:target="guardarSolicitud" class="leading-none">
                    Solicitar cotización
                </span>
                <span
                    wire:loading.flex
                    wire:target="guardarSolicitud"
                    class="hidden flex-row items-center justify-center gap-2 leading-none"
                >
                    <svg class="animate-spin h-5 w-5 shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span>Enviando solicitud...</span>
                </span>
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
