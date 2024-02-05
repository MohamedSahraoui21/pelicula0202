<div>
    <x-button><i class="fas - fa-add mr-2"></i>Nueva</x-button>
    <x-dialog-modal maxWidth='4xl'>
        <x-slot name="title">
            Crear Pelicula

        </x-slot>
        <x-slot name="content">
            <x-label for="titulo">Titulo</x-label>
            <x-input type="text" placeholder="titulo..." class="w-full mb-3"></x-input>

            <x-label for="sinopsis">Sinopsis</x-label>
            <textarea class="w-full mb-3" placeholder="Sinopsis..." name="" id="sinopsis" cols="30" rows="10"></textarea>

            <x-label for="category_id">Categoria</x-label>
            <select id="category_id" class="w-full mb-3">
                <option value="">Selecciona una Categoria</option>
            </select>

            <x-label for="disponible">Disponible</x-label>
            <input type="checkbox" value="SI" id="disponible" class=" flex mb-3">


        </x-slot>
        <x-slot name="footer">
            Botones

        </x-slot>
    </x-dialog-modal>
</div>
